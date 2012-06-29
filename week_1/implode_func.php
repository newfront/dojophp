<?php
// implode array to string
$arr = array("HELLO","chores","data","people");
$imp = strtolower(eregi_replace(',',' ',implode(',',$arr)));
//$strip_comma = eregi_replace(',',' ',$imp);
echo $imp;
?>