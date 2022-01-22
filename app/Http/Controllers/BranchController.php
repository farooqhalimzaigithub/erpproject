<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Validator;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['branches']=Branch::all();
        return view('free_configuration.branch.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('free_configuration.branch.create');
    
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
             'branch_name' => 'required|min:3',
        // 'level_description' => 'required|min:5',
    ]);
        if ($validator->fails())
    {
         return back()->withErrors($validator);
    }else{
        $branch=Branch::create($request->all());
        return redirect()->route('branches.index');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $data['branch']=Branch::find($id);
         return view('free_configuration.branch.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $branch=Branch::find($id);
      $branch->branch_name=$request->branch_name;
      $branch->phone_number=$request->phone_number;
      $branch->address=$request->address;
      $branch->save();
       return redirect()->route('branches.index')->with('info','Data Update successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Branch::find($id)->delete();
           return redirect()->route('branches.index')->with('error','Data Delete Successfully');
    }
}
