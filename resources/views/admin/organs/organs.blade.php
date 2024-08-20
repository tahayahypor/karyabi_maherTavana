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
								لیست دوره ها
                        <a href="{{ route('organ.create') }}" class="btn btn-danger">ایجاد عضو</a>

                        </header>
                        <table class="table table-striped border-top" id="sample_1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>استاد</th>
                                    <th>توضیحات</th>
                                    <th>عکس</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
 <tbody>

                            @foreach ($organs as $organ)
                                    
                               
                                <tr>
                                <th>{{ $organ->id }}</th>
                                <th>{{ $organ->master }}</th>
                                <th>{{ $organ->description }}</th>
                              
                                   <td><img src="{{ $organ->image }}" width="50px" height="50px"></td>
                                   <td>
                                        <a href="{{ route('organ.edit' , ['organ' => $organ->id] ) }}" class="btn btn-success col-lg-4" style="margin-left: 2px">ویرایش</a>

                                        <form action="{{ route('organ.destroy', ['organ' => $organ->id]) }}" method="POST">
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
