<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliear extends Model
{
    protected $table ='suppliears';
    protected $fillable = array('id','supplierName','supplierEmail','supplierContact','supplierPosition');
}
