<?php

namespace App\Http\Controllers;
use App\Category;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Event::query()
            ->orderBy('started_at', 'desc')
            ->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();
        return view('events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $category = $request->get('categories_id');
        $data = $request->all();
        $event = Event::create($data);
        return redirect()->route('events.index')->with("success_toastr","Evento criado com sucesso!");
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
        $event = \App\Event::findOrFail($id);
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        return view('events.edit', compact('event','categories'));
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
        $data = $request->all();
        $data['started_at'] = new \DateTime($data['started_at']);
        $data['ended_at'] = new \DateTime($data['ended_at']);
        $event = \App\Event::findOrFail($id);

        try{
            $event->update($data);

        }catch(QueryException $exception){
            $msg = 'erro';
            return redirect()->back()->with("error_toastr","Erro na edição do evento!");
        }

        return redirect()->route('events.index')->with("success_toastr","Evento editado com sucesso!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($event)
    {
        $event = \App\Event::findOrFail($event);
        $event->delete();
        return redirect()->route('events.index')->with("success_toastr","Evento excluido com sucesso!");
    }

}
