<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
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
        'Description',
        'Price',
    ];
}
