<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prototype Checklist v. 2.0</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="functions.js"></script>
<?php
//establish some variables
$checklist_toload = "apparel"; //default checklist to load
$checklist_title = "Useful for helping you keep track of all your gown and accessory needs.:::Relieve some stress in the planning with this payment tracking chart:::This checklist can help ensure that you have not overlooked the smallest detail.:::Anticipate the expenses associated with planning your wedding:::Organize your reading and musical selections....the easy way:::You've narrowed it down to 2 locations....weigh your options in clarity:::Take note of the order and timing of different ceremony events.:::Illustrations for ceremony line-up and receiving lines:::Keep yourself calm and organized 24 hours before the big day:::An easy way to map out your entire wedding schedule:::The question of who pays for what is finally solved...maybe:::Decide how much you are going to spend on flowers:::Need him to be more involved? Use this checklist to help him assist you.:::This honor comes with obligations & responsibilities...use this as a guide:::A few guidelines to follow and some traditional instructions to be an usher:::The counterpart of the Best Man, use this guide to better understand the role:::Keep all those important numbers in one place:::Changing your name can be a big decision - our checklist can help:::Plan your individual photography needs with this checklist:::This checklist helps determine if the facility meets your wedding's needs:::A great tool to compare your favorite two reception facilities:::Helpful planning guide for the order and timing of your reception's events:::Not sure what to tell people you want? This checklist helps you decide.:::Keep track of your rehearsal dinner guests with this checklist.:::The Big day has arrived! But who's responsible for what on that day?:::Keep the names, addresses and phone numbers close at hand:::It's a year (or less) before the wedding...this time table tells you what to do & when:::";
$checklist_value = "apparel,balancepaymentchart,brideschecklist,budgetworksheets,ceremonyplanning,ceremonysitecompchart,ceremonysequence,ceremonylineup,daybefore,eventinfo,financialobligations,flowerchecklist,groomschecklist,bestmanchecklist,guideforushers,maidofhonorchecklist,importantphonenumbers,namechangechecklist,photographychecklist,receptionchecklist,receptionsitecompchart,receptiosequence,registryplanning,rehearsalguest,weddingdayresponsibilities,weddingparty,timetable,";
$checklist_name  = "Apparel Checklist,Balance Payment Tracking,Bride's Checklist,Budget Worksheet,Ceremony Reading & Music Selection,Ceremony Site Comparison,Ceremony Sequence of Events,Ceremony & Receiving Line Set Up,The Day Before,Event Information at a Glance,Financial Obligations - &quot;Traditional Division of Nuptial Expenses&quot;,Flower Checklist,Groom's Checklist,Guide for the Best Man,Guide for Ushers,Guide for the Maid/Matron of Honor,Important Phone Numbers,Name Change Checklist for the Bride,Photography Checklist,Reception Checklist,Reception Site Comparison,Reception Sequence of Events,Registry Planning,Rehearsal Dinner Checklist,Wedding Day Responsibility,Wedding Party Information,Wedding Time Table,";
?>
</head>

<body>
<form method="post" name="checklistChange">
<select name="checklistChanger" id="checklistChanger" onchange="changeChecklist()">
	<?php
	$checklist_title_list=explode(":::",$checklist_title);
	$checklist_value_list=explode(",",$checklist_value);
	$checklist_name_list=explode(",",$checklist_name);
	for($i=0; $i<count($checklist_name_list)-1; $i++){
		echo "<option title=\"".$checklist_title_list[$i]."\" value=\"".$checklist_value_list[$i]."\">".$checklist_name_list[$i]."</option>";
	}
	?>
</select>
</form>
<form name="_checklist_form" method="post" action="">
	<div id="checklistContainer">
		<?php
		include("checklists/".$checklist_toload.".php");
		?>
	</div>
	<input type="submit" name="save" value="Save" /> <input type="submit" name="export" value="Export" /> <input type="reset" name="clear" value="Start Over" />
</form>
</body>
</html>
