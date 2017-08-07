<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homeAction(Request $request)
    {

	return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/BookOrder")
     */
    public function bookingAction(Request $request)
    {
        $customer = new Customer();
        $customer->setChineseName('Jason');
        //$customer->setOrderDate(new \DateTime('today'));

	$form = $this->createFormBuilder($customer)
	    ->add('chineseName', TextType::class, array('label' => 'Name',
						'required' => 'false'))
	    ->add('orderDate', DateType::class, array('label' => 'Date',
						'input' => 'string'))
	    ->add('save', SubmitType::class, array('label' => 'Create Post'))
	    ->getForm();

	$form->handleRequest($request);

	if ($form->isSubmitted() && $form->isValid()){
	    //$customer1 = $form->getChineseName();
	    	    
	    $conn = pg_pconnect('host = 127.0.0.1 port = 5432 dbname=taian user=taian password=123456');
	    $sqlInsertCustomer = "insert into customer values('Customer2', 'C002', 2)";
	    $result = pg_query($conn, $sqlInsertCustomer);
//	    pg_close($conn)

	    return $this->render('default/resoult.html.twig');
	}
	else{
	    return $this->render('default/new.html.twig', array(
	        'form' => $form->createView(),
	    ));
	}
    }

    /**
     * @Route("/BookResoult")
     */
    public function resoultAction($test)
    {

	return $this->render('default/resoult.html.twig');
    }
}
