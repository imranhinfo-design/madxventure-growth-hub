# MadXventure WordPress Theme

A professional one-page theme for BPO and lead generation companies.

## Installation

1. Download or clone this repository
2. Create a folder named `madxventure-theme`
3. Copy all theme files into the folder
4. Add your logo as `screenshot.png` (1200x900px recommended)
5. Zip the folder
6. Go to WordPress Admin > Appearance > Themes > Add New > Upload Theme
7. Upload the zip file and activate

## Theme Structure

```
madxventure-theme/
├── style.css          # Main stylesheet with theme header
├── functions.php      # Theme functions and setup
├── index.php          # Fallback template
├── header.php         # Header template
├── footer.php         # Footer template
├── front-page.php     # Homepage template
├── screenshot.png     # Theme preview image (add your own)
├── README.md          # This file
└── assets/
    └── js/
        └── main.js    # JavaScript functionality
```

## Features

- Responsive one-page design
- Fixed header with smooth scroll navigation
- Hero section with statistics
- Services grid
- About section with feature cards
- Results/stats section
- Contact form with AJAX submission
- Customizer settings for:
  - Hero title and subtitle
  - Contact information
  - Social media links
- Custom logo support
- SEO optimized

## Customization

### Using the Customizer

Go to Appearance > Customize to modify:

- **Hero Section**: Update title and subtitle
- **Contact Information**: Set phone, email, and location
- **Social Media Links**: Add your LinkedIn, Twitter, and Facebook URLs
- **Site Identity**: Upload your custom logo

### Adding Your Logo

1. Go to Appearance > Customize > Site Identity
2. Click "Select Logo"
3. Upload your MadXventure logo
4. Click "Publish"

### Setting Up Navigation

1. Go to Appearance > Menus
2. Create a new menu
3. Add custom links with anchors (#services, #about, #results, #contact)
4. Assign to "Primary Menu" location

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## License

GNU General Public License v2 or later
