<?php
 $hero1_name = "Alucard";
 $hero1_defense = "";

 class Hero{
    public $name;
    public $hp;
    public $defense;
    public $damage;
    public $mana;

    public function __construct($name, $hp, $defense, $damage, $mana)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->defense = $defense;
        $this->damage = $damage;
        $this->mana = $mana;
    }
 }

 $hero1 = new Hero("Alucard", 4000, 120, 300, 0);
 $hero2 = new Hero("Akai", 4100, 300, 50, 0);

 echo $hero1->name;