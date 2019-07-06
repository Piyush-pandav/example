<html>
    <head>
                  <script src="http://code.jquery.com/jquery-latest.js">
                  </script>
         <script>
                        $(document).ready(function() {
                        $('#btn_click').on('click', function() {
                        var url = '../index.php'; //please insert the url of the your current page here, we are assuming the url is 'index.php'          
                        $('#div1-wrapper').load(url + ' #div1'); //note: the space before #div1 is very important
                        });
                   });
                  </script>                    
                  <style>
                        body{ 
                              font-size: 12px; font-family: Arial; 
                        }
                  </style>            
    </head>
    
<body>
    <br />
       <div id="div1-wrapper">
          <div id="div1" style="border:solid 1px red; width: 100px;">    
                <?php   echo  rand ( 10 , 100 );  ?>         
          </div>  
        </div>  
    <br /><br />
    
    <div id="div2" style="border:solid 1px green; width: 100px;"> 
        <button type="button" id="btn_click" /> click me!</button>
    </div>    
</body>
</html>