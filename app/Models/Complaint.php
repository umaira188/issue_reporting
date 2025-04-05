<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_id',
        'user_id',
        'category',
        'department', // if you’re using this column
        'address',
        'details',
        'image',
        'status'
    ];

    // 👇 Relationship to the user who submitted the complaint
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
