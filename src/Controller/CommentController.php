<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    /* adding annotations to the controller */

    use Symfony\Component\Routing\Annotation\Route;

    /* allowing and restricting certain methods*/

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

    /* adding twig to the app and also we need to extend the controller */
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class CommentController extends Controller {
        /**
         * @Route("/")
         */
        public function index(){
           return $this->render('pages/index.html.twig');
        }
        /**
         * @Route("/about")
         */
        public function about(){
            return $this->render('pages/about.html.twig');
        }
    }