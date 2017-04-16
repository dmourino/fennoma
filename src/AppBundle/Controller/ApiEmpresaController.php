<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Empresa controller.
 *
 * @Route("api")
 */
class ApiEmpresaController extends Controller
{
    /**
     * Lists all empresa entities.
     *
     * @Route("/empresas/", name="api_empresas")
     * @Method("GET")
     */
    public function indexAction()
    {
        $empresas = $this->getDoctrine()
            ->getRepository('AppBundle:Empresa')
            ->createQueryBuilder('e')
            ->select('e')
            ->getQuery()
            ->getArrayResult()
        ;

        return new JsonResponse($empresas);
    }
}