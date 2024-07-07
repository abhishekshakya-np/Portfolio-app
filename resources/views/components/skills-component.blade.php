<div class="about-stats">
    <h4 class="stat-title">{{ $skills['title'] }}</h4>
    <div class="progress-bars">
        @foreach($skills['stat_items'] as $item)
        <div class="progress-bar">
            <p class="prog-title">{{$item['content']['pro_title']}}</p>
            <div class="progress-con">
                <p class="prog-text">{{$item['content']['progress']}}</p>
                <div class="progress">
                    <span class="{{$item['content']['progress_bar']}}"></span>
                </div>
            </div>
        </div>
        @endforeach
{{--        <div class="progress-bar">--}}
{{--            <p class="prog-title">Adobe Photoshop / InDesign</p>--}}
{{--            <div class="progress-con">--}}
{{--                <p class="prog-text">95%</p>--}}
{{--                <div class="progress">--}}
{{--                    <span style="width: {{progress_bar}}"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="progress-bar">--}}
{{--            <p class="prog-title">Adobe Illustrator  </p>--}}
{{--            <div class="progress-con">--}}
{{--                <p class="prog-text">75%</p>--}}
{{--                <div class="progress">--}}
{{--                    <span class="js"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="progress-bar">--}}
{{--            <p class="prog-title">Wordpress Design</p>--}}
{{--            <div class="progress-con">--}}
{{--                <p class="prog-text">65%</p>--}}
{{--                <div class="progress">--}}
{{--                    <span class="react"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="progress-bar">--}}
{{--            <p class="prog-title">Adobe pro / effect</p>--}}
{{--            <div class="progress-con">--}}
{{--                <p class="prog-text">30%</p>--}}
{{--                <div class="progress">--}}
{{--                    <span class="node"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="progress-bar">--}}
{{--            <p class="prog-title">html5 & css </p>--}}
{{--            <div class="progress-con">--}}
{{--                <p class="prog-text">50%</p>--}}
{{--                <div class="progress">--}}
{{--                    <span class="python"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
