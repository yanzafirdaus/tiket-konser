<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunUser extends Model
{
    use HasFactory;

    protected $table = 'AkunUser';
    protected $primaryKey = 'user_id';
}
