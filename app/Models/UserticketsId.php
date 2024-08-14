<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserticketsId extends Model
{
    use HasFactory;
    protected $table = "user_tickets_ids";
    protected $fillable = ['userid','ticketid'];
}
