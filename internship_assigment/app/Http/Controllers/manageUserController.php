<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Repository\ImanageUserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class manageUserController extends Controller
{
    public $manageUser;

    public function __construct(ImanageUserRepository $manageUser)
    {
        $this->manageUser = $manageUser;
    }

    public function index()
    {
        $manageUser = $this->manageUser->getAlluser();
    
        return view('user.getAlluser')->with('manageUser' ,$manageUser);
    }
}
