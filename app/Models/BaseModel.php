<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use HasFactory, SoftDeletes;

    final public const TIMESTAMP_STORE_FORMAT = 'datetime:d/m/Y H:i:s';

    final public const DATE_STORE_FORMAT = 'datetime:d/m/Y';

    final public const TIME_FORMAT = 'H:i:s';

    final public const DATE_FORMAT = 'd/m/y';

    final public const TIMESTAMP_FORMAT = 'd/m/y H:i:s';

    public const PAGINATION_OFFSET = 50;

    protected $casts = [
        'created_at' => self::TIMESTAMP_STORE_FORMAT,
        'updated_at' => self::TIMESTAMP_STORE_FORMAT,
        'deleted_at' => self::TIMESTAMP_STORE_FORMAT,
    ];

}
