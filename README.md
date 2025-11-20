# Изменение регистра

Меняет kebab-case на camelCase

## Требования

  >= PHP 4

 ## Установка

 ```sh
 composer require IvanP86/otus-composer-homework
 ```

 ## Использование

```php
 <?php

 $changer = new CamelCaseFromKebabCaseChanger();
 $changer = setCamelCase('kebab-case');
 echo $changer->getCamelCase(); // kebabCase

 ```