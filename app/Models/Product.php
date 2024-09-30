<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    //defining its attributes
    protected $fillable = ['name', 'price', 'description'];
    //defining the tostring method
    public function toString()
{    
    return $this->name . '-$' . $this->price . ': ' . $this->decription;
}
}
