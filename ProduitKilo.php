<?php
class ProduitKilo extends Produit {
	
	public $prixkilo;
	
	public function __construct($prixkilo, $poids) {
		$this->PrixKilo=$prixkilo;
		$this->Poids=$poids;
	}
	
	public function CalculPrixKilo() {
		return ($this->PrixKilo*$this->Poids);
	}
}

?>