
<?php
 
  $file = fopen("data.csv","r");


while(! feof($file))
  {
  
  $datas[] = fgetcsv($file) ;
  }

fclose($file);
unset($datas[0]) ;
unset($datas[1]) ;
unset($datas[2]) ;
unset($datas[3]) ;

// print_r($datas) ;
// [4] =>1960 
// [62]=>2018
foreach($datas as $key => $data )
{
    $dd = $data ;
    unset($data[0]) ;
    unset($data[1]) ;
    unset($data[2]) ;
    unset($data[3]) ;
     
    if( count( $data ) > 0) 
        foreach($data as $k => $v)
        {
            $datay[ $k + 1956 ] = $v ;
        }


    if( $key > 4 && $key < 269 )
    {

        $gdps[] =  array(
            "country" => $dd[0] ,
             "data" => $datay
         );

    }

}

 // print_r($gdps) ;

$str = json_encode($gdps); 
// echo $str ;
 file_put_contents("data.txt",$str);

?>  