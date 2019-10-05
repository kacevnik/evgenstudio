<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evgenstudio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>

		<section id="main">
			<div class="container">
				<div class="row mt-5">
					<div class="col-md-5 d-flex align-items-center">
						<h2>Интернет-решения для развития вашего бизнеса</h2>
					</div>
					<div class="col-md-7">
						<img class="imgList1" src="<?php echo get_template_directory_uri() . '/img/main-list.png'; ?>" alt="">
					</div>
				</div>
				<div class="row main-content">
					<div class="col-md-5 mb-4">
						<h3 class="mb-4">Мы</h3>
						<p>
							Cплоченная и опытная команда квалифицированных специалистов в области обслуживания компьютерной техники, построения и администрирования компьютерных сетей, создании и администрировании сайтов и индивидуальных интернет-решений любой сложности.
						</p>
						<p>
							Более 5 лет предоставляем услуги IT-аутсорсинга от Юга до Севера нашей страны и за её пределами. В настоящий момент в нашем портфолио компании из Москвы и Московской области, Краснодара и Краснодарского края, Норильска и Красноярского края, а также Кипра.
						</p>
						<h3 class="mb-4 mt-5">Наше преимущество</h3>
						<p>
							Это грамотный подход к обслуживанию информационной структуры предприятия, созданию и развитию интернет-проектов.  Мы подбираем оптимальную по цене и возможностям для вас схему сотрудничества. Вы сможете сократить затраты на IT, но при этом застраховать себя от проблем, вызванных простоем CRM или отключением сервера, потерей информации или атакой хакеров, «падением» сайта или неправильной работой хостинга.</p>
						<p>
							Хотите сосредоточиться на решении актуальных бизнес-задач и не вспоминать об IT в вашей компании? Поручите нам обслуживание вашей IT инфраструктуры!</p>


					</div>
					<div class="col-md-7 pt-5">
						<img class="imgList2" src="<?php echo get_template_directory_uri() . '/img/list-2.png'; ?>" alt="">
					</div>
				</div>
			</div>
		</section>

		<section id="uslugi" class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="mb-4">Наши услуги</h3>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
								<div class="d-none uslugi-content">

									<h4 class="mb-5">Сопровождение и управление интернет-проектами</h4>
									<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

									<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

									А может быть у вас уже есть собственный, рабочий сайт, но не хватает времени на его администрирование? Мы возьмем на себя эти обязательства.
								</div>
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Разработка сайтов под ключ
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
								<div class="d-none uslugi-content">

									<h4 class="mb-5">Разработка сайтов под ключ</h4>
										<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

										<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

										А может быть у вас уже есть собственный, рабочий сайт, но не хватает времени на его администрирование? Мы возьмем на себя эти обязательства.
								</div>
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
								<div class="d-none uslugi-content">

										<h4 class="mb-5">Сопровождение и управление интернет-проектами</h4>
											<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

											<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

									А может быть у вас уже есть собственный, рабочий сайт, но не хватает времени на его администрирование? Мы возьмем на себя эти обязательства.
									</div>
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								IT-аутсорсинг
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
								<div class="d-none uslugi-content">

									<h4 class="mb-5">IT-аутсорсинг</h4>
										<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

										<p>Уже работаете с web-программистом или студией, но не хотите вникать в технические моменты разработки вашего сайта? Не проблема! Мы подготовим план развития вашего сайта и техническое задание программистам, при необходимости наймём копирайтеров и проверим их работу, подключим дизайнера и наведём «лоск» на вашем сайте.</p>

								А может быть у вас уже есть собственный, рабочий сайт, но не хватает времени на его администрирование? Мы возьмем на себя эти обязательства.
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<img class="imgList3" src="<?php echo get_template_directory_uri() . '/img/list-3.png'; ?>" alt="">
						<div class="uslugi-modal-wrapper">
							<button class="close-uslugi-modal position-absolute">
								<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg">
							</button>
							<div class="uslugi-modal">
								<div class="uslugi-modal-content">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="projects">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12">
						<h3>Реализованные проекты</h3>
					</div>
					<div class="col-12">
						<ul class="projects-sorting list-unstyled m-0">
							<li><span class="mr-3 cursor-pointer active">Все</span></li>
							<li><span class="mr-3 cursor-pointer">Сайты</span></li>
							<li><span class="mr-3 cursor-pointer">IT Аутсортинг</span></li>
						</ul>
					</div>
				</div>
				<div class="project_item mb-5">
					<div class="row">
						<div class="col-md-6">
							<img class="project_item_img" src="<?php echo get_template_directory_uri() . '/img/project.png'; ?>" alt="">
						</div>
						<div class="col-md-6 project-content">
							<div class="project_item_row_header mb-2 d-flex">
								<div class="title">
								S.A.Ricci PM
								</div>
								<div class="project_link">
									<a href="riccipm.ru">riccipm.ru</a>
								</div>
							</div>
							<div class="project_item_row mb-4">
								<div class="project_cat">
									Сайт + Поддержка
								</div>
								<div class="project_desc mb-4">
								Разработка сайта компании и его дальнейшая поддержка
								</div>
							</div>
							<div class="project_item_row_footer">
								<span class="project_more cursor-pointer">
									Подробнее
									<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="">
								</span>
								<div class="project_logo">
									<img src="<?php echo get_template_directory_uri() . '/img/project_logo.png'; ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="project_item mb-5">
					<div class="row">
						<div class="col-md-6">
							<img class="project_item_img" src="<?php echo get_template_directory_uri() . '/img/project.png'; ?>" alt="">
						</div>
						<div class="col-md-6 project-content">
							<div class="project_item_row_header mb-2 d-flex">
								<div class="title">
								S.A.Ricci PM
								</div>
								<div class="project_link">
									<a href="riccipm.ru">riccipm.ru</a>
								</div>
							</div>
							<div class="project_item_row mb-4">
								<div class="project_cat">
									Сайт + Поддержка
								</div>
								<div class="project_desc mb-4">
								Разработка сайта компании и его дальнейшая поддержка
								</div>
							</div>
							<div class="project_item_row_footer">
								<span class="project_more cursor-pointer">
									Подробнее
									<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="">
								</span>
								<div class="project_logo">
									<img src="<?php echo get_template_directory_uri() . '/img/project_logo.png'; ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="project_item mb-5">
					<div class="row">
						<div class="col-md-6">
							<img class="project_item_img" src="<?php echo get_template_directory_uri() . '/img/project.png'; ?>" alt="">
						</div>
						<div class="col-md-6 project-content">
							<div class="project_item_row_header mb-2 d-flex">
								<div class="title">
								S.A.Ricci PM
								</div>
								<div class="project_link">
									<a href="riccipm.ru">riccipm.ru</a>
								</div>
							</div>
							<div class="project_item_row mb-4">
								<div class="project_cat">
									Сайт + Поддержка
								</div>
								<div class="project_desc mb-4">
								Разработка сайта компании и его дальнейшая поддержка
								</div>
							</div>
							<div class="project_item_row_footer">
								<span class="project_more cursor-pointer">
									Подробнее
									<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="">
								</span>
								<div class="project_logo">
									<img src="<?php echo get_template_directory_uri() . '/img/project_logo.png'; ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
