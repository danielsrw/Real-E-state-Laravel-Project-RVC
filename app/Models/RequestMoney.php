<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestMoney extends Model
{
    use HasFactory;

    protected $table = 'request_money';
    protected $fillable = ['user_id', 'name', 'email', 'phone', 'amount', 'reason', 'status'];
    protected $primaryKey = 'id';
    public $timestamp = true;

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
