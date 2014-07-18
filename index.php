<?php
require_once "router.php";

route("/", function() { echo "OH HAI FRONT PAGE"; });
route("/admin", function() { echo "IS U ADD MIN?"; });
route("/:thing/:id", "POST", function($thing, $id) { echo "POST'D THING ({$thing}) AND ID ({$id})\n"; });
route("/:thing/:id", "PUT", function($thing, $id) { echo "PUT'D THING ({$thing}) AND ID ({$id})\n"; });
?>