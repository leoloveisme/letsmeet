<center>

<?php 
$current_page_name=basename($_SERVER['PHP_SELF']);

if ($current_page_name=="dashboard.php") echo 'Dashboard | ';
else
echo '<a href="dashboard.php" title="" target="">Dashboard</a> | ';

if ($current_page_name=="inbox.php") echo 'Inbox | ';
else
echo '<a href="inbox.php" title="Messages" target="">Inbox</a> | ';

if ($current_page_name=="your_meetings.php") echo 'Your meetings | ';
else
echo '<a href="your_meetings.php" title="Your meetings" target="">Your meetings</a> | ';

if ($current_page_name=="your_locations.php") echo 'Your locations | ';
else
echo '<a href="your_locations.php" title="" target="">Your locations</a> | ';

if ($current_page_name=="your_groups.php") echo 'Your groups | ';
else
echo '<a href="your_groups.php" title="" target="">Your Groups</a> | ';

if ($current_page_name=="profile.php") echo 'Profile | ';
else
echo '<a href="profile.php" title="" target="">Profile</a> | ';

if ($current_page_name=="account.php") echo 'Account';
else
echo '<a href="account.php" title="" target="">Account</a>';
?>

</center>
