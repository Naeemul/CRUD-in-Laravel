@extends('master')

@section('title')
    Manage Blog
@endsection

@section('content')
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <h3 class="text-primary-emphasis" align="center">{{ Session::get('msg') }}</h3><br>
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>
                                <img src="{{ asset("/$blog->image") }}" width="250px" height="120px">
                            </td>
                            <td>{{ $blog['title'] }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('updateBlog', [$blog->id]) }}">Update</a>
                                <a class="btn btn-danger" href="{{ route('deleteBlog', [$blog->id]) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
