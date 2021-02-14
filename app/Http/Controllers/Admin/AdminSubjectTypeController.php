<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubjectType;
use Illuminate\Http\Request;

class AdminSubjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = SubjectType::all();
        return view('admin.subjecttype.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'unique:subject_types,name'
        ]);
        $type = new SubjectType();
        $type->name = $request->name;
        $type->save();
        return redirect()->back()->with('success','Subject Type Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = SubjectType::findOrFail($id);
        $types = SubjectType::all();
        return view('admin.subjecttype.edit',compact('types','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'unique:subject_types,name,'.$id,
        ]);
        $type = SubjectType::findOrFail($id);
        $type->name = $request->name;
        $type->update();
        return redirect()->back()->with('success','Subject Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = SubjectType::findOrFail($id);
        $type->delete();
        return redirect(route('subjecttypes.create'))->with('success','Subject Type Deleted');
    }
}
