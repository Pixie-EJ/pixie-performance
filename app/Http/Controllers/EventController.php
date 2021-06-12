<?php

namespace App\Http\Controllers;
use App\Categories;
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
        $msgCreate = $request->session()->get('msgCreate');
        $msgDelete = $request->session()->get('msgDelete');
        $msgUpdate = $request->session()->get('msgUpdate');
        return view('events.index', compact('events', 'msgCreate', 'msgDelete', 'msgUpdate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::query()
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
        $request->session()
            ->flash(
                'msgCreate',
                "Evento criado com sucesso!"
            );
        return redirect()->route('events.index');
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
        $categories = Categories::query()
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
            return redirect()->back()->with("msgUpdateError","Falha na edição do evento");
        }

        return redirect()->route('events.index')->with("msgUpdate","Evento editado com sucesso");
        
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
        return redirect()->route('events.index')->with("msgDelete","Evento excluido com sucesso");
    }

}
