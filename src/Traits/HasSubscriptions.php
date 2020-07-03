<?php
namespace Parallax\SubscriptionPackage\Traits;
use App\User;
use Parallax\SubscriptionPackage\Model\Subscriptions;

trait HasSubscriptions
{

    public function subscriptions()
    {
        return $this->morphMany(Subscriptions::class, 'subscriptionable');
    }

    /*public function user()
    {
        dd($this);
        return $this->belongsTo(User::class);
    }*/
}
