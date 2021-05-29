@extends('homepage.templetes.dafaults')

@section('title', '| home')
@section('content')
    <div class="main main-raised">





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
                                                    <a href="category/technology.html" class="text-dark btn btn-success">{{optional($post->category)->name}}</a>
                                                </h6>
                                                <h3 class="card-title">
                                                    <a href="article/trends-in-ux-design-for-start-ups.html">{{$post->title}}</a>
                                                </h3>

                                                <p class="card-description">
                                                    {{$post->body}}
                                                    <a href="{{ route('getSinglePost',['post'=>$post->slug])  }}" class="btn btn-danger btn-sm"> Read More </a>
                                                </p>
                                                <p class="card-tags">
                                                    @foreach($post->tags as $tag)

                                                        <a href="tag/haute-couture.html"><span style="background-color: #4caf50;" class="badge badge-pill">{{($tag->name)}}</span></a>


                                                    @endforeach

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


@endsection
