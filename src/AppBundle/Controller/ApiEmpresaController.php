<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

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
        $empresas = $this->getDoctrine()->getRepository('AppBundle:Empresa')->findAll();

        $json = $this->serialize($empresas);

        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @param $data
     * @return string|\Symfony\Component\Serializer\Encoder\scalar
     */
    public function serialize($data)
    {
        $encoder = new JsonEncoder();
        $normalizer = new GetSetMethodNormalizer();

        $serializer = new Serializer(array($normalizer), array($encoder));
        $json = $serializer->serialize($data, 'json');
        return $json;
    }
}