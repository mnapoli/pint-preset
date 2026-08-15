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

For Laravel apps:

```json
{
    "extend": "vendor/mnapoli/pint-preset/pint.json",
    "in": [
        "app",
        "bootstrap",
        "config",
        "database",
        "lang",
        "resources",
        "routes"
    ]
}
```

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
