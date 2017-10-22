<?php
include("connection.php");
session_start();
$user_check=$_SESSION["name"];
 
if(!isset($user_check))
{
header("Location: login1.php");
}
?>
<html>
<head>
<title>Operating System</title>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script >
            $(document).ready(function(){   
                $(".next-action-button").click(function()
                {
                		current_fs = $(this).parent();
						next_fs = $(this).parent().next();
	
						current_fs.animate({opacity: 0}, 
						{
							step: function(now) 
							{
								scale = 1 - (1 - now) * 0.2;
								//2. bring next_fs from the right(50%)
								left = (now * 50)+"%";
								//3. increase opacity of next_fs to 1 as it moves in
								opacity = 1 - now;
								current_fs.css({'transform': 'scale('+scale+')'});
								next_fs.css({'left': left, 'opacity': opacity});
							}, 
							duration: 600, 
							complete: function()
							{
								current_fs.hide();
								next_fs.show(); 
							}
						});
				});

				$(".previous-action-button").click(function()
				{
					
					current_fs = $(this).parent();
					previous_fs = $(this).parent().prev();
					
					current_fs.animate({opacity: 0}, 
					{
						step: function(now) 
						{
							scale = 0.8 + (1 - now) * 0.2;
							//2. take current_fs to the right(50%) - from 0%
							left = ((1-now) * 50)+"%";
							//3. increase opacity of previous_fs to 1 as it moves in
							opacity = 1 - now;
							current_fs.css({'left': left});
							previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
						}, 
						duration: 600, 
						complete: function()
						{
							current_fs.hide();
							previous_fs.show(); 
						}
					})
				});
					$(".submit").click(function(){
					return false;
				})
				});


        </script>
</head>
<style type="text/css">
body{
	background-color: white;
	background-image: url("gs.png");
}
#msform fieldset:not(:first-of-type) {
	display: none;
}

fieldset{
	background-color: white;
	padding:10px 20px;
	width:50%;
	margin-top: 60px;
	margin-left: 25%;
	font-size: 20px;
}
.previous-action-button,.next-action-button,.submit{
	background-color: #27AE60;
	text-align: center;
	color: white;
	cursor: pointer;
	width: 25%;
	height:35px;
	border: 0 none;
	font-size: 20px;
}
.next-action-button:hover,.previous-action-button:hover,.submit:hover{
box-shadow: 0 0 0 2px white;
color: black
}
#a{
	border: 0 none;
	padding:10px 15px ;
	margin-right: 50px;
}

#quiztime{
	font-size: 30px;
	color: white;
}
li{
	list-style-type: none;
	color: white;
	float: left;
}

</style>

<body>

<script type="text/javascript">
function checktime(x,ele)
{
	var min=parseInt(x/60);
	var sec=parseInt(x%60);
	element=document.getElementById("quiztime");
	element.innerHTML ="Time left: "+min +" Mins "+ sec + " Secs ";
	if(x<1)
	{
		window.alert("Exam is Finshed!!!");
		score();
	}
	else
	{
		x--;
		setTimeout('checktime('+x+',"'+ele+'")',1000);
	}
	

}

function score(){
	var x=document.forms[0];
	var points=0;
	for(var i=0;i<x.length;i++)
	{ 
		if(x[i].checked)
		{

			if(x[i].value=="correct")
				points=points+1;
		}
	}
	window.location ="scoreos.php?points="+points;
}

</script>
<div id="a">
<div id="quiztime"></div>
<script type="text/javascript">checktime(20,"quiztime");</script>
<form action="quizsubmit.php" id="msform" method="get" name="form" >
	<fieldset><h3>1.Routine is not loaded until it is called. All routines are kept on disk in a relocatable load format. The main program is loaded into memory & is executed. This type of loading is called _________ </h3>
		<input type="radio" name="q1" value="a">a. Static Loading<br>
		<input type="radio" name="q1" value="b">b. Dynamic Loading<br>
		<input type="radio" name="q1" value="correct">c. Dynamic Linking<br>
		<input type="radio" name="q1" value="d">d. Overlays<br><br>
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>2.Which of the following is crucial time while accessing data on the disk?</h3>
		<input type="radio" name="q2" value="correct">a. Seek time<br>
		<input type="radio" name="q2" value="a">b. Rotational time<br>
		<input type="radio" name="q2" value="c">c. Transmission time<br>
		<input type="radio" name="q2" value="d">d. Waiting time<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>3.Unix Operating System is an __________.</h3>
		<input type="radio" name="q3" value="a">a. Time Sharing Operating System<br>
		<input type="radio" name="q3" value="b">b. Multi-User Operating System<br>
		<input type="radio" name="q3" value="c">c. Multi-tasking Operating System<br>
		<input type="radio" name="q3" value="correct">d. All of the above<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>4.Which of the following memory allocation scheme suffers from External fragmentation?</h3>
		<input type="radio" name="q4" value="correct">a. Segmentation<br>
		<input type="radio" name="q4" value="a">b. Pure Demand Paging<br>
		<input type="radio" name="q4" value="c">c. Swapping<br>
		<input type="radio" name="q4" value="d">d. Paging<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>5.Information about a process is maintained in a _________. </h3>
		<input type="radio" name="q5" value="a">a. Stack<br>
		<input type="radio" name="q5" value="b">b. Translational Look aside Buffer<br>
		<input type="radio" name="q5" value="correct">c. Process Control Block <br>
		<input type="radio" name="q5" value="d">d. Program Control Block <br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>6.Distributed OS works on the ________ principle.</h3>
		<input type="radio" name="q6" value="a">a. File Foundation<br>
		<input type="radio" name="q6" value="correct">b. Single system image<br>
		<input type="radio" name="q6" value="c">c. Multi system image <br>
		<input type="radio" name="q6" value="d">d. Networking image<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>7.The problem of fragmentation arises in ________.</h3>
		<input type="radio" name="q7" value="a">a. Static storage allocation <br>
		<input type="radio" name="q7" value="b">b. Stack allocation storage <br>
		<input type="radio" name="q7" value="c">c. Stack allocation with dynamic binding <br>
		<input type="radio" name="q7" value="correct">d. Heap allocation<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>8.The program is known as _________ which interacts with the inner part of called kernel.</h3>
		<input type="radio" name="q8" value="a">a. Compiler<br>
		<input type="radio" name="q8" value="b">b. Device Driver<br>
		<input type="radio" name="q8" value="c">c. Protocol<br>
		<input type="radio" name="q8" value="correct">d. Shell<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>9.Cryptography technique is used in ________. </h3>
		<input type="radio" name="q9" value="a">a. Polling<br>
		<input type="radio" name="q9" value="b">b. Job Scheduling<br>
		<input type="radio" name="q9" value="correct">c. Protection<br>
		<input type="radio" name="q9" value="d">d. File Management<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>10.Which of the following is not advantage of multiprogramming?</h3>
		<input type="radio" name="q10" value="a">a. Increased throughput <br>
		<input type="radio" name="q10" value="b">b. Shorter response time <br>
		<input type="radio" name="q10" value="correct">c. Decreased operating system overhead <br>
		<input type="radio" name="q10" value="d">d. Ability to assign priorities to jobs <br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>11.Which technique was introduced because a single job could not keep both the CPU and the I/O devices busy?</h3>
		<input type="radio" name="q11" value="a">a. Time-sharing<br>
		<input type="radio" name="q11" value="b">b. Spooling<br>
		<input type="radio" name="q11" value="c">c. Preemptive scheduling<br>
		<input type="radio" name="q11" value="correct">d. Multiprogramming<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>12.Inter process communication can be done through __________.</h3>
		<input type="radio" name="q12" value="a">a. Mails<br>
		<input type="radio" name="q12" value="correct">b. Messages<br>
		<input type="radio" name="q12" value="c">c. System Calls<br>
		<input type="radio" name="q12" value="d">d. Traps<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>13.CPU performance is measured through ________.</h3>
		<input type="radio" name="q13" value="correct">a. Throughpur<br>
		<input type="radio" name="q13" value="b">b. MHz<br>
		<input type="radio" name="q13" value="c">c. Flaps<br>
		<input type="radio" name="q13" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>14.PCB stands for _________.</h3>
		<input type="radio" name="q14" value="a">a. Program Control Block<br>
		<input type="radio" name="q14" value="correct">b. Process Control Block<br>
		<input type="radio" name="q14" value="c">c. Process Communication Block<br>
		<input type="radio" name="q14" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>15.Which of the following is contained in Process Control Block (PCB)?</h3>
		<input type="radio" name="q15" value="a">a. Process Number <br>
		<input type="radio" name="q15" value="b">b. List of open files<br>
		<input type="radio" name="q15" value="c">c. Memory Limits<br>
		<input type="radio" name="q15" value="correct">d. All of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>16.Round robin scheduling is essentially the preemptive version of ________.</h3>
		<input type="radio" name="q16" value="correct">a. FIFO<br>
		<input type="radio" name="q16" value="a">b. Shortest Job First<br>
		<input type="radio" name="q16" value="c">c. Shortest Remaining time<br>
		<input type="radio" name="q16" value="d">d. Longest time first <br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>17.A page fault occurs </h3>
		<input type="radio" name="q17" value="correct">a. when the page is not in the memory<br>
		<input type="radio" name="q17" value="a">b. when the page is in the memory<br>
		<input type="radio" name="q17" value="c">c. when the process enters the blocked state<br>
		<input type="radio" name="q17" value="d">d. when the process is in the ready state<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>18.What is a shell ?</h3>
		<input type="radio" name="q18" value="a">a. It is a hardware component<br>
		<input type="radio" name="q18" value="correct">b. It is a command interpreter<br>
		<input type="radio" name="q18" value="c">c. It is a part in compiler <br>
		<input type="radio" name="q18" value="d">d. It is a tool in CPU scheduling<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>19.In the blocked state</h3>
		<input type="radio" name="q19" value="correct">a. The processes waiting for I/O are found<br>
		<input type="radio" name="q19" value="a">b. The process which is running is found<br>
		<input type="radio" name="q19" value="c">c. The processes waiting for processor are found<br>
		<input type="radio" name="q19" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>20.The solution to Critical Section Problem is : Mutual Exclusion, Progress and Bounded Waiting.</h3>
		<input type="radio" name="q20" value="a">a. The statement is false<br>
		<input type="radio" name="q20" value="correct">b. The statement is true. <br>
		<input type="radio" name="q20" value="c">c. The statement is contradictory<br>
		<input type="radio" name="q20" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>21.The number of processes completed per unit time is known as __________.</h3>
		<input type="radio" name="q21" value="correct">a. Throughput<br>
		<input type="radio" name="q21" value="a">b. Output<br>
		<input type="radio" name="q21" value="c">c. Efficiency<br>
		<input type="radio" name="q21" value="d">d. Capacity<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>22.A Critical region</h3>
		<input type="radio" name="q22" value="a">a. Is a region prone to deadlock<br>
		<input type="radio" name="q22" value="b">b. Is a piece of code which only a finite number of processes execute<br>
		<input type="radio" name="q22" value="c">c. Is found only in Windows NT operation system<br>
		<input type="radio" name="q22" value="correct">d. is a piece of code which only one process executes at a time<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>23.A thread</h3>
		<input type="radio" name="q23" value="a">a. is a lightweight process where the context switching is high<br>
		<input type="radio" name="q23" value="correct">b. is a lightweight process where the context swithching is low<br>
		<input type="radio" name="q23" value="c">c. is used to speed up paging<br>
		<input type="radio" name="q23" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>24.The mechanism that bring a page into memory only when it is needed is called</h3>
		<input type="radio" name="q24" value="correct">a. Demand Paging<br>
		<input type="radio" name="q24" value="a">b. Segmentation<br>
		<input type="radio" name="q24" value="c">c. Fragmentation<br>
		<input type="radio" name="q24" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>25.Which is not the state of the process ?</h3>
		<input type="radio" name="q25" value="a">a. Blocked<br>
		<input type="radio" name="q25" value="b">b. Running<br>
		<input type="radio" name="q25" value="correct">c. Privileged<br>
		<input type="radio" name="q25" value="d">d. Ready<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" class="submit" name="submit" value="submit" onclick="score()">
	</fieldset>
<br>
</form>
</body>
</html>
