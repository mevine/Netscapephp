<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
body{
  background-color: lightblue;
}
  

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formvalidation</title>
</head>
<body>
<?php
    //  define variables  and empty values
    $fnameErr = $eemailErr = $genderErr = $websiteErr = $telephoneErr="";
    $fname = $eemail = $gender = $comment = $website = $telephone="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $fnameErr = "Name is required";
        } else {
          $fname = test_input($_POST["name"]);
        }
        
        if (empty($_POST["email"])) {
          $eemailErr = "Email is required";
        } else {
          $eemail = test_input($_POST["email"]);
        }
        if (empty($_POST["number"])) {
            $telephoneErr ="phonenumber required";
        }else {
            $telephone = test_input($_POST["number"]);
        }
          
        if (empty($_POST["website"])) {
          $website = "valid url";
        } else {
          $website = test_input($_POST["website"]);
        }
      
        if (empty($_POST["Comment"])) {
          $comment = "";
        } else {
          $comment = test_input($_POST["comment"]);
        }
      
        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
        }
      }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    ?>
    <h2>my form validation</h2>
    <p><span class="error">* required field</span></p>
    <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><br>
    <label for="fname">fullname</label><br>
    <span class="error">* <?php echo $fnameErr;?></span><br>
    <input type="text" id="fname" name="name"><br>
    
    <label for="email">email adress</label><br>
    <span class="error">* <?php echo $eemailErr;?></span><br>
    <input type="email" id="eemail" name="email"><br>
   
    <label for="telephone">phone number</label><br>
    <span class="error">* <?php echo $telephoneErr;?></span><br>
    <input type="text" id="telephone"name="number"><br>
    
    <label for="website">Website</label><br>
    <span class="error">* <?php echo $websiteErr;?></span>
    <input type="text" id="website" name="website"><br>
    
    <label for="comment">Comments</label><br>
    <textarea name="Comment" id="comment" cols="30" rows="10"></textarea><br>
    <br><br>
    Gender:
    <span class="error">* <?php echo $genderErr;?></span>
    <input type="radio"name="gender" value="female">Female
    <input type="radio" name="gender"value="male">Male
    <input type="radio" name="gender"value="other">Other<br>
    
    <br>
    <input type="submit" value="Register"><br>
    </form>

    <?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $eemail;
echo "<br>";
echo $telephone;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
    

</body>
</html>