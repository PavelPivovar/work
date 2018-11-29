<?php

namespace App\Http\Controllers;

use App\Company;
use App\Profession;
use App\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\City;
use App\Http\Controllers\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $company = Company::latest()->paginate(5);
        return view('company.index', ['company'=>$company]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $profession = Profession::all();
        $rubric = Rubric::all();
        $city = City::all();
        return view('company.create', ['city'=>$city, 'rubric'=>$rubric, 'profession'=> $profession]);
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
            'name' =>'required',
            'phone'   =>  'required',
            'company'  =>  'required',
            'profession_id' =>  'required',
            'rubric_id' =>  'required',
            'position' =>  'required',
            'site' =>  'required',
            'number' =>  'required',
            'city_id' =>  'required',
            'email' =>  'required',
            'password' =>  'required',
        ]);
        /*dd($request->all());*/
        Company::create($request->all());
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $profession = Profession::all();
        $rubric = Rubric::all();
        $city = City::all();
        return view('company.edit',['city'=>$city, 'rubric'=>$rubric, 'profession'=> $profession, 'company' => $company]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $profession = Profession::all();
        $rubric = Rubric::all();
        $city = City::all();
        $company->update($request->all());
        return redirect()->route('company.index',['city'=>$city, 'rubric'=>$rubric, 'profession'=> $profession]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index')->with('success','companies deleted successfully');
    }


}
