<?php

class Renderer
{
    /**
     * render
     *
     * @param  mixed $path
     * @param  mixed $variables
     * @return void
     */
    public static function render(string $path, array $variables = [])
    {
        extract($variables);

        ob_start();
        require('views/' . $path . '.html.php');
        $pageContent = ob_get_clean();
        require('views/layout.html.php');
    }
    public static function showError(string $error_message)
    {
        $error = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        '. $error_message .'
       </div>';
        echo $error;
    }
}
