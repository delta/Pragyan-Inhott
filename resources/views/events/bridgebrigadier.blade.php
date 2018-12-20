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
				<h2 style="font-weight: bold;font-size: 2.5em">Bridge Brigadier</h2>
			</div>
		</div>
		<div class="row" style="color: black">
			<b class="header">Event Description:</b>
			<div>
				<p>The event requires the participant to build a remote controlled (wired/wireless) wheeled robot with a gripper capable of moving cubic blocks over an arena. Use the cubes to fill the gaps in the bridge and build your way to victory!</p>
			</div>
		</div>

		<div class="row">
			<b class="header">Format:</b>
			<ul>
				<li>Robot Specification:
					<ul>
						<li>The bot should be within the specified size limits: <strong>30cm X 30cm x 30cm</strong>.</li>
						<li>The power source for the bot must be on board or on the remote controller.</li>
						<li>The voltage between any two points must not exceed <strong>13V</strong>.</li>
						<li>The bot must be capable of moving lightweight cubes of side <strong>10 cm</strong>.</li>
						<li>The bot must be able to climb a <strong>15&deg;</strong> inclined <strong>ramp</strong> with a cube.</li>
					</ul>
				</li>
				<li>Problem Statement:
					<ul><div class="row">
						<div >
							<img src="{{asset('img/bridge_brigadier_arena.png')}}" style="max-width:80%;height:auto;">
						</div>
					</div>
					</ul>
				</li>
				<li>Arena:
				<ul>
					<li>A major portion of the track would be a bridge (an elevated plane) .</li>
					<li>Ramps would be provided on the start &amp; end of each bridge for the bot to climb.</li>
					<li>The bridge will consist of slots on its way which needs to be filled with cubes (10cmx10cmx10cm) provided in order to proceed further.</li>
					<li>Each &lsquo;Slot&rsquo; completed represents the completion of a &lsquo;Stage&rsquo;.</li>
					<li>There will be some Picking Zones in the arena where the cubes can be collected from.</li>
				</ul>
				</li>
				<li>Gameplay:
					<ul>
						<li>Each Team is given one untimed testing trial, and 2 &lsquo;timed rounds&rsquo;. The best &lsquo;timed round&rsquo; will be considered for evaluation.</li>
						<li>The bot must initially pick cubes from a Picking Zone and climb up the ramp from the Entry Zone.</li>
						<li>The bot must place the cubes in the slots provided on the bridge and proceed to the next stage by moving over it. All cubes necessary for the stage&rsquo;s slots to be filled must be placed in order to progress to the next stage. For example, in the sample track, 2 cubes have to be placed.</li>
						<li>The stages must be completed sequentially.</li>
						<li>After crossing the slots the bot must finally arrive at the Exit Zone.</li>
					</ul>
				</li>
			</ul>
			<p><span>Note:</span> The arena shown in the diagram is just one stage of the actual arena. The actual arena set up on the day of event may have numerous such stages, but with only 1 Entry and 1 Exit Zone.</p>
		</div>
		
		<div class="row">
			<b class="header">Rules:</b>
				<ul>
					<li>A team can have a maximum of three members.</li>
					<li>The bot, boxes or any apparatus in the arena should not be touched once the round begins.</li>
					<li>Participants should not enter the arena during gameplay.</li>
					<li><strong>Do not dismantle your bot</strong> until the results are declared.</li>
					<li>The team may be disqualified if any of the above rules are broken.</li>
					<li>Organiser's decision shall be treated as final and binding on all.</li>
				</ul>
		</div>
		<div class="row">
			<b class="header">Judging Criteria:</b>
			<div>
				<ol>
					<li>The time for completion and the number of stages completed will be used as the judging criteria, as described below.</li>
					<li>For every stage completed, 50 Points are awarded.</li>
					<li>If a stage is incomplete and only one cube has been placed, 20 points are awarded. These points are retracted when the stage is complete.</li>
					<li>Every stage has a time limit of 5 minutes, exceeding which the bot has to reset to the start position and start a new trial if the team has trials remaining. Else the game will end there.</li>
					<li>In case of a tie in points, the team which completes the stages in lesser time is awarded a higher position.</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<b class="header">Contacts:</b>
			<p>Deepak SV : +91 88707 11551</p>
			<p>Aqeel: +91 96778 61758</p>
		</div>
	</div>
</section>
<!-- end Contact section -->
@section('content')