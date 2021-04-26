@extends('layouts.app')

@section('content')
<div class="bg-light">
    <div class="container pb-5">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="./assets/pixie-logo-lg-green.svg" style="width: 250px" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="d-flex align-items-center justify-content-center p-5">
                    <img src="./assets/pixie-logo-text.svg" style="width: 300px" />
                </div>
            </div>
        </div>
        <div class="pt-5 mt-5">
            <h2 class="color-green text-lg-left text-md-center font-weight-bold">Ranking Pixie Points</h2>
            <h4 class="text-grey">2ª Temporada</h4>
            <div class="table-responsive">
                <table class="table table-curved table-bordered table-striped table-dark mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Emblemas</th>
                            <th scope="col">Equipe</th>
                            <th scope="col">Pontuação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Thiago Teixeira</th>
                            <td>Gostosão | Lindão</td>
                            <td>Technology</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <th scope="row">João Vitor</th>
                            <td>Xerosão | Pintudo</td>
                            <td>C-Level</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <th scope="row">Eduardo Saito</th>
                            <td>Japonês</td>
                            <td>Technology</td>
                            <td>140</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection