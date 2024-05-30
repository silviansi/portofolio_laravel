<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Remixcon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<!--==================== NAVBAR ====================-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand mx-5" href="#">Silviansi.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </ul>
      </div>
    </div>
  </nav>

<!--==================== HOME ====================-->
<section class="home section" id="home">
  <div class="home-container mt-5 pt-5">
    <div class="home-data container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="home-profile profile mx-auto">
            <div class="profile-content">
              <img src="assets/img/avatar-removebg-preview.png" alt="image" class="profile-img">
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto my-auto">
            <div class="home-content">
              <div class="home-data mt-5">
                <h1 class="home-name" data-aos="fade-up" data-aos-duration="1200">Silvia Nanda Syafa Iswahyudi</h1>
                <h5 class="home-profession mb-5" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-sine">Web Developer | Web Designer | Data Enthusiast</h5>
              
                <div class="home-sosmed-link mt-5 mb-5" data-aos="fade-up" data-aos-duration="1500">
                  <a href="https://github.com/silviansi" target="_blank" class="home-social-link">
                    <i class="ri-github-fill"></i>
                  </a>
                  <a href="https://gitlab.com/silviansi" target="_blank" class="home-social-link">
                    <i class="ri-gitlab-fill"></i>
                  </a>
                  <a href="https://www.linkedin.com/in/silviansi" target="_blank" class="home-social-link">
                    <i class="ri-linkedin-box-fill"></i>
                  </a>
                  <a href="https://www.instagram.com/silviansi" target="_blank" class="home-social-link">
                    <i class="ri-instagram-fill"></i>
                  </a>
                </div>

                <a href="#" download="" class="download-cv-button mt-5">Download CV</a>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<!--==================== ABOUT ====================-->
<section class="about section" id="about">
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row  rounded-5 p-3 shadow box-area">
      <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
        <div class="featured-image mb-3">
          <img src="assets/img/foto1.jpg" alt="image" class="img-fluid" width="380px">
        </div>
      </div>
      <div class="col-md-6 right-box">
        <div class="row align-items-center">
          <div class="header-text mb-4">
            <h2 class="text-white">About Me</h2>
            <p class="text-white">I am a dedicated and versatile web developer, designer, and data enthusiast passionate about creating visually appealing and functional websites. 
              With a strong foundation in web development and design, I specialize in building robust, responsive, and dynamic sites that exceed client expectations. 
              My skills extend to data science and machine learning, where I explore data analysis techniques and algorithms. 
              As a fast learner, I continuously seek new knowledge and stay updated with industry trends. 
              Whether working independently or in a team, I bring creativity, technical expertise, and a relentless drive for excellence to every project.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  

<!--==================== FOOTER ====================-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="assets/js/script.js"></script>
</body>
</html>