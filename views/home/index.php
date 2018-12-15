<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
		<h1>Welcome!</h1>
	</div>
	<div class="home">
	<div class="weather">


		<?php if(!$result) {?>
			<form method="post" action="<?php echo BASE_URL?>weather/getresults">

					<label for "zip">Enter Your Zip Code</label>
					<input type="text" name="zip" id="zip" required="zip" />
					<br/>
					<button type="submit" class="btn">Load Results</button>

			</form>
			<?php
			}
			else {
			?>
			<h1>Weather for <?php echo $weather->request->query;?></h1>
		</div>
			<h4>Today's High: <?php echo $weather->weather->maxtempF;?></h4>
			<h4>Today's Low: <?php echo $weather->weather->mintempF;?></h4>

	<?php
			}
	?>



				</div>
				<div class="homeimage">
			<img src="homeimage.png">
		</div>
			</div>
		<br>
		<br>
		<p>
			<a href="<?php echo BASE_URL;?>blog/index">Check out the blog!</a>
		</p>
		<br>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat augue ex, ultrices consequat neque venenatis et.
			Aliquam erat volutpat. Donec mollis non metus in blandit. Etiam vitae ullamcorper justo, nec volutpat lectus.
			Donec dapibus tortor justo, ut pellentesque arcu feugiat at. Proin pretium facilisis enim. Vestibulum eu metus sit amet quam
			 aliquam rutrum. Curabitur dignissim, nulla ut auctor aliquet, neque tortor rhoncus nulla, sed commodo ante mi ac turpis.
			 Quisque imperdiet nec eros in cursus. Donec id erat velit. Nam ut metus eget orci convallis iaculis. Nulla dictum purus
			  eget tincidunt convallis. Donec egestas iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus.
				Cras tempus felis at libero blandit gravida.
		</p>

	<div class="page-header">
    <h2>Latest News from <?php echo $title;?></h2>
  </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
