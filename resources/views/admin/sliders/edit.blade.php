@extends('admin.layouts.main')

@section('main')

      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ویرایش دوره
                     
                        </header>
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('slider.update' , ['slider' => $slider->id] ) }}" method="POST">
                    @csrf
                @method('PATCH')

                                </div>
                           
                            
                                <div class="form-group" style="display: flex">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                        aria-label="Image" aria-describedby="button-image"  value="{{ $slider->image }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                    </div>
                                </div>
                                       

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش دوره</button>

                        <a href="{{ route('slider.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
                    </section>
                </div>
            </div>
            
            
          </section>
      </section>
@endsection
