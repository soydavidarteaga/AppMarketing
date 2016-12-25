<?php

namespace Marketing;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['body','subject','user_id'];
    protected $guarded = ['id'];
}
