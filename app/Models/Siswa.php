<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable =[
        'id',
        'name',
        'alamat'
        // 'description_facility',
        // 'created_by',
      ];
    use HasFactory;
}
