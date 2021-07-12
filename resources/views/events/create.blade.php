@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex flex-column p-3">
            <a href="{{ route('events.index') }}"><i class="mx-2 fas fa-arrow-left color-black"></i></a>
            <h2 class="ml-2 mt-2">Novo evento</h2>
        </div>
        <div class="mx-3">
            <form id="event-form" method="POST" action="{{ route('events.store') }}">
                @csrf
                <div class="form-group col-md-8 col-sm-12">
                  <label>Nome do evento*</label>
                  <input 
                    name="name" 
                    type="text" 
                    class="form-control" 
                    id="name"
                    maxlength="50"
                    required
                >
                </div>
                <div class="form-group col-md-8 col-sm-12">
                    <label>Descrição*</label>
                    <textarea 
                      name="description" 
                      type="text" 
                      class="form-control"
                      rows="3" 
                      id="description"
                      maxlength="255"
                      required
                    ></textarea>
                  </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Início*</label>
                    <input 
                        name="started_at" 
                        type="datetime-local" 
                        max="2999-12-30T23:59" 
                        class="form-control" 
                        id="start_time"
                        onchange="getStartDate()"
                        required
                    >             
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Término*</label>
                    <input 
                        name="ended_at" 
                        type="datetime-local" 
                        max="2999-12-30T23:59"
                        class="form-control" 
                        id="end_time"
                        required
                    >
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Categoria*</label>
                    <select name="categories_id" class="form-control col-md-6 col-sm-12" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button onclick="this.disabled = true; this.form=submit();" class="btn btn-lg bg-green">
                        <h5 class="m-0 color-light">Salvar</h5>
                    </button>
                </div>
            </form>  
        </div>  
    </div>
    <script>
        function getStartDate() {
            let start = document.getElementById('start_time').value
            $('#end_time').attr("min", start)
        }
    </script>
 @endsection