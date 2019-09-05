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
        
        }

      function checkb(){
        var length=document.chk.checkCurrency.length;
        let result=new Array();
        var j=0;
        for(i=0;i<length;i++){
          var chVal=document.chk.checkCurrency[i].checked;
          if(chVal){
            result.push(document.chk.checkCurrency[i].value);
          }
        }
        $.post("checkb.php", { result: result},
        function(data) {
          $('#stateFrom').html(data);      
         }); 
         $.post("checkbin.php", { result: result},
         function(data) {
           $('#stateIn').html(data);      
          }); 
       
      }  