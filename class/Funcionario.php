<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author ppagotto
 */
class Funcionario {
    /* attrib */
    public $nome;
    public $empresa;
    public $matricula;
    public $saldo_sacola;
    public $situacao;
    public $codbar;
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        return $this->nome = $nome;
    }
    
}
