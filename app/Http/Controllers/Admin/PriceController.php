<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;


class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['price'] = Price::all();

        return view('admin.page.price.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.price.create');
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
        'nama_member'=> 'required|string',
        'price'=> 'required|string',
        'discount'=> 'required|integer',
        ]);

            $data=new Price();
            $data->nama_member = $request->nama_member;
            $data->price = $request->price;
            $data->discount = $request->discount;
            $data->save();

            return redirect()->route('price');
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
    public function edit($id)
    {
        $data = Price::findOrFail($id);
        return view('admin.page.price.edit')->with([
        'price' => $data
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
        $data = Price::findOrFail($id);
        $data->nama_member = $request->nama_member;
        $data->price = $request->price;
        $data->discount = $request->discount;
        $data->save();

        return redirect()->route('price');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Price::findOrFail($id);
        $data ->delete();

        return redirect()->route('price');
    }
}
