<?php
// ======= DATABASE CONNECTION =======
$host = "localhost";
$user = "root"; // change if needed
$pass = "";     // change if needed
$db   = "fashion_studio";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("DB Connection Failed: " . $conn->connect_error); }

// ======= LOGIN =======
$login_msg = "";
if(isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $passw = $_POST['login_password'];
    $res = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$passw'");
    $login_msg = ($res->num_rows > 0) ? "Login Successful!" : "Invalid Email or Password!";
}

// ======= SIGNUP =======
$signup_msg = "";
if(isset($_POST['signup'])) {
    $name = $_POST['signup_name'];
    $email = $_POST['signup_email'];
    $passw = $_POST['signup_password'];
    $signup_msg = ($conn->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$passw')")) 
                  ? "Signup Successful! You can now login." 
                  : "Error: ".$conn->error;
}

// ======= FEEDBACK =======
$feedback_msg = "";
if(isset($_POST['feedback_submit'])) {
    $name = $_POST['fb_name'];
    $email = $_POST['fb_email'];
    $order = $_POST['fb_order'];
    $emoji = $_POST['fb_emoji'];
    $stars = $_POST['fb_stars'];
    $experience = $_POST['fb_experience'];
    $comments = $_POST['fb_comments'];
    $feedback_msg = ($conn->query("INSERT INTO feedback (name,email,order_id,emoji,stars,experience,comments) VALUES ('$name','$email','$order','$emoji','$stars','$experience','$comments')"))
                    ? "Thank you $name! Your feedback has been submitted 💖"
                    : "Error: ".$conn->error;
}

// ======= RETURN/ALTER =======
$return_msg = "";
if(isset($_POST['return_submit'])) {
    $order = $_POST['return_order'];
    $name  = $_POST['return_name'];
    $issue = $_POST['return_issue'];
    $details = $_POST['return_details'];

    $uploadOk = 1;
    $target_dir = "uploads/";
    if(!is_dir($target_dir)) mkdir($target_dir,0777,true);

    $file_name = "";
    if(!empty($_FILES["return_image"]["name"])) {
        $file_name = time()."_".$_FILES["return_image"]["name"];
        $target_file = $target_dir . $file_name;
        $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(move_uploaded_file($_FILES["return_image"]["tmp_name"], $target_file)) {
            $uploadOk = 1;
        } else { $uploadOk = 0; }
    }

    if($uploadOk) {
        $return_msg = ($conn->query("INSERT INTO returns (order_id,customer_name,issue_type,details,image) VALUES ('$order','$name','$issue','$details','$file_name')"))
                      ? "Return/Alteration request submitted successfully!" 
                      : "Error: ".$conn->error;
    } else { $return_msg = "Image upload failed."; }
}

// ======= CUSTOMIZATION =======
$custom_msg = "";
if(isset($_POST['custom_submit'])) {
    $material = $_POST['custom_material'];
    $design   = $_POST['custom_design'];
    $custom_msg = ($conn->query("INSERT INTO customization (material,design) VALUES ('$material','$design')"))
                  ? "Your customization has been saved!" 
                  : "Error: ".$conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Girls Fashion Studio</title>
<style>
body { font-family:'Segoe UI',sans-serif; background:#fff0f5; margin:0; padding:0;}
nav { background:#ec407a; padding:10px; display:flex; justify-content:space-around; flex-wrap:wrap;}
nav a { color:white; text-decoration:none; font-weight:bold; cursor:pointer; margin:5px 0;}
section { display:none; padding:20px; text-align:center;}
section.active { display:block;}
h1,h2 { color:#d81b60; }
input,select,textarea,button { margin:10px auto; padding:8px; border-radius:5px; border:1px solid #d81b60; display:block; }
button { background:#d81b60; color:white; cursor:pointer; border:none; }
button:hover { background:#ad1457; }
#starRating span,#emojiRating span { font-size:40px; cursor:pointer; margin:5px; opacity:0.4; }
#starRating span.active,#emojiRating span.active { opacity:1; }
</style>
</head>
<body>

<nav>
<a onclick="showSection('home')">Home</a>
<a onclick="showSection('about')">About</a>
<a onclick="showSection('contact')">Contact</a>
<a onclick="showSection('login')">Login</a>
<a onclick="showSection('signup')">Signup</a>
<a onclick="showSection('customize')">Customize</a>
<a onclick="showSection('measure')">Measure</a>
<a onclick="showSection('feedback')">Feedback</a>
<a onclick="showSection('return')">Return/Alter</a>
</nav>

<section id="home" class="active">
<h1>Welcome to Girls Fashion Studio</h1>
<p>Design your dream outfit with custom fabric, designs, and sizing.</p>
<button onclick="showSection('customize')">Start Customizing</button>
</section>

<section id="about">
<h1>About Girls Fashion Studio</h1>
<p>We create outfits that match your style perfectly.</p>
</section>

<section id="contact">
<h2>Contact Us</h2>
<p>Email: support@girlsfashionstudio.com | Call: +91 98765 43210</p>
</section>

<section id="login">
<h2>Login</h2>
<form method="post">
<input type="email" name="login_email" placeholder="Email" required>
<input type="password" name="login_password" placeholder="Password" required>
<button type="submit" name="login">Login</button>
</form>
<p><?php echo $login_msg; ?></p>
</section>

<section id="signup">
<h2>Signup</h2>
<form method="post">
<input type="text" name="signup_name" placeholder="Name" required>
<input type="email" name="signup_email" placeholder="Email" required>
<input type="password" name="signup_password" placeholder="Password" required>
<button type="submit" name="signup">Signup</button>
</form>
<p><?php echo $signup_msg; ?></p>
</section>

<section id="customize">
<h2>Customize Your Outfit</h2>
<form method="post">
<select name="custom_material" required>
<option value="">Select Material</option>
<option value="Cotton">Cotton</option>
<option value="Silk">Silk</option>
<option value="Linen">Linen</option>
</select>
<select name="custom_design" required>
<option value="">Select Design</option>
<option value="Floral">Floral</option>
<option value="Plain">Plain</option>
<option value="Embroidery">Embroidery</option>
</select>
<button type="submit" name="custom_submit">Confirm</button>
</form>
<p><?php echo $custom_msg; ?></p>
</section>

<section id="measure">
<h2>Measurement Options (AR Simulation)</h2>
<button onclick="toggleManual()">Manual Entry</button>
<button onclick="alert('AR Scan Simulation: Place your camera!')">Use AR Scan</button>
<div id="manualMeasurement" style="display:none;">
<label>Bust:<input type="number"></label>
<label>Waist:<input type="number"></label>
<label>Hip:<input type="number"></label>
</div>
</section>

<section id="feedback">
<h2>Feedback</h2>
<form method="post">
<input type="text" name="fb_name" placeholder="Name" required>
<input type="email" name="fb_email" placeholder="Email" required>
<input type="text" name="fb_order" placeholder="Order ID (optional)">

<div id="emojiRating">
<span onclick="selectEmoji(this)">😊</span>
<span onclick="selectEmoji(this)">😍</span>
<span onclick="selectEmoji(this)">😐</span>
<span onclick="selectEmoji(this)">😢</span>
<span onclick="selectEmoji(this)">😡</span>
<input type="hidden" name="fb_emoji" id="fb_emoji">
</div>

<div id="starRating">
<span onclick="selectStar(this,1)">★</span>
<span onclick="selectStar(this,2)">★</span>
<span onclick="selectStar(this,3)">★</span>
<span onclick="selectStar(this,4)">★</span>
<span onclick="selectStar(this,5)">★</span>
<input type="hidden" name="fb_stars" id="fb_stars">
</div>

<select name="fb_experience">
<option value="">Select Experience</option>
<option value="Excellent">Excellent</option>
<option value="Very Good">Very Good</option>
<option value="Good">Good</option>
<option value="Average">Average</option>
<option value="Poor">Poor</option>
</select>
<textarea name="fb_comments" placeholder="Comments"></textarea>
<button type="submit" name="feedback_submit">Submit Feedback</button>
</form>
<p><?php echo $feedback_msg; ?></p>
</section>

<section id="return">
<h2>Return / Alteration</h2>
<form method="post" enctype="multipart/form-data">
<input type="text" name="return_order" placeholder="Order ID" required>
<input type="text" name="return_name" placeholder="Customer Name" required>
<select name="return_issue">
<option>Size Issue</option>
<option>Color mismatch</option>
<option>Design Issue</option>
<option>Alteration Required</option>
<option>Return Request</option>
</select>
<textarea name="return_details" placeholder="Describe the Issue"></textarea>
<label>Upload Outfit Image:</label>
<input type="file" name="return_image">
<button type="submit" name="return_submit">Submit Request</button>
</form>
<p><?php echo $return_msg; ?></p>
</section>

<script>
function showSection(id){
  document.querySelectorAll('section').forEach(s=>s.classList.remove('active'));
  document.getElementById(id).classList.add('active');
}
function toggleManual(){
  const m = document.getElementById("manualMeasurement");
  m.style.display = m.style.display==='none'?'block':'none';
}
function selectEmoji(el){
  document.querySelectorAll('#emojiRating span').forEach(s=>s.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('fb_emoji').value = el.innerText;
}
function selectStar(el,n){
  document.querySelectorAll('#starRating span').forEach(s=>s.classList.remove('active'));
  for(let i=0;i<n;i++){document.querySelectorAll('#starRating span')[i].classList.add('active');}
  document.getElementById('fb_stars').value = n;
}
</script>

</body>
</html>
