<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'ql_menus';
    protected $fillable = ['name', 'status', 'parent_id', 'slug'];

    /**
     * @return HasMany
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
