<?hh
namespace
{
    for( $i = 1; $i <= 10; $i++ )
    {   print( "$i" );
        if( $i != 10 )
        {   print( ", " );
        }
    }
    print( "\n" );
}  
