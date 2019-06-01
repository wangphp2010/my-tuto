<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>parallax effect | pure css | no javascript</title>
    
    <style>
        
        html{
            height: 100%;
            overflow: hidden;
            
        }  
        body{
            color: #fff;
            margin: 0;
            padding: 0;
            perspective: 1px;
            transform-style: preserve-3d;
            height: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
            font-family: "luna";
        }
        header{
            box-sizing: border-box;
            min-height: 100vh;
            padding: 30vw 0 5vw;
            position: relative;
            transform-style: inherit;
            width: 100vw;
            
        }
        header h1{
            margin-top: -100px;
        }
        
        header, header:before{
            background: 50% 50% / cover;
        }
        header::before{
            bottom: 0;
            content: '';
            left: 0;
            right: 0;
            top: 0;
            position: absolute;
            display: block;
            background-image: url(bg.jpg);
            background-size: cover;
            transform-origin: center center 0 ;
            transform: translateZ(-1px) scale(2);
            z-index: -1;
            min-height: 100vh;
        }
        header * {
            font-weight: normal;
            letter-spacing: 0.2em;
            text-align: center;
            margin: 0;
            padding: 1em 0 ;
                
            
                
        }
        
      
    </style>
   </head>
    <body>
        <header>
            <h1>Parallax Effect</h1>
            <p>Pure CSS // No JavaScript</p>
        </header>
       

    </body>
</html>


 
 
 