<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id','name','address_line','city','region',
        'country','year_established','website','brochure_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
