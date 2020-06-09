@extends('layouts.master')
@section('title', 'Database')

@section('content')

    <div class="container jumbotron " style="margin-top:50px; width:1000px; border-radius: 30px;
    box-shadow:  2px 2px 2px 2px gray;">
        <marquee><h3 style="text-align:center"><strong>MOSCO 2019/2020 FIRST SIMPLE BLOG WITH LARAVEL</strong></h3></marquee>
        <div class="content-center" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-12">
                    <div class="float-left" style="margin-bottom:20px;">
                        <a class="btn btn-success" href="{{('iphone')}}">Create New Post</a>
                    </div>
                </div>
            </div>
            
                @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                @endif
            
            <div class="table-responsive ">
                <div class="table table-bordered table-hover">
                    <table>
                        <thead class="thead-dark" style="text-align:center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Title</th>     
                            <th>Body</th>
                            <th>Created_at</th>  
                            <th style="width:250px">Actions</th>
                                        
                        </thead>
                        <tbody>
                            @foreach ($iphone as $iphone)
                                <tr class="text-center">
                                    <th>{{$loop->index + 1}}</th>
                                    
                                    <td>{{ $iphone->name }}</td>
                                    <td>{{ $iphone->title }}</td>
                                    <td>{{ $iphone->body }}</td>
                                    <td>{{ $iphone->created_at->diffForHumans() }}</td>

                                    <td>
                                        <div class="row">
                                        <div class="col-4">
                                        <form method="post" action="{{route('show', $iphone->id)}}">
                                        @csrf
                                        @Method('get')
                                            
                                            <button class="btn btn-info" type="submit">Show</button>
                                        </form>
                                        </div>
                                        <div class="col-3">
                                        <form method="post" action="{{route('edit', $iphone->id)}}">
                                        @csrf
                                        @Method('get')
                                            
                                            <button class="btn btn-primary" type="submit">Edit</button>
                                        </form>
                                        </div>
                                        <div class="col-3">
                                        <form method="post" action="{{route('delete', $iphone->id)}}">
                                        @csrf
                                        @Method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </div>
                                            
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>   
    </div>
@endsection