{{--@dd($aboutme);--}}
<header class="container header active" id="home">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img src="{{$aboutme['image_url']}}" alt="">
            </div>
        </div>
        <div class="right-header">
            <h1 class="name">
                {!!$aboutme['title']!!}
            </h1>
            <p>
                {{$aboutme['subtitle']}}
            </p>
            <div class="btn-con">
                <a href="{{ $aboutme['action_button_url'] }}" class="main-btn">
                    <span class="btn-text">{{$aboutme['action_button_text']}}</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>
    </div>
</header>
