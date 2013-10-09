<?php

namespace UPC\SunatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UPC\SunatBundle\Entity\Penalty;
use UPC\SunatBundle\Form\PenaltyType;

/**
 * Penalty controller.
 *
 */
class PenaltyController extends Controller {

    /**
     * @Route("/", name="sunat_homepage_list")
     * @Template("")
     */
    public function listAction(Request $request) {
        $form = $this->createForm('penalty_search', null);
        $form->handleRequest($request);
        $criteria = $form->getData() ? $form->getData() : array();

        $em = $this->getDoctrine()->getEntityManager();
        $dql = "SELECT p FROM UPCSunatBundle:Penalty p";

        if (array_key_exists('ruc', $criteria)) {
            $dql = $dql . " where p.ruc = :c_ruc";
            $query = $em->createQuery($dql)->setParameter('c_ruc', $criteria['ruc']);
        } else {
            $query = $em->createQuery($dql);
        }

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */
        );

//        foreach ($criteria as $key => $value) {
//            if (!$value) {
//                unset($criteria[$key]);
//            }
//        }
//        $em = $this->getDoctrine()
//                ->getRepository('CardsBundle:Card');
//        $query = $em->findUsingLike($criteria);
//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//                $query, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */
//        );
        return array(
            'pagination' => $pagination,
            'form' => $form->createView()
        );

    }

}
