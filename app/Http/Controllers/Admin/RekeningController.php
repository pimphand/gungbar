<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountBank;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rekening'] = AccountBank::all();
        // dd($data);
        return view('admin.page.rekening.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.rekening.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bank_name' => 'required|string',
            'bank_branch'=>'required|string',
            'bank_account_number'=>'required|string',
            'bank_account_name'=>'required|string',
        ]);
        // AccountBank::create([
        $data = new AccountBank();
        $data->bank_name = $request->bank_name;
        $data->bank_branch = $request->bank_branch;
        $data->bank_account_name = $request->bank_account_name;
        $data->bank_account_number = $request->bank_account_number;
        $data->save();
        // ]);

        return redirect()->route('rekening')->with(['message' => 'input data berhasil']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = AccountBank::findOrFail($id);
        return view('admin.page.rekening.edit')->with([
                    'rekening' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = AccountBank::findOrFail($id);
        $data->bank_name = $request->bank_name;
        $data->bank_branch = $request->bank_branch;
        $data->bank_account_number = $request->bank_account_number;
        $data->bank_account_name = $request->bank_account_name;
        $data->save();

        return redirect()->route('rekening');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AccountBank::findOrFail($id);
        $data ->delete();

        return redirect()->route('rekening');
    }
}
