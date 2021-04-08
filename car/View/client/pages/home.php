<!DOCTYPE html>
<html>
<head>
	<title>Car</title>
</head>
<style type="text/css">
	.row select,input{
		margin-top: 15px;
		margin-right: 20px;
		margin-left: 20px;
		margin-bottom: 15px;
	}
</style>
<body>
	<?php if (isset($_GET['type'])) { ?>
			<div class="container">
				<p>Trang chủ | <?php echo $type['name'] ?></p>
			</div>
			<div class="container box" >
				<div class="row bg-black" style="margin-left: 0px; margin-right: 0px; margin-bottom: 30px; width: 100%">
					<select class="col" name="city" style="margin-right: 20px">
						<option>toàn quốc</option>
						<!-- <?php foreach ($variable as $key => $value): ?>
						
						<?php endforeach ?> -->
					</select>
					<select class="col" name="type" style="margin-right: 20px">
						<option>yamaha</option>
						<!-- <?php foreach ($variable as $key => $value): ?>
						
						<?php endforeach ?> -->
					</select>
					<input class="col" placeholder="khoảng giá" type="" name="" style="margin-right: 20px">
					<select class="col" name="color">
						<?php foreach ($color as $key ): ?>
							<option value="<?php echo $key['id'] ?>"><?php echo $key['color'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
		<?php } ?>
	<div class="container box" >
		<div class="row-left bg-black">
			<div class="inner">
				<div class="title">
					<h2>Tin mới nhất</h2>
				</div>
				<div class="list-item">
				<?php foreach ($news as $key ): ?>
					<div class="item">
						<a href="">
							<img class="img-left" src="Public/client/img/<?php echo $key['img'] ?>">
						</a>
						<div class="item-in4">
							<h3><?php echo $key['title'] ?></h3>
							<p class="price"><?php echo $key['price'] ?></p>
							<p class="location"><?php echo $key['address'] ?></p>
						</div>
					</div>
				<?php endforeach ?>
				</div>
			</div>

		</div>
		<div class="row-right bg-black">
			<div class="inner">
				<div class="title">
					<h2>Xe nổi bật</h2>
				</div>
				<div class="list-item">
					<div class="item">
						<a href="">
							<img class="img-right" src="Public/client/img/sonata.jpg">
						</a>
						<div class="item-in4">
							<h3>Cho thuê xe Sonata</h3>
							<p class="price">2 tỷ 300 triệu</p>
							<p class="location">Phường Trường Thạnh, Quận 9, TP Hồ Chí Minh</p>
						</div>
					</div>
					<div class="item">
						<a href="">
							<img class="img-right" src="Public/client/img/sonata.jpg">
						</a>
						<div class="item-in4">
							<h3>Cho thuê xe Sonata</h3>
							<p class="price">2 tỷ 300 triệu</p>
							<p class="location">Phường Trường Thạnh, Quận 9, TP Hồ Chí Minh</p>
						</div>
					</div>
					<div class="item">
						<a href="">
							<img class="img-right" src="Public/client/img/sonata.jpg">
						</a>
						<div class="item-in4">
							<h3>Cho thuê xe Sonata</h3>
							<p class="price">2 tỷ 300 triệu</p>
							<p class="location">Phường Trường Thạnh, Quận 9, TP Hồ Chí Minh</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>