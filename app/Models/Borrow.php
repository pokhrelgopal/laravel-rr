<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    protected $table = 'borrows'; // table name
    protected $fillable = [
        'studentId',
        'bookId',
        'takenDate',
        'broughtDate',
    ];
}
