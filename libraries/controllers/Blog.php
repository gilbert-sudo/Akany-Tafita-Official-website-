<?php

namespace Controllers;

require("libraries/autoload.php");
class Blog extends Controller
{
    protected $pageTitle = 'Blog';
    protected $view1 = 'blog/addBlog';
    protected $view2 = "blog/manageBlog";
    protected $modelName = \models\Blog::class;
    public function addBlog()
    {
        global $error_msg;
        $error_msg = ' ';
        $object = ' ';
        $contain_1 = " ";
        $contain_2 = " ";
        if (isset($_POST['add_blog'])) {
            if (isset($_POST['object']) && isset($_POST['contain_1']) && isset($_POST['contain_2'])) {
                if (!empty($_POST['object']) && !empty($_POST['contain_1']) && !empty($_POST['contain_2']) && !empty($_FILES['image']['name'])) {
                    $object = $_POST['object'];
                    $contain_1 = $_POST['contain_1'];
                    $contain_2 = $_POST['contain_2'];
                    $img = $_FILES['image']['name'];
                    $ext = explode('.', $img);
                    $file_ext = strtolower(end($ext));
                    $image = rand(1, 1000000) . '.' . $file_ext;
                    $Model =$this->model;
                    $modelMethod = 'insertOne';
                    $domain = 'Blogs';
                    \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'), compact('object', 'contain_1', 'contain_2', 'image'));
                }
            }
        }

        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle', 'object', 'contain_1', 'contain_2', 'error_msg'));
    }
    public function manageBlog()
    {
        $error_msg = "";
        $pageTitle = $this->pageTitle;
        $blogs = $this->model->findAll();
        \renderer::render($this->view2, compact('pageTitle', 'blogs', 'error_msg'));
    }
}
