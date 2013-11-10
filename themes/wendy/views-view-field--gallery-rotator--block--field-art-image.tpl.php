<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/**
* Image module hard codes widtha and height into slideshow images.  This temlate pulls the 
* width and height settings out of the <img> tag so that the image can be made resizable for 
* this responsive theme.
*/
?>
<?php

$delete_str = 'width="1200"';
$delete_len = 25;
$delete_pos = strpos($output, $delete_str);
if ($delete_pos)
  $newstr = substr($output, 0, $delete_pos).substr($output, ($delete_pos + $delete_len));
else 
  $newstr = $output;
?>

<?php print $newstr; ?> 