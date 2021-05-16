<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\MenuItem','parent_id', 'id')->with('children');
    }
}
