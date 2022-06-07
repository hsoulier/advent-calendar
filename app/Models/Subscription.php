<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Cashier\Subscription as CashierSubscription;


class Subscription extends CashierSubscription {
    use HasFactory;

    public function calendar() {
        return $this->hasOne(Calendar::class, 'id', 'calendar_id');
    }
}
