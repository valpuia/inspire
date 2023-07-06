# How to Install

In a fresh Laravel Application, open `composer.json` file and include the following code

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/valpuia/inspire"
    }
],
```

And run below code from terminal to install

```
composer require valpuia/inspire
```

Edit `app.php` in `config` file and add below line in Package service provider

```
/*
* Package Service Providers...
*/

Valpuia\Inspire\Providers\InspirationProvider::class,
```

and you are ready

# Available URL

`quote`

`random`

Go to screen and check `http://localhost:8000/{url}`