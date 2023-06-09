<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;

class Client extends Model
{
    use HasFactory;
    public function commande() {
        return $this->hasMany(Commande::class);
    }
}
