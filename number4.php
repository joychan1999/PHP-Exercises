<!-- Write a function to check whether a number is prime or not. -->
<?php
function IsPrime($n)
{
 for($i=2; $i<$n; $i++)
   {
      if($n %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }

$a = IsPrime(10);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
