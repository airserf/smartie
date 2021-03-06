<div id="debugDiv" class="debugDiv"></div>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
<title>Tinder Sample</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery.ui.touch-punch.min.js"></script>
<script src="../jquery/jquery-1.11.1.min.js"></script>
<script src="getUsers.js"></script>
<script src="updateUsers.js"></script>
<script>

/*.container-outer { overflow: scroll; width: 500px; height: 210px; }
.container-inner { width: 10000px; }*/

</script>

<script>

var potentialMatches;
var pickedAnswer;
var correctAnswer;
var currentUserId;
var isMatch;
var userid = 1;
var potentialMatches = [];
var intvl;
	
	$(document).ready(function () {
																
    $("input[name=RadioGroup1]:radio").change(function () {
														
		var ind = $(this).val();
															   
        if (ind == 0) 
		{
           $('#chosenAnswer').val($('#q1').html());
        }
        else if (ind == 1) 
		{
			$('#chosenAnswer').val($('#q2').html());
        }
		else
		{
			$('#chosenAnswer').val($('#q3').html());
		}
		
		pickedAnswer = $('#chosenAnswer').val();
		
		//alert($('#chosenAnswer').val());
    })
	
	getUsers(1,"home",null,null);
	
	$( "#button" ).click(function() {
								  
		potentialMatches--;
		
		if(pickedAnswer == correctAnswer)
		{
			//alert("match");
			//console.log("match");
			isMatch = true;
		}
		else
		{
			//alert("no match");
			//console.log("no match");
			isMatch = false;
		}
		
		//console.log("match: " + isMatch);
		
		updateUsers(userid,currentUserId,isMatch);
		
		
		intvl = setInterval(refreshUsers, 500);
		//console.log("pickedAnswer: " + pickedAnswer + " correctAnswer: " + correctAnswer);
	});
});
	
	function refreshUsers() {
	
		console.log("refresh");
		getUsers(userid,"home",null,null);
		clearInterval(intvl);
	}
	
	function submitAnswer() {
			
		var username = $('#username').val();
		var userid = $('#userid').val();
		var roomid = $('#roomid').val();
		
		if($('#chatbox').val() != '')
		{
			var message1 = $('#chatbox').val();
			//insertMessage(roomid,userid,message1);
			console.log("message: "+message1);
			//$('#chatfeedDiv').append('<div>' + username + ": " + $('#chatbox').val() + '</div>');
			$('#chatbox').val('');
			//str = str + ",'7'";
			//messageArray.push("7");
			
			//SendData(Arg,stateP,array,time);
		}
	}
	
</script>

<!--http://gromo.github.io/jquery.scrollbar/demo/basic.html-->

<link href="assets/css/home.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="content">
<div id="settings"><a href="smarty.php">Home</a> <a href="messages.php">Messages</a> <a href="matches.php">Matches</a></div>
<div id="imageDiv"></div>

<div id="name"></div>
<div id="age"></div>
<div id="schools"></div>

<div id="mutualFriendsLbl"></div>
<div id="mutualFriends"><div class="container">
<img src="assets/userimages/3.png" width="50" height="50">
<img src="assets/userimages/4.png" width="50" height="50">
</div></div>

<form name="form1" method="post" action="">
<div id="q1"></div>
<div id="q2"></div>
<div id="q3"></div>
<div id="submitDiv">
  <label>
    <input type="button" name="button" id="button" value="Button">
  </label>
</div>

<div id="questionBox"></div>
<input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_0">
<input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1">
<input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_2">
<input name="userid" type="hidden" value="">
<input name="chosenAnswer" id="chosenAnswer" type="hidden" value="">






</form>
</div>

</body>
</html>
