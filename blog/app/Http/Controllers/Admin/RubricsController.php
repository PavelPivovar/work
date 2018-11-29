<?php

namespace App\Http\Controllers\Admin;

use App\Rubric;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricsController extends Controller
{
    public function index()
    {
        $rubric = Rubric::all();
        return view('admin.rubric.index',['rubric' => $rubric]);
    }

    public function create()
    {
        return view('admin.rubric.create');
    }

    public function store(Request $request)
    {

        Rubric::create($request->all());
        return redirect()->route('rubrics.index');
    }

    public function edit($id)
    {
        $rubric = Rubric::find($id);
        return view('admin.rubric.edit',['rubric' => $rubric]);
    }

    public function update(Request $request, $id)
    {
        $rubric = Rubric::find($id);
        $rubric->update($request->all());

        return redirect()->route('rubrics.index');
    }

    public function destroy($id)
    {
        Rubric::find($id)->delete();
        return redirect()->route('rubrics.index');
    }

}
