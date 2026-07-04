<!--Section-->
		<section class="sptb bg-patterns bg-white" >
			<div class="container" >
				<div class="section-title center-block text-center">
					
					<p style="font-size: 25px">New Arrivals</p>
				</div>
				
					<!-- Wrapper for carousel items -->
					<div class="row">
					<?php

$sqlvehicle = mysqli_query($dbc,"SELECT * FROM vehicle_info ORDER BY vehicle_id DESC LIMIT 12 ");
	while($vehicle=mysqli_fetch_assoc($sqlvehicle)):

		$img = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM vehicle_images WHERE vehicle_id = '$vehicle[vehicle_id]' AND vehicle_image_featured = '1' LIMIT 1"));

		$maker = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM maker WHERE maker_id = '$vehicle[vehicle_maker]'"));
$brand = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM brands WHERE brand_id = '$vehicle[vehicle_brand]'"));

					?>
					
					<div class="col-sm-4">
					<div class="item">
						<div class="card mb-0">
						    <?php
						    if($vehicle['vehicle_mode'] == 'premium'){
						        $colorrib = 'bg-secondary';
						    }elseif($vehicle['vehicle_mode'] == 'discount'){
						        $colorrib = 'bg-danger';
						    }elseif($vehicle['vehicle_mode'] == 'brand new'){
						        $colorrib = 'bg-orange';
						    }elseif($vehicle['vehicle_mode'] == 'reserved'){
						        $colorrib = 'bg-blue';
						    }elseif($vehicle['vehicle_mode'] == 'clearance'){
						        $colorrib = 'bg-yellow';
						    }elseif($vehicle['vehicle_mode'] == '12'){
						        $colorrib = 'bg-danger';
						    }elseif($vehicle['vehicle_mode'] == '124'){
						        $colorrib = 'bg-danger';
						    }else{
						        $colorrib = 'bg-blue';
						    }
						    ?>
							<div class="arrow-ribbon <?=$colorrib?>" style="font-size: 16px"><?=ucwords($vehicle['vehicle_mode']?: "New")?></div>
							<div class="item-card7-imgs">
								<a class="link" href="singlecar.php?i=<?=base64_encode($vehicle['vehicle_id'])?>"></a>
								<img src="admin/img/vehicles_images/<?=$img['vehicle_image_name']?>" alt="img" class="cover-image" style="height: 230px;">
								<!-- <div class="item-card7-overlaytext">
									<span class="text-white bg-gray">Used</span>
								</div> -->
								
							</div>
							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text  d-flex">
										<a href="singlecar.php?vehicle_id=<?=base64_encode($vehicle['vehicle_id'])?>" class="text-dark"><h6 class="" style=" clear: both;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;"><?=$vehicle['vehicle_stock_id']?> <?=$maker['maker_name']?> <?=$brand['brand_name']?></h6></a>
									</div>
									
									
								</div>
								<br/>
							
								<div class="item-tag"   >
									<h4  class="mb-0" >$<?=$vehicle['vehicle_est_price']?></h4>
								</div>
							</div>
							<div class="card-footer " >
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Registration Year"><i class="fa fa-car text-muted"></i> <span class="text-default">REG.Year <?=$vehicle['vehicle_reg_year']?></span></a> |
								<!--<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default"><?=$vehicle['vehicle_km']?></span></a>|-->
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="vehicle CC"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">CC <?=$vehicle['vehicle_cc']?></span></a>
							</div>
						</div>
					</div>
				</div>


					<?php
endwhile;
					?>
				</div>
			</div>
		</section>
		<!--Section-->
		
		