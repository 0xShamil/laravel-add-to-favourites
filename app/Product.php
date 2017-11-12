<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function favourites()
    {
    	return $this->morphToMany(User::class, 'favouriteable');
    }

    /**
     * This will check if a particular user has favourited an product
     */
    public function favouritedBy(User $user)
    {
    	return $this->favourites->contains($user);
    }
}