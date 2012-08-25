
<style>
<?php
// index column widths

$column_info = elgg_get_plugin_setting('index_layout', 'homepage_cms');
$columns = explode("\n", $column_info);

$widths = array();
foreach ($columns as $row) {
  $rows = explode("|", $row);
  
  foreach ($rows as $width) {
    $widths[] = $width;
  }
}

foreach ($widths as $index => $width) {
  $width = preg_replace('/\D/', '', $width);
?>

#homepage-cms #elgg-widget-col-<?php echo $index+1; ?> {
  width: <?php echo $width; ?>%;
  float: left;
  min-height: 0 !important;
}

<?php
}
?>

#homepage-cms .elgg-widget-instance-free_html, .elgg-widget-instance-free_html .elgg-body {
  overflow: visible;
}

</style>