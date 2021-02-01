<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserCompany;
use App\Models\UserGrup;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPersonal()
    {
        $data = UserCompany::with('users')->get();
        return view('admin.page.user.index_personal')->with([
            'data' => $data
        ]);
    }

    public function indexGrup()
    {
        $data = UserGrup::with('users')->get();
        return view('admin.page.user.index_grup')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPersonal($id)
    {
        $data = UserCompany::with('users')->findOrFail($id);
        dd($data);
        return view('admin.page.user.personal_edit')->with([
            'data' => $data
        ]);

    }
    public function editGrup($id)
    {
        $data =  User::with('userGrup')->findOrFail($id);
        // dd($data);
        return view('admin.page.user.grup_edit')->with([
            'data' => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePersonal(Request $request, $id)
    {
        $data = User::with('userCompany')->findOrFail($id);

        $data->title = $request->title;
        $data->name =$request->firstname.' '.$request->lastname;
        $data->firstname =  $request->firstname;
        $data->lastname =  $request->lastname;
        $data->email = $request->email;
        $data->email_alternatif =$request->email_alternatif;
        $data->phone = $request->phone;
        // $data->password => bcrypt($request->password);
        $data->role = 0;
        $data->pic = 0;
        $data->account_type = 'personal';
        // $data->photo =  'uploads/profile/'.$request->file('photo')->getClientOriginalName();

        $data->save();

        return redirect()->route('personal');
    }

    public function updateGrup(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
