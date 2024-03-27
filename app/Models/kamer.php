<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamer extends Model
{
    protected $fillable = [
        "naam",
        "foto",
        "nummer",
        "opervalkte",
        "minibar",
        "aantal_personen",
        "bad",
        "prijs"];

    use HasFactory;
}
