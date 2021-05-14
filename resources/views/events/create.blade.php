@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex flex-column p-3">
            <a href="/events"><i class="mx-2 fas fa-arrow-left color-black" style="transform: scale(1.5)"></i></a>
            <h2 class="ml-2 mt-2">Novo evento</h2>
        </div>
        <div class="mx-3">
            <form id="event-form">
                @csrf
                <div class="form-group col-md-8 col-sm-12">
                  <label>Nome do evento</label>
                  <input 
                    name="name" 
                    type="text" 
                    class="form-control" 
                    id="name"
                >
                <h6 id="name-error-msg" class="mt-1 color-red">
                    O campo é obrigatório
                </h6>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Início</label>
                    <input 
                        name="started_at" 
                        type="datetime-local" 
                        max="9999-12-30T23:59" 
                        class="form-control" 
                        id="start_time"
                    >
                    <h6 id="date-start-error-msg" class="mt-1 color-red">
                        Data e hora de início inválidas!    
                    </h6>                
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Término</label>
                    <input 
                        name="ended_at" 
                        type="datetime-local" 
                        max="9999-12-30T23:59"
                        class="form-control" 
                        id="end_time"
                    >
                    <h6 id="date-end-error-msg" class="mt-1 color-red">
                        Data e hora de término inválidas!    
                    </h6>  
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Categoria</label>
                    <select class="form-control form-control-md col-md-3 col-sm-12">
                        <option></option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" onclick="validateTime()" class="btn btn-lg bg-green">
                        <h5 class="m-0 color-light">Salvar</h5>
                    </button>
                </div>
            </form>  
        </div>  
    </div>
    <script>
    $('#date-start-error-msg').hide()
    $('#date-end-error-msg').hide()
    $('#name-error-msg').hide()    

    function validateTime() {
        $('#date-start-error-msg').hide()
        $('#date-end-error-msg').hide()
        $('#name-error-msg').hide() 

        let name_str = document.getElementById('start_time').value.length
        let start = document.getElementById('start_time').value
        let start_str = start.toString().length
        let end = document.getElementById('end_time').value
        let end_str = end.toString().length
        let actual_date = new Date()
        let start_date = new Date(start)
        let end_date = new Date(end)

        if(name_str == 0)
            $('#name-error-msg').show() 
        if(start_date < actual_date || start_str == 0)
            $('#date-start-error-msg').show()
        if(end_date < start_date || end_str == 0) 
            $('#date-end-error-msg').show()

        if (start_date > actual_date && start_str != 0 &&
            end_date > start_date && end_str != 0) {
            $('#event-form').attr("action", "{{ route('events.store') }}")
            $('#event-form').attr("method", "POST")
            $('#event-form').submit()
        }
    }
    </script> 
 @endsection