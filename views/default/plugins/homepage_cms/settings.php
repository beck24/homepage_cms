<?php

// use custom footer?
$options = array(
    'name' => 'params[footer_override]',
    'value' => $vars['entity']->footer_override ? $vars['entity']->footer_override : 'no',
    'options_values' => array(
        'yes' => elgg_echo('option:yes'),
        'no' => elgg_echo('option:no')
    ),
);

echo elgg_echo('homepage_cms:label:footer_override') . "<br>";
echo elgg_view('input/dropdown', $options) . "<br><br>";


// set custom footer
$options = array(
    'name' => 'params[footer_content]',
    'value' => $vars['entity']->footer_content,
);

echo elgg_echo('homepage_cms:label:footer_content') . "<br>";
echo elgg_view('input/longtext', $options) . "<br><br>";


// set custom layout
$options = array(
    'name' => 'params[index_layout]',
    'value' => $vars['entity']->index_layout,
);

echo elgg_echo('homepage_cms:label:index_layout') . "<br>";
echo elgg_view('input/plaintext', $options) . "<br><br>";

echo elgg_echo('homepage_cms:index_layout:instructions') . "<br><br>";
