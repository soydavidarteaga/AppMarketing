@extends('layouts.app')
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Escribe un mensajes</h2>
            <div class="panel panel-default">

                <div class="panel-heading">
                  {!!Form::model($message,['url'=>['app/Mensajes',$message],'method'=>'PUT'])!!}
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Asunto" name="subject" value="{{$message->subject}}">
                  </div>
                </div>

                <div class="panel-body">
                    <textarea id="summernote" name="body" >
                      {{$message->body}}
                    </textarea>
                </div>
                <div class="panel-footer">
                  <input type="submit" name="Enviar" value="Guardar" class="btn btn-success">
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

<script>
  $(document).ready(function() {
      $('#summernote').summernote({
        height: 300                 // set editor height
});
  });
</script>
@endsection
