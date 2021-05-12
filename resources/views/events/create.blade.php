@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content-start align-items-center">
            <a href="/home"><i class="mb-2 mx-2 fas fa-arrow-left color-black"></i></a>
            <h2 class="py-4">Novo evento</h2>
        </div>
        <div class="mx-3">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome do evento</label>
                  <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group d-flex">
                    <div class="mr-3">
                        <label for="exampleInputPassword1">Data de início</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">Horário</label>
                        <input type="time" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="form-group d-flex">
                    <div class="mr-3">
                        <label for="exampleInputPassword1">Data de término</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
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

