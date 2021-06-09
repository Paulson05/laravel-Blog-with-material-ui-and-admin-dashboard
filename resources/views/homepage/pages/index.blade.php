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
                                                        <img src="/upload/images/{{$post->image}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="card-category">
                                                    category:
                                                    <a href="{{route('categorypost',['id'=>optional($post->category)->id])}}" class="text-dark ">{{optional($post->category)->name}}</a>
                                                </h6>
                                                <h3 class="card-title">
                                                    <a href="article/trends-in-ux-design-for-start-ups.html">{{$post->title}}</a>
                                                </h3>

                                                <p class="card-description">
                                                <p>{{Substr(strip_tags($post->body), 0, 100)}} {{strlen(strip_tags($post->body)) > 150 ? "......" : ""}}</p>

                                                <a href="{{ route('getSinglePost',['post'=>$post->slug])  }}" class="btn btn-danger btn-sm"> Read More </a>
                                                </p>
                                                <p class="card-tags">
                                                    @foreach($post->tags as $tag)

                                                        <a href="{{route('categorypost',['id'=>optional($post->category)->id])}}"><span style="background-color: #4caf50;" class="badge badge-pill">{{($tag->name)}}</span></a>


                                                    @endforeach

                                                </p>
                                                <h3> <i class="fas fa-comment-alt m-2"></i> {{$post->comments->count()}}<span class="m-1">comments</span></h3>

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
                                @foreach($post4 as $post)
                                <div class="col-md-4">
                                    <div class="card card-plain card-blog">
                                        <div class="card-header card-header-image">
                                            <a href="article/the-10-biggest-street-style-trends-of-2019.html">
                                                <img src="/upload/images/{{$post->image}}">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-category">
                                         <span>category:</span>       <a href="{{route('categorypost',['id'=>optional($post->category)->id])}}" class="text-dark">{{optional($post->category)->name}}</a>
                                            </h6>
                                            <h4 class="card-title">
                                                <a href="article/the-10-biggest-street-style-trends-of-2019.html">{{$post->title}}</a>
                                            </h4>
                                            <p class="card-tags">
                                                <span>tags:</span>
                                                @foreach($post->tags as $tag)

                                                <a href="tag/haute-couture.html"><span style="background-color: #4caf50;" class="badge badge-pill">{{($tag->name)}}</span></a>


                                                @endforeach
                                            </p>
                                            <p class="card-description">
                                                {{Substr(strip_tags($post->body), 0, 100)}} {{strlen(strip_tags($post->body)) > 150 ? "......" : ""}}
                                                <a href="{{ route('getSinglePost',['post'=>$post->slug])  }}"> Read More </a>
                                            </p>
                                            <p class="author">
                                                by
                                                <a href="author/admin-guy.html">
                                                    <b>Admin Guy</b>
                                                </a> &#8226; Apr 15, 2021 &#8226; 5 min read
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                    <a href="{{route('post.create')}}" class="btn btn-rose btn-raised btn-round">
                                    View All
                                </a>
                                <div>
                                    {{-- @foreach($alltags as $tag)
                                     <p>{{$tag->title}}</p>
                                    @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
