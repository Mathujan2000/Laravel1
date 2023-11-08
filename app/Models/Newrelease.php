<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newrelease extends Model
{
    use HasFactory;

    protected $table = 'newrelease'; // De tabelnaam
    protected $primaryKey = 'id'; // Het primaire sleutelveld
    public $incrementing = true; // Indien de primaire sleutel een auto-increment is
    protected $keyType = 'int'; // Het gegevenstype van de primaire sleutel

    protected $fillable = [
        'naamGame',
        'releaseDate'
    ];
}
