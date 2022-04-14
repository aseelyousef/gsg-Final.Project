@extends('pharmacy.inc.layout')


@section('content')
    
<div class="wrapper bgded overlay gradient" style="background-image:url('{{asset('front/images')}}/5.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">Electronic prescription system</h3>

        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Read More</a></li>
          <li><a class="btn inverse" href="#"> pharmacist in website</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>

<div class="wrapper coloured">
 
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


@endsection


