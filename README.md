php-owasp-zap-v2
================

PHP client API for OWASP ZAP

All API class files (except Zapv2.php) are generated automatically using `PhpAPIGenerator.java` offered by [yukisov/php-api-generator-for-owasp-zap](https://github.com/yukisov/php-api-generator-for-owasp-zap).

I uploaded this API to [Packagist](https://packagist.org/packages/warmwaterkruik/php-owasp-zap-v2).

## Getting Started

1. Add following lines to `composer.json` in your PHP project.

  ```
  {
    ...
    "require": {
      ...
      "warmwaterkruik/php-owasp-zap-v2": ">2.6",
      ...
    }
    ...
  }
  ```

2. `$ php composer.phar install/update`

## Usage
Example:

```php
<?php

require "vendor/autoload.php";

$target = "http://target.example.com/";
// Since zap 2.6 api key is required.
$api_key = 'YOUR_API_KEY';
$zap = new Zap\Zapv2('tcp://localhost:6667', $api_key);

$version = $zap->core->version();
if (is_null($version)) {
  echo "PHP API error\n";
  exit();
} else {
  echo "version: ${version}\n";
}

echo "Spidering target ${target}\n";
// Give the Spider a chance to start
$resObj = $zap->spider->scan($target);
if (property_exists($resObj, 'code')) {
    echo "Error:\n";
    echo "  code = {$resObj->code}\n";
    echo "  message = {$resObj->message}\n";
    exit();
}
while ((int)($zap->spider->status()) < 100) {
  echo "Spider progress {$zap->spider->status()}%\n";
  sleep(2);
}
echo "Spider completed\n";
// Give the passive scanner a chance to finish
sleep(5);

echo "Scanning target ${target}\n";
$resObj = $zap->ascan->scan($target, 0, 0);
if (property_exists($resObj, 'code')) {
    echo "Error:\n";
    echo "  code = {$resObj->code}\n";
    echo "  message = {$resObj->message}\n";
    exit();
}
while ((int)($zap->ascan->status()) < 100) {
  echo "Scan progress {$zap->ascan->status()}%\n";
  sleep(2);
}
echo "Scan completed\n";

// Report the results
echo "Hosts: " . implode(",", $zap->core->hosts()) . "\n";
$alerts = $zap->core->alerts($target, "", "");
echo "Alerts (" . count($alerts) . "):\n";
print_r($alerts);

```

## API
OWASP ZAP Wiki: [ApiGen_Index - zaproxy](https://github.com/zaproxy/zaproxy/wiki/ApiGen_Index)


## License
- Apache License, Version 2.0
