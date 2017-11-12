

<!DOCTYPE html>
<html>
   <head>
      <style type="text/css">
         .iframeWrapper{
         display:inline-block;
         position:relative;
         }
         .iframeWrapper:after{ /* I have higher Z-index so I can catch the click! Yey */
         content:"";
         position:absolute;
         z-index:1;
         width:100%;
         height:100%;
         left:0;
         top:0;
         }
         .iframeWrapper iframe{
         vertical-align:top;
         }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         $(document).ready(function(){
           var locations = ["http://jquery.com/", "http://es.learnlayout.com/display.html"];
           var len = locations.length;
           var iframe = $('#frame');
           var time_mil= 50000;
         
           var i = 0;
           setInterval(function () {
               iframe.attr('src', locations[++i % len]);
           }, time_mil);
         });
      </script>
   </head>
   <body>
      <div class="iframeWrapper">
         <iframe id="frame" src="http://jquery.com/" frameBorder="0" width="1000" height="500" ></iframe>
      </div>
      <!-- <div class="iframeWrapper">
         <iframe src="http://www.reuters.tv/" frameBorder="0"></iframe>
         </div>
         -->
   </body>
</html>
<script type="text/javascript">
   jQuery(function ($) { // DOM ready
     
      $('.iframeWrapper').on('click', function(e) {
        e.preventDefault();
        //alert('test');
        alert(e.pageX + ' , ' + e.pageY);
      });
     
   });
</script>

