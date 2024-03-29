<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branches;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'name',
        'phone_number',
        'photo',
    ];

    public function branches()
    {
        return $this->belongsTo(Branches::class, 'branch_id');
    }
};


