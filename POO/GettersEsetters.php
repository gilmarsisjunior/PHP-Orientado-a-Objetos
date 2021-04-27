<?php

class ContaBanco
{
    public  $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function contaBanco()
    {
        $this->saldo = 0;
        $this->status = false;
    }
    // metodos

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t === 'CC') {
            $this->setSaldo(50);
        } elseif ($t === 'CP') {
            $this->setSaldo(150);
        }
    }


    public function fecharConta()
    {
        if ($this->saldo > 0) {
            echo 'Conta com dinheiro';
        } elseif ($this->saldo < 0) {
            echo 'a conta está em débito';
        } else {
            $this->setStatus(false);
        }
    }


    public function depositar($v)
    {
        if ($this->status = true) {

            $this->saldo = $this->saldo + $v;
        } else {
            echo 'Conta inexistente';
        }
    }


    public function sacar($v)
    {
        if ($this->status = true && $this->saldo > 0) {

            $this->saldo = $this->saldo - $v;
        } else {
            'Impossível sacar';
        }
    }


    public function pagarMensal()
    {
        if ($this->status = true && $this->tipo = 'CC') {

            $this->saldo = $this->saldo - 12;
        } elseif ($this->status = true && $this->tipo = 'CP') {

            $this->saldo = $this->saldo - 20;
        }
    }
    

    public function setNumConta($n)
    {
        $this->numConta = $n;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus($st)
    {
        $this->status = $st;
    }
    public function getStatus()
    {
        return $this->status;
    }
}
