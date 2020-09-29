
    <style>
        
        body{
            position: relative;
        }
       #player-overlay {
  position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    background: transparent;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-focus-ring-color: rgba(0,0,0,0);
    outline: none;
    display: flex;
  
}
@media (min-width: 576px) { 
#player-overlay{
   min-width: 250px;
    height: auto;
}
 }
 @media (min-width: 768px) { 
    #player-overlay{
    width: 760px;
    height: auto;
}
  }
  @media (min-width: 992px) {
  #player-overlay{
    width: 990px;
    height: auto;
} }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

   
<style>
 @media screen and (min-width: 200px) and (max-width: 567px) and (orientation: landscape) {
 html {
    transform: rotate(-90deg);
    transform-origin: left top;
    width: 100vh;
    overflow-x: hidden;
    position: absolute;
  }
}
@media screen and (min-width: 200px) and (max-width: 767px){
.sticky {
  top: 0px;
  -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
  -moz-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
  right: 0px;
  position: fixed;
  width: 50%;
  z-index: 1;
background-color: black;
border: 1px solid white;
text-align: center;
padding-right:24.5%;
padding-left:24.5%;
}}
@media screen and (min-width: 768px) and (max-width: 1300px){
.sticky {
  top: 0px;
  -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
  -moz-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.9);
  position: fixed;
  top: 80%;
  right: 10px;
  width: 20%;
  z-index: 1;
background-color: black;
border: 1px solid white;
text-align: center;
padding-right:0%;
padding-left:0%;
}}

</style>

<hr />
<div class="" id="myHeader">
<div id="http">
<script src="http://content.jwplatform.com/libraries/NxsmWX2o.js"></script>

<div id="player">
</div>
<script type="text/javascript">
jwplayer("player").resize(480, 270);
    jwplayer('player').setup({
        file: 'https://www.livedoomovies.com/02_epl2_720p/chunklist.m3u8',
playbackRateControls: [0.75, 1, 1.25, 1.5],
        title: 'BdliveServer.xyz',
        width: '100%',
        aspectratio: '16:9',
        mute: false,
        repeat: 'true',
        autostart: true,
        primary: 'html5',
        type: 'm3u8',
        setFullscreen: true,
controls: true,
showCode: true,
responsive: true,
skin: {
  name: "glow",
       active: "red",
       inactive: "",
       background: ""
  }
    });
</script>
</div>
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
