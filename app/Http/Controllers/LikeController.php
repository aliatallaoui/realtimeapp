<?php

namespace App\Http\Controllers;

use App\Model\Like;

use App\Model\Reply;

class LikeController extends Controller
{

    
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }


    public function LikeIt(Reply $reply)
    {
        $reply->likes()->create(
            [
                'user_id' => '1',
            ]
           );
    }
    public function unLikeIt(Reply $reply)
    {
        // $reply->likes()->where(['user_id', auth()->id()])->first()->delete();
        $reply->likes()->where('user_id', 1)->first()->delete();
    }
}
