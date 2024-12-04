<?php
class Posts extends Controller{

    public function __construct()
    {
        if(!Sessao::estaLogado()):
            Url::redirecionar('usuarios/logar');
        endif;
    }

    public function index(){
        $this->view('posts/index');
    }
    public function cadastrar(){
        $this->view('posts/cadastrar');
    }
}//fim da classe Posts

?>