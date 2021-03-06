@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <div class="d-flex flex-column p-3">
            <a href="{{ route('home') }}"><i class="mx-2 fas fa-arrow-left color-black"></i></a>
            <h2 class="ml-2 mt-2">Lançar pontos</h2>
        </div>
        <div>
            <form id="points-form" method="POST" action="">
                @csrf
                <div class="d-flex flex-column justify-content-center align-items-center">

                    <div class="col-6">

                        <div class="d-flex flex-row justify-content-between">

                            <div class="form-group col-5 p-0">
                                <div class="d-flex flex-column">
                                    <label>Evento*</label>
                                    <select id="events" name="events_id" class="form-control w-100" required>
                                        <option value="">-- Selecione um evento --</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->categories_id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-5 p-0">
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column w-100">
                                        <label>Regra Pontuação*</label>
                                        <select id="rules" name="rules_id" class="form-control" required>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="table-responsive table-overflow shadow-sm mt-4">
                                <table id="score-table" class="display table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Multiplicador</th>
                                    </tr>
                                    </thead>
                                    <tbody data-page-length='8'>
                                    @foreach ($members as $member)
                                        <tr>

                                            <td class="">
                                                <div class="d-flex">
                                                    <input type="checkbox" checked>
                                                    <p class="p-0 m-0 mx-2">{{$member->name}}</p>
                                                </div>
                                            </td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <input type="text" class="text-center w-50"/>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('home') }}" class="btn btn-lg bg-red mr-2">
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
            <script type="application/javascript" src="{{ asset('js/datatables/datatables.min.js') }}" defer></script>
            <script type="application/javascript" src="{{ asset('js/datatables/datatables-plugins.js') }}"
                    defer></script>
            <script type="application/javascript" src="{{ asset('js/datatables/datatables-points.js') }}"
                    defer></script>
            <script type="application/javascript"
                    src="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js"></script>
            <script type="application/javascript">
                $(document).ready(function () {
                    $('#events').on('change', function () {
                        const categories_id = $(this).val();
                        if (categories_id) {
                            $.ajax({
                                url: '/findRuleWithCategoryId/' + categories_id,
                                type: "GET",
                                data: {"_token": "{{ csrf_token() }}"},
                                dataType: "json",
                                success: function (data) {
                                    if (data) {
                                        $('#rules').empty();
                                        $('#rules').focus;
                                        $('#rules').append('<option value="">-- Selecione uma regra --</option>');
                                        $.each(data, function (key, value) {
                                            $('select[name="rules_id"]').append('<option value="' + key + '">' + value[key]['name'] + '</option>');
                                        });
                                    } else {
                                        $('#rules').empty();
                                    }
                                }
                            });
                        } else {
                            $('#rules').empty();
                        }
                    });
                });
            </script>
@endsection
