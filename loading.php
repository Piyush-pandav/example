<style>
#dvLoading {
background:url(http://loadinggif.com/images/image-selection/36.gif) no-repeat center center;
height: 100px;
width: 100px;
position: fixed;
left: 50%;
top: 50%;
margin: -25px 0 0 -25px;
z-index: 1000;
}
</style>

<script>
$(document).ready(function() {
    var iSrc = "http://2.bp.blogspot.com/-Us15MaCuNjg/T88jIdQzGUI/AAAAAAAACbE/MDNj13OmjiI/s1600/Demo.jpg";
    var rndNum = Math.random();
    iSrc = iSrc + "?q=" + rndNum;
    $('img').attr('src', iSrc);
});

$(window).bind("load", function() {
    $('#dvLoading').fadeOut(2000);
});
</script>
<div id="dvLoading"></div>
<img alt="Nature"  />