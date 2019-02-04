<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;

use App\Models\Region;
use App\Models\Subregion;
use App\Models\City;
use App\Models\Relationship;
use App\Models\Status;
use Illuminate\Support\Facades\Input;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all lecturers / tutors
        $lecturers = Lecturer::all();

        // return list view
        return view('lecturers.index')->with('lecturers', $lecturers);
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
        return view('lecturers.create')->with(['regions' => $regions, 'subregions' => $subregions, 'relationships' => $relationships, 'towns' => $towns]);
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

        $data = view('lecturers.ajax-select', compact('subregions'))->render();

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

        $data = view('lecturers.ajax-select', compact('subregions'))->render();

        return response()->json(['options'=>$data]);
      }
    }
}
