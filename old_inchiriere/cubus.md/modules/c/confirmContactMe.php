<?php
///////////////////////////////////////////////////////////////////////////////////////
// CUBUS Translation                                             http://www.cubus.md //
///////////////////////////////////////////////////////////////////////////////////////
// Please read the license.txt file before using / modifying this software           //
// Original author:         CUBUS Tranlsation, CUBUS - info@cubus.md                 //
// Last modification date:  07.07.2008                                               //
// Version:                 CUBUS  0.3b                                              //
//                                                                                   //
// (C) 2007  CUBUS Translation - All rights reserved                                 //
///////////////////////////////////////////////////////////////////////////////////////


	/* Check Structure Availability */
	if (!defined("CORE_STRAP")) die("Out of structure call");
	
	$tpl = new template;
	$tpl -> Load("confirmContactMe");
	$tpl -> GetObjects();
	
	
	
	$tpl -> CleanZones();
	$tpl -> Flush();

?>