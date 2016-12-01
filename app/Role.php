<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'alias'
    ];

    protected $primaryKey = 'role_id';

    protected $table = 'role';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }
}
