<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aduan_tb extends Model
{
    public $table = "aduan_tb";
    public $PrimaryKey="aduan_id";
    public $incrementing = true;	
    public $timestamps = false;
    protected $fillable = [
        'Nama_Pengadu',
        'No_Tel',
        'Email',
        'Aduan_Info',
    ];

    use HasFactory;

}
