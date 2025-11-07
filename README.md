# GrowPath AI CRM

A modern, feature-rich Customer Relationship Management (CRM) SaaS application built with Laravel 11, designed to help growing businesses manage prospects, clients, and sales pipelines efficiently.

## 📑 Table of Contents

- [Recent Updates](#-recent-updates)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Prerequisites](#-prerequisites)
- [Quick Start](#-quick-start)
- [Detailed Installation](#-detailed-installation)
- [Default Login Credentials](#-default-login-credentials)
- [Project Structure](#-project-structure)
- [Permissions & Roles](#-permissions--roles)
- [Blog System](#-blog-system)
- [Frontend Pages](#-frontend-pages)
- [Development](#-development)
- [Troubleshooting](#-troubleshooting)
- [Database Schema](#-database-schema)
- [Deployment](#-deployment)
- [Key Highlights](#-key-highlights)
- [Contributing](#-contributing)
- [Hire / Work with me](#-hire--work-with-me)
- [License](#-license)
- [Acknowledgments](#-acknowledgments)

## 🎉 Recent Updates

### Admin Approval System
- New user registrations now require admin approval
- Pending users cannot access the system until approved
- Admin dashboard shows pending user requests
- Email notifications for approval status changes

### Blog System Enhancements
- Fixed TipTap editor toolbar rendering
- Migrated to ESM CDN (esm.sh) for better reliability
- Inline category and tag creation without leaving post editor
- Modal dialogs for seamless content management
- Improved rich text formatting options

### Modern UI/UX Updates
- Refreshed authentication pages with modern classic design
- Glass morphism effects and gradient backgrounds
- Improved responsive design across all pages
- Enhanced logo and branding with "GrowPath AI"

## ✨ Features

### Core CRM Functionality
- **Prospect Management** - Track and manage potential customers with advanced filtering and bulk operations
- **Client Management** - Convert prospects to clients and manage customer relationships
- **Follow-Up System** - Schedule and track follow-up tasks with automated reminders
- **Sales Pipeline** - Visual kanban-style pipeline to track deals through stages
- **Reports & Analytics** - Comprehensive reporting dashboard with performance metrics

### Content Management
- **Blog System** - Full-featured blog with categories, tags, and rich text editor (Tiptap)
- **Contact Form** - Customer inquiry management with status tracking and assignment
- **Frontend Pages** - Help center, documentation, privacy policy, terms, API docs, integrations, careers

### User Management
- **Role-Based Access Control** - Owner, Manager, and Member roles with granular permissions (Spatie Laravel Permission)
- **Admin Approval System** - New user registrations require admin approval before access
- **Team Management** - Manage team members, assign prospects, and control access
- **User Authentication** - Secure login with Laravel Fortify and email verification

### Modern UI/UX
- **Modern Classic Design** - Glass morphism, gradient effects, smooth animations
- **Responsive Design** - Mobile-first approach with Tailwind CSS
- **Dark Mode Ready** - Prepared for dark theme implementation
- **Custom Design System** - Consistent color palette, typography, and spacing
- **Smooth Animations** - Float, slide-up, and fade-in effects
- **Accessibility** - ARIA labels and semantic HTML

### Additional Features
- **Export Functionality** - CSV export for prospects and clients
- **Bulk Operations** - Delete, update status, and assign multiple records
- **Real-time Notifications** - Stay updated on important events
- **Advanced Search & Filtering** - Find what you need quickly
- **SEO Optimization** - Meta tags, Open Graph, structured data
- **Performance Optimized** - Cached views, routes, and config

## 🚀 Tech Stack

### Backend
- **Framework:** Laravel 11
- **PHP:** 8.2+
- **Authentication:** Laravel Fortify (Login, Registration, Password Reset)
- **Permissions:** Spatie Laravel Permission (RBAC)
- **Database:** MySQL/PostgreSQL/SQLite

### Frontend
- **Template Engine:** Blade Templates
- **CSS Framework:** Tailwind CSS 4
- **JavaScript:** Alpine.js (for interactivity)
- **Rich Text Editor:** Tiptap (ES Modules via esm.sh CDN)
- **Icons:** Heroicons (via SVG)
- **Build Tool:** Vite 7

### Design System
- **Color Palette:** Custom primary and neutral colors
- **Typography:** Inter, SF Pro Display
- **Spacing:** 8-point grid system
- **Animations:** Custom keyframes (float, slide-up, fade-in)

## 📋 Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL or PostgreSQL
- Laravel Herd (optional, for local development)

## ⚡ Quick Start

For the fastest setup, use these commands:

```bash
# Clone and navigate
git clone <repository-url>
cd growpath

# Install dependencies and setup
composer install
npm install

# Environment and database
cp .env.example .env
php artisan key:generate

# Update .env with your database credentials
# DB_CONNECTION=mysql
# DB_DATABASE=growpath
# DB_USERNAME=root
# DB_PASSWORD=

# Migrate and seed
php artisan migrate --seed

# Build assets and serve
npm run dev &
php artisan serve
```

Visit `http://localhost:8000` and login with **admin@growpath.com** / **password**

## 🔧 Detailed Installation

### 1. Clone the repository
```bash
git clone <repository-url>
cd growpath
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install NPM dependencies
```bash
npm install
```

### 4. Copy environment file
```bash
cp .env.example .env
```

### 5. Generate application key
```bash
php artisan key:generate
```

### 6. Configure database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=growpath
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migrations
```bash
php artisan migrate
```

### 8. Seed database with permissions and roles
```bash
php artisan db:seed
```

This creates:
- Roles and permissions
- 4 test user accounts (admin, manager, test, pending)
- Sample data for testing

### 9. Build frontend assets
```bash
npm run dev
```

### 10. Start the development server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 👤 Default Login Credentials

After running `php artisan db:seed`, the following test accounts are available:

### Admin Account (Owner Role - Full Access)
- **Email:** admin@growpath.com
- **Password:** password
- **Status:** ✅ Approved

### Manager Account (Manager Role - Extended Access)
- **Email:** manager@growpath.com
- **Password:** password
- **Status:** ✅ Approved

### Test User Account (Member Role - Basic Access)
- **Email:** test@growpath.com
- **Password:** password
- **Status:** ✅ Approved

### Pending User (For Testing Approval System)
- **Email:** pending@growpath.com
- **Password:** password
- **Status:** ⏳ Pending Approval (cannot login until approved)

## 📂 Project Structure

```
growpath/
├── app/
│   ├── Http/Controllers/
│   │   ├── BlogController.php
│   │   ├── BlogPostController.php
│   │   ├── ClientController.php
│   │   ├── ContactController.php
│   │   ├── FollowUpController.php
│   │   ├── PipelineController.php
│   │   ├── ProspectController.php
│   │   ├── ReportController.php
│   │   ├── SettingsController.php
│   │   └── TeamController.php
│   └── Models/
│       ├── BlogCategory.php
│       ├── BlogPost.php
│       ├── BlogTag.php
│       ├── Client.php
│       ├── ContactMessage.php
│       ├── FollowUp.php
│       ├── Prospect.php
│       └── User.php
├── resources/
│   └── views/
│       ├── blog/           # Admin blog management
│       ├── frontend/       # Public-facing pages
│       └── layouts/        # Layout templates
└── routes/
    └── web.php
```

## 🔐 Permissions & Roles

The system uses Spatie Laravel Permission for role-based access control:

### Owner Role (Admin)
Full access to all features including:
- All prospect, client, and follow-up management
- Pipeline and reports
- Team management and user approval
- Settings configuration
- Blog management (create, edit, delete posts/categories/tags)
- Contact messages management
- System administration

### Manager Role
Extended access to:
- Create, view, and manage prospects
- View and manage clients
- Create and manage follow-ups
- Access to pipeline and reports
- Limited team visibility

### Member Role
Basic access to:
- View and create prospects (assigned to them)
- View clients
- Create and manage their own follow-ups
- View pipeline
- Basic reporting

## 📝 Blog System

The blog system includes:
- **Rich Text Editor (Tiptap)** - Modern WYSIWYG editor with:
  - Text formatting (Bold, Italic, Strike-through)
  - Headings (H1, H2, H3)
  - Lists (Bullet, Numbered)
  - Blockquotes and Code blocks
  - Undo/Redo functionality
- **Inline Category & Tag Creation** - Create categories and tags without leaving the post editor
- **Categories and Tags** - Organize content with flexible taxonomy
- **Draft and Published Status** - Control content visibility
- **Reading Time Calculation** - Auto-calculated reading estimates
- **View Counter** - Track post engagement
- **Social Sharing** - Built-in social media sharing buttons
- **Related Posts** - Automatic content recommendations
- **SEO Optimization** - Meta tags, Open Graph, and structured data

## 🎨 Frontend Pages

- **Home** - Landing page with features showcase
- **Features** - Detailed feature explanations
- **Pricing** - Pricing plans and comparison
- **About** - Company information
- **Contact** - Contact form with backend integration
- **Blog** - Public blog listing and detail pages
- **Help Center** - FAQs and support resources
- **Documentation** - User documentation
- **API** - API documentation
- **Integrations** - Available integrations
- **Careers** - Job listings
- **Privacy Policy** - GDPR/CCPA compliant
- **Terms of Service** - Legal terms

## 🛠 Development

### Running Tests
```bash
php artisan test
```

### Building for Production
```bash
npm run build
```

### Code Style (Laravel Pint)
```bash
./vendor/bin/pint
```

### Clearing Caches
```bash
php artisan optimize:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
```

## 🐛 Troubleshooting

### Common Issues

**Issue: "Permission denied" errors**
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

**Issue: TipTap editor not loading**
- Clear browser cache and reload
- Check browser console for JavaScript errors
- Ensure internet connection for CDN access (esm.sh)

**Issue: Cannot login after registration**
- Check if admin approval is required (default: yes)
- Admin must approve new users from Team Management page

**Issue: Styles not loading**
```bash
npm run build
php artisan view:clear
```

**Issue: Routes not working**
```bash
php artisan route:clear
php artisan optimize:clear
```

## 📦 Database Schema

Key tables:
- `users` - User accounts with roles, approval status, and two-factor authentication
- `prospects` - Potential customers with status tracking and assignment
- `clients` - Converted customers with relationship data
- `follow_ups` - Scheduled tasks with completion tracking
- `blog_posts` - Blog content with categories, tags, and metadata
- `blog_categories` - Blog categories with post counts
- `blog_tags` - Blog tags with relationships
- `blog_post_tag` - Pivot table for post-tag relationships
- `contact_messages` - Contact form submissions with status tracking
- `roles` - Permission roles (Owner, Manager, Member)
- `permissions` - Granular permissions
- `model_has_roles` - User-role assignments
- `model_has_permissions` - User-permission assignments

## 🚢 Deployment

1. Set environment to production in `.env`
```env
APP_ENV=production
APP_DEBUG=false
```

2. Optimize for production
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. Build assets
```bash
npm run build
```

## 🤝 Hire / Work with me:

* 🔗 Fiverr (custom builds, integrations, performance): https://www.fiverr.com/s/EgxYmWD
* 🌐 Mejba Personal Portfolio: https://www.mejba.me
* 🏢 Ramlit Limited: https://www.ramlit.com
* 🎨 ColorPark Creative Agency: https://www.colorpark.io
* 🛡 xCyberSecurity Global Services: https://www.xcybersecurity.io

## 🌟 Key Highlights

- ✅ **Production-Ready** - Built with Laravel 11 best practices
- ✅ **Modern Stack** - Latest versions of Laravel, Tailwind CSS 4, and Vite 7
- ✅ **Secure** - Admin approval system, RBAC, CSRF protection, XSS prevention
- ✅ **Scalable** - Modular architecture, optimized queries, caching
- ✅ **SEO Optimized** - Meta tags, Open Graph, structured data, sitemap-ready
- ✅ **Mobile Responsive** - Works seamlessly on all devices
- ✅ **Developer Friendly** - Clean code, PSR standards, comprehensive documentation
- ✅ **Customizable** - Easy to extend and modify for specific needs

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

Please ensure your code follows Laravel coding standards and includes appropriate tests.

## 📄 License

This project is open-sourced software licensed under the MIT license.

## 🙏 Acknowledgments

Built with:
- [Laravel](https://laravel.com) - The PHP framework for web artisans
- [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
- [Alpine.js](https://alpinejs.dev) - A rugged, minimal framework for composing JavaScript behavior
- [Tiptap](https://tiptap.dev) - The headless editor framework for web artisans
- [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission) - Role and Permission management
