<?php
// Abstract Classes are good when you want the Ease in Management of an Object
// but don't need to balance an Object in memory. This is the solution to procedural
// code structures. 

// Base Class Layout (Used to create our Global Layout Entities)

abstract class Layout{
	abstract function compose($type, $title = null, $meta_keywords = null, $meta_description = null, $page = null);
	abstract function foundation($type);
}
// create a simple to use, diverse Header Class
class Header extends Layout {
	
	function compose($type, $title = null, $meta_keywords = null,$meta_description = null, $page = null){
		// switch to the Header Type
		// convert the Type to String
		$head = "";
		switch( (string) $type){
			case "main":
			$head = "<!DOCTYPE html><html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-US\" lang=\"en-US\">".
			$head .= "<head>";
			$head .= "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />";
			$head .= "<meta name=\"viewport\" content=\"width=1024\" />";
			$head .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />";
			$head .= "<title>".$title."</title>";
			$head .= "<meta name=\"Keywords\" content=\"".$meta_keywords."\" />";
			$head .= "<meta name=\"Description\" content=\"".$meta_description."\" />";
			$head .= "<script type='text/javascript' language='javascript' src='/js/jquery.js'></script>";
			$head .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\"/>";
			// yes, we can use this to easily update content in our views!
			$head .= "</head><body id='".$page."'>";
			break;
			
			default:
			$head = "<!DOCTYPE html><html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-US\" lang=\"en-US\">".
			$head .= "<head>";
			$head .= "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />";
			$head .= "<meta name=\"viewport\" content=\"width=1024\" />";
			$head .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />";
			$head .= "<title>".$title."</title>";
			$head .= "<meta name=\"Keywords\" content=\"".$meta_keywords."\" />";
			$head .= "<meta name=\"Description\" content=\"".$meta_description."\" />";
			$head .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/default.css\"/>";
			$head .= "</head><body id='".$page."'";
			break;
			
		}
		return $head;
	}
	
	function foundation($type){}
}

// create a simple to use, diverse Footer Class
class Footer extends Layout{
	function compose($type, $title = null, $meta_keywords = null,$meta_description = null, $page = null){}
	
	function foundation($type){
		$footer = '';
		switch( (string) $type){
			case "main":
				$footer = "<div class='footer'><ul><li><a href='#' class='glbLink'>Home</a></li></ul></div><script type='text/javascript' language='javascript'>var google = \"something from google\";</script></body></html>";
			break;
			
			default:
				$footer = "<div class='footer'>Boring Footer</div></body></html>";
			break;
		}
		return $footer;
	}
}
?>