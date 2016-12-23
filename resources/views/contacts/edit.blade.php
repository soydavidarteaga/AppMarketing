@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Agenda <div class="pull-right">
                  <a href="{{url('app/Contacto/'.$contact->id.'/destroy')}}" class="btn btn-danger">Eliminar</a>
                </div></div>

                <div class="panel-body">
                  <div class="form-group">
                    {!!Form::model($contact,['url'=>['app/Contacto',$contact],'method'=>'PUT'])!!}
                    @include('contacts.forms.form')
                    {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
                    {!! Form::close() !!}

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
