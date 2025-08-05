# 📁 Caselytical Project Structure

## 🏗️ Organized File Structure

```
caselytical-main/
├── 📄 index.html                    # Main homepage
├── 📄 indexLogged.php               # Logged-in homepage
├── 📄 Profile.php                   # User profile page
├── 📄 Profilelogged.php            # Logged-in profile page
├── 📄 contact.php                   # Contact form page
├── 📄 products.html                 # Products catalog page
├── 📄 productsHeader.php           # Products header component
├── 📄 purchase.html                 # Purchase form page
├── 📄 privacy.html                  # Privacy policy page
├── 📄 package.json                  # Node.js dependencies
├── 📄 package-lock.json            # Lock file for dependencies
├── 📄 vercel.json                   # Vercel deployment config
├── 📄 .gitignore                    # Git ignore rules
│
├── 📂 php/                          # 🔧 PHP Backend Files
│   ├── 📄 db_conn.php              # Database connection
│   │
│   ├── 📂 auth/                     # 🔐 Authentication
│   │   ├── 📄 login.php            # Login processing
│   │   ├── 📄 signup.php           # Signup form
│   │   ├── 📄 signup-check.php     # Signup validation
│   │   ├── 📄 Logout.php           # Logout processing
│   │   ├── 📄 change-p.php         # Password change logic
│   │   └── 📄 change-password.php  # Password change form
│   │
│   ├── 📂 admin/                    # 👑 Admin Functions
│   │   ├── 📄 AdminLogin.php       # Admin login form
│   │   ├── 📄 AdminPanel.php       # Admin dashboard
│   │   ├── 📄 insert_product.php   # Add new products
│   │   └── 📄 ConnectionAdminLoginPage.php # Admin auth
│   │
│   └── 📂 cart/                     # 🛒 Shopping Cart
│       ├── 📄 mycart.php           # Cart display
│       ├── 📄 manage_cart.php      # Cart management
│       └── 📄 purchase.php         # Purchase processing
│
├── 📂 css/                          # 🎨 Stylesheets
│   ├── 📄 style.css                # Main stylesheet
│   ├── 📄 AdminLogin.css           # Admin login styles
│   ├── 📄 AdminPage.css            # Admin panel styles
│   ├── 📄 contact.css              # Contact page styles
│   ├── 📄 loginNregister.css       # Auth forms styles
│   ├── 📄 purchaseStyle.css        # Purchase form styles
│   ├── 📄 styleInfo.css            # Info pages styles
│   └── 📄 aboutus.css              # About us styles
│
├── 📂 js/                           # ⚡ JavaScript Files
│   ├── 📄 main.js                  # Main JavaScript
│   └── 📄 counter.js               # Counter functionality
│
├── 📂 image/                        # 🖼️ Images & Media
│   ├── 📄 logo.jpg                 # Site logo
│   ├── 📄 card_img.png             # Card image
│   ├── 📄 joinus.png               # Join us banner
│   ├── 📄 hp1.jpg - hp4.jpg        # Homepage banners
│   ├── 📄 td4.jpg - td6.jpg        # Trending designs
│   └── 📄 [product-images].jpg     # Product photos
│
├── 📂 pages/                        # 📑 Static Pages
│   └── 📄 teamMember.html          # Team/About page
│
├── 📂 team/                         # 👥 Team Photos
│   ├── 📄 aqmar.jpg                # Team member photo
│   ├── 📄 Hana.jpg                 # Team member photo
│   └── 📄 haziq.jpg                # Team member photo
│
├── 📂 products/                     # 🛍️ Product Assets
│   ├── 📄 pic1.png                 # Product image
│   ├── 📄 pic2.png                 # Product image
│   └── 📄 pic3.png                 # Product image
│
├── 📂 assets/                       # 🎯 General Assets
│   └── 📄 javascript.svg           # JavaScript logo
│
├── 📂 public/                       # 🌐 Public Assets
│   └── 📄 vite.svg                 # Vite logo
│
├── 📂 docs/                         # 📚 Documentation
│   ├── 📄 README.md                # Project documentation
│   └── 📄 SIMPLE_DEPLOY.md         # Deployment guide
│
└── 📂 new-folder/                   # 📁 Additional Files
    └── 📄 README.md                # Folder documentation
```

## 🎯 Benefits of This Organization

### ✅ **Better Structure**
- **Separated concerns**: PHP, CSS, JS, images in dedicated folders
- **Logical grouping**: Auth, admin, cart functionality grouped
- **Easy navigation**: Find files quickly by purpose

### ✅ **Easier Maintenance**
- **Clear file purposes**: Each file has a specific role
- **Scalable structure**: Easy to add new features
- **Clean codebase**: No duplicate or unnecessary files

### ✅ **Development Benefits**
- **Faster debugging**: Know exactly where to look
- **Team collaboration**: Clear structure for multiple developers
- **Version control**: Better Git history and conflicts resolution

## 🔧 Updated File Paths

After reorganization, update these paths in your code:

### PHP Includes:
```php
// Old: include "db_conn.php";
include "php/db_conn.php";

// Old: include "login.php";  
include "php/auth/login.php";
```

### HTML Form Actions:
```html
<!-- Old: action="login.php" -->
<form action="php/auth/login.php" method="post">

<!-- Old: action="signup-check.php" -->
<form action="php/auth/signup-check.php" method="post">

<!-- Old: action="purchase.php" -->
<form action="php/cart/purchase.php" method="post">
```

### CSS/JS Links:
```html
<!-- JavaScript -->
<script src="js/main.js"></script>

<!-- Already correct -->
<link rel="stylesheet" href="css/style.css">
```

## 🚀 Next Steps

1. **Update file paths** in your PHP and HTML files
2. **Test functionality** to ensure everything works
3. **Deploy with confidence** using the organized structure
4. **Add new features** easily with the clear organization

This organized structure makes your project more professional and maintainable! 🌟
