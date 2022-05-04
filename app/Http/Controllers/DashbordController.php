<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashbordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashbord');
    }
}
