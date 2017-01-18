<?hh
namespace
{
    function fibonacci( $n )
    {   if( $n == 0 || $n == 1 )
        {   return 1;
        }
        else
        {   return fibonacci( $n - 1 ) + fibonacci( $n - 2 );
        }
    }


    echo( "Enter the number: " );
    fscanf( STDIN, "%d\n", $n );
    $ans = fibonacci( $n );
    echo( "The $n fibonacci number is: $ans\n" );

}
