<?hh  
namespace
{
    function leap( $year )// Finds whether a given year is leap or not
    {
        if( $year % 4 == 0 && ( $year % 100 != 0 || $year % 400 == 0) )
        {
            return 1;
        }
        else 
        {   return 0;
        }
    }

    print( "Enter the year: " );
    fscanf(STDIN, "%d\n", $year);
     
    if( leap( $year ) )
    {   print( "$year is a leap year\n" );
    }
    else
    {   print( "$year is not a leap year\n" );
    }
}
