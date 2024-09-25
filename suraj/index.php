<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Portfolio</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>


  
  <header>
    <nav>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#skills-and-tools">skills</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>



 <!-- about sections -->

  <style>
    /* About Section Styling */
    .about-section {
      background-color: #f7f8fa;
      padding: 50px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-container {
      display: flex;
      align-items: center;
      justify-content: space-around;
      max-width: 1200px;
      width: 100%;
    }

    .about-image img {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      object-fit: cover;
    }

    .about-content {
      max-width: 600px;
      margin-left: 40px;
    }

    .about-content h1 {
      font-size: 3em;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .about-content h2 {
      font-size: 1.5em;
      font-weight: normal;
      color: #7a7a7a;
      margin-bottom: 20px;
    }

    .about-content p {
      font-size: 1.2em;
      line-height: 1.6;
      color: #333;
    }

    /* Media Queries for smaller screens */
    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        text-align: center;
      }

      .about-image img {
        margin-bottom: 20px;
      }

      .about-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <section id="about" class="about-section">
    <div class="about-container">
      <div class="about-image">
        <img src="./images/profile.jpg" alt="SURAJ THAPA">
      </div>
      <div class="about-content">
        <h1>SURAJ THAPA</h1>
        <h2>Creative Director and UI/UX Consultant</h2>
        <p>I'm a creative director specializing in creating highly appealing and 
          innovative web designs. I enjoy turning complex problems into simple, beautiful, 
          and intuitive solutions.</p>
      </div>
    </div>
  </section>





 <!-- END about sections -->


<!-- Portfolio  work items will be populated here -->
<section id="portfolio">
  <h2>My Work</h2>
  <div class="gallery">
      <!-- First Work Item -->
      <div class="work-item">
          <a href="your-first-work-link" target="_blank">
              <img src="./images/1-1.jpg" alt="First Work Image">
          </a>
          <p>Details about the First Work</p>
      </div>

      <!-- Second Work Item -->
      <div class="work-item">
          <a href="your-second-work-link" target="_blank">
              <img src="./images/Screenshot 2024-09-23 162951.png" alt="Second Work Image">
          </a>
          <p>Yatri the car rental system</p>
      </div>

      <!-- Third Work Item -->
      <div class="work-item">
          <a href="your-third-work-link" target="_blank">
              <img src="./images/c2.jpg" alt="Third Work Image">
          </a>
          <p>Details about the Third Work</p>
      </div>

            <!-- fourth Work Item -->
            <div class="work-item">
              <a href="your-third-work-link" target="_blank">
                  <img src="./images/c2.jpg" alt="Third Work Image">
              </a>
              <p>Details about the Third Work</p>
          </div>
  </div>


  <style>

.portfolio {
  background-color: #f7f8fa;
}
    .gallery {
    display: flex;
    justify-content: space-around;
    gap: 20px;
}

.work-item {
    text-align: center;
}

.work-item img {
    width: 300px;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s;
}

.work-item img:hover {
    transform: scale(1.05);
}

.work-item p {
    margin-top: 10px;
    color: #ccc;
    font-size: 1.1rem;
}

  </style>



</section>




<!-- skills and tools -->
<section id="skills-and-tools">

  <h2 style="font-size: 2.5em; margin: 0.5em 0; text-align: center;">My Skills</h2>
  <p style="font-size: 1.5em; margin: 0.5em 0; text-align: center;">I Like To Craft Beautiful And Scalable Web Products</p>

  <!-- Container to hold both skills content and bars side by side -->
  <div class="skills-layout">
    
    <!-- Skills Description -->
    <div class="skills-container">
      <!-- Design + Development -->
      <div class="skill">
        <div class="skill-title">
          <img src="./images/design and development.jpeg" alt="Design Icon" class="skill-icon">
          <h3>Design + Development</h3>
        </div>
        <p>Clean, modern designs – optimized for performance, search engines, and converting users to customers.</p>
      </div>

      <!-- Technology -->
      <div class="skill">
        <div class="skill-title">
          <img src="./images/techonology.jpeg" alt="Technology Icon" class="skill-icon">
          <h3>Technology</h3>
        </div>
        <p>Combined all the latest technologies into a progressive website.</p>
      </div>

      <!-- Always Responsive -->
      <div class="skill">
        <div class="skill-title">
          <img src="./images/responsive.jpeg" alt="Responsive Icon" class="skill-icon">
          <h3>Always Responsive</h3>
        </div>
        <p>A responsive design makes your website accessible to all users, regardless of their device.</p>
      </div>
    </div>

    <!-- Skill Bars -->
    <div class="skill-bars">
      <div class="skill-bar">
        <span>HTML5</span>
        <div class="bar">
          <div class="progress" style="width: 70%; background-color: #f16529;"></div>
        </div>
        <span class="percentage">70%</span>
      </div>

      <div class="skill-bar">
        <span>CSS3</span>
        <div class="bar">
          <div class="progress" style="width: 55%; background-color: #2965f1;"></div>
        </div>
        <span class="percentage">55%</span>
      </div>

      <div class="skill-bar">
        <span>jQuery</span>
        <div class="bar">
          <div class="progress" style="width: 50%; background-color: #0769ad;"></div>
        </div>
        <span class="percentage">50%</span>
      </div>

      <div class="skill-bar">
        <span>PHP</span>
        <div class="bar">
          <div class="progress" style="width: 40%; background-color: #787cb5;"></div>
        </div>
        <span class="percentage">40%</span>
      </div>

      <div class="skill-bar">
        <span>WordPress</span>
        <div class="bar">
          <div class="progress" style="width: 75%; background-color: #21759b;"></div>
        </div>
        <span class="percentage">75%</span>
      </div>

      <div class="skill-bar">
        <span>SEO</span>
        <div class="bar">
          <div class="progress" style="width: 100%; background-color: #4caf50;"></div>
        </div>
        <span class="percentage">100%</span>
      </div>

      <div class="skill-bar">
        <span>Photoshop</span>
        <div class="bar">
          <div class="progress" style="width: 70%; background-color: #31a8ff;"></div>
        </div>
        <span class="percentage">70%</span>
      </div>
    </div>
  </div>

  

  <style>
    /* General Section Styling */
    #skills-and-tools {
      padding: 40px;
      text-align: center;
      background-color: #f9f9f9;
    }

    #skills-and-tools h2 {
      color: #007bff;
      font-size: 32px;
      margin-bottom: 10px;
    }

    #skills-and-tools p {
      font-size: 16px;
      color: #555;
      margin-bottom: 40px;
    }

    /* Flexbox layout for Skills Description and Bars */
    .skills-layout {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    /* Skill Items */
    .skills-container {
      width: 45%;
      text-align: left;
    }

    .skill {
      margin-bottom: 20px;
    }

    .skill-title {
      display: flex;
      align-items: center;
    }

    .skill-icon {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .skill h3 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .skill p {
      font-size: 14px;
      color: #777;
    }

    /* Skill Bars */
    .skill-bars {
      width: 45%;
    }

    .skill-bar {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .skill-bar span {
      width: 100px;
      font-size: 14px;
      color: #333;
    }

    .bar {
      flex-grow: 1;
      background-color: #e0e0e0;
      height: 20px;
      margin: 0 10px;
      border-radius: 10px;
      overflow: hidden;
    }

    .progress {
      height: 100%;
      border-radius: 10px;
    }

    .percentage {
      font-size: 14px;
      color: #333;
    }

    @media (max-width: 768px) {
      .skills-layout {
        flex-direction: column;
      }

      .skills-container,
      .skill-bars {
        width: 100%;
      }
    }
  </style>

</section>

















 <!-- services -->
 <section id="services" style="background-color: #f0f0f0; padding: 50px;">
  <div style="text-align: center; color: #007bff;">
    <h2>What I Do.</h2>
    <p>I offer the full spectrum of services to help org's work better.</p>
  </div>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
    
    <!-- Web Design -->
    <div style="flex: 1 1 200px; text-align: center;">
      <img src="./images/domain.png" alt="Web Design Icon" style="width: 50px;">
      <h3 style="color: #007bff;">Web Design</h3>
      <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience.</p>
    </div>
    
    <!-- Web Development -->
    <div style="flex: 1 1 200px; text-align: center;">
      <img src="./images/app-development.png" alt="Web Development Icon" style="width: 50px;">
      <h3 style="color: #007bff;">Web Development</h3>
      <p>Web development is the building and maintenance of websites; it's the work that happens behind the scenes.</p>
    </div>
    
    <!-- Digital Marketing -->
    <div style="flex: 1 1 200px; text-align: center;">
      <img src="./images/instagram.png" alt="Digital Marketing Icon" style="width: 50px;">
      <h3 style="color: #007bff;">Digital Marketing</h3>
      <p>At a high level, digital marketing refers to advertising delivered through digital channels such as social media.</p>
    </div>
    
    <!-- Web Hosting -->
    <div style="flex: 1 1 200px; text-align: center;">
      <img src="./images/cloud.png" alt="Web Hosting Icon" style="width: 50px;">
      <h3 style="color: #007bff;">Web Hosting</h3>
      <p>Every website that you visit consists of a domain name and a web host. The easiest way to picture it is like renting space.</p>
    </div>
    
    <!-- App Development -->
    <div style="flex: 1 1 200px; text-align: center;">
      <img src="./images/coding.png" alt="App Development Icon" style="width: 50px;">
      <h3 style="color: #007bff;">App Development</h3>
      <p>Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as phones.</p>
    </div>
    
    <!-- IOT Projects -->
    <div style="flex: 1 1 200px; text-align: center;">
      <img src="./images/project.png" alt="IoT Projects Icon" style="width: 50px;">
      <h3 style="color: #007bff;">IOT Projects</h3>
      <p>The Internet of Things (IoT) describes a network of physical objects embedded with sensors to interact with the environment.</p>
    </div>

  </div>



  <style>

#services {
  background-color: #f0f0f0;
  padding: 50px;
  text-align: center;
}

#services h2 {
  color: #007bff;
}

#services div {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

#services div div {
  flex: 1 1 200px;
  margin: 20px;
  text-align: center;
}

#services img {
  width: 50px;
}

#services h3 {
  color: #007bff;
}

  </style>
</section>




<!-- contact section -->

<section id="contact">
  <style>
#contact {
  background-color: #d4dbe7; /* white background similar to the image */
  color: black; /* black  text color for contrast */
  padding: 50px 20px; 
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Contact Text (Mail, Phone Info) */
.contact-info {
  max-width: 400px;
  text-align: left;
}

.contact-info h2 {
  color:  #007bff; /* Yellow heading similar to the image */
  font-size: 36px;
  margin-bottom: 20px;
}

.contact-info p {
  margin-bottom: 10px;
}

.contact-info a {
  color:  #007bff; /* Yellow links */
  text-decoration: none;
}

.contact-info a:hover {
  text-decoration: underline;
}

/* Style for the form */
#contactForm {
  max-width: 500px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}

#contactForm input, 
#contactForm textarea {
  background-color: #444;
  border: 1px solid #555;
  color: #fff;
  padding: 10px;
  margin-bottom: 15px;
  font-size: 16px;
}

#contactForm input::placeholder, 
#contactForm textarea::placeholder {
  color: #ccc;
}

#contactForm button {
  background-color: #007bff;
  color: #e0d1ea;
  border: none;
  padding: 10px;
  font-size: 18px;
  cursor: pointer;
}

#contactForm button:hover {
  background-color: #416075;
}

</style>


  <div class="contact-info">
    <h2>Contact me</h2>
    <p>Feel free to get in touch with me. I am always open to
       discussing new projects, creative ideas, or opportunities.</p>
    <p><img src="./images/mail.svg" alt="Mail Icon"> Mail me <br> <a href="mailto:info@mail.com">surajthapalamichanaymagar@gmail.com</a></p>
    <p><img src="./images/instagram-svgrepo-com.svg" alt="insta icon"> message on <br> <a href="https://www.instagram.com/jarus_ragam/">jarus_ragam</a></p>
  </div>
  
  <form id="contactForm" action="contact.php" method="POST">
    <input type="text" name="name" placeholder="Enter your Name" required>
    <input type="email" name="email" placeholder="Enter a valid email address" required>
    <textarea name="message" placeholder="Enter your message" required></textarea>
    <button type="submit">Submit</button>
  </form>


</section>


  <footer>
    <p style="text-align: center; margin: 20px 0;">&copy; 2024 SURAJ THAPA. All rights reserved.</p>

  </footer>

  <script src="script.js"></script>
</body>
</html>
