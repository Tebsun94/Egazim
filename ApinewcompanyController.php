<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\company;


class ApinewcompanyController extends Controller

{
    //

    public function getAllcompany(){
     
    
        $company = company::get()->toJson(JSON_PRETTY_PRINT);
        //dd ($company);
        return response($company, 200);
      }

      public function createcompany(Request $request) {
        $company = new company;
        $company->companyname = $request->companyname;
        $company->category = $request->category;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->usertype = $request->usertype;
        $company->taxidentifier = $request->taxidentifier;
        $company->imagelogo = $request->imagelogo;
        $company->save();


        return response()->json([
            "message" => "Company created"
        ], 201);

      }
      public function getcompany($id) {
        // logic to get a student record goes here

        if (company::where('id', $id)->exists()) {
          $company = company::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($company, 200);
        } else {
          return response()->json([
            "message" => "company not found"
          ], 404);
        }


        
      }
      public function updatecompany(Request $request, $id) {
        if (company::where('id', $id)->exists()) {
            $company = company::find($id);
            $company->companyname = is_null($request->companyname) ? $company->companyname : $request->companyname;
            $company->category = is_null($request->category) ? $company->category : $request->category;
            $company->email = is_null($request->email) ? $company->email : $request->email;
            $company->address = is_null($request->address) ? $company->address : $request->address;
            $company->phone = is_null($request->phone) ? $company->phone : $request->phone;
            $company->usertype = is_null($request->usertype) ? $company->usertype : $request->usertype;
            $company->taxidentifier = is_null($request->taxidentifier) ? $company->taxidentifier : $request->taxidentifier;
            $company->imagelogo = is_null($request->imagelogo) ? $company->imagelogo : $request->imagelogo;
            
            $company->save();
    
            return response()->json([
                "message" => "Company  records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Company  not found"
            ], 404);
            
        }
        }
        public function deletecompany ($id) {
            // logic to delete a company record goes here
  
            if(company::where('id', $id)->exists()) {
              $company = company::find($id);
              $company->delete();
      
              return response()->json([
                "message" => "Company deleted"
              ], 202);
            } else {
              return response()->json([
                "message" => "Company not found"
              ], 404);
            }
          }
}
