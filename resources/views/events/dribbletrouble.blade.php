@extends('events.base')
@section('content')
<!-- Contact section -->
<section id="about" class="electrolution" style="padding-top: 90px; color: black">
	<div class="container">
		<div class="row">
			<div class="text-center wow animated fadeInDown">
				<!-- <br> -->
				<h2 style="font-weight: bold;font-size: 2.5em;">Dribble trouble</h2>
			</div>
		</div>
		<div class="row" style="color: black">
			<b class="header">Event Description:</b>
			<p>
                The event requires the participant to build a remote controlled (wired/wireless) wheeled robot capable of moving spheres over an arena. Then you can either shoot or push the ball into the goal post.
            </p>
		</div>
		<div class="row">
			<b class="header">Event Format:</b>
			<div>
				<p>Robot Specification:</p>
				<ul>
					<li>The bot should be within the specified size limits: 30cm x 30cm x 30cm.</li>
                    <li>The power source for the bot must be on board or on the remote controller.</li>
                    <li>The voltage between any two points must not exceed 12V.</li>
                    <li>The bot must be capable of moving lightweight spheres of diameter 10 cm.</li>
				</ul>
                <p>Problem Statement:</p>
                <img src="{{ asset('/img/events/dribble-trouble/problem.png') }}" alt="Problem">
                <ul>
                    <li>
                        <p>Arena:</p>
                        <ul>
                            <li>The arena is split into three different regions: the shooting zone, the pickup zone, start zone.</li>
                            <li>The shooting zone is from where the robot shoots the ball inside the goal post. The shooting zone is further split into three zones. Shooting from these three zones provide different points.</li>
                            <ul>
                                <li>Shooting or pushing the ball in from the red zone gives you one point</li>
                                <li>Shooting the ball from orange zone gives you two points</li>
                                <li>Shooting the ball from green zone gives you three points</li>
                            </ul>
                            <li>The pickup zone is from where you should collect the spheres to shoot into the goalpost. There will be four spheres in each pickup zone and you can unlock the next zone if you collect a certain amount of points or run out of spheres.</li>
                            <ul>
                                <li>The red zone has spheres worth 1 point</li>
                                <li>The orange zone has spheres worth 2 points</li>
                                <li>The green zone has spheres worth 3 points</li>
                            </ul>
                            <li>The bot is initially placed in the entry zone.</li>
                        </ul>
                    </li>
                    <li>
                        <p>Gameplay:</p>
                        <ul>
                            <li>Each Team is given one trial, and 2 ‘timed rounds’. The best ‘timed round’ will be considered for evaluation.</li>
                            <li>The bot must initially enter the arena from the entry zone and pick spheres from the Picking Zones and try to shoot at the goal.</li>
                            <li>After the bot reaches a certain score at each pickup zone it can reach the next pickup zone.</li>
                            <li>The zones should be advanced sequentially.</li>
                            <li>After completing all zones it must return to the entry zone again.</li>
                        </ul>
                    </li>
                </ul>
			</div>
		</div>
		<div class="row">
			<b class="header">Rules:</b>
			<ul>
				<li>A team can have a maximum of three members.</li>
                <li>The bot, spheres or any apparatus in the arena should not be touched once the round begins.</li>
                <li>Participants should not enter the arena during gameplay.</li>
                <li>Do not dismantle your bot until the results are declared.</li>
                <li>Organiser's decision shall be treated as final and binding on all.</li>
                <li>A ball is considered as goal only if it crosses the goal lines.</li>
                <li>If the ball goes out of the arena's boundary lines it is considered out of play.</li>
                <li>The bots should not enter the goal region.</li>
                <li>The team may be disqualified if any of the above rules are broken.</li>
                <li>Participants can’t use external power supplies.</li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Judging Criteria:</b>
			<ul>
				<li>The time for completion and the number and type of goals achieved will be used as the judging criteria, as described below.</li>
                <li>If the goal is scored from a particular region whose points is 'n' and the ball used to achieve the goal is from the zone whose point is 'm' then the points given for the goal is n*m .</li>
                <li>If the bot is not able to accurately kick the ball into the goal post partial points will be provided. If the bot has a ball with ‘n’ points and enters any of the three zones then n/2 points will be provided.</li>
                <li>If the bot shoots the ball from an initial zone and does not go into the goal post but lands in a different zone then the bot can still shoot but points will be given according to the final zone from which the goal is made. Likewise if it shoots and lands anywhere within the arena it can go get it again.</li>
                <li>Bonus points will be awarded to teams which reach the required score to move to the next zone.</li>
                <li>In case of a tie in points:</li>
                <ul>
                    <li>The team with higher number of goals is awarded a higher position.</li>
                    <li>If the number of goals are same then the team which completes in lesser time is awarded a higher position.</li>
                </ul>
			</ul>
		</div>
		<div class="row references">
			<b class="header">References:</b>
			<ul>
				<li><a href="https://drive.google.com/drive/folders/1FXLUiUVQ3ybAv9ppDJtPjONAM9KszCKG?usp=sharing">Genesis 19 ppts</a></li>
				<li><a href="https://www.youtube.com/playlist?list=PLGs0VKk2DiYx6CMdOQR_hmJ2NbB4mZQn">Arduino basics</a></li>
				<li><a href="https://www.youtube.com/watch?v=09zfRaLEasY&list=PLZfay8jtbyJt6gkkOgeeapCS_UrsgfuJA">Arduino basics</a></li>
			</ul>
		</div>
		
		<div class="row">
			<b class="header">Contacts:</b>
			<p>Kailash - 7401050069</p>
		</div>
	</div>
</section>
<!-- end Contact section -->
@section('content')