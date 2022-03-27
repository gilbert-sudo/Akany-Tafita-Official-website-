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
    /**
     * To show error message
     *
     * @param  mixed $error_message
     * @param  mixed $error_mode
     * @return void
     */
    public static function showError(string $error_message, string $error_mode)

    {
        if ($error_mode == 'danger') {
            $error_icon = 'ban';
        } elseif ($error_mode == 'warning') {
            $error_icon = 'exclamation-triangle';
        } elseif ($error_mode == 'info') {
            $error_icon = 'info';
        } else {
            $error_icon = '';
        }
        $error = '<div class="alert alert-' . $error_mode . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-' . $error_icon . '"></i> Alert!</h5>
        ' . $error_message . '
       </div>';
        if ($error_mode == 'success') {
            $error = '<script>
        swal({
          title: "SUCCES",
          icon: "success",
          text: "l\'article a été ajouté avec succès",
        });
        </script>';
        }
        return $error;
    }

       
    /**
     * reset the form after submit
     *
     * @param  mixed $inputName
     * @param  mixed $inputType
     * @return void
     */
    public static function resetValue($inputName, $inputType = 'text')

    {
        if (isset($inputName) && !empty($inputName)) {
            if ($inputType == 'textarea') {
                echo $inputName;
            } else {
                echo 'value="' . $inputName . '"';
            }
        }
    }
}
