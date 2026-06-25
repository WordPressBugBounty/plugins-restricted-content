=== Restrict - membership, site, content and user access restrictions for WordPress ===
Contributors: restrict, tickera, freemius
Donate link: https://restrict.io
Tags: restricted content, restrict content, restrict access, protect content, restrict site
Requires at least: 5.1
Tested up to: 7.0
Stable tag: 2.3.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Restrict content easily to logged in users, members with a specific role or user capability, to it's author, Tickera, Easy Digital Downloads or WooCommerce users and more!

== Description ==

The [Restrict plugin](https://restrict.io/?utm_source=wordpress.org&utm_medium=plugin-page&utm_campaign=main "Restricted Content for WordPress") makes it easy for you to control and protect access to the content of posts, pages and custom post types.

You can restrict, show and hide content to:

* Everyone (all website visitors)
* Logged in users
* Users with a specific role (administrator, editor, author, subscriber, etc)
* Users with a specific [capability](https://codex.wordpress.org/Roles_and_Capabilities "WordPress Roles and Capabilities")
* Author of a post / page
* Tickera users (who purchased any ticket, any ticket for a specific event or a specific ticket type)
* WooCommerce users (who made any purchase or who purchased a specific product)
* WooCommerce users with limited time access to the content after they made a purchase of specific product
* Easy Digital Downloads users (who made any purchase or who purchased a specific product)
* Easy Digital Downloads users with limited time access to the content after they made a purchase of specific product

= Integrations =

Restrict has seamless integrations with [Tickera Event Ticketing System for WordPress](https://tickera.com/ "Event Ticketing System for WordPress"), [Easy Digital Downloads](https://wordpress.org/plugins/easy-digital-downloads/ "Simple Ecommerce for Selling Digital Files on WordPress"), [WooCommerce](https://wordpress.org/plugins/woocommerce/ "WooCommerce is a powerful, extendable eCommerce plugin that helps you sell anything. Beautifully.") allowing you to restrict the sensitive content of pages or posts based on criteria specific for these plugins (i.e. show content to users who purchased a specific ticket or WooCommerce product). Also, Restrict has integration with [Simple URLs](https://wordpress.org/plugins/simple-urls/ "Simple URLs"). With this integration, you can create a redirection in SimpleURLs plugin and then restrict access to that redirect so that if the customer attempts to access redirect URL without fulfilling the required criteria, you can set in Restrict whether to display them a specific page or redirect them to some other, specific URL.

== Premium version features ==

* [Restrict whole post type at once](https://restrict.io/restricted-content-documentation/post-types/) - the post types area of Restrict plugin allows you to select the default content visibility to the existing post types on your website.
* [Restrict part or all the content](https://restrict.io/restricted-content-documentation/shortcodes/) (Shortcodes) - Easily restrict just part of the content on any of your pages or posts making it possible to use the same page or post but with different content based on the set criteria.
* [Restricting a whole post category](https://restrict.io/restricted-content-documentation/rectricting-access-to-post-categories/) - If you want to restrict the whole post category, the premium version of Restrict plugin takes care of that too, allowing you to easily set the criteria based on which a certain post category will be displayed or hidden.
* [Hide and show widgets conditionally](https://restrict.io/restricted-content-documentation/restricting-visibility-of-wordpress-widgets/) - Make your widgets show or disappear for different users! Similarly to the content restriction, you can also restrict which widgets will be shown to what user.
* [Display menu items conditionally](https://restrict.io/restricted-content-documentation/restricting-menu-items/) - You can set different criteria for each menu item and make them displayed or hidden to logged in users, certain user roles, users with specific capability and even logged out users.
* [Login form anywhere](https://restrict.io/restricted-content-documentation/login-form/) - Regardless of whether you’re using Gutenberg or classic editor, we made it easy for you to place the login form on any of your pages or posts.
* Site Lock - Lock the entire website in one simple click and make it accessible only to logged in users! Similarly, you can also restrict access to REST API to only logged in users.
* [White label option](https://restrict.io/restricted-content-documentation/white-label-option/)

= Documentation =

Stuck? Check out the [plugin documentation](https://restrict.io/documentation/?utm_source=wordpress.org&utm_medium=plugin-page&utm_campaign=documentation "Restrict Plugin Documentation")

= EXTERNAL SERVICES =
* [Freemius](https://freemius.com/) manages upgrades to the premium license and handles premium licensing. Privacy policy: https://freemius.com/privacy/
* [Restrict for WordPress](https://restrict.io/) pulls information for upgrading to premium tiers. Privacy policy https://restrict.io/privacy-policy/
* [Easy Digital Downloads integration](https://restrict.io/restricted-content-documentation/easy-digital-downloads-integration/) displays button that links to documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* [Simple URLs](https://restrict.io/restricted-content-documentation/simple-urls/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* [Bots and web crawlers whitelisting](https://restrict.io/restricted-content-documentation/seo-bots-and-web-crawlers-restriction-exclusion/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* [General](https://restrict.io/restricted-content-documentation/general/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* (https://restrict.io/restricted-content-documentation/restricting-the-content-of-page-or-post/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* (https://restrict.io/restricted-content-documentation/woocommerce-integration/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* (href="https://restrict.io/restricted-content-documentation/restricting-menu-items/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/
* (https://restrict.io/restricted-content-documentation/tickera-integration/) displays button that links to the associated documentation page on Restrict's website. Privacy policy https://restrict.io/privacy-policy/

== Installation ==

1. Install plugin
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Admin > Restrict to set up different restriction messages
4. Add restrictions to your posts, pages or various custom post types

== Screenshots ==
1. Main welcome screen with the features descriptions
2. General options
3. Tickera options
4. WooCommerce options
5. Content availability metabox which is visible in a post / page / custom post type screen in the admin panel
6. Content availability metabox for Tickera users
7. Content availability metabox for WooCommerce users

== Changelog ==

= 2.3.5 25/06/2026 =
* Freemius SDK updated to v2.13.1
* Wordpress v7.0 Compliance

= 2.3.4 08/01/2026 =
* New "rsc_redirect_blocked_content" filter hook to redirect restricted content. Argument: $url, $restriction_type
* Woocommerce High-Performance Order Storage Integration.

= 2.3.3 19/02/2025 =
* Additional "rsc_can_access" and "rsc_access_message" filter hooks. Arguments: Bool (default: true), $value_array

= 2.3.2 17/02/2025 =
* Additional patch applied to hide restricted content from search queries.
* Restrict guest user from accessing the content if it is configured with "WooCommerce Users > Specific product > Limited time after purchase".

= 2.3.1 27/01/2025 =
* Freemius SDK updated to v2.11

= 2.3.0 30/12/2024 =
* Broken Woocommerce Shop page's filters. [Fixed]

= 2.2.9 03/12/2024 =
* Hide restricted content from search queries.
* Wordfence security patch

= 2.2.8 28/10/2024 =
* Additional fields sanitization and escaping frontend elements.
* Updated Freemius to the latest SDK v2.9.0.
* Freemius SDK patched with PR:730. Patched Freemius SDK v2.9.0.1. Reference PR: https://github.com/Freemius/wordpress-sdk/pull/730/files
* Wordpress compliance

= 2.2.7 =
* Content Available to 'Woocommerce Users': Sub options hidden on page load. [Fixed]
* Broken select (Chosen) field on RTL text direction. [Fixed]
* Clearing PHP Deprecated function warnings.
* "Woocommerce Users" with specific product and limited time after purchase and HPOS enabled: Content is visible to guest users. Expected behavior should be hidden. [Fixed]
* Wordpress compliance.

= 2.2.6 =
* Woocommerce HPOS compatibility.
* Unable to save styles in visual editor. [Fixed]

= 2.2.5 =
* Security measures (Data sanitization and output escaping).

=2.2.4=
* Updated Freemius SDK

= 2.2.3 =
* Gutenberg block elements: Update deprecated InspectorControls and serverSideRender.

= 2.2.2 =
* PHP Warning: "Trying to access array offset" appearing in admin page. [Fixed]
* "Content Available To" setting: Append ProductID at "Tickera Users" and "Woocommerce Users" Multi-select dropdown menu.

= 2.2.1 =
* Clearing PHP Deprecated Notice: Required parameter follows optional parameter.

= 2.2.0 =
* Wordpress 6.0 compatibility


= 1.0 =
* First release
