 <!-- js placed at the end of the document so the pages load faster -->
 <script src="<?php echo base_url() ?>vendor/js/jquery.js"></script>
 <script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>

 <!--BACKSTRETCH-->
 <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
 <script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery.backstretch.min.js"></script>
 <script>
     $.backstretch("assets/img/bg-login.jpg", {
         speed: 500
     });
 </script>

 <script>
     function getTime() {
         var today = new Date();
         var h = today.getHours();
         var m = today.getMinutes();
         var s = today.getSeconds();
         // add a zero in front of numbers<10
         m = checkTime(m);
         s = checkTime(s);
         document.getElementById('showtime').innerHTML = h + ":" + m + ":" + s;
         t = setTimeout(function() {
             getTime()
         }, 500);
     }

     function checkTime(i) {
         if (i < 10) {
             i = "0" + i;
         }
         return i;
     }
 </script>

 </body>

 </html>