<html>
	<head>
		<link rel="STYLESHEET" type="text/css" href="style.css" />
		<title>Web BZFS Manager - Setup Guide</title>
	</head>
	<body>
		<center>
			<div style="width: 600px; border: 1px solid black; padding: 4px; text-align: left;">
				<center><b><u>Web BZFS Manager - Setup Guide</u></b></center><br/><br/>
				This guide will lead you through the setup and installation of Web BZFS Manager, a revolutionary BZFS managing web application.<br/>
				<br/>
				This page will lead you through the setup process step by step.<br/>
				Before beginning with step 1 we suppose you to already have the full Web BZFS Manager loaded up to the directory accessible from the web (e.g. /var/www).
				We recommend installation to an non-web-rootlevel directory (e.g. /var/www/wbzfsm).
				<ol>
					<li>Creating User
						<ol>
							<li>Installing sudo</li>
						</ol>
					</li>
					<li>Editing /etc/sudoers</li>
					<li>Installing BZFS</li>
					<li>Making BZFS accessible</li>
					<!-- <li><small>( Upload WBZFSM )</small></li> -->
					<li>Setup WBZFSM</li>
				</ol>
				<br/><br/>
				<div style="padding-left: 10px; border: 0px solid white; border-left: 1px solid #777;">
					<b>Before you start</b><br/>
					<u>Requirements for installation:</u>
					<ul>
						<li>Full root access to your server-machine (e.g. SSH or Telnet)</li>
					</ul>
					<u>What WBZFSM will run with and what it needs:</u>
					<ul>
						<li>BZFlag 2.0.XX Server (BZFS)</li>
						<li>Linux operating systems</li>
						<li>Apache2 or newer with PHP4 or newer</li>
					</ul>
					<u>What WBZFSM will definitely NOT run with:</u>
					<ul>
						<li>Windows</li>
						<li>PHP3 or older</li>
						<li>BZFS 2.99.x (or even 3.x)</li>
						<li>BZFS 1.x</li>
					</ul>
				</div>
				<br/><br/>
				<b><u>Step 1: Creating User</u></b> (required)<br/><br/>
				Run in shell (e.g. bash) on the desired machine:
				<pre style="border: 1px solid #999;">sudo adduser bzfs</pre>
				
				This asks you for several informations, you do not need to give them except the password!
				You maybe remind the bzfs-user-password for later...<br/><br/>
				If this does not work, <i>sudo</i> is not installed!<br/>
				You need <i>sudo</i> for WBZFSM to work properly!<br/><br/>
				<div style="padding-left: 10px; border: 0px solid white; border-left: 1px solid #777;">
					<b><u>Step 1.2: Installing sudo</u></b> (required, if not already done)<br/><br/>
					Log in as root and run in shell (mostly debian):
					<pre style="border: 1px solid #999;">apt-get install sudo</pre>
					or red-hat/fedora based:
					<pre style="border: 1px solid #999;">yum -i sudo</pre>
					or you can compile from source but we will not show how to do that here.<br/>
					Sudo should now be installed!
				</div><br/><br/>
				<b><u>Step 2: Editing /etc/sudoers</u></b> (required)<br/><br/>
				All manuals say to use <i>visudo</i> to do that, do so if you know how to use Vi!<br/>
				Otherwise use any other editor you can work with (e.g. nano)<br/><br/>
				So, if ure abled to use Vi, do:
				<pre style="border: 1px solid #999;">sudo visudo</pre>
				if not, do
				<pre style="border: 1px solid #999;">sudo nano /etc/sudoers</pre>
				or similar.<br/>
				<br/>				
				Add the following line to the end of the file, do not change anything else!		
				<pre style="border: 1px solid #999;">www-data ALL= (bzfs) NOPASSWD: /usr/games/bzfs, /bin/kill</pre>	
				if your apache2-user (runner, see apache configuration)	is not <i>www-data</i> change it to the user in your case.<br/>
				<br/>
				<b><u>Step 3: Installing BZFS</u></b> (required, if not already done)<br/><br/>
				Debian users may do:
				<pre style="border: 1px solid #999;">sudo apt-get install bzflag-server</pre>
				or red-hat/fedora users:
				<pre style="border: 1px solid #999;">yum -i bzflag-server</pre>
				of course you can install/compile from source, too!<br/>
				<br/>
				<b><u>Step 4: Making BZFS accessible to Web BZFS Manager</u></b> (required)<br/><br/>
				WBZFSM needs the BZFS-binary to be in /usr/games.<br/>
				If you installed on a Debian based system it should be already there.<br/><br/>
				If you do not know where your bzfs-binary is you can find it out by running this command
				<pre style="border: 1px solid #999;">find /usr * | grep bzfs</pre>
				This will take a while ... (2 to 10 mintues, depending on system)<br/>
				and then creating a link to /usr/games, in the example we create /usr/games first (you can leave this out if it exists)
				<pre style="border: 1px solid #999;">sudo mkdir /usr/games
sudo ln -s /path/to/your/bzfs /usr/games/bzfs
sudo chmod +x /usr/games/bzfs</pre>
				Web BZFS Manager should now be abled to use BZFS!<br/><br/>
				<b><u>Step 5: Setup Web BZFS Manager</u></b> (required)<br/><br/>
				First you should edit the <i>user_conf.php</i> after your needs.<br/>
				In there you will find the variable <i>$user_suffix</i>, this has to be another one for each WBZFSM you install. In addition and equaly named file has to exist in WBZFSM main directory.
				That means: if you set <i>$user_suffix</i> to be <i>George</i> you need to create a file named <i>George</i>, too! You may not write anything into this file.<br/>
				<span style="color: red;">If this does not fit, you will not be abled to list running BZFS or stop BZFS'!</span>
				<br/><br/>
				Then you can upload your BZFlag files to the directories to use them with Web BZFS Manager:<br/>
				Maps to /maps<br/>
				User databases to /udbs<br/>
				Group databases to /gdbs<br/>
				Ban databases to /bdbs<br/>
				Report files to /reports<br/>
				Plugins to /plugins<br/><br/>
				to use your old configuration files you have to remove any comments and replace all line breaks with a space character. Then put them to /cfgs<br/>
				<br/>
				To change user and password of the login, you need to use <i>htpasswd</i><br/>
				The following line shows you an example of how to do that.
				<pre style="border: 1px solid #999;">cd /your/path/to/wbzfsm
htpasswd -b .htusers USERNAME PASSWORD</pre>
				Then you would log in with USERNAME as username and PASSWORD as password.<br/>
				The defaults are:<br/>
				Username: user<br/>
				Password: pass<br/>
				<br/><br/>
				<center>
				<big><b>Congratulations!</b></big><br/>
				You are done!<br/>
				You can now start using your copy of Web BZFS Manager!<br/>
				&raquo; <a href="index.php">Start using WBZFSM now!</a>
				</center>
			</div>
		</center>
	</body>
</html>