function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  function clickLimit(){
    var limit=document.getElementById('limit').value;
    $.post("limit.php", { limit: limit},
    function(data) {
	 $('#limittable').html(data);
	 $('#limitform')[0].reset();
    });
     }

     function clickCalculate(){
        var amountFrom=document.getElementById('amountFrom').value;
        var currencyFrom=document.getElementById('currencyFrom').value;
        var currencyIn=document.getElementById('currencyIn').value;
        
        $.post("functions.php", { amountFrom: amountFrom, currencyFrom: currencyFrom, currencyIn:currencyIn},
        function(data) {
         $('#amountDiv').html(data);      
        });       
        addDB();
        }
        function addDB(){
            var add= document.getElementById('add').value;
            var dataString='add'+add;
             $.ajax({
                 type:"post",
                 url:"addDB.php",
                 data:dataString,
                 cache:false,
                 success:function(html){alert('ok');}
             });
             return false;
        }