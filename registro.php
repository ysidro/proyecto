<?php 
	
require "fn/motor.php";
	
if ( eresMortal() || superPoderes() ){		
	
	     header("location:index.php");

    }else{ 

		tmp(template,header);
	subtmp(engine,registro,index);
	tmp(template,footer);  }
 ?> 