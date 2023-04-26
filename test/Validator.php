<?php

namespace UPJV\INSSET;

/**
 * Commentaire de fichier: Ce fichier définit la classe Validateur, qui vérifie la validité des données d'entrée.
 */

// Importez les classes nécessaires
use PHPUnit\Framework\TestCase;
use App\Validator;

class ValidatorTest extends TestCase
{
    // Testez si la méthode check retourne true pour une chaîne de caractères valide
    public function testCheckReturnsTrueForValidString()
    {
        // Créez une instance de la classe Validator
        $validator = new Validator();

        // Appelez la méthode check avec une chaîne de caractères valide
        $result = $validator->check("valid");

        // Vérifiez si le résultat est true
        $this->assertTrue($result);
    }

    // Testez si la méthode check retourne false pour une chaîne de caractères invalide
    public function testCheckReturnsFalseForInvalidString()
    {
        // Créez une instance de la classe Validator
        $validator = new Validator();

        // Appelez la méthode check avec une chaîne de caractères invalide
        $result = $validator->check("x");

        // Vérifiez si le résultat est false
        $this->assertFalse($result);
    }
}
