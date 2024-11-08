<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        <h1>About Us</h1>
    </header>

    <section>
        <h2>About EduFun</h2>
        <p>EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website</p>
        <p>Hingaa Juni 2024, Edufun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi pendididkan Indonesia dengan mengedepankan cara berpikir kiritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. </p>
    </section>
</body>
</html>
