<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Rule;
use App\RuleCategory;
use App\Member;

class ScoreController extends Controller
{

    public function index()
    {
        //
    }

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

    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

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
