@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tus Mensajes</div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($messages as $message)
                        <tr>
                          <td>{{$message->subject}}</td>
                          <td><a href="{{url("app/Mensajes/".$message->id)}}">Ver</a> - <a href="{{url("app/Mensajes/".$message->id."/edit")}}">Editar</a> - <a href="{{url("app/Mensajes/".$message->id."/SendMail")}}">Enviar</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
