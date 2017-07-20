//code for sign in pop up

var page_name;

function popup_show(){
	document.getElementById('login-popup').style.display="block";
}

function popup_hide(){
	document.getElementById('login-popup').style.display="none";
}

function spopup_show(){
	document.getElementById('signup').style.display="block";
}

function spopup_hide(){
	document.getElementById('signup').style.display="none";
}
function changename(){
	var name=document.getElementById('f1').value;
	console.log(name);
	document.getElementById('user_button').innerHTML=name;
}


$(document).ready(function(){
        $("#search1").keydown(function(e){
        	if(e.keyCode==13){
            var bla = $('#search1').val();                   
        window.location.href = "index.php?r=epages/search&text="+bla;   
         //    var ulr = "http://localhost";
         // else{
         //    alert("malahat");
         // }   
         // //The following part will fail if you cannot connect to the server
         // $.post(
         //     "companies.php",
         //     {text: $('#search').val()});

                   }

        });
    })

// $(document).ready(function(){
//         $("#search1").keydown(function(e){
//             if(e.keyCode==13){
//             var bla = $('#search1').val();
            
                     
//         window.location.href = "banks.php?text="+bla;   
//          //    var ulr = "http://localhost";
//          // else{
//          //    alert("malahat");
//          // }   
//          // //The following part will fail if you cannot connect to the server
//          // $.post(
//          //     "companies.php",
//          //     {text: $('#search').val()});

//                    }

//         });
//     })

// $(document).ready(function(){
//         $("#search2").keydown(function(e){
            
//             if(e.keyCode==13){

//             var bla = $('#search2').val();         
//         window.location.href = "softwarehouse.php?text="+bla;   
//          //    var ulr = "http://localhost";
//          // else{
//          //    alert("malahat");
//          // }   
//          // //The following part will fail if you cannot connect to the server
//          // $.post(
//          //     "companies.php",
//          //     {text: $('#search').val()});

//                    }

//         });
//     })


