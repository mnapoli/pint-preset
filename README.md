# mnapoli/pint-preset

Reusable [Laravel Pint](https://laravel.com/docs/pint) preset.

## Usage

Install the package along with Pint:

```bash
composer require --dev laravel/pint mnapoli/pint-preset
```

Then create a `pint.json` in your project that extends the preset:

```json
{
    "extend": "vendor/mnapoli/pint-preset/pint.json"
}
```

Any `preset`, `rules` or other options you add to your project's `pint.json` will override the ones from this preset.

> Note: the `extend` option requires Pint v1.23.0 or greater.
