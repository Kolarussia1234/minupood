<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/a')) {
            // admin_addons_login
            if ('/addons/login' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AddonsController::loginAction',  '_route' => 'admin_addons_login',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_admin_addons_login;
                }

                return $ret;
            }
            not_admin_addons_login:

            // admin_addons_logout
            if ('/addons/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AddonsController::logoutAction',  '_route' => 'admin_addons_logout',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_addons_logout;
                }

                return $ret;
            }
            not_admin_addons_logout:

            if (0 === strpos($pathinfo, '/attribute')) {
                // admin_attribute_get_all
                if ('/attribute/get-all' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getAllAttributesAction',  '_format' => 'json',  '_route' => 'admin_attribute_get_all',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_attribute_get_all;
                    }

                    return $ret;
                }
                not_admin_attribute_get_all:

                // admin_attribute_generator
                if ('/attribute/generator' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::attributesGeneratorAction',  '_route' => 'admin_attribute_generator',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_admin_attribute_generator;
                    }

                    return $ret;
                }
                not_admin_attribute_generator:

                // admin_delete_attribute
                if (preg_match('#^/attribute/(?P<idProduct>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_attribute')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAttributeAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_admin_delete_attribute;
                    }

                    return $ret;
                }
                not_admin_delete_attribute:

                // admin_delete_all_attributes
                if (0 === strpos($pathinfo, '/attribute/delete-all') && preg_match('#^/attribute/delete\\-all(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_all_attributes')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::deleteAllAttributeAction',  'idProduct' => 0,));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_delete_all_attributes;
                    }

                    return $ret;
                }
                not_admin_delete_all_attributes:

                // admin_get_form_images_combination
                if (0 === strpos($pathinfo, '/attribute/product-form-images') && preg_match('#^/attribute/product\\-form\\-images(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_get_form_images_combination')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttributeController::getFormImagesAction',  '_format' => 'json',  'idProduct' => 0,));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_get_form_images_combination;
                    }

                    return $ret;
                }
                not_admin_get_form_images_combination:

            }

            elseif (0 === strpos($pathinfo, '/api')) {
                if (0 === strpos($pathinfo, '/api/stock')) {
                    // api_stock_list_products
                    if ('/api/stock' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock.controller:listProductsAction',  '_route' => 'api_stock_list_products',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_list_products;
                        }

                        return $ret;
                    }
                    not_api_stock_list_products:

                    // api_stock_list_products_export
                    if ('/api/stock/export' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock.controller:listProductsExportAction',  '_route' => 'api_stock_list_products_export',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_list_products_export;
                        }

                        return $ret;
                    }
                    not_api_stock_list_products_export:

                    // api_stock_list_product_combinations
                    if (preg_match('#^/api/stock/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stock_list_product_combinations')), array (  '_controller' => 'prestashop.core.api.stock.controller:listProductsAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_list_product_combinations;
                        }

                        return $ret;
                    }
                    not_api_stock_list_product_combinations:

                    if (0 === strpos($pathinfo, '/api/stock/product')) {
                        // api_stock_edit_product
                        if (preg_match('#^/api/stock/product/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stock_edit_product')), array (  '_controller' => 'prestashop.core.api.stock.controller:editProductAction',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_api_stock_edit_product;
                            }

                            return $ret;
                        }
                        not_api_stock_edit_product:

                        // api_stock_edit_product_combination
                        if (preg_match('#^/api/stock/product/(?P<productId>\\d+)/combination/(?P<combinationId>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stock_edit_product_combination')), array (  '_controller' => 'prestashop.core.api.stock.controller:editProductAction',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_api_stock_edit_product_combination;
                            }

                            return $ret;
                        }
                        not_api_stock_edit_product_combination:

                        // api_stock_bulk_edit_products
                        if ('/api/stock/products' === $pathinfo) {
                            $ret = array (  '_controller' => 'prestashop.core.api.stock.controller:bulkEditProductsAction',  '_route' => 'api_stock_bulk_edit_products',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_api_stock_bulk_edit_products;
                            }

                            return $ret;
                        }
                        not_api_stock_bulk_edit_products:

                    }

                }

                // api_stock_list_suppliers
                if ('/api/suppliers' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.supplier.controller:listSuppliersAction',  '_route' => 'api_stock_list_suppliers',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stock_list_suppliers;
                    }

                    return $ret;
                }
                not_api_stock_list_suppliers:

                if (0 === strpos($pathinfo, '/api/movements')) {
                    // api_stock_list_movements
                    if ('/api/movements' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsAction',  '_route' => 'api_stock_list_movements',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_list_movements;
                        }

                        return $ret;
                    }
                    not_api_stock_list_movements:

                    // api_stock_product_list_movements
                    if (0 === strpos($pathinfo, '/api/movements/product') && preg_match('#^/api/movements/product/(?P<productId>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stock_product_list_movements')), array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_product_list_movements;
                        }

                        return $ret;
                    }
                    not_api_stock_product_list_movements:

                    // api_stock_list_movements_employees
                    if ('/api/movements/employees' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsEmployeesAction',  '_route' => 'api_stock_list_movements_employees',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_list_movements_employees;
                        }

                        return $ret;
                    }
                    not_api_stock_list_movements_employees:

                    // api_stock_list_movements_types
                    if ('/api/movements/types' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.stock_movement.controller:listMovementsTypesAction',  '_route' => 'api_stock_list_movements_types',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_stock_list_movements_types;
                        }

                        return $ret;
                    }
                    not_api_stock_list_movements_types:

                }

                // api_stock_list_manufacturers
                if ('/api/manufacturers' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.manufacturer.controller:listManufacturersAction',  '_route' => 'api_stock_list_manufacturers',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stock_list_manufacturers;
                    }

                    return $ret;
                }
                not_api_stock_list_manufacturers:

                // api_stock_list_categories
                if ('/api/categories' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.category.controller:listCategoriesAction',  '_route' => 'api_stock_list_categories',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stock_list_categories;
                    }

                    return $ret;
                }
                not_api_stock_list_categories:

                // api_stock_list_attributes
                if ('/api/attributes' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.attribute.controller:listAttributesAction',  '_route' => 'api_stock_list_attributes',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stock_list_attributes;
                    }

                    return $ret;
                }
                not_api_stock_list_attributes:

                // api_stock_list_features
                if ('/api/features' === $pathinfo) {
                    $ret = array (  '_controller' => 'prestashop.core.api.feature.controller:listFeaturesAction',  '_route' => 'api_stock_list_features',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stock_list_features;
                    }

                    return $ret;
                }
                not_api_stock_list_features:

                // api_i18n_translations_list
                if (0 === strpos($pathinfo, '/api/i18n') && preg_match('#^/api/i18n/(?P<page>\\w+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_i18n_translations_list')), array (  '_controller' => 'prestashop.core.api.i18n.controller:listTranslationAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_i18n_translations_list;
                    }

                    return $ret;
                }
                not_api_i18n_translations_list:

                if (0 === strpos($pathinfo, '/api/translation')) {
                    // api_translation_domains_tree
                    if (0 === strpos($pathinfo, '/api/translation/tree') && preg_match('#^/api/translation/tree/(?P<lang>[^/]++)/(?P<type>[^/]++)(?:/(?P<selected>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_translation_domains_tree')), array (  '_controller' => 'prestashop.core.api.translation.controller:listTreeAction',  'selected' => NULL,));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_translation_domains_tree;
                        }

                        return $ret;
                    }
                    not_api_translation_domains_tree:

                    // api_translation_domain_catalog
                    if (preg_match('#^/api/translation/(?P<locale>[^/]++)/(?P<domain>[^/]++)(?:/(?P<theme>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_translation_domain_catalog')), array (  '_controller' => 'prestashop.core.api.translation.controller:listDomainTranslationAction',  'theme' => NULL,));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_translation_domain_catalog;
                        }

                        return $ret;
                    }
                    not_api_translation_domain_catalog:

                    // api_translation_value_edit
                    if ('/api/translation/edit' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.translation.controller:translationEditAction',  '_route' => 'api_translation_value_edit',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_translation_value_edit;
                        }

                        return $ret;
                    }
                    not_api_translation_value_edit:

                    // api_translation_value_reset
                    if ('/api/translation/reset' === $pathinfo) {
                        $ret = array (  '_controller' => 'prestashop.core.api.translation.controller:translationResetAction',  '_route' => 'api_translation_value_reset',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_translation_value_reset;
                        }

                        return $ret;
                    }
                    not_api_translation_value_reset:

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/product')) {
            if (0 === strpos($pathinfo, '/product/catalog')) {
                // admin_product_catalog
                if (preg_match('#^/product/catalog(?:/(?P<offset>last|\\d+)(?:/(?P<limit>_limit|last|\\d+)(?:/(?P<orderBy>last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering)(?:/(?P<sortOrder>last|asc|desc))?)?)?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_catalog')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogAction',  '_legacy_controller' => 'AdminProducts',  'limit' => 'last',  'offset' => 0,  'orderBy' => 'last',  'sortOrder' => 'last',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_product_catalog;
                    }

                    return $ret;
                }
                not_admin_product_catalog:

                // admin_product_catalog_filters
                if (0 === strpos($pathinfo, '/product/catalog_filters') && preg_match('#^/product/catalog_filters(?:/(?P<quantity>none|<=\\d+|<\\d+|>\\d+|>=\\d+)(?:/(?P<active>none|1|0))?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_catalog_filters')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::catalogFiltersAction',  '_legacy_controller' => 'AdminProducts',  'quantity' => 'none',  'active' => 'none',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_product_catalog_filters;
                    }

                    return $ret;
                }
                not_admin_product_catalog_filters:

            }

            // admin_product_list
            if (0 === strpos($pathinfo, '/product/list') && preg_match('#^/product/list(?:/(?P<offset>last|\\d+)(?:/(?P<limit>_limit|last|\\d+)(?:/(?P<orderBy>last|id_product|name|reference|name_category|price|sav_quantity|position|active|position_ordering)(?:/(?P<sortOrder>last|asc|desc)(?:/(?P<view>full|quicknav))?)?)?)?)?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_list')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::listAction',  'limit' => 'last',  'offset' => 0,  'orderBy' => 'last',  'sortOrder' => 'last',  'view' => 'full',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_product_list;
                }

                return $ret;
            }
            not_admin_product_list:

            // admin_product_new
            if ('/product/new' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::newAction',  '_route' => 'admin_product_new',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_product_new;
                }

                return $ret;
            }
            not_admin_product_new:

            // admin_product_form
            if (0 === strpos($pathinfo, '/product/form') && preg_match('#^/product/form/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_form')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::formAction',  '_legacy_controller' => 'AdminProducts',  '_legacy_param_mapper_class' => 'PrestaShop\\PrestaShop\\Adapter\\Product\\AdminProductDataProvider',  '_legacy_param_mapper_method' => 'mapLegacyParametersProductForm',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_product_form;
                }

                return $ret;
            }
            not_admin_product_form:

            // admin_product_use_legacy_setter
            if (0 === strpos($pathinfo, '/product/uselegacy') && preg_match('#^/product/uselegacy/(?P<use>0|1)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_use_legacy_setter')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::shouldUseLegacyPagesAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_product_use_legacy_setter;
                }

                return $ret;
            }
            not_admin_product_use_legacy_setter:

            // admin_product_unit_action
            if (0 === strpos($pathinfo, '/product/unit') && preg_match('#^/product/unit/(?P<action>delete|duplicate|activate|deactivate)/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_unit_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::unitAction',));
                if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                    $allow = array_merge($allow, array('POST', 'GET'));
                    goto not_admin_product_unit_action;
                }

                return $ret;
            }
            not_admin_product_unit_action:

            // admin_product_bulk_action
            if (0 === strpos($pathinfo, '/product/bulk') && preg_match('#^/product/bulk/(?P<action>activate_all|deactivate_all|delete_all|duplicate_all)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_bulk_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::bulkAction',));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_admin_product_bulk_action;
                }

                return $ret;
            }
            not_admin_product_bulk_action:

            // admin_product_mass_edit_action
            if (0 === strpos($pathinfo, '/product/massedit') && preg_match('#^/product/massedit/(?P<action>sort)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_mass_edit_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::massEditAction',));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_admin_product_mass_edit_action;
                }

                return $ret;
            }
            not_admin_product_mass_edit_action:

            // admin_product_export_action
            if (0 === strpos($pathinfo, '/product/export') && preg_match('#^/product/export(?:\\.(?P<_format>csv))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_export_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductController::exportAction',  '_format' => 'csv',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_product_export_action;
                }

                return $ret;
            }
            not_admin_product_export_action:

            if (0 === strpos($pathinfo, '/product/product')) {
                // admin_product_virtual_save_action
                if (0 === strpos($pathinfo, '/product/product/virtual/form/save') && preg_match('#^/product/product/virtual/form/save(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_virtual_save_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::saveAction',  'idProduct' => 0,));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_admin_product_virtual_save_action;
                    }

                    return $ret;
                }
                not_admin_product_virtual_save_action:

                if (0 === strpos($pathinfo, '/product/product/virtual/remove')) {
                    // admin_product_virtual_remove_file_action
                    if (0 === strpos($pathinfo, '/product/product/virtual/remove/file') && preg_match('#^/product/product/virtual/remove/file(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_virtual_remove_file_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeFileAction',  'idProduct' => 0,));
                    }

                    // admin_product_virtual_remove_action
                    if (preg_match('#^/product/product/virtual/remove(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_virtual_remove_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\VirtualProductController::removeAction',  'idProduct' => 0,));
                    }

                }

                // admin_product_attachement_add_action
                if (0 === strpos($pathinfo, '/product/product/attachment/form/add') && preg_match('#^/product/product/attachment/form/add(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_attachement_add_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\AttachementProductController::addAction',  'idProduct' => 0,));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_admin_product_attachement_add_action;
                    }

                    return $ret;
                }
                not_admin_product_attachement_add_action:

                if (0 === strpos($pathinfo, '/product/product/image')) {
                    // admin_product_image_upload
                    if (0 === strpos($pathinfo, '/product/product/image/upload') && preg_match('#^/product/product/image/upload(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_image_upload')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::uploadImageAction',  'idProduct' => 0,));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_admin_product_image_upload;
                        }

                        return $ret;
                    }
                    not_admin_product_image_upload:

                    // admin_product_image_positions
                    if ('/product/product/image/positions' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::updateImagePositionAction',  '_route' => 'admin_product_image_positions',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_admin_product_image_positions;
                        }

                        return $ret;
                    }
                    not_admin_product_image_positions:

                    // admin_product_image_form
                    if (0 === strpos($pathinfo, '/product/product/image/form') && preg_match('#^/product/product/image/form(?:/(?P<idImage>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_image_form')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::formAction',  'idImage' => 0,));
                    }

                    // admin_product_image_delete
                    if (0 === strpos($pathinfo, '/product/product/image/delete') && preg_match('#^/product/product/image/delete(?:/(?P<idImage>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_image_delete')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ProductImageController::deleteAction',  'idImage' => 0,));
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/co')) {
                if (0 === strpos($pathinfo, '/combination')) {
                    // admin_combination_generate_form
                    if (preg_match('#^/combination(?:/(?P<combinationIds>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_combination_generate_form')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::generateCombinationFormAction',  'combinationIds' => 0,));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_admin_combination_generate_form;
                        }

                        return $ret;
                    }
                    not_admin_combination_generate_form:

                    // admin_get_product_combinations
                    if (0 === strpos($pathinfo, '/combination/product-combinations') && preg_match('#^/combination/product\\-combinations(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_get_product_combinations')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CombinationController::getProductCombinationsAction',  '_format' => 'json',  'idProduct' => 0,));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_admin_get_product_combinations;
                        }

                        return $ret;
                    }
                    not_admin_get_product_combinations:

                }

                elseif (0 === strpos($pathinfo, '/common')) {
                    // admin_common_pagination
                    if (0 === strpos($pathinfo, '/common/pagination') && preg_match('#^/common/pagination(?:/(?P<offset>\\d+)(?:/(?P<limit>\\d+)(?:/(?P<total>\\d+)(?:/(?P<view>full|quicknav))?)?)?)?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_common_pagination')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::paginationAction',  'offset' => 0,  'limit' => 20,  'total' => 0,  'view' => 'full',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_admin_common_pagination;
                        }

                        return $ret;
                    }
                    not_admin_common_pagination:

                    // admin_common_recommended_modules
                    if (0 === strpos($pathinfo, '/common/recommended_modules') && preg_match('#^/common/recommended_modules/(?P<domain>[^/]++)(?:/(?P<limit>\\d+)(?:/(?P<randomize>0|1))?)?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_common_recommended_modules')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::recommendedModulesAction',  'limit' => 0,  'randomize' => 0,));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_admin_common_recommended_modules;
                        }

                        return $ret;
                    }
                    not_admin_common_recommended_modules:

                    // admin_common_sidebar
                    if (0 === strpos($pathinfo, '/common/sidebar') && preg_match('#^/common/sidebar/(?P<url>[^/]++)(?:/(?P<title>[^/]++)(?:/(?P<footer>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_common_sidebar')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CommonController::renderSidebarAction',  'title' => '',  'footer' => '',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_admin_common_sidebar;
                        }

                        return $ret;
                    }
                    not_admin_common_sidebar:

                }

                elseif (0 === strpos($pathinfo, '/configure/advanced')) {
                    if (0 === strpos($pathinfo, '/configure/advanced/logs')) {
                        // admin_logs
                        if ('/configure/advanced/logs' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::indexAction',  '_legacy_controller' => 'AdminLogs',  '_route' => 'admin_logs',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_logs;
                            }

                            return $ret;
                        }
                        not_admin_logs:

                        // admin_search_logs
                        if ('/configure/advanced/logs_search' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::searchAction',  '_legacy_controller' => 'AdminLogs',  '_route' => 'admin_search_logs',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_search_logs;
                            }

                            return $ret;
                        }
                        not_admin_search_logs:

                        // admin_logs_save
                        if ('/configure/advanced/logs' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::processFormAction',  '_legacy_controller' => 'AdminLogs',  '_route' => 'admin_logs_save',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_logs_save;
                            }

                            return $ret;
                        }
                        not_admin_logs_save:

                        // admin_logs_delete
                        if ('/configure/advanced/logs' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController::deleteAllAction',  '_legacy_controller' => 'AdminLogs',  '_route' => 'admin_logs_delete',);
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_admin_logs_delete;
                            }

                            return $ret;
                        }
                        not_admin_logs_delete:

                    }

                    elseif (0 === strpos($pathinfo, '/configure/advanced/system_information')) {
                        // admin_system_information
                        if ('/configure/advanced/system_information' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController::indexAction',  '_legacy_controller' => 'AdminInformation',  '_route' => 'admin_system_information',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_system_information;
                            }

                            return $ret;
                        }
                        not_admin_system_information:

                        // admin_system_information_check_files
                        if ('/configure/advanced/system_information/files' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController::displayCheckFilesAction',  '_legacy_controller' => 'AdminInformation',  '_route' => 'admin_system_information_check_files',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_system_information_check_files;
                            }

                            return $ret;
                        }
                        not_admin_system_information_check_files:

                    }

                    elseif (0 === strpos($pathinfo, '/configure/advanced/performance')) {
                        // admin_performance
                        if ('/configure/advanced/performance' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::indexAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_performance',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_performance;
                            }

                            return $ret;
                        }
                        not_admin_performance:

                        // admin_performance_save
                        if ('/configure/advanced/performance' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::processFormAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_performance_save',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_performance_save;
                            }

                            return $ret;
                        }
                        not_admin_performance_save:

                    }

                    // admin_clear_cache
                    if ('/configure/advanced/clear_cache' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController::clearCacheAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_clear_cache',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_admin_clear_cache;
                        }

                        return $ret;
                    }
                    not_admin_clear_cache:

                    if (0 === strpos($pathinfo, '/configure/advanced/memcache/servers')) {
                        // admin_servers
                        if ('/configure/advanced/memcache/servers' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::listAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_servers',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_servers;
                            }

                            return $ret;
                        }
                        not_admin_servers:

                        // admin_servers_add
                        if ('/configure/advanced/memcache/servers' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::addAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_servers_add',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_servers_add;
                            }

                            return $ret;
                        }
                        not_admin_servers_add:

                        // admin_servers_delete
                        if ('/configure/advanced/memcache/servers' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::deleteAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_servers_delete',);
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_admin_servers_delete;
                            }

                            return $ret;
                        }
                        not_admin_servers_delete:

                        // admin_servers_test
                        if ('/configure/advanced/memcache/servers/test' === $pathinfo && $request->isXmlHttpRequest()) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController::testAction',  '_legacy_controller' => 'AdminPerformance',  '_route' => 'admin_servers_test',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_servers_test;
                            }

                            return $ret;
                        }
                        not_admin_servers_test:

                    }

                    elseif (0 === strpos($pathinfo, '/configure/advanced/administration')) {
                        // admin_administration
                        if ('/configure/advanced/administration' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::indexAction',  '_legacy_controller' => 'AdminAdminPreferences',  '_route' => 'admin_administration',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_administration;
                            }

                            return $ret;
                        }
                        not_admin_administration:

                        // admin_administration_save
                        if ('/configure/advanced/administration' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController::processFormAction',  '_legacy_controller' => 'AdminAdminPreferences',  '_route' => 'admin_administration_save',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_administration_save;
                            }

                            return $ret;
                        }
                        not_admin_administration_save:

                    }

                    // admin_import
                    if ('/configure/advanced/import' === $pathinfo) {
                        $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::importAction',  '_legacy_controller' => 'AdminImport',  '_route' => 'admin_import',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_import;
                        }

                        return $ret;
                    }
                    not_admin_import:

                    if (0 === strpos($pathinfo, '/configure/advanced/import/file')) {
                        // admin_import_file_upload
                        if ('/configure/advanced/import/file/upload' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::uploadAction',  '_legacy_controller' => 'AdminImport',  '_route' => 'admin_import_file_upload',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_import_file_upload;
                            }

                            return $ret;
                        }
                        not_admin_import_file_upload:

                        // admin_import_file_delete
                        if ('/configure/advanced/import/file/delete' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::deleteAction',  '_legacy_controller' => 'AdminImport',  '_route' => 'admin_import_file_delete',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_import_file_delete;
                            }

                            return $ret;
                        }
                        not_admin_import_file_delete:

                        // admin_import_file_download
                        if ('/configure/advanced/import/file/download' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController::downloadAction',  '_legacy_controller' => 'AdminImport',  '_route' => 'admin_import_file_download',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_import_file_download;
                            }

                            return $ret;
                        }
                        not_admin_import_file_download:

                    }

                }

                elseif (0 === strpos($pathinfo, '/configure/shop')) {
                    if (0 === strpos($pathinfo, '/configure/shop/preferences')) {
                        // admin_preferences
                        if ('/configure/shop/preferences' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController::indexAction',  '_legacy_controller' => 'AdminPreferences',  '_route' => 'admin_preferences',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_preferences;
                            }

                            return $ret;
                        }
                        not_admin_preferences:

                        // admin_preferences_save
                        if ('/configure/shop/preferences' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController::processFormAction',  '_legacy_controller' => 'AdminPreferences',  '_route' => 'admin_preferences_save',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_preferences_save;
                            }

                            return $ret;
                        }
                        not_admin_preferences_save:

                    }

                    elseif (0 === strpos($pathinfo, '/configure/shop/product_preferences')) {
                        // admin_product_preferences
                        if ('/configure/shop/product_preferences' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::indexAction',  '_legacy_controller' => 'AdminPPreferences',  '_route' => 'admin_product_preferences',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_product_preferences;
                            }

                            return $ret;
                        }
                        not_admin_product_preferences:

                        // admin_product_preferences_process
                        if ('/configure/shop/product_preferences' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController::processAction',  '_legacy_controller' => 'AdminPPreferences',  '_route' => 'admin_product_preferences_process',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_product_preferences_process;
                            }

                            return $ret;
                        }
                        not_admin_product_preferences_process:

                    }

                    elseif (0 === strpos($pathinfo, '/configure/shop/maintenance')) {
                        // admin_maintenance
                        if ('/configure/shop/maintenance' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController::indexAction',  '_legacy_controller' => 'AdminMaintenance',  '_route' => 'admin_maintenance',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_maintenance;
                            }

                            return $ret;
                        }
                        not_admin_maintenance:

                        // admin_maintenance_save
                        if ('/configure/shop/maintenance' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController::processFormAction',  '_legacy_controller' => 'AdminMaintenance',  '_route' => 'admin_maintenance_save',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_maintenance_save;
                            }

                            return $ret;
                        }
                        not_admin_maintenance_save:

                    }

                    elseif (0 === strpos($pathinfo, '/configure/shop/customer_preferences')) {
                        // admin_customer_preferences
                        if ('/configure/shop/customer_preferences' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController::indexAction',  '_legacy_controller' => 'AdminCustomerPreferences',  '_route' => 'admin_customer_preferences',);
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_admin_customer_preferences;
                            }

                            return $ret;
                        }
                        not_admin_customer_preferences:

                        // admin_customer_preferences_process
                        if ('/configure/shop/customer_preferences' === $pathinfo) {
                            $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController::processAction',  '_legacy_controller' => 'AdminCustomerPreferences',  '_route' => 'admin_customer_preferences_process',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_admin_customer_preferences_process;
                            }

                            return $ret;
                        }
                        not_admin_customer_preferences_process:

                    }

                }

            }

            // admin_category_simple_add_form
            if ('/category/form/add/simple' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::addSimpleCategoryFormAction',  '_route' => 'admin_category_simple_add_form',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_admin_category_simple_add_form;
                }

                return $ret;
            }
            not_admin_category_simple_add_form:

            // admin_get_ajax_categories
            if (0 === strpos($pathinfo, '/category/getList') && preg_match('#^/category/getList(?:/(?P<limit>\\d+))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_get_ajax_categories')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\CategoryController::getAjaxCategoriesAction',  '_format' => 'json',  'limit' => 20,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_get_ajax_categories;
                }

                return $ret;
            }
            not_admin_get_ajax_categories:

        }

        // admin_feature_get_feature_values
        if (0 === strpos($pathinfo, '/feature/get-feature-values') && preg_match('#^/feature/get\\-feature\\-values(?:/(?P<idFeature>\\d+))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_feature_get_feature_values')), array (  'idFeature' => 0,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\FeatureController::getFeatureValuesAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_admin_feature_get_feature_values;
            }

            return $ret;
        }
        not_admin_feature_get_feature_values:

        if (0 === strpos($pathinfo, '/module')) {
            // admin_module_cart
            if (0 === strpos($pathinfo, '/module/cart') && preg_match('#^/module/cart/(?P<moduleId>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_cart')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::getModuleCartAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_module_cart;
                }

                return $ret;
            }
            not_admin_module_cart:

            if (0 === strpos($pathinfo, '/module/catalog')) {
                // admin_module_catalog
                if ('/module/catalog' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::catalogAction',  '_legacy_controller' => 'AdminModulesCatalog',  '_route' => 'admin_module_catalog',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_module_catalog;
                    }

                    return $ret;
                }
                not_admin_module_catalog:

                // admin_module_catalog_refresh
                if (0 === strpos($pathinfo, '/module/catalog/refresh') && preg_match('#^/module/catalog/refresh(?:/(?P<category>[^/]++)(?:/(?P<keyword>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_catalog_refresh')), array (  'category' => NULL,  'keyword' => NULL,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::refreshCatalogAction',  '_legacy_controller' => 'AdminModulesCatalog',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_module_catalog_refresh;
                    }

                    return $ret;
                }
                not_admin_module_catalog_refresh:

                // admin_module_catalog_post
                if ('/module/catalog/recommended' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::getPreferredModulesAction',  '_legacy_controller' => 'AdminModulesCatalog',  '_route' => 'admin_module_catalog_post',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_module_catalog_post;
                    }

                    return $ret;
                }
                not_admin_module_catalog_post:

            }

            elseif (0 === strpos($pathinfo, '/module/manage')) {
                // admin_module_manage
                if (preg_match('#^/module/manage(?:/(?P<category>[^/]++)(?:/(?P<keyword>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_manage')), array (  'category' => NULL,  'keyword' => NULL,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::manageAction',  '_legacy_controller' => 'AdminModulesManage',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_module_manage;
                    }

                    return $ret;
                }
                not_admin_module_manage:

                if (0 === strpos($pathinfo, '/module/manage/action')) {
                    // admin_module_manage_action
                    if (preg_match('#^/module/manage/action/(?P<action>install|uninstall|enable|disable|enable_mobile|disable_mobile|reset|upgrade)/(?P<module_name>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_manage_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::moduleAction',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_admin_module_manage_action;
                        }

                        return $ret;
                    }
                    not_admin_module_manage_action:

                    // admin_module_configure_action
                    if (0 === strpos($pathinfo, '/module/manage/action/configure') && preg_match('#^/module/manage/action/configure/(?P<module_name>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_configure_action')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::configureModuleAction',  '_legacy_controller' => 'AdminModules',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_module_configure_action;
                        }

                        return $ret;
                    }
                    not_admin_module_configure_action:

                }

                // admin_module_manage_action_bulk
                if (0 === strpos($pathinfo, '/module/manage/bulk') && preg_match('#^/module/manage/bulk/(?P<action>install|uninstall|configure|enable|disable|reset|upgrade)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_manage_action_bulk')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::moduleAction',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_admin_module_manage_action_bulk;
                    }

                    return $ret;
                }
                not_admin_module_manage_action_bulk:

                // admin_module_manage_update_all
                if ('/module/manage/update/all' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::moduleAction',  '_route' => 'admin_module_manage_update_all',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_admin_module_manage_update_all;
                    }

                    return $ret;
                }
                not_admin_module_manage_update_all:

            }

            // admin_module_import
            if ('/module/import' === $pathinfo) {
                $ret = array (  'module_name' => NULL,  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::importModuleAction',  '_route' => 'admin_module_import',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_admin_module_import;
                }

                return $ret;
            }
            not_admin_module_import:

            if (0 === strpos($pathinfo, '/module/notifications')) {
                // admin_module_notification
                if ('/module/notifications' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::notificationAction',  '_legacy_controller' => 'AdminModulesNotifications',  '_route' => 'admin_module_notification',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_module_notification;
                    }

                    return $ret;
                }
                not_admin_module_notification:

                // admin_module_notification_count
                if ('/module/notifications/count' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\ModuleController::notificationsCountAction',  '_legacy_controller' => 'AdminModulesNotifications',  '_route' => 'admin_module_notification_count',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_module_notification_count;
                    }

                    return $ret;
                }
                not_admin_module_notification_count:

            }

            // admin_module_addons_store
            if ('/module/addons-store' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\Improve\\AddonsStoreController::indexAction',  '_legacy_controller' => 'AdminAddonsCatalog',  '_route' => 'admin_module_addons_store',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_module_addons_store;
                }

                return $ret;
            }
            not_admin_module_addons_store:

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/specific-price')) {
                // admin_specific_price_list
                if (0 === strpos($pathinfo, '/specific-price/list') && preg_match('#^/specific\\-price/list(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_specific_price_list')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::listAction',  '_format' => 'json',  'idProduct' => 0,));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_specific_price_list;
                    }

                    return $ret;
                }
                not_admin_specific_price_list:

                // admin_specific_price_add
                if ('/specific-price/add' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::addAction',  '_route' => 'admin_specific_price_add',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_admin_specific_price_add;
                    }

                    return $ret;
                }
                not_admin_specific_price_add:

                // admin_delete_specific_price
                if (0 === strpos($pathinfo, '/specific-price/delete') && preg_match('#^/specific\\-price/delete(?:/(?P<idSpecificPrice>\\d+))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_specific_price')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController::deleteAction',  'idSpecificPrice' => 0,));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_delete_specific_price;
                    }

                    return $ret;
                }
                not_admin_delete_specific_price:

            }

            // admin_supplier_refresh_product_supplier_combination_form
            if (0 === strpos($pathinfo, '/supplier/refresh-product-supplier-combination-form') && preg_match('#^/supplier/refresh\\-product\\-supplier\\-combination\\-form(?:/(?P<idProduct>\\d+)(?:/(?P<supplierIds>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_supplier_refresh_product_supplier_combination_form')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SupplierController::refreshProductSupplierCombinationFormAction',  'supplierIds' => 0,  'idProduct' => 0,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_supplier_refresh_product_supplier_combination_form;
                }

                return $ret;
            }
            not_admin_supplier_refresh_product_supplier_combination_form:

            // admin_security_compromised
            if ('/security/compromised' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\SecurityController::compromisedAccessAction',  '_route' => 'admin_security_compromised',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_security_compromised;
                }

                return $ret;
            }
            not_admin_security_compromised:

            if (0 === strpos($pathinfo, '/stock')) {
                // admin_stock_overview
                if ('/stock' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\StockController::overviewAction',  '_route' => 'admin_stock_overview',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_stock_overview;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_stock_overview'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_stock_overview;
                    }

                    return $ret;
                }
                not_admin_stock_overview:

                // admin_stock_movements_overview
                if ('/stock/movements' === $pathinfo) {
                    $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\StockController::overviewAction',  '_route' => 'admin_stock_movements_overview',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_stock_movements_overview;
                    }

                    return $ret;
                }
                not_admin_stock_movements_overview:

            }

        }

        // admin_warehouse_refresh_product_warehouse_combination_form
        if (0 === strpos($pathinfo, '/warehouse/refresh-product-warehouse-combination-form') && preg_match('#^/warehouse/refresh\\-product\\-warehouse\\-combination\\-form(?:/(?P<idProduct>\\d+))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_warehouse_refresh_product_warehouse_combination_form')), array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\WarehouseController::refreshProductWarehouseCombinationFormAction',  'idProduct' => 0,));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_admin_warehouse_refresh_product_warehouse_combination_form;
            }

            return $ret;
        }
        not_admin_warehouse_refresh_product_warehouse_combination_form:

        if (0 === strpos($pathinfo, '/international/translations')) {
            // admin_international_translation_overview
            if ('/international/translations' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::overviewAction',  '_route' => 'admin_international_translation_overview',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_admin_international_translation_overview;
                }

                return $ret;
            }
            not_admin_international_translation_overview:

            // admin_international_translations_list
            if ('/international/translations/list' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::listAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => 'admin_international_translations_list',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_international_translations_list;
                }

                return $ret;
            }
            not_admin_international_translations_list:

            // admin_international_translations_module
            if ('/international/translations/module' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::moduleAction',  '_route' => 'admin_international_translations_module',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_admin_international_translations_module;
                }

                return $ret;
            }
            not_admin_international_translations_module:

            // admin_international_translations_export_theme
            if ('/international/translations/export' === $pathinfo) {
                $ret = array (  '_controller' => 'PrestaShopBundle\\Controller\\Admin\\TranslationsController::exportThemeAction',  '_legacy_controller' => 'AdminTranslations',  '_route' => 'admin_international_translations_export_theme',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_admin_international_translations_export_theme;
                }

                return $ret;
            }
            not_admin_international_translations_export_theme:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
