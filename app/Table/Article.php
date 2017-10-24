<?php
namespace App\Table;
use App\Table\Table;
use App\App;

class Article extends Table{

  protected static $table ='articles';

  
  public function getUrl(){
      return 'index.php?p=article&id='.$this->id;
  }

  public function getExtrait(){
  	$html='<p>'.substr($this->contenu, 0,50).'...</p>';
  	$html .='<p><a href="'.$this->getUrl().'">Voir la suite</a></p>';
  	return $html;

  }

  
}