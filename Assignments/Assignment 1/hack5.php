<?hh
namespace

{       
    function solve( int $num, int $from, int $to, int $aux )// 1 to 2
     {
     	if( $num == 1 )
     	{	echo( "$from to $to\n" );
     		//$count++;
     		return;
     	}
     	
     	solve( $num - 1, $from, $aux, $to );
     	
     	echo( "$from to $to\n");
     	 //$count++;
     	
     	solve( $num - 1, $aux, $to, $from );
     
     }

    
	print( "Enter the total number of disks: " );
	fscanf(STDIN, "%d", $num );
	
	solve( $num, 1, 2, 3 );
	
}
