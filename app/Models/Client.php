<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = ['name', 'phone', 'gender', 'upi', 'location', 'amount', 'purpose'];
    protected $primaryKey = 'id';
    public $timestamp = true;
}
