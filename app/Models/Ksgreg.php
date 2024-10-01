<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksgreg extends Model
{
    use HasFactory;
    protected $table = 'ksgreg'; // Specify the table name explicitly if different from the class name convention
    protected $fillable = [
        'fname',
        'country',
        'pysicaladress', // Ensure this matches the column name in your database
        'phone',
        'email',
        'category',
        'orgarganisation', // Ensure this matches the column name in your database
        'position',
        'nationality',
        'message',
        
        ' diet',
        'reserve',
        'file_name',
    
    ];
}
