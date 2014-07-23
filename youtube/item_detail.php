<?php if( isset($detail['s_youtube']) && !empty($detail['s_youtube']) ) { ?>
<div>
    <h2 style="margin-top: 10px;"><?php _e('Youtube video', 'youtube') ; ?></h2>
    <iframe width="560" height="315" src="<?php echo $detail['s_youtube'] ; ?>" frameborder="0" allowfullscreen></iframe>
</div>
<?php } ?>
