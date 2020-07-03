<?php

namespace Parallax\SubscriptionPackage\Model;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{

    protected $table = 'subscription_plans';
    protected $primaryKey = 'id';

    protected $fillable = ['plan_name_en', 'plan_name_si', 'plan_name_ta', 'description_en', 'description_si', 'description_ta',
        'price', 'reply_count', 'validity', 'off_percentages', 'is_active'];
    protected $casts = [
        'off_percentages' => 'array'
    ];


}
