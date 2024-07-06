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

    <section  id="blogs">
    <div class="blogs-content">
        <div class="main-title">
            <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
        </div>
        <div class="blogs">
            <div class="blog">
                <img src="{{asset('img/port3.jpg')}}" alt="">
                <div class="blogs-text">
                    <a href="/gaming.html" target="_blank" >
                        <h4>
                            New Gaming Community
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </a>
                </div>
            </div>
            <div class="blog">
                <img src="{{asset('img/blog1.jpg')}}" alt="">
                <div class="blogs-text">
                    <h4>
                        How to Become an Expert in Web Design
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Doloribus natus voluptas, eos obcaecati recusandae amet?
                    </p>
                </div>
            </div>
            <div class="blog">
                <img src="{{asset('img/blog2.jpg')}}" alt="">
                <div class="blogs-text">
                    <h4>
                        Become a Web Designer in 10 Days
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Doloribus natus voluptas, eos obcaecati recusandae amet?
                    </p>
                </div>
            </div>
            <div class="blog">
                <img src="{{asset('img/blog3.jpg')}}" alt="">
                <div class="blogs-text">
                    <h4>
                        Debbuging made easy with Web Inspector
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Doloribus natus voluptas, eos obcaecati recusandae amet?
                    </p>
                </div>
            </div>
            <div class="blog">
                <img src="{{asset('img/port1.jpg')}}" alt="">
                <div class="blogs-text">
                    <h4>
                        Get started with Web Design and UI Design
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Doloribus natus voluptas, eos obcaecati recusandae amet?
                    </p>
                </div>
            </div>
            <div class="blog">
                <img src="{{asset('img/port3.jpg')}}" alt="">
                <div class="blogs-text">
                    <h4>
                        This is what you need to know about Web Design
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Doloribus natus voluptas, eos obcaecati recusandae amet?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


