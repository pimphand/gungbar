<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationAccount;
use Illuminate\Support\Facades\Crypt;
use Auth;
use User;
use Str;

class AuthController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('backend.login');
    }
    public function login_post(Request $request)
    {
        // dd($request->all());

        if (Auth::attempt($request->only('email', 'password'))) {
            # code...

            if (!Auth::user()->email) {

                return redirect('/login')->with('warning', 'Email and Password is wrong');
            } else {
                return redirect('/dashboard');
            }
            return redirect('/login')->with('warning', 'Email and Password is wrong');
        }

        return redirect('/login')->with('warning', 'Email and Password is wrong');
    }


    public function updatemyprofile(Request $request)
    {
        unset($request['_token']);

        if ($request->hasFile('filefoto')) {

            $request->file('filefoto')->move('images/profile', $request->file('filefoto')->getClientOriginalName());
            DB::table('users')

                ->where('id', auth()->user()->id)
                ->update([

                    'name' => $request->name,
                    'photo' =>  env('APP_URL') . 'images/profile/' . $request->file('filefoto')->getClientOriginalName()

                ]);

            return back()->with('success', 'Ubah profile berhasil');
        } else {
            DB::table('users')

                ->where('id', auth()->user()->id)
                ->update($request);

            return back()->with('success', 'Ubah profile berhasil');
        }

        return back()->with('error', 'Ubah profile berhasil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Sign Out');
    }

    // {{ START REGISTER }}

    public function register_personal(Request $request)
    {

        $user = DB::table('users')->where('email', $request->email)->orWhere('phone', $request->phone);
        if ($user->count() > 0) {
            # code...
            return back()->with('error', 'Email dan Nomor Telephone yang anda masukkan sudah terdaftar');
        } else {

            if ($request->hasFile('photo')) {

                $request->file('photo')->move('uploads/profile/', $request->file('photo')->getClientOriginalName());
                $user_id = DB::table('users')->insertGetId([

                    "title" => $request->title,
                    "name" => $request->firstname . ' ' . $request->lastname,
                    "firstname" =>  $request->firstname,
                    "lastname" =>  $request->lastname,
                    "email" => $request->email,
                    "email_alternatif" => $request->email_alternatif,
                    "phone" => $request->phone,
                    "password" => bcrypt($request->password),
                    "role" => 0,
                    "pic" => 0,
                    "account_type" => 'personal',
                    "photo" =>  'uploads/profile/' . $request->file('photo')->getClientOriginalName(),

                ]);

                DB::table('users_company')->insert([
                    "user_id" => $user_id,
                    "jobdesk" => $request->jabatan,
                    "company_email" => $request->email_company,
                    "company_name" => $request->nama_perusahaan,
                    "company_phone" => $request->phone_company,
                    "country" => $request->negara,
                    "province" => $request->provinsi,
                    "category" => $request->kategori,
                    "distrik" => $request->distrik,
                    "company_address" => $request->alamat_perusahaan,
                    "city" => $request->kota,
                    "postal_code" => $request->kode_pos,
                    "alamat_korespondensi" => $request->alamat_korespondensi,
                    "negara_korespondensi" => $request->negara_korespondensi,
                    "provinsi_korespondensi" => $request->provinsi_korespondensi,
                    "kota_korespondensi" => $request->kota_korespondensi,
                    "distrik_korespondensi" => $request->distrik_korespondensi,
                ]);
                if ($request['sertifikasi']) {
                    # code...
                    for ($i = 0; $i < count($request['sertifikasi']); $i++) {
                        # code...
                        DB::table('users_sertifikasi')->insert([
                            "user_id" => $user_id,
                            "sertifikasi" => $request['sertifikasi'][$i]
                        ]);
                    }
                }
                Mail::to($request->email, 'Aktivasi Akun')->send(new ActivationAccount($request->name, 'Personal', Crypt::encryptString($user_id)));
                return back()->with('success', 'Pendaftaran berhasil, Silahkan cek email untuk activasi akun anda');
            }
        }
    }
    public function register_group(Request $request)
    {

        $user = DB::table('users')->where('email', $request->email)->orWhere('phone', $request->phone);
        if ($user->count() > 0) {
            # code...
            return back()->with('error', 'Email dan Nomor Telephone yang anda masukkan sudah terdaftar');
        } else {

            if ($request->hasFile('photo')) {
                $pass_random = Str::random(25);
                $request->file('photo')->move('uploads/profile/', $request->file('photo')->getClientOriginalName());
                $user_id = DB::table('users')->insertGetId([

                    "title" => $request->title,
                    "firstname" => $request->firstname,
                    "lastname" => $request->lastname,
                    "email" => $request->email,
                    "name" => $request->firstname . ' ' . $request->lastname,
                    "phone" => $request->phone,
                    "role" => 0,
                    "pic" => 1,
                    "account_type" => "group",
                    "password" => bcrypt($pass_random),
                    "photo" =>  'uploads/profile/' . $request->file('photo')->getClientOriginalName(),

                ]);
                DB::table('users_company')->insert([
                    "user_id" => $user_id,
                    "company_name" => $request->nama_perusahaan,
                    "company_address" => $request->alamat_perusahaan,
                    "company_phone" => $request->phone_company,
                    "pic_name" => $request->pic_name,
                    "category_industry" => $request->category_industry,
                    "country" => $request->negara,
                    "province" => $request->provinsi,
                    "category" => $request->kategori,
                    "distrik" => $request->distrik,
                    "city" => $request->kota,
                    "postal_code" => $request->kode_pos,
                ]);

                for ($i = 0; $i < count($request['nama_depan_anggota']); $i++) {
                    # code...
                    DB::table('users_member')->insert([
                        "user_id_pic" => $user_id,
                        "nama" => $request['nama_depan_anggota'][$i] . ' ' . $request['nama_depan_anggota'][$i],
                        "company_name" => $request->nama_perusahaan,
                        "email_kantor" => $request->company_email,
                        "business_title" =>  $request->category_industry,
                        "email_pribadi" => $request['email_anggota'][$i],
                        "phone" => $request['phone_anggota'][$i],
                        "phone_company" => $request['phone_company_anggota'][$i],
                        "jobdesk" => $request['jabatan_anggota'][$i],
                    ]);
                }

                return back()->with('success', 'Pendaftaran berhasil, Silahkan cek email untuk activasi akun anda');
            }
        }
    }

    public function activation_account($encrypt)
    {

        $user_id = Crypt::decryptString($encrypt);
        $user = \App\User::find($user_id);
        auth()->login($user, true);
        return redirect('profile');
    }
}
