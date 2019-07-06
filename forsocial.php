<style>

.conenctbox div{padding:0;}

.conenctbox .social-media {
    padding: 0 10px 0 7px;
}

.conenctbox .jamapunji {margin-top: 10px; text-align: center; display: inline-block; }
.conenctbox .jamapunji a img {width: 140px;}

.fblink{position:relative;width:35px;height:35px;background:url(images/footer-fb-icon.png) no-repeat;background-size:100% auto;text-indent:-9999px;display:block;margin:0px auto;}
.fblink:hover{background:url(images/footer-fb-icon-hover.png) no-repeat;}


.emailbtn{position:relative; width:35px; height:35px; background:url(images/footer-email-icon.png) no-repeat; text-indent:-9999px; display:block;margin:0px auto;}
.emailbtn:hover{background:url(images/footer-email-icon-hover.png) no-repeat;}

.tooltiptextfornew {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}
.tooltiptextfornew::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltipfornew {
    position: relative;
    display: inline-block;
    
}

.tooltipfornew .tooltiptextfornew {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}

.tooltipfornew .tooltiptextfornew::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltipfornew:hover .tooltiptextfornew {
    visibility: visible;
    opacity: 1;
}
/* Sub page Styling - Islamic */
	</style>
<div class="row social-media">
        <div class="col-xs-3  text-center"><a href="" id="lnkFacebook" target="_blank" class="fblink">facebook</a></div>
        <div class="col-xs-3  text-center"><a href="" id="lnkEmail" class="emailbtn "></a></div>
        <span class="tooltiptextfornew">Tooltip text</span>
    </div>
    
    <div class="tooltipfornew"><a href="" id="lnkEmail" class="emailbtn "></a>
  <span class="tooltiptextfornew">Tooltip text</span>
</div>