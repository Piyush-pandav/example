<style type="text/css">

  /* WebKit and Opera browsers */
  @-webkit-keyframes spinner {
    from { -webkit-transform: rotateY(0deg);    }
    to   { -webkit-transform: rotateY(-360deg); }
  }

  /* all other browsers */
  @keyframes spinner {
    from {
      -moz-transform: rotateY(0deg);
      -ms-transform: rotateY(0deg);
      transform: rotateY(0deg);
    }
    to {
      -moz-transform: rotateY(-360deg);
      -ms-transform: rotateY(-360deg);
      transform: rotateY(-360deg);
    }
  }
 #stage {
    margin: 1em auto;
    -webkit-perspective: 1200px;
    -moz-perspective: 1200px;
    -ms-perspective: 1200px;
    perspective: 1200px;
  }
#spinner {
    -webkit-animation-name: spinner;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-duration: 6s;

    animation-name: spinner;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-duration: 6s;

    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }

  #spinner:hover {
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
  }
</style>

<div id="stage" style="background: rgba(0,0,0,0.5);">
<p id="spinner" style="background: rgba(0,0,0,0.5); text-align: center; color: #fff;">Stop, I'm getting dizzy!</p>
</div>
