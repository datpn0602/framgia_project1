<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'full_name',
        'address',
        'phone',
        'description',
        'status',
        'date',
        'restaurant_id',
    ];
    public $timestamps = false;

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function orderFood()
    {
        return $this->hasMany(OrderFood::class);
    }
}
