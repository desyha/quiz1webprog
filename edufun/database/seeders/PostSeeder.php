<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Kenapa memilih Multimedia Interaktif?',
            'category' => 'Interactive Multimedia',
            'content' => 'Ini adalah artikel tentang multimedia interaktif...',
            'author' => 'Multimedia guru',
            'post_date' => '2024-11-07',
        ]);
        
        Post::create([
            'title' => 'Code Smells',
            'category' => 'Software Engineering',
            'content' => 'Mari pelajari macam-macam code smells dan bagaimana cara menghindarinya di code kamu...',
            'author' => 'Smelly Stinks',
            'post_date' => '2024-11-08',
        ]);
        Post::create([
            'title' => 'Software engineering basics',
            'category' => 'Software Engineering',
            'content' => 'Fondasi untuk kamu-kamu yang tertarik belajar Software Engineering...',
            'author' => 'Sucipto S.E',
            'post_date' => '2024-11-07',
        ]);
        
        Post::create([
            'title' => 'Course Multimedia Interaktif from zero to hero',
            'category' => 'Interactive Multimedia',
            'content' => 'Ini adalah course tentang multimedia interaktif dari bagi beginners...',
            'author' => 'Multmed M.D',
            'post_date' => '2024-11-07',
        ]);
        
    }

    
}
