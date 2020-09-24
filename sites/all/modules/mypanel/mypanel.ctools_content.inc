<?php
function mypanel_default_ctools_custom_content() {
    $export = array();

    $content = new stdClass();
    $content->disabled = FALSE;
    $content->api_version = 1;
    $content->name = 'custom_content_pane';
    $content->admin_title = 'Custom Content Pane';
    $content->admin_description = 'This appears within the admin interface for the pane.';
    $content->category = 'category';
    $content->settings = array(
        'admin_title' => $content->admin_title, // Add the admin title to the settings array so that it appears in the pane form.
        'title' => 'Pane title',
        'body' => '<div>This is my custom pane</div>
    ',
        'format' => 'full_html',
        'substitute' => 1,
    );
    $export[$content->name] = $content; // Add the pane to the $export array

    return $export;
}