const { watch, src, dest, parallel, series } = require("gulp");
const sass = require("gulp-sass");
const browserSync = require("browser-sync").create();
const reload = browserSync.reload;
const filePath = {
  sassPath: "assests/sass/**/*.scss"
};
const style = async () => {
  return src("assests/sass/main.scss")
    .pipe(
      sass({
        outputStyle: "compressed"
      }).on("error", sass.logError)
    )
    .pipe(dest("./public/css/"))
    .pipe(browserSync.stream());
};
const Browsersync = async () => {
  browserSync.init({
    server: "./public",
    notify: false,
    open: true //change this to true if you want the broser to open automatically
  });
};
const watcher = async () => {
  watch([
    "./public/**/*",
    "./public/*",
    "!public/js/**/.#*js",
    "!public/css/**/.#*css"
  ]).on("change", reload),
    watch(filePath.sassPath, parallel(style));
};

exports.watch = watcher;
exports.sass = style;
exports.sync = Browsersync;
exports.default = series(watcher, style, Browsersync);
