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
<div class="row">
               <div class="col-lg-5 col-md-5">
                  <div class="contact-left">
                      <form action="{{url('/feedback/edit')}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <p>
                           <input class="input" type="text" placeholder="Your Name" id="name" name="name" value="{{$feedback->name}}" required>
                        </p>
                        <p>
                           <input class="input" type="email" placeholder="Your Email" id="email" name="email" value="{{$feedback->email}}" required> 
                        </p>
                        <p>
                           <textarea class="input" name="message" id="msg" placeholder="Write your message here..." required>{{$feedback->message}}</textarea>
                        </p>
                        <input type="hidden" name="id" value="{{$feedback->id}}">
                        <p>
                           <button type="submit">Update Info</button>
                        </p>
                  </form>
                  </div>
               </div>
          </body>
    </html>