<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Morning extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function foods()
    {
        return $this->hasMany(Food::class,'food_id', 'id');
    }


    public static function getAllmorning($post_id)
    {
        return Cache()->remember('morning-all', 60 * 60 * 24, function () use ($post_id) {
            return   DB::table('mornings')->where('post_id', $post_id)->get();
        });
    }



    public static function flushCache()
    {
        Cache::forget('morning.all');
    }
    protected static function boot()
    {
        parent::boot();

        static::updated(function () {
            self::flushCache();
        });

        static::created(function() {
            self::flushCache();
        });

        static::deleted(function() {
            self::flushCache();
        });
    }
}
