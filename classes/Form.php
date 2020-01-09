<?php

class Form {
    /*
     * Structure:
     * form
     * field label
     * field type (input, textarea...)
     * field name
     * field id
     * field action (for buttons)
     * 
     */
    var $data=null;
    
    public function createForm(){
        $form = "";
        $spc=" ";
        foreach ($this->data as $element) {
            $type=$element['type'];
            $id=$element['id']!=null?'id="'.$element['id'].'"':"";
            $name = $element['name']!=null?'name="'.$element['name'].'"':"";;
            $value = $element['value']!=null?'value="'.$element['value'].'"':"";
            $min= $element['min']!=null?'min="'.$element['min'].'"':"";
            $max =  $element['max']!=null?'max="'.$element['max'].'"':"";
            $text=$element['text']!=null?$element['text']:"";
            $required = $element['required']!=null?'required="'.$element['required'].'"':"";
            $action = $element['action']!=null?'action="'.$element['action'].'"':"";
            $form = $form."<".$type.$spc.$id.$spc.$name.$spc.$value.$spc.$min.$spc.$max.$spc.">".$text;
            if($element["type"]=="textarea"){
                $form = $form."</textarea>";
            }
               if($element["type"]=="select"){
                $form = $form."<option value='0'>Изберете</option></select>";
            }
            
            
            if($element['type']=="label"){
                $form="<p>".$form."</label>&nbsp;&nbsp;";
            }else{
                $form=$form."</p>";
            }
            
          
        }
        echo $form;
    }
    
    public function addElement($data) {
        $this->data[] = $data;
    }
    
    public function print() {
        echo "<pre>";
        print_r($this->data);
        echo "</pre>";
    }
}
