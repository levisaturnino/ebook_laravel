<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
	/**
	 * @var Category
	 */
	private $category;

	public function __construct(Category $category)
	{
		$this->category = $category;
	}

	public function index($slug)
    {
    	$category = $this->category->whereSlug($slug)->first();
		$posts = $category->posts()->paginate(15);
        $categories = Category::all();

    	return view('site.category', compact('category', 'posts','categories'));
    }
}
