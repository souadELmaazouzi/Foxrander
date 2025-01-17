<?php

namespace HtmlElements ;


class Div extends BaseElement implements  IElmenet 
{
    private array $children;
     use THasChildren;


    public function __construct( array $children =[],string $className= '',string $class_id='')
    {
        $this->children = $children;
        parent::__construct(className: $className, id: $class_id);
        $this->mapBody();
    }

   

    // public function mapBody(){
        
    //     $arr = [];
    //     foreach($this->children as $element ){
    //         array_push($arr,$element->rander());
    //     }
    //     $this->children = $arr;
    
    // }
    
    public function rander(): string
    {
        return " <div class='$this->className' id='$this->id'>"
                . implode("", array: $this->children) .
                "</div>";
    }
}