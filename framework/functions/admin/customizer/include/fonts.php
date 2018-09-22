<?php

/**
 *Google Fonts.
 *
 * TABLE OF CONTENTS:
 *       01. Fonts List
 *       02. List it by Name
 *       03. Font Weight List
 *       04. Character Sets
 *       05. (F) Is Font Italic ( true or false)
 *       05. (F) Get Font Weight
 *       06. (F) Get Font Family Query
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

if ( ! class_exists( 'dima_get_googlefonts' ) ) {
	/**
	 * [ Provide a list of google fonts  "name, subsets,variants" ]
	 */
	function dima_get_googlefonts() {
		$fonts = array(
			'ABeeZee'                  => array(
				'name'     => 'ABeeZee',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Abel'                     => array(
				'name'     => 'Abel',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Abril Fatface'            => array(
				'name'     => 'Abril Fatface',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Aclonica'                 => array(
				'name'     => 'Aclonica',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Acme'                     => array(
				'name'     => 'Acme',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Actor'                    => array(
				'name'     => 'Actor',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Adamina'                  => array(
				'name'     => 'Adamina',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Advent Pro'               => array(
				'name'     => 'Advent Pro',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
			),
			'Aguafina Script'          => array(
				'name'     => 'Aguafina Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Akronim'                  => array(
				'name'     => 'Akronim',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Aladin'                   => array(
				'name'     => 'Aladin',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Aldrich'                  => array(
				'name'     => 'Aldrich',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Alef'                     => array(
				'name'     => 'Alef',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Alegreya'                 => array(
				'name'     => 'Alegreya',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Alegreya SC'              => array(
				'name'     => 'Alegreya SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Alegreya Sans'            => array(
				'name'     => 'Alegreya Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'100',
					'100italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'700',
					'700italic',
					'800',
					'800italic',
					'900',
					'900italic',
				),
			),
			'Alegreya Sans SC'         => array(
				'name'     => 'Alegreya Sans SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'100',
					'100italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'700',
					'700italic',
					'800',
					'800italic',
					'900',
					'900italic',
				),
			),
			'Alex Brush'               => array(
				'name'     => 'Alex Brush',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Alfa Slab One'            => array(
				'name'     => 'Alfa Slab One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Alice'                    => array(
				'name'     => 'Alice',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Alike'                    => array(
				'name'     => 'Alike',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Alike Angular'            => array(
				'name'     => 'Alike Angular',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Allan'                    => array(
				'name'     => 'Allan',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Allerta'                  => array(
				'name'     => 'Allerta',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Allerta Stencil'          => array(
				'name'     => 'Allerta Stencil',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Allura'                   => array(
				'name'     => 'Allura',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Almendra'                 => array(
				'name'     => 'Almendra',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Almendra Display'         => array(
				'name'     => 'Almendra Display',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Almendra SC'              => array(
				'name'     => 'Almendra SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Amarante'                 => array(
				'name'     => 'Amarante',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Amaranth'                 => array(
				'name'     => 'Amaranth',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Amatic SC'                => array(
				'name'     => 'Amatic SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Amethysta'                => array(
				'name'     => 'Amethysta',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Anaheim'                  => array(
				'name'     => 'Anaheim',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Andada'                   => array(
				'name'     => 'Andada',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Andika'                   => array(
				'name'     => 'Andika',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Angkor'                   => array(
				'name'     => 'Angkor',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Annie Use Your Telescope' => array(
				'name'     => 'Annie Use Your Telescope',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Anonymous Pro'            => array(
				'name'     => 'Anonymous Pro',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Antic'                    => array(
				'name'     => 'Antic',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Antic Didone'             => array(
				'name'     => 'Antic Didone',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Antic Slab'               => array(
				'name'     => 'Antic Slab',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Anton'                    => array(
				'name'     => 'Anton',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Arapey'                   => array(
				'name'     => 'Arapey',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Arbutus'                  => array(
				'name'     => 'Arbutus',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Arbutus Slab'             => array(
				'name'     => 'Arbutus Slab',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Architects Daughter'      => array(
				'name'     => 'Architects Daughter',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Archivo Black'            => array(
				'name'     => 'Archivo Black',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Archivo Narrow'           => array(
				'name'     => 'Archivo Narrow',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Arimo'                    => array(
				'name'     => 'Arimo',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Arizonia'                 => array(
				'name'     => 'Arizonia',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Armata'                   => array(
				'name'     => 'Armata',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Artifika'                 => array(
				'name'     => 'Artifika',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Arvo'                     => array(
				'name'     => 'Arvo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Asap'                     => array(
				'name'     => 'Asap',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),

			'Assistant' => array(
				'name'     => 'Assistant',
				'subsets'  => array(
					'latin',
					'hebrew',
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'800',
				),
			),

			'Asset'                 => array(
				'name'     => 'Asset',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Astloch'               => array(
				'name'     => 'Astloch',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Asul'                  => array(
				'name'     => 'Asul',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Atomic Age'            => array(
				'name'     => 'Atomic Age',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Aubrey'                => array(
				'name'     => 'Aubrey',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Audiowide'             => array(
				'name'     => 'Audiowide',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Autour One'            => array(
				'name'     => 'Autour One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Average'               => array(
				'name'     => 'Average',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Average Sans'          => array(
				'name'     => 'Average Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Averia Gruesa Libre'   => array(
				'name'     => 'Averia Gruesa Libre',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Averia Libre'          => array(
				'name'     => 'Averia Libre',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Averia Sans Libre'     => array(
				'name'     => 'Averia Sans Libre',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Averia Serif Libre'    => array(
				'name'     => 'Averia Serif Libre',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Bad Script'            => array(
				'name'     => 'Bad Script',
				'subsets'  => array(
					'cyrillic',
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Balthazar'             => array(
				'name'     => 'Balthazar',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bangers'               => array(
				'name'     => 'Bangers',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Basic'                 => array(
				'name'     => 'Basic',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Battambang'            => array(
				'name'     => 'Battambang',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Baumans'               => array(
				'name'     => 'Baumans',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bayon'                 => array(
				'name'     => 'Bayon',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Bellefair'             => array(
				'name'     => 'Bellefair',
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Belgrano'              => array(
				'name'     => 'Belgrano',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Belleza'               => array(
				'name'     => 'Belleza',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'BenchNine'             => array(
				'name'     => 'BenchNine',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Bentham'               => array(
				'name'     => 'Bentham',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Berkshire Swash'       => array(
				'name'     => 'Berkshire Swash',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bevan'                 => array(
				'name'     => 'Bevan',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bigelow Rules'         => array(
				'name'     => 'Bigelow Rules',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bigshot One'           => array(
				'name'     => 'Bigshot One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bilbo'                 => array(
				'name'     => 'Bilbo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bilbo Swash Caps'      => array(
				'name'     => 'Bilbo Swash Caps',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bitter'                => array(
				'name'     => 'Bitter',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Black Ops One'         => array(
				'name'     => 'Black Ops One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bokor'                 => array(
				'name'     => 'Bokor',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Bonbon'                => array(
				'name'     => 'Bonbon',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Boogaloo'              => array(
				'name'     => 'Boogaloo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bowlby One'            => array(
				'name'     => 'Bowlby One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bowlby One SC'         => array(
				'name'     => 'Bowlby One SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Brawler'               => array(
				'name'     => 'Brawler',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Bree Serif'            => array(
				'name'     => 'Bree Serif',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bubblegum Sans'        => array(
				'name'     => 'Bubblegum Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Bubbler One'           => array(
				'name'     => 'Bubbler One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Buda'                  => array(
				'name'     => 'Buda',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
				),
			),
			'Buenard'               => array(
				'name'     => 'Buenard',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Butcherman'            => array(
				'name'     => 'Butcherman',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Butterfly Kids'        => array(
				'name'     => 'Butterfly Kids',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Cabin'                 => array(
				'name'     => 'Cabin',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'500',
					'500italic',
					'600',
					'600italic',
					'700',
					'700italic',
				),
			),
			'Cabin Condensed'       => array(
				'name'     => 'Cabin Condensed',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
			),
			'Cabin Sketch'          => array(
				'name'     => 'Cabin Sketch',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Caesar Dressing'       => array(
				'name'     => 'Caesar Dressing',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Cagliostro'            => array(
				'name'     => 'Cagliostro',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Calligraffitti'        => array(
				'name'     => 'Calligraffitti',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Cambo'                 => array(
				'name'     => 'Cambo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Candal'                => array(
				'name'     => 'Candal',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Cantarell'             => array(
				'name'     => 'Cantarell',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Cantata One'           => array(
				'name'     => 'Cantata One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Cantora One'           => array(
				'name'     => 'Cantora One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Capriola'              => array(
				'name'     => 'Capriola',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Cardo'                 => array(
				'name'     => 'Cardo',
				'subsets'  => array(
					'greek-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Carme'                 => array(
				'name'     => 'Carme',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Carrois Gothic'        => array(
				'name'     => 'Carrois Gothic',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Carrois Gothic SC'     => array(
				'name'     => 'Carrois Gothic SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Carter One'            => array(
				'name'     => 'Carter One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Caudex'                => array(
				'name'     => 'Caudex',
				'subsets'  => array(
					'greek-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Cedarville Cursive'    => array(
				'name'     => 'Cedarville Cursive',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Ceviche One'           => array(
				'name'     => 'Ceviche One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Changa One'            => array(
				'name'     => 'Changa One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Chango'                => array(
				'name'     => 'Chango',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Chau Philomene One'    => array(
				'name'     => 'Chau Philomene One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Chela One'             => array(
				'name'     => 'Chela One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Chelsea Market'        => array(
				'name'     => 'Chelsea Market',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Chenla'                => array(
				'name'     => 'Chenla',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Cherry Cream Soda'     => array(
				'name'     => 'Cherry Cream Soda',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Cherry Swash'          => array(
				'name'     => 'Cherry Swash',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Chewy'                 => array(
				'name'     => 'Chewy',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Chicle'                => array(
				'name'     => 'Chicle',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Chivo'                 => array(
				'name'     => 'Chivo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'900',
					'900italic',
				),
			),
			'Cinzel'                => array(
				'name'     => 'Cinzel',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
					'900',
				),
			),
			'Cinzel Decorative'     => array(
				'name'     => 'Cinzel Decorative',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
					'900',
				),
			),
			'Clicker Script'        => array(
				'name'     => 'Clicker Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Coda'                  => array(
				'name'     => 'Coda',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'800',
				),
			),
			'Coda Caption'          => array(
				'name'     => 'Coda Caption',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'800',
				),
			),
			'Codystar'              => array(
				'name'     => 'Codystar',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
				),
			),
			'Combo'                 => array(
				'name'     => 'Combo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Comfortaa'             => array(
				'name'     => 'Comfortaa',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Coming Soon'           => array(
				'name'     => 'Coming Soon',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Concert One'           => array(
				'name'     => 'Concert One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Condiment'             => array(
				'name'     => 'Condiment',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Content'               => array(
				'name'     => 'Content',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Contrail One'          => array(
				'name'     => 'Contrail One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Convergence'           => array(
				'name'     => 'Convergence',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Cookie'                => array(
				'name'     => 'Cookie',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Copse'                 => array(
				'name'     => 'Copse',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Corben'                => array(
				'name'     => 'Corben',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Courgette'             => array(
				'name'     => 'Courgette',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Cousine'               => array(
				'name'     => 'Cousine',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Coustard'              => array(
				'name'     => 'Coustard',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'900',
				),
			),
			'Covered By Your Grace' => array(
				'name'     => 'Covered By Your Grace',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Crafty Girls'          => array(
				'name'     => 'Crafty Girls',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Creepster'             => array(
				'name'     => 'Creepster',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Crete Round'           => array(
				'name'     => 'Crete Round',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Crimson Text'          => array(
				'name'     => 'Crimson Text',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'600',
					'600italic',
					'700',
					'700italic',
				),
			),
			'Croissant One'         => array(
				'name'     => 'Croissant One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Crushed'               => array(
				'name'     => 'Crushed',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Cuprum'                => array(
				'name'     => 'Cuprum',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Cutive'                => array(
				'name'     => 'Cutive',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Cutive Mono'           => array(
				'name'     => 'Cutive Mono',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'David Libre'           => array(
				'name'     => 'David Libre',
				'subsets'  => array(
					'latin',
					'hebrew',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'400',
					'500',
					'700',
				),
			),
			'Damion'                => array(
				'name'     => 'Damion',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Dancing Script'        => array(
				'name'     => 'Dancing Script',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Dangrek'               => array(
				'name'     => 'Dangrek',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Dawning of a New Day'  => array(
				'name'     => 'Dawning of a New Day',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Days One'              => array(
				'name'     => 'Days One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Delius'                => array(
				'name'     => 'Delius',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Delius Swash Caps'     => array(
				'name'     => 'Delius Swash Caps',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Delius Unicase'        => array(
				'name'     => 'Delius Unicase',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Della Respira'         => array(
				'name'     => 'Della Respira',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Denk One'              => array(
				'name'     => 'Denk One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Devonshire'            => array(
				'name'     => 'Devonshire',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Didact Gothic'         => array(
				'name'     => 'Didact Gothic',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
				),
			),
			'Diplomata'             => array(
				'name'     => 'Diplomata',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Diplomata SC'          => array(
				'name'     => 'Diplomata SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Domine'                => array(
				'name'     => 'Domine',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Donegal One'           => array(
				'name'     => 'Donegal One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Doppio One'            => array(
				'name'     => 'Doppio One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Dorsa'                 => array(
				'name'     => 'Dorsa',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Dosis'                 => array(
				'name'     => 'Dosis',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
			),
			'Dr Sugiyama'           => array(
				'name'     => 'Dr Sugiyama',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Droid Sans'            => array(
				'name'     => 'Droid Sans',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Droid Sans Mono'       => array(
				'name'     => 'Droid Sans Mono',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Droid Serif'           => array(
				'name'     => 'Droid Serif',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Duru Sans'             => array(
				'name'     => 'Duru Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Dynalight'             => array(
				'name'     => 'Dynalight',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'EB Garamond'           => array(
				'name'     => 'EB Garamond',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'400',
				),
			),
			'Eagle Lake'            => array(
				'name'     => 'Eagle Lake',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Eater'                 => array(
				'name'     => 'Eater',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Economica'             => array(
				'name'     => 'Economica',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Electrolize'           => array(
				'name'     => 'Electrolize',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Elsie'                 => array(
				'name'     => 'Elsie',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'900',
				),
			),
			'Elsie Swash Caps'      => array(
				'name'     => 'Elsie Swash Caps',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'900',
				),
			),
			'Emblema One'           => array(
				'name'     => 'Emblema One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Emilys Candy'          => array(
				'name'     => 'Emilys Candy',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Engagement'            => array(
				'name'     => 'Engagement',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Englebert'             => array(
				'name'     => 'Englebert',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Enriqueta'             => array(
				'name'     => 'Enriqueta',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Erica One'             => array(
				'name'     => 'Erica One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Esteban'               => array(
				'name'     => 'Esteban',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Euphoria Script'       => array(
				'name'     => 'Euphoria Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ewert'                 => array(
				'name'     => 'Ewert',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Exo'                   => array(
				'name'     => 'Exo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'100',
					'100italic',
					'200',
					'200italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'800',
					'800italic',
					'900',
					'900italic',
				),
			),
			'Exo 2'                 => array(
				'name'     => 'Exo 2',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'100',
					'100italic',
					'200',
					'200italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'800',
					'800italic',
					'900',
					'900italic',
				),
			),
			'Expletus Sans'         => array(
				'name'     => 'Expletus Sans',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'500',
					'500italic',
					'600',
					'600italic',
					'700',
					'700italic',
				),
			),
			'Fanwood Text'          => array(
				'name'     => 'Fanwood Text',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Fascinate'             => array(
				'name'     => 'Fascinate',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Fascinate Inline'      => array(
				'name'     => 'Fascinate Inline',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Faster One'            => array(
				'name'     => 'Faster One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Fasthand'              => array(
				'name'     => 'Fasthand',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Fauna One'             => array(
				'name'     => 'Fauna One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Federant'              => array(
				'name'     => 'Federant',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Federo'                => array(
				'name'     => 'Federo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Felipa'                => array(
				'name'     => 'Felipa',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Fenix'                 => array(
				'name'     => 'Fenix',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Finger Paint'          => array(
				'name'     => 'Finger Paint',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Fjalla One'            => array(
				'name'     => 'Fjalla One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Fjord One'             => array(
				'name'     => 'Fjord One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Flamenco'              => array(
				'name'     => 'Flamenco',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'400',
				),
			),
			'Flavors'               => array(
				'name'     => 'Flavors',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Fondamento'            => array(
				'name'     => 'Fondamento',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Fontdiner Swanky'      => array(
				'name'     => 'Fontdiner Swanky',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Forum'                 => array(
				'name'     => 'Forum',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Francois One'          => array(
				'name'     => 'Francois One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),

			'Frank Ruhl Libre' => array(
				'name'     => 'Frank Ruhl Libre',
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
					'500',
					'700',
					'900',
				),
			),

			'Freckle Face' => array(
				'name'     => 'Freckle Face',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),

			'Fredericka the Great'    => array(
				'name'     => 'Fredericka the Great',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Fredoka One'             => array(
				'name'     => 'Fredoka One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Freehand'                => array(
				'name'     => 'Freehand',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Fresca'                  => array(
				'name'     => 'Fresca',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Frijole'                 => array(
				'name'     => 'Frijole',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Fruktur'                 => array(
				'name'     => 'Fruktur',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Fugaz One'               => array(
				'name'     => 'Fugaz One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'GFS Didot'               => array(
				'name'     => 'GFS Didot',
				'subsets'  => array(
					'greek',
				),
				'variants' => array(
					'400',
				),
			),
			'GFS Neohellenic'         => array(
				'name'     => 'GFS Neohellenic',
				'subsets'  => array(
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Gabriela'                => array(
				'name'     => 'Gabriela',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Gafata'                  => array(
				'name'     => 'Gafata',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Galdeano'                => array(
				'name'     => 'Galdeano',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Galindo'                 => array(
				'name'     => 'Galindo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Gentium Basic'           => array(
				'name'     => 'Gentium Basic',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Gentium Book Basic'      => array(
				'name'     => 'Gentium Book Basic',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Geo'                     => array(
				'name'     => 'Geo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Geostar'                 => array(
				'name'     => 'Geostar',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Geostar Fill'            => array(
				'name'     => 'Geostar Fill',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Germania One'            => array(
				'name'     => 'Germania One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Gilda Display'           => array(
				'name'     => 'Gilda Display',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Give You Glory'          => array(
				'name'     => 'Give You Glory',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Glass Antiqua'           => array(
				'name'     => 'Glass Antiqua',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Glegoo'                  => array(
				'name'     => 'Glegoo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Gloria Hallelujah'       => array(
				'name'     => 'Gloria Hallelujah',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Goblin One'              => array(
				'name'     => 'Goblin One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Gochi Hand'              => array(
				'name'     => 'Gochi Hand',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Gorditas'                => array(
				'name'     => 'Gorditas',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Goudy Bookletter 1911'   => array(
				'name'     => 'Goudy Bookletter 1911',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Graduate'                => array(
				'name'     => 'Graduate',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Grand Hotel'             => array(
				'name'     => 'Grand Hotel',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Gravitas One'            => array(
				'name'     => 'Gravitas One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Great Vibes'             => array(
				'name'     => 'Great Vibes',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Griffy'                  => array(
				'name'     => 'Griffy',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Gruppo'                  => array(
				'name'     => 'Gruppo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Gudea'                   => array(
				'name'     => 'Gudea',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Habibi'                  => array(
				'name'     => 'Habibi',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Hind'                    => array(
				'name'     => 'Hind',
				'subsets'  => array(
					'devanagari',
					'latin',
					'latin-ext'
				),
				'variants' => array(
					'400',
					'400',
					'500',
					'600',
					'700',
				),
			),
			'Hammersmith One'         => array(
				'name'     => 'Hammersmith One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Hanalei'                 => array(
				'name'     => 'Hanalei',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Hanalei Fill'            => array(
				'name'     => 'Hanalei Fill',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Handlee'                 => array(
				'name'     => 'Handlee',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Hanuman'                 => array(
				'name'     => 'Hanuman',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Happy Monkey'            => array(
				'name'     => 'Happy Monkey',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Heebo'                   => array(
				'name'     => 'Heebo',
				'subsets'  => array(
					'latin',
					'hebrew',
				),
				'variants' => array(
					'100',
					'300',
					'400',
					'500',
					'700',
					'800',
					'900',
				),
			),
			'Headland One'            => array(
				'name'     => 'Headland One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Henny Penny'             => array(
				'name'     => 'Henny Penny',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Herr Von Muellerhoff'    => array(
				'name'     => 'Herr Von Muellerhoff',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Holtwood One SC'         => array(
				'name'     => 'Holtwood One SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Homemade Apple'          => array(
				'name'     => 'Homemade Apple',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Homenaje'                => array(
				'name'     => 'Homenaje',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'IM Fell DW Pica'         => array(
				'name'     => 'IM Fell DW Pica',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'IM Fell DW Pica SC'      => array(
				'name'     => 'IM Fell DW Pica SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'IM Fell Double Pica'     => array(
				'name'     => 'IM Fell Double Pica',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'IM Fell Double Pica SC'  => array(
				'name'     => 'IM Fell Double Pica SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'IM Fell English'         => array(
				'name'     => 'IM Fell English',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'IM Fell English SC'      => array(
				'name'     => 'IM Fell English SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'IM Fell French Canon'    => array(
				'name'     => 'IM Fell French Canon',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'IM Fell French Canon SC' => array(
				'name'     => 'IM Fell French Canon SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'IM Fell Great Primer'    => array(
				'name'     => 'IM Fell Great Primer',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'IM Fell Great Primer SC' => array(
				'name'     => 'IM Fell Great Primer SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Iceberg'                 => array(
				'name'     => 'Iceberg',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Iceland'                 => array(
				'name'     => 'Iceland',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Imprima'                 => array(
				'name'     => 'Imprima',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Inconsolata'             => array(
				'name'     => 'Inconsolata',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Inder'                   => array(
				'name'     => 'Inder',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Indie Flower'            => array(
				'name'     => 'Indie Flower',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Inika'                   => array(
				'name'     => 'Inika',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Irish Grover'            => array(
				'name'     => 'Irish Grover',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Istok Web'               => array(
				'name'     => 'Istok Web',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Italiana'                => array(
				'name'     => 'Italiana',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Italianno'               => array(
				'name'     => 'Italianno',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Jacques Francois'        => array(
				'name'     => 'Jacques Francois',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Jacques Francois Shadow' => array(
				'name'     => 'Jacques Francois Shadow',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Jim Nightshade'          => array(
				'name'     => 'Jim Nightshade',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Jockey One'              => array(
				'name'     => 'Jockey One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Jolly Lodger'            => array(
				'name'     => 'Jolly Lodger',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Josefin Sans'            => array(
				'name'     => 'Josefin Sans',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'100',
					'100italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'600',
					'600italic',
					'700',
					'700italic',
				),
			),
			'Josefin Slab'            => array(
				'name'     => 'Josefin Slab',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'100',
					'100italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'600',
					'600italic',
					'700',
					'700italic',
				),
			),
			'Joti One'                => array(
				'name'     => 'Joti One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Judson'                  => array(
				'name'     => 'Judson',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Julee'                   => array(
				'name'     => 'Julee',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Julius Sans One'         => array(
				'name'     => 'Julius Sans One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Junge'                   => array(
				'name'     => 'Junge',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Jura'                    => array(
				'name'     => 'Jura',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
				),
			),
			'Just Another Hand'       => array(
				'name'     => 'Just Another Hand',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Just Me Again Down Here' => array(
				'name'     => 'Just Me Again Down Here',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Kameron'                 => array(
				'name'     => 'Kameron',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Kantumruy'               => array(
				'name'     => 'Kantumruy',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Karla'                   => array(
				'name'     => 'Karla',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Kaushan Script'          => array(
				'name'     => 'Kaushan Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Kavoon'                  => array(
				'name'     => 'Kavoon',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Kdam Thmor'              => array(
				'name'     => 'Kdam Thmor',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Keania One'              => array(
				'name'     => 'Keania One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Kelly Slab'              => array(
				'name'     => 'Kelly Slab',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Kenia'                   => array(
				'name'     => 'Kenia',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Khmer'                   => array(
				'name'     => 'Khmer',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Kite One'                => array(
				'name'     => 'Kite One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Knewave'                 => array(
				'name'     => 'Knewave',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Kosugi'               => array(
				'name'     => 'Kosugi',
				'subsets'  => array(
					'latin',
					'japanese',
					'cyrillic',
				),
				'variants' => array(
					'400',
				),
			),
			'Kosugi Maru'               => array(
				'name'     => 'Kosugi Maru',
				'subsets'  => array(
					'latin',
					'japanese',
					'cyrillic',
				),
				'variants' => array(
					'400',
				),
			),
			'Kotta One'               => array(
				'name'     => 'Kotta One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Koulen'                  => array(
				'name'     => 'Koulen',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Kranky'                  => array(
				'name'     => 'Kranky',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Kreon'                   => array(
				'name'     => 'Kreon',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Kristi'                  => array(
				'name'     => 'Kristi',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Krona One'               => array(
				'name'     => 'Krona One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'La Belle Aurore'         => array(
				'name'     => 'La Belle Aurore',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Lancelot'                => array(
				'name'     => 'Lancelot',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Lato'                    => array(
				'name'     => 'Lato',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'100',
					'100italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'League Script'           => array(
				'name'     => 'League Script',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Leckerli One'            => array(
				'name'     => 'Leckerli One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Ledger'                  => array(
				'name'     => 'Ledger',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Lekton'                  => array(
				'name'     => 'Lekton',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Lemon'                   => array(
				'name'     => 'Lemon',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Libre Baskerville'       => array(
				'name'     => 'Libre Baskerville',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Life Savers'             => array(
				'name'     => 'Life Savers',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Lilita One'              => array(
				'name'     => 'Lilita One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Lily Script One'         => array(
				'name'     => 'Lily Script One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Limelight'               => array(
				'name'     => 'Limelight',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Linden Hill'             => array(
				'name'     => 'Linden Hill',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Lobster'                 => array(
				'name'     => 'Lobster',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Lobster Two'             => array(
				'name'     => 'Lobster Two',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Londrina Outline'        => array(
				'name'     => 'Londrina Outline',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Londrina Shadow'         => array(
				'name'     => 'Londrina Shadow',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Londrina Sketch'         => array(
				'name'     => 'Londrina Sketch',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Londrina Solid'          => array(
				'name'     => 'Londrina Solid',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Lora'                    => array(
				'name'     => 'Lora',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Love Ya Like A Sister'   => array(
				'name'     => 'Love Ya Like A Sister',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Loved by the King'       => array(
				'name'     => 'Loved by the King',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Lovers Quarrel'          => array(
				'name'     => 'Lovers Quarrel',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Luckiest Guy'            => array(
				'name'     => 'Luckiest Guy',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Lusitana'                => array(
				'name'     => 'Lusitana',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Lustria'                 => array(
				'name'     => 'Lustria',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),

			'M PLUS 1p'              => array(
				'name'     => 'M PLUS 1p',
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
					'cyrillic',
					'cyrillic-ext',
					'greek',
					'greek-ext',
					'japanese',
					'vietnamese'
				),
				'variants' => array(
					'400',
					'300',
					'400',
					'500',
					'700',
					'800',
					'900',
				),
			),
			'M PLUS Rounded 1c'      => array(
				'name'     => 'M PLUS Rounded 1c',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'greek',
					'greek-ext',
					'hebrew',
					'japanese',
					'latin-ext',
					'vietnamese'
				),
				'variants' => array(
					'100',
					'300',
					'400',
					'500',
					'700',
					'800',
					'900',
				),
			),
			'Macondo'                => array(
				'name'     => 'Macondo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Macondo Swash Caps'     => array(
				'name'     => 'Macondo Swash Caps',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Magra'                  => array(
				'name'     => 'Magra',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Maiden Orange'          => array(
				'name'     => 'Maiden Orange',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Mako'                   => array(
				'name'     => 'Mako',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Marcellus'              => array(
				'name'     => 'Marcellus',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Marcellus SC'           => array(
				'name'     => 'Marcellus SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Marck Script'           => array(
				'name'     => 'Marck Script',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Margarine'              => array(
				'name'     => 'Margarine',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Marko One'              => array(
				'name'     => 'Marko One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Marmelad'               => array(
				'name'     => 'Marmelad',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Marvel'                 => array(
				'name'     => 'Marvel',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Mate'                   => array(
				'name'     => 'Mate',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Mate SC'                => array(
				'name'     => 'Mate SC',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Maven Pro'              => array(
				'name'     => 'Maven Pro',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'500',
					'700',
					'900',
				),
			),
			'McLaren'                => array(
				'name'     => 'McLaren',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Meddon'                 => array(
				'name'     => 'Meddon',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'MedievalSharp'          => array(
				'name'     => 'MedievalSharp',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Medula One'             => array(
				'name'     => 'Medula One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Megrim'                 => array(
				'name'     => 'Megrim',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Meie Script'            => array(
				'name'     => 'Meie Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Merienda'               => array(
				'name'     => 'Merienda',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Merienda One'           => array(
				'name'     => 'Merienda One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Merriweather'           => array(
				'name'     => 'Merriweather',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Merriweather Sans'      => array(
				'name'     => 'Merriweather Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
					'800',
					'800italic',
				),
			),
			'Metal'                  => array(
				'name'     => 'Metal',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Metal Mania'            => array(
				'name'     => 'Metal Mania',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Metamorphous'           => array(
				'name'     => 'Metamorphous',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Metrophobic'            => array(
				'name'     => 'Metrophobic',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Michroma'               => array(
				'name'     => 'Michroma',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Milonga'                => array(
				'name'     => 'Milonga',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Miltonian'              => array(
				'name'     => 'Miltonian',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Miltonian Tattoo'       => array(
				'name'     => 'Miltonian Tattoo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Miniver'                => array(
				'name'     => 'Miniver',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Miss Fajardose'         => array(
				'name'     => 'Miss Fajardose',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Modern Antiqua'         => array(
				'name'     => 'Modern Antiqua',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Molengo'                => array(
				'name'     => 'Molengo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Molle'                  => array(
				'name'     => 'Molle',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400italic',
				),
			),
			'Monda'                  => array(
				'name'     => 'Monda',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Monofett'               => array(
				'name'     => 'Monofett',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Monoton'                => array(
				'name'     => 'Monoton',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Monsieur La Doulaise'   => array(
				'name'     => 'Monsieur La Doulaise',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Montaga'                => array(
				'name'     => 'Montaga',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Montez'                 => array(
				'name'     => 'Montez',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Montserrat'             => array(
				'name'     => 'Montserrat',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Montserrat Alternates'  => array(
				'name'     => 'Montserrat Alternates',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Montserrat Subrayada'   => array(
				'name'     => 'Montserrat Subrayada',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Moul'                   => array(
				'name'     => 'Moul',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Moulpali'               => array(
				'name'     => 'Moulpali',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Mountains of Christmas' => array(
				'name'     => 'Mountains of Christmas',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Mouse Memoirs'          => array(
				'name'     => 'Mouse Memoirs',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Mr Bedfort'             => array(
				'name'     => 'Mr Bedfort',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Mr Dafoe'               => array(
				'name'     => 'Mr Dafoe',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Mr De Haviland'         => array(
				'name'     => 'Mr De Haviland',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Mrs Saint Delafield'    => array(
				'name'     => 'Mrs Saint Delafield',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Mrs Sheppards'          => array(
				'name'     => 'Mrs Sheppards',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Muli'                   => array(
				'name'     => 'Muli',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
				),
			),
			'Mystery Quest'          => array(
				'name'     => 'Mystery Quest',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Neucha'                 => array(
				'name'     => 'Neucha',
				'subsets'  => array(
					'cyrillic',
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Neuton'                 => array(
				'name'     => 'Neuton',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'400italic',
					'700',
					'800',
				),
			),
			'New Rocker'             => array(
				'name'     => 'New Rocker',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'News Cycle'             => array(
				'name'     => 'News Cycle',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Niconne'                => array(
				'name'     => 'Niconne',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Nixie One'              => array(
				'name'     => 'Nixie One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nobile'                 => array(
				'name'     => 'Nobile',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Nokora'                 => array(
				'name'     => 'Nokora',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Norican'                => array(
				'name'     => 'Norican',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Nosifer'                => array(
				'name'     => 'Nosifer',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Nothing You Could Do'   => array(
				'name'     => 'Nothing You Could Do',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Noticia Text'           => array(
				'name'     => 'Noticia Text',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Noto Sans'              => array(
				'name'     => 'Noto Sans',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			//By pixeldima
			'Amiri'                  => array(
				'name'     => 'Amiri',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Lateef'                 => array(
				'name'     => 'Lateef',
				'subsets'  => array(
					'arabic',
					'latin',
				),
				'variants' => array(
					'400'
				),
			),
			'Scheherazade'           => array(
				'name'     => 'Scheherazade',
				'subsets'  => array(
					'arabic',
				),
				'variants' => array(
					'400'
				),
			),
			'Changa'                 => array(
				'name'     => 'Changa',
				'subsets'  => array(
					'arabic',
				),
				'variants' => array(
					'400'
				),
			),

			'Markazi Text'   => array(
				'name'     => 'Markazi Text',
				'subsets'  => array(
					'arabic',
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
			),
			'Tajawal'        => array(
				'name'     => 'Tajawal',
				'subsets'  => array(
					'arabic',
					'latin'
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'700',
					'900',
				),
			),
			'Baloo Bhaijaan' => array(
				'name'     => 'Baloo Bhaijaan',
				'subsets'  => array(
					'arabic',
					'latin',
					'latin-ext',
					'vietnamese'
				),
				'variants' => array(
					'400'
				),
			),

			'Droid Arabic Kufi' => array(
				'name'     => 'Droid Arabic Kufi',
				'subsets'  => array( 'arabic' ),
				'variants' => array(),
			),

			'Droid Arabic Naskh' => array(
				'name'     => 'Droid Arabic Naskh',
				'subsets'  => array( 'arabic' ),
				'variants' => array(),
			),

			'notonaskharabic' => array(
				'name'     => 'Noto Naskh Arabic',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'400',
					'700',
				),
			),

			'notokufiarabic' => array(
				'name'     => 'Noto Kufi Arabic',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'400',
					'700',
				),
			),

			'notonastaliqurdu' => array(
				'name'     => 'Noto Nastaliq Urdu',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'400',
				),
			),

			'Lalezar' => array(
				'name'     => 'Lalezar',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'400',
				),
			),

			'Miriam Libre' => array(
				'name'     => 'Miriam Libre',
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),

			'Mirza' => array(
				'name'     => 'Mirza',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
			),

			'Lemonada' => array(
				'name'     => 'Lemonada',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
			),

			'Cairo' => array(
				'name'     => 'Cairo',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'900',
				),
			),

			'Mada' => array(
				'name'     => 'Mada',
				'subsets'  => array(
					'arabic'
				),
				'variants' => array(
					'300',
					'400',
					'500',
					'900',
				),
			),

			'Jomhuria' => array(
				'name'     => 'Jomhuria',
				'subsets'  => array(
					'arabic',
					'latin-ext'
				),
				'variants' => array(
					'300',
					'400',
					'500',
					'900',
				),
			),

			'Katibeh' => array(
				'name'     => 'Katibeh',
				'subsets'  => array(
					'arabic',
					'latin-ext'
				),
				'variants' => array(
					'400'
				),
			),

			'Rakkas'                 => array(
				'name'     => 'Rakkas',
				'subsets'  => array(
					'arabic',
					'latin-ext'
				),
				'variants' => array(
					'400'
				),
			),
			'Harmattan'              => array(
				'name'     => 'Harmattan',
				'subsets'  => array(
					'arabic',
				),
				'variants' => array(
					'400'
				),
			),
			'Aref Ruqaa'             => array(
				'name'     => 'Aref Ruqaa',
				'subsets'  => array(
					'arabic',
				),
				'variants' => array(
					'400',
					'700'
				),
			),
			'El Messiri'             => array(
				'name'     => 'El Messiri',
				'subsets'  => array(
					'arabic',
					'cyrillic',
				),
				'variants' => array(
					'400',
					'500',
					'600',
					'700'
				),
			),
			'Reem Kufi'              => array(
				'name'     => 'Reem Kufi',
				'subsets'  => array(
					'arabic',
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			//!By pixeldima
			'Noto Serif'             => array(
				'name'     => 'Noto Serif',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Nova Cut'               => array(
				'name'     => 'Nova Cut',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Flat'              => array(
				'name'     => 'Nova Flat',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Mono'              => array(
				'name'     => 'Nova Mono',
				'subsets'  => array(
					'latin',
					'greek',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Oval'              => array(
				'name'     => 'Nova Oval',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Round'             => array(
				'name'     => 'Nova Round',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Script'            => array(
				'name'     => 'Nova Script',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Slim'              => array(
				'name'     => 'Nova Slim',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nova Square'            => array(
				'name'     => 'Nova Square',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Numans'                 => array(
				'name'     => 'Numans',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Nunito'                 => array(
				'name'     => 'Nunito',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Odor Mean Chey'         => array(
				'name'     => 'Odor Mean Chey',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Offside'                => array(
				'name'     => 'Offside',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Old Standard TT'        => array(
				'name'     => 'Old Standard TT',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Oldenburg'              => array(
				'name'     => 'Oldenburg',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Oleo Script'            => array(
				'name'     => 'Oleo Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Oleo Script Swash Caps' => array(
				'name'     => 'Oleo Script Swash Caps',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Open Sans'              => array(
				'name'     => 'Open Sans',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'800',
					'800italic',
				),
			),
			'Open Sans Condensed'    => array(
				'name'     => 'Open Sans Condensed',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'300',
					'300italic',
					'700',
				),
			),
			'Oranienbaum'            => array(
				'name'     => 'Oranienbaum',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Orbitron'               => array(
				'name'     => 'Orbitron',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'500',
					'700',
					'900',
				),
			),
			'Oregano'                => array(
				'name'     => 'Oregano',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Orienta'                => array(
				'name'     => 'Orienta',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Original Surfer'        => array(
				'name'     => 'Original Surfer',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Oswald'                 => array(
				'name'     => 'Oswald',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Over the Rainbow'       => array(
				'name'     => 'Over the Rainbow',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Overlock'               => array(
				'name'     => 'Overlock',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Overlock SC'            => array(
				'name'     => 'Overlock SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ovo'                    => array(
				'name'     => 'Ovo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Oxygen'                 => array(
				'name'     => 'Oxygen',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Oxygen Mono'            => array(
				'name'     => 'Oxygen Mono',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'PT Mono'                => array(
				'name'     => 'PT Mono',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'PT Sans'                => array(
				'name'     => 'PT Sans',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'PT Sans Caption'        => array(
				'name'     => 'PT Sans Caption',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'PT Sans Narrow'         => array(
				'name'     => 'PT Sans Narrow',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'PT Serif'               => array(
				'name'     => 'PT Serif',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'PT Serif Caption'       => array(
				'name'     => 'PT Serif Caption',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Pacifico'               => array(
				'name'     => 'Pacifico',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Paprika'                => array(
				'name'     => 'Paprika',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Parisienne'             => array(
				'name'     => 'Parisienne',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Passero One'            => array(
				'name'     => 'Passero One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Passion One'            => array(
				'name'     => 'Passion One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
					'900',
				),
			),
			'Pathway Gothic One'     => array(
				'name'     => 'Pathway Gothic One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Patrick Hand'           => array(
				'name'     => 'Patrick Hand',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'400',
				),
			),
			'Patrick Hand SC'        => array(
				'name'     => 'Patrick Hand SC',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'400',
				),
			),
			'Patua One'              => array(
				'name'     => 'Patua One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Paytone One'            => array(
				'name'     => 'Paytone One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Peralta'                => array(
				'name'     => 'Peralta',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Permanent Marker'       => array(
				'name'     => 'Permanent Marker',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Petit Formal Script'    => array(
				'name'     => 'Petit Formal Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Petrona'                => array(
				'name'     => 'Petrona',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Philosopher'            => array(
				'name'     => 'Philosopher',
				'subsets'  => array(
					'cyrillic',
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Piedra'                 => array(
				'name'     => 'Piedra',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Pinyon Script'          => array(
				'name'     => 'Pinyon Script',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Pirata One'             => array(
				'name'     => 'Pirata One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Plaster'                => array(
				'name'     => 'Plaster',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Play'                   => array(
				'name'     => 'Play',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Playball'               => array(
				'name'     => 'Playball',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Playfair Display'       => array(
				'name'     => 'Playfair Display',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Playfair Display SC'    => array(
				'name'     => 'Playfair Display SC',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Podkova'                => array(
				'name'     => 'Podkova',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Poiret One'             => array(
				'name'     => 'Poiret One',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Poller One'             => array(
				'name'     => 'Poller One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Poly'                   => array(
				'name'     => 'Poly',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Pompiere'               => array(
				'name'     => 'Pompiere',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Pontano Sans'           => array(
				'name'     => 'Pontano Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Port Lligat Sans'       => array(
				'name'     => 'Port Lligat Sans',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),

			'Port Lligat Slab' => array(
				'name'     => 'Port Lligat Slab',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),

			'Poppins' => array(
				'name'     => 'Poppins',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'devanagari'
				),
				'variants' => array(
					'100',
					'100italic',
					'200',
					'200italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'800',
					'800italic',
					'900',
					'900italic'
				),
			),

			'Prata'             => array(
				'name'     => 'Prata',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Preahvihear'       => array(
				'name'     => 'Preahvihear',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Press Start 2P'    => array(
				'name'     => 'Press Start 2P',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
				),
			),
			'Princess Sofia'    => array(
				'name'     => 'Princess Sofia',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Prociono'          => array(
				'name'     => 'Prociono',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Prosto One'        => array(
				'name'     => 'Prosto One',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Puritan'           => array(
				'name'     => 'Puritan',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Purple Purse'      => array(
				'name'     => 'Purple Purse',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Quando'            => array(
				'name'     => 'Quando',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Quantico'          => array(
				'name'     => 'Quantico',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Quattrocento'      => array(
				'name'     => 'Quattrocento',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Quattrocento Sans' => array(
				'name'     => 'Quattrocento Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Questrial'         => array(
				'name'     => 'Questrial',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Quicksand'         => array(
				'name'     => 'Quicksand',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'300',
					'400',
					'700',
				),
			),
			'Quintessential'    => array(
				'name'     => 'Quintessential',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Qwigley'           => array(
				'name'     => 'Qwigley',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Racing Sans One'   => array(
				'name'     => 'Racing Sans One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Radley'            => array(
				'name'     => 'Radley',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Raleway'           => array(
				'name'     => 'Raleway',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
			),
			'Raleway Dots'      => array(
				'name'     => 'Raleway Dots',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Rambla'            => array(
				'name'     => 'Rambla',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Rammetto One'      => array(
				'name'     => 'Rammetto One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ranchers'          => array(
				'name'     => 'Ranchers',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Rancho'            => array(
				'name'     => 'Rancho',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Rationale'         => array(
				'name'     => 'Rationale',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Redressed'         => array(
				'name'     => 'Redressed',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Reenie Beanie'     => array(
				'name'     => 'Reenie Beanie',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Revalia'           => array(
				'name'     => 'Revalia',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ribeye'            => array(
				'name'     => 'Ribeye',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ribeye Marrow'     => array(
				'name'     => 'Ribeye Marrow',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Righteous'         => array(
				'name'     => 'Righteous',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Risque'            => array(
				'name'     => 'Risque',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Roboto'            => array(
				'name'     => 'Roboto',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'100',
					'100italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Roboto Condensed'  => array(
				'name'     => 'Roboto Condensed',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Roboto Slab'       => array(
				'name'     => 'Roboto Slab',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'100',
					'300',
					'400',
					'700',
				),
			),
			'Rochester'         => array(
				'name'     => 'Rochester',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Rock Salt'         => array(
				'name'     => 'Rock Salt',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Rokkitt'           => array(
				'name'     => 'Rokkitt',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Romanesco'         => array(
				'name'     => 'Romanesco',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ropa Sans'         => array(
				'name'     => 'Ropa Sans',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Rosario'           => array(
				'name'     => 'Rosario',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Rosarivo'          => array(
				'name'     => 'Rosarivo',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Rouge Script'      => array(
				'name'     => 'Rouge Script',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Ruda'              => array(
				'name'     => 'Ruda',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
					'900',
				),
			),
			'Rubik'             => array(
				'name'     => 'Rubik',
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
					'cyrillic',
				),
			),
			'Rubik One'         => array(
				'name'     => 'Rubik One',
				'variants' => array(
					'400',
				),
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
			),
			'Rubik Mono One'    => array(
				'name'     => 'Rubik Mono One',
				'variants' => array(
					'400',
				),
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
			),
			'Rufina'            => array(
				'name'     => 'Rufina',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Ruge Boogie'       => array(
				'name'     => 'Ruge Boogie',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ruluko'            => array(
				'name'     => 'Ruluko',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Rum Raisin'        => array(
				'name'     => 'Rum Raisin',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ruslan Display'    => array(
				'name'     => 'Ruslan Display',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Russo One'         => array(
				'name'     => 'Russo One',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Ruthie'            => array(
				'name'     => 'Ruthie',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Rye'               => array(
				'name'     => 'Rye',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sawarabi Gothic'        => array(
				'name'     => 'Sawarabi Gothic',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'japanese',
					'vietnamese'
				),
				'variants' => array(
					'400',
				),
			),
			'Sawarabi Mincho'        => array(
				'name'     => 'Sawarabi Mincho',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'japanese',
				),
				'variants' => array(
					'400',
				),
			),
			'Sacramento'        => array(
				'name'     => 'Sacramento',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sail'              => array(
				'name'     => 'Sail',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Salsa'             => array(
				'name'     => 'Salsa',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Sanchez'           => array(
				'name'     => 'Sanchez',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Sancreek'          => array(
				'name'     => 'Sancreek',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sansita One'       => array(
				'name'     => 'Sansita One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Sarina'            => array(
				'name'     => 'Sarina',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Satisfy'           => array(
				'name'     => 'Satisfy',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Scada'             => array(
				'name'     => 'Scada',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Schoolbell'        => array(
				'name'     => 'Schoolbell',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),

			'Secular One' => array(
				'name'     => 'Secular One',
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),

			'Seaweed Script'          => array(
				'name'     => 'Seaweed Script',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sevillana'               => array(
				'name'     => 'Sevillana',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Seymour One'             => array(
				'name'     => 'Seymour One',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Shadows Into Light'      => array(
				'name'     => 'Shadows Into Light',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Shadows Into Light Two'  => array(
				'name'     => 'Shadows Into Light Two',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Shanti'                  => array(
				'name'     => 'Shanti',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Share'                   => array(
				'name'     => 'Share',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Share Tech'              => array(
				'name'     => 'Share Tech',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Share Tech Mono'         => array(
				'name'     => 'Share Tech Mono',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Shojumaru'               => array(
				'name'     => 'Shojumaru',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Short Stack'             => array(
				'name'     => 'Short Stack',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Siemreap'                => array(
				'name'     => 'Siemreap',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Sigmar One'              => array(
				'name'     => 'Sigmar One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Signika'                 => array(
				'name'     => 'Signika',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
			),
			'Signika Negative'        => array(
				'name'     => 'Signika Negative',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
			),
			'Simonetta'               => array(
				'name'     => 'Simonetta',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
					'900',
					'900italic',
				),
			),
			'Sintony'                 => array(
				'name'     => 'Sintony',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Sirin Stencil'           => array(
				'name'     => 'Sirin Stencil',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Six Caps'                => array(
				'name'     => 'Six Caps',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Skranji'                 => array(
				'name'     => 'Skranji',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Slackey'                 => array(
				'name'     => 'Slackey',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Smokum'                  => array(
				'name'     => 'Smokum',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Smythe'                  => array(
				'name'     => 'Smythe',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Sniglet'                 => array(
				'name'     => 'Sniglet',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'800',
				),
			),
			'Snippet'                 => array(
				'name'     => 'Snippet',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Snowburst One'           => array(
				'name'     => 'Snowburst One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sofadi One'              => array(
				'name'     => 'Sofadi One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Sofia'                   => array(
				'name'     => 'Sofia',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Sonsie One'              => array(
				'name'     => 'Sonsie One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sorts Mill Goudy'        => array(
				'name'     => 'Sorts Mill Goudy',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
					'400italic',
				),
			),
			'Source Code Pro'         => array(
				'name'     => 'Source Code Pro',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'900',
				),
			),
			'Source Sans Pro'         => array(
				'name'     => 'Source Sans Pro',
				'subsets'  => array(
					'latin',
					'latin-ext',
					'vietnamese',
				),
				'variants' => array(
					'200',
					'200italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'900',
					'900italic',
				),
			),
			'Special Elite'           => array(
				'name'     => 'Special Elite',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Spicy Rice'              => array(
				'name'     => 'Spicy Rice',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Spinnaker'               => array(
				'name'     => 'Spinnaker',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Spirax'                  => array(
				'name'     => 'Spirax',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Squada One'              => array(
				'name'     => 'Squada One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Stalemate'               => array(
				'name'     => 'Stalemate',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Stalinist One'           => array(
				'name'     => 'Stalinist One',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Stardos Stencil'         => array(
				'name'     => 'Stardos Stencil',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Stint Ultra Condensed'   => array(
				'name'     => 'Stint Ultra Condensed',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Stint Ultra Expanded'    => array(
				'name'     => 'Stint Ultra Expanded',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Stoke'                   => array(
				'name'     => 'Stoke',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'300',
					'400',
				),
			),
			'Strait'                  => array(
				'name'     => 'Strait',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Suez One'                => array(
				'name'     => 'Suez One',
				'subsets'  => array(
					'hebrew',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Sue Ellen Francisco'     => array(
				'name'     => 'Sue Ellen Francisco',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Sunshiney'               => array(
				'name'     => 'Sunshiney',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Supermercado One'        => array(
				'name'     => 'Supermercado One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Suwannaphum'             => array(
				'name'     => 'Suwannaphum',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Swanky and Moo Moo'      => array(
				'name'     => 'Swanky and Moo Moo',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Syncopate'               => array(
				'name'     => 'Syncopate',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Tangerine'               => array(
				'name'     => 'Tangerine',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Taprom'                  => array(
				'name'     => 'Taprom',
				'subsets'  => array(
					'khmer',
				),
				'variants' => array(
					'400',
				),
			),
			'Tauri'                   => array(
				'name'     => 'Tauri',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Telex'                   => array(
				'name'     => 'Telex',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Tenor Sans'              => array(
				'name'     => 'Tenor Sans',
				'subsets'  => array(
					'cyrillic',
					'cyrillic-ext',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Text Me One'             => array(
				'name'     => 'Text Me One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'The Girl Next Door'      => array(
				'name'     => 'The Girl Next Door',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Tienne'                  => array(
				'name'     => 'Tienne',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
					'900',
				),
			),
			'Tinos'                   => array(
				'name'     => 'Tinos',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'vietnamese',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Titan One'               => array(
				'name'     => 'Titan One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Titillium Web'           => array(
				'name'     => 'Titillium Web',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'200',
					'200italic',
					'300',
					'300italic',
					'400',
					'400italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'900',
				),
			),
			'Trade Winds'             => array(
				'name'     => 'Trade Winds',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Trocchi'                 => array(
				'name'     => 'Trocchi',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Trochut'                 => array(
				'name'     => 'Trochut',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
				),
			),
			'Trykker'                 => array(
				'name'     => 'Trykker',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Tulpen One'              => array(
				'name'     => 'Tulpen One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Ubuntu'                  => array(
				'name'     => 'Ubuntu',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'300',
					'300italic',
					'400',
					'400italic',
					'500',
					'500italic',
					'700',
					'700italic',
				),
			),
			'Ubuntu Condensed'        => array(
				'name'     => 'Ubuntu Condensed',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
				),
			),
			'Ubuntu Mono'             => array(
				'name'     => 'Ubuntu Mono',
				'subsets'  => array(
					'cyrillic',
					'greek-ext',
					'cyrillic-ext',
					'latin',
					'latin-ext',
					'greek',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Ultra'                   => array(
				'name'     => 'Ultra',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Uncial Antiqua'          => array(
				'name'     => 'Uncial Antiqua',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Underdog'                => array(
				'name'     => 'Underdog',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Unica One'               => array(
				'name'     => 'Unica One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'UnifrakturCook'          => array(
				'name'     => 'UnifrakturCook',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'700',
				),
			),
			'UnifrakturMaguntia'      => array(
				'name'     => 'UnifrakturMaguntia',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Unkempt'                 => array(
				'name'     => 'Unkempt',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'700',
				),
			),
			'Unlock'                  => array(
				'name'     => 'Unlock',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Unna'                    => array(
				'name'     => 'Unna',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'VT323'                   => array(
				'name'     => 'VT323',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Vampiro One'             => array(
				'name'     => 'Vampiro One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Varela'                  => array(
				'name'     => 'Varela',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Varela Round'            => array(
				'name'     => 'Varela Round',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Vast Shadow'             => array(
				'name'     => 'Vast Shadow',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Vibur'                   => array(
				'name'     => 'Vibur',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Vidaloka'                => array(
				'name'     => 'Vidaloka',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Viga'                    => array(
				'name'     => 'Viga',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Voces'                   => array(
				'name'     => 'Voces',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Volkhov'                 => array(
				'name'     => 'Volkhov',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Vollkorn'                => array(
				'name'     => 'Vollkorn',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
					'400italic',
					'700',
					'700italic',
				),
			),
			'Voltaire'                => array(
				'name'     => 'Voltaire',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Waiting for the Sunrise' => array(
				'name'     => 'Waiting for the Sunrise',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Wallpoet'                => array(
				'name'     => 'Wallpoet',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Walter Turncoat'         => array(
				'name'     => 'Walter Turncoat',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Warnes'                  => array(
				'name'     => 'Warnes',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Wellfleet'               => array(
				'name'     => 'Wellfleet',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Wendy One'               => array(
				'name'     => 'Wendy One',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Wire One'                => array(
				'name'     => 'Wire One',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Yanone Kaffeesatz'       => array(
				'name'     => 'Yanone Kaffeesatz',
				'subsets'  => array(
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'200',
					'300',
					'400',
					'700',
				),
			),
			'Yellowtail'              => array(
				'name'     => 'Yellowtail',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Yeseva One'              => array(
				'name'     => 'Yeseva One',
				'subsets'  => array(
					'cyrillic',
					'latin',
					'latin-ext',
				),
				'variants' => array(
					'400',
				),
			),
			'Yesteryear'              => array(
				'name'     => 'Yesteryear',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
			'Zeyada'                  => array(
				'name'     => 'Zeyada',
				'subsets'  => array(
					'latin',
				),
				'variants' => array(
					'400',
				),
			),
		);

		 return apply_filters('dima_google_fonts_array',$fonts);
	}
}

/**
 * List of standard fonts
 *
 * @since 1.0.0
 */
function dima_standard_fonts() {
	return apply_filters( 'dima_standard_fonts_array', array(
		'Arial, Helvetica, sans-serif',
		'Arial Black, Gadget, sans-serif',
		'Bookman Old Style, serif',
		'Comic Sans MS, cursive',
		'Courier, monospace',
		'Georgia, serif',
		'Garamond, serif',
		'Impact, Charcoal, sans-serif',
		'Lucida Console, Monaco, monospace',
		'Lucida Sans Unicode, Lucida Grande, sans-serif',
		'MS Sans Serif, Geneva, sans-serif',
		'MS Serif, New York, sans-serif',
		'Palatino Linotype, Book Antiqua, Palatino, serif',
		'Tahoma, Geneva, sans-serif',
		'Times New Roman, Times, serif',
		'Trebuchet MS, Helvetica, sans-serif',
		'Verdana, Geneva, sans-serif',
		'Paratina Linotype',
		'Trebuchet MS',
	) );
}

if ( ! class_exists( 'dima_get_googlefonts_name' ) ) {
	function dima_get_googlefonts_name() {
		$Fonts = dima_get_googlefonts();
		foreach ( $Fonts as $Font ) {
			static $i = 0;
			$fontsList[ $Font['name'] ] = $Font['name'];
			$i ++;
		}

		return $fontsList;
	}
}

/**
 * [Font weight List]
 */
function dima_get_font_weights() {
	$dima_list_weights = array(
		'100'       => 'Thin (100)',
		'100italic' => 'Thin Italic (100)',
		'200'       => 'Extra Light (200)',
		'200italic' => 'Extra Light Italic (200)',
		'300'       => 'Light (300)',
		'300italic' => 'Light Italic (300)',
		'400'       => 'Normal (400)',
		'400italic' => 'Normal Italic (400)',
		'500'       => 'Medium (500)',
		'500italic' => 'Medium Italic (500)',
		'600'       => 'Demi bold (600)',
		'600italic' => 'Demi bold Italic (600)',
		'700'       => 'Bold (700)',
		'700italic' => 'Bold Italic (700)',
		'800'       => 'Heavy Bold (800)',
		'800italic' => 'Heavy Bold Italic (800)',
		'900'       => 'Blac (900)k',
		'900italic' => 'Black Italic (900)',
	);

	return $dima_list_weights;
}

/**
 * [Font weight List Selcted]
 */
function dima_get_font_weight_selected() {
	$dima_list_weights = array(
		'inherit' => esc_html__( 'Inherit', 'risala' ),
		'100'     => 'Thin (100)',
		'200'     => 'Extra Light (200)',
		'300'     => 'Light (300)',
		'400'     => 'Normal (400)',
		'500'     => 'Medium (500)',
		'600'     => 'Demi bold (600)',
		'700'     => 'Bold (700)',
		'800'     => 'Heavy Bold (800)',
		'900'     => 'Blac (900)k',
	);

	return $dima_list_weights;
}

/**
 * [Character Sets]
 */
function dima_get_font_subsets() {
	$dima_list_font_subsets = array(
		'arabic'       => esc_html__( 'Arabic', 'risala' ),
		'hebrew'       => esc_html__( 'Hebrew', 'risala' ),
		'latin'        => esc_html__( 'Latin', 'risala' ),
		'latin-ext'    => esc_html__( 'Latin Extended ', 'risala' ),
		'greek'        => esc_html__( 'Greek', 'risala' ),
		'greek-ext'    => esc_html__( 'Greek Extended ', 'risala' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'risala' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended ', 'risala' ),
		'japanese'     => esc_html__( 'Japanese ', 'risala' ),
		'vietnamese'   => esc_html__( 'vietnamese', 'risala' ),
	);

	return $dima_list_font_subsets;
}

/**
 * [Is Font Italic ]
 *
 * @param $font_weight_and_style
 *
 * @return bool
 */
function dima_is_font_italic( $font_weight_and_style ) {
	if ( strpos( $font_weight_and_style, 'italic' ) ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Get Font Weight
 *
 * @param $font_weight_and_style
 *
 * @return mixed
 */
function dima_get_font_weight( $font_weight_and_style ) {

	$font_weight = ( dima_is_font_italic( $font_weight_and_style ) ) ? str_replace( 'italic', '', $font_weight_and_style ) : $font_weight_and_style;

	return $font_weight;
}


/**
 * Get Font Family Query
 *
 * @param $font_family
 *
 * @return mixed
 */
function dima_get_font_family_query( $font_family ) {
	$font_family_query = str_replace( ' ', '+', $font_family );

	return $font_family_query;
}

/**
 * @param string $family
 * @param string $weight
 *
 * @return string
 */
function dima_get_font_family_and_weight( $family = '', $weight = '' ) {
	$output = '';
	if ( ! empty( $family ) ) {
		$output = "font-family: \"{$family}\",\"Helvetica Neue\",Helvetica,sans-serif;";
	}
	if ( ! empty( $weight ) ) {
		$output .= "font-weight: {$weight};";
	}

	return $output;
}
