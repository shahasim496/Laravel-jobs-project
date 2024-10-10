<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','type','location','description','salary','name','cdescription','contactEmail','contactPhone'
        
        // Add more attributes as needed
    ];
}
