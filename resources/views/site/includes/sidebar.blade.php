<h2>Categorias</h2>
<hr>
@foreach($categories  as $category)
     <a class="nav-link" href="{{ route('site.category', ['slug' => $category->slug]) }}">{{$category->name}}</a>
@endforeach
