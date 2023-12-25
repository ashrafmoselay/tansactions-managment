<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transfers';

    protected $fillable = ['from_user_id', 'to_user_id', 'amount', 'status', 'status_note'];


    public function fromuser()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'id')->withDefault(['id' => null]);
    }

    public function touser()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id')->withDefault(['id' => null]);
    }

    public function slug()
    {
        return $this->id;
    }

    public function scopeFilter($query)
    {
        $to_user_id = request('to_user_id');
        $from_user_id = request('from_user_id');
        $fromdate = request('fromdate');
        $todate = request('todate');
        $status = request('status');
        if ($status)
            $query->where('status', $status);

        if ($to_user_id)
            $query->where('to_user_id', $to_user_id);

        if (canUser('users-index')) {
            if ($from_user_id)
                $query->where('from_user_id', $from_user_id);
        } else {
            $query->where('from_user_id', auth()->user()->id);
        }
        if ($fromdate)
            $query->whereRaw("DATE(created_at) >= '{$fromdate}'");

        if ($todate)
            $query->whereRaw("DATE(created_at) <= '{$todate}'");


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
