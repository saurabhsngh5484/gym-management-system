<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitlife - Work Hard To Get Better Life</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.php" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span">Fitlife</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link active" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="#class" class="navbar-link" data-nav-link>Classes</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>

      <a href="./fitlife/index.php" class="btn btn-secondary">Admin Login</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <strong class="strong">The Best</strong>Fitness Club
            </p>

            <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>

            <p class="section-text">
            Transform Your Fitness Journey with Us!<br>
            Join Our Community and Reach Your Goals with Expert Guidance and State-of-the-Art Facilities.
            </p>

            <a href="#" class="btn btn-primary">Get Started</a>

          </div>

          <div class="hero-banner">

            <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">

            <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate"
              class="abs-img abs-img-1">
            <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner has-after">
            <img src="./assets/images/about-banner.png" width="660" height="648" loading="lazy" alt="about banner"
              class="w-100">

            <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-1">
            <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-2">

            <img src="./assets/images/fitness.png" width="650" height="154" loading="lazy" alt="fitness"
              class="abs-img w-100">
          </div>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Welcome To Our Fitness Gym</h2>

            <p class="section-text">
            Welcome to FitLife , where our mission is to inspire and support every member on their fitness journey. Since our establishment in [Year], we’ve built a vibrant community of fitness enthusiasts dedicated to achieving their health and fitness goals. Our state-of-the-art facilities, diverse range of classes, and expert trainers provide the perfect environment for everyone, from beginners to seasoned athletes.
            </p>

            <p class="section-text">
            At FitLife , we believe fitness is a lifestyle, not just a workout. Our holistic approach combines personalized training, nutrition guidance, and a supportive community to ensure you not only reach your fitness milestones but also enhance your overall well-being. Join us at [Gym Location] and experience why we’re the best choice for your fitness needs.
            </p>

            <div class="wrapper">

              <div class="about-coach">

                <figure class="coach-avatar">
                  <img src="./assets/images/about-coach.jpg" width="65" height="65" loading="lazy" alt="Trainer">
                </figure>

                <div>
                  <h3 class="h3 coach-name">Saurabh Singh</h3>

                  <p class="coach-title">Our Coach</p>
                </div>

              </div>

              <a href="#" class="btn btn-primary">Explore More</a>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="section video" aria-label="video">
        <div class="container">

          <div class="video-card has-before has-bg-image"
            style="background-image: url('./assets/images/video-banner.jpg')">

            <h2 class="h2 card-title">Explore Fitness Life</h2>

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-sharp" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="btn-link has-before">Watch More</a>

          </div>

        </div>
      </section>





      <!-- 
        - #CLASS
      -->

      <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container">

          <p class="section-subtitle">Our Classes</p>

          <h2 class="h2 section-title text-center">Fitness Classes For Every Goal</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">Weight Lifting</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Build strength and muscle with our expert-led weight lifting sessions. Join us to achieve your fitness goals and push your limits!
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">85%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 85%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">Cardio & Strenght</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Boost your endurance and power with our dynamic cardio and strength training sessions. Ideal for all fitness levels!
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">70%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">Power Yoga</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Enhance flexibility and strength with our invigorating Power Yoga classes. Perfect for all fitness levels!
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">90%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 90%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">The Fitness Pack</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">60%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 60%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Our News</p>

          <h2 class="h2 section-title text-center">Latest Blog Feed</h2>

          <ul class="blog-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="./assets/images/blog-1.jpg" width="440" height="270" loading="lazy"
                    alt="Going to the gym for the first time" class="img-cover">

                  <time class="card-meta" datetime="2022-07-07">7 June 2024</time>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">The Ultimate Guide to Choosing the Right Gym for Your Fitness Goals</a>
                  </h3>

                  <p class="card-text">
                  Finding the perfect gym to align with your fitness goals can be a game-changer on your journey to health and wellness.
                  </p>

                  <a href="#" class="btn-link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="./assets/images/blog-2.jpg" width="440" height="270" loading="lazy"
                    alt="Parturient accumsan cacus pulvinar magna" class="img-cover">

                  <time class="card-meta" datetime="2022-07-07">7 July 2024</time>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">How to Create a Balanced Workout Plan</a>
                  </h3>

                  <p class="card-text">
                  Combining Cardio, Strength, and Flexibility

Craft the perfect workout regimen that incorporates all key elements of fitness.
                  </p>

                  <a href="#" class="btn-link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="./assets/images/blog-3.jpg" width="440" height="270" loading="lazy"
                    alt="Risus purus namien parturient accumsan cacus" class="img-cover">

                  <time class="card-meta" datetime="2022-07-07">7 July 2022</time>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Staying Consistent</a>
                  </h3>

                  <p class="card-text">
                  Tips for Maintaining Your Workout Routine During Busy Times
Practical advice on keeping your fitness goals on track, even with a hectic schedule.
                  </p>

                  <a href="#" class="btn-link has-before">Read More</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

            <span class="span">Fitlife</span>
          </a>

          <p class="footer-brand-text">
          High-quality, inspiring image of people working out or a video showcasing the gym’s vibrant atmosphere and facilities.
          </p>

          <div class="wrapper">

            <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

            <ul class="footer-brand-list">

              <li>
                <p class="footer-brand-title">Monday - Friday</p>

                <p>6:00Am - 9:00Pm</p>
              </li>

              <li>
                <p class="footer-brand-title">Saturday - Sunday</p>

                <p>7:00Am - 10:00Pm</p>
              </li>

            </ul>

          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Classes</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="#" id="contact" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Contact Us</p>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="location" aria-hidden="true"></ion-icon>
            </div>

            <address class="address footer-link">
              Near sunita brick field chinour, Shahjahanpur
            </address>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="call" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="tel:+919026645662" class="footer-link">+919026645662</a>

              <a href="tel:+919451853373" class="footer-link">+919451853373</a>
            </div>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="mail" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="mailto:saurabhsngh5484@gmail.com" class="footer-link">saurabhsngh5484@gmail.com</a>

            
            </div>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Newsletter</p>
          </li>

          <li>
            <form action="" class="footer-form">
              <input type="email" name="email_address" aria-label="email" placeholder="Email Address" required
                class="input-field">

              <button type="submit" class="btn btn-primary" aria-label="Submit">
                <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
              </button>
            </form>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 Fitlife. All Rights Reserved By <a href="#" class="copyright-link">fitlife</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link has-before">Terms & Condition</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>