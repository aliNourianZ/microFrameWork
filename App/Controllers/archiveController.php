<?php
namespace App\Controllers;
class archiveController{
    public function index(){
        view("archive.index");
    }
    public function products(){
        view("archive.products");
    }
    public function articles(){
        view("archive.articles");
    }
}