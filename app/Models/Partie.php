<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    use HasFactory;
    protected $table='Partie';
    protected $primaryKey = 'idpartie';
    public $incrementing = false;

    // 
    protected $fillable = ['idpartie', 'nompartie'];
public $timestamps=false;
}
