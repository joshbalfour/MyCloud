<?php
  if (isset($_GET['embedded'])) {
    // get the src page, change relative to absolute and don't remove 'chan' param in get requests
    $code = file_get_contents("http://docs.google.com/gview?" . $_SERVER['QUERY_STRING']);

    $search = array("/gview/images", "gview/resources_gview/client/js");
    $replace = array("http://docs.google.com/gview/images", "?jsfile=gview/resources_gview/client/js");
    $code = str_replace($search, $replace, $code);

    header('Content-type: text/html');
    echo $code;

  } else if (isset($_GET['a']) && $_GET['a'] == 'gt') {
    // get text coordinates file, can not redirect because of same origin policy
    $code = file_get_contents("http://docs.google.com/gview?" . $_SERVER['QUERY_STRING']);
    header('Content-type: text/xml; charset=UTF-8');
    echo $code;

  } else if (isset($_GET['a']) && $_GET['a'] == 'bi') {
    // redirect to images
    header("Location: http://docs.google.com/gview?" . $_SERVER['QUERY_STRING']);
    header('Content-type: image/png');

  } else if (isset($_GET['jsfile'])) {
    // proxy javascript files and replace navigator.cookieEnabled with false
    $code = file_get_contents("http://docs.google.com/" . $_GET['jsfile']);

    $search = array("navigator.cookieEnabled");
    $replace = array("false");
    $code = str_replace($search, $replace, $code);

    header('Content-type: text/javascript');
    echo $code;

  } else {
    // everything else, of which there isn't!
    header("Location: http://docs.google.com/gview?" . $_SERVER['QUERY_STRING']);
  }
?>   