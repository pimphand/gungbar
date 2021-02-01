<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


class MemberController extends Controller
{
    //  
    public function member_anggota(){

        $anggota = DB::table('users_member')->where('user_id_pic', auth()->user()->id);
        return view('frontend.member.member_anggota', [
            "anggota" => $anggota->get()
        ]);
    }

    public function create_anggota_group(Request $request){
        
        $pass_random = Str::random(25);
        $user = DB::table('users')->where('email', $request->email);
        if ($user->count() > 0) {
            # code...
            return back()->with('warning', 'Email yang anda tambahkan sudah terdaftar');
        } else {
            $user_id = DB::table('users')->insertGetId([

                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "role" => 0,
                "pic" => 0,
                "account_type" => "group",
                "password" => bcrypt($pass_random),

            ]);

            DB::table('users_member')->insert([
                "user_id" => $user_id,
                "user_id_pic" => auth()->user()->id,
                "nama" => $request->name,
                "alamat_korespondensi" => $request->alamat_korespondensi, 
                "email_kantor" => auth()->user()->email,
                "email_pribadi" => $request->email,
                "phone" => $request->phone,
                "business_title" => $request->business_title,
            ]);
            
            return back()->with('success', 'Data anggota berhasil  ditambahkan');

        }
    }

    public function member_anggota_id($user_id){
        return DB::table('users')
        ->join('users_member', 'users_member.user_id', '=', 'users.id')
        ->where('users.id', $user_id)
        ->select('users.*', 'users_member.*')
        ->get();
    }

    public function update_anggota(Request $request){
        

        DB::table('users')->where('id', $request->user_id)->update([

            "name" => $request->nama,
            "email" => $request->email,
            "phone" => $request->phone,   

        ]);


        DB::table('users_member')->where('user_id', $request->user_id)->update([

            "nama" => $request->nama,   
            "alamat_korespondensi" => $request->alamat_korespondensi,  
            "email_pribadi" => $request->email,
            "phone" => $request->phone,
            "business_title" => $request->business_title,

        ]);
        return back()->with('success', 'Berhasil Ubah data anggota');

    }

    public function delete_anggota($user_id){
        DB::table('users')->where('id', $user_id)->delete();
        DB::table('users_member')->where('user_id', $user_id)->delete();
        return back()->with('success', 'Berhasil hapus anggota');
    }
}
