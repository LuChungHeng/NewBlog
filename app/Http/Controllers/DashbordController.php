<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        dd(Post::find(4)->created_at);
        return view('dashbord');
    }
}
