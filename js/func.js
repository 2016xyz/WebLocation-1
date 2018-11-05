//加载脚本
function loadScript(level, scriptName){
  if (scriptName == "jquery") {
    document.write('<script src="' + level +'vendor/jquery/3.3.1/dist/jquery.min.js"><\/script>');
  } else if (scriptName == "popper") {
    document.write('<script src="' + level +'vendor/popper/1.14.4/dist/umd/popper.min.js"><\/script>');
  } else if (scriptName == "bootstrap") {
    document.write('<script src="' + level +'vendor/bootstrap/4.1.3/js/bootstrap.min.js"><\/script>');
  }
}