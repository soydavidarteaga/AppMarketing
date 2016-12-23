@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tus Agendas</div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($agends as $agend)
                        <tr>
                          <td>{{$agend->group}}</td>
                          <td><a href="{{url("app/Agenda/".$agend->id)}}">Ver</a> - <a href="{{url("app/Agenda/".$agend->id."/edit")}}">Editar</a></td>
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
