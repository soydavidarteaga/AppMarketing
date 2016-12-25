@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tus Configuraciones</div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Remitente</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($configs as $config)
                        <tr>
                          <td>{{$config->name}}</td>
                          <td>{{$config->from}}</td>
                          <td><a href="{{url("app/Configuraciones/".$config->id."/edit")}}">Editar</a></td>
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
