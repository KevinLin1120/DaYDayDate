<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='./src/main.css' rel='stylesheet'>
    <script src='src/main.js'></script>

    <script src="src/locales-all.js"></script>

    <!-- <script src="card/cards.html"></script> -->

    <link rel="stylesheet" href="style.css">

    <style>
      label.logo{
        color:black;
        font-size: 36px;
        line-height: 80px;
        padding: 0 50px;
        font-weight: bold;
      }
      nav{
          background-color: white;
          height: 80px;
          margin: 0;
          padding: 0;
          border-bottom: 1px solid black;
      }
      .side-menu{
          width: 20%;
          height:600px;
          background-color:#394B6F;
      }
      .calender-back{
          background-color: lightgray;
          height: 600px;
          width:60%; 
          border-radius:20px;
          overflow: flex;
          margin: auto;
      } 
      .flex-container {
      display: flex;
      flex-direction: row;
      }
      input[type=search] {
      border: 1px solid #000;
      width: 200px;
      padding: 4px 12px;
      border-radius: 20px;
      -webkit-appearance: none;
      margin-left: 40px;
      margin-top: 10px;
      } 
      i{
          float: right;
          margin-right: 20px;
          margin-top: 5px
      }
    </style>

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
      <header>
          <nav>
              <label class="logo">DayDay Date</label>
              <i class="fa-solid fa fa-bell-o fa-2xl" aria-hidden="true"></i>
          </nav>
      </header>

      <div class="flex-container">
        <div class="side-menu">
          <form>
              <input type="search"placeholder="Search friends...">
          </form>
          <aside>
          </aside>
        </div>
        <div class="calender-back">
        <div id='calendar'></div>
      </div>
    </div>
  </body>

</html>

