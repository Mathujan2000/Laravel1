<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{

    use HasFactory;

    protected $table = 'support'; // De tabelnaam
    protected $primaryKey = 'idsupport'; // Het primaire sleutelveld
    public $incrementing = true; // Indien de primaire sleutel een auto-increment is
    protected $keyType = 'int'; // Het gegevenstype van de primaire sleutel

    public $timestamps = true; // Inschakelen van timestamps

    protected $fillable = [
        'name',
        'email',
        'message'
    ];

}
