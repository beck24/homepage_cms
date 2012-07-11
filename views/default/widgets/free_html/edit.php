<?php 
	$widget = $vars["entity"];
	
?>
<div>
	<?php echo elgg_echo("widgets:free_html:settings:html_content"); ?><br /> 
	<?php echo elgg_view("input/longtext", array("name" => "params[html_content]", "value" => $widget->html_content)); ?>
</div>

<?php
if (elgg_is_xhr()) {
?>
<script>
  $(document).ready( function() {
    location.reload(true);
  });
</script>
<?php
}
