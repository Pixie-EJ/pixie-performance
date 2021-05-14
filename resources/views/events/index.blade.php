@extends('layouts.app')

@section('content')
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
                            {{-- <th scope="col">Ações</th> --}}
                        </tr>
                    </thead>
                    <tbody data-page-length='8'>
                        @foreach ($events as $event)
                        <tr>
                            <th scope="row">{{ $event->id }}</th>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->category_id }}</td>
                            <td>{{ $event->created_at }}</td>
                            {{-- <td><i class="fas fa-ellipsis-h"></i></td> --}}
                        </tr>
                        @endforeach
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


