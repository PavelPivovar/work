<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\Profession;
use App\Rubric;
use App\City;

class CompaniesController extends Controller
{
    public function index()
    {
        $company = Company::latest()->paginate(5);
        return view('admin.post.index', ['company'=>$company]);
    }
    public function create()
    {
        $profession = Profession::all();
        $rubric = Rubric::all();
        $city = City::all();
        return view('admin.post.create', ['city'=>$city, 'rubric'=>$rubric, 'profession'=> $profession]);
    }

    public function store(Request $request)
    {
       /* $this->validate($request, [
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
        ]);*/
        /*dd($request->all());*/
        Company::create($request->all());
        return redirect()->route('companies.index');
    }

    public function edit(Company $company)
    {
        $profession = Profession::all();
        $rubric = Rubric::all();
        $city = City::all();
        return view('admin.post.edit', ['city'=>$city, 'rubric'=>$rubric, 'profession'=> $profession, 'company' => $company]);
    }


    public function update(Request $request, Company $company)
    {
        $profession = Profession::all();
        $rubric = Rubric::all();
        $city = City::all();
        $company->update($request->all());
        return redirect()->route('companies.index',['city'=>$city, 'rubric'=>$rubric, 'profession'=> $profession]);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success','companies deleted successfully');
    }
}
