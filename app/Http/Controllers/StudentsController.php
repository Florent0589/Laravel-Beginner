<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Student;

use App\Models\Region;
use App\Models\Subregion;
use App\Models\City;
use App\Models\Relationship;
use App\Models\Status;
use Illuminate\Support\Facades\Input;

class StudentsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('last_name', 'asc')->paginate(9);

         $pending = count(Student::where('status_id', Status::PENDING)->get());
         $active  =  count(Student::where('status_id', Status::ACTIVE)->get());
         $deleted =  count(Student::where('status_id', Status::DELETED)->get());
         $not_verified = count(Student::where('status_id', Status::NOT_VERIFIED)->get());

        return  view('students.index')->with(['students' => $students,
                                               'pending' => $pending,
                                               'active'  => $active,
                                               'deleted' => $deleted,
                                               'not_verified' => $not_verified]);
    }

    /**
     * return list of student
     */
    public function studentlist(){

        // get all student
        $student = Student::orderBy('last_name', 'asc')->paginate(3);; 

        // return student index
        return view('students.studentlist')->with('students', $student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::orderBy('name', 'asc')->pluck('name', 'id');

     $subregions = Subregion::orderBy('name', 'asc')->pluck('name', 'id');

     $towns = City::orderBy('name', 'asc')->pluck('name', 'id');

     
     $relationships = Relationship::orderBy('name', 'asc')->pluck('name', 'id');
    
        // return form for student application
        return view('students.create')->with(['regions' => $regions, 'subregions' => $subregions, 'relationships' => $relationships, 'towns' => $towns]);
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
    /**
     * return statastics view
     */
    public function statistics(){

        //return 1235;
        //return create view
        return view('students.statistics');
    }
    /**
     * return search view
     */
    public function search()
    {

        //return search view
        return view('students.search');
    }

    /**
     * Show the application selectSubregion.
     * for ajax drill down route
     * @return \Illuminate\Http\Response
     */

    public function selectSubregion()
    {

      $region_id = Input::get('region_id');

      if ($region_id)
      {
          $subregions = Subregion::where('region_id',$region_id)->pluck("name","id");

        $data = view('students.ajax-select', compact('subregions'))->render();

        return response()->json(['options'=>$data]);
      }

    }

    /**
     * Show the application selectSubregion.
     * for ajax drill down route
     * @return \Illuminate\Http\Response
     */

    public function selectPermanentSubregion()
    {

      $region_id = Input::get('permanent_region_id');

      if ($region_id)
      {
          $subregions = Subregion::where('region_id',$region_id)->pluck("name","id");

        $data = view('students.ajax-select', compact('subregions'))->render();

        return response()->json(['options'=>$data]);
      }

    }
}
