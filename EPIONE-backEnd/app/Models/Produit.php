<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;
use App\Models\DetailCommande;

class Produit extends Model
{
    use HasFactory;
    public function employe() {
        return $this->belongsToMany(Employe::class);
    }
    public function detailCommande() {
        return $this->hasMany(DetailCommande::class);
    }
}
