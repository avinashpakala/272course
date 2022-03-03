<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in config
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Website navigation.
 */

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */

function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}