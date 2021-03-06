@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Thêm</small>
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
                        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                    <label>Họ và tên</label>
                            <input class="form-control" name="name" value="{{old('name')}}" placeholder="Vui lòng nhập thông tin" />
                                </div>
                            <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" name="username"  value="{{old('username')}}" placeholder="Vui lòng nhập thông tin" />
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại</label>
                                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Vui lòng nhập thông tin" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="{{old('email')}}" placeholder="Vui lòng nhập thông tin" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Vui lòng nhập thông tin" />
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input type="file" name="images" value="{{old('images')}}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="Vui lòng nhập thông tin" />
                                </div>
                               
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="text" name="status" value="{{old('status')}}" class="form-control" placeholder="Vui lòng nhập thông tin" />
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" name="level" value="{{old('level')}}" class="form-control" placeholder="Vui lòng nhập thông tin" />
                                </div>
                                <button type="submit" class="btn btn-default">Thêm</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection