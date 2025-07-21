# Dr. Martin Davidson Psychology Practice Website

A modern, responsive website for Dr. Martin Davidson's psychology practice in Vancouver, BC. Built with PHP, CSS, and JavaScript with a focus on warm, approachable design that appeals to both parents and young people.

## Features

- **Distinctive Design**: Warm gradients, organic shapes, and playful elements that maintain professionalism
- **Dual Audience Appeal**: Design elements that speak to both anxious parents and therapy-resistant teens
- **Mobile-First Responsive**: Optimized for all devices with special attention to mobile experience
- **Interactive Elements**: Tabs, accordions, and smooth animations for engaging user experience
- **SEO Optimized**: Semantic HTML5, proper meta tags, and structured content
- **Accessibility**: WCAG compliant with keyboard navigation, screen reader support, and focus management

## File Structure

```
/website/
├── index.php              # Homepage with hero section and audience paths
├── bio.php               # Dr. Davidson's background and credentials
├── what-is-therapy.php   # Explanation of therapy with tabbed content
├── how-i-work.php        # Therapeutic approach with accordion layout
├── contact.php           # Contact information and booking
├── /includes/
│   ├── header.php        # Reusable header component
│   └── footer.php        # Reusable footer component
├── /assets/
│   ├── /css/
│   │   └── style.css     # Main stylesheet with custom properties
│   └── /js/
│       └── main.js       # Interactive functionality
└── README.md            # This file
```

## Key Design Elements

### Color Palette
- Primary Orange: #FFB75E
- Primary Coral: #ED7558
- Secondary Teal: #4ECDC4
- Accent Purple: #7B68EE
- Warm Cream: #FFF5E6

### Typography
- Main Font: 'Nunito' (Google Fonts)
- Accent Font: 'Merriweather' (Google Fonts)

### Unique Features
- Organic shape animations in hero section
- Playful card rotations that straighten on hover
- Wave dividers between header/footer and content
- Gradient backgrounds with transparency overlays
- Pull quotes styled as conversation bubbles

## Content Strategy

The website emphasizes Dr. Davidson's unique approach:
- 15 years specializing in youth mental health
- SFU professor teaching Adolescent Development
- Research-based understanding of what young people want from therapy
- Emphasis on authentic relationships and making therapy enjoyable

## Responsive Breakpoints

- Desktop: 1200px+
- Tablet: 768px - 1199px
- Mobile: 480px - 767px
- Small Mobile: <480px

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Graceful degradation for older browsers
- Progressive enhancement for advanced features

## Accessibility Features

- Skip links for screen readers
- Keyboard navigation support
- High contrast mode support
- Reduced motion preferences respected
- Semantic HTML structure
- ARIA labels where appropriate

## Setup

1. Ensure PHP is installed on your web server
2. Upload all files to your web directory
3. No database setup required - this is a static informational site
4. All external dependencies (fonts) are loaded via CDN

## Customization

The CSS uses custom properties (CSS variables) defined in `:root` for easy theming:
- Colors can be modified in the CSS variables section
- Spacing uses a consistent scale via custom properties
- Font families can be changed by updating the Google Fonts link and CSS variables

## Performance Optimizations

- Minimal external dependencies
- Optimized CSS with efficient selectors
- Compressed/optimized JavaScript
- Semantic HTML for faster parsing
- Proper image placeholder structure for future optimization

## Future Enhancements

- Image optimization and placeholder content
- Contact form with backend processing
- Blog/articles section
- Online appointment booking integration
- Client portal area
- Testimonials section with photo placeholders