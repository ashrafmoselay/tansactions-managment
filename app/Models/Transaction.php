<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\User;


class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = ['user_id', 'title', 'type', 'amount', 'note','transaction_date'];
    
    
    
    public function slug()
    {
        return $this->id;
    }
    
	public function user() 
	{
		return $this->belongsTo(User::class, 'user_id', 'id')->withDefault(['id' => null]);
	}

    
    public function scopeFilter($query)
    {
        $fromdate = request('fromdate');
        $todate = request('todate');
        if($fromdate)
            $query->whereRaw("DATE(transaction_date) >= '{$fromdate}'");

        if($todate)
            $query->whereRaw("DATE(transaction_date) <= '{$todate}'");


        return $query;
    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('orderDesc', function (Builder $builder) {
            $builder->orderBy('id', 'DESC');
        });
    }
}
