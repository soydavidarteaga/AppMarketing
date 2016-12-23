<?php

namespace Marketing;

use Illuminate\Database\Eloquent\Model;

class Agend extends Model
{
  protected $table = 'agends';
    protected $fillable = ['group','user_id'];
    protected $guarded = ['id'];
}
