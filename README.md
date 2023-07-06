# How to Install

In a fresh Laravel Application, open `composer.json` file and include the following code

```
// this is needed because this package don't use packagist

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

Edit `app.php` in `config` file and add below line in service provider

```
Valpuia\Inspire\Providers\InspirationProvider::class,
```

and you are ready to see some actions, head over to below url and be amaze!

# Available URL

`quotes`

`quotes/{id}` // 1,2,3 etc

`quotes/random`

Go to screen and check `http://localhost:8000/{url}`