<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Details extends Model
{
    use HasFactory;
    protected $table="_details";
    protected $primarykey = "client_id";
}

