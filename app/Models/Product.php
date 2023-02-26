<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'description' , 'price' , 'img' , 'user_id'
    ];

    public function user(){
  //un prodotto può appartenere a un solo utente

    return $this->belongsTo(User::class);
    }

}
