<center>

<?php 
$current_page_name=basename($_SERVER['PHP_SELF']);

if ($current_page_name=="unified_profile.php#dashboard") echo 'Dashboard | ';
else
echo '<a href="unified_profile.php#dashboard" title="" target="">Dashboard</a> | ';

if ($current_page_name=="inbox.php") echo 'Inbox | ';
else
echo '<a href="inbox.php" title="Messages" target="">Inbox</a> | ';

if ($current_page_name=="your_meetings.php") echo 'Your meetings | ';
else
echo '<a href="your_meetings.php" title="Your meetings" target="">Your meetings</a> | ';

if ($current_page_name=="your_locations.php") echo 'Your locations | ';
else
echo '<a href="your_locations.php" title="" target="">Your locations</a> | ';

if ($current_page_name=="unified_profile.php#profile") echo 'Profile | ';
else
echo '<a href="unified_profile.php#profile" title="" target="">Profile</a> | ';

if ($current_page_name=="unified_profile.php#account") echo 'Account';
else
echo '<a href="unified_profile.php#account" title="" target="">Account</a>';
?>

</center>
