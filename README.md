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

---

:point_right: **This custom PHP Lib depends on SweetAlert2 JS Lib and this php class i just a JS code builder.**

---

Usage
-----
```php
require_once 'sweetalert2.php';
```

####  Notice
```php
$data = swal('Success','Your Email is sent','success');
echo '<script>'.$data.'</script>';
```

#### Notice With Timer
```php
$data = swal('Success','Your Email is sent','success',array('auto_close' => 5000));
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
 * @param array  $args
 *
 * @return \SweetAlert2
 */
 swal( $title = '', $content = '', $type = 'success', $args = array() )
```

#### Success Notice
```php
/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
 swal_success( $title = '', $content = '', $args = array() )
```

#### Info Notice
```php
/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
 swal_info( $title = '', $content = '', $args = array() )
```

#### Question Notice
```php
/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
 swal_question( $title = '', $content = '', $args = array() ) 
```

#### Warning Notice
```php
/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
 swal_warning( $title = '', $content = '', $args = array() )
```

#### Error Notice
```php
/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
 swal_error( $title = '', $content = '', $args = array() )
 ```
