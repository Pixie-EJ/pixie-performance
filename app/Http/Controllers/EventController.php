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
        $mensagem = $request->session()->get('mensagem');
        return view('events.index', compact('events', 'mensagem'));
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
                'mensagem',
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
     * @param  int  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($event)
    {
        $event = \App\Event::findOrFail($event);
        $event->delete();
        return redirect('events.index')->with("mensagem","Evento excluido com sucesso");
    }

}
