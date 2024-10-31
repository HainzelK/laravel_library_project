<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class journal extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'Title',
        'Author',
        'Publisher',
        'Year_Published',
        'Pages',
        'Abstract',
        'Price',
    ];
}
