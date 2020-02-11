# Vejr.eu API PHP wrapper
A simple PHP wrapper for vejr.eu's API [https://vejr.eu/api.php][https://vejr.eu/api.php]

_Example of usage_
```
<?php

require_once './vendor/autoload.php';

$vejr = new \Alzpk\VejrEuAPI\VejrEuAPI();

print_r($vejr->getLocationData('Los Angeles, USA'));
```


[https://vejr.eu/api.php]: https://vejr.eu/api.php
