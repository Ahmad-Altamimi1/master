<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'breif',
        'description2',
        'description3',
        'location',
        'period',
        'time',
        'image',
        'created_at',

    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
 
    }
    public function reviews()
    {
        return $this->belongsTo(products::class);
    }
  
   
}