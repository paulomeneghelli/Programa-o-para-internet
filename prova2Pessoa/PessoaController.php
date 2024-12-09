<?php
require_once 'Pessoa.php';

class PessoaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Pessoa($db);
    }

    public function index()
    {
        $pessoas = $this->model->listar();
        require 'listar.php';
    }

    public function criar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->criar($_POST);
            header('Location: index.php');
        } else {
            require 'incluir.php';
        }
    }

    public function editar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id'] = $id;
            $this->model->editar($_POST);
            header('Location: index.php');
        } else {
            $pessoa = $this->model->buscar($id);
            require 'editar.php';
        }
    }

    public function excluir($id)
    {
        $this->model->excluir($id);
        header('Location: index.php');
    }
}
