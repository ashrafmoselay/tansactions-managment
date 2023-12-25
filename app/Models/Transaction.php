<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transactions';

    protected $fillable = ['user_id', 'title', 'type', 'amount', 'note', 'transaction_date'];



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
        $user_id = request('user_id');
        if (canUser('users-index')) {
            if ($user_id)
                $query->where('user_id', $user_id);
        } else {
            $query->where('from_user_id', auth()->user()->id);
        }


        if ($fromdate)
            $query->whereRaw("DATE(transaction_date) >= '{$fromdate}'");

        if ($todate)
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
