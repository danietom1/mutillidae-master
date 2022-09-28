<style>
	a{
		font-weight: bold;
	}
</style>

<?php
	/* Check if required software is installed. Issue warning if not. */
 
	if (!$RequiredSoftwareHandler->isPHPCurlIsInstalled()){
		echo $RequiredSoftwareHandler->getNoCurlAdviceBasedOnOperatingSystem();
	}// end if

	if (!$RequiredSoftwareHandler->isPHPJSONIsInstalled()){
		echo $RequiredSoftwareHandler->getNoJSONAdviceBasedOnOperatingSystem();
	}// end if
?>

<div style=" width: 750px; overflow: hidden;margin: auto;">
<?php include_once (__SITE_ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>
<span style="float: right">
	<img src="images/arrow-45-degree-left-up.png" style="margin-right: 5px" />
	<span class="label" style="float: right;">TIP:&nbsp;
	<span style="float: right; text-align: center;">Click 
	<span style="color: blue;font-style: italic;">Hint and Videos</span><br/>on each page</span></span>
</span>
</div>

<table style="margin:auto;margin-top:5px;">
 	<tr>
	    <td>
			<a title="Usage Instructions" href="./index.php?page=documentation/usage-instructions.php">
				<img alt="What Should I Do?" align="middle" src="./images/question-mark-40-612.png" style="width: 50px;"/>
				What Should I Do?
			</a>
		</td>
		<td>
			<?php include_once './includes/help-button.inc';?>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			<a href="./index.php?page=./documentation/vulnerabilities.php">
				<img alt="Help" align="middle" src="./images/vulnerability.png" style="width: 60px;" />
				Listing of vulnerabilities
			</a>
		</td>
		<td>
			<a href="http://www.youtube.com/user/webpwnized" target="_blank">
			<img align="middle" alt="Webpwnized YouTube Channel" src="./images/video-marketing.png" style="width: 50px;" />
				Video Tutorials
			</a>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>

		<td>
			<a href="https://twitter.com/webpwnized" target="_blank">
				<img align="middle" alt="Webpwnized Twitter Channel" src="./images/twitter.png" style="width: 50px;" />
				Release Announcements
			</a>
		</td>
		<td class="label" title="Latest Version">
			<img alt="Latest Version" align="middle" src="./images/system-update.png" style="width: 50px;"/>
			<a title="Latest Version" href="https://github.com/webpwnized/mutillidae" target="_blank">Latest Version</a>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			<a href="documentation/mutillidae-test-scripts.txt" target="_blank">
				<img alt="Helpful hints and scripts" align="middle" src="./images/user-guide.png" style="width: 55px;"/>
				Helpful hints and scripts
			</a>
		</td>
		<td class="label" title="Mutillidae LDIF File">
			<a href="configuration/openldap/mutillidae.ldif" target="_blank">
				<img align="middle" alt="Mutillidae LDIF File" src="./images/database.png" style="width: 50px;" />
				Mutillidae LDIF File
			</a>
		</td>
	</tr>
</table>
