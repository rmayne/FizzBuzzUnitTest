<?php
class fizzbox
{
   public function fizz($someInt)
   {
		if  ($someInt == 0)
		{
			return 0;
		}
		elseif ($someInt % 3 && $someInt % 5)
		{
			return $someInt;	
		}
		elseif (!($someInt % 3) && !($someInt % 5))
		{
			return "fizzbuzz";
		}
		elseif (!($someInt % 3))
		{
			return "fizz";
		}
		elseif (!($someInt % 5))
		{
			return "buzz";
		}
   }

}
?>
