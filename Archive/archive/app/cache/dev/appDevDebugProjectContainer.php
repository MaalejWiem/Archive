<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.lessphp' => 'getAssetic_Filter_LessphpService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'bazinga.exposetranslation.controller' => 'getBazinga_Exposetranslation_ControllerService',
            'bazinga.exposetranslation.dumper.translation_dumper' => 'getBazinga_Exposetranslation_Dumper_TranslationDumperService',
            'bazinga.exposetranslation.finder.translation_finder' => 'getBazinga_Exposetranslation_Finder_TranslationFinderService',
            'be_simple.sso_auth.client' => 'getBeSimple_SsoAuth_ClientService',
            'be_simple.sso_auth.factory' => 'getBeSimple_SsoAuth_FactoryService',
            'be_simple.sso_auth.protocol.cas' => 'getBeSimple_SsoAuth_Protocol_CasService',
            'be_simple.sso_auth.server.cas' => 'getBeSimple_SsoAuth_Server_CasService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'claroline.activity_tool_bundle.listener.tool_listener' => 'getClaroline_ActivityToolBundle_Listener_ToolListenerService',
            'claroline.announcement.manager.announcement_manager' => 'getClaroline_Announcement_Manager_AnnouncementManagerService',
            'claroline.announcement_bundle.listener.announcement_listener' => 'getClaroline_AnnouncementBundle_Listener_AnnouncementListenerService',
            'claroline.announcement_bundle.listener.announcement_widget_listener' => 'getClaroline_AnnouncementBundle_Listener_AnnouncementWidgetListenerService',
            'claroline.authenticator' => 'getClaroline_AuthenticatorService',
            'claroline.common.graph_service' => 'getClaroline_Common_GraphServiceService',
            'claroline.common.home_service' => 'getClaroline_Common_HomeServiceService',
            'claroline.common.logo_service' => 'getClaroline_Common_LogoServiceService',
            'claroline.common.theme_service' => 'getClaroline_Common_ThemeServiceService',
            'claroline.config.platform_config_handler' => 'getClaroline_Config_PlatformConfigHandlerService',
            'claroline.core_bundle.converter.authenticated_user_converter' => 'getClaroline_CoreBundle_Converter_AuthenticatedUserConverterService',
            'claroline.core_bundle.converter.multiple_ids_converter' => 'getClaroline_CoreBundle_Converter_MultipleIdsConverterService',
            'claroline.core_bundle.converter.strict_id_converter' => 'getClaroline_CoreBundle_Converter_StrictIdConverterService',
            'claroline.core_bundle.library.security.voter.administrator_voter' => 'getClaroline_CoreBundle_Library_Security_Voter_AdministratorVoterService',
            'claroline.core_bundle.library.security.voter.resource_voter' => 'getClaroline_CoreBundle_Library_Security_Voter_ResourceVoterService',
            'claroline.core_bundle.library.security.voter.widget_voter' => 'getClaroline_CoreBundle_Library_Security_Voter_WidgetVoterService',
            'claroline.core_bundle.library.security.voter.workspace_voter' => 'getClaroline_CoreBundle_Library_Security_Voter_WorkspaceVoterService',
            'claroline.core_bundle.listener.ajax_authentication_listener' => 'getClaroline_CoreBundle_Listener_AjaxAuthenticationListenerService',
            'claroline.core_bundle.listener.authentication_success_listener' => 'getClaroline_CoreBundle_Listener_AuthenticationSuccessListenerService',
            'claroline.core_bundle.listener.badge.badge_listener' => 'getClaroline_CoreBundle_Listener_Badge_BadgeListenerService',
            'claroline.core_bundle.listener.locale_setter' => 'getClaroline_CoreBundle_Listener_LocaleSetterService',
            'claroline.core_bundle.listener.log.log_listener' => 'getClaroline_CoreBundle_Listener_Log_LogListenerService',
            'claroline.core_bundle.listener.log.log_widget_listener' => 'getClaroline_CoreBundle_Listener_Log_LogWidgetListenerService',
            'claroline.core_bundle.listener.query_string_handler' => 'getClaroline_CoreBundle_Listener_QueryStringHandlerService',
            'claroline.core_bundle.listener.resource.activity_listener' => 'getClaroline_CoreBundle_Listener_Resource_ActivityListenerService',
            'claroline.core_bundle.listener.resource.directory_listener' => 'getClaroline_CoreBundle_Listener_Resource_DirectoryListenerService',
            'claroline.core_bundle.listener.resource.file_listener' => 'getClaroline_CoreBundle_Listener_Resource_FileListenerService',
            'claroline.core_bundle.listener.resource.text_listener' => 'getClaroline_CoreBundle_Listener_Resource_TextListenerService',
            'claroline.core_bundle.listener.simple_text_widget_listener' => 'getClaroline_CoreBundle_Listener_SimpleTextWidgetListenerService',
            'claroline.core_bundle.listener.tool.home_listener' => 'getClaroline_CoreBundle_Listener_Tool_HomeListenerService',
            'claroline.core_bundle.listener.tool.resource_manager_import_export_listener' => 'getClaroline_CoreBundle_Listener_Tool_ResourceManagerImportExportListenerService',
            'claroline.core_bundle.listener.tool.resource_manager_listener' => 'getClaroline_CoreBundle_Listener_Tool_ResourceManagerListenerService',
            'claroline.core_bundle.listener.tool_listener' => 'getClaroline_CoreBundle_Listener_ToolListenerService',
            'claroline.core_bundle.listener.user_password_encoder' => 'getClaroline_CoreBundle_Listener_UserPasswordEncoderService',
            'claroline.core_bundle.listener.view_as_listener' => 'getClaroline_CoreBundle_Listener_ViewAsListenerService',
            'claroline.core_bundle.listener.workspace_widget_listener' => 'getClaroline_CoreBundle_Listener_WorkspaceWidgetListenerService',
            'claroline.core_bundle.twig.date_formatter_extension' => 'getClaroline_CoreBundle_Twig_DateFormatterExtensionService',
            'claroline.core_bundle.twig.has_role_extension' => 'getClaroline_CoreBundle_Twig_HasRoleExtensionService',
            'claroline.core_bundle.twig.home_extension' => 'getClaroline_CoreBundle_Twig_HomeExtensionService',
            'claroline.core_bundle.twig.mailer_extension' => 'getClaroline_CoreBundle_Twig_MailerExtensionService',
            'claroline.core_bundle.twig.platform_configuration_extension' => 'getClaroline_CoreBundle_Twig_PlatformConfigurationExtensionService',
            'claroline.core_bundle.twig.resource_mode_extension' => 'getClaroline_CoreBundle_Twig_ResourceModeExtensionService',
            'claroline.core_bundle.twig.theme_extension' => 'getClaroline_CoreBundle_Twig_ThemeExtensionService',
            'claroline.core_bundle.twig.workspace_access_extension' => 'getClaroline_CoreBundle_Twig_WorkspaceAccessExtensionService',
            'claroline.core_bundle.validator.constraints.admin_workspace_tag_unique_name_validator' => 'getClaroline_CoreBundle_Validator_Constraints_AdminWorkspaceTagUniqueNameValidatorService',
            'claroline.core_bundle.validator.constraints.csv_user_validator' => 'getClaroline_CoreBundle_Validator_Constraints_CsvUserValidatorService',
            'claroline.core_bundle.validator.constraints.send_to_names_validator' => 'getClaroline_CoreBundle_Validator_Constraints_SendToNamesValidatorService',
            'claroline.core_bundle.validator.constraints.workspace_unique_code_validator' => 'getClaroline_CoreBundle_Validator_Constraints_WorkspaceUniqueCodeValidatorService',
            'claroline.doctrine_fixture_executor' => 'getClaroline_DoctrineFixtureExecutorService',
            'claroline.event.event_dispatcher' => 'getClaroline_Event_EventDispatcherService',
            'claroline.event.manager' => 'getClaroline_Event_ManagerService',
            'claroline.form.adminlogfilter' => 'getClaroline_Form_AdminlogfilterService',
            'claroline.form.badge' => 'getClaroline_Form_BadgeService',
            'claroline.form.badgerule' => 'getClaroline_Form_BadgeruleService',
            'claroline.form.buttongroupselect' => 'getClaroline_Form_ButtongroupselectService',
            'claroline.form.claimbadge' => 'getClaroline_Form_ClaimbadgeService',
            'claroline.form.datepicker' => 'getClaroline_Form_DatepickerService',
            'claroline.form.daterange' => 'getClaroline_Form_DaterangeService',
            'claroline.form.factory' => 'getClaroline_Form_FactoryService',
            'claroline.form.logworkspacewidgetconfig' => 'getClaroline_Form_LogworkspacewidgetconfigService',
            'claroline.form.simpleautocomplete' => 'getClaroline_Form_SimpleautocompleteService',
            'claroline.form.tinymce' => 'getClaroline_Form_TinymceService',
            'claroline.form.twolevelselect' => 'getClaroline_Form_TwolevelselectService',
            'claroline.form.workspacelogfilter' => 'getClaroline_Form_WorkspacelogfilterService',
            'claroline.install.core_installer' => 'getClaroline_Install_CoreInstallerService',
            'claroline.installation.fixture_loader' => 'getClaroline_Installation_FixtureLoaderService',
            'claroline.installation.loader' => 'getClaroline_Installation_LoaderService',
            'claroline.installation.manager' => 'getClaroline_Installation_ManagerService',
            'claroline.installation.mapping_loader' => 'getClaroline_Installation_MappingLoaderService',
            'claroline.installation.operation_executor' => 'getClaroline_Installation_OperationExecutorService',
            'claroline.installation.refresher' => 'getClaroline_Installation_RefresherService',
            'claroline.listener.forum_listener' => 'getClaroline_Listener_ForumListenerService',
            'claroline.listener.image_player_listener' => 'getClaroline_Listener_ImagePlayerListenerService',
            'claroline.listener.pdf_player_listener' => 'getClaroline_Listener_PdfPlayerListenerService',
            'claroline.listener.video_player_listener' => 'getClaroline_Listener_VideoPlayerListenerService',
            'claroline.log.manager' => 'getClaroline_Log_ManagerService',
            'claroline.manager.analytics_manager' => 'getClaroline_Manager_AnalyticsManagerService',
            'claroline.manager.badge' => 'getClaroline_Manager_BadgeService',
            'claroline.manager.forum_manager' => 'getClaroline_Manager_ForumManagerService',
            'claroline.manager.group_manager' => 'getClaroline_Manager_GroupManagerService',
            'claroline.manager.home_manager' => 'getClaroline_Manager_HomeManagerService',
            'claroline.manager.home_tab_manager' => 'getClaroline_Manager_HomeTabManagerService',
            'claroline.manager.icon_manager' => 'getClaroline_Manager_IconManagerService',
            'claroline.manager.mail_manager' => 'getClaroline_Manager_MailManagerService',
            'claroline.manager.mask_manager' => 'getClaroline_Manager_MaskManagerService',
            'claroline.manager.message_manager' => 'getClaroline_Manager_MessageManagerService',
            'claroline.manager.resource_manager' => 'getClaroline_Manager_ResourceManagerService',
            'claroline.manager.rights_manager' => 'getClaroline_Manager_RightsManagerService',
            'claroline.manager.role_manager' => 'getClaroline_Manager_RoleManagerService',
            'claroline.manager.rss_manager' => 'getClaroline_Manager_RssManagerService',
            'claroline.manager.simple_text_manager' => 'getClaroline_Manager_SimpleTextManagerService',
            'claroline.manager.tool_manager' => 'getClaroline_Manager_ToolManagerService',
            'claroline.manager.user_manager' => 'getClaroline_Manager_UserManagerService',
            'claroline.manager.widget_manager' => 'getClaroline_Manager_WidgetManagerService',
            'claroline.manager.workspace_manager' => 'getClaroline_Manager_WorkspaceManagerService',
            'claroline.manager.workspace_tag_manager' => 'getClaroline_Manager_WorkspaceTagManagerService',
            'claroline.migration.doctrine_schema_tool' => 'getClaroline_Migration_DoctrineSchemaToolService',
            'claroline.migration.generator' => 'getClaroline_Migration_GeneratorService',
            'claroline.migration.manager' => 'getClaroline_Migration_ManagerService',
            'claroline.migration.migrator' => 'getClaroline_Migration_MigratorService',
            'claroline.migration.writer' => 'getClaroline_Migration_WriterService',
            'claroline.pager.pager_factory' => 'getClaroline_Pager_PagerFactoryService',
            'claroline.persistence.object_manager' => 'getClaroline_Persistence_ObjectManagerService',
            'claroline.plugin.config_checker' => 'getClaroline_Plugin_ConfigCheckerService',
            'claroline.plugin.installer' => 'getClaroline_Plugin_InstallerService',
            'claroline.plugin.loader' => 'getClaroline_Plugin_LoaderService',
            'claroline.plugin.migrator' => 'getClaroline_Plugin_MigratorService',
            'claroline.plugin.recorder' => 'getClaroline_Plugin_RecorderService',
            'claroline.plugin.recorder_database_writer' => 'getClaroline_Plugin_RecorderDatabaseWriterService',
            'claroline.plugin.routing_checker' => 'getClaroline_Plugin_RoutingCheckerService',
            'claroline.plugin.validator' => 'getClaroline_Plugin_ValidatorService',
            'claroline.repository.badge' => 'getClaroline_Repository_BadgeService',
            'claroline.resource.mode_accessor' => 'getClaroline_Resource_ModeAccessorService',
            'claroline.resource.query_string_writer' => 'getClaroline_Resource_QueryStringWriterService',
            'claroline.rss_reader.atom_reader' => 'getClaroline_RssReader_AtomReaderService',
            'claroline.rss_reader.provider' => 'getClaroline_RssReader_ProviderService',
            'claroline.rss_reader.rss_reader' => 'getClaroline_RssReader_RssReaderService',
            'claroline.rss_reader_bundle.listener.rss_reader_listener' => 'getClaroline_RssReaderBundle_Listener_RssReaderListenerService',
            'claroline.security.token_updater' => 'getClaroline_Security_TokenUpdaterService',
            'claroline.security.utilities' => 'getClaroline_Security_UtilitiesService',
            'claroline.symfony_fixture_loader' => 'getClaroline_SymfonyFixtureLoaderService',
            'claroline.symfony_yaml' => 'getClaroline_SymfonyYamlService',
            'claroline.temporary_access_resource_manager' => 'getClaroline_TemporaryAccessResourceManagerService',
            'claroline.transformer.badge' => 'getClaroline_Transformer_BadgeService',
            'claroline.utilities.lipsum_generator' => 'getClaroline_Utilities_LipsumGeneratorService',
            'claroline.utilities.misc' => 'getClaroline_Utilities_MiscService',
            'claroline.utilities.paginator_parser' => 'getClaroline_Utilities_PaginatorParserService',
            'claroline.utilities.thumbnail_creator' => 'getClaroline_Utilities_ThumbnailCreatorService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.deprecation_logger_listener' => 'getDebug_DeprecationLoggerListenerService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'debug.templating.engine.twig' => 'getDebug_Templating_Engine_TwigService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'http_kernel' => 'getHttpKernelService',
            'icap.blog.manager.tag' => 'getIcap_Blog_Manager_TagService',
            'icap.blog.post_repository' => 'getIcap_Blog_PostRepositoryService',
            'icap.blog.tag_repository' => 'getIcap_Blog_TagRepositoryService',
            'icap.blog.twig.extension' => 'getIcap_Blog_Twig_ExtensionService',
            'icap.blog.type.tags' => 'getIcap_Blog_Type_TagsService',
            'icap.dropzone_bundle.library.security.voter.temporary_access_resource_voter' => 'getIcap_DropzoneBundle_Library_Security_Voter_TemporaryAccessResourceVoterService',
            'icap.dropzone_bundle.listener.log.log_drop_evaluate_listener' => 'getIcap_DropzoneBundle_Listener_Log_LogDropEvaluateListenerService',
            'icap.lesson.chaptertype' => 'getIcap_Lesson_ChaptertypeService',
            'icap.lesson.duplicatechaptertype' => 'getIcap_Lesson_DuplicatechaptertypeService',
            'icap.lesson.manager.chapter' => 'getIcap_Lesson_Manager_ChapterService',
            'icap.lesson.movechaptertype' => 'getIcap_Lesson_MovechaptertypeService',
            'icap.listener.blog.log_listener' => 'getIcap_Listener_Blog_LogListenerService',
            'icap.listener.blog_listener' => 'getIcap_Listener_BlogListenerService',
            'icap.listener.document_listener' => 'getIcap_Listener_DocumentListenerService',
            'icap.listener.dropzone.display_log_listener' => 'getIcap_Listener_Dropzone_DisplayLogListenerService',
            'icap.listener.dropzone_listener' => 'getIcap_Listener_DropzoneListenerService',
            'icap.listener.lesson_listener' => 'getIcap_Listener_LessonListenerService',
            'icap.listener.lesson_log_listener' => 'getIcap_Listener_LessonLogListenerService',
            'icap.listener.log_listener' => 'getIcap_Listener_LogListenerService',
            'icap.listener.wiki_listener' => 'getIcap_Listener_WikiListenerService',
            'icap.wiki.contribution_manager' => 'getIcap_Wiki_ContributionManagerService',
            'icap.wiki.contribution_repository' => 'getIcap_Wiki_ContributionRepositoryService',
            'icap.wiki.section_edit_type' => 'getIcap_Wiki_SectionEditTypeService',
            'icap.wiki.section_manager' => 'getIcap_Wiki_SectionManagerService',
            'icap.wiki.section_repository' => 'getIcap_Wiki_SectionRepositoryService',
            'icap_blog.form.post' => 'getIcapBlog_Form_PostService',
            'idci_exporter.manager' => 'getIdciExporter_ManagerService',
            'idci_exporter.transformer_twig' => 'getIdciExporter_TransformerTwigService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_di_extra.metadata.converter' => 'getJmsDiExtra_Metadata_ConverterService',
            'jms_di_extra.metadata.metadata_factory' => 'getJmsDiExtra_Metadata_MetadataFactoryService',
            'jms_di_extra.metadata_driver' => 'getJmsDiExtra_MetadataDriverService',
            'kernel' => 'getKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.deprecation' => 'getMonolog_Logger_DeprecationService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.method_interceptor' => 'getSecurity_Access_MethodInterceptorService',
            'security.access.pointcut' => 'getSecurity_Access_PointcutService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService',
            'security.acl.object_identity_retrieval_strategy' => 'getSecurity_Acl_ObjectIdentityRetrievalStrategyService',
            'security.acl.permission.map' => 'getSecurity_Acl_Permission_MapService',
            'security.acl.permission_evaluator' => 'getSecurity_Acl_PermissionEvaluatorService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.acl.security_identity_retrieval_strategy' => 'getSecurity_Acl_SecurityIdentityRetrievalStrategyService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.sso.authentication_failure_handler' => 'getSecurity_Authentication_Sso_AuthenticationFailureHandlerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.context' => 'getSecurity_ContextService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.expressions.compiler' => 'getSecurity_Expressions_CompilerService',
            'security.expressions.handler' => 'getSecurity_Expressions_HandlerService',
            'security.expressions.reverse_interpreter' => 'getSecurity_Expressions_ReverseInterpreterService',
            'security.extra.metadata_driver' => 'getSecurity_Extra_MetadataDriverService',
            'security.extra.metadata_factory' => 'getSecurity_Extra_MetadataFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.install' => 'getSecurity_Firewall_Map_Context_InstallService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user.provider.concrete.user_db' => 'getSecurity_User_Provider_Concrete_UserDbService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.event_listener.blame' => 'getStofDoctrineExtensions_EventListener_BlameService',
            'stof_doctrine_extensions.listener.blameable' => 'getStofDoctrineExtensions_Listener_BlameableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.stfalcon_tinymce' => 'getTwig_Extension_StfalconTinymceService',
            'twig.extension.twigextensions' => 'getTwig_Extension_TwigextensionsService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'twig_js.assetic_filter' => 'getTwigJs_AsseticFilterService',
            'twig_js.compile_request_handler' => 'getTwigJs_CompileRequestHandlerService',
            'ujm.exercise.validator.isvalidqcmglobalmark' => 'getUjm_Exercise_Validator_IsvalidqcmglobalmarkService',
            'ujm.exercise.validator.isvalidqcmmark' => 'getUjm_Exercise_Validator_IsvalidqcmmarkService',
            'ujm.exercise_services' => 'getUjm_ExerciseServicesService',
            'ujm.listener.exercise_listener' => 'getUjm_Listener_ExerciseListenerService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
            'workspace_role_tool_config_listener' => 'getWorkspaceRoleToolConfigListenerService',
            'zenstruck_form.theme_type' => 'getZenstruckForm_ThemeTypeService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'templating' => 'debug.templating.engine.twig',
            'translator' => 'translator.default',
        );
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/home/jenkins/jobs/Release/workspace/app/cache/dev/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/home/jenkins/jobs/Release/workspace/app/cache/dev/assetic/config'), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineMigrationBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineMigrationBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineMigrationBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/migration-bundle/Claroline/MigrationBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineInstallationBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineInstallationBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineInstallationBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/installation-bundle/Claroline/InstallationBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrontEndBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/FrontEndBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrontEndBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/front-end-bundle/Claroline/Bundle/FrontEndBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineCoreBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineCoreBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineCoreBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineActivityToolBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineActivityToolBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineActivityToolBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/activity-tool-bundle/Claroline/ActivityToolBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineAnnouncementBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineAnnouncementBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineAnnouncementBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineForumBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineForumBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineForumBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineImagePlayerBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineImagePlayerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineImagePlayerBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolinePdfPlayerBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolinePdfPlayerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolinePdfPlayerBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineVideoPlayerBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineVideoPlayerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineVideoPlayerBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapBlogBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/IcapBlogBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapBlogBundle', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapDropzoneBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/IcapDropzoneBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapDropzoneBundle', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapWikiBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/IcapWikiBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapWikiBundle', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'UJMExoBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/UJMExoBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'UJMExoBundle', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineRssReaderBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineRssReaderBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineRssReaderBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapLessonBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/IcapLessonBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IcapLessonBundle', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/TwigBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/SecurityBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/FrameworkBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/WebProfilerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/DoctrineBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/home/jenkins/jobs/Release/workspace/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/MonologBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/SwiftmailerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/AsseticBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/home/jenkins/jobs/Release/workspace/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaExposeTranslationBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/BazingaExposeTranslationBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaExposeTranslationBundle', '/home/jenkins/jobs/Release/workspace/vendor/willdurand/expose-translation-bundle/Bazinga/ExposeTranslationBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IDCIExporterBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/IDCIExporterBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IDCIExporterBundle', '/home/jenkins/jobs/Release/workspace/vendor/idci/exporter-bundle/IDCI/Bundle/ExporterBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WhiteOctoberPagerfantaBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/WhiteOctoberPagerfantaBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WhiteOctoberPagerfantaBundle', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSJsRoutingBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/FOSJsRoutingBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSJsRoutingBundle', '/home/jenkins/jobs/Release/workspace/vendor/friendsofsymfony/jsrouting-bundle/FOS/JsRoutingBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/StofDoctrineExtensionsBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', '/home/jenkins/jobs/Release/workspace/vendor/stof/doctrine-extensions-bundle/Stof/DoctrineExtensionsBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSAopBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/JMSAopBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSAopBundle', '/home/jenkins/jobs/Release/workspace/vendor/jms/aop-bundle/JMS/AopBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSDiExtraBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/JMSDiExtraBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSDiExtraBundle', '/home/jenkins/jobs/Release/workspace/vendor/jms/di-extra-bundle/JMS/DiExtraBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/JMSSecurityExtraBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/home/jenkins/jobs/Release/workspace/vendor/jms/security-extra-bundle/JMS/SecurityExtraBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/SensioGeneratorBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', '/home/jenkins/jobs/Release/workspace/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/SensioFrameworkExtraBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/home/jenkins/jobs/Release/workspace/vendor/sensio/framework-extra-bundle/Sensio/Bundle/FrameworkExtraBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BeSimpleSsoAuthBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/BeSimpleSsoAuthBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BeSimpleSsoAuthBundle', '/home/jenkins/jobs/Release/workspace/vendor/besimple/sso-auth-bundle/BeSimple/SsoAuthBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ZenstruckFormBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ZenstruckFormBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ZenstruckFormBundle', '/home/jenkins/jobs/Release/workspace/vendor/zenstruck/form-bundle/Zenstruck/Bundle/FormBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSTwigJsBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/JMSTwigJsBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSTwigJsBundle', '/home/jenkins/jobs/Release/workspace/vendor/jms/twig-js-bundle/JMS/TwigJsBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StfalconTinymceBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/StfalconTinymceBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StfalconTinymceBundle', '/home/jenkins/jobs/Release/workspace/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineKernelBundle', '/home/jenkins/jobs/Release/workspace/app/Resources/ClarolineKernelBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'ClarolineKernelBundle', '/home/jenkins/jobs/Release/workspace/vendor/claroline/kernel-bundle/Claroline/KernelBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/home/jenkins/jobs/Release/workspace/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.lessphp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\LessphpFilter A Assetic\Filter\LessphpFilter instance.
     */
    protected function getAssetic_Filter_LessphpService()
    {
        require_once '/home/jenkins/jobs/Release/workspace/app/../vendor/leafo/lessphp/lessc.inc.php';

        $this->services['assetic.filter.lessphp'] = $instance = new \Assetic\Filter\LessphpFilter();

        $instance->setPresets(array());
        $instance->setLoadPaths(array());
        $instance->setFormatter(NULL);
        $instance->setPreserveComments(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'lessphp' => 'assetic.filter.lessphp', 'twig_js' => 'twig_js.assetic_filter'));
    }

    /**
     * Gets the 'bazinga.exposetranslation.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bazinga\ExposeTranslationBundle\Controller\Controller A Bazinga\ExposeTranslationBundle\Controller\Controller instance.
     */
    protected function getBazinga_Exposetranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.exposetranslation.controller'] = $instance = new \Bazinga\ExposeTranslationBundle\Controller\Controller($this->get('translator.default'), $this->get('debug.templating.engine.twig'), $this->get('bazinga.exposetranslation.finder.translation_finder'), '/home/jenkins/jobs/Release/workspace/app/cache/dev/bazinga_expose_translation', true, '', array(0 => 'messages'));

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));

        return $instance;
    }

    /**
     * Gets the 'bazinga.exposetranslation.dumper.translation_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bazinga\ExposeTranslationBundle\Dumper\TranslationDumper A Bazinga\ExposeTranslationBundle\Dumper\TranslationDumper instance.
     */
    protected function getBazinga_Exposetranslation_Dumper_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.exposetranslation.dumper.translation_dumper'] = $instance = new \Bazinga\ExposeTranslationBundle\Dumper\TranslationDumper($this->get('kernel'), $this->get('debug.templating.engine.twig'), $this->get('bazinga.exposetranslation.finder.translation_finder'), $this->get('router'), $this->get('filesystem'));

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xliff', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('qt', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));

        return $instance;
    }

    /**
     * Gets the 'bazinga.exposetranslation.finder.translation_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bazinga\ExposeTranslationBundle\Finder\TranslationFinder A Bazinga\ExposeTranslationBundle\Finder\TranslationFinder instance.
     */
    protected function getBazinga_Exposetranslation_Finder_TranslationFinderService()
    {
        return $this->services['bazinga.exposetranslation.finder.translation_finder'] = new \Bazinga\ExposeTranslationBundle\Finder\TranslationFinder($this->get('kernel'));
    }

    /**
     * Gets the 'be_simple.sso_auth.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return BeSimple\SsoAuthBundle\Buzz\AdaptiveClient A BeSimple\SsoAuthBundle\Buzz\AdaptiveClient instance.
     */
    protected function getBeSimple_SsoAuth_ClientService()
    {
        return $this->services['be_simple.sso_auth.client'] = new \BeSimple\SsoAuthBundle\Buzz\AdaptiveClient(array(64 => true));
    }

    /**
     * Gets the 'be_simple.sso_auth.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return BeSimple\SsoAuthBundle\Sso\Factory A BeSimple\SsoAuthBundle\Sso\Factory instance.
     */
    protected function getBeSimple_SsoAuth_FactoryService()
    {
        $this->services['be_simple.sso_auth.factory'] = $instance = new \BeSimple\SsoAuthBundle\Sso\Factory($this, $this->get('be_simple.sso_auth.client'));

        $instance->addProtocol('cas', 'be_simple.sso_auth.protocol.cas');
        $instance->addServer('cas', 'be_simple.sso_auth.server.cas');

        return $instance;
    }

    /**
     * Gets the 'be_simple.sso_auth.protocol.cas' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return BeSimple\SsoAuthBundle\Sso\Cas\Protocol A BeSimple\SsoAuthBundle\Sso\Cas\Protocol instance.
     */
    protected function getBeSimple_SsoAuth_Protocol_CasService()
    {
        return $this->services['be_simple.sso_auth.protocol.cas'] = new \BeSimple\SsoAuthBundle\Sso\Cas\Protocol();
    }

    /**
     * Gets the 'be_simple.sso_auth.server.cas' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return BeSimple\SsoAuthBundle\Sso\Cas\Server A BeSimple\SsoAuthBundle\Sso\Cas\Server instance.
     */
    protected function getBeSimple_SsoAuth_Server_CasService()
    {
        return $this->services['be_simple.sso_auth.server.cas'] = new \BeSimple\SsoAuthBundle\Sso\Cas\Server();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/home/jenkins/jobs/Release/workspace/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, $this->get('jms_di_extra.controller_resolver'), array())));
    }

    /**
     * Gets the 'claroline.activity_tool_bundle.listener.tool_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\ActivityToolBundle\Listener\ToolListener A Claroline\ActivityToolBundle\Listener\ToolListener instance.
     */
    protected function getClaroline_ActivityToolBundle_Listener_ToolListenerService()
    {
        return $this->services['claroline.activity_tool_bundle.listener.tool_listener'] = new \Claroline\ActivityToolBundle\Listener\ToolListener($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.manager.resource_manager'), $this->get('security.context'), $this->get('debug.templating.engine.twig'), $this->get('claroline.security.utilities'));
    }

    /**
     * Gets the 'claroline.announcement.manager.announcement_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\AnnouncementBundle\Manager\AnnouncementManager A Claroline\AnnouncementBundle\Manager\AnnouncementManager instance.
     */
    protected function getClaroline_Announcement_Manager_AnnouncementManagerService()
    {
        return $this->services['claroline.announcement.manager.announcement_manager'] = new \Claroline\AnnouncementBundle\Manager\AnnouncementManager($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.announcement_bundle.listener.announcement_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\AnnouncementBundle\Listener\AnnouncementListener A Claroline\AnnouncementBundle\Listener\AnnouncementListener instance.
     * 
     * @throws InactiveScopeException when the 'claroline.announcement_bundle.listener.announcement_listener' service is requested while the 'request' scope is not active
     */
    protected function getClaroline_AnnouncementBundle_Listener_AnnouncementListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('claroline.announcement_bundle.listener.announcement_listener', 'request');
        }

        return $this->services['claroline.announcement_bundle.listener.announcement_listener'] = $this->scopedServices['request']['claroline.announcement_bundle.listener.announcement_listener'] = new \Claroline\AnnouncementBundle\Listener\AnnouncementListener($this->get('claroline.form.factory'), $this->get('request'), $this->get('claroline.manager.resource_manager'), $this->get('debug.templating.engine.twig'), $this->get('router'));
    }

    /**
     * Gets the 'claroline.announcement_bundle.listener.announcement_widget_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\AnnouncementBundle\Listener\AnnouncementWidgetListener A Claroline\AnnouncementBundle\Listener\AnnouncementWidgetListener instance.
     * 
     * @throws InactiveScopeException when the 'claroline.announcement_bundle.listener.announcement_widget_listener' service is requested while the 'request' scope is not active
     */
    protected function getClaroline_AnnouncementBundle_Listener_AnnouncementWidgetListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('claroline.announcement_bundle.listener.announcement_widget_listener', 'request');
        }

        return $this->services['claroline.announcement_bundle.listener.announcement_widget_listener'] = $this->scopedServices['request']['claroline.announcement_bundle.listener.announcement_widget_listener'] = new \Claroline\AnnouncementBundle\Listener\AnnouncementWidgetListener($this->get('request'), $this->get('http_kernel'));
    }

    /**
     * Gets the 'claroline.authenticator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\Authenticator A Claroline\CoreBundle\Library\Security\Authenticator instance.
     */
    protected function getClaroline_AuthenticatorService()
    {
        return $this->services['claroline.authenticator'] = new \Claroline\CoreBundle\Library\Security\Authenticator($this->get('claroline.persistence.object_manager'), $this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'claroline.common.graph_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Home\GraphService A Claroline\CoreBundle\Library\Home\GraphService instance.
     */
    protected function getClaroline_Common_GraphServiceService()
    {
        return $this->services['claroline.common.graph_service'] = new \Claroline\CoreBundle\Library\Home\GraphService();
    }

    /**
     * Gets the 'claroline.common.home_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Home\HomeService A Claroline\CoreBundle\Library\Home\HomeService instance.
     */
    protected function getClaroline_Common_HomeServiceService()
    {
        return $this->services['claroline.common.home_service'] = new \Claroline\CoreBundle\Library\Home\HomeService();
    }

    /**
     * Gets the 'claroline.common.logo_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Logo\LogoService A Claroline\CoreBundle\Library\Logo\LogoService instance.
     */
    protected function getClaroline_Common_LogoServiceService()
    {
        return $this->services['claroline.common.logo_service'] = new \Claroline\CoreBundle\Library\Logo\LogoService();
    }

    /**
     * Gets the 'claroline.common.theme_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Themes\ThemeService A Claroline\CoreBundle\Library\Themes\ThemeService instance.
     */
    protected function getClaroline_Common_ThemeServiceService()
    {
        return $this->services['claroline.common.theme_service'] = new \Claroline\CoreBundle\Library\Themes\ThemeService($this->get('doctrine.orm.default_entity_manager'), $this);
    }

    /**
     * Gets the 'claroline.config.platform_config_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Configuration\PlatformConfigurationHandler A Claroline\CoreBundle\Library\Configuration\PlatformConfigurationHandler instance.
     */
    protected function getClaroline_Config_PlatformConfigHandlerService()
    {
        return $this->services['claroline.config.platform_config_handler'] = new \Claroline\CoreBundle\Library\Configuration\PlatformConfigurationHandler(array('prod' => '/home/jenkins/jobs/Release/workspace/app/config/platform_options.yml'));
    }

    /**
     * Gets the 'claroline.core_bundle.converter.authenticated_user_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Converter\AuthenticatedUserConverter A Claroline\CoreBundle\Converter\AuthenticatedUserConverter instance.
     */
    protected function getClaroline_CoreBundle_Converter_AuthenticatedUserConverterService()
    {
        return $this->services['claroline.core_bundle.converter.authenticated_user_converter'] = new \Claroline\CoreBundle\Converter\AuthenticatedUserConverter($this->get('security.context'), $this->get('translator.default'));
    }

    /**
     * Gets the 'claroline.core_bundle.converter.multiple_ids_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Converter\MultipleIdsConverter A Claroline\CoreBundle\Converter\MultipleIdsConverter instance.
     */
    protected function getClaroline_CoreBundle_Converter_MultipleIdsConverterService()
    {
        return $this->services['claroline.core_bundle.converter.multiple_ids_converter'] = new \Claroline\CoreBundle\Converter\MultipleIdsConverter($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.converter.strict_id_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Converter\StrictIdConverter A Claroline\CoreBundle\Converter\StrictIdConverter instance.
     */
    protected function getClaroline_CoreBundle_Converter_StrictIdConverterService()
    {
        return $this->services['claroline.core_bundle.converter.strict_id_converter'] = new \Claroline\CoreBundle\Converter\StrictIdConverter($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.library.security.voter.administrator_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\Voter\AdministratorVoter A Claroline\CoreBundle\Library\Security\Voter\AdministratorVoter instance.
     */
    protected function getClaroline_CoreBundle_Library_Security_Voter_AdministratorVoterService()
    {
        return $this->services['claroline.core_bundle.library.security.voter.administrator_voter'] = new \Claroline\CoreBundle\Library\Security\Voter\AdministratorVoter();
    }

    /**
     * Gets the 'claroline.core_bundle.library.security.voter.resource_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\Voter\ResourceVoter A Claroline\CoreBundle\Library\Security\Voter\ResourceVoter instance.
     */
    protected function getClaroline_CoreBundle_Library_Security_Voter_ResourceVoterService()
    {
        return $this->services['claroline.core_bundle.library.security.voter.resource_voter'] = new \Claroline\CoreBundle\Library\Security\Voter\ResourceVoter($this->get('doctrine.orm.default_entity_manager'), $this->get('translator.default'), $this->get('claroline.security.utilities'), $this->get('claroline.manager.mask_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.library.security.voter.widget_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\Voter\WidgetVoter A Claroline\CoreBundle\Library\Security\Voter\WidgetVoter instance.
     */
    protected function getClaroline_CoreBundle_Library_Security_Voter_WidgetVoterService()
    {
        return $this->services['claroline.core_bundle.library.security.voter.widget_voter'] = new \Claroline\CoreBundle\Library\Security\Voter\WidgetVoter($this->get('doctrine.orm.default_entity_manager'), $this->get('translator.default'));
    }

    /**
     * Gets the 'claroline.core_bundle.library.security.voter.workspace_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\Voter\WorkspaceVoter A Claroline\CoreBundle\Library\Security\Voter\WorkspaceVoter instance.
     */
    protected function getClaroline_CoreBundle_Library_Security_Voter_WorkspaceVoterService()
    {
        return $this->services['claroline.core_bundle.library.security.voter.workspace_voter'] = new \Claroline\CoreBundle\Library\Security\Voter\WorkspaceVoter($this->get('doctrine.orm.default_entity_manager'), $this->get('translator.default'), $this->get('claroline.security.utilities'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.ajax_authentication_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\AjaxAuthenticationListener A Claroline\CoreBundle\Listener\AjaxAuthenticationListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_AjaxAuthenticationListenerService()
    {
        return $this->services['claroline.core_bundle.listener.ajax_authentication_listener'] = new \Claroline\CoreBundle\Listener\AjaxAuthenticationListener($this->get('security.context'), $this->get('debug.templating.engine.twig'), $this->get('session'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.authentication_success_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\AuthenticationSuccessListener A Claroline\CoreBundle\Listener\AuthenticationSuccessListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_AuthenticationSuccessListenerService()
    {
        return $this->services['claroline.core_bundle.listener.authentication_success_listener'] = new \Claroline\CoreBundle\Listener\AuthenticationSuccessListener($this->get('security.context'), $this->get('claroline.event.event_dispatcher'), $this->get('translator.default'), $this->get('claroline.config.platform_config_handler'), $this->get('doctrine.orm.default_entity_manager'), '/home/jenkins/jobs/Release/workspace/app/../templates/');
    }

    /**
     * Gets the 'claroline.core_bundle.listener.badge.badge_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Badge\BadgeListener A Claroline\CoreBundle\Listener\Badge\BadgeListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Badge_BadgeListenerService()
    {
        return $this->services['claroline.core_bundle.listener.badge.badge_listener'] = new \Claroline\CoreBundle\Listener\Badge\BadgeListener($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.manager.badge'), $this->get('debug.templating.engine.twig'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.locale_setter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\LocaleSetter A Claroline\CoreBundle\Listener\LocaleSetter instance.
     */
    protected function getClaroline_CoreBundle_Listener_LocaleSetterService()
    {
        return $this->services['claroline.core_bundle.listener.locale_setter'] = new \Claroline\CoreBundle\Listener\LocaleSetter($this->get('claroline.config.platform_config_handler'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.log.log_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Log\LogListener A Claroline\CoreBundle\Listener\Log\LogListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Log_LogListenerService()
    {
        return $this->services['claroline.core_bundle.listener.log.log_listener'] = new \Claroline\CoreBundle\Listener\Log\LogListener($this->get('claroline.persistence.object_manager'), $this->get('security.context'), $this, $this->get('claroline.manager.role_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.log.log_widget_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Log\LogWidgetListener A Claroline\CoreBundle\Listener\Log\LogWidgetListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Log_LogWidgetListenerService()
    {
        return $this->services['claroline.core_bundle.listener.log.log_widget_listener'] = new \Claroline\CoreBundle\Listener\Log\LogWidgetListener($this->get('claroline.log.manager'), $this->get('claroline.manager.workspace_manager'), $this->get('debug.templating.engine.twig'), $this->get('form.factory'), $this->get('claroline.form.logworkspacewidgetconfig'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.query_string_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\QueryStringHandler A Claroline\CoreBundle\Listener\QueryStringHandler instance.
     */
    protected function getClaroline_CoreBundle_Listener_QueryStringHandlerService()
    {
        return $this->services['claroline.core_bundle.listener.query_string_handler'] = new \Claroline\CoreBundle\Listener\QueryStringHandler($this->get('claroline.resource.mode_accessor'), $this->get('claroline.resource.query_string_writer'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.resource.activity_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Resource\ActivityListener A Claroline\CoreBundle\Listener\Resource\ActivityListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Resource_ActivityListenerService()
    {
        $this->services['claroline.core_bundle.listener.resource.activity_listener'] = $instance = new \Claroline\CoreBundle\Listener\Resource\ActivityListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.core_bundle.listener.resource.directory_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Resource\DirectoryListener A Claroline\CoreBundle\Listener\Resource\DirectoryListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Resource_DirectoryListenerService()
    {
        return $this->services['claroline.core_bundle.listener.resource.directory_listener'] = new \Claroline\CoreBundle\Listener\Resource\DirectoryListener($this->get('claroline.manager.role_manager'), $this->get('claroline.manager.resource_manager'), $this->get('claroline.manager.rights_manager'), $this->get('claroline.manager.mask_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('security.context'), $this->get('form.factory'), $this->get('debug.templating.engine.twig'), $this);
    }

    /**
     * Gets the 'claroline.core_bundle.listener.resource.file_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Resource\FileListener A Claroline\CoreBundle\Listener\Resource\FileListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Resource_FileListenerService()
    {
        $this->services['claroline.core_bundle.listener.resource.file_listener'] = $instance = new \Claroline\CoreBundle\Listener\Resource\FileListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.core_bundle.listener.resource.text_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Resource\TextListener A Claroline\CoreBundle\Listener\Resource\TextListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Resource_TextListenerService()
    {
        $this->services['claroline.core_bundle.listener.resource.text_listener'] = $instance = new \Claroline\CoreBundle\Listener\Resource\TextListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.core_bundle.listener.simple_text_widget_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\SimpleTextWidgetListener A Claroline\CoreBundle\Listener\SimpleTextWidgetListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_SimpleTextWidgetListenerService()
    {
        return $this->services['claroline.core_bundle.listener.simple_text_widget_listener'] = new \Claroline\CoreBundle\Listener\SimpleTextWidgetListener($this->get('claroline.manager.simple_text_manager'), $this->get('claroline.form.factory'), $this->get('debug.templating.engine.twig'), $this->get('security.context'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.tool.home_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Tool\HomeListener A Claroline\CoreBundle\Listener\Tool\HomeListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Tool_HomeListenerService()
    {
        return $this->services['claroline.core_bundle.listener.tool.home_listener'] = new \Claroline\CoreBundle\Listener\Tool\HomeListener($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('debug.templating.engine.twig'), $this->get('claroline.manager.workspace_manager'), $this->get('claroline.manager.home_tab_manager'), $this->get('security.context'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.tool.resource_manager_import_export_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Tool\ResourceManagerImportExportListener A Claroline\CoreBundle\Listener\Tool\ResourceManagerImportExportListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_Tool_ResourceManagerImportExportListenerService()
    {
        return $this->services['claroline.core_bundle.listener.tool.resource_manager_import_export_listener'] = new \Claroline\CoreBundle\Listener\Tool\ResourceManagerImportExportListener($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('claroline.manager.resource_manager'), $this->get('claroline.manager.role_manager'), $this->get('claroline.manager.rights_manager'), $this->get('claroline.manager.mask_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.tool.resource_manager_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Tool\ResourceManagerListener A Claroline\CoreBundle\Listener\Tool\ResourceManagerListener instance.
     * 
     * @throws InactiveScopeException when the 'claroline.core_bundle.listener.tool.resource_manager_listener' service is requested while the 'request' scope is not active
     */
    protected function getClaroline_CoreBundle_Listener_Tool_ResourceManagerListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('claroline.core_bundle.listener.tool.resource_manager_listener', 'request');
        }

        $a = $this->get('claroline.manager.resource_manager');

        return $this->services['claroline.core_bundle.listener.tool.resource_manager_listener'] = $this->scopedServices['request']['claroline.core_bundle.listener.tool.resource_manager_listener'] = new \Claroline\CoreBundle\Listener\Tool\ResourceManagerListener($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('debug.templating.engine.twig'), $a, $this->get('security.context'), $this->get('request'), $a, $this->get('claroline.manager.rights_manager'), $this->get('claroline.manager.workspace_manager'), $this->get('claroline.manager.workspace_tag_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.tool_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\ToolListener A Claroline\CoreBundle\Listener\ToolListener instance.
     * 
     * @throws InactiveScopeException when the 'claroline.core_bundle.listener.tool_listener' service is requested while the 'request' scope is not active
     */
    protected function getClaroline_CoreBundle_Listener_ToolListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('claroline.core_bundle.listener.tool_listener', 'request');
        }

        return $this->services['claroline.core_bundle.listener.tool_listener'] = $this->scopedServices['request']['claroline.core_bundle.listener.tool_listener'] = new \Claroline\CoreBundle\Listener\ToolListener($this, $this->get('claroline.manager.tool_manager'), $this->get('claroline.manager.workspace_manager'), $this->get('claroline.form.factory'), $this->get('debug.templating.engine.twig'), $this->get('request'), $this->get('http_kernel'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.user_password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\UserPasswordEncoder A Claroline\CoreBundle\Listener\UserPasswordEncoder instance.
     */
    protected function getClaroline_CoreBundle_Listener_UserPasswordEncoderService()
    {
        return $this->services['claroline.core_bundle.listener.user_password_encoder'] = new \Claroline\CoreBundle\Listener\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.view_as_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\ViewAsListener A Claroline\CoreBundle\Listener\ViewAsListener instance.
     */
    protected function getClaroline_CoreBundle_Listener_ViewAsListenerService()
    {
        return $this->services['claroline.core_bundle.listener.view_as_listener'] = new \Claroline\CoreBundle\Listener\ViewAsListener($this->get('security.context'), $this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.manager.role_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.listener.workspace_widget_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\WorkspaceWidgetListener A Claroline\CoreBundle\Listener\WorkspaceWidgetListener instance.
     * 
     * @throws InactiveScopeException when the 'claroline.core_bundle.listener.workspace_widget_listener' service is requested while the 'request' scope is not active
     */
    protected function getClaroline_CoreBundle_Listener_WorkspaceWidgetListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('claroline.core_bundle.listener.workspace_widget_listener', 'request');
        }

        return $this->services['claroline.core_bundle.listener.workspace_widget_listener'] = $this->scopedServices['request']['claroline.core_bundle.listener.workspace_widget_listener'] = new \Claroline\CoreBundle\Listener\WorkspaceWidgetListener($this->get('security.context'), $this->get('debug.templating.engine.twig'));
    }

    /**
     * Gets the 'claroline.core_bundle.twig.date_formatter_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\DateFormatterExtension A Claroline\CoreBundle\Twig\DateFormatterExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_DateFormatterExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.date_formatter_extension'] = new \Claroline\CoreBundle\Twig\DateFormatterExtension($this->get('kernel'), $this->get('claroline.config.platform_config_handler'));
    }

    /**
     * Gets the 'claroline.core_bundle.twig.has_role_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\HasRoleExtension A Claroline\CoreBundle\Twig\HasRoleExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_HasRoleExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.has_role_extension'] = new \Claroline\CoreBundle\Twig\HasRoleExtension($this->get('security.context'));
    }

    /**
     * Gets the 'claroline.core_bundle.twig.home_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\HomeExtension A Claroline\CoreBundle\Twig\HomeExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_HomeExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.home_extension'] = new \Claroline\CoreBundle\Twig\HomeExtension($this->get('kernel'), $this);
    }

    /**
     * Gets the 'claroline.core_bundle.twig.mailer_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\MailerExtension A Claroline\CoreBundle\Twig\MailerExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_MailerExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.mailer_extension'] = new \Claroline\CoreBundle\Twig\MailerExtension($this);
    }

    /**
     * Gets the 'claroline.core_bundle.twig.platform_configuration_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\PlatformConfigurationExtension A Claroline\CoreBundle\Twig\PlatformConfigurationExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_PlatformConfigurationExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.platform_configuration_extension'] = new \Claroline\CoreBundle\Twig\PlatformConfigurationExtension($this->get('claroline.config.platform_config_handler'));
    }

    /**
     * Gets the 'claroline.core_bundle.twig.resource_mode_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\ResourceModeExtension A Claroline\CoreBundle\Twig\ResourceModeExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_ResourceModeExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.resource_mode_extension'] = new \Claroline\CoreBundle\Twig\ResourceModeExtension($this->get('router'), $this->get('claroline.resource.query_string_writer'), $this->get('claroline.resource.mode_accessor'));
    }

    /**
     * Gets the 'claroline.core_bundle.twig.theme_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\ThemeExtension A Claroline\CoreBundle\Twig\ThemeExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_ThemeExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.theme_extension'] = new \Claroline\CoreBundle\Twig\ThemeExtension($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.core_bundle.twig.workspace_access_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Twig\WorkspaceAccessExtension A Claroline\CoreBundle\Twig\WorkspaceAccessExtension instance.
     */
    protected function getClaroline_CoreBundle_Twig_WorkspaceAccessExtensionService()
    {
        return $this->services['claroline.core_bundle.twig.workspace_access_extension'] = new \Claroline\CoreBundle\Twig\WorkspaceAccessExtension($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.security.utilities'));
    }

    /**
     * Gets the 'claroline.core_bundle.validator.constraints.admin_workspace_tag_unique_name_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Validator\Constraints\AdminWorkspaceTagUniqueNameValidator A Claroline\CoreBundle\Validator\Constraints\AdminWorkspaceTagUniqueNameValidator instance.
     */
    protected function getClaroline_CoreBundle_Validator_Constraints_AdminWorkspaceTagUniqueNameValidatorService()
    {
        $this->services['claroline.core_bundle.validator.constraints.admin_workspace_tag_unique_name_validator'] = $instance = new \Claroline\CoreBundle\Validator\Constraints\AdminWorkspaceTagUniqueNameValidator();

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'claroline.core_bundle.validator.constraints.csv_user_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Validator\Constraints\CsvUserValidator A Claroline\CoreBundle\Validator\Constraints\CsvUserValidator instance.
     */
    protected function getClaroline_CoreBundle_Validator_Constraints_CsvUserValidatorService()
    {
        return $this->services['claroline.core_bundle.validator.constraints.csv_user_validator'] = new \Claroline\CoreBundle\Validator\Constraints\CsvUserValidator();
    }

    /**
     * Gets the 'claroline.core_bundle.validator.constraints.send_to_names_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Validator\Constraints\SendToNamesValidator A Claroline\CoreBundle\Validator\Constraints\SendToNamesValidator instance.
     */
    protected function getClaroline_CoreBundle_Validator_Constraints_SendToNamesValidatorService()
    {
        $this->services['claroline.core_bundle.validator.constraints.send_to_names_validator'] = $instance = new \Claroline\CoreBundle\Validator\Constraints\SendToNamesValidator();

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'claroline.core_bundle.validator.constraints.workspace_unique_code_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Validator\Constraints\WorkspaceUniqueCodeValidator A Claroline\CoreBundle\Validator\Constraints\WorkspaceUniqueCodeValidator instance.
     */
    protected function getClaroline_CoreBundle_Validator_Constraints_WorkspaceUniqueCodeValidatorService()
    {
        $this->services['claroline.core_bundle.validator.constraints.workspace_unique_code_validator'] = $instance = new \Claroline\CoreBundle\Validator\Constraints\WorkspaceUniqueCodeValidator();

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'claroline.doctrine_fixture_executor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\DataFixtures\Executor\ORMExecutor A Doctrine\Common\DataFixtures\Executor\ORMExecutor instance.
     */
    protected function getClaroline_DoctrineFixtureExecutorService()
    {
        return $this->services['claroline.doctrine_fixture_executor'] = new \Doctrine\Common\DataFixtures\Executor\ORMExecutor($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.event.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Event\StrictDispatcher A Claroline\CoreBundle\Event\StrictDispatcher instance.
     */
    protected function getClaroline_Event_EventDispatcherService()
    {
        return $this->services['claroline.event.event_dispatcher'] = new \Claroline\CoreBundle\Event\StrictDispatcher($this->get('event_dispatcher'));
    }

    /**
     * Gets the 'claroline.event.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\EventManager A Claroline\CoreBundle\Manager\EventManager instance.
     */
    protected function getClaroline_Event_ManagerService()
    {
        return $this->services['claroline.event.manager'] = new \Claroline\CoreBundle\Manager\EventManager($this->get('kernel'));
    }

    /**
     * Gets the 'claroline.form.adminlogfilter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Log\AdminLogFilterType A Claroline\CoreBundle\Form\Log\AdminLogFilterType instance.
     */
    protected function getClaroline_Form_AdminlogfilterService()
    {
        return $this->services['claroline.form.adminlogfilter'] = new \Claroline\CoreBundle\Form\Log\AdminLogFilterType($this->get('claroline.event.manager'));
    }

    /**
     * Gets the 'claroline.form.badge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Badge\BadgeType A Claroline\CoreBundle\Form\Badge\BadgeType instance.
     */
    protected function getClaroline_Form_BadgeService()
    {
        return $this->services['claroline.form.badge'] = new \Claroline\CoreBundle\Form\Badge\BadgeType($this->get('claroline.form.badgerule'), $this->get('claroline.config.platform_config_handler'), $this->get('translator.default'));
    }

    /**
     * Gets the 'claroline.form.badgerule' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Badge\BadgeRuleType A Claroline\CoreBundle\Form\Badge\BadgeRuleType instance.
     */
    protected function getClaroline_Form_BadgeruleService()
    {
        return $this->services['claroline.form.badgerule'] = new \Claroline\CoreBundle\Form\Badge\BadgeRuleType($this->get('claroline.event.manager'));
    }

    /**
     * Gets the 'claroline.form.buttongroupselect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\ButtonGroupSelectType A Claroline\CoreBundle\Form\ButtonGroupSelectType instance.
     */
    protected function getClaroline_Form_ButtongroupselectService()
    {
        return $this->services['claroline.form.buttongroupselect'] = new \Claroline\CoreBundle\Form\ButtonGroupSelectType();
    }

    /**
     * Gets the 'claroline.form.claimbadge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Badge\ClaimBadgeType A Claroline\CoreBundle\Form\Badge\ClaimBadgeType instance.
     */
    protected function getClaroline_Form_ClaimbadgeService()
    {
        return $this->services['claroline.form.claimbadge'] = new \Claroline\CoreBundle\Form\Badge\ClaimBadgeType($this->get('claroline.config.platform_config_handler'));
    }

    /**
     * Gets the 'claroline.form.datepicker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\DatePickerType A Claroline\CoreBundle\Form\DatePickerType instance.
     */
    protected function getClaroline_Form_DatepickerService()
    {
        return $this->services['claroline.form.datepicker'] = new \Claroline\CoreBundle\Form\DatePickerType();
    }

    /**
     * Gets the 'claroline.form.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\DateRangeType A Claroline\CoreBundle\Form\DateRangeType instance.
     */
    protected function getClaroline_Form_DaterangeService()
    {
        return $this->services['claroline.form.daterange'] = new \Claroline\CoreBundle\Form\DateRangeType($this->get('translator.default'));
    }

    /**
     * Gets the 'claroline.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Factory\FormFactory A Claroline\CoreBundle\Form\Factory\FormFactory instance.
     */
    protected function getClaroline_Form_FactoryService()
    {
        return $this->services['claroline.form.factory'] = new \Claroline\CoreBundle\Form\Factory\FormFactory($this->get('form.factory'));
    }

    /**
     * Gets the 'claroline.form.logworkspacewidgetconfig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Log\LogWorkspaceWidgetConfigType A Claroline\CoreBundle\Form\Log\LogWorkspaceWidgetConfigType instance.
     */
    protected function getClaroline_Form_LogworkspacewidgetconfigService()
    {
        return $this->services['claroline.form.logworkspacewidgetconfig'] = new \Claroline\CoreBundle\Form\Log\LogWorkspaceWidgetConfigType($this->get('claroline.event.manager'));
    }

    /**
     * Gets the 'claroline.form.simpleautocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\SimpleAutoCompleteType A Claroline\CoreBundle\Form\SimpleAutoCompleteType instance.
     */
    protected function getClaroline_Form_SimpleautocompleteService()
    {
        return $this->services['claroline.form.simpleautocomplete'] = new \Claroline\CoreBundle\Form\SimpleAutoCompleteType();
    }

    /**
     * Gets the 'claroline.form.tinymce' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Field\TinymceType A Claroline\CoreBundle\Form\Field\TinymceType instance.
     */
    protected function getClaroline_Form_TinymceService()
    {
        return $this->services['claroline.form.tinymce'] = new \Claroline\CoreBundle\Form\Field\TinymceType();
    }

    /**
     * Gets the 'claroline.form.twolevelselect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\TwoLevelSelectType A Claroline\CoreBundle\Form\TwoLevelSelectType instance.
     */
    protected function getClaroline_Form_TwolevelselectService()
    {
        return $this->services['claroline.form.twolevelselect'] = new \Claroline\CoreBundle\Form\TwoLevelSelectType();
    }

    /**
     * Gets the 'claroline.form.workspacelogfilter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Form\Log\WorkspaceLogFilterType A Claroline\CoreBundle\Form\Log\WorkspaceLogFilterType instance.
     */
    protected function getClaroline_Form_WorkspacelogfilterService()
    {
        return $this->services['claroline.form.workspacelogfilter'] = new \Claroline\CoreBundle\Form\Log\WorkspaceLogFilterType($this->get('claroline.event.manager'));
    }

    /**
     * Gets the 'claroline.install.core_installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Core\Installer A Claroline\CoreBundle\Library\Installation\Core\Installer instance.
     */
    protected function getClaroline_Install_CoreInstallerService()
    {
        return $this->services['claroline.install.core_installer'] = new \Claroline\CoreBundle\Library\Installation\Core\Installer($this->get('kernel'), $this->get('claroline.migration.migrator'));
    }

    /**
     * Gets the 'claroline.installation.fixture_loader' service.
     *
     * @return Claroline\InstallationBundle\Fixtures\FixtureLoader A Claroline\InstallationBundle\Fixtures\FixtureLoader instance.
     */
    protected function getClaroline_Installation_FixtureLoaderService()
    {
        return new \Claroline\InstallationBundle\Fixtures\FixtureLoader($this, $this->get('claroline.doctrine_fixture_executor'));
    }

    /**
     * Gets the 'claroline.installation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\KernelBundle\Routing\DynamicLoader A Claroline\KernelBundle\Routing\DynamicLoader instance.
     */
    protected function getClaroline_Installation_LoaderService()
    {
        return $this->services['claroline.installation.loader'] = new \Claroline\KernelBundle\Routing\DynamicLoader();
    }

    /**
     * Gets the 'claroline.installation.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\InstallationBundle\Manager\InstallationManager A Claroline\InstallationBundle\Manager\InstallationManager instance.
     */
    protected function getClaroline_Installation_ManagerService()
    {
        return $this->services['claroline.installation.manager'] = new \Claroline\InstallationBundle\Manager\InstallationManager($this, $this->get('claroline.migration.manager'), new \Claroline\InstallationBundle\Fixtures\FixtureLoader($this, $this->get('claroline.doctrine_fixture_executor')), 'dev');
    }

    /**
     * Gets the 'claroline.installation.mapping_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\MappingLoader A Claroline\CoreBundle\Library\Installation\MappingLoader instance.
     */
    protected function getClaroline_Installation_MappingLoaderService()
    {
        return $this->services['claroline.installation.mapping_loader'] = new \Claroline\CoreBundle\Library\Installation\MappingLoader($this);
    }

    /**
     * Gets the 'claroline.installation.operation_executor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\OperationExecutor A Claroline\CoreBundle\Library\Installation\OperationExecutor instance.
     */
    protected function getClaroline_Installation_OperationExecutorService()
    {
        return $this->services['claroline.installation.operation_executor'] = new \Claroline\CoreBundle\Library\Installation\OperationExecutor($this->get('kernel'), $this->get('claroline.installation.manager'), $this->get('claroline.plugin.installer'));
    }

    /**
     * Gets the 'claroline.installation.refresher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Refresher A Claroline\CoreBundle\Library\Installation\Refresher instance.
     */
    protected function getClaroline_Installation_RefresherService()
    {
        return $this->services['claroline.installation.refresher'] = new \Claroline\CoreBundle\Library\Installation\Refresher($this);
    }

    /**
     * Gets the 'claroline.listener.forum_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\ForumBundle\Listener\ForumListener A Claroline\ForumBundle\Listener\ForumListener instance.
     */
    protected function getClaroline_Listener_ForumListenerService()
    {
        $this->services['claroline.listener.forum_listener'] = $instance = new \Claroline\ForumBundle\Listener\ForumListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.listener.image_player_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\ImagePlayerBundle\Listener\ImagePlayerListener A Claroline\ImagePlayerBundle\Listener\ImagePlayerListener instance.
     */
    protected function getClaroline_Listener_ImagePlayerListenerService()
    {
        $this->services['claroline.listener.image_player_listener'] = $instance = new \Claroline\ImagePlayerBundle\Listener\ImagePlayerListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.listener.pdf_player_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\PdfPlayerBundle\Listener\PdfPlayerListener A Claroline\PdfPlayerBundle\Listener\PdfPlayerListener instance.
     */
    protected function getClaroline_Listener_PdfPlayerListenerService()
    {
        $this->services['claroline.listener.pdf_player_listener'] = $instance = new \Claroline\PdfPlayerBundle\Listener\PdfPlayerListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.listener.video_player_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\VideoPlayerBundle\Listener\VideoPlayerListener A Claroline\VideoPlayerBundle\Listener\VideoPlayerListener instance.
     */
    protected function getClaroline_Listener_VideoPlayerListenerService()
    {
        $this->services['claroline.listener.video_player_listener'] = $instance = new \Claroline\VideoPlayerBundle\Listener\VideoPlayerListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.log.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\LogManager A Claroline\CoreBundle\Manager\LogManager instance.
     */
    protected function getClaroline_Log_ManagerService()
    {
        return $this->services['claroline.log.manager'] = new \Claroline\CoreBundle\Manager\LogManager($this);
    }

    /**
     * Gets the 'claroline.manager.analytics_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\AnalyticsManager A Claroline\CoreBundle\Manager\AnalyticsManager instance.
     */
    protected function getClaroline_Manager_AnalyticsManagerService()
    {
        return $this->services['claroline.manager.analytics_manager'] = new \Claroline\CoreBundle\Manager\AnalyticsManager($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.badge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\BadgeManager A Claroline\CoreBundle\Manager\BadgeManager instance.
     */
    protected function getClaroline_Manager_BadgeService()
    {
        return $this->services['claroline.manager.badge'] = new \Claroline\CoreBundle\Manager\BadgeManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.manager.forum_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\ForumBundle\Manager\Manager A Claroline\ForumBundle\Manager\Manager instance.
     */
    protected function getClaroline_Manager_ForumManagerService()
    {
        return $this->services['claroline.manager.forum_manager'] = new \Claroline\ForumBundle\Manager\Manager($this->get('claroline.persistence.object_manager'), $this->get('claroline.pager.pager_factory'), $this->get('event_dispatcher'), $this->get('claroline.manager.message_manager'), $this->get('translator.default'), $this->get('router'), $this->get('claroline.manager.mail_manager'), $this);
    }

    /**
     * Gets the 'claroline.manager.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\GroupManager A Claroline\CoreBundle\Manager\GroupManager instance.
     */
    protected function getClaroline_Manager_GroupManagerService()
    {
        return $this->services['claroline.manager.group_manager'] = new \Claroline\CoreBundle\Manager\GroupManager($this->get('claroline.persistence.object_manager'), $this->get('claroline.pager.pager_factory'), $this->get('translator.default'), $this->get('claroline.event.event_dispatcher'));
    }

    /**
     * Gets the 'claroline.manager.home_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\HomeManager A Claroline\CoreBundle\Manager\HomeManager instance.
     */
    protected function getClaroline_Manager_HomeManagerService()
    {
        return $this->services['claroline.manager.home_manager'] = new \Claroline\CoreBundle\Manager\HomeManager($this->get('claroline.common.graph_service'), $this->get('claroline.common.home_service'), $this->get('doctrine'), $this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.home_tab_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\HomeTabManager A Claroline\CoreBundle\Manager\HomeTabManager instance.
     */
    protected function getClaroline_Manager_HomeTabManagerService()
    {
        return $this->services['claroline.manager.home_tab_manager'] = new \Claroline\CoreBundle\Manager\HomeTabManager($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.icon_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\IconManager A Claroline\CoreBundle\Manager\IconManager instance.
     */
    protected function getClaroline_Manager_IconManagerService()
    {
        return $this->services['claroline.manager.icon_manager'] = new \Claroline\CoreBundle\Manager\IconManager($this->get('claroline.utilities.thumbnail_creator'), '/home/jenkins/jobs/Release/workspace/app/../files', '/home/jenkins/jobs/Release/workspace/app/../web/thumbnails', '/home/jenkins/jobs/Release/workspace/app', $this->get('claroline.utilities.misc'), $this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.mail_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\MailManager A Claroline\CoreBundle\Manager\MailManager instance.
     */
    protected function getClaroline_Manager_MailManagerService()
    {
        return $this->services['claroline.manager.mail_manager'] = new \Claroline\CoreBundle\Manager\MailManager($this->get('swiftmailer.mailer.default'), $this->get('debug.templating.engine.twig'), $this->get('router'), $this->get('translator.default'), $this->get('claroline.config.platform_config_handler'), $this);
    }

    /**
     * Gets the 'claroline.manager.mask_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\MaskManager A Claroline\CoreBundle\Manager\MaskManager instance.
     */
    protected function getClaroline_Manager_MaskManagerService()
    {
        return $this->services['claroline.manager.mask_manager'] = new \Claroline\CoreBundle\Manager\MaskManager($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.message_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\MessageManager A Claroline\CoreBundle\Manager\MessageManager instance.
     */
    protected function getClaroline_Manager_MessageManagerService()
    {
        return $this->services['claroline.manager.message_manager'] = new \Claroline\CoreBundle\Manager\MessageManager($this->get('claroline.persistence.object_manager'), $this->get('claroline.pager.pager_factory'));
    }

    /**
     * Gets the 'claroline.manager.resource_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\ResourceManager A Claroline\CoreBundle\Manager\ResourceManager instance.
     */
    protected function getClaroline_Manager_ResourceManagerService()
    {
        return $this->services['claroline.manager.resource_manager'] = new \Claroline\CoreBundle\Manager\ResourceManager($this->get('claroline.manager.role_manager'), $this->get('claroline.manager.icon_manager'), $this->get('claroline.manager.rights_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.utilities.misc'), $this->get('security.context'));
    }

    /**
     * Gets the 'claroline.manager.rights_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\RightsManager A Claroline\CoreBundle\Manager\RightsManager instance.
     */
    protected function getClaroline_Manager_RightsManagerService()
    {
        return $this->services['claroline.manager.rights_manager'] = new \Claroline\CoreBundle\Manager\RightsManager($this->get('translator.default'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('claroline.manager.role_manager'), $this->get('claroline.manager.mask_manager'));
    }

    /**
     * Gets the 'claroline.manager.role_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\RoleManager A Claroline\CoreBundle\Manager\RoleManager instance.
     */
    protected function getClaroline_Manager_RoleManagerService()
    {
        return $this->services['claroline.manager.role_manager'] = new \Claroline\CoreBundle\Manager\RoleManager($this->get('security.context'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.event.event_dispatcher'));
    }

    /**
     * Gets the 'claroline.manager.rss_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\RssReaderBundle\Library\RssManager A Claroline\RssReaderBundle\Library\RssManager instance.
     */
    protected function getClaroline_Manager_RssManagerService()
    {
        return $this->services['claroline.manager.rss_manager'] = new \Claroline\RssReaderBundle\Library\RssManager($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.simple_text_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\SimpleTextManager A Claroline\CoreBundle\Manager\SimpleTextManager instance.
     */
    protected function getClaroline_Manager_SimpleTextManagerService()
    {
        return $this->services['claroline.manager.simple_text_manager'] = new \Claroline\CoreBundle\Manager\SimpleTextManager($this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.manager.tool_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\ToolManager A Claroline\CoreBundle\Manager\ToolManager instance.
     */
    protected function getClaroline_Manager_ToolManagerService()
    {
        return $this->services['claroline.manager.tool_manager'] = new \Claroline\CoreBundle\Manager\ToolManager($this->get('claroline.event.event_dispatcher'), $this->get('claroline.utilities.misc'), $this->get('translator.default'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.manager.role_manager'));
    }

    /**
     * Gets the 'claroline.manager.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\UserManager A Claroline\CoreBundle\Manager\UserManager instance.
     */
    protected function getClaroline_Manager_UserManagerService()
    {
        return $this->services['claroline.manager.user_manager'] = new \Claroline\CoreBundle\Manager\UserManager($this->get('claroline.manager.role_manager'), $this->get('claroline.manager.workspace_manager'), $this->get('claroline.manager.tool_manager'), $this->get('claroline.event.event_dispatcher'), '/home/jenkins/jobs/Release/workspace/app/../templates/', $this->get('translator.default'), $this->get('claroline.config.platform_config_handler'), $this->get('claroline.pager.pager_factory'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.manager.mail_manager'));
    }

    /**
     * Gets the 'claroline.manager.widget_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\WidgetManager A Claroline\CoreBundle\Manager\WidgetManager instance.
     */
    protected function getClaroline_Manager_WidgetManagerService()
    {
        return $this->services['claroline.manager.widget_manager'] = new \Claroline\CoreBundle\Manager\WidgetManager($this->get('claroline.persistence.object_manager'), $this->get('router'), $this->get('translator.default'));
    }

    /**
     * Gets the 'claroline.manager.workspace_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\WorkspaceManager A Claroline\CoreBundle\Manager\WorkspaceManager instance.
     */
    protected function getClaroline_Manager_WorkspaceManagerService()
    {
        return $this->services['claroline.manager.workspace_manager'] = new \Claroline\CoreBundle\Manager\WorkspaceManager($this->get('claroline.manager.home_tab_manager'), $this->get('claroline.manager.role_manager'), $this->get('claroline.manager.mask_manager'), $this->get('claroline.manager.resource_manager'), $this->get('claroline.manager.tool_manager'), $this->get('claroline.event.event_dispatcher'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.utilities.misc'), '/home/jenkins/jobs/Release/workspace/app/../templates/', $this->get('claroline.pager.pager_factory'));
    }

    /**
     * Gets the 'claroline.manager.workspace_tag_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Manager\WorkspaceTagManager A Claroline\CoreBundle\Manager\WorkspaceTagManager instance.
     */
    protected function getClaroline_Manager_WorkspaceTagManagerService()
    {
        return $this->services['claroline.manager.workspace_tag_manager'] = new \Claroline\CoreBundle\Manager\WorkspaceTagManager($this->get('claroline.manager.role_manager'), $this->get('claroline.manager.workspace_manager'), $this->get('claroline.persistence.object_manager'), $this->get('claroline.pager.pager_factory'));
    }

    /**
     * Gets the 'claroline.migration.doctrine_schema_tool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\Tools\SchemaTool A Doctrine\ORM\Tools\SchemaTool instance.
     */
    protected function getClaroline_Migration_DoctrineSchemaToolService()
    {
        return $this->services['claroline.migration.doctrine_schema_tool'] = new \Doctrine\ORM\Tools\SchemaTool($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.migration.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\MigrationBundle\Generator\Generator A Claroline\MigrationBundle\Generator\Generator instance.
     */
    protected function getClaroline_Migration_GeneratorService()
    {
        return $this->services['claroline.migration.generator'] = new \Claroline\MigrationBundle\Generator\Generator($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.migration.doctrine_schema_tool'));
    }

    /**
     * Gets the 'claroline.migration.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\MigrationBundle\Manager\Manager A Claroline\MigrationBundle\Manager\Manager instance.
     */
    protected function getClaroline_Migration_ManagerService()
    {
        return $this->services['claroline.migration.manager'] = new \Claroline\MigrationBundle\Manager\Manager($this->get('claroline.migration.generator'), $this->get('claroline.migration.writer'), $this->get('claroline.migration.migrator'));
    }

    /**
     * Gets the 'claroline.migration.migrator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\MigrationBundle\Migrator\Migrator A Claroline\MigrationBundle\Migrator\Migrator instance.
     */
    protected function getClaroline_Migration_MigratorService()
    {
        return $this->services['claroline.migration.migrator'] = new \Claroline\MigrationBundle\Migrator\Migrator($this->get('doctrine.dbal.default_connection'));
    }

    /**
     * Gets the 'claroline.migration.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\MigrationBundle\Generator\Writer A Claroline\MigrationBundle\Generator\Writer instance.
     */
    protected function getClaroline_Migration_WriterService()
    {
        return $this->services['claroline.migration.writer'] = new \Claroline\MigrationBundle\Generator\Writer($this->get('filesystem'), $this->get('twig'), $this->get('debug.templating.engine.twig'));
    }

    /**
     * Gets the 'claroline.pager.pager_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Pager\PagerFactory A Claroline\CoreBundle\Pager\PagerFactory instance.
     */
    protected function getClaroline_Pager_PagerFactoryService()
    {
        return $this->services['claroline.pager.pager_factory'] = new \Claroline\CoreBundle\Pager\PagerFactory();
    }

    /**
     * Gets the 'claroline.persistence.object_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Persistence\ObjectManager A Claroline\CoreBundle\Persistence\ObjectManager instance.
     */
    protected function getClaroline_Persistence_ObjectManagerService()
    {
        return $this->services['claroline.persistence.object_manager'] = new \Claroline\CoreBundle\Persistence\ObjectManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.plugin.config_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\ConfigurationChecker A Claroline\CoreBundle\Library\Installation\Plugin\ConfigurationChecker instance.
     */
    protected function getClaroline_Plugin_ConfigCheckerService()
    {
        return $this->services['claroline.plugin.config_checker'] = new \Claroline\CoreBundle\Library\Installation\Plugin\ConfigurationChecker($this->get('claroline.symfony_yaml'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.plugin.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\Installer A Claroline\CoreBundle\Library\Installation\Plugin\Installer instance.
     */
    protected function getClaroline_Plugin_InstallerService()
    {
        return $this->services['claroline.plugin.installer'] = new \Claroline\CoreBundle\Library\Installation\Plugin\Installer($this->get('claroline.plugin.validator'), $this->get('claroline.plugin.recorder'), $this->get('claroline.installation.manager'));
    }

    /**
     * Gets the 'claroline.plugin.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\Loader A Claroline\CoreBundle\Library\Installation\Plugin\Loader instance.
     */
    protected function getClaroline_Plugin_LoaderService()
    {
        return $this->services['claroline.plugin.loader'] = new \Claroline\CoreBundle\Library\Installation\Plugin\Loader();
    }

    /**
     * Gets the 'claroline.plugin.migrator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\Migrator A Claroline\CoreBundle\Library\Installation\Plugin\Migrator instance.
     */
    protected function getClaroline_Plugin_MigratorService()
    {
        return $this->services['claroline.plugin.migrator'] = new \Claroline\CoreBundle\Library\Installation\Plugin\Migrator($this->get('claroline.migration.migrator'));
    }

    /**
     * Gets the 'claroline.plugin.recorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\Recorder A Claroline\CoreBundle\Library\Installation\Plugin\Recorder instance.
     */
    protected function getClaroline_Plugin_RecorderService()
    {
        return $this->services['claroline.plugin.recorder'] = new \Claroline\CoreBundle\Library\Installation\Plugin\Recorder($this->get('claroline.plugin.recorder_database_writer'));
    }

    /**
     * Gets the 'claroline.plugin.recorder_database_writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\DatabaseWriter A Claroline\CoreBundle\Library\Installation\Plugin\DatabaseWriter instance.
     */
    protected function getClaroline_Plugin_RecorderDatabaseWriterService()
    {
        return $this->services['claroline.plugin.recorder_database_writer'] = new \Claroline\CoreBundle\Library\Installation\Plugin\DatabaseWriter($this->get('doctrine.orm.default_entity_manager'), $this->get('claroline.manager.icon_manager'), $this->get('filesystem'), $this->get('kernel'), $this->get('claroline.manager.mask_manager'), '/home/jenkins/jobs/Release/workspace/app/../templates/');
    }

    /**
     * Gets the 'claroline.plugin.routing_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\RoutingChecker A Claroline\CoreBundle\Library\Installation\Plugin\RoutingChecker instance.
     */
    protected function getClaroline_Plugin_RoutingCheckerService()
    {
        return $this->services['claroline.plugin.routing_checker'] = new \Claroline\CoreBundle\Library\Installation\Plugin\RoutingChecker($this->get('router'), $this->get('claroline.symfony_yaml'), '/home/jenkins/jobs/Release/workspace/app/config/local/plugin/routing.yml');
    }

    /**
     * Gets the 'claroline.plugin.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Installation\Plugin\Validator A Claroline\CoreBundle\Library\Installation\Plugin\Validator instance.
     */
    protected function getClaroline_Plugin_ValidatorService()
    {
        return $this->services['claroline.plugin.validator'] = new \Claroline\CoreBundle\Library\Installation\Plugin\Validator(array('routing' => $this->get('claroline.plugin.routing_checker'), 'config' => $this->get('claroline.plugin.config_checker')));
    }

    /**
     * Gets the 'claroline.repository.badge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Repository\Badge\BadgeRepository A Claroline\CoreBundle\Repository\Badge\BadgeRepository instance.
     */
    protected function getClaroline_Repository_BadgeService()
    {
        return $this->services['claroline.repository.badge'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Claroline\\CoreBundle\\Entity\\Badge\\Badge');
    }

    /**
     * Gets the 'claroline.resource.mode_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Resource\ModeAccessor A Claroline\CoreBundle\Library\Resource\ModeAccessor instance.
     */
    protected function getClaroline_Resource_ModeAccessorService()
    {
        return $this->services['claroline.resource.mode_accessor'] = new \Claroline\CoreBundle\Library\Resource\ModeAccessor();
    }

    /**
     * Gets the 'claroline.resource.query_string_writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Resource\QueryStringWriter A Claroline\CoreBundle\Library\Resource\QueryStringWriter instance.
     */
    protected function getClaroline_Resource_QueryStringWriterService()
    {
        return $this->services['claroline.resource.query_string_writer'] = new \Claroline\CoreBundle\Library\Resource\QueryStringWriter($this, $this->get('claroline.resource.mode_accessor'));
    }

    /**
     * Gets the 'claroline.rss_reader.atom_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\RssReaderBundle\Library\Reader\AtomReader A Claroline\RssReaderBundle\Library\Reader\AtomReader instance.
     */
    protected function getClaroline_RssReader_AtomReaderService()
    {
        return $this->services['claroline.rss_reader.atom_reader'] = new \Claroline\RssReaderBundle\Library\Reader\AtomReader();
    }

    /**
     * Gets the 'claroline.rss_reader.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\RssReaderBundle\Library\ReaderProvider A Claroline\RssReaderBundle\Library\ReaderProvider instance.
     */
    protected function getClaroline_RssReader_ProviderService()
    {
        return $this->services['claroline.rss_reader.provider'] = new \Claroline\RssReaderBundle\Library\ReaderProvider(array(0 => $this->get('claroline.rss_reader.rss_reader'), 1 => $this->get('claroline.rss_reader.atom_reader')));
    }

    /**
     * Gets the 'claroline.rss_reader.rss_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\RssReaderBundle\Library\Reader\RssReader A Claroline\RssReaderBundle\Library\Reader\RssReader instance.
     */
    protected function getClaroline_RssReader_RssReaderService()
    {
        return $this->services['claroline.rss_reader.rss_reader'] = new \Claroline\RssReaderBundle\Library\Reader\RssReader();
    }

    /**
     * Gets the 'claroline.rss_reader_bundle.listener.rss_reader_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\RssReaderBundle\Listener\RssReaderListener A Claroline\RssReaderBundle\Listener\RssReaderListener instance.
     */
    protected function getClaroline_RssReaderBundle_Listener_RssReaderListenerService()
    {
        return $this->services['claroline.rss_reader_bundle.listener.rss_reader_listener'] = new \Claroline\RssReaderBundle\Listener\RssReaderListener($this->get('claroline.manager.rss_manager'), $this->get('form.factory'), $this->get('debug.templating.engine.twig'), $this->get('security.context'), $this->get('claroline.rss_reader.provider'));
    }

    /**
     * Gets the 'claroline.security.token_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\TokenUpdater A Claroline\CoreBundle\Library\Security\TokenUpdater instance.
     */
    protected function getClaroline_Security_TokenUpdaterService()
    {
        return $this->services['claroline.security.token_updater'] = new \Claroline\CoreBundle\Library\Security\TokenUpdater($this->get('security.context'), $this->get('claroline.persistence.object_manager'));
    }

    /**
     * Gets the 'claroline.security.utilities' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Security\Utilities A Claroline\CoreBundle\Library\Security\Utilities instance.
     */
    protected function getClaroline_Security_UtilitiesService()
    {
        return $this->services['claroline.security.utilities'] = new \Claroline\CoreBundle\Library\Security\Utilities($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'claroline.symfony_fixture_loader' service.
     *
     * @return Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader A Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader instance.
     */
    protected function getClaroline_SymfonyFixtureLoaderService()
    {
        return new \Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader($this);
    }

    /**
     * Gets the 'claroline.temporary_access_resource_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\DropzoneBundle\Manager\TemporaryAccessResourceManager A Icap\DropzoneBundle\Manager\TemporaryAccessResourceManager instance.
     */
    protected function getClaroline_TemporaryAccessResourceManagerService()
    {
        return $this->services['claroline.temporary_access_resource_manager'] = new \Icap\DropzoneBundle\Manager\TemporaryAccessResourceManager($this);
    }

    /**
     * Gets the 'claroline.transformer.badge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Transformer\Badge\BadgeTransformer A Claroline\CoreBundle\Transformer\Badge\BadgeTransformer instance.
     */
    protected function getClaroline_Transformer_BadgeService()
    {
        return $this->services['claroline.transformer.badge'] = new \Claroline\CoreBundle\Transformer\Badge\BadgeTransformer($this, $this->get('claroline.config.platform_config_handler'));
    }

    /**
     * Gets the 'claroline.utilities.lipsum_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Utilities\LipsumGenerator A Claroline\CoreBundle\Library\Utilities\LipsumGenerator instance.
     */
    protected function getClaroline_Utilities_LipsumGeneratorService()
    {
        return $this->services['claroline.utilities.lipsum_generator'] = new \Claroline\CoreBundle\Library\Utilities\LipsumGenerator();
    }

    /**
     * Gets the 'claroline.utilities.misc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Utilities\ClaroUtilities A Claroline\CoreBundle\Library\Utilities\ClaroUtilities instance.
     */
    protected function getClaroline_Utilities_MiscService()
    {
        $this->services['claroline.utilities.misc'] = $instance = new \Claroline\CoreBundle\Library\Utilities\ClaroUtilities();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'claroline.utilities.paginator_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Utilities\PaginatorParser A Claroline\CoreBundle\Library\Utilities\PaginatorParser instance.
     */
    protected function getClaroline_Utilities_PaginatorParserService()
    {
        return $this->services['claroline.utilities.paginator_parser'] = new \Claroline\CoreBundle\Library\Utilities\PaginatorParser();
    }

    /**
     * Gets the 'claroline.utilities.thumbnail_creator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Utilities\ThumbnailCreator A Claroline\CoreBundle\Library\Utilities\ThumbnailCreator instance.
     */
    protected function getClaroline_Utilities_ThumbnailCreatorService()
    {
        return $this->services['claroline.utilities.thumbnail_creator'] = new \Claroline\CoreBundle\Library\Utilities\ThumbnailCreator('/home/jenkins/jobs/Release/workspace/app', '/home/jenkins/jobs/Release/workspace/app/../web/thumbnails', $this->get('claroline.utilities.misc'));
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('jms_di_extra.controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.deprecation_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_DeprecationLoggerListenerService()
    {
        return $this->services['debug.deprecation_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('deprecation', $this->get('monolog.logger.deprecation', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.emergency_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher($this->get('event_dispatcher'), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setProfiler($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setHelpers(array('logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'assetic' => 'assetic.helper.static'));

        return $instance;
    }

    /**
     * Gets the 'debug.templating.engine.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getDebug_Templating_Engine_TwigService()
    {
        $this->services['debug.templating.engine.twig'] = $instance = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $b->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $c = new \Doctrine\DBAL\Configuration();
        $c->setSQLLogger($b);

        $d = new \Gedmo\Tree\TreeListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Timestampable\TimestampableListener();
        $e->setAnnotationReader($a);

        $f = new \Gedmo\Sluggable\SluggableListener();
        $f->setAnnotationReader($a);

        $g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $g->addEventSubscriber($d);
        $g->addEventSubscriber($e);
        $g->addEventSubscriber($this->get('stof_doctrine_extensions.listener.blameable'));
        $g->addEventSubscriber($f);
        $g->addEventListener(array(0 => 'preRemove'), $this->get('icap.listener.document_listener'));
        $g->addEventListener(array(0 => 'postGenerateSchema'), 'security.acl.dbal.schema_listener');
        $g->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate'), 'claroline.core_bundle.listener.user_password_encoder');

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'claroline_prod', 'host' => 'localhost', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driver' => 'pdo_mysql', 'port' => NULL, 'driverOptions' => array()), $c, $g, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return EntityManager5284cc6b203db_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager A EntityManager5284cc6b203db_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_diextra/doctrine/EntityManager_5284cc6b203db.php';

        $a = $this->get('annotation_reader');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_66f8f3f36a8ddeb9f7a71483de42aedd');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_66f8f3f36a8ddeb9f7a71483de42aedd');

        $d = new \Doctrine\Common\Cache\ArrayCache();
        $d->setNamespace('sf2orm_default_66f8f3f36a8ddeb9f7a71483de42aedd');

        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Entity', 1 => '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Entity', 2 => '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Entity', 3 => '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Entity', 4 => '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Entity', 5 => '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Entity', 6 => '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Entity', 7 => '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Entity', 8 => '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Entity'));

        $f = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $f->addDriver($e, 'Claroline\\CoreBundle\\Entity');
        $f->addDriver($e, 'Claroline\\AnnouncementBundle\\Entity');
        $f->addDriver($e, 'Claroline\\ForumBundle\\Entity');
        $f->addDriver($e, 'Icap\\BlogBundle\\Entity');
        $f->addDriver($e, 'Icap\\DropzoneBundle\\Entity');
        $f->addDriver($e, 'Icap\\WikiBundle\\Entity');
        $f->addDriver($e, 'UJM\\ExoBundle\\Entity');
        $f->addDriver($e, 'Claroline\\RssReaderBundle\\Entity');
        $f->addDriver($e, 'Icap\\LessonBundle\\Entity');

        $g = new \Doctrine\ORM\Configuration();
        $g->setEntityNamespaces(array('ClarolineCoreBundle' => 'Claroline\\CoreBundle\\Entity', 'ClarolineAnnouncementBundle' => 'Claroline\\AnnouncementBundle\\Entity', 'ClarolineForumBundle' => 'Claroline\\ForumBundle\\Entity', 'IcapBlogBundle' => 'Icap\\BlogBundle\\Entity', 'IcapDropzoneBundle' => 'Icap\\DropzoneBundle\\Entity', 'IcapWikiBundle' => 'Icap\\WikiBundle\\Entity', 'UJMExoBundle' => 'UJM\\ExoBundle\\Entity', 'ClarolineRssReaderBundle' => 'Claroline\\RssReaderBundle\\Entity', 'IcapLessonBundle' => 'Icap\\LessonBundle\\Entity'));
        $g->setMetadataCacheImpl($b);
        $g->setQueryCacheImpl($c);
        $g->setResultCacheImpl($d);
        $g->setMetadataDriverImpl($f);
        $g->setProxyDir('/home/jenkins/jobs/Release/workspace/app/cache/dev/doctrine/orm/Proxies');
        $g->setProxyNamespace('Proxies');
        $g->setAutoGenerateProxyClasses(true);
        $g->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $g->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $g->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());

        $h = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $g);
        $this->get('doctrine.orm.default_manager_configurator')->configure($h);

        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5284cc6b203db_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager($h, $this);
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('create_form_claroline_forum', array(0 => 'claroline.listener.forum_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_claroline_forum', array(0 => 'claroline.listener.forum_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('open_claroline_forum', array(0 => 'claroline.listener.forum_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('copy_claroline_forum', array(0 => 'claroline.listener.forum_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('delete_claroline_forum', array(0 => 'claroline.listener.forum_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('plugin_options_clarolineforum', array(0 => 'claroline.listener.forum_listener', 1 => 'onAdministrate'), 0);
        $instance->addListenerService('resource_claroline_forum_to_template', array(0 => 'claroline.listener.forum_listener', 1 => 'onExportTemplate'), 0);
        $instance->addListenerService('resource_claroline_forum_from_template', array(0 => 'claroline.listener.forum_listener', 1 => 'onImportTemplate'), 0);
        $instance->addListenerService('play_file_image', array(0 => 'claroline.listener.image_player_listener', 1 => 'onOpenImage'), 0);
        $instance->addListenerService('play_file_application_pdf', array(0 => 'claroline.listener.pdf_player_listener', 1 => 'onOpenPdf'), 0);
        $instance->addListenerService('play_file_video', array(0 => 'claroline.listener.video_player_listener', 1 => 'onOpenVideo'), 0);
        $instance->addListenerService('create_form_icap_blog', array(0 => 'icap.listener.blog_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_icap_blog', array(0 => 'icap.listener.blog_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('open_icap_blog', array(0 => 'icap.listener.blog_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('delete_icap_blog', array(0 => 'icap.listener.blog_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_icap_blog', array(0 => 'icap.listener.blog_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('configure_blog_icap_blog', array(0 => 'icap.listener.blog_listener', 1 => 'onConfigure'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-configure', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-configure_banner', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-post_create', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-post_read', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-post_update', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-post_delete', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-comment_create', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_blog-comment_delete', array(0 => 'icap.listener.blog.log_listener', 1 => 'onPostCreateLogDetails'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-configure', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-configure_banner', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-post_create', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-post_read', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-post_update', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-post_delete', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-comment_create', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_blog-comment_delete', array(0 => 'icap.listener.blog.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_form_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('delete_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('open_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('create_log_list_item_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_details_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('plugin_options_icapdropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onAdministrate'), 0);
        $instance->addListenerService('edit_dropzone_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onEdit'), 0);
        $instance->addListenerService('list_dropzone_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onList'), 0);
        $instance->addListenerService('open_dropzone_icap_dropzone', array(0 => 'icap.listener.dropzone_listener', 1 => 'onOpenCustom'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-dropzone_configure', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-criterion_create', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-criterion_update', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-criterion_delete', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-drop_start', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-drop_end', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-document_create', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-document_delete', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-document_open', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-correction_start', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-correction_end', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-correction_update', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-correction_delete', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-correction_validation_change', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_dropzone-drop_evaluate', array(0 => 'icap.listener.dropzone.display_log_listener', 1 => 'onCreateLogDetails'), 0);
        $instance->addListenerService('create_form_icap_wiki', array(0 => 'icap.listener.wiki_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_icap_wiki', array(0 => 'icap.listener.wiki_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('open_icap_wiki', array(0 => 'icap.listener.wiki_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('delete_icap_wiki', array(0 => 'icap.listener.wiki_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_icap_wiki', array(0 => 'icap.listener.wiki_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-section_create', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-section_move', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-section_update', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-section_delete', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-section_restore', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-section_remove', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-contribution_create', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_wiki-configure', array(0 => 'icap.listener.log_listener', 1 => 'onSectionCreateLogDetails'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-section_create', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-section_move', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-section_update', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-section_delete', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-section_restore', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-section_remove', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-contribution_create', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_wiki-configure', array(0 => 'icap.listener.log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_form_ujm_exercise', array(0 => 'ujm.listener.exercise_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_ujm_exercise', array(0 => 'ujm.listener.exercise_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('open_ujm_exercise', array(0 => 'ujm.listener.exercise_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('delete_ujm_exercise', array(0 => 'ujm.listener.exercise_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_ujm_exercise', array(0 => 'ujm.listener.exercise_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('open_tool_desktop_ujm_questions', array(0 => 'ujm.listener.exercise_listener', 1 => 'onDisplayDesktop'), 0);
        $instance->addListenerService('create_form_icap_lesson', array(0 => 'icap.listener.lesson_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_icap_lesson', array(0 => 'icap.listener.lesson_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('delete_icap_lesson', array(0 => 'icap.listener.lesson_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_icap_lesson', array(0 => 'icap.listener.lesson_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('open_icap_lesson', array(0 => 'icap.listener.lesson_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_lesson-chapter_create', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_lesson-chapter_read', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_lesson-chapter_update', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_lesson-chapter_delete', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_list_item_resource-icap_lesson-chapter_move', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onCreateLogListItem'), 0);
        $instance->addListenerService('create_log_details_resource-icap_lesson-chapter_create', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onChapterCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_lesson-chapter_read', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onChapterCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_lesson-chapter_update', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onChapterCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_lesson-chapter_delete', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onChapterCreateLogDetails'), 0);
        $instance->addListenerService('create_log_details_resource-icap_lesson-chapter_move', array(0 => 'icap.listener.lesson_log_listener', 1 => 'onChapterCreateLogDetails'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'claroline.core_bundle.listener.authentication_success_listener', 1 => 'onAuthenticationSuccess'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'claroline.core_bundle.listener.ajax_authentication_listener', 1 => 'onCoreException'), 1);
        $instance->addListenerService('open_tool_workspace_parameters', array(0 => 'claroline.core_bundle.listener.tool_listener', 1 => 'onDisplayWorkspaceParameters'), 0);
        $instance->addListenerService('open_tool_workspace_agenda', array(0 => 'claroline.core_bundle.listener.tool_listener', 1 => 'onDisplayWorkspaceAgenda'), 0);
        $instance->addListenerService('open_tool_workspace_logs', array(0 => 'claroline.core_bundle.listener.tool_listener', 1 => 'onDisplayWorkspaceLogs'), 0);
        $instance->addListenerService('open_tool_desktop_parameters', array(0 => 'claroline.core_bundle.listener.tool_listener', 1 => 'onDisplayDesktopParameters'), 0);
        $instance->addListenerService('open_tool_desktop_agenda', array(0 => 'claroline.core_bundle.listener.tool_listener', 1 => 'onDisplayDesktopAgenda'), 0);
        $instance->addListenerService('widget_simple_text', array(0 => 'claroline.core_bundle.listener.simple_text_widget_listener', 1 => 'onDisplay'), 0);
        $instance->addListenerService('widget_simple_text_configuration', array(0 => 'claroline.core_bundle.listener.simple_text_widget_listener', 1 => 'onConfig'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'claroline.core_bundle.listener.query_string_handler', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'claroline.core_bundle.listener.query_string_handler', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('create_form_file', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_file', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('delete_file', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_file', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('download_file', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onDownload'), 0);
        $instance->addListenerService('open_file', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('resource_file_to_template', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onExportTemplate'), 0);
        $instance->addListenerService('resource_file_from_template', array(0 => 'claroline.core_bundle.listener.resource.file_listener', 1 => 'onImportTemplate'), 0);
        $instance->addListenerService('create_form_text', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_text', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('copy_text', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('open_text', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('delete_text', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('resource_text_to_template', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onExportTemplate'), 0);
        $instance->addListenerService('resource_text_from_template', array(0 => 'claroline.core_bundle.listener.resource.text_listener', 1 => 'onImportTemplate'), 0);
        $instance->addListenerService('create_form_activity', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_activity', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('delete_activity', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('copy_activity', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onCopy'), 0);
        $instance->addListenerService('resource_activity_to_template', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onExportTemplate'), 0);
        $instance->addListenerService('resource_activity_from_template', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onImportTemplate'), 0);
        $instance->addListenerService('open_activity', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('compose_activity', array(0 => 'claroline.core_bundle.listener.resource.activity_listener', 1 => 'onCompose'), 0);
        $instance->addListenerService('create_form_directory', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_directory', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('open_directory', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('resource_directory_to_template', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'onExportTemplate'), 0);
        $instance->addListenerService('resource_directory_from_template', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'onImportTemplate'), 0);
        $instance->addListenerService('delete_directory', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'delete'), 0);
        $instance->addListenerService('copy_directory', array(0 => 'claroline.core_bundle.listener.resource.directory_listener', 1 => 'copy'), 0);
        $instance->addListenerService('widget_core_resource_logger', array(0 => 'claroline.core_bundle.listener.log.log_widget_listener', 1 => 'onDisplay'), 0);
        $instance->addListenerService('widget_core_resource_logger_configuration', array(0 => 'claroline.core_bundle.listener.log.log_widget_listener', 1 => 'onConfigure'), 0);
        $instance->addListenerService('log', array(0 => 'claroline.core_bundle.listener.log.log_listener', 1 => 'onLog'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'claroline.core_bundle.listener.view_as_listener', 1 => 'onViewAs'), 0);
        $instance->addListenerService('claroline.log.create', array(0 => 'claroline.core_bundle.listener.badge.badge_listener', 1 => 'onLog'), 0);
        $instance->addListenerService('open_tool_workspace_badges', array(0 => 'claroline.core_bundle.listener.badge.badge_listener', 1 => 'onWorkspaceOpen'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'claroline.core_bundle.listener.locale_setter', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('widget_my_workspaces', array(0 => 'claroline.core_bundle.listener.workspace_widget_listener', 1 => 'onDisplay'), 0);
        $instance->addListenerService('tool_resource_manager_from_template', array(0 => 'claroline.core_bundle.listener.tool.resource_manager_import_export_listener', 1 => 'onImportResource'), 0);
        $instance->addListenerService('tool_resource_manager_to_template', array(0 => 'claroline.core_bundle.listener.tool.resource_manager_import_export_listener', 1 => 'onExportResource'), 0);
        $instance->addListenerService('open_tool_workspace_users', array(0 => 'workspace_role_tool_config_listener', 1 => 'onDisplay'), 0);
        $instance->addListenerService('open_tool_desktop_home', array(0 => 'claroline.core_bundle.listener.tool.home_listener', 1 => 'onDisplayDesktopHome'), 0);
        $instance->addListenerService('open_tool_workspace_home', array(0 => 'claroline.core_bundle.listener.tool.home_listener', 1 => 'onDisplayWorkspaceHome'), 0);
        $instance->addListenerService('tool_home_from_template', array(0 => 'claroline.core_bundle.listener.tool.home_listener', 1 => 'onImportHome'), 0);
        $instance->addListenerService('tool_home_to_template', array(0 => 'claroline.core_bundle.listener.tool.home_listener', 1 => 'onExportHome'), 0);
        $instance->addListenerService('open_tool_workspace_resource_manager', array(0 => 'claroline.core_bundle.listener.tool.resource_manager_listener', 1 => 'onDisplayWorkspaceResouceManager'), 0);
        $instance->addListenerService('configure_workspace_tool_resource_manager', array(0 => 'claroline.core_bundle.listener.tool.resource_manager_listener', 1 => 'onDisplayWorkspaceResourceConfiguration'), 0);
        $instance->addListenerService('open_tool_desktop_resource_manager', array(0 => 'claroline.core_bundle.listener.tool.resource_manager_listener', 1 => 'onDisplayDesktopResourceManager'), 0);
        $instance->addListenerService('open_tool_desktop_claroline_activity_tool', array(0 => 'claroline.activity_tool_bundle.listener.tool_listener', 1 => 'onDesktopOpen'), 0);
        $instance->addListenerService('open_tool_workspace_claroline_activity_tool', array(0 => 'claroline.activity_tool_bundle.listener.tool_listener', 1 => 'onWorkspaceOpen'), 0);
        $instance->addListenerService('create_form_claroline_announcement_aggregate', array(0 => 'claroline.announcement_bundle.listener.announcement_listener', 1 => 'onCreateForm'), 0);
        $instance->addListenerService('create_claroline_announcement_aggregate', array(0 => 'claroline.announcement_bundle.listener.announcement_listener', 1 => 'onCreate'), 0);
        $instance->addListenerService('delete_claroline_announcement_aggregate', array(0 => 'claroline.announcement_bundle.listener.announcement_listener', 1 => 'onDelete'), 0);
        $instance->addListenerService('open_claroline_announcement_aggregate', array(0 => 'claroline.announcement_bundle.listener.announcement_listener', 1 => 'onOpen'), 0);
        $instance->addListenerService('widget_claroline_announcement_widget', array(0 => 'claroline.announcement_bundle.listener.announcement_widget_listener', 1 => 'onDisplay'), 0);
        $instance->addListenerService('log', array(0 => 'icap.dropzone_bundle.listener.log.log_drop_evaluate_listener', 1 => 'onLog'), 0);
        $instance->addListenerService('widget_claroline_rssreader', array(0 => 'claroline.rss_reader_bundle.listener.rss_reader_listener', 1 => 'onDisplay'), 0);
        $instance->addListenerService('widget_claroline_rssreader_configuration', array(0 => 'claroline.rss_reader_bundle.listener.rss_reader_listener', 1 => 'onConfigure'), 0);
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.deprecation_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.blame', 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\CacheListener');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/home/jenkins/jobs/Release/workspace/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider A Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('tags' => 'icap.blog.type.tags', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'tinymce' => 'claroline.form.tinymce', 'datepicker' => 'claroline.form.datepicker', 'twolevelselect' => 'claroline.form.twolevelselect', 'daterange' => 'claroline.form.daterange', 'simpleautocomplete' => 'claroline.form.simpleautocomplete', 'buttongroupselect' => 'claroline.form.buttongroupselect'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'zenstruck_form.theme_type'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'fos_js_routing.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\JsRoutingBundle\Controller\Controller A FOS\JsRoutingBundle\Controller\Controller instance.
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), true);
    }

    /**
     * Gets the 'fos_js_routing.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor A FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor instance.
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('router'), array(), '/home/jenkins/jobs/Release/workspace/app/cache/dev', array('ClarolineMigrationBundle' => 'Claroline\\MigrationBundle\\ClarolineMigrationBundle', 'ClarolineInstallationBundle' => 'Claroline\\InstallationBundle\\ClarolineInstallationBundle', 'FrontEndBundle' => 'Claroline\\Bundle\\FrontEndBundle\\FrontEndBundle', 'ClarolineCoreBundle' => 'Claroline\\CoreBundle\\ClarolineCoreBundle', 'ClarolineActivityToolBundle' => 'Claroline\\ActivityToolBundle\\ClarolineActivityToolBundle', 'ClarolineAnnouncementBundle' => 'Claroline\\AnnouncementBundle\\ClarolineAnnouncementBundle', 'ClarolineForumBundle' => 'Claroline\\ForumBundle\\ClarolineForumBundle', 'ClarolineImagePlayerBundle' => 'Claroline\\ImagePlayerBundle\\ClarolineImagePlayerBundle', 'ClarolinePdfPlayerBundle' => 'Claroline\\PdfPlayerBundle\\ClarolinePdfPlayerBundle', 'ClarolineVideoPlayerBundle' => 'Claroline\\VideoPlayerBundle\\ClarolineVideoPlayerBundle', 'IcapBlogBundle' => 'Icap\\BlogBundle\\IcapBlogBundle', 'IcapDropzoneBundle' => 'Icap\\DropzoneBundle\\IcapDropzoneBundle', 'IcapWikiBundle' => 'Icap\\WikiBundle\\IcapWikiBundle', 'UJMExoBundle' => 'UJM\\ExoBundle\\UJMExoBundle', 'ClarolineRssReaderBundle' => 'Claroline\\RssReaderBundle\\ClarolineRssReaderBundle', 'IcapLessonBundle' => 'Icap\\LessonBundle\\IcapLessonBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'BazingaExposeTranslationBundle' => 'Bazinga\\ExposeTranslationBundle\\BazingaExposeTranslationBundle', 'IDCIExporterBundle' => 'IDCI\\Bundle\\ExporterBundle\\IDCIExporterBundle', 'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'BeSimpleSsoAuthBundle' => 'BeSimple\\SsoAuthBundle\\BeSimpleSsoAuthBundle', 'ZenstruckFormBundle' => 'Zenstruck\\Bundle\\FormBundle\\ZenstruckFormBundle', 'JMSTwigJsBundle' => 'JMS\\TwigJsBundle\\JMSTwigJsBundle', 'StfalconTinymceBundle' => 'Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle', 'ClarolineKernelBundle' => 'Claroline\\KernelBundle\\ClarolineKernelBundle'));
    }

    /**
     * Gets the 'fos_js_routing.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance.
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true);

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'));
    }

    /**
     * Gets the 'icap.blog.manager.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Manager\TagManager A Icap\BlogBundle\Manager\TagManager instance.
     */
    protected function getIcap_Blog_Manager_TagService()
    {
        return $this->services['icap.blog.manager.tag'] = new \Icap\BlogBundle\Manager\TagManager($this->get('icap.blog.tag_repository'));
    }

    /**
     * Gets the 'icap.blog.post_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Repository\PostRepository A Icap\BlogBundle\Repository\PostRepository instance.
     */
    protected function getIcap_Blog_PostRepositoryService()
    {
        return $this->services['icap.blog.post_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Icap\\BlogBundle\\Entity\\Post');
    }

    /**
     * Gets the 'icap.blog.tag_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Repository\TagRepository A Icap\BlogBundle\Repository\TagRepository instance.
     */
    protected function getIcap_Blog_TagRepositoryService()
    {
        return $this->services['icap.blog.tag_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Icap\\BlogBundle\\Entity\\Tag');
    }

    /**
     * Gets the 'icap.blog.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Twig\IcapBlogExtension A Icap\BlogBundle\Twig\IcapBlogExtension instance.
     */
    protected function getIcap_Blog_Twig_ExtensionService()
    {
        return $this->services['icap.blog.twig.extension'] = new \Icap\BlogBundle\Twig\IcapBlogExtension($this->get('icap.blog.tag_repository'), $this->get('icap.blog.post_repository'));
    }

    /**
     * Gets the 'icap.blog.type.tags' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Form\TagsType A Icap\BlogBundle\Form\TagsType instance.
     */
    protected function getIcap_Blog_Type_TagsService()
    {
        return $this->services['icap.blog.type.tags'] = new \Icap\BlogBundle\Form\TagsType($this->get('icap.blog.manager.tag'));
    }

    /**
     * Gets the 'icap.dropzone_bundle.library.security.voter.temporary_access_resource_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\DropzoneBundle\Library\Security\Voter\TemporaryAccessResourceVoter A Icap\DropzoneBundle\Library\Security\Voter\TemporaryAccessResourceVoter instance.
     */
    protected function getIcap_DropzoneBundle_Library_Security_Voter_TemporaryAccessResourceVoterService()
    {
        return $this->services['icap.dropzone_bundle.library.security.voter.temporary_access_resource_voter'] = new \Icap\DropzoneBundle\Library\Security\Voter\TemporaryAccessResourceVoter($this->get('claroline.temporary_access_resource_manager'));
    }

    /**
     * Gets the 'icap.dropzone_bundle.listener.log.log_drop_evaluate_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\DropzoneBundle\Listener\Log\LogDropEvaluateListener A Icap\DropzoneBundle\Listener\Log\LogDropEvaluateListener instance.
     */
    protected function getIcap_DropzoneBundle_Listener_Log_LogDropEvaluateListenerService()
    {
        return $this->services['icap.dropzone_bundle.listener.log.log_drop_evaluate_listener'] = new \Icap\DropzoneBundle\Listener\Log\LogDropEvaluateListener($this->get('doctrine.orm.default_entity_manager'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'icap.lesson.chaptertype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\LessonBundle\Form\ChapterType A Icap\LessonBundle\Form\ChapterType instance.
     */
    protected function getIcap_Lesson_ChaptertypeService()
    {
        return $this->services['icap.lesson.chaptertype'] = new \Icap\LessonBundle\Form\ChapterType($this->get('translator.default'));
    }

    /**
     * Gets the 'icap.lesson.duplicatechaptertype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\LessonBundle\Form\DuplicateChapterType A Icap\LessonBundle\Form\DuplicateChapterType instance.
     */
    protected function getIcap_Lesson_DuplicatechaptertypeService()
    {
        return $this->services['icap.lesson.duplicatechaptertype'] = new \Icap\LessonBundle\Form\DuplicateChapterType($this->get('doctrine.orm.default_entity_manager'), $this->get('translator.default'));
    }

    /**
     * Gets the 'icap.lesson.manager.chapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\LessonBundle\Manager\ChapterManager A Icap\LessonBundle\Manager\ChapterManager instance.
     */
    protected function getIcap_Lesson_Manager_ChapterService()
    {
        return $this->services['icap.lesson.manager.chapter'] = new \Icap\LessonBundle\Manager\ChapterManager($this->get('doctrine.orm.default_entity_manager'), $this->get('translator.default'));
    }

    /**
     * Gets the 'icap.lesson.movechaptertype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\LessonBundle\Form\MoveChapterType A Icap\LessonBundle\Form\MoveChapterType instance.
     */
    protected function getIcap_Lesson_MovechaptertypeService()
    {
        return $this->services['icap.lesson.movechaptertype'] = new \Icap\LessonBundle\Form\MoveChapterType($this->get('doctrine.orm.default_entity_manager'), $this->get('translator.default'));
    }

    /**
     * Gets the 'icap.listener.blog.log_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Listener\LogListener A Icap\BlogBundle\Listener\LogListener instance.
     */
    protected function getIcap_Listener_Blog_LogListenerService()
    {
        $this->services['icap.listener.blog.log_listener'] = $instance = new \Icap\BlogBundle\Listener\LogListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.blog_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Listener\BlogListener A Icap\BlogBundle\Listener\BlogListener instance.
     */
    protected function getIcap_Listener_BlogListenerService()
    {
        $this->services['icap.listener.blog_listener'] = $instance = new \Icap\BlogBundle\Listener\BlogListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.document_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\DropzoneBundle\Listener\DeleteListener A Icap\DropzoneBundle\Listener\DeleteListener instance.
     */
    protected function getIcap_Listener_DocumentListenerService()
    {
        $this->services['icap.listener.document_listener'] = $instance = new \Icap\DropzoneBundle\Listener\DeleteListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.dropzone.display_log_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\DropzoneBundle\Listener\Log\DisplayLogListener A Icap\DropzoneBundle\Listener\Log\DisplayLogListener instance.
     */
    protected function getIcap_Listener_Dropzone_DisplayLogListenerService()
    {
        $this->services['icap.listener.dropzone.display_log_listener'] = $instance = new \Icap\DropzoneBundle\Listener\Log\DisplayLogListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.dropzone_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\DropzoneBundle\Listener\DropzoneListener A Icap\DropzoneBundle\Listener\DropzoneListener instance.
     */
    protected function getIcap_Listener_DropzoneListenerService()
    {
        $this->services['icap.listener.dropzone_listener'] = $instance = new \Icap\DropzoneBundle\Listener\DropzoneListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.lesson_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\LessonBundle\Listener\LessonListener A Icap\LessonBundle\Listener\LessonListener instance.
     */
    protected function getIcap_Listener_LessonListenerService()
    {
        $this->services['icap.listener.lesson_listener'] = $instance = new \Icap\LessonBundle\Listener\LessonListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.lesson_log_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\LessonBundle\Listener\LogListener A Icap\LessonBundle\Listener\LogListener instance.
     */
    protected function getIcap_Listener_LessonLogListenerService()
    {
        $this->services['icap.listener.lesson_log_listener'] = $instance = new \Icap\LessonBundle\Listener\LogListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.log_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Listener\LogListener A Icap\WikiBundle\Listener\LogListener instance.
     */
    protected function getIcap_Listener_LogListenerService()
    {
        $this->services['icap.listener.log_listener'] = $instance = new \Icap\WikiBundle\Listener\LogListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.listener.wiki_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Listener\WikiListener A Icap\WikiBundle\Listener\WikiListener instance.
     */
    protected function getIcap_Listener_WikiListenerService()
    {
        $this->services['icap.listener.wiki_listener'] = $instance = new \Icap\WikiBundle\Listener\WikiListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'icap.wiki.contribution_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Manager\ContributionManager A Icap\WikiBundle\Manager\ContributionManager instance.
     */
    protected function getIcap_Wiki_ContributionManagerService()
    {
        return $this->services['icap.wiki.contribution_manager'] = new \Icap\WikiBundle\Manager\ContributionManager($this->get('icap.wiki.contribution_repository'));
    }

    /**
     * Gets the 'icap.wiki.contribution_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Repository\ContributionRepository A Icap\WikiBundle\Repository\ContributionRepository instance.
     */
    protected function getIcap_Wiki_ContributionRepositoryService()
    {
        return $this->services['icap.wiki.contribution_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Icap\\WikiBundle\\Entity\\Contribution');
    }

    /**
     * Gets the 'icap.wiki.section_edit_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Form\EditSectionType A Icap\WikiBundle\Form\EditSectionType instance.
     */
    protected function getIcap_Wiki_SectionEditTypeService()
    {
        return $this->services['icap.wiki.section_edit_type'] = new \Icap\WikiBundle\Form\EditSectionType($this->get('icap.wiki.section_manager'));
    }

    /**
     * Gets the 'icap.wiki.section_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Manager\SectionManager A Icap\WikiBundle\Manager\SectionManager instance.
     */
    protected function getIcap_Wiki_SectionManagerService()
    {
        return $this->services['icap.wiki.section_manager'] = new \Icap\WikiBundle\Manager\SectionManager($this->get('icap.wiki.section_repository'));
    }

    /**
     * Gets the 'icap.wiki.section_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\WikiBundle\Repository\SectionRepository A Icap\WikiBundle\Repository\SectionRepository instance.
     */
    protected function getIcap_Wiki_SectionRepositoryService()
    {
        return $this->services['icap.wiki.section_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Icap\\WikiBundle\\Entity\\Section');
    }

    /**
     * Gets the 'icap_blog.form.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Icap\BlogBundle\Form\PostType A Icap\BlogBundle\Form\PostType instance.
     */
    protected function getIcapBlog_Form_PostService()
    {
        return $this->services['icap_blog.form.post'] = new \Icap\BlogBundle\Form\PostType($this->get('security.context'));
    }

    /**
     * Gets the 'idci_exporter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return IDCI\Bundle\ExporterBundle\Service\Manager A IDCI\Bundle\ExporterBundle\Service\Manager instance.
     */
    protected function getIdciExporter_ManagerService()
    {
        return $this->services['idci_exporter.manager'] = new \IDCI\Bundle\ExporterBundle\Service\Manager($this);
    }

    /**
     * Gets the 'idci_exporter.transformer_twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return IDCI\Bundle\ExporterBundle\Transformer\TwigTransformer A IDCI\Bundle\ExporterBundle\Transformer\TwigTransformer instance.
     */
    protected function getIdciExporter_TransformerTwigService()
    {
        return $this->services['idci_exporter.transformer_twig'] = new \IDCI\Bundle\ExporterBundle\Transformer\TwigTransformer($this);
    }

    /**
     * Gets the 'jms_aop.interceptor_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\AopBundle\Aop\InterceptorLoader A JMS\AopBundle\Aop\InterceptorLoader instance.
     */
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }

    /**
     * Gets the 'jms_aop.pointcut_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\AopBundle\Aop\PointcutContainer A JMS\AopBundle\Aop\PointcutContainer instance.
     */
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array('security.access.method_interceptor' => $this->get('security.access.pointcut')));
    }

    /**
     * Gets the 'jms_di_extra.metadata.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\DiExtraBundle\Metadata\MetadataConverter A JMS\DiExtraBundle\Metadata\MetadataConverter instance.
     */
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }

    /**
     * Gets the 'jms_di_extra.metadata.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache('/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_diextra/metadata'));

        return $instance;
    }

    /**
     * Gets the 'jms_di_extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver A JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver instance.
     */
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        $this->services['locale_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.firephp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\FirePHPHandler A Symfony\Bridge\Monolog\Handler\FirePHPHandler instance.
     */
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/home/jenkins/jobs/Release/workspace/app/logs/dev.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.deprecation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DeprecationService()
    {
        $this->services['monolog.logger.deprecation'] = $instance = new \Symfony\Bridge\Monolog\Logger('deprecation');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.emergency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:/home/jenkins/jobs/Release/workspace/app/cache/dev/profiler', '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '.', array('cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'dynamic'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('claroline.installation.loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager A JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $b = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter($this->get('security.expressions.handler'), $a);
        $b->setLazyCompiler($this, 'security.expressions.compiler');
        $b->setCacheDir('/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_security/expressions');

        return $this->services['security.access.decision_manager'] = new \JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => $this->get('claroline.core_bundle.library.security.voter.workspace_voter'), 1 => $this->get('icap.dropzone_bundle.library.security.voter.temporary_access_resource_voter'), 2 => $this->get('claroline.core_bundle.library.security.voter.widget_voter'), 3 => $this->get('claroline.core_bundle.library.security.voter.resource_voter'), 4 => $this->get('claroline.core_bundle.library.security.voter.administrator_voter'), 5 => $b, 6 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($this->get('security.role_hierarchy')), 7 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver')), 8 => new \JMS\SecurityExtraBundle\Security\Acl\Voter\AclVoter($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map'), $a, false)), 'affirmative', false, true));
    }

    /**
     * Gets the 'security.access.method_interceptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor A JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor instance.
     */
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array(0 => new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AclAfterInvocationProvider($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map')))), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('security.extra.metadata_factory'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.access.pointcut' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut A JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut instance.
     */
    protected function getSecurity_Access_PointcutService()
    {
        $this->services['security.access.pointcut'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut($this->get('security.extra.metadata_factory'), false, array());

        $instance->setSecuredClasses(array());

        return $instance;
    }

    /**
     * Gets the 'security.acl.dbal.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Acl\Dbal\Schema A Symfony\Component\Security\Acl\Dbal\Schema instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), $this->get('doctrine.dbal.default_connection'));
    }

    /**
     * Gets the 'security.acl.dbal.schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener A Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        return $this->services['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener($this);
    }

    /**
     * Gets the 'security.acl.permission_evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator A JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator instance.
     */
    protected function getSecurity_Acl_PermissionEvaluatorService()
    {
        return $this->services['security.acl.permission_evaluator'] = new \JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.acl.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Acl\Dbal\MutableAclProvider A Symfony\Component\Security\Acl\Dbal\MutableAclProvider instance.
     */
    protected function getSecurity_Acl_ProviderService()
    {
        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider($this->get('doctrine.dbal.default_connection'), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), NULL);
    }

    /**
     * Gets the 'security.authentication.sso.authentication_failure_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return BeSimple\SsoAuthBundle\Security\Http\Authentication\SsoAuthenticationFailureHandler A BeSimple\SsoAuthBundle\Security\Http\Authentication\SsoAuthenticationFailureHandler instance.
     */
    protected function getSecurity_Authentication_Sso_AuthenticationFailureHandlerService()
    {
        return $this->services['security.authentication.sso.authentication_failure_handler'] = new \BeSimple\SsoAuthBundle\Security\Http\Authentication\SsoAuthenticationFailureHandler($this->get('debug.templating.engine.twig'));
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Claroline\\CoreBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.expressions.compiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler instance.
     */
    protected function getSecurity_Expressions_CompilerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ContainerAwareVariableCompiler();
        $a->setMaps(array('trust_resolver' => 'security.authentication.trust_resolver', 'role_hierarchy' => 'security.role_hierarchy', 'permission_evaluator' => 'security.acl.permission_evaluator'), array());

        $this->services['security.expressions.compiler'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler();

        $instance->addFunctionCompiler(new \JMS\SecurityExtraBundle\Security\Acl\Expression\HasPermissionFunctionCompiler());
        $instance->addTypeCompiler(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ParameterExpressionCompiler());
        $instance->addTypeCompiler($a);

        return $instance;
    }

    /**
     * Gets the 'security.expressions.reverse_interpreter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter A JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter instance.
     */
    protected function getSecurity_Expressions_ReverseInterpreterService()
    {
        return $this->services['security.expressions.reverse_interpreter'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter($this->get('security.expressions.compiler'), $this->get('security.expressions.handler'));
    }

    /**
     * Gets the 'security.extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getSecurity_Extra_MetadataDriverService()
    {
        return $this->services['security.extra.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SecurityExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.install' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/install'), 'security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.install' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_InstallService()
    {
        return $this->services['security.firewall.map.context.install'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.context');
        $c = $this->get('security.user.provider.concrete.user_db');
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');
        $h = $this->get('security.access.decision_manager');

        $i = new \Symfony\Component\Security\Http\AccessMap();

        $j = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $k = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $j, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($j, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $k->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $l = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($j, array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $l->setProviderKey('main');

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($i, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $c), 'main', $a, $d), 2 => $k, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $j, 'main', $l, new \Claroline\CoreBundle\Listener\AjaxAuthenticationFailureHandler($f, $j, array(), $a), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $a, $d), 4 => new \Claroline\CoreBundle\Listener\AnonymousAuthenticationListener($b, '5284cc6aebdac', $a), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $h, $i, $g, $a), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $c, $this->get('security.user_checker'), 'main', $h, $a, '_switch', 'ROLE_ADMIN', $d)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $j, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $j, '/login', false), NULL, NULL, $a));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('/home/jenkins/jobs/Release/workspace/app/cache/dev/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        $instance->add($this->get('claroline.core_bundle.converter.authenticated_user_converter'), 500, NULL);
        $instance->add($this->get('claroline.core_bundle.converter.multiple_ids_converter'), 500, NULL);
        $instance->add($this->get('claroline.core_bundle.converter.strict_id_converter'), 500, NULL);

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance.
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/home/jenkins/jobs/Release/workspace/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/home/jenkins/jobs/Release/workspace/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.blame' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\EventListener\BlameListener A Stof\DoctrineExtensionsBundle\EventListener\BlameListener instance.
     */
    protected function getStofDoctrineExtensions_EventListener_BlameService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.blame'] = new \Stof\DoctrineExtensionsBundle\EventListener\BlameListener($this->get('stof_doctrine_extensions.listener.blameable'), $this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance.
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost(NULL);
        $instance->setPort(NULL);
        $instance->setEncryption(NULL);
        $instance->setUsername(NULL);
        $instance->setPassword(NULL);
        $instance->setAuthMode(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/home/jenkins/jobs/Release/workspace/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Library\Templating\Loader\TemplateLocator A Claroline\CoreBundle\Library\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Claroline\CoreBundle\Library\Templating\Loader\TemplateLocator($this->get('file_locator'), $this->get('claroline.config.platform_config_handler'), $this->get('claroline.common.theme_service'), '/home/jenkins/jobs/Release/workspace/app/Resources');
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        $instance->addExtractor('php', $this->get('translation.extractor.php'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/translations', 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.gl.xlf', 'gl', 'security');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/log.en.yml', 'en', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/agenda.fr.yml', 'fr', 'agenda');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/badge.fr.yml', 'fr', 'badge');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/theme.fr.yml', 'fr', 'theme');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/calendar.en.yml', 'en', 'calendar');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/tools.fr.yml', 'fr', 'tools');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/platform.en.yml', 'en', 'platform');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/error.en.yml', 'en', 'error');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/log.fr.yml', 'fr', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/platform.fr.yml', 'fr', 'platform');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/badge.en.yml', 'en', 'badge');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/error.fr.yml', 'fr', 'error');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/theme.en.yml', 'en', 'theme');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/home.en.yml', 'en', 'home');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/home.fr.yml', 'fr', 'home');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/tools.en.yml', 'en', 'tools');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/calendar.fr.yml', 'fr', 'calendar');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/install.en.yml', 'en', 'install');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/agenda.en.yml', 'en', 'agenda');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/translations/install.fr.yml', 'fr', 'install');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/activity-tool-bundle/Claroline/ActivityToolBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/activity-tool-bundle/Claroline/ActivityToolBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/activity-tool-bundle/Claroline/ActivityToolBundle/Resources/translations/tools.fr.yml', 'fr', 'tools');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/activity-tool-bundle/Claroline/ActivityToolBundle/Resources/translations/tools.en.yml', 'en', 'tools');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/announcement.fr.yml', 'fr', 'announcement');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/announcement.en.yml', 'en', 'announcement');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/forum.fr.yml', 'fr', 'forum');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/forum.en.yml', 'en', 'forum');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/log.en.yml', 'en', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/log.fr.yml', 'fr', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/icap_blog.en.yml', 'en', 'icap_blog');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/icap_blog.fr.yml', 'fr', 'icap_blog');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/translations/icap_dropzone.fr.yml', 'fr', 'icap_dropzone');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/translations/log.en.yml', 'en', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/translations/log.fr.yml', 'fr', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/translations/icap_dropzone.en.yml', 'en', 'icap_dropzone');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/plugin_descrpition.fr.yml', 'fr', 'plugin_descrpition');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/log.en.yml', 'en', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/icap_wiki.en.yml', 'en', 'icap_wiki');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/log.fr.yml', 'fr', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/icap_wiki.fr.yml', 'fr', 'icap_wiki');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/tools.fr.yml', 'fr', 'tools');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/tools.en.yml', 'en', 'tools');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/widget.en.yml', 'en', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/plugin_description.fr.yml', 'fr', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/widget.fr.yml', 'fr', 'widget');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/rss_reader.en.yml', 'en', 'rss_reader');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/plugin_description.en.yml', 'en', 'plugin_description');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/translations/rss_reader.fr.yml', 'fr', 'rss_reader');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/translations/log.en.yml', 'en', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/translations/icap_lesson.fr.yml', 'fr', 'icap_lesson');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/translations/log.fr.yml', 'fr', 'log');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/translations/resource.fr.yml', 'fr', 'resource');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/translations/icap_lesson.en.yml', 'en', 'icap_lesson');
        $instance->addResource('yml', '/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/translations/resource.en.yml', 'en', 'resource');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.zh_CN.xliff', 'zh_CN', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.az.xliff', 'az', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.nl.xliff', 'nl', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Latn.xliff', 'sr_Latn', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.es.xliff', 'es', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ru.xliff', 'ru', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ca.xliff', 'ca', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.en.xliff', 'en', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pl.xliff', 'pl', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ar.xliff', 'ar', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.fr.xliff', 'fr', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.it.xliff', 'it', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.de.xliff', 'de', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.da.xliff', 'da', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pt.xliff', 'pt', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.tr.xliff', 'tr', 'pagerfanta');
        $instance->addResource('xliff', '/home/jenkins/jobs/Release/workspace/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Cyrl.xliff', 'sr_Cyrl', 'pagerfanta');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('security.context');

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/twig', 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension($this->get('icap.blog.twig.extension'));
        $instance->addExtension($this->get('twig.extension.twigextensions'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, '/home/jenkins/jobs/Release/workspace/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'ClarolineCoreBundle:Form:date_picker.html.twig', 2 => 'ClarolineCoreBundle:Form:date_range.html.twig', 3 => 'ClarolineCoreBundle:Form:two_level_select.html.twig', 4 => 'ClarolineCoreBundle:Form:simple_auto_complete.html.twig', 5 => 'ClarolineCoreBundle:Form:button_group_select.html.twig', 6 => 'ClarolineCoreBundle::form_theme.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($a));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'ClarolineMigrationBundle', 1 => 'ClarolineInstallationBundle', 2 => 'FrontEndBundle', 3 => 'ClarolineCoreBundle', 4 => 'ClarolineActivityToolBundle', 5 => 'ClarolineAnnouncementBundle', 6 => 'ClarolineForumBundle', 7 => 'ClarolineImagePlayerBundle', 8 => 'ClarolinePdfPlayerBundle', 9 => 'ClarolineVideoPlayerBundle', 10 => 'IcapBlogBundle', 11 => 'IcapDropzoneBundle', 12 => 'IcapWikiBundle', 13 => 'UJMExoBundle', 14 => 'ClarolineRssReaderBundle', 15 => 'IcapLessonBundle', 16 => 'TwigBundle', 17 => 'SecurityBundle', 18 => 'FrameworkBundle', 19 => 'WebProfilerBundle', 20 => 'DoctrineBundle', 21 => 'MonologBundle', 22 => 'SwiftmailerBundle', 23 => 'AsseticBundle', 24 => 'BazingaExposeTranslationBundle', 25 => 'IDCIExporterBundle', 26 => 'WhiteOctoberPagerfantaBundle', 27 => 'FOSJsRoutingBundle', 28 => 'StofDoctrineExtensionsBundle', 29 => 'JMSAopBundle', 30 => 'JMSDiExtraBundle', 31 => 'JMSSecurityExtraBundle', 32 => 'SensioGeneratorBundle', 33 => 'SensioFrameworkExtraBundle', 34 => 'BeSimpleSsoAuthBundle', 35 => 'ZenstruckFormBundle', 36 => 'JMSTwigJsBundle', 37 => 'StfalconTinymceBundle', 38 => 'ClarolineKernelBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension(new \JMS\SecurityExtraBundle\Twig\SecurityExtension($a));
        $instance->addExtension(new \TwigJs\Twig\TwigJsExtension());
        $instance->addExtension($this->get('twig.extension.stfalcon_tinymce'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.date_formatter_extension'));
        $instance->addExtension(new \Claroline\CoreBundle\Twig\PagerfantaExtension($this, $this));
        $instance->addExtension($this->get('claroline.core_bundle.twig.workspace_access_extension'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.home_extension'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.has_role_extension'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.theme_extension'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.platform_configuration_extension'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.mailer_extension'));
        $instance->addExtension($this->get('claroline.core_bundle.twig.resource_mode_extension'));
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('chosenRangeKeys', '[\'yesterday\', \'last_seven_days\', \'last_thirty_days\', \'this_month\', \'last_month\', \'this_school_year\', \'last_school_year\']');

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Controller\CustomExceptionController A Claroline\CoreBundle\Controller\CustomExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Claroline\CoreBundle\Controller\CustomExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.stfalcon_tinymce' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension A Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension instance.
     */
    protected function getTwig_Extension_StfalconTinymceService()
    {
        return $this->services['twig.extension.stfalcon_tinymce'] = new \Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension($this);
    }

    /**
     * Gets the 'twig.extension.twigextensions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return UJM\ExoBundle\Services\twig\twigExtensions A UJM\ExoBundle\Services\twig\twigExtensions instance.
     */
    protected function getTwig_Extension_TwigextensionsService()
    {
        return $this->services['twig.extension.twigextensions'] = new \UJM\ExoBundle\Services\twig\twigExtensions($this->get('doctrine'), $this->get('ujm.exercise_services'));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/migration-bundle/Claroline/MigrationBundle/Resources/views', 'ClarolineMigration');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/core-bundle/Claroline/CoreBundle/Resources/views', 'ClarolineCore');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/activity-tool-bundle/Claroline/ActivityToolBundle/Resources/views', 'ClarolineActivityTool');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/announcement-bundle/Claroline/AnnouncementBundle/Resources/views', 'ClarolineAnnouncement');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/forum-bundle/Claroline/ForumBundle/Resources/views', 'ClarolineForum');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/image-player-bundle/Claroline/ImagePlayerBundle/Resources/views', 'ClarolineImagePlayer');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/pdf-player-bundle/Claroline/PdfPlayerBundle/Resources/views', 'ClarolinePdfPlayer');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/video-player-bundle/Claroline/VideoPlayerBundle/Resources/views', 'ClarolineVideoPlayer');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/icap/blog-bundle/Icap/BlogBundle/Resources/views', 'IcapBlog');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/icap/dropzone-bundle/Icap/DropzoneBundle/Resources/views', 'IcapDropzone');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/icap/wiki-bundle/Icap/WikiBundle/Resources/views', 'IcapWiki');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/views', 'UJMExo');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/claroline/rss-reader-bundle/Claroline/RssReaderBundle/Resources/views', 'ClarolineRssReader');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/icap/lesson-bundle/Icap/LessonBundle/Resources/views', 'IcapLesson');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/willdurand/expose-translation-bundle/Bazinga/ExposeTranslationBundle/Resources/views', 'BazingaExposeTranslation');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/besimple/sso-auth-bundle/BeSimple/SsoAuthBundle/Resources/views', 'BeSimpleSsoAuth');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/zenstruck/form-bundle/Zenstruck/Bundle/FormBundle/Resources/views', 'ZenstruckForm');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views', 'StfalconTinymce');
        $instance->addPath('/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'twig_js.assetic_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return TwigJs\Assetic\TwigJsFilter A TwigJs\Assetic\TwigJsFilter instance.
     */
    protected function getTwigJs_AsseticFilterService()
    {
        return $this->services['twig_js.assetic_filter'] = new \TwigJs\Assetic\TwigJsFilter($this->get('twig_js.compile_request_handler'));
    }

    /**
     * Gets the 'twig_js.compile_request_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return TwigJs\CompileRequestHandler A TwigJs\CompileRequestHandler instance.
     */
    protected function getTwigJs_CompileRequestHandlerService()
    {
        $a = $this->get('twig');

        $b = new \TwigJs\JsCompiler($a);
        $b->addFilterCompiler(new \JMS\TwigJsBundle\TwigJs\Compiler\TransFilterCompiler($this->get('translator.default')));

        return $this->services['twig_js.compile_request_handler'] = new \TwigJs\CompileRequestHandler($a, $b);
    }

    /**
     * Gets the 'ujm.exercise.validator.isvalidqcmglobalmark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return UJM\ExoBundle\Validator\Constraints\isValidQCMGlobalMarkValidator A UJM\ExoBundle\Validator\Constraints\isValidQCMGlobalMarkValidator instance.
     * 
     * @throws InactiveScopeException when the 'ujm.exercise.validator.isvalidqcmglobalmark' service is requested while the 'request' scope is not active
     */
    protected function getUjm_Exercise_Validator_IsvalidqcmglobalmarkService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ujm.exercise.validator.isvalidqcmglobalmark', 'request');
        }

        return $this->services['ujm.exercise.validator.isvalidqcmglobalmark'] = $this->scopedServices['request']['ujm.exercise.validator.isvalidqcmglobalmark'] = new \UJM\ExoBundle\Validator\Constraints\isValidQCMGlobalMarkValidator($this->get('request'));
    }

    /**
     * Gets the 'ujm.exercise.validator.isvalidqcmmark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return UJM\ExoBundle\Validator\Constraints\isValidQCMMarkValidator A UJM\ExoBundle\Validator\Constraints\isValidQCMMarkValidator instance.
     * 
     * @throws InactiveScopeException when the 'ujm.exercise.validator.isvalidqcmmark' service is requested while the 'request' scope is not active
     */
    protected function getUjm_Exercise_Validator_IsvalidqcmmarkService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ujm.exercise.validator.isvalidqcmmark', 'request');
        }

        return $this->services['ujm.exercise.validator.isvalidqcmmark'] = $this->scopedServices['request']['ujm.exercise.validator.isvalidqcmmark'] = new \UJM\ExoBundle\Validator\Constraints\isValidQCMMarkValidator($this->get('request'));
    }

    /**
     * Gets the 'ujm.exercise_services' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return UJM\ExoBundle\Services\classes\exerciseServices A UJM\ExoBundle\Services\classes\exerciseServices instance.
     */
    protected function getUjm_ExerciseServicesService()
    {
        return $this->services['ujm.exercise_services'] = new \UJM\ExoBundle\Services\classes\exerciseServices($this->get('doctrine'), $this->get('security.context'));
    }

    /**
     * Gets the 'ujm.listener.exercise_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return UJM\ExoBundle\Listener\ExerciseListener A UJM\ExoBundle\Listener\ExerciseListener instance.
     */
    protected function getUjm_Listener_ExerciseListenerService()
    {
        $this->services['ujm.listener.exercise_listener'] = $instance = new \UJM\ExoBundle\Listener\ExerciseListener();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('ujm.exercise_isvalidqcmglobalmark' => 'ujm.exercise.validator.isvalidqcmglobalmark', 'ujm.exercise_isvalidqcmmark' => 'ujm.exercise.validator.isvalidqcmmark', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'csv_user_validator' => 'claroline.core_bundle.validator.constraints.csv_user_validator', 'workspace_unique_code_validator' => 'claroline.core_bundle.validator.constraints.workspace_unique_code_validator', 'send_to_name_validator' => 'claroline.core_bundle.validator.constraints.send_to_names_validator', 'admin_workspace_tag_unique_name_validator' => 'claroline.core_bundle.validator.constraints.admin_workspace_tag_unique_name_validator')), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer')));
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => 'SecurityBundle:Collector:security'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom');
    }

    /**
     * Gets the 'white_october_pagerfanta.view_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Pagerfanta\View\ViewFactory A Pagerfanta\View\ViewFactory instance.
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator.default');

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));

        return $instance;
    }

    /**
     * Gets the 'workspace_role_tool_config_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Claroline\CoreBundle\Listener\Tool\UserListener A Claroline\CoreBundle\Listener\Tool\UserListener instance.
     * 
     * @throws InactiveScopeException when the 'workspace_role_tool_config_listener' service is requested while the 'request' scope is not active
     */
    protected function getWorkspaceRoleToolConfigListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('workspace_role_tool_config_listener', 'request');
        }

        return $this->services['workspace_role_tool_config_listener'] = $this->scopedServices['request']['workspace_role_tool_config_listener'] = new \Claroline\CoreBundle\Listener\Tool\UserListener($this->get('request'), $this->get('http_kernel'));
    }

    /**
     * Gets the 'zenstruck_form.theme_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zenstruck\Bundle\FormBundle\Form\Extension\ThemeTypeExtension A Zenstruck\Bundle\FormBundle\Form\Extension\ThemeTypeExtension instance.
     */
    protected function getZenstruckForm_ThemeTypeService()
    {
        return $this->services['zenstruck_form.theme_type'] = new \Zenstruck\Bundle\FormBundle\Form\Extension\ThemeTypeExtension(array('label_width' => 'col-md-3', 'control_width' => 'col-md-9'));
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('locale_listener')) {
            $this->get('locale_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('fragment.handler')) {
            $this->get('fragment.handler')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('router_listener')) {
            $this->get('router_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/home/jenkins/jobs/Release/workspace/app/../web', true);

        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.less$/', $this->get('assetic.filter.lessphp')));

        return $instance;
    }

    /**
     * Gets the 'claroline.symfony_yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Yaml\Yaml A Symfony\Component\Yaml\Yaml instance.
     */
    protected function getClaroline_SymfonyYamlService()
    {
        return $this->services['claroline.symfony_yaml'] = new \Symfony\Component\Yaml\Yaml();
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'jms_di_extra.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\DiExtraBundle\HttpKernel\ControllerResolver A JMS\DiExtraBundle\HttpKernel\ControllerResolver instance.
     */
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.acl.object_identity_retrieval_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy A Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy instance.
     */
    protected function getSecurity_Acl_ObjectIdentityRetrievalStrategyService()
    {
        return $this->services['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy();
    }

    /**
     * Gets the 'security.acl.permission.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Acl\Permission\BasicPermissionMap A Symfony\Component\Security\Acl\Permission\BasicPermissionMap instance.
     */
    protected function getSecurity_Acl_Permission_MapService()
    {
        return $this->services['security.acl.permission.map'] = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap();
    }

    /**
     * Gets the 'security.acl.security_identity_retrieval_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy A Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy instance.
     */
    protected function getSecurity_Acl_SecurityIdentityRetrievalStrategyService()
    {
        return $this->services['security.acl.security_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy($this->get('security.role_hierarchy'), $this->get('security.authentication.trust_resolver'));
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.user_db'), $this->get('security.user_checker'), 'main', $this->get('security.encoder_factory'), false), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5284cc6aebdac')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.expressions.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler instance.
     */
    protected function getSecurity_Expressions_HandlerService()
    {
        return $this->services['security.expressions.handler'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this);
    }

    /**
     * Gets the 'security.extra.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getSecurity_Extra_MetadataFactoryService()
    {
        $this->services['security.extra.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'security.extra.metadata_driver'), new \Metadata\Cache\FileCache('/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_security', true));

        $instance->setIncludeInterfaces(true);

        return $instance;
    }

    /**
     * Gets the 'security.user.provider.concrete.user_db' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bridge\Doctrine\Security\User\EntityUserProvider A Symfony\Bridge\Doctrine\Security\User\EntityUserProvider instance.
     */
    protected function getSecurity_User_Provider_Concrete_UserDbService()
    {
        return $this->services['security.user.provider.concrete.user_db'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->get('doctrine'), 'Claroline\\CoreBundle\\Entity\\User', NULL, NULL);
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.blameable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Gedmo\Blameable\BlameableListener A Gedmo\Blameable\BlameableListener instance.
     */
    protected function getStofDoctrineExtensions_Listener_BlameableService()
    {
        $this->services['stof_doctrine_extensions.listener.blameable'] = $instance = new \Gedmo\Blameable\BlameableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));

        return $instance;
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array(0 => '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/config/validation.yml')))), NULL);
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
     * {@inheritDoc}
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
            'kernel.root_dir' => '/home/jenkins/jobs/Release/workspace/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev',
            'kernel.logs_dir' => '/home/jenkins/jobs/Release/workspace/app/logs',
            'kernel.bundles' => array(
                'ClarolineMigrationBundle' => 'Claroline\\MigrationBundle\\ClarolineMigrationBundle',
                'ClarolineInstallationBundle' => 'Claroline\\InstallationBundle\\ClarolineInstallationBundle',
                'FrontEndBundle' => 'Claroline\\Bundle\\FrontEndBundle\\FrontEndBundle',
                'ClarolineCoreBundle' => 'Claroline\\CoreBundle\\ClarolineCoreBundle',
                'ClarolineActivityToolBundle' => 'Claroline\\ActivityToolBundle\\ClarolineActivityToolBundle',
                'ClarolineAnnouncementBundle' => 'Claroline\\AnnouncementBundle\\ClarolineAnnouncementBundle',
                'ClarolineForumBundle' => 'Claroline\\ForumBundle\\ClarolineForumBundle',
                'ClarolineImagePlayerBundle' => 'Claroline\\ImagePlayerBundle\\ClarolineImagePlayerBundle',
                'ClarolinePdfPlayerBundle' => 'Claroline\\PdfPlayerBundle\\ClarolinePdfPlayerBundle',
                'ClarolineVideoPlayerBundle' => 'Claroline\\VideoPlayerBundle\\ClarolineVideoPlayerBundle',
                'IcapBlogBundle' => 'Icap\\BlogBundle\\IcapBlogBundle',
                'IcapDropzoneBundle' => 'Icap\\DropzoneBundle\\IcapDropzoneBundle',
                'IcapWikiBundle' => 'Icap\\WikiBundle\\IcapWikiBundle',
                'UJMExoBundle' => 'UJM\\ExoBundle\\UJMExoBundle',
                'ClarolineRssReaderBundle' => 'Claroline\\RssReaderBundle\\ClarolineRssReaderBundle',
                'IcapLessonBundle' => 'Icap\\LessonBundle\\IcapLessonBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'BazingaExposeTranslationBundle' => 'Bazinga\\ExposeTranslationBundle\\BazingaExposeTranslationBundle',
                'IDCIExporterBundle' => 'IDCI\\Bundle\\ExporterBundle\\IDCIExporterBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'BeSimpleSsoAuthBundle' => 'BeSimple\\SsoAuthBundle\\BeSimpleSsoAuthBundle',
                'ZenstruckFormBundle' => 'Zenstruck\\Bundle\\FormBundle\\ZenstruckFormBundle',
                'JMSTwigJsBundle' => 'JMS\\TwigJsBundle\\JMSTwigJsBundle',
                'StfalconTinymceBundle' => 'Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle',
                'ClarolineKernelBundle' => 'Claroline\\KernelBundle\\ClarolineKernelBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'security.authentication.listener.anonymous.class' => 'Claroline\\CoreBundle\\Listener\\AnonymousAuthenticationListener',
            'templating.locator.class' => 'Claroline\\CoreBundle\\Library\\Templating\\Loader\\TemplateLocator',
            'twig.controller.exception.class' => 'Claroline\\CoreBundle\\Controller\\CustomExceptionController',
            'database_driver' => 'pdo_mysql',
            'database_host' => 'localhost',
            'database_port' => NULL,
            'database_name' => 'claroline_prod',
            'database_user' => 'root',
            'database_password' => NULL,
            'test_database_driver' => 'pdo_mysql',
            'test_database_host' => 'localhost',
            'test_database_port' => NULL,
            'test_database_name' => 'claroline_test',
            'test_database_user' => 'root',
            'test_database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_encryption' => NULL,
            'mailer_auth_mode' => NULL,
            'mailer_host' => NULL,
            'mailer_port' => NULL,
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'fr',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'non_repeatable_log_time_in_seconds' => 600,
            'chosenrangekeys' => '[\'yesterday\', \'last_seven_days\', \'last_thirty_days\', \'this_month\', \'last_month\', \'this_school_year\', \'last_school_year\']',
            'claroline.migration_manager.class' => 'Claroline\\MigrationBundle\\Manager\\Manager',
            'claroline.migration_generator.class' => 'Claroline\\MigrationBundle\\Generator\\Generator',
            'claroline.migration_writer.class' => 'Claroline\\MigrationBundle\\Generator\\Writer',
            'claroline.migration_migrator.class' => 'Claroline\\MigrationBundle\\Migrator\\Migrator',
            'claroline.migration_schema_tool.class' => 'Doctrine\\ORM\\Tools\\SchemaTool',
            'claroline.installation.bundle_file' => '/home/jenkins/jobs/Release/workspace/app/config/bundles.ini',
            'claroline.installation_manager.class' => 'Claroline\\InstallationBundle\\Manager\\InstallationManager',
            'claroline.installation_fixture_loader.class' => 'Claroline\\InstallationBundle\\Fixtures\\FixtureLoader',
            'claroline.symfony_fixture_loader.class' => 'Symfony\\Bridge\\Doctrine\\DataFixtures\\ContainerAwareLoader',
            'claroline.doctrine_fixture_executor.class' => 'Doctrine\\Common\\DataFixtures\\Executor\\ORMExecutor',
            'claroline.param.files_directory' => '/home/jenkins/jobs/Release/workspace/app/../files',
            'claroline.param.thumbnails_directory' => '/home/jenkins/jobs/Release/workspace/app/../web/thumbnails',
            'claroline.param.templates_directory' => '/home/jenkins/jobs/Release/workspace/app/../templates/',
            'claroline.param.platform_config_handler_class' => 'Claroline\\CoreBundle\\Library\\Configuration\\PlatformConfigurationHandler',
            'claroline.param.platform_options_files' => array(
                'prod' => '/home/jenkins/jobs/Release/workspace/app/config/platform_options.yml',
            ),
            'icap.blog.manager.tag.class' => 'Icap\\BlogBundle\\Manager\\TagManager',
            'icap.blog.type.tags.class' => 'Icap\\BlogBundle\\Form\\TagsType',
            'icap.blog.twig.extension.class' => 'Icap\\BlogBundle\\Twig\\IcapBlogExtension',
            'icap.blog.tag.class' => 'Icap\\BlogBundle\\Entity\\Tag',
            'icap.blog.tag_repository.class' => 'Icap\\BlogBundle\\Repository\\TagRepository',
            'icap.blog.post.class' => 'Icap\\BlogBundle\\Entity\\Post',
            'icap.blog.post_repository.class' => 'Icap\\BlogBundle\\Repository\\PostRepository',
            'icap.wiki.section.class' => 'Icap\\WikiBundle\\Entity\\Section',
            'icap.wiki.section_repository.class' => 'Icap\\WikiBundle\\Repository\\SectionRepository',
            'icap.wiki.contribution.class' => 'Icap\\WikiBundle\\Entity\\Contribution',
            'icap.wiki.contribution_repository.class' => 'Icap\\WikiBundle\\Repository\\ContributionRepository',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'ClarolineCoreBundle:Form:date_picker.html.twig',
                2 => 'ClarolineCoreBundle:Form:date_range.html.twig',
                3 => 'ClarolineCoreBundle:Form:two_level_select.html.twig',
                4 => 'ClarolineCoreBundle:Form:simple_auto_complete.html.twig',
                5 => 'ClarolineCoreBundle:Form:button_group_select.html.twig',
                6 => 'ClarolineCoreBundle::form_theme.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => false,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/twig',
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => false,
            'security.role_hierarchy.roles' => array(

            ),
            'security.acl.permission_granting_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\PermissionGrantingStrategy',
            'security.acl.voter.class' => 'Symfony\\Component\\Security\\Acl\\Voter\\AclVoter',
            'security.acl.permission.map.class' => 'Symfony\\Component\\Security\\Acl\\Permission\\BasicPermissionMap',
            'security.acl.object_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\ObjectIdentityRetrievalStrategy',
            'security.acl.security_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\SecurityIdentityRetrievalStrategy',
            'security.acl.cache.doctrine.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\DoctrineAclCache',
            'security.acl.collection_cache.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\AclCollectionCache',
            'security.acl.dbal.provider.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\MutableAclProvider',
            'security.acl.dbal.schema.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\Schema',
            'security.acl.dbal.schema_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\AclSchemaListener',
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.container.dump' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/appDevDebugProjectContainer.xml',
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(

            ),
            'session.save_path' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/home/jenkins/jobs/Release/workspace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
                0 => '/home/jenkins/jobs/Release/workspace/vendor/ujm/exo-bundle/UJM/ExoBundle/Resources/config/validation.yml',
            ),
            'validator.translation_domain' => 'validators',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:/home/jenkins/jobs/Release/workspace/app/cache/dev/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '.',
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => NULL,
            'swiftmailer.mailer.default.transport.smtp.host' => NULL,
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/assetic',
            'assetic.bundles' => array(
                0 => 'ClarolineMigrationBundle',
                1 => 'ClarolineInstallationBundle',
                2 => 'FrontEndBundle',
                3 => 'ClarolineCoreBundle',
                4 => 'ClarolineActivityToolBundle',
                5 => 'ClarolineAnnouncementBundle',
                6 => 'ClarolineForumBundle',
                7 => 'ClarolineImagePlayerBundle',
                8 => 'ClarolinePdfPlayerBundle',
                9 => 'ClarolineVideoPlayerBundle',
                10 => 'IcapBlogBundle',
                11 => 'IcapDropzoneBundle',
                12 => 'IcapWikiBundle',
                13 => 'UJMExoBundle',
                14 => 'ClarolineRssReaderBundle',
                15 => 'IcapLessonBundle',
                16 => 'TwigBundle',
                17 => 'SecurityBundle',
                18 => 'FrameworkBundle',
                19 => 'WebProfilerBundle',
                20 => 'DoctrineBundle',
                21 => 'MonologBundle',
                22 => 'SwiftmailerBundle',
                23 => 'AsseticBundle',
                24 => 'BazingaExposeTranslationBundle',
                25 => 'IDCIExporterBundle',
                26 => 'WhiteOctoberPagerfantaBundle',
                27 => 'FOSJsRoutingBundle',
                28 => 'StofDoctrineExtensionsBundle',
                29 => 'JMSAopBundle',
                30 => 'JMSDiExtraBundle',
                31 => 'JMSSecurityExtraBundle',
                32 => 'SensioGeneratorBundle',
                33 => 'SensioFrameworkExtraBundle',
                34 => 'BeSimpleSsoAuthBundle',
                35 => 'ZenstruckFormBundle',
                36 => 'JMSTwigJsBundle',
                37 => 'StfalconTinymceBundle',
                38 => 'ClarolineKernelBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/home/jenkins/jobs/Release/workspace/app/../web',
            'assetic.write_to' => '/home/jenkins/jobs/Release/workspace/app/../web',
            'assetic.variables' => array(
                'locale' => array(
                    0 => 'en',
                    1 => 'fr',
                ),
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/local/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.lessphp.class' => 'Assetic\\Filter\\LessphpFilter',
            'assetic.filter.lessphp.presets' => array(

            ),
            'assetic.filter.lessphp.paths' => array(

            ),
            'assetic.filter.lessphp.formatter' => NULL,
            'assetic.filter.lessphp.preserve_comments' => NULL,
            'assetic.twig_extension.functions' => array(

            ),
            'bazinga.exposetranslation.finder.translation_finder.class' => 'Bazinga\\ExposeTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.exposetranslation.dumper.translation_dumper.class' => 'Bazinga\\ExposeTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.exposetranslation.controller.class' => 'Bazinga\\ExposeTranslationBundle\\Controller\\Controller',
            'exporterconfiguration' => array(
                'entities' => array(
                    'user' => array(
                        'class' => 'Claroline\\CoreBundle\\Entity\\User',
                        'formats' => array(
                            'jsonp' => array(
                                'transformer' => array(
                                    'options' => array(
                                        'template_name_format' => 'export.json.twig',
                                    ),
                                    'service' => 'idci_exporter.transformer_twig',
                                ),
                            ),
                        ),
                    ),
                    'group' => array(
                        'class' => 'Claroline\\CoreBundle\\Entity\\Group',
                        'formats' => array(
                            'jsonp' => array(
                                'transformer' => array(
                                    'options' => array(
                                        'template_name_format' => 'export.json.twig',
                                    ),
                                    'service' => 'idci_exporter.transformer_twig',
                                ),
                            ),
                        ),
                    ),
                    'badge' => array(
                        'class' => 'Claroline\\CoreBundle\\Entity\\Badge\\Badge',
                        'formats' => array(
                            'jsonp' => array(
                                'transformer' => array(
                                    'service' => 'claroline.transformer.badge',
                                    'options' => array(
                                        'template_name_format' => 'export.json.twig',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'jms_aop.cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_aop',
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => true,
            'jms_di_extra.bundles' => array(

            ),
            'jms_di_extra.directories' => array(

            ),
            'jms_di_extra.cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_diextra',
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(

            ),
            'jms_di_extra.doctrine_integration.entity_manager.file' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_diextra/doctrine/EntityManager_5284cc6b203db.php',
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5284cc6b203db_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'security.secured_services' => array(

            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.method_access_control' => array(

            ),
            'security.access.remembering_access_decision_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RememberingAccessDecisionManager',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'security.extra.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'security.extra.driver_chain.class' => 'Metadata\\Driver\\DriverChain',
            'security.extra.annotation_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'security.extra.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'security.access.secure_all_services' => false,
            'security.extra.cache_dir' => '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_security',
            'security.acl.permission_evaluator.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\PermissionEvaluator',
            'security.acl.has_permission_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\HasPermissionFunctionCompiler',
            'security.expressions.voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\LazyLoadingExpressionVoter',
            'security.expressions.handler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ContainerAwareExpressionHandler',
            'security.expressions.compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ExpressionCompiler',
            'security.expressions.expression.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Expression',
            'security.expressions.variable_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ContainerAwareVariableCompiler',
            'security.expressions.parameter_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ParameterExpressionCompiler',
            'security.expressions.reverse_interpreter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ReverseInterpreter',
            'security.extra.config_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\ConfigDriver',
            'security.extra.twig_extension.class' => 'JMS\\SecurityExtraBundle\\Twig\\SecurityExtension',
            'security.authenticated_voter.disabled' => false,
            'security.role_voter.disabled' => false,
            'security.acl_voter.disabled' => false,
            'security.extra.iddqd_ignore_roles' => array(
                0 => 'ROLE_PREVIOUS_ADMIN',
            ),
            'security.iddqd_aliases' => array(

            ),
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'be_simple.sso_auth.manager.admin_sso' => array(
                'protocol' => array(
                    'id' => 'cas',
                    'version' => 2,
                ),
                'server' => array(
                    'id' => 'cas',
                    'login_url' => 'http://cas.server.tld/login',
                    'logout_url' => 'http://cas.server.tld/logout',
                    'validation_url' => 'http://cas.server.tld/serviceValidate',
                ),
            ),
            'security.authentication.trusted_sso_entry_point.class' => 'BeSimple\\SsoAuthBundle\\Security\\Http\\EntryPoint\\TrustedSsoAuthenticationEntryPoint',
            'security.authentication.provider.sso.class' => 'BeSimple\\SsoAuthBundle\\Security\\Core\\Authentication\\Provider\\SsoAuthenticationProvider',
            'security.authentication.listener.trusted_sso.class' => 'BeSimple\\SsoAuthBundle\\Security\\Http\\Firewall\\TrustedSsoAuthenticationListener',
            'security.logout.handler.sso.class' => 'BeSimple\\SsoAuthBundle\\Security\\Http\\Logout\\SsoLogoutHandler',
            'security.logout.sso_success_handler.class' => 'BeSimple\\SsoAuthBundle\\Security\\Http\\Logout\\SsoLogoutSuccessHandler',
            'security.authentication.sso_authentication_failure_handler.class' => 'BeSimple\\SsoAuthBundle\\Security\\Http\\Authentication\\SsoAuthenticationFailureHandler',
            'be_simple.sso_auth.factory.class' => 'BeSimple\\SsoAuthBundle\\Sso\\Factory',
            'be_simple.sso_auth.client.class' => 'BeSimple\\SsoAuthBundle\\Buzz\\AdaptiveClient',
            'be_simple.sso_auth.client.option.curlopt_ssl_verifypeer.key' => 64,
            'be_simple.sso_auth.client.option.curlopt_ssl_verifypeer.value' => true,
            'be_simple.sso_auth.protocol.cas.class' => 'BeSimple\\SsoAuthBundle\\Sso\\Cas\\Protocol',
            'be_simple.sso_auth.server.cas.class' => 'BeSimple\\SsoAuthBundle\\Sso\\Cas\\Server',
            'zenstruck_form.theme_options' => array(
                'label_width' => 'col-md-3',
                'control_width' => 'col-md-9',
            ),
            'zenstruck_form.theme_type.class' => 'Zenstruck\\Bundle\\FormBundle\\Form\\Extension\\ThemeTypeExtension',
            'twig_js.compile_request_handler.class' => 'TwigJs\\CompileRequestHandler',
            'twig_js.compiler.class' => 'TwigJs\\JsCompiler',
            'twig_js.assetic_filter.class' => 'TwigJs\\Assetic\\TwigJsFilter',
            'twig_js.twig_js_extension.class' => 'TwigJs\\Twig\\TwigJsExtension',
            'twig_js.filters.trans_compiler.class' => 'JMS\\TwigJsBundle\\TwigJs\\Compiler\\TransFilterCompiler',
            'stfalcon_tinymce.config' => array(
                'include_jquery' => false,
                'tinymce_jquery' => true,
                'use_callback_tinymce_init' => true,
                'selector' => '.tinymce',
                'theme' => array(
                    'simple' => array(
                        'theme' => 'modern',
                        'invalid_elements' => '@[onclick|onunload|onclick|ondblclick|onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onfocus|onblur|onkeypress|onkeydown|onkeyup|onsubmit|onreset|onselect|onchange],script',
                        'menubar' => false,
                        'toolbar1' => 'bold italic underline | ressourceLinker | alignleft aligncenter alignright alignjustify | fullscreenToggle',
                    ),
                    'medium' => array(
                        'theme' => 'modern',
                        'invalid_elements' => '@[onclick|onunload|onclick|ondblclick|onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onfocus|onblur|onkeypress|onkeydown|onkeyup|onsubmit|onreset|onselect|onchange],script',
                        'plugins' => array(
                            0 => ' -ressourceLinker fullscreen, emoticons code autolink lists link image charmap print preview hr anchor pagebreak',
                            1 => 'searchreplace wordcount visualblocks visualchars  fullscreen',
                            2 => 'insertdatetime media nonbreaking save table contextmenu directionality',
                        ),
                        'menubar' => false,
                        'toolbar1' => 'bold,italic,underline,undo,redo,removeformat cleanup code | ressourceLinker | fullscreenToggle ',
                        'toolbar2' => 'alignleft aligncenter alignright alignjustify | emoticons lists link image charmap print preview hr anchor pagebreak ',
                        'relative_urls' => false,
                    ),
                    'advanced' => array(
                        'theme' => 'modern',
                        'invalid_elements' => '@[onclick|onunload|onclick|ondblclick|onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onfocus|onblur|onkeypress|onkeydown|onkeyup|onsubmit|onreset|onselect|onchange],script',
                        'plugins' => array(
                            0 => '-ressourceLinker -fullscreenToggle advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            1 => 'searchreplace wordcount visualblocks visualchars code fullscreen',
                            2 => 'insertdatetime media nonbreaking save table contextmenu directionality',
                            3 => 'emoticons template paste textcolor',
                        ),
                        'menubar' => false,
                        'toolbar1' => 'alignleft aligncenter alignright alignjustify | bold italic | link ressourceLinker | preview fullscreenToggle ',
                        'toolbar2' => 'styleselect | forecolor backcolor emoticons | stfalcon | media image charmap | table contextmenu directionality ',
                        'toolbar3' => 'undo redo | hr anchor pagebreak nonbreaking | searchreplace wordcount visualblocks visualchars code | print',
                        'image_advtab' => true,
                    ),
                ),
                'tinymce_buttons' => array(
                    'ressourceLinker' => array(
                        'title' => 'Resource Linker',
                        'image' => NULL,
                    ),
                    'fullscreenToggle' => array(
                        'title' => 'toggle',
                        'image' => NULL,
                    ),
                ),
                'external_plugins' => array(
                    'imagemanager' => array(
                        'url' => 'asset[bundles/clarolinecore/js/tinymce/config.js]',
                    ),
                ),
                'language' => NULL,
            ),
            'stfalcon_tinymce.twig.extension.class' => 'Stfalcon\\Bundle\\TinymceBundle\\Twig\\Extension\\StfalconTinymceExtension',
            'claroline.installation_loader.class' => 'Claroline\\KernelBundle\\Routing\\DynamicLoader',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
            ),
        );
    }
}
