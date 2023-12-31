<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketLabel extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'label_id'];
}
