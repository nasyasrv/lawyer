@extends('interface.layout.app')
@section('contents', 'contents')

<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="#">pages</a>
                    <a href="elements.html">Element Page</a>
                </div>
                <h2>Element Page</h2>
            </div>
        </div>
    </div>
</section>
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <h3 class="title_color">Image Gallery</h3>
            <div class="row gallery-item">
                <div class="col-md-4">
                    <a href="{{asset('interface/img/elements/g1.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g1.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('interface/img/elements/g2.jpg')}}'" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g2.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('interface/img/elements/g3.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g3.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{asset('interface/img/elements/g4.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g4.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{asset('interface/img/elements/g5.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g5.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('interface/img/elements/g6.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g6.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('interface/img/elements/g7.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g7.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{asset('interface/img/elements/g8.jpg')}}" class="img-gal">
                        <div class="single-gallery-image" style="background: url(interface/img/elements/g8.jpg);"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
