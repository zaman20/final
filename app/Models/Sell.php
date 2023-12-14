<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    protected $table ='sell';
    protected $fillable =['id','buyer_name','buyer_phone','house','paid'];
}
