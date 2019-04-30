<?php
namespace App\Observers;

use App\Notifications\NewItem;
use App\Equipo;
use App\User;

class ItemObserver
{
    public function created(Equipo $equipo)
    {
        $author = $equipo->user;
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new NewItem($equipo,$author));
        }
    }
}
