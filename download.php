<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2006-05-29
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Download Epsilon";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<!-- Main part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1>$pageTitle</h1>
				</td>
				<td align="right">
					<img alt="Epsilon Logo" src="resources/epsilonlogo.png" valign="top" />
				</td>
			</tr>
		</table>

		<h3>Download</h3>
		
		There are three options for using Epsilon: download a complete bundle
		containing everything required, download the plug-ins only,
		and working directly with the source code from CVS.
		
		<p>
			<a href="http://www-users.cs.york.ac.uk/~dkolovos/epsilon/bundles/bundle-win.php">Complete Bundle (for Win32 only)</a>
			This bundle contains Eclipse 3.2.1, EMF and the Epsilon plugins. It also contains
			examples for each language in Epsilon. To run, simply download and unzip the bundle
			and run eclipse.exe.
		</p>
		
		<p>
			<a href="plugins.zip">Plugins</a>:
			This archive contains the Epsilon plugins only. Please refer to the instructions provided
			<a href="doc/PluginInstallation.pdf"> for adding the plugins to your Eclipse installation.
		</p>
		
		<p>
			<a href="doc/EpsilonCVS.pdf">Source code</a>:
			This document describes how you can set up a local copy of the source code of Epsilon
			on your machine.
		</p>
		
		
		<hr class="clearer" />

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
