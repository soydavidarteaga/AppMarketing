@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Agenda</div>

                <div class="panel-body">
                  <div class="form-group">
                    {!! Form::open(['url' => 'app/Configuraciones','method' => 'POST']) !!}
                    @include('configs.forms.form')
                    {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
