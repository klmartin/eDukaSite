@extends('layouts.app')

@section('center')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">First Section</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    

                    <div class="input-group-append">
                      <a href=" {{route('add-introduction')}} "  class="btn btn-default">
                        <i class="fas fa-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>	</th>
                      <th>Message</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($introduction as $intro)
                  	<tr>
                      <td> <span class=" {{$intro->icon}} "></span> </td>
                      <td>{{$intro->heading}}</td>
                      <td> {{$intro->description}}	</td>
                      <td><a href="" data-toggle="modal" class="btn btn-primary a-btn-slide-text <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                   <span class="iconify" data-icon="carbon:view" data-inline="false"></span>         
                          </a>
                          <a href="" data-toggle="modal" class="btn btn-primary a-btn-slide-text <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                   <span class="iconify" data-icon="carbon:view" data-inline="false"></span>         
                          </a>
                          <a href="" data-toggle="modal" class="btn btn-primary a-btn-slide-text <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                   <span class="iconify" data-icon="carbon:view" data-inline="false"></span>         
                          </a>
                      </td>
                    </tr>
                  	@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
  </div>
  <!-- /.content-wrapper -->
  @endsection