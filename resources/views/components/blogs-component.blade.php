<section  id="blogs">
    <div class="blogs-content">
        <div class="main-title">
            <h2>{{ $blogs['main'] }} <span>{{ $blogs['title'] }}</span>
                <span class="bg-text">{{ $blogs['titles'] }}</span></h2>
        </div>
        <div class="blogs">
            @foreach($blogs['stat_items'] as $start)
                <div class="blog">
                    <img src="{{$start['content']['image_url']}}" alt="">
                    <div class="blogs-text">
                        <a href="{{$start['content']['action_button_url']}}" target="_blank" >
                            <h4>
                                {{$start['content']['topic']}}

                            </h4>
                            <p>
                                {{$start['content']['describe']}}

                            </p>
                        </a>
                    </div>
                </div>
            @endforeach
            {{--            <div class="blog">--}}
            {{--                <img src="{{asset('img/blog1.jpg')}}" alt="">--}}
            {{--                <div class="blogs-text">--}}
            {{--                    <h4>--}}
            {{--                        How to Become an Expert in Web Design--}}
            {{--                    </h4>--}}
            {{--                    <p>--}}
            {{--                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
            {{--                        Doloribus natus voluptas, eos obcaecati recusandae amet?--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="blog">--}}
            {{--                <img src="{{asset('img/blog2.jpg')}}" alt="">--}}
            {{--                <div class="blogs-text">--}}
            {{--                    <h4>--}}
            {{--                        Become a Web Designer in 10 Days--}}
            {{--                    </h4>--}}
            {{--                    <p>--}}
            {{--                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
            {{--                        Doloribus natus voluptas, eos obcaecati recusandae amet?--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="blog">--}}
            {{--                <img src="{{asset('img/blog3.jpg')}}" alt="">--}}
            {{--                <div class="blogs-text">--}}
            {{--                    <h4>--}}
            {{--                        Debbuging made easy with Web Inspector--}}
            {{--                    </h4>--}}
            {{--                    <p>--}}
            {{--                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
            {{--                        Doloribus natus voluptas, eos obcaecati recusandae amet?--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="blog">--}}
            {{--                <img src="{{asset('img/port1.jpg')}}" alt="">--}}
            {{--                <div class="blogs-text">--}}
            {{--                    <h4>--}}
            {{--                        Get started with Web Design and UI Design--}}
            {{--                    </h4>--}}
            {{--                    <p>--}}
            {{--                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
            {{--                        Doloribus natus voluptas, eos obcaecati recusandae amet?--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="blog">--}}
            {{--                <img src="{{asset('img/port3.jpg')}}" alt="">--}}
            {{--                <div class="blogs-text">--}}
            {{--                    <h4>--}}
            {{--                        This is what you need to know about Web Design--}}
            {{--                    </h4>--}}
            {{--                    <p>--}}
            {{--                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
            {{--                        Doloribus natus voluptas, eos obcaecati recusandae amet?--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</section>
