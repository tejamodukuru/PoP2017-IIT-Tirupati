<?hh
namespace
{
function instruction()
{
    print( "Choices are as follows:\n1 :- To enQueue\n2 :- To deQueue\n" );
    print( "3 :- To end the program\n" );
}
function printqueue( $a, $j )
{
    if( $j == 0 )
    {
        print( "Queue is empty\n" );
    }
    else
    {
        for( $i = 0; $i <= $j - 1; $i++ )
        {
            print( "$a[$i] -> " );
        }
        print( "NULL\n" );
    }
}
    $a = array();
    $j = 0;
    instruction();
    print( "Enter your choice: " );
    fscanf(STDIN, "%d\n", $choice );
    while( $choice != 3 )
    {   
        switch( $choice  )
        {
                case 1: 
                print( "Enter the value to be inserted:" );
                fscanf(STDIN, "%d\n", $value );
                $a[ $j ] = $value;
                $j++;
                printqueue( $a, $j );
                break;
                case 2:
                if( $j != 0 )
                {    for( $k = 0; $k <= $j - 2; $k++ )
                    {
                        $a[ $k ] = $a[ $k + 1 ];
                    }
                    $j = $j - 1;
                }
                printqueue( $a, $j );
                break;
                default:
                print( "Incorrect choice entered\n ");
                instruction();
                break;
        }
         print( "Enter your choice: " );
        fscanf(STDIN, "%d\n", $choice );
     }
        print( "End of the program\n" );
}
