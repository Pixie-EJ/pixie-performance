@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="sidebar bg-black">
        <li>
            <ul class="color-light m-0 py-3 px-4 ul-active">Home</ul>
            <ul class="color-light m-0 py-3 px-4">Membros</ul>
            <ul class="color-light m-0 py-3 px-4">Equipes</ul>
            <ul class="color-light m-0 py-3 px-4">Eventos</ul>
            <ul class="color-light m-0 py-3 px-4">Categorias</ul>
            <ul class="color-light m-0 py-3 px-4">Regras</ul>
            <ul class="color-light m-0 py-3 px-4">Emblemas</ul>
            <ul class="color-light m-0 py-3 px-4">Temporadas</ul>
        </li>
    </div>
    <div class="container mb-5">
        <div class="d-flex justify-content-between">
            <h2 class="py-4">Home</h2>
            <button class="btn bg-blue my-4">
                <span class="color-light">Lançar pontos</span>    
            </button>
        </div>
        <div class="row justify-content-around mx-3">
            <div class="col-3 card border-0 p-3">
                <div>
                    <span class="h6">Pontuação esperada</span>
                </div>
                <div class="d-flex justify-content-end">
                    <span class="h2 m-0">25000</span>
                </div>     
            </div>
            <div class="col-3 card border-0 p-3">
                <div>
                    <span class="h6">Pontuação média</span>
                </div>
                <div class="d-flex justify-content-end">
                    <span class="h2 m-0">390000</span>
                </div>     
            </div>
            <div class="col-3 card border-0 p-3">
                <div>
                    <span class="h6">Porcentagem atingida</span>
                </div>
                <div class="d-flex justify-content-end">
                    <span class="h2 m-0">99%</span>
                </div>     
            </div>
        </div>
        <div class="mt-4">
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
