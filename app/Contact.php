<?php

namespace Marketing;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','agends_id'];
    protected $guarded = ['id'];
}
