<?php

if (!function_exists('view')) {
    function view($view, $data = [])
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../Views/' . $view . '.php';
        return ob_get_clean();
    }
}
