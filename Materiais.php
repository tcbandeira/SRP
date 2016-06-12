<?php


class Materiais {
    public function moldeDaEmbalagem($tipo){
        if($tipo < 5){
            return "Pequena";
        }else if($tipo <10){
            return "Media";
        }else
            return "Grande";
    }
}
