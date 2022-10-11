<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
    <title>PON YU XUAN</title>
    <link rel="stylesheet" href="css\main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <!-- <section class="section-about d-flex">
        <div class="content-about">
          <div id="profile" class="container">
            <h2 class="content-about-title">Profile</h2>
              <p class="lead">I&#039;m a creative webdeveloper</p>
                <hr style="margin: 40px 0px; border-color:darkgrey; opacity: 0.2;">
                <div class="row">
                  <div class="col-md-4">
                    <h3>About me</h3>
                    <p>
                      I am an allround web developer. I love spending time on fixing little details and optimizing web apps. Also I like working in a team, you'll learn faster and much more. As the saying goes: 'two heads are better than one'.		</p>
                  </div>
                  <div class="col-md-4 text-center">
                    <img src="img/main.jpg" alt="PON YU XUAN" width="246" height="246" style="border-radius: 50%;"/>
                  </div>
                  <div class="col-md-4">
                    <h3>Details</h3>
                    <div class="content-about-details">
                      <strong>Name:</strong><br />
                      PON YU XUAN<br />
                      <strong>Age:</strong>
                      <div id="age">
                        <script>
                          document.getElementById("age").innerHTML = getAge("1999-07-13");
                        </script>
                      </div>
                      <strong>Location:</strong><br />
                      Perak, Malaysia, Earth	
                    </div>                
                  </div>
                </div>
        </div>
      </section> 
       <section class="section-skill">
        <div class="content-skill">
          <div class="container">
            <h2 class="content-skill-title pt-5">RESUME</h2>
            <div class="row">
              <div class="col-xl-4">
                <div>Education</div>
                <hr />
                <div>Aug 2022 - Current</div>
                <div>Bachelor in Computer Science Artificial Intelligence</div>
                <div>Multimedia University (MMU)</div>
                <hr />
                <div>Nov 2019 - April 2022</div>
                <div>Diploma in Information Technology</div>
                <div>Multimedia University (MMU)</div>
              </div>
              <div class="col-xl-4">
                <div>Experience</div>
                <hr />
                <div>Dec 2021 - Mac 2022</div>
                <div>Internship as research assistance</div>
                <div>Multimedia University (MMU)</div>
                <div>works as, learn :,</div>
                <hr />
                <div>Feb 2017 - Dec 2018</div>
                <div>Technician</div>
                <div>Iphone Clinic Ipoh</div>
                <div>Handphone diagnosis and repair skill.</div>
                <div>Sales part to customer</div>
              </div>
              <div class="col-xl-4">
                <div>Language Skill</div>
                <hr />
                <div>Bahasa Malaysia</div>
                <div>English</div>
                <div>Mandarin</div>
                <div>Cantonese</div>
                <div class="pt-5">Coding Skill</div>
                <hr />
                <div>HTML, CSS, Javascript</div>
                <div>PHP, MySQL</div>
                <div>C, C++, Java</div>
                <div>Microsoft Office</div>
                <div></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-project">
        <div class="content-project">
          <h2 class="content-project-title">My project</h2>
          <div class="text-center">Click the Folder to view</div>
          <div class="content-project-1">
            <img src="img/folder3.png" alt="Discord Bot" title="Discord Bot" />
            <div>Discord Bot</div>
          </div>
          <div class="content-project-2">
            <img src="img/folder3.png" alt="Porfolio" title="Porfolio" />
            <div>Porfolio</div>
          </div>
        </div>
      </section> -->
      <section class="section-contact d-flex">
        <div class="content-contact">
          <div class="container">
            <div class="row">
              <div class="col">
                <div>Contact Form</div>
                <div>
                  <form
                    action="mailto:info@w3docs.com"
                    method="get"
                    enctype="text/plain"
                  >
                    <input
                      type="text"
                      name="Name"
                      id="name"
                      placeholder="Name"
                      class="form-control mt-3"
                    />
                    <input
                      type="email"
                      name="Email"
                      id="email"
                      placeholder="Email"
                      class="form-control mt-3"
                    />
                    <textarea
                      name="contact"
                      id="contact"
                      cols="30"
                      rows="10"
                      placeholder="Message to Me"
                      class="form-control mt-3"
                    ></textarea>
                    <input type="submit" value="Submit" name="submit" />
                    <input type="reset" value="Reset Form" name="reset" />
                  </form>
                </div>
              </div>
              <div class="col-4">
                <div>Get in Touch</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>

  <!-- JavaScript Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>

  <?php
if(isset($_POST['emailbtn'])){
	$to_email = $_POST['getEmail'];
	$subject = "Reset Password for Sweet Bakery Shop Website";
	$body = "Hi,

	There was a request to change your password!

	If you did not make this request then please ignore this email.

	Otherwise, please click this link to change your password: 
	
	[C:\xampp\htdocs\FYP_latest\reset-password.php]";

	$headers = "From: fyp.sweetbakeryshop@gmail.com";

	 
	if (mail($to_email, $subject, $body, $headers)) {
		echo "<script type='text/javascript'>
			  	alert('Email successfully sent to ".$to_email." ... ');
			  </script>";
		echo "<script type='text/javascript'> document.location = 'login_page.php'; </script>";
	} else {
		echo "<script type='text/javascript'>
			  	alert('Email sending failed...');
			  </script>";
		echo "<script type='text/javascript'> document.location = 'login_page.php'; </script>";	  
	}
}
?>
</html>