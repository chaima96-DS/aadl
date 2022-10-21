<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table='Partie';
    protected $primaryKey = 'numéroprojet';
    public $incrementing = false;

    // 
    protected $fillable = ['numéroprojet', 'intitulé','wilaya', 'numéroprog'];
public $timestamps=false;
}
