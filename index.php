<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SG News</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for the navbar */
    .custom-navbar {
      background-color: #437566; /* Custom green color */
    }
    .custom-navbar .nav-link {
      color: white !important;
    }
    .custom-navbar .nav-link:hover {
      color: #00a706; 
      background-color: rgb(111, 0, 0); 
      border-radius: 5px; /* Optional rounded corners */
      padding: 0.2rem 0.5rem; /* Optional padding for effect */
    }
    .custom-navbar .navbar-brand {
        color: white !important;
    }
    .custom-navbar .btn-primary {
      background-color: #c3b301; /* Custom button color */
      border-color: #000000;
    }
    .custom-navbar .btn-primary:hover {
      background-color: #01c0c3;
      border-color: #10140f;
      
    }
    
    
    /* Custom Styles */
    body {
      font-family: 'Arial', sans-serif;
    }
    .hero {
      background-image: url(Img/lng4.jpg);
      background-size: cover;
      color: rgb(247, 247, 247);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .hero h1 {
      font-size: 4rem;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .menu-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    footer {
    background-color: #437566;
    padding: 20px;
    position: sticky;
    text-decoration-color: ghostwhite;
    text-align: center;
    }
    footer p{
    color: white;
    }
    .btn-custom {
      background-color: #c3b301;
      color: white;
    }
    .btn-custom:hover {
      background-color: #022f19;
    }
    .custom-contact {
    background-color: #437566; /* Dark green background */
    color: #ffffff; /* White text */
    }

  .custom-contact h2 {
    color: #f8d210; /* Bright yellow for the heading */
  }

  .custom-contact p {
    color: #ffffff; /* Light gray for the text */
  }

  .custom-contact strong {
    color: #fff04d; /* Teal for strong text */
  }
  </style>
</head>
<body>
  <!-- Navbar SG News -->
  <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SG NEWS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item center">
            <a class="nav-link active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <a href="form.php"><button id="lbtn"  class="btn btn-primary" type="button">Login</button></a>
      </div>
    </div>
  </nav>


  <!-- landing Section -->
  <header class="hero" id="home">
    <div class="container">
      <h1>Welcome to SG News</h1>
      <p class="lead">Your daily dose of news, entertainment and happiness!</p>
      <a href="#news" class="btn btn-custom btn-lg">Explore updated News</a>
    </div>
  </header>

  <!-- News Section -->
  <section id="news" class=" bg-light py-5">
    <div class="container text-center">
      <h2 class="text-danger mb-4">Breaking Newses</h2>
      <div class="row">
        <div class="col-md-4 menu-item">
          <img src="Img/cn.jpg" alt="National">
          <h5 class="mt-3">National</h5>
          <a href="home.html">MORE HERE</a>
          <!--<p>MORE HERE</p>-->
        </div>
        <div class="col-md-4 menu-item">
          <img src="Img/ci.jpg" alt="International">
          <h5 class="mt-3">International</h5>
          <a href="inter.html">MORE HERE</a>
        </div>
        <div class="col-md-4 menu-item">
          <img src="Img/cb.jpg" alt="Bussiness">
          <h5 class="mt-3">Bussiness</h5>
          <a href="bussi.html">MORE HERE</a>
        </div>
        <div class="col-md-4 menu-item">
          <img src="Img/cs.jpg" alt="Sport">
          <h5 class="mt-3">Sports</h5>
          <a href="spo.html">MORE HERE</a>
        </div>
        <div class="col-md-4 menu-item">
          <img src="Img/ct.jpg" alt="Technology">
          <h5 class="mt-3">Technology</h5>
          <a href="tech.html">MORE HERE</a>
        </div>
        <div class="col-md-4 menu-item">
          <img src="Img/cd.jpg" alt="Education">
          <h5 class="mt-3">Education</h5>
          <a href="Edu.html">MORE HERE</a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class=" py-5">
    <div class="container text-center">
      <h2 class="text-warning">About Us</h2>
      <p class="mt-3">Welcome to SG NEWS, your trusted source for the latest news, insights, and stories from around the world. Our mission is to inform, inspire, and empower our readers with accurate, unbiased, and timely reporting.

        At SG NEWS, we believe in the power of information to shape opinions, drive change, and foster understanding. Our dedicated team of journalists and editors work tirelessly to bring you breaking news, in-depth analysis, and thought-provoking features across a wide range of topics, including politics, business, technology, science, health, culture, and entertainment.</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="custom-contact py-5 ">
    <div class="container text-center">
      <h2>Contact Us</h2>
      <p class="mt-3">Have questions or want to reach out? We'd love to hear from you!</p>
      <p><strong>Email:</strong> sgnews24@gamil.com</p>
      <p><strong>Phone:</strong> +880 1823456789</p>
      <p><strong>Address:</strong> 123 Press Club Street, Sylhet City</p>
    </div>
  </section>
  <!--<section id="contact" class="py-5 bg-dark text-light"> 
    <div class="container text-center">
      <h2 class="text-warning">Contact Us</h2>
      <p class="mt-3 text-white">Have questions or want to reach out? We'd love to hear from you!</p>
      <p><strong class="text-light">Email:</strong> sgnews24@gamil.com</p>
      <p><strong class="text-light">Phone:</strong> +880 1823456789</p>
      <p><strong class="text-light">Address:</strong> 123 Press Club Street, Sylhet City</p>
    </div>
  </section-->


  <!-- Footer -->
  <footer class="footer fixed-bottom ">
    <div class="container text-center">
        <span class="text-white">
          &copy; 2024 SG News. All rights reserved.
        </span>
    </div>
  </footer>
  <!-- Footer --
  <footer>
    <p>&copy; 2024 SG News. All rights reserved.</p>
  </footer-->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
