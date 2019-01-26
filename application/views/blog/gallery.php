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
					<table>
						<tr>
							<td colspan="2">
								<h1>
									Gallery Collection
								</h1>
								<hr>
								<img src="<?php echo base_url('assets/img/edit.png')?>" width="1000">
							</td>
						</tr>
						<tr>
							<td><img src="<?php echo base_url('assets/img/harute.jpg')?>" width="500"></td>
							<td><img src="<?php echo base_url('assets/img/woundwort.jpg')?>" width="500"></td>
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