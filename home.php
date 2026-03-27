<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Girls Fashion Customizer</title>
  <style>
    /* Smooth transitions everywhere */
* {
  transition: all 0.3s ease;
}

/* Section animation */
section {
  animation: fadeSlide 0.6s ease;
}

@keyframes fadeSlide {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff0f5;
      margin: 0;
      padding: 0;
    }
   /* nav {
      background-color: #ec407a;
      padding: 10px;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
      margin: 5px 0;
    }*/

    nav {
  background: linear-gradient(90deg, #ec407a, #d81b60);
  padding: 14px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1000;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

nav a {
  color: white;
  font-weight: 600;
  padding: 8px 14px;
  border-radius: 20px;
}

nav a:hover {
  background: rgba(255,255,255,0.2);
}

    section {
      display: none;
      padding: 20px;
      text-align: center;
    }
    section.active {
      display: block;
    }
    h1, h2 {
      color: #d81b60;
    }
    label, input, select, textarea {
      display: block;
      margin: 10px auto;
      text-align: left;
      width: 80%;
      max-width: 400px;
    }
    input, select, textarea {
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #d81b60;
    }
   /* button {
      padding: 10px 20px;
      background-color: #d81b60;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 10px;
    }
    button:hover {
      background-color: #ad1457;
    }*/
        
        button {
  padding: 12px 28px;
  background: linear-gradient(135deg, #d81b60, #ec407a);
  color: white;
  border: none;
  border-radius: 30px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 5px 15px rgba(216,27,96,0.4);
}

button:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(216,27,96,0.6);
}

    .why-box {
      width: 28%;
      background: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      margin: 15px;
      transition: 0.2s;
    }
    .why-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
.image-card {
  width: 280px;                 
  background: white;
  border-radius: 18px;
  padding: 12px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.15);
  text-align: center;
  transition: 0.3s;
}

.image-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 28px rgba(0,0,0,0.25);
}

.image-card img {
  width: 100%;
  height: auto;                
  max-height: 260px;
  object-fit: contain;         
  border-radius: 14px;
  background: #fff0f5;        
}

.image-card h3,
.image-card p {
  margin-top: 10px;
  font-size: 16px;
  color: #c2185b;
}
.home-section {
  margin-bottom: 80px;   
}
.floating-icons {
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  pointer-events:none;
  overflow:hidden;
  z-index:0;
}
.floating-icons span {
  position:absolute;
  font-size:24px;
  color:rgba(216,27,96,0.2);
  animation: float 10s linear infinite;
}
@keyframes float {
  0% { transform: translateY(100vh) rotate(0deg); }
  100% { transform: translateY(-10vh) rotate(360deg); }
}
@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(15px); }
}


  </style>
</head>
<body>

  <nav>
    <a onclick="showSection('home')">Home</a>
    <a onclick="showSection('about')">About Us</a>
    <a onclick="showSection('contact')">Contact</a>
    <a onclick="showSection('signup')">Signup</a>
    <a onclick="showSection('login')">Login</a>
    <a onclick="showSection('customize')">Customize</a>
    <a onclick="showSection('measure')">Measure</a>
    <a onclick="showSection('feedback')">Feedback</a>
    <a onclick="showSection('payment')">Payment</a>
    <a onclick="showSection('return')">Return/Alter</a>
  </nav>
    
    <div class="floating-icons">
  <span style="left:5%;">🌸</span>
  <span style="left:25%; font-size:30px;">👗</span>
  <span style="left:45%; font-size:28px;">✨</span>
  <span style="left:70%; font-size:26px;">💃</span>
  <span style="left:85%; font-size:24px;">🎀</span>
</div>

  <!-- HOME -->
  <section id="home" class="active">
    <div style="background-color: #f8bbd0; padding: 40px; text-align: center;">
      <h1 style="font-size: 2.5em;">Welcome to Girls Fashion Studio</h1>
      <p style="font-size: 1.2em;">Design your dream outfit with custom fabric, designs, and sizing. Express your unique style now!</p>
      <button onclick="showSection('customize')" style="margin-top: 20px;">Start Customizing</button>
    </div>

    <div style="text-align:center; margin-top:30px; animation: bounce 2s infinite;">
  <span style="font-size:32px; color:#d81b60;">⬇️</span>
</div>


    <!-- Top Categories -->
    <h2 style="margin-top: 40px;">Top Categories</h2>
     
<div style="display:flex; gap:25px; justify-content:center; flex-wrap:wrap;">

  <div class="image-card">
    <img src="anakali.webp">
    <h3>Anarkali</h3>
  </div>

  <div class="image-card">
    <img src="Kurtis.webp">
    <h3>Kurtis</h3>
  </div>

  <div class="image-card">
    <img src="Lehengas.jpeg">
    <h3>Lehengas</h3>
  </div>

</div>
<section class="home-section">

  <h2>Top Designs</h2>

  <div class="cards-container">
  </div>

</section>

    <!-- Latest Designs -->
<div style="display:flex; gap:25px; justify-content:center; flex-wrap:wrap;">

  <div class="image-card">
    <img src="Floral.webp">
    <p>Floral Summer Dress</p>
  </div>

  <div class="image-card">
    <img src="Party.jpg">
    <p>Elegant Party Gown</p>
  </div>

  <div class="image-card">
    <img src="Embroidered.jpg">
    <p>Embroidered Kurti</p>
  </div>

</div>
<section class="home-section">

  <!-- <h2>Latest Designs</h2> -->
    <h2 style="margin-top:80px;">Latest Designs</h2>

  <div class="cards-container">
  </div>

</section>

    <!-- NEW SECTION INSTEAD OF OUTFIT SELECTION -->
    <h2 style="margin-top: 50px;">Why Choose Us?</h2>

    <div style="display:flex; flex-wrap:wrap; justify-content:center;">
      <div class="why-box">
        <h3>🌸 100% Custom Designs</h3>
        <p>Create outfits that match your style — no limitations!</p>
      </div>
      <div class="why-box">
        <h3>📏 Perfect Fitting</h3>
        <p>Use manual or AR-based measurement options for accuracy.</p>
      </div>
      <div class="why-box">
        <h3>🎨 Premium Fabrics</h3>
        <p>Choose from cotton, silk, linen & more. High quality only!</p>
      </div>
      <div class="why-box">
        <h3>💬 Designer Support</h3>
        <p>Chat with professional designers for suggestions.</p>
      </div>
      <div class="why-box">
        <h3>🚚 Fast Delivery</h3>
        <p>Get your customized outfit delivered on time.</p>
      </div>
      <div class="why-box">
        <h3>🔄 Easy Alterations</h3>
        <p>Return or alter your dress if the fit isn’t perfect.</p>
      </div>
    </div>

  </section>

<section id="about">
  <!-- Banner / Hero Image -->
  <div style="
       background: url('fashion_banner.jpg') center/cover no-repeat;
       padding: 80px 20px;
       border-radius: 15px;
       color: white;
       text-align: center;
     ">
    <h1 style="font-size: 2.8em; text-shadow: 2px 2px 5px rgba(0,0,0,0.4);">
      About Girls Fashion Studio
    </h1>

    <!-- FIXED COLOR HERE -->
    <p style="font-size: 1.2em; max-width: 800px; margin: 20px auto;
              color:#ffffff; 
              font-weight:500;
              text-shadow: 2px 2px 6px rgba(0,0,0,0.6);">
      Crafting outfits that reflect your personality, style and comfort.
    </p>
  </div>

  <!-- Who we are / Our Story -->
  <div style="max-width: 900px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
    <h2 style="color:#d81b60;">Our Story</h2>
    <p style="font-size: 17px; line-height: 1.7; color:#444; text-align: justify;">
      Girls Fashion Studio began with a simple belief — that fashion is personal.  
      We noticed many beautiful dresses sold online don’t truly fit the wearer’s style or size.  
      So we created a platform where you get to design — choose the fabric, design, size — and get an outfit tailor-made just for you.  
      Our journey is driven by creativity, quality, and an intimate understanding of individual style.
    </p>

    <h3 style="color:#d81b60; margin-top: 30px;">Our Mission</h3>
    <p style="font-size: 16px; line-height: 1.6; color:#555;">
      To empower every girl to wear outfits that reflect her personality — comfortable, stylish and uniquely hers.  
      We aim to make custom fashion accessible, affordable, and joyous for everyone.
    </p>

    <h3 style="color:#d81b60; margin-top: 25px;">Our Vision</h3>
    <p style="font-size: 16px; line-height: 1.6; color:#555;">
      To become the go-to online destination for customized fashion — where no two outfits are alike, and every design celebrates individuality.
    </p>

    <h3 style="color:#d81b60; margin-top: 25px;">Our Values</h3>
    <ul style="text-align: left; color:#555; line-height: 1.8; font-size: 16px;">
      <li>✔ Customer first: ensuring best fit and satisfaction</li>
      <li>✔ High-quality fabrics and craftsmanship</li>
      <li>✔ Creativity and uniqueness: no mass-production</li>
      <li>✔ Transparency in process and communication</li>
      <li>✔ Respect for every style — inclusive and diverse</li>
    </ul>
  </div>

  <!-- Why Choose Us -->
  <div style="max-width: 900px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px; margin-bottom: 40px;">
    <div style="width:45%; background:#fff3f4; padding:20px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
      <h4 style="color:#d81b60;">🎨 Fully Customizable Designs</h4>
      <p style="color:#444; line-height:1.6;">Choose fabric, design patterns, colors, and sizes — anything to match your taste.</p>
    </div>
    <div style="width:45%; background:#fff3f4; padding:20px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
      <h4 style="color:#d81b60;">📏 Perfect Fit Guaranteed</h4>
      <p style="color:#444; line-height:1.6;">Use manual measurements or AR-based size input to get outfits that fit you perfectly.</p>
    </div>
    <div style="width:45%; background:#fff3f4; padding:20px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
      <h4 style="color:#d81b60;">💬 Personalized Designer Support</h4>
      <p style="color:#444; line-height:1.6;">Consult with designers to refine your style — because you deserve more than just a ready-made dress.</p>
    </div>
    <div style="width:45%; background:#fff3f4; padding:20px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
      <h4 style="color:#d81b60;">🔄 Easy Alterations & Returns</h4>
      <p style="color:#444; line-height:1.6;">Not happy with the fit or design? Request alteration or return — we’ve got you covered.</p>
    </div>
  </div>

  <!-- CTA Button -->
  <div style="text-align:center; margin-bottom: 60px;">
    <button onclick="showSection('customize')" style="font-size: 18px; padding: 14px 30px; border-radius: 8px;">
      Start Designing Your Outfit
    </button>
  </div>
</section>




  <!-- CONTACT -->
  <section id="contact" style="padding:60px 20px; text-align:center;">
  <h2 style="font-size: 2.2em; color:#d81b60;">Contact Us</h2>
  <p style="margin-top:10px; color:#555; max-width:700px; margin:auto;">
    We'd love to hear from you! Connect with us anytime for outfit help, customization queries, or designer support.
  </p>

  <!-- ===== CONTACT CARDS ===== -->
  <div style="
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        gap:25px;
        margin-top:40px;">
    
    <!-- Card -->
    <div class="contact-card">
      <div class="icon">📞</div>
      <h3>Call Us</h3>
      <p>+91 98765 43210</p>
    </div>

    <div class="contact-card">
      <div class="icon">📧</div>
      <h3>Email</h3>
      <p>support@girlsfashionstudio.com</p>
    </div>

    <div class="contact-card">
      <div class="icon">📍</div>
      <h3>Location</h3>
      <p>Chennai, Tamil Nadu</p>
    </div>

  </div>

  <!-- ===== CONTACT FORM ===== -->
  <div style="
        max-width:550px;
        margin:50px auto;
        background:white;
        padding:30px;
        border-radius:20px;
        box-shadow:0 4px 20px rgba(0,0,0,0.1);
      ">
    <h3 style="color:#d81b60; margin-bottom:20px;">Send Us a Message</h3>

    <form>
      <label>Name:
        <input type="text" required />
      </label>

      <label>Email:
        <input type="email" required />
      </label>

      <label>Message:
        <textarea rows="4" required></textarea>
      </label>

      <button type="submit" style="padding:12px; width:100%; border-radius:10px;">
        Send Message
      </button>
    </form>
  </div>

  <!-- ===== GOOGLE MAP LIVE EMBED ===== -->
  <h3 style="color:#d81b60; margin:25px 0 15px;">Find Us on Google Maps</h3>
  <div style="
        max-width:900px;
        margin:auto;
        border-radius:20px;
        overflow:hidden;
        box-shadow:0 4px 20px rgba(0,0,0,0.15);
      ">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.627553918298!2d80.27071721483078!3d13.082680990767604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265dd5361b79d%3A0x92ccda3e138fab4d!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1691234567890"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- ===== CONTACT CARD CSS ===== -->
<style>
  .contact-card {
    width:260px;
    background:#fff3f4;
    padding:25px;
    border-radius:20px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
    text-align:center;
    transition:0.3s;
  }
  .contact-card:hover {
    transform:translateY(-8px);
    box-shadow:0 8px 25px rgba(0,0,0,0.15);
  }
  .contact-card .icon {
    font-size:45px;
    color:#d81b60;
    margin-bottom:10px;
  }
  #contact form label {
    display:block;
    text-align:left;
    margin-bottom:15px;
    font-weight:500;
    color:#444;
  }
  #contact input, #contact textarea {
    width:100%;
    padding:12px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:15px;
  }
  #contact button {
    background:#d81b60;
    color:white;
    border:none;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
  }
  #contact button:hover {
    background:#b31550;
  }
</style> 
  <section id="signup">
    <form action="signup.php" method="POST" style="text-align:center;">
      <div style="width: 360px; margin: auto; background: white; padding: 35px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.15); text-align: center;">
        <h2>Signup</h2>
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Signup</button>
        <p style="margin-top:10px;">Already have an account? <span onclick="showSection('login')" style="color:#d81b60; cursor:pointer;">Login</span></p>
      </div>
    </form>
  </section>  
 

  <!-- LOGIN -->

  <section id="login" style="background:white; padding-top:120px; padding-bottom:80px;">
<form action="login.php" method="POST" style="text-align:center;">

    <div style="
      width: 360px;
      margin: auto;
      background: white;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      text-align: center;
    ">

      <h2 style="color:#d81b60; font-size: 1.9em; margin-bottom: 15px;">Login</h2>

      <input type="email" name="email" placeholder="Enter Email" required style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:15px;
      ">

      <input type="password" name="password" placeholder="Enter Password" required style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:20px;
      ">

      <button type="submit" style="
        width:100%; padding:12px; background:#d81b60; color:white;
        border:none; border-radius:10px; font-size:16px; cursor:pointer;
      ">Login</button>
    </div>

</form>
</section>


 <!-- <section id="login" style="background:white; padding-top:120px; padding-bottom:80px;">
    <div style="
      width: 360px;
      margin: auto;
      background: white;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      text-align: center;
    ">

      <h2 style="color:#d81b60; font-size: 1.9em; margin-bottom: 15px;">Login</h2>

      <input type="email" placeholder="Enter Email" style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:15px;
      ">

      <input type="password" placeholder="Enter Password" style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:20px;
      ">

      <button style="
        width:100%; padding:12px; background:#d81b60; color:white;
        border:none; border-radius:10px; font-size:16px; cursor:pointer;
      ">Login</button>

    </div>
</section> -->

<!-- SIGNUP (NEW) -->
<!-- <section id="signup" style="background:white; padding-top:120px; padding-bottom:80px; display:none;">
<form action="signup.php" method="POST" style="text-align:center;">
    <div style="
      width: 380px;
      margin: auto;
      background: white;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      text-align: center;
    ">
      <h2 style="color:#d81b60; font-size: 1.9em; margin-bottom: 15px;">Create Account</h2>
      <input type="text" name="name" placeholder="Enter Full Name" required style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:15px;
      ">
      <input type="email" name="email" placeholder="Enter Email" required style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:15px;
      ">
      <input type="password" name="password" placeholder="Enter Password" required style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:15px;
      ">
      <input type="password" name="confirm_password" placeholder="Confirm Password" required style="
        width:100%; padding:12px; border-radius:10px;
        border:1px solid #ddd; margin-bottom:20px;
      ">
      <button type="submit" style="
        width:100%; padding:12px; background:#d81b60; color:white;
        border:none; border-radius:10px; font-size:16px; cursor:pointer;
      ">Signup</button>
      <p style="margin-top:15px; font-size:14px; color:#555;">
        Already have an account?  
        <a onclick="showSection('login')" style="color:#d81b60; cursor:pointer;">Login</a>
      </p>
    </div>
</form>
</section>

<script>
  function showSection(id) {
    document.querySelectorAll('section').forEach(s => s.style.display = 'none');
    document.getElementById(id).style.display = 'block';
  }

  function toggleManual() {
    const m = document.getElementById("manualMeasurement");
    m.style.display = m.style.display === "none" ? "block" : "none";
  }
</script> -->

<!-- <section id="signup">
    <form action="signup.php" method="POST" style="text-align:center;">
      <div style="width: 360px; margin: auto; background: white; padding: 35px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.15); text-align: center;">
        <h2>Signup</h2>
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Signup</button>
        <p style="margin-top:10px;">Already have an account? <span onclick="showSection('login')" style="color:#d81b60; cursor:pointer;">Login</span></p>
      </div>
    </form>
  </section> -->
  
  <!-- CUSTOMIZE -->
  <section id="customize">
<form action="save_customize.php" method="POST">

  <h2>Customize Your Outfit</h2>

  <h3>Choose Material:</h3>
  <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">
    <div>
      <img src="cotton.jpg" width="120" height="120">
      <input type="radio" name="material" value="Cotton" required> Cotton
    </div>

    <div>
      <img src="silk.jpg" width="120" height="120">
      <input type="radio" name="material" value="Silk"> Silk
    </div>

    <div>
      <img src="linen.webp" width="120" height="120">
      <input type="radio" name="material" value="Linen"> Linen
    </div>
  </div>

  <h3>Choose Design:</h3>
  <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">
    <div>
      <img src="floral.png" width="120" height="120">
      <input type="radio" name="design" value="Floral" required> Floral
    </div>

    <div>
      <img src="plain.avif" width="120" height="120">
      <input type="radio" name="design" value="Plain"> Plain
    </div>

    <div>
      <img src="embroidery.jpg" width="120" height="120">
      <input type="radio" name="design" value="Embroidery"> Embroidery
    </div>
  </div>

  <button type="submit" style="margin-top:20px;">Confirm</button>

</form>
</section>

<!-- 
  <section id="customize">
    <h2>Customize Your Outfit</h2>

    <h3>Choose Material:</h3>
    <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">
      <div>
        <img src="cotton.jpg" width="120" height="120" style="border-radius:10px;">
        <input type="radio" name="material"> Cotton
      </div>
      <div>
        <img src="silk.jpg" width="120" height="120" style="border-radius:10px;">
        <input type="radio" name="material"> Silk
      </div>
      <div>
        <img src="Linen.webp" width="120" height="120" style="border-radius:10px;">
        <input type="radio" name="material"> Linen
      </div>
    </div>

    <h3 style="margin-top:20px;">Choose Design:</h3>
    <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">
      <div>
        <img src="floral.png" width="120" height="120" style="border-radius:10px;">
        <input type="radio" name="design"> Floral
      </div>
      <div>
        <img src="plain.avif" width="120" height="120" style="border-radius:10px;">
        <input type="radio" name="design"> Plain
      </div>
      <div>
        <img src="embroidery.jpg" width="120" height="120" style="border-radius:10px;">
        <input type="radio" name="design"> Embroidery
      </div>
    </div>

    <button style="margin-top:20px;">Confirm</button>
  </section> -->


  <!-- MEASURE -->
 
<!-- ===================== MEASUREMENT PAGE ===================== -->
<!-- <section id="measure" style="padding:60px; text-align:center;">

  <h2 style="color:#d81b60; font-size:2em;">Enter Your Measurements</h2>

  <form action="backend/save_measure.php" method="POST" enctype="multipart/form-data"
        style="max-width:500px; margin:auto; text-align:left;
               background:#fff; padding:30px; border-radius:15px; 
               box-shadow:0 4px 15px rgba(0,0,0,0.1);">


    <label>Full Name:</label>
    <input type="text" name="name" required
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Email:</label>
    <input type="email" name="email" required
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Height (cm):</label>
    <input type="number" name="height"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Bust / Chest (cm):</label>
    <input type="number" name="bust"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Waist (cm):</label>
    <input type="number" name="waist"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Hips (cm):</label>
    <input type="number" name="hip"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Shoulder Width (cm):</label>
    <input type="number" name="shoulder"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Sleeve Length (cm):</label>
    <input type="number" name="sleeve"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Neck (cm):</label>
    <input type="number" name="neck"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Weight (kg):</label>
    <input type="number" name="weight"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <hr style="margin:30px 0;">


    <h3 style="color:#d81b60;">📸 AR Scan (Upload Photo)</h3>

    <p style="font-size:14px; color:#555;">
      Upload a full-body image for AI-based measurement detection
    </p>

    <label>Upload Full Body Photo:</label>
    <input type="file" name="ar_image" accept="image/*"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">

    <label>Height for AR Scan (cm):</label>
    <input type="number" name="ar_height"
           style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">


    <button type="submit" style="
      margin-top:25px; padding:12px; width:100%;
      background:#4CAF50; color:#fff; border:none;
      border-radius:10px; font-size:18px; cursor:pointer;">
      Submit Measurements
    </button>

  </form>

</section> -->

<!-- ===================== MEASUREMENT STUDIO ===================== -->
<section id="measure" style="padding:70px; background:linear-gradient(135deg,#fdeff4,#fff);">

  <h2 style="text-align:center; color:#c2185b; font-size:2.3em;">
    Smart Measurement Studio
  </h2>
  <p style="text-align:center; color:#555;">
    Choose manual entry or AI-powered AR scan
  </p>

  <form action="save_measurements.php" method="POST" enctype="multipart/form-data"
        style="max-width:900px; margin:40px auto; display:grid;
               grid-template-columns:1fr 1fr; gap:30px;">

    <!-- ================= LEFT : MANUAL ================= -->
    <div style="background:#fff; padding:30px; border-radius:20px;
                box-shadow:0 10px 30px rgba(0,0,0,0.1);">

      <h3 style="color:#d81b60;">✍️ Manual Measurements</h3>

      <input type="text" name="name" placeholder="Full Name" required
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="email" name="email" placeholder="Email Address" required
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="height" placeholder="Height (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="weight" placeholder="Weight (kg)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="bust" placeholder="Bust / Chest (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="waist" placeholder="Waist (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="hip" placeholder="Hips (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="shoulder" placeholder="Shoulder Width (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="sleeve" placeholder="Sleeve Length (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

      <input type="number" name="neck" placeholder="Neck (cm)"
             style="width:100%; padding:12px; margin:10px 0; border-radius:12px;">

    </div>

    <!-- ================= RIGHT : AR ================= -->
    <div style="background:#fff; padding:30px; border-radius:20px;
                box-shadow:0 10px 30px rgba(0,0,0,0.1);
                text-align:center;">

      <h3 style="color:#d81b60;">📸 AR Scan (Upload Photo)</h3>

      <div style="border:2px dashed #d81b60; border-radius:20px;
                  padding:25px; margin:20px 0;">

        <img id="preview" src="https://via.placeholder.com/150"
             style="width:150px; border-radius:12px; margin-bottom:15px;">

        <input type="file" name="ar_image" accept="image/*"
               onchange="previewImage(event)"
               style="width:100%; padding:10px;">

        <p style="font-size:13px; color:#666;">
          Upload a clear full-body photo
        </p>
      </div>

      <input type="number" name="ar_height" placeholder="Height for AR (cm)"
             style="width:100%; padding:12px; margin:15px 0; border-radius:12px;">

      <div style="background:#fdeff4; padding:15px; border-radius:15px;">
        <p style="font-size:14px; color:#555;">
          ✨ AI will analyze body proportions and generate measurements
        </p>
      </div>

    </div>

    <!-- ================= SUBMIT ================= -->
    <div style="grid-column:1 / 3; text-align:center;">
      <button type="submit"
              style="padding:14px 50px; background:#d81b60;
                     color:#fff; border:none; border-radius:30px;
                     font-size:18px; cursor:pointer;">
        Save Measurements
      </button>
    </div>

  </form>

</section>

<script>
function previewImage(event) {
  document.getElementById("preview").src =
    URL.createObjectURL(event.target.files[0]);
}
</script>
 





  <!-- FEEDBACK -->
  <!-- <section id="feedback">
    <h2>Feedback</h2>
    <form>
      <label>Name: <input type="text" required /></label>
      <label>Email: <input type="email" required /></label>
      <label>Rate Us:
        <select>
          <option>Excellent</option>
          <option>Good</option>
          <option>Average</option>
          <option>Poor</option>
        </select>
      </label>
      <label>Comments: <textarea rows="4" cols="30"></textarea></label>
      <button type="submit">Submit Feedback</button>
    </form>
  </section> -->
 
<!-- <section id="feedback" style="padding:60px 20px; text-align:center;">
  <h2 style="font-size: 2.2em; color:#d81b60;">Share Your Experience 💬</h2>
  <p style="color:#555; margin-bottom:30px;">Your feedback helps us improve our service!</p>
 -->
  <!-- Emoji Rating -->
 <!--  <h3 style="color:#d81b60;">How was your experience?</h3>
  <div id="emojiRating" style="font-size:45px; margin-bottom:20px; cursor:pointer;">
    <span onclick="selectEmoji(this)">😊</span>
    <span onclick="selectEmoji(this)">😍</span>
    <span onclick="selectEmoji(this)">😐</span>
    <span onclick="selectEmoji(this)">😢</span>
    <span onclick="selectEmoji(this)">😡</span>
  </div> -->

  <!-- Stars Rating -->
  <!-- <h3 style="color:#d81b60;">Rate Us ⭐</h3>
  <div id="starRating" style="margin-bottom:20px; font-size:32px; color:#ffcc00; cursor:pointer;">
    <span onclick="selectStar(1)">★</span>
    <span onclick="selectStar(2)">★</span>
    <span onclick="selectStar(3)">★</span>
    <span onclick="selectStar(4)">★</span>
    <span onclick="selectStar(5)">★</span>
  </div> -->

  <!-- Good / Excellent -->
  <!-- <h3 style="color:#d81b60;">Overall Experience</h3>
  <select id="experienceText" style="
    padding:12px; width:240px; border-radius:10px;
    margin-bottom:30px; font-size:16px;
  ">
    <option value="">Select</option>
    <option value="Excellent">🌟 Excellent</option>
    <option value="Very Good">👍 Very Good</option>
    <option value="Good">🙂 Good</option>
    <option value="Average">😐 Average</option>
    <option value="Poor">😞 Poor</option>
  </select> -->

  <!-- Feedback Form -->
  <!-- <div style="
    max-width:650px; margin:auto; background:#fff; padding:30px;
    border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.1);
  ">

    <label>Full Name:
      <input type="text" id="name" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">
    </label>

    <label>Email:
      <input type="email" id="email" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">
    </label>

    <label>Order ID (optional):
      <input type="text" id="order" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;">
    </label>

    <label>Your Feedback:
      <textarea rows="4" id="userFeedback" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;"></textarea>
    </label>

    <button onclick="submitFeedback()" style="
      margin-top:15px; padding:12px 25px; background:#d81b60; color:white;
      border:none; border-radius:10px; font-size:16px; cursor:pointer;
    ">
      Submit Feedback
    </button>

    <p id="result" style="margin-top:20px; font-weight:bold; color:green;"></p>
  </div>
</section>

<script>
  let selectedEmoji = "";
  let selectedStars = 0;

  function selectEmoji(el) {
    let emojis = document.querySelectorAll("#emojiRating span");
    emojis.forEach(e => e.style.opacity = "0.4");
    el.style.opacity = "1";
    selectedEmoji = el.innerText;
  }

  function selectStar(n) {
    selectedStars = n;
    let stars = document.querySelectorAll("#starRating span");
    stars.forEach((s, i) => {
      s.style.opacity = i < n ? "1" : "0.4";
    });
  }

  function submitFeedback() {
    let name = document.getElementById("name").value;
    if (!name) {
      alert("Please enter your name!");
      return;
    }
    document.getElementById("result").innerText =
      "Thank you " + name + "! Your feedback has been submitted 💖";
  }
</script>
 -->

<<!-- section id="feedback">
<form action="save_feedback.php" method="POST">

  <h2>Share Your Experience</h2>

  <select name="rating" required>
    <option value="">Select</option>
    <option value="Excellent">Excellent</option>
    <option value="Very Good">Very Good</option>
    <option value="Good">Good</option>
    <option value="Average">Average</option>
    <option value="Poor">Poor</option>
  </select>

  <input type="text" name="name" placeholder="Full Name" required>
  <input type="email" name="email" placeholder="Email" required>

  <textarea name="message" rows="4" placeholder="Write your feedback here"></textarea>

  <button type="submit">Submit Feedback</button>

</form>
</section>
 -->

 <!-- Add this in <head> to load Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<section id="feedback" style="background-color:#fff0f5; padding:50px 20px; text-align:center; font-family: 'Segoe UI', sans-serif;">
  <h2 style="color:#d81b60; font-size:2.5em; margin-bottom:30px;">Share Your Experience</h2>

  <form action="save_feedback.php" method="POST" 
        style="max-width:500px; margin:auto; background:#fff; padding:30px; border-radius:15px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">

    <!-- Rating with stars -->
    <div style="position:relative; margin-bottom:15px; text-align:left;">
      <i class="fas fa-star" style="position:absolute; top:12px; left:10px; color:#d81b60;"></i>
      <select name="rating" required 
              style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:1em; outline:none;">
        <option value="">Select Rating</option>
        <option value="Excellent">Excellent</option>
        <option value="Very Good">Very Good</option>
        <option value="Good">Good</option>
        <option value="Average">Average</option>
        <option value="Poor">Poor</option>
      </select>
    </div>

    <!-- Name -->
    <div style="position:relative; margin-bottom:15px; text-align:left;">
      <i class="fas fa-user" style="position:absolute; top:12px; left:10px; color:#d81b60;"></i>
      <input type="text" name="name" placeholder="Full Name" required
             style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:1em; outline:none;">
    </div>

    <!-- Email -->
    <div style="position:relative; margin-bottom:15px; text-align:left;">
      <i class="fas fa-envelope" style="position:absolute; top:12px; left:10px; color:#d81b60;"></i>
      <input type="email" name="email" placeholder="Email" required
             style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:1em; outline:none;">
    </div>

    <!-- Message -->
    <div style="position:relative; margin-bottom:20px; text-align:left;">
      <i class="fas fa-pen" style="position:absolute; top:12px; left:10px; color:#d81b60;"></i>
      <textarea name="message" rows="4" placeholder="Write your feedback here"
                style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:1em; resize:none; outline:none;"></textarea>
    </div>

    <!-- Submit Button -->
    <button type="submit" 
            style="width:100%; padding:12px; background:#d81b60; color:#fff; border:none; border-radius:8px; font-size:1.1em; cursor:pointer; transition:0.3s;"
            onmouseover="this.style.background='#c2185b'" 
            onmouseout="this.style.background='#d81b60'">
      <i class="fas fa-paper-plane"></i> Submit Feedback
    </button>

  </form>
</section>


 <section id="return" style="padding:60px 20px; text-align:center;">
  <h2 style="font-size: 2.2em; color:#d81b60;">Return / Alteration Request 🔄</h2>
  <p style="max-width:700px; margin:auto; color:#555;">
    If your outfit doesn’t fit well or needs adjustments, submit a request below.
  </p>

  <form action="save_return.php" method="POST" enctype="multipart/form-data" style="
    max-width:700px; margin:40px auto; padding:30px; background:white;
    border-radius:20px; box-shadow:0 5px 20px rgba(0,0,0,0.1);
  ">

    <label>Order ID:
      <input type="text" name="order_id" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;" required>
    </label>

    <label>Customer Name:
      <input type="text" name="customer_name" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;" required>
    </label>

    <label>Issue Type:
      <select name="issue_type" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;" required>
        <option value="">Select Issue</option>
        <option>Size Issue</option>
        <option>Color Mismatch</option>
        <option>Design Issue</option>
        <option>Alteration Required</option>
        <option>Return Request</option>
      </select>
    </label>

    <label>Describe the Issue:
      <textarea name="description" rows="4" style="width:100%; padding:12px; border-radius:10px; margin:10px 0;"></textarea>
    </label>

    <label>Upload Outfit Image:
      <input type="file" name="image" style="margin-top:10px;">
    </label>

    <button type="submit" style="
      width:100%; margin-top:20px; padding:12px; font-size:16px;
      background:#d81b60; color:white; border:none; border-radius:10px;
      cursor:pointer;
    ">Submit Request</button>

  </form>
</section>


  <script>
    function showSection(id) {
      document.querySelectorAll("section").forEach(sec => sec.classList.remove("active"));
      document.getElementById(id).classList.add("active");
    }

    function toggleManual() {
      const m = document.getElementById("manualMeasurement");
      m.style.display = m.style.display === "none" ? "block" : "none";
    }
  </script>   
 



<!--  PAYMENT SECTION -->
<section id="payment" style="display:none; padding:80px 20px; background: linear-gradient(135deg, #ffe6f0, #ff99c8); min-height:100vh; text-align:center;">

  <h2 style="font-size:3em; color:#d81b60; margin-bottom:10px; font-family: 'Segoe UI', sans-serif; font-weight:700;">
    Secure Payment 💳
  </h2>
  <p style="color:#555; max-width:600px; margin:0 auto 50px auto; font-size:1.2em;">
    Pay safely for your customized outfit using card or UPI. Fast, secure, and hassle-free!
  </p>

  <div style="max-width:550px; margin:auto; background:#fff; padding:50px 40px; border-radius:30px; box-shadow:0 15px 40px rgba(0,0,0,0.2); text-align:left;">

    <div style="display:flex; justify-content:center; gap:25px; margin-bottom:30px;">
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" style="height:30px;">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" alt="MasterCard" style="height:30px;">
      <span title="UPI">💸</span>
    </div>

    <label style="font-weight:bold; display:block; margin-bottom:5px;">Full Name</label>
    <input type="text" id="name" placeholder="Enter your name" style="width:100%; padding:15px; border-radius:10px; border:1px solid #ccc; margin-bottom:20px;" required>

    <label style="font-weight:bold; display:block; margin-bottom:5px;">Email</label>
    <input type="email" id="email" placeholder="Enter your email" style="width:100%; padding:15px; border-radius:10px; border:1px solid #ccc; margin-bottom:20px;" required>

    <label style="font-weight:bold; display:block; margin-bottom:5px;">Amount (₹)</label>
    <input type="number" id="amount" placeholder="Enter amount" style="width:100%; padding:15px; border-radius:10px; border:1px solid #ccc; margin-bottom:30px;" required>

    <button onclick="payNow()" style="width:100%; padding:18px; background: linear-gradient(45deg, #d81b60, #ff4081); color:white; border:none; border-radius:15px; font-size:18px; font-weight:bold; cursor:pointer; box-shadow:0 5px 20px rgba(216,27,96,0.4);">
      💳 Pay Now
    </button>
    

  </div>
</section>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
  function showSection(sectionId) {
  const sections = document.querySelectorAll('section');
  sections.forEach(sec => sec.style.display = 'none'); // hide all sections
  const target = document.getElementById(sectionId);
  if(target) target.style.display = 'block'; // show the target section
}

function payNow() {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const amount = document.getElementById('amount').value;

  if(!name || !email || !amount) {
    alert("Please fill all fields!");
    return;
  }

  const options = {
    key: "YOUR_RAZORPAY_KEY", // Replace with your Razorpay Key
    amount: amount * 100, 
    currency: "INR",
    name: "Girls Fashion Customizer",
    description: "Custom Outfit Payment",
    prefill: { name: name, email: email },
    theme: { color: "#d81b60" },
    handler: function (response){
      alert("Payment successful! Razorpay ID: " + response.razorpay_payment_id);

      // POST to backend PHP
      fetch('save_payment.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&amount=${amount}&payment_id=${response.razorpay_payment_id}`
      }).then(res => res.text()).then(data => {
        console.log(data);
        alert("Payment recorded in backend!");
      }).catch(err => console.error(err));
    },
    modal: {
      ondismiss: function() { alert("Payment cancelled."); }
    }
  };

  const rzp = new Razorpay(options);
  rzp.open();
}
</script>





</body>
</html>
  