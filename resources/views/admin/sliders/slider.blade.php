@extends('admin.layouts.main')

@section('main')
    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
          
              <!--state overview end-->

               <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
								لیست اسلایدر ها
                                <a href="{{ route('slider.create') }}" class="btn-btn-danger">اسلایدر جدید</a>

                        </header>
                        <table class="table table-striped border-top" id="sample_1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عکس</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sliders  as $slider)
                                    
                               
                                <tr>
                                   <td>{{ $slider->id }}</td>
                                   
                                   <td><img src="{{ $slider->image }}" width="50px" height="50px"></td>
                                   <td>
                                        <a href="{{ route('slider.edit' , ['slider' => $slider->id] ) }}" class="btn btn-success col-lg-4" style="margin-left: 2px">ویرایش</a>

                                        <form action="{{ route('slider.destroy' , ['slider' => $slider->id] ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-danger col-lg-3" type="submit">حذف</button>
                                        </form>                                   
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </section>


                </div>
            </div>
                         
             
            
          </section>
      </section>
      <!--main content end-->
 @endsection