<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
	/**
	 * @var Post
	 */
	private $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function index()
	{
        $posts = $this->post->orderBy('id', 'DESC')->paginate(15);

        $categories = Category::all();

		return view('site.posts.index', compact('posts','categories'));
	}

	public function single($slug)
	{
        $post = $this->post->whereSlug($slug)->first();
        $categories = Category::all();

		return view('site.posts.single', compact('post','categories'));
	}
}
