<!-- footer_start -->
<footer class="footer">
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer_info text-center">
                        <div class="footer_logo text-center">
                            <a href="#">
                                <img src="/storage/img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <p class="footer_text">
                            Explore photo media blog to enrich your photography knowledge
                        </p>
                        <div class="header_links">
                            <ul>
                                <li><a href="{{$contacts->facebook}}"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="twiter" href="{{$contacts->twitter}}"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="insta" href="{{$contacts->instagram}}"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom ">
        <div class="container">
            <div class="footer_border">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer_links text-center">
                            <ul>
                                @foreach($navbarMenus as $menu)
                                    @if(!$menu->parent)

                                        @if( !count($menu->childs) )
                                        <li>
                                        <a href="{{$menu->link}}">{{$menu->name}}</a>
                                        </li>
                                        @endif

                                    @endif
                                @endforeach
{{--                                <li><a href="index.html">home</a></li>--}}
{{--                                <li><a href="catagory.html">category</a></li>--}}
{{--                                <li><a href="about.html">about</a></li>--}}
{{--                                <li><a href="contact.html">contact</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_text text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </p>
        </div>
    </div>
</footer>
<!-- footer_end -->
