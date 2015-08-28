@extends('layout')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">
                    {{ $escuela->nombre }}
                </h1>

                {!! Form::model($escuela, ['route' => ['escuelas.update', $escuela], 'method' => 'PUT', 'files' => 'true']) !!}

                @include('partials.fields')

                {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary'])  !!}

                {!! Form::close() !!}

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Convenios y licitaciones
                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-convenios']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_convenios', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_convenios', $escuela->observaciones_convenios, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionConvenio btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','convenios') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar convenio
                                </h5>
                            {!! Form::open(['url' => route('convenios.store'), 'method' => 'POST', 'id' => 'formAddConvenio']) !!}

                            <div class="col-md-4">
                                {!! Form::label('descripcion', 'Convenio o Licitación') !!}
                                {!! Form::text('descripcion', null, [ 'id' => 'fieldConvenio', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('fecha', 'Fecha') !!}
                                {!! Form::text('fecha', null, [ 'id' => 'fieldFecha', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('monto', 'Monto') !!}
                                {!! Form::text('monto', null, [ 'id' => 'fieldMonto', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="addConvenio btn btn-primary">Agregar Convenio</a>
                            </div>

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="conveniosTable">
                                <thead>
                                <tr>
                                    <th>Convenio</th>
                                    <th>Fecha de vencimiento</th>
                                    <th>Monto</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($convenios as $convenio)
                                    <tr data-id="{{ $convenio->id  }}" >
                                        <td>{{ $convenio->descripcion }}</td>
                                        <td>{{ $convenio->fecha }}</td>
                                        <td>{{ $convenio->monto  }}</td>
                                        <td><a class="btn-delete" href="#">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['convenios.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteConvenio']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Licitaciones pendientes
                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-licitaciones']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_licitaciones', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_licitaciones', $escuela->observaciones_licitaciones, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionLicitacion btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','licitaciones') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Licitacion
                                </h5>
                            {!! Form::open(['url' => route('licitaciones.store'), 'method' => 'POST', 'id' => 'formAddLicitacion']) !!}

                            <div class="col-md-4">
                                {!! Form::label('nombre', 'Licitacion pendiente') !!}
                                {!! Form::text('nombre', null, [ 'id' => 'fieldLicitacionNombre', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('fecha', 'Fecha') !!}
                                {!! Form::text('fecha', null, [ 'id' => 'fieldLicitacionFecha', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('descripcion', 'Descripción') !!}
                                {!! Form::textArea('descripcion', null, [ 'rows' => '3', 'id' => 'fieldLicitacionDescripcion', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addLicitacion btn btn-primary">Agregar Licitacion</a>
                            </div>

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="licitacionesTable">
                                <thead>
                                <tr>
                                    <th>Licitacion pendiente</th>
                                    <th>Fecha</th>
                                    <th>Descripción</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($licitaciones as $licitacion)
                                    <tr data-id="{{ $licitacion->id  }}" >
                                        <td>{{ $licitacion->nombre }}</td>
                                        <td>{{ $licitacion->fecha }}</td>
                                        <td>{{ $licitacion->descripcion  }}</td>
                                        <td><a class="del-licitaction" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['licitaciones.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteLicitacion']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Asuntos prioritarios

                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-asuntos']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_asuntos', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_asuntos', $escuela->observaciones_asuntos, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionAsunto btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','asuntos') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Asunto
                                </h5>
                            {!! Form::open(['url' => route('asuntos.store'), 'method' => 'POST', 'id' => 'formAddAsunto']) !!}

                            <div class="col-md-4">
                                {!! Form::label('descripcion', 'Asunto') !!}
                                {!! Form::text('descripcion', null, [ 'id' => 'fieldAsuntoDescripcion', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('tipo', 'Tipo') !!}
                                {!! Form::select('tipo',config('options.asuntos_tipo'),null,[ 'id' => 'fieldAsuntoTipo', 'class' => 'form-control']) !!}

                            </div>
                            <div class="col-md-12">
                                {!! Form::label('organismos_relacionados', 'Organismos relacionados') !!}
                                {!! Form::text('organismos_relacionados', null, [ 'id' => 'fieldAsuntoOrganismos', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addAsunto btn btn-primary">Agregar Asunto</a>
                            </div>

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="asuntosTable">
                                <thead>
                                <tr>
                                    <th>Asunto</th>
                                    <th>Tipo</th>
                                    <th>Organismos relacionados</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($asuntos as $asunto)
                                    <tr data-id="{{ $asunto->id  }}" >
                                        <td>{{ $asunto->descripcion }}</td>
                                        <td>{{ $asunto->tipo }}</td>
                                        <td>{{ $asunto->organismos_relacionados  }}</td>
                                        <td><a class="del-asunto" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['asuntos.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteAsunto']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Representaciones

                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-representaciones']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_representaciones', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_representaciones', $escuela->observaciones_representaciones, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionRepresentacion btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','representaciones') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Representacion
                                </h5>
                            {!! Form::open(['url' => route('representaciones.store'), 'method' => 'POST', 'id' => 'formAddRepresentacion']) !!}

                            <div class="col-md-4">
                                {!! Form::label('nombre_representante', 'Nombre del Representante') !!}
                                {!! Form::text('nombre_representante', null, [ 'id' => 'fieldRepresentacionNombre', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('cargo', 'Cargo') !!}
                                {!! Form::text('cargo', null, [ 'id' => 'fieldRepresentacionCargo', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('vigencia', 'Vigencia') !!}
                                {!! Form::text('vigencia', null, [ 'id' => 'fieldRepresentacionVigencia', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('pendientes', 'Pendientes') !!}
                                {!! Form::text('pendientes', null, [ 'id' => 'fieldRepresentacionPendientes', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addRepresentacion btn btn-primary">Agregar Representación</a>
                            </div>

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="representacionesTable">
                                <thead>
                                <tr>
                                    <th>Nombre del Representante</th>
                                    <th>Cargo</th>
                                    <th>Vigencia</th>
                                    <th>Pendientes</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($representaciones as $representacion)
                                    <tr data-id="{{ $representacion->id  }}" >
                                        <td>{{ $representacion->nombre_representante }}</td>
                                        <td>{{ $representacion->cargo }}</td>
                                        <td>{{ $representacion->vigencia  }}</td>
                                        <td>{{ $representacion->pendientes  }}</td>
                                        <td><a class="del-representacion" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['representaciones.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteRepresentacion']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Becas

                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-becas']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_becas', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_becas', $escuela->observaciones_becas, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionBeca btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','becas') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Beca
                                </h5>
                            {!! Form::open(['url' => route('becas.store'), 'method' => 'POST', 'id' => 'formAddBeca']) !!}

                            <div class="col-md-4">
                                {!! Form::label('tipo', 'Tipo') !!}
                                {!! Form::text('tipo', null, [ 'id' => 'fieldBecaTipo', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('numero_beneficiarios', 'Numero de benericiarios') !!}
                                {!! Form::text('numero_beneficiarios', null, [ 'id' => 'fieldBecaNumero', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('vigencia', 'Vigencia') !!}
                                {!! Form::text('vigencia', null, [ 'id' => 'fieldBecaVigencia', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('monto', 'Monto') !!}
                                {!! Form::text('monto', null, [ 'id' => 'fieldBecaMonto', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('periodicidad', 'Periodicidad') !!}
                                {!! Form::text('periodicidad', null, [ 'id' => 'fieldBecaPeriodicidad', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addBeca btn btn-primary">Agregar Beca</a>
                            </div>
                            

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="becasTable">
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Numero de Beneficiarios</th>
                                    <th>Vigencia</th>
                                    <th>Monto</th>
                                    <th>Periodicidad</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($becas as $beca)
                                    <tr data-id="{{ $beca->id  }}" >
                                        <td>{{ $beca->tipo }}</td>
                                        <td>{{ $beca->numero_beneficiarios }}</td>
                                        <td>{{ $beca->vigencia  }}</td>
                                        <td>{{ $beca->monto  }}</td>
                                        <td>{{ $beca->periodicidad  }}</td>
                                        <td><a class="del-beca" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['becas.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteBeca']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Eventos

                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-eventos']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_eventos', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_eventos', $escuela->observaciones_eventos, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionEvento btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','eventos') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Evento
                                </h5>
                            {!! Form::open(['url' => route('eventos.store'), 'method' => 'POST', 'id' => 'formAddEvento']) !!}

                            <div class="col-md-4">
                                {!! Form::label('tipo_evento', 'Tipo de evento') !!}
                                {!! Form::text('tipo_evento', null, [ 'id' => 'fieldEventoTipo', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('fecha_compromiso', 'Fecha de compromiso') !!}
                                {!! Form::text('fecha_compromiso', null, [ 'id' => 'fieldEventoFecha', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('monto_recursos', 'Monto de recursos') !!}
                                {!! Form::text('monto_recursos', null, [ 'id' => 'fieldEventoMonto', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addEvento btn btn-primary">Agregar Evento</a>
                            </div>
                            

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="eventosTable">
                                <thead>
                                <tr>
                                    <th>Tipo de evento</th>
                                    <th>Fecha de comprimiso</th>
                                    <th>Monto de recursos</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($eventos as $evento)
                                    <tr data-id="{{ $evento->id  }}" >
                                        <td>{{ $evento->tipo_evento }}</td>
                                        <td>{{ $evento->fecha_compromiso }}</td>
                                        <td>{{ $evento->monto_recursos  }}</td>
                                        <td><a class="del-evento" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['eventos.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteEvento']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Oferta Educativa

                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-oferta']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_oferta', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_oferta', $escuela->observaciones_oferta, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionOferta btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','oferta') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Oferta
                                </h5>
                            {!! Form::open(['url' => route('oferta.store'), 'method' => 'POST', 'id' => 'formAddOferta']) !!}

                            <div class="col-md-4">
                                {!! Form::label('nombre', 'Nombre') !!}
                                {!! Form::text('nombre', null, [ 'id' => 'fieldOfertaNombre', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('tipo', 'Tipo') !!}
                                {!! Form::text('tipo', null, [ 'id' => 'fieldOfertaTipo', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('estatus', 'Estatus') !!}
                                {!! Form::select('estatus',config('options.oferta_estatus'),null,[ 'id' => 'fieldOfertaEstatus', 'class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addOferta btn btn-primary">Agregar Oferta</a>
                            </div>
                            

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="ofertaTable">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Estatus</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($oferta as $f)
                                    <tr data-id="{{ $f->id  }}" >
                                        <td>{{ $f->nombre }}</td>
                                        <td>{{ $f->tipo }}</td>
                                        <td>{{ $f->estatus  }}</td>
                                        <td><a class="del-oferta" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['oferta.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteOferta']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->


                <div style="clear:both"></div>

                <!-- PANEL  -->
                <div class="content">
                    <h4 class="page-header" >
                        Reformas educativa

                    </h4>
                    <div class="form-group">
                        {!! Form::open(['url' => '/escuelas/observaciones/' . $escuela->id, 'method' => 'POST', 'id' => 'form-reforma']) !!}
                        <div class="col-md-11">
                            {!! Form::label('observaciones_reforma', 'Observaciones') !!}
                            {!! Form::textArea('observaciones_reforma', $escuela->observaciones_reforma, [ 'rows' => '3', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                        </div>
                        <div class="col-md-6">

                            <a href="#!" class="addObservacionReforma btn btn-primary"> Guardar observaciones</a>
                            {!! Form::hidden('obsType','reforma') !!}

                        </div>

                        {!! Form::close() !!}


                        <div class="col-md-12">
                                <h5 class="page-header">
                                    Agregar Reforma
                                </h5>
                            {!! Form::open(['url' => route('reforma.store'), 'method' => 'POST', 'id' => 'formAddReforma']) !!}

                            <div class="col-md-4">
                                {!! Form::label('impacto', 'Impacto') !!}
                                {!! Form::text('impacto', null, [ 'id' => 'fieldReformaImpacto', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::label('descripcion', 'Descripción') !!}
                                {!! Form::text('descripcion', null, [ 'id' => 'fieldReformaDescripcion', 'class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="addReforma btn btn-primary">Agregar Reforma</a>
                            </div>
                            

                            {!! Form::hidden('id_escuela',$escuela->id) !!}
                            {!! Form::close() !!}
                            <table class=" table table-striped" id="reformaTable">
                                <thead>
                                <tr>
                                    <th>Impacto</th>
                                    <th>Dscripción</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($reforma as $r)
                                    <tr data-id="{{ $r->id  }}" >
                                        <td>{{ $r->impacto }}</td>
                                        <td>{{ $r->descripcion }}</td>
                                        <td><a class="del-reforma" href="#!">Eliminar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

                            {!! Form::open(['route' => ['reforma.destroy',':USER_ID'], 'method' => 'delete', 'id' => 'formDeleteReforma']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!-- END PANEL  -->

            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

@endsection

@section('scripts')

    <script>

        //****** Convenios
        $(document).on('click', '.addObservacionConvenio', function(e) {
            var form = $('#form-convenios');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });

        $(document).on('click', '.addConvenio', function(e) {
            e.preventDefault();
            var c = document.getElementById('fieldConvenio');
            var f = document.getElementById('fieldFecha');
            var m = document.getElementById('fieldMonto');

            var form = $('#formAddConvenio');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                //alert(result.message)
                alert('El convenio fue guardado correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + c.value + '</td><td>' + f.value + '</td><td>'+ m.value +'</td><td><a class="btn-delete" href="#!">Eliminar</a></td></tr>');
                $('table#conveniosTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });


        $(document).on('click', '.btn-delete', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteConvenio');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Convenio eliminado correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END CONVENIOS


        //****** LICITACIONES
        $(document).on('click', '.addObservacionLicitacion', function(e) {
            var form = $('#form-licitaciones');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addLicitacion', function(e) {
            e.preventDefault();
            var c = document.getElementById('fieldLicitacionNombre');
            var f = document.getElementById('fieldLicitacionFecha');
            var m = document.getElementById('fieldLicitacionDescripcion');

            var form = $('#formAddLicitacion');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                //alert(result.message)
                alert('La licitacion fue guardada correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + c.value + '</td><td>' + f.value + '</td><td>'+ m.value +'</td><td><a class="del-licitaction" href="#!">Eliminar</a></td></tr>');
                $('table#licitacionesTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-licitaction', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteLicitacion');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Licitacion eliminada correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END LICITACIONES

       //****** ASUNTOS
        $(document).on('click', '.addObservacionAsunto', function(e) {
            var form = $('#form-asuntos');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addAsunto', function(e) {

            e.preventDefault();
            var c = document.getElementById('fieldAsuntoDescripcion');
            var f = document.getElementById('fieldAsuntoTipo');
            var m = document.getElementById('fieldAsuntoOrganismos');

            var form = $('#formAddAsunto');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                //alert(result.message)
                alert('El asunto fue guardado correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + c.value + '</td><td>' + f.value + '</td><td>'+ m.value +'</td><td><a class="del-asunto" href="#!">Eliminar</a></td></tr>');
                $('table#asuntosTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-asunto', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteAsunto');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Asunto eliminado correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END ASUNTOS


       //****** REPRESENTACIONES
        $(document).on('click', '.addObservacionRepresentacion', function(e) {
            var form = $('#form-representaciones');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addRepresentacion', function(e) {

            e.preventDefault();
            var c = document.getElementById('fieldRepresentacionNombre');
            var f = document.getElementById('fieldRepresentacionCargo');
            var m = document.getElementById('fieldRepresentacionVigencia');
            var p = document.getElementById('fieldRepresentacionPendientes');

            var form = $('#formAddRepresentacion');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('La representación fue guardada correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + c.value + '</td><td>' + f.value + '</td><td>'+ m.value +'</td><td>'+ p.value +'</td><td><a class="del-representacion" href="#!">Eliminar</a></td></tr>');
                $('table#representacionesTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-representacion', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteRepresentacion');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Represetacion eliminada correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END REPRESENTACIONES

       //****** BECAS
        $(document).on('click', '.addObservacionBeca', function(e) {
            var form = $('#form-becas');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addBeca', function(e) {

            e.preventDefault();
            var a = document.getElementById('fieldBecaTipo');
            var b = document.getElementById('fieldBecaNumero');
            var c = document.getElementById('fieldBecaVigencia');
            var d = document.getElementById('fieldBecaMonto');
            var f = document.getElementById('fieldBecaPeriodicidad');


            var form = $('#formAddBeca');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('La beca fue guardada correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + a.value + '</td><td>' + b.value + '</td><td>'+ c.value +'</td><td>'+ d.value +'</td><td>'+ f.value +'</td><td><a class="del-beca" href="#!">Eliminar</a></td></tr>');
                $('table#becasTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-beca', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteBeca');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Beca eliminada correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END BECAS

       //****** EVENTOS
        $(document).on('click', '.addObservacionEvento', function(e) {
            var form = $('#form-eventos');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addEvento', function(e) {

            e.preventDefault();
            var a = document.getElementById('fieldEventoTipo');
            var b = document.getElementById('fieldEventoFecha');
            var c = document.getElementById('fieldEventoMonto');


            var form = $('#formAddEvento');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Evento guardado correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + a.value + '</td><td>' + b.value + '</td><td>'+ c.value +'</td><td><a class="del-evento" href="#!">Eliminar</a></td></tr>');
                $('table#eventosTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-evento', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteEvento');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Evento eliminado correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END EVENTOS

       //****** OFERTA
        $(document).on('click', '.addObservacionOferta', function(e) {
            var form = $('#form-oferta');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addOferta', function(e) {

            e.preventDefault();
            var a = document.getElementById('fieldOfertaNombre');
            var b = document.getElementById('fieldOfertaTipo');
            var c = document.getElementById('fieldOfertaEstatus');


            var form = $('#formAddOferta');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Oferta guardado correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + a.value + '</td><td>' + b.value + '</td><td>'+ c.value +'</td><td><a class="del-oferta" href="#!">Eliminar</a></td></tr>');
                $('table#ofertaTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-oferta', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteOferta');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Oferta eliminada correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END OFERTA


       //****** REFORMA
        $(document).on('click', '.addObservacionReforma', function(e) {
            var form = $('#form-reforma');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Las observaciones se guardaron correctamente');
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });
        });


        $(document).on('click', '.addReforma', function(e) {

            e.preventDefault();
            var a = document.getElementById('fieldReformaImpacto');
            var b = document.getElementById('fieldReformaDescripcion');


            var form = $('#formAddReforma');
            var url = form.attr('action');
            var data = form.serialize();

            $.post(url, data, function (result) {
                alert('Reforma guardado correctamente');
                var newRow = $('<tr data-id="'+ result.id +'" ><td>' + a.value + '</td><td>' + b.value + '</td><td><a class="del-reforma" href="#!">Eliminar</a></td></tr>');
                $('table#reformaTable').append(newRow);
            }).fail(function () {
                alert('El usuario no fue eliminado');
            });

        });

        $(document).on('click', '.del-reforma', function(e) {

            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#formDeleteReforma');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();
            $.post(url, data, function (result) {
                alert('Reforma eliminada correctamente');
                row.fadeOut();
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            });

        });
        //******* END REFORMA



    </script>

@endsection


