<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Level;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrator';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    public function level(){
        return $this->belongsTo(Level::class, 'id_level');
    }
}
