<!DOCTYPE html>
<html lang='en'>
  <head>
    

    <style>
      
      .side-menu{
          width: 20%;
          height: 650px;
          background-color:#394B6F;
      }
      .calender-back{
          background-color: lightgray;
          width: 60%;
          height: 650px;
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
      /* margin-left: 40px; */
      /* margin-top: 10px; */
      } 
      /* i{
          float: right;
          margin-right: 20px;
          margin-top: 10px;
          width: 20px;
          height: 20px;
      } */

      /*calander */
      #calendar{
        height: 650px;
      }
      
      /* buttons */
      .btn{
          width: 90px;
          height: 33px;
          border-radius: 30px;
          background-color: darkgray;
          /* font-family: 'Inter'; */
          /* font-style: normal; */
          text-align: center;
          font-weight: 600;
          font-size: 15px;
          color: black;
      }
      .btn-cancel{
          background: red;
          margin-right: auto;
      }
      .btn-confirm{
          background: black;
      }
      .modal-footer{
          display: flex;
          padding: 0 30px;
          border-top: none;
      }

      /*card */
      .CARD{
        display: none;
      }
      .setCard{
            position: absolute;
            width: 390px;
            height: 600px;
            /*left: 500px;*/
            top: 100px;
            padding: 20px;
            background: white;
            border-radius: 70px;
            border: 1px solid black;
        }
        #isPublic{
            width: 30px;
            height: 30px;
            background-color: transparent;
            border: none;
            background-image: url('./card/images/unlock.svg');
        }
        .modal-header .close{
            margin: 1px;
            padding: 1px;
        }
        .close > span{
            font-size: 32px;
        }
        .test{
            width: 100%;
            height: 131px;
            left: 676px;
            top: 535px;

            padding: 20px;
            background: wheat;
            border-radius: 30px;
            border: none;

            overflow: auto;
            resize: vertical;
        }
        #cardInput > tbody > tr > td > input{
            border: none;
            border-bottom: 2px solid black;
        }
        #cardInput > tbody > tr > td{
            padding-bottom: 14px;
            
            font-weight: 600;
            font-size: 16px;
        }
      
    </style>

    <script>
      /* */
      var setID, setTitle ,setDateStart, setDateEnd;
      /*
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
            {title:"test2",start:"2022-06-17T18:33",end:"2022-0502T12:00:00"},
            {title:"test3",start:"2022-0509T11:00:00",end:"2022-0511T11:00:00"},
            {title:setTitle,start:setDateStart,end:setDateEnd}
          ],
        });

        calendar.render();
      });
      */

      $(document).ready(function(){
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
              {id:"1",title:"test1",start:"2022-06-17T18:33",end:""},
              {id:"2",title:"test1",start:"2022-06-08T00:24",end:"2022-06-08T00:24"},
              // {title:"test2",start:"2022-06-17T18:33",end:"2022-0502T12:00:00"},
              // {title:"test3",start:"2022-06-08T00:24",end:""},
              {id:setID, title: setTitle,start: setDateStart,end: setDateEnd}
            ],
            /**/
            eventRender: function(event, element) {
              element.append( "<span class='closeon'>X</span>" );
              element.find(".closeon").click(function() {
                $('#calendar').fullCalendar('removeEvents',event._id);
              });
            },
            /*eventClick: function(events){
              console.log(setID, setTitle, setDateStart, setDateEnd);
            }*/
            
          });

          calendar.render();
          
          $("#fc-dom-1").append('<button type="button" class="btn btn-primary" id="add" data-toggle="modal" data-target="#editCard">新增行程</button>');
          $('#add').click(function(){
            $('.CARD').show();
          });

          var isPublic = true;
          $("#isPublic").mouseup(function(){
              if(isPublic){ // If it's public, switch to private
                  $(this).css("background-image", 'url(./card/images/lock.svg)');
                  isPublic = false;
              }
              else{ // If it's private, switch to public
                  $(this).css("background-image", 'url(./card/images/unlock.svg)');
                  isPublic = true;
              }
          });

          /** */
          $('#confirm').click(function(){
            console.log("yes");
            const SetTitle = document.getElementById('title');
            setTitle = SetTitle.value;
            console.log(setTitle);
            
            const SetStartTime = document.getElementById('startDT');
            setDateStart = SetStartTime.value;
            console.log(setDateStart);

            const SetEndTime = document.getElementById('endDT');
            setDateEnd = SetEndTime.value;
            console.log(setDateEnd);

            console.log(setTitle,setDateStart,setDateEnd);
            calendar.addEvent({title: setTitle, start: setDateStart,end: setDateEnd});
          });
          
          
          //calendar.render();

      });
      
    </script>
    
  </head>

  <body>
    
  
    <div class="Container">
      

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


      <!-- card -->
      <div class ="CARD">
        <div class="modal fade" id="editCard" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content setCard">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <!-- <h5 class="modal-title" id="cardModalLabel">Modal title</h5> -->
                      <button id="isPublic"></button>
                  </div>
                  <div class="modal-body">
                      <form action="" method="post" name="eventCard">
                          <table id="cardInput">
                              <tr>
                                  <td>標題：</td>
                                  <td><input type="text" name="title" id="title"></td>
                              </tr>
                              <tr>
                                  <td>起始日期：</td>
                                  <td><input type="datetime-local" name="startDT" id="startDT"></td>
                              </tr>
                              <tr>
                                  <td>結束日期：</td>
                                  <td><input type="datetime-local" name="endDT" id="endDT"></td>
                              </tr>
                              <tr>
                                  <td>連結：</td>
                                  <td><input type="text" name="link"></td>
                              </tr>
                              <tr>
                                  <td>邀請：</td>
                                  <td><input type="text" name="invite"></td>
                              </tr>
                              <tr>
                                  <td>顏色分類：</td>
                                  <td><input type="color" name="color"></td>
                              </tr>
                          </table>
                          <textarea class="test" rows="3" placeholder="備註： "></textarea>
                      </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" id="confirm" data-dismiss="modal">確定</button>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>

