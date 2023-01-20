<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Equipement extends Model
{
    use HasFactory;
    protected $table = "equipements";
    protected $fillable = [
        "designation",
        "description",
        "categorie_id",
        "dateDebut",
        "prix",
        "marque",
        "reference",
        "piece_de_rechange",
        "document",
        "service_id",
        "image"

    ];

    public function category(){
        return $this->belongsTo(Categorie::class);
    }
}
