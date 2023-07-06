# How to Install

Open `composer.json` file and include the following code

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/valpuia/inspire"
    }
],
```

Run below code from terminal

```
composer require valpuia/inspire
```

Edit `config.php` and add below line in Package service provider

```
Valpuia\Inspire\Providers\InspirationProvider::class,
```

Open URL and check {host}/quote