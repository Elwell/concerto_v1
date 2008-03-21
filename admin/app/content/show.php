<p><a href="<?echo ADMIN_URL ?>/content">Back to Content Listing</a>
<?php if ($this->canEdit) {?><!--
 | <a href="<?echo ADMIN_URL ?>/content/edit/<?echo $this->content->id ?>"> Edit This Item</a>-->
 | <a href="<?echo ADMIN_URL ?>/content/remove/<?echo $this->content->id ?>"> Delete This Item</a>
<?php } ?>
</p>
<?php
if(preg_match('/image/',$this->content->mime_type)) {
?>
<a href="<?=ADMIN_URL.'/content/image/'.$this->content->id?>">
<img src="<?=ADMIN_URL.'/content/image/'.$this->content->id?>?width=400&height=300" 
alt="Content Image" style="float:left; border:1px solid #aaa; margin-right:10px" />
</a>
<?php
} else {
?>
<div style="padding:30px; top:50px; right:50px; bottom:50px; width:400px; background:url(<?=ADMIN_BASE_URL?>/images/lightblue_bg.gif); border:1px solid #aaa">
<?=$this->content->content?>
</div>
<?php
}
?>

<h3>Run dates:</h3>
<?=date("m/j/Y H:i",strtotime($this->content->start_time))?> - 
<?=date("m/j/Y H:i",strtotime($this->content->end_time))?>

<h3>Display duration:</h3>
<p><?=$this->content->duration/1000?> seconds</p>

<h3>Submitted By:</h3>
<p><a href="<?=ADMIN_URL.'/users/show/'.$this->submitter->username?>"><?=$this->submitter->name?></a></p>

<br clear="left">
<?php

if(is_array($this->act_feeds)) {
?>
<h3>Feeds this appears on:</h3>
<ul>
<?php
    foreach ($this->act_feeds as $feed)
       echo '<li><a href="'.ADMIN_URL.'/feeds/show/'.$feed['feed']->id.'">'.$feed['feed']->name.'</a></li>'; 
}
?>
</ul>

<?php
if(is_array($this->wait_feeds))
{
?>
<h3>Awaiting approval on:</h3>
<ul>
<?php
   foreach ($this->wait_feeds as $feed)
      echo '<li><a href="'.ADMIN_URL.'/feeds/'.$feed['feed']->id.'">'.$feed['feed']->name.'</a></li>';
}
?>
</ul>

<?php
if(is_array($this->denied_feeds))
{
?>
<h3>Rejected From:</h3>
<ul>
<?php
   foreach ($this->denied_feeds as $feed)
      echo '<li><a href="'.ADMIN_URL.'/feeds/'.$feed['feed']->id.'">'.$feed['feed']->name.'</a></li>';
}
?>
</ul>