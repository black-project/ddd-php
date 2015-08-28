DDD PHP
=======

__DDD in PHP__ is a simple project (a folder structure) for your project build with [Domain Driven Design](http://dddcommunity.org/).

[![Latest Stable Version](https://poser.pugx.org/black/ddd-php/v/stable.png)](https://packagist.org/packages/black/ddd-php)
[![Total Downloads](https://poser.pugx.org/black/ddd-php/downloads.png)](https://packagist.org/packages/black/ddd-php)

Installation
------------

The recomanded way to install DDD in PHP is through [Composer](http://getcomposer.org/):

```json
{
    "require": {
        "black/ddd-php": "@stable"
    }
}
```

__Protip:__ You should browse the [`black/ddd-php`](https://packagist.org/packages/black/ddd-php) page to choose a stable version to use, avoid the `@stable` meta
constraint.

Why?
----

First, I want to create a folder structure for my continuous project based on semantic. This small library is a good
start for my project and, even if some parts of this integration versus DDD rules are questionable, this library will
work for a lot of projects.

Usage
-----

This project is a simple folder structure with interfaces (with simple contracts). Follow this structure and your project
 will follow DDD (not exactly true but your design will be fine).
 
Why you should not use this library in your project?
---

For a lot of good reasons like :

- Repository interface is in Domain\Model with 4 basics functions. If you want to add CQRS pattern over this interface, you
will need a Read and a Write side so you can't scale with this interface.

- Repository::find() need a ValueObject. Create a concrete ValueObject implementing ValueObjectInterface and job is done... Or not
You can't accept all ValueObject for find so you will write a condition for testing the $id and use or throw an InvalidArgumentException.

So my advice (after 17 months) is: Do you want to create a DDD project? If yes, follow the rules of this package and you will create a DDD 
project but you should not implement this in your project.

Contributing
------------

This project is a work in progress so don't hesitate to see CONTRIBUTING file and submit your PR.

Credits
-------

This README is heavily inspired by [Hateoas](https://github.com/willdurand/Hateoas) library by the great [@willdurand](https://github.com/willdurand). 
This guy needs your [PR](http://williamdurand.fr/2014/07/02/resting-with-symfony-sos/) for the sake of the REST in PHP.

Alexandre "pocky" Balmes [alexandre@lablackroom.com](mailto:alexandre@lablackroom.com). 
Send me [Flattrs](https://flattr.com/profile/alexandre.balmes) if you love my work, [buy me gift](http://www.amazon.fr/registry/wishlist/3OR3EENRA5TSK) or hire me!


License
-------
`DDD in PHP` is released under the MIT License. See the bundled LICENSE file for details.
