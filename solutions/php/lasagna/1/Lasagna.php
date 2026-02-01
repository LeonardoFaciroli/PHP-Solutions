<?php
$timer = new Lasagna();
$timer -> expectedCookTime();
$timer->remainingCookTime(40);
$timer->totalPreparationTime(3);
$timer->totalElapsedTime($layers_to_prep, $elapsed_minutes);
$timer->alarm();
class Lasagna
{
    public function expectedCookTime()
    {     
        return 40;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        $cookTime = $this->expectedCookTime();
        return $cookTime - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
       return $layers_to_prep * 2;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
         $prep = $this->totalPreparationTime($layers_to_prep);
        return $prep + $elapsed_minutes;
    }

    public function alarm()
    {
        // Implement the alarm method
            return "Ding!";
    }
}
