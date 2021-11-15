<head>

    <title> Praktikum_PWEB_5026201038 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=
        "https://maxcdn.bootstrapcdn.com/bootstrap/
         4.0.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src=
        "https://ajax.googleapis.com/ajax/libs/
         jquery/3.3.1/jquery.min.js">
        </script>
        <!-- Popper JS -->
        <script src=
        "https://cdnjs.cloudflare.com/ajax/libs/
         popper.js/1.12.9/umd/popper.min.js">
        </script>
        <!-- Latest compiled JavaScript -->
        <script src=
        "https://maxcdn.bootstrapcdn.com/bootstrap/
         4.0.0/js/bootstrap.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <style name="pengaturan_form">

      #form label{
        display: inline-block;
        width: 100px;
        text-align: right;
      }
      #form_submit{
        padding-left: 100px;
      }
      #form div{
        margin-top: 1em;
      }
      textarea{
        vertical-align: top;
        height: 5em;
      }

      .error{
        color: red;
        margin-left: 10px;
      }

      h1 {
        text-align: center;
      }

      textarea {
      resize: none;

      }
    </style>

    <style name="tampilan_form">

    .button {
      background-color: #4FAF50; /* Green */
      border: none;
      color: white;
      padding: 10px 28px;
      text-align: center;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      transition-duration: 0.4s;
      width: 250px;

    }
    .button2:hover {
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

    }

    body{
      margin-left: auto;
      margin-right: auto;
      background-color: #90e485;
      width: 900px;
      font-family:Verdana, Arial, Helvetica, sans-serif;
      font-size:14px;
      box-shadow: 0 12px 16px 0 rgba(231, 60, 60, 0.24), 0 17px 50px 0 rgba(17, 148, 255, 0.678);
    }

    </style>

    </head>

    <body>

    <h1>Registration Form</h1>

    <hr>

    <form name='registration' id="form" action="https://google.com" onsubmit="return verifyPassword()">
        <!-- User_Id -->
        <div>
            <label for="userid">User id:</label>
            <input type="text" id="usid" name="user_id" pattern=.{5,12} title="user id must be 5 to 12 in length" size="50" required></input>
        </div>
      <!--Password -->
        <div>
            <label for="passid">Password:</label>
            <input type="password" id="pswd" name="password" value="" size="50" required></input>
            <span id = "message_2" style="color:red"> </span> <br><br>
        <script>
          function verifyPassword() {
            var pw = document.getElementById("pswd").value;
           //minimum password length validation
            if(pw.length < 7) {
               document.getElementById("message_2").innerHTML = "password length must be atleast 7 characters";
               return false;
            }

          //maximum length of password validation
            if(pw.length > 12) {
               document.getElementById("message_2").innerHTML = "password length must not exceed 12 characters";
               return false;
            }
          }
        </script>
        </div>
      <!-- Name -->
        <div>
            <label for="form_name">Name:</label>
            <input type="text" id="name_user" name="name" class="name_text" size="50" required></input>
        <script>
          $('.name_text').bind('keyup blur',function(){
              var node = $(this);
              node.val(node.val().replace(/[^a-z]/g,'') ); }
          );
        </script>
        </div>
      <!-- Address -->
        <div>
            <label for="user_address">Address:</label>
            <input type="text" id="user_address" name="address" size="50" required></input>
        </div>
      <!-- Country -->
        <div>
        <label for="country">Country:</label>
            <select name="country" required>
          <option value="">(Please select a country)</option>
          <option>Indonesia</option>
          <option>China</option>
          <option>Japan</option>
        </select>
        </div>
      <!-- ZipCode -->
        <div>
            <label for="zip_code">Zip Code:</label>
            <input type="text" id="zip_code" name="user_zipcode" class="zipcode" size="50" required></input>
        <script>
          $("input.zipcode").keypress(function(event) {
          return /\d/.test(String.fromCharCode(event.keyCode));
          });
        </script>
        </div>
        <!-- Email -->
        <div>
            <label for="user_email">Email:</label>
            <input type="email" id="user_email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" size="50" required></input>
        </div>
        <!-- Sex -->
        <div>
            <label id="gender">Sex:</label></li>
        <input type="radio" name="gender" value="Male" required/><span>Male</span></li>
        <input type="radio" name="gender" value="Female" /><span>Female</span></li>
        </div>
        <!-- Language -->
        <div>
        <label>Language:</label></li>
      <input type="checkbox" name="language" class="radio" value="eng" /><span>English</span>
      <input type="checkbox" name="language" class="radio" value="noneng"/><span>Non English</span>
      <script>
        $('input[type="checkbox"]').on('change', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
        });
      </script>
        </div>
      <!-- About -->
        <div>
            <label for="form_message">About:</label>
            <textarea id="form_message" name="message" cols="50"></textarea>
        </div>
      <!-- Submit Button -->
        <div id="form_submit">
            <button class="button button2" type="submit">Submit</button>
        </div>

    </form>

    </body>

