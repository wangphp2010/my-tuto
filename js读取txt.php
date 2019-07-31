<div>
     
    <input type="file" id="files" style="display:none" onchange="getResFile();" />
    <input type="button" id="import" value="导入" onclick="clickimport()" />
</div>

<script>
    function clickimport() {
        document.getElementById('files').click();
    }



    function getResFile() {
       var selectedFile ;
          
          selectedFile  = document.getElementById("files").files[0]; //获取读取的File对象
          selectedFile  = event.target.files[0]; //获取读取的File对象
            console.log(selectedFile) ;
			
        var name = selectedFile.name; //读取选中文件的文件名
        var size = selectedFile.size; //读取选中文件的大小
        console.log("文件名:" + name + "大小：" + size);
        var reader = new FileReader(); //这里是核心！！！读取操作就是由它完成的。
        reader.readAsText(selectedFile); //读取文件的内容

        reader.onload = function() {
            console.log(this.result); //当读取完成之后会回调这个函数，然后此时文件的内容存储到了result中。直接操作即可。
        };
    }
</script>











<!-- <style>
    #demo {
        width: 8px;
        height: 8px;
        border: 1px solid #ccc;
    }
</style>
<canvas id="demo" width="6" height="6">本浏览器不支持canvas</canvas>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<textarea id="div1" style="width:1650px; height:740px" readonly>
</textarea>

<script>
    document.getElementById('div1').innerHTML = '读取中...';
    $(document).ready(function() {
        
        $.get("/data.txt", function(data){
         $("#div1").text(data)
            console.log(data)

        });
    });
</script> -->

<?php
 
/* $file = fopen("data.csv","r");


while(! feof($file))
  {
  
  $datas[] = fgetcsv($file) ;
  }

fclose($file);
unset($datas[0]) ;
unset($datas[1]) ;
unset($datas[2]) ;
unset($datas[3]) ;

//print_r($datas) ;
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


    if( $key > 4 && $key < 63 )
    {

        $gdps[] =  array(
            "country" => $dd[0] ,
             "data" => $datay
         );

    }

}

 print_r($gdps) ;

$str = json_encode($gdps); 
// echo $str ;
file_put_contents("data.txt",$str);

?> */
