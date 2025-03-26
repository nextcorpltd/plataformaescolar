<?php

use App\Livewire\Course;
use App\Livewire\Event;
use App\Livewire\Events;
use App\Livewire\Home;
use App\Livewire\Post;
use App\Livewire\Posts;
use App\Livewire\Section;
use App\Livewire\Sections;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', Home::class)->name("home");
Route::get('/eventos', Events::class)->name("events");
Route::get('/evento/{slug}', Event::class)->name("event");
Route::get('/artigos', Posts::class)->name("posts");
Route::get('/artigo/{slug}', Post::class)->name("post");
Route::get('/cursos/{slug}', Sections::class)->name("sections");
Route::get('/curso/{slug}', Course::class)->name("course");
