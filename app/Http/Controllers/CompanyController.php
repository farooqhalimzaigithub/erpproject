<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['companies']=Company::all();
        return view('free_configuration.company.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('free_configuration.company.create');
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
             'company_name' => 'required|min:3',
        // 'level_description' => 'required|min:5',
    ]);
        if ($validator->fails())
    {
         return back()->withErrors($validator);
    }else{
        $branch=Company::create($request->all());
        return redirect()->route('companies.index');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data['company']=Company::find($id);
         return view('free_configuration.company.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company=Company::find($id);
      $company->company_name=$request->company_name;
      $company->company_type=$request->company_type;
      $company->official_email=$request->official_email;
      $company->fax_num=$request->fax_num;
      $company->official_phone=$request->official_phone;
      $company->official_mobile=$request->official_mobile;
      $company->website_address=$request->website_address;
      $company->description=$request->description;
      $company->save();
       return redirect()->route('companies.index')->with('info','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Company::find($id)->delete();
           return redirect()->route('companies.index')->with('error','Data Delete Successfully');
    }
}
