<!-- @extends('layouts.HeaderHome') -->

<!-- @section('main') -->
<!-- <main>
    <div class="container-fluid">
      <div class="Educationcourses">
        <h2>دوره های آموزشی</h2>
      </div>
    </div>

    <div class="team-boxed">
      <div class="container">

        <div class="row people">
          <div class="col-md-6 col-lg-4 item">
            <div class="box"><img class="img-box" src="./image/download.jpg" width="250px" height="184px">

              <h5 class="name text-center p-3">غیر رایگان</h5>

              <p class="description">در اینجا می توانید برای شرکت در کلاس های پیشرفته ثبت نام کنید</p>
              <button type="button" class="btn btn-primary btn-rounded text-center">ثبت نام</button>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <div class="box"><img class="img-boxx" src="./image/images.jpg" width="250px" height="184px">

              <h5 class="name text-center p-3">رایگان</h5>

              <p class="description">در اینجا میتوانید دوره های آموزشی را رایگان مشاهده کنید</p>
              <button type="button" class="btn btn-primary btn-rounded text-center">مشاهده</button>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <div class="box"><img class="img-boxxx" src="./image/back.jpg" width="250px" height="184px">

              <h5 class="name text-center p-3">غیر حضوری </h5>

              <p class="description"></p>کلاس های غیر حضوری</p>
              <button type="button" class="btn btn-primary btn-rounded text-center">مشاهده</button>

            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid">
        <div class="PopularCourses">
          <h3>محبوب ترین دوره ها</h3>
          <div class="card border-primary mb-3 m-auto pt-3" style="max-width: 18rem;">
            <div class="card-header">دوره های استاد فرجی</div>
            <div class="card-body text-primary">
              <h5 class="card-title">طراحی لباس</h5>
              <p class="card-text">در این دوره آموزشی شما ساخت و طراحی لباس را از استاد فرجی میتوانید یاد بگیرید.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="workshop">
          <h3 style="margin-left: 80px;">کارگاه آموزشی</h3>
          <div class="card mb-3 m-auto mt-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img class="bg-workshop" src="./image/workshop.jpg" class="img-fluid rounded-start" width="200px"
                  height="200px">
              </div>
              <div class="col-md-8">
                <div class="card-bo">
                  <h5 class="card-title mt-3">کاراگاه</h5>
                  <p class="card-text">کسانی که علاقه مند به یادگیری در کار های مختلف دارند میتوانند در کاراگاه ثبت نام
                    کند.</p>
                  <button type="button" class="btn btn-primary btn-rounded text-center mb-3">ثبت نام</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="container-fluid">

        <div class="customer">

          <h3>باشگاه مشتریان </h3>

          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">متن درباره این باکس</h5>
                  <p class="card-text">متن.</p>
                  <a href="#" class="btn btn-primary">لینک</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mt-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">متن درباره این باکس</h5>
                  <p class="card-text">متن.</p>
                  <a href="#" class="btn btn-primary">لینک</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="introduction">
          <h3>معرفی شرکت و سوابق کاری </h3>

          <div class="card mb-3">
            <img class="bg-company" src="./image/company2.jpg" width="1240px" height="300px" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">شرکت ماهر توانا</h5>
              <p class="card-text">متن.</p>
              <hr>
              <h3>سوابق کاری </h3>
              <p class="card-text">متن.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fliud">
        <div class="news">
          <h3>اخبار</h3>
          <div class="card text-center">
            <div class="card-header">
              اخبار شرکت
            </div>
            <div class="card-body">
              <h5 class="card-title">دوره آموزشی</h5>
              <p class="card-text">با اعلام مهندس فرجی تاریخ ثبت نام تمدید یافت .</p>
              <div class="alert alert-primary" role="alert">
                برای کسب اطلاعات بیشتر روی دکمه <a href="#" class="alert-link">بیشتر بدانید</a> بزنید
              </div>
            </div>
            <div class="card-footer text-body-secondary">
              آخرین آپدیت:10ساعت پیش
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="teacher">
          <h3>معرفی اعضا</h3>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">استاد فرجی</h5>
                  <p class="card-text">متن</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">استاد موزانی</h5>
                  <p class="card-text">متن</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">استاد حسین زاده</h5>
                  <p class="card-text">متن.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">استاد یحیی پور</h5>
                  <p class="card-text">متن</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-12">

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.9968479830713!2d53.051216275010894!3d36.57829378017832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f85154f392f166b%3A0x1bb32e34b5ebbd91!2sImam%20Muhammad%20Bagher%20Technical%20University!5e0!3m2!1sen!2s!4v1694243894259!5m2!1sen!2s"
          width="400" height="450" style="border:0; margin-top: 10px; margin-left: 10px; margin-bottom: 10px;"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </main> -->
<!-- @endsection -->
