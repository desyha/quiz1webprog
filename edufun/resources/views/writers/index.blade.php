<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writers</title>
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
        <h1>Writers</h1>
    </header>

    <section>
        <h2>Choose a Writer</h2>
        <ul>
            @foreach ($writers as $writer)
                <li><a href="{{ route('writer.show', $writer->author) }}">{{ $writer->author }}</a></li>
            @endforeach
        </ul>
    </section>
</body>
</html>
