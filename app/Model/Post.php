<?php

namespace App\Model;



use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $fillable = ['title', 'body'];
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(Hause_users::class, 'user_id'  );
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }


}
