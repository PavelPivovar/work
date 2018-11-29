<?php

namespace App\Http\Controllers\Admin;

use App\Profession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionsController extends Controller
{
    public function index()
    {
        $prof = Profession::all();
        return view('admin.professions.index', ['prof' => $prof]);
    }

    public function create()
    {
        return view('admin.professions.create');
    }

    public function store(Request $request)
    {
        Profession::create($request->all());
        return redirect()->route('professions.index');
    }

    public function edit(Request $request, $id)
    {
        $prof = Profession::find($id);
        return view('admin.professions.edit', ['prof' => $prof]);

    }

    public function update(Request $request, $id)
    {
        $prof = Profession::find($id);
        $prof->update($request->all());
        return redirect()->route('professions.index');
    }

    public function destroy($id)
    {
        Profession::find($id)->delete();
        return redirect()->route('professions.index');
    }


}
