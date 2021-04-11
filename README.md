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


---

<!-- START common-footer.mustache  -->
## 📝 Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

[Checkout CHANGELOG.md](https://github.com/varunsridharan/sweetalert2-php/blob/main/CHANGELOG.md)


## 🤝 Contributing
If you would like to help, please take a look at the list of [issues](https://github.com/varunsridharan/sweetalert2-php/issues/).


## 📜  License & Conduct
- [**MIT License**](https://github.com/varunsridharan/sweetalert2-php/blob/main/LICENSE) © [Varun Sridharan](website)
- [Code of Conduct](https://github.com/varunsridharan/.github/blob/main/CODE_OF_CONDUCT.md)


## 📣 Feedback
- ⭐ This repository if this project helped you! :wink:
- Create An [🔧 Issue](https://github.com/varunsridharan/sweetalert2-php/issues/) if you need help / found a bug


## 💰 Sponsor
[I][twitter] fell in love with open-source in 2013 and there has been no looking back since! You can read more about me [here][website].
If you, or your company, use any of my projects or like what I’m doing, kindly consider backing me. I'm in this for the long run.

- ☕ How about we get to know each other over coffee? Buy me a cup for just [**$9.99**][buymeacoffee]
- ☕️☕️ How about buying me just 2 cups of coffee each month? You can do that for as little as [**$9.99**][buymeacoffee]
- 🔰         We love bettering open-source projects. Support 1-hour of open-source maintenance for [**$24.99 one-time?**][paypal]
- 🚀         Love open-source tools? Me too! How about supporting one hour of open-source development for just [**$49.99 one-time ?**][paypal]

<!-- Personl Links -->
[paypal]: https://sva.onl/paypal
[buymeacoffee]: https://sva.onl/buymeacoffee
[twitter]: https://sva.onl/twitter/
[website]: https://sva.onl/website/


## Connect & Say 👋
- **Follow** me on [👨‍💻 Github][github] and stay updated on free and open-source software
- **Follow** me on [🐦 Twitter][twitter] to get updates on my latest open source projects
- **Message** me on [📠 Telegram][telegram]
- **Follow** my pet on [Instagram][sofythelabrador] for some _dog-tastic_ updates!

<!-- Personl Links -->
[sofythelabrador]: https://www.instagram.com/sofythelabrador/
[github]: https://sva.onl/github/
[twitter]: https://sva.onl/twitter/
[telegram]: https://sva.onl/telegram/


---

<p align="center">
<i>Built With ♥ By <a href="https://sva.onl/twitter"  target="_blank" rel="noopener noreferrer">Varun Sridharan</a> <a href="https://en.wikipedia.org/wiki/India">
   <img src="https://cdn.svarun.dev/flag-india.jpg" width="20px"/></a> </i> <br/><br/>
   <img src="https://cdn.svarun.dev/codeispoetry.png"/>
</p>

---


<!-- END common-footer.mustache  -->

[composer]: http://getcomposer.org/download/
[downloadzip]:https://github.com/varunsridharan/sweetalert2-php/archive/master.zip

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
