<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;



    // questo nel caso il nome nel model sia diverso dalla tablella 
    // e laravel gia considera grammaticalmente il multiplo di quello che gli hai scritto 
    // da selezionare, in questo caso gli si dice come si chiama
    // in piu gli dai primary key eccc per farlo arrivare alla tabella che ti serve 

    // public $table = 'movies';
    // public $primaryKey = 'ISBM';
    // public $primaryKeyType = 'string';
}
