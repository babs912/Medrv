<?php 

class Validator {

    
    public $name = "";
    public $value;
    public $required = true;

    public $errors = array();

    public function set(string $name, $value, boolean $required = null, $min = null, $max = null)
    {
        $this->name = $name;
        $this->value = $this->purify($value);
        $this->required =  $required;
        $method = "is_".$name;
        if(method_exists($this,$method)){
            if(!$this->$method($this->value)){
                $this->errors[$name] = $name." n'est pas valide";
            }

            if($required == true){
                $this->required();
            }

            if($min != null){
                $this->min($min);
            }


            if($max != null){
                $this->min($max);
            }
        }

        if($name == "file"){

        }
    }
       
   
        public function required(){
            
            if((isset($this->file) && $this->file['error'] == 4) || ($this->value == '' || $this->value == null)){
                $this->errors[] = ''.$this->name.' est obligatoire.';
            }            
            return $this;
            
        }
        
      
        public function min($length){
            
            if(is_string($this->value)){
                
                if(strlen($this->value) < $length){
                    $this->errors[] = ''.$this->name.' est trop petit';
                }
           
            }else{
                
                if($this->value < $length){
                    $this->errors[] = ''.$this->name.' est trop petit';
                }
                
            }
            return $this;
            
        }
            
       
        public function max($length){
            
            if(is_string($this->value)){
                
                if(strlen($this->value) > $length){
                    $this->errors[] = ''.$this->name.' est trop long';
                }
           
            }else{
                
                if($this->value > $length){
                    $this->errors[] = ' '.$this->name.' est superieur a la valeur max';
                }
                
            }
            return $this;
            
        }
        
        
        public function equal($value){
        
            if($this->value != $value){
                $this->errors[] = 'Le'.$this->name.' ne correspond pas.';
            }
            return $this;
            
        }
        
      
        public function maxSize($size){
            
            if($this->file['error'] != 4 && $this->file['size'] > $size){
                $this->errors[] = 'Le fichier '.$this->name.' superieur a la taille permise '.number_format($size / 1048576, 2).' MB.';
            }
            return $this;
            
        }
        
       
        public function ext($extension){
            if($this->file['error'] != 4 && pathinfo($this->file['name'], PATHINFO_EXTENSION) != $extension && strtoupper(pathinfo($this->file['name'], PATHINFO_EXTENSION)) != $extension){
                $this->errors[] = 'Le fichier '.$this->name.' n\'a pas d\'extension '.$extension.'.';
            }
            return $this;
            
        }
        
       
        public function purify($string){
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        
      
        public function isSuccess(){
            if(empty($this->errors))
            { 
                return true;
            }
        }
        
        
        public function getErrors(){
            if(!$this->isSuccess()) 
            {
                return $this->errors;
            }
        }
        
        
        public function displayErrors(){
            
            $html = '<ul class="alert alert-danger">';
                foreach($this->getErrors() as $error){
                    $html .= '<li>'.$error.'</li>';
                }
            $html .= '</ul>';
            
            return $html;
            
        }
        
        
        public function result(){
            
            if(!$this->isSuccess()){
               
                foreach($this->getErrors() as $error){
                    echo "$error\n";
                }
                exit;
                
            }else{
                return true;
            }
        
        }
      



        public static function is_int($value){
            if(filter_var($value, FILTER_VALIDATE_INT))
            {
                 return true;
            }
        }
        
       
      
        public static function is_float($value){
            if(filter_var($value, FILTER_VALIDATE_FLOAT))
            {
                return true;
            }
        }
        
        
        public static function is_alpha($value){
            if(filter_var($value, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z]+$/"))))
            {
                return true;
            }
        }
      
        public static function is_alphanum($value)
        {
            if(filter_var($value, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z0-9]+$/"))))
            {
                return true;
            }
        }
        
      
        
        
        public static function is_bool($value){
            if(is_bool(filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))){
                 return true;
                }
        }
        
      
        public static function is_email($value){
            if(filter_var($value, FILTER_VALIDATE_EMAIL)){ return true; }
        }
        
}