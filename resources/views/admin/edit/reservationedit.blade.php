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
                        <h2>book a table</h2>
                     </div>
                     <div class="booking-form">
                        <form action="{{url('/reservation/edit')}}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="Name" name="name" value="{{$reservation->name}}" required>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="email" placeholder="Email" name="email" value="{{$reservation->email}}" required>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="tel" placeholder="Phone" name="phone" value="{{$reservation->phone}}" required>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="int" placeholder="Person" name="person" value="{{$reservation->person}}" required>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input id="reservation_date" name="date" placeholder="Expected Date" data-select="datepicker" type="date" value="{{$reservation->date}}"required>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="Occation" name="occation" value="{{$reservation->occation}}" required>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <p>
                                    <textarea placeholder="Special Request" name="srequest" required>{{$reservation->request}}</textarea>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                <input type="hidden" name="id" value="{{$reservation->id}}">
                                 <p>
                                    <button type="submit">update info</button>
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