@extends('homepage.templetes.dafaults')
@section('title', '| allpost')
@section('content')
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
                        <a href="category/technology.html" class="text-dark ">{{optional($post->category)->name}}</a>
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
@endsection
