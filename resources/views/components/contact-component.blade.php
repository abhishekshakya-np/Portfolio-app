{{--@dd($contact);--}}
<div class="left-contact">

    <h4> {{ $contact['title'] }}</h4>
    <p> {{ $contact['sub_title'] }}

    </p>
    <div class="contact-info">
        @foreach($contact['stat_items'] as $info)

            <div class="contact-item">
                <div class="icon">

                    <i class="{{ $info['content']['icon'] }}"></i>

                    <span>{{$info['content']['title_info'] }}</span>
                </div>
                <p>{{ $info['content']['sub_info'] }}
                </p>
            </div>
            {{--                    <div class="contact-item">--}}
            {{--                        <div class="icon">--}}
            {{--                            <i class="fas fa-envelope"></i>--}}
            {{--                            <span>Email</span>--}}
            {{--                        </div>--}}
            {{--                        <p>--}}
            {{--                            <span>: abhishekshakya.np@gmail.com</span>--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                    <div class="contact-item">--}}
            {{--                        <div class="icon">--}}
            {{--                            <i class="fas fa-user-graduate"></i>--}}
            {{--                            <span>Education</span>--}}
            {{--                        </div>--}}
            {{--                        <p>--}}
            {{--                            <span>: Asian College, Kathmandu</span>--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                    <div class="contact-item">--}}
            {{--                        <div class="icon">--}}
            {{--                            <i class="fas fa-solid fa-phone"></i>--}}
            {{--                            <span>Mobile Number</span>--}}
            {{--                        </div>--}}
            {{--                        <p>--}}
            {{--                            <span>: 9803666090</span>--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                    <div class="contact-item">--}}
            {{--                        <div class="icon">--}}
            {{--                            <i class="fas fa-globe-africa"></i>--}}
            {{--                            <span>Languages</span>--}}
            {{--                        </div>--}}
            {{--                        <p>--}}
            {{--                            <span>: Nepali, English, Newari</span>--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
        @endforeach
    </div>
    <div class="contact-icons">
        <div class="contact-icon">
            @foreach($contact['links'] as $info1)
                <a href="{{$info1['content']['link']}}" target="_blank">
                    <i class="{{$info1['content']['icon_bar']}}"></i>
                </a>
            @endforeach
            {{--                        <a href="https://www.behance.net/1besake" target="_blank">--}}
            {{--                            <i class="fab fa-behance"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="https://github.com/abhishekshakya-np" target="_blank">--}}
            {{--                            <i class="fab fa-github"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">--}}
            {{--                            <i class="fab fa-linkedin"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">--}}
            {{--                            <i class="fab fa-linkedin"></i>--}}
            {{--                        </a>--}}
        </div>
        <div class="contact-icon">
{{--@dd($contact);--}}
            @foreach($contact['double'] as $info2)
                <a href="{{$info2['content']['link']}}" target="_blank">
                    <i class="{{$info2['content']['icon_bar']}}"></i>
            @endforeach
            {{--                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">--}}
            {{--                            <i class="fab fa-linkedin"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">--}}
            {{--                            <i class="fab fa-linkedin"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">--}}
            {{--                            <i class="fab fa-linkedin"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="https://www.linkedin.com/in/abhishekshakya-np/" target="_blank">--}}
            {{--                            <i class="fab fa-linkedin"></i>--}}
            {{--                        </a>--}}
        </div>
    </div>
</div>
