@extends('layouts.app')


@section('content')



   {{-- <section id="blogs">
        <div class="blogs-content">
            <div class="main-title">
                <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
            </div>
            <div class="blogs">
                @foreach($blogs as $blog)
                    <div class="blog">
                        <img src="{{ asset($blog->image->path) }}" alt="">
                        <div class="blog-text">
                            <h4>{{ $blog->title }}</h4>
                            <p>{{ $blog->excerpt }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>--}}

   <x-blogs-component></x-blogs-component>

@endsection


