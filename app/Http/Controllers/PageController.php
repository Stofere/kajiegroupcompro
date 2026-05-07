<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Helper to recursively localize data based on app locale
     */
    private function localizeData($data, $locale)
    {
        if (is_array($data)) {
            if (isset($data['en']) && isset($data['id'])) {
                return $data[$locale] ?? $data['id'];
            }
            
            foreach ($data as $key => $value) {
                $data[$key] = $this->localizeData($value, $locale);
            }
        }
        
        return $data;
    }

    private function getCatalogData()
    {
        $locale = app()->getLocale();
        $catalog = config('catalog');
        return $this->localizeData($catalog, $locale);
    }

    /**
     * Home page.
     */
    public function home()
    {
        $catalog = $this->getCatalogData();
        $company = $catalog['company'];
        $products = collect($catalog['products'])->take(6);
        $services = $catalog['services'];
        $clients = $catalog['clients'];
        $projects = $catalog['projects'] ?? [];

        return view('home', compact('company', 'products', 'services', 'clients', 'projects'));
    }

    /**
     * About page.
     */
    public function about()
    {
        $catalog = $this->getCatalogData();
        $company = $catalog['company'];
        $services = $catalog['services'];
        $clients = $catalog['clients'];

        return view('about', compact('company', 'services', 'clients'));
    }

    /**
     * Products listing page.
     */
    public function products()
    {
        $catalog = $this->getCatalogData();
        $company = $catalog['company'];
        $products = $catalog['products'];

        return view('products.index', compact('company', 'products'));
    }

    /**
     * Single product detail page.
     */
    public function productShow(string $slug)
    {
        $catalog = $this->getCatalogData();
        $company = $catalog['company'];
        $products = $catalog['products'];
        $product = collect($products)->firstWhere('slug', $slug);

        if (!$product) {
            abort(404);
        }

        // Get related products (same category excluded current)
        $related = collect($products)
            ->reject(fn($p) => $p['slug'] === $slug)
            ->take(3);

        return view('products.show', compact('company', 'product', 'related'));
    }

    /**
     * Clients / Projects page.
     */
    public function clients()
    {
        $catalog = $this->getCatalogData();
        $company = $catalog['company'];
        $clients = $catalog['clients'];
        $projects = $catalog['projects'] ?? [];
        $products = $catalog['products'];

        return view('clients', compact('company', 'clients', 'products', 'projects'));
    }

    /**
     * Contact page.
     */
    public function contact()
    {
        $catalog = $this->getCatalogData();
        $company = $catalog['company'];

        return view('contact', compact('company'));
    }
}
