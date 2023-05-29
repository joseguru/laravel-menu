<?php

namespace JoseGuru\LaravelMenu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{

     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $casts = [
        'enabled' => 'boolean',
    ];

    public function getTable()
    {
        return config('menu.table_names.menu_items', parent::getTable());
    }

    public function menu(): BelongsTo
    {
        return $this->BelongsTo(config('menu.models.menu'));
    }

    public function setWeightAttribute($weight)
    {
        $this->attributes['weight'] = $weight ?? 0;
    }
   
}