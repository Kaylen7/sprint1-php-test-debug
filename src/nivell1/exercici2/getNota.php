<?php
namespace Nivell1\Exercici2;

function getNota(float $nota): string{
    
    if($nota > 100 || $nota < 0){
        return "Nota fora dels límits.";
    }

    if($nota < 10){
        $nota *= 10;
    }
    
    switch(true){
        case ($nota >= 60):
            return "Primera Divisió";
        case ($nota >= 45):
            return "Segona Divisió";
        case ($nota >= 33):
            return "Tercera Divisió";
        default:
            return "Cal reprovar.";
    }
}