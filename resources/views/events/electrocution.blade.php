
			<!-- Contact section -->
			<section id="about" >
				<br>
				<div class="container">
					<div class="row">
						
						<div class="text-center wow animated fadeInDown">
							<!-- <br> -->
							<h2>REGISTER</h2>
					
						</div>
						
						<div class="col-md-6 col-md-offset-3 contact-form wow animated fadeInLeft">
							<form action="{{ url('/registered') }}" method="post">
								<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
								
								<label for="name">Name</label>
								<div class="input-field" id="name">
									<input type="text" name="name" class="form-control" placeholder="Your Name..." required>
								</div>

								<label for="name">Mobile Number</label>
								<div class="input-field" id="mobile">

									<input type="text" name="mobile" class="form-control" pattern="[789][0-9]{9}" placeholder="Your Phone Number..." required>
								</div>


								<div class="form-group">
								<label for="hostel">Select Hostel</label>
									<select name="hostel" id="hostel" class="form-control">
										<option name="Agate">Agate</option>
										<option name="Coral">Coral</option>
										<option name="Diamond">Diamond</option>
										<option name="Jade">Jade</option>
										<option name="Opal">Opal</option>
									</select>
								</div>
								<div class="form-group">
									<label for="event">Choose events</label>
								</div>
								<div id="event" name="event">
										<div class="checkbox">
										<label>
										<input type="checkbox" name="electrolution" value="electrolution" >Electrolution<br>
										</label>
										</div>

										<div class="checkbox">
										<label><input type="checkbox" name="funda" value="funda" >Funda</label>
										</div>


										<div class="checkbox">
										<label>
										<input type="checkbox" name="huntthecode" value="huntthecode">Hunt The Code<br>
										</label>
										</div>

										<div class="checkbox">
										<label>
										<input type="checkbox" name="picktoplace" value="picktoplace">Pick To Place
										</label>
										</div>
										
										<div class="checkbox">
										<label>
										<input type="checkbox" name="speedcubing" value="speedcubing">Speed Cubing<br>
										</label>
										</div>
										
										<div class="checkbox">
										<label>
										<input type="checkbox" name="theultimatemanager" value="theUltimateManager" >The Ultimate Manager<br>
										</label>
										</div>
										
									</div>
						       	<center>
						       	<button type="submit" id="submit" style="font-size:1.5em"class="btn btn-blue btn-effect">Register</button>
						       	</center>
							</form>
							@if (Session::has('message'))
							<div class="alert alert-info">
								<ul>
										<li>{{ Session::get('message') }}</li>
								</ul>
							</div>
							@endif
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
		