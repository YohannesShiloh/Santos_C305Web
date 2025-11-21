<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kier's Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>

  <style>
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #CDC2A5;
    }
    html, body {
    height: 100%;
    }
    #home {
  min-height: 100vh;
    }
    .bg-dark {
      background-color: #CDC2A5 !important;
      color: black !important;
    }
    nav {
      background-color: #6A9AB0;
    }
    nav a {
      color: #6A9AB0;
    }
    section {
      padding: 60px 0;
    }
    h1,
    h2 {
      font-weight: 700;
    }
    .navbar {
      padding: 1rem;
    }
    .btn-custom {
      background-color: #0f6ab1;
      color: white;
    }
    .btn-primary {
    padding: 15px 35px;      /* Increase padding (top-bottom, left-right) */
    font-size: 1.5rem;         /* Make the text bigger */
    border-radius: 10px;      /* Optional: rounder corners */
    }
    .card-img-top {
      height: 100%;
      object-fit: cover;
    }
    footer {
      background-color: #6A9AB0;
      color: #E5D0AC;
    }
    .progress-bar {
      background-color: #6A9AB0;
    }
    .social-icons {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
    }
    .hero-content .btn-primary {
    margin-top: 0px; /* Remove extra spacing above the button if any */
    }
    .social-icons a {
      color: #6A9AB0;
      font-size: 48px;
      transition: color 0.3s ease-in-out;
    }
    .social-icons a:hover {
      color: #0f6ab1;
    }
    .btn-outline-dark:hover {
        background-color: #6A9AB0 !important;
        color: white !important;
        margin-top: 0px; /* Adjust this value as needed */
        }
        .profile-img {
    width: 350px;  /* or any size you prefer */
    height: 350px;
    object-fit: cover;
    }
    .progress {
  height: 30px; /* Increased height of the progress container */
  background-color: #e9ecef;
  border-radius: 10px;
  overflow: hidden;
}

.progress-bar {
  font-size: 1rem; /* Optional: increase font size inside the bar */
  line-height: 30px; /* Vertically center the text */
}

  </style>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Kier Vincent L. Santos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-4"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#achievements">Achievements</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item me-4"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="vh-100 d-flex align-items-center text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h1 class="display-1 fw-bold text-light">Hi,</h1>
          <h1 class="display-1 fw-bold text-light">I am <span class="display-1 fw-bold" style="color:#6A9AB0;">Kier</span></h1>
          <h1 class="display-1 fw-bold text-light">Web Designer</h1>
          <div class="social-icons mt-4 mb-4">
            <a href="http://facebook.com/joseflorencecreencia.gonzalesiii"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/_lvrolf?igsh=MTE5ajIzbTF6a3lraQ%3D%3D&fbclid=IwY2xjawJY1fdleHRuA2FlbQIxMAABHRgXKkJsP4J6oMHhdgHd4ogOoFCKQQE-oKLP4rSzDQlc3oeLne6H7a7JOw_aem_T5aUY6YgS5dMq92G0p9aXQ/"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="mt-4">
            <a href="#projects" class="btn btn-outline-dark btn-lg px-4">View My Work</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-6 bg-dark text-white">
    <div class="container">
        <h1 class="text-white text-center mb-2 fw-bold">ABOUT</h1>
        <div class="row align-items-center">
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="321.avif" alt="Santos Profile Picture" class="img-fluid rounded-circle profile-img">
            </div>
            <div class="col-md-6">
  <section id="about">
      <h1 class="fw-bold fs-4">I am <span class="text-primary">Kier Vincent</span></h1>
      <p class="mt-4 fs-5 text-secondary">
        I’m currently a third-year Computer Science student at City College of Angeles. I have a passion for instruments and enjoy playing online games in my free time. I also love listening to music, watching movies, hanging out with friends, and staying active with sports and outdoor activities.
      </p>
    </div>

    <section id="achievements" class="py-5 bg-dark text-white">
        <div class="container">
            <h1 class="text-white text-center mb-2 fw-bold">ACHIEVEMENTS</h1>
            <div class="row g-4 justify-content-center">
    
                <!-- Achievement 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="card shadow-sm border-0 h-100" style="background-color: #6A9AB0;">
                        <img src="https://i.imgur.com/m0SUR6X.jpeg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Santos Award">
                        <div class="card-body">
                            <h5 class="card-title highlight-text">CCA Days Battle of the bands - Championship</h5>
                            <p class="card-text text-white">Participated in a Battle of the bands.</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="projects" class="py-5 bg-dark text-white">
        <div class="container">
            <h1 class="text-white text-center mb-2 fw-bold">PROJECTS</h1>
            <div class="row g-4 justify-content-center">
                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm border-0 pb-4 project-card">
                        <img src="guess.png" class="card-img-top" alt="Project 1"/>
            <div class="card-body">
              <h5 class="card-title">Keytopia</h5>
              <p class="card-text">an app finding a home for you.</p>
                            <a href="https://www.figma.com/design/8H4JBERDy96TQBqfdcrSRA/HCOMINT?node-id=253-251&t=RiENggoYvyya6426-0" target="_blank" class="btn btn-outline-dark">Live Demo</a>
                        </div>
                    </div>
                </div>
            </section>

  <!-- Skills Section -->
  <section id="skills">
    <div class="container">
        <h1 class="text-white text-center mb-2 fw-bold">SKILLS</h1>
        <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="progress mb-3">
            <div class="progress-bar" style="width: 65%;">HTML - 65%</div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar" style="width: 45%;">CSS - 45%</div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar" style="width: 40%;">JavaScript - 40%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center mb-4">
                <h1 class="text-white text-center mb-2 fw-bold">CONTACT</h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form id="contactForm">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" id="name" placeholder="Your name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                    </div>
                    
                        <div class="mb-4">
                            <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                          </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark btn-lg px-5">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
  
<footer style="background-color: #504B38; width: 100%;" class="py-3 text-white text-center">
    <div class="container">
    <div class="px-3">
        <div class="social-icons">
            <a href="https://www.facebook.com/jimboker23" class="mx-2" target="_blank"><i class="fab fa-facebook fa-2x" style="font-size: 50px;"></i></a>
            <a href="https://www.instagram.com/_kiersantos/" class="mx-2" target="_blank"><i class="fab fa-instagram fa-2x" style="font-size: 50px;"></i></a>
        </div>
        <p class="mb-0">&copy; <span id="year"></span> Santos, Kier Vincent L. All rights reserved.</p>
    </div>
</footer>
</body>
</html>


<script>
document.getElementById("year").textContent = new Date().getFullYear();

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let subject = document.getElementById("subject").value.trim();
    let message = document.getElementById("message").value.trim();

    if (name === "" || email === "" || subject === "" || message === "") {
        alert("All fields are required.");
        return;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }
    alert("Message sent successfully!");
    document.getElementById("contactForm").reset();
});
</script>

</body>
</html>