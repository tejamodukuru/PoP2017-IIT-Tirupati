<?hh
namespace
{   
    echo "Enter the first integer:";
    fscanf(STDIN, "%d\n", $num1);
    echo "Enter the second integer:";
    fscanf(STDIN, "%d\n", $num2);
    $num3 = $num1 + $num2;
    echo( "The sum of $num1 and $num2 is $num3\n" );
}
