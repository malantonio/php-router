<?php
require_once "router.php";

route("/admin", function() { echo "IS U ADD MIN?"; });
route("/:thing/:id", "POST", function($thing, $id) { echo "POST'D THING ({$thing}) AND ID ({$id})\n"; });

get("/", function() { echo "OH HAI FRONT PAGE"; });
put("/:aye/:bee", function($aye, $bee) { echo "aye: " . $aye . "\nbee: " . $bee . "\n"; });
?>