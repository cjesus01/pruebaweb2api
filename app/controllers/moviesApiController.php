<?php
require_once './app/model/moviesModel.php';
require_once './app/view/APIView.php';
class moviesApiController{
    private $model;
    private $view;
    private $data;

    public function __contruct(){
        $this->model = new moviesModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    private function getData(){
        return json_decode($this->data);
    }

    public function getMovies(){
        $peliculas = $this->model->obtenerMovies();
        $this->view->response($peliculas, 200);
    }
}
?>