<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;
    protected $fillable = ['userId','title','description','soundPath','imagePath','statusApprove','category'];
}
