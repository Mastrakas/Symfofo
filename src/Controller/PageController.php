<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController{
    /**
     * @Route("/name", name="page_name")
     */
    public function name (Request $request){

        $name = $request->query->get('nom');
        var_dump($name);
        die;
    }
}
?>