@extends('layouts.app')

@section('content')
@if()
    <script>
        $(document).ready( function () {
            toastr.success('Evento cadastrado com sucesso!')
        } );
    </script> 
@endif

    <div class="container mb-5">
        <div class="d-flex justify-content-between">
            <h2 class="py-4">Eventos</h2>
            <button onclick="window.location.href='/events/create'" class="btn bg-blue my-4">
                <span class="color-light">Novo evento</span>
            </button>
            @csrf
        </div>
        <div class="mt-4">
            <div class="table-responsive">
                <table id="events_table" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody data-page-length='8'>
                        <tr>
                            <th scope="row">144</th>
                            <td>PHP com POO</td>
                            <td>Domingo Legal</td>
                            <td>21/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">143</th>
                            <td>Laravel</td>
                            <td>Sábado Animado</td>
                            <td>20/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">142</th>
                            <td>EJs de Tecnologia</td>
                            <td>Evento do Núcleo</td>
                            <td>15/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">141</th>
                            <td>PHP com POO</td>
                            <td>Domingo Legal</td>
                            <td>14/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">140</th>
                            <td>Laravel</td>
                            <td>Sábado Animado</td>
                            <td>13/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">139</th>
                            <td>EJs de Tecnologia</td>
                            <td>Evento do Núcleo</td>
                            <td>08/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">138</th>
                            <td>PHP com POO</td>
                            <td>Domingo Legal</td>
                            <td>07/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">137</th>
                            <td>Laravel</td>
                            <td>Sábado Animado</td>
                            <td>06/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">136</th>
                            <td>EJs de Tecnologia</td>
                            <td>Evento do Núcleo</td>
                            <td>01/03/2021</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    $(document).ready( function () {
        $('#events_table').DataTable();
    } );
    </script> 
@endsection


