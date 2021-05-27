@extends('templetes.defaults')
@section('title', '| about')
@section('content')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

    <div class="">

    @include('templetes.partials.headerpanel')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">About page</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Add user</a>
                        </div>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Creat header Post</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{route('about.store')}}" method="post" enctype= "multipart/form-data" >
                                            @csrf

                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Title</strong>
                                                        <input type="text" name="title" class="form-control" placeholder="email">

                                                    </div>

                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>paragraph</strong>
                                                        <input type="text" name="paragraph" class="form-control" placeholder="profile">

                                                    </div>

                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>image</strong>
                                                        <input type="file" name="image" class="form-control" placeholder="profile">

                                                    </div>

                                                </div>



                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>about me</strong>
                                                       <textarea  id="mytextarea" cols="10" rows="5" placeholder="about me" class="form-control" name="about"></textarea>

                                                    </div>

                                                </div>



                                                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                                    <button type="submit" class="btn btn-primary">Post</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                            </div>




                        </div>

                    </div>
                </div>
                <div >

                    <div class="">
                        <table class="table ">
                            <thead class=" text-primary">
                            <th style="font-size: 10px;">
                                ID
                            </th>
                            <th >
                                Name
                            </th>
                            <th>
                              profile
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                phone-number
                            </th>
                            <th>
                               About me
                            </th>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($abouts as $about)
                                <td>
                                   {{$about->id}}
                                </td>
                                <td>
                                   {{$about->about}}
                                </td>
                                <td>
                                  {{$about->title}}
                                </td>
                                <td>
                                    {{$about->paragraph}}
                                </td>

                                    <td >
                                        <img   src ="/upload/images/{{$about->image}}" height= "70px;" width = "80px;" style="border-radius: 98px;" >
                                    </td>
                                    <td>
                                        <a href="" title="show">
                                            <i class="btn btn-primary btn-sm fa fa-eye" ></i>
                                        </a>

                                        <a href=""  >
                                            <i class="btn btn-success btn-sm  fa fa-edit" ></i>
                                        </a>

                                        <form style="display: inline-block" method="post" action="" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger  p-0"><i class="btn btn-danger btn-sm fa fa-trash" ></i></button>
                                        </form>
                                    </td>

                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
