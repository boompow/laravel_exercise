<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dojo;

class Ninja extends Model
{
    protected $fillable = ["name", "skill", "bio", "dojo_id"];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    // eloquent now knows that Dojo and Ninja belong together
    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
