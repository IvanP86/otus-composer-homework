# Изменение регистра

Меняет kebab-case на camelCase

## Требования

    min PHP 7.2.5

 ## Установка

 ```sh
 composer require ivan-p86/otus-composer-homework
 ```

 ## Использование

```php
 <?php

 $changer = new CamelCaseFromKebabCaseChanger();
 $changer->setCamelCase('kebab-case');
 echo $changer->getCamelCase(); // kebabCase

 ```