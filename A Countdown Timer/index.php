<?php
//target time
$target = mktime(12, 0, 0, 7, 20, 2025);

//current date
$today = time();

//difference between target date and today
$difference = ($target - $today);

/*i'll be using days so need to divide by 86,400 (the number of seconds in a day)
*/
$days = (int) ($difference / 86400);

print "Event will occur in $days days";
