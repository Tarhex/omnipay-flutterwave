# Omnipay: FlutterWave

**FlutterWave driver for the Omnipay PHP payment processing library**

<!--[![Build Status](https://travis-ci.org/thephpleague/omnipay-flutterwave.png?branch=master)](https://travis-ci.org/thephpleague/omnipay-flutterwave)-->
<!--[![Latest Stable Version](https://poser.pugx.org/omnipay/flutterwave/version.png)](https://packagist.org/packages/omnipay/flutterwave)-->
<!--[![Total Downloads](https://poser.pugx.org/omnipay/2c2p/d/total.png)](https://packagist.org/packages/omnipay/flutterwave)-->

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements flutterwave support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "tarhex/omnipay-flutterwave": "~2.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following methods are provided by this package:

+ purchase
+ completePurchase

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.


## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/tarhex/omnipay-flutterwave/issues),
or better yet, fork the library and submit a pull request.
