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
}
