# PHP template

> This template is based on my past history with developing MediaWiki software, and largely based on MediaWiki's own repository template for PHP projects.
>
> *However*, this project can be used for **any** PHP project, not just MediaWiki.
>
> I hope this template can be useful for you!

This repository makes it easier to develop a PHP application or library by providing a basic project structure, continuous integration (CI) configuration, and other tools.

## Features

- [x] [PHP 8.3+](https://www.php.net/releases/8.3/en.php) support
- [x] Unit testing with [PHPUnit](https://github.com/sebastianbergmann/phpunit/) ([official website](https://phpunit.de/))
- [x] Validates PHP syntax with [php-parallel-lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)
- [x] Lint and auto-format PHP code with [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) (PHPCS)
- [x] Continuous integration with [GitHub Actions](https://github.com/features/actions)
- [x] auto-generated documentation with [phpDocumentor](https://www.phpdoc.org/), [GitHub Pages](https://docs.github.com/en/pages)
- [x] Composer dependency updates auto-managed with Dependabot

## Getting started

### Creating a new repository
Choose a method:
- **GitHub UI**: Press the "Use this template" button in the top-right corner of this page.
- **GitHub CLI**: Install [GitHub CLI](https://cli.github.com). Then run one of the following:
  ```shell
  gh repo create --template php-lights/php --public --clone {{repository}}  # clone as public
  gh repo create --template php-lights/php --private --clone {{repository}} # clone as private
  ```

### Replace placeholders

Using your text editor or IDE, find-and-replace the following placeholders:

- `author/package`: Replace with your own author and package name.
- `php-lights/php`: Replace with the name of your GitHub repository.
- `Neoncitylights\ExampleLibrary`: Replace with your own namespace.
- `Neoncitylights\\ExampleLibrary\\`: Replace with your own namespace (escaped version using double backslashes).

Delete this `README.md`, and rename [`LIBRARY.md`](./LIBRARY.md) to `README.md`.

## Configure

| Tool | File | Documentation |
| ---- | ---- | ------------- |
| Composer package | [`composer.json`](./composer.json) | [docs](https://getcomposer.org/doc/04-schema.md), [website](https://getcomposer.org/), [repo](https://github.com/composer/composer) |
| PHPCS (formatter + linter) | [`.phpcs.xml`](./.phpcs.xml) | [docs](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file), [repo](https://github.com/squizlabs/PHP_CodeSniffer) |
| PHPUnit (unit testing) | [`phpunit.xml.dist`](./phpunit.xml.dist) | [docs](https://phpunit.readthedocs.io/en/12.0/configuration.html), [website](https://phpunit.de/), [repo](https://github.com/sebastianbergmann/phpunit) |
| phpdoc (documentation generator) | [`phpdoc.dist.xml`](./phpdoc.dist.xml) | [docs](https://docs.phpdoc.org/3.0/guide/references/configuration.html), [website](https://www.phpdoc.org/), [repo](https://github.com/phpdocumentor/phpdocumentor) |
| Dependabot | [`.github/dependabot.yml`](./.github/dependabot.yml) | [docs](https://docs.github.com/en/code-security/dependabot/dependabot-version-updates/configuration-options-for-the-dependabot.yml-file), [website](https://github.com/dependabot) |

## See also

- [Quick start to reStructuredText](https://docutils.sourceforge.io/docs/user/rst/quickstart.html) (`.rst`), markup language used for phpDocumentor

## License

This software is licensed under the MIT license ([`LICENSE`](./LICENSE) or <http://opensource.org/licenses/MIT>).

### Contribution

Unless you explicitly state otherwise, any contribution intentionally submitted for inclusion in the work by you, as defined in the MIT license, shall be licensed as above, without any additional terms or conditions.
