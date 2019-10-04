<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class phpbb_cache_container extends Symfony\Component\DependencyInjection\ContainerBuilder
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'acl.permissions' => 'getAcl_PermissionsService',
            'alfredoramos.markdown.controller.markdown' => 'getAlfredoramos_Markdown_Controller_MarkdownService',
            'alfredoramos.markdown.helper' => 'getAlfredoramos_Markdown_HelperService',
            'alfredoramos.markdown.listener' => 'getAlfredoramos_Markdown_ListenerService',
            'attachment.delete' => 'getAttachment_DeleteService',
            'attachment.manager' => 'getAttachment_ManagerService',
            'attachment.resync' => 'getAttachment_ResyncService',
            'attachment.upload' => 'getAttachment_UploadService',
            'auth' => 'getAuthService',
            'auth.provider.apache' => 'getAuth_Provider_ApacheService',
            'auth.provider.db' => 'getAuth_Provider_DbService',
            'auth.provider.ldap' => 'getAuth_Provider_LdapService',
            'auth.provider.oauth' => 'getAuth_Provider_OauthService',
            'auth.provider.oauth.service.bitly' => 'getAuth_Provider_Oauth_Service_BitlyService',
            'auth.provider.oauth.service.facebook' => 'getAuth_Provider_Oauth_Service_FacebookService',
            'auth.provider.oauth.service.google' => 'getAuth_Provider_Oauth_Service_GoogleService',
            'auth.provider.oauth.service.twitter' => 'getAuth_Provider_Oauth_Service_TwitterService',
            'auth.provider.oauth.service_collection' => 'getAuth_Provider_Oauth_ServiceCollectionService',
            'auth.provider_collection' => 'getAuth_ProviderCollectionService',
            'avatar.driver.gravatar' => 'getAvatar_Driver_GravatarService',
            'avatar.driver.local' => 'getAvatar_Driver_LocalService',
            'avatar.driver.remote' => 'getAvatar_Driver_RemoteService',
            'avatar.driver.upload' => 'getAvatar_Driver_UploadService',
            'avatar.driver_collection' => 'getAvatar_DriverCollectionService',
            'avatar.manager' => 'getAvatar_ManagerService',
            'cache' => 'getCacheService',
            'cache.driver' => 'getCache_DriverService',
            'captcha.factory' => 'getCaptcha_FactoryService',
            'captcha.plugins.service_collection' => 'getCaptcha_Plugins_ServiceCollectionService',
            'class_loader' => 'getClassLoaderService',
            'class_loader.ext' => 'getClassLoader_ExtService',
            'config' => 'getConfigService',
            'config.php' => 'getConfig_PhpService',
            'config_text' => 'getConfigTextService',
            'console.command.cache.purge' => 'getConsole_Command_Cache_PurgeService',
            'console.command.config.delete' => 'getConsole_Command_Config_DeleteService',
            'console.command.config.get' => 'getConsole_Command_Config_GetService',
            'console.command.config.increment' => 'getConsole_Command_Config_IncrementService',
            'console.command.config.set' => 'getConsole_Command_Config_SetService',
            'console.command.config.set_atomic' => 'getConsole_Command_Config_SetAtomicService',
            'console.command.cron.list' => 'getConsole_Command_Cron_ListService',
            'console.command.cron.run' => 'getConsole_Command_Cron_RunService',
            'console.command.db.list' => 'getConsole_Command_Db_ListService',
            'console.command.db.migrate' => 'getConsole_Command_Db_MigrateService',
            'console.command.db.revert' => 'getConsole_Command_Db_RevertService',
            'console.command.dev.migration_tips' => 'getConsole_Command_Dev_MigrationTipsService',
            'console.command.extension.disable' => 'getConsole_Command_Extension_DisableService',
            'console.command.extension.enable' => 'getConsole_Command_Extension_EnableService',
            'console.command.extension.purge' => 'getConsole_Command_Extension_PurgeService',
            'console.command.extension.show' => 'getConsole_Command_Extension_ShowService',
            'console.command.fixup.fix_left_right_ids' => 'getConsole_Command_Fixup_FixLeftRightIdsService',
            'console.command.fixup.recalculate_email_hash' => 'getConsole_Command_Fixup_RecalculateEmailHashService',
            'console.command.fixup.update_hashes' => 'getConsole_Command_Fixup_UpdateHashesService',
            'console.command.reparser.list' => 'getConsole_Command_Reparser_ListService',
            'console.command.reparser.reparse' => 'getConsole_Command_Reparser_ReparseService',
            'console.command.thumbnail.delete' => 'getConsole_Command_Thumbnail_DeleteService',
            'console.command.thumbnail.generate' => 'getConsole_Command_Thumbnail_GenerateService',
            'console.command.thumbnail.recreate' => 'getConsole_Command_Thumbnail_RecreateService',
            'console.command.update.check' => 'getConsole_Command_Update_CheckService',
            'console.command.user.activate' => 'getConsole_Command_User_ActivateService',
            'console.command.user.add' => 'getConsole_Command_User_AddService',
            'console.command.user.delete' => 'getConsole_Command_User_DeleteService',
            'console.command.user.reclean' => 'getConsole_Command_User_RecleanService',
            'console.command_collection' => 'getConsole_CommandCollectionService',
            'console.exception_subscriber' => 'getConsole_ExceptionSubscriberService',
            'content.visibility' => 'getContent_VisibilityService',
            'controller.helper' => 'getController_HelperService',
            'controller.resolver' => 'getController_ResolverService',
            'core.captcha.plugins.gd' => 'getCore_Captcha_Plugins_GdService',
            'core.captcha.plugins.gd_wave' => 'getCore_Captcha_Plugins_GdWaveService',
            'core.captcha.plugins.nogd' => 'getCore_Captcha_Plugins_NogdService',
            'core.captcha.plugins.qa' => 'getCore_Captcha_Plugins_QaService',
            'core.captcha.plugins.recaptcha' => 'getCore_Captcha_Plugins_RecaptchaService',
            'cron.lock_db' => 'getCron_LockDbService',
            'cron.manager' => 'getCron_ManagerService',
            'cron.task.core.prune_all_forums' => 'getCron_Task_Core_PruneAllForumsService',
            'cron.task.core.prune_forum' => 'getCron_Task_Core_PruneForumService',
            'cron.task.core.prune_notifications' => 'getCron_Task_Core_PruneNotificationsService',
            'cron.task.core.prune_shadow_topics' => 'getCron_Task_Core_PruneShadowTopicsService',
            'cron.task.core.queue' => 'getCron_Task_Core_QueueService',
            'cron.task.core.tidy_cache' => 'getCron_Task_Core_TidyCacheService',
            'cron.task.core.tidy_database' => 'getCron_Task_Core_TidyDatabaseService',
            'cron.task.core.tidy_plupload' => 'getCron_Task_Core_TidyPluploadService',
            'cron.task.core.tidy_search' => 'getCron_Task_Core_TidySearchService',
            'cron.task.core.tidy_sessions' => 'getCron_Task_Core_TidySessionsService',
            'cron.task.core.tidy_warnings' => 'getCron_Task_Core_TidyWarningsService',
            'cron.task.core.update_hashes' => 'getCron_Task_Core_UpdateHashesService',
            'cron.task.text_reparser.pm_text' => 'getCron_Task_TextReparser_PmTextService',
            'cron.task.text_reparser.poll_option' => 'getCron_Task_TextReparser_PollOptionService',
            'cron.task.text_reparser.poll_title' => 'getCron_Task_TextReparser_PollTitleService',
            'cron.task.text_reparser.post_text' => 'getCron_Task_TextReparser_PostTextService',
            'cron.task.text_reparser.user_signature' => 'getCron_Task_TextReparser_UserSignatureService',
            'cron.task_collection' => 'getCron_TaskCollectionService',
            'dbal.conn' => 'getDbal_ConnService',
            'dbal.conn.driver' => 'getDbal_Conn_DriverService',
            'dbal.extractor' => 'getDbal_ExtractorService',
            'dbal.extractor.extractors.mssql_extractor' => 'getDbal_Extractor_Extractors_MssqlExtractorService',
            'dbal.extractor.extractors.mysql_extractor' => 'getDbal_Extractor_Extractors_MysqlExtractorService',
            'dbal.extractor.extractors.oracle_extractor' => 'getDbal_Extractor_Extractors_OracleExtractorService',
            'dbal.extractor.extractors.postgres_extractor' => 'getDbal_Extractor_Extractors_PostgresExtractorService',
            'dbal.extractor.extractors.sqlite3_extractor' => 'getDbal_Extractor_Extractors_Sqlite3ExtractorService',
            'dbal.extractor.factory' => 'getDbal_Extractor_FactoryService',
            'dbal.tools' => 'getDbal_ToolsService',
            'dbal.tools.factory' => 'getDbal_Tools_FactoryService',
            'dispatcher' => 'getDispatcherService',
            'ext.manager' => 'getExt_ManagerService',
            'feed.forum' => 'getFeed_ForumService',
            'feed.forums' => 'getFeed_ForumsService',
            'feed.helper' => 'getFeed_HelperService',
            'feed.news' => 'getFeed_NewsService',
            'feed.overall' => 'getFeed_OverallService',
            'feed.quote_helper' => 'getFeed_QuoteHelperService',
            'feed.topic' => 'getFeed_TopicService',
            'feed.topics' => 'getFeed_TopicsService',
            'feed.topics_active' => 'getFeed_TopicsActiveService',
            'file_downloader' => 'getFileDownloaderService',
            'file_locator' => 'getFileLocatorService',
            'files.factory' => 'getFiles_FactoryService',
            'files.filespec' => 'getFiles_FilespecService',
            'files.types.form' => 'getFiles_Types_FormService',
            'files.types.local' => 'getFiles_Types_LocalService',
            'files.types.remote' => 'getFiles_Types_RemoteService',
            'files.upload' => 'getFiles_UploadService',
            'filesystem' => 'getFilesystemService',
            'group_helper' => 'getGroupHelperService',
            'groupposition.legend' => 'getGroupposition_LegendService',
            'groupposition.teampage' => 'getGroupposition_TeampageService',
            'hook_finder' => 'getHookFinderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel_exception_subscriber' => 'getKernelExceptionSubscriberService',
            'kernel_terminate_subscriber' => 'getKernelTerminateSubscriberService',
            'kinerity.bestanswer.controller' => 'getKinerity_Bestanswer_ControllerService',
            'kinerity.bestanswer.listener' => 'getKinerity_Bestanswer_ListenerService',
            'language' => 'getLanguageService',
            'language.helper.language_file' => 'getLanguage_Helper_LanguageFileService',
            'language.loader' => 'getLanguage_LoaderService',
            'log' => 'getLogService',
            'martin.externallinkinnewwindow.listener' => 'getMartin_Externallinkinnewwindow_ListenerService',
            'martin.externallinkinnewwindow.ucp' => 'getMartin_Externallinkinnewwindow_UcpService',
            'message.form.admin' => 'getMessage_Form_AdminService',
            'message.form.topic' => 'getMessage_Form_TopicService',
            'message.form.user' => 'getMessage_Form_UserService',
            'migrator' => 'getMigratorService',
            'migrator.helper' => 'getMigrator_HelperService',
            'migrator.tool.config' => 'getMigrator_Tool_ConfigService',
            'migrator.tool.config_text' => 'getMigrator_Tool_ConfigTextService',
            'migrator.tool.module' => 'getMigrator_Tool_ModuleService',
            'migrator.tool.permission' => 'getMigrator_Tool_PermissionService',
            'migrator.tool_collection' => 'getMigrator_ToolCollectionService',
            'mimetype.content_guesser' => 'getMimetype_ContentGuesserService',
            'mimetype.extension_guesser' => 'getMimetype_ExtensionGuesserService',
            'mimetype.filebinary_mimetype_guesser' => 'getMimetype_FilebinaryMimetypeGuesserService',
            'mimetype.fileinfo_mimetype_guesser' => 'getMimetype_FileinfoMimetypeGuesserService',
            'mimetype.guesser' => 'getMimetype_GuesserService',
            'mimetype.guesser_collection' => 'getMimetype_GuesserCollectionService',
            'module.manager' => 'getModule_ManagerService',
            'notification.method.board' => 'getNotification_Method_BoardService',
            'notification.method.email' => 'getNotification_Method_EmailService',
            'notification.method.jabber' => 'getNotification_Method_JabberService',
            'notification.method_collection' => 'getNotification_MethodCollectionService',
            'notification.type.admin_activate_user' => 'getNotification_Type_AdminActivateUserService',
            'notification.type.approve_post' => 'getNotification_Type_ApprovePostService',
            'notification.type.approve_topic' => 'getNotification_Type_ApproveTopicService',
            'notification.type.bookmark' => 'getNotification_Type_BookmarkService',
            'notification.type.disapprove_post' => 'getNotification_Type_DisapprovePostService',
            'notification.type.disapprove_topic' => 'getNotification_Type_DisapproveTopicService',
            'notification.type.group_request' => 'getNotification_Type_GroupRequestService',
            'notification.type.group_request_approved' => 'getNotification_Type_GroupRequestApprovedService',
            'notification.type.pm' => 'getNotification_Type_PmService',
            'notification.type.post' => 'getNotification_Type_PostService',
            'notification.type.post_in_queue' => 'getNotification_Type_PostInQueueService',
            'notification.type.quote' => 'getNotification_Type_QuoteService',
            'notification.type.report_pm' => 'getNotification_Type_ReportPmService',
            'notification.type.report_pm_closed' => 'getNotification_Type_ReportPmClosedService',
            'notification.type.report_post' => 'getNotification_Type_ReportPostService',
            'notification.type.report_post_closed' => 'getNotification_Type_ReportPostClosedService',
            'notification.type.topic' => 'getNotification_Type_TopicService',
            'notification.type.topic_in_queue' => 'getNotification_Type_TopicInQueueService',
            'notification.type_collection' => 'getNotification_TypeCollectionService',
            'notification_manager' => 'getNotificationManagerService',
            'pagination' => 'getPaginationService',
            'passwords.driver.bcrypt' => 'getPasswords_Driver_BcryptService',
            'passwords.driver.bcrypt_2y' => 'getPasswords_Driver_Bcrypt2yService',
            'passwords.driver.bcrypt_wcf2' => 'getPasswords_Driver_BcryptWcf2Service',
            'passwords.driver.convert_password' => 'getPasswords_Driver_ConvertPasswordService',
            'passwords.driver.md5_mybb' => 'getPasswords_Driver_Md5MybbService',
            'passwords.driver.md5_phpbb2' => 'getPasswords_Driver_Md5Phpbb2Service',
            'passwords.driver.md5_vb' => 'getPasswords_Driver_Md5VbService',
            'passwords.driver.phpass' => 'getPasswords_Driver_PhpassService',
            'passwords.driver.salted_md5' => 'getPasswords_Driver_SaltedMd5Service',
            'passwords.driver.sha1' => 'getPasswords_Driver_Sha1Service',
            'passwords.driver.sha1_smf' => 'getPasswords_Driver_Sha1SmfService',
            'passwords.driver.sha1_wcf1' => 'getPasswords_Driver_Sha1Wcf1Service',
            'passwords.driver_collection' => 'getPasswords_DriverCollectionService',
            'passwords.driver_helper' => 'getPasswords_DriverHelperService',
            'passwords.helper' => 'getPasswords_HelperService',
            'passwords.manager' => 'getPasswords_ManagerService',
            'passwords.update.lock' => 'getPasswords_Update_LockService',
            'path_helper' => 'getPathHelperService',
            'paul999.mention.controller' => 'getPaul999_Mention_ControllerService',
            'paul999.mention.listener' => 'getPaul999_Mention_ListenerService',
            'paul999.mention.notification.type.mention' => 'getPaul999_Mention_Notification_Type_MentionService',
            'php_ini' => 'getPhpIniService',
            'phpbb.autogroups.admin_controller' => 'getPhpbb_Autogroups_AdminControllerService',
            'phpbb.autogroups.cron.task.autogroups_check' => 'getPhpbb_Autogroups_Cron_Task_AutogroupsCheckService',
            'phpbb.autogroups.helper' => 'getPhpbb_Autogroups_HelperService',
            'phpbb.autogroups.listener' => 'getPhpbb_Autogroups_ListenerService',
            'phpbb.autogroups.manager' => 'getPhpbb_Autogroups_ManagerService',
            'phpbb.autogroups.notification.type.group_added' => 'getPhpbb_Autogroups_Notification_Type_GroupAddedService',
            'phpbb.autogroups.notification.type.group_removed' => 'getPhpbb_Autogroups_Notification_Type_GroupRemovedService',
            'phpbb.autogroups.type.birthdays' => 'getPhpbb_Autogroups_Type_BirthdaysService',
            'phpbb.autogroups.type.lastvisit' => 'getPhpbb_Autogroups_Type_LastvisitService',
            'phpbb.autogroups.type.membership' => 'getPhpbb_Autogroups_Type_MembershipService',
            'phpbb.autogroups.type.posts' => 'getPhpbb_Autogroups_Type_PostsService',
            'phpbb.autogroups.type.warnings' => 'getPhpbb_Autogroups_Type_WarningsService',
            'phpbb.autogroups.type_collection' => 'getPhpbb_Autogroups_TypeCollectionService',
            'phpbb.collapsiblecategories.controller' => 'getPhpbb_Collapsiblecategories_ControllerService',
            'phpbb.collapsiblecategories.listener' => 'getPhpbb_Collapsiblecategories_ListenerService',
            'phpbb.collapsiblecategories.operator' => 'getPhpbb_Collapsiblecategories_OperatorService',
            'phpbb.feed.controller' => 'getPhpbb_Feed_ControllerService',
            'phpbb.help.controller.bbcode' => 'getPhpbb_Help_Controller_BbcodeService',
            'phpbb.help.controller.faq' => 'getPhpbb_Help_Controller_FaqService',
            'phpbb.help.manager' => 'getPhpbb_Help_ManagerService',
            'phpbb.report.controller' => 'getPhpbb_Report_ControllerService',
            'phpbb.report.handler_factory' => 'getPhpbb_Report_HandlerFactoryService',
            'phpbb.report.handlers.report_handler_pm' => 'getPhpbb_Report_Handlers_ReportHandlerPmService',
            'phpbb.report.handlers.report_handler_post' => 'getPhpbb_Report_Handlers_ReportHandlerPostService',
            'phpbb.report.report_reason_list_provider' => 'getPhpbb_Report_ReportReasonListProviderService',
            'phpbb.topicprefixes.admin_controller' => 'getPhpbb_Topicprefixes_AdminControllerService',
            'phpbb.topicprefixes.listener' => 'getPhpbb_Topicprefixes_ListenerService',
            'phpbb.topicprefixes.manager' => 'getPhpbb_Topicprefixes_ManagerService',
            'phpbb.topicprefixes.nestedset_prefixes' => 'getPhpbb_Topicprefixes_NestedsetPrefixesService',
            'phpbb.topicprefixes.table_lock' => 'getPhpbb_Topicprefixes_TableLockService',
            'phpbb.viglink.acp_listener' => 'getPhpbb_Viglink_AcpListenerService',
            'phpbb.viglink.cron.task.viglink' => 'getPhpbb_Viglink_Cron_Task_ViglinkService',
            'phpbb.viglink.helper' => 'getPhpbb_Viglink_HelperService',
            'phpbb.viglink.listener' => 'getPhpbb_Viglink_ListenerService',
            'phpbbstudio.nore.command.reparse_nore' => 'getPhpbbstudio_Nore_Command_ReparseNoreService',
            'phpbbstudio.nore.listener' => 'getPhpbbstudio_Nore_ListenerService',
            'plupload' => 'getPluploadService',
            'profilefields.lang_helper' => 'getProfilefields_LangHelperService',
            'profilefields.manager' => 'getProfilefields_ManagerService',
            'profilefields.type.bool' => 'getProfilefields_Type_BoolService',
            'profilefields.type.date' => 'getProfilefields_Type_DateService',
            'profilefields.type.dropdown' => 'getProfilefields_Type_DropdownService',
            'profilefields.type.googleplus' => 'getProfilefields_Type_GoogleplusService',
            'profilefields.type.int' => 'getProfilefields_Type_IntService',
            'profilefields.type.string' => 'getProfilefields_Type_StringService',
            'profilefields.type.text' => 'getProfilefields_Type_TextService',
            'profilefields.type.url' => 'getProfilefields_Type_UrlService',
            'profilefields.type_collection' => 'getProfilefields_TypeCollectionService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'router.listener' => 'getRouter_ListenerService',
            'routing.chained_resources_locator' => 'getRouting_ChainedResourcesLocatorService',
            'routing.delegated_loader' => 'getRouting_DelegatedLoaderService',
            'routing.helper' => 'getRouting_HelperService',
            'routing.loader.collection' => 'getRouting_Loader_CollectionService',
            'routing.loader.yaml' => 'getRouting_Loader_YamlService',
            'routing.resolver' => 'getRouting_ResolverService',
            'routing.resources_locator.collection' => 'getRouting_ResourcesLocator_CollectionService',
            'routing.resources_locator.default' => 'getRouting_ResourcesLocator_DefaultService',
            'stevotvr.flair.controller.acp.cats' => 'getStevotvr_Flair_Controller_Acp_CatsService',
            'stevotvr.flair.controller.acp.flair' => 'getStevotvr_Flair_Controller_Acp_FlairService',
            'stevotvr.flair.controller.acp.images' => 'getStevotvr_Flair_Controller_Acp_ImagesService',
            'stevotvr.flair.controller.acp.main' => 'getStevotvr_Flair_Controller_Acp_MainService',
            'stevotvr.flair.controller.legend' => 'getStevotvr_Flair_Controller_LegendService',
            'stevotvr.flair.controller.mcp.user' => 'getStevotvr_Flair_Controller_Mcp_UserService',
            'stevotvr.flair.controller.ucp.flair' => 'getStevotvr_Flair_Controller_Ucp_FlairService',
            'stevotvr.flair.cron.task.main' => 'getStevotvr_Flair_Cron_Task_MainService',
            'stevotvr.flair.entity.category' => 'getStevotvr_Flair_Entity_CategoryService',
            'stevotvr.flair.entity.flair' => 'getStevotvr_Flair_Entity_FlairService',
            'stevotvr.flair.listener' => 'getStevotvr_Flair_ListenerService',
            'stevotvr.flair.notification.type.flair' => 'getStevotvr_Flair_Notification_Type_FlairService',
            'stevotvr.flair.operator.category' => 'getStevotvr_Flair_Operator_CategoryService',
            'stevotvr.flair.operator.flair' => 'getStevotvr_Flair_Operator_FlairService',
            'stevotvr.flair.operator.image' => 'getStevotvr_Flair_Operator_ImageService',
            'stevotvr.flair.operator.trigger' => 'getStevotvr_Flair_Operator_TriggerService',
            'stevotvr.flair.operator.user' => 'getStevotvr_Flair_Operator_UserService',
            'symfony_request' => 'getSymfonyRequestService',
            'symfony_response_listener' => 'getSymfonyResponseListenerService',
            'template' => 'getTemplateService',
            'template.twig.environment' => 'getTemplate_Twig_EnvironmentService',
            'template.twig.extensions.collection' => 'getTemplate_Twig_Extensions_CollectionService',
            'template.twig.extensions.debug' => 'getTemplate_Twig_Extensions_DebugService',
            'template.twig.extensions.phpbb' => 'getTemplate_Twig_Extensions_PhpbbService',
            'template.twig.extensions.routing' => 'getTemplate_Twig_Extensions_RoutingService',
            'template.twig.lexer' => 'getTemplate_Twig_LexerService',
            'template.twig.loader' => 'getTemplate_Twig_LoaderService',
            'template_context' => 'getTemplateContextService',
            'text_formatter.data_access' => 'getTextFormatter_DataAccessService',
            'text_formatter.s9e.bbcode_merger' => 'getTextFormatter_S9e_BbcodeMergerService',
            'text_formatter.s9e.factory' => 'getTextFormatter_S9e_FactoryService',
            'text_formatter.s9e.link_helper' => 'getTextFormatter_S9e_LinkHelperService',
            'text_formatter.s9e.parser' => 'getTextFormatter_S9e_ParserService',
            'text_formatter.s9e.quote_helper' => 'getTextFormatter_S9e_QuoteHelperService',
            'text_formatter.s9e.renderer' => 'getTextFormatter_S9e_RendererService',
            'text_formatter.s9e.utils' => 'getTextFormatter_S9e_UtilsService',
            'text_reparser.contact_admin_info' => 'getTextReparser_ContactAdminInfoService',
            'text_reparser.forum_description' => 'getTextReparser_ForumDescriptionService',
            'text_reparser.forum_rules' => 'getTextReparser_ForumRulesService',
            'text_reparser.group_description' => 'getTextReparser_GroupDescriptionService',
            'text_reparser.lock' => 'getTextReparser_LockService',
            'text_reparser.manager' => 'getTextReparser_ManagerService',
            'text_reparser.pm_text' => 'getTextReparser_PmTextService',
            'text_reparser.poll_option' => 'getTextReparser_PollOptionService',
            'text_reparser.poll_title' => 'getTextReparser_PollTitleService',
            'text_reparser.post_text' => 'getTextReparser_PostTextService',
            'text_reparser.user_signature' => 'getTextReparser_UserSignatureService',
            'text_reparser_collection' => 'getTextReparserCollectionService',
            'upload_imagesize' => 'getUploadImagesizeService',
            'user' => 'getUserService',
            'user_loader' => 'getUserLoaderService',
            'version_helper' => 'getVersionHelperService',
            'viewonline_helper' => 'getViewonlineHelperService',
            'vse.dbtool.command.db.tool' => 'getVse_Dbtool_Command_Db_ToolService',
            'vse.dbtool.db.lock' => 'getVse_Dbtool_Db_LockService',
            'vse.dbtool.tool' => 'getVse_Dbtool_ToolService',
            'vse.lightbox.listener' => 'getVse_Lightbox_ListenerService',
        );
        $this->aliases = array(
            'text_formatter.cache' => 'text_formatter.s9e.factory',
            'text_formatter.parser' => 'text_formatter.s9e.parser',
            'text_formatter.renderer' => 'text_formatter.s9e.renderer',
            'text_formatter.utils' => 'text_formatter.s9e.utils',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'acl.permissions' shared service.
     *
     * @return \phpbb\permissions
     */
    protected function getAcl_PermissionsService()
    {
        return $this->services['acl.permissions'] = new \phpbb\permissions($this->get('dispatcher'), $this->get('user'));
    }

    /**
     * Gets the public 'alfredoramos.markdown.controller.markdown' shared service.
     *
     * @return \alfredoramos\markdown\controller\markdown
     */
    protected function getAlfredoramos_Markdown_Controller_MarkdownService()
    {
        return $this->services['alfredoramos.markdown.controller.markdown'] = new \alfredoramos\markdown\controller\markdown($this->get('controller.helper'), $this->get('phpbb.help.manager'), $this->get('template'), $this->get('language'), './../', 'php');
    }

    /**
     * Gets the public 'alfredoramos.markdown.helper' shared service.
     *
     * @return \alfredoramos\markdown\includes\helper
     */
    protected function getAlfredoramos_Markdown_HelperService()
    {
        return $this->services['alfredoramos.markdown.helper'] = new \alfredoramos\markdown\includes\helper();
    }

    /**
     * Gets the public 'alfredoramos.markdown.listener' shared service.
     *
     * @return \alfredoramos\markdown\event\listener
     */
    protected function getAlfredoramos_Markdown_ListenerService()
    {
        return $this->services['alfredoramos.markdown.listener'] = new \alfredoramos\markdown\event\listener($this->get('auth'), $this->get('config'), $this->get('user'), $this->get('request'), $this->get('template'), $this->get('routing.helper'), $this->get('language'), $this->get('alfredoramos.markdown.helper'));
    }

    /**
     * Gets the public 'attachment.delete' service.
     *
     * @return \phpbb\attachment\delete
     */
    protected function getAttachment_DeleteService()
    {
        $a = $this->get('dbal.conn');

        return new \phpbb\attachment\delete($this->get('config'), $a, $this->get('dispatcher'), $this->get('filesystem'), new \phpbb\attachment\resync($a), './../');
    }

    /**
     * Gets the public 'attachment.manager' service.
     *
     * @return \phpbb\attachment\manager
     */
    protected function getAttachment_ManagerService()
    {
        $a = $this->get('dbal.conn');
        $b = $this->get('config');
        $c = $this->get('dispatcher');

        return new \phpbb\attachment\manager(new \phpbb\attachment\delete($b, $a, $c, $this->get('filesystem'), new \phpbb\attachment\resync($a), './../'), new \phpbb\attachment\resync($a), new \phpbb\attachment\upload($this->get('auth'), $this->get('cache'), $b, $this->get('files.upload'), $this->get('language'), $this->get('mimetype.guesser'), $c, $this->get('plupload'), $this->get('user'), './../'));
    }

    /**
     * Gets the public 'attachment.resync' service.
     *
     * @return \phpbb\attachment\resync
     */
    protected function getAttachment_ResyncService()
    {
        return new \phpbb\attachment\resync($this->get('dbal.conn'));
    }

    /**
     * Gets the public 'attachment.upload' service.
     *
     * @return \phpbb\attachment\upload
     */
    protected function getAttachment_UploadService()
    {
        $a = $this->get('language');

        return new \phpbb\attachment\upload($this->get('auth'), $this->get('cache'), $this->get('config'), new \phpbb\files\upload($this->get('filesystem'), $this->get('files.factory'), $a, $this->get('php_ini'), $this->get('request')), $a, $this->get('mimetype.guesser'), $this->get('dispatcher'), $this->get('plupload'), $this->get('user'), './../');
    }

    /**
     * Gets the public 'auth' shared service.
     *
     * @return \phpbb\auth\auth
     */
    protected function getAuthService()
    {
        return $this->services['auth'] = new \phpbb\auth\auth();
    }

    /**
     * Gets the public 'auth.provider.apache' shared service.
     *
     * @return \phpbb\auth\provider\apache
     */
    protected function getAuth_Provider_ApacheService()
    {
        return $this->services['auth.provider.apache'] = new \phpbb\auth\provider\apache($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('request'), $this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'auth.provider.db' shared service.
     *
     * @return \phpbb\auth\provider\db
     */
    protected function getAuth_Provider_DbService()
    {
        return $this->services['auth.provider.db'] = new \phpbb\auth\provider\db($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('request'), $this->get('user'), $this, './../', 'php');
    }

    /**
     * Gets the public 'auth.provider.ldap' shared service.
     *
     * @return \phpbb\auth\provider\ldap
     */
    protected function getAuth_Provider_LdapService()
    {
        return $this->services['auth.provider.ldap'] = new \phpbb\auth\provider\ldap($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('user'));
    }

    /**
     * Gets the public 'auth.provider.oauth' shared service.
     *
     * @return \phpbb\auth\provider\oauth\oauth
     */
    protected function getAuth_Provider_OauthService()
    {
        return $this->services['auth.provider.oauth'] = new \phpbb\auth\provider\oauth\oauth($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('request'), $this->get('user'), 'phpbb_oauth_tokens', 'phpbb_oauth_states', 'phpbb_oauth_accounts', $this->get('auth.provider.oauth.service_collection'), 'phpbb_users', $this, $this->get('dispatcher'), './../', 'php');
    }

    /**
     * Gets the public 'auth.provider.oauth.service.bitly' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\bitly
     */
    protected function getAuth_Provider_Oauth_Service_BitlyService()
    {
        return $this->services['auth.provider.oauth.service.bitly'] = new \phpbb\auth\provider\oauth\service\bitly($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the public 'auth.provider.oauth.service.facebook' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\facebook
     */
    protected function getAuth_Provider_Oauth_Service_FacebookService()
    {
        return $this->services['auth.provider.oauth.service.facebook'] = new \phpbb\auth\provider\oauth\service\facebook($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the public 'auth.provider.oauth.service.google' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\google
     */
    protected function getAuth_Provider_Oauth_Service_GoogleService()
    {
        return $this->services['auth.provider.oauth.service.google'] = new \phpbb\auth\provider\oauth\service\google($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the public 'auth.provider.oauth.service.twitter' shared service.
     *
     * @return \phpbb\auth\provider\oauth\service\twitter
     */
    protected function getAuth_Provider_Oauth_Service_TwitterService()
    {
        return $this->services['auth.provider.oauth.service.twitter'] = new \phpbb\auth\provider\oauth\service\twitter($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the public 'auth.provider.oauth.service_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getAuth_Provider_Oauth_ServiceCollectionService()
    {
        $this->services['auth.provider.oauth.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('auth.provider.oauth.service.bitly');
        $instance->add('auth.provider.oauth.service.facebook');
        $instance->add('auth.provider.oauth.service.google');
        $instance->add('auth.provider.oauth.service.twitter');

        return $instance;
    }

    /**
     * Gets the public 'auth.provider_collection' shared service.
     *
     * @return \phpbb\auth\provider_collection
     */
    protected function getAuth_ProviderCollectionService()
    {
        $this->services['auth.provider_collection'] = $instance = new \phpbb\auth\provider_collection($this, $this->get('config'));

        $instance->add('auth.provider.db');
        $instance->add('auth.provider.apache');
        $instance->add('auth.provider.ldap');
        $instance->add('auth.provider.oauth');

        return $instance;
    }

    /**
     * Gets the public 'avatar.driver.gravatar' shared service.
     *
     * @return \phpbb\avatar\driver\gravatar
     */
    protected function getAvatar_Driver_GravatarService()
    {
        $this->services['avatar.driver.gravatar'] = $instance = new \phpbb\avatar\driver\gravatar($this->get('config'), $this->get('upload_imagesize'), './../', 'php', $this->get('path_helper'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.gravatar');

        return $instance;
    }

    /**
     * Gets the public 'avatar.driver.local' shared service.
     *
     * @return \phpbb\avatar\driver\local
     */
    protected function getAvatar_Driver_LocalService()
    {
        $this->services['avatar.driver.local'] = $instance = new \phpbb\avatar\driver\local($this->get('config'), $this->get('upload_imagesize'), './../', 'php', $this->get('path_helper'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.local');

        return $instance;
    }

    /**
     * Gets the public 'avatar.driver.remote' shared service.
     *
     * @return \phpbb\avatar\driver\remote
     */
    protected function getAvatar_Driver_RemoteService()
    {
        $this->services['avatar.driver.remote'] = $instance = new \phpbb\avatar\driver\remote($this->get('config'), $this->get('upload_imagesize'), './../', 'php', $this->get('path_helper'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.remote');

        return $instance;
    }

    /**
     * Gets the public 'avatar.driver.upload' shared service.
     *
     * @return \phpbb\avatar\driver\upload
     */
    protected function getAvatar_Driver_UploadService()
    {
        $this->services['avatar.driver.upload'] = $instance = new \phpbb\avatar\driver\upload($this->get('config'), './../', 'php', $this->get('filesystem'), $this->get('path_helper'), $this->get('dispatcher'), $this->get('files.factory'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the public 'avatar.driver_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getAvatar_DriverCollectionService()
    {
        $this->services['avatar.driver_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('avatar.driver.gravatar');
        $instance->add('avatar.driver.local');
        $instance->add('avatar.driver.remote');
        $instance->add('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the public 'avatar.manager' shared service.
     *
     * @return \phpbb\avatar\manager
     */
    protected function getAvatar_ManagerService()
    {
        return $this->services['avatar.manager'] = new \phpbb\avatar\manager($this->get('config'), $this->get('dispatcher'), $this->get('avatar.driver_collection'));
    }

    /**
     * Gets the public 'cache' shared service.
     *
     * @return \phpbb\cache\service
     */
    protected function getCacheService()
    {
        return $this->services['cache'] = new \phpbb\cache\service($this->get('cache.driver'), $this->get('config'), $this->get('dbal.conn'), './../', 'php');
    }

    /**
     * Gets the public 'cache.driver' shared service.
     *
     * @return \phpbb\cache\driver\file
     */
    protected function getCache_DriverService()
    {
        return $this->services['cache.driver'] = new \phpbb\cache\driver\file();
    }

    /**
     * Gets the public 'captcha.factory' shared service.
     *
     * @return \phpbb\captcha\factory
     */
    protected function getCaptcha_FactoryService()
    {
        return $this->services['captcha.factory'] = new \phpbb\captcha\factory($this, $this->get('captcha.plugins.service_collection'));
    }

    /**
     * Gets the public 'captcha.plugins.service_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getCaptcha_Plugins_ServiceCollectionService()
    {
        $this->services['captcha.plugins.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('core.captcha.plugins.gd');
        $instance->add('core.captcha.plugins.gd_wave');
        $instance->add('core.captcha.plugins.nogd');
        $instance->add('core.captcha.plugins.qa');
        $instance->add('core.captcha.plugins.recaptcha');

        return $instance;
    }

    /**
     * Gets the public 'class_loader' shared service.
     *
     * @return \phpbb\class_loader
     */
    protected function getClassLoaderService()
    {
        $this->services['class_loader'] = $instance = new \phpbb\class_loader('phpbb\\', './../includes/', 'php');

        $instance->register();
        $instance->set_cache($this->get('cache.driver'));

        return $instance;
    }

    /**
     * Gets the public 'class_loader.ext' shared service.
     *
     * @return \phpbb\class_loader
     */
    protected function getClassLoader_ExtService()
    {
        $this->services['class_loader.ext'] = $instance = new \phpbb\class_loader('\\', './../ext/', 'php');

        $instance->register();
        $instance->set_cache($this->get('cache.driver'));

        return $instance;
    }

    /**
     * Gets the public 'config' shared service.
     *
     * @return \phpbb\config\db
     */
    protected function getConfigService()
    {
        return $this->services['config'] = new \phpbb\config\db($this->get('dbal.conn'), $this->get('cache.driver'), 'phpbb_config');
    }

    /**
     * Gets the public 'config.php' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getConfig_PhpService()
    {
        throw new RuntimeException('You have requested a synthetic service ("config.php"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'config_text' shared service.
     *
     * @return \phpbb\config\db_text
     */
    protected function getConfigTextService()
    {
        return $this->services['config_text'] = new \phpbb\config\db_text($this->get('dbal.conn'), 'phpbb_config_text');
    }

    /**
     * Gets the public 'console.command.cache.purge' shared service.
     *
     * @return \phpbb\console\command\cache\purge
     */
    protected function getConsole_Command_Cache_PurgeService()
    {
        return $this->services['console.command.cache.purge'] = new \phpbb\console\command\cache\purge($this->get('user'), $this->get('cache.driver'), $this->get('dbal.conn'), $this->get('auth'), $this->get('log'), $this->get('config'));
    }

    /**
     * Gets the public 'console.command.config.delete' shared service.
     *
     * @return \phpbb\console\command\config\delete
     */
    protected function getConsole_Command_Config_DeleteService()
    {
        return $this->services['console.command.config.delete'] = new \phpbb\console\command\config\delete($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the public 'console.command.config.get' shared service.
     *
     * @return \phpbb\console\command\config\get
     */
    protected function getConsole_Command_Config_GetService()
    {
        return $this->services['console.command.config.get'] = new \phpbb\console\command\config\get($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the public 'console.command.config.increment' shared service.
     *
     * @return \phpbb\console\command\config\increment
     */
    protected function getConsole_Command_Config_IncrementService()
    {
        return $this->services['console.command.config.increment'] = new \phpbb\console\command\config\increment($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the public 'console.command.config.set' shared service.
     *
     * @return \phpbb\console\command\config\set
     */
    protected function getConsole_Command_Config_SetService()
    {
        return $this->services['console.command.config.set'] = new \phpbb\console\command\config\set($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the public 'console.command.config.set_atomic' shared service.
     *
     * @return \phpbb\console\command\config\set_atomic
     */
    protected function getConsole_Command_Config_SetAtomicService()
    {
        return $this->services['console.command.config.set_atomic'] = new \phpbb\console\command\config\set_atomic($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the public 'console.command.cron.list' shared service.
     *
     * @return \phpbb\console\command\cron\cron_list
     */
    protected function getConsole_Command_Cron_ListService()
    {
        return $this->services['console.command.cron.list'] = new \phpbb\console\command\cron\cron_list($this->get('user'), $this->get('cron.manager'));
    }

    /**
     * Gets the public 'console.command.cron.run' shared service.
     *
     * @return \phpbb\console\command\cron\run
     */
    protected function getConsole_Command_Cron_RunService()
    {
        return $this->services['console.command.cron.run'] = new \phpbb\console\command\cron\run($this->get('user'), $this->get('cron.manager'), $this->get('cron.lock_db'));
    }

    /**
     * Gets the public 'console.command.db.list' shared service.
     *
     * @return \phpbb\console\command\db\list_command
     */
    protected function getConsole_Command_Db_ListService()
    {
        return $this->services['console.command.db.list'] = new \phpbb\console\command\db\list_command($this->get('user'), $this->get('migrator'), $this->get('ext.manager'), $this->get('config'), $this->get('cache'));
    }

    /**
     * Gets the public 'console.command.db.migrate' shared service.
     *
     * @return \phpbb\console\command\db\migrate
     */
    protected function getConsole_Command_Db_MigrateService()
    {
        return $this->services['console.command.db.migrate'] = new \phpbb\console\command\db\migrate($this->get('user'), $this->get('language'), $this->get('migrator'), $this->get('ext.manager'), $this->get('config'), $this->get('cache'), $this->get('log'), $this->get('filesystem'), './../');
    }

    /**
     * Gets the public 'console.command.db.revert' shared service.
     *
     * @return \phpbb\console\command\db\revert
     */
    protected function getConsole_Command_Db_RevertService()
    {
        return $this->services['console.command.db.revert'] = new \phpbb\console\command\db\revert($this->get('user'), $this->get('language'), $this->get('migrator'), $this->get('ext.manager'), $this->get('config'), $this->get('cache'), $this->get('log'), $this->get('filesystem'), './../');
    }

    /**
     * Gets the public 'console.command.dev.migration_tips' shared service.
     *
     * @return \phpbb\console\command\dev\migration_tips
     */
    protected function getConsole_Command_Dev_MigrationTipsService()
    {
        return $this->services['console.command.dev.migration_tips'] = new \phpbb\console\command\dev\migration_tips($this->get('user'), $this->get('ext.manager'));
    }

    /**
     * Gets the public 'console.command.extension.disable' shared service.
     *
     * @return \phpbb\console\command\extension\disable
     */
    protected function getConsole_Command_Extension_DisableService()
    {
        return $this->services['console.command.extension.disable'] = new \phpbb\console\command\extension\disable($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the public 'console.command.extension.enable' shared service.
     *
     * @return \phpbb\console\command\extension\enable
     */
    protected function getConsole_Command_Extension_EnableService()
    {
        return $this->services['console.command.extension.enable'] = new \phpbb\console\command\extension\enable($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the public 'console.command.extension.purge' shared service.
     *
     * @return \phpbb\console\command\extension\purge
     */
    protected function getConsole_Command_Extension_PurgeService()
    {
        return $this->services['console.command.extension.purge'] = new \phpbb\console\command\extension\purge($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the public 'console.command.extension.show' shared service.
     *
     * @return \phpbb\console\command\extension\show
     */
    protected function getConsole_Command_Extension_ShowService()
    {
        return $this->services['console.command.extension.show'] = new \phpbb\console\command\extension\show($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the public 'console.command.fixup.fix_left_right_ids' shared service.
     *
     * @return \phpbb\console\command\fixup\fix_left_right_ids
     */
    protected function getConsole_Command_Fixup_FixLeftRightIdsService()
    {
        return $this->services['console.command.fixup.fix_left_right_ids'] = new \phpbb\console\command\fixup\fix_left_right_ids($this->get('user'), $this->get('dbal.conn'), $this->get('cache.driver'));
    }

    /**
     * Gets the public 'console.command.fixup.recalculate_email_hash' shared service.
     *
     * @return \phpbb\console\command\fixup\recalculate_email_hash
     */
    protected function getConsole_Command_Fixup_RecalculateEmailHashService()
    {
        return $this->services['console.command.fixup.recalculate_email_hash'] = new \phpbb\console\command\fixup\recalculate_email_hash($this->get('user'), $this->get('dbal.conn'));
    }

    /**
     * Gets the public 'console.command.fixup.update_hashes' shared service.
     *
     * @return \phpbb\console\command\fixup\update_hashes
     */
    protected function getConsole_Command_Fixup_UpdateHashesService()
    {
        return $this->services['console.command.fixup.update_hashes'] = new \phpbb\console\command\fixup\update_hashes($this->get('config'), $this->get('user'), $this->get('dbal.conn'), $this->get('passwords.manager'), $this->get('passwords.driver_collection'), array(0 => 'passwords.driver.bcrypt_2y', 1 => 'passwords.driver.bcrypt', 2 => 'passwords.driver.salted_md5', 3 => 'passwords.driver.phpass'));
    }

    /**
     * Gets the public 'console.command.reparser.list' shared service.
     *
     * @return \phpbb\console\command\reparser\list_all
     */
    protected function getConsole_Command_Reparser_ListService()
    {
        return $this->services['console.command.reparser.list'] = new \phpbb\console\command\reparser\list_all($this->get('user'), $this->get('text_reparser_collection'));
    }

    /**
     * Gets the public 'console.command.reparser.reparse' shared service.
     *
     * @return \phpbb\console\command\reparser\reparse
     */
    protected function getConsole_Command_Reparser_ReparseService()
    {
        return $this->services['console.command.reparser.reparse'] = new \phpbb\console\command\reparser\reparse($this->get('user'), $this->get('text_reparser.lock'), $this->get('text_reparser.manager'), $this->get('text_reparser_collection'));
    }

    /**
     * Gets the public 'console.command.thumbnail.delete' shared service.
     *
     * @return \phpbb\console\command\thumbnail\delete
     */
    protected function getConsole_Command_Thumbnail_DeleteService()
    {
        return $this->services['console.command.thumbnail.delete'] = new \phpbb\console\command\thumbnail\delete($this->get('config'), $this->get('user'), $this->get('dbal.conn'), './../');
    }

    /**
     * Gets the public 'console.command.thumbnail.generate' shared service.
     *
     * @return \phpbb\console\command\thumbnail\generate
     */
    protected function getConsole_Command_Thumbnail_GenerateService()
    {
        return $this->services['console.command.thumbnail.generate'] = new \phpbb\console\command\thumbnail\generate($this->get('config'), $this->get('user'), $this->get('dbal.conn'), $this->get('cache'), './../', 'php');
    }

    /**
     * Gets the public 'console.command.thumbnail.recreate' shared service.
     *
     * @return \phpbb\console\command\thumbnail\recreate
     */
    protected function getConsole_Command_Thumbnail_RecreateService()
    {
        return $this->services['console.command.thumbnail.recreate'] = new \phpbb\console\command\thumbnail\recreate($this->get('user'));
    }

    /**
     * Gets the public 'console.command.update.check' shared service.
     *
     * @return \phpbb\console\command\update\check
     */
    protected function getConsole_Command_Update_CheckService()
    {
        return $this->services['console.command.update.check'] = new \phpbb\console\command\update\check($this->get('user'), $this->get('config'), $this, $this->get('language'));
    }

    /**
     * Gets the public 'console.command.user.activate' shared service.
     *
     * @return \phpbb\console\command\user\activate
     */
    protected function getConsole_Command_User_ActivateService()
    {
        return $this->services['console.command.user.activate'] = new \phpbb\console\command\user\activate($this->get('user'), $this->get('dbal.conn'), $this->get('config'), $this->get('language'), $this->get('log'), $this->get('notification_manager'), $this->get('user_loader'), './../', 'php');
    }

    /**
     * Gets the public 'console.command.user.add' shared service.
     *
     * @return \phpbb\console\command\user\add
     */
    protected function getConsole_Command_User_AddService()
    {
        return $this->services['console.command.user.add'] = new \phpbb\console\command\user\add($this->get('user'), $this->get('dbal.conn'), $this->get('config'), $this->get('language'), $this->get('passwords.manager'), './../', 'php');
    }

    /**
     * Gets the public 'console.command.user.delete' shared service.
     *
     * @return \phpbb\console\command\user\delete
     */
    protected function getConsole_Command_User_DeleteService()
    {
        return $this->services['console.command.user.delete'] = new \phpbb\console\command\user\delete($this->get('user'), $this->get('dbal.conn'), $this->get('language'), $this->get('log'), $this->get('user_loader'), './../', 'php');
    }

    /**
     * Gets the public 'console.command.user.reclean' shared service.
     *
     * @return \phpbb\console\command\user\reclean
     */
    protected function getConsole_Command_User_RecleanService()
    {
        return $this->services['console.command.user.reclean'] = new \phpbb\console\command\user\reclean($this->get('user'), $this->get('dbal.conn'), $this->get('language'));
    }

    /**
     * Gets the public 'console.command_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getConsole_CommandCollectionService()
    {
        $this->services['console.command_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('console.command.cache.purge');
        $instance->add('console.command.config.delete');
        $instance->add('console.command.config.increment');
        $instance->add('console.command.config.get');
        $instance->add('console.command.config.set');
        $instance->add('console.command.config.set_atomic');
        $instance->add('console.command.cron.list');
        $instance->add('console.command.cron.run');
        $instance->add('console.command.db.list');
        $instance->add('console.command.db.migrate');
        $instance->add('console.command.db.revert');
        $instance->add('console.command.dev.migration_tips');
        $instance->add('console.command.extension.disable');
        $instance->add('console.command.extension.enable');
        $instance->add('console.command.extension.purge');
        $instance->add('console.command.extension.show');
        $instance->add('console.command.fixup.recalculate_email_hash');
        $instance->add('console.command.fixup.update_hashes');
        $instance->add('console.command.fixup.fix_left_right_ids');
        $instance->add('console.command.reparser.list');
        $instance->add('console.command.reparser.reparse');
        $instance->add('console.command.thumbnail.delete');
        $instance->add('console.command.thumbnail.generate');
        $instance->add('console.command.thumbnail.recreate');
        $instance->add('console.command.update.check');
        $instance->add('console.command.user.activate');
        $instance->add('console.command.user.add');
        $instance->add('console.command.user.delete');
        $instance->add('console.command.user.reclean');
        $instance->add('phpbbstudio.nore.command.reparse_nore');
        $instance->add('vse.dbtool.command.db.tool');

        return $instance;
    }

    /**
     * Gets the public 'console.exception_subscriber' shared service.
     *
     * @return \phpbb\console\exception_subscriber
     */
    protected function getConsole_ExceptionSubscriberService()
    {
        return $this->services['console.exception_subscriber'] = new \phpbb\console\exception_subscriber($this->get('language'));
    }

    /**
     * Gets the public 'content.visibility' shared service.
     *
     * @return \phpbb\content_visibility
     */
    protected function getContent_VisibilityService()
    {
        return $this->services['content.visibility'] = new \phpbb\content_visibility($this->get('auth'), $this->get('config'), $this->get('dispatcher'), $this->get('dbal.conn'), $this->get('user'), './../', 'php', 'phpbb_forums', 'phpbb_posts', 'phpbb_topics', 'phpbb_users');
    }

    /**
     * Gets the public 'controller.helper' shared service.
     *
     * @return \phpbb\controller\helper
     */
    protected function getController_HelperService()
    {
        return $this->services['controller.helper'] = new \phpbb\controller\helper($this->get('template'), $this->get('user'), $this->get('config'), $this->get('symfony_request'), $this->get('request'), $this->get('routing.helper'));
    }

    /**
     * Gets the public 'controller.resolver' shared service.
     *
     * @return \phpbb\controller\resolver
     */
    protected function getController_ResolverService()
    {
        return $this->services['controller.resolver'] = new \phpbb\controller\resolver($this, './../', $this->get('template'));
    }

    /**
     * Gets the public 'core.captcha.plugins.gd' service.
     *
     * @return \phpbb\captcha\plugins\gd
     */
    protected function getCore_Captcha_Plugins_GdService()
    {
        $instance = new \phpbb\captcha\plugins\gd();

        $instance->set_name('core.captcha.plugins.gd');

        return $instance;
    }

    /**
     * Gets the public 'core.captcha.plugins.gd_wave' service.
     *
     * @return \phpbb\captcha\plugins\gd_wave
     */
    protected function getCore_Captcha_Plugins_GdWaveService()
    {
        $instance = new \phpbb\captcha\plugins\gd_wave();

        $instance->set_name('core.captcha.plugins.gd_wave');

        return $instance;
    }

    /**
     * Gets the public 'core.captcha.plugins.nogd' service.
     *
     * @return \phpbb\captcha\plugins\nogd
     */
    protected function getCore_Captcha_Plugins_NogdService()
    {
        $instance = new \phpbb\captcha\plugins\nogd();

        $instance->set_name('core.captcha.plugins.nogd');

        return $instance;
    }

    /**
     * Gets the public 'core.captcha.plugins.qa' service.
     *
     * @return \phpbb\captcha\plugins\qa
     */
    protected function getCore_Captcha_Plugins_QaService()
    {
        $instance = new \phpbb\captcha\plugins\qa('phpbb_captcha_questions', 'phpbb_captcha_answers', 'phpbb_qa_confirm');

        $instance->set_name('core.captcha.plugins.qa');

        return $instance;
    }

    /**
     * Gets the public 'core.captcha.plugins.recaptcha' service.
     *
     * @return \phpbb\captcha\plugins\recaptcha
     */
    protected function getCore_Captcha_Plugins_RecaptchaService()
    {
        $instance = new \phpbb\captcha\plugins\recaptcha();

        $instance->set_name('core.captcha.plugins.recaptcha');

        return $instance;
    }

    /**
     * Gets the public 'cron.lock_db' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getCron_LockDbService()
    {
        return $this->services['cron.lock_db'] = new \phpbb\lock\db('cron_lock', $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the public 'cron.manager' shared service.
     *
     * @return \phpbb\cron\manager
     */
    protected function getCron_ManagerService()
    {
        return $this->services['cron.manager'] = new \phpbb\cron\manager($this->get('cron.task_collection'), './../', 'php');
    }

    /**
     * Gets the public 'cron.task.core.prune_all_forums' shared service.
     *
     * @return \phpbb\cron\task\core\prune_all_forums
     */
    protected function getCron_Task_Core_PruneAllForumsService()
    {
        $this->services['cron.task.core.prune_all_forums'] = $instance = new \phpbb\cron\task\core\prune_all_forums('./../', 'php', $this->get('config'), $this->get('dbal.conn'));

        $instance->set_name('cron.task.core.prune_all_forums');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.prune_forum' shared service.
     *
     * @return \phpbb\cron\task\core\prune_forum
     */
    protected function getCron_Task_Core_PruneForumService()
    {
        $this->services['cron.task.core.prune_forum'] = $instance = new \phpbb\cron\task\core\prune_forum('./../', 'php', $this->get('config'), $this->get('dbal.conn'));

        $instance->set_name('cron.task.core.prune_forum');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.prune_notifications' shared service.
     *
     * @return \phpbb\cron\task\core\prune_notifications
     */
    protected function getCron_Task_Core_PruneNotificationsService()
    {
        $this->services['cron.task.core.prune_notifications'] = $instance = new \phpbb\cron\task\core\prune_notifications($this->get('config'), $this->get('notification_manager'));

        $instance->set_name('cron.task.core.prune_notifications');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.prune_shadow_topics' shared service.
     *
     * @return \phpbb\cron\task\core\prune_shadow_topics
     */
    protected function getCron_Task_Core_PruneShadowTopicsService()
    {
        $this->services['cron.task.core.prune_shadow_topics'] = $instance = new \phpbb\cron\task\core\prune_shadow_topics('./../', 'php', $this->get('config'), $this->get('dbal.conn'), $this->get('log'), $this->get('user'));

        $instance->set_name('cron.task.core.prune_shadow_topics');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.queue' shared service.
     *
     * @return \phpbb\cron\task\core\queue
     */
    protected function getCron_Task_Core_QueueService()
    {
        $this->services['cron.task.core.queue'] = $instance = new \phpbb\cron\task\core\queue('./../', 'php', $this->get('config'), './../cache/production/');

        $instance->set_name('cron.task.core.queue');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.tidy_cache' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_cache
     */
    protected function getCron_Task_Core_TidyCacheService()
    {
        $this->services['cron.task.core.tidy_cache'] = $instance = new \phpbb\cron\task\core\tidy_cache($this->get('config'), $this->get('cache.driver'));

        $instance->set_name('cron.task.core.tidy_cache');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.tidy_database' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_database
     */
    protected function getCron_Task_Core_TidyDatabaseService()
    {
        $this->services['cron.task.core.tidy_database'] = $instance = new \phpbb\cron\task\core\tidy_database('./../', 'php', $this->get('config'));

        $instance->set_name('cron.task.core.tidy_database');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.tidy_plupload' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_plupload
     */
    protected function getCron_Task_Core_TidyPluploadService()
    {
        $this->services['cron.task.core.tidy_plupload'] = $instance = new \phpbb\cron\task\core\tidy_plupload('./../', $this->get('config'), $this->get('log'), $this->get('user'));

        $instance->set_name('cron.task.core.tidy_plupload');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.tidy_search' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_search
     */
    protected function getCron_Task_Core_TidySearchService()
    {
        $this->services['cron.task.core.tidy_search'] = $instance = new \phpbb\cron\task\core\tidy_search('./../', 'php', $this->get('auth'), $this->get('config'), $this->get('dbal.conn'), $this->get('user'), $this->get('dispatcher'));

        $instance->set_name('cron.task.core.tidy_search');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.tidy_sessions' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_sessions
     */
    protected function getCron_Task_Core_TidySessionsService()
    {
        $this->services['cron.task.core.tidy_sessions'] = $instance = new \phpbb\cron\task\core\tidy_sessions($this->get('config'), $this->get('user'));

        $instance->set_name('cron.task.core.tidy_sessions');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.tidy_warnings' shared service.
     *
     * @return \phpbb\cron\task\core\tidy_warnings
     */
    protected function getCron_Task_Core_TidyWarningsService()
    {
        $this->services['cron.task.core.tidy_warnings'] = $instance = new \phpbb\cron\task\core\tidy_warnings('./../', 'php', $this->get('config'));

        $instance->set_name('cron.task.core.tidy_warnings');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.core.update_hashes' shared service.
     *
     * @return \phpbb\cron\task\core\update_hashes
     */
    protected function getCron_Task_Core_UpdateHashesService()
    {
        $this->services['cron.task.core.update_hashes'] = $instance = new \phpbb\cron\task\core\update_hashes($this->get('config'), $this->get('dbal.conn'), $this->get('passwords.update.lock'), $this->get('passwords.manager'), $this->get('passwords.driver_collection'), array(0 => 'passwords.driver.bcrypt_2y', 1 => 'passwords.driver.bcrypt', 2 => 'passwords.driver.salted_md5', 3 => 'passwords.driver.phpass'));

        $instance->set_name('cron.task.core.update_hashes');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.text_reparser.pm_text' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PmTextService()
    {
        $this->services['cron.task.text_reparser.pm_text'] = $instance = new \phpbb\cron\task\text_reparser\reparser($this->get('config'), $this->get('config_text'), $this->get('text_reparser.lock'), $this->get('text_reparser.manager'), $this->get('text_reparser_collection'));

        $instance->set_name('cron.task.text_reparser.pm_text');
        $instance->set_reparser('text_reparser.pm_text');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.text_reparser.poll_option' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PollOptionService()
    {
        $this->services['cron.task.text_reparser.poll_option'] = $instance = new \phpbb\cron\task\text_reparser\reparser($this->get('config'), $this->get('config_text'), $this->get('text_reparser.lock'), $this->get('text_reparser.manager'), $this->get('text_reparser_collection'));

        $instance->set_name('cron.task.text_reparser.poll_option');
        $instance->set_reparser('text_reparser.poll_option');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.text_reparser.poll_title' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PollTitleService()
    {
        $this->services['cron.task.text_reparser.poll_title'] = $instance = new \phpbb\cron\task\text_reparser\reparser($this->get('config'), $this->get('config_text'), $this->get('text_reparser.lock'), $this->get('text_reparser.manager'), $this->get('text_reparser_collection'));

        $instance->set_name('cron.task.text_reparser.poll_title');
        $instance->set_reparser('text_reparser.poll_title');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.text_reparser.post_text' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PostTextService()
    {
        $this->services['cron.task.text_reparser.post_text'] = $instance = new \phpbb\cron\task\text_reparser\reparser($this->get('config'), $this->get('config_text'), $this->get('text_reparser.lock'), $this->get('text_reparser.manager'), $this->get('text_reparser_collection'));

        $instance->set_name('cron.task.text_reparser.post_text');
        $instance->set_reparser('text_reparser.post_text');

        return $instance;
    }

    /**
     * Gets the public 'cron.task.text_reparser.user_signature' shared service.
     *
     * @return \phpbb\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_UserSignatureService()
    {
        $this->services['cron.task.text_reparser.user_signature'] = $instance = new \phpbb\cron\task\text_reparser\reparser($this->get('config'), $this->get('config_text'), $this->get('text_reparser.lock'), $this->get('text_reparser.manager'), $this->get('text_reparser_collection'));

        $instance->set_name('cron.task.text_reparser.user_signature');
        $instance->set_reparser('text_reparser.user_signature');

        return $instance;
    }

    /**
     * Gets the public 'cron.task_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getCron_TaskCollectionService()
    {
        $this->services['cron.task_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('cron.task.core.prune_all_forums');
        $instance->add('cron.task.core.prune_forum');
        $instance->add('cron.task.core.prune_shadow_topics');
        $instance->add('cron.task.core.prune_notifications');
        $instance->add('cron.task.core.queue');
        $instance->add('cron.task.core.tidy_cache');
        $instance->add('cron.task.core.tidy_database');
        $instance->add('cron.task.core.tidy_plupload');
        $instance->add('cron.task.core.tidy_search');
        $instance->add('cron.task.core.tidy_sessions');
        $instance->add('cron.task.core.tidy_warnings');
        $instance->add('cron.task.text_reparser.pm_text');
        $instance->add('cron.task.text_reparser.poll_option');
        $instance->add('cron.task.text_reparser.poll_title');
        $instance->add('cron.task.text_reparser.post_text');
        $instance->add('cron.task.text_reparser.user_signature');
        $instance->add('cron.task.core.update_hashes');
        $instance->add('phpbb.autogroups.cron.task.autogroups_check');
        $instance->add('phpbb.viglink.cron.task.viglink');
        $instance->add('stevotvr.flair.cron.task.main');

        return $instance;
    }

    /**
     * Gets the public 'dbal.conn' shared service.
     *
     * @return \phpbb\db\driver\factory
     */
    protected function getDbal_ConnService()
    {
        return $this->services['dbal.conn'] = new \phpbb\db\driver\factory($this);
    }

    /**
     * Gets the public 'dbal.conn.driver' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getDbal_Conn_DriverService()
    {
        throw new RuntimeException('You have requested a synthetic service ("dbal.conn.driver"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'dbal.extractor' shared service.
     *
     * @return \phpbb\db\extractor\extractor_interface
     */
    protected function getDbal_ExtractorService()
    {
        return $this->services['dbal.extractor'] = $this->get('dbal.extractor.factory')->get();
    }

    /**
     * Gets the public 'dbal.extractor.extractors.mssql_extractor' service.
     *
     * @return \phpbb\db\extractor\mssql_extractor
     */
    protected function getDbal_Extractor_Extractors_MssqlExtractorService()
    {
        return new \phpbb\db\extractor\mssql_extractor('./../', $this->get('request'), $this->get('dbal.conn.driver'));
    }

    /**
     * Gets the public 'dbal.extractor.extractors.mysql_extractor' service.
     *
     * @return \phpbb\db\extractor\mysql_extractor
     */
    protected function getDbal_Extractor_Extractors_MysqlExtractorService()
    {
        return new \phpbb\db\extractor\mysql_extractor('./../', $this->get('request'), $this->get('dbal.conn.driver'));
    }

    /**
     * Gets the public 'dbal.extractor.extractors.oracle_extractor' service.
     *
     * @return \phpbb\db\extractor\oracle_extractor
     */
    protected function getDbal_Extractor_Extractors_OracleExtractorService()
    {
        return new \phpbb\db\extractor\oracle_extractor('./../', $this->get('request'), $this->get('dbal.conn.driver'));
    }

    /**
     * Gets the public 'dbal.extractor.extractors.postgres_extractor' service.
     *
     * @return \phpbb\db\extractor\postgres_extractor
     */
    protected function getDbal_Extractor_Extractors_PostgresExtractorService()
    {
        return new \phpbb\db\extractor\postgres_extractor('./../', $this->get('request'), $this->get('dbal.conn.driver'));
    }

    /**
     * Gets the public 'dbal.extractor.extractors.sqlite3_extractor' service.
     *
     * @return \phpbb\db\extractor\sqlite3_extractor
     */
    protected function getDbal_Extractor_Extractors_Sqlite3ExtractorService()
    {
        return new \phpbb\db\extractor\sqlite3_extractor('./../', $this->get('request'), $this->get('dbal.conn.driver'));
    }

    /**
     * Gets the public 'dbal.extractor.factory' shared service.
     *
     * @return \phpbb\db\extractor\factory
     */
    protected function getDbal_Extractor_FactoryService()
    {
        return $this->services['dbal.extractor.factory'] = new \phpbb\db\extractor\factory($this->get('dbal.conn.driver'), $this);
    }

    /**
     * Gets the public 'dbal.tools' shared service.
     *
     * @return \phpbb\db\tools\tools_interface
     */
    protected function getDbal_ToolsService()
    {
        return $this->services['dbal.tools'] = $this->get('dbal.tools.factory')->get($this->get('dbal.conn.driver'));
    }

    /**
     * Gets the public 'dbal.tools.factory' shared service.
     *
     * @return \phpbb\db\tools\factory
     */
    protected function getDbal_Tools_FactoryService()
    {
        return $this->services['dbal.tools.factory'] = new \phpbb\db\tools\factory();
    }

    /**
     * Gets the public 'dispatcher' shared service.
     *
     * @return \phpbb\event\dispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = new \phpbb\event\dispatcher($this);

        $instance->addSubscriberService('alfredoramos.markdown.listener', 'alfredoramos\\markdown\\event\\listener');
        $instance->addSubscriberService('kinerity.bestanswer.listener', 'kinerity\\bestanswer\\event\\main_listener');
        $instance->addSubscriberService('martin.externallinkinnewwindow.listener', 'martin\\externallinkinnewwindow\\event\\listener');
        $instance->addSubscriberService('martin.externallinkinnewwindow.ucp', 'martin\\externallinkinnewwindow\\event\\ucp');
        $instance->addSubscriberService('paul999.mention.listener', 'paul999\\mention\\event\\main_listener');
        $instance->addSubscriberService('phpbb.autogroups.listener', 'phpbb\\autogroups\\event\\listener');
        $instance->addSubscriberService('phpbb.collapsiblecategories.listener', 'phpbb\\collapsiblecategories\\event\\listener');
        $instance->addSubscriberService('phpbb.topicprefixes.listener', 'phpbb\\topicprefixes\\event\\listener');
        $instance->addSubscriberService('phpbb.viglink.listener', 'phpbb\\viglink\\event\\listener');
        $instance->addSubscriberService('phpbb.viglink.acp_listener', 'phpbb\\viglink\\event\\acp_listener');
        $instance->addSubscriberService('phpbbstudio.nore.listener', 'phpbbstudio\\nore\\event\\main_listener');
        $instance->addSubscriberService('stevotvr.flair.listener', 'stevotvr\\flair\\event\\main_listener');
        $instance->addSubscriberService('vse.lightbox.listener', 'vse\\lightbox\\event\\listener');
        $instance->addSubscriberService('console.exception_subscriber', 'phpbb\\console\\exception_subscriber');
        $instance->addSubscriberService('kernel_exception_subscriber', 'phpbb\\event\\kernel_exception_subscriber');
        $instance->addSubscriberService('kernel_terminate_subscriber', 'phpbb\\event\\kernel_terminate_subscriber');
        $instance->addSubscriberService('symfony_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('router.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');

        return $instance;
    }

    /**
     * Gets the public 'ext.manager' shared service.
     *
     * @return \phpbb\extension\manager
     */
    protected function getExt_ManagerService()
    {
        return $this->services['ext.manager'] = new \phpbb\extension\manager($this, $this->get('dbal.conn'), $this->get('config'), $this->get('filesystem'), 'phpbb_ext', './../', 'php', $this->get('cache'));
    }

    /**
     * Gets the public 'feed.forum' service.
     *
     * @return \phpbb\feed\forum
     */
    protected function getFeed_ForumService()
    {
        return new \phpbb\feed\forum($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'feed.forums' service.
     *
     * @return \phpbb\feed\forums
     */
    protected function getFeed_ForumsService()
    {
        return new \phpbb\feed\forums($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'feed.helper' shared service.
     *
     * @return \phpbb\feed\helper
     */
    protected function getFeed_HelperService()
    {
        return $this->services['feed.helper'] = new \phpbb\feed\helper($this->get('config'), $this, $this->get('path_helper'), $this->get('text_formatter.s9e.renderer'), $this->get('user'));
    }

    /**
     * Gets the public 'feed.news' service.
     *
     * @return \phpbb\feed\news
     */
    protected function getFeed_NewsService()
    {
        return new \phpbb\feed\news($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'feed.overall' service.
     *
     * @return \phpbb\feed\overall
     */
    protected function getFeed_OverallService()
    {
        return new \phpbb\feed\overall($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'feed.quote_helper' shared service.
     *
     * @return \phpbb\feed\quote_helper
     */
    protected function getFeed_QuoteHelperService()
    {
        return $this->services['feed.quote_helper'] = new \phpbb\feed\quote_helper($this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'feed.topic' service.
     *
     * @return \phpbb\feed\topic
     */
    protected function getFeed_TopicService()
    {
        return new \phpbb\feed\topic($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'feed.topics' service.
     *
     * @return \phpbb\feed\topics
     */
    protected function getFeed_TopicsService()
    {
        return new \phpbb\feed\topics($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'feed.topics_active' service.
     *
     * @return \phpbb\feed\topics_active
     */
    protected function getFeed_TopicsActiveService()
    {
        return new \phpbb\feed\topics_active($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'file_downloader' shared service.
     *
     * @return \phpbb\file_downloader
     */
    protected function getFileDownloaderService()
    {
        return $this->services['file_downloader'] = new \phpbb\file_downloader();
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \phpbb\routing\file_locator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \phpbb\routing\file_locator($this->get('filesystem'), './../');
    }

    /**
     * Gets the public 'files.factory' shared service.
     *
     * @return \phpbb\files\factory
     */
    protected function getFiles_FactoryService()
    {
        return $this->services['files.factory'] = new \phpbb\files\factory($this);
    }

    /**
     * Gets the public 'files.filespec' service.
     *
     * @return \phpbb\files\filespec
     */
    protected function getFiles_FilespecService()
    {
        return new \phpbb\files\filespec($this->get('filesystem'), $this->get('language'), $this->get('php_ini'), $this->get('upload_imagesize'), './../', $this->get('mimetype.guesser'), $this->get('plupload'));
    }

    /**
     * Gets the public 'files.types.form' service.
     *
     * @return \phpbb\files\types\form
     */
    protected function getFiles_Types_FormService()
    {
        return new \phpbb\files\types\form($this->get('files.factory'), $this->get('language'), $this->get('php_ini'), $this->get('plupload'), $this->get('request'));
    }

    /**
     * Gets the public 'files.types.local' service.
     *
     * @return \phpbb\files\types\local
     */
    protected function getFiles_Types_LocalService()
    {
        return new \phpbb\files\types\local($this->get('files.factory'), $this->get('language'), $this->get('php_ini'), $this->get('request'));
    }

    /**
     * Gets the public 'files.types.remote' service.
     *
     * @return \phpbb\files\types\remote
     */
    protected function getFiles_Types_RemoteService()
    {
        return new \phpbb\files\types\remote($this->get('config'), $this->get('files.factory'), $this->get('language'), $this->get('php_ini'), $this->get('request'), './../');
    }

    /**
     * Gets the public 'files.upload' service.
     *
     * @return \phpbb\files\upload
     */
    protected function getFiles_UploadService()
    {
        return new \phpbb\files\upload($this->get('filesystem'), $this->get('files.factory'), $this->get('language'), $this->get('php_ini'), $this->get('request'));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \phpbb\filesystem\filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \phpbb\filesystem\filesystem();
    }

    /**
     * Gets the public 'group_helper' shared service.
     *
     * @return \phpbb\group\helper
     */
    protected function getGroupHelperService()
    {
        return $this->services['group_helper'] = new \phpbb\group\helper($this->get('auth'), $this->get('cache'), $this->get('config'), $this->get('language'), $this->get('dispatcher'), $this->get('path_helper'), $this->get('user'));
    }

    /**
     * Gets the public 'groupposition.legend' shared service.
     *
     * @return \phpbb\groupposition\legend
     */
    protected function getGroupposition_LegendService()
    {
        return $this->services['groupposition.legend'] = new \phpbb\groupposition\legend($this->get('dbal.conn'), $this->get('user'));
    }

    /**
     * Gets the public 'groupposition.teampage' shared service.
     *
     * @return \phpbb\groupposition\teampage
     */
    protected function getGroupposition_TeampageService()
    {
        return $this->services['groupposition.teampage'] = new \phpbb\groupposition\teampage($this->get('dbal.conn'), $this->get('user'), $this->get('cache.driver'));
    }

    /**
     * Gets the public 'hook_finder' shared service.
     *
     * @return \phpbb\hook\finder
     */
    protected function getHookFinderService()
    {
        return $this->services['hook_finder'] = new \phpbb\hook\finder('./../', 'php', $this->get('cache.driver'));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('dispatcher'), $this->get('controller.resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'kernel_exception_subscriber' shared service.
     *
     * @return \phpbb\event\kernel_exception_subscriber
     */
    protected function getKernelExceptionSubscriberService()
    {
        return $this->services['kernel_exception_subscriber'] = new \phpbb\event\kernel_exception_subscriber($this->get('template'), $this->get('language'), false);
    }

    /**
     * Gets the public 'kernel_terminate_subscriber' shared service.
     *
     * @return \phpbb\event\kernel_terminate_subscriber
     */
    protected function getKernelTerminateSubscriberService()
    {
        return $this->services['kernel_terminate_subscriber'] = new \phpbb\event\kernel_terminate_subscriber();
    }

    /**
     * Gets the public 'kinerity.bestanswer.controller' shared service.
     *
     * @return \kinerity\bestanswer\controller\main_controller
     */
    protected function getKinerity_Bestanswer_ControllerService()
    {
        return $this->services['kinerity.bestanswer.controller'] = new \kinerity\bestanswer\controller\main_controller($this->get('auth'), $this->get('dbal.conn'), $this->get('language'), $this->get('log'), $this->get('request'), $this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'kinerity.bestanswer.listener' shared service.
     *
     * @return \kinerity\bestanswer\event\main_listener
     */
    protected function getKinerity_Bestanswer_ListenerService()
    {
        return $this->services['kinerity.bestanswer.listener'] = new \kinerity\bestanswer\event\main_listener($this->get('auth'), $this->get('dbal.conn'), $this->get('controller.helper'), $this->get('request'), $this->get('template'), $this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'language' shared service.
     *
     * @return \phpbb\language\language
     */
    protected function getLanguageService()
    {
        return $this->services['language'] = new \phpbb\language\language($this->get('language.loader'));
    }

    /**
     * Gets the public 'language.helper.language_file' shared service.
     *
     * @return \phpbb\language\language_file_helper
     */
    protected function getLanguage_Helper_LanguageFileService()
    {
        return $this->services['language.helper.language_file'] = new \phpbb\language\language_file_helper('./../');
    }

    /**
     * Gets the public 'language.loader' shared service.
     *
     * @return \phpbb\language\language_file_loader
     */
    protected function getLanguage_LoaderService()
    {
        $this->services['language.loader'] = $instance = new \phpbb\language\language_file_loader('./../', 'php');

        $instance->set_extension_manager($this->get('ext.manager'));

        return $instance;
    }

    /**
     * Gets the public 'log' shared service.
     *
     * @return \phpbb\log\log
     */
    protected function getLogService()
    {
        return $this->services['log'] = new \phpbb\log\log($this->get('dbal.conn'), $this->get('user'), $this->get('auth'), $this->get('dispatcher'), './../', 'adm/', 'php', 'phpbb_log');
    }

    /**
     * Gets the public 'martin.externallinkinnewwindow.listener' shared service.
     *
     * @return \martin\externallinkinnewwindow\event\listener
     */
    protected function getMartin_Externallinkinnewwindow_ListenerService()
    {
        return $this->services['martin.externallinkinnewwindow.listener'] = new \martin\externallinkinnewwindow\event\listener($this->get('config'), $this->get('user'));
    }

    /**
     * Gets the public 'martin.externallinkinnewwindow.ucp' shared service.
     *
     * @return \martin\externallinkinnewwindow\event\ucp
     */
    protected function getMartin_Externallinkinnewwindow_UcpService()
    {
        return $this->services['martin.externallinkinnewwindow.ucp'] = new \martin\externallinkinnewwindow\event\ucp($this->get('config'), $this->get('user'), $this->get('request'), $this->get('template'), $this->get('language'));
    }

    /**
     * Gets the public 'message.form.admin' shared service.
     *
     * @return \phpbb\message\admin_form
     */
    protected function getMessage_Form_AdminService()
    {
        return $this->services['message.form.admin'] = new \phpbb\message\admin_form($this->get('auth'), $this->get('config'), $this->get('config_text'), $this->get('dbal.conn'), $this->get('user'), $this->get('dispatcher'), './../', 'php');
    }

    /**
     * Gets the public 'message.form.topic' shared service.
     *
     * @return \phpbb\message\topic_form
     */
    protected function getMessage_Form_TopicService()
    {
        return $this->services['message.form.topic'] = new \phpbb\message\topic_form($this->get('auth'), $this->get('config'), $this->get('dbal.conn'), $this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'message.form.user' shared service.
     *
     * @return \phpbb\message\user_form
     */
    protected function getMessage_Form_UserService()
    {
        return $this->services['message.form.user'] = new \phpbb\message\user_form($this->get('auth'), $this->get('config'), $this->get('dbal.conn'), $this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'migrator' shared service.
     *
     * @return \phpbb\db\migrator
     */
    protected function getMigratorService()
    {
        return $this->services['migrator'] = new \phpbb\db\migrator($this, $this->get('config'), $this->get('dbal.conn'), $this->get('dbal.tools'), 'phpbb_migrations', './../', 'php', 'phpbb_', $this->get('migrator.tool_collection'), $this->get('migrator.helper'));
    }

    /**
     * Gets the public 'migrator.helper' shared service.
     *
     * @return \phpbb\db\migration\helper
     */
    protected function getMigrator_HelperService()
    {
        return $this->services['migrator.helper'] = new \phpbb\db\migration\helper();
    }

    /**
     * Gets the public 'migrator.tool.config' shared service.
     *
     * @return \phpbb\db\migration\tool\config
     */
    protected function getMigrator_Tool_ConfigService()
    {
        return $this->services['migrator.tool.config'] = new \phpbb\db\migration\tool\config($this->get('config'));
    }

    /**
     * Gets the public 'migrator.tool.config_text' shared service.
     *
     * @return \phpbb\db\migration\tool\config_text
     */
    protected function getMigrator_Tool_ConfigTextService()
    {
        return $this->services['migrator.tool.config_text'] = new \phpbb\db\migration\tool\config_text($this->get('config_text'));
    }

    /**
     * Gets the public 'migrator.tool.module' shared service.
     *
     * @return \phpbb\db\migration\tool\module
     */
    protected function getMigrator_Tool_ModuleService()
    {
        return $this->services['migrator.tool.module'] = new \phpbb\db\migration\tool\module($this->get('dbal.conn'), $this->get('cache'), $this->get('user'), $this->get('module.manager'), './../', 'php', 'phpbb_modules');
    }

    /**
     * Gets the public 'migrator.tool.permission' shared service.
     *
     * @return \phpbb\db\migration\tool\permission
     */
    protected function getMigrator_Tool_PermissionService()
    {
        return $this->services['migrator.tool.permission'] = new \phpbb\db\migration\tool\permission($this->get('dbal.conn'), $this->get('cache'), $this->get('auth'), './../', 'php');
    }

    /**
     * Gets the public 'migrator.tool_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getMigrator_ToolCollectionService()
    {
        $this->services['migrator.tool_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('migrator.tool.config');
        $instance->add('migrator.tool.config_text');
        $instance->add('migrator.tool.module');
        $instance->add('migrator.tool.permission');

        return $instance;
    }

    /**
     * Gets the public 'mimetype.content_guesser' shared service.
     *
     * @return \phpbb\mimetype\content_guesser
     */
    protected function getMimetype_ContentGuesserService()
    {
        $this->services['mimetype.content_guesser'] = $instance = new \phpbb\mimetype\content_guesser();

        $instance->set_priority(-1);

        return $instance;
    }

    /**
     * Gets the public 'mimetype.extension_guesser' shared service.
     *
     * @return \phpbb\mimetype\extension_guesser
     */
    protected function getMimetype_ExtensionGuesserService()
    {
        $this->services['mimetype.extension_guesser'] = $instance = new \phpbb\mimetype\extension_guesser();

        $instance->set_priority(-2);

        return $instance;
    }

    /**
     * Gets the public 'mimetype.filebinary_mimetype_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser
     */
    protected function getMimetype_FilebinaryMimetypeGuesserService()
    {
        return $this->services['mimetype.filebinary_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser();
    }

    /**
     * Gets the public 'mimetype.fileinfo_mimetype_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser
     */
    protected function getMimetype_FileinfoMimetypeGuesserService()
    {
        return $this->services['mimetype.fileinfo_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser();
    }

    /**
     * Gets the public 'mimetype.guesser' shared service.
     *
     * @return \phpbb\mimetype\guesser
     */
    protected function getMimetype_GuesserService()
    {
        return $this->services['mimetype.guesser'] = new \phpbb\mimetype\guesser($this->get('mimetype.guesser_collection'));
    }

    /**
     * Gets the public 'mimetype.guesser_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getMimetype_GuesserCollectionService()
    {
        $this->services['mimetype.guesser_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('mimetype.fileinfo_mimetype_guesser');
        $instance->add('mimetype.filebinary_mimetype_guesser');
        $instance->add('mimetype.content_guesser');
        $instance->add('mimetype.extension_guesser');

        return $instance;
    }

    /**
     * Gets the public 'module.manager' shared service.
     *
     * @return \phpbb\module\module_manager
     */
    protected function getModule_ManagerService()
    {
        return $this->services['module.manager'] = new \phpbb\module\module_manager($this->get('cache.driver'), $this->get('dbal.conn'), $this->get('ext.manager'), 'phpbb_modules', './../', 'php');
    }

    /**
     * Gets the public 'notification.method.board' service.
     *
     * @return \phpbb\notification\method\board
     */
    protected function getNotification_Method_BoardService()
    {
        return new \phpbb\notification\method\board($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('config'), 'phpbb_notification_types', 'phpbb_notifications');
    }

    /**
     * Gets the public 'notification.method.email' service.
     *
     * @return \phpbb\notification\method\email
     */
    protected function getNotification_Method_EmailService()
    {
        return new \phpbb\notification\method\email($this->get('user_loader'), $this->get('user'), $this->get('config'), './../', 'php');
    }

    /**
     * Gets the public 'notification.method.jabber' service.
     *
     * @return \phpbb\notification\method\jabber
     */
    protected function getNotification_Method_JabberService()
    {
        return new \phpbb\notification\method\jabber($this->get('user_loader'), $this->get('user'), $this->get('config'), './../', 'php');
    }

    /**
     * Gets the public 'notification.method_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getNotification_MethodCollectionService()
    {
        $this->services['notification.method_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('notification.method.board');
        $instance->add('notification.method.email');
        $instance->add('notification.method.jabber');

        return $instance;
    }

    /**
     * Gets the public 'notification.type.admin_activate_user' service.
     *
     * @return \phpbb\notification\type\admin_activate_user
     */
    protected function getNotification_Type_AdminActivateUserService()
    {
        $instance = new \phpbb\notification\type\admin_activate_user($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.approve_post' service.
     *
     * @return \phpbb\notification\type\approve_post
     */
    protected function getNotification_Type_ApprovePostService()
    {
        $instance = new \phpbb\notification\type\approve_post($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.approve_topic' service.
     *
     * @return \phpbb\notification\type\approve_topic
     */
    protected function getNotification_Type_ApproveTopicService()
    {
        $instance = new \phpbb\notification\type\approve_topic($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.bookmark' service.
     *
     * @return \phpbb\notification\type\bookmark
     */
    protected function getNotification_Type_BookmarkService()
    {
        $instance = new \phpbb\notification\type\bookmark($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.disapprove_post' service.
     *
     * @return \phpbb\notification\type\disapprove_post
     */
    protected function getNotification_Type_DisapprovePostService()
    {
        $instance = new \phpbb\notification\type\disapprove_post($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.disapprove_topic' service.
     *
     * @return \phpbb\notification\type\disapprove_topic
     */
    protected function getNotification_Type_DisapproveTopicService()
    {
        $instance = new \phpbb\notification\type\disapprove_topic($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.group_request' service.
     *
     * @return \phpbb\notification\type\group_request
     */
    protected function getNotification_Type_GroupRequestService()
    {
        $instance = new \phpbb\notification\type\group_request($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.group_request_approved' service.
     *
     * @return \phpbb\notification\type\group_request_approved
     */
    protected function getNotification_Type_GroupRequestApprovedService()
    {
        return new \phpbb\notification\type\group_request_approved($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');
    }

    /**
     * Gets the public 'notification.type.pm' service.
     *
     * @return \phpbb\notification\type\pm
     */
    protected function getNotification_Type_PmService()
    {
        $instance = new \phpbb\notification\type\pm($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.post' service.
     *
     * @return \phpbb\notification\type\post
     */
    protected function getNotification_Type_PostService()
    {
        $instance = new \phpbb\notification\type\post($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.post_in_queue' service.
     *
     * @return \phpbb\notification\type\post_in_queue
     */
    protected function getNotification_Type_PostInQueueService()
    {
        $instance = new \phpbb\notification\type\post_in_queue($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.quote' service.
     *
     * @return \phpbb\notification\type\quote
     */
    protected function getNotification_Type_QuoteService()
    {
        $instance = new \phpbb\notification\type\quote($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));
        $instance->set_utils($this->get('text_formatter.s9e.utils'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.report_pm' service.
     *
     * @return \phpbb\notification\type\report_pm
     */
    protected function getNotification_Type_ReportPmService()
    {
        $instance = new \phpbb\notification\type\report_pm($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.report_pm_closed' service.
     *
     * @return \phpbb\notification\type\report_pm_closed
     */
    protected function getNotification_Type_ReportPmClosedService()
    {
        $instance = new \phpbb\notification\type\report_pm_closed($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.report_post' service.
     *
     * @return \phpbb\notification\type\report_post
     */
    protected function getNotification_Type_ReportPostService()
    {
        $instance = new \phpbb\notification\type\report_post($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.report_post_closed' service.
     *
     * @return \phpbb\notification\type\report_post_closed
     */
    protected function getNotification_Type_ReportPostClosedService()
    {
        $instance = new \phpbb\notification\type\report_post_closed($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.topic' service.
     *
     * @return \phpbb\notification\type\topic
     */
    protected function getNotification_Type_TopicService()
    {
        $instance = new \phpbb\notification\type\topic($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type.topic_in_queue' service.
     *
     * @return \phpbb\notification\type\topic_in_queue
     */
    protected function getNotification_Type_TopicInQueueService()
    {
        $instance = new \phpbb\notification\type\topic_in_queue($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_user_loader($this->get('user_loader'));
        $instance->set_config($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'notification.type_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getNotification_TypeCollectionService()
    {
        $this->services['notification.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('notification.type.admin_activate_user');
        $instance->add('notification.type.approve_post');
        $instance->add('notification.type.approve_topic');
        $instance->add('notification.type.bookmark');
        $instance->add('notification.type.disapprove_post');
        $instance->add('notification.type.disapprove_topic');
        $instance->add('notification.type.group_request');
        $instance->add('notification.type.group_request_approved');
        $instance->add('notification.type.pm');
        $instance->add('notification.type.post');
        $instance->add('notification.type.post_in_queue');
        $instance->add('notification.type.quote');
        $instance->add('notification.type.report_pm');
        $instance->add('notification.type.report_pm_closed');
        $instance->add('notification.type.report_post');
        $instance->add('notification.type.report_post_closed');
        $instance->add('notification.type.topic');
        $instance->add('notification.type.topic_in_queue');
        $instance->add('paul999.mention.notification.type.mention');
        $instance->add('phpbb.autogroups.notification.type.group_added');
        $instance->add('phpbb.autogroups.notification.type.group_removed');
        $instance->add('stevotvr.flair.notification.type.flair');

        return $instance;
    }

    /**
     * Gets the public 'notification_manager' shared service.
     *
     * @return \phpbb\notification\manager
     */
    protected function getNotificationManagerService()
    {
        return $this->services['notification_manager'] = new \phpbb\notification\manager($this->get('notification.type_collection'), $this->get('notification.method_collection'), $this, $this->get('user_loader'), $this->get('dispatcher'), $this->get('dbal.conn'), $this->get('cache'), $this->get('language'), $this->get('user'), 'phpbb_notification_types', 'phpbb_user_notifications');
    }

    /**
     * Gets the public 'pagination' shared service.
     *
     * @return \phpbb\pagination
     */
    protected function getPaginationService()
    {
        return $this->services['pagination'] = new \phpbb\pagination($this->get('template'), $this->get('user'), $this->get('controller.helper'), $this->get('dispatcher'));
    }

    /**
     * Gets the public 'passwords.driver.bcrypt' shared service.
     *
     * @return \phpbb\passwords\driver\bcrypt
     */
    protected function getPasswords_Driver_BcryptService()
    {
        return $this->services['passwords.driver.bcrypt'] = new \phpbb\passwords\driver\bcrypt($this->get('config'), $this->get('passwords.driver_helper'), 10);
    }

    /**
     * Gets the public 'passwords.driver.bcrypt_2y' shared service.
     *
     * @return \phpbb\passwords\driver\bcrypt_2y
     */
    protected function getPasswords_Driver_Bcrypt2yService()
    {
        return $this->services['passwords.driver.bcrypt_2y'] = new \phpbb\passwords\driver\bcrypt_2y($this->get('config'), $this->get('passwords.driver_helper'), 10);
    }

    /**
     * Gets the public 'passwords.driver.bcrypt_wcf2' shared service.
     *
     * @return \phpbb\passwords\driver\bcrypt_wcf2
     */
    protected function getPasswords_Driver_BcryptWcf2Service()
    {
        return $this->services['passwords.driver.bcrypt_wcf2'] = new \phpbb\passwords\driver\bcrypt_wcf2($this->get('passwords.driver.bcrypt'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.convert_password' shared service.
     *
     * @return \phpbb\passwords\driver\convert_password
     */
    protected function getPasswords_Driver_ConvertPasswordService()
    {
        return $this->services['passwords.driver.convert_password'] = new \phpbb\passwords\driver\convert_password($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.md5_mybb' shared service.
     *
     * @return \phpbb\passwords\driver\md5_mybb
     */
    protected function getPasswords_Driver_Md5MybbService()
    {
        return $this->services['passwords.driver.md5_mybb'] = new \phpbb\passwords\driver\md5_mybb($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.md5_phpbb2' shared service.
     *
     * @return \phpbb\passwords\driver\md5_phpbb2
     */
    protected function getPasswords_Driver_Md5Phpbb2Service()
    {
        return $this->services['passwords.driver.md5_phpbb2'] = new \phpbb\passwords\driver\md5_phpbb2($this->get('request'), $this->get('passwords.driver.salted_md5'), $this->get('passwords.driver_helper'), './../', 'php');
    }

    /**
     * Gets the public 'passwords.driver.md5_vb' shared service.
     *
     * @return \phpbb\passwords\driver\md5_vb
     */
    protected function getPasswords_Driver_Md5VbService()
    {
        return $this->services['passwords.driver.md5_vb'] = new \phpbb\passwords\driver\md5_vb($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.phpass' shared service.
     *
     * @return \phpbb\passwords\driver\phpass
     */
    protected function getPasswords_Driver_PhpassService()
    {
        return $this->services['passwords.driver.phpass'] = new \phpbb\passwords\driver\phpass($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.salted_md5' shared service.
     *
     * @return \phpbb\passwords\driver\salted_md5
     */
    protected function getPasswords_Driver_SaltedMd5Service()
    {
        return $this->services['passwords.driver.salted_md5'] = new \phpbb\passwords\driver\salted_md5($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.sha1' shared service.
     *
     * @return \phpbb\passwords\driver\sha1
     */
    protected function getPasswords_Driver_Sha1Service()
    {
        return $this->services['passwords.driver.sha1'] = new \phpbb\passwords\driver\sha1($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.sha1_smf' shared service.
     *
     * @return \phpbb\passwords\driver\sha1_smf
     */
    protected function getPasswords_Driver_Sha1SmfService()
    {
        return $this->services['passwords.driver.sha1_smf'] = new \phpbb\passwords\driver\sha1_smf($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver.sha1_wcf1' shared service.
     *
     * @return \phpbb\passwords\driver\sha1_wcf1
     */
    protected function getPasswords_Driver_Sha1Wcf1Service()
    {
        return $this->services['passwords.driver.sha1_wcf1'] = new \phpbb\passwords\driver\sha1_wcf1($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the public 'passwords.driver_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getPasswords_DriverCollectionService()
    {
        $this->services['passwords.driver_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('passwords.driver.bcrypt');
        $instance->add('passwords.driver.bcrypt_2y');
        $instance->add('passwords.driver.bcrypt_wcf2');
        $instance->add('passwords.driver.salted_md5');
        $instance->add('passwords.driver.phpass');
        $instance->add('passwords.driver.convert_password');
        $instance->add('passwords.driver.sha1_smf');
        $instance->add('passwords.driver.sha1_wcf1');
        $instance->add('passwords.driver.sha1');
        $instance->add('passwords.driver.md5_phpbb2');
        $instance->add('passwords.driver.md5_mybb');
        $instance->add('passwords.driver.md5_vb');

        return $instance;
    }

    /**
     * Gets the public 'passwords.driver_helper' shared service.
     *
     * @return \phpbb\passwords\driver\helper
     */
    protected function getPasswords_DriverHelperService()
    {
        return $this->services['passwords.driver_helper'] = new \phpbb\passwords\driver\helper($this->get('config'));
    }

    /**
     * Gets the public 'passwords.helper' shared service.
     *
     * @return \phpbb\passwords\helper
     */
    protected function getPasswords_HelperService()
    {
        return $this->services['passwords.helper'] = new \phpbb\passwords\helper();
    }

    /**
     * Gets the public 'passwords.manager' shared service.
     *
     * @return \phpbb\passwords\manager
     */
    protected function getPasswords_ManagerService()
    {
        return $this->services['passwords.manager'] = new \phpbb\passwords\manager($this->get('config'), $this->get('passwords.driver_collection'), $this->get('passwords.helper'), array(0 => 'passwords.driver.bcrypt_2y', 1 => 'passwords.driver.bcrypt', 2 => 'passwords.driver.salted_md5', 3 => 'passwords.driver.phpass'));
    }

    /**
     * Gets the public 'passwords.update.lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getPasswords_Update_LockService()
    {
        return $this->services['passwords.update.lock'] = new \phpbb\lock\db('update_hashes_lock', $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the public 'path_helper' shared service.
     *
     * @return \phpbb\path_helper
     */
    protected function getPathHelperService()
    {
        return $this->services['path_helper'] = new \phpbb\path_helper($this->get('symfony_request'), $this->get('filesystem'), $this->get('request'), './../', 'php', 'adm/');
    }

    /**
     * Gets the public 'paul999.mention.controller' shared service.
     *
     * @return \paul999\mention\controller\main
     */
    protected function getPaul999_Mention_ControllerService()
    {
        return $this->services['paul999.mention.controller'] = new \paul999\mention\controller\main($this->get('user'), $this->get('dbal.conn'), $this->get('auth'), $this->get('request'), $this->get('config'));
    }

    /**
     * Gets the public 'paul999.mention.listener' shared service.
     *
     * @return \paul999\mention\event\main_listener
     */
    protected function getPaul999_Mention_ListenerService()
    {
        return $this->services['paul999.mention.listener'] = new \paul999\mention\event\main_listener($this->get('controller.helper'), $this->get('template'), $this->get('dbal.conn'), $this->get('notification_manager'), $this->get('user'), $this->get('auth'), $this->get('config'), 'php');
    }

    /**
     * Gets the public 'paul999.mention.notification.type.mention' service.
     *
     * @return \paul999\mention\notification\type\mention
     */
    protected function getPaul999_Mention_Notification_Type_MentionService()
    {
        $instance = new \paul999\mention\notification\type\mention($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->set_config($this->get('config'));
        $instance->set_user_loader($this->get('user_loader'));

        return $instance;
    }

    /**
     * Gets the public 'php_ini' shared service.
     *
     * @return \bantu\IniGetWrapper\IniGetWrapper
     */
    protected function getPhpIniService()
    {
        return $this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper();
    }

    /**
     * Gets the public 'phpbb.autogroups.admin_controller' shared service.
     *
     * @return \phpbb\autogroups\controller\admin_controller
     */
    protected function getPhpbb_Autogroups_AdminControllerService()
    {
        return $this->services['phpbb.autogroups.admin_controller'] = new \phpbb\autogroups\controller\admin_controller($this->get('cache.driver'), $this->get('dbal.conn'), $this->get('group_helper'), $this->get('language'), $this->get('log'), $this->get('phpbb.autogroups.manager'), $this->get('request'), $this->get('template'), $this->get('user'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types');
    }

    /**
     * Gets the public 'phpbb.autogroups.cron.task.autogroups_check' shared service.
     *
     * @return \phpbb\autogroups\cron\autogroups_check
     */
    protected function getPhpbb_Autogroups_Cron_Task_AutogroupsCheckService()
    {
        $this->services['phpbb.autogroups.cron.task.autogroups_check'] = $instance = new \phpbb\autogroups\cron\autogroups_check($this->get('config'), $this->get('phpbb.autogroups.manager'));

        $instance->set_name('cron.task.autogroups_check');

        return $instance;
    }

    /**
     * Gets the public 'phpbb.autogroups.helper' shared service.
     *
     * @return \phpbb\autogroups\conditions\type\helper
     */
    protected function getPhpbb_Autogroups_HelperService()
    {
        return $this->services['phpbb.autogroups.helper'] = new \phpbb\autogroups\conditions\type\helper($this->get('dbal.conn'), $this->get('notification_manager'), './../', 'php');
    }

    /**
     * Gets the public 'phpbb.autogroups.listener' shared service.
     *
     * @return \phpbb\autogroups\event\listener
     */
    protected function getPhpbb_Autogroups_ListenerService()
    {
        return $this->services['phpbb.autogroups.listener'] = new \phpbb\autogroups\event\listener($this->get('phpbb.autogroups.manager'));
    }

    /**
     * Gets the public 'phpbb.autogroups.manager' shared service.
     *
     * @return \phpbb\autogroups\conditions\manager
     */
    protected function getPhpbb_Autogroups_ManagerService()
    {
        return $this->services['phpbb.autogroups.manager'] = new \phpbb\autogroups\conditions\manager($this->get('phpbb.autogroups.type_collection'), $this, $this->get('cache.driver'), $this->get('dbal.conn'), $this->get('language'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types');
    }

    /**
     * Gets the public 'phpbb.autogroups.notification.type.group_added' service.
     *
     * @return \phpbb\autogroups\notification\type\group_added
     */
    protected function getPhpbb_Autogroups_Notification_Type_GroupAddedService()
    {
        return new \phpbb\autogroups\notification\type\group_added($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');
    }

    /**
     * Gets the public 'phpbb.autogroups.notification.type.group_removed' service.
     *
     * @return \phpbb\autogroups\notification\type\group_removed
     */
    protected function getPhpbb_Autogroups_Notification_Type_GroupRemovedService()
    {
        return new \phpbb\autogroups\notification\type\group_removed($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');
    }

    /**
     * Gets the public 'phpbb.autogroups.type.birthdays' service.
     *
     * @return \phpbb\autogroups\conditions\type\birthdays
     */
    protected function getPhpbb_Autogroups_Type_BirthdaysService()
    {
        return new \phpbb\autogroups\conditions\type\birthdays($this, $this->get('dbal.conn'), $this->get('language'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './../', 'php');
    }

    /**
     * Gets the public 'phpbb.autogroups.type.lastvisit' service.
     *
     * @return \phpbb\autogroups\conditions\type\lastvisit
     */
    protected function getPhpbb_Autogroups_Type_LastvisitService()
    {
        return new \phpbb\autogroups\conditions\type\lastvisit($this, $this->get('dbal.conn'), $this->get('language'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './../', 'php');
    }

    /**
     * Gets the public 'phpbb.autogroups.type.membership' service.
     *
     * @return \phpbb\autogroups\conditions\type\membership
     */
    protected function getPhpbb_Autogroups_Type_MembershipService()
    {
        return new \phpbb\autogroups\conditions\type\membership($this, $this->get('dbal.conn'), $this->get('language'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './../', 'php');
    }

    /**
     * Gets the public 'phpbb.autogroups.type.posts' service.
     *
     * @return \phpbb\autogroups\conditions\type\posts
     */
    protected function getPhpbb_Autogroups_Type_PostsService()
    {
        return new \phpbb\autogroups\conditions\type\posts($this, $this->get('dbal.conn'), $this->get('language'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './../', 'php');
    }

    /**
     * Gets the public 'phpbb.autogroups.type.warnings' service.
     *
     * @return \phpbb\autogroups\conditions\type\warnings
     */
    protected function getPhpbb_Autogroups_Type_WarningsService()
    {
        return new \phpbb\autogroups\conditions\type\warnings($this, $this->get('dbal.conn'), $this->get('language'), 'phpbb_autogroups_rules', 'phpbb_autogroups_types', './../', 'php');
    }

    /**
     * Gets the public 'phpbb.autogroups.type_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getPhpbb_Autogroups_TypeCollectionService()
    {
        $this->services['phpbb.autogroups.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('phpbb.autogroups.type.posts');
        $instance->add('phpbb.autogroups.type.warnings');
        $instance->add('phpbb.autogroups.type.membership');
        $instance->add('phpbb.autogroups.type.lastvisit');
        $instance->add('phpbb.autogroups.type.birthdays');

        return $instance;
    }

    /**
     * Gets the public 'phpbb.collapsiblecategories.controller' shared service.
     *
     * @return \phpbb\collapsiblecategories\controller\main_controller
     */
    protected function getPhpbb_Collapsiblecategories_ControllerService()
    {
        return $this->services['phpbb.collapsiblecategories.controller'] = new \phpbb\collapsiblecategories\controller\main_controller($this->get('phpbb.collapsiblecategories.operator'), $this->get('request'));
    }

    /**
     * Gets the public 'phpbb.collapsiblecategories.listener' shared service.
     *
     * @return \phpbb\collapsiblecategories\event\listener
     */
    protected function getPhpbb_Collapsiblecategories_ListenerService()
    {
        return $this->services['phpbb.collapsiblecategories.listener'] = new \phpbb\collapsiblecategories\event\listener($this->get('phpbb.collapsiblecategories.operator'), $this->get('template'));
    }

    /**
     * Gets the public 'phpbb.collapsiblecategories.operator' shared service.
     *
     * @return \phpbb\collapsiblecategories\operator\operator
     */
    protected function getPhpbb_Collapsiblecategories_OperatorService()
    {
        return $this->services['phpbb.collapsiblecategories.operator'] = new \phpbb\collapsiblecategories\operator\operator($this->get('config'), $this->get('dbal.conn'), $this->get('controller.helper'), $this->get('request'), $this->get('user'));
    }

    /**
     * Gets the public 'phpbb.feed.controller' shared service.
     *
     * @return \phpbb\feed\controller\feed
     */
    protected function getPhpbb_Feed_ControllerService()
    {
        return $this->services['phpbb.feed.controller'] = new \phpbb\feed\controller\feed($this->get('template.twig.environment'), $this->get('symfony_request'), $this->get('controller.helper'), $this->get('config'), $this->get('dbal.conn'), $this, $this->get('feed.helper'), $this->get('user'), $this->get('auth'), $this->get('dispatcher'), 'php');
    }

    /**
     * Gets the public 'phpbb.help.controller.bbcode' shared service.
     *
     * @return \phpbb\help\controller\bbcode
     */
    protected function getPhpbb_Help_Controller_BbcodeService()
    {
        return $this->services['phpbb.help.controller.bbcode'] = new \phpbb\help\controller\bbcode($this->get('controller.helper'), $this->get('phpbb.help.manager'), $this->get('template'), $this->get('language'), './../', 'php');
    }

    /**
     * Gets the public 'phpbb.help.controller.faq' shared service.
     *
     * @return \phpbb\help\controller\faq
     */
    protected function getPhpbb_Help_Controller_FaqService()
    {
        return $this->services['phpbb.help.controller.faq'] = new \phpbb\help\controller\faq($this->get('controller.helper'), $this->get('phpbb.help.manager'), $this->get('template'), $this->get('language'), './../', 'php');
    }

    /**
     * Gets the public 'phpbb.help.manager' shared service.
     *
     * @return \phpbb\help\manager
     */
    protected function getPhpbb_Help_ManagerService()
    {
        return $this->services['phpbb.help.manager'] = new \phpbb\help\manager($this->get('dispatcher'), $this->get('language'), $this->get('template'));
    }

    /**
     * Gets the public 'phpbb.report.controller' shared service.
     *
     * @return \phpbb\report\controller\report
     */
    protected function getPhpbb_Report_ControllerService()
    {
        return $this->services['phpbb.report.controller'] = new \phpbb\report\controller\report($this->get('config'), $this->get('user'), $this->get('template'), $this->get('controller.helper'), $this->get('request'), $this->get('captcha.factory'), $this->get('phpbb.report.handler_factory'), $this->get('phpbb.report.report_reason_list_provider'), './../', 'php');
    }

    /**
     * Gets the public 'phpbb.report.handler_factory' shared service.
     *
     * @return \phpbb\report\handler_factory
     */
    protected function getPhpbb_Report_HandlerFactoryService()
    {
        return $this->services['phpbb.report.handler_factory'] = new \phpbb\report\handler_factory($this);
    }

    /**
     * Gets the public 'phpbb.report.handlers.report_handler_pm' service.
     *
     * @return \phpbb\report\report_handler_pm
     */
    protected function getPhpbb_Report_Handlers_ReportHandlerPmService()
    {
        return new \phpbb\report\report_handler_pm($this->get('dbal.conn.driver'), $this->get('dispatcher'), $this->get('config'), $this->get('auth'), $this->get('user'), $this->get('notification_manager'));
    }

    /**
     * Gets the public 'phpbb.report.handlers.report_handler_post' service.
     *
     * @return \phpbb\report\report_handler_post
     */
    protected function getPhpbb_Report_Handlers_ReportHandlerPostService()
    {
        return new \phpbb\report\report_handler_post($this->get('dbal.conn.driver'), $this->get('dispatcher'), $this->get('config'), $this->get('auth'), $this->get('user'), $this->get('notification_manager'));
    }

    /**
     * Gets the public 'phpbb.report.report_reason_list_provider' shared service.
     *
     * @return \phpbb\report\report_reason_list_provider
     */
    protected function getPhpbb_Report_ReportReasonListProviderService()
    {
        return $this->services['phpbb.report.report_reason_list_provider'] = new \phpbb\report\report_reason_list_provider($this->get('dbal.conn.driver'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'phpbb.topicprefixes.admin_controller' shared service.
     *
     * @return \phpbb\topicprefixes\controller\admin_controller
     */
    protected function getPhpbb_Topicprefixes_AdminControllerService()
    {
        return $this->services['phpbb.topicprefixes.admin_controller'] = new \phpbb\topicprefixes\controller\admin_controller($this->get('phpbb.topicprefixes.manager'), $this->get('language'), $this->get('log'), $this->get('request'), $this->get('template'), $this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'phpbb.topicprefixes.listener' shared service.
     *
     * @return \phpbb\topicprefixes\event\listener
     */
    protected function getPhpbb_Topicprefixes_ListenerService()
    {
        return $this->services['phpbb.topicprefixes.listener'] = new \phpbb\topicprefixes\event\listener($this->get('phpbb.topicprefixes.manager'), $this->get('request'), $this->get('language'));
    }

    /**
     * Gets the public 'phpbb.topicprefixes.manager' shared service.
     *
     * @return \phpbb\topicprefixes\prefixes\manager
     */
    protected function getPhpbb_Topicprefixes_ManagerService()
    {
        return $this->services['phpbb.topicprefixes.manager'] = new \phpbb\topicprefixes\prefixes\manager($this->get('phpbb.topicprefixes.nestedset_prefixes'));
    }

    /**
     * Gets the public 'phpbb.topicprefixes.nestedset_prefixes' shared service.
     *
     * @return \phpbb\topicprefixes\prefixes\nestedset_prefixes
     */
    protected function getPhpbb_Topicprefixes_NestedsetPrefixesService()
    {
        return $this->services['phpbb.topicprefixes.nestedset_prefixes'] = new \phpbb\topicprefixes\prefixes\nestedset_prefixes($this->get('dbal.conn'), $this->get('phpbb.topicprefixes.table_lock'), 'phpbb_topic_prefixes');
    }

    /**
     * Gets the public 'phpbb.topicprefixes.table_lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getPhpbb_Topicprefixes_TableLockService()
    {
        return $this->services['phpbb.topicprefixes.table_lock'] = new \phpbb\lock\db('topicprefixes.table_lock.topic_prefixes_table', $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the public 'phpbb.viglink.acp_listener' shared service.
     *
     * @return \phpbb\viglink\event\acp_listener
     */
    protected function getPhpbb_Viglink_AcpListenerService()
    {
        return $this->services['phpbb.viglink.acp_listener'] = new \phpbb\viglink\event\acp_listener($this->get('config'), $this->get('language'), $this->get('request'), $this->get('template'), $this->get('user'), $this->get('phpbb.viglink.helper'), './../', 'php');
    }

    /**
     * Gets the public 'phpbb.viglink.cron.task.viglink' shared service.
     *
     * @return \phpbb\viglink\cron\viglink
     */
    protected function getPhpbb_Viglink_Cron_Task_ViglinkService()
    {
        $this->services['phpbb.viglink.cron.task.viglink'] = $instance = new \phpbb\viglink\cron\viglink($this->get('config'), $this->get('phpbb.viglink.helper'));

        $instance->set_name('cron.task.viglink');

        return $instance;
    }

    /**
     * Gets the public 'phpbb.viglink.helper' shared service.
     *
     * @return \phpbb\viglink\acp\viglink_helper
     */
    protected function getPhpbb_Viglink_HelperService()
    {
        return $this->services['phpbb.viglink.helper'] = new \phpbb\viglink\acp\viglink_helper($this->get('cache.driver'), $this->get('config'), $this->get('file_downloader'), $this->get('language'), $this->get('log'), $this->get('user'));
    }

    /**
     * Gets the public 'phpbb.viglink.listener' shared service.
     *
     * @return \phpbb\viglink\event\listener
     */
    protected function getPhpbb_Viglink_ListenerService()
    {
        return $this->services['phpbb.viglink.listener'] = new \phpbb\viglink\event\listener($this->get('config'), $this->get('template'));
    }

    /**
     * Gets the public 'phpbbstudio.nore.command.reparse_nore' shared service.
     *
     * @return \phpbbstudio\nore\console\command\nore
     */
    protected function getPhpbbstudio_Nore_Command_ReparseNoreService()
    {
        return $this->services['phpbbstudio.nore.command.reparse_nore'] = new \phpbbstudio\nore\console\command\nore($this->get('dbal.conn'), $this->get('language'), $this->get('log'), $this->get('user'), 'phpbb_forums', 'phpbb_topics', 'phpbb_posts', 'phpbb_privmsgs');
    }

    /**
     * Gets the public 'phpbbstudio.nore.listener' shared service.
     *
     * @return \phpbbstudio\nore\event\main_listener
     */
    protected function getPhpbbstudio_Nore_ListenerService()
    {
        return $this->services['phpbbstudio.nore.listener'] = new \phpbbstudio\nore\event\main_listener();
    }

    /**
     * Gets the public 'plupload' shared service.
     *
     * @return \phpbb\plupload\plupload
     */
    protected function getPluploadService()
    {
        return $this->services['plupload'] = new \phpbb\plupload\plupload('./../', $this->get('config'), $this->get('request'), $this->get('user'), $this->get('php_ini'), $this->get('mimetype.guesser'));
    }

    /**
     * Gets the public 'profilefields.lang_helper' shared service.
     *
     * @return \phpbb\profilefields\lang_helper
     */
    protected function getProfilefields_LangHelperService()
    {
        return $this->services['profilefields.lang_helper'] = new \phpbb\profilefields\lang_helper($this->get('dbal.conn'), 'phpbb_profile_fields_lang');
    }

    /**
     * Gets the public 'profilefields.manager' shared service.
     *
     * @return \phpbb\profilefields\manager
     */
    protected function getProfilefields_ManagerService()
    {
        return $this->services['profilefields.manager'] = new \phpbb\profilefields\manager($this->get('auth'), $this->get('dbal.conn'), $this->get('dispatcher'), $this->get('request'), $this->get('template'), $this->get('profilefields.type_collection'), $this->get('user'), 'phpbb_profile_fields', 'phpbb_profile_lang', 'phpbb_profile_fields_data');
    }

    /**
     * Gets the public 'profilefields.type.bool' shared service.
     *
     * @return \phpbb\profilefields\type\type_bool
     */
    protected function getProfilefields_Type_BoolService()
    {
        return $this->services['profilefields.type.bool'] = new \phpbb\profilefields\type\type_bool($this->get('profilefields.lang_helper'), $this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.date' shared service.
     *
     * @return \phpbb\profilefields\type\type_date
     */
    protected function getProfilefields_Type_DateService()
    {
        return $this->services['profilefields.type.date'] = new \phpbb\profilefields\type\type_date($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.dropdown' shared service.
     *
     * @return \phpbb\profilefields\type\type_dropdown
     */
    protected function getProfilefields_Type_DropdownService()
    {
        return $this->services['profilefields.type.dropdown'] = new \phpbb\profilefields\type\type_dropdown($this->get('profilefields.lang_helper'), $this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.googleplus' shared service.
     *
     * @return \phpbb\profilefields\type\type_googleplus
     */
    protected function getProfilefields_Type_GoogleplusService()
    {
        return $this->services['profilefields.type.googleplus'] = new \phpbb\profilefields\type\type_googleplus($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.int' shared service.
     *
     * @return \phpbb\profilefields\type\type_int
     */
    protected function getProfilefields_Type_IntService()
    {
        return $this->services['profilefields.type.int'] = new \phpbb\profilefields\type\type_int($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.string' shared service.
     *
     * @return \phpbb\profilefields\type\type_string
     */
    protected function getProfilefields_Type_StringService()
    {
        return $this->services['profilefields.type.string'] = new \phpbb\profilefields\type\type_string($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.text' shared service.
     *
     * @return \phpbb\profilefields\type\type_text
     */
    protected function getProfilefields_Type_TextService()
    {
        return $this->services['profilefields.type.text'] = new \phpbb\profilefields\type\type_text($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type.url' shared service.
     *
     * @return \phpbb\profilefields\type\type_url
     */
    protected function getProfilefields_Type_UrlService()
    {
        return $this->services['profilefields.type.url'] = new \phpbb\profilefields\type\type_url($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the public 'profilefields.type_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getProfilefields_TypeCollectionService()
    {
        $this->services['profilefields.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('profilefields.type.bool');
        $instance->add('profilefields.type.date');
        $instance->add('profilefields.type.dropdown');
        $instance->add('profilefields.type.googleplus');
        $instance->add('profilefields.type.int');
        $instance->add('profilefields.type.string');
        $instance->add('profilefields.type.text');
        $instance->add('profilefields.type.url');

        return $instance;
    }

    /**
     * Gets the public 'request' shared service.
     *
     * @return \phpbb\request\request
     */
    protected function getRequestService()
    {
        return $this->services['request'] = new \phpbb\request\request(NULL, true);
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \phpbb\routing\router
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \phpbb\routing\router($this, $this->get('routing.chained_resources_locator'), $this->get('routing.delegated_loader'), 'php', './../cache/production/');
    }

    /**
     * Gets the public 'router.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouter_ListenerService()
    {
        return $this->services['router.listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), NULL, NULL, $this->get('request_stack'));
    }

    /**
     * Gets the public 'routing.chained_resources_locator' shared service.
     *
     * @return \phpbb\routing\resources_locator\chained_resources_locator
     */
    protected function getRouting_ChainedResourcesLocatorService()
    {
        return $this->services['routing.chained_resources_locator'] = new \phpbb\routing\resources_locator\chained_resources_locator($this->get('routing.resources_locator.collection'));
    }

    /**
     * Gets the public 'routing.delegated_loader' shared service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader
     */
    protected function getRouting_DelegatedLoaderService()
    {
        return $this->services['routing.delegated_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader($this->get('routing.resolver'));
    }

    /**
     * Gets the public 'routing.helper' shared service.
     *
     * @return \phpbb\routing\helper
     */
    protected function getRouting_HelperService()
    {
        return $this->services['routing.helper'] = new \phpbb\routing\helper($this->get('config'), $this->get('router'), $this->get('symfony_request'), $this->get('request'), $this->get('filesystem'), './../', 'php');
    }

    /**
     * Gets the public 'routing.loader.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getRouting_Loader_CollectionService()
    {
        $this->services['routing.loader.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('routing.loader.yaml');

        return $instance;
    }

    /**
     * Gets the public 'routing.loader.yaml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YamlService()
    {
        return $this->services['routing.loader.yaml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader($this->get('file_locator'));
    }

    /**
     * Gets the public 'routing.resolver' shared service.
     *
     * @return \phpbb\routing\loader_resolver
     */
    protected function getRouting_ResolverService()
    {
        return $this->services['routing.resolver'] = new \phpbb\routing\loader_resolver($this->get('routing.loader.collection'));
    }

    /**
     * Gets the public 'routing.resources_locator.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getRouting_ResourcesLocator_CollectionService()
    {
        $this->services['routing.resources_locator.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('routing.resources_locator.default');

        return $instance;
    }

    /**
     * Gets the public 'routing.resources_locator.default' shared service.
     *
     * @return \phpbb\routing\resources_locator\default_resources_locator
     */
    protected function getRouting_ResourcesLocator_DefaultService()
    {
        return $this->services['routing.resources_locator.default'] = new \phpbb\routing\resources_locator\default_resources_locator('./../', 'production', $this->get('ext.manager'));
    }

    /**
     * Gets the public 'stevotvr.flair.controller.acp.cats' shared service.
     *
     * @return \stevotvr\flair\controller\acp_cats_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_CatsService()
    {
        $this->services['stevotvr.flair.controller.acp.cats'] = $instance = new \stevotvr\flair\controller\acp_cats_controller($this, $this->get('language'), $this->get('request'), $this->get('template'));

        $instance->set_path_info('./../', 'php', './../images/flair/');
        $instance->setup($this->get('config'), $this->get('stevotvr.flair.operator.category'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.controller.acp.flair' shared service.
     *
     * @return \stevotvr\flair\controller\acp_flair_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_FlairService()
    {
        $this->services['stevotvr.flair.controller.acp.flair'] = $instance = new \stevotvr\flair\controller\acp_flair_controller($this, $this->get('language'), $this->get('request'), $this->get('template'));

        $instance->set_path_info('./../', 'php', './../images/flair/');
        $instance->setup($this->get('dbal.conn'), $this->get('group_helper'), $this->get('stevotvr.flair.operator.category'), $this->get('stevotvr.flair.operator.flair'), $this->get('stevotvr.flair.operator.image'), $this->get('stevotvr.flair.operator.trigger'));
        $instance->set_trigger_names($this->get('dispatcher'), array(0 => 'post_count', 1 => 'membership_days'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.controller.acp.images' shared service.
     *
     * @return \stevotvr\flair\controller\acp_images_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_ImagesService()
    {
        $this->services['stevotvr.flair.controller.acp.images'] = $instance = new \stevotvr\flair\controller\acp_images_controller($this, $this->get('language'), $this->get('request'), $this->get('template'));

        $instance->set_path_info('./../', 'php', './../images/flair/');
        $instance->setup($this->get('files.factory'), $this->get('stevotvr.flair.operator.image'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.controller.acp.main' shared service.
     *
     * @return \stevotvr\flair\controller\acp_main_controller
     */
    protected function getStevotvr_Flair_Controller_Acp_MainService()
    {
        $this->services['stevotvr.flair.controller.acp.main'] = $instance = new \stevotvr\flair\controller\acp_main_controller($this, $this->get('language'), $this->get('request'), $this->get('template'));

        $instance->set_path_info('./../', 'php', './../images/flair/');
        $instance->setup($this->get('stevotvr.flair.operator.category'), $this->get('stevotvr.flair.operator.flair'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.controller.legend' shared service.
     *
     * @return \stevotvr\flair\controller\legend_controller
     */
    protected function getStevotvr_Flair_Controller_LegendService()
    {
        return $this->services['stevotvr.flair.controller.legend'] = new \stevotvr\flair\controller\legend_controller($this->get('controller.helper'), $this->get('language'), $this->get('path_helper'), $this->get('template'), $this->get('stevotvr.flair.operator.category'), $this->get('stevotvr.flair.operator.flair'));
    }

    /**
     * Gets the public 'stevotvr.flair.controller.mcp.user' shared service.
     *
     * @return \stevotvr\flair\controller\mcp_user_controller
     */
    protected function getStevotvr_Flair_Controller_Mcp_UserService()
    {
        $this->services['stevotvr.flair.controller.mcp.user'] = $instance = new \stevotvr\flair\controller\mcp_user_controller($this, $this->get('language'), $this->get('request'), $this->get('template'));

        $instance->set_path_info('./../', 'php', './../images/flair/');
        $instance->setup($this->get('dbal.conn'), $this->get('stevotvr.flair.operator.category'), $this->get('stevotvr.flair.operator.flair'), $this->get('stevotvr.flair.operator.user'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.controller.ucp.flair' shared service.
     *
     * @return \stevotvr\flair\controller\ucp_flair_controller
     */
    protected function getStevotvr_Flair_Controller_Ucp_FlairService()
    {
        $this->services['stevotvr.flair.controller.ucp.flair'] = $instance = new \stevotvr\flair\controller\ucp_flair_controller($this, $this->get('language'), $this->get('request'), $this->get('template'));

        $instance->set_path_info('./../', 'php', './../images/flair/');
        $instance->setup($this->get('user'), $this->get('stevotvr.flair.operator.flair'), $this->get('stevotvr.flair.operator.user'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.cron.task.main' shared service.
     *
     * @return \stevotvr\flair\cron\task\main
     */
    protected function getStevotvr_Flair_Cron_Task_MainService()
    {
        $this->services['stevotvr.flair.cron.task.main'] = $instance = new \stevotvr\flair\cron\task\main($this->get('config'), $this->get('dbal.conn'), $this->get('notification_manager'), 'phpbb_flair_notif');

        $instance->set_name('cron.task.stevotvr.flair');

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.entity.category' service.
     *
     * @return \stevotvr\flair\entity\category
     */
    protected function getStevotvr_Flair_Entity_CategoryService()
    {
        return new \stevotvr\flair\entity\category($this->get('dbal.conn'), 'phpbb_flair_cats');
    }

    /**
     * Gets the public 'stevotvr.flair.entity.flair' service.
     *
     * @return \stevotvr\flair\entity\flair
     */
    protected function getStevotvr_Flair_Entity_FlairService()
    {
        $instance = new \stevotvr\flair\entity\flair($this->get('dbal.conn'), 'phpbb_flair');

        $instance->setup($this->get('config'), array('fa-500px' => array('w' => 1.7143), 'fa-address-book' => array('w' => 1.8568), 'fa-address-book-o' => array('w' => 1.8568), 'fa-address-card' => array('w' => 2.2864), 'fa-address-card-o' => array('w' => 2.2864), 'fa-adjust' => array('w' => 1.7143), 'fa-adn' => array('w' => 1.7143), 'fa-align-center' => array('w' => 1.9994), 'fa-align-justify' => array('w' => 1.9994), 'fa-align-left' => array('w' => 1.9994), 'fa-align-right' => array('w' => 1.9994), 'fa-amazon' => array('w' => 1.9994), 'fa-ambulance' => array('w' => 2.1438), 'fa-american-sign-language-interpreting' => array('w' => 2.5714), 'fa-anchor' => array('w' => 1.9994), 'fa-android' => array('w' => 1.5718), 'fa-angellist' => array('w' => 1.4292), 'fa-angle-double-down' => array('w' => 1.2867), 'fa-angle-double-left' => array('w' => 1.1442), 'fa-angle-double-right' => array('w' => 1.1442), 'fa-angle-double-up' => array('w' => 1.2867), 'fa-angle-down' => array('w' => 1.2867), 'fa-angle-left' => array('w' => 0.7146), 'fa-angle-right' => array('w' => 0.7146), 'fa-angle-up' => array('w' => 1.2867), 'fa-apple' => array('w' => 1.5718), 'fa-archive' => array('w' => 1.9994), 'fa-area-chart' => array('w' => 2.2864), 'fa-arrow-circle-down' => array('w' => 1.7143), 'fa-arrow-circle-left' => array('w' => 1.7143), 'fa-arrow-circle-o-down' => array('w' => 1.7143), 'fa-arrow-circle-o-left' => array('w' => 1.7143), 'fa-arrow-circle-o-right' => array('w' => 1.7143), 'fa-arrow-circle-o-up' => array('w' => 1.7143), 'fa-arrow-circle-right' => array('w' => 1.7143), 'fa-arrow-circle-up' => array('w' => 1.7143), 'fa-arrow-down' => array('w' => 1.8568), 'fa-arrow-left' => array('w' => 1.7143), 'fa-arrow-right' => array('w' => 1.7143), 'fa-arrow-up' => array('w' => 1.8568), 'fa-arrows' => array('w' => 1.9994), 'fa-arrows-alt' => array('w' => 1.7143), 'fa-arrows-h' => array('w' => 1.9994), 'fa-arrows-v' => array('w' => 0.8571), 'fa-assistive-listening-systems' => array('w' => 1.9994), 'fa-asterisk' => array('w' => 1.8568), 'fa-at' => array('w' => 1.7143), 'fa-audio-description' => array('w' => 2.5714), 'fa-backward' => array('w' => 1.8568), 'fa-balance-scale' => array('w' => 2.5714), 'fa-ban' => array('w' => 1.7143), 'fa-bandcamp' => array('w' => 1.9994), 'fa-bar-chart' => array('w' => 2.2864), 'fa-barcode' => array('w' => 1.9994), 'fa-bars' => array('w' => 1.7143), 'fa-bath' => array('w' => 1.9994), 'fa-battery-empty' => array('w' => 2.5714), 'fa-battery-full' => array('w' => 2.5714), 'fa-battery-half' => array('w' => 2.5714), 'fa-battery-quarter' => array('w' => 2.5714), 'fa-battery-three-quarters' => array('w' => 2.5714), 'fa-bed' => array('w' => 2.2864), 'fa-beer' => array('w' => 1.8568), 'fa-behance' => array('w' => 2.2864), 'fa-behance-square' => array('w' => 1.7143), 'fa-bell' => array('w' => 1.9994), 'fa-bell-o' => array('w' => 1.9994), 'fa-bell-slash' => array('w' => 2.2864), 'fa-bell-slash-o' => array('w' => 2.2864), 'fa-bicycle' => array('w' => 2.5714), 'fa-binoculars' => array('w' => 1.9994), 'fa-birthday-cake' => array('w' => 1.9994), 'fa-bitbucket' => array('w' => 1.5718), 'fa-bitbucket-square' => array('w' => 1.7143), 'fa-black-tie' => array('w' => 1.7143), 'fa-blind' => array('w' => 1.5718), 'fa-bluetooth' => array('w' => 1.7143), 'fa-bluetooth-b' => array('w' => 1.1442), 'fa-bold' => array('w' => 1.5718), 'fa-bolt' => array('w' => 0.9997), 'fa-bomb' => array('w' => 1.9994), 'fa-book' => array('w' => 1.8568), 'fa-bookmark' => array('w' => 1.4292), 'fa-bookmark-o' => array('w' => 1.4292), 'fa-braille' => array('w' => 2.4289), 'fa-briefcase' => array('w' => 1.9994), 'fa-btc' => array('w' => 1.4292), 'fa-bug' => array('w' => 1.8568), 'fa-building' => array('w' => 1.7143), 'fa-building-o' => array('w' => 1.5718), 'fa-bullhorn' => array('w' => 1.9994), 'fa-bullseye' => array('w' => 1.7143), 'fa-bus' => array('w' => 1.7143), 'fa-buysellads' => array('w' => 1.7143), 'fa-calculator' => array('w' => 1.9994), 'fa-calendar' => array('w' => 1.8568), 'fa-calendar-check-o' => array('w' => 1.9994), 'fa-calendar-minus-o' => array('w' => 1.9994), 'fa-calendar-o' => array('w' => 1.8568), 'fa-calendar-plus-o' => array('w' => 1.9994), 'fa-calendar-times-o' => array('w' => 1.9994), 'fa-camera' => array('w' => 2.1438), 'fa-camera-retro' => array('w' => 1.9994), 'fa-car' => array('w' => 2.2864), 'fa-caret-down' => array('w' => 1.1442), 'fa-caret-left' => array('w' => 0.7146), 'fa-caret-right' => array('w' => 0.7146), 'fa-caret-square-o-down' => array('w' => 1.7143), 'fa-caret-square-o-left' => array('w' => 1.7143), 'fa-caret-square-o-right' => array('w' => 1.7143), 'fa-caret-square-o-up' => array('w' => 1.7143), 'fa-caret-up' => array('w' => 1.1442), 'fa-cart-arrow-down' => array('w' => 1.8568), 'fa-cart-plus' => array('w' => 1.8568), 'fa-cc' => array('w' => 2.2864), 'fa-cc-amex' => array('w' => 2.5714), 'fa-cc-diners-club' => array('w' => 2.5714), 'fa-cc-discover' => array('w' => 2.5714), 'fa-cc-jcb' => array('w' => 2.5714), 'fa-cc-mastercard' => array('w' => 2.5714), 'fa-cc-paypal' => array('w' => 2.5714), 'fa-cc-stripe' => array('w' => 2.5714), 'fa-cc-visa' => array('w' => 2.5714), 'fa-certificate' => array('w' => 1.7143), 'fa-chain-broken' => array('w' => 1.8568), 'fa-check' => array('w' => 1.9994), 'fa-check-circle' => array('w' => 1.7143), 'fa-check-circle-o' => array('w' => 1.7143), 'fa-check-square' => array('w' => 1.7143), 'fa-check-square-o' => array('w' => 1.8568), 'fa-chevron-circle-down' => array('w' => 1.7143), 'fa-chevron-circle-left' => array('w' => 1.7143), 'fa-chevron-circle-right' => array('w' => 1.7143), 'fa-chevron-circle-up' => array('w' => 1.7143), 'fa-chevron-down' => array('w' => 1.9994), 'fa-chevron-left' => array('w' => 1.4292), 'fa-chevron-right' => array('w' => 1.4292), 'fa-chevron-up' => array('w' => 1.9994), 'fa-child' => array('w' => 1.4292), 'fa-chrome' => array('w' => 1.9994), 'fa-circle' => array('w' => 1.7143), 'fa-circle-o' => array('w' => 1.7143), 'fa-circle-o-notch' => array('w' => 1.9994), 'fa-circle-thin' => array('w' => 1.7143), 'fa-clipboard' => array('w' => 1.9994), 'fa-clock-o' => array('w' => 1.7143), 'fa-clone' => array('w' => 1.9994), 'fa-cloud' => array('w' => 2.1438), 'fa-cloud-download' => array('w' => 2.1438), 'fa-cloud-upload' => array('w' => 2.1438), 'fa-code' => array('w' => 2.1438), 'fa-code-fork' => array('w' => 1.1442), 'fa-codepen' => array('w' => 1.9994), 'fa-codiepie' => array('w' => 1.9994), 'fa-coffee' => array('w' => 2.1438), 'fa-cog' => array('w' => 1.7143), 'fa-cogs' => array('w' => 2.1438), 'fa-columns' => array('w' => 1.8568), 'fa-comment' => array('w' => 1.9994), 'fa-comment-o' => array('w' => 1.9994), 'fa-commenting' => array('w' => 1.9994), 'fa-commenting-o' => array('w' => 1.9994), 'fa-comments' => array('w' => 1.9994), 'fa-comments-o' => array('w' => 1.9994), 'fa-compass' => array('w' => 1.7143), 'fa-compress' => array('w' => 1.7143), 'fa-connectdevelop' => array('w' => 2.2864), 'fa-contao' => array('w' => 1.9994), 'fa-copyright' => array('w' => 1.7143), 'fa-creative-commons' => array('w' => 1.9994), 'fa-credit-card' => array('w' => 2.1438), 'fa-credit-card-alt' => array('w' => 2.5714), 'fa-crop' => array('w' => 1.8568), 'fa-crosshairs' => array('w' => 1.7143), 'fa-css3' => array('w' => 1.9994), 'fa-cube' => array('w' => 1.9994), 'fa-cubes' => array('w' => 2.5714), 'fa-cutlery' => array('w' => 1.5718), 'fa-dashcube' => array('w' => 1.7143), 'fa-database' => array('w' => 1.7143), 'fa-deaf' => array('w' => 1.9994), 'fa-delicious' => array('w' => 1.7143), 'fa-desktop' => array('w' => 2.1438), 'fa-deviantart' => array('w' => 1.1442), 'fa-diamond' => array('w' => 2.2864), 'fa-digg' => array('w' => 2.2864), 'fa-dot-circle-o' => array('w' => 1.7143), 'fa-download' => array('w' => 1.8568), 'fa-dribbble' => array('w' => 1.7143), 'fa-dropbox' => array('w' => 1.9994), 'fa-drupal' => array('w' => 1.7143), 'fa-edge' => array('w' => 1.9994), 'fa-eercast' => array('w' => 1.9994), 'fa-eject' => array('w' => 1.7162), 'fa-ellipsis-h' => array('w' => 1.5718), 'fa-ellipsis-v' => array('w' => 0.4295), 'fa-empire' => array('w' => 1.9994), 'fa-envelope' => array('w' => 1.9994), 'fa-envelope-o' => array('w' => 1.9994), 'fa-envelope-open' => array('w' => 1.9994), 'fa-envelope-open-o' => array('w' => 1.9994), 'fa-envelope-square' => array('w' => 1.7143), 'fa-envira' => array('w' => 1.9994), 'fa-eraser' => array('w' => 2.1438), 'fa-etsy' => array('w' => 1.7143), 'fa-eur' => array('w' => 1.1442), 'fa-exchange' => array('w' => 1.9994), 'fa-exclamation' => array('w' => 0.7146), 'fa-exclamation-circle' => array('w' => 1.7143), 'fa-exclamation-triangle' => array('w' => 1.9994), 'fa-expand' => array('w' => 1.7143), 'fa-expeditedssl' => array('w' => 1.9994), 'fa-external-link' => array('w' => 1.9994), 'fa-external-link-square' => array('w' => 1.7143), 'fa-eye' => array('w' => 1.9994), 'fa-eye-slash' => array('w' => 1.9994), 'fa-eyedropper' => array('w' => 1.9994), 'fa-facebook' => array('w' => 1.1442), 'fa-facebook-official' => array('w' => 1.7143), 'fa-facebook-square' => array('w' => 1.7143), 'fa-fast-backward' => array('w' => 1.9994), 'fa-fast-forward' => array('w' => 1.9994), 'fa-fax' => array('w' => 1.9994), 'fa-female' => array('w' => 1.4292), 'fa-fighter-jet' => array('w' => 2.1438), 'fa-file' => array('w' => 1.7143), 'fa-file-archive-o' => array('w' => 1.7143), 'fa-file-audio-o' => array('w' => 1.7143), 'fa-file-code-o' => array('w' => 1.7143), 'fa-file-excel-o' => array('w' => 1.7143), 'fa-file-image-o' => array('w' => 1.7143), 'fa-file-o' => array('w' => 1.7143), 'fa-file-pdf-o' => array('w' => 1.7143), 'fa-file-powerpoint-o' => array('w' => 1.7143), 'fa-file-text' => array('w' => 1.7143), 'fa-file-text-o' => array('w' => 1.7143), 'fa-file-video-o' => array('w' => 1.7143), 'fa-file-word-o' => array('w' => 1.7143), 'fa-files-o' => array('w' => 1.9994), 'fa-film' => array('w' => 2.1438), 'fa-filter' => array('w' => 1.5718), 'fa-fire' => array('w' => 1.5718), 'fa-fire-extinguisher' => array('w' => 1.5718), 'fa-firefox' => array('w' => 1.9994), 'fa-first-order' => array('w' => 1.7143), 'fa-flag' => array('w' => 1.9994), 'fa-flag-checkered' => array('w' => 1.9994), 'fa-flag-o' => array('w' => 1.9994), 'fa-flask' => array('w' => 1.8568), 'fa-flickr' => array('w' => 1.7143), 'fa-floppy-o' => array('w' => 1.7143), 'fa-folder' => array('w' => 1.8568), 'fa-folder-o' => array('w' => 1.8568), 'fa-folder-open' => array('w' => 2.1438), 'fa-folder-open-o' => array('w' => 2.1438), 'fa-font' => array('w' => 1.8568), 'fa-font-awesome' => array('w' => 1.7143), 'fa-fonticons' => array('w' => 1.7143), 'fa-fort-awesome' => array('w' => 1.9994), 'fa-forumbee' => array('w' => 1.7143), 'fa-forward' => array('w' => 1.8568), 'fa-foursquare' => array('w' => 1.4292), 'fa-free-code-camp' => array('w' => 2.5714), 'fa-frown-o' => array('w' => 1.7143), 'fa-futbol-o' => array('w' => 1.9994), 'fa-gamepad' => array('w' => 2.1438), 'fa-gavel' => array('w' => 1.9994), 'fa-gbp' => array('w' => 1.1442), 'fa-genderless' => array('w' => 1.4292), 'fa-get-pocket' => array('w' => 1.9193), 'fa-gg' => array('w' => 2.2864), 'fa-gg-circle' => array('w' => 1.9994), 'fa-gift' => array('w' => 1.7143), 'fa-git' => array('w' => 1.9994), 'fa-git-square' => array('w' => 1.7143), 'fa-github' => array('w' => 1.7143), 'fa-github-alt' => array('w' => 1.8568), 'fa-github-square' => array('w' => 1.7143), 'fa-gitlab' => array('w' => 1.9994), 'fa-glass' => array('w' => 1.9994), 'fa-glide' => array('w' => 1.7143), 'fa-glide-g' => array('w' => 1.7143), 'fa-globe' => array('w' => 1.7143), 'fa-google' => array('w' => 1.7143), 'fa-google-plus' => array('w' => 2.5714), 'fa-google-plus-official' => array('w' => 1.7143), 'fa-google-plus-square' => array('w' => 1.7143), 'fa-google-wallet' => array('w' => 1.9994), 'fa-graduation-cap' => array('w' => 2.5714), 'fa-gratipay' => array('w' => 1.7143), 'fa-grav' => array('w' => 2.0033), 'fa-h-square' => array('w' => 1.7143), 'fa-hacker-news' => array('w' => 1.7143), 'fa-hand-lizard-o' => array('w' => 2.2864), 'fa-hand-o-down' => array('w' => 1.7143), 'fa-hand-o-left' => array('w' => 1.9994), 'fa-hand-o-right' => array('w' => 1.9994), 'fa-hand-o-up' => array('w' => 1.7143), 'fa-hand-paper-o' => array('w' => 1.9994), 'fa-hand-peace-o' => array('w' => 1.7143), 'fa-hand-pointer-o' => array('w' => 1.9994), 'fa-hand-rock-o' => array('w' => 1.7143), 'fa-hand-scissors-o' => array('w' => 1.9994), 'fa-hand-spock-o' => array('w' => 2.2864), 'fa-handshake-o' => array('w' => 2.5714), 'fa-hashtag' => array('w' => 1.9994), 'fa-hdd-o' => array('w' => 1.7143), 'fa-header' => array('w' => 1.9994), 'fa-headphones' => array('w' => 1.8568), 'fa-heart' => array('w' => 1.9994), 'fa-heart-o' => array('w' => 1.9994), 'fa-heartbeat' => array('w' => 1.9994), 'fa-history' => array('w' => 1.7143), 'fa-home' => array('w' => 1.8568), 'fa-hospital-o' => array('w' => 1.5718), 'fa-hourglass' => array('w' => 1.7143), 'fa-hourglass-end' => array('w' => 1.7143), 'fa-hourglass-half' => array('w' => 1.7143), 'fa-hourglass-o' => array('w' => 1.7143), 'fa-hourglass-start' => array('w' => 1.7143), 'fa-houzz' => array('w' => 1.1442), 'fa-html5' => array('w' => 1.5718), 'fa-i-cursor' => array('w' => 1.1442), 'fa-id-badge' => array('w' => 1.4292), 'fa-id-card' => array('w' => 2.2864), 'fa-id-card-o' => array('w' => 2.2864), 'fa-ils' => array('w' => 1.7143), 'fa-imdb' => array('w' => 1.7143), 'fa-inbox' => array('w' => 1.7143), 'fa-indent' => array('w' => 1.9994), 'fa-industry' => array('w' => 1.9994), 'fa-info' => array('w' => 0.7146), 'fa-info-circle' => array('w' => 1.7143), 'fa-inr' => array('w' => 1.0036), 'fa-instagram' => array('w' => 1.7143), 'fa-internet-explorer' => array('w' => 1.9994), 'fa-ioxhost' => array('w' => 2.2864), 'fa-italic' => array('w' => 1.1442), 'fa-joomla' => array('w' => 1.7143), 'fa-jpy' => array('w' => 1.1461), 'fa-jsfiddle' => array('w' => 2.2864), 'fa-key' => array('w' => 1.9994), 'fa-keyboard-o' => array('w' => 2.1438), 'fa-krw' => array('w' => 1.9994), 'fa-language' => array('w' => 1.7143), 'fa-laptop' => array('w' => 2.1438), 'fa-lastfm' => array('w' => 1.9994), 'fa-lastfm-square' => array('w' => 1.7143), 'fa-leaf' => array('w' => 1.9994), 'fa-leanpub' => array('w' => 2.2864), 'fa-lemon-o' => array('w' => 1.7143), 'fa-level-down' => array('w' => 1.1442), 'fa-level-up' => array('w' => 1.1442), 'fa-life-ring' => array('w' => 1.9994), 'fa-lightbulb-o' => array('w' => 1.1442), 'fa-line-chart' => array('w' => 2.2864), 'fa-link' => array('w' => 1.8568), 'fa-linkedin' => array('w' => 1.7143), 'fa-linkedin-square' => array('w' => 1.7143), 'fa-linode' => array('w' => 1.7143), 'fa-linux' => array('w' => 1.7143), 'fa-list' => array('w' => 1.9994), 'fa-list-alt' => array('w' => 1.9994), 'fa-list-ol' => array('w' => 1.9994), 'fa-list-ul' => array('w' => 1.9994), 'fa-location-arrow' => array('w' => 1.5718), 'fa-lock' => array('w' => 1.2867), 'fa-long-arrow-down' => array('w' => 0.8571), 'fa-long-arrow-left' => array('w' => 1.9994), 'fa-long-arrow-right' => array('w' => 1.9994), 'fa-long-arrow-up' => array('w' => 0.8571), 'fa-low-vision' => array('w' => 1.9994), 'fa-magic' => array('w' => 1.8568), 'fa-magnet' => array('w' => 1.7143), 'fa-male' => array('w' => 1.1442), 'fa-map' => array('w' => 1.9994), 'fa-map-marker' => array('w' => 1.1442), 'fa-map-o' => array('w' => 2.2864), 'fa-map-pin' => array('w' => 1.1442), 'fa-map-signs' => array('w' => 1.9994), 'fa-mars' => array('w' => 1.7143), 'fa-mars-double' => array('w' => 2.1438), 'fa-mars-stroke' => array('w' => 1.7143), 'fa-mars-stroke-h' => array('w' => 2.2864), 'fa-mars-stroke-v' => array('w' => 1.4292), 'fa-maxcdn' => array('w' => 1.9994), 'fa-meanpath' => array('w' => 1.7143), 'fa-medium' => array('w' => 1.9994), 'fa-medkit' => array('w' => 1.9994), 'fa-meetup' => array('w' => 2.1438), 'fa-meh-o' => array('w' => 1.7143), 'fa-mercury' => array('w' => 1.4292), 'fa-microchip' => array('w' => 1.7143), 'fa-microphone' => array('w' => 1.2867), 'fa-microphone-slash' => array('w' => 1.5718), 'fa-minus' => array('w' => 1.5718), 'fa-minus-circle' => array('w' => 1.7143), 'fa-minus-square' => array('w' => 1.7143), 'fa-minus-square-o' => array('w' => 1.5718), 'fa-mixcloud' => array('w' => 2.5714), 'fa-mobile' => array('w' => 0.8571), 'fa-modx' => array('w' => 1.9994), 'fa-money' => array('w' => 2.1438), 'fa-moon-o' => array('w' => 1.7143), 'fa-motorcycle' => array('w' => 2.5714), 'fa-mouse-pointer' => array('w' => 1.4292), 'fa-music' => array('w' => 1.7143), 'fa-neuter' => array('w' => 1.4292), 'fa-newspaper-o' => array('w' => 2.2864), 'fa-object-group' => array('w' => 2.2864), 'fa-object-ungroup' => array('w' => 2.5714), 'fa-odnoklassniki' => array('w' => 1.4292), 'fa-odnoklassniki-square' => array('w' => 1.7143), 'fa-opencart' => array('w' => 2.5714), 'fa-openid' => array('w' => 1.9994), 'fa-opera' => array('w' => 1.9994), 'fa-optin-monster' => array('w' => 2.5617), 'fa-outdent' => array('w' => 1.9994), 'fa-pagelines' => array('w' => 1.5718), 'fa-paint-brush' => array('w' => 1.9994), 'fa-paper-plane' => array('w' => 1.9994), 'fa-paper-plane-o' => array('w' => 1.9994), 'fa-paperclip' => array('w' => 1.5718), 'fa-paragraph' => array('w' => 1.4292), 'fa-pause' => array('w' => 1.7143), 'fa-pause-circle' => array('w' => 1.7143), 'fa-pause-circle-o' => array('w' => 1.7143), 'fa-paw' => array('w' => 1.8568), 'fa-paypal' => array('w' => 1.7143), 'fa-pencil' => array('w' => 1.7143), 'fa-pencil-square' => array('w' => 1.7143), 'fa-pencil-square-o' => array('w' => 1.9994), 'fa-percent' => array('w' => 1.7143), 'fa-phone' => array('w' => 1.5718), 'fa-phone-square' => array('w' => 1.7143), 'fa-picture-o' => array('w' => 2.1438), 'fa-pie-chart' => array('w' => 1.9994), 'fa-pied-piper' => array('w' => 2.5714), 'fa-pied-piper-alt' => array('w' => 2.2746), 'fa-pied-piper-pp' => array('w' => 1.7143), 'fa-pinterest' => array('w' => 1.7143), 'fa-pinterest-p' => array('w' => 1.4292), 'fa-pinterest-square' => array('w' => 1.7143), 'fa-plane' => array('w' => 1.5718), 'fa-play' => array('w' => 1.5718), 'fa-play-circle' => array('w' => 1.7143), 'fa-play-circle-o' => array('w' => 1.7143), 'fa-plug' => array('w' => 1.9994), 'fa-plus' => array('w' => 1.5718), 'fa-plus-circle' => array('w' => 1.7143), 'fa-plus-square' => array('w' => 1.7143), 'fa-plus-square-o' => array('w' => 1.5718), 'fa-podcast' => array('w' => 1.7143), 'fa-power-off' => array('w' => 1.7143), 'fa-print' => array('w' => 1.8568), 'fa-product-hunt' => array('w' => 1.9994), 'fa-puzzle-piece' => array('w' => 1.8568), 'fa-qq' => array('w' => 1.9994), 'fa-qrcode' => array('w' => 1.5718), 'fa-question' => array('w' => 1.1442), 'fa-question-circle' => array('w' => 1.7143), 'fa-question-circle-o' => array('w' => 1.7143), 'fa-quora' => array('w' => 1.9994), 'fa-quote-left' => array('w' => 1.8568), 'fa-quote-right' => array('w' => 1.8568), 'fa-random' => array('w' => 1.9994), 'fa-ravelry' => array('w' => 2.4289), 'fa-rebel' => array('w' => 1.9994), 'fa-recycle' => array('w' => 1.9994), 'fa-reddit' => array('w' => 1.9994), 'fa-reddit-alien' => array('w' => 1.9994), 'fa-reddit-square' => array('w' => 1.7143), 'fa-refresh' => array('w' => 1.7143), 'fa-registered' => array('w' => 1.9994), 'fa-renren' => array('w' => 1.7143), 'fa-repeat' => array('w' => 1.7143), 'fa-reply' => array('w' => 1.9994), 'fa-reply-all' => array('w' => 1.9994), 'fa-retweet' => array('w' => 2.1438), 'fa-road' => array('w' => 2.1438), 'fa-rocket' => array('w' => 1.8568), 'fa-rss' => array('w' => 1.5718), 'fa-rss-square' => array('w' => 1.7143), 'fa-rub' => array('w' => 1.4292), 'fa-safari' => array('w' => 1.9994), 'fa-scissors' => array('w' => 1.9994), 'fa-scribd' => array('w' => 1.7143), 'fa-search' => array('w' => 1.8568), 'fa-search-minus' => array('w' => 1.8568), 'fa-search-plus' => array('w' => 1.8568), 'fa-sellsy' => array('w' => 2.2864), 'fa-server' => array('w' => 1.9994), 'fa-share' => array('w' => 1.9994), 'fa-share-alt' => array('w' => 1.7143), 'fa-share-alt-square' => array('w' => 1.7143), 'fa-share-square' => array('w' => 1.7143), 'fa-share-square-o' => array('w' => 1.8568), 'fa-shield' => array('w' => 1.4292), 'fa-ship' => array('w' => 2.2864), 'fa-shirtsinbulk' => array('w' => 1.7143), 'fa-shopping-bag' => array('w' => 1.9994), 'fa-shopping-basket' => array('w' => 2.2864), 'fa-shopping-cart' => array('w' => 1.8568), 'fa-shower' => array('w' => 2.1438), 'fa-sign-in' => array('w' => 1.7143), 'fa-sign-language' => array('w' => 1.8568), 'fa-sign-out' => array('w' => 1.8568), 'fa-signal' => array('w' => 1.9994), 'fa-simplybuilt' => array('w' => 2.2864), 'fa-sitemap' => array('w' => 1.9994), 'fa-skyatlas' => array('w' => 2.2864), 'fa-skype' => array('w' => 1.7143), 'fa-slack' => array('w' => 1.8568), 'fa-sliders' => array('w' => 1.7143), 'fa-slideshare' => array('w' => 1.9994), 'fa-smile-o' => array('w' => 1.7143), 'fa-snapchat' => array('w' => 1.7143), 'fa-snapchat-ghost' => array('w' => 1.8568), 'fa-snapchat-square' => array('w' => 1.7143), 'fa-snowflake-o' => array('w' => 1.8568), 'fa-sort' => array('w' => 1.1442), 'fa-sort-alpha-asc' => array('w' => 1.8568), 'fa-sort-alpha-desc' => array('w' => 1.8568), 'fa-sort-amount-asc' => array('w' => 1.9994), 'fa-sort-amount-desc' => array('w' => 1.9994), 'fa-sort-asc' => array('w' => 1.1442), 'fa-sort-desc' => array('w' => 1.1442), 'fa-sort-numeric-asc' => array('w' => 1.7143), 'fa-sort-numeric-desc' => array('w' => 1.7143), 'fa-soundcloud' => array('w' => 2.5714), 'fa-space-shuttle' => array('w' => 2.4289), 'fa-spinner' => array('w' => 1.9994), 'fa-spoon' => array('w' => 0.8571), 'fa-spotify' => array('w' => 1.7143), 'fa-square' => array('w' => 1.7143), 'fa-square-o' => array('w' => 1.5718), 'fa-stack-exchange' => array('w' => 1.4292), 'fa-stack-overflow' => array('w' => 1.7143), 'fa-star' => array('w' => 1.8568), 'fa-star-half' => array('w' => 0.9997), 'fa-star-half-o' => array('w' => 1.8568), 'fa-star-o' => array('w' => 1.8568), 'fa-steam' => array('w' => 1.9994), 'fa-steam-square' => array('w' => 1.7143), 'fa-step-backward' => array('w' => 1.1442), 'fa-step-forward' => array('w' => 1.1442), 'fa-stethoscope' => array('w' => 1.5718), 'fa-sticky-note' => array('w' => 1.7143), 'fa-sticky-note-o' => array('w' => 1.7143), 'fa-stop' => array('w' => 1.7143), 'fa-stop-circle' => array('w' => 1.7143), 'fa-stop-circle-o' => array('w' => 1.7143), 'fa-street-view' => array('w' => 1.7143), 'fa-strikethrough' => array('w' => 1.9994), 'fa-stumbleupon' => array('w' => 2.1438), 'fa-stumbleupon-circle' => array('w' => 1.7143), 'fa-subscript' => array('w' => 1.7143), 'fa-subway' => array('w' => 1.7143), 'fa-suitcase' => array('w' => 1.9994), 'fa-sun-o' => array('w' => 1.9994), 'fa-superpowers' => array('w' => 1.9994), 'fa-superscript' => array('w' => 1.7143), 'fa-table' => array('w' => 1.8568), 'fa-tablet' => array('w' => 1.2867), 'fa-tachometer' => array('w' => 1.9994), 'fa-tag' => array('w' => 1.7143), 'fa-tags' => array('w' => 2.1438), 'fa-tasks' => array('w' => 1.9994), 'fa-taxi' => array('w' => 2.2864), 'fa-telegram' => array('w' => 1.9994), 'fa-television' => array('w' => 2.2864), 'fa-tencent-weibo' => array('w' => 1.4292), 'fa-terminal' => array('w' => 1.8568), 'fa-text-height' => array('w' => 1.9994), 'fa-text-width' => array('w' => 1.7143), 'fa-th' => array('w' => 1.9994), 'fa-th-large' => array('w' => 1.8568), 'fa-th-list' => array('w' => 1.9994), 'fa-themeisle' => array('w' => 1.9994), 'fa-thermometer-empty' => array('w' => 1.1442), 'fa-thermometer-full' => array('w' => 1.1442), 'fa-thermometer-half' => array('w' => 1.1442), 'fa-thermometer-quarter' => array('w' => 1.1442), 'fa-thermometer-three-quarters' => array('w' => 1.1442), 'fa-thumb-tack' => array('w' => 1.2867), 'fa-thumbs-down' => array('w' => 1.8568), 'fa-thumbs-o-down' => array('w' => 1.7143), 'fa-thumbs-o-up' => array('w' => 1.7143), 'fa-thumbs-up' => array('w' => 1.8568), 'fa-ticket' => array('w' => 1.9994), 'fa-times' => array('w' => 1.5718), 'fa-times-circle' => array('w' => 1.7143), 'fa-times-circle-o' => array('w' => 1.7143), 'fa-tint' => array('w' => 1.1442), 'fa-toggle-off' => array('w' => 2.2864), 'fa-toggle-on' => array('w' => 2.2864), 'fa-trademark' => array('w' => 2.2024), 'fa-train' => array('w' => 1.7143), 'fa-transgender' => array('w' => 1.7143), 'fa-transgender-alt' => array('w' => 1.9994), 'fa-trash' => array('w' => 1.5718), 'fa-trash-o' => array('w' => 1.5718), 'fa-tree' => array('w' => 1.7143), 'fa-trello' => array('w' => 1.7143), 'fa-tripadvisor' => array('w' => 2.5714), 'fa-trophy' => array('w' => 1.8568), 'fa-truck' => array('w' => 1.9994), 'fa-try' => array('w' => 1.2867), 'fa-tty' => array('w' => 1.9994), 'fa-tumblr' => array('w' => 1.1442), 'fa-tumblr-square' => array('w' => 1.7143), 'fa-twitch' => array('w' => 1.9994), 'fa-twitter' => array('w' => 1.8568), 'fa-twitter-square' => array('w' => 1.7143), 'fa-umbrella' => array('w' => 1.8568), 'fa-underline' => array('w' => 1.7143), 'fa-undo' => array('w' => 1.7143), 'fa-universal-access' => array('w' => 1.9994), 'fa-university' => array('w' => 2.2864), 'fa-unlock' => array('w' => 1.8568), 'fa-unlock-alt' => array('w' => 1.2867), 'fa-upload' => array('w' => 1.8568), 'fa-usb' => array('w' => 2.5714), 'fa-usd' => array('w' => 1.1442), 'fa-user' => array('w' => 1.4292), 'fa-user-circle' => array('w' => 1.9994), 'fa-user-circle-o' => array('w' => 1.9994), 'fa-user-md' => array('w' => 1.5718), 'fa-user-o' => array('w' => 1.7143), 'fa-user-plus' => array('w' => 2.2864), 'fa-user-secret' => array('w' => 1.7143), 'fa-user-times' => array('w' => 2.2864), 'fa-users' => array('w' => 2.1438), 'fa-venus' => array('w' => 1.4292), 'fa-venus-double' => array('w' => 1.9994), 'fa-venus-mars' => array('w' => 2.2864), 'fa-viacoin' => array('w' => 1.7143), 'fa-viadeo' => array('w' => 1.4292), 'fa-viadeo-square' => array('w' => 1.7143), 'fa-video-camera' => array('w' => 1.9994), 'fa-vimeo' => array('w' => 1.9994), 'fa-vimeo-square' => array('w' => 1.7143), 'fa-vine' => array('w' => 1.7143), 'fa-vk' => array('w' => 2.1438), 'fa-volume-control-phone' => array('w' => 1.5718), 'fa-volume-down' => array('w' => 1.2867), 'fa-volume-off' => array('w' => 0.8571), 'fa-volume-up' => array('w' => 1.8568), 'fa-weibo' => array('w' => 1.9994), 'fa-weixin' => array('w' => 2.2864), 'fa-whatsapp' => array('w' => 1.7143), 'fa-wheelchair' => array('w' => 1.8568), 'fa-wheelchair-alt' => array('w' => 1.7143), 'fa-wifi' => array('w' => 2.2864), 'fa-wikipedia-w' => array('w' => 2.5714), 'fa-window-close' => array('w' => 1.9994), 'fa-window-close-o' => array('w' => 1.9994), 'fa-window-maximize' => array('w' => 1.9994), 'fa-window-minimize' => array('w' => 1.9994), 'fa-window-restore' => array('w' => 2.2864), 'fa-windows' => array('w' => 1.8568), 'fa-wordpress' => array('w' => 1.9994), 'fa-wpbeginner' => array('w' => 1.9994), 'fa-wpexplorer' => array('w' => 1.9994), 'fa-wpforms' => array('w' => 1.7143), 'fa-wrench' => array('w' => 1.8568), 'fa-xing' => array('w' => 1.5718), 'fa-xing-square' => array('w' => 1.7143), 'fa-y-combinator' => array('w' => 1.7143), 'fa-yahoo' => array('w' => 1.7143), 'fa-yelp' => array('w' => 1.7143), 'fa-yoast' => array('w' => 1.8568), 'fa-youtube' => array('w' => 1.7143), 'fa-youtube-play' => array('w' => 1.9994), 'fa-youtube-square' => array('w' => 1.7143)));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.listener' shared service.
     *
     * @return \stevotvr\flair\event\main_listener
     */
    protected function getStevotvr_Flair_ListenerService()
    {
        return $this->services['stevotvr.flair.listener'] = new \stevotvr\flair\event\main_listener($this->get('config'), $this->get('dbal.conn'), $this->get('controller.helper'), $this->get('language'), $this->get('request'), $this->get('template'), $this->get('user'), $this->get('stevotvr.flair.operator.flair'), $this->get('stevotvr.flair.operator.trigger'), $this->get('stevotvr.flair.operator.user'), './../images/flair/');
    }

    /**
     * Gets the public 'stevotvr.flair.notification.type.flair' service.
     *
     * @return \stevotvr\flair\notification\type\flair
     */
    protected function getStevotvr_Flair_Notification_Type_FlairService()
    {
        $instance = new \stevotvr\flair\notification\type\flair($this->get('dbal.conn'), $this->get('language'), $this->get('user'), $this->get('auth'), './../', 'php', 'phpbb_user_notifications');

        $instance->setup($this->get('config'), $this->get('controller.helper'), $this->get('user_loader'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.operator.category' shared service.
     *
     * @return \stevotvr\flair\operator\category
     */
    protected function getStevotvr_Flair_Operator_CategoryService()
    {
        return $this->services['stevotvr.flair.operator.category'] = new \stevotvr\flair\operator\category($this, $this->get('dbal.conn'), 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');
    }

    /**
     * Gets the public 'stevotvr.flair.operator.flair' shared service.
     *
     * @return \stevotvr\flair\operator\flair
     */
    protected function getStevotvr_Flair_Operator_FlairService()
    {
        return $this->services['stevotvr.flair.operator.flair'] = new \stevotvr\flair\operator\flair($this, $this->get('dbal.conn'), 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');
    }

    /**
     * Gets the public 'stevotvr.flair.operator.image' shared service.
     *
     * @return \stevotvr\flair\operator\image
     */
    protected function getStevotvr_Flair_Operator_ImageService()
    {
        $this->services['stevotvr.flair.operator.image'] = $instance = new \stevotvr\flair\operator\image($this, $this->get('dbal.conn'), 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');

        $instance->setup($this->get('filesystem'), './../images/flair/');

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.operator.trigger' shared service.
     *
     * @return \stevotvr\flair\operator\trigger
     */
    protected function getStevotvr_Flair_Operator_TriggerService()
    {
        $this->services['stevotvr.flair.operator.trigger'] = $instance = new \stevotvr\flair\operator\trigger($this, $this->get('dbal.conn'), 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');

        $instance->setup($this->get('stevotvr.flair.operator.user'));

        return $instance;
    }

    /**
     * Gets the public 'stevotvr.flair.operator.user' shared service.
     *
     * @return \stevotvr\flair\operator\user
     */
    protected function getStevotvr_Flair_Operator_UserService()
    {
        $this->services['stevotvr.flair.operator.user'] = $instance = new \stevotvr\flair\operator\user($this, $this->get('dbal.conn'), 'phpbb_flair', 'phpbb_flair_cats', 'phpbb_flair_favs', 'phpbb_flair_groups', 'phpbb_flair_notif', 'phpbb_flair_triggers', 'phpbb_flair_users');

        $instance->setup($this->get('config'));

        return $instance;
    }

    /**
     * Gets the public 'symfony_request' shared service.
     *
     * @return \phpbb\symfony_request
     */
    protected function getSymfonyRequestService()
    {
        return $this->services['symfony_request'] = new \phpbb\symfony_request($this->get('request'));
    }

    /**
     * Gets the public 'symfony_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getSymfonyResponseListenerService()
    {
        return $this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'template' shared service.
     *
     * @return \phpbb\template\twig\twig
     */
    protected function getTemplateService()
    {
        return $this->services['template'] = new \phpbb\template\twig\twig($this->get('path_helper'), $this->get('config'), $this->get('template_context'), $this->get('template.twig.environment'), './../cache/production/twig/', $this->get('user'), $this->get('template.twig.extensions.collection'), $this->get('ext.manager'));
    }

    /**
     * Gets the public 'template.twig.environment' shared service.
     *
     * @return \phpbb\template\twig\environment
     */
    protected function getTemplate_Twig_EnvironmentService()
    {
        $this->services['template.twig.environment'] = $instance = new \phpbb\template\twig\environment($this->get('config'), $this->get('filesystem'), $this->get('path_helper'), './../cache/production/twig/', $this->get('ext.manager'), $this->get('template.twig.loader'), $this->get('dispatcher'), array());

        $instance->setLexer($this->get('template.twig.lexer'));

        return $instance;
    }

    /**
     * Gets the public 'template.twig.extensions.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getTemplate_Twig_Extensions_CollectionService()
    {
        $this->services['template.twig.extensions.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('template.twig.extensions.phpbb');
        $instance->add('template.twig.extensions.routing');

        return $instance;
    }

    /**
     * Gets the public 'template.twig.extensions.debug' shared service.
     *
     * @return \Twig_Extension_Debug
     */
    protected function getTemplate_Twig_Extensions_DebugService()
    {
        return $this->services['template.twig.extensions.debug'] = new \Twig_Extension_Debug();
    }

    /**
     * Gets the public 'template.twig.extensions.phpbb' shared service.
     *
     * @return \phpbb\template\twig\extension
     */
    protected function getTemplate_Twig_Extensions_PhpbbService()
    {
        return $this->services['template.twig.extensions.phpbb'] = new \phpbb\template\twig\extension($this->get('template_context'), $this->get('language'));
    }

    /**
     * Gets the public 'template.twig.extensions.routing' shared service.
     *
     * @return \phpbb\template\twig\extension\routing
     */
    protected function getTemplate_Twig_Extensions_RoutingService()
    {
        return $this->services['template.twig.extensions.routing'] = new \phpbb\template\twig\extension\routing($this->get('routing.helper'));
    }

    /**
     * Gets the public 'template.twig.lexer' shared service.
     *
     * @return \phpbb\template\twig\lexer
     */
    public function getTemplate_Twig_LexerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['template.twig.lexer'] = new phpbbtemplatetwiglexer_000000001a129af800000000359f19b2(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getTemplate_Twig_LexerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \phpbb\template\twig\lexer($this->get('template.twig.environment'));
    }

    /**
     * Gets the public 'template.twig.loader' shared service.
     *
     * @return \phpbb\template\twig\loader
     */
    protected function getTemplate_Twig_LoaderService()
    {
        return $this->services['template.twig.loader'] = new \phpbb\template\twig\loader($this->get('filesystem'));
    }

    /**
     * Gets the public 'template_context' shared service.
     *
     * @return \phpbb\template\context
     */
    protected function getTemplateContextService()
    {
        return $this->services['template_context'] = new \phpbb\template\context();
    }

    /**
     * Gets the public 'text_formatter.data_access' shared service.
     *
     * @return \phpbb\textformatter\data_access
     */
    protected function getTextFormatter_DataAccessService()
    {
        return $this->services['text_formatter.data_access'] = new \phpbb\textformatter\data_access($this->get('dbal.conn'), 'phpbb_bbcodes', 'phpbb_smilies', 'phpbb_styles', 'phpbb_words', './../styles/');
    }

    /**
     * Gets the public 'text_formatter.s9e.bbcode_merger' shared service.
     *
     * @return \phpbb\textformatter\s9e\bbcode_merger
     */
    protected function getTextFormatter_S9e_BbcodeMergerService()
    {
        return $this->services['text_formatter.s9e.bbcode_merger'] = new \phpbb\textformatter\s9e\bbcode_merger($this->get('text_formatter.s9e.factory'));
    }

    /**
     * Gets the public 'text_formatter.s9e.factory' shared service.
     *
     * @return \phpbb\textformatter\s9e\factory
     */
    protected function getTextFormatter_S9e_FactoryService()
    {
        return $this->services['text_formatter.s9e.factory'] = new \phpbb\textformatter\s9e\factory($this->get('text_formatter.data_access'), $this->get('cache.driver'), $this->get('dispatcher'), $this->get('config'), $this->get('text_formatter.s9e.link_helper'), $this->get('log'), './../cache/production/', '_text_formatter_parser', '_text_formatter_renderer');
    }

    /**
     * Gets the public 'text_formatter.s9e.link_helper' shared service.
     *
     * @return \phpbb\textformatter\s9e\link_helper
     */
    protected function getTextFormatter_S9e_LinkHelperService()
    {
        return $this->services['text_formatter.s9e.link_helper'] = new \phpbb\textformatter\s9e\link_helper();
    }

    /**
     * Gets the public 'text_formatter.s9e.parser' shared service.
     *
     * @return \phpbb\textformatter\s9e\parser
     */
    protected function getTextFormatter_S9e_ParserService()
    {
        return $this->services['text_formatter.s9e.parser'] = new \phpbb\textformatter\s9e\parser($this->get('cache.driver'), '_text_formatter_parser', $this->get('text_formatter.s9e.factory'), $this->get('dispatcher'));
    }

    /**
     * Gets the public 'text_formatter.s9e.quote_helper' shared service.
     *
     * @return \phpbb\textformatter\s9e\quote_helper
     */
    protected function getTextFormatter_S9e_QuoteHelperService()
    {
        return $this->services['text_formatter.s9e.quote_helper'] = new \phpbb\textformatter\s9e\quote_helper($this->get('user'), './../', 'php');
    }

    /**
     * Gets the public 'text_formatter.s9e.renderer' shared service.
     *
     * @return \phpbb\textformatter\s9e\renderer
     */
    protected function getTextFormatter_S9e_RendererService()
    {
        $a = $this->get('config');

        $this->services['text_formatter.s9e.renderer'] = $instance = new \phpbb\textformatter\s9e\renderer($this->get('cache.driver'), './../cache/production/', '_text_formatter_renderer', $this->get('text_formatter.s9e.factory'), $this->get('dispatcher'));

        $instance->configure_quote_helper($this->get('text_formatter.s9e.quote_helper'));
        $instance->configure_smilies_path($a, $this->get('path_helper'));
        $instance->configure_user($this->get('user'), $a, $this->get('auth'));

        return $instance;
    }

    /**
     * Gets the public 'text_formatter.s9e.utils' shared service.
     *
     * @return \phpbb\textformatter\s9e\utils
     */
    protected function getTextFormatter_S9e_UtilsService()
    {
        return $this->services['text_formatter.s9e.utils'] = new \phpbb\textformatter\s9e\utils();
    }

    /**
     * Gets the public 'text_reparser.contact_admin_info' shared service.
     *
     * @return \phpbb\textreparser\plugins\contact_admin_info
     */
    protected function getTextReparser_ContactAdminInfoService()
    {
        $this->services['text_reparser.contact_admin_info'] = $instance = new \phpbb\textreparser\plugins\contact_admin_info($this->get('config_text'));

        $instance->set_name('contact_admin_info');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.forum_description' shared service.
     *
     * @return \phpbb\textreparser\plugins\forum_description
     */
    protected function getTextReparser_ForumDescriptionService()
    {
        $this->services['text_reparser.forum_description'] = $instance = new \phpbb\textreparser\plugins\forum_description($this->get('dbal.conn'), 'phpbb_forums');

        $instance->set_name('forum_description');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.forum_rules' shared service.
     *
     * @return \phpbb\textreparser\plugins\forum_rules
     */
    protected function getTextReparser_ForumRulesService()
    {
        $this->services['text_reparser.forum_rules'] = $instance = new \phpbb\textreparser\plugins\forum_rules($this->get('dbal.conn'), 'phpbb_forums');

        $instance->set_name('forum_rules');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.group_description' shared service.
     *
     * @return \phpbb\textreparser\plugins\group_description
     */
    protected function getTextReparser_GroupDescriptionService()
    {
        $this->services['text_reparser.group_description'] = $instance = new \phpbb\textreparser\plugins\group_description($this->get('dbal.conn'), 'phpbb_groups');

        $instance->set_name('group_description');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getTextReparser_LockService()
    {
        return $this->services['text_reparser.lock'] = new \phpbb\lock\db('reparse_lock', $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the public 'text_reparser.manager' shared service.
     *
     * @return \phpbb\textreparser\manager
     */
    protected function getTextReparser_ManagerService()
    {
        return $this->services['text_reparser.manager'] = new \phpbb\textreparser\manager($this->get('config'), $this->get('config_text'), $this->get('text_reparser_collection'));
    }

    /**
     * Gets the public 'text_reparser.pm_text' shared service.
     *
     * @return \phpbb\textreparser\plugins\pm_text
     */
    protected function getTextReparser_PmTextService()
    {
        $this->services['text_reparser.pm_text'] = $instance = new \phpbb\textreparser\plugins\pm_text($this->get('dbal.conn'), 'phpbb_privmsgs');

        $instance->set_name('pm_text');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.poll_option' shared service.
     *
     * @return \phpbb\textreparser\plugins\poll_option
     */
    protected function getTextReparser_PollOptionService()
    {
        $this->services['text_reparser.poll_option'] = $instance = new \phpbb\textreparser\plugins\poll_option($this->get('dbal.conn'));

        $instance->set_name('poll_option');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.poll_title' shared service.
     *
     * @return \phpbb\textreparser\plugins\poll_title
     */
    protected function getTextReparser_PollTitleService()
    {
        $this->services['text_reparser.poll_title'] = $instance = new \phpbb\textreparser\plugins\poll_title($this->get('dbal.conn'), 'phpbb_topics');

        $instance->set_name('poll_title');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.post_text' shared service.
     *
     * @return \phpbb\textreparser\plugins\post_text
     */
    protected function getTextReparser_PostTextService()
    {
        $this->services['text_reparser.post_text'] = $instance = new \phpbb\textreparser\plugins\post_text($this->get('dbal.conn'), 'phpbb_posts');

        $instance->set_name('post_text');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser.user_signature' shared service.
     *
     * @return \phpbb\textreparser\plugins\user_signature
     */
    protected function getTextReparser_UserSignatureService()
    {
        $this->services['text_reparser.user_signature'] = $instance = new \phpbb\textreparser\plugins\user_signature($this->get('dbal.conn'), 'phpbb_users');

        $instance->set_name('user_signature');

        return $instance;
    }

    /**
     * Gets the public 'text_reparser_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getTextReparserCollectionService()
    {
        $this->services['text_reparser_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('text_reparser.contact_admin_info');
        $instance->add('text_reparser.forum_description');
        $instance->add('text_reparser.forum_rules');
        $instance->add('text_reparser.group_description');
        $instance->add('text_reparser.pm_text');
        $instance->add('text_reparser.poll_option');
        $instance->add('text_reparser.poll_title');
        $instance->add('text_reparser.post_text');
        $instance->add('text_reparser.user_signature');

        return $instance;
    }

    /**
     * Gets the public 'upload_imagesize' shared service.
     *
     * @return \FastImageSize\FastImageSize
     */
    protected function getUploadImagesizeService()
    {
        return $this->services['upload_imagesize'] = new \FastImageSize\FastImageSize();
    }

    /**
     * Gets the public 'user' shared service.
     *
     * @return \phpbb\user
     */
    protected function getUserService()
    {
        return $this->services['user'] = new \phpbb\user($this->get('language'), '\\phpbb\\datetime');
    }

    /**
     * Gets the public 'user_loader' shared service.
     *
     * @return \phpbb\user_loader
     */
    protected function getUserLoaderService()
    {
        return $this->services['user_loader'] = new \phpbb\user_loader($this->get('dbal.conn'), './../', 'php', 'phpbb_users');
    }

    /**
     * Gets the public 'version_helper' service.
     *
     * @return \phpbb\version_helper
     */
    protected function getVersionHelperService()
    {
        return new \phpbb\version_helper($this->get('cache'), $this->get('config'), $this->get('file_downloader'), $this->get('user'));
    }

    /**
     * Gets the public 'viewonline_helper' shared service.
     *
     * @return \phpbb\viewonline_helper
     */
    protected function getViewonlineHelperService()
    {
        return $this->services['viewonline_helper'] = new \phpbb\viewonline_helper($this->get('filesystem'));
    }

    /**
     * Gets the public 'vse.dbtool.command.db.tool' shared service.
     *
     * @return \vse\dbtool\console\command\db\tool
     */
    protected function getVse_Dbtool_Command_Db_ToolService()
    {
        return $this->services['vse.dbtool.command.db.tool'] = new \vse\dbtool\console\command\db\tool($this->get('user'), $this->get('dbal.conn'), $this->get('dbal.tools'), $this->get('vse.dbtool.tool'), $this->get('vse.dbtool.db.lock'), $this->get('language'));
    }

    /**
     * Gets the public 'vse.dbtool.db.lock' shared service.
     *
     * @return \phpbb\lock\db
     */
    protected function getVse_Dbtool_Db_LockService()
    {
        return $this->services['vse.dbtool.db.lock'] = new \phpbb\lock\db('dbtool_lock', $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the public 'vse.dbtool.tool' shared service.
     *
     * @return \vse\dbtool\tool\tool
     */
    protected function getVse_Dbtool_ToolService()
    {
        return $this->services['vse.dbtool.tool'] = new \vse\dbtool\tool\tool($this->get('cache.driver'), $this->get('config'), $this->get('dbal.conn'), $this->get('log'), $this->get('user'));
    }

    /**
     * Gets the public 'vse.lightbox.listener' shared service.
     *
     * @return \vse\lightbox\event\listener
     */
    protected function getVse_Lightbox_ListenerService()
    {
        return $this->services['vse.lightbox.listener'] = new \vse\lightbox\event\listener($this->get('config'), $this->get('language'), $this->get('template'), 'php');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'core.root_path' => './../',
            'core.php_ext' => 'php',
            'core.environment' => 'production',
            'core.debug' => false,
            'core.cache_dir' => './../cache/production/',
            'passwords.driver.bcrypt_cost' => 10,
            'text_formatter.cache.dir' => './../cache/production/',
            'text_formatter.cache.parser.key' => '_text_formatter_parser',
            'text_formatter.cache.renderer.key' => '_text_formatter_renderer',
            'core.template.cache_path' => './../cache/production/twig/',
            'tables.acl_groups' => 'phpbb_acl_groups',
            'tables.acl_options' => 'phpbb_acl_options',
            'tables.acl_roles' => 'phpbb_acl_roles',
            'tables.acl_roles_data' => 'phpbb_acl_roles_data',
            'tables.acl_users' => 'phpbb_acl_users',
            'tables.attachments' => 'phpbb_attachments',
            'tables.auth_provider_oauth_token_storage' => 'phpbb_oauth_tokens',
            'tables.auth_provider_oauth_states' => 'phpbb_oauth_states',
            'tables.auth_provider_oauth_account_assoc' => 'phpbb_oauth_accounts',
            'tables.banlist' => 'phpbb_banlist',
            'tables.bbcodes' => 'phpbb_bbcodes',
            'tables.bookmarks' => 'phpbb_bookmarks',
            'tables.bots' => 'phpbb_bots',
            'tables.captcha_qa_questions' => 'phpbb_captcha_questions',
            'tables.captcha_qa_answers' => 'phpbb_captcha_answers',
            'tables.captcha_qa_confirm' => 'phpbb_qa_confirm',
            'tables.config' => 'phpbb_config',
            'tables.config_text' => 'phpbb_config_text',
            'tables.confirm' => 'phpbb_confirm',
            'tables.disallow' => 'phpbb_disallow',
            'tables.drafts' => 'phpbb_drafts',
            'tables.ext' => 'phpbb_ext',
            'tables.extensions' => 'phpbb_extensions',
            'tables.extension_groups' => 'phpbb_extension_groups',
            'tables.forums' => 'phpbb_forums',
            'tables.forums_access' => 'phpbb_forums_access',
            'tables.forums_track' => 'phpbb_forums_track',
            'tables.forums_watch' => 'phpbb_forums_watch',
            'tables.groups' => 'phpbb_groups',
            'tables.icons' => 'phpbb_icons',
            'tables.lang' => 'phpbb_lang',
            'tables.log' => 'phpbb_log',
            'tables.login_attempts' => 'phpbb_login_attempts',
            'tables.migrations' => 'phpbb_migrations',
            'tables.moderator_cache' => 'phpbb_moderator_cache',
            'tables.modules' => 'phpbb_modules',
            'tables.notification_types' => 'phpbb_notification_types',
            'tables.notifications' => 'phpbb_notifications',
            'tables.poll_options' => 'phpbb_poll_options',
            'tables.poll_votes' => 'phpbb_poll_votes',
            'tables.posts' => 'phpbb_posts',
            'tables.privmsgs' => 'phpbb_privmsgs',
            'tables.privmsgs_folder' => 'phpbb_privmsgs_folder',
            'tables.privmsgs_rules' => 'phpbb_privmsgs_rules',
            'tables.privmsgs_to' => 'phpbb_privmsgs_to',
            'tables.profile_fields' => 'phpbb_profile_fields',
            'tables.profile_fields_data' => 'phpbb_profile_fields_data',
            'tables.profile_fields_options_language' => 'phpbb_profile_fields_lang',
            'tables.profile_fields_language' => 'phpbb_profile_lang',
            'tables.ranks' => 'phpbb_ranks',
            'tables.reports' => 'phpbb_reports',
            'tables.reports_reasons' => 'phpbb_reports_reasons',
            'tables.search_results' => 'phpbb_search_results',
            'tables.search_wordlist' => 'phpbb_search_wordlist',
            'tables.search_wordmatch' => 'phpbb_search_wordmatch',
            'tables.sessions' => 'phpbb_sessions',
            'tables.sessions_keys' => 'phpbb_sessions_keys',
            'tables.sitelist' => 'phpbb_sitelist',
            'tables.smilies' => 'phpbb_smilies',
            'tables.sphinx' => 'phpbb_sphinx',
            'tables.styles' => 'phpbb_styles',
            'tables.styles_template' => 'phpbb_styles_template',
            'tables.styles_template_data' => 'phpbb_styles_template_data',
            'tables.styles_theme' => 'phpbb_styles_theme',
            'tables.styles_imageset' => 'phpbb_styles_imageset',
            'tables.styles_imageset_data' => 'phpbb_styles_imageset_data',
            'tables.teampage' => 'phpbb_teampage',
            'tables.topics' => 'phpbb_topics',
            'tables.topics_posted' => 'phpbb_topics_posted',
            'tables.topics_track' => 'phpbb_topics_track',
            'tables.topics_watch' => 'phpbb_topics_watch',
            'tables.user_group' => 'phpbb_user_group',
            'tables.user_notifications' => 'phpbb_user_notifications',
            'tables.users' => 'phpbb_users',
            'tables.warnings' => 'phpbb_warnings',
            'tables.words' => 'phpbb_words',
            'tables.zebra' => 'phpbb_zebra',
            'core.disable_super_globals' => true,
            'datetime.class' => '\\phpbb\\datetime',
            'mimetype.guesser.priority.lowest' => -2,
            'mimetype.guesser.priority.low' => -1,
            'mimetype.guesser.priority.default' => 0,
            'mimetype.guesser.priority.high' => 1,
            'mimetype.guesser.priority.highest' => 2,
            'passwords.algorithms' => array(
                0 => 'passwords.driver.bcrypt_2y',
                1 => 'passwords.driver.bcrypt',
                2 => 'passwords.driver.salted_md5',
                3 => 'passwords.driver.phpass',
            ),
            'debug.exceptions' => false,
            'phpbb.autogroups.tables.autogroups_rules' => 'phpbb_autogroups_rules',
            'phpbb.autogroups.tables.autogroups_types' => 'phpbb_autogroups_types',
            'phpbb.topicprefixes.tables.topic_prefixes' => 'phpbb_topic_prefixes',
            'stevotvr.flair.tables.flair' => 'phpbb_flair',
            'stevotvr.flair.tables.flair_categories' => 'phpbb_flair_cats',
            'stevotvr.flair.tables.flair_favorites' => 'phpbb_flair_favs',
            'stevotvr.flair.tables.flair_groups' => 'phpbb_flair_groups',
            'stevotvr.flair.tables.flair_notifications' => 'phpbb_flair_notif',
            'stevotvr.flair.tables.flair_triggers' => 'phpbb_flair_triggers',
            'stevotvr.flair.tables.flair_users' => 'phpbb_flair_users',
            'stevotvr.flair.trigger_names' => array(
                0 => 'post_count',
                1 => 'membership_days',
            ),
            'stevotvr.flair.icons' => array(
                'fa-500px' => array(
                    'w' => 1.7143,
                ),
                'fa-address-book' => array(
                    'w' => 1.8568,
                ),
                'fa-address-book-o' => array(
                    'w' => 1.8568,
                ),
                'fa-address-card' => array(
                    'w' => 2.2864,
                ),
                'fa-address-card-o' => array(
                    'w' => 2.2864,
                ),
                'fa-adjust' => array(
                    'w' => 1.7143,
                ),
                'fa-adn' => array(
                    'w' => 1.7143,
                ),
                'fa-align-center' => array(
                    'w' => 1.9994,
                ),
                'fa-align-justify' => array(
                    'w' => 1.9994,
                ),
                'fa-align-left' => array(
                    'w' => 1.9994,
                ),
                'fa-align-right' => array(
                    'w' => 1.9994,
                ),
                'fa-amazon' => array(
                    'w' => 1.9994,
                ),
                'fa-ambulance' => array(
                    'w' => 2.1438,
                ),
                'fa-american-sign-language-interpreting' => array(
                    'w' => 2.5714,
                ),
                'fa-anchor' => array(
                    'w' => 1.9994,
                ),
                'fa-android' => array(
                    'w' => 1.5718,
                ),
                'fa-angellist' => array(
                    'w' => 1.4292,
                ),
                'fa-angle-double-down' => array(
                    'w' => 1.2867,
                ),
                'fa-angle-double-left' => array(
                    'w' => 1.1442,
                ),
                'fa-angle-double-right' => array(
                    'w' => 1.1442,
                ),
                'fa-angle-double-up' => array(
                    'w' => 1.2867,
                ),
                'fa-angle-down' => array(
                    'w' => 1.2867,
                ),
                'fa-angle-left' => array(
                    'w' => 0.7146,
                ),
                'fa-angle-right' => array(
                    'w' => 0.7146,
                ),
                'fa-angle-up' => array(
                    'w' => 1.2867,
                ),
                'fa-apple' => array(
                    'w' => 1.5718,
                ),
                'fa-archive' => array(
                    'w' => 1.9994,
                ),
                'fa-area-chart' => array(
                    'w' => 2.2864,
                ),
                'fa-arrow-circle-down' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-left' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-o-down' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-o-left' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-o-right' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-o-up' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-right' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-circle-up' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-down' => array(
                    'w' => 1.8568,
                ),
                'fa-arrow-left' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-right' => array(
                    'w' => 1.7143,
                ),
                'fa-arrow-up' => array(
                    'w' => 1.8568,
                ),
                'fa-arrows' => array(
                    'w' => 1.9994,
                ),
                'fa-arrows-alt' => array(
                    'w' => 1.7143,
                ),
                'fa-arrows-h' => array(
                    'w' => 1.9994,
                ),
                'fa-arrows-v' => array(
                    'w' => 0.8571,
                ),
                'fa-assistive-listening-systems' => array(
                    'w' => 1.9994,
                ),
                'fa-asterisk' => array(
                    'w' => 1.8568,
                ),
                'fa-at' => array(
                    'w' => 1.7143,
                ),
                'fa-audio-description' => array(
                    'w' => 2.5714,
                ),
                'fa-backward' => array(
                    'w' => 1.8568,
                ),
                'fa-balance-scale' => array(
                    'w' => 2.5714,
                ),
                'fa-ban' => array(
                    'w' => 1.7143,
                ),
                'fa-bandcamp' => array(
                    'w' => 1.9994,
                ),
                'fa-bar-chart' => array(
                    'w' => 2.2864,
                ),
                'fa-barcode' => array(
                    'w' => 1.9994,
                ),
                'fa-bars' => array(
                    'w' => 1.7143,
                ),
                'fa-bath' => array(
                    'w' => 1.9994,
                ),
                'fa-battery-empty' => array(
                    'w' => 2.5714,
                ),
                'fa-battery-full' => array(
                    'w' => 2.5714,
                ),
                'fa-battery-half' => array(
                    'w' => 2.5714,
                ),
                'fa-battery-quarter' => array(
                    'w' => 2.5714,
                ),
                'fa-battery-three-quarters' => array(
                    'w' => 2.5714,
                ),
                'fa-bed' => array(
                    'w' => 2.2864,
                ),
                'fa-beer' => array(
                    'w' => 1.8568,
                ),
                'fa-behance' => array(
                    'w' => 2.2864,
                ),
                'fa-behance-square' => array(
                    'w' => 1.7143,
                ),
                'fa-bell' => array(
                    'w' => 1.9994,
                ),
                'fa-bell-o' => array(
                    'w' => 1.9994,
                ),
                'fa-bell-slash' => array(
                    'w' => 2.2864,
                ),
                'fa-bell-slash-o' => array(
                    'w' => 2.2864,
                ),
                'fa-bicycle' => array(
                    'w' => 2.5714,
                ),
                'fa-binoculars' => array(
                    'w' => 1.9994,
                ),
                'fa-birthday-cake' => array(
                    'w' => 1.9994,
                ),
                'fa-bitbucket' => array(
                    'w' => 1.5718,
                ),
                'fa-bitbucket-square' => array(
                    'w' => 1.7143,
                ),
                'fa-black-tie' => array(
                    'w' => 1.7143,
                ),
                'fa-blind' => array(
                    'w' => 1.5718,
                ),
                'fa-bluetooth' => array(
                    'w' => 1.7143,
                ),
                'fa-bluetooth-b' => array(
                    'w' => 1.1442,
                ),
                'fa-bold' => array(
                    'w' => 1.5718,
                ),
                'fa-bolt' => array(
                    'w' => 0.9997,
                ),
                'fa-bomb' => array(
                    'w' => 1.9994,
                ),
                'fa-book' => array(
                    'w' => 1.8568,
                ),
                'fa-bookmark' => array(
                    'w' => 1.4292,
                ),
                'fa-bookmark-o' => array(
                    'w' => 1.4292,
                ),
                'fa-braille' => array(
                    'w' => 2.4289,
                ),
                'fa-briefcase' => array(
                    'w' => 1.9994,
                ),
                'fa-btc' => array(
                    'w' => 1.4292,
                ),
                'fa-bug' => array(
                    'w' => 1.8568,
                ),
                'fa-building' => array(
                    'w' => 1.7143,
                ),
                'fa-building-o' => array(
                    'w' => 1.5718,
                ),
                'fa-bullhorn' => array(
                    'w' => 1.9994,
                ),
                'fa-bullseye' => array(
                    'w' => 1.7143,
                ),
                'fa-bus' => array(
                    'w' => 1.7143,
                ),
                'fa-buysellads' => array(
                    'w' => 1.7143,
                ),
                'fa-calculator' => array(
                    'w' => 1.9994,
                ),
                'fa-calendar' => array(
                    'w' => 1.8568,
                ),
                'fa-calendar-check-o' => array(
                    'w' => 1.9994,
                ),
                'fa-calendar-minus-o' => array(
                    'w' => 1.9994,
                ),
                'fa-calendar-o' => array(
                    'w' => 1.8568,
                ),
                'fa-calendar-plus-o' => array(
                    'w' => 1.9994,
                ),
                'fa-calendar-times-o' => array(
                    'w' => 1.9994,
                ),
                'fa-camera' => array(
                    'w' => 2.1438,
                ),
                'fa-camera-retro' => array(
                    'w' => 1.9994,
                ),
                'fa-car' => array(
                    'w' => 2.2864,
                ),
                'fa-caret-down' => array(
                    'w' => 1.1442,
                ),
                'fa-caret-left' => array(
                    'w' => 0.7146,
                ),
                'fa-caret-right' => array(
                    'w' => 0.7146,
                ),
                'fa-caret-square-o-down' => array(
                    'w' => 1.7143,
                ),
                'fa-caret-square-o-left' => array(
                    'w' => 1.7143,
                ),
                'fa-caret-square-o-right' => array(
                    'w' => 1.7143,
                ),
                'fa-caret-square-o-up' => array(
                    'w' => 1.7143,
                ),
                'fa-caret-up' => array(
                    'w' => 1.1442,
                ),
                'fa-cart-arrow-down' => array(
                    'w' => 1.8568,
                ),
                'fa-cart-plus' => array(
                    'w' => 1.8568,
                ),
                'fa-cc' => array(
                    'w' => 2.2864,
                ),
                'fa-cc-amex' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-diners-club' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-discover' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-jcb' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-mastercard' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-paypal' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-stripe' => array(
                    'w' => 2.5714,
                ),
                'fa-cc-visa' => array(
                    'w' => 2.5714,
                ),
                'fa-certificate' => array(
                    'w' => 1.7143,
                ),
                'fa-chain-broken' => array(
                    'w' => 1.8568,
                ),
                'fa-check' => array(
                    'w' => 1.9994,
                ),
                'fa-check-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-check-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-check-square' => array(
                    'w' => 1.7143,
                ),
                'fa-check-square-o' => array(
                    'w' => 1.8568,
                ),
                'fa-chevron-circle-down' => array(
                    'w' => 1.7143,
                ),
                'fa-chevron-circle-left' => array(
                    'w' => 1.7143,
                ),
                'fa-chevron-circle-right' => array(
                    'w' => 1.7143,
                ),
                'fa-chevron-circle-up' => array(
                    'w' => 1.7143,
                ),
                'fa-chevron-down' => array(
                    'w' => 1.9994,
                ),
                'fa-chevron-left' => array(
                    'w' => 1.4292,
                ),
                'fa-chevron-right' => array(
                    'w' => 1.4292,
                ),
                'fa-chevron-up' => array(
                    'w' => 1.9994,
                ),
                'fa-child' => array(
                    'w' => 1.4292,
                ),
                'fa-chrome' => array(
                    'w' => 1.9994,
                ),
                'fa-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-circle-o-notch' => array(
                    'w' => 1.9994,
                ),
                'fa-circle-thin' => array(
                    'w' => 1.7143,
                ),
                'fa-clipboard' => array(
                    'w' => 1.9994,
                ),
                'fa-clock-o' => array(
                    'w' => 1.7143,
                ),
                'fa-clone' => array(
                    'w' => 1.9994,
                ),
                'fa-cloud' => array(
                    'w' => 2.1438,
                ),
                'fa-cloud-download' => array(
                    'w' => 2.1438,
                ),
                'fa-cloud-upload' => array(
                    'w' => 2.1438,
                ),
                'fa-code' => array(
                    'w' => 2.1438,
                ),
                'fa-code-fork' => array(
                    'w' => 1.1442,
                ),
                'fa-codepen' => array(
                    'w' => 1.9994,
                ),
                'fa-codiepie' => array(
                    'w' => 1.9994,
                ),
                'fa-coffee' => array(
                    'w' => 2.1438,
                ),
                'fa-cog' => array(
                    'w' => 1.7143,
                ),
                'fa-cogs' => array(
                    'w' => 2.1438,
                ),
                'fa-columns' => array(
                    'w' => 1.8568,
                ),
                'fa-comment' => array(
                    'w' => 1.9994,
                ),
                'fa-comment-o' => array(
                    'w' => 1.9994,
                ),
                'fa-commenting' => array(
                    'w' => 1.9994,
                ),
                'fa-commenting-o' => array(
                    'w' => 1.9994,
                ),
                'fa-comments' => array(
                    'w' => 1.9994,
                ),
                'fa-comments-o' => array(
                    'w' => 1.9994,
                ),
                'fa-compass' => array(
                    'w' => 1.7143,
                ),
                'fa-compress' => array(
                    'w' => 1.7143,
                ),
                'fa-connectdevelop' => array(
                    'w' => 2.2864,
                ),
                'fa-contao' => array(
                    'w' => 1.9994,
                ),
                'fa-copyright' => array(
                    'w' => 1.7143,
                ),
                'fa-creative-commons' => array(
                    'w' => 1.9994,
                ),
                'fa-credit-card' => array(
                    'w' => 2.1438,
                ),
                'fa-credit-card-alt' => array(
                    'w' => 2.5714,
                ),
                'fa-crop' => array(
                    'w' => 1.8568,
                ),
                'fa-crosshairs' => array(
                    'w' => 1.7143,
                ),
                'fa-css3' => array(
                    'w' => 1.9994,
                ),
                'fa-cube' => array(
                    'w' => 1.9994,
                ),
                'fa-cubes' => array(
                    'w' => 2.5714,
                ),
                'fa-cutlery' => array(
                    'w' => 1.5718,
                ),
                'fa-dashcube' => array(
                    'w' => 1.7143,
                ),
                'fa-database' => array(
                    'w' => 1.7143,
                ),
                'fa-deaf' => array(
                    'w' => 1.9994,
                ),
                'fa-delicious' => array(
                    'w' => 1.7143,
                ),
                'fa-desktop' => array(
                    'w' => 2.1438,
                ),
                'fa-deviantart' => array(
                    'w' => 1.1442,
                ),
                'fa-diamond' => array(
                    'w' => 2.2864,
                ),
                'fa-digg' => array(
                    'w' => 2.2864,
                ),
                'fa-dot-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-download' => array(
                    'w' => 1.8568,
                ),
                'fa-dribbble' => array(
                    'w' => 1.7143,
                ),
                'fa-dropbox' => array(
                    'w' => 1.9994,
                ),
                'fa-drupal' => array(
                    'w' => 1.7143,
                ),
                'fa-edge' => array(
                    'w' => 1.9994,
                ),
                'fa-eercast' => array(
                    'w' => 1.9994,
                ),
                'fa-eject' => array(
                    'w' => 1.7162,
                ),
                'fa-ellipsis-h' => array(
                    'w' => 1.5718,
                ),
                'fa-ellipsis-v' => array(
                    'w' => 0.4295,
                ),
                'fa-empire' => array(
                    'w' => 1.9994,
                ),
                'fa-envelope' => array(
                    'w' => 1.9994,
                ),
                'fa-envelope-o' => array(
                    'w' => 1.9994,
                ),
                'fa-envelope-open' => array(
                    'w' => 1.9994,
                ),
                'fa-envelope-open-o' => array(
                    'w' => 1.9994,
                ),
                'fa-envelope-square' => array(
                    'w' => 1.7143,
                ),
                'fa-envira' => array(
                    'w' => 1.9994,
                ),
                'fa-eraser' => array(
                    'w' => 2.1438,
                ),
                'fa-etsy' => array(
                    'w' => 1.7143,
                ),
                'fa-eur' => array(
                    'w' => 1.1442,
                ),
                'fa-exchange' => array(
                    'w' => 1.9994,
                ),
                'fa-exclamation' => array(
                    'w' => 0.7146,
                ),
                'fa-exclamation-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-exclamation-triangle' => array(
                    'w' => 1.9994,
                ),
                'fa-expand' => array(
                    'w' => 1.7143,
                ),
                'fa-expeditedssl' => array(
                    'w' => 1.9994,
                ),
                'fa-external-link' => array(
                    'w' => 1.9994,
                ),
                'fa-external-link-square' => array(
                    'w' => 1.7143,
                ),
                'fa-eye' => array(
                    'w' => 1.9994,
                ),
                'fa-eye-slash' => array(
                    'w' => 1.9994,
                ),
                'fa-eyedropper' => array(
                    'w' => 1.9994,
                ),
                'fa-facebook' => array(
                    'w' => 1.1442,
                ),
                'fa-facebook-official' => array(
                    'w' => 1.7143,
                ),
                'fa-facebook-square' => array(
                    'w' => 1.7143,
                ),
                'fa-fast-backward' => array(
                    'w' => 1.9994,
                ),
                'fa-fast-forward' => array(
                    'w' => 1.9994,
                ),
                'fa-fax' => array(
                    'w' => 1.9994,
                ),
                'fa-female' => array(
                    'w' => 1.4292,
                ),
                'fa-fighter-jet' => array(
                    'w' => 2.1438,
                ),
                'fa-file' => array(
                    'w' => 1.7143,
                ),
                'fa-file-archive-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-audio-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-code-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-excel-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-image-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-pdf-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-powerpoint-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-text' => array(
                    'w' => 1.7143,
                ),
                'fa-file-text-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-video-o' => array(
                    'w' => 1.7143,
                ),
                'fa-file-word-o' => array(
                    'w' => 1.7143,
                ),
                'fa-files-o' => array(
                    'w' => 1.9994,
                ),
                'fa-film' => array(
                    'w' => 2.1438,
                ),
                'fa-filter' => array(
                    'w' => 1.5718,
                ),
                'fa-fire' => array(
                    'w' => 1.5718,
                ),
                'fa-fire-extinguisher' => array(
                    'w' => 1.5718,
                ),
                'fa-firefox' => array(
                    'w' => 1.9994,
                ),
                'fa-first-order' => array(
                    'w' => 1.7143,
                ),
                'fa-flag' => array(
                    'w' => 1.9994,
                ),
                'fa-flag-checkered' => array(
                    'w' => 1.9994,
                ),
                'fa-flag-o' => array(
                    'w' => 1.9994,
                ),
                'fa-flask' => array(
                    'w' => 1.8568,
                ),
                'fa-flickr' => array(
                    'w' => 1.7143,
                ),
                'fa-floppy-o' => array(
                    'w' => 1.7143,
                ),
                'fa-folder' => array(
                    'w' => 1.8568,
                ),
                'fa-folder-o' => array(
                    'w' => 1.8568,
                ),
                'fa-folder-open' => array(
                    'w' => 2.1438,
                ),
                'fa-folder-open-o' => array(
                    'w' => 2.1438,
                ),
                'fa-font' => array(
                    'w' => 1.8568,
                ),
                'fa-font-awesome' => array(
                    'w' => 1.7143,
                ),
                'fa-fonticons' => array(
                    'w' => 1.7143,
                ),
                'fa-fort-awesome' => array(
                    'w' => 1.9994,
                ),
                'fa-forumbee' => array(
                    'w' => 1.7143,
                ),
                'fa-forward' => array(
                    'w' => 1.8568,
                ),
                'fa-foursquare' => array(
                    'w' => 1.4292,
                ),
                'fa-free-code-camp' => array(
                    'w' => 2.5714,
                ),
                'fa-frown-o' => array(
                    'w' => 1.7143,
                ),
                'fa-futbol-o' => array(
                    'w' => 1.9994,
                ),
                'fa-gamepad' => array(
                    'w' => 2.1438,
                ),
                'fa-gavel' => array(
                    'w' => 1.9994,
                ),
                'fa-gbp' => array(
                    'w' => 1.1442,
                ),
                'fa-genderless' => array(
                    'w' => 1.4292,
                ),
                'fa-get-pocket' => array(
                    'w' => 1.9193,
                ),
                'fa-gg' => array(
                    'w' => 2.2864,
                ),
                'fa-gg-circle' => array(
                    'w' => 1.9994,
                ),
                'fa-gift' => array(
                    'w' => 1.7143,
                ),
                'fa-git' => array(
                    'w' => 1.9994,
                ),
                'fa-git-square' => array(
                    'w' => 1.7143,
                ),
                'fa-github' => array(
                    'w' => 1.7143,
                ),
                'fa-github-alt' => array(
                    'w' => 1.8568,
                ),
                'fa-github-square' => array(
                    'w' => 1.7143,
                ),
                'fa-gitlab' => array(
                    'w' => 1.9994,
                ),
                'fa-glass' => array(
                    'w' => 1.9994,
                ),
                'fa-glide' => array(
                    'w' => 1.7143,
                ),
                'fa-glide-g' => array(
                    'w' => 1.7143,
                ),
                'fa-globe' => array(
                    'w' => 1.7143,
                ),
                'fa-google' => array(
                    'w' => 1.7143,
                ),
                'fa-google-plus' => array(
                    'w' => 2.5714,
                ),
                'fa-google-plus-official' => array(
                    'w' => 1.7143,
                ),
                'fa-google-plus-square' => array(
                    'w' => 1.7143,
                ),
                'fa-google-wallet' => array(
                    'w' => 1.9994,
                ),
                'fa-graduation-cap' => array(
                    'w' => 2.5714,
                ),
                'fa-gratipay' => array(
                    'w' => 1.7143,
                ),
                'fa-grav' => array(
                    'w' => 2.0033,
                ),
                'fa-h-square' => array(
                    'w' => 1.7143,
                ),
                'fa-hacker-news' => array(
                    'w' => 1.7143,
                ),
                'fa-hand-lizard-o' => array(
                    'w' => 2.2864,
                ),
                'fa-hand-o-down' => array(
                    'w' => 1.7143,
                ),
                'fa-hand-o-left' => array(
                    'w' => 1.9994,
                ),
                'fa-hand-o-right' => array(
                    'w' => 1.9994,
                ),
                'fa-hand-o-up' => array(
                    'w' => 1.7143,
                ),
                'fa-hand-paper-o' => array(
                    'w' => 1.9994,
                ),
                'fa-hand-peace-o' => array(
                    'w' => 1.7143,
                ),
                'fa-hand-pointer-o' => array(
                    'w' => 1.9994,
                ),
                'fa-hand-rock-o' => array(
                    'w' => 1.7143,
                ),
                'fa-hand-scissors-o' => array(
                    'w' => 1.9994,
                ),
                'fa-hand-spock-o' => array(
                    'w' => 2.2864,
                ),
                'fa-handshake-o' => array(
                    'w' => 2.5714,
                ),
                'fa-hashtag' => array(
                    'w' => 1.9994,
                ),
                'fa-hdd-o' => array(
                    'w' => 1.7143,
                ),
                'fa-header' => array(
                    'w' => 1.9994,
                ),
                'fa-headphones' => array(
                    'w' => 1.8568,
                ),
                'fa-heart' => array(
                    'w' => 1.9994,
                ),
                'fa-heart-o' => array(
                    'w' => 1.9994,
                ),
                'fa-heartbeat' => array(
                    'w' => 1.9994,
                ),
                'fa-history' => array(
                    'w' => 1.7143,
                ),
                'fa-home' => array(
                    'w' => 1.8568,
                ),
                'fa-hospital-o' => array(
                    'w' => 1.5718,
                ),
                'fa-hourglass' => array(
                    'w' => 1.7143,
                ),
                'fa-hourglass-end' => array(
                    'w' => 1.7143,
                ),
                'fa-hourglass-half' => array(
                    'w' => 1.7143,
                ),
                'fa-hourglass-o' => array(
                    'w' => 1.7143,
                ),
                'fa-hourglass-start' => array(
                    'w' => 1.7143,
                ),
                'fa-houzz' => array(
                    'w' => 1.1442,
                ),
                'fa-html5' => array(
                    'w' => 1.5718,
                ),
                'fa-i-cursor' => array(
                    'w' => 1.1442,
                ),
                'fa-id-badge' => array(
                    'w' => 1.4292,
                ),
                'fa-id-card' => array(
                    'w' => 2.2864,
                ),
                'fa-id-card-o' => array(
                    'w' => 2.2864,
                ),
                'fa-ils' => array(
                    'w' => 1.7143,
                ),
                'fa-imdb' => array(
                    'w' => 1.7143,
                ),
                'fa-inbox' => array(
                    'w' => 1.7143,
                ),
                'fa-indent' => array(
                    'w' => 1.9994,
                ),
                'fa-industry' => array(
                    'w' => 1.9994,
                ),
                'fa-info' => array(
                    'w' => 0.7146,
                ),
                'fa-info-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-inr' => array(
                    'w' => 1.0036,
                ),
                'fa-instagram' => array(
                    'w' => 1.7143,
                ),
                'fa-internet-explorer' => array(
                    'w' => 1.9994,
                ),
                'fa-ioxhost' => array(
                    'w' => 2.2864,
                ),
                'fa-italic' => array(
                    'w' => 1.1442,
                ),
                'fa-joomla' => array(
                    'w' => 1.7143,
                ),
                'fa-jpy' => array(
                    'w' => 1.1461,
                ),
                'fa-jsfiddle' => array(
                    'w' => 2.2864,
                ),
                'fa-key' => array(
                    'w' => 1.9994,
                ),
                'fa-keyboard-o' => array(
                    'w' => 2.1438,
                ),
                'fa-krw' => array(
                    'w' => 1.9994,
                ),
                'fa-language' => array(
                    'w' => 1.7143,
                ),
                'fa-laptop' => array(
                    'w' => 2.1438,
                ),
                'fa-lastfm' => array(
                    'w' => 1.9994,
                ),
                'fa-lastfm-square' => array(
                    'w' => 1.7143,
                ),
                'fa-leaf' => array(
                    'w' => 1.9994,
                ),
                'fa-leanpub' => array(
                    'w' => 2.2864,
                ),
                'fa-lemon-o' => array(
                    'w' => 1.7143,
                ),
                'fa-level-down' => array(
                    'w' => 1.1442,
                ),
                'fa-level-up' => array(
                    'w' => 1.1442,
                ),
                'fa-life-ring' => array(
                    'w' => 1.9994,
                ),
                'fa-lightbulb-o' => array(
                    'w' => 1.1442,
                ),
                'fa-line-chart' => array(
                    'w' => 2.2864,
                ),
                'fa-link' => array(
                    'w' => 1.8568,
                ),
                'fa-linkedin' => array(
                    'w' => 1.7143,
                ),
                'fa-linkedin-square' => array(
                    'w' => 1.7143,
                ),
                'fa-linode' => array(
                    'w' => 1.7143,
                ),
                'fa-linux' => array(
                    'w' => 1.7143,
                ),
                'fa-list' => array(
                    'w' => 1.9994,
                ),
                'fa-list-alt' => array(
                    'w' => 1.9994,
                ),
                'fa-list-ol' => array(
                    'w' => 1.9994,
                ),
                'fa-list-ul' => array(
                    'w' => 1.9994,
                ),
                'fa-location-arrow' => array(
                    'w' => 1.5718,
                ),
                'fa-lock' => array(
                    'w' => 1.2867,
                ),
                'fa-long-arrow-down' => array(
                    'w' => 0.8571,
                ),
                'fa-long-arrow-left' => array(
                    'w' => 1.9994,
                ),
                'fa-long-arrow-right' => array(
                    'w' => 1.9994,
                ),
                'fa-long-arrow-up' => array(
                    'w' => 0.8571,
                ),
                'fa-low-vision' => array(
                    'w' => 1.9994,
                ),
                'fa-magic' => array(
                    'w' => 1.8568,
                ),
                'fa-magnet' => array(
                    'w' => 1.7143,
                ),
                'fa-male' => array(
                    'w' => 1.1442,
                ),
                'fa-map' => array(
                    'w' => 1.9994,
                ),
                'fa-map-marker' => array(
                    'w' => 1.1442,
                ),
                'fa-map-o' => array(
                    'w' => 2.2864,
                ),
                'fa-map-pin' => array(
                    'w' => 1.1442,
                ),
                'fa-map-signs' => array(
                    'w' => 1.9994,
                ),
                'fa-mars' => array(
                    'w' => 1.7143,
                ),
                'fa-mars-double' => array(
                    'w' => 2.1438,
                ),
                'fa-mars-stroke' => array(
                    'w' => 1.7143,
                ),
                'fa-mars-stroke-h' => array(
                    'w' => 2.2864,
                ),
                'fa-mars-stroke-v' => array(
                    'w' => 1.4292,
                ),
                'fa-maxcdn' => array(
                    'w' => 1.9994,
                ),
                'fa-meanpath' => array(
                    'w' => 1.7143,
                ),
                'fa-medium' => array(
                    'w' => 1.9994,
                ),
                'fa-medkit' => array(
                    'w' => 1.9994,
                ),
                'fa-meetup' => array(
                    'w' => 2.1438,
                ),
                'fa-meh-o' => array(
                    'w' => 1.7143,
                ),
                'fa-mercury' => array(
                    'w' => 1.4292,
                ),
                'fa-microchip' => array(
                    'w' => 1.7143,
                ),
                'fa-microphone' => array(
                    'w' => 1.2867,
                ),
                'fa-microphone-slash' => array(
                    'w' => 1.5718,
                ),
                'fa-minus' => array(
                    'w' => 1.5718,
                ),
                'fa-minus-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-minus-square' => array(
                    'w' => 1.7143,
                ),
                'fa-minus-square-o' => array(
                    'w' => 1.5718,
                ),
                'fa-mixcloud' => array(
                    'w' => 2.5714,
                ),
                'fa-mobile' => array(
                    'w' => 0.8571,
                ),
                'fa-modx' => array(
                    'w' => 1.9994,
                ),
                'fa-money' => array(
                    'w' => 2.1438,
                ),
                'fa-moon-o' => array(
                    'w' => 1.7143,
                ),
                'fa-motorcycle' => array(
                    'w' => 2.5714,
                ),
                'fa-mouse-pointer' => array(
                    'w' => 1.4292,
                ),
                'fa-music' => array(
                    'w' => 1.7143,
                ),
                'fa-neuter' => array(
                    'w' => 1.4292,
                ),
                'fa-newspaper-o' => array(
                    'w' => 2.2864,
                ),
                'fa-object-group' => array(
                    'w' => 2.2864,
                ),
                'fa-object-ungroup' => array(
                    'w' => 2.5714,
                ),
                'fa-odnoklassniki' => array(
                    'w' => 1.4292,
                ),
                'fa-odnoklassniki-square' => array(
                    'w' => 1.7143,
                ),
                'fa-opencart' => array(
                    'w' => 2.5714,
                ),
                'fa-openid' => array(
                    'w' => 1.9994,
                ),
                'fa-opera' => array(
                    'w' => 1.9994,
                ),
                'fa-optin-monster' => array(
                    'w' => 2.5617,
                ),
                'fa-outdent' => array(
                    'w' => 1.9994,
                ),
                'fa-pagelines' => array(
                    'w' => 1.5718,
                ),
                'fa-paint-brush' => array(
                    'w' => 1.9994,
                ),
                'fa-paper-plane' => array(
                    'w' => 1.9994,
                ),
                'fa-paper-plane-o' => array(
                    'w' => 1.9994,
                ),
                'fa-paperclip' => array(
                    'w' => 1.5718,
                ),
                'fa-paragraph' => array(
                    'w' => 1.4292,
                ),
                'fa-pause' => array(
                    'w' => 1.7143,
                ),
                'fa-pause-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-pause-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-paw' => array(
                    'w' => 1.8568,
                ),
                'fa-paypal' => array(
                    'w' => 1.7143,
                ),
                'fa-pencil' => array(
                    'w' => 1.7143,
                ),
                'fa-pencil-square' => array(
                    'w' => 1.7143,
                ),
                'fa-pencil-square-o' => array(
                    'w' => 1.9994,
                ),
                'fa-percent' => array(
                    'w' => 1.7143,
                ),
                'fa-phone' => array(
                    'w' => 1.5718,
                ),
                'fa-phone-square' => array(
                    'w' => 1.7143,
                ),
                'fa-picture-o' => array(
                    'w' => 2.1438,
                ),
                'fa-pie-chart' => array(
                    'w' => 1.9994,
                ),
                'fa-pied-piper' => array(
                    'w' => 2.5714,
                ),
                'fa-pied-piper-alt' => array(
                    'w' => 2.2746,
                ),
                'fa-pied-piper-pp' => array(
                    'w' => 1.7143,
                ),
                'fa-pinterest' => array(
                    'w' => 1.7143,
                ),
                'fa-pinterest-p' => array(
                    'w' => 1.4292,
                ),
                'fa-pinterest-square' => array(
                    'w' => 1.7143,
                ),
                'fa-plane' => array(
                    'w' => 1.5718,
                ),
                'fa-play' => array(
                    'w' => 1.5718,
                ),
                'fa-play-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-play-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-plug' => array(
                    'w' => 1.9994,
                ),
                'fa-plus' => array(
                    'w' => 1.5718,
                ),
                'fa-plus-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-plus-square' => array(
                    'w' => 1.7143,
                ),
                'fa-plus-square-o' => array(
                    'w' => 1.5718,
                ),
                'fa-podcast' => array(
                    'w' => 1.7143,
                ),
                'fa-power-off' => array(
                    'w' => 1.7143,
                ),
                'fa-print' => array(
                    'w' => 1.8568,
                ),
                'fa-product-hunt' => array(
                    'w' => 1.9994,
                ),
                'fa-puzzle-piece' => array(
                    'w' => 1.8568,
                ),
                'fa-qq' => array(
                    'w' => 1.9994,
                ),
                'fa-qrcode' => array(
                    'w' => 1.5718,
                ),
                'fa-question' => array(
                    'w' => 1.1442,
                ),
                'fa-question-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-question-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-quora' => array(
                    'w' => 1.9994,
                ),
                'fa-quote-left' => array(
                    'w' => 1.8568,
                ),
                'fa-quote-right' => array(
                    'w' => 1.8568,
                ),
                'fa-random' => array(
                    'w' => 1.9994,
                ),
                'fa-ravelry' => array(
                    'w' => 2.4289,
                ),
                'fa-rebel' => array(
                    'w' => 1.9994,
                ),
                'fa-recycle' => array(
                    'w' => 1.9994,
                ),
                'fa-reddit' => array(
                    'w' => 1.9994,
                ),
                'fa-reddit-alien' => array(
                    'w' => 1.9994,
                ),
                'fa-reddit-square' => array(
                    'w' => 1.7143,
                ),
                'fa-refresh' => array(
                    'w' => 1.7143,
                ),
                'fa-registered' => array(
                    'w' => 1.9994,
                ),
                'fa-renren' => array(
                    'w' => 1.7143,
                ),
                'fa-repeat' => array(
                    'w' => 1.7143,
                ),
                'fa-reply' => array(
                    'w' => 1.9994,
                ),
                'fa-reply-all' => array(
                    'w' => 1.9994,
                ),
                'fa-retweet' => array(
                    'w' => 2.1438,
                ),
                'fa-road' => array(
                    'w' => 2.1438,
                ),
                'fa-rocket' => array(
                    'w' => 1.8568,
                ),
                'fa-rss' => array(
                    'w' => 1.5718,
                ),
                'fa-rss-square' => array(
                    'w' => 1.7143,
                ),
                'fa-rub' => array(
                    'w' => 1.4292,
                ),
                'fa-safari' => array(
                    'w' => 1.9994,
                ),
                'fa-scissors' => array(
                    'w' => 1.9994,
                ),
                'fa-scribd' => array(
                    'w' => 1.7143,
                ),
                'fa-search' => array(
                    'w' => 1.8568,
                ),
                'fa-search-minus' => array(
                    'w' => 1.8568,
                ),
                'fa-search-plus' => array(
                    'w' => 1.8568,
                ),
                'fa-sellsy' => array(
                    'w' => 2.2864,
                ),
                'fa-server' => array(
                    'w' => 1.9994,
                ),
                'fa-share' => array(
                    'w' => 1.9994,
                ),
                'fa-share-alt' => array(
                    'w' => 1.7143,
                ),
                'fa-share-alt-square' => array(
                    'w' => 1.7143,
                ),
                'fa-share-square' => array(
                    'w' => 1.7143,
                ),
                'fa-share-square-o' => array(
                    'w' => 1.8568,
                ),
                'fa-shield' => array(
                    'w' => 1.4292,
                ),
                'fa-ship' => array(
                    'w' => 2.2864,
                ),
                'fa-shirtsinbulk' => array(
                    'w' => 1.7143,
                ),
                'fa-shopping-bag' => array(
                    'w' => 1.9994,
                ),
                'fa-shopping-basket' => array(
                    'w' => 2.2864,
                ),
                'fa-shopping-cart' => array(
                    'w' => 1.8568,
                ),
                'fa-shower' => array(
                    'w' => 2.1438,
                ),
                'fa-sign-in' => array(
                    'w' => 1.7143,
                ),
                'fa-sign-language' => array(
                    'w' => 1.8568,
                ),
                'fa-sign-out' => array(
                    'w' => 1.8568,
                ),
                'fa-signal' => array(
                    'w' => 1.9994,
                ),
                'fa-simplybuilt' => array(
                    'w' => 2.2864,
                ),
                'fa-sitemap' => array(
                    'w' => 1.9994,
                ),
                'fa-skyatlas' => array(
                    'w' => 2.2864,
                ),
                'fa-skype' => array(
                    'w' => 1.7143,
                ),
                'fa-slack' => array(
                    'w' => 1.8568,
                ),
                'fa-sliders' => array(
                    'w' => 1.7143,
                ),
                'fa-slideshare' => array(
                    'w' => 1.9994,
                ),
                'fa-smile-o' => array(
                    'w' => 1.7143,
                ),
                'fa-snapchat' => array(
                    'w' => 1.7143,
                ),
                'fa-snapchat-ghost' => array(
                    'w' => 1.8568,
                ),
                'fa-snapchat-square' => array(
                    'w' => 1.7143,
                ),
                'fa-snowflake-o' => array(
                    'w' => 1.8568,
                ),
                'fa-sort' => array(
                    'w' => 1.1442,
                ),
                'fa-sort-alpha-asc' => array(
                    'w' => 1.8568,
                ),
                'fa-sort-alpha-desc' => array(
                    'w' => 1.8568,
                ),
                'fa-sort-amount-asc' => array(
                    'w' => 1.9994,
                ),
                'fa-sort-amount-desc' => array(
                    'w' => 1.9994,
                ),
                'fa-sort-asc' => array(
                    'w' => 1.1442,
                ),
                'fa-sort-desc' => array(
                    'w' => 1.1442,
                ),
                'fa-sort-numeric-asc' => array(
                    'w' => 1.7143,
                ),
                'fa-sort-numeric-desc' => array(
                    'w' => 1.7143,
                ),
                'fa-soundcloud' => array(
                    'w' => 2.5714,
                ),
                'fa-space-shuttle' => array(
                    'w' => 2.4289,
                ),
                'fa-spinner' => array(
                    'w' => 1.9994,
                ),
                'fa-spoon' => array(
                    'w' => 0.8571,
                ),
                'fa-spotify' => array(
                    'w' => 1.7143,
                ),
                'fa-square' => array(
                    'w' => 1.7143,
                ),
                'fa-square-o' => array(
                    'w' => 1.5718,
                ),
                'fa-stack-exchange' => array(
                    'w' => 1.4292,
                ),
                'fa-stack-overflow' => array(
                    'w' => 1.7143,
                ),
                'fa-star' => array(
                    'w' => 1.8568,
                ),
                'fa-star-half' => array(
                    'w' => 0.9997,
                ),
                'fa-star-half-o' => array(
                    'w' => 1.8568,
                ),
                'fa-star-o' => array(
                    'w' => 1.8568,
                ),
                'fa-steam' => array(
                    'w' => 1.9994,
                ),
                'fa-steam-square' => array(
                    'w' => 1.7143,
                ),
                'fa-step-backward' => array(
                    'w' => 1.1442,
                ),
                'fa-step-forward' => array(
                    'w' => 1.1442,
                ),
                'fa-stethoscope' => array(
                    'w' => 1.5718,
                ),
                'fa-sticky-note' => array(
                    'w' => 1.7143,
                ),
                'fa-sticky-note-o' => array(
                    'w' => 1.7143,
                ),
                'fa-stop' => array(
                    'w' => 1.7143,
                ),
                'fa-stop-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-stop-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-street-view' => array(
                    'w' => 1.7143,
                ),
                'fa-strikethrough' => array(
                    'w' => 1.9994,
                ),
                'fa-stumbleupon' => array(
                    'w' => 2.1438,
                ),
                'fa-stumbleupon-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-subscript' => array(
                    'w' => 1.7143,
                ),
                'fa-subway' => array(
                    'w' => 1.7143,
                ),
                'fa-suitcase' => array(
                    'w' => 1.9994,
                ),
                'fa-sun-o' => array(
                    'w' => 1.9994,
                ),
                'fa-superpowers' => array(
                    'w' => 1.9994,
                ),
                'fa-superscript' => array(
                    'w' => 1.7143,
                ),
                'fa-table' => array(
                    'w' => 1.8568,
                ),
                'fa-tablet' => array(
                    'w' => 1.2867,
                ),
                'fa-tachometer' => array(
                    'w' => 1.9994,
                ),
                'fa-tag' => array(
                    'w' => 1.7143,
                ),
                'fa-tags' => array(
                    'w' => 2.1438,
                ),
                'fa-tasks' => array(
                    'w' => 1.9994,
                ),
                'fa-taxi' => array(
                    'w' => 2.2864,
                ),
                'fa-telegram' => array(
                    'w' => 1.9994,
                ),
                'fa-television' => array(
                    'w' => 2.2864,
                ),
                'fa-tencent-weibo' => array(
                    'w' => 1.4292,
                ),
                'fa-terminal' => array(
                    'w' => 1.8568,
                ),
                'fa-text-height' => array(
                    'w' => 1.9994,
                ),
                'fa-text-width' => array(
                    'w' => 1.7143,
                ),
                'fa-th' => array(
                    'w' => 1.9994,
                ),
                'fa-th-large' => array(
                    'w' => 1.8568,
                ),
                'fa-th-list' => array(
                    'w' => 1.9994,
                ),
                'fa-themeisle' => array(
                    'w' => 1.9994,
                ),
                'fa-thermometer-empty' => array(
                    'w' => 1.1442,
                ),
                'fa-thermometer-full' => array(
                    'w' => 1.1442,
                ),
                'fa-thermometer-half' => array(
                    'w' => 1.1442,
                ),
                'fa-thermometer-quarter' => array(
                    'w' => 1.1442,
                ),
                'fa-thermometer-three-quarters' => array(
                    'w' => 1.1442,
                ),
                'fa-thumb-tack' => array(
                    'w' => 1.2867,
                ),
                'fa-thumbs-down' => array(
                    'w' => 1.8568,
                ),
                'fa-thumbs-o-down' => array(
                    'w' => 1.7143,
                ),
                'fa-thumbs-o-up' => array(
                    'w' => 1.7143,
                ),
                'fa-thumbs-up' => array(
                    'w' => 1.8568,
                ),
                'fa-ticket' => array(
                    'w' => 1.9994,
                ),
                'fa-times' => array(
                    'w' => 1.5718,
                ),
                'fa-times-circle' => array(
                    'w' => 1.7143,
                ),
                'fa-times-circle-o' => array(
                    'w' => 1.7143,
                ),
                'fa-tint' => array(
                    'w' => 1.1442,
                ),
                'fa-toggle-off' => array(
                    'w' => 2.2864,
                ),
                'fa-toggle-on' => array(
                    'w' => 2.2864,
                ),
                'fa-trademark' => array(
                    'w' => 2.2024,
                ),
                'fa-train' => array(
                    'w' => 1.7143,
                ),
                'fa-transgender' => array(
                    'w' => 1.7143,
                ),
                'fa-transgender-alt' => array(
                    'w' => 1.9994,
                ),
                'fa-trash' => array(
                    'w' => 1.5718,
                ),
                'fa-trash-o' => array(
                    'w' => 1.5718,
                ),
                'fa-tree' => array(
                    'w' => 1.7143,
                ),
                'fa-trello' => array(
                    'w' => 1.7143,
                ),
                'fa-tripadvisor' => array(
                    'w' => 2.5714,
                ),
                'fa-trophy' => array(
                    'w' => 1.8568,
                ),
                'fa-truck' => array(
                    'w' => 1.9994,
                ),
                'fa-try' => array(
                    'w' => 1.2867,
                ),
                'fa-tty' => array(
                    'w' => 1.9994,
                ),
                'fa-tumblr' => array(
                    'w' => 1.1442,
                ),
                'fa-tumblr-square' => array(
                    'w' => 1.7143,
                ),
                'fa-twitch' => array(
                    'w' => 1.9994,
                ),
                'fa-twitter' => array(
                    'w' => 1.8568,
                ),
                'fa-twitter-square' => array(
                    'w' => 1.7143,
                ),
                'fa-umbrella' => array(
                    'w' => 1.8568,
                ),
                'fa-underline' => array(
                    'w' => 1.7143,
                ),
                'fa-undo' => array(
                    'w' => 1.7143,
                ),
                'fa-universal-access' => array(
                    'w' => 1.9994,
                ),
                'fa-university' => array(
                    'w' => 2.2864,
                ),
                'fa-unlock' => array(
                    'w' => 1.8568,
                ),
                'fa-unlock-alt' => array(
                    'w' => 1.2867,
                ),
                'fa-upload' => array(
                    'w' => 1.8568,
                ),
                'fa-usb' => array(
                    'w' => 2.5714,
                ),
                'fa-usd' => array(
                    'w' => 1.1442,
                ),
                'fa-user' => array(
                    'w' => 1.4292,
                ),
                'fa-user-circle' => array(
                    'w' => 1.9994,
                ),
                'fa-user-circle-o' => array(
                    'w' => 1.9994,
                ),
                'fa-user-md' => array(
                    'w' => 1.5718,
                ),
                'fa-user-o' => array(
                    'w' => 1.7143,
                ),
                'fa-user-plus' => array(
                    'w' => 2.2864,
                ),
                'fa-user-secret' => array(
                    'w' => 1.7143,
                ),
                'fa-user-times' => array(
                    'w' => 2.2864,
                ),
                'fa-users' => array(
                    'w' => 2.1438,
                ),
                'fa-venus' => array(
                    'w' => 1.4292,
                ),
                'fa-venus-double' => array(
                    'w' => 1.9994,
                ),
                'fa-venus-mars' => array(
                    'w' => 2.2864,
                ),
                'fa-viacoin' => array(
                    'w' => 1.7143,
                ),
                'fa-viadeo' => array(
                    'w' => 1.4292,
                ),
                'fa-viadeo-square' => array(
                    'w' => 1.7143,
                ),
                'fa-video-camera' => array(
                    'w' => 1.9994,
                ),
                'fa-vimeo' => array(
                    'w' => 1.9994,
                ),
                'fa-vimeo-square' => array(
                    'w' => 1.7143,
                ),
                'fa-vine' => array(
                    'w' => 1.7143,
                ),
                'fa-vk' => array(
                    'w' => 2.1438,
                ),
                'fa-volume-control-phone' => array(
                    'w' => 1.5718,
                ),
                'fa-volume-down' => array(
                    'w' => 1.2867,
                ),
                'fa-volume-off' => array(
                    'w' => 0.8571,
                ),
                'fa-volume-up' => array(
                    'w' => 1.8568,
                ),
                'fa-weibo' => array(
                    'w' => 1.9994,
                ),
                'fa-weixin' => array(
                    'w' => 2.2864,
                ),
                'fa-whatsapp' => array(
                    'w' => 1.7143,
                ),
                'fa-wheelchair' => array(
                    'w' => 1.8568,
                ),
                'fa-wheelchair-alt' => array(
                    'w' => 1.7143,
                ),
                'fa-wifi' => array(
                    'w' => 2.2864,
                ),
                'fa-wikipedia-w' => array(
                    'w' => 2.5714,
                ),
                'fa-window-close' => array(
                    'w' => 1.9994,
                ),
                'fa-window-close-o' => array(
                    'w' => 1.9994,
                ),
                'fa-window-maximize' => array(
                    'w' => 1.9994,
                ),
                'fa-window-minimize' => array(
                    'w' => 1.9994,
                ),
                'fa-window-restore' => array(
                    'w' => 2.2864,
                ),
                'fa-windows' => array(
                    'w' => 1.8568,
                ),
                'fa-wordpress' => array(
                    'w' => 1.9994,
                ),
                'fa-wpbeginner' => array(
                    'w' => 1.9994,
                ),
                'fa-wpexplorer' => array(
                    'w' => 1.9994,
                ),
                'fa-wpforms' => array(
                    'w' => 1.7143,
                ),
                'fa-wrench' => array(
                    'w' => 1.8568,
                ),
                'fa-xing' => array(
                    'w' => 1.5718,
                ),
                'fa-xing-square' => array(
                    'w' => 1.7143,
                ),
                'fa-y-combinator' => array(
                    'w' => 1.7143,
                ),
                'fa-yahoo' => array(
                    'w' => 1.7143,
                ),
                'fa-yelp' => array(
                    'w' => 1.7143,
                ),
                'fa-yoast' => array(
                    'w' => 1.8568,
                ),
                'fa-youtube' => array(
                    'w' => 1.7143,
                ),
                'fa-youtube-play' => array(
                    'w' => 1.9994,
                ),
                'fa-youtube-square' => array(
                    'w' => 1.7143,
                ),
            ),
            'stevotvr.flair.img_path' => './../images/flair/',
            'core.adm_relative_path' => 'adm/',
            'core.table_prefix' => 'phpbb_',
            'cache.driver.class' => 'phpbb\\cache\\driver\\file',
            'dbal.new_link' => false,
        );
    }
}

class phpbbtemplatetwiglexer_000000001a129af800000000359f19b2 extends \phpbb\template\twig\lexer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5d963645edbcd130597673 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5d963645edbd4489177593 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d963645edbb2111038824 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function set_environment(\Twig\Environment $env)
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, 'set_environment', array('env' => $env), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        return $this->valueHolder5d963645edbcd130597673->set_environment($env);
    }

    /**
     * {@inheritDoc}
     */
    public function tokenize($code, $filename = null)
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, 'tokenize', array('code' => $code, 'filename' => $filename), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        return $this->valueHolder5d963645edbcd130597673->tokenize($code, $filename);
    }

    /**
     * {@inheritDoc}
     */
    public function fix_begin_tokens($code, $parent_nodes = array())
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, 'fix_begin_tokens', array('code' => $code, 'parent_nodes' => $parent_nodes), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        return $this->valueHolder5d963645edbcd130597673->fix_begin_tokens($code, $parent_nodes);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer5d963645edbd4489177593 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, '__get', array('name' => $name), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        if (isset(self::$publicProperties5d963645edbb2111038824[$name])) {
            return $this->valueHolder5d963645edbcd130597673->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d963645edbcd130597673;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder5d963645edbcd130597673;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d963645edbcd130597673;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder5d963645edbcd130597673;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, '__isset', array('name' => $name), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d963645edbcd130597673;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5d963645edbcd130597673;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, '__unset', array('name' => $name), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d963645edbcd130597673;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5d963645edbcd130597673;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, '__clone', array(), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        $this->valueHolder5d963645edbcd130597673 = clone $this->valueHolder5d963645edbcd130597673;
    }

    public function __sleep()
    {
        $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, '__sleep', array(), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;

        return array('valueHolder5d963645edbcd130597673');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5d963645edbd4489177593 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5d963645edbd4489177593;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer5d963645edbd4489177593 && ($this->initializer5d963645edbd4489177593->__invoke($valueHolder5d963645edbcd130597673, $this, 'initializeProxy', array(), $this->initializer5d963645edbd4489177593) || 1) && $this->valueHolder5d963645edbcd130597673 = $valueHolder5d963645edbcd130597673;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder5d963645edbcd130597673;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d963645edbcd130597673;
    }


}
