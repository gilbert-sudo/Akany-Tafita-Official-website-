<?php
namespace Controllers;
require("libraries/autoload.php");
class Blog extends Controller{
    protected $pageTitle = 'Blog';
    protected $view1 = 'blog/addBlog';
    protected $view2="blog/manageBlog";
    protected $modelName = \models\Blog::class;
    public function addBlog(){
        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle'));
    }
}
?>