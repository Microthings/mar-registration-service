<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relations
    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function registrations()
    {
        return $this->belongsToMany(Registration::class, 'registration_step')->withPivot('detail', 'is_passed');
    }
}
