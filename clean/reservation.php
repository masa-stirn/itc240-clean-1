<?php include 'header.php'?>

<?php 

if(isset($_POST['Name'])){//show data
   // echo $_POST['FirstName'];
//    echo '<pre>';
//    var_dump($_POST);
//    echo '</pre>';
//    die;
    

 $to      = 'info@masawudesign.dk';
$subject = 'Clean Contact page';
//$message = 'hello from ' . $_POST['Name'];
$message = process_post();
$replyTo = "masa.wu@seattlecolleges.edu";
$headers = 'From: noreply@masawudesign.dk' . PHP_EOL .
    'Reply-To: ' . $replyTo . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

// here we send a massage
mail($to, $subject, $message, $headers);
     
// here we provide feedback
    echo '<p>Thanks for contacting us!</p>
    <p><a href="">BACK</a></p>
    ';  
}
else{//show form 
    echo '
         <form action="" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="Name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" name="Email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Age" name="Age" id="age" required data-validation-required-message="Please enter your age.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <p>Gender</p>
                <input type="radio" name="Gender" value="Male"> Male<br>
  <input type="radio" name="Gender" value="Female"> Female<br>
    <input type="radio" name="Gender" value="Other"> Other<br>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <p>How do you like to travel:</p>
                <input type="radio" name="Style" value="solo"> Solo<br>
  <input type="radio" name="Style" value="couple"> Couple<br>
  <input type="radio" name="Style" value="group"> Group
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <p>Where would you like to travel next:</p>
                <input type="checkbox" name="Location1" value="Hawaii"> Hawaii<br>
<input type="checkbox" name="Location2" value="Miami"> Miami<br>
<input type="checkbox" name="Location3" value="Vancouver"> Vancouver<br>
<input type="checkbox" name="Location4" value="New York"> New York<br>
                <p class="help-block text-danger"></p>
              </div>
            </div>
             <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="Message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
            </div>
          </form>
    ';
}
?>

<?php include 'footer.php';

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

?>







