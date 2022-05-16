<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='src/main.css' rel='stylesheet' />
    <script src='src/main.js'></script>

    <script src="src/locales-all.js"></script>

    <!-- <script src="card/cards.html"></script> -->

    <!-- <link rel="stylesheet" href="style.css"> -->

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:'zh-tw',
          navLinks: true,
          headerToolbar:{
            left:'prev,next today',
            center:'title',
            right:'dayGridMonth,dayGridWeek',
            
          },
          events:[
            {title:"test1",start:"2022-0501",end:""},
            {title:"test2",start:"2022-0502T11:00:00",end:"2022-0502T12:00:00"},
            {title:"test3",start:"2022-0509T11:00:00",end:"2022-0511T11:00:00"}
          ]

        });
        calendar.render();
      });

    </script>

  </head>

  <body>
    
  
    <div class="container">

      <div id='newEvent'>
        <?php
            include("./card/cards.html");
          ?>
      </div>
          
      <div id='calendar'></div>
      </div>
  </body>

</html>

