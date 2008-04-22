<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Concerto Support - <?=$this->getTitle()?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?= ADMIN_BASE_URL ?>css/docs.css" />
</head>

<body>

<div id="left_pane"><div id="left_pane_padding">
  <!-- BEGIN Sidebar -->
  <br /><center><a href="<?=ADMIN_URL.'/'.$this->controller.'/'.$this->action.'/'.$this->category['path']?>">
  <img src="<?= ADMIN_BASE_URL ?>images/conc_support.gif" alt="Concerto Support" style="" border="0" />
  </a></center>
  <h1><a href="<?= ADMIN_URL ?>">Control Panel</a></h1>
  <div id="toc">
    <ol>
<?php
if(is_array($this->menu_links))
     foreach($this->menu_links as $ar)
        echo "<li><a href=\"$ar[url]\">$ar[name]</a></li>";
?>
    </ol>
  </div>
  <!-- END Sidebar -->
  <div style="clear:both;"></div>
</div></div>

<div id="right_pane">
  <div id="header">
    <div id="header_padding">
    </div>
  </div>

  <div id="content_header">
    <h1><?=$this->getTitle()?></h1>
    <h2><?=$this->getSubtitle()?></h2>
  </div>

  <div id="maincontent">
  <!-- main content begins here -->
<?php renderMessages() ?>
<?php $this->render(); ?>

  <!-- main content ends here -->

<p><a href="#">Return to Top</a></p>
  </div>
</div>

  <div id="footer_gutter">&nbsp;</div>
  <div id="footer">
    <div id="footer_padding">
      <p>Copyright &copy; 2008 Student Senate Web Technologies Group</p>
      <p>Contact Support: <a href="mailto:concerto@union.rpi.edu">concerto@union.rpi.edu</a></p>
    </div>
  </div>
</body>
</html>


<?php
function renderMessage($type, $msg)
{
   switch($type)
   {
      case "error": $col='red'; break;
      case "warn": $col='yellow'; break;
      case "stat": $col='green'; break;
      case "info": default: $col='#069';$text='white'; break;
   }
   return '<div style="width:100%;background-color:'.$col.';color:'.$text.'"><p style="padding:3px">'.
      $msg."</p></div>\n";
}
?>