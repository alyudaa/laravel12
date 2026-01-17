<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostController extends Controller
{
public function index()

{
return view('post.index');
}
public function show($id)

{
return view('post.show', ['id' => $id]);
}

public function about()
{
return view('post.about');
}
}