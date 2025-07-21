# Dr. Desiree Prisman - Psychiatrist Website

A modern, professional website for Dr. Desiree Prisman's psychiatry practice in Vancouver, BC. Built with PHP, CSS, and JavaScript with a focus on mobile responsiveness, SEO optimization, and conversion rate optimization.

## Features

- **Modern, Professional Design**: Calming color palette appropriate for mental health practice
- **Fully Responsive**: Mobile-first design that works on all devices
- **SEO Optimized**: Proper meta tags, structured data, and semantic HTML
- **Conversion Optimized**: Strategic CTAs and trust signals throughout
- **Accessible**: WCAG compliant with proper keyboard navigation and screen reader support
- **Performance Optimized**: Fast loading with compressed assets and caching
- **Secure**: Security headers and input sanitization

## Project Structure

```
/
├── config.php              # Site-wide configuration
├── functions.php            # Helper functions
├── index.php               # Homepage
├── about-us.php            # About Dr. Prisman
├── services.php            # Services page
├── contact-us.php          # Contact form
├── privacy-policy.php      # Privacy policy
├── 404.php                 # Custom 404 page
├── .htaccess              # Apache configuration
├── robots.txt             # Search engine directives
├── includes/
│   ├── header.php         # Site header component
│   └── footer.php         # Site footer component
└── assets/
    ├── css/
    │   └── styles.css     # Main stylesheet
    └── js/
        └── main.js        # JavaScript functionality
```

## Setup Instructions

### Requirements

- PHP 7.4 or higher
- Apache web server (with mod_rewrite enabled)
- Optional: SSL certificate for HTTPS

### Installation

1. **Upload Files**: Upload all files to your web server's document root
2. **Configure Settings**: Edit `config.php` to update:
   - Site URL
   - Google Analytics tracking ID (if desired)
   - Development mode setting
3. **Set Permissions**: Ensure proper file permissions (644 for files, 755 for directories)
4. **Test**: Visit your domain to verify the site loads correctly

### SSL Setup (Recommended)

1. Install SSL certificate on your server
2. Uncomment the HTTPS redirect lines in `.htaccess`:
   ```apache
   RewriteCond %{HTTPS} off
   RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

### Email Configuration

The contact form currently stores submissions in variables. To make it functional:

1. **Option 1 - Email**: Add PHP mail() functionality to `contact-us.php`
2. **Option 2 - Database**: Set up a database to store form submissions
3. **Option 3 - Third-party**: Integrate with services like Formspree or Netlify Forms

### Google Analytics (Optional)

1. Create a Google Analytics account
2. Get your tracking ID (GA4 format: G-XXXXXXXXXX)
3. Update the `GA_TRACKING_ID` constant in `config.php`

## Customization

### Colors

The color scheme is defined in CSS custom properties in `assets/css/styles.css`:

```css
:root {
    --color-primary: #2c5282;        /* Deep blue */
    --color-secondary: #38a169;      /* Calming green */
    --color-accent: #e2e8f0;         /* Light gray-blue */
    /* ... more colors */
}
```

### Content

- **Homepage**: Edit `index.php` to update hero content and features
- **About Page**: Modify `about-us.php` to update Dr. Prisman's information
- **Services**: Update `services.php` to reflect actual services offered
- **Contact**: Adjust contact information in `config.php`

### Images

Add images to an `assets/images/` directory:
- Professional photo of Dr. Prisman for the About page
- Office photos
- Favicon and Apple touch icon

## SEO Optimization

### Current Features

- Semantic HTML5 structure
- Meta tags for each page
- Open Graph and Twitter Card tags
- Structured data (JSON-LD) for local business
- Clean URLs (via .htaccess)
- Optimized page titles and descriptions

### Additional Recommendations

1. **Sitemap**: Create an XML sitemap and submit to Google Search Console
2. **Local SEO**: Claim Google My Business listing
3. **Content**: Regularly add blog posts or resources
4. **Reviews**: Encourage client reviews (following privacy guidelines)

## Performance Optimization

### Current Features

- CSS and JavaScript compression (via .htaccess)
- Browser caching headers
- Optimized images and fonts
- Minimal JavaScript footprint

### Additional Recommendations

1. **Image Optimization**: Compress and convert images to WebP format
2. **CDN**: Consider using a Content Delivery Network
3. **Critical CSS**: Inline critical CSS for above-the-fold content

## Security Features

- Input sanitization for all form fields
- Security headers (X-Frame-Options, X-XSS-Protection, etc.)
- Blocked access to sensitive files
- HTTPS enforcement (when enabled)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- iOS Safari (latest 2 versions)
- Android Chrome (latest 2 versions)

## Accessibility

- WCAG 2.1 AA compliant
- Keyboard navigation support
- Screen reader compatible
- Proper heading hierarchy
- Alt text for images (when added)
- Color contrast ratios meet standards

## License

This website is proprietary and created specifically for Dr. Desiree Prisman's practice.

## Support

For technical support or modifications, contact the development team.

---

**Note**: This website contains placeholder content in some areas. Please review all content for accuracy and update as needed before going live.