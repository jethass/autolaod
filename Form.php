class Form 
{
	
	public $data;
	public $suround = 'p';

	

  public function __construct($data = array())
	{
	     $this->data = $data;	
	}

  
   public function getvalue($index)
   {
      return isset ($this->data[$index]) ? $this->data[$index] : null ;
   }

  
   public function suround($html)
   {
      return "<{$this->suround}> {$html} </{$this->suround}>";
   }


  
   public function input($name)
	{
       return $this->suround('<input type="text" name="'.$name.'" value="'.$this->getvalue($name).'"/>');
	}


	public function submit()
	{
       return "<button type='submit'>Envoyer</button>";
	}

}
