<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliear extends Model
{
    protected $table ='suppliear';
    protected $fillable = array('id','supplierName','supplierEmail','supplierContact','supplierPosition');
}
