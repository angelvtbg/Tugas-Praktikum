<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';

    protected $fillable = ['id_dosen', 'nidn', 'email', 'nama', 'no_hp'];
    public $timestamps = false;

    public function kd(){
        return $this-> hasOne(Kd::class, 'id_dosen');
    }
}