@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        <div class="float-right">
            <a href="{{url('image/create')}}" class="btn btn-primary">New</a>
        </div>
        <h1 style="font-size: 2.2rem">Image Gallery (Image CRUD Tutorial)</h1>
        <hr/>
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-4 col-lg-3" style="margin-bottom: 20px">
                    <div class="card">
                        <img class="card-img-top"
                             src="{{url($image->image? 'uploads/'.$image->image:'images/noimage.jpg')}}"
                             alt="{{$image->description}}" width="100%" height="180px"/>
                        <div class="card-body">
                            <h6 class="card-title text-center">{{ucwords($image->description)}}</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <form id="frm_{{$image->id}}"
                                      action="{{url('image/delete/'.$image->id)}}"
                                      method="post" style="padding-bottom: 0px;margin-bottom: 0px">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="javascript:if(confirm('Are you sure want to delete?')) $('#frm_{{$image->id}}').submit()"
                                               class="btn btn-danger btn-sm btn-block">Delete</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="{{url('image/update/'.$image->id)}}"
                                               class="btn btn-primary btn-sm btn-block">Edit</a>
                                        </div>
                                        <input type="hidden" name="_method" value="delete"/>
                                        {{csrf_field()}}
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
@endsection
