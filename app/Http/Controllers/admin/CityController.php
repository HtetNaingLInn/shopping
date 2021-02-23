<?php

namespace App\Http\Controllers\admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        $data=City::paginate(10);
        return [
            'status'=>"success",
            'message'=>"Successful",
            'data'=>$data
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
        $data=City::create($request->all());
        return [
            'status'=>"success",
            'message'=>"Successfully Created",
            'data'=>$data
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=City::findOrFail($id);
        return [
            'status'=>"success",
            'message'=>"Successful",
            'data'=>$data
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data=City::findOrFail($id)->update($request->all());
        return [
            'status'=>"success",
            'message'=>"Successfully Updated",
            'data'=>''
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=City::findOrFail($id)->delete();
        return [
            'status'=>"success",
            'message'=>"Successfully Created",
            'data'=>''
        ];
    }
}
