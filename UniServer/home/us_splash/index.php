<?php
$version="";

$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);   // Get path
$file="$root\uni_con\config_tracker.ini" ;       // Name and path of configuration file

if (file_exists($file) && is_readable($file)){   // Check file
  $settings=parse_ini_file($file,true);          // parse file into an array 
  $version=$settings["VERSION"]["us_version"];   // get parameter
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>The Uniform Server </title>
<meta name="Description" content="The Uniform Server 8.8.2-Coral." />
<meta name="Keywords" content="The Uniform Server, MPG, Mike, Ric, UniServer, Olajide ,BobS " />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

<div id="wrap">


  <div id="header">
     <a href="http://www.uniformserver.com"><img src="images/logo.png" align="left" alt="The Uniform Server" /></a>

       <div id="header_txt" >
         <div style="position:absolute;text-align:left;">

      Coral - <?php print $version; ?><br />
      Apache 2.4.4 VC10 <br />
      MySQL 5.5.31 <br />
      PHP 5.4.15 <br />
      UniController <br />

         </div>
       </div>
  </div>

  <div id="content">
    <h2>Welcome to The Uniform Server</h2>
    <p>Welcome to The Uniform Server default start splash page. This page and every other file are being served by Apache. Information can be found in folder UniServer\docs. Additional support for 8-Coral can be found on the <a target="_1" href="http://wiki.uniformserver.com/">Wiki</a>.</p>
    <p>&nbsp;</p>
    <h2>Server Specifications</h2>
  <table>
   <tr valign="top">
   <td>
    <ul>
      <li> Apache 2.4.4 VC10 - OpenSSl 0.9.8y </li>
      <li> MySQL 5.5.31-community</li>
      <li> PHP 5.4.15</li>
      <li> phpMyAdmin  4.0.2</li>
      <li> eAccelerator 1.0-git42067ac7e2</li>
      <li> APC 3.1.14 </li>
      <li> Zend OpCache 7.0.1</li>
      <li> Xdebug 2.2.3 </li>
    </ul>
   </td>
   <td>
     &nbsp;&nbsp;&nbsp;&nbsp;
   </td>
   <td>
    <ul>
      <li> UniController</li>
      <li> OpenSSL 1.0.1c</li>
      <li> Go-Pear 1.1.6 </li>
      <li> msmtp 1.4.31 - Mail client for PHP  </li>
      <li> Cron - Scheduler</li>
      <li> DtDNS - IP address updater</li>
      <li> db_backup - Database back-up</li>
      <li> ActivePerl via Installer</li>
    </ul>
   </td>
   </tr>
  </table>
  </div>


  <div id="divider"> <a target="_1" href="http://www.uniformserver.com">The Uniform Server</a> | <a target="_1" href="http://sourceforge.net/projects/miniserver/files/">Download</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/Category:Uniform_Server_8-Coral">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com">Support Forum</a> </div>

  <div id="content">
  <br>
  <p>The Uniform Server is a WAMP package that allows you to run a server on any XP,
 Vista or W7 Windows OS based computer. It is small and quick to download, and can be
 easily moved around. It also can be setup and used as a production/live server.
 Developers can use The Uniform Server to test their applications which require PHP,
 MySQL and the Apache HTTPd Server.</p>

  <p>&nbsp;</p>
  </div>

  <div id="divider">Developed By <a href="http://www.uniformserver.com/">The Uniform Server Development Team</a></div>
</div>
</div>
</body>
</html>
