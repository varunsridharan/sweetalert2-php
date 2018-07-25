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

##### Success Notice
```php
$data = swal_success('Success','Your Email is sent');
echo '<script>'.$data.'</script>';
```
