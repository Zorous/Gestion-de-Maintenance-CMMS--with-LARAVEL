<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipement;


class Categorie extends Model
{
    use HasFactory;

protected $fillable=[
    'id',
    'categorie'
];




// public function equipements(){
//     return $this->belongsTo(Equipement::class, 'categorie_id', 'id');
// }


}



