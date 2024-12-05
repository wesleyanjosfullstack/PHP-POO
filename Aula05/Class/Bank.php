<?php

class Bank {

    public $numAccont;
    protected $type;
    private $user;
    private $balance;
    private $status;

    public function openAccont($t) {
        $this->settype($t);
        $this->setStatus(true);

        if ($t == 'CC') $this->setBalance(50);
        else $this->setBalance(150);
    }

    public function closeAccount() {
        if ($this->getBalance() > 0) echo '<p>A conta ainda tem dinheiro, não posso fechá-la !</p>';
        else if ($this->getBalance() < 0) echo '<p>A conta está em débito. Impossivel encerrar !</p>';
        else {
            $this->setStatus(false);
            echo '<p>A conta de '. $this->getUser() .' fechada com sucesso !</p>';
        }
    }

    public function deposit($v) {
        if ($this->getStatus()) {
            $this->setBalance($this->getBalance() + $v);
            echo '<p>Depósito de R$'. number_format($v, 2, ',', '.') .' na conta de '. $this->getUser() .'</p>'; 
        } else echo '<p>Conta fechada. Não consigo depositar</p>';
    }

    public function withdraw($v) {
        if ($this->getStatus()) {
            if ($this->getBalance() >= $v) {
                $this->setBalance($this->getBalance() - $v);
                echo '<p>Saque de R$'. number_format($v, 2, ',', '.') .' autorizado na conta '. $this->getUser() . '</p>';
            } else echo '<p>Saldo insuficiente para saque.</p>';
        } else echo '<p>Não posso sacra de uma conta fechada !</p>';
    }

    public function payMonthly() {
        if ($this->getType() == 'CC') $v = 12;
        else if ($this->getType() == 'CP') $v = 20;
        if ($this->getStatus()) {
            $this->setBalance($this->getBalance() - $v);
            echo '<p>Mensalidade de R$'. number_format($v, 2, ',', '.') .' debitada na conta de '. $this->getUser() . '</p>';
        } else echo '<p>Problemas com a conta. Não posso continuar</p>'; 
    }

    public function __construct()
    {
        $this->setBalance(0);
        $this->setStatus(false);
        echo '<p>Conta criada com sucesso !</p>';
    }

    public function getNumAccont() {
        return $this->numAccont;
    }

    public function setNumAccont($n) {
        $this->numAccont = $n;
    }
    public function getType() {
        return $this->type;
    }

    public function setType($t) {
        $this->type = $t;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser($u) {
        $this->user = $u;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($b) {
        $this->balance = $b;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($s) {
        $this->status = $s;
    }

}

?>