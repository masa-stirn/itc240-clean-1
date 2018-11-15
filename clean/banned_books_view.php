<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:banned_books_list.php');
}


$sql = "select * from BannedBooks where BookID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Title = stripslashes($row['Title']);
        $Author = stripslashes($row['Author']);
        $YearPublished = stripslashes($row['YearPublished']);
        $Description = stripslashes($row['Description']);
        $title = "Title Page for " . $Title;
        $pageHeader = $Title;
        $subHeader = $Author;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This book does not exist</p>';
}

?>
<?php include 'header.php';?>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Title: <b>' . $Title . '</b> ';
    echo 'Author: <b>' . $Author . '</b> ';
    echo 'Year Published: <b>' . $YearPublished . '</b> ';
    echo 'Description: <b>' . $Description . '</b> ';
    
    echo '<img src="uploads/book' . $id . '.jpg" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="banned_books_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'footer.php';?>