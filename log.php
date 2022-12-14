<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log-in</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php
      include("header.php"); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h2 class="text-center text-dark mt-5">Login Form</h2>
          <div class="text-center mb-5 text-dark"></div>
          <div class="card my-5">
            <form
              class="card-body cardbody-color p-lg-5"
              action="login.php"
              method="POST"
              name="login"
              onsubmit="return validate()"
            >
              <div class="text-center">
                <img
                  src="https://i.pinimg.com/564x/c4/2a/d9/c42ad908810795518e6fa32da8550f5d.jpg"
                  class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                  width="200px"
                  alt="profile"
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  placeholder="Email"
                  name="email"
                />
              </div>
              <div class="mb-3">
                <!-- <input type="password" id="pw" class="form-control" placeholder="password" name="pw"> -->
                <input
                  type="password"
                  id="pw"
                  class="form-control"
                  placeholder="password"
                  name="password"
                />
              </div>
              <div class="text-center">
                <button
                  type="submit"
                  class="btn btn-color px-5 mb-5 w-100"
                  value="submit"
                  name="submit"
                >
                  Login
                </button>
              </div>
              <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                Not Registered?
                <a href="register.html" class="text-dark fw-bold">
                  Create an Account</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function validate() {
        var EmailId = document.getElementById("email");
        var atpos = EmailId.value.indexOf("@");
        var dotpos = EmailId.value.lastIndexOf(".");
        var pw = document.getElementById("pw");
        if (
          atpos < 1 ||
          dotpos < atpos + 2 ||
          dotpos + 2 >= EmailId.value.length
        ) {
          alert("Enter valid email-ID");
          EmailId.focus();
          return false;
        }
        if (pw.value.length < 8) {
          alert("Password consists of atleast 8 characters");
          pw.focus();
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>
