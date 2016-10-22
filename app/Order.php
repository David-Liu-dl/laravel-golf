<?php
/**
 * Created by PhpStorm.
 * User: yuhaoliu
 * Date: 20/10/2016
 * Time: 2:39 PM
 */

namespace App;


use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','phone','email','hand','book_block'];

}