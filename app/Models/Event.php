<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
    protected $primaryKey = 'id';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'events';
    }
    
    /**
     * Get the comments for the blog post.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class,'event_id');
    }
}
