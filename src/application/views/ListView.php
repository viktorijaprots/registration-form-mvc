<div class="container container-page">
	<div class="content">
		<ul>
			<li><a href="main" class="nav-button">REGISTRATION</a></li>
			<li><a href="list" class="nav-button selected">PARTICIPANTS</a></li>
		</ul>
		<div class="participants-form">
			<div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">№</th>
							<th scope="col">Full name</th>
							<th scope="col">Organization</th>
							<th scope="col">Email</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							foreach($data as $u) { 
						?>
							<tr>
								<th scope="row"><?=$i?></th>
								<td><?=$u["name"] . " " . $u["surname"]?></td>
								<td><?=$u["organization_name"]?></td>
								<td><a href="mailto: <?=$u["email"]?>"><?=$u["email"]?></a></td>
							</tr>
						<?php 
								$i++;
							}
						?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>