# simple php router

## usage

```php
<?php
route("/", function() { echo "index"; });
route("/thing", function() { echo "another page"; });
route("/thing/:abc/:id", function($abc, $id) { echo "do something!"; });
?>
```

## license
MIT