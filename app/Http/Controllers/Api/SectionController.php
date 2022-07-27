<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function Index()
    {
        $section = Section::latest()->get();
        return response()->json($section);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'class_id' => 'required',
            'section_name' => 'required',
        ]);

        Section::insert([
            'class_id' => $request->class_id,
            'section_name' => $request->section_name,
        ]);
        return response('Section insert successfully');
    }

    public function Edit($id)
    {   
        $section = Section::findOrFail($id);
        return response()->json($section);
    }

    public function Update(Request $request, $id)
    {
       Section::findOrFail($id)->update([
            'class_id' => $request->class_id,
            'section_name' => $request->section_name,
       ]);

       return response('Section successfully updated');
    }

    public function Delete($id)
    {
        Section::findOrFail($id)->delete();
        return response('Section successfully delete');

    }

}
