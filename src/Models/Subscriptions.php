<?php

namespace Parallax\SubscriptionPackage\Model;

use Illuminate\Database\Eloquent\Model;
use Parallax\SubscriptionPackage\Traits\HasSubscriptions;

class Subscriptions extends Model
{
    use HasSubscriptions;

    protected $table = 'subscriptions';
    protected $primaryKey = 'id';
    protected $fillable = ['subscriptionable_id', 'subscriptionable_type', 'subscription_plan_id', 'is_expired'];


    public function subscriptionable()
    {
        return $this->morphTo();
    }
}
