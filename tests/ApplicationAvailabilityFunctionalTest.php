<?php
/**
 * Created by PhpStorm.
 * User: aigie
 * Date: 17/04/2017
 * Time: 21:02
 */

namespace Tests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

// Ce test fonctionnel est un test "de base" :
// il sert simplement à vérifier que toutes les routes de l'application sont bien fonctionnelles
class ApplicationAvailabilityFunctionalTest extends WebTestCase
{
    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);

        // On vérifie que la requête a été traitée avec succès
        // et que la réponse renvoyée par le navigateur est bien 200
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function urlProvider()
    {
        // La méthode urlProvider va servir à fournir le paramètre $url nécessaires à notre test
        return array(
            array('/'),
            array('/links'),
            array('/add-link'),
            array('/login'),
            array('/logout'),
            array('/signup')
        );
    }
}
