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
                                <button onclick="viewEvent({{ $event }})" type="button" class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button class="btn btn-primary dropdown-item" type="button" data-toggle="modal" data-target="#showEventModal">Visualizar evento</button>
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary dropdown-item">Editar evento</a>
                                    <button class="btn btn-primary dropdown-item" type="button" data-toggle="modal" data-target="#deleteEventModal">Excluir evento</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    <div class="modal fade" id="showEventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="event-id"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <h5 class="m-0"><b>Nome</b></h5>
                <label id="event-name"></label>
                <h5 class="m-0"><b>Descrição</b></h5>
                <label id="event-description"></label>
                <h5 class="m-0"><b>ID da categoria</b></h5>
                <label id="event-category"></label>
                <h5 class="m-0"><b>Data inicial</b></h5>
                <label id="event-date-start"></label>
                <h5 class="m-0"><b>Data término</b></h5>
                <label id="event-date-end"></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="deleteEventModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="event-id-delete"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a id="delete-event" type="button" class="btn btn-danger">Excluir</a>
            </div>
          </div>
        </div>
    </div>
    
@endsection

@section('scripts')
    @if (!empty($mensagem))
        <script>
            toastr.success('Evento criado com sucesso!')
        </script>
    @endif
    <script>
        function viewEvent(event) {
            document.getElementById('event-id').innerHTML = "Evento #" + event.id
            document.getElementById('event-name').innerHTML = event.name
            document.getElementById('event-description').innerHTML = event.description
            document.getElementById('event-category').innerHTML = event.categories_id
            document.getElementById('event-date-start').innerHTML = event.started_at
            document.getElementById('event-date-end').innerHTML = event.ended_at
            document.getElementById('event-id-delete').innerHTML = "Tem certeza que deseja excluir o evento " + event.id + "?"
        }
    </script>
@endsection


