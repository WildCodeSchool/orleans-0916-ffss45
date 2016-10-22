<?php


namespace FrontBundle\Controller;

use FrontBundle\Entity\BaseCommune;
use FrontBundle\Form\BaseCommuneType;
use FrontBundle\Form\CreatePosteSecoursStep1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;


class BaseCommuneController extends Controller
{
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function createPosteSecoursAction (Request $request)
    {   

        $formData = new PosteSecours(); // Your form data class. Has to be an object, won't work properly with an array.

        $flow = $this->get('form.flow.createPosteSecours'); // must match the flow's service id
        $flow->bind($formData);

        // form of the current step
        $form = $flow->createForm();
        if ($flow->isValid($form)) {
            $flow->saveCurrentStepData($form);

            if ($flow->nextStep()) {
                // form for the next step
                $form = $flow->createForm();
            } else {
                // flow finished
                $em = $this->getDoctrine()->getManager();
                $em->persist($formData);
                $em->flush();

                $flow->reset(); // remove step data from the session

                return $this->redirect($this->generateUrl('home')); // redirect when done
            }
        }

        return $this->render('MyCompanyMyBundle:PosteSecours:createPosteSecours.html.twig', array(
            'form' => $form->createView(),
            'flow' => $flow,
        ));

    }

}