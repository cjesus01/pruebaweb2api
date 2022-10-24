<?php
class moviesModel{
    private $db;

    public function __construct(){
        $this->db = $this->connect();
    }
    public function connect(){
        $db=new PDO ('mysql:host=localhost; dbname=db_movies; charset=utf8','root','');
        return $db;
    }
    public function obtenerMovies(){
        $query=$this->db->prepare("SELECT * FROM movies");
        $query->execute();
        $movies=$query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }
}