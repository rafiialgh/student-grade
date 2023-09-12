<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'student_tables';
    protected $fillable = [
        'nama',
        'nim',
        'quiz',
        'tugas',
        'absen',
        'praktek',
        'uas',
        'nilai_akhir',
        'grade'
    ];
}
