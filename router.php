<?php
function route($path, $method, $callback = null) {
    if ( is_callable($method) && is_null($callback) ) {
        $callback = $method;
        $method = "GET";
    }

    $req = preg_replace("|" . basename(__DIR__) . "/?|", "", $_SERVER['REQUEST_URI']);
    $path = preg_replace("|:(\w+)|", "([\\w%]+)", $path);
    $querystring_reg = "(?:(\?\w+\=[\w&=-]*))?";

    $regex = "|^" . $path . $querystring_reg . "$|";

    if ( preg_match($regex, $req, $matches) && $_SERVER['REQUEST_METHOD'] == $method ) {
        array_shift($matches);
        return $callback && call_user_func_array($callback, $matches); 
    } else {
        return false; 
    }
}

function delete($path, $callback = null) {
    return route($path, "DELETE", $callback);
}

function get($path, $callback = null) {
    return route($path, "GET", $callback);
}

function post($path, $callback = null) {
    return route($path, "POST", $callback);
}

function put($path, $callback = null) {
    return route($path, "PUT", $callback);
}

?>