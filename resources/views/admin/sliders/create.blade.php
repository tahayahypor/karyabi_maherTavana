@extends('admin.layouts.main')

@section('main')
        <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
                <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        فرم ثبت دوره جدید
                        </header>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('slider.store') }}">
                                @csrf
                                
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