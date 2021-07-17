@extends('homepage.templetes.dafaults')
@section('title', "|$post->title")


@section('content')
    <div class="container pt-5 pl-3">
        <div class="row">
            <div class="container">

                <div class="col-md-8 justify-content-center">

                  <div class="container">



                      <h2 class="text-center ">{{$post->title}}</h2>
                      <div class="text-center ">
                          <a href="article/trends-in-ux-design-for-start-ups.html">
                              <img src="/upload/images/{{$post->image}}" height="300px; width:200px;">
                          </a>
                      </div>
                      <p class=" text-capitalize">{{$post->body}}</p>
                  </div>
                    <hr>
                    category: <span class="btn btn-primary">{{optional($post->category)->name}}</span>
                    <hr>
                    Tag:
                    @foreach($post->tags as $tag)
                        <span class="btn btn-success">{{($tag->name)}}</span>


                    @endforeach


                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 p-2">
                <h3> <i class="fas fa-comment-alt m-2"></i> <span class="m-1">comments {{$post->comments->count()}} </span></h3>

                @foreach($post->comments as $comment)
                    <div class="row  pt-2" >
                        <div class="card ">
                            <div class="card-body ">
                                <p><span class="m-2 text-success">Name:{{$comment->name}}</span> </p>

                                <textarea class="text-primary form-control" rows="5" cols="10" placeholder="comments" > {{$comment->comments}}</textarea>
                                <span class="mt-5 text-secondary">{{date ('M j, Y h:ia', strtotime($comment->created_at))}}</span>
                            </div>
                        </div>


                    </div>

                @endforeach



            </div>
        </div>
        <div class="row">
            <form action="{{route('comments.store',['comments'=>$post->id])}}" method="post">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-md-4 p-2">
                        <input type="text" name="name" class="form-control" placeholder="name" @error('name'){{'is-invalid'}}@enderror>
                        @error('name')
                        <span class="form-text text-danger">{{$errors->first('name')}}</span>
                        @enderror
                    </div>

                    <div class="col-md-4 p-2">
                        <input type="email" name="email" class="form-control" placeholder="your email" @error('email'){{'is-invalid'}}@enderror>
                        @error('email')
                        <span class="form-text text-danger">{{$errors->first('email')}}</span>
                        @enderror
                    </div>


                </div>

                <div class="row justify-content-center ml-5">
                    <div class="col-md-8">
                        <textarea name="comments" id="" cols="82" rows="6"  placeholder="add your comment" class="form-control"></textarea>
                        @error('comments')
                        <span class="form-text text-danger">{{$errors->first('comments')}}</span>
                        @enderror
                    </div>
                    <div class="col-md-8 m-2">
                        <button type="submit" class="btn btn-danger" >
                            comment
                        </button>
                    </div>

                </div>

            </form>
        </div>
    </div>

@endsection



