@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="form-group">
        <form action="/news212264611@/upload" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="exampleInputFile">Upload image</label>
            <input type="file" id="exampleInputFile" name="image">
            <button type="submit">submit</button>
        </form>
      </div>
</section>
@endsection

