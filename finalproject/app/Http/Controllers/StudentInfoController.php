<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $studentinfo = new StudentInfo();

        // $studentinfo->idNo = "C19-0204";
        // $studentinfo->firstName = "Lance";
        // $studentinfo->middleName = "Razo";
        // $studentinfo->lastName = "Tagadan";
        // $studentinfo->suffix = "";
        // $studentinfo->course = "BSIT";
        // $studentinfo->year = 3;
        // $studentinfo->birthDate = "2000-03-27";
        // $studentinfo->gender = "Male";

        // $studentinfo->save();

        // echo "Successfully Saved in the Database";

        // $studentinfo = StudentInfo::where('sno', 1)
        // ->update(['firstName'=> 'Lance Gilbert']);
        // echo "Data has been successfully Updated";

        $studentinfo = StudentInfo::all();
        return $studentinfo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
