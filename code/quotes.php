<?php
$quotes = array(
	array(
        "quote" => "Holy shit amazing.",
        "from" => "https://twitter.com/paul_irish/status/307636394061332480",
        "author" => "Paul Irish",
        "twitter" => "paul_irish",
        "avatar" => "http://si0.twimg.com/profile_images/2910976341/7d972c32f3882f715ff84a67685e6acf_bigger.jpeg"
    ),
    array(
        "quote" => "When in doubt hack it out. Browserhacks for your dev dome.",
        "from" => "https://twitter.com/petesena/status/308592704575643648",
        "author" => "Peter Sena",
        "twitter" => "petesena",
        "avatar" => "http://si0.twimg.com/profile_images/450947827/by_default_193_bigger.png"
    ),
    array(
        "quote" => "One browser engineer's bug is a web developer's hack.",
        "from" => "https://twitter.com/sgalineau/status/309070517019754496",
        "author" => "Sylvain Galineau",
        "twitter" => "sgalineau",
        "avatar" => "http://si0.twimg.com/profile_images/1350870912/Capture_bigger.PNG"
    ),
    array(
        "quote" => "This is definitely what i need, browser #hacks!",
        "from" => "https://twitter.com/desainersingit/status/309242123977388032",
        "author" => "DesainerSingit",
        "twitter" => "desainersingit",
        "avatar" => "http://si0.twimg.com/profile_images/2754924833/2d941c00c4e3cdc6c9233d5c19146073_bigger.jpeg"
    ),
    array(
        "quote" => "Browser hacks, boom boom!",
        "from" => "https://twitter.com/bluespore/status/308508912909434880",
        "author" => "Sean Bullock",
        "twitter" => "bluespore",
        "avatar" => "http://si0.twimg.com/profile_images/2960573841/634cda97549751f2f7c4d717fc58f08a_bigger.jpeg"
    ),
    array(
        "quote" => "Not sure if sloppy or suave.",
        "from" => "https://twitter.com/jaredsartin/status/307515588736069633",
        "author" => "Jared Sartin",
        "twitter" => "jaredsartin",
        "avatar" => "http://si0.twimg.com/profile_images/3026337630/e45cd8a76716b08c7ff1afb110cf179f_bigger.jpeg"
    ),
    array(
        "quote" => "Will come in very handy. :)",
        "from" => "https://twitter.com/chinchang457/status/305987566061101056",
        "author" => "Kushagra Kour",
        "twitter" => "chinchang457",
        "avatar" => "http://si0.twimg.com/profile_images/596825916/me_and_guy_bigger.jpg"
    ),
    array(
        "quote" => "Sometime it feels like i'm in the hack business and not software development.",
        "from" => "https://twitter.com/nate_weldon/status/306829916274585601",
        "author" => "Nate Weldon",
        "twitter" => "nate_weldon",
        "avatar" => "http://si0.twimg.com/profile_images/2241542154/twittermoose_bigger.jpg"
    ),
    array(
        "quote" => "Browserhacks - must have for all front-end developers",
        "from" => "https://twitter.com/markszymik/status/307490939067305984",
        "author" => "Mark Szymic",
        "twitter" => "markszymik",
        "avatar" => "http://si0.twimg.com/profile_images/1926547041/markszymik_bigger.jpg"
    ),
    array(
        "quote" => "Brilliant! *bookmarked*",
        "from" => "https://twitter.com/ronicadesign/status/308623081126129665",
        "author" => "Veronica Domeier",
        "twitter" => "ronicadesign",
        "avatar" => "http://si0.twimg.com/profile_images/1180225455/smIME_bigger.jpg"
    ),
    array(
        "quote" => "Mega useful browserhacks collected.",
        "from" => "https://twitter.com/therusstler/status/309272969140654080",
        "author" => "Russ Brown",
        "twitter" => "therusstler",
        "avatar" => "http://si0.twimg.com/profile_images/2900031473/5fa6b9bf448b8e7c2108ab4acd526cbe_bigger.jpeg"
    ),
    array(
        "quote" => "Finally a home for browser-specific css/js hacks.",
        "from" => "https://twitter.com/shakeeb/status/307889195052056577",
        "author" => "Shakeeb Rahman",
        "twitter" => "shakeeb",
        "avatar" => "http://si0.twimg.com/profile_images/2991299788/c055e675aad87364ecb564acad88723b_bigger.png"
    ),
    array(
        "quote" => "Fantastic collection of CSS/JS hacks!",
        "from" => "https://twitter.com/ashleycallahan/status/309790286287093761",
        "author" => "Ashley Callaha",
        "twitter" => "ashleycallahan",
        "avatar" => "https://twimg0-a.akamaihd.net/profile_images/2413062007/8gm2yddamxu9m2qrwn08_bigger.jpeg"
    ),
    array(
        "quote" => "Just amazing.",
        "from" => "https://twitter.com/fabien_doiron/status/311100048811368449",
        "author" => "Fabien Doiron",
        "twitter" => "fabien_doiron",
        "avatar" => "https://si0.twimg.com/profile_images/2908074205/9056671919f7f52ba18a8b33a1083f47_bigger.png"
    ),
    array(
        "quote" => "Browserhacks lets you sleep at night. Or keep your hair. Or both.",
        "from" => "https://twitter.com/slashlv/status/311316552966348800",
        "author" => "Luke Van Deman",
        "twitter" => "slashlv",
        "avatar" => "https://si0.twimg.com/profile_images/27264932/favicon_bigger.jpg"
    )
);

shuffle($quotes);
echo json_encode($quotes);

/*
$dump = '';
$picks = array_rand($quotes, 5); //Rand 5 quotes
for($i = 0; $i < 5; $i++) {
    $dump .= "<li 
    		data-quote=\""  . $quotes[$picks[$i]]['quote']  . "\" 
    		data-author=\"" . $quotes[$picks[$i]]['author'] . "\" 
    		data-link=\"" 	. $quotes[$picks[$i]]['from'] 	. "\">";
    $dump .= "<div 
    		class=\"quote-authors__avatar\">";
    $dump .= "<img 
            width=\"73\"
            height=\"73\"
    		src=\"img/avatar/" . $quotes[$picks[$i]]['twitter'] . ".jpg\" 
    		alt=\"" . $quotes[$picks[$i]]['author'] . "'s Twitter Avatar\">";
    $dump .= "</div>";
    $dump .= "<a 
   			href=\"http://twitter.com/" . $quotes[$picks[$i]]['twitter'] . "\" 
    		class=\"quote-authors__name\">" . $quotes[$picks[$i]]['author'] . "</a>";
    $dump .= "</li>";
}


$dump = '';
$picks = array_rand($quotes, 5);
for($i = 0; $i < 5; $i++) {
	$dump .= "<li data-quote=\"" . $quotes[$picks[$i]]['quote'] . "\" data-author=\"" . $quotes[$picks[$i]]['author'] . "\" data-link=\"" . $quotes[$picks[$i]]['from'] . "\">";
    $dump .= "<div class=\"quote-authors__avatar\">";
    $dump .= "<img src=\"" . $quotes[$picks[$i]]['avatar'] . "\" alt=\"" . $quotes[$picks[$i]]['author'] . "'s Twitter Avatar\">";
    $dump .= "</div>";
    $dump .= "<a href=\"http://twitter.com/" . $quotes[$picks[$i]]['twitter'] . "\" class=\"quote-authors__name\">" . $quotes[$picks[$i]]['author'] . "</a>";
    $dump .= "</li>";
}

echo $dump;
*/

?>