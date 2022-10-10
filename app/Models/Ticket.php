<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Ticket extends Model
{

    use HasFactory,Notifiable;
    protected $fillable=["ticket_code","user_id","problem","description","status"];

}
