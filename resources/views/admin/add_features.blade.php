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
    <h3 class="card-title">Add Features</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="{{route('save-features')}}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Icon</label>
        <div class="col">
          <input name="icon" class="form-control" placeholder="Title">
        </div>
        <label for="inputEmail3" class="col-sm-2 col-form-label">Heading</label>
        <div class="col">           
          <input name="heading" class="form-control" placeholder="Title">
          <input type="hidden" name="link" value="#" hidden>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea name="description" class="form-control" placeholder="Enter Description"></textarea> 
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