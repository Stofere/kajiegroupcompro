# Product Requirements Document (PRD)
**Project:** B2B Company Profile & Digital Brochure  
**Business Type:** Distributor, General Supplier, and General Contractor (Mechanical & Electrical Equipment)  
**Industry:** Material Handling, Grain Handling, Packaging, and Automation  

---

## 1. Executive Summary & Objectives

**Overview**
This project aims to develop a highly professional, blazing-fast "digital brochure" website tailored for a B2B audience. As a distributor and general contractor specializing in heavy machinery and plant construction, the company requires a digital presence that conveys authority, technical expertise, and reliability. 

**Objectives**
- **Digital Storefront:** Effectively showcase products, services, and past projects to prospective clients.
- **Build Authority:** Establish trust with factory managers, engineers, and decision-makers through a clean, premium, and technically accurate presentation.
- **Maximum Performance (V1):** Deliver a seamless, zero-latency browsing experience by utilizing a static, database-less architecture to achieve high Lighthouse performance scores.
- **Cost Efficiency:** Maintain $0 development and infrastructure costs by utilizing static data arrays within Laravel.
- **Future-Proofing:** Ensure the V1 architecture is structured in a way that allows for a smooth transition to a dynamic CMS (FilamentPHP + Spatie Media Library) in Phase 2.

---

## 2. Target Audience & User Personas

**Target Audience**
Other businesses (B2B), factory managers, lead engineers, and procurement officers looking for heavy machinery, plant construction, and industrial automation solutions.

**User Personas**
1. **The Factory Manager (The Decision Maker)**
   - **Goals:** Find reliable suppliers and contractors to upgrade or build new facilities.
   - **Needs:** Clear value propositions, past client success stories, professional presentation, and easy ways to contact sales.
2. **The Lead Engineer (The Technical Evaluator)**
   - **Goals:** Evaluate the technical specifications and build quality of the machinery (e.g., Coal Handling Plant, Radial Stacker Conveyor).
   - **Needs:** High-resolution images, detailed technical features, and logical site navigation without marketing fluff.
3. **The Procurement Officer (The Buyer)**
   - **Goals:** Source specific industrial equipment (e.g., Conveyor Accessories) from trusted vendors.
   - **Needs:** Fast page loads, clear product categorization, and straightforward inquiry forms.

---

## 3. Tech Stack & Architecture Details (Phase 1)

For Version 1, the platform will utilize a **database-less architecture**. All content will be managed via static PHP arrays and rendered server-side. This guarantees high security, zero database query latency, and extremely low hosting requirements.

**The Tech Stack:**
- **Backend Framework:** Laravel (Used exclusively for Routing, Blade Templating, and Configuration management). **No Eloquent or Database connections will be configured.**
- **Frontend UI:** Tailwind CSS (Utility-first styling for rapid, custom UI development) combined with Blade components.
- **Interactivity:** Alpine.js (Lightweight JavaScript for mobile menus, image lightboxes, and simple UI toggles without the overhead of heavy frameworks like React/Vue).
- **Asset Compilation & Optimization:** Vite (For compiling Tailwind CSS, minifying JS, and managing optimized static image paths).

---

## 4. Site Map & Page Structure

1. **Home (`/`)**
   - Hero section with a high-resolution industrial background and primary CTA.
   - Brief "About Us" highlighting core competencies (Distributor, General Supplier, Contractor).
   - Featured product categories grid.
   - Trusted clients/partners logo carousel.
   - Footer with contact details and quick links.
2. **About Us (`/about`)**
   - Company history, mission, and vision.
   - Detailed breakdown of services (Mechanical & Electrical, Plant Construction).
3. **Products (`/products`)**
   - Grid layout of all main product categories (e.g., Bulk Material Handling, Grain Handling, Packaging Automation).
4. **Product Details (`/products/{slug}`)**
   - High-resolution WebP image gallery (powered by Alpine.js).
   - Detailed product descriptions and bulleted technical features.
   - "Inquire Now" Call-to-Action.
5. **Clients / Projects (`/clients`)**
   - Showcase of past plant constructions and successful installations.
6. **Contact (`/contact`)**
   - Contact form, Google Maps embed, phone/WhatsApp numbers, and physical address.

---

## 5. Functional Requirements

- **Dynamic Routing via Static Data:** Laravel's `routes/web.php` must dynamically resolve URIs (like `/products/coal-handling-plant`) by looking up the corresponding slug in a centralized PHP config file or data class, throwing a 404 if not found.
- **Interactive Image Lightbox:** Product detail pages must allow users to click on high-resolution machinery images to view them in a full-screen lightbox, utilizing Alpine.js.
- **Contact Handling:** Since there is no database, contact form submissions should trigger a Laravel Mailable to send an email directly to the sales/admin inbox, or integrate with a free static form handler like Formspree.
- **Modular Blade Components:** Reusable UI elements (Navigation, Footer, Product Cards, Buttons) must be extracted into Blade components (`resources/views/components`) to maintain a DRY codebase.

---

## 6. Non-Functional Requirements

- **Performance & Speed:** 
  - The site must load near-instantly.
  - Target Google Lighthouse scores of 90+ across Performance, Accessibility, Best Practices, and SEO.
- **Asset Management (No DB):** 
  - All images must be manually compressed and converted to WebP format prior to being placed in `public/images/`.
  - Vite will be configured to hash assets for cache-busting during production builds.
- **Mobile Responsiveness:** 
  - The interface must be completely fluid, utilizing Tailwind's responsive breakpoints (`sm`, `md`, `lg`, `xl`). Elements like product grids must stack gracefully on mobile screens.
- **SEO Best Practices:** 
  - Each view must accept dynamic data for `<title>` and `<meta name="description">` tags.
  - Semantic HTML5 structure (proper use of `h1`, `h2`, `main`, `section`).
  - Strict inclusion of `alt` attributes on all industrial machinery images for accessibility and image search indexing.

---

## 7. Static Data Structure (Phase 1 Implementation)

To achieve a dynamic feel without a database, product data will be stored in a structured PHP file (e.g., `config/catalog.php` or a dedicated `app/Data/CatalogData.php` class).

**Example Structure:**
```php
<?php

return [
    'categories' => [
        'bulk-material-handling' => [
            'name' => 'Bulk Material Handling',
            'slug' => 'bulk-material-handling',
            'description' => 'Comprehensive solutions for moving, storing, and processing bulk materials safely and efficiently.',
            'cover_image' => 'images/categories/bulk-handling-cover.webp',
        ],
        // Other categories...
    ],
    
    'products' => [
        'coal-handling-plant' => [
            'name' => 'Coal Handling Plant',
            'slug' => 'coal-handling-plant',
            'category_slug' => 'bulk-material-handling',
            'short_description' => 'Turnkey solutions for heavy-duty coal handling and processing.',
            'detailed_description' => 'Our coal handling plants are engineered for maximum throughput and reliability in harsh industrial environments...',
            'features' => [
                'High capacity radial stackers',
                'Advanced dust suppression systems',
                'Automated control panels (PLC)'
            ],
            'images' => [
                'main' => 'images/products/coal-plant-main.webp',
                'gallery' => [
                    'images/products/coal-plant-1.webp',
                    'images/products/coal-plant-2.webp',
                ]
            ],
            'meta' => [
                'title' => 'Coal Handling Plant Contractor & Supplier',
                'description' => 'Expert general contractor for Coal Handling Plants. High capacity, durable, and automated bulk material solutions.'
            ]
        ],
        // Stone Crushing Plant, Feedmill Plant, etc...
    ]
];
```
*In the controller, you simply fetch this array: `$product = config("catalog.products.{$slug}");`*

---

## 8. Phase 2 Migration Plan

Once the business is ready to scale and requires frequent content updates, the site will transition from static arrays to a robust CMS architecture.

1. **Database Integration & Data Migration**
   - Configure MySQL/PostgreSQL in `.env`.
   - Create migrations for `categories`, `products`, `clients`, and `projects` tables.
   - Write a one-time Laravel Seeder that reads the `config/catalog.php` array and populates the new database tables, ensuring zero data loss.
2. **Implement FilamentPHP**
   - Install FilamentPHP to instantly generate an elegant, secure Admin Panel.
   - Create Filament Resources for Products and Categories, enabling non-technical staff to add new machinery or update descriptions via a visual GUI.
3. **Media Management Upgrade**
   - Install `spatie/laravel-medialibrary`.
   - Remove hardcoded image paths. Attach Spatie Media Library to the Eloquent models.
   - Configure Spatie's image conversions so future uploads (JPEGs/PNGs) are automatically converted to optimized WebP formats and resized for thumbnails.
4. **Routing & Controller Refactor**
   - Update `routes/web.php` and Controllers to use Eloquent Route Model Binding (e.g., `Product::where('slug', $slug)->firstOrFail()`) instead of querying the config array.
