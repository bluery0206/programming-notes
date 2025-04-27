<?php

class Operator {
    protected string $codename;
    protected string $klass;
    protected int $rarity;

    public function __construct($codename, $klass, $rarity) {
        $this->setCodename($codename);
        $this->setKlass($klass);
        $this->setRarity($rarity);
    }

    // No Python's @property equivalent in PHP unfortunately 
    public function setCodename($codename): void {
        if (gettype($codename) === "string"){
            $this->codename = $codename;
        } else {
            throw new Exception("Codename must be a string.");
        }
    }

    public function getCodename() {
        return $this->codename;
    }

    public function setKlass($klass): void {
        if (gettype($klass) === "string"){
            $this->klass = $klass;
        } else {
            throw new Exception("klass must be a string.");
        }
    }

    public function getKlass() {
        return $this->codename;
    }

    public function setRarity($rarity): void {
        if (gettype($rarity) === "integer"){
            $this->rarity = $rarity;
        } else {
            throw new Exception("Rarity must be an integer.");
        }
    }

    public function getRarity() {
        return $this->rarity;
    }

    // Equivalent to Python's __str__() dunder method
    public function __toString(): string {
        return (string)get_class($this) . "($this->codename)";
    }
}

$myCar = new Operator("Bagpipe", "Vanguard", 6);
echo $myCar;