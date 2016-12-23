<div class="form-group">
  {{ Form::label('Nombre', null, ['class' => 'control-label']) }}
  {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre de el Contacto'])!!}
</div>
<div class="form-group">
  {{ Form::label('Email', null, ['class' => 'control-label']) }}
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa un Email'])!!}
</div>
<input type="hidden" name="agends_id" value="{{$id}}">
