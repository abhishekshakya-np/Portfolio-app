<div class="about-stats">
    <h4 class="stat-title">{{$skills['title']}}</h4>
    <div class="progress-bars">
        @foreach($skills['stat_items'] as $stat)
        <div class="progress-bar">
            <p class="prog-title">{{$stat['content']['pro_title']}}</p>
            <div class="progress-con">
                <p class="prog-text">{{$stat['content']['progress']}}</p>
                <div class="progress">
                    <span class="{{$stat['content']['progress_bar']}}"></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
