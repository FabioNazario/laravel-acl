<?php

namespace App\Policies;

use App\Book;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    public function viewBook(User $user, Book $book){

        return $user->id == $book->user_id;
    }

    public function before(User $user, $ability){
        return $user->admin == true;
    }
}
