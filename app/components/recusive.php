<?php
namespace App\components;
use App\Models\Category;
class Recusive {
    private $data;
    private $htmlSelect;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function categoryRecusive($id = 0, $text = ' ')
    {
      
        foreach ($this->data as $value) {
            if ($value['paren_id'] == $id){
                $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] ."</option>";
                $this->categoryRecusive( $value['id'],  $text . '-' );
            }
        }
    return $this->htmlSelect;
    }
}