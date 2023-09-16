<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{ asset('aos/dist/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/float.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/55411f4af7.js" crossorigin="anonymous"></script>
    <title>MilanHeru</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Project</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="floating-buttons bg-dark">
        <a href="https://www.instagram.com/" target="_blank" class="button-float instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/" target="_blank" class="button-float github"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" class="button-float linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
    
    <div class="fullscreen-video" id="#home">
        <div class="backr"></div>
        <div class="overlay mb-5"> 
            <div class="row">
              
              <div class="col text-sm-end">
                <h2 class="h2-styles">hello</h2>
              </div>
              <div class="col">
                <h1 class="h1-styles" data-splitting>I Am Milan, <br> I`m a Fullstack Developer</h1>
              </div>
            </div>
        </div>
    <div>
          
    <section id="about">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L60,90.7C120,85,240,75,360,112C480,149,600,235,720,261.3C840,288,960,256,1080,218.7C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <div class="bg" style="background-color: #fff; position: absolute; min-height: 300px; width: 100%; z-index: -1"></div>
       
      <div class="container">
          <div class="mb-5 text-center" style="color: black;">
              <div data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="top-center">
                <br>
                <h1>Skill Overview</h1>
                <p>I have been in the world of technology for more than 2 years and have created several personal web application projects. Below is a brief overview of the main technical skills and tools I use. Want to find out more about me?</p>
                <center>
                    <button type="submit" class="Btn" id="downloadButton">
                      <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
                      <span class="icon2"></span>
                      <span class="tooltip">Download</span>
                    </button>         
                </center>
              </div>    
          </div>
        
          <div class="row text-center">
              <div class="col aos-item" data-id="1" data-aos="fade-up" data-aos-duration="2500" data-aos-anchor-placement="top-center">
                  <div class="content mt-5 mb-5 ">
                      <i class="icont fa-solid fa-laptop-code fa-4x"></i>
                      <h1>Frontend</h1>
                      <div class="part" >
                        <i class="fa-solid fa-check"></i>
                        HTML & CSS <br>
                        <i class="fa-solid fa-check"></i>
                        Javascript
                      </div>
                  </div>    
              </div>
              <div class="col aos-item" data-id="1" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="top-center">
                  <div class="content mt-5 mb-5 ">
                      <i class="icont fa-solid fa-database fa-4x"></i>
                      <h1>Backend</h1>
                      <i class="fa-solid fa-check"></i>
                        PHP <br>
                        <i class="fa-solid fa-check"></i>
                        Javascript <br>
                        <i class="fa-solid fa-check"></i>
                        Java
                  </div>
              </div>
              <div class="col aos-item" data-id="1"  data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="top-center">
                <div class="content mt-5 mb-5 ">             
                  <i class="icont fa-solid fa-toolbox fa-4x"></i>
                    <h1>Tools</h1>   
                      <i class="fa-solid fa-check"></i>
                        Laravel <br>
                        <i class="fa-solid fa-check"></i>
                        Bootstrap <br>
                        <i class="fa-solid fa-check"></i>
                        Next.js
                </div>
              </div>          
            </div>        
        </div>

    </section>
    
    <section id="project mt-5">
        <h1 class="text-center mt-5">Personal Project</h1>
        <div class="container mt-5">
          <div class="row">
           
            <div class="col text-xl-end aos-item" data-id="1"  data-aos="fade-down">
            
              <img src="{{ asset('image/myproject-1.png')}}" style="height: 30vh; border-radius: 10px;" alt="my-project1">
            
            </div>
            <div class="col aos-item" data-id="1"  data-aos="fade-down" >
              <h1 class="h1-styles">Build E-Parkir System</h1>
              <p class="text-start">web application for independent projects to find out how the parking system works, where in this program there are features for printing receipts and calculating parking rates. I made this application using HTML, CSS, JS, & PHP with the Laravel framework as well as several other libraries.</p>
            </div>
          </div>
        </div>
    </section>
    
</div>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Milan Heru</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-github"></i></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-linkedin"></i></svg></a></li>
    </ul>
  </footer>
</div>
<script src="{{ asset('aos/dist/aos.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
    document.querySelector('html').classList.remove('no-js');
    if (!window.Cypress) {
      const scrollCounter = document.querySelector('.js-scroll-counter');

      AOS.init({
        mirror: true
      });

      document.addEventListener('aos:in', function(e) {
        console.log('in!', e.detail);
      });

      window.addEventListener('scroll', function() {
        scrollCounter.innerHTML = window.pageYOffset;
      });
    }
    document.getElementById("downloadButton").addEventListener("click", function() {
        window.location.href = "{{ route('file.download') }}";
    });
  </script>
</body>
</html>
