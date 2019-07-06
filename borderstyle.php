<!DOCTYPE html>
<html>
<head>
<style> 
#borderimg1 { 
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url(border.png) 30 round; /* Safari 3.1-5 */
    -o-border-image: url(border.png) 30 round; /* Opera 11-12.1 */
    border-image: url(border.png) 30 round;
}

#borderimg2 { 
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url(border.png) 30 stretch; /* Safari 3.1-5 */
    -o-border-image: url(border.png) 30 stretch; /* Opera 11-12.1 */
    border-image: url(border.png) 30 stretch;
}
</style>
</head>
<body>

<h1>The border-image Property</h1>
<p>The border-image property specifies an image to be used as the border around an element:</p>

<p id="borderimg1">Here, the image tiles to fill the area. The image is rescaled if necessary, to avoid dividing tiles.</p>
<p id="borderimg2">Here, the image is stretched to fill the area.</p>

<p>Here is the original image:</p><img src="border.png">
<p><strong>Note:</strong> Internet Explorer 10, and earlier versions, do not support the border-image property.</p>

</body>
</html>
