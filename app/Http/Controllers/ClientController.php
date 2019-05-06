<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Blog::all();
        return $clients;
    }
}
