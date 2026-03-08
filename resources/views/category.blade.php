<h1>Category: {{ $category->name }}</h1>

@foreach($category->posts as $post)
<div>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->excerpt }}</p>
    <a href="/post/{{ $post->slug }}">Read More</a>
</div>
@endforeach
