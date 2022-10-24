@extends('layouts.app')

@section('center')
<!-- Main content -->
 <div class="content-wrapper">
   
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
<!-- Horizontal Form -->
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Horizontal Form</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="{{route('saveaboutus')}}" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Heading</label>
        <div class="col-sm-10">
          <input name="title" class="form-control" placeholder="Title">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea name="desc" class="form-control" placeholder="Enter Description"></textarea> 
        </div>
      </div>
     
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info">Save</button>
      <button type="submit" class="btn btn-default float-right">Cancel</button>
    </div>
    <!-- /.card-footer -->
  </form>
</div>
<!-- /.card -->
</div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content -->
@endsection