<?php 
class Posts extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->render("posts/index");
    }
}
?>