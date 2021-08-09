@extends('layouts.default')
@section('content')

	@include('components.hero-slider', [
		'items' => $banner,
	])

	<div class="shape-background-right"></div>

	@include('components.color-icons', [
		'title' => 'Nuestro propósito',
		'text' => 'Ultrices vel semper vitae quis libero nunc sociis. Pharetra dui vel, elementum feugiat amet. Pulvinar fermentum consectetur ornare duis duis ut quam commodo lorem ipsum dolor sit amet educacion lorem ipsum',
		'button' => [
			'label' => 'Ver más',
			'target' => '_self',
			'url' => '/nuestro-proposito',
		],
		'items' => [
			[
				'color' => '#FBBB0E',
				'icon' => 'business',
				'text' => 'Porque el índice de <strong>vulnerabilidad escolar</strong> de los establecimientos técnico profesionales <strong>alcanza un 93%</strong>',
			],
			[
				'color' => '#F78FBE',
				'icon' => 'business',
				'text' => 'Porque el índice de <strong>vulnerabilidad escolar</strong> de los establecimientos técnico profesionales <strong>alcanza un 93%</strong>',
			],
			[
				'color' => '#B5CD25',
				'icon' => 'business',
				'text' => 'Porque el índice de <strong>vulnerabilidad escolar</strong> de los establecimientos técnico profesionales <strong>alcanza un 93%</strong>',
			],
			[
				'color' => '#E9467A',
				'icon' => 'business',
				'text' => 'Porque el índice de <strong>vulnerabilidad escolar</strong> de los establecimientos técnico profesionales <strong>alcanza un 93%</strong>',
			],
		]
	])

	@include('components.box-icons', [
		'title' => 'Nuestros pilares',
		'text' => 'Ultrices vel semper vitae quis libero nunc sociis. Pharetra dui vel, elementum feugiat amet. Pulvinar fermentum consectetur ornare duis duis ut quam commodo lorem ipsum dolor sit amet educacion lorem ipsum',
		'items' => [
			[
				'icon' => 'topic',
				'title' => 'Difusión a las comunidades',
				'text' => 'Dolor bibendum fermentum interdum metus, magna dignissim. Massa dui, lorem ipsum dolor.',
			],
			[
				'icon' => 'auto_awesome_mosaic',
				'title' => 'Postulación',
				'text' => 'Dolor bibendum fermentum interdum metus, magna dignissim. Massa dui, lorem ipsum dolor.',
			],
			[
				'icon' => 'check_circle',
				'title' => 'Evaluación de proyecto',
				'text' => 'Dolor bibendum fermentum interdum metus, magna dignissim. Massa dui, lorem ipsum dolor.',
			],
			[
				'icon' => 'school',
				'title' => 'Educación',
				'text' => 'Dolor bibendum fermentum interdum metus, magna dignissim. Massa dui, lorem ipsum dolor.',
			],
		]
	])

<div class="shape-background-left"></div>

	@include('components.hero-tabs', [
		'items' => [
			[
				'tab' => '¿Qué es el fie?',
				'title' => 'FIE (Fondo Iniciativas Escolares)',
				'text' => 'Montes, egestas quisque elementum arcu sed id eget tristique. Sed adipiscing morbi auctor egestas odio. Cras pharetra, interdum feugiat sit. At viverra euismod id hendrerit sagittis. In fermentum velit tortor eu lorem ipsum dolor lorem ipsum.',
				'img' => [
					'src' => themosis_theme_assets() . '/images/tabs-image.jpg', // 1080x690
					'alt' => '',
				],
				'button' => [
					'label' => 'Ver más',
					'target' => '_self',
					'url' => '/',
				]
			],
			[
				'tab' => 'Convocatoria 2021',
				'title' => 'Fortalecimiento de Iniciativas Educativas',
				'text' => 'Ultrices vel semper vitae quis libero nunc sociis. Pharetra dui vel, elementum feugiat amet. Pulvinar fermentum consectetur ornare duis duis ut quam commodo.',
				'img' => [
					'src' => themosis_theme_assets() . '/images/hero-image.jpg', // 1080x690
					'alt' => '',
				],
				'button' => [
					'label' => 'Ver más',
					'target' => '_self',
					'url' => '/',
				]
			],
		]
	])

	@include('components.featured-slider', [
		'title' => 'Contenido destacado',
		'button' => [
			'label' => 'Ver todo',
			'target' => '_self',
			'url' => '/contenido',
		],
		'items' => [
			[
				'category' => 'Categoría',
				'date' => '20 de enero de 2020',
				'title' => 'Título de contenido destacado en dos líneas',
				'img' => [
					'src' => themosis_theme_assets() . '/images/content-card-01.jpg', // 825x540
					'alt' => '',
				],
				'url' => '/contenido/interior'
			],
			[
				'category' => 'Categoría',
				'date' => '20 de enero de 2020',
				'title' => 'Título de contenido destacado en dos líneas',
				'img' => [
					'src' => themosis_theme_assets() . '/images/content-card-02.jpg', // 825x540
					'alt' => '',
				],
				'url' => '/contenido/interior'
			],
			[
				'category' => 'Categoría',
				'date' => '20 de enero de 2020',
				'title' => 'Título de contenido destacado en dos líneas',
				'img' => [
					'src' => themosis_theme_assets() . '/images/content-card-03.jpg', // 825x540
					'alt' => '',
				],
				'url' => '/contenido/interior'
			],
			[
				'category' => 'Categoría',
				'date' => '20 de enero de 2020',
				'title' => 'Título de contenido destacado en dos líneas',
				'img' => [
					'src' => themosis_theme_assets() . '/images/content-card-01.jpg', // 825x540
					'alt' => '',
				],
				'url' => '/contenido/interior'
			],
			[
				'category' => 'Categoría',
				'date' => '20 de enero de 2020',
				'title' => 'Título de contenido destacado en dos líneas',
				'img' => [
					'src' => themosis_theme_assets() . '/images/content-card-02.jpg', // 825x540
					'alt' => '',
				],
				'url' => '/contenido/interior'
			],
		]
	])

	@include('components.logos-slider', [
		'title' => 'Alianzas Estratégicas',
		'items' => [
			[
				'img' => [
					'src' => '//via.placeholder.com/400x150', // 400x150
					'alt' => '',
				],
				'url' => '/',
			],
			[
				'img' => [
					'src' => '//via.placeholder.com/400x150', // 400x150
					'alt' => '',
				],
				'url' => '/',
			],
			[
				'img' => [
					'src' => '//via.placeholder.com/400x150', // 400x150
					'alt' => '',
				],
				'url' => '/',
			],
			[
				'img' => [
					'src' => '//via.placeholder.com/400x150', // 400x150
					'alt' => '',
				],
				'url' => '/',
			],
			[
				'img' => [
					'src' => '//via.placeholder.com/400x150', // 400x150
					'alt' => '',
				],
				'url' => '/',
			],
			[
				'img' => [
					'src' => '//via.placeholder.com/400x150', // 400x150
					'alt' => '',
				],
				'url' => '/',
			],
		]
	])

@endsection
