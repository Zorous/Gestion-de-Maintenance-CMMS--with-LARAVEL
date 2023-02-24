<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Technicien extends Model
{
    use HasFactory;
    protected $table = "techniciens";
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'specialite_id'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }


}
