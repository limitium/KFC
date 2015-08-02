gulp = require 'gulp'
coffee = require 'gulp-coffee'
concat = require 'gulp-concat'
sourcemaps = require 'gulp-sourcemaps'
ngClassify = require 'gulp-ng-classify'
watch = require 'gulp-watch'
browserSync = require('browser-sync')
reload = browserSync.reload
exec = require('child_process').exec;


buildFolder = './../backend/web'

gulp.task 'server', ->
  exec 'php ./../backend/app/console server:stop -v', (err, stdout, stderr) ->
    exec 'php ./../backend/app/console server:start -v', (err, stdout, stderr) ->
      console.log(stdout)
      console.log(stderr)
      console.log(err)

gulp.task 'scripts', ->
  gulp.src('./src/**/*.coffee')
  .pipe sourcemaps.init()
  .pipe ngClassify(
    appName: 'kfc'
    controller:
      format: 'upperCamelCase'
      suffix: 'Controller'
    service:
      format: 'upperCamelCase'
      suffix: 'Service'
  )
  .pipe coffee()
  .pipe concat('app.min.js')
  .pipe sourcemaps.write()
  .pipe gulp.dest(buildFolder+'/js')
  .pipe(reload({stream: true}))


gulp.task 'vendor', ->
  gulp.src([
    'node_modules/jquery/dist/jquery.js'
    'node_modules/bootstrap/dist/js/bootstrap.min.js'
    'node_modules/angular/angular.js'
    'node_modules/angular-ui-bootstrap/ui-bootstrap-tpls.min.js'
    'node_modules/angular-resource/angular-resource.min.js'
    'node_modules/angular-new-router/dist/router.es5.js'
    'node_modules/angular-moment/node_modules/moment/moment.js'
    'node_modules/angular-moment/angular-moment.js'
    'node_modules/angular-sanitize/angular-sanitize.min.js'
    'node_modules/datatables/media/js/jquery.dataTables.min.js'
    'node_modules/angular-datatables/dist/angular-datatables.min.js'
    'node_modules/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js'
    'node_modules/ui-select/dist/select.js'
  ])
  .pipe concat('vendor.min.js')
  .pipe gulp.dest(buildFolder+'/js')

  gulp.src([
    'node_modules/bootstrap/dist/css/bootstrap.css'
    'node_modules/ui-select/dist/select.min.css'
    'node_modules/font-awesome/css/font-awesome.min.css'
    'node_modules/datatables/media/css/jquery.dataTables.min.css'
    'node_modules/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.css'
  ])
  .pipe concat('vendor.min.css')
  .pipe(gulp.dest(buildFolder+'/css'))

  gulp.src([
    'node_modules/bootstrap/dist/fonts/**/*'
    'node_modules/font-awesome/fonts/**/*'
  ])
  .pipe(gulp.dest(buildFolder+'/fonts'))

gulp.task 'styles', ->
  gulp.src([
    './src/**/*.css'
  ])
#  .pipe(less())
  .pipe concat('app.css')
  .pipe(gulp.dest(buildFolder+'/css'))
  .pipe(reload({stream: true}))

gulp.task 'html', ->
  gulp.src(['./src/app.html'])
  .pipe concat('index.html.twig')
  .pipe(gulp.dest(buildFolder+'/../src/AppBundle/Resources/views/Layout'))

  gulp.src(['./src/**/*html','!./src/app.html'])
  .pipe(gulp.dest(buildFolder+''))
  .pipe(reload({stream: true}))

gulp.task 'browser-sync', ->
  browserSync(
    proxy: 'localhost:8000'
    port: 3000
    open: true
    notify: false
  )

gulp.task 'watch', ->
  gulp.watch(['./src/**/*.coffee'], ['scripts'])
  #  gulp.watch(['./frontend/src/less/**/*.less'], ['styles'])
  gulp.watch(['./src/**/*.html'], ['html'])
  gulp.watch(['./src/**/*.css'], ['styles'])

gulp.task('default', ['vendor', 'scripts', 'styles', 'html', 'browser-sync', 'watch'])