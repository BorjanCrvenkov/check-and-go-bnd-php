<?php /** @noinspection ALL */

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    /**
     * @return HasMany
     */
    public function menuItems(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
}
