{{--@dd($timeline);--}}
<h4 class="stat-title"> {{ $timeline['title']}}</h4>
<div class="timeline">
    @foreach($timeline['stat_items'] as $item)

    <div class="timeline-item">
        <div class="tl-icon">
            <i class="fas fa-briefcase"></i>
        </div>
        <p class="tl-duration">{{$item['content']['duration']}}</p>
        <h5>{{$item['content']['position']}}<span> - {{$item['content']['company']}}</span></h5>
        <p>{!! $item['content']['subtitle'] !!}
           <br>
        </p>
    </div>
    @endforeach

</div>
