<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = ['title', 'image', 'status', 'description'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
