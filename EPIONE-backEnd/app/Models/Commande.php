<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailCommande;
use App\Models\Client;

class Commande extends Model
{
    use HasFactory;
    public function detailCommande() {
        return $this->hasMany(DetailCommande::class);
    }
    public function client() {
        return $this->belongsTo(Client::class);
    }
}
