# PHP-sign-up-page
this is a sign up page made with php, the code is semi-injection proof. as i have filtered the inputs, and prevented cross site scripting using the"htmlspecialchars" function. still i am not an expert but it is better than leaving all the vulnerable points exposed, cybersecurity is still to be studied. the app i used to host the site and the server is XAMPP.
so look the stuff is a bit messy but its explainable, 
1ST: line 11  in DB.php ### bec port 3306 on my pc is taken i have changed it in the DB.php file to 3307 and tweaked a bit in the json files to also change it in XAMPP, if this port is empty and not taken up in ur pc u should revert it in the DB.php file to 3306
 2ND: the variable conn is the name I chose for the server connection you may change the name if you want but remeber to change it in the index.php file as well. 
 3RD: It shows squiglly lines under the $conn but don't worry it works i don't know how but u can ask chatgpt.
enjoy
