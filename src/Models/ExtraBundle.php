<?php

namespace ParallaxTechnologies\SubscriptionPackage\Model;

use Illuminate\Database\Eloquent\Model;

class ExtraBundle extends Model
{
    protected $table = 'extra_bundles';
    protected $primaryKey = 'id';
    protected $fillable = ['reply_count', 'expire_within_days', 'price', 'is_active'];
}
