@extends('events.base')
@section('content')
<!-- Contact section -->
<section id="about" class="electrolution" style="padding-top: 90px; color: black">
	<div class="container">
		<div class="row">
			<div class="text-center wow animated fadeInDown">
				<!-- <br> -->
				<h2 style="font-weight: bold;font-size: 2.5em;">RMI HYBRID HACKATHON</h2>
			</div>
		</div>
		<div class="row" style="color: black">
			<b class="header">Event Description:</b>
			<p>
            The event is split into 4 phases [P0, P1, P2, P3] in which Phase 0 will be a task to be completed before the hackathon. The Phase 1, 2 and 3 will take place during the hackathon.
			</p>
            <p>
            Phase 0 and 1 will involve Image processing and python programming, Phase 2 will cover Arduino programming and circuit building and Phase 3 will be a combination of Phase 1 and Phase 2.
            </p>
            <p>
            The problem statement for Phase 1, 2 and 3 will be released at the beginning of the hackathon.
            </p>
		</div>
		<div class="row references">
			<b class="header">Phases of the problem statement:</b>
			<div>
				<ul>
                    <li>
                        <p>Phase 0:</p>
                        <ul>
                            <li>The team must build a basic shape detector script which can read an image file and display the shape (circle, square, rectangle, triangle, pentagon, hexagon). Sample images have been attached below and similar test images will be given for testing.</li>
                            <li>For the Phase 0 and 1, participants need basics of python, OpenCV, reading and writing images, thresholding, contouring, detection of number of sides of shape.</li>
                            <li>This phase must be completed before the hackathon day.</li>
                        </ul>
                    </li>
                    <li>
                        <p>Phase 1:</p>
                        <ul>
                            <li>A problem statement for image processing will be released at the start of the hackathon.</li>
                            <li>The shape detector code teams made in Phase 0 must be modified based on the statement to complete this Phase.</li>
                            <li>Test images will be shared in folders at the start of the hackathon.</li>
                        </ul>
                    </li>
                    <li>
                        <p>Phase 2:</p>
                        <ul>
                            <li>A problem statement for Arduino circuit building and programming will be released at the start of the hackathon.</li>
                            <li>The teams are supposed to work on the statement on TINKERCAD platform and share the final model as a link, after making it public, as submission for Phase 2.</li>
                            <li>The problem statement will require the participants to know basics of Arduino, output of Arduino ports, using LEDs as output of Arduino, using push buttons as inputs to Arduino, switch debouncing, binary number system and familiarise with TinkerCad platform. <a href='www.tinkercad.com' >(www.tinkercad.com)</a> </li>
                        </ul>
                    </li>
                    <li>
                        <p>Phase 3:</p>
                        <ul>
                            <li>This phase will involve a combination of both Phase 1 and Phase 2 where the results of Phase 1 will be fed as input into Phase 2 Arduino circuit model and output must be obtained.</li>
                        </ul>
                    </li>
				</ul>
			</div>
		</div>
		<div class="row references">
			<b class="header">Rules:</b>
			<ul>
                <li>A team can have a maximum of 3 members.</li> 
                <li>The team can use any IDE/code editor for the purpose.</li>
                <li>The image processing must be done using OpenCV.</li> 
                <li>Participants must use only the test images provided in hackathon and should not modify it in any manner.</li> 
                <li>Participants must use only the Tinkercad platform for Phase 2.</li>
                <li>RMI holds powers to question/verify/disqualify any team upon malpractice.</li>
                <li>RMI’s decision is final and binding.</li>
                <li>Plagiarism is strictly prohibited. If found guilty, they will be disqualified from the competition immediately.</li>
                <li><a href='https://drive.google.com/file/d/1lcX1C-8z-a2FhPJCS8eBRVdd3pQEJt4_/view'>Link to Rulebook</a></li>
			</ul>
		</div>
		<div class="row">
			<b class="header">Judging Criteria:</b>
			<ul>
				<li>Successful completion of Phase 0 - 20 points</li>
                <li>Successful completion of Phase 1 - 40 points</li>
                <li>Successful completion of Phase 2 - 60 points</li>
                <li>Successful completion of Phase 3 - 30 points</li>
                <li>Top 2 teams with the best program (algorithm and presentation) in Phase 1 will fetch additional 15 points.</li>
                <li>Top 2 teams with the best Arduino model (circuit, presentation, and program algorithm) will fetch additional 15 points.</li>
                <li>In case teams are unable to complete a phase, partial marks will be provided.</li>
                <li>The teams will be ranked according to points. In case of ties, time of submission will be accounted for the same.</li>
			</ul>
		</div>
		<div class="row references">
			<b class="header">References:</b>
            <p>[Remember, the internet is your biggest resource for everything. Sticking to the topics mentioned under each phase will be sufficient to complete the event.]</p>
			<ul>
				<li>
                    <a href='https://drive.google.com/drive/folders/1FXLUiUVQ3ybAv9ppDJtPjONAM9KszCKG?usp=sharing'>Genesis’19 ppts</a>
				</li>
                <li>
                    <a href='https://www.youtube.com/playlist?list=PLGs0VKk2DiYx6CMdOQR_hmJ2NbB4mZQn'>Arduino basics</a>
				</li>
                <li>
                    <a href='https://www.youtube.com/watch?v=09zfRaLEasY&list=PLZfay8jtbyJt6gkkOgeeapCS_UrsgfuJA'>Arduino basics</a>
				</li>
                <li>
                    <a href='https://www.youtube.com/playlist?list=PL6Yc5OUgcoTmTGACTa__vnifNA744Cz-q'>OpenCV Tutorials</a>
				</li>
                <li>
                    <a href='https://www.youtube.com/playlist?list=PLQVvvaa0QuDdttJXlLtAJxJetJcqmqlQq'>OpenCV Tutorials</a>
				</li>
                <li>
                    <a href='https://opencv.org/'>OpenCV Docs</a>
				</li>
            </ul>
		</div>
        <div class="row">
			<b class="header">Contact:</b>
			<p>
                Kailash : 7401050069
                <br> 
                Rishivanthiya : 8300073420
                <br> 
                Sai Ganesh : 8489386161
			</p>
		</div>
	</div>
</section>
<!-- end Contact section -->
@section('content')