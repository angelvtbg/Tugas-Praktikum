<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kd extends Model
{
    use HasFactory;

    protected $table = 'kd';
    protected $primaryKey = 'id_dosen';

    protected $fillable = ['id_dosen', 'no_identitas'];
    public $timestamps = false;

    public function mahasiswa(){
        return $this-> belongsTo(Dosen::class);
    }
}

