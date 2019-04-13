<!doctype html>
<html lang="en">
    <head>
        <!--meta tags-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="business template based on HTML5">
        <meta name="keywords" content="onepage, business, clean, modern">
        <meta name="author" content="Jamil,Tauhid">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--title-->
        <title>The Sahabian's</title>
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/jquery.datepicker.css">
        <link rel="stylesheet"  href="{{asset('frontend')}}/assets/css/style.css">
        <link rel="stylesheet"  href="{{asset('frontend')}}/assets/css/responsive.css">
        <link rel="shortcut icon" href="{{asset('frontend')}}/assets/favicon/TheShahibiens.jpg" type="image/x-icon"/>

    </head>
    <body>
      <section id="reservation" class="sahebian-booking-table-area" data-scroll-index="4">
         <div class="container">
            <div class="row">
                       <div class="col-lg-8 col-sm-12">
                          <div class="booking-left section_100">
                             <div class="site-heading">
                             </div>
                             <div class="booking-form ">
                                <form action="{{url('/menu/edit')}}" method="post" enctype="multipart/form-data">
                                  <!-- {{ csrf_field() }} -->
                                  @csrf
                                   <div class="row">
                                       <div class="col-md-6">
                                         <p>
                                            <input type="file" name="pictures" value="{{$specialmenu->pictures}}">
                                         </p>
                                      </div>
                                      <div class="col-md-6">
                                         <p>
                                            <input type="text" placeholder="Platter Name" name="pname" value="{{$specialmenu->PlatterName}}" required>
                                         </p>
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6">
                                         <p>
                                            <input type="text" placeholder="item-1" name="item_1" value="{{$specialmenu->item_1}}">
                                         </p>
                                      </div>
                                      <div class="col-md-6">
                                         <p>
                                            <input type="number" placeholder="Price" name="price_1" value="{{$specialmenu->price_1}}">
                                         </p>
                                      </div>
                                   </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                         <p>
                                            <input type="text" placeholder="item-2" name="item_2" value="{{$specialmenu->item_2}}" >
                                         </p>
                                      </div>
                                      <div class="col-md-6">
                                         <p>
                                            <input type="number" placeholder="Price_2" name="price_2" value="{{$specialmenu->price_2}}">
                                         </p>
                                      </div>
                                   </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                         <p>
                                            <input type="text" placeholder="item-3" name="item_3" value="{{$specialmenu->item_3}}" >
                                         </p>
                                      </div>
                                      <div class="col-md-6">
                                         <p>
                                            <input type="number" placeholder="Price" name="price_3" value="{{$specialmenu->price_3}}" >
                                         </p>
                                      </div>
                                   </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                         <p>
                                            <input type="text" placeholder="item-4" name="item_4" value="{{$specialmenu->item_4}}" >
                                         </p>
                                      </div>
                                      <div class="col-md-6">
                                         <p>
                                            <input type="number" placeholder="Price" name="price_4" value="{{$specialmenu->price_4}}" >
                                         </p>
                                      </div>
                                  </div>
                                   <div class="row">
                                      <div class="col-md-6">
                                         <p>
                                            <input type="text" placeholder="Total" name="item_5" value="{{$specialmenu->item_5}}" >
                                         </p>
                                      </div>
                                      <div class="col-md-6">
                                         <p>
                                            <input type="number" placeholder="Price" name="price_5" value="{{$specialmenu->price_5}}" >
                                         </p>
                                      </div>
                                    </div>
                                   <div class="row">
                                      <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$specialmenu->id}}">
                                         <p>
                                            <button type="submit">update menu</button>
                                         </p>
                                      </div>
                                   </div>
                                </form>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="booking-right">
                             <img src="{{asset('frontend')}}/assets/images/book.png" alt="book image" />
                          </div>
                       </div>
                    </div>
         </div>
      </section>
          </body>
    </html>