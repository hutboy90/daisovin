@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="box-header">
          <h3 class="box-title">Create news
          </h3>
          @if(Session::has('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{ Session::get('status') }}
            </div>
            @endif
          <form action="/news212264611@/create" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name='title' placeholder="" onkeyup="ChangeToSlug();">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name='slug' placeholder="">
            </div>
            
            <div class="form-group">
                <label for="slug">Categories</label>
                <select class="form-control" name="category_id">
                    <?php foreach ($categories as $category):?>
                        <option value="{{$category->id}}" data-seo_keyword="{{$category->seo_keyword}}">{{$category->title}}</option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="text" class="form-control" id="thumbnail" name='thumbnail' placeholder="">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name='description' placeholder="">
            </div>

            <div class="form-group">
                <label for="Content">Content</label>
                <textarea id="editor1" name="content" rows="10" cols="80"></textarea>
            </div>
            <div class="form-group">
                <label>Feature</label>
                <select class="form-control" name="featured">
                    <option value="0">Normal</option>
                    <option value="1">Featured</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">SEO keyword</label>
                <input type="text" class="form-control" id="seo_keyword" name='seo_keyword' placeholder=""
                value="{{$categories[0]->seo_keyword}}">
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
      </div>
    </div>
    <!-- /.col-->
  </div>
</section>

@endsection

