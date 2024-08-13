<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table='produits';
    protected $primaryKey='id';
    protected $fillable=['title','description','price','quantite','fournisseur'];
    use HasFactory;
}
