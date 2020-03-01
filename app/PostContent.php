<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostContent extends Model
{
    use SoftDeletes;

    protected $fillable = ['id','id_post','id_content_type','content','order'];
}
