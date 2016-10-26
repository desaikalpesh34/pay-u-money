PayUmoney Yii2 Extension
========================
An extension to integrate pay-u-money with yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist desaikalpesh34/pay-u-money  "dev-master"
```

or add

```
"desaikalpesh34/pay-u-money":  "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \desaikalpesh34\pay-u-money\PayUMoney::widget(); ?>```