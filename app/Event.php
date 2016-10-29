<?php
/**
 * Created by PhpStorm.
 * User: yuhaoliu
 * Date: 25/10/2016
 * Time: 3:26 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name','phone','email','types','comment'];
}