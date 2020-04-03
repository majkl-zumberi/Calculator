<?php

namespace App\Controller;

use App\Entity\Calcolatrice;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CalcolatriceForm;

 
    class FormCalcolatriceController extends AbstractController{

        public function formCalc(Request $request){
            $session = $this->get('session');
            if($request->get("clearStorico")){
                $session->remove('dati');
            }
            $firstInput=$request->get("input1");
           // echo "primo input preso:".$firstInput;
           $secondInput=$request->get("input2");
           $typeop=$request->get("operazione");
            $dati=$session->get('dati');
            if($dati == null){
                $session->set("dati",array());
                $dati=$session->get("dati");
            }
            $nome="majkl";
            $entity = new Calcolatrice($firstInput,$secondInput,$typeop); 
            $form = $this->createForm(CalcolatriceForm::class, $entity);
            $form->handleRequest($request);
            $result="";
            if ($form->isSubmitted() && $form->isValid()) {
                    //form inviata
                    //recupero i dati della form
                $calc = $form->getData();
                $result=$calc->getResult();
                array_push($dati,$calc);    
                $session->set("dati",$dati);
              
            }
            return $this->render('form-calcolatrice.html.twig', 
                [
                'form' => $form->createView(),
                "nome"=>$nome,
                "result"=>$result,
                'dati'=>$dati
                ]
            );
    }
 
}

?>