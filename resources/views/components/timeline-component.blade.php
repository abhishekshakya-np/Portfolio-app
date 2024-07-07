<h4 class="stat-title">{{ $timeline['title'] }}</h4>
<div class="timeline">
    @foreach($timeline['stat_items'] as $item)
    <div class="timeline-item">
        <div class="tl-icon">
            <i class="fas fa-briefcase"></i>
        </div>
        <p class="tl-duration">Feb 2022 - May 2022</p>
        <h5>Web Developer<span> - VAROSA TECHNOLOGY</span></h5>
        <p>
            Collaboration across team & departments.<br>
            Marketing & branding for clients.<br>
            Content creation and execution.<br>
            Client communication & Coordination.<br>
            Stay up to date with latest market trends.<br>
            Quality Assurance (QA) of graphic designs.<br>
            Develop creative design for digital marketing, printing, & corporate branding.<br>
        </p>
    </div>
    <div class="timeline-item">
        <div class="tl-icon">
            <i class="fas fa-briefcase"></i>
        </div>
        <p class="tl-duration">{{$item['content']['duration']}}</p>
        <h5>{{$item['content']['position']}}<span> - {{$item['content']['company']}}</span></h5>
        <p>{{$item['content']['subtitle']}}
           <br>
        </p>
    </div>
    @endforeach
{{--    <div class="timeline-item">--}}
{{--        <div class="tl-icon">--}}
{{--            <i class="fas fa-briefcase"></i>--}}
{{--        </div>--}}
{{--        <p class="tl-duration">FREELANCING WORKS</p>--}}
{{--        <h5>GRAPHIC DESIGNER<span> - Remote Jobs</span></h5>--}}
{{--        <p>--}}
{{--            Digital content creation & designing.<br>--}}
{{--            Web page designing.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="timeline-item">--}}
{{--        <div class="tl-icon">--}}
{{--            <i class="fas fa-briefcase"></i>--}}
{{--        </div>--}}
{{--        <p class="tl-duration">2019 - 2023</p>--}}
{{--        <h5>Business Degree<span> - ASIAN COLLEGE</span></h5>--}}
{{--        <p>--}}
{{--            Bachelor of Business Administration--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="timeline-item">--}}
{{--        <div class="tl-icon">--}}
{{--            <i class="fas fa-briefcase"></i>--}}
{{--        </div>--}}
{{--        <p class="tl-duration">2018 (completed) </p>--}}
{{--        <h5>Graphic designing<span> - NEOSPHERE CONSULTANT</span></h5>--}}
{{--        <p>--}}
{{--            Basic Graphic designing Course--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="timeline-item">--}}
{{--        <div class="tl-icon">--}}
{{--            <i class="fas fa-briefcase"></i>--}}
{{--        </div>--}}
{{--        <p class="tl-duration">2022 - present</p>--}}
{{--        <h5>Web Development<span> - Udemy</span></h5>--}}
{{--        <p>--}}
{{--            New courses on web Development--}}
{{--        </p>--}}
{{--    </div>--}}
</div>
