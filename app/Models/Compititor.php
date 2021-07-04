<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compititor extends Model
{
    use HasFactory;

    public $table = 'compititor';
    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at'
    ];
}