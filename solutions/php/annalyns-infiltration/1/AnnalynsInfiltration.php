<?php
$is_knight_awake = false;
$is_archer_awake = false;
$is_prisoner_awake = false;
$infiltration = new AnnalynsInfiltration();
$infiltration->canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake);
$infiltration->canFastAttack($is_knight_awake);

class AnnalynsInfiltration
{
    
    public function canFastAttack($is_knight_awake)
    {
        
        if($is_knight_awake === true){
            return false;
        }else{
            return true;
        }
        
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
       
       
            if($is_knight_awake === true || $is_archer_awake === true || $is_prisoner_awake  === true ){
            return true;
    }else if($is_prisoner_awake = false && $is_archer_awake = false && $is_knight_awake = false){
            return false;
            }
        }
           
            

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_archer_awake === true || $is_prisoner_awake  === false){
            return false;
        }else if ($is_archer_awake === false && $is_prisoner_awake  === true){
            return true;
        }
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if($is_archer_awake === false && $is_dog_present === true){
            return true;
        }else if( $is_dog_present === false &&  $is_prisoner_awake === true && $is_knight_awake === false &&  $is_archer_awake === false){
            return true;
        }
    }
}
