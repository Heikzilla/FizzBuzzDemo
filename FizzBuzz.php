<?php 
/**
 * Ich habe zwei Varianten erstellt.
 * Die auskommentierte Version arbeitet ausschließlich mit einem String.
 * Die Aktive version verwendet ein Array.
 */
class FizzBuzz{

    #public $increasingStr;
    public $increasingArr;

    public function increaseNumber(){

        $this->increasingArr = Array();

        for($i=1; $i <= 100; $i++){

            if(($i % 3 == 0) && ($i % 5 == 0)){
                #$this->increasingStr .= "BuzzFizz";
                $this->increasingArr[] = "BuzzFizz";
            }elseif($i % 5 == 0){
                #$this->increasingStr .=  "Fizz";
                $this->increasingArr[] = "Fizz";
            }elseif($i % 3 == 0){
                #$this->increasingStr .=  "Buzz";
                $this->increasingArr[] = "Buzz";
            }else{
                #$this->increasingStr .= $i;
                $this->increasingArr[] = $i;
            }
            #$this->increasingStr .= " \n";
        }
        //return $this->increasingStr;
        return $this->increasingArr;
    }

    public function listArrResult(){

        return implode("\n", $this->increaseNumber());

    }

}

$run = new FizzBuzz();
#print_r($run->increaseNumber());
echo $run->listArrResult() . "\n";
// Zum ende wird ein String mit zeilenumbruch ausgeben.
?>