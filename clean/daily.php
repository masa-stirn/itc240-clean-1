<?php include 'config.php'?>
<?php 
    
    
    /*
    
if day is passed via GET, show $day's coffee
if its today show $today's coffee
place a link to show today's coffee(if on another day)
    */
    
    if(isset($_GET['day'])){//if day is passed via GET, show $day's coffee
        $today = $_GET['day'];
    }else{//if its today show $today's coffee
       $today = date('l'); 
    }

// switch

switch($today){
    case 'Monday':
    $coffee = "Pumpkin spice";
    $color = "#F5B44B";
    $img = "pumpkin-spice-coffee.jpg";
    $alt = "yummy pumpkin spice coffee";   
    break;
    
    case 'Tuesday':
    $coffee = "Creamy latte";
    $color = "#29446E";
    $img = "creamy-latte.jpg";
    $alt = "yummy creamy latte coffee";   
    break;
       
    case 'Wednesday':
    $coffee = "Minty sip";
    $color = "#319A7A";
    $img = "mint-chocolate-cappuchino.jpg";
    $alt = "yummy mint and chocolate coffee";   
    break;
       
    case 'Thursday':
    $coffee = "Espresso mind";
    $color = "#6E653A";
    $img = "espresso.jpg";
    $alt = "yummy espresso coffee";   
    break;
        
    case 'Friday':
    $coffee = "Ice latte";
    $color = "#63296E";
    $img = "icey-latte.jpg";
    $alt = "yummy ice latte coffee";
    break;
    
    case 'Saturday':
    $coffee = "Drip is hip";
    $color = "#45BADD";
    $img = "drip-coffee.jpg";
    $alt = "yummy drip coffee coffee";   
    break;
    
    case 'Sunday':
    $coffee = "Rose Espresso";
    $color = "#BF7171";
    $img = "rose-coffee.jpg";
    $alt = "yummy rose coffee";   
    break;
}
  //  $today = date('l');
?>

<?php include 'header.php'?>

<p><?=$today?>'s special is <span style="color:<? echo $color; ?>"><?=$coffee?></span></p>  
<img style="width:40vw" src="images/<?=$img?>" alt="<?=$alt?>">
<p>Click bellow to find out what awesome flavors we have for each day of the week!</p>  
<p style="display:inline-block; padding:5px;"><a href="daily.php?day=Sunday">Sunday</a></p>
<p style="display:inline-block; padding:5px;"><a href="daily.php?day=Monday">Monday</a></p>
<p style="display:inline-block; padding:5px;"><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p style="display:inline-block; padding:5px;"><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p style="display:inline-block; padding:5px;"><a href="daily.php?day=Thursday">Thursday</a></p>
<p style="display:inline-block; padding:5px;"><a href="daily.php?day=Saturday">Saturday</a></p>

<?php include 'footer.php'?>