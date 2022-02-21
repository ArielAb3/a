<!DOCTYPE HTML>
<html>
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  background-image: url('widdeing.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: 80% 80%;
}
</style>
    <style>
    p {
        text-align: center;
        font-size: 60px;
        color: #dcb32f;
        margin-top: 0px;
       
    }
    
    </style>
    
   
</head>

<body>
   
    <p id="demo1"></p>
    <p style="color: #499519"; id="demo2"></p>
    <p id="demo"></p>
    <script>
    // Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    
    var countDownDate = <?php echo strtotime('mar 28, 2022 19:30:00') ?> * 1000;
    var now = <?php echo time() ?> * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo1").innerHTML =" חתונת אריאל ונופת <BR><BR><BR><BR><BR><BR><BR>";
        document.getElementById("demo2").innerHTML =" בעוד <BR>";
        document.getElementById("demo").innerHTML = days + " ימים <BR> " + hours + " שעות <BR> " +
            minutes + " דקות <BR> " + seconds + " שניות <BR> ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>
</body>

</html>