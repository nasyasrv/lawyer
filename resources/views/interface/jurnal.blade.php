@extends('interface.layout.app')
@section('content')

<!--================Home Banner Area =================-->
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
<!--================End Home Banner Area =================-->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30 title_color">Jurnal</h3>
            <div class="progress-table-wrap">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb">
                                            <img class="img-fluid" src="{{ asset('interface/img/blog/h-blog2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="blog-details">
                                            <div class="blog-meta">
                                                <span>25 june, 2018 | By Mark Wiens</span>
                                            </div>
                                            <h5><a href="#">Addiction When Gambling <br>
                                                    Becomes A Problem</a></h5>
                                            <p>Computers have become ubiquitous in almost every facet of our lives. At
                                                work, desk jockeys
                                                spend hours in
                                                front of their desktops.</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="display: flex;">
                                <button class="btn btn-info" style="margin-right: 10px;">Read Only <i class="ms-2 fas fa-eye"></i></button>
                                <button class="btn btn-success">Unduh PDF <i class="fas fa-download"></i> </button>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb">
                                            <img class="img-fluid" src="{{ asset('interface/img/blog/h-blog2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="blog-details">
                                            <div class="blog-meta">
                                                <span>25 june, 2018 | By Mark Wiens</span>
                                            </div>
                                            <h5><a href="#">Addiction When Gambling <br>
                                                    Becomes A Problem</a></h5>
                                            <p>Computers have become ubiquitous in almost every facet of our lives. At
                                                work, desk jockeys
                                                spend hours in
                                                front of their desktops.</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="display: flex;">
                                <button class="btn btn-info" style="margin-right: 10px;">Read Only <i class="ms-2 fas fa-eye"></i></button>
                                <button class="btn btn-success">Unduh PDF <i class="fas fa-download"></i> </button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
