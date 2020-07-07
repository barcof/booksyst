<div class="container">
	<?php
		//	room
			if($booksyst_userid === "admin" ){
				?>
				<div class="gallery">
					<a href="index.php?rooms=rooms_admin">
						<img width="200px" height="100px" src="asset/img/logo_meetingroom.png"/>
						<h2 class="desc">MEETING ROOM RESERVATION</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?rpa=rpa">
						<img width="130px" height="100px" src="asset/img/RPA.png"/>
						<h2 class="desc">OTHER FACILITY</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?tablet=tablet">
						<img width="220px" height="100px" src="asset/img/OnlineMeeting.PNG"/>
						<h2 class="desc">LICENSE MEETING</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?ict=ict">
						<img width="220px" height="100px" src="asset/img/devices.jpg"/>
						<h2 class="desc">DEVICE RESERVATION</h2>
					</a>
				</div>
				<?php
			}
			elseif($booksyst_vuserctrtype == "1" or $booksyst_usertype >= "1" or $booksyst_userid == "mudasir" or $booksyst_userid == "indah" or $booksyst_userid === "ota"){
				?>
				<div class="gallery">
					<a href="index.php?rooms=rooms">
						<img width="200px" height="100px" src="asset/img/logo_meetingroom.png"/>
						<h2 class="desc">MEETING ROOM RESERVATION</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?cars=cars">
						<img width="200px" height="100px" src="asset/img/trans.png"/>
						<h2 class="desc">TRANSPORTATION RESERVATION</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?rpa=rpa">
						<img width="200px" height="100px" src="asset/img/RPA.png"/>
						<h2 class="desc">OTHER FACILITY</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?tablet=tablet">
						<img width="200px" height="100px" src="asset/img/OnlineMeeting.PNG"/>
						<h2 class="desc">LICENSE MEETING</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?ict=ict">
						<img width="200px" height="100px" src="asset/img/devices.jpg"/>
						<h2 class="desc">DEVICE RESERVATION</h2>
					</a>
				</div>
				<?php
			}
			else{
				?>
				<div class="gallery">
					<a href="index.php?rooms=rooms">
						<img class="img_meeting" width="200px" height="100px" src="asset/img/logo_meetingroom.png"/>
						<h2 class="desc">MEETING ROOM RESERVATION</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?rpa=rpa">
						<img class="img_rpa" width="200px" height="100px" src="asset/img/RPA.png"/>
						<h2 class="desc">OTHER FACILITY</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?tablet=tablet">
						<img class="img_tablet" width="200px" height="100px" width="220px" src="asset/img/OnlineMeeting.PNG"/>
						<h2 class="desc">LICENSE MEETING</h2>
					</a>
				</div>
				<div class="gallery">
					<a href="index.php?ict=ict">
						<img class="img_tablet" width="200px" height="100px" width="220px" src="asset/img/devices.jpg"/>
						<h2 class="desc">DEVICE RESERVATION</h2>
					</a>
				</div>
				<?php
			}
		?>
			
</div>