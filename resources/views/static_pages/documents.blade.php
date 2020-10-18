@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Documents'))

@section('description', config('custom.main_description'))

@section('content')

    <!--blog area-->
    <section class="blog_area sec_pad">
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-8 blog_info">--}}
                <div class="col-lg-12 blog_info">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="h_blog_post_item blog_item">
                                <a href="blog-details.html" class="post_img">
                                    <img src="{{ asset('citrix/assets/img/documents/th.jpeg') }}" alt=""/>
                                </a>

                                <div class="post_content">
                                    <a href="#" class="h_post_date"><?php echo date('Y M d'); ?></a>
                                    <!--a href="blog-details.html"--><a href="#">
                                        <h3>
                                            Описание документа на две-три строки. Можно больше.
                                        </h3>
                                    </a>
                                    <div class="h_post_info">
                                        <a href="#"><i class="far fa-heart"></i>72</a>
                                        <a href="#"><i class="far fa-comment"></i>29</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="h_blog_post_item blog_item">
                                <a href="blog-details.html" class="post_img">
                                    <img src="{{ asset('citrix/assets/img/documents/th.jpeg') }}" alt=""/>
                                </a>

                                <div class="post_content">
                                    <a href="#" class="h_post_date"><?php echo date('Y M d'); ?></a>
                                    <!--a href="blog-details.html"--><a href="#">
                                        <h3>
                                            Описание документа на две-три строки. Можно больше.
                                        </h3>
                                    </a>
                                    <div class="h_post_info">
                                        <a href="#"><i class="far fa-heart"></i>72</a>
                                        <a href="#"><i class="far fa-comment"></i>29</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="h_blog_post_item blog_item">
                                <a href="blog-details.html" class="post_img">
                                    <img src="{{ asset('citrix/assets/img/documents/th.jpeg') }}" alt=""/>
                                </a>

                                <div class="post_content">
                                    <a href="#" class="h_post_date"><?php echo date('Y M d'); ?></a>
                                    <!--a href="blog-details.html"--><a href="#">
                                        <h3>
                                            Описание документа на две-три строки. Можно больше.
                                        </h3>
                                    </a>
                                    <div class="h_post_info">
                                        <a href="#"><i class="far fa-heart"></i>72</a>
                                        <a href="#"><i class="far fa-comment"></i>29</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="h_blog_post_item blog_item">
                                <a href="blog-details.html" class="post_img">
                                    <img src="{{ asset('citrix/assets/img/documents/th.jpeg') }}" alt=""/>
                                </a>

                                <div class="post_content">
                                    <a href="#" class="h_post_date"><?php echo date('Y M d'); ?></a>
                                    <!--a href="blog-details.html"--><a href="#">
                                        <h3>
                                            Описание документа на две-три строки. Можно больше.
                                        </h3>
                                    </a>
                                    <div class="h_post_info">
                                        <a href="#"><i class="far fa-heart"></i>72</a>
                                        <a href="#"><i class="far fa-comment"></i>29</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="h_blog_post_item blog_item">
                                <a href="blog-details.html" class="post_img">
                                    <img src="{{ asset('citrix/assets/img/documents/th.jpeg') }}" alt=""/>
                                </a>

                                <div class="post_content">
                                    <a href="#" class="h_post_date"><?php echo date('Y M d'); ?></a>
                                    <!--a href="blog-details.html"--><a href="#">
                                        <h3>
                                            Описание документа на две-три строки. Можно больше.
                                        </h3>
                                    </a>
                                    <div class="h_post_info">
                                        <a href="#"><i class="far fa-heart"></i>72</a>
                                        <a href="#"><i class="far fa-comment"></i>29</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="h_blog_post_item blog_item">
                                <a href="blog-details.html" class="post_img">
                                    <img src="{{ asset('citrix/assets/img/documents/th.jpeg') }}" alt=""/>
                                </a>

                                <div class="post_content">
                                    <a href="#" class="h_post_date"><?php echo date('Y M d'); ?></a>
                                    <!--a href="blog-details.html"--><a href="#">
                                        <h3>
                                            Описание документа на две-три строки. Можно больше.
                                        </h3>
                                    </a>
                                    <div class="h_post_info">
                                        <a href="#"><i class="far fa-heart"></i>72</a>
                                        <a href="#"><i class="far fa-comment"></i>29</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                {{--<div class="col-lg-4">
                    <div class="blog_sidebar">
                        <div class="sidebar_widget f_latest_widget">
                            <h4 class="f-title">Recent Post</h4>
                            <div class="f_latest_info">
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_post_1.jpg" alt=""/>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            <h5>
                                                Nunc egestas odio sed lacus aliquet, acula.
                                            </h5>
                                        </a>
                                        <a href="#" class="l_date">12 hours ago</a>
                                    </div>
                                </div>
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_post_2.jpg" alt=""/>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>
                                                Nunc egestas odio sed lacus aliquet, acula.
                                            </h5>
                                        </a>
                                        <a href="#" class="l_date">12 hours ago</a>
                                    </div>
                                </div>
                                <div class="media f_latest_item">
                                    <div class="img_hover">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_post_3.jpg" alt=""/>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h5>
                                                Nunc egestas odio sed lacus aliquet, acula.
                                            </h5>
                                        </a>
                                        <a href="#" class="l_date">12 hours ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_widget">
                            <h3 class="f-title">Instagram Gallery</h3>
                            <ul class="list-unstyled recent_post_gallery">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post1.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post2.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post3.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post4.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post5.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post6.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post7.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post8.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                        <img src="assets/img/home-one/f_recent_post9.jpg" alt=""/></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widget f_link_widget">
                            <h3 class="f-title">Category</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Blog page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Partners</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Social media</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Site map</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Forum</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Contact</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Privacy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Policies</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Topics</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Questions</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Help</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widget slider_widget">
                            <h3 class="f-title">Slider</h3>
                            <div class="slider_info">
                                <div class="post_slider">
                                    <img src="assets/img/blog_slider_img.jpg" alt=""/>
                                    <img src="assets/img/blog_slider_img.jpg" alt=""/>
                                    <img src="assets/img/blog_slider_img.jpg" alt=""/>
                                </div>
                                <div class="blog_slider_nav">
                                    <i class="fas fa-chevron-left left"></i>
                                    <i class="fas fa-chevron-right right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_widget f_link_widget">
                            <h3 class="f-title">Meta</h3>
                            <ul class="list-unstyled meta_tag">
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Logis</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Entries RSS</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Comments RSS</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>Wordpress.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--blog area-->

@endsection
