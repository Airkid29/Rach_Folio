<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="style.css">

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="Me.jpg" type="image/x-icon">

    <title>Portfolio | Rach_Code</title>
</head>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">Rach_</p>
            <span>.</span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Home</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link">About</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#projects" class="nav-link">Projects</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link">Contact</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
        <div class="nav-button">
            <a href="Purple and White Clean and Professional Resume.pdf" download="Mon_CV.pdf">
                <button class="btn">
                    Download CV <i class="uil uil-file-alt"></i>
                </button>
            </a>
        </div>
        
        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>


    <!-- -------------- MAIN ---------------- -->
    <main class="wrapper">
       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-text-card">
                <span>Rach_Code</span>
            </div>
            <div class="featured-name">
                <p>I'm <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>Experienced frontend developer with a passion for creating visually stunning
                   and user-friendly websites.
                </p>
            </div>
            <div class="featured-text-btn">
                <button class="btn blue-btn">Hire Me</button>
                <a href="Purple and White Clean and Professional Resume.pdf" download="Mon_CV.pdf">
                    <button class="btn">
                        Download CV <i class="uil uil-file-alt"></i>
                    </button>
                </a>
            </div>
            <div class="social_icons">
                <a href="https://www.instagram.com/airkid29/?__pwa=1" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-instagram"></i></div></a>
                <a href="https://www.linkedin.com/in/abdoul-rachid-bawa-613339320" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-linkedin-alt"></i></div></a>
                <a href="https://www.facebook.com/profile.php?id=100069793652164" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-facebook"></i></div></a>
                <a href="https://github.com/Airkid29" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-github-alt"></i></div></a>
                
            </div>
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="Me.jpg" alt="avatar">
            </div>
          </div>
          <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
          </div>

       </section>
       <!-- -------------- ABOUT BOX ---------------- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>About Me</h1>
          </div>
          <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>My introduction</h3>
                    <p>I am well-versed in HTML, CSS and JavaScript , and other cutting edge
                       frameworks and libraries,which allows me to implement interactive features.
                       Additionally, I have experirence working with content management systems (CMS) like
                       WordPress.
                    </p>
                    <div class="about-btn">
                        <a href="Purple and White Clean and Professional Resume.pdf" download="Mon_CV.pdf">
                            <button class="btn">
                                Download CV <i class="uil uil-import"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>JavaScript</span>
                        <!--<span>Tailwind</span>
                        <span>Angular</span>-->
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>PHP</span>
                        <span>JAVA</span>
                        <span>Python</span>
                        <span>C</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Database</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                    </div>
                </div>
            </div>
          </div>
       </section>

       <!-- -------------- PROJECT BOX ---------------- -->

       <section class="section" id="projects">
   <div class="top-header">
       <h1>Projects</h1>
   </div>

   <!-- Statistiques -->
   <div class="project-container">
      <div class="project-box">
          <i class="uil uil-briefcase-alt"></i>
          <h3>Completed</h3>
          <label>15+ Finished Projects</label>
      </div>
      <div class="project-box">
          <i class="uil uil-users-alt"></i>
          <h3>Clients</h3>
          <label>25+ Happy Clients</label>
      </div>
      <div class="project-box">
          <i class="uil uil-award"></i>
          <h3>Experience</h3>
          <label>7+ Years in the field</label>
      </div>
   </div>

   <!-- Galerie de projets réels -->
   <div class="projects-gallery">
      <div class="project-item">
         <img src="images/project1.jpg" alt="Project 1">
         <h3>Portfolio Website</h3>
         <p>Site vitrine personnel avec HTML, CSS, JS.</p>
         <a href="Assets/Portfolio.png" target="_blank">Voir le projet</a>
      </div>
      <div class="project-item">
         <img src="images/project2.jpg" alt="Project 2">
         <h3>E-commerce Books</h3>
         <p>Boutique Shopify pour vente de livres en ligne.</p>
         <a href="#" target="_blank">Voir le projet</a>
      </div>
      <div class="project-item">
         <img src="images/project3.jpg" alt="Project 3">
         <h3>NBA Store</h3>
         <p>Site e-commerce de maillots & accessoires NBA.</p>
         <a href="#" target="_blank">Voir le projet</a>
      </div>
   </div>
</section>


       <!-- -------------- CONTACT BOX ---------------- -->

     <!-- <section class="section" id="contact">
          <div class="top-header">
            <h1>Get in touch</h1>
            <span>Do you have a project in your mind, contact me here</span>
          </div>
          <div class="row">
             <div class="col">
                <div class="contact-info">
                    <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                    <p><i class="uil uil-envelope"></i> Email: rachidbawa80@gmail.com</p>
                    <p><i class="uil uil-phone"></i> Tel: +228 92521296</p>
                </div>
             </div>
             <div class="col">
                <div class="form-control">
                    <div class="form-inputs">
                        <input type="text" class="input-field" name="nom" placeholder="Name">
                        <input type="text" class="input-field" name="email" placeholder="Email">
                    </div>
                    <div class="text-area">
                        <textarea placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="form-button">
                        <button class="btn">Send <i class="uil uil-message"></i></button>
                    </div>
                </div>
             </div>
          </div>
       </section>-->

       <form method="post" action="contact.php">
  <div class="form-control">
      <div class="form-inputs">
          <input type="text" class="input-field" name="nom" placeholder="Name" required>
          <input type="email" class="input-field" name="email" placeholder="Email" required>
      </div>
      <div class="text-area">
          <textarea placeholder="Message" name="message" required></textarea>
      </div>
      <div class="form-button">
          <button class="btn" type="submit" name="envoyer">Send <i class="uil uil-message"></i></button>
      </div>
  </div>
</form>



      

    </main>


    <!-- --------------- FOOTER --------------- -->
    <footer>
        <div class="top-footer">
            <p>Rach_Code .</p>
        </div>
        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Home</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">About</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Projects</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="footer-social-icons">
                <a href="https://www.instagram.com/airkid29/?__pwa=1" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-instagram"></i></div></a>
                <a href="https://www.linkedin.com/in/abdoul-rachid-bawa-613339320" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-linkedin-alt"></i></div></a>
                <a href="https://www.facebook.com/profile.php?id=100069793652164" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-facebook"></i></div></a>
                <a href="https://github.com/Airkid29" target="_blank" rel="noopener noreferrer"><div class="icon"><i class="uil uil-github-alt"></i></div></a>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none;">Rach_Code</a> - All rights reserved</p>
        </div>
    </footer>

    </div>




    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="main.js"></script>

    <script>
// Pop-up personnalisée
/*function showPopup(message, isSuccess) {
    const popup = document.createElement("div");
    popup.innerText = message;
    popup.style.position = "fixed";
    popup.style.top = "20px";
    popup.style.right = "20px";
    popup.style.padding = "15px 20px";
    popup.style.backgroundColor = isSuccess ? "#4caf50" : "#f44336";
    popup.style.color = "#fff";
    popup.style.borderRadius = "8px";
    popup.style.boxShadow = "0 0 10px rgba(0,0,0,0.3)";
    popup.style.zIndex = "1000";
    document.body.appendChild(popup);
    setTimeout(() => {
        popup.remove();
    }, 3000);
}

// Envoi AJAX
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Empêche le rechargement

    const formData = new FormData(this);

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if (result.trim() === "success") {
            showPopup("✅ Message envoyé avec succès !", true);
            this.reset(); // Vide le formulaire
        } else {
            showPopup("❌ Erreur lors de l'envoi...", false);
        }
    })
    .catch(() => {
        showPopup("❌ Problème de connexion.", false);
    });
}); */
</script>

</body>
</html>