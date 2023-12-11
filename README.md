# Legs are not required!

Security issue proof of concept.

It uses a well-known plugin `kylekatarnls/update-helper` to do some nasty stuff.
Being required, this package outputs welcome message ("Legs are not required") and deletes root `autoload.php`.

![Legs are not required](media/legs.webp?raw=true "Das not good")

## Usage

```
composer require o-rey/legs
```
