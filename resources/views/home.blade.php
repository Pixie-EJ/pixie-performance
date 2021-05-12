@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content-between">
            <h2 class="py-4">Home</h2>
            <button class="btn bg-blue my-4">
                <span class="color-light">Lançar pontos</span>    
            </button>
        </div>
        <div class="row justify-content-around mx-3">
            <div class="col-sm-3 col-xs-4 my-1 card border-0 p-3">
                <div>
                    <span class="card-home-title">Pontuação esperada</span>
                </div>
                <div class="d-flex justify-content-end">
                    <span class="card-home-subtitle m-0">25000</span>
                </div>     
            </div>
            <div class="col-sm-3 col-xs-4 my-1 card border-0 p-3">
                <div>
                    <span class="card-home-title">Pontuação média</span>
                </div>
                <div class="d-flex justify-content-end">
                    <span class="card-home-subtitle m-0">39000</span>
                </div>     
            </div>
            <div class="col-sm-3 col-xs-4 my-1 card border-0 p-3">
                <div>
                    <span class="card-home-title">Porcentagem atingida</span>
                </div>
                <div class="d-flex justify-content-end">
                    <span class="card-home-subtitle m-0">99%</span>
                </div>     
            </div>
        </div>
        <div class="mt-4">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Aulas</th>
                        <th scope="col">Respostas</th>
                        <th scope="col">Tasks</th>
                        <th scope="col">Eventos</th>
                        <th scope="col">Cursos</th>
                        <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                        <tr>
                        <th scope="row">Eduardo Saito</th>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>250</td>
                        <td>1250</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

