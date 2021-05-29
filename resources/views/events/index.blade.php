@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="d-flex justify-content-between">
            <h2 class="py-4">Eventos</h2>
            <a href="{{ route('events.create') }}" class="btn bg-blue my-4 d-flex align-items-center">
                <span class="color-light m-0 p-0">Novo evento</span>
            </a>
            @csrf
        </div>
        <div class="mt-4">
            <div class="table-responsive table-overflow shadow-sm">
                <table id="events-table" class="display table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data inicial</th>
                            <th scope="col">Data final</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody data-page-length='8'>
                        @foreach ($events as $event)
                        <tr>
                            <th scope="row">{{ $event->id }}</th>
                            <td>{{ $event->name }}</td>
                            <td>
                            @if ($event->categories_id == 1)
                            Aulas    
                            @elseif ($event->categories_id == 2)
                            Eventos
                            @elseif ($event->categories_id == 3)
                            Tasks
                            @elseif ($event->categories_id == 4)
                            Cursos Extras    
                            @endif
                            </td>
                            <td>{{ date("d/m/Y H:i", strtotime($event->started_at)) }}</td>
                            <td>{{ date("d/m/Y H:i", strtotime($event->ended_at)) }}</td>
                            <td class="text-center dropdown">
                                <button type="button" class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Visualizar evento</a>
                                    <a class="dropdown-item" href="#">Excluir evento</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    @if (!empty($mensagem))
        <script>
            toastr.success('Evento criado com sucesso!')
        </script>
    @endif
@endsection


