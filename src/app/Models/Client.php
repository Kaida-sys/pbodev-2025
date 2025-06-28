<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Client extends Model
{
    protected $table = 'clients';
    protected $guarded = ['id'];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($client) {
            if (empty($client->api_token)) {
                $client->api_token = Str::random(3);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}