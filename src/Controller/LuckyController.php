<?php

namespace App\Controller;

//* Dependencias que se van a utilizar

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    //* Indica la ruta que va a utilizar Symfony
    /**
     * @Route("/lucky/number")
     */

    //Las funciones realizan la logica que sea necesaria para cada ruta
    public function number(): Response
    {
        $intNumber = random_int(0, 100);
        return new Response('<html><body>LuckyNumber: ' . $intNumber . '</body></html>');
    }
    public function numero(): Response
    {
        $intNumero = random_int(0, 10);
        //El return permite renderizar una vista junto a los parametros que se necesitan mostrar    
        // las variables que se van a utilizar en la vista se definen desde el return
        return $this->render('lucky/number.html.twig', ['numeroAle' => $intNumero, 'otroNumero'=>5]);
    }
}
