@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex flex-column p-3">
            <a href=""><i class="mx-2 fas fa-arrow-left color-black"></i></a>
            <h2 class="ml-2 mt-2">Lançar pontos</h2>
        </div>
        <div class="mx-3">
            <form id="event-form" method="POST" action="{{ route('events.store') }}">
                @csrf
                <div class="d-flex flex-row">
                    <div class="form-group col-md-6 col-sm-12">
                        <div class="d-flex flex-row w-100">
                            <div class="d-flex flex-column w-100">
                                <label>Evento*</label>
                                <select name="categories_id" class="form-control col-md-6 col-sm-12" required>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column w-100">
                                <label>Regra Pontuação*</label>
                                <select name="categories_id" class="form-control col-md-6 col-sm-12" required>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-overflow shadow-sm mt-3">
                    <table id="events-table" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Multiplicador</th>
                            </tr>
                        </thead>
                        <tbody data-page-length='8'>
                            <tr>
                                <td class="d-flex flex-row align-items-start">
                                    <input class="mt-1 mx-2" type="checkbox"/>
                                    <p class="mt-0 p-0">Eduardo Saito</p>
                                </td>
                                <td>
                                    <input class="text-center" type="text">
                                </td>
                            </tr>
                        </tbody>
                    </table> 
            </div>
            <div class="d-flex justify-content-end mt-4">
                <a href="" class="btn btn-lg bg-red mr-2">
                    <h5 class="m-0 color-light">Cancelar</h5>
                </a>
                <button type="submit" class="btn btn-lg bg-green">
                    <h5 class="m-0 color-light">Salvar</h5>
                </button>
            </div>
            </form>  
        </div> 
    
 @endsection

 @section('scripts')
    <script src="{{ asset('js/datatables/datatables.min.js') }}" defer></script>
    <script src="{{ asset('js/datatables/datatables-plugins.js') }}" defer></script>
    <script src="{{ asset('js/datatables/datatables-points.js') }}" defer></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js"></script>
 @endsection