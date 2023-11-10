@extends('events.base')
@section('content')
<!-- Contact section -->
<section id="about" class="trackmaster" style="padding-top: 90px; color: black">
	<div class="container">
		<div class="row">
			<div class="text-center wow animated fadeInDown">
				<!-- <br> -->
				<h2 style="font-weight: bold;font-size: 2.5em;">Track Master by RMI</h2>
			</div>
		</div>
		<div class="row" style="color: black">
			<b class="header">Event Description:</b>
			<p>
				This is a line-following bot competition where the participants must build a differential drive bot equipped with IR sensors and program it to complete the given path. </p>
			<div class="row" style="color: black">
				<b class="header">Area and Track Description:</b>
				<p>The arena consists of a black line (Track) on white background. The width of the line will be 3.00 ± 0.2 cm. All turns will be unique (no junctions), and the turn angle will be less than 90 degrees. The total track length will be less than 8 meters. The start and end points are the same. A sample track is shown below:</p>
				<br>
				<img src="{{asset('img/events/trackmaster/trackmaster_map.png')}}">
			</div>
		</div>
		<div class="row">
			<b class="header">Robot Constraints:</b>
			<ul>
				<li>Maximum robot size is 30cm x 30cm x 30cm.</li>
				<li>No two points on the robot can have a potential difference greater than 13V.</li>
				<li>The bot must be powered only by onboard batteries.</li>
				<li>Choice of the microcontroller is left to the participant.</li>
				<li>Readymade robotic kits are not allowed.</li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Event Format:</b>
			<ul>
				<li>Each team can have one trial run (not considered for evaluation) and one final run (graded).</li>
				<li>Results will be declared after consolidation of scores of all the teams.</li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Rules:</b>
			<ul>
				<li>A team can have a maximum of three numbers.</li>
				<li>The code can be changed after trial run.</li>
				<li>Components or any sort of reimbursements won’t be provided.</li>
				<li>Participants are allowed to adjust sensors (Gain, Position etc.), change speed settings, andmake repairs. However, hardware used must be the same throughout.</li>
				<li>Participants are not allowed to touch the robot during a run or damage the arena in any way. Failure to comply will result in immediate disqualification.</li>
				<li>Decision taken by the organizers are final and binding.</li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Judging Criteria:</b>
			<p>Distance covered and completion of the track are the most important factors, followed by the time taken.</p>
		</div>
		<div class="row">
			<b class="header">FAQs</b>
			<ul>
				<li>
					Will I be allowed to tune my components after the trial run?
					<br>
					Yes, you can adjust the parameters of the components used. However, you will not be allowed to change your hardware for any reason whatsoever.
				</li>
				<li>
					How will the points be awarded if two teams travel the same distance along the track?
					<br>
					In case of such occurrences, the team that takes the least time will be awarded more points.
				</li>
				<li>Can I participate individually?
					<br>
					Yes, you can. Note that there cannot be more than three members in a team.
				</li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Resources: </b>
			<ul>
				<li><a class="event-link" href="https://www.youtube.com/playlist?list=PLGs0VKk2DiYw-L-RibttcvK-WBZm8WLEP">Introduction to Arduino</a></li>
				<li><a class="event-link" href="https://careerkarma.com/blog/how-to-build-your-own-robot/">How to build your own Robot</a></li>
				<li><a class="event-link" href="https://www.youtube.com/watch?v=Iye4uVLmj8o">Everything you need to know about about robot power</a></li>
				<li><a class="event-link" href="https://lastminuteengineers.com/l298n-dc-stepper-driver-arduino-tutorial/">Interface L298N DC Motor Driver Module with Arduino</a></li>
				<li><a class="event-link" href="https://www.youtube.com/watch?v=lnP32gzHdvI">Line follower in action</a></li>
				<li><a class="event-link" href="https://www.youtube.com/watch?v=peOM_Nk4AEY&ab_channel=H-TEC">Industrial line follower robot</a></li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Registration Link:</b>
			<a class="event-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfXXmspq11yBRhM_ZaNh3ur6pzrDV-z6VYvqlTl6dPZUEBKYA/viewform">Link to Google Form</a>
		</div>
		<div class="row">
			<b class="header">Contact:</b>
			<ul>
				<li>Tarun Muthukumar - +918148927040</li>
				<li>Ashwath B - +918883068951</li>
			</ul>
		</div>
	</div>
</section>
<!-- end Contact section -->
@section('content')