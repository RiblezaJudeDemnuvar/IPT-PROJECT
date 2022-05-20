<?php
	$name = "jason";
	$xml=file_get_contents('data.xml');
	$xml_parse=simplexml_load_string($xml);
	 //echo"<pre>";print_r($xml_parse);echo"</pre>";

	 foreach($xml_parse as$k=>$v)
{
	$uname = $v->username;
   //echo "<pre>";print_r($v);echo"</pre>";
	if ($name == $uname) {
		echo "invalid";
	}
	break;
	
}
         

?>