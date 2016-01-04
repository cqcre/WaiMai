<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {

    /**
     * Return products which have this unit.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product() {
        return $this->hasMany('App\Model\Product');
    }

}
