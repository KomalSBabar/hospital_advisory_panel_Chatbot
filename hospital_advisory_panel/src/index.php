
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <style>
      li{
        background-color: white;
    border-radius: 20px;
    margin: 2px;
      }

      .message-you{
        background-color: #e9f1fc;
        border-radius: 20px;
    margin: 2px;
      }

      button{
        border-radius: 24px;
    margin-bottom: 7px;
      }


    </style>



  </head>
  <body>
        <div class="container">
          <div class="row justify-content-md-center mb-4"   style="    margin-top: 100px;"  >
            <div class="col-md-4">
                <div class="card mt-4" style="background-color: aliceblue;">
                  <div class="card-body  messages-box">
                     <ul class="list-unstyled messages-list" >
                     
                        <!-- <p id="default_chat"  >Start Chatting...</p> -->
                        
                     </ul>

                  </div>
                  <div class="card-header">
                    <div class="input-group">
                      <input type="text" id="input-me" name = "messages" class="form-control input-sm" placeholder="Type your message here..">
                      <span class="input-group-append">
                      <input type="button" class = "btn btn-primary"  value="Send"  onclick="send_msg()">
                      
                    </span>
                    </div>
                  </div>
                </div> 
            </div>

          </div>
        </div>

        <script type="text/javascript">
          function getCurrentTime(){
              var now = new Date();
              var hh = now.getHours();
              var min = now.getMinutes();
              var ampm = (hh>=12)?'PM':'AM';
              hh = hh%12;
              hh = hh<10?"0"+hh:hh;
              min = min<10?"0"+min:min;
              var time = hh+":"+min+" "+ampm;
              return time;
          }
        //  alert(getCurrentTime());








        function send_msg(){

          //  document.getElementById('#default_chat').style.display="none";
          

           var txt = jQuery('#input-me').val();
          //  alert(txt);
          var html='  <li class="message-me clearfix justify-content-end">   <span class="message-img">  <img src="img/user_avatar.png"   style=" height: 40px;" class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  Me</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+txt+'</p></div></li>';
          // var ok = 'ok';         
         jQuery(".messages-list").append(html);
         jQuery("#input-me").val('');
          if(txt ==="having issue" ||  txt ==="not feeling well" || txt ==="need some information related to query" ||  txt ==="having any query" ){
            

           



            jQuery.ajax({
                 url:'get_bot_messages.php',
                 type:'POST',
                 data:'txt='+txt,
                 success:function(result){
                  console.log("result"+result);
                  var html='  <li class="message-you clearfix" >   <span class="message-img">  <img src="img/bot_avatar.png"   style=" height: 40px;"  class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  CHATBOT</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+result+'</p></div></li><button id = "btn1" value="felling stresed" onclick="click_me()">felling stresed</button> <button id = "btn2" value="discomfort in your chest , arm, neck , stomach" onclick="click_me()">discomfort  in your chest , arm, neck , stomach</button>  <button id = "btn4" value="Pain in Pelvic region" onclick="gync()">Pain in Pelvic region</button>  <button id = "btn5" value="Back Pain or Headache" onclick="not_serious()">Back Pain or Headache</button>    ';
                  jQuery(".messages-list").append(html);
 

					 }
            });

          }
          else {
            jQuery.ajax({
                 url:'get_bot_messages.php',
                 type:'POST',
                 data:'txt='+txt,
                 success:function(result){
                  console.log("result"+result);
                  var html='  <li class="message-you clearfix"  >   <span class="message-img">  <img src="img/bot_avatar.png"  style=" height: 40px;"  class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  CHATBOT</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+result+'</p></div></li> ';
                  jQuery(".messages-list").append(html);
					 }
            });
          }
        }
      
        function click_me(){

      
          var val_op1 = document.getElementById("btn1").value;
          var val_op2 = document.getElementById("btn2").value;
         
          if (val_op1 !== "") {
  txt = val_op1;
} else {
  txt = val_op2;
}
        
            jQuery.ajax({
                 url:'get_bot_messages.php',
                 type:'POST',
                 data:'txt='+txt,
                 success:function(result){
                  console.log("result"+result);
                  var html='  <li class="message-me clearfix"  >   <span class="message-img">  <img src="img/bot_avatar.png"   style=" height: 40px;"  class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  CHATBOT</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+result+'</p></div></li><button id = "btn3" value="What is sign of stable angina ?" onclick="What_angina()">What is sign of stable angina ?</button>  ';
                  jQuery(".messages-list").append(html);
					 }
            });
          
         


        
        }

        function What_angina(){

          var ang = document.getElementById("btn3").value;

          if(ang){
            var txt = ang;
          }

          jQuery.ajax({
                  url:'get_bot_messages.php',
                  type:'POST',
                  data:'txt='+txt,
                  success:function(result){
                    var html='  <li class="message-you clearfix"    >   <span class="message-img">  <img src="img/bot_avatar.png"  style=" height: 40px;"    class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  CHATBOT</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+result+'</p></div></li> ';
                  jQuery(".messages-list").append(html); 
                  }
          });

        }
       
        function gync(){

          var gyn =  document.getElementById("btn4").value;
          var headace = document.getElementById("btn5").value;
          if(gyn != ''){
            var txt = gyn;
          }else {
            var txt = headace;
          }

          jQuery.ajax({
                 url:'get_bot_messages.php',
                 type:'POST',
                 data:'txt='+txt,
                 success:function(result){
                  console.log("result"+result);
                  var html='  <li class="message-you clearfix"  >   <span class="message-img">  <img src="img/bot_avatar.png"  style=" height: 40px;"  class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  CHATBOT</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+result+'</p></div></li> ';
                  jQuery(".messages-list").append(html);
					 }
            });




        }


        function not_serious(){
            
          var gyn =  document.getElementById("btn4").value;
          var headace = document.getElementById("btn5").value;
          if(headace){
            var txt = headace;
          }

          jQuery.ajax({
                 url:'get_bot_messages.php',
                 type:'POST',
                 data:'txt='+txt,
                 success:function(result){
                  console.log("result"+result);
                  var html='  <li class="message-you clearfix"  >   <span class="message-img">  <img src="img/bot_avatar.png"  style=" height: 40px;"  class="avatar-sm rounded-circle"></span> <div class="message-body clearfix"> <div class="message-header"> <strong class="message-title">  CHATBOT</strong> <small class="time-messages text-muted "> <span class="fas fa-time"></span>'+getCurrentTime()+'</small></div><p class="messages-p">'+result+'</p></div></li> ';
                  jQuery(".messages-list").append(html);
					 }
            });



        }



        </script>


   </body>
</html>