<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestService extends Model
{
    use HasFactory;

    protected $table = 'request_services';
    protected $fillable = ['category', 'p_name', 'p_email', 'p_phone', 'p_upi', 'p_address', 'p_institution', 'p_purpose', 'i_name', 'i_applicant', 'i_address', 'i_upi', 'i_client_name', 'i_client_address', 'i_purpose', 'i_description'];
    protected $primaryKey = 'id';
    public $timestamp = true;
}
