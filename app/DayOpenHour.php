<?php
/**
 * Created by PhpStorm.
 * User: yuhaoliu
 * Date: 20/11/2016
 * Time: 11:38 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayOpenHour extends Model
{
    public $timestamps = false;

    protected $fillable = ['day_of_Week','title','open','close','availability'];
}