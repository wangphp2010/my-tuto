<?php

	 //dirname(__DIR__)

	 /*
	 $dsn = 'mysql:dbname=test;host=127.0.0.1';
    $user = 'root';
    $password = 'root';

    try{
            $dbh = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
    }
	*/
	 $pdo = new PDO("sqlite:C:\sqlite\data.db", null , null , [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	 ]);
	 
	// var_dump(get_class_methods($pdo) ) ;
	 //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $error = null ;
	 try{	 
	  
		 $query = $pdo->query("SELECT * FROM posts ");
		 $posts = $query->fetchAll(  PDO::FETCH_OBJ   );
	 
		/*$posts =  $pdo->query("SELECT * FROM posts " , PDO::FETCH_OBJ  );   
	*/
	}catch(PDOException $e ){
		//var_dump( get_class_methods($e) ) ;
		$error = $e->getMessage();
	}
	 
	 /*
	 if( $query === false )
	 {
		 var_dump($pdo->errorInfo()) ;
		 die('Error SQL ');
	 }
	 */
	 
	 //$posts = $query->fetchAll(PDO::FETCH_ASSOC);
	 /*
	 echo '<pre>' ;
	 
	print_r( $posts );
	
	 echo '</pre>' ;
	*//*
	?>
	
	
	<?php if($error):?>
		<?=$error?>
	<?php else: ?>
	
	<ul>
		<?php foreach($posts as $post):?>
			<li>
			<?=$post->name?>
			</li>
		<? endforeach?>
		
	</ul>
	<?php endif ?>
	
	
	<?php
	*/
	/*
	
	#防止注入攻击等
	$id = $pdo->quote( $_GET['id'] );
	//var_dump($id) ;
	
	class Post {
		public $name ;
		
		public $last ; 
		public function getExcept()
		{
			
			return $this->name;
		}
		
		public function getLast()
		{
			
			return $this->name ." last ";
		}
	}
	try{
	
		$query = $pdo->prepare("SELECT * FROM posts  WHERE id = :id ");
		$query->execute([
		 'id'=>$_GET['id'],
		]);	 
		//$posts = $query->fetch(PDO::FETCH_ASSOC);
		$posts = $query->fetchAll(PDO::FETCH_CLASS , 'Post') ;#把结果以类形式赋给类Post 可以在类post里定义新的方法, 也可以只写 $query->fetchAll(PDO::FETCH_CLASS ) 
		 // var_dump($posts);
		
		//echo $posts[0]->getLast();
		
		$query = $pdo->prepare('UPDATE posts SET name = :name , content = :content WHERE id = :id ');
		$query->execute([
			'name'=>"my name " ,
			'content'=>"democrety die " ,
			'id'=>$_GET['id'] ,
		
		]);
		
		
	
	
	
	
	}catch(PDOException $e ){
		//var_dump($e);
	}
	
	
	
	$pdo->beginTransaction();
	$pdo->exec("UPDATE  posts SET name = 'new name '  LIMIT 50    ");
	$pdo->exec("UPDATE  posts SET content = 'new name44 '   ");
	
	$posts = $pdo->query("SELECT * FROM posts ")->fetchAll();
	var_dump($posts);
 	//$pdo->query("DELETE FROM posts LIMIT 1 ");
	$pdo->rollback();# 取消操作
	//$pdo->commit() ; #确认操作
	
	*/
	?>
	
	<?php
	
	
		$query = $pdo->prepare("INSERT INTO  posts (name , content)VALUES( :name , :content ) ");
		$query->execute([
		 'name'=>"title ",
		 'content' =>" content "
		]);
		
		var_dump(get_class_methods($pdo));
		 echo $pdo->lastInsertId();
		?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	