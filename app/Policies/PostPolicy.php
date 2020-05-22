<?php

namespace App\Policies;

use App\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

//    public function before(User $user) {
//        if ($user->id == 11) {
//            return true;
//        }
//        return false;
//    }
    public function view(User $user, Post $post) {
//        dd($user->id, $post->user_id);
//        return $user->id !== $post->user_id;
    }
}
