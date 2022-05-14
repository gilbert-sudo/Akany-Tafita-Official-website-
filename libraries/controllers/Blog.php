<?php
namespace Controllers;
require("libraries/autoload.php");
class Blog extends Controller{
    protected $pageTitle = 'Blog';
    protected $view1 = 'blog/addBlog';
    protected $view2="blog/manageBlog";
    protected $modelName = \models\Blog::class;
    public function addBlog(){
        $error_msg = ' ';
        $object = ' ';
        $contain_1 =" ";
        $contain_2 =" ";

        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle', 'object', 'contain_1', 'contain_2', 'error_msg'));
    }
    public function manageBlog(){
        $error_msg="";
        $pageTitle = $this->pageTitle;
         $blogs = $this->model->findAll();
         \renderer::render($this->view2, compact('pageTitle', 'blogs', 'error_msg'));
     }
}
?>