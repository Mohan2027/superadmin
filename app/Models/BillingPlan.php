<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingPlan extends Model
{
    protected $table = 'billing_plans';

    protected $fillable = ['plan_name']; 
    public $timestamps = true;

    public function accounts()
    {
        return $this->hasMany(Account::class, 'billing_plan_id');
    }
}
