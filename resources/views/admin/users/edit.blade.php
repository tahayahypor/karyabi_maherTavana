@extends('admin.layouts.main')

@section('main')

      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ویرایش کاربر
                     
                        </header>
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('users.update' , ['user' => $user->id] ) }}" method="POST">
                    @csrf
                @method('PATCH')

                    <div class="card-body">
                        <div class="form-group">

                            <div class="col-lg-8">
                                <label for="inputname" class="col-sm-2 control-label">نام کاربر</label>
                                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="inputname" placeholder="نام کاربر را وارد کنید" value="{{ $user->name }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-lg-8">
                            <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>
                            <input type="email" name="email" class="form-control @error('name') is-invalid @enderror" id="inputEmail3" placeholder="ایمیل را وارد کنید" value="{{ $user->email }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>
               
                        <div class="form-group">
                            <div class="col-lg-8">
                            <label for="inputPassword3" class="col-sm-2 control-label">پسورد</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword3" placeholder="پسورد را وارد کنید" value="{{old('password')}}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-8">
                            <label for="inputPassword3" class="col-sm-2 control-label">تکرار پسورد</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="inputPassword3" placeholder="تکرار پسورد را وارد کنید" value="{{old('password')}}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>
                 
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش کاربر</button>

                        <a href="{{ route('users.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
                    </section>
                </div>
            </div>
            
            
          </section>
      </section>
@endsection
