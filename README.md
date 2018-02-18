# Tatikoma\Gedcom
Library for GEDCOM parsing. 

Installation
```
composer require tatikoma/php-gedcomlib:dev-master
```

Example usage:
```php
$parser = new \Tatikoma\Gedcom\Parser();
$tree = $parser->load('/path/to/file.ged');
$tree->dump();
```