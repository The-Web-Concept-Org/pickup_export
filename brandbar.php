<div class="card">
  <div class="card-body">
    <h4 class="card-title" style="border-bottom: 1px solid">Search By maker</h4>

  		<span class="card-text">
  			<?php
											$sql = mysqli_query($dbc,"SELECT * FROM maker  ORDER BY show_order DESC  LIMIT 20");
											while($maker=mysqli_fetch_assoc($sql)):
																?>
					<p style="margin-top: 10px!important">
						<a href="car-lists.php?advance=s&maker=<?=$maker['maker_id']?>">
						<img src="admin/img/vehicles_images/<?=$maker['maker_img']?>" style="width: 30px" / >
						<span><?=strtoupper($maker['maker_name'])?></span></a><br/>
					</p>																
																<?php
															endwhile;
																?>
  		</span>
   								<a href="widgets.php?category=maker" class="btn btn-block btn-primary">Show More</a>
  </div>
</div>


<div class="card">
  <div class="card-body" align="">
    <h4 class="card-title" style="border-bottom: 1px solid">Search By Types</h4>

  		<span class="card-text">


  			
													
													<?php $q = get($dbc,"body_type WHERE body_type_sts = '1' LIMIT 10");
												while($r = mysqli_fetch_assoc($q)): ?>
													

													<p style="margin-top: 10px!important">
						<a href="car-lists.php?get=type&type=<?=$r['body_type_id']?>">
						<img src="admin/img/vehicles_images/<?=$r['body_type_img']?>" style="width: 30px" / >
						<span><?=$r['body_type_name']?></span></a><br/>
					</p>	
												<?php endwhile ?>
												

  			<!--   <span value="SEDAN">SEDAN(1896)</span><br/><br/>
                                <span value="SUV">SUV(1522)</span><br/><br/>
                                 <span value="WAGON">WAGON(1522)</span><br/><br/>
                                  <span value="COMPACT">COMPACT(1522)</span><br/><br/>
                                   <span value="SPORTY">SPORTY(1522)</span><br/><br/>
                                    <span value="TRUCK">TRUCK(1522)</span><br/><br/>
                                     <span value="VAN">VAN(1522)</span><br/><br/>
                                      <span value="SPECIAL">SPECIAL(1522)</span><br/> -->
  			
  		</span>

  		<a href="widgets.php?category=bodytype" class="btn btn-block btn-primary">Show More</a>
   								
  </div>
</div>


<div class="card">
  <div class="card-body" align="center">
    <h4 class="card-title" style="border-bottom: 1px solid">Search By Price</h4>

  		<span class="card-text">
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&minimum_price=0&maximum_price=500">Under $500</a> 
          </span><br/><br/>
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&minimum_price=500&maximum_price=1000">$500 - $1,000 </a>
          </span><br/><br/>
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&minimum_price=1000&maximum_price=1500">$1,000 - $1,500  </a>
          </span><br/><br/>
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&minimum_price=1500&maximum_price=2000">$1,500 - $2,000  </a>
          </span><br/><br/>
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&minimum_price=2000&maximum_price=2500">$2,000 - $2,500</a>
          </span><br/><br/>
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&minimum_price=2500&maximum_price=4000">$2,500 - $4,000  </a>
          </span><br/><br/>
          <span>
            <a class="font-weight-semibold text-dark" href="car-lists.php?advance=s&maker=null&brands=null&body_type=null&min_price=4000&max_price=50000000">Over $4,000  </a>
          </span><br/><br/>
        </span>
   								
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h4 class="card-title" style="border-bottom: 1px solid">Other Categories</h4>

      <span class="card-text">
        <?php
        $getfuel = mysqli_query($dbc,"SELECT * FROM fuel ORDER BY fuel_name ASC ");
        while($qbc = mysqli_fetch_assoc($getfuel)):
        ?>
        <a href="car-lists.php?advance=s&fuel=<?=$qbc['fuel_name']?>  "> <span><?=$qbc['fuel_name']?>  </span></a><br/><br/>
        <?php
      endwhile;
        ?>

        
          
     
        
      </span>
                  
  </div>
</div>


<div class="card">
  <div class="card-body">
    <h4 class="card-title" style="border-bottom: 1px solid">Country Type</h4>

      <span class="card-text">
        <ul style="list-style-type:none" class="abcdef">
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>TANZANIA</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>KENYA</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>UGANDA</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>BAHAMAS</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>SURINAM</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>JAMAICA</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>TRINIDAD & TOBAGO</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>GUYANA</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>UK</span></a><br/></li>
         <li><a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>GERMANY</span></a><br/></li>
        <li> <a href="car-lists.php?get=type&type=<?=rand(1,9)?>"> <span>CYPRUS</span></a><br/></li>
        </ul>  
    
      </span>
      
     					
                  
  </div>
</div>
<style>
    .abcdef>li{
    margin-top:20px;
        
    }
    }
</style>