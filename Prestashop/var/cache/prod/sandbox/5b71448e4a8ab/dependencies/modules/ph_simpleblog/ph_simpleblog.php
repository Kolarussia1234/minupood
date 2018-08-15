<?php
/*
* @author    Krystian Podemski <podemski.krystian@gmail.com>
* @site
* @copyright  Copyright (c) 2013-2016 Krystian Podemski - www.PrestaHome.com
* @license    You only can use module, nothing more!
*/

if(!defined('THUMBLIB_BASE_PATH') && file_exists(_PS_MODULE_DIR_ . 'ph_simpleblog/assets/phpthumb/ThumbLib.inc.php'))
    require_once _PS_MODULE_DIR_ . 'ph_simpleblog/assets/phpthumb/ThumbLib.inc.php';

require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogHelper.php';
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogCategory.php';
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogPost.php';
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogPostType.php';
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogPostImage.php';
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogTag.php';
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/models/SimpleBlogComment.php';

define('_SIMPLEBLOG_GALLERY_DIR_', _PS_MODULE_DIR_.'ph_simpleblog/galleries/');
define('_SIMPLEBLOG_GALLERY_URL_', _MODULE_DIR_.'ph_simpleblog/galleries/');

if (!defined('_PS_VERSION_')) {
    exit;
}

class ph_simpleblog extends Module
{   
    public $is_16;

    public function __construct()
    {
        $this->name = 'ph_simpleblog';
        $this->tab = 'front_office_features';
        $this->version = '1.5.1';
        $this->author = 'www.PrestaHome.com';
        $this->need_instance = 1;
        $this->is_configurable = 1;
        $this->ps_versions_compliancy['min'] = '1.7';
        $this->ps_versions_compliancy['max'] = _PS_VERSION_;
        $this->secure_key = Tools::encrypt($this->name);
        $this->is_16 = (version_compare(_PS_VERSION_, '1.6.0', '>=') === true) ? true : false;
        $this->controllers = array('single', 'list', 'category', 'categorypage', 'page');
        $this->bootstrap = true;

        if (Shop::isFeatureActive())
        {
            Shop::addTableAssociation('simpleblog_category', array('type' => 'shop'));
            Shop::addTableAssociation('simpleblog_post', array('type' => 'shop'));
        }
        
        parent::__construct();

        $this->displayName = $this->l('Blog for PrestaShop 1.7');
        $this->description = $this->l('Adds a blog to your PrestaShop store');

        $this->confirmUninstall = $this->l('Are you sure you want to delete this module ?');

        if($this->id && !$this->isRegisteredInHook('moduleRoutes'))
        {
            $this->registerHook('moduleRoutes');
        }
        if($this->id && !$this->isRegisteredInHook('displayPrestaHomeBlogAfterPostContent'))
        {
            $this->registerHook('displayPrestaHomeBlogAfterPostContent');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()){
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        // Hooks & Install
        return (parent::install() 
                && $this->prepareModuleSettings() 
                && $this->registerHook('moduleRoutes') 
                && $this->registerHook('displaySimpleBlogPosts') 
                && $this->registerHook('displaySimpleBlogCategories')
                && $this->registerHook('displayHeader') 
                && $this->registerHook('displayTop') 
                && $this->registerHook('displayBackOfficeHeader')
                && $this->registerHook('displayAdminHomeQuickLinks')
                && $this->registerHook('displayPrestaHomeBlogAfterPostContent')
                && $this->registerHook('displayLeftColumn'));
    }

    public function prepareModuleSettings()
    {
        // Database
        $sql = array();
        include (dirname(__file__) . '/init/install_sql.php');
        foreach ($sql as $s) {
            if (!Db::getInstance()->Execute($s)) {
               die('Error while creating DB');
            }
        }

        /**

        Update to 1.6.0.6 problem

        **/
        $sql = 'SHOW COLUMNS FROM `'._DB_PREFIX_.'tab`';
        $tab_columns = Db::getInstance()->executeS($sql);

        $createColumn = true;
        foreach($tab_columns as $column)
        {
            if($column['Field'] == 'hide_host_mode')
                $createColumn = false;
        }

        if($createColumn == true)
        {
            Db::getInstance()->query('ALTER TABLE `'._DB_PREFIX_.'tab` ADD `hide_host_mode` tinyint(1) NOT NULL DEFAULT 0 AFTER  `active`');
        }

        /**

        Tabs

        **/

        // Tabs
        $parent_tab = new Tab();

        $parent_tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $parent_tab->name[$lang['id_lang']] = $this->l('Blog for PrestaShop');

        $parent_tab->class_name = 'AdminSimpleBlog';
        $parent_tab->id_parent = 0;
        $parent_tab->module = $this->name;
        $parent_tab->add();

        // Categories
        $tab = new Tab();       

        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab->name[$lang['id_lang']] = $this->l('Categories');

        $tab->class_name = 'AdminSimpleBlogCategories';
        $tab->id_parent = $parent_tab->id;
        $tab->module = $this->name;
        $tab->add();

        // Posts
        $tab = new Tab();       
        
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab->name[$lang['id_lang']] = $this->l('Posts');

        $tab->class_name = 'AdminSimpleBlogPosts';
        $tab->id_parent = $parent_tab->id;
        $tab->module = $this->name;
        $tab->add();

        // Authors
        // $tab = new Tab();       
        
        // $tab->name = array();
        // foreach (Language::getLanguages(true) as $lang)
        //     $tab->name[$lang['id_lang']] = $this->l('Authors');

        // $tab->class_name = 'AdminSimpleBlogAuthors';
        // $tab->id_parent = $parent_tab->id;
        // $tab->module = $this->name;
        // $tab->add();

        // Comments
        $tab = new Tab();       
        
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab->name[$lang['id_lang']] = $this->l('Comments');

        $tab->class_name = 'AdminSimpleBlogComments';
        $tab->id_parent = $parent_tab->id;
        $tab->module = $this->name;
        $tab->add();

        // Tags
        $tab = new Tab();       
        
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab->name[$lang['id_lang']] = $this->l('Tags');

        $tab->class_name = 'AdminSimpleBlogTags';
        $tab->id_parent = $parent_tab->id;
        $tab->module = $this->name;
        $tab->add();

        // Settings
        $tab = new Tab();       
        
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab->name[$lang['id_lang']] = $this->l('Settings');

        $tab->class_name = 'AdminSimpleBlogSettings';
        $tab->id_parent = $parent_tab->id;
        $tab->module = $this->name;
        $tab->add();

        $id_lang = $this->context->language->id;

        // Default category
        $simple_blog_category = new SimpleBlogCategory();

        foreach (Language::getLanguages(true) as $lang)
            $simple_blog_category->name[$lang['id_lang']] = 'News';

        foreach (Language::getLanguages(true) as $lang)
            $simple_blog_category->link_rewrite[$lang['id_lang']] = 'news';
        $simple_blog_category->add();
        $simple_blog_category->associateTo(Shop::getCompleteListOfShopsID());

        // Post Types
        $default_post_type = new SimpleBlogPostType();
        $default_post_type->name = 'Post';
        $default_post_type->slug = 'post';
        $default_post_type->description = 'Default type of post';
        $default_post_type->add();

        $gallery_post_type = new SimpleBlogPostType();
        $gallery_post_type->name = 'Gallery';
        $gallery_post_type->slug = 'gallery';
        $gallery_post_type->add();

        $external_url_post_type = new SimpleBlogPostType();
        $external_url_post_type->name = 'External URL';
        $external_url_post_type->slug = 'url';
        $external_url_post_type->add();

        $video_post_type = new SimpleBlogPostType();
        $video_post_type->name = 'Video';
        $video_post_type->slug = 'video';
        $video_post_type->add();

        // Settings
        Configuration::updateValue('PH_BLOG_POSTS_PER_PAGE', '10');
        Configuration::updateValue('PH_BLOG_FB_COMMENTS', '1');
        Configuration::updateValue('PH_BLOG_SLUG', 'blog');
        Configuration::updateValue('PH_BLOG_COLUMNS', 'prestashop');
        Configuration::updateValue('PH_BLOG_LAYOUT', 'default');
        Configuration::updateValue('PH_BLOG_LIST_LAYOUT', 'grid');
        Configuration::updateValue('PH_BLOG_GRID_COLUMNS', '2');
        Configuration::updateValue('PH_BLOG_MAIN_TITLE', array($this->context->language->id => 'Blog - whats new?'));
        Configuration::updateValue('PH_BLOG_LOAD_FA', '0');

        Configuration::updateValue('PH_BLOG_DISPLAY_AUTHOR', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_DATE', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_THUMBNAIL', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_CATEGORY', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_SHARER', '1');

        Configuration::updateValue('PH_BLOG_DISPLAY_TAGS', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_DESCRIPTION', '1');

        // Thumbnails
        Configuration::updateValue('PH_BLOG_THUMB_METHOD', '1');
        Configuration::updateValue('PH_BLOG_THUMB_X', '600');
        Configuration::updateValue('PH_BLOG_THUMB_Y', '300');
        Configuration::updateValue('PH_BLOG_THUMB_X_WIDE', '900');
        Configuration::updateValue('PH_BLOG_THUMB_Y_WIDE', '350');

        // Recent Posts
        Configuration::updateValue('PH_RECENTPOSTS_NB', '4');
        Configuration::updateValue('PH_RECENTPOSTS_CAT', '0');
        Configuration::updateValue('PH_RECENTPOSTS_POSITION', 'home');
        Configuration::updateValue('PH_RECENTPOSTS_LAYOUT', 'grid');

        // @Since 1.1.4
        // Category description
        Configuration::updateValue('PH_BLOG_DISPLAY_CAT_DESC', '1');

        // @since 1.1.5
        Configuration::updateValue('PH_BLOG_POST_BY_AUTHOR', '1');

        // @since 1.1.7
        Configuration::updateValue('PH_BLOG_FB_INIT', '1');

        // @since 1.1.8
        Configuration::updateValue('PH_BLOG_DISPLAY_FEATURED', '1');

        // @since 1.1.9
        //Configuration::updateValue('PH_BLOG_INSTALL', '1');

        // @since 1.1.9.5
        Configuration::updateValue('PH_BLOG_DISPLAY_BREADCRUMBS', '1');

        // @since 1.2.0.0
        Configuration::updateValue('PH_BLOG_DISPLAY_CATEGORY_IMAGE', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_LIKES', '1');
        Configuration::updateValue('PH_BLOG_DISPLAY_VIEWS', '1');
        Configuration::updateValue('PH_CATEGORY_IMAGE_X', '900');
        Configuration::updateValue('PH_CATEGORY_IMAGE_Y', '250');
        Configuration::updateValue('PH_CATEGORY_SORTBY', 'position');

        // @since 1.2.0.6
        Configuration::updateValue('PH_BLOG_DATEFORMAT', 'd M Y, H:i');
        Configuration::updateValue('PH_RECENTPOSTS_GRID_COLUMNS', '2');
        Configuration::updateValue('PH_RELATEDPOSTS_GRID_COLUMNS', '2');

        /**
        
        Update 1.2.2.0 - 07.2014

        **/
        
        // Comments
        Configuration::updateGlobalValue('PH_BLOG_NATIVE_COMMENTS', '1');
        Configuration::updateGlobalValue('PH_BLOG_COMMENT_NOTIFICATIONS', '1');

        // Authors
        Configuration::updateGlobalValue('PH_BLOG_NEW_AUTHORS', '0');
        Configuration::updateGlobalValue('PH_BLOG_AUTHOR_INFO', '1');

        /**
        
        Update 1.2.2.3 - 08.2014

        **/
        Configuration::updateGlobalValue('PH_BLOG_COMMENT_AUTO_APPROVAL', '0');

        /**
        
        Update 1.2.2.4 - 08.2014

        **/
        

        /**
        
        Update 1.2.2.5 - 08.2014

        **/
        Configuration::updateGlobalValue('PH_BLOG_COMMENT_ALLOW', '1');
        Configuration::updateGlobalValue('PH_BLOG_COMMENT_STUFF_HIGHLIGHT', '1');
        Configuration::updateGlobalValue('PH_BLOG_COMMENT_NOTIFY_EMAIL', Configuration::get('PS_SHOP_EMAIL'));

        /**
        
        Update 1.2.2.6 - 09.2014

        **/
        Configuration::updateGlobalValue('PH_BLOG_FACEBOOK_MODERATOR', '');
        Configuration::updateGlobalValue('PH_BLOG_FACEBOOK_APP_ID', '');
        Configuration::updateGlobalValue('PH_BLOG_FACEBOOK_COLOR_SCHEME', 'light');

        /**

        Update 1.2.2.8 - 09.2014

        **/
        Configuration::updateGlobalValue('PH_BLOG_DISPLAY_MORE', '1');

        /**

        Update 1.2.2.9 - 09.2014

        **/

        /**

        Update 1.3.1.6 - 10.2014

        **/
        if (function_exists('date_default_timezone_get'))
        {
            $timezone = @date_default_timezone_get();
        }
        else
        {
            $timezone = 'Europe/Warsaw';
        }
        Configuration::updateGlobalValue('PH_BLOG_TIMEZONE', $timezone);

        /**

        Update 1.3.1.9 - 11.2014


        Update 1.3.2.5 - 01.2015

        **/
        Configuration::updateGlobalValue('PH_BLOG_DISPLAY_RELATED', 1);

        /**

        Update 1.3.2.8 - 02.2015

        **/
        Configuration::updateGlobalValue('PH_BLOG_COMMENT_ALLOW_GUEST', false);
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA', true);
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA_SITE_KEY', '');
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA_SECRET_KEY', '');
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_RECAPTCHA_THEME', 'light');

        /**

        Update 1.3.2.9 - 02.2015

        **/
        Configuration::updateGlobalValue('PH_BLOG_RELATED_PRODUCTS_USE_DEFAULT_LIST', false);

        /**

        Update 1.3.3 - 02.2015

        **/
        Configuration::updateGlobalValue('PH_BLOG_ADVERTISING', false);

        /**

        Update 1.4.0 - 06.2015

        **/
        Configuration::updateGlobalValue('PH_BLOG_COMMENTS_SYSTEM', 'native');
        Configuration::updateGlobalValue('PH_BLOG_DISQUS_SHORTNAME', 'blogforprestashop');

        /**
        
            For theme developers - you're welcome!

        **/
        if(file_exists(_PS_MODULE_DIR_.'ph_simpleblog/init/my-install.php'))
            include_once _PS_MODULE_DIR_.'ph_simpleblog/init/my-install.php';

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        // Database
        $sql = array();
        include (dirname(__file__) . '/init/uninstall_sql.php');
        foreach ($sql as $s) {
            if (!Db::getInstance()->Execute($s)) {
                return false;
            }
        }

        // Settings
        Configuration::deleteByName('PH_BLOG_POSTS_PER_PAGE');
        Configuration::deleteByName('PH_BLOG_FB_COMMENTS');
        Configuration::deleteByName('PH_BLOG_SLUG');
        Configuration::deleteByName('PH_BLOG_COLUMNS');
        Configuration::deleteByName('PH_BLOG_LAYOUT');
        Configuration::deleteByName('PH_BLOG_GRID_COLUMNS');
        Configuration::deleteByName('PH_BLOG_MAIN_TITLE');
        Configuration::deleteByName('PH_BLOG_MAIN_TITLE');
        Configuration::deleteByName('PH_BLOG_LOAD_FA');

        Configuration::deleteByName('PH_BLOG_DISPLAY_AUTHOR');
        Configuration::deleteByName('PH_BLOG_DISPLAY_DATE');
        Configuration::deleteByName('PH_BLOG_DISPLAY_THUMBNAIL');
        Configuration::deleteByName('PH_BLOG_DISPLAY_CATEGORY');
        Configuration::deleteByName('PH_BLOG_DISPLAY_SHARER');

        Configuration::deleteByName('PH_BLOG_DISPLAY_TAGS');
        Configuration::deleteByName('PH_BLOG_DISPLAY_DESCRIPTION');

        // Thumbnails
        Configuration::deleteByName('PH_BLOG_THUMB_METHOD');
        Configuration::deleteByName('PH_BLOG_THUMB_X');
        Configuration::deleteByName('PH_BLOG_THUMB_Y');
        Configuration::deleteByName('PH_BLOG_THUMB_X_WIDE');
        Configuration::deleteByName('PH_BLOG_THUMB_Y_WIDE');

        // Recent Posts
        Configuration::deleteByName('PH_RECENTPOSTS_NB');
        Configuration::deleteByName('PH_RECENTPOSTS_CAT');
        Configuration::deleteByName('PH_RECENTPOSTS_POSITION');
        Configuration::deleteByName('PH_RECENTPOSTS_LAYOUT');

        // @Since 1.1.4
        // Category description
        Configuration::deleteByName('PH_BLOG_DISPLAY_CAT_DESC');

        // @since 1.1.5
        Configuration::deleteByName('PH_BLOG_POST_BY_AUTHOR');

        // @since 1.1.7
        Configuration::deleteByName('PH_BLOG_FB_INIT');

        // @since 1.1.8
        Configuration::deleteByName('PH_BLOG_DISPLAY_FEATURED');

        // @since 1.1.9
        Configuration::deleteByName('PH_BLOG_CSS');
        //Configuration::deleteByName('PH_BLOG_INSTALL');

        // @since 1.1.9.5
        Configuration::deleteByName('PH_BLOG_DISPLAY_BREADCRUMBS');

        // @since 1.2.0.0
        Configuration::deleteByName('PH_BLOG_DISPLAY_CATEGORY_IMAGE');
        Configuration::deleteByName('PH_BLOG_DISPLAY_LIKES');
        Configuration::deleteByName('PH_BLOG_DISPLAY_VIEWS');
        Configuration::deleteByName('PH_CATEGORY_IMAGE_X');
        Configuration::deleteByName('PH_CATEGORY_IMAGE_Y');
        Configuration::deleteByName('PH_CATEGORY_SORTBY');

        // @since 1.2.0.6
        Configuration::deleteByName('PH_BLOG_DATEFORMAT');
        Configuration::deleteByName('PH_RECENTPOSTS_GRID_COLUMNS');
        Configuration::deleteByName('PH_RELATEDPOSTS_GRID_COLUMNS');

        /**
        
        Update 1.2.2.0 - 07.2014

        **/
        
        // Comments
        Configuration::deleteByName('PH_BLOG_NATIVE_COMMENTS');
        Configuration::deleteByName('PH_BLOG_COMMENT_NOTIFICATIONS');

        // Authors
        Configuration::deleteByName('PH_BLOG_NEW_AUTHORS');
        Configuration::deleteByName('PH_BLOG_AUTHOR_INFO');

        /**
        
        Update 1.2.2.3 - 08.2014

        **/
        Configuration::deleteByName('PH_BLOG_COMMENT_AUTO_APPROVAL');

        /**
        
        Update 1.2.2.4 - 08.2014

        **/
        

        /**
        
        Update 1.2.2.5 - 08.2014

        **/
        Configuration::deleteByName('PH_BLOG_COMMENT_ALLOW');
        Configuration::deleteByName('PH_BLOG_COMMENT_STUFF_HIGHLIGHT');
        Configuration::deleteByName('PH_BLOG_COMMENT_NOTIFY_EMAIL');

        /**
        
        Update 1.2.2.6 - 09.2014

        **/
        Configuration::deleteByName('PH_BLOG_FACEBOOK_MODERATOR');
        Configuration::deleteByName('PH_BLOG_FACEBOOK_APP_ID');
        Configuration::deleteByName('PH_BLOG_FACEBOOK_COLOR_SCHEME');

        /**

        Update 1.2.2.8 - 09.2014

        **/
        Configuration::deleteByName('PH_BLOG_DISPLAY_MORE');

        /**

        Update 1.2.2.9 - 09.2014

        **/

        /**

        Update 1.3.1.6 - 10.2014

        **/
        Configuration::deleteByName('PH_BLOG_TIMEZONE');

        /**

        Update 1.3.1.9 - 11.2014

        **/

        /**

        Update 1.3.2.5 - 01.2015

        **/
        Configuration::deleteByName('PH_BLOG_DISPLAY_RELATED');

        /**

        Update 1.3.2.8 - 02.2015

        **/
        Configuration::deleteByName('PH_BLOG_COMMENT_ALLOW_GUEST');
        Configuration::deleteByName('PH_BLOG_COMMENTS_RECAPTCHA');
        Configuration::deleteByName('PH_BLOG_COMMENTS_RECAPTCHA_SITE_KEY');
        Configuration::deleteByName('PH_BLOG_COMMENTS_RECAPTCHA_SECRET_KEY');
        Configuration::deleteByName('PH_BLOG_COMMENTS_RECAPTCHA_THEME');

        /**

        Update 1.3.2.9 - 02.2015

        **/
        Configuration::deleteByName('PH_BLOG_RELATED_PRODUCTS_USE_DEFAULT_LIST');

        /**

        Update 1.3.3 - 02.2015

        **/
        Configuration::deleteByName('PH_BLOG_ADVERTISING');

        /**

        Update 1.4.0 - 06.2015

        **/
        Configuration::deleteByName('PH_BLOG_COMMENTS_SYSTEM');

        // Tabs
        $idTabs = array();
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlog');
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlogCategories');
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlogPosts');
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlogTags');
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlogSettings');
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlogComments');
        $idTabs[] = Tab::getIdFromClassName('AdminSimpleBlogAuthors');

        foreach ($idTabs as $idTab) {
            if ($idTab) {
                $tab = new Tab($idTab);
                $tab->delete();
            }
        }

        // For theme developers - you're welcome!
        if(file_exists(_PS_MODULE_DIR_.'ph_simpleblog/init/my-uninstall.php'))
            include_once _PS_MODULE_DIR_.'ph_simpleblog/init/my-uninstall.php';

        return true;
    }

    public function hookDisplayHeader($params)
    {

        $this->context->controller->addCSS($this->_path.'css/ph_simpleblog.css');
        $this->context->controller->addCSS($this->_path.'css/custom.css');

        $this->context->controller->addJS($this->_path.'js/ph_simpleblog.js');


        if(Tools::getValue('module') && Tools::getValue('module') == 'ph_simpleblog' && Tools::getValue('controller') == 'single')
        {
            $controller = Context::getContext()->controller;

            Media::addJsDef(
                array(  
                    'ph_sharing_name' => addcslashes($controller->simpleblog_post_name, "'"),
                    'ph_sharing_url' => addcslashes($controller->simpleblog_post_url, "'"),
                    'ph_sharing_img' => addcslashes($controller->simpleblog_post_thumbnail, "'")
                )
            );

        }
    }

    public function hookModuleRoutes($params)
    {
        $context = Context::getContext();
        $controller = Tools::getValue('controller', 0);

        if($controller == 'AdminSimpleBlogPosts' && isset($_GET['updatesimpleblog_post']))
            return array();

        $blog_slug = Configuration::get('PH_BLOG_SLUG');

        $my_routes = array(
            /**
                Home
            **/
            // Home list
            'module-ph_simpleblog-list' => array(
                'controller' => 'list',
                'rule' => $blog_slug,
                'keywords' => array(),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'ph_simpleblog',
                ),
            ),
            // Home pagination
            'module-ph_simpleblog-page' => array(
                'controller' => 'page',
                'rule' => $blog_slug.'/page/{p}',
                'keywords' => array(
                    'p' =>        array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'p'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'ph_simpleblog',
                ),
            ),

            /**
                Category
            **/
            
            // Category list
            'module-ph_simpleblog-category' => array(
                'controller' => 'category',
                'rule' =>       $blog_slug.'/{sb_category}',
                'keywords' => array(
                    'sb_category' => array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'sb_category'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'ph_simpleblog',
                ),
            ),
            // Category pagination
            'module-ph_simpleblog-categorypage' => array(
                'controller' => 'categorypage',
                'rule' => $blog_slug.'/{sb_category}/page/{p}',
                'keywords' => array(
                    'p' =>        array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'p'),
                    'sb_category' =>        array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'sb_category'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'ph_simpleblog',
                ),
            ),

            'module-ph_simpleblog-single' => array(
                'controller' => 'single',
                'rule' =>       $blog_slug.'/{sb_category}/{rewrite}',
                'keywords' => array(
                    'sb_category' =>       array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'sb_category'),
                    'rewrite' =>        array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'rewrite'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'ph_simpleblog',
                ),
            ),
        );

        return $my_routes;
    }

    public static function myRealURL()
    {
        $force_ssl = null;
        $allow = (int)Configuration::get('PS_REWRITING_SETTINGS');
        $ssl_enable = Configuration::get('PS_SSL_ENABLED');
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $id_shop = $context->shop->id;

        if (!defined('_PS_BASE_URL_'))
            define('_PS_BASE_URL_', Tools::getShopDomain(true));
        if (!defined('_PS_BASE_URL_SSL_'))
            define('_PS_BASE_URL_SSL_', Tools::getShopDomainSsl(true));

        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE') && $id_shop !== null)
            $shop = new Shop($id_shop);
        else
            $shop = Context::getContext()->shop;

        if (isset($ssl) && $ssl === null)
        {
            if ($force_ssl === null)
                $force_ssl = (Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'));
            $ssl = $force_ssl;
        }

        $base = ((isset($ssl) && $ssl && $this->ssl_enable) ? 'https://'.$shop->domain_ssl : 'http://'.$shop->domain);

        $langUrl = Language::getIsoById($id_lang).'/';

        if ((!$allow && in_array($id_shop, array($context->shop->id,  null))) || !Language::isMultiLanguageActivated($id_shop) || !(int)Configuration::get('PS_REWRITING_SETTINGS', null, null, $id_shop))
            $langUrl = '';

        return $base.$shop->getBaseURI().$langUrl;
    }

    public static function getLink()
    {
        return Context::getContext()->link->getModuleLink('ph_simpleblog', 'list');
    }

    public function hookDisplaySimpleBlogPosts($params)
    {
        return;
        
        $id_lang = $this->context->language->id;

        $posts = SimpleBlogPost::getPosts($id_lang, 5);
        $this->smarty->assign('posts', $posts);

        return $this->display(__FILE__, 'home.tpl');
    }

    public function prepareSimpleBlogCategories()
    {
        $this->context->smarty->assign(array(
            'categories' => SimpleBlogCategory::getCategories($this->context->language->id, true),
        ));
    }

    public function hookDisplaySimpleBlogCategories($params)
    {
        $this->prepareSimpleBlogCategories();

        if(isset($params['template']))
            return $this->display(__FILE__, $params['template'].'.tpl');
        else
            return $this->hookDisplayLeftColumn($params);
    }

    public function hookDisplayLeftColumn($params)
    {
        $this->prepareSimpleBlogCategories();

        return $this->display(__FILE__, 'left-column.tpl');
    }

    public function hookDisplayRightColumn($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookDisplayHome($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookDisplayFooter($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookDisplayAdminHomeQuickLinks()
    {
        return $this->display(__FILE__, 'quick-links.tpl');
    }

    public function hookDisplayBackOfficeHeader()
    {
        if (method_exists($this->context->controller, 'addCSS'))
            $this->context->controller->addCSS(($this->_path).'css/simpleblog-admin.css', 'all');
    }

    public function hookDisplayPrestaHomeBlogAfterPostContent()
    {
        return $this->display(__FILE__, 'after-post-content.tpl');
    }

    public function getContent()
    {
        $this->smarty->assign('module_path', _MODULE_DIR_.'ph_simpleblog/');
        return $this->display(__FILE__, 'views/templates/admin/welcome.tpl');
    }
}
