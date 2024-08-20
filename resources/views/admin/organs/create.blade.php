@extends('admin.layouts.main')

@section('main')

      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        فرم ثبت دوره جدید
                     
                        </header>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('organ.store') }}">
                            @csrf
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">نام استاد:</label>
                                    <input type="text" class="form-control @error('master') is-invalid @enderror" id="exampleInputPassword1" placeholder="نام استاد را وارد نمایید" name="master">

                                    @error('master')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">توضیحات:</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="editor"></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group" style="display: flex">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                        aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                    </div>
                                </div>
                                                             
                                <button type="submit" class="btn btn-info">ثبت</button>
                            </form>

                        </div>
                    </section>
                </div>
              </div>
          </section>
      </section>

@endsection