<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<span>Category: <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
