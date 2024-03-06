<?php
namespace App\Repository;

use App\Models\User;
class manageUserRepository implements ImanageUserRepository {

    public function getAlluser()
    {
         return User::all();
    }

}
