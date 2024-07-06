
@extends('layouts.app')


@section('content')

<section  id="portfolio">
    <div class="main-title">
        <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
    </div>
    <p class="port-text">
        Here is some of my work that I've done in various programming languages.
    </p>
    <div class="portfolios">
        <div class="portfolio-item">
            <div class="image">
                <img src="{{asset('img/port1.jpg')}}" alt="" >
            </div>
            <div class="hover-items">
                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="image">
                <img src="{{asset('img/port2.jpg')}}" alt="">
            </div>
            <div class="hover-items">
                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="image">
                <img src="{{asset('img/port3.jpg')}}" alt="">
            </div>
            <div class="hover-items">
                <x-link-button
                    href="https://www.figma.com/file/4FdOvIIiMziBdqHEaRb93u/CSR?node-id=1825%3A22041"
                    title="View My blog"
                    text="View Portfolio"/>
                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="image">
                <img src="{{asset('img/port4.jpg')}}" alt="">
            </div>
            <div class="hover-items">
                <a
                    title="View My blog"
                    rel="noopener"
                    href="../../public/img/portfolio.pdf"
                    target="_blank"
                    rel="nofollow" >
                    <h3>View Portfolio</h3>
                </a>

                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="image">
                <img src="{{asset('img/port5.jpg')}}" alt="">
            </div>
            <div class="hover-items">
                <a
                    title="View My blog"
                    rel="noopener"
                    href="../../public/img/portfolio.pdf"
                    target="_blank"
                    rel="nofollow" >
                    <h3>View Portfolio</h3>
                </a>

                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="image">
                <img src="{{asset('img/port6.jpg')}}" alt="">
            </div>
            <div class="hover-items">
                <a
                    title="View My blog"
                    rel="noopener"
                    href="https://www.figma.com/file/4FdOvIIiMziBdqHEaRb93u/CSR?node-id=1825%3A22041"
                    target="_blank"
                    rel="nofollow" >
                    <h3>Project Source</h3>
                </a>
                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="image">
                <img  src="{{asset('img/port7.jpg')}}" alt="">
            </div>
            <div class="hover-items">
                <a
                    title="View My blog"
                    rel="noopener"
                    href="../../public/img/portfolio.pdf"
                    target="_blank"
                    rel="nofollow" >
                    <h3>View Portfolio</h3>
                </a>

                <div class="icons">
                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>
                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>
                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
