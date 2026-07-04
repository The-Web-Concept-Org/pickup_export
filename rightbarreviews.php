<div class="card">
  <div class="card-body" align="center">
    <h4 class="card-title">Customer Reviews</h4>
    <p class="card-text">Our Satisfaied Customer Reviews </p>

<?php
	$sql = mysqli_query($dbc,"SELECT * FROM customer_reviews LIMIT  1");
	while($review=mysqli_fetch_assoc($sql)):
	?>
		
	<img class="card-img img img-responsive" src="admin/img/reviews/<?=$review['review_img']?>" style="width: 200px" ><br/>
	<h3>
		<?=$review['review_title']?>
	</h3>
	<p>
		<?= $review['review_text'] ?>
	</p>

		<?php

	endwhile;
		?>





    <a href="#" class="card-link btn btn-primary">Add your review</a>
    <a href="#" class="card-link btn btn-primary mt-2">All Reviews</a>
  </div>
</div>


<div class="" align="center">
  <div class="" >
     <!--<h4 class="card-title">Posts </h4> -->
    

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=281789882030150&autoLogAppEvents=1" nonce="cyenlrTN"></script>

<div class="fb-page" data-href="https://www.facebook.com/HTCJapan" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/HTCJapan" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HTCJapan">HTCJapan</a></blockquote></div>





   <hr/>
    <a href="https://www.facebook.com/HTCJapan" class="card-link btn btn-primary mb-2">Check Our Fb Page</a>
  </div>
  
</div>

<div class="card">
  <div class="card-body" >
    <h4 class="card-title text-center">Like </h4> 
    

    <img src="admin/img/web/revo.jpg" class="img img-responsive"/>
    
    <hr/>
    <img src="admin/img/web/usedcar.jpg" class="img img-responsive"/>




   <!--  <a href="#" class="card-link btn btn-primary">Add your review</a>
    <a href="#" class="card-link btn btn-primary">All Reviews</a> -->
  </div>
  
</div>