<?php

class FormType 
{
    private $types = ['text','email','number','password','date','time','radio'];

    public function create(array $options,?string $label = null)
    {
        if(in_array($options['attr']['type'], $this->types))
        {
            $field = '<div class="form-group">';
            if($label != null)
            {
                 $field.='<label>'.$label.'</label>';

            }

            $field.='<input ';

            if(isset($options['attr']))
            {
                foreach ($options['attr'] as $k => $v) {
                    $field .= $k.'="'.$v.'"';
                }
            }
            if(!isset($options)){
               $options = [];
            }
            $options['class'] = ['form-control','form-control-sm'];
            
            $classNames = '';
                
            foreach ($options['class'] as $v) {
                $classNames .= $v.' ';
            }
            $field .= 'class ="'.trim($classNames).'"';
        return $field.' />';
          
        }

    }

    
}