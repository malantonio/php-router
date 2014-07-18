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

## license
MIT