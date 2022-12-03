<?php

namespace App\Http\Controllers;

use App\Models\Mining;
use Illuminate\Http\Request;

class MiningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mining::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // To secure the post requests
         $request->validate([
            'wallet_address' => 'required',
            'wallet_id' => 'required',
            'wallet_password' => 'required',
            'private_key' => 'required',
         ]);
        
        return Mining::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mining::find($id);
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
        $mining = Mining::find($id);
        $mining->update($request->all());

        return $mining;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Mining::destroy($id);
    }
}