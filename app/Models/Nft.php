<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    protected $table = "nft";
    protected $primaryKey = "id";
    public $timestamps = false;
}
