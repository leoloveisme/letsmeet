<html>
<title>Let's meet</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta name="keywords" content="Let's meet, meet, meet-up, meet up, meetings, meeting, conversations, conversation, communication, communications" /> 
<meta name="description" content="Let's meet - a platform for fabulous meet ups and conversations in your city" /> 
<meta name="generator" content="LAD Software & Services UG" />
</head>

<body>


<?php include ("header.php"); ?>

<br><br><br><br>

<?php include ("dashboard_menu.php"); ?>

<br><br><br><br>
<table width=100% border=0>
<tr>
<td width=20% valign=top>
<center>
<a href="#profile" title=""target=""><img style="width=auto; height=auto; max-width=250; max-height=250;" src="images/avatar.jpg"></a>
</center>
<br><br>
<a href="#dashboard" title="" target="">Dashboard</a>
<br><br>
<a href="#profile" title="" target="">Profile</a>
<br><br>
<a href="#personal_description" title="" target="">Personal description</a>
<br><br>
<a href="#account" title="" target="">Account</a>
<br><br>
<a href="#privacy" title="" target="">Privacy</a>
<br><br>
<a href="#notifications" title="" target="">Notifications</a>
<br><br>
<a href="#verifications" title="" target="">Verifications</a>
<br><br>
<a href="#reviews" title="" target="">Reviews</a>
</td>
<td width=10% valign=top></td>
<td width=50% valign=top>
<font color="gray">// The data visible only by the account owner</font>
<a name="dashboard"></a><h2>Dashboard</h2>
<strong>Alerts | Reminders</strong> 
<br><br>
List of alerts and reminders
<br><br>
<strong><a href="inbox.php" title="" target="">Messages</a></strong>
<br><br>
List of new (unread) messages
<br><br>
<strong>Your Meetings</strong>
<br><br>
List of meetings
<br><br>
<strong>Your Locations</strong>
<br><br>
List of locations
<br><br>
<a name="settings"></a><h2>Settings</h2>
<a name="privacy"></a><strong>Privacy</strong>
<br><br>
Right now your profile is visible to (state of the profile's visibility: everyone, friends, none)
<br><br>
I can be contacted by: (everyone, friends, none)
<br><br>
Let others share my profile Yes
<br><br>
<?php include ("notifications.php"); ?>
<a name="verifications"></a><strong>Verifications</strong>
<br><br>
E-Mail 1 Verified
<br><br>
E-mail 2 unverified <button>Verify</button>
<br><br>
E-mail 3 unverified E-mail verification was sent to you, please verify <button>Resend</button> 
<br>
Please click the verification link in the e-mail or enter the verification code <input> <button>Verify</button>
<br><br>
Mobile +49 172 1234567890 Verified
<br><br>
Mobile +91 1234567890 unverified <button>Verify</button>
<br><br>
Mobile +91 1029384756 unverified Verification code was sent to you per sms <button>Resend</button> 
<br>
Please, enter the code <input> <button>Verify</button>
<br><br>
Address 1 Verified
<br><br>
Address 2 unverified <button>Verify</button>
<br><br>
E-mail 3 unverified Verification letter was sent to you <button>Resend</button> 
<br>
Please, enter the code from the letter <input> <button>Verify</button>
<br><br>
<hr><br>
Time zone 
<select>
<option>Berlin</option>
<option>Moscow</option>
<option>New Dehli</option>
<option>Beijing</option>
<option>. . .</option>
</select>
<br><br>
<a name=account><h2>Account</h2>
Account ID: 123456789
<br><br>
<?php include ("change_password.php"); ?>
<br><br>
<font color="gray">// The data visible only by the account owner</font>
<br><br>
<a name="profile"></a><h2>Profile</h2>
as seen as by 
<SELECT NAME="profile">
<OPTION SELECTED VALUE="">Friends</OPTION>
<OPTION>Others</OPTION>
</SELECT>
<br><br>
<a name="personal_description"></a><strong>Personal_description</strong>
<br><br>
Hi, I'm Navine
<br><br>
Self description output
<br><br>
<a name="friends"></a><strong>Friends</strong>
<br><br>
<a name="interests"></a><strong>Interests</strong>
<br><br>
<a name="languages"></a><strong>Languages</strong>
<br><br>
English, 中文
<br><br>
<a name="current_projects"></a><strong>Current projects</strong>
<br><br>
<a name="current_challenges"></a><strong>Current challenges</strong>
<br><br>
<a name="reviews"></a><strong>Reviews</strong>
<br><br>
<a name="references"></a><strong>References</strong>
<br><br>

Invite your friends to join this platform. The more the merrier. <button>Invite now</button>
</td>
<td width=20% valign=top></td>
</tr>
</table>

<br><br><br><br>
<hr width=100%>

<br>
<?php include ("footer.php"); ?>

</body>
</html>
