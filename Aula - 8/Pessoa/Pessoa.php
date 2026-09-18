<?php

class Pessoa {
    private String $nome;
    private String $sobrenome;

    public function nomePessoa() {
        $nomeCompleto = $this->nome . "" . $this->sobrenome;
        return $nomeCompleto;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): String
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(String $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome(): String
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome(String $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }
}