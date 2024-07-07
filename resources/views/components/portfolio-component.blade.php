{{--@dd($portfolio);--}}
<section id="portfolio">
    <div class="main-title">
        <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
    </div>
    <p class="port-text">
        {{ $portfolio['title'] }}

    </p>
    <div class="portfolios">
        @foreach($portfolio['stat_items'] as $stat)
            <div class="portfolio-item">
                <div class="image">
                    <img src="{{$stat['content']['image_url']}}" alt="">
                </div>
                <div class="hover-items">
                    <a title="View My blog" rel="noopener" href="{{$stat['content']['action_button_url']}}"
                       target="_blank">
                        <h3>{{$stat['content']['titles']}}</h3>
                    </a>
                    <div class="icons">
                        @foreach($stat['content']['links'] as $link)
{{--                            @dd($stat);--}}
                            <x-icon-link href="{{ $link['content']['action_one_url'] }}" icon="{{$link['content']['icon_bar']}}"/>
{{--                            <x-icon-link href="{{ $link['links']['action_one_url'] }}" icon="behance"/>--}}
{{--                            <x-icon-link href="{{ $link['links']['action_one_url'] }}" icon="linkedin"/>--}}
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        {{--        <div class="portfolio-stat">--}}
        {{--            <div class="image">--}}
        {{--                <img src="{{asset('img/port2.jpg')}}" alt="">--}}
        {{--            </div>--}}
        {{--            <div class="hover-items">--}}
        {{--                <div class="icons">--}}
        {{--                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>--}}
        {{--                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>--}}
        {{--                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="portfolio-stat">--}}
        {{--            <div class="image">--}}
        {{--                <img src="{{asset('img/port3.jpg')}}" alt="">--}}
        {{--            </div>--}}
        {{--            <div class="hover-items">--}}
        {{--                <x-link-button--}}
        {{--                    href="https://www.figma.com/file/4FdOvIIiMziBdqHEaRb93u/CSR?node-id=1825%3A22041"--}}
        {{--                    title="View My blog"--}}
        {{--                    text="View Portfolio"/>--}}
        {{--                <div class="icons">--}}
        {{--                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>--}}
        {{--                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>--}}
        {{--                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="portfolio-stat">--}}
        {{--            <div class="image">--}}
        {{--                <img src="{{asset('img/port4.jpg')}}" alt="">--}}
        {{--            </div>--}}
        {{--            <div class="hover-items">--}}
        {{--                <a--}}
        {{--                    title="View My blog"--}}
        {{--                    rel="noopener"--}}
        {{--                    href="../../public/img/portfolio.pdf"--}}
        {{--                    target="_blank"--}}
        {{--                    rel="nofollow" >--}}
        {{--                    <h3>View Portfolio</h3>--}}
        {{--                </a>--}}

        {{--                <div class="icons">--}}
        {{--                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>--}}
        {{--                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>--}}
        {{--                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="portfolio-stat">--}}
        {{--            <div class="image">--}}
        {{--                <img src="{{asset('img/port5.jpg')}}" alt="">--}}
        {{--            </div>--}}
        {{--            <div class="hover-items">--}}
        {{--                <a--}}
        {{--                    title="View My blog"--}}
        {{--                    rel="noopener"--}}
        {{--                    href="../../public/img/portfolio.pdf"--}}
        {{--                    target="_blank"--}}
        {{--                    rel="nofollow" >--}}
        {{--                    <h3>View Portfolio</h3>--}}
        {{--                </a>--}}

        {{--                <div class="icons">--}}
        {{--                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>--}}
        {{--                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>--}}
        {{--                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="portfolio-stat">--}}
        {{--            <div class="image">--}}
        {{--                <img src="{{asset('img/port6.jpg')}}" alt="">--}}
        {{--            </div>--}}
        {{--            <div class="hover-items">--}}
        {{--                <a--}}
        {{--                    title="View My blog"--}}
        {{--                    rel="noopener"--}}
        {{--                    href="https://www.figma.com/file/4FdOvIIiMziBdqHEaRb93u/CSR?node-id=1825%3A22041"--}}
        {{--                    target="_blank"--}}
        {{--                    rel="nofollow" >--}}
        {{--                    <h3>Project Source</h3>--}}
        {{--                </a>--}}
        {{--                <div class="icons">--}}
        {{--                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>--}}
        {{--                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>--}}
        {{--                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="portfolio-stat">--}}
        {{--            <div class="image">--}}
        {{--                <img  src="{{asset('img/port7.jpg')}}" alt="">--}}
        {{--            </div>--}}
        {{--            <div class="hover-items">--}}
        {{--                <a--}}
        {{--                    title="View My blog"--}}
        {{--                    rel="noopener"--}}
        {{--                    href="../../public/img/portfolio.pdf"--}}
        {{--                    target="_blank"--}}
        {{--                    rel="nofollow" >--}}
        {{--                    <h3>View Portfolio</h3>--}}
        {{--                </a>--}}

        {{--                <div class="icons">--}}
        {{--                    <x-icon-link href="https://github.com/abhishekshakya-np" icon="github"/>--}}
        {{--                    <x-icon-link href="https://www.behance.net/1besake" icon="behance"/>--}}
        {{--                    <x-icon-link href="https://www.linkedin.com/in/abhishekshakya-np" icon="linkedin"/>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>
