<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category - {{ ucfirst($category) }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li>
                <a href="#">Category</a>
                <ul>
                    <li><a href="{{ route('category.show', 'Interactive Multimedia') }}">Interactive Multimedia</a></li>
                    <li><a href="{{ route('category.show', 'Software Engineering') }}">Software Engineering</a></li>
                </ul>
            </li>
            <li><a href="{{ route('writers.index') }}">Writers</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
        </ul>
    </nav>

    <header>
        <h1>Category: {{ ucfirst($category) }}</h1>
    </header>

    <section>
        @if ($posts->isEmpty())
            <p>No posts available in this category.</p>
        @else
            @foreach ($posts as $post)
                <article>
                    <h2>{{ $post->title }}</h2>
                    <p>Posted on: {{ $post->post_date }} by {{ $post->author }}</p>
                    <p>{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('detail.show', $post->id) }}">Read More</a>
                </article>
            @endforeach
        @endif
    </section>
</body>
</html>
