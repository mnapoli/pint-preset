Personal [Laravel Pint](https://laravel.com/docs/pint) preset.

```bash
composer require --dev mnapoli/pint-preset
```

Create `pint.json`:

```json
{
    "extend": "vendor/mnapoli/pint-preset/pint.json"
}
```

Any `preset`, `rules`, `in` or other options you add to your project's `pint.json` will override the ones from this preset. By default the preset formats the `src/` directory.

> Note: the `extend` option requires Pint v1.23.0 or greater.

## Tests

Tests use slightly different rules ([`pint-tests.json`](pint-tests.json)). No config file needed in the project, point Pint directly at the vendor file:

```bash
vendor/bin/pint --config vendor/mnapoli/pint-preset/pint-tests.json
```

It formats the `tests/` directory (resolved relative to the current directory).

Note: a local config cannot extend `pint-tests.json`, because Pint only supports one level of `extend`. To customize test rules, extend `vendor/mnapoli/pint-preset/pint.json` instead and re-declare the test-specific overrides.
