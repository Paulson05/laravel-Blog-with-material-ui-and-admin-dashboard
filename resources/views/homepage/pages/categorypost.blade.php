@extends('homepage.templetes.dafaults')

@section('title', '| category')
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

                    @foreach( $alltags as $post)
                        @foreach($post->posts as $value)

                        <div class="col-md-4">
                            <div class="card-header card-header-image">
                                <a href="article/trends-in-ux-design-for-start-ups.html">
                                    <img src="/upload/images/{{$value->image}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">

                            <h3 class="card-title">
                                <a href="article/trends-in-ux-design-for-start-ups.html">{{$value->title}}</a>
                            </h3>

                            <p class="card-description">
                            <p>{{$value->body}}</p>

{{--                            <a href="{{ route('getSinglePost',['post'=>$post->slug])  }}" class="btn btn-danger btn-sm"> Read More </a>--}}
                            </p>



                        </div>
                        @endforeach
                    @endforeach
                </div>

                </h2>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
