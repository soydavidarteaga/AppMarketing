@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tus Clientes</div>

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
                      <tr>
                        <td>Hello</td>
                        <td>Hola</td>
                        <td>Accion</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
