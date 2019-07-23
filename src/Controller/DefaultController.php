<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render ('index.html.twig');
        // return new Response(
        //     '<html><body>Page index </body></html>'
        // );
    }
    // /**
    //  * @Route("/admin", name="admin")
    //  */
    // public function admin()
    // {
    //     return new Response(
    //         '<html><body>Page admin </body></html>'
    //     );
    // }

    
}