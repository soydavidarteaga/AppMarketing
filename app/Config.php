<?php

namespace Marketing;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
  protected $table = 'configs';
    protected $fillable = ['from','name','user_id'];
    protected $guarded = ['id'];
}
