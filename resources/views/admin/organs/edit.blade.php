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
                <form class="form-horizontal" action="{{ route('organs.update' , ['organ' => $organ->id] ) }}" method="POST">
                    @csrf
                @method('PATCH')

                    <div class="card-body">
                        <div class="form-group">

                            <div class="col-lg-8">
                                <label for="inputname" class="col-sm-2 control-label">نام استاد</label>
                                <input type="text" name="master" class="form-control  @error('master') is-invalid @enderror" id="inputname" placeholder="نام استاد را وارد کنید" value="{{ $organ->master }}">

                                @error('master')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">

                        <div class="col-lg-8">
                            <label for="inputname" class="col-sm-2 control-label">توضیحات</label>
                            <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" id="inputname" placeholder="توضیحات را وارد کنید" value="{{ $organ->description }}">

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        </div>

                 
                        <div class="form-group" style="display: flex">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                        aria-label="Image" aria-describedby="button-image"  value="{{ $organ->image }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                    </div>
                                </div>
                 
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش کاربر</button>

                        <a href="{{ route('organs.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
                    </section>
                </div>
            </div>
            
            
          </section>
      </section>
@endsection
