{{--@dd($information);--}}

    <div class="about-container">
        <div class="left-about">
            <h4>{!!$information['title']!!}</h4>
            <p>
                {!!$information['subtitle']!!}
            </p>
            <div class="btn-con">
                <a href="{{ $information['action_button_url'] }}" class="main-btn">
                    <span class="btn-text">{{ $information['action_button_text'] }}</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>

        <div class="right-about">
            @foreach($information['stat_items'] as $item)
{{--                @dd($item)--}}
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">{{$item['content']['number']}}</p>
                        <p class="small-text">{!! $item['content']['items'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



