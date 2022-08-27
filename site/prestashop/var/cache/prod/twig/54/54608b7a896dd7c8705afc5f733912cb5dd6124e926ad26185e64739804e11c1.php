<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__7bc0ccb19e347d421758c3dcfece124d1569fe31a9c0ad8eb996efb526926d93 */
class __TwigTemplate_23fc8ec5a27522804346d32bde84ac8cd22e428f710b6ecdae8011c8fca0a692 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/portfolio/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/portfolio/prestashop/img/app_icon.png\" />

<title>Performance • PS 1787</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PH';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '6775d7af0f54fbe758c0afa3e09e9922';
    var token_admin_orders = tokenAdminOrders = 'f07d7056a0ec768f0735942bdb7c10ef';
    var token_admin_customers = '90d4473a1dcdb8d3bc688ca11abeadc1';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '938373852f6ead9c70d3bc03977172f6';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '460a29b333b6913fa242b24e4deff26c';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/portfolio/prestashop/admin218sdfxte/index.php/improve/modules/catalog/recommended?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA';
    var admin_notification_get_link = '/portfolio/prestashop/admin218sdfxte/index.php/common/notifi";
        // line 42
        echo "cations?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA';
    var admin_notification_push_link = adminNotificationPushLink = '/portfolio/prestashop/admin218sdfxte/index.php/common/notifications/ack?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/portfolio/prestashop/admin218sdfxte/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/admin218sdfxte/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portfolio/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/portfolio\\/prestashop\\/admin218sdfxte\\/\";
var baseDir = \"\\/portfolio\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/portfolio\\/prestashop\\/admin218sdfxte\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\";
var currency = {\"iso_code";
        // line 64
        echo "\":\"PHP\",\"sign\":\"\\u20b1\",\"name\":\"Philippine Piso\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PHP\",\"currencySymbol\":\"\\u20b1\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/admin218sdfxte/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/admin218sdfxte/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/admin218sdfxte/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/pres";
        // line 82
        echo "tashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/portfolio/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/portfolio/prestashop/admin218sdfxte/index.php/common/notifications?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/portfolio\\/prestashop\\/admin218sdfxte\\/index.php?controller=AdminGamification&token=97feb00afb59f9966d7ad9218dd60b66\";
            var current_id_tab = 105;
        </script>

";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminperformance\"
  data-base-url=\"/portfolio/prestashop/admin218sdfxte/index.php\"  data-token=\"vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminDashboard&amp;token=bc2d10cfc745b2ae62b55cb1a674063a\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9d4bade6904f17c340cd6873b4b0c532\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php/improve/modules/manage?token=e91c884579934860d8f3ada3b8785261\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php/sell/catalog/categories/new?token=e91c884579934860d8f3ada3b8785261\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php/sell/catalog/products/new?token=e91c884579934860d8f3ada3b8785261\"
          ";
        // line 140
        echo "       data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5d600331cc524fd216a74f22dda62687\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminOrders&amp;token=f07d7056a0ec768f0735942bdb7c10ef\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"165\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminQuickAccesses&token=b354b079e4fa39d58870c7c0c2ee3486\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminQuickAccesses&token=b354b079e4fa39d58870c7c0c2ee3486\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminSearch&amp;token=6e4515b26f7c2c8a3c2c291e1d6058f2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group";
        // line 179
        echo "\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Mod";
        // line 194
        echo "ule name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/portfolio/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
       ";
        // line 249
        echo "     >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a65c79cafc26d0c6bbf8fa805f146b2e\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from";
        // line 298
        echo " <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/portfolio/prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Presta</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/employees/1/edit?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=p";
        // line 337
        echo "rofile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminLogin&amp;logout=1&amp;token=50f495c14d0f436a788489c1e164d5b7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/employees/toggle-navigation?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/portfolio/prestashop/admin218sdfxt";
        // line 365
        echo "e/index.php?controller=AdminDashboard&amp;token=bc2d10cfc745b2ae62b55cb1a674063a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/orders/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/orders/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
         ";
        // line 403
        echo "                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/orders/invoices/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/orders/credit-slips/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/orders/delivery-slips/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCarts&amp;token=a65c79cafc26d0c6bbf8fa805f146b2e\" class=\"link\"> Shopping Carts";
        // line 430
        echo "
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/catalog/products?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/catalog/products?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/portfolio/prest";
        // line 463
        echo "ashop/admin218sdfxte/index.php/sell/catalog/categories?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/catalog/monitoring/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminAttributesGroups&amp;token=f3e112196a7649d2be8c76fc7da97ccd\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/catalog/brands/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                           ";
        // line 492
        echo "   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/attachments/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCartRules&amp;token=5d600331cc524fd216a74f22dda62687\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/stocks/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/customers/?_token=vwusWVrm2m8vk638Ml";
        // line 522
        echo "gipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/customers/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/addresses/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"l";
        // line 554
        echo "ink-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCustomerThreads&amp;token=938373852f6ead9c70d3bc03977172f6\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCustomerThreads&amp;token=938373852f6ead9c70d3bc03977172f6\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/sell/customer-service/order-messages/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                           ";
        // line 581
        echo "       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminReturn&amp;token=91d86643857c7d5d4832d5e354cd9761\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/modules/metrics/legacy/stats?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/modules/metrics/legacy/stats?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D3";
        // line 610
        echo "0M0TlE5yx0dA\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/modules/metrics?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/modules/manage?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" clas";
        // line 648
        echo "s=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/modules/manage?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/modules/addons/modules/catalog?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/design/themes/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub";
        // line 677
        echo "-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/design/themes/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/modules/addons/themes/catalog?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/design/mail_theme/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Email Theme
                                </a>
                              </li>

         ";
        // line 706
        echo "                                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/design/cms-pages/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/design/modules/positions/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminImages&amp;token=686e8feeb373cc4048fd32bf83fb501c\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/";
        // line 734
        echo "modules/link-widget/list?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCarriers&amp;token=99d4b2871acb14f92462a102cfed78b9\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminCarriers&amp;token=99d4b2871acb14f92462a102cfed78b9\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
          ";
        // line 766
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/shipping/preferences/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/payment/payment_methods?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/payment/payment_methods?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Payment Methods
                                </a>
                              </li>

           ";
        // line 796
        echo "                                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/payment/preferences?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/international/localization/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/inde";
        // line 825
        echo "x.php/improve/international/localization/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/international/zones/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/international/taxes/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/improve/international/translations/settings?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                  ";
        // line 855
        echo "                            
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminPsfacebookModule&amp;token=3ebc0fb20563df61b46a7f3a23bbf8e4\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminPsfacebookModule&amp;token=3ebc0fb20563df61b46a7f3a23bbf8e4\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ab147626b40fda475dd65a178f49b624\" class=\"link\"> Google
 ";
        // line 883
        echo "                               </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/preferences/preferences?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/preferences/preferences?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> General
                                </a>
                             ";
        // line 919
        echo " </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/order-preferences/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/product-preferences/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/customer-preferences/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
        ";
        // line 949
        echo "                        <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/contacts/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/shop/seo-urls/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminSearchConf&amp;token=a74c1e8506f7bcaeff6edb7b45bb2ff9\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminGamification&amp;token=97feb00afb59f9966d7ad9218dd60b66\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              ";
        // line 977
        echo "</ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/system-information/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/system-information/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <";
        // line 1006
        echo "a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/performance/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/administration/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/emails/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/import/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
          ";
        // line 1036
        echo "                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/employees/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/sql-requests/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/logs/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/webservice-keys/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Webservice
           ";
        // line 1063
        echo "                     </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/feature-flags/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/performance/?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/performance/clear-cache?_token=vwus";
        // line 1112
        echo "WVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/portfolio/prestashop/admin218sdfxte/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Den/Help?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/portfolio/prestashop/admin218sdfxte/index.php/configure/advanced/performance/clear-cache?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/portfolio/prestashop/admin218";
        // line 1152
        echo "sdfxte/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Den/Help?_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended Modules and Services',
        'Close': 'Close',
      },
      recommendedModulesUrl: '/portfolio/prestashop/admin218sdfxte/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=vwusWVrm2m8vk638MlgipF0W3EYm4D30M0TlE5yx0dA',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1188
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/portfolio/prestashop/admin218sdfxte/index.php?controller=AdminDashboard&amp;token=bc2d10cfc745b2ae62b55cb1a674063a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=prestashopboys%40gmail.com&amp;firstname=Presta&amp;lastname=Boys&amp;website=http%3A%2F%2Flocalhost%2Fportfolio%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/portfolio/prestashop/admin218sdfxte/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />";
        // line 1235
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=prestashopboys%40gmail.com&amp;firstname=Presta&amp;lastname=Boys&amp;website=http%3A%2F%2Flocalhost%2Fportfolio%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" cla";
        // line 1276
        echo "ss=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1296
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1188
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1296
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__7bc0ccb19e347d421758c3dcfece124d1569fe31a9c0ad8eb996efb526926d93";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1456 => 1296,  1439 => 1188,  1430 => 105,  1421 => 1296,  1399 => 1276,  1356 => 1235,  1303 => 1188,  1265 => 1152,  1223 => 1112,  1172 => 1063,  1143 => 1036,  1111 => 1006,  1080 => 977,  1050 => 949,  1018 => 919,  980 => 883,  950 => 855,  918 => 825,  887 => 796,  855 => 766,  821 => 734,  791 => 706,  760 => 677,  729 => 648,  689 => 610,  658 => 581,  629 => 554,  595 => 522,  563 => 492,  532 => 463,  497 => 430,  468 => 403,  428 => 365,  398 => 337,  357 => 298,  306 => 249,  249 => 194,  232 => 179,  191 => 140,  151 => 105,  126 => 82,  106 => 64,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7bc0ccb19e347d421758c3dcfece124d1569fe31a9c0ad8eb996efb526926d93", "");
    }
}
