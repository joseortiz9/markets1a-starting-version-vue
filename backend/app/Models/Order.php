<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory, Uuid;

    protected $fillable = ['user_id', 'order_status_id', 'payment_method_id', 'observations'];


    protected function keyIsUuid(): bool {
        return false;
    }
    public static function bootUuid(): void {
        static::creating(function (self $model): void {
            // Automatically generate a UUID if using them, and not provided.
            if (empty($model->uuid)) {
                $model->uuid = $model->generateUuid();
            }
        });
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function delivery(): HasOne {
        return $this->hasOne(Delivery::class);
    }

    public function orderStatus(): HasOne {
        return $this->hasOne(OrderStatus::class);
    }

    public function paymentMethod(): HasOne {
        return $this->hasOne(PaymentMethod::class);
    }

    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
