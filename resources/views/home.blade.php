@extends('layouts.app')

@section('content')
<div class="container">
    <!-- welcome_protomedia_start -->
    <div class="welcome_protomedia">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <h3>Welcome to Photomedia <br>
                        photography blog</h3>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="add_here">
                        <a href="#">
                            <img src="/storage/img/add/add.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_protomedia_end -->

    <!-- photographi_area_start -->
    <div class="photographi_area">
        <div class="container">
            <div class="row">
                @foreach($start_area_articles as $start_art)
                    <div class="col-xl-6 col-md-6">
                        <div class="single_photography " style="background-image: url({{Vite::asset('storage/app/public'.($start_art->image))}})">
                            <div class="info">
                                <div class="info_inner">
                                    <h3><a href="{{route('article',['article'=>$start_art->slug])}}">{{$start_art->name}}</a></h3>
                                    <div class="date_catagory d-flex align-items-center justify-content-between">
                                        <span>{{date('d M Y', strtotime($start_art->created_at))}}</span>
                                        <span class="catagory">{{$start_art->category->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- photographi_area_end -->

    <!-- photography_slider_area_start -->
    <div class="photography_slider_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="photoslider_active owl-carousel">
                        @foreach($categories as $category)
                            <div class="single_photography">
                                <img src="{{Storage::url($category->image)}}" alt="">
                                <a href="/category/{{$category->slug}}" class="photo_title">
                                    <h4>{{$category->name}}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- photography_slider_area_end -->

    <!-- most_recent_blog_start -->
    <div class="most_recent_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <h3>Most Recent</h3>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="/storage/img/most_recent/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_meta">
                                    <p><a href="#">Photography I 24 May 2019</a></p>
                                    <h3><a href="#">
                                            The Desolate Beauty of <br>
                                            Greenland
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="/storage/img/most_recent/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_meta">
                                    <p><a href="#">Photography I 24 May 2019</a></p>
                                    <h3><a href="#">
                                            Lost Is Just a Four Letter <br>
                                            Word
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="/storage/img/most_recent/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_meta">
                                    <p><a href="#">Photography I 24 May 2019</a></p>
                                    <h3><a href="#">
                                            Break through Photo-graphy <br>
                                            Filters for Travel Shot
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="/storage/img/most_recent/4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_meta">
                                    <p><a href="#">Photography I 24 May 2019</a></p>
                                    <h3><a href="#">
                                            Tank Releases New Photo <br>
                                            Protection Concepts
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="/storage/img/most_recent/5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_meta">
                                    <p><a href="#">Photography I 24 May 2019</a></p>
                                    <h3><a href="#">
                                            The Desolate Beauty of <br>
                                            Greenland
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="/storage/img/most_recent/6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_meta">
                                    <p><a href="#">Photography I 24 May 2019</a></p>
                                    <h3><a href="#">
                                            Lost Is Just a Four Letter <br> Word
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn_area text-center">
                                <a href="#" class="boxed-btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="blog_right_side">
                        <div class="section_title mb-33">
                            <h3>Follow Us</h3>
                        </div>
                        <div class="foollow_links">
                            <ul class="d-flex align-items-center justify-content-between">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                        <h2>142K</h2>
                                        <p>followers</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="insta" href="#">
                                        <i class="fa fa-instagram"></i>
                                        <h2>142K</h2>
                                        <p>followers</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                        <h2>142K</h2>
                                        <p>followers</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="add_here text-center">
                            <a href="#">
                                <img src="/storage/img/most_recent/googleAdd.jpg" alt="">
                            </a>
                        </div>
                        <div class="section_title mb-33">
                            <h3>Tags</h3>
                        </div>
                        <div class="tags">
                            <ul>
                                @foreach($tags as $tag)
                                    <li><a href="{{route('tag',['tag'=>$tag->slug])}}">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- most_recent_blog_end -->

    <!-- photo_gallery_start -->
    <div class="photo_gallery">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-33">
                        <h3>Photo Gallery</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="photo_gallery_active owl-carousel">
                        <div class="single_photo_gallery gallery_bg_1">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                        <div class="single_photo_gallery gallery_bg_2">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                        <div class="single_photo_gallery gallery_bg_1">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                        <div class="single_photo_gallery gallery_bg_2">
                            <div class="photo_caption">
                                <h3>Travel Camping</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- photo_gallery_end -->

    <!-- subscribe_newsletter_start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="black_bg">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="newsletter_text">
                            <h3>
                                Subscribe newsletter
                            </h3>
                            <p>Get updates to our newsletter and new articles</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="newsform">
                            <form action="#">
                                <input type="email" placeholder="Enter Your Email">
                                <button type="submit">sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- instagram_media_area_start -->
    <div class="instagram_media_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="instagram_title text-center">
                        <i class="fa fa-instagram"></i>
                        <h3>@photomedia</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="/storage/img/instagram/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="/storage/img/instagram/2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="/storage/img/instagram/3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_instragram">
                        <img src="/storage/img/instagram/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram_media_area_end -->
</div>

@endsection
