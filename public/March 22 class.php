<?php

class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}

$superman = new Superhero('Clark', 'Kent');
$sueprman->pseudonym = 'Superman';
$superman->capeColor = 'Red';

echo $superman->fullName();
echo $superman->alterEgo();
