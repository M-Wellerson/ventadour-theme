var gulp  = require('gulp'),
	util  = require('gulp-util'),
	compass  = require('gulp-compass'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	watch = require('gulp-watch'),
	cleanCSS = require('gulp-clean-css'),
	plumber = require('gulp-plumber'),
	rename = require('gulp-rename'),
	livereload = require('gulp-livereload'),
	sourcemaps = require('gulp-sourcemaps');

var outputDir = 'dist/';

gulp.task('compass', function() {
	gulp.src(['sass/*.scss', 'sass/vendors/*.scss', 'sass/base/*.scss', 'sass/modules/*.scss', 'sass/framework/*.scss'])
		.pipe(plumber())
		.pipe(compass({
			sourcemap: true,
			css: outputDir + '/css',
			sass: 'sass'
		}))
		.pipe(gulp.dest(outputDir + '/css'))
		.pipe(livereload());
});
gulp.task('minify-css', function() {
	gulp.src(['dist/css/screen.css'])
		.pipe(rename({ suffix: '.min' }))
		.pipe(sourcemaps.init())
		.pipe(cleanCSS())
		.pipe(sourcemaps.write('/'))
		.pipe(gulp.dest(outputDir + '/css'));
		// .pipe(livereload());
});

gulp.task('concat', function() {
	gulp.src([
		'bower_components/jquery/dist/jquery.min.js',
		'bower_components/skrollr/dist/skrollr.min.js',
		'bower_components/swiper/dist/js/swiper.js',
		'bower_components/masonry/dist/masonry.pkgd.min.js',
		'bower_components/jquery-mousewheel/jquery.mousewheel.min.js',
		'bower_components/raphael/raphael.min.js',
		'bower_components/jquery-mapael/js/jquery.mapael.js',
		'bower_components/skrollr/dist/skrollr.min.js',
		'assets/maps/france_regions.js',
		'js/vendors/*.js',
		'js/*.js'])
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(concat('all.js'))
		.pipe(sourcemaps.write('/'))
		.pipe(gulp.dest(outputDir + '/js'))
		// .pipe(plugins.livereload(server));
		.pipe(livereload());
});

gulp.task('uglify', function() {
	gulp.src([outputDir + 'js/all.js'])
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(uglify('all.min.js'))
		.pipe(sourcemaps.write('/'))
		.pipe(gulp.dest(outputDir + '/js'));
		// .pipe(livereload());
});

gulp.task('watch', function() {
		livereload.listen();
		gulp.watch(['bower_components/jquery-mapael/js/maps/*.js', 'js/**/*.js'], ['concat', 'uglify']);
		gulp.watch(['sass/*.scss', 'sass/vendors/*.scss', 'sass/base/*.scss', 'sass/modules/*.scss', 'sass/framework/*.scss'], ['compass', 'minify-css']);
		gulp.watch(['**/*.php']).on( 'change', function( file ) {
		// reload browser whenever any PHP file changes
		livereload.changed( file );
	});
});

gulp.task('default', ['compass', 'minify-css', 'concat', 'uglify', 'watch']);

