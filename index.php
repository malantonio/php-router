<?php
function route($path, $callback = null) {
    $req = preg_replace("|" . basename(__DIR__) . "/?|", "", $_SERVER['REQUEST_URI']);
    $path = preg_replace("|:(\w+)|", "(\\w+)", $path);
    $querystring_reg = "(?:(\?\w+\=[\w&=-]*))?";

    $regex = "|^" . $path . $querystring_reg . "$|";

    if ( preg_match($regex, $req, $matches) ) {
        array_shift($matches);
        return $callback && call_user_func_array($callback, $matches); 
    } else {
        return false; 
    }
}
?>