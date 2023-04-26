<?php

namespace UPJV\INSSET;

/**
 * Commentaire de fichier: Ce fichier définit la classe Validateur, qui vérifie la validité des données d'entrée.
 */

class Validator
{
    /**
     * Vérifie la validité de l'input.
     *
     * @param string $input L'input à vérifier.
     *
     * @return bool Renvoie true si l'input est valide, false sinon.
     */


    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }//end check()
}//end class
