@extends('master')

@section('title')
    Add Blog
@endsection

@section('content')
    <section class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <h3 class="text-primary-emphasis" align="center">{{ Session::get('msg') }}</h3><br>
                    <form action="{{ route('addBlogComplete') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label text-primary-emphasis fs-4">Title*</label>
                            <input class="form-control" type="text" name="title" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control" type="text" name="description" id="description" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label>
                            <input class="form-control" type="file" name="image" id="image" required>
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
