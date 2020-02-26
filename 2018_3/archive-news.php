<?php
	get_header();
?>
	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Новости
			<small></small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Главная страницe</a>
			</li>
			<li class="breadcrumb-item active">Новости</li>
		</ol>

		<div class="row">
			<!-- Blog Entries Column -->
			<div class="news-archive col-md-12">
				<?php if(have_posts()){?>
					<?php while(have_posts()){?>
						<?php the_post();?>
						<div class="news-card card mb-4 text-center">
							<?php $miniature_url_relate = get_the_post_thumbnail_url($post->ID);?>
							<img class="card-img-top news-img m-auto" src="<?php echo $miniature_url_relate;?>" alt="Card image cap">
							<div class="card-body">
								<h2 class="card-title"><?php the_title();?></h2>
								<p class="card-text"><?php the_excerpt();?></p>
								<a href="<?php echo get_post_permalink($post->ID);?>" class="btn btn-primary">Читать далее &rarr;</a>
							</div>
							<div class="card-footer text-muted">
								Выложено <?php the_date();?>
								<div class="w-100"></div>
								Автор <a href="#"><?php the_author(); ?></a>
							</div>
						</div>
					<?php }?>
				<?php }?>
				<!-- Blog Post -->
			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->
<?php
	get_footer();
?>