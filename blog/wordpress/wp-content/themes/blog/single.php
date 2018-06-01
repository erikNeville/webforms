<?php get_header(); ?>
<div class="container" id="blog">
</div>
<div class="container-fluid" id="blogContainer">
	<div class="row">
		<center>
			<h1>PopSmartKids Blog</h1>
		</center>
	</div>
	<div class="row" id="blogRow">
		<div id="blogBack">
			<a href="http://smart2.icoolshow.net/blog/" class="blogBackLink"><i class="fas fa-arrow-left"></i>  Return to main page</a>
		</div>
	</div>

    <?php
				$count = 1;
				while(have_posts()) : the_post();?>
		<div class="row" id="blogRow">
			<div class="postBlock">
				<div id="blogThumbnail" style="background-image: url('<?php echo the_post_thumbnail_url(" medium_large "); ?>'); height:100%;">
				</div>
				<div id="blogContent">
					<h2>
						<?php the_title();?>
					</h2>
					<span class="blogDate"><?php echo get_the_date();?></span>
					<br>
					<span class="summary"><?php the_content();?></span>
				</div>
			</div>
		</div>
        <?php
				endwhile;
			?>
        <div class="clearFix">
        </div>
		<hr class="blog-hr">
        <div class="row" id="blogRow">
			
            <div class="col-md-2" id="authorColumn">
                <?php echo get_avatar(get_the_author_email(), 50);?>
            </div>
            <div class="col-md-10">
                <p>About the author</p>
                <?php the_author(); ?>
                <br>
                <?php the_author_description(); ?>
            </div>
			
        </div>
			<hr class="blog-hr">
		<div class="row" id="blogRow">
			<h2>Liked this post? Check out these posts -</h2>
		</div>
        <?php echo randomPost(); ?>
</div>



<?php get_footer(); ?>
