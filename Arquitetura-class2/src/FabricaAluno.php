<?php

namespace Alura\Arquitetura;

class FabricaAluno
{
    private Aluno $aluno;

    public function comCpfEmailNome(string $numeroCpf, string $email, string $nome):self
    {
        $this->aluno = new Aluno(new Cpf($numeroCpf), $nome, new Email($email));
        return $this;
    }

    public function adicionaTelefone(string $ddd, string $numero): self {
        $this->aluno->adicionarTelefone($ddd, $numero);

        return $this;
    }

    public function aluno():Aluno
    {
        return $this->aluno;
    }
}