@extends('doctor.inc.layout')
@section('content')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('{{asset('front/images')}}/demo/backgrounds/01.png');">
    <div class="hoc container testimonial clear"> 
      <!-- ################################################################################################ -->
      <article><img src="{{asset('front/images')}}/demo/3.ico" style="height: 90px;" alt="">
        <h6 class="heading font-x1">Dr. Doha yousef</h6>
        <em> General doctor</em></article>
        <blockquote> *-* </blockquote> <!-- معلومات عن الطبيب -->
      <!-- ################################################################################################ -->
    </div>
  </div>

<!-- ################################################################################################ -->

  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
 <div class="content"> 

      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->

     
          <!-- ################################################################################################ -->
         
        <div class="wrapper row2">
         <div class="container">
            <div class="box">
              <a class="imgover" href="#"> 
                 <img src="{{asset('front/img')}}/pharm.png">Pharmacies
              </a></div>
            <div class="box">
              <a class="imgover" href="{{ route("patient") }}">
               <img src="{{asset('front/img')}}/haeufig_krank.png"  alt=""/>The patients</div>
            </a></div>
          </div>
          <div class="wrapper row2">
            <div class="container">
             <div class="box">
              <a class="imgover" href="#">
              <img src="{{asset('front/img')}}/AnotherAfrican-Doctor.png" alt=""> Appointments </a></div>
              <div class="box">
               <a class="imgover" href="#">
              <img src="{{asset('front/img')}}/Doctor-Holding-Clipboard.png" alt=""> Laboratories</a></div>
             <div style="clear:both;"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
  @endsection






  

