<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'nom',
        'pays',
        'ville',
        'cartier',
        'email',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
