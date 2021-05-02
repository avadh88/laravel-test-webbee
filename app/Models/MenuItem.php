<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
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
        $this->table = 'menu_items';
    }

    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function childrenData()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }

    // recursive, loads all descendants
    public function children()
    {
    return $this->childrenData()->with('children');
    }
}
