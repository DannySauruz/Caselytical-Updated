# Path Update Guide

## Files that need path updates:

### ✅ Already Updated:
- `index.html` - Cart link updated
- `Profile.php` - Login form action updated  
- `php/auth/signup.php` - CSS path updated
- `php/auth/login.php` - DB connection updated
- `php/auth/signup-check.php` - DB connection updated
- `php/auth/change-p.php` - DB connection updated

### 🔄 Still Need Updates:

#### Admin Files:
- `php/admin/AdminLogin.php` - Update DB connection to `../db_conn.php`
- `php/admin/AdminPanel.php` - Update DB connection to `../db_conn.php`
- `php/admin/insert_product.php` - Update DB connection to `../db_conn.php`

#### Cart Files:
- `php/cart/mycart.php` - Update DB connection to `../db_conn.php`
- `php/cart/manage_cart.php` - Update DB connection to `../db_conn.php`
- `php/cart/purchase.php` - Update DB connection to `../db_conn.php`

#### Form Actions in HTML files:
- Update any remaining `action="signup-check.php"` to `action="php/auth/signup-check.php"`
- Update any `action="purchase.php"` to `action="php/cart/purchase.php"`

#### CSS Paths in PHP files:
- Files in subfolders need relative paths like `../../css/style.css`

## Quick Fix Commands:

1. **Test your website** after the organization
2. **Check browser console** for any missing file errors
3. **Update paths** as needed based on the new structure

The organization is complete - just need to update the remaining include paths!
