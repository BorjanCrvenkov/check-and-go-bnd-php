<?php /** @noinspection PhpUnused */

namespace App\Models;

use App\Traits\ExtendedEloquentMethodsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BaseUserModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, ExtendedEloquentMethodsTrait;

    final protected const TIMESTAMP_STORE_FORMAT = 'datetime:d/m/Y H:i:s';

    final protected const DATE_STORE_FORMAT = 'datetime:d/m/Y';

    final public const TIMESTAMP_FORMAT = 'd/m/Y H:i:s';

    final public const DATE_FORMAT = 'd/m/Y';

    public const DEFAULT_USER_STATUS = 1;

    protected $guarded = [
        'id'
    ];

    protected $with = ['role'];

    protected $casts = [
        'employment_date' => self::DATE_STORE_FORMAT,
        'date_of_birth'   => self::DATE_STORE_FORMAT,
        'created_at'      => self::TIMESTAMP_STORE_FORMAT,
        'updated_at'      => self::TIMESTAMP_STORE_FORMAT,
        'deleted_at'      => self::TIMESTAMP_STORE_FORMAT,
    ];

    protected $attributes = [
        'status' => self::DEFAULT_USER_STATUS,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
}
