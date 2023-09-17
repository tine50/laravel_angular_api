<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = ['prenom', 'nom', 'age', 'classe_id'];

    public function classe() {
        return $this->belongsTo(Classe::class);
    }
}
