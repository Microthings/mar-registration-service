<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relations
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
    public function majors()
    {
        return $this->belongsToMany(Major::class, 'major_period')->withPivotValue('is_active', 1);
    }
}
