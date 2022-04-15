@extends('admin.admin_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

              <form class="form-horizontal" action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <h4 class="card-title">Add Slider</h4>

                  <div class="form-group row">
                    <label  class="col-sm-3 text-end control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" name="title" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-3 text-end control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                      <input type="file" name="image" class="form-control" required>
                    </div>
                  </div>

                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="submit" class="btn btn-primary" style="float: right;">
                      Add
                    </button>
                  </div>
                </div>
              </form>
            </div>



          </div>
    </div>{{--end row--}}
</div>
@endsection
