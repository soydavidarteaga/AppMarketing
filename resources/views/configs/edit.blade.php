@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Configuraciones <div class="pull-right">
                  <a href="{{route('Configuraciones.destroy',$config->id)}}" class="btn btn-danger">Eliminar</a>
                </div></div>

                <div class="panel-body">
                  <div class="form-group">
                    {!!Form::model($config,['url'=>['app/Configuraciones',$config],'method'=>'PUT'])!!}
                    @include('configs.forms.form')
                    {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
                    {!! Form::close() !!}

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
