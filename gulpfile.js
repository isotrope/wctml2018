var gulp = require( 'gulp' ),
	gulpUtil = require( 'gulp-util' ),
	expect = require( 'gulp-expect-file' ),
	notify = require( 'gulp-notify' ),
	pump = require( 'pump' ),
	rename = require( 'gulp-rename' ),
	sourcemaps = require( 'gulp-sourcemaps' ),

	uglify = require( 'gulp-uglify' ),
	concat = require( 'gulp-concat' ),


	sass = require( 'gulp-sass' ),

	postCss = require( 'gulp-postcss' ),
	postCssAutoprefixer = require( 'autoprefixer' ),
	postCssFlexibility = require( 'postcss-flexibility' ),
	// postCssMqPacker = require( 'css-mqpacker' ),
	postCssNano = require( 'cssnano' ),
	postCssObjectFillImages = require( 'postcss-object-fit-images' ); // To be used with https://github.com/bfred-it/object-fit-images


var jsRoot = 'js/',
	jsSrcFolder = jsRoot + 'src/',
	jsFiles = [
		// jsSrcFolder + '_utils.js',


		jsSrcFolder + 'wcmtl2018.main.js',
	],

	jsVendorsRoot = 'vendors/',
	jsVendorFiles = [
		// jsVendorsRoot + 'object-fit-images/dist/ofi.js',
	];

var cssFolder = 'css/',
	cssSrcFolder = cssFolder + 'src/',

	cssMain = cssSrcFolder + 'main.scss';


gulp.task( 'css', function () {
	var postCssProcessors = [
		postCssObjectFillImages,
		// postCssMqPacker( { sort : true } ),
		postCssAutoprefixer( { browsers : [ 'last 2 versions', 'IE > 10' ] } ),
		postCssNano( { reduceIdents : false, zindex : false } )
	];


	gulp.src( cssMain )
		.pipe( expect( cssMain ) )
		.pipe( sourcemaps.init() )
		.pipe( sass( {
				errLogToConsole : true,
				outputStyle     : 'compressed', //  'compressed','compact','nested','expanded'
				precision       : 10
			} )
				.on( 'error', notify.onError( function ( error ) {
					return error.message;
				} ) )
		)
		.pipe( postCss( postCssProcessors )
			.on( 'error', notify.onError( function ( error ) {
				return error.message;
			} ) )
		)
		.pipe( rename( 'main.css' ) )
		.pipe( sourcemaps.write( './css/maps' ) )
		.pipe( gulp.dest( './css/' ) )
		.pipe( notify( { message : '[Front-end] CSS task complete', onLast : true } ) );
} );


gulp.task( 'js', function ( cb ) {
	pump( [

			gulp.src( jsFiles ),
			expect( jsFiles ),
			sourcemaps.init(),
			concat( { path : 'jquery.main.js' } ),
			gulp.dest( jsRoot ),
			uglify( { output : { 'comments' : /^!|@preserve|@license|@cc_on/i } } ),
			rename( { extname : '.min.js' } ),
			sourcemaps.write( './maps' ),
			gulp.dest( jsRoot ),
			notify( { message : '[Front-end JS] Task complete', onLast : true } )
		],
		cb
	);
} );

gulp.task( 'js-vendors', function ( cb ) {
	pump( [
			gulp.src( jsVendorFiles ),
			expect( jsVendorFiles ),
			sourcemaps.init(),
			concat( { path : 'jquery.vendors.js' } ),
			gulp.dest( jsRoot ),
			uglify( { output : { 'comments' : /^!|@preserve|@license|@cc_on/i } } ),
			rename( { extname : '.min.js' } ),
			sourcemaps.write( './maps' ),
			gulp.dest( jsRoot ),
			notify( { message : '[Front-end JS Vendors] Task complete', onLast : true } )
		],
		cb
	);

} );


// Watch
gulp.task( 'watch', function () {

	// Watch .scss files
	gulp.watch( [ 'css/src/*.scss' ], [ 'css' ] );

	//Watch .js files
	gulp.watch( [ './js/src/*.js', '!./js/*.min.js' ], [ 'js' ] );

} );


gulp.task( 'default', [ 'css', 'js', /* 'js-vendors', */ 'watch' ] );