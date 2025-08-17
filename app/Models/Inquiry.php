<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'full_name','email','brand','website',
        'services','ideal_client','pain_points','pain_points_other',
        'frustration_details','package','timeline','referral','calendly'
    ];

    protected $casts = [
        'pain_points' => 'array',
        'calendly'    => 'array',
    ];
}
