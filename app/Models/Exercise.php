<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'muscle_id'];

    public function muscle()
    {
        return $this->belongsTo(Muscle::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
