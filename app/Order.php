<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id', 'user_id', 'additional_information', 'status'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function order_status()
    {
        return $this->hasOne(OrderStatus::class, 'id', 'status');
    }

    public function getStatusClassAttribute()
    {
        $statusClass = '';
        if($this->attributes['status'] === 1){
            $statusClass = 'warning';
        }elseif($this->attributes['status'] === 2){
            $statusClass = 'primary';
        }elseif ($this->attributes['status'] === 3){
            $statusClass = 'success';
        }else{
            $statusClass = 'danger';
        }

        return $statusClass;
    }
}
