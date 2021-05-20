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
                <table id="events-table" class="table table-striped table-bordered text-center display">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data inicial</th>
                            <th scope="col">Data final</th>
                            {{-- <th scope="col">Ações</th> --}}
                        </tr>
                    </thead>
                    <tbody data-page-length='8'>
                        @foreach ($events as $event)
                        <tr>
                            <th scope="row">{{ $event->id }}</th>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->category_id }}</td>
                            <td>{{ date("d/m/Y H:i", strtotime($event->started_at)) }}</td>
                            <td>{{ date("d/m/Y H:i", strtotime($event->ended_at)) }}</td>
                            {{-- <td><i class="fas fa-ellipsis-h"></i></td> --}}
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


