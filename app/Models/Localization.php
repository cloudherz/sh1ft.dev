<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    protected $table = 'localization';
    protected $primaryKey = 'key_id';
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'en',
        'ru',
        'bg',
        'jp'
    ];
}
