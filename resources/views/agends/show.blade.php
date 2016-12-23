@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$agend->group}} <div class="pull-right"><a href="{{url('app/Contacto/create/'.$agend->id)}}">Agregar Contacto</a></div></div>

                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                          <td>{{$contact->name}}</td>
                          <td>{{$contact->email}}</td>
                          <td><a href="{{url("app/Contacto/destroy/".$contact->id)}}">Eliminar</a></td>
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
