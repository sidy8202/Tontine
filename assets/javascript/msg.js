// function openForm() {
//     document.getElementById("#chatbox").style.display = "block";
//   }
  
//   function closeForm() {
//     document.getElementById("#chatbox").style.display = "none";
//   }



  //Load the file containing the chat log
function loadLog(){     
  var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
  $.ajax({
      url: "msgton.php",
      cache: false,
      success: function(html){        
          $("#chatbox").html(html); //Insert chat log into the #chatbox div   
           
          //Auto-scroll           
          var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
          if(newscrollHeight > oldscrollHeight){
              $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
          }               
      },
  });
}
setInterval (loadLog, 2500); 

//Load the file containing the chat log
function loadLog(){     
  $.ajax({
      url: "msgton.php",
      cache: false,
      success: function(html){        
          $("#chatbox").html(html); //Insert chat log into the #chatbox div               
      },
  });
}