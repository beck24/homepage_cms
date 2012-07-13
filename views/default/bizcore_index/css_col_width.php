<?php
// index column widths

$column_info = elgg_get_plugin_setting('index_layout', 'bizcore_index');
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

#bizcore-index #elgg-widget-col-<?php echo $index+1; ?> {
  width: <?php echo $width; ?>%;
  float: left;
  min-height: 0 !important;
}

<?php
}