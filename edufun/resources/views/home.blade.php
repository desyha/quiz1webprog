<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - Homepage</title>
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
        <p>BANNER EDUFUN</p>
        <h1>Welcome to EduFun</h1>
        <p>Your free education platform!</p>
    </header>

    <section>
        <h2>Popular Articles</h2>
        @foreach ($posts as $post)
            <article>
                <h3>{{ $post->title }}</h3>
                <p>Category: {{ $post->category }}</p>
                <p>Posted on: {{ $post->post_date}} by {{ $post->author }}</p>
                <p>{{ Str::limit($post->content, 100) }}</p>
            </article>
        @endforeach
    </section>
</body>
</html>
