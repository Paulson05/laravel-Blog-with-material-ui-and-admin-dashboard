<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="material/img/apple-icon.png">
    <link rel="icon" type="image/png" href="material/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Blog PRO Laravel by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files without SCSS-->


        <!-- CSS Files with SCSS-->
    <link href="css/material-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="material/demo/demo.css" rel="stylesheet" />
    <link href="material/demo/vertical-nav.css" rel="stylesheet" />
        <script>
      // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
          if (f.fbq) return;
          n = f.fbq = function() {
            n.callMethod ?
              n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
        }(window,
          document, 'script', '../connect.facebook.net/en_US/fbevents.js');
        try {
          fbq('init', '111649226022273');
          fbq('track', "PageView");
        } catch (err) {
          console.log('Facebook Track Error:', err);
        }
    </script>
</head>

<body class="sidebar-collapse ">
<div class="main main-raised">

        <!--             navbar -->
        <div id="navbar">



      <div class="main ">
                  <div class="container">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title">Featured Articles</h2>
                            <div class="card card-plain card-blog">
                                                                    <div class="row mt-5">
                                                                          @foreach($posts as $post)
                                                                                        <div class="col-md-4">
                                                                                            <div class="card-header card-header-image">
                                                                                                <a href="article/trends-in-ux-design-for-start-ups.html">
                                                                                                                        <img class="img img-raised" src="storage/articles-seeder/6.jpg">
                                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <h6 class="card-category">
                                                                                                <a href="category/technology.html" class="text-dark">Technology</a>
                                                                                            </h6>
                                                                                            <h3 class="card-title">
                                                                                                <a href="article/trends-in-ux-design-for-start-ups.html">{{$post->title}}</a>
                                                                                            </h3>

                                                                                            <p class="card-description">
                                                                                             {{$post->body}}
                                                                                                <a href="{{ route('getSinglePost',['post'=>$post->slug])  }}" class="btn btn-danger btn-sm"> Read More </a>
                                                                                            </p>
                                                                                            <p class="card-tags">
                                                                                                <a href="tag/destinations.html"><span style="background-color: #4caf50;" class="badge badge-pill">Destinations</span></a>
                                                                                                <a href="tag/start-up.html"><span style="background-color: #6c757d;" class="badge badge-pill">Start-up</span></a>
                                                                                                <a href="tag/trending.html"><span style="background-color: #00bcd4;" class="badge badge-pill">Trending</span></a>
                                                                                                <a href="tag/haute-couture.html"><span style="background-color: #4caf50;" class="badge badge-pill">Haute couture</span></a>
                                                                                            </p>
                                                                                            <p class="author">
                                                                                                by
                                                                                                <a href="author/william-shakespeare.html">
                                                                                                    <b>William Shakespeare</b>
                                                                                                </a> &#8226; Apr 14, 2021 &#8226; 8 min read
                                                                                            </p>
                                                                                        </div>
                                                                        @endforeach
</div>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="section">
                <h2 class="title text-center">Latest articles</h2>
                <div class="row justify-content-center">
                                            <div class="col-md-4">
    <div class="card card-plain card-blog">
        <div class="card-header card-header-image">
            <a href="article/10-stress-related-health-issues-you-can-avoid-by-quitting-your-job.html">
                                    <img class="img img-raised" src="storage/articles-seeder/32.jpg">
                            </a>
        </div>
        <div class="card-body">
            <h6 class="card-category">
            <a href="category/health.html" class="text-dark">Health</a>
            </h6>
            <h4 class="card-title">
                <a href="article/10-stress-related-health-issues-you-can-avoid-by-quitting-your-job.html">10 stress-related health issues you can avoid by quitting your job</a>
            </h4>
            <p class="card-tags">
                                    <a href="tag/wellness.html"><span style="background-color: #6c757d;" class="badge badge-pill">Wellness</span></a>
                            </p>
            <p class="card-description">
                This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&#039;t scroll to get here.
                <a href="" > Read More </a>
            </p>
            <p class="author">
                by
                <a href="author/ernest-hemingway.html">
                    <b>Ernest Hemingway</b>
                </a> &#8226; Apr 15, 2021 &#8226; 5 min read
            </p>
        </div>
    </div>
</div>                                            <div class="col-md-4">
    <div class="card card-plain card-blog">
        <div class="card-header card-header-image">
            <a href="article/make-more-out-of-your-personal-time.html">
                                    <img class="img img-raised" src="storage/articles-seeder/27.jpg">
                            </a>
        </div>
        <div class="card-body">
            <h6 class="card-category">
            <a href="category/health.html" class="text-dark">Health</a>
            </h6>
            <h4 class="card-title">
                <a href="article/make-more-out-of-your-personal-time.html">Make more out of your personal time</a>
            </h4>
            <p class="card-tags">
                                    <a href="tag/wellness.html"><span style="background-color: #6c757d;" class="badge badge-pill">Wellness</span></a>
                            </p>
            <p class="card-description">
                Don&#039;t be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.
                <a href="article/make-more-out-of-your-personal-time.html"> Read More </a>
            </p>
            <p class="author">
                by
                <a href="author/ernest-hemingway.html">
                    <b>Ernest Hemingway</b>
                </a> &#8226; Apr 15, 2021 &#8226; 5 min read
            </p>
        </div>
    </div>
</div>                                            <div class="col-md-4">
    <div class="card card-plain card-blog">
        <div class="card-header card-header-image">
            <a href="article/the-10-biggest-street-style-trends-of-2019.html">
                                    <img class="img img-raised" src="storage/articles-seeder/5.jpg">
                            </a>
        </div>
        <div class="card-body">
            <h6 class="card-category">
            <a href="category/fashion.html" class="text-dark">Fashion</a>
            </h6>
            <h4 class="card-title">
                <a href="article/the-10-biggest-street-style-trends-of-2019.html">The 10 biggest street style trends of 2019</a>
            </h4>
            <p class="card-tags">
                                    <a href="tag/trending.html"><span style="background-color: #00bcd4;" class="badge badge-pill">Trending</span></a>
                                    <a href="tag/street-style.html"><span style="background-color: #6c757d;" class="badge badge-pill">Street style</span></a>
                            </p>
            <p class="card-description">
                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                <a href="article/the-10-biggest-street-style-trends-of-2019.html"> Read More </a>
            </p>
            <p class="author">
                by
                <a href="author/admin-guy.html">
                    <b>Admin Guy</b>
                </a> &#8226; Apr 15, 2021 &#8226; 5 min read
            </p>
        </div>
    </div>
</div>                                        <a href="all_articles.html" class="btn btn-rose btn-raised btn-round">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <footer class="footer footer-white footer-big">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <h5>Authors</h5>
                    <ul class="links-vertical">
                                                    <li>
                                <a href="author/virginia-woolf.html">
                                    Virginia Woolf
                                </a>
                            </li>
                                                    <li>
                                <a href="author/ernest-hemingway.html">
                                    Ernest Hemingway
                                </a>
                            </li>
                                                    <li>
                                <a href="author/william-shakespeare.html">
                                    William Shakespeare
                                </a>
                            </li>
                                                    <li>
                                <a href="author/jane-austen.html">
                                    Jane Austen
                                </a>
                            </li>
                                                    <li>
                                <a href="author/leo-tolstoy.html">
                                    Leo Tolstoy
                                </a>
                            </li>
                                            </ul>
                </div>
                <div class="col-md-3">
                    <h5>Categories</h5>
                    <ul class="links-vertical">
                                                    <li>
                                <a href="category/travel.html">
                                    Travel
                                </a>
                            </li>
                                                    <li>
                                <a href="category/food.html">
                                    Food
                                </a>
                            </li>
                                                    <li>
                                <a href="category/technology.html">
                                    Technology
                                </a>
                            </li>
                                                    <li>
                                <a href="category/fashion.html">
                                    Fashion
                                </a>
                            </li>
                                                    <li>
                                <a href="category/health.html">
                                    Health
                                </a>
                            </li>
                                            </ul>
                </div>
                <div class="col-md-3">
                    <h5>Tags</h5>
                    <ul class="links-horizontal">
                                                                                <li>
                                <a style = "padding:1px" href="tag/budget-traveling.html"><span style="background-color: #e91e63" class="badge badge-pill">Budget travelling</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/healthy-eating.html"><span style="background-color: #f44336" class="badge badge-pill">Healthy eating</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/web-dev.html"><span style="background-color: #ff9800" class="badge badge-pill">Web dev</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/destinations.html"><span style="background-color: #4caf50" class="badge badge-pill">Destinations</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/foodie.html"><span style="background-color: #00bcd4" class="badge badge-pill">Foodie</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/nature.html"><span style="background-color: #00bcd4" class="badge badge-pill">Nature</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/tips%26tricks.html"><span style="background-color: #e91e63" class="badge badge-pill">Tips &amp; tricks</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/start-up.html"><span style="background-color: #6c757d" class="badge badge-pill">Start-up</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/recipes.html"><span style="background-color: #9c27b0" class="badge badge-pill">Recipes</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/trending.html"><span style="background-color: #00bcd4" class="badge badge-pill">Trending</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/open-source.html"><span style="background-color: #f44336" class="badge badge-pill">Open source</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/admin-dashboards.html"><span style="background-color: #9c27b0" class="badge badge-pill">Admin dashboards</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/street-style.html"><span style="background-color: #6c757d" class="badge badge-pill">Street style</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/haute-couture.html"><span style="background-color: #4caf50" class="badge badge-pill">Haute couture</span></a>
                            </li>
                                                                                                            <li>
                                <a style = "padding:1px" href="tag/nutrition.html"><span style="background-color: #4caf50" class="badge badge-pill">Nutrition</span></a>
                            </li>
                                                                        </ul>
                </div>
                <div class="col-md-3">
                    <h5>Subscribe to Newsletter</h5>
                    <p>
                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about
                        this.
                    </p>
                    <form class="form form-newsletter" method="post" action="https://material-blog-pro-laravel.creative-tim.com/newsletter" id="newsletter">
                        <input type="hidden" name="_token" value="XfMDLgbwVsEoe2JdN4ykJBvqJ8n13Wgh7e4cBDG8">
                        <input style="display:none" name="newsletter" value="1">
                                                <div class="form-group bmd-form-group" >
                            <input type="email" class="form-control" name="newsletter_email" placeholder="Your Email...">
                        </div>
                        <button type="submit" class="btn btn-primary btn-just-icon" name="button">
                            <i class="material-icons">mail</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com/" target="_blank">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="https://blog.creative-tim.com/index.blade.php">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
                <li>
                    <a href="https://www.updivision.com/" target="_blank">
                        UPDIVISION
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="social-buttons">
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-google">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-youtube">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
        </ul>
        <div class="copyright pull-center">
            Copyright ©
            <script>
                document.write(new Date().getFullYear())
            </script><a href="https://www.creative-tim.com/" target="_blank"> Creative Tim</a> &amp; <a
                href="https://www.updivision.com/" target="_blank">UPDIVISION</a> All Rights Reserved.
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <!--   Core JS Files   -->
    <script src="material/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="material/js/core/popper.min.js" type="text/javascript"></script>
    <script src="material/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="material/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="material/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="material/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="material/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="material/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="material/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
    <!--	Plugin for Small Gallery in Product Page -->
    <script src="material/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="material/demo/modernizr.js" type="text/javascript"></script>
    <script src="material/demo/vertical-nav.js" type="text/javascript"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="../buttons.github.io/buttons.js"></script>
    <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
    <script src="material/demo/demo.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="material/js/material-kit.js" type="text/javascript"></script>
                <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
                <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
                <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
                <script src="./assets/js/plugins/moment.min.js"></script>
                <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
                <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
                <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
                <!--  Google Maps Plugin    -->
                <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
                <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
                <script>
                    $(document).ready(function() {
                        //init DateTimePickers
                        materialKit.initFormExtendedDatetimepickers();

                        // Sliders Init
                        materialKit.initSliders();
                    });


                    function scrollToDownload() {
                        if ($('.section-download').length != 0) {
                            $("html, body").animate({
                                scrollTop: $('.section-download').offset().top
                            }, 1000);
                        }
                    }
                </script>
</body>


<!-- Mirrored from material-blog-pro-laravel.creative-tim.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 07:20:18 GMT -->
</html>
