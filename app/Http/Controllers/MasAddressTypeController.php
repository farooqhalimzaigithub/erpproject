<?php

namespace App\Http\Controllers;

use App\Models\MasAddressType;
use Illuminate\Http\Request;
use Validator;

class MasAddressTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mas_address_types']=MasAddressType::all();
        return view('free_configuration.mas_address_type.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('free_configuration.mas_address_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
             'address_type_name' => 'required|min:3',
        // 'level_description' => 'required|min:5',
    ]);
        if ($validator->fails())
    {
         return back()->withErrors($validator);
    }else{

        $branch=MasAddressType::create($request->all());
        return redirect()->route('mas_address_types.index');
    }
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasAddressType  $masAddressType
     * @return \Illuminate\Http\Response
     */
    public function show(MasAddressType $masAddressType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasAddressType  $masAddressType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['mas_address_type']=MasAddressType::find($id);
         return view('free_configuration.mas_address_type.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasAddressType  $masAddressType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $mas_address_type=MasAddressType::find($id);
      $mas_address_type->address_type_name=$request->address_type_name;
      $mas_address_type->short_name=$request->short_name;
      $mas_address_type->description=$request->description;
      $mas_address_type->save();
       return redirect()->route('mas_address_types.index')->with('info','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasAddressType  $masAddressType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      MasAddressType::find($id)->delete();
           return redirect()->route('mas_address_types.index')->with('error','Data Delete Successfully');
    }
}
