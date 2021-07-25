<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Rule;
use App\RuleCategory;
use App\Member;

class ScoreController extends Controller
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
        $events = Event::query()
            ->orderBy('started_at', 'desc')
            ->get();
      
        $members = Member::query()->get();

        return view('score.create',compact('events','members'));
    }

    public function findRuleWithCategoryId($id)
    {
        $rules = array();

        $rulesCategories = RuleCategory::where('categories_id',$id)->get();      
        
        foreach($rulesCategories as $rp)
        {
            $rule = Rule::where('id',$rp->rules_id)->get();
            array_push($rules,$rule);
        }

        return response()->json($rules);
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