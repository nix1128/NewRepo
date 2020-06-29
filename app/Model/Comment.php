<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    protected $dates = ['deleted_at'];
    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'user_id', 'post_id'];

    /**
     * The belongs to Relationship
     *
     * @var array
     */
    public function user()
    {
        return $this->belongsTo(Hause_users::class, 'user_id');
    }

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comment()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
