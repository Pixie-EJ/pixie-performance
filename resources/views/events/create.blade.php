@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content-start align-items-center">
            <a href="/events"><i class="mb-2 mx-2 fas fa-arrow-left color-black"></i></a>
            <h2 class="py-4">Novo evento</h2>
        </div>
        <div class="mx-3">
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Nome do evento</label>
                  <input name="name" class="form-control" id="name">
                </div>
                <div class="form-group d-flex">
                    <div class="mr-3">
                        <label for="exampleInputPassword1">Data de início</label>
                        <input name="started_at" type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">Horário</label>
                        <input type="time" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="mr-3">
                        <label for="exampleInputPassword1">Data de término</label>
                        <input name="ended_at" type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">Horário</label>
                        <input type="time" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control form-control-md col-md-3 col-sm-12">
                        <option></option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-lg bg-green">
                        <h5 class="m-0 color-light">Salvar</h5>
                    </button>
                </div>
            </form>  
        </div>  
    </div>
@endsection