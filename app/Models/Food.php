<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Food extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mealtimes()
    {
        return $this->hasMany(Mealtime::class);
    }

    public static function getAllFoods()
    {
        return Cache::rememberForever('food.all', function() {
            return self::latest('id')->paginate(1000);
        });
    }

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public static function flushCache()
    {
        Cache::forget('food.all');
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
