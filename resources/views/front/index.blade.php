@extends('front.inc.layout')


@section('content')
    
<div class="wrapper bgded overlay gradient" style="background-image:url('{{asset('front/images')}}/5.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">Electronic prescription system</h3>

        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Read More</a></li>
          <li><a class="btn inverse" href="#"> Doctors in website</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>

<div class="wrapper coloured">
  <article class="hoc cta clear"> 

    <h6 class="three_quarter first">Velit tristique sem vehicula laoreet nullam elementum</h6>
    <footer class="one_quarter"><a class="btn" href="#">Ipsum pharetra leo</a></footer>
  </article>
</div>
<!--  -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading">Our Services</h6>
      </div>
      <ul class="nospace group">
        <li class="one_third first">
          <article><a href="#"><i class="fas fa-stethoscope"></i></a>
            <h6 class="heading">Laboratory file</h6>
            <p>The possibility of adding medical examinations [&hellip;]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-user-md"></i></a>
            <h6 class="heading">Doctor's file</h6>
            <p> It contains its own information And laboratory tests for the patient, [&hellip;]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-procedures"></i></a>
            <h6 class="heading">Patient file</h6>
            <p>Contains patient data, laboratory tests, and electronic prescriptions [&hellip;]</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
      </ul>
    </section>
    <!-- end main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- start team -->
<div class="wrapper row2">
  <section id="latest" class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading">Our Teams</h6>
      
    </div>
    <ul class="nospace group">
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="{{asset('front/images')}}/demo/348x261.png" alt=""></a>
          <figcaption>Aseel yousef</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="{{asset('front/images')}}/demo/348x261.png" alt=""></a>
          <figcaption>Admin User</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="{{asset('front/images')}}/demo/348x261.png" alt=""></a>
          <figcaption>Admin User</figcaption>
        </figure>
      </li>
    </ul>
  </section>
</div>
<!-- End team -->

<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +972 5979 755 97</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> aseel@gmail.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
  </section>
</div>
@endsection


