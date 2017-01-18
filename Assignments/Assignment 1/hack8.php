<?hh 

namespace
{
    function loop( $n )// loop performs integer division and prints 1024 512 256 128 64 32 16 8 4 2 1 0
    {    while( $n >= 1 )
        {   
            print( "$n " );
            $n = intdiv( $n, 2 );
        }
    }
    
    loop( 1024 );
    echo( "0\n" );
}
