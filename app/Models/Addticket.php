<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addticket extends Model
{
   
    use HasFactory;
    protected $table = "add_tickets";
    protected $fillable = ['id','userid','title','priority','departments','categories','agentname','attachments','descriptions'];
}