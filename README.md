Personal [Laravel Pint](https://laravel.com/docs/pint) preset.

```bash
composer require --dev mnapoli/pint-preset
```

Ceate `pint.json`:

```json
{
    "extend": "vendor/mnapoli/pint-preset/pint.json"
}
```

Any `preset`, `rules` or other options you add to your project's `pint.json` will override the ones from this preset.

> Note: the `extend` option requires Pint v1.23.0 or greater.
