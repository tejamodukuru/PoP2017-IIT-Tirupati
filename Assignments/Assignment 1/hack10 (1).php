<?hh 
namespace
{
    echo( "Enter the length of the array: " );// Calculates the dot product of two arrays
    fscanf(STDIN, "%d\n", $n);
    $array1 = array( $n );
    $array2 = array( $n );

    echo( "Enter the elements for the first array:\n" );
    for( $i = 0; $i <= $n - 1; $i++ )
    {   
        fscanf(STDIN, "%d\n", $array1[ $i ] );
    }
    
    echo( "Enter the elements for the second array:\n" );
    for( $i = 0; $i <= $n - 1; $i++ )
    {   
        fscanf(STDIN, "%d\n", $array2[ $i ]);
    }

    $total = 0;

    for( $i = 0; $i <= $n - 1; $i++ )
    {   
        $total = $total + $array1[ $i ] * $array2[ $i ];
    }

    print( "Dot product of two arrays is $total\n" );

}
