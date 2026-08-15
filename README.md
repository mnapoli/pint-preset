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

Tests use slightly different rules. Create a `pint-tests.json`:

```json
{
    "extend": "vendor/mnapoli/pint-preset/pint-tests.json"
}
```

It formats the `tests/` directory. Run it with:

```bash
vendor/bin/pint --config pint-tests.json
```

For example in CI:

```yaml
-   name: Pint
    run: |
        vendor/bin/pint --test
        vendor/bin/pint --test --config pint-tests.json
```

## Contributing

`pint-tests.json` is generated: since Pint's `extend` only supports one level (and consuming projects use theirs to extend `pint-tests.json`), it cannot extend `pint.json` and must contain the full rule set. Do not edit it directly. Instead, edit `pint.json` (common rules) or the `$overrides` in `generate-pint-tests.php` (test-specific rules), then run:

```bash
php generate-pint-tests.php
```
