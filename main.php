<?php
require_once('class.php');
require_once('class2.php');
require_once('index.php');

class Repulsors extends Arms{
    public function attack(){
        echo "Final Beam\n";
    }
};
class Blinded extends Arms{
     public function attack(){
        echo "Iron punch\n";
    }
};

class Propulsors extends Legs{
    public function volo(){
        echo "fly\n";
    }
};
class Jumpers extends Legs{
     public function volo(){
        echo "fly\n";
    }
};

class Jarvis extends Casco{
    public function start(){
        echo "Tutto Pronto Sr \n";
    }
};
class Friday extends Casco{
    public function start(){
        echo "Tutto Pronto Sr \n";
    }
};

class Armatura{
    private $casco;
    private $arms;
    private $legs;
    public static $count = 0;
    public function __construct(Casco $casco, Arms $arms, Legs $legs){
        $this->arms = $arms;
        $this->legs = $legs;
        $this->casco = $casco;
        self::$count++;
    }
    public function habilities(){
        $this->casco->start();
        $this->arms->attack();
        $this->legs->volo();

    }
    public static function army(){
        return self::$count;
    }
}

$ironman = new Armatura(new Jarvis(), new Repulsors(), new  Jumpers());
$mark_50 = new Armatura(new Friday(), new Repulsors(), new Propulsors());
$war_machine = new Armatura(new Jarvis, new Blinded, new Jumpers());
$ironman->habilities();
echo "Totale di armature create : " . Armatura::Army() . "\n";
