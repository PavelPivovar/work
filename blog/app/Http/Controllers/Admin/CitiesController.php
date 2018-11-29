<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;

class CitiesController extends Controller
{
    public function index()
    {
        $city = City::all();
        return view('admin.city.index', ['city' => $city]);
    }

    public function create()
    {
        return view('admin.city.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_city' => 'required'
        ]);
        City::create($request->all());
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = City::find($id);
        return view('admin.city.edit', ['city' => $city]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_city' => 'required'
        ]);
        $city = City::find($id);

        $city->update($request->all());

        return redirect()->route('cities.index');

    }

    public function destroy($id)
    {
        City::find($id)->delete();
        return redirect()->route('cities.index');
    }
}
