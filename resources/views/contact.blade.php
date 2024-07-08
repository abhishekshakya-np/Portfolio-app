@extends('layouts.app')


@section('content')
    <section id="contact">
        <div class="contact-container">
            <div class="main-title">
                <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
            </div>
            <div class="contact-content-con">
                <x-contact-component></x-contact-component>
                <x-contact-us-form/>
            </div>
        </div>
    </section>


@endsection

