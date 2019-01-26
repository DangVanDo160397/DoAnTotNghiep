@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Menu
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-7" style="padding-bottom:120px">
                    	@if(count($errors) > 0)
                    		<div class="alert alert-danger">
                    			@foreach($errors->all() as $err)
                    				{{$err}} <br>
                    			@endforeach
                    		</div>
                    	@endif
                        <form action="{{route('menu.update',$menu)}}" method="POST">
                        	{{ csrf_field()}} {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" value="{{$menu->name}}" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <input class="form-control" name="status" value="{{$menu->status}}" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection