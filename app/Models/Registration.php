<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['major_id'];

    // Relations
    public function registrant()
    {
        return $this->belongsTo(Registrant::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
