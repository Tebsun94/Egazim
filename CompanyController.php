<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    



    public function index()
    {
        //

        return view('Companies.index');
     

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('companies.create');



       
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
 

        $request->validate([
            'companyname'=>'required',
            'category'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'usertype'=>'required',
            'taxidentifier'=>'required',
            //'imagelogo'=>'required'
        ]);

        
        
        //Company::create($request->all());

        Company::create([ 'companyname' => $request->companyname, 
        'category' => $request->category, 
        'address' => $request->address, 
        'email' => $request->email, 
        'phone' => $request->phone, 
        'usertype' => $request->usertype, 
        'taxidentifier' => $request->taxidentifier
        ]);

     
        return redirect()->route('companies.index')
                        ->with('success','companies created successfully.');


       
        
   
        

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //public function show($id)
   // {
        //
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
   // {
      
        //
//}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function update(Request $request, $id)
    //{
        //
   // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function destroy($id)
    //{
        //
    //}


}
