
@extends('layouts.app')


@section('content')
    <section  id="about">
        <div class="main-title">
            <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
        </div>

    <x-information-component></x-information-component>
    <x-skills-component></x-skills-component>
        <x-timeline-component></x-timeline-component>

    </section>
@endsection

{{--    <section  id="about">--}}
{{--        <div class="main-title">--}}
{{--            <h2>About <span>me</span><span class="bg-text">my stats</span></h2>--}}
{{--        </div>--}}
{{--        <div class="about-container">--}}
{{--            <div class="left-about">--}}
{{--                <h4>Information About me</h4>--}}
{{--                <p>--}}
{{--                    I enjoy strategic planning and designing beautiful and communication-functional websites, and I--}}
{{--                    am looking for a challenging position in an organization that will allow me to problem-solve and--}}
{{--                    explore the field of website and app design.--}}

{{--                    <br /> <br />--}}

{{--                    I started as a Figma software designer without any design skill. Not only that, but I have--}}
{{--                    created content for a variety of social media marketing platforms with stunning graphic design.--}}
{{--                    Furthermore, I am self-taught and have taken a variety of online courses. --}}
{{--                </p>--}}
{{--                <div class="btn-con">--}}
{{--                    <a href="{{ asset('img/Abhishek Shakya Resume.pdf') }}" class="main-btn">--}}
{{--                        <span class="btn-text">Download CV</span>--}}
{{--                        <span class="btn-icon"><i class="fas fa-download"></i></span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="right-about">--}}
{{--                <div class="about-stat">--}}
{{--                    <div class="abt-text">--}}
{{--                        <p class="large-text">50+</p>--}}
{{--                        <p class="small-text">Projects <br /> Completed</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="about-stat">--}}
{{--                    <div class="abt-text">--}}
{{--                        <p class="large-text">2+</p>--}}
{{--                        <p class="small-text">Years of <br /> experience</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="about-stat">--}}
{{--                    <div class="abt-text">--}}
{{--                        <p class="large-text">29+</p>--}}
{{--                        <p class="small-text">Happy <br /> Clients</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="about-stat">--}}
{{--                    <div class="abt-text">--}}
{{--                        <p class="large-text">49+</p>--}}
{{--                        <p class="small-text">Customer <br /> reviews</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="about-stats">--}}
{{--            <h4 class="stat-title">My Skills</h4>--}}
{{--            <div class="progress-bars">--}}
{{--                <div class="progress-bar">--}}
{{--                    <p class="prog-title">Figma / XD / lunacy</p>--}}
{{--                    <div class="progress-con">--}}
{{--                        <p class="prog-text">80%</p>--}}
{{--                        <div class="progress">--}}
{{--                            <span class="html"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress-bar">--}}
{{--                    <p class="prog-title">Adobe Photoshop / InDesign</p>--}}
{{--                    <div class="progress-con">--}}
{{--                        <p class="prog-text">95%</p>--}}
{{--                        <div class="progress">--}}
{{--                            <span class="css"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress-bar">--}}
{{--                    <p class="prog-title">Adobe Illustrator  </p>--}}
{{--                    <div class="progress-con">--}}
{{--                        <p class="prog-text">75%</p>--}}
{{--                        <div class="progress">--}}
{{--                            <span class="js"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress-bar">--}}
{{--                    <p class="prog-title">Wordpress Design</p>--}}
{{--                    <div class="progress-con">--}}
{{--                        <p class="prog-text">65%</p>--}}
{{--                        <div class="progress">--}}
{{--                            <span class="react"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress-bar">--}}
{{--                    <p class="prog-title">Adobe pro / effect</p>--}}
{{--                    <div class="progress-con">--}}
{{--                        <p class="prog-text">30%</p>--}}
{{--                        <div class="progress">--}}
{{--                            <span class="node"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="progress-bar">--}}
{{--                    <p class="prog-title">html5 & css </p>--}}
{{--                    <div class="progress-con">--}}
{{--                        <p class="prog-text">50%</p>--}}
{{--                        <div class="progress">--}}
{{--                            <span class="python"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <h4 class="stat-title">My Timeline</h4>--}}
{{--        <div class="timeline">--}}
{{--            <div class="timeline-stat">--}}
{{--                <div class="tl-icon">--}}
{{--                    <i class="fas fa-briefcase"></i>--}}
{{--                </div>--}}
{{--                <p class="tl-duration">Feb 2022 - May 2022</p>--}}
{{--                <h5>Web Developer<span> - VAROSA TECHNOLOGY</span></h5>--}}
{{--                <p>--}}
{{--                    Collaboration across team & departments.<br>--}}
{{--                    Marketing & branding for clients.<br>--}}
{{--                    Content creation and execution.<br>--}}
{{--                    Client communication & Coordination.<br>--}}
{{--                    Stay up to date with latest market trends.<br>--}}
{{--                    Quality Assurance (QA) of graphic designs.<br>--}}
{{--                    Develop creative design for digital marketing, printing, & corporate branding.<br>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="timeline-stat">--}}
{{--                <div class="tl-icon">--}}
{{--                    <i class="fas fa-briefcase"></i>--}}
{{--                </div>--}}
{{--                <p class="tl-duration">Aug 2021 - Dec 2021</p>--}}
{{--                <h5>Intern Designer<span> - Monika decoration PVT LTD</span></h5>--}}
{{--                <p>--}}
{{--                    Worked for “Promotion of digital marketing” project.<br>--}}
{{--                    Promoted the webpage“servicenmaterial” new e-commerce for all types of hardware.<br>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="timeline-stat">--}}
{{--                <div class="tl-icon">--}}
{{--                    <i class="fas fa-briefcase"></i>--}}
{{--                </div>--}}
{{--                <p class="tl-duration">FREELANCING WORKS</p>--}}
{{--                <h5>GRAPHIC DESIGNER<span> - Remote Jobs</span></h5>--}}
{{--                <p>--}}
{{--                    Digital content creation & designing.<br>--}}
{{--                    Web page designing.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="timeline-stat">--}}
{{--                <div class="tl-icon">--}}
{{--                    <i class="fas fa-briefcase"></i>--}}
{{--                </div>--}}
{{--                <p class="tl-duration">2019 - 2023</p>--}}
{{--                <h5>Business Degree<span> - ASIAN COLLEGE</span></h5>--}}
{{--                <p>--}}
{{--                    Bachelor of Business Administration--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="timeline-stat">--}}
{{--                <div class="tl-icon">--}}
{{--                    <i class="fas fa-briefcase"></i>--}}
{{--                </div>--}}
{{--                <p class="tl-duration">2018 (completed) </p>--}}
{{--                <h5>Graphic designing<span> - NEOSPHERE CONSULTANT</span></h5>--}}
{{--                <p>--}}
{{--                    Basic Graphic designing Course--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="timeline-stat">--}}
{{--                <div class="tl-icon">--}}
{{--                    <i class="fas fa-briefcase"></i>--}}
{{--                </div>--}}
{{--                <p class="tl-duration">2022 - present</p>--}}
{{--                <h5>Web Development<span> - Udemy</span></h5>--}}
{{--                <p>--}}
{{--                    New courses on web Development--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}




