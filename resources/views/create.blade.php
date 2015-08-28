@extends('layout')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">
                    Crear Escuela
                </h1>

                {!! Form::open(['route' => 'escuelas.store', 'method' => 'POST', 'files' => 'true']) !!}

                @include('partials.fields')

                {!! Form::submit('Crear escuela',['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                defaultViewDate: { year: 1977, month: 04, day: 25 }
            });

        })
    </script>

@endsection
