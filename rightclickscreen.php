<!doctype html>
<html>
    <head>
        <script>
            
            var menuDisplayed = false;
            var menuBox = null;
            
            window.addEventListener("contextmenu", function() {
                var left = arguments[0].clientX;
                var top = arguments[0].clientY;
                
                menuBox = window.document.querySelector(".menu");
                menuBox.style.left = left + "px";
                menuBox.style.top = top + "px";
                menuBox.style.display = "block";
                
                arguments[0].preventDefault();
                
                menuDisplayed = true;
            }, false);
            
            window.addEventListener("click", function() {
                if(menuDisplayed == true){
                    menuBox.style.display = "none"; 
                }
            }, true);
        </script>
        <style>
            .menu
            {
                width: 150px;
                box-shadow: 3px 3px 5px #888888;
                border-style: solid;
                border-width: 1px;
                border-color: grey;
                border-radius: 2px;
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 3px;
                padding-bottom: 3px;
                position: fixed;
                display: none;
            }
            
            .menu-item
            {
                height: 20px;
            }
            
            .menu-item:hover
            {
                background-color: #6CB5FF;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="menu">
            <div class="menu-item">Sorry!back to soon</div>
            </div>
    </body>
</html>