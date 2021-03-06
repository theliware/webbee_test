<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     */
    public function Workshop(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Workshop', 'event_id', 'id');
    }
}
