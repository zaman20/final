<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $table ='rent';
    protected $fillable =['id','buyer_name','buyer_phone','house','monthly_cost'];
}
