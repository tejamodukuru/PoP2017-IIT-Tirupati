<?hh
namespace
{
function instructions()
{
    print( "Choices are as follows:\n1 :- To push an entry on to the stack\n2 :- To remove the top entry from the stack\n" );
    print( "3 :- To end the program\n" );
}
function printStack( $a, $i )
{
    
    if( $i >= 10 )
    {
        print( "Stack is empty\n" );
    }
    else
    {
        for( $j = $i; $j <= 9; $j++ )
        {
            print( "$a[$j] -> " );
        }
        print( "NULL\n" );
    }
}
    //value, choice;
    $a = array( 10 );
    for( $i = 0; $i <= 9; $i++ )
    {   
        $a[ $i ] = 0;
    }
    $i = 10;
    instructions();
    print( "Enter your choice: " );
    fscanf(STDIN, "%d\n", $choice );
    while( $choice != 3 )
    {   
        switch( $choice  )
        {
                case 1: 
                print( "Enter the value to be inserted:" );
                fscanf(STDIN, "%d\n", $value );
                $i = $i - 1;
                $a[ $i ] = $value;
                printStack( $a, $i );
                break;
                case 2:
                if( $i < 10 )
                {   $i = $i + 1;
                }
                else
                {
                    $i = 10;
                }
                printStack( $a, $i );
                break;
                default:
                print( "Incorrect choice entered\n ");
                instructions();
                break;
        }
         print( "Enter your choice: " );
        fscanf(STDIN, "%d\n", $choice );
     }
        print( "End of the program\n" );
}
