# simple php router

## usage

```php
<?php
// void route(string $path[, string $method = "GET"], callable $callback);

route("/", function() { echo "index"; });
route("/thing", function() { echo "another page"; });
route("/thing/:abc/:id", "POST", function($abc, $id) { echo "do something!"; });
?>
```

also included (for no extra cost!) are shortcut functions for CRUD-y tasks

```php
<?php
get("/", function() { echo "hallo index!"; });
post("/update", function() { print_r($_POST); });
put("/:user/:thing", function($user, $thing) { echo "put {$thing} in for {$user}"; });
delete("/:user/:thing", function($id, $thing) { echo "deleted {$thing} from {$user}"; });
?>
```

## license
MIT