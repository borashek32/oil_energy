<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $fillable = ['name', 'sum', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
