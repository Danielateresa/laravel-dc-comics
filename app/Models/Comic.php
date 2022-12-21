<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    //consento il riempimento dell'array con lechiavi relative
    protected $fillable = ['title','description','thumb','price','series','sale_date','type'];
}