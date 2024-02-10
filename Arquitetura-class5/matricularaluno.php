<?php

use Alura\Arquitetura\Dominio\Aluno\Aluno;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$telefone = $argv[5];

$aluno = Aluno::comCpfNomeEEmail($cpf, $nome, $email)->adicionarTelefone($ddd, $numero);
$repositorio = new \Alura\Arquitetura\Infra\Aluno\RepositorioDeAlunoEmMemoria();
$repositorio->adicionar($aluno);