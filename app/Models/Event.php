<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
    protected $primaryKey = 'id';


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * Get the comments for the blog post.
     */
    public function workshop()
    {
        return $this->hasMany(Workshop::class,'event_id');
    }
}
