<?php
namespace Validator;

class AnneeValidator
{
    private static $tab = [];

    private static function verifierString($value) 
    {
         return is_numeric($value) && strlen($value) == 4; 
    }

    private static function return4PremierLettre($string)
    {
         return substr($string, 0, 4);
    }

    private static function return4DernierLettre($string)
    {
         return substr($string, -4);
    }

    public static function getTab($libelle)
    {
         $deb = self::return4PremierLettre($libelle);
         $fin = self::return4DernierLettre($libelle);
         if (strlen($libelle) != 9 ) {
             self::$tab[] = "L'Annee dois avoir 9 characters.";
         }
         if (!self::verifierString($deb)) {
             self::$tab[] = "Les 4 premiers caractères doivent être des chiffres.";
         }
         if (!self::verifierString($fin)) {
             self::$tab[] = "Les 4 derniers caractères doivent être des chiffres.";
         }
         if ($libelle[4] != '/') {
             self::$tab[] = "Le séparateur doit être /.";
         }
         if (((int)$fin - (int)$deb) != 1) {
             self::$tab[] = "L'année scolaire doit être un an!";
         }
         return self::$tab;
    }
}