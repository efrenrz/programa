<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Datos de la escuela
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::label('nombre', 'Escuela') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Escuela']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-5">
                        {!! Form::label('titular', 'Titular') !!}
                        {!! Form::text('titular', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2">
                        {!! Form::label('tiempo_en_cargo', 'Tiempo en cargo') !!}
                        <div class="input-group">
                            {!! Form::text('tiempo_en_cargo', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                            <span class="input-group-addon">Años</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-5">
                        {!! Form::label('designacion', 'Designación') !!}
                        {!! Form::text('designacion', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('terminacion', 'Fecha de terminación') !!}
                        {!! Form::text('terminacion', null, ['id' => 'terminacion','class' => 'datepicker form-control', 'placeholder' => 'Nombre del Titular', 'data-provide' => 'datepicker']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('organigrama', 'Organigrama') !!}
                        @if(isset($escuela))
                            @if($escuela->organigrama != '')
                                <a target="_blank" href="/uploads/{{ $escuela->organigrama  }}">Ver archivo</a>
                            @endif
                        @endif
                        {!! Form::file('organigrama', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div   class="col-md-12">
                        {!! Form::label('observaciones_generales', 'Obervaciones Generales') !!}
                        {!! Form::textArea('observaciones_generales', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Datos financieros
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="form-group">
                    <div   class="col-md-4">
                        {!! Form::label('presupuesto_estatal', 'Presupuesto Estatal') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('presupuesto_estatal', null, ['class' => 'autoNum form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-4">
                        {!! Form::label('presupuesto_federal', 'Presupuesto Federal') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('presupuesto_federal', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-4">
                        {!! Form::label('ingresos_propios', 'Ingresos propios') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('ingresos_propios', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('otros_estatales', 'Otros recursos Estatales') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('otros_estatales', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('otros_federales', 'Otros recursos Federales') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('otros_federales', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('avance_gastos', 'Avance de gastos') !!}
                        <div class="input-group">
                            {!! Form::text('avance_gastos', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('total_nomina_mensual', 'Total de nomina mensual') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('total_nomina_mensual', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('total_personal', 'Total de personal') !!}
                        {!! Form::text('total_personal', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('nomina_administrativa', 'Nomina administrativa') !!}
                        @if(isset($escuela))
                            @if($escuela->organigrama != '')
                                <a target="_blank" href="/uploads/{{ $escuela->nomina_administrativa  }}">Ver archivo</a>
                            @endif
                        @endif
                        {!! Form::file('nomina_administrativa', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('nomina_academica_plaza', 'Nomina académica con plaza') !!}
                        @if(isset($escuela))
                            @if($escuela->organigrama != '')
                                <a target="_blank" href="/uploads/{{ $escuela->nomina_academica_plaza  }}">Ver archivo</a>
                            @endif
                        @endif
                        {!! Form::file('nomina_academica_plaza', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('nomina_honorarios', 'Nomina honorarios') !!}
                        @if(isset($escuela))
                            @if($escuela->organigrama != '')
                                <a target="_blank" href="/uploads/{{ $escuela->nomina_honorarios  }}">Ver archivo</a>
                            @endif
                        @endif
                        {!! Form::file('nomina_honorarios', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-12">
                        {!! Form::label('observaciones_financieras', 'Observaciones Financieras') !!}
                        {!! Form::textArea('observaciones_financieras', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Datos de infraestructura
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('recursos_obra', 'Recursos en obra') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('recursos_obra', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('origen_recursos', 'origen del recurso') !!}
                        {!! Form::text('origen_recursos', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('porcentaje_avance', 'Porcentaje de avance') !!}
                        <div class="input-group">
                            {!! Form::text('porcentaje_avance', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('recursos_ejercer', 'Recursos por ejercer') !!}
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('recursos_ejercer', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-5">
                        {!! Form::label('fecha_terminacion', 'Fecha de terminación') !!}
                        {!! Form::text('fecha_terminacion', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div   class="col-md-12">
                        {!! Form::label('observaciones_infraestructura', 'Obervaciones de infraestructura') !!}
                        {!! Form::textArea('observaciones_infraestructura', null, ['class' => ' form-control', 'placeholder' => 'Nombre del Titular']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>