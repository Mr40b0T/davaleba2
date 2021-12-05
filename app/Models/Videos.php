<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'ytvideos';
    protected $fillable = ['link','title','desc','name'];
    use HasFactory;
}
