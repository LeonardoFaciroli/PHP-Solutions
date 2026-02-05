<?php
$proporcao = new PizzaPi ();
$proporcao -> calculateDoughRequirement(4,8);// numero de pizzas e pessoas
$proporcao -> calculateSauceRequirement(8, 250);//numero de pizzas e ml da lata
$proporcao -> calculateCheeseCubeCoverage(25, 0.5, 30);//dimensao do queijo, espessura da pizza, diametro da pizza
$actual = $proporcao -> calculateLeftOverSlices(4,3); //pizza e amigas
class PizzaPi
{
    public function calculateDoughRequirement($pizza, $persons)
    {
        return $pizza * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizza, $ml)
    {
        //lata 250ml    
        //receita 125ml
        //quantas latas preciso?
        $molhoRequerido = $pizza * 125;
        return $molhoRequerido / $ml;
    }

    public function calculateCheeseCubeCoverage($dimenQueijo,$espessura,$diaPizza)
    {
        return (floor(($dimenQueijo**3)/($espessura * M_PI * $diaPizza)));
    }

    public function calculateLeftOverSlices($pizza, $amg)
    {
        $calculo = ($pizza/$amg);
        if($calculo <= 0.5) {
             return floor($calculo);
        }else{
            return ceil($calculo);
        }
      
    }
}
