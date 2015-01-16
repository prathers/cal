<?php
/*
 * Register necessary class names with autoloader
 */
// TODO: document necessity of providing autoloader information
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath ('cal');

return array (
		'tx_cal_controller' => $extensionPath . 'controller/class.tx_cal_controller.php',
		'tx_cal_functions' => $extensionPath . 'controller/class.tx_cal_functions.php',
		'tx_cal_viewcontroller' => $extensionPath . 'controller/class.tx_cal_viewcontroller.php',
		'tx_cal_modelcontroller' => $extensionPath . 'controller/class.tx_cal_modelcontroller.php',
		'tx_cal_registry' => $extensionPath . 'controller/class.tx_cal_registry.php',
		'tx_cal_calendar' => $extensionPath . 'controller/class.tx_cal_calendar.php',
		'tx_cal_base_controller' => $extensionPath . 'controller/class.tx_cal_base_controller.php',
		'tx_cal_api' => $extensionPath . '/controller/class.tx_cal_api.php',
		'tx_cal_tsfe' => $extensionPath . 'controller/class.tx_cal_tsfe.php',
		'tx_cal_uriHandler' => $extensionPath . 'controller/class.tx_cal_uriHandler.php',
		
		'tx_cal_cache' => $extensionPath . 'lib/class.tx_cal_cache.php',
		
		'pearLoader' => $extensionPath . 'res/pearLoader.php',
		'tx_cal_tceFunc_selectTreeView' => $extensionPath . 'res/class.tx_cal_tceFunc_selectTreeView.php',
		
		'tx_cal_calendar_scheduler' => $extensionPath . 'cron/class.tx_cal_calendar_scheduler.php',
		'tx_cal_reminder_scheduler' => $extensionPath . 'cron/class.tx_cal_reminder_scheduler.php',
		
		'ux_edit_wizard' => $extensionPath . 'xclass/class.ux_edit_wizard.php',
		
		'tx_cal_abstract_model' => $extensionPath . 'model/class.tx_cal_abstract_model.php',
		'tx_cal_base_model' => $extensionPath . 'model/class.tx_cal_base_model.php',
		'tx_cal_year_model' => $extensionPath . 'model/class.tx_cal_year_model.php',
		'tx_cal_model' => $extensionPath . 'model/class.tx_cal_model.php',
		'tx_cal_attendee_model' => $extensionPath . 'model/class.tx_cal_attendee_model.php',
		'tx_cal_calendar' => $extensionPath . 'controller/class.tx_cal_calendar.php',
		'tx_cal_phpicalendar_model' => $extensionPath . 'model/class.tx_cal_phpicalendar_model.php',
		'tx_cal_phpicalendar_rec_model' => $extensionPath . 'model/class.tx_cal_phpicalendar_rec_model.php',
		'tx_cal_category_model' => $extensionPath . 'model/class.tx_cal_category_model.php',
		'tx_cal_date' => $extensionPath . 'model/class.tx_cal_date.php',
		'tx_cal_location_model' => $extensionPath . 'model/class.tx_cal_location_model.php',
		'tx_cal_location' => $extensionPath . 'model/class.tx_cal_location.php',
		'tx_cal_organizer' => $extensionPath . 'model/class.tx_cal_organizer.php',
		'tx_cal_organizer_partner' => $extensionPath . 'model/class.tx_cal_organizer_partner.php',
		'tx_cal_location_partner' => $extensionPath . 'model/class.tx_cal_location_partner.php',
		'tx_cal_calendar_model' => $extensionPath . 'model/class.tx_cal_calendar_model.php',
		'tx_cal_attendee_model' => $extensionPath . 'model/class.tx_cal_attendee_model.php',
		'tx_cal_phpicalendar_rec_deviation_model' => $extensionPath . 'model/class.tx_cal_phpicalendar_rec_deviation_model.php',
		
		'tx_cal_fnbevent_service' => $extensionPath . 'service/class.tx_cal_fnbevent_service.php',
		'tx_cal_event_service' => $extensionPath . 'service/class.tx_cal_event_service.php',
		'tx_cal_todo_service' => $extensionPath . 'service/class.tx_cal_todo_service.php',
		'tx_cal_nearbyevent_service' => $extensionPath . 'service/class.tx_cal_nearbyevent_service.php',
		'tx_cal_organizer_partner_service' => $extensionPath . 'service/class.tx_cal_organizer_partner_service.php',
		'tx_cal_organizer_service' => $extensionPath . 'service/class.tx_cal_organizer_service.php',
		'tx_cal_organizer_address_service' => $extensionPath . 'service/class.tx_cal_organizer_address_service.php',
		'tx_cal_organizer_feuser_service' => $extensionPath . 'service/class.tx_cal_organizer_feuser_service.php',
		'tx_cal_location_partner_service' => $extensionPath . 'service/class.tx_cal_location_partner_service.php',
		'tx_cal_location_address_service' => $extensionPath . 'service/class.tx_cal_location_address_service.php',
		'tx_cal_location_service' => $extensionPath . 'service/class.tx_cal_location_service.php',
		'tx_cal_attendee_service' => $extensionPath . 'service/class.tx_cal_attendee_service.php',
		'tx_cal_calendar_service' => $extensionPath . 'service/class.tx_cal_calendar_service.php',
		'tx_cal_category_service' => $extensionPath . 'service/class.tx_cal_category_service.php',
		'tx_cal_rights_service' => $extensionPath . 'service/class.tx_cal_rights_service.php',
		'tx_cal_icalendar_service' => $extensionPath . 'service/class.tx_cal_icalendar_service.php',
		'tx_cal_base_service' => $extensionPath . 'service/class.tx_cal_base_service.php',
		
		'tx_cal_base_view' => $extensionPath . 'view/class.tx_cal_base_view.php',
		'tx_cal_eventview' => $extensionPath . 'view/class.tx_cal_eventview.php',
		'tx_cal_dayview' => $extensionPath . 'view/class.tx_cal_dayview.php',
		'tx_cal_weekview' => $extensionPath . 'view/class.tx_cal_weekview.php',
		'tx_cal_monthview' => $extensionPath . 'view/class.tx_cal_monthview.php',
		'tx_cal_yearview' => $extensionPath . 'view/class.tx_cal_yearview.php',
		'tx_cal_listview' => $extensionPath . 'view/class.tx_cal_listview.php',
		'tx_cal_icsview' => $extensionPath . 'view/class.tx_cal_icsview.php',
		'tx_cal_rssview' => $extensionPath . 'view/class.tx_cal_rssview.php',
		'tx_cal_adminview' => $extensionPath . 'view/class.tx_cal_adminview.php',
		'tx_cal_locationview' => $extensionPath . 'view/class.tx_cal_locationview.php',
		'tx_cal_organizerview' => $extensionPath . 'view/class.tx_cal_organizerview.php',
		'tx_cal_create_event_view' => $extensionPath . 'view/class.tx_cal_create_event_view.php',
		'tx_cal_confirm_event_view' => $extensionPath . 'view/class.tx_cal_confirm_event_view.php',
		'tx_cal_delete_event_view' => $extensionPath . 'view/class.tx_cal_delete_event_view.php',
		'tx_cal_create_location_organizer_view' => $extensionPath . 'view/class.tx_cal_create_location_organizer_view.php',
		'tx_cal_confirm_location_organizer_view' => $extensionPath . 'view/class.tx_cal_confirm_location_organizer_view.php',
		'tx_cal_delete_location_organizer_view' => $extensionPath . 'view/class.tx_cal_delete_location_organizer_view.php',
		'tx_cal_create_calendar_view' => $extensionPath . 'view/class.tx_cal_create_calendar_view.php',
		'tx_cal_confirm_calendar_view' => $extensionPath . 'view/class.tx_cal_confirm_calendar_view.php',
		'tx_cal_delete_calendar_view' => $extensionPath . 'view/class.tx_cal_delete_calendar_view.php',
		'tx_cal_create_category_view' => $extensionPath . 'view/class.tx_cal_create_category_view.php',
		'tx_cal_confirm_category_view' => $extensionPath . 'view/class.tx_cal_confirm_category_view.php',
		'tx_cal_delete_category_view' => $extensionPath . 'view/class.tx_cal_delete_category_view.php',
		'tx_cal_searchviews' => $extensionPath . 'view/class.tx_cal_searchviews.php',
		'tx_cal_notification_view' => $extensionPath . 'view/class.tx_cal_notification_view.php',
		'tx_cal_reminder_view' => $extensionPath . 'view/class.tx_cal_reminder_view.php',
		'tx_cal_subscription_manager_view' => $extensionPath . 'view/class.tx_cal_subscription_manager_view.php',
		'tx_cal_meeting_manager_view' => $extensionPath . 'view/class.tx_cal_meeting_manager_viewcv.php',
		'tx_cal_fe_editing_base_view' => $extensionPath . 'view/class.tx_cal_fe_editing_base_view.php',
		'tx_cal_new_timeview' => $extensionPath . 'view/class.tx_cal_new_timeview.php',
		'tx_cal_new_dayview' => $extensionPath . 'view/class.tx_cal_new_dayview.php',
		'tx_cal_new_weekview' => $extensionPath . 'view/class.tx_cal_new_weekview.php',
		'tx_cal_new_monthview' => $extensionPath . 'view/class.tx_cal_new_monthview.php',
		
		'module_example' => $extensionPath . 'misc/class.module_example.php',
		'module_locationloader' => $extensionPath . 'misc/class.module_locationloader.php',
		'module_organizerloader' => $extensionPath . 'misc/class.module_organizerloader.php',
		
		'tx_cal_recurrence_generator' => $extensionPath . 'mod1/class.tx_cal_recurrence_generator.php',
		'tx_cal_recurrence_generator_module1' => $extensionPath . 'mod1/index.php'
);
?>