<?php
///////////////////////////////////////////////////////////////////////////////////////
// CUBUS Translation                                             http://www.cubus.md //
///////////////////////////////////////////////////////////////////////////////////////
// Please read the license.txt file before using / modifying this software           //
// Original author:         CUBUS Tranlsation, CUBUS - info@cubus.md                 //
// Last modification date:  19.01.2008                                               //
// Version:                 CUBUS  0.3b                                              //
//                                                                                   //
// (C) 2007-2009  CUBUS Translation - All rights reserved                            //
///////////////////////////////////////////////////////////////////////////////////////


	/* Check Structure Availability */
	if (!defined("CORE_STRAP")) die("Out of structure call");
	
 	$tpl = new template;
	$tpl -> Load("newsletter");
	$tpl -> GetObjects(); 
		
		$tpl->Zone("contactData", "enabled"); 
		
			if ( $_GET['s'] == '' )   $tpl->Zone("form",      "enabled"); 
		elseif ( $_GET['s'] == 'ok' ) $tpl->Zone("okmess",    "enabled"); 
		else                          $tpl->Zone("nonokmess", "enabled"); 
    
	$tpl -> CleanZones();
	$tpl -> Flush();

?>