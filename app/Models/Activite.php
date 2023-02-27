<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable=[
        "description_activite",
        "duree",
        "technicien_id",
        "date",
        "tache_id",
    ];

    public function technicien(){
        return $this->hasMany(Technicien::class,'technicien_id', 'id');
    }

    public $timestamps = false;
}
