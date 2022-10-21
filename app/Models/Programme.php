<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    // hna golnalah rayhin nakhadmou b table semouha table
    protected $table='Programme';
    protected $primaryKey = 'numéroprog';
    public $incrementing = false;

    // 
    protected $fillable = ['numéroprog', 'intitulé'];
public $timestamps=false;
}
