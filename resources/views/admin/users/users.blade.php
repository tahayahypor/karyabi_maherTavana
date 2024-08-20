@extends('admin.layouts.main')

@section('main')
    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
            


              <!--state overview end-->

                    </section>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           لیست اعضا

                            <a href="{{ route('users.create') }}" class="btn btn-danger">ایجاد کاربر</a>

                        </header>
                        <table class="table table-striped border-top" id="sample_1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>عملیات</th>
                                </tr>
                              
							</thead>
							<tbody>

                            @foreach ($users as $user)
                                
                           
                                    
                                <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                    <td>
                                        <a href="{{ route('users.edit' , ['user' => $user->id] ) }}" class="btn btn-success col-lg-3" style="margin-left: 2px">ویرایش</a>

                                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
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