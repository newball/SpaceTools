# SpaceTools

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is a tool that's all about space. Specifically blank space and line breaks. The purpose of this tool is to provide an easier way to add spaces in applications by using generated variables, instead of having to continually type them in. So something like this:

```
    $name = $someRandomVariable . " " . "the rest of whatever text here";
    
    $message = "Etiam porta sem malesuada magna mollis euismod.";
    $message .= "\n";
    $message .= "Maecenas faucibus mollis interdum.";
```    

Can become something like this:

```
    $name = $someRandomVariable . $spaceVariable . "the rest of whatever text here";
    
    $message = "Etiam porta sem malesuada magna mollis euismod.";
    $message .= $lineBreakVariable;
    $message .= "Maecenas faucibus mollis interdum.";
```

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
src/    
    /Newline                   # -> Contains all of the newline classes
    - Newline.php              # -> newline generator
    /Space                     # -> Contains all of the black space classes
    - Space.php                # -> blank space generator
    composer.json              # -> Autoloading for 'apps'
```


## Install

Via Composer

``` bash
$ composer require Newball/SpaceTools
```

## Usage

For blank spaces, use the space class. 

``` php
$space = new Newball\SpaceTools\Space();
$bs = $space->spaces;
echo 'Hey,' . $bs . 'Space!';
```

The space class has two parameters. $chars is a number and indicates the amount of spaces wanted, $kind accepts either 'space' or 'escaped'. Space will return a " ", while escaped will return "\040". By default these parameters are set to '1' and 'space'.

``` php
$space = new Newball\SpaceTools\Space(5,'escaped');
$bs = $space->spaces;
echo 'Hey,' . $bs . 'Tons' . $bs . 'Of' . $bs . 'Space';
```

For line breaks / newlines, use the newline class. 

``` php
$newline = new Newball\SpaceTools\Newline();
$nl = $newline->nl;
echo 'Hey,' . $nl . 'A New Line!';
```

The newline class has two parameters. $lines is a number and indicates the amount of newlines wanted, $kind accepts either 'linebreak', 'return' or 'both'. linebreak will return a "\n", return will return a "\r", both will return "\r\n". By default these parameters are set to '1' and 'linebreal'.

``` php
$newline = new Newball\SpaceTools\Newline(2,'both');
$nl = $newline->nl;
echo 'Hey,' . $nl . 'A Bunch' . $nl . 'Of' . $nl . 'Lines';
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email contact@leonewball.com instead of using the issue tracker.

## Credits

- [Leo Newball][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/newball/SpaceTools/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/newball/SpaceTools.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/newball/SpaceTools.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/newball/SpaceTools.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/newball/SpaceTools
[link-scrutinizer]: https://scrutinizer-ci.com/g/newball/SpaceTools/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/newball/SpaceTools
[link-downloads]: https://packagist.org/packages/newball/SpaceTools
[link-author]: https://github.com/Newball
[link-contributors]: ../../contributors