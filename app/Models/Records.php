<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'authorName',
        'bookName',
        'amountBooks',
    ];
}
