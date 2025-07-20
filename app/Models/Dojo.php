<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ninja;

class Dojo extends Model
{

    protected $fillable = ["name", "description", "location"];
    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    // eloquent now knows that Dojo and Ninja belong together
    // Dojo has one to many relationship with Ninja, because one dojo can have many ninjas
    public function ninja()
    {
        return $this->hasMany(Ninja::class);
    }
}
