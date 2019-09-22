<?php
class Entree
{
    public $name;
    public $ingredients = array();
    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->ingredients);
    }
}
$soup=new Entree;
$soup->name= 'Chiken Soup';
$soup->ingredients=array('chiken','water');
$sandvich=new Entree;
$sandvich->name='Chiken Sandvich';
$sandvich->ingredients=array('chiken','bread');
foreach(['chiken','lemon','bread','water'] as $ing){
	if($soup->hasIngredient($ing)){
		print"Soup contains $ing.\n";
	}
	if($sandvich->hasIngredient($ing)){
		print"Sandvich contains $ing.\n";
	}
	
}