<?hh
namespace
{   function gcd( $num1, $num2 )
    {   
        if( $num2 == 0 )
        {   return $num1;
        }
        else
        {  return gcd( $num2, $num1 % $num2 );
        } 
    }  
        

    echo "Enter the largest integer:";
    fscanf(STDIN, "%d\n", $num1);
    echo "Enter the second integer:";
    fscanf(STDIN, "%d\n", $num2);
    $ans = gcd( $num1, $num2 );
    echo ( "GCD of $num1 and $num2 is $ans\n" );
}

