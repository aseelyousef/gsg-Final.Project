
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/log-doctor.css" />
    <title>Sign in Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <!--Start login Doctor -->
          <form action="#" class="sign-in-form">
            <h2 class="title">Login Doctor</h2>
             <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
      <a href="{{ route("index") }}"> <input type="submit" value="Login" class="btn solid" /> </a> 
        <!--start  Social media icon --> 
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
        <!--End  Social media icon --> 
          </form>
          <form action="#pharmacy" class="sign-up-form">
            <h2 class="title">Login Pharmacist</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign in" />
         <!--start  Social media icon --> 
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
         <!--End  Social media icon --> 
          </form>
        </div>
      </div>

  
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Are you a Pharmacist ?</h3>
          <p>
            Let's go to your account
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign in
          </button>
        </div>
        <img src="{{asset('front/images')}}/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of our doctors ?</h3>
          <p>
            Let's go
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="{{asset('front/images')}}/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

<script>
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");

  sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
 });

  sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
 });
</script>

</body>
</html>



