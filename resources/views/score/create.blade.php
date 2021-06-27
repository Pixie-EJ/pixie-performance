@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex flex-column p-3">
            <a href=""><i class="mx-2 fas fa-arrow-left color-black"></i></a>
            <h2 class="ml-2 mt-2">Lançar pontos</h2>
        </div>
        <div class="mx-3 d-flex justify-content-center">
            <form class="d-flex justify-content-center flex-column" id="event-form" method="POST" action="{{ route('events.store') }}">
                @csrf
                <div class="d-flex flex-row">
                    <div class="form-group col-6">
                        <div class="d-flex flex-column">
                            <label>Evento*</label>
                            <select name="categories_id" class="form-control w-100" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column w-100">
                                <label>Regra Pontuação*</label>
                                <select name="categories_id" class="form-control" required>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-overflow shadow-sm mt-4">
                    <table id="score-table" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Multiplicador</th>
                            </tr>
                        </thead>
                        <tbody data-page-length='8'>
                            <tr>
                                <td class="">
                                    <div class="d-flex">
                                        <input type="checkbox" checked>
                                        <p class="p-0 m-0 mx-2">Eduardo Saito</p>
                                    </div> 
                                </td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <input type="text" class="text-center w-50"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div class="d-flex">
                                        <input type="checkbox" checked>
                                        <p class="p-0 m-0 mx-2">Eduardo Saito</p>
                                    </div> 
                                </td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <input type="text" class="text-center w-50"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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