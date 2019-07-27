<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by'];

    //Mutators

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_stristr($this->title,0,40) . "." . \Carbon\Carbon::now()->format('dmyHi'),
            '-');
    }

    // Get childreen category

    public function children()
    {
        return $this->hasMany(self::class,'parent_id');
    }

}
