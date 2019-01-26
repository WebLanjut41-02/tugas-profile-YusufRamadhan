<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Personal Blog</title>
</head>

<body>
	<table border="2" width="100%" cellpadding="20" cellspacing="5">
		<tr bgcolor="lightblue">
			<td colspan="4"><center><h1>Simple Blog of Mine</h1></center></td>
		</tr>
		<tr>
			<td><a href="<?php echo base_url('index.php/blog')?>">Home</td>
			<td><a href="<?php echo base_url('index.php/blog/gallery')?>">Gallery</td>
			<td><a href="<?php echo base_url('index.php/blog/portofolio')?>">portofolio</td>
			<td align="right">
				<form action="<?php echo base_url('index.php/blog/comment')?>" method="post">
					<input type="text" name="comment" placeholder="comment here..."><input type="submit" name="submit" value="Post it" >
				</form>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<center>
					<table width="50%">
						<tr>
							<td>
								<h1>
									My trip to bogor during new year
								</h1>
								<hr>
								<img src="<?php echo base_url('assets/img/view1.jpg')?>" width="700">
								<br>i like the view so i took pictures of it. The wind feels so nice and far from city noisy.
								I always visit the place everytime i have the chance to go back from bandung. Usually i take my motorbike as my transportation from bandung to bogor. Recently it becoming my hobby to take a tour from place to place with my bike.
							</td>
						</tr>
						<tr>
							<td>
								<h1>
									Puncak's views
								</h1>
								<hr>
								<img src="<?php echo base_url('assets/img/view2.jpg')?>" width="700">
								<br>Puncak always been my trips route when going back from bandung to bogor. The place is beautiful and cold. Even with jacket the temperature still can get into my body. Puncak have plenty of tea plants.
							</td>
						</tr>
					</table>
				</center>
			</td>
		</tr>
		<tr>
			<td colspan="4" bgcolor="lightblue"><center>&copy;Copyright 2019. All rights reserved.<br>
							Fakultas Ilmu Terapan Universitas Telkom <br>
							Muhamad Yusuf Ramadhan (6701174074)</center></td>
		</tr>
	</table>
</body>

</html>