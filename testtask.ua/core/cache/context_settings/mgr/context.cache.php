<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeCacheUpdate' => 
    array (
      5 => '5',
    ),
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnDocFormPrerender' => 
    array (
      2 => '2',
      1 => '1',
    ),
    'OnDocFormSave' => 
    array (
      2 => '2',
    ),
    'OnEmptyTrash' => 
    array (
      3 => '3',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnHandleRequest' => 
    array (
      4 => '4',
      2 => '2',
      6 => '6',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      1 => '1',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnResourceDuplicate' => 
    array (
      2 => '2',
    ),
    'OnRichTextEditorRegister' => 
    array (
      1 => '1',
    ),
    'OnSiteRefresh' => 
    array (
      7 => '7',
    ),
    'OnSnipFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Tagger',
      'description' => 'This plugin inject Tagger tab into Resource panel and handles saving of tags.',
      'editor_type' => '0',
      'category' => '1',
      'cache_type' => '0',
      'plugincode' => '/**
 * Tagger
 *
 * DESCRIPTION
 *
 * This plugin inject JS to add Tab with tag groups into Resource panel
 */

$corePath = $modx->getOption(\'tagger.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/tagger/\');
/** @var Tagger $tagger */
$tagger = $modx->getService(
    \'tagger\',
    \'Tagger\',
    $corePath . \'model/tagger/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Tagger\' . $modx->event->name;
$modx->loadClass(\'TaggerPlugin\', $tagger->getOption(\'modelPath\') . \'tagger/events/\', true, true);
$modx->loadClass($className, $tagger->getOption(\'modelPath\') . \'tagger/events/\', true, true);

if (class_exists($className)) {
    /** @var TaggerPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'QuipResourceCleaner',
      'description' => 'Cleans up threads when a Resource is removed.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Handles removal of threads if a Resource is deleted.
 * 
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return;

switch ($modx->event->name) {
    case \'OnEmptyTrash\':
        foreach ($scriptProperties[\'ids\'] as $id) {
            if (empty($id)) continue;

            $threads = $modx->getCollection(\'quipThread\',array(\'resource\' => $id));
            foreach ($threads as $thread) {
                $modx->log(modX::LOG_LEVEL_INFO,\'[Quip] Removing thread: \'.$thread->get(\'name\'));
                $thread->remove();
            }
        }
        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'lowerCaseUrl',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Плагин для переадресации с url с UpperCase на LoverCase
 */
$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        if($modx->context->get(\'key\') != "mgr"){
            if(isset($_GET[\'rewrite-strtolower-url\'])) {
                $url = $_GET[\'rewrite-strtolower-url\'];
                unset($_GET[\'rewrite-strtolower-url\']);
                $params = http_build_query($_GET);
                if(strlen($params)) {
                    $params = \'?\' . $params;
                }
                $modx->sendRedirect(\'http://\' . $_SERVER[\'HTTP_HOST\'] . \'/\' . strtolower($url) . $params, array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'assets/basetheme-elements/plugins/lowerCaseUrl.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'clearCache',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;
switch($eventName) {
    case \'OnBeforeCacheUpdate\':
        $options = array(\'objects\' => null, \'extensions\' => array(\'.php\', \'.log\'));
        $modx->cacheManager->clearCache(array(\'baseThemeCache/\'),$options);

        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'assets/basetheme-elements/plugins/clearCache.php',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'transferProtocol',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        $isSecure = false;
        if (isset($_SERVER[\'HTTPS\']) && $_SERVER[\'HTTPS\'] == \'on\') {
            $isSecure = true;
        } elseif (!empty($_SERVER[\'HTTP_X_FORWARDED_PROTO\']) && $_SERVER[\'HTTP_X_FORWARDED_PROTO\'] == \'https\' || !empty($_SERVER[\'HTTP_X_FORWARDED_SSL\']) && $_SERVER[\'HTTP_X_FORWARDED_SSL\'] == \'on\') {
            $isSecure = true;
        }

        $REQUEST_PROTOCOL = $isSecure ? \'https\' : \'http\';
        $SYSTEM_PROTOCOL = $modx->getOption(\'server_protocol\');
        if($SYSTEM_PROTOCOL != $REQUEST_PROTOCOL) {
            $url =  str_replace(array("http://","https://"), "", $_SERVER[\'HTTP_HOST\'] . $_SERVER[\'REQUEST_URI\']);
            if($SYSTEM_PROTOCOL == "https")
                $modx->sendRedirect(\'https://\' . $_SERVER[\'HTTP_HOST\'] . $_SERVER[\'REQUEST_URI\'], array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            else
                $modx->sendRedirect(\'http://\' . $_SERVER[\'HTTP_HOST\'] . $_SERVER[\'REQUEST_URI\'], array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
            header("Location:$redirect");
        }
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'assets/basetheme-elements/plugins/transferProtocol.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '12',
      'cache_type' => '0',
      'plugincode' => '/*
 * Handles cache cleanup
 * pThumb
 * Copyright 2013 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

if ($modx->event->name === \'OnSiteRefresh\') {
	if (!$modx->loadClass(\'pThumbCacheCleaner\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load pThumbCacheCleaner class.\');
		return;
	}
	static $pt_settings = array();
	$pThumb = new pThumbCacheCleaner($modx, $pt_settings, array(), true);
	$pThumb->cleanCache();
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 9999,
          'policy' => 
          array (
            'quip.comment_approve' => true,
            'quip.comment_list' => true,
            'quip.comment_list_unapproved' => true,
            'quip.comment_remove' => true,
            'quip.comment_update' => true,
            'quip.thread_list' => true,
            'quip.thread_manage' => true,
            'quip.thread_remove' => true,
            'quip.thread_truncate' => true,
            'quip.thread_view' => true,
            'quip.thread_update' => true,
          ),
        ),
        2 => 
        array (
          'principal' => 2,
          'authority' => 1,
          'policy' => 
          array (
            'about' => false,
            'access_permissions' => false,
            'actions' => false,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => false,
            'class_map' => true,
            'components' => true,
            'content_types' => false,
            'countries' => true,
            'create' => false,
            'credits' => false,
            'customize_forms' => false,
            'dashboards' => false,
            'database' => false,
            'database_truncate' => false,
            'delete_category' => false,
            'delete_chunk' => false,
            'delete_context' => false,
            'delete_document' => true,
            'delete_eventlog' => false,
            'delete_plugin' => false,
            'delete_propertyset' => false,
            'delete_role' => false,
            'delete_snippet' => false,
            'delete_template' => false,
            'delete_tv' => false,
            'delete_user' => false,
            'directory_chmod' => false,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => false,
            'edit_chunk' => false,
            'edit_context' => false,
            'edit_document' => true,
            'edit_locked' => false,
            'edit_plugin' => false,
            'edit_propertyset' => false,
            'edit_role' => false,
            'edit_snippet' => false,
            'edit_template' => false,
            'edit_tv' => false,
            'edit_user' => false,
            'element_tree' => false,
            'empty_cache' => true,
            'error_log_erase' => false,
            'error_log_view' => false,
            'events' => false,
            'export_static' => false,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => false,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => false,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => false,
            'menus' => false,
            'menu_reports' => true,
            'menu_security' => false,
            'menu_site' => true,
            'menu_support' => false,
            'menu_system' => false,
            'menu_tools' => false,
            'menu_user' => true,
            'messages' => false,
            'namespaces' => true,
            'new_category' => false,
            'new_chunk' => false,
            'new_context' => false,
            'new_document' => true,
            'new_document_in_root' => false,
            'new_plugin' => false,
            'new_propertyset' => false,
            'new_role' => false,
            'new_snippet' => false,
            'new_static_resource' => false,
            'new_symlink' => false,
            'new_template' => false,
            'new_tv' => false,
            'new_user' => false,
            'new_weblink' => false,
            'packages' => false,
            'policy_delete' => false,
            'policy_edit' => false,
            'policy_new' => false,
            'policy_save' => false,
            'policy_template_delete' => false,
            'policy_template_edit' => false,
            'policy_template_new' => false,
            'policy_template_save' => false,
            'policy_template_view' => false,
            'policy_view' => false,
            'property_sets' => false,
            'providers' => false,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => false,
            'remove_locks' => false,
            'resourcegroup_delete' => false,
            'resourcegroup_edit' => false,
            'resourcegroup_new' => false,
            'resourcegroup_resource_edit' => false,
            'resourcegroup_resource_list' => false,
            'resourcegroup_save' => false,
            'resourcegroup_view' => false,
            'resource_duplicate' => true,
            'resource_quick_create' => false,
            'resource_quick_update' => false,
            'resource_tree' => true,
            'save' => false,
            'save_category' => false,
            'save_chunk' => false,
            'save_context' => false,
            'save_document' => true,
            'save_plugin' => false,
            'save_propertyset' => false,
            'save_role' => false,
            'save_snippet' => false,
            'save_template' => false,
            'save_tv' => false,
            'save_user' => false,
            'search' => false,
            'settings' => false,
            'sources' => false,
            'source_delete' => false,
            'source_edit' => false,
            'source_save' => false,
            'source_view' => true,
            'steal_locks' => false,
            'tree_show_element_ids' => false,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => false,
            'unpublish_document' => true,
            'usergroup_delete' => false,
            'usergroup_edit' => false,
            'usergroup_new' => false,
            'usergroup_save' => false,
            'usergroup_user_edit' => false,
            'usergroup_user_list' => false,
            'usergroup_view' => false,
            'view' => true,
            'view_category' => false,
            'view_chunk' => false,
            'view_context' => false,
            'view_document' => true,
            'view_element' => false,
            'view_eventlog' => false,
            'view_offline' => false,
            'view_plugin' => false,
            'view_propertyset' => false,
            'view_role' => false,
            'view_snippet' => false,
            'view_sysinfo' => false,
            'view_template' => false,
            'view_tv' => false,
            'view_unpublished' => true,
            'view_user' => false,
            'workspaces' => false,
          ),
        ),
      ),
    ),
  ),
);