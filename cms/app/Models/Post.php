<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deteleted_at'];
//    /**
//     * The table associated with the model.
//     *
//     * @var string
//     */
//    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content'
    ];

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function photos() {

        return $this->morphMany('App\Models\Photo', 'imageable');

    }

    public function tags() {

        return $this->morphToMany('App\Models\Tag', 'taggable');

    }

    public function getPathAttribute($value) {
        return $this->directory . $value;
    }

    public static function scopeLatest($query) {
        return $query->orderBy('id', 'DESC')->get();
    }
}
