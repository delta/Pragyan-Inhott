@extends('events.base')
@section('content')
<!-- Contact section -->
<section id="about" class="funda" style="padding-top: 90px; color: black">
	<style type="text/css">
		.event-images {
			max-width: 100%;
			margin: 20px auto;
			display: block;
			text-align: center;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="text-center wow animated fadeInDown">
				<!-- <br> -->
				<h2 style="font-weight: bold;font-size: 2.5em">Captain Clawbot</h2>
			</div>
		</div>
		<div class="row" style="color: black">
			<b class="header">Problem Statement:</b>
			<div>
				<p>The objective of this contest is to design and fabricate an electrically actuated robotic arm that can be controlled manually to pick and place cubes of specific dimensions. The robot which completes all the tasks with maximum points wins. </p>
			</div>
		</div>
		
		<div class="row">
			<b class="header">Rules:</b>
			<ul>
				<li>Team members: 3</li>
				<li>Length of Event: 15 minutes (Maximum)</li>
				<li>The robot must be self-fabricated and adhere to the specifications mentioned here. The teams that don’t comply with these specifications will be disqualified.</li>
				<li>The actuators should be electrical.</li>
				<li>The potential difference across any two points on the robot must not exceed 12V.</li>
				
			</ul>
		</div>
		<div class="row" style="color: black">
			<b class="header">Event Description:</b>
			<div>
				<p>One team member is elected as the robot handler. Only that team member is permitted to handle the robot during the game, and all other team members must remain outside the game zone.</p>
				<p>Initially, all the cubes are present at station zone. </p>
				<p>The participants must operate the robot arm and rearrange the cubes according to the tasks.</p>
				<p>The event consists of 3 tasks:</p><br>
				<div>
					<b>Level 1:</b> 1 Dimension (Max time: 2 min)<br>
					<div>
					5 cubes of varied sizes will be given.<br> They must be rearranged and placed into their corresponding slots which are present in a single straight line.</div>
				</div><br>
				<div>
					<b>Level 2:</b> 2D Dimensions (Max time : 4 min)</br>
					<div>
						A certain number of cubes will be given. They must be rearranged to form a shape. The shape can be any of the following:
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-xs-12"><img class="event-images" src="{{asset('/img/events/ptp/1.png')}}"></div>
								<div class="col-md-4 col-xs-12"><img class="event-images" src="{{asset('/img/events/ptp/2.jpg')}}"></div>
								<div class="col-md-4 col-xs-12"><img class="event-images" src="{{asset('/img/events/ptp/3.jpg')}}"></div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<b>Level 3:</b> 3D Dimensions (Max time : 8 min)</br>
					<div>
						 <p>A certain number of cubes will be given. A 3D structure must be constructed using the smaller cubes. </p><p>The details of the structure to be constructed will be given on spot.</p>
<p>Example: a bigger cube made up of the smaller cubes, pyramid, etc.</p><br>
<p>Note:<br>
For level 1, the maximum dimension of any cube is 10 cm.<br>
For level 2 and level 3, the dimension of the cube is 5 cm(all cubes should be of the same dimensions).</p>

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<b class="header">Judging Criteria:</b>
			<div>
				
				Level 1:(non-eliminative round)
				<ol>
					<li>50 points will be awarded for placing each cube into their respective slots.</li>
					<li>-25 points will be awarded for placing a cube into a wrong slot.</li>
				</ol>
				Level 2:
				<ol>
					<li>70 points will be awarded for placing each cube into the correct position.</li>
					<li>-25 points will be awarded for placing cube in wrong position.</li>
					<li>Bonus of 150 points will be awarded if the required shape is achieved within 2min.</li>
				</ol>
				Top performing teams in level 1 and level 2 will be selected for level 3. <br>
				Level 3
				<ol>
					<li>100 points will be awarded for placing each cube into the correct position.
					</li>
					<li>-25 points will be awarded for placing cube in wrong position.</li>
					<li>Bonus of 250 points will be awarded if the required shape is achieved within 4min.</li><br>
				</ol>
				<p>Extra points will be awarded for remaining time, if the task is completed before maximum time. Each minute saved can earn 50 points.</p>
				<p>The team with maximum total points wins.</p>
				<p>All decisions about scoring, game play and timing are made by the referees. Teams should completely respect their vote and decisions. Their decision will be binding and final.</p>
			</div>
		</div>
		<div class="row">
			<b class="header">Contacts:</b>
			<p>Sai Kumar: 9790484849
			</p>
			<p> Nikhil: 9618055524</p>
		</div>
	</div>
</section>
<!-- end Contact section -->
@section('content')