<p align="center">
  <a href="https://sweetalert2.github.io/">
    <img src="https://raw.githubusercontent.com/sweetalert2/sweetalert2/master/assets/swal2-logo.png" alt="SweetAlert2">
  </a>
</p>

<br>

<p align="center">
  A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero dependencies.
</p>


<p align="center">
  <a href="https://sweetalert2.github.io/">
    <img src="https://raw.github.com/sweetalert2/sweetalert2/master/assets/sweetalert2.gif" width="562"><br>
    See SweetAlert2 in action ↗
  </a>
</p>

[![Latest Stable Version][latest-stable-version-img]][latest-stable-version-link]
[![Latest Unstable Version][latest-Unstable-version-img]][latest-Unstable-version-link]
[![Total Downloads][total-downloads-img]][total-downloads-link]
[![WP][wpcs-img]][wpcs-link]
[![License][license-img]][license-link]
[![composer.lock available][composerlock-img]][composerlock-link]


---

:point_right: **This Custom PHP Lib depends on SweetAlert2 JS Lib and this php class works as Javascript code builder.**

---

## Installation
The preferred way to install this extension is through [Composer][composer].

To install **VSP_Framework library**, simply:

    $ composer require varunsridharan/sweetalert2-php

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require varunsridharan/sweetalert2-php --prefer-source

You can also **clone the complete repository** with Git:

    $ git clone https://github.com/varunsridharan/sweetalert2-php.git

Or **install it manually**:

[Download VSP_Framework.zip][downloadzip]:

    $ wget https://github.com/varunsridharan/sweetalert2-php/archive/master.zip
    
####  Notice
```php
$data = swal2('Success','Your Email is sent','success');
echo '<script>'.$data.'</script>';
```

#### Notice With Timer
```php
$data = swal2('Success','Your Email is sent','success');
$data->timer(500);
echo '<script>'.$data.'</script>';
```

Useful Functions
---

#### Simple Notice
```php
/**
 * @param string $title
 * @param string $content
 * @param string $type
 *
 * @return \SweetAlert2
 */
 swal2( $title = '', $content = '', $type = 'success' )
```

#### Success Notice
```php
/**
 * @param string $title
 * @param string $content
 *
 * @return \SweetAlert2
 */
 swal2_success( $title = '', $content = '' )
```

#### Info Notice
```php
/**
 * @param string $title
 * @param string $content
 *
 * @return \SweetAlert2
 */
 swal2_info( $title = '', $content = '' )
```

#### Question Notice
```php
/**
 * @param string $title
 * @param string $content
 *
 * @return \SweetAlert2
 */
 swal2_question( $title = '', $content = '' ) 
```

#### Warning Notice
```php
/**
 * @param string $title
 * @param string $content
 *
 * @return \SweetAlert2
 */
 swal2_warning( $title = '', $content = '' )
```

#### Error Notice
```php
/**
 * @param string $title
 * @param string $content
 *
 * @return \SweetAlert2
 */
 swal2_error( $title = '', $content = '' )
 ```

## Contribute
If you would like to help, please take a look at the list of
[issues][issues] or the [To Do](#-todo) checklist.

## License
This project is licensed under **General Public License v3.0 license**. See the [LICENSE](LICENSE) file for more info.

## Copyright
2017 - 2018 Varun Sridharan, [varunsridharan.in][website]

If you find it useful, let me know :wink:

You can contact me on [Twitter][twitter] or through my [email][email].

## Backed By
| [![DigitalOcean][do-image]][do-ref] | [![JetBrains][jb-image]][jb-ref] |  [![Tidio Chat][tidio-image]][tidio-ref] |
| --- | --- | --- |

[twitter]: https://twitter.com/varunsridharan2
[email]: mailto:varunsridharan23@gmail.com
[website]: https://varunsridharan.in
[issues]: issues/
[composer]: http://getcomposer.org/download/
[downloadzip]:https://github.com/varunsridharan/sweetalert2-php/archive/master.zip

[do-image]: https://vsp.ams3.cdn.digitaloceanspaces.com/cdn/DO_Logo_Horizontal_Blue-small.png
[jb-image]: https://vsp.ams3.cdn.digitaloceanspaces.com/cdn/phpstorm-small.png?v3
[tidio-image]: https://vsp.ams3.cdn.digitaloceanspaces.com/cdn/tidiochat-small.png
[do-ref]: https://s.svarun.in/Ef
[jb-ref]: https://www.jetbrains.com
[tidio-ref]: https://tidiochat.com

[latest-stable-version-img]: https://poser.pugx.org/varunsridharan/sweetalert2-php/version
[latest-Unstable-version-img]: https://poser.pugx.org/varunsridharan/sweetalert2-php/v/unstable
[total-downloads-img]: https://poser.pugx.org/varunsridharan/sweetalert2-php/downloads
[Latest-Unstable-version-img]: https://poser.pugx.org/varunsridharan/sweetalert2-php/v/unstable
[wpcs-img]: https://img.shields.io/badge/WordPress-Standar-1abc9c.svg
[license-img]: https://poser.pugx.org/varunsridharan/sweetalert2-php/license
[composerlock-img]: https://poser.pugx.org/varunsridharan/sweetalert2-php/composerlock

[latest-stable-version-link]: https://packagist.org/packages/varunsridharan/sweetalert2-php
[latest-Unstable-version-link]: https://packagist.org/packages/varunsridharan/sweetalert2-php
[total-downloads-link]: https://packagist.org/packages/varunsridharan/sweetalert2-php
[Latest-Unstable-Version-link]: https://packagist.org/packages/varunsridharan/sweetalert2-php
[wpcs-link]: https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/
[license-link]: https://packagist.org/packages/varunsridharan/sweetalert2-php
[composerlock-link]: https://packagist.org/packages/varunsridharan/sweetalert2-php