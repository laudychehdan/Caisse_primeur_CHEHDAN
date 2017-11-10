<?php
class ProduitUnite extends Produit {
	
	public $prixunite;
	
	public function __construct($prixunite, $quantite) {
		$this->PrixUnite=$prixunite;
		$this->Quantite=$quantite;
	}
	
	public function CalculPrixUnite() {
		return ($this->PrixUnite*$this->Quantite);
	}
}
?>