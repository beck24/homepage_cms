<?php

$english = array(
  'homepage_cms' => 'Bizcore Index',
  'homepage_cms:label:footer_override' => 'Use custom footer?',
  'homepage_cms:label:footer_content' => 'Custom Footer Content',
  'homepage_cms:label:index_layout' => 'Index Layout',
    
  'homepage_cms:index_layout:instructions' => "
    You can set the layout of the widget columns by entering a list of columns above, separated by
    a |.<br>
    Each line represents one row of columns, each number represents the % of the width the column occupies.
    For example, if your first row is just 100 - you will have a single column spanning the entire width.
    A line of 25|25|25|25 will give you 4 equal columns.<br>
    You can have as many rows and columns as you like.<br><br>
    
An example entry may look like this:<br>

100<br>
33|34|33<br>
100<br><br>

This will give you a top and bottom row spanning the entire width, with a middle row of thirds (roughly).
The sum of widths of each row should equal 100.  You can leave columns empty if you don't need them.",
);
					
add_translation("en",$english);