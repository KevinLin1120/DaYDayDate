<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='src/main.css' rel='stylesheet' />
    <script src='src/main.js'></script>

    <script src="src/locales-all.js"></script>

    <link rel="stylesheet" href="style.css">

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
            right:'dayGridMonth,dayGridWeek'
          },

          //event:[{title:"",start:"2022-0502",end:"",allday:true}]

        });
        calendar.render();
      });

    </script>

  </head>
  <body>
    <div class="container">
        <div id='calendar'></div>
    </div>
  </body>
</html>