<?php

Class player {
private $name;
private $gp;
private $fgp;
private $tpp;
private $ftp;
private $ppg;

public function __construct($name, $gp, $fgp, $tpp, $ftp, $ppg) {
  $this->name = $name;
  $this->gp = $gp;
  $this->fgp = $fgp;
  $this->tpp = $tpp;
  $this->ftp = $ftp;
  $this->ppg = $ppg;
}

public function getName() {
  return ''.$this->name;
}

public function getGP() {
  return ''.$this->gp;
}

public function getFGP() {
  return ''.$this->fgp;
}

public function getTPP() {
  return ''.$this->tpp;
}

public function getFTP() {
  return ''.$this->ftp;
}

public function getPPG() {
  return ''.$this->ppg;
}

public function getimgName(){
  return str_replace(' ', '_', $this->name);
}

}
?>