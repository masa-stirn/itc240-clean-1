<?php
/*
config.php

Stores configuration data for our application
*/

ob_start(); //prevents header errors

define('DEBUG',TRUE); #we want to see all errors

include 'credentials.php'; //database credentials

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo 'the constant is storing: ' . THIS_PAGE;
//die;

/* 
Bellow is an array of images to be used on contact.php in the function named randomize()
*/

$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';

//loads an array named $planets with images and text for daily rotation

$planets[] = '
<p><img src="images/mercury.gif" style="float:left; margin:0 10px 10px 0" />Mercury concerns communication and short-distance travel. Language, words, speech.</p>
<p>
Through the position of Mercury in your horoscope you can see the areas that will be of most interest to you and stimulate your mental energies.</p>
';

$planets[] = '
<p><img src="images/venus.gif" style="float:left; margin:0 10px 10px 0" />Venus is the planet of love, beauty, art, aesthetics, value, fairness, socializing and relationships.</p>
<p>
The planet Venus astrologically represents the desire to bring together things that compliment each other. There is a strong need to create harmony and balance in the environment and in relationships.</p>
';

$planets[] = '
<p><img src="images/mars.gif" style="float:left; margin:0 10px 10px 0" />Mars represents how we assert ourselves in the world. The warrior archetype. anger, sexuality, war, sports.</p>
</p>
<p>
Through the position of Mars in your horoscope you can see what best motivates someone to go after what they want in life. An understanding of this desire can help you to be the instinctive master of your life.
</p>
';

$planets[] = '
<p><img src="images/jupiter.gif" style="float:left; margin:0 10px 10px 0" />Jupiter is the planet of expansion. International travel. Faith belief, the religious impulse. Higher education. Law, philosophy, ethics.
</p>
<p>
The position of Jupiter in your horoscope chart describes how you grow and evolve in the relative area of your life. The house position of Jupiter represents your desire and your search for meaning in your life.
</p>
';

$planets[] = '
<p><img src="images/saturn.gif" style="float:left; margin:0 10px 10px 0" />Saturn is the planet of restriction. Boundaries, tests, limitations. Manifestation. Hard work, responsibility.
</p>
<p>
The key is knowing how to work with the transits and cycles of Saturn because we do feel the the effects of it for a while since it is in a sign for about 2 1/2 years at a time.</p>
<p>
It completes its first trip around the zodiac by the age of thirty and its second just before the age of sixty. This marks the beginnings of middle and old age. Understanding the transits of Saturn provides a sense of self awareness this is of benefit here.
</p>
';

$planets[] = '
<p><img src="images/uranus.gif" style="float:left; margin:0 10px 10px 0" />Uranus is the planet of disruption, liberation, sudden changes. Revolution Technology.
</p>
<p>
In general all Uranus ruled changes have several things in common: 
They strike like lightning. They tend to turn a person\'s world upside down. They are frequently beyond the control of the person involved.</p>
<p>
The changes are radical and cannot as a rule be reversed e.g. personal achievement, status in society -- public honour or notoriety; accidents; impersonal relationships.
</p>
';

$planets[] = '
<p><img src="images/neptune.gif" style="float:left; margin:0 10px 10px 0" />This is the planet of transcendence. Illusion, delusion, image, spirituality, mysticism.
</p>
<p>
As the planet Neptune continually moves around the zodiac it passes over different areas in your personal birth chart. Since it is such a slow moving planet it will impact you for long periods of time.</p>
<p>
As an area is touched by Neptune it is best to know how that is affecting you. If it is a creative, inspirational impact then it is best to make use of it. On other hand it may point to times when you have to be more careful in your due diligence when it comes to both work and home life.
</p>
';

$planets[] = '
<p><img src="images/pluto.gif" style="float:left; margin:0 10px 10px 0" />Pluto is the planet of death and rebirth. The underworld. Taboos. Eroticism and Shadow. Healing and regeneration.</p>
<p>
The zodiac sign positions of Pluto are considered to possess great historical significance. Fundamental upheavals and drastic transformations in areas of human life and civilization are expected when Pluto travels through the different signs. Pluto passing through each zodiac sign is always considered to produce a change of a permanent nature.</p>
';


// defeault page values
$title = THIS_PAGE;
$siteName = 'Masa Wu ITC240';
$slogan = 'Whatever it is you do, we do it better';
$pageHeader = 'The developer forgot to put a page header';
$subHeader = 'The developer forgot to put a sub header';
$sloganIcon = '';//will be replaced in contact.php by hero icons
$planetContent = '';//will be replaced in contact.php by hero icons


switch(THIS_PAGE){
        
    case 'template.php':
        $title = "My template page";
        $pageHeader = 'Put page ID here';
        $subHeader = 'Put more info about page here';
    break;   
    case 'customer_list.php':
        $title = "A list of customers";
        $pageHeader = 'Our customers';
        $subHeader = "Don't sue us because we're using celebrity photos.";
    break; 
    case 'banned_books_list.php':
        $title = "A list of banned books";
        $pageHeader = 'THE ultimate book list.';
        $subHeader = "Explore the sins.";
    break; 
    case 'contact.php':
        $title = "Please contact us";
        $pageHeader = 'Let us know what we can do for you';
        $subHeader = 'We appreciate your feedback';
        $sloganIcon = randomize($heros);
    break;    
    case 'reservation.php':
        $title = "My reservation page";
        $pageHeader = 'Win your next holiday trip';
        $subHeader = 'Fill out the form and cross your fingers';
    break;  
        case 'daily.php':
        $title = "My coffee page";
        $pageHeader = 'Daily coffee specials';
        $subHeader = 'All our coffee is special :)';
    break;  
        case 'links.php':
        $title = "My links page";
        $pageHeader = 'Discover Seattle museums';
        $subHeader = 'Check out my top 5 museum suggestions';
        $planetContent = rotate($planets);
    break; 
    case 'db-test.php':
        $title = "My database test page";
        $pageHeader = 'Database test';
        $subHeader = 'Check this page to see if your database credentials are correct.';
    break; 
    
};





/**
 * returns a random item from an array sent to it.
 *
 * Uses count of array to determine highest legal random number.
 *
 * Used to show random HTML segments in sidebar, etc.
 *
 * <code>
 * $arr[] = '<img src="mypic1.jpg" />';
 * $arr[] = '<img src="mypic2.jpg" />';
 * $arr[] = '<img src="mypic3.jpg" />';  
 * echo randomize($arr); #will show one of three random images
 * </code>
 *
 * @param array array of HTML strings to display randomly
 * @return string HTML at random index of array
 * @see rotate() 
 * @todo none
 */
function randomize ($arr)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($arr))
	{//Generate random item from array and return it
		return $arr[mt_rand(0, count($arr) - 1)];
	}else{
		return $arr;
	}
}#end randomize()

/**
 * returns a daily item from an array sent to it.
 *
 * Uses count of array to determine highest legal rotated item.
 *
 * Uses day of month and modulus to rotate through daily items in sidebar, etc.
 *
 * <code>
 * $arr[] = '<img src="mypic1.jpg" />';
 * $arr[] = '<img src="mypic2.jpg" />';
 * $arr[] = '<img src="mypic3.jpg" />';  
 * echo rotate($arr); #will return a different image each day for three days
 * </code>
 * 
 * @param array array of HTML strings to display on a daily rotation
 * @return string HTML at specific index of array based on day of month
 * @see rotate() 
 * @todo none
 */
function rotate ($arr)
{//rotate function is called in the right sidebar - an example of rotation (on day of month)
	if(is_array($arr))
	{//Generate item in array using date and modulus of count of the array
		return $arr[((int)date("j")) % count($arr)];
	}else{
		return $arr;
	}
}#end rotate


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}


?>