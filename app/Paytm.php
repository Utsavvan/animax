<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    protected $table = 'paytm';

    protected $fillable = ['name','mobile','email','status','fee','order_id','transaction_id'];
    //status = 0, failed,
    //status = 1, success,
    //status = 2, processing

}
