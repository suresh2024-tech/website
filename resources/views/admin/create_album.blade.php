@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form method="post" action="{{route('admin.albums.save')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Album Title</label>
                    <input type="text" name="title" class="form-control">

                </div>

                <div class="form-group">
                    <label for="">Album Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Cover Image</label>
                    <input type="file" name="cover_image">
                </div>

                <input type="submit" value="save" name="save" class="btn btn-primary">


            </form>
        </div>
    </div>
</section>

@endsection