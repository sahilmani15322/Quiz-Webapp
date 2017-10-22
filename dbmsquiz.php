<?php
include("connection.php");
session_start();
$user_check=$_SESSION['name'];
 
if(!isset($user_check))
{
header("Location: login1.php");
}
?>
<html>
<head>
<title>DBMS</title>
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
function checktime(x,ele){
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
	window.location ="scoredbms.php?points="+points;	
}

</script>
<div id="a">
<div id="quiztime"></div>
<script type="text/javascript">checktime(20,"quiztime");</script>
<form action="quizsubmit.php" id="msform" method="get" name="form" >
	<fieldset><h3>1. Aggregate functions are functions that take a ___________ as input and return a single value.
	  </h3>
		<input type="radio" name="q1" value="correct">a. Collection of values<br>
		<input type="radio" name="q1" value="b">b.Single value<br>
		<input type="radio" name="q1" value="c">c.Aggregate value<br>
		<input type="radio" name="q1" value="d">d. Both a & b<br><br>
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>2.Select __________ from instructor where dept name= ’Comp. Sci.’;
Which of the following should be used to find the mean of the salary ?</h3>
		<input type="radio" name="q2" value="a">a. Mean(salary)<br>
		<input type="radio" name="q2" value="correct">b. Avg(salary)<br>
		<input type="radio" name="q2" value="c">c. Sum(salary)<br>
		<input type="radio" name="q2" value="d">d.  Count(salary)<br><br>
		
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>3.All aggregate functions except _____ ignore null values in their input collection.</h3>
		<input type="radio" name="q3" value="a">a.Count(attribute)<br>
		<input type="radio" name="q3" value="correct">b. Count(*)<br>
		<input type="radio" name="q3" value="c">c. Avg<br>
		<input type="radio" name="q3" value="d">d. Sum<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>4.A Boolean data type that can take values true, false, and________ .</h3>
		<input type="radio" name="q4" value="a">a. 1<br>
		<input type="radio" name="q4" value="b">b. 0<br>
		<input type="radio" name="q4" value="c">c. NULL<br>
		<input type="radio" name="q4" value="correct">d. Unknown<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>5.Select count (____ ID)
						from teaches
						where semester = ’Spring’ and year = 2010;
						If we do want to eliminate duplicates, we use the keyword ______in the aggregate expression.</h3>
		<input type="radio" name="q5" value="correct">a. Distinct<br>
		<input type="radio" name="q5" value="b">b. Count<br>
		<input type="radio" name="q5" value="c">c. Avg<br>
		<input type="radio" name="q5" value="d">d. Primary Key<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>6.A __________ is a special kind of a store procedure that executes in response to certain action on the table like insertion, deletion or updation of data.</h3>
		<input type="radio" name="q6" value="a">a. Procedures<br>
		<input type="radio" name="q6" value="correct">b. Triggers<br>
		<input type="radio" name="q6" value="c">c. Functions<br>
		<input type="radio" name="q6" value="d">d. None of these<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>7. Trigger are supported in__________</h3>
		<input type="radio" name="q7" value="a">a. Delete<br>
		<input type="radio" name="q7" value="b">b. Update<br>
		<input type="radio" name="q7" value="correct">c. Views<br>
		<input type="radio" name="q7" value="d">d. All the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>8. The CREATE TRIGGER statement is used to create the trigger. THE _____ clause specifies the table name on which the trigger is to be attached. 
	The ______ specifies that this is an AFTER INSERT trigger.</h3>
		<input type="radio" name="q8" value="a">a. for insert, on<br>
		<input type="radio" name="q8" value="correct">b. On, for insert<br>
		<input type="radio" name="q8" value="c">c. For, insert<br>
		<input type="radio" name="q8" value="d">d. Both a and c<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>9.What are the after triggers ?</h3>
		<input type="radio" name="q9" value="a">a. Triggers generated after a particular operation<br>
		<input type="radio" name="q9" value="correct">b. These triggers run after an insert, update or delete on a table<br>
		<input type="radio" name="q9" value="c">c. These triggers run after an insert, views, update or delete on a table<br>
		<input type="radio" name="q9" value="d">d.  Both b and c<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>10.The variables in the triggers are declared using _________</h3>
		<input type="radio" name="q10" value="a">a. - <br>
		<input type="radio" name="q10" value="correct">b. @ <br>
		<input type="radio" name="q10" value="c">c. /<br>
		<input type="radio" name="q10" value="d">d. /@<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>11.Which of the following is not a integrity constraint ?</h3>
		<input type="radio" name="q11" value="a">a. Not null<br>
		<input type="radio" name="q11" value="correct">b. Positive<br>
		<input type="radio" name="q11" value="c">c.  Unique<br>
		<input type="radio" name="q11" value="d">d. Check ‘predicate’<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>12.Foreign key is the one in which the ________ of one relation is referenced in another relation.</h3>
		<input type="radio" name="q12" value="a">a. Foreign key<br>
		<input type="radio" name="q12" value="correct">b. Primary key<br>
		<input type="radio" name="q12" value="c">c. References<br>
		<input type="radio" name="q12" value="d">d. Check constraint<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>13. Which of the following is the right syntax for assertion?</h3>
		<input type="radio" name="q13" value="correct">a.  Create assertion 'assertion-name' check 'predicate';<br>
		<input type="radio" name="q13" value="b">b. Create assertion check 'predicate' 'assertion-name';<br>
		<input type="radio" name="q13" value="c">c. Create assertions 'predicates';<br>
		<input type="radio" name="q13" value="d">d. All of the mentioned<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>14.In the __________ normal form, a composite attribute is converted to individual attributes.</h3>
		<input type="radio" name="q14" value="correct">a. First<br>
		<input type="radio" name="q14" value="b">b. Second<br>
		<input type="radio" name="q14" value="c">c. Third<br>
		<input type="radio" name="q14" value="d">d. Fourth<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>15.A table on the many side of a one to many or many to many relationship must:</h3>
		<input type="radio" name="q15" value="a">a. Be in Second Normal Form (2NF) <br>
		<input type="radio" name="q15" value="b">b. Be in Third Normal Form (3NF)<br>
		<input type="radio" name="q15" value="c">c. Have a single attribute key<br>
		<input type="radio" name="q15" value="correct">d. Have a composite key<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>16.Which-one ofthe following statements about normal forms is FALSE?</h3>
		<input type="radio" name="q16" value="a">a. BCNF is stricter than 3 NF<br>
		<input type="radio" name="q16" value="b">b. Lossless, dependency -preserving decomposition into 3 NF is always possible<br>
		<input type="radio" name="q16" value="correct">c. Loss less, dependency – preserving decomposition into BCNF is always possible<br>
		<input type="radio" name="q16" value="d">d. Any relation with two attributes is BCNF View Answer <br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>17.Functional Dependencies are the types of constraints that are based on______</h3>
		<input type="radio" name="q17" value="correct">a. Key<br>
		<input type="radio" name="q17" value="a">b. Key revisited<br>
		<input type="radio" name="q17" value="c">c. Superset key<br>
		<input type="radio" name="q17" value="d">d. None of these<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>18. Which one of the following is used to define the structure of the relation ,deleting relations and relating schemas ? ?</h3>
		<input type="radio" name="q18" value="a">a. DML<br>
		<input type="radio" name="q18" value="correct">b. DDL<br>
		<input type="radio" name="q18" value="c">c. Query <br>
		<input type="radio" name="q18" value="d">d. Relation Schema<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>19. The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character.</h3>
		<input type="radio" name="q19" value="a">a.  Fixed, equal<br>
		<input type="radio" name="q19" value="a">b. Equal, variable<br>
		<input type="radio" name="q19" value="corect">c. Fixed, variable<br>
		<input type="radio" name="q19" value="d">d.  Variable, equal<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>20.Create table employee (name varchar ,id integer) What type of statement is this ?</h3>
		<input type="radio" name="q20" value="a">a. DML<br>
		<input type="radio" name="q20" value="correct">b. DDL. <br>
		<input type="radio" name="q20" value="c">c. View<br>
		<input type="radio" name="q20" value="d">d.Constraints<br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>21.Which one of the following provides the ability to query information from the database and to insert tuples into, delete tuples from, and modify tuples in the database ?</h3>
		<input type="radio" name="q18" value="correct">a. DML<br>
		<input type="radio" name="q18" value="b">b. DDL<br>
		<input type="radio" name="q18" value="c">c. Query <br>
		<input type="radio" name="q18" value="d">d. Relation Schema<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>22.Which are the join types in join condition:</h3>
		<input type="radio" name="q22" value="a">a.  Cross join<br>
		<input type="radio" name="q22" value="b">b. Natural join<br>
		<input type="radio" name="q22" value="c">c. Join with USING clause<br>
		<input type="radio" name="q22" value="correct">d. All of the mentioned<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>23.How many tables may be included with a join?</h3>
		<input type="radio" name="q23" value="a">a. one<br>
		<input type="radio" name="q23" value="b">b. two<br>
		<input type="radio" name="q23" value="c">c. three<br>
		<input type="radio" name="q23" value="correct">d. All of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>24.Which of the join operations do not preserve non matched tuples.</h3>
		<input type="radio" name="q24" value="b">a. Left outer join<br>
		<input type="radio" name="q24" value="a">b. Right outer join<br>
		<input type="radio" name="q24" value="corect">c. Left outer join<br>
		<input type="radio" name="q24" value="d">d. None of the above<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" name="next" value="Next" class="next-action-button">
	</fieldset>
	<fieldset><h3>25.The____condition allows a general predicate over the relations being joined.</h3>
		<input type="radio" name="q25" value="correct">a.on<br>
		<input type="radio" name="q25" value="b">b. Using<br>
		<input type="radio" name="q25" value="correct">c. Set<br>
		<input type="radio" name="q25" value="d">d. Where<br><br>
		<input type="button" name="previous" value="Previous" class="previous-action-button">
		<input type="button" class="submit" name="submit" value="submit" onclick="score()">
	</fieldset>
<br>
</form>
</body>
</html>
