<!-- 
   This is an example of running TightVNC Java viewer 1.5 using automatic
   SSH tunneling.  This example would make the Java applet connect to
   192.168.0.2 via SSH and then connect from that SSH host to localhost
   with TightVNC (port 5901).  Note that all traffic from the viewer to
   192.168.0.2 will be encrypted with SSH.
-->
<?php

include_once "../includes/functions.php";


echo '<HTML>';
echo '<TITLE>TightVNC Desktop Viewer</TITLE>';
echo '<BODY>';

if (isset($_GET["vnc"])){
	echo '<APPLET ARCHIVE="TightVncViewer.jar" CODE="com.tightvnc.vncviewer.VncViewer" WIDTH="1" HEIGHT="1">';
	echo '<PARAM NAME="SOCKETFACTORY" VALUE="com.tightvnc.vncviewer.SshTunneledSocketFactory">';
	echo '<PARAM NAME="SSHHOST" VALUE="'.sanitize($_GET["vnc"]).'">';
	echo '<PARAM NAME="HOST" VALUE="'.sanitize($_GET["vnc"]).'">';
	echo '<PARAM NAME="PORT" VALUE="5900">';
	echo '<PARAM NAME="Open New Window" VALUE="yes">';
	echo '</APPLET>';
} else {
	echo 'Please enter host.';
}
echo '</BODY></HTML>';
?>