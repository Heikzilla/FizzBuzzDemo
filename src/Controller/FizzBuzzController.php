<?php
// src/Controller/FizzBuzzController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FizzBuzzController extends AbstractController{

    public $increasingArr;

    /**
     * @Route("/fizzbuzz/number")
     */
    public function increaseNumber(): Response
    {

        $this->increasingArr = Array();

        for($i=1; $i <= 100; $i++){

            if(($i % 3 == 0) && ($i % 5 == 0)){
                $this->increasingArr[] = "BuzzFizz";
            }elseif($i % 5 == 0){
                $this->increasingArr[] = "Fizz";
            }elseif($i % 3 == 0){
                $this->increasingArr[] = "Buzz";
            }else{
                $this->increasingArr[] = $i;
            }
        }
        
        return $this->increasingArr;
        return $this->render('fizzbuzz/number.html.twig', [
            'numbers' => $this->increasingArr,
        ]);
    }

}


?>