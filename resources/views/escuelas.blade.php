@extends('layout')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lista de escuelas</h1>

                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Escuela</th>
                        <th>Titular</th>
                        <th>Tiempo en cargo</th>
                    </tr>
                    @foreach ($escuelas as $escuela)
                        <tr data-id="{{ $escuela->id }}">
                            <td>{{ $escuela->id }}</td>
                            <td><a href="{{ route('escuelas.edit', $escuela->id) }}">{{ $escuela->nombre }} </a></td>
                            <td>{{ $escuela->titular }}</td>
                            <td>{{ $escuela->tiempo_en_cargo }}</td>
                            <td>

                                <a href="#" class="btn-delete">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {!! Form::open(['route' => ['escuelas.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $('.btn-delete').click(function (e) {
                e.preventDefault();
                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url = form.attr('action').replace(':USER_ID', id);
                var data = form.serialize();
                row.fadeOut();
                $.post(url, data, function (result) {
                    if(result.message === 'deleted')
                        alert('La escuela ' + result.name + ' fue eliminada correctamente');
                }).fail(function () {
                    alert('La escuela no fue emilinada');
                    row.show();
                });
            });
        });
    </script>
@endsection
