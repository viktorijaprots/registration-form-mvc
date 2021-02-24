<div class="container container-page">
	<div class="content">
		<ul>
			<li><a href="main" class="nav-button selected">REGISTRATION</a></li>
			<li><a href="list" class="nav-button">PARTICIPANTS</a></li>
		</ul>
		<div class="form-panel">
			<form method="POST" action="main/registration">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label class="form-label" for="name">Name</label>
							<input required name="name" type="text" class="form-control input-field" id="name" placeholder="">
						</div>
						<div class="form-group">
							<label class="form-label" for="surname">Surname</label>
							<input required name="surname" type="text" class="form-control input-field" id="surname" placeholder="">
						</div>
						<div class="form-group">
							<label class="form-label" for="name-organization">Name of the organization</label>
							<input required name="name-organization" type="text" class="form-control input-field" id="name-organization" placeholder="">
						</div>
						<div class="form-group">
							<label class="form-label" for="birthday">Date of Birth</label>
							<input required name="birthday" type="date" class="form-control input-field" id="birthday" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="form-label" for="sex">Sex</label>
							<select name="sex" class="form-control input-field" id="sex">
							  <option value="1">Male</option>
							  <option value="2">Female</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-label" for="nationality">Nationality</label>
							<input required name="nationality" type="text" class="form-control input-field" id="nationality" placeholder="">
						</div>
						<div class="form-group">
							<label class="form-label" for="position">Position</label>
							<input required name="position" type="text" class="form-control input-field" id="position" placeholder="">
						</div>
						<div class="form-group">
							<label class="form-label" for="email">Email</label>
							<input required name="email" type="email" class="form-control input-field" id="email">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<button class="main-button" type-button="submit" />REGISTRATION</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>