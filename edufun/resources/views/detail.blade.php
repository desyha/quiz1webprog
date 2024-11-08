<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
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
        <h1>{{ $post->title }}</h1>
        <p>Category: {{ $post->category }}</p>
        <p>Posted on: {{ $post->post_date }} by {{ $post->author }}</p>
    </header>

    <article>
        <p>{{ $post->content }}</p>
    </article>
</body>
</html>
