$("#close_basket").click(function(){
    $("#shadow").slideToggle();
    $("#basket").slideToggle();
});

$("#basket_open").click(function(){
    $("#shadow").slideToggle();
    $("#basket").slideToggle();
});


digitalWatch();

  function digitalWatch() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    if (hours < 10) hours = "0" + hours;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;
    document.getElementById("digital_watch").innerHTML = hours + ":" + minutes + ":" + seconds;
    setTimeout("digitalWatch()", 1000);
  }


var date = new Date();
var hours = date.getHours();

if (hours < 14 & hours >= 6) {
    
    $('.msg_to').text('Guten Morgen,')
    
    }

if (hours >= 14 & hours < 18) {
    
    $('.msg_to').text('Guten Abend,')
    
    }

if (hours >= 18 & hours < 6 ) {
    
    $('.msg_to').text('Guten Nacht,')
    
    }


$(".product").click(function(){
    
    
        var product =  $(".hide").clone()
    product.removeClass('hide');
    
    
      $(product).find(".price_p").text($(this).find(".price_p").text());
  $(product).find(".name_p").text($(this).find(".name_p").text());    
  $(product).find('img').attr('src', $(this).find('img').attr('src'));
    
    
      var mast_add = 0;
$('.products').find('.name_p').each(function() {
    
        if   ($(this).text() == $(product).find(".name_p").text()) {
               
    var count_p  = parseInt($(this).parent().find('.count_p').text());
         $(this).parent().find('.count_p').text(count_p+1);
       mast_add = 1;   
        }
                               });
    
    if (mast_add == 0) {
    
$('.products').append(product);
    }

     $("#shadow").slideToggle();
    $("#basket").slideToggle(); 
    
    addsum($(this).find(".price_p").text());
    
    check_shop();
    
});


$(".products").on("click", ".delete_p", function(){
    resum($(this).parent().parent().find(".price_p").text());
    
    
   if ( $(this).parent().parent().find(".count_p").text() > 1 )  {
       
       var count_p  = parseInt($(this).parent().parent().find(".count_p").text());
       $(this).parent().parent().find(".count_p").text(count_p-1);
       
   }
    
    else {
    $(this).parent().parent().remove();
    }
    
    check_shop();
    
});


function  addsum(plus) {
     var sum = parseFloat($("#sum").text());
    plus = parseFloat(plus);
    var res = sum + plus
    res = res.toFixed(2);

     $("#sum").text(res);
    $("#sum2").text(res);
}

function  resum(plus) {
     var sum = parseFloat($("#sum").text());
     plus = parseFloat(plus);
    var res = sum - plus
      res = res.toFixed(2);
     $("#sum").text(res);
     $("#sum2").text(res);
    
}


function check_shop() {
    

      $.ajax({
				type: 'POST',
				url: '/demoshop/',
				data: {price: $('.products').html(), money:  parseFloat($("#sum").text())},
				success: function(data) {
	     
				}}); 
    
}



$(".zur").click(function(){
send_to_shop();
});

function send_to_shop() {
    
    
    
        var sum = parseFloat($("#sum").text());
      var products = $('.products').children();
      var arr, arr2,arr3,arr4  = new Array;

 var nn =  products.length;
        
     for (i = 0; i < nn ; i++)
        { 
    
        arr = products.find('.name_p');
        arr2 = products.find('.count_p');
        arr3 = products.find('.price_p');
       arr4[i] = products.find('img').attr('src');
    
        }
    
    var  check_json_all = new Object;
    
    
    for (i = 0; i < nn ; i++)
        { 
    var check_json  =  new Object;
   check_json  =  {
        name : arr[i].innerHTML,
        count : arr2[i].innerHTML,
        price : arr3[i].innerHTML,
        img : arr4[i]    
    }
    
         check_json_all[i] = check_json;
            console.log(nn);
    }
    
    
    check_json_all["sum"] = sum;
    
    
      $.ajax({
				type: 'POST',
				url: '/demoshop/ajax.php',
				data: {price: check_json_all},
				success: function(data) {
	     
				}}); 
    
 console.log(check_json_all);
    
}

function call_name() {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: '/demoshop/',
          data: msg,
          success: function(data) {
            $('#results').html(data);
                $("#name_form").slideToggle();
                  $("#shadow").slideToggle();
             $(".my_name").text($('#my_name_input').val());
              console.log(msg);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
}
if ( $('.my_name').text() == "") {
         $("#name_form").slideToggle();
        $("#shadow").slideToggle();
}



if ( $('#Aktien').attr('data-veiws') == 5) {
         $("#Aktien").slideToggle();
        $("#shadow").slideToggle();
}

$("#Aktien").click(function(){
    $("#Aktien").slideToggle();
    $("#shadow").slideToggle();
});






