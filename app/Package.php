<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Package extends Model {
    
    protected $fillable = ['title','description','features', 'video_url','pic_url','price'];

}