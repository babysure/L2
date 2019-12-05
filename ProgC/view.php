<!DOCTYPE html>
<html  dir="ltr" lang="fr" xml:lang="fr">
<head>
    <title>L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]: TP4 : Correction</title>
    <link rel="icon" href="//ecursus.univ-antilles.fr/pluginfile.php/1/theme_adaptable/favicon/1575298209/favicon.ico" />

<meta name="apple-itunes-app" content="app-id=633359593, app-argument=https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832"/><link rel="manifest" href="https://ecursus.univ-antilles.fr/admin/tool/mobile/mobile.webmanifest.php" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]: TP4 : Correction" />
<link rel="stylesheet" type="text/css" href="https://ecursus.univ-antilles.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://ecursus.univ-antilles.fr/theme/styles.php/adaptable/1575298209_1/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/ecursus.univ-antilles.fr","sesskey":"UtSQqGZnx5","themerev":"1575298209","slasharguments":1,"theme":"adaptable","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1574866144","admin":"admin","svgicons":true,"usertimezone":"Am\u00e9rique\/Martinique","contextid":251511};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/ecursus.univ-antilles.fr\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/ecursus.univ-antilles.fr\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/ecursus.univ-antilles.fr\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/ecursus.univ-antilles.fr\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/ecursus.univ-antilles.fr\/theme\/yui_combo.php?m\/1574866144\/","combine":true,"comboBase":"https:\/\/ecursus.univ-antilles.fr\/theme\/yui_combo.php?","ext":false,"root":"m\/1574866144\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-broker":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-imports":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-modform":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-recordings":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-rooms":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_checklist-linkselect":{"requires":["node","event-valuechange"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-format_grid-gridkeys":{"requires":["event-nav-keys"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/ecursus.univ-antilles.fr\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/ecursus.univ-antilles.fr\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1574866144\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/ecursus.univ-antilles.fr\/lib\/javascript.php\/1574866144\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/ecursus.univ-antilles.fr\/lib\/javascript.php\/1574866144\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />    <!-- CSS print media -->
    <link rel="stylesheet" type="text/css" href="https://ecursus.univ-antilles.fr/theme/adaptable/style/print.css" media="print">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:site" value="eCursus" />
    <meta name="twitter:title" value="L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]: TP4 : Correction" />

    <!-- Open Graph data -->
    <meta property="og:title" content="L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]: TP4 : Correction" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://ecursus.univ-antilles.fr" />
    <meta name="og:site_name" value="eCursus" />

    <!-- Chrome, Firefox OS and Opera on Android topbar color -->
    <meta name="theme-color" content="#3A454b" />

    <!-- Windows Phone topbar color -->
    <meta name="msapplication-navbutton-color" content="#3A454b" />

    <!-- iOS Safari topbar color -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#3A454b" />

        <!-- Load Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i'
    rel='stylesheet'
    type='text/css'>
    
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i'
        rel='stylesheet'
        type='text/css'>
    
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i'
        rel='stylesheet'
        type='text/css'>
    </head>

<body  id="page-mod-resource-view" class="format-topics  path-mod path-mod-resource gecko dir-ltr lang-fr yui-skin-sam yui3-skin-sam ecursus-univ-antilles-fr pagelayout-incourse course-2600 context-251511 cmid-59832 category-1240 two-column  header-style1 has-region-side-post used-region-side-post side-post-only">

<div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Passer au contenu principal</a>
</div><script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/jquery.php/core/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/jquery.php/theme_adaptable/pace-min.js"></script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/jquery.php/theme_adaptable/jquery-flexslider-min.js"></script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/jquery.php/theme_adaptable/tickerme.js"></script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/jquery.php/theme_adaptable/jquery-easing-min.js"></script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/theme/jquery.php/theme_adaptable/adaptable.js"></script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/lib/javascript.php/1574866144/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<div id="page" class="container-fluid fullin showblockicons">




    <header id="adaptable-page-header-wrapper"  >

    <div id="above-header" class="mb-2 mb-lg-3">
        <div class="container">
		
		<!-- Afficher uniquement pour les connectés -->
						 	<button aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1"
                    data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
                    <i class="fa fa-bars fa-fw " aria-hidden="true"></i>
                 </button>
						
			
            <nav class="navbar navbar-expand btco-hover-menu"> 

                <!--<div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
                    <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1"
                    data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
                    <i class="fa fa-bars fa-fw " aria-hidden="true"></i>
                    <span class="sr-only">Side panel</span>
                    </button>
                </div>-->

                <div class="collapse navbar-collapse">
                <div class="my-auto m-2"></div>
                    <ul class="navbar-nav ml-auto my-auto">

                        <div class="pull-left">
                            <ul class="navbar-nav mr-auto"></ul>                        </div>

                        
                                                <li class="nav-item d-xs-block d-sm-block d-md-none my-auto mx-1 my-auto">
                            <a class="nav-link" href="https://ecursus.univ-antilles.fr/course/search.php">
                                <i class="icon fa fa-search fa-fw " title="Search" aria-label="Search"></i>
                            </a>
                        </li>

                        <div class="my-auto m-2"><div class="pull-right popover-region collapsed">
    <a id="message-drawer-toggle-5de8489dc3a335de8489dbab2e27" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
            role="button">
        <i class="icon fa fa-comment fa-fw "  title="Ouvrir/fermer le tiroir des messages" aria-label="Ouvrir/fermer le tiroir des messages"></i>
        <div class="count-container " data-region="count-container"
        aria-label="Il y a 1 conversations non lues">1</div>
    </a>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="29109"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5de8489dc4f8c5de8489dbab2e28"
        aria-haspopup="true"
        aria-label="Afficher la fenêtre des notifications sans nouvelle notification"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Ouvrir/fermer le menu notifications" aria-label="Ouvrir/fermer le menu notifications"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="Il y a 0 notifications non lues">0</div>

    </div>
    <div 
        id="popover-region-container-5de8489dc4f8c5de8489dbab2e28"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Fenêtre de notification"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Tout marquer comme lu"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw "  title="Tout marquer comme lu" aria-label="Tout marquer comme lu"></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
        </a>
        <a href="https://ecursus.univ-antilles.fr/message/notificationpreferences.php?userid=29109"
           title="Préférences de notification">
            <i class="icon fa fa-cog fa-fw "  title="Préférences de notification" aria-label="Préférences de notification"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Vous n'avez pas de notification</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://ecursus.univ-antilles.fr/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Tout afficher</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed popover-region-mail"
            id="nav-mail-popover-container"

    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5de8489dc6c815de8489dbab2e29"
        aria-haspopup="true"
        aria-label="Basculer le menu courriel"
        tabindex="0">
                <i class="icon fa fa-envelope fa-fw "  title="Basculer le menu courriel" aria-label="Basculer le menu courriel"></i>
        <div class="count-container">3</div>

    </div>
    <div 
        id="popover-region-container-5de8489dc6c815de8489dbab2e29"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Mail menu"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Courriel</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a href="https://ecursus.univ-antilles.fr/local/mail/create.php?c=2600&amp;sesskey=UtSQqGZnx5" class="mail-navbar-menu-compose-link">
             <i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>Rédiger
        </a>
        <a href="https://ecursus.univ-antilles.fr/local/mail/preferences.php" title="Préférences">
            <i class="icon fa fa-cog fa-fw "  title="Préférences" aria-label="Préférences"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="mail-navbar-menu">
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=inbox" 
                class="mail-navbar-menu-item
                    
                    ">
                <span class="badge badge-important">3</span>
                
                <i class="icon fa fa-inbox fa-fw " aria-hidden="true"  ></i>
                Réception
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=starred" 
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-star fa-fw " aria-hidden="true"  ></i>
                Marqué comme favori
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=drafts" 
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-file fa-fw " aria-hidden="true"  ></i>
                Brouillons
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=sent" 
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i>
                Envoyé
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=trash" 
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i>
                Corbeille
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2457" title="L2S1 MAT2 - UET 34.2 OIM [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 MAT2 - UET 34.2 OIM [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2974" title="L2S1 INF1 - UEO 33.1 Jeux Vidéos &amp; Maths [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF1 - UEO 33.1 Jeux Vidéos &amp; Maths [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2645" title="L2S1 INF1 - UEO 32.1 Modélisation Donées &amp; Normalisation [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                <span class="badge badge-important">2</span>
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF1 - UEO 32.1 Modélisation Donées &amp; Normalisation [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2617" title="L2S1 INF1 - UEO 31.2 Architecture, Réseaux, Système [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF1 - UEO 31.2 Architecture, Réseaux, Système [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2600" title="L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2467" title="L2S1 INF1 - UEO 32.2 Prog. WEB 1 [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF1 - UEO 32.2 Prog. WEB 1 [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2932" title="L2S1 INF - UEO 33.2 Méthodologie Scientifique [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF - UEO 33.2 Méthodologie Scientifique [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2785" title="L2S1 INF - UET 34.2 OIM [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF - UET 34.2 OIM [SEN 971]
            </a>
            <a href="https://ecursus.univ-antilles.fr/local/mail/view.php?t=course&amp;c=2613" title="L2S1 INF - UEO 31.1  Algo &amp; Prog 3 [SEN 971]"
                class="mail-navbar-menu-item
                    
                    ">
                <span class="badge badge-important">1</span>
                
                <i class="icon fa fa-university fa-fw " aria-hidden="true"  ></i>
                L2S1 INF - UEO 31.1  Algo &amp; Prog 3 [SEN 971]
            </a>
        </div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
        </div>
    </div>
</div></div><li class="nav-item dropdown ml-3"><li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle my-auto" id="langmenu0" aria-haspopup="true" data-target="#" data-toggle="dropdown" title="Langue"><i class="fa fa-globe fa-lg"></i><span class="langdesc">Français ‎(fr)‎</span></a><ul class="dropdown-menu" aria-labelledby="langmenu0"><li><a title="English ‎(en)‎" class="dropdown-item" href="https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832&amp;lang=en">English ‎(en)‎</a></li><li><a title="Español - Internacional ‎(es)‎" class="dropdown-item" href="https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832&amp;lang=es">Español - Internacional ‎(es)‎</a></li><li><a title="Français ‎(fr)‎" class="dropdown-item" href="https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832&amp;lang=fr">Français ‎(fr)‎</a></li></ul></li></li>
                            <li class="nav-item dropdown ml-3 ml-md-4 mr-2 mr-md-0">
                                <a class="nav-link dropdown-toggle" role="button" href="#"
id="usermenu" data-toggle="dropdown"
aria-haspopup="true" aria-expanded="false"
aria-controls="usermenu-dropdown"
aria-label="Menu utilisateur"
title="Boris ABISUR"><img src="https://secure.gravatar.com/avatar/1a21922ac1e012759859b599b5acf050?s=50&amp;d=wavatar" class="userpicture defaultuserpic" width="50" height="50" role="presentation" aria-hidden="true" />
        <span class="d-none d-md-inline-block mx-1">Boris ABISUR</span>
</a>

<div class="dropdown-menu dropdown-menu-right" role="menu"
id="usermenu-dropdown"
aria-labelledby="usermenu" >
    <a class="dropdown-item" href="https://ecursus.univ-antilles.fr/my" title="Tableau de bord"><i class="fa fa-dashboard"></i>Tableau de bord</a><a class="dropdown-item" href="https://ecursus.univ-antilles.fr/user/profile.php" title="Consulter le profil"><i class="fa fa-user"></i>Consulter le profil</a><a class="dropdown-item" href="https://ecursus.univ-antilles.fr/user/preferences.php" title="Préférences"><i class="fa fa-cog"></i>Préférences</a><a class="dropdown-item" href="https://ecursus.univ-antilles.fr/calendar/view.php" title="Calendrier"><i class="fa fa-calendar"></i>Calendrier</a><a class="dropdown-item" href="https://ecursus.univ-antilles.fr/login/logout.php?sesskey=UtSQqGZnx5" title="Déconnexion"><i class="fa fa-sign-out"></i>Déconnexion</a>
</div>                            </li>

                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    
    <div id="page-header" class="container">
        <div class="row">

        <div class="d-none d-lg-block col-lg-4">
        <div class="d-flex align-items-start bd-highlight"><div class="p-2 bd-highlight"><a href=https://ecursus.univ-antilles.fr aria-label="home" title="eCursus"><img src=//ecursus.univ-antilles.fr/pluginfile.php/1/theme_adaptable/logo/1575298209/logo-header%20%281%29.png id="logo" alt="" /></a></div><div id="sitetitle" class="p-2 bd-highlight"s></div></div>        </div>

        <div class="col-lg-8 p-0 my-auto">
                                    <div class="socialbox pull-right">
                            <div class="socialbox"></div>                        </div>
                        
                                    <div class="searchbox d-none d-lg-block" style='margin-right:10px;'>
                        <form action="https://ecursus.univ-antilles.fr/course/search.php">
                            <label class="hidden" for="search-1" style="display: none;">Rechercher des cours                            </label>
                            <div class="search-box grey-box bg-white clear-fix">
                                <input placeholder="Rechercher un cours"
                                        accesskey="6"
                                        class="search_tour bg-white no-border left search-box__input ui-autocomplete-input"
                                        type="text"
                                        name="search"
                                        id="search-1"
                                        autocomplete="off">
                                        <button title="Rechercher un cours"
                                                type="submit" class="no-border bg-white pas search-box__button">
                                                <abbr class="fa fa-search"
                                                    title="Rechercher un cours">
                                                </abbr>
                                        </button>
                            </div>
                        </form>
                    </div>
                
                <div id="course-header">
                                    </div>

            </div>
            </div>

    </div>

    





<!--<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
    <nav class="list-group">

        <ul class="list-unstyled components">

            <a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/my/index.php"data-key="" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer"><div class="m-l-0"><i class="fa fa-dashboard fa-lg"></i>  Tableau de bord</div></a></li><a href="#main-navigation-drawer1" class="list-group-item dropdown-toggle" aria-haspopup="true" data-target="#" data-toggle="collapse" title=""><i class="fa fa-briefcase fa-lg"></i> Mes cours en ligne</a><ul class="collapse" id="main-navigation-drawer1"><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2457"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 MAT2 - UET 34.2 OIM [S...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2974"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF1 - UEO 33.1 Jeux V...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2645"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF1 - UEO 32.1 Modéli...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2617"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF1 - UEO 31.2 Archit...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF1 - UEO 31.1  TP - ...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2467"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF1 - UEO 32.2 Prog. ...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2932"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF - UEO 33.2 Méthodo...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2785"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF - UET 34.2 OIM [SE...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/view.php?id=2613"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1">L2S1 INF - UEO 31.1  Algo &...</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/my/"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer1"><div class=" m-l-1"><em>Plus...</em></div></a></li></ul><a href="#main-navigation-drawer2" class="list-group-item dropdown-toggle" aria-haspopup="true" data-target="#" data-toggle="collapse" title=""><i class="fa fa-sitemap fa-lg"></i><span class="menutitle">Cours actuel</span></a><ul class="collapse" id="main-navigation-drawer2"><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/user/index.php?id=2600"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer2"><div class=" m-l-1"><i class="fa fa-users fa-lg"></i>Participants</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/grade/report/index.php?id=2600"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer2"><div class=" m-l-1"><i class="icon fa fa-table fa-fw icon" aria-hidden="true"  ></i>Notes</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/resources.php?id=2600"data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="main-navigation-drawer2"><div class=" m-l-1"><img class="icon icon" alt="" aria-hidden="true" src="https://ecursus.univ-antilles.fr/theme/image.php/adaptable/mod_page/1575298209/icon" />Ressources</div></a></li></ul>
            <a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course"data-key="" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="custom-menu-drawer"><div class="m-l-0"><span class="fa fa-book fa-lg"></span> Catalogue des formations</div></a></li><a class="list-group-item list-group-item-action" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=213"data-key="" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1"data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="custom-menu-drawer"><div class="m-l-0"><span class="fa fa-question fa-lg"></span> Assistance</div></a></li>            
        </ul>

    </nav>

    <nav class="list-group m-t-1">
                <a class="list-group-item list-group-item-action " href="https://ecursus.univ-antilles.fr/admin/search.php">
            <div class="m-l-0">
                <div class="media">
                    <span class="media-left">
                        <i class="icon fa fa-wrench fa-fw" aria-hidden="true"></i>
                    </span>
                    <span class="media-body ">Administration du site</span>
                </div>
            </div>
        </a>
    </nav>
</div>-->

<div id="main-navbar" class="d-none d-lg-block">
    <div class="container">
        <nav class="navbar navbar-expand-md btco-hover-menu">
		
		<!-- Afficher uniquement pour les connectés -->
						 	<!--<button aria-expanded="false" aria-controls="nav-drawer"  style ="margin-left:10px;" type="button" class="nav-link float-sm-left mr-1"
                    data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
                    <i class="fa fa-bars fa-fw " aria-hidden="true"></i>
                 </button>-->
					
		
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav">

                <li class="nav-item"><a title="" class="nav-link" href="https://ecursus.univ-antilles.fr/my/index.php"><i class="fa fa-dashboard fa-lg"></i>  Tableau de bord</a></li><li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle my-auto" id="main-navigation0" aria-haspopup="true" data-target="#" data-toggle="dropdown" title=""><i class="fa fa-briefcase fa-lg"></i> Mes cours en ligne</a><ul class="dropdown-menu" aria-labelledby="main-navigation0"><li><a title="L2S1 MAT2 - UET 34.2 OIM [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2457">L2S1 MAT2 - UET 34.2 OIM [S...</a></li><li><a title="L2S1 INF1 - UEO 33.1 Jeux Vidéos &amp; Maths [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2974">L2S1 INF1 - UEO 33.1 Jeux V...</a></li><li><a title="L2S1 INF1 - UEO 32.1 Modélisation Donées &amp; Normalisation [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2645">L2S1 INF1 - UEO 32.1 Modéli...</a></li><li><a title="L2S1 INF1 - UEO 31.2 Architecture, Réseaux, Système [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2617">L2S1 INF1 - UEO 31.2 Archit...</a></li><li><a title="L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600">L2S1 INF1 - UEO 31.1  TP - ...</a></li><li><a title="L2S1 INF1 - UEO 32.2 Prog. WEB 1 [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2467">L2S1 INF1 - UEO 32.2 Prog. ...</a></li><li><a title="L2S1 INF - UEO 33.2 Méthodologie Scientifique [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2932">L2S1 INF - UEO 33.2 Méthodo...</a></li><li><a title="L2S1 INF - UET 34.2 OIM [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2785">L2S1 INF - UET 34.2 OIM [SE...</a></li><li><a title="L2S1 INF - UEO 31.1  Algo &amp; Prog 3 [SEN 971]" class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/view.php?id=2613">L2S1 INF - UEO 31.1  Algo &...</a></li><li><a class="dropdown-item" href="https://ecursus.univ-antilles.fr/my/"><em>Plus...</em></a></li></ul></li><li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle my-auto" id="main-navigation0" aria-haspopup="true" data-target="#" data-toggle="dropdown" title=""><i class="fa fa-sitemap fa-lg"></i><span class="menutitle">Cours actuel</span></a><ul class="dropdown-menu" aria-labelledby="main-navigation0"><li><a title="" class="dropdown-item" href="https://ecursus.univ-antilles.fr/user/index.php?id=2600"><i class="fa fa-users fa-lg"></i>Participants</a></li><li><a title="" class="dropdown-item" href="https://ecursus.univ-antilles.fr/grade/report/index.php?id=2600"><i class="icon fa fa-table fa-fw icon" aria-hidden="true"  ></i>Notes</a></li><li><a class="dropdown-item" href="https://ecursus.univ-antilles.fr/course/resources.php?id=2600"><img class="icon icon" alt="" aria-hidden="true" src="https://ecursus.univ-antilles.fr/theme/image.php/adaptable/mod_page/1575298209/icon" />Ressources</a></li></ul></li>
                <li class="nav-item"><a title="Catalogue des formations" class="nav-link" href="https://ecursus.univ-antilles.fr/course"><span class="fa fa-book fa-lg"></span> Catalogue des formations</a></li><li class="nav-item"><a title="Assistance" class="nav-link" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=213"><span class="fa fa-question fa-lg"></span> Assistance</a></li>                                </ul>

                <ul class="navbar-nav ml-auto">

                                                <li class="nav-item mr-2">
                                <div id="region-main-settings-menu" class="region-main-settings-menu">
                                   <div class="action-menu moodle-actionmenu d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="dropdown-1" aria-label="Menu d&#039;actions" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            
<i class="icon fa fa-cog fa-fw "  title="Menu d&#039;actions" aria-label="Menu d&#039;actions"></i>                                
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br" id="dropdown-menu-1">
                            </div>
                    </div>
                </div>

        </div>

</div>                                </div>
                            </li>
                    
                                            <li class="nav-item mx-0">
                             <div id="edittingbutton" class="breadcrumb-button">
                                                            </div>
                        </li>
                        
                                               <li class="nav-item mr-1 hbl">
                               <a href="javascript:void(0);" class="nav-link moodlezoom"
                                   title="Cacher les blocs">
                                   <i class="fa fa-indent fa-lg"></i>
                                   <span class="zoomdesc">Cacher les blocs</span>
                               </a>
                           </li>
                           <li class="nav-item mr-1 sbl">
                               <a href="javascript:void(0);" class="nav-link moodlezoom"
                                   title="Afficher les blocs">
                                   <i class="fa fa-outdent fa-lg"></i>
                                   <span class="zoomdesc">Afficher les blocs</span>
                               </a>
                           </li>
                                    </ul>

            </div>
        </nav>
    </div>
</div>


</header>

<style>
#page-content{padding:0;}
.container.outercont{width:100%; padding:0;}
.col-3, .col-xs-3 {
    flex: 0 0 16%;
	max-width: 16%;
	min-width: 260px;
}
[data-region="drawer"]{
padding:0;
width: 285px;
top:0;
height:100%;
background-color:#333; 
}
</style>
<style>#region-main{padding:0; width: 100% !important;} #page-content{padding:0;display:flex; }</style>
<div class="container outercont">
    <div id="page-content"> <!--  class="row-fluid" -->
	<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
<div id="leftmenu">
<!-- liste de liens -->
<ul id="linklist">
<li><a href="https://ecursus.univ-antilles.fr/course"><i class="fa fa-folder-open" aria-hidden="true"></i> Catalogue des formations</a></li> 
<li><a href='https://ecursus.univ-antilles.fr/user/index.php?id=2600'><i class='fa fa-users' aria-hidden='true'></i> Participants</a></li><li><a href='https://ecursus.univ-antilles.fr/grade/report/index.php?id=2600'><i class='fa fa-table' aria-hidden='true'></i> Carnet de notes</a></li></ul>
<div id="container_leftmenu">
<!-- liste de liens de cours selon l'utilisateur -->
<ul id="favoritecourseslist">
<li class="listtitle">Mes cours</li>
<li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2974'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF1 - UEO 33.1 Jeux Vidéos & Maths [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2932'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF - UEO 33.2 Méthodologie Scientifique [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2785'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF - UET 34.2 OIM [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2645'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF1 - UEO 32.1 Modélisation Donées & Normalisation [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2617'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF1 - UEO 31.2 Architecture, Réseaux, Système [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2613'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF - UEO 31.1  Algo & Prog 3 [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2467'><i class='fa fa-book' aria-hidden='true'></i> L2S1 INF1 - UEO 32.2 Prog. WEB 1 [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/course/view.php?id=2457'><i class='fa fa-book' aria-hidden='true'></i> L2S1 MAT2 - UET 34.2 OIM [SEN 971]</a></li><li><a href='https://ecursus.univ-antilles.fr/my/'><i class='fa fa-cog' aria-hidden='true'></i> Tous mes cours ...</a></li></ul>
</div>
</div>
</div>

<div id="containerflex" style="width:100%;"> 
        <div class="row"><div id="page-navbar" class="col-12"><ul class="breadcrumb d-none d-md-flex"><li><a href="https://ecursus.univ-antilles.fr/"><i title="Accueil" class="fa fa-home fa-lg"></i></a></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span tabindex="0">Mes cours</span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=262"><span itemprop="title">971 SEN - Faculté des Sciences Exactes et Naturelles</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=289"><span itemprop="title">Licence 2</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=321"><span itemprop="title">L2 Informatique</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=603"><span itemprop="title">L2 Informatique : Informatique scientifique</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=1240"><span itemprop="title">Semestre 1</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600"><span itemprop="title">L2S1 INF1 - UEO 31.1  TP ...go &amp; Prog 3 [SEN 971]</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600#section-4"><span itemprop="title">TP 4</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><a href="https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832" id="label_10_39" class=""  tabindex="-1"  title="Fichier" >TP4 : Correction</a></li></ul></div></div>
           				<section id="region-main" style="width:100% !important; " class="col-md-9 custom">
			            <span class="notifications" id="user-notifications"></span><h2 class='headercoursetitle'>L2S1 INF1 - UEO 31.1  TP - Algo & Prog 3 [SEN 971]</h2><div role="main"><span id="maincontent"></span><h2>TP4 : Correction</h2><div id="resourceintro" class="box mod_introbox"><p class="resourcedetails">2.6Ko Fichier texte</p></div><div class="resourceworkaround">Cliquer le lien <a href="https://ecursus.univ-antilles.fr/pluginfile.php/251511/mod_resource/content/1/TP4.c" onclick="window.open('https://ecursus.univ-antilles.fr/pluginfile.php/251511/mod_resource/content/1/TP4.c', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false;">TP4.c</a> pour afficher le fichier.</div></div>        </section>
		</div>
        <aside id="block-region-side-post" class="col-3 block-region" data-blockregion="side-post" data-droptarget="1"><div id="showsidebaricon"><i class="fa fa-3x fa-angle-left" aria-hidden="true"></i></div><a class="skip skip-block" id="fsb-1" href="#sb-1">Passer Rentrée 2019-20</a><div id="inst32694" class="block_html block" role="complementary" data-block="html" data-instanceid="32694" aria-labelledby="instance-32694-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-32694-header">Rentrée 2019-20</h2></div></div><div class="content"><div class="no-overflow"><p style="text-align: center;"><b>La cellule TICE vous souhaite une bonne rentrée 2019-20</b></p>
<p style="text-align: center;">Retrouvez ci-après les procédures courantes de la rentrée 2019-20&nbsp;</p>
<p style="text-align: center;">&nbsp;&nbsp;&nbsp;<a href="https://ecursus.univ-antilles.fr/mod/page/view.php?id=27774">Enseignants</a><br>
<a href="https://ecursus.univ-antilles.fr/mod/page/view.php?id=27776" target="_blank">Etudiants</a></p>
<p style="text-align: center;"><img src="https://ecursus.univ-antilles.fr/pluginfile.php/80903/block_html/content/multitasking-mobile-devices-557x362.jpg" alt="" width="200" height="130" role="presentation" class="img-responsive atto_image_button_text-bottom"><br></p><p style="text-align: center;"><a href="http://archive-cursus.univ-antilles.fr/">Archives eCursus 2018-19</a><br></p></div></div></div><span class="skip-block-to" id="sb-1"></span><a class="skip skip-block" id="fsb-2" href="#sb-2">Passer Navigation</a><div id="inst4" class="block_navigation block" role="navigation" data-block="navigation" data-instanceid="4" aria-labelledby="instance-4-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-4-header">Navigation</h2></div></div><div class="content"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch" aria-labelledby="label_1_1"><p class="tree_item branch navigation_node" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e1_group" data-collapsible="false"><a tabindex="-1" id="label_1_1" href="https://ecursus.univ-antilles.fr/my/">Tableau de bord</a></p><ul id="random5de8489dbab2e1_group" role="group"><li class="type_setting depth_2 item_with_icon" aria-labelledby="label_2_2"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_2_2" href="https://ecursus.univ-antilles.fr/"><i class="icon fa fa-home fa-fw navicon" aria-hidden="true"  ></i><span class="item-content-wrap">Accueil du site</span></a></p></li><li class="type_course depth_2 contains_branch" aria-labelledby="label_2_3"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e3_group"><span tabindex="-1" id="label_2_3" title="eCursus">eCursus</span></p><ul id="random5de8489dbab2e3_group" role="group" aria-hidden="true"><li class="type_unknown depth_3 item_with_icon" aria-labelledby="label_3_5"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_5" href="https://ecursus.univ-antilles.fr/blog/index.php"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true"  ></i><span class="item-content-wrap">Blogs du site</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_6"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_6" href="https://ecursus.univ-antilles.fr/calendar/view.php?view=month&amp;course=2600"><i class="icon fa fa-calendar fa-fw navicon" aria-hidden="true"  ></i><span class="item-content-wrap">Calendrier</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_14"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e6_group"><span tabindex="-1" id="label_2_14">Mes cours</span></p><ul id="random5de8489dbab2e6_group" role="group"><li class="type_unknown depth_3 contains_branch" aria-labelledby="label_3_15"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e7_group"><a tabindex="-1" id="label_3_15" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=262">971 SEN - Faculté des Sciences Exactes et Naturelles</a></p><ul id="random5de8489dbab2e7_group" role="group"><li class="type_unknown depth_4 contains_branch" aria-labelledby="label_4_16"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e8_group"><a tabindex="-1" id="label_4_16" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=289">Licence 2</a></p><ul id="random5de8489dbab2e8_group" role="group"><li class="type_unknown depth_5 contains_branch" aria-labelledby="label_5_17"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e9_group"><a tabindex="-1" id="label_5_17" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=372">L2 Mathématiques</a></p><ul id="random5de8489dbab2e9_group" role="group" aria-hidden="true"><li class="type_unknown depth_6 contains_branch" aria-labelledby="label_6_18"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e10_group"><a tabindex="-1" id="label_6_18" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=605">L2 Mathématiques : Mathématiques pour l'enseignement</a></p><ul id="random5de8489dbab2e10_group" role="group" aria-hidden="true"><li class="type_unknown depth_7 contains_branch" aria-labelledby="label_7_19"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e11_group"><a tabindex="-1" id="label_7_19" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=1241">Semestre 1</a></p><ul id="random5de8489dbab2e11_group" role="group" aria-hidden="true"><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_20"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2457" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2457" data-node-key="2457" data-node-type="20"><a tabindex="-1" id="label_8_20" title="L2S1 MAT2 - UET 34.2 OIM [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2457">L2S1 MAT2 - UET 34.2 OIM [SEN 971]</a></p></li></ul></li></ul></li></ul></li><li class="type_unknown depth_5 contains_branch" aria-labelledby="label_5_21"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e12_group"><a tabindex="-1" id="label_5_21" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=321">L2 Informatique</a></p><ul id="random5de8489dbab2e12_group" role="group"><li class="type_unknown depth_6 contains_branch" aria-labelledby="label_6_22"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e13_group"><a tabindex="-1" id="label_6_22" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=603">L2 Informatique : Informatique scientifique</a></p><ul id="random5de8489dbab2e13_group" role="group"><li class="type_unknown depth_7 contains_branch" aria-labelledby="label_7_23"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e14_group"><a tabindex="-1" id="label_7_23" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=1240">Semestre 1</a></p><ul id="random5de8489dbab2e14_group" role="group"><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_24"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2974" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2974" data-node-key="2974" data-node-type="20"><a tabindex="-1" id="label_8_24" title="L2S1 INF1 - UEO 33.1 Jeux Vidéos &amp; Maths [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2974">L2S1 INF1 - UEO 33.1 Jeux...éos &amp; Maths [SEN 971]</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_25"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2645" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2645" data-node-key="2645" data-node-type="20"><a tabindex="-1" id="label_8_25" title="L2S1 INF1 - UEO 32.1 Modélisation Donées &amp; Normalisation [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2645">L2S1 INF1 - UEO 32.1 Modé...; Normalisation [SEN 971]</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_26"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2617" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2617" data-node-key="2617" data-node-type="20"><a tabindex="-1" id="label_8_26" title="L2S1 INF1 - UEO 31.2 Architecture, Réseaux, Système [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2617">L2S1 INF1 - UEO 31.2 Arch...éseaux, Système [SEN 971]</a></p></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_27"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e15_group"><a tabindex="-1" id="label_8_27" title="L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600">L2S1 INF1 - UEO 31.1  TP ...go &amp; Prog 3 [SEN 971]</a></p><ul id="random5de8489dbab2e15_group" role="group"><li class="type_container depth_9 contains_branch" aria-labelledby="label_9_28"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e16_group"><a tabindex="-1" id="label_9_28" href="https://ecursus.univ-antilles.fr/user/index.php?id=2600">Participants</a></p><ul id="random5de8489dbab2e16_group" role="group" aria-hidden="true"><li class="type_setting depth_10 item_with_icon" aria-labelledby="label_10_29"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_10_29" href="https://ecursus.univ-antilles.fr/blog/index.php?courseid=2600"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true"  ></i><span class="item-content-wrap">Blogs de cours</span></a></p></li><li class="type_user depth_10 item_with_icon" aria-labelledby="label_10_30"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_10_30" href="https://ecursus.univ-antilles.fr/user/view.php?id=29109&amp;course=2600"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true"  ></i><span class="item-content-wrap">Boris ABISUR</span></a></p></li></ul></li><li class="type_setting depth_9 item_with_icon" aria-labelledby="label_9_31"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_9_31" href="https://ecursus.univ-antilles.fr/grade/report/index.php?id=2600"><i class="icon fa fa-table fa-fw navicon" aria-hidden="true"  ></i><span class="item-content-wrap">Notes</span></a></p></li><li class="type_structure depth_9 contains_branch" aria-labelledby="label_9_32"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5de8489dbab2e20_group"><a tabindex="-1" id="label_9_32" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600#section-4">TP 4</a></p><ul id="random5de8489dbab2e20_group" role="group"><li class="type_activity depth_10 item_with_icon" aria-labelledby="label_10_33"><p class="tree_item hasicon" role="treeitem"><a href="https://ecursus.univ-antilles.fr/mod/resource/view.php?id=54829" id="label_10_33" class=""  tabindex="-1"  title="Fichier" ><img class="icon navicon" alt="Fichier" title="Fichier" src="https://ecursus.univ-antilles.fr/theme/image.php/adaptable/core/1575298209/f/pdf-24" /><span class="item-content-wrap">TP4 : Fonctions</span></a></p></li><li class="type_activity depth_10 item_with_icon current_branch" aria-labelledby="label_10_39"><p class="tree_item hasicon active_tree_node" role="treeitem"><a href="https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832" id="label_10_39" class=""  tabindex="-1"  title="Fichier" ><img class="icon navicon" alt="Fichier" title="Fichier" src="https://ecursus.univ-antilles.fr/theme/image.php/adaptable/core/1575298209/f/sourcecode-24" /><span class="item-content-wrap">TP4 : Correction</span></a></p></li></ul></li><li class="type_structure depth_9 contains_branch" aria-labelledby="label_9_40"><p class="tree_item branch" role="treeitem" id="expandable_branch_30_18460" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_30_18460" data-node-key="18460" data-node-type="30"><a tabindex="-1" id="label_9_40" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600#section-5">TP 5</a></p></li><li class="type_structure depth_9 contains_branch" aria-labelledby="label_9_41"><p class="tree_item branch" role="treeitem" id="expandable_branch_30_18461" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_30_18461" data-node-key="18461" data-node-type="30"><a tabindex="-1" id="label_9_41" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600#section-7">PROJET</a></p></li><li class="type_structure depth_9 contains_branch" aria-labelledby="label_9_42"><p class="tree_item branch" role="treeitem" id="expandable_branch_30_18462" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_30_18462" data-node-key="18462" data-node-type="30"><a tabindex="-1" id="label_9_42" href="https://ecursus.univ-antilles.fr/course/view.php?id=2600#section-8">Ressources</a></p></li></ul></li><li class="type_course depth_8 contains_branch" aria-labelledby="label_8_43"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2467" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2467" data-node-key="2467" data-node-type="20"><a tabindex="-1" id="label_8_43" title="L2S1 INF1 - UEO 32.2 Prog. WEB 1 [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2467">L2S1 INF1 - UEO 32.2 Prog. WEB 1 [SEN 971]</a></p></li></ul></li></ul></li><li class="type_unknown depth_6 contains_branch" aria-labelledby="label_6_44"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e23_group"><a tabindex="-1" id="label_6_44" href="https://ecursus.univ-antilles.fr/course/index.php?categoryid=817">Semestre 1</a></p><ul id="random5de8489dbab2e23_group" role="group" aria-hidden="true"><li class="type_course depth_7 contains_branch" aria-labelledby="label_7_45"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2932" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2932" data-node-key="2932" data-node-type="20"><a tabindex="-1" id="label_7_45" title="L2S1 INF - UEO 33.2 Méthodologie Scientifique [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2932">L2S1 INF - UEO 33.2 Métho...ie Scientifique [SEN 971]</a></p></li><li class="type_course depth_7 contains_branch" aria-labelledby="label_7_46"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2785" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2785" data-node-key="2785" data-node-type="20"><a tabindex="-1" id="label_7_46" title="L2S1 INF - UET 34.2 OIM [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2785">L2S1 INF - UET 34.2 OIM [SEN 971]</a></p></li><li class="type_course depth_7 contains_branch" aria-labelledby="label_7_47"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_2613" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_2613" data-node-key="2613" data-node-type="20"><a tabindex="-1" id="label_7_47" title="L2S1 INF - UEO 31.1  Algo &amp; Prog 3 [SEN 971]" href="https://ecursus.univ-antilles.fr/course/view.php?id=2613">L2S1 INF - UEO 31.1  Algo &amp; Prog 3 [SEN 971]</a></p></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></div></div><span class="skip-block-to" id="sb-2"></span><a class="skip skip-block" id="fsb-4" href="#sb-4">Passer Administration</a><div id="inst5" class="block_settings block" role="navigation" data-block="settings" data-instanceid="5" aria-labelledby="instance-5-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-5-header">Administration</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/site_admin_loader"><li class="type_course depth_1 contains_branch" tabindex="-1" aria-labelledby="label_1_1"><p class="tree_item root_node tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5de8489dbab2e24_group"><span tabindex="0">Administration du cours</span></p><ul id="random5de8489dbab2e24_group" role="group" aria-hidden="true"><li class="type_setting depth_2 item_with_icon" tabindex="-1" aria-labelledby="label_2_1"><p class="tree_item hasicon tree_item leaf" role="treeitem"><a href="https://ecursus.univ-antilles.fr/enrol/self/unenrolself.php?enrolid=8936"><i class="icon fa fa-user fa-fw navicon" aria-hidden="true"  ></i>Me désinscrire de L2S1 INF1 - UEO 31.1  TP - Algo &amp; Prog 3 [SEN 971]</a></p></li></ul></li></ul></div></div></div><span class="skip-block-to" id="sb-4"></span></aside>    </div>
	
</div>

<div
    id="message-drawer-5de8489dcc5125de8489dbab2e33"
    class="message-drawer bg-light hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="message-drawer"
    role="region"
>
    <div class="header-container position-relative" data-region="header-container">
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch">
                    <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                    </a>
                </div>
                <div>
                    Contacts
                </div>
                <div class="ml-auto">
                    <a href="#" data-route="view-search" role="button" aria-label="Recherche">
                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                    </a>
                </div>
            </div>
        </div>        
        <div
            class="hidden bg-white position-relative border-bottom px-2 py-2"
            aria-hidden="true"
            data-region="view-conversation"
        >
            <div class="hidden" data-region="header-content"></div>
            <div class="hidden" data-region="header-edit-mode">
                
                <div class="d-flex p-2 align-items-center">
                    Messages sélectionnés :
                    <span class="ml-1" data-region="message-selected-court">1</span>
                    <button type="button" class="ml-auto close" aria-label="Annuler la sélection de message"
                        data-action="cancel-edit-mode">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div data-region="header-placeholder">
                <div class="d-flex">
                    <div class="align-self-stretch" >
                        <a class="h-100 mr-2 d-flex align-items-center" href="#" data-route-back role="button">
                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                        </a>
                    </div>
                    <div
                        class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                        style="height: 38px; width: 38px"
                    >
                    </div>
                    <div class="ml-2 " style="flex: 1">
                        <div
                            class="mt-1 bg-pulse-grey w-75"
                            style="height: 16px;"
                        >
                        </div>
                    </div>
                    <div
                        class="ml-2 bg-pulse-grey align-self-center"
                        style="height: 16px; width: 20px"
                    >
                    </div>
                </div>
            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>        <div class="border-bottom px-2 py-3" aria-hidden="false" data-region="view-overview">
            <div class="d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text pr-0 bg-white">
                            <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                        </span>
                    </div>
                    <input
                        type="text"
                        class="form-control border-left-0"
                        placeholder="Recherche"
                        aria-label="Recherche"
                        data-region="view-overview-search-input"
                    >
                </div>
                <div class="ml-2">
                    <a
                        href="#"
                        data-route="view-settings"
                        data-route-param="29109"
                        aria-label="Réglages"
                        role="button"
                    >
                        <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
                    </a>
                </div>
            </div>
            <div class="text-right mt-3">
                <a href="#" data-route="view-contacts" role="button">
                    <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                    Contacts
                    <span class="badge bg-primary ml-2 hidden"
                    data-region="contact-request-count"
                    aria-label="Il y a 0 demandes de contact en attente">
                        0
                    </span>
                </a>
            </div>
        </div>
        
        <div class="hidden border-bottom px-2 py-3 view-search" aria-hidden="true" data-region="view-search">
            <div class="d-flex align-items-center">
                <a
                    class="mr-2 align-self-stretch d-flex align-items-center"
                    href="#"
                    data-route-back
                    data-action="cancel-search"
                    role="button"
                >
                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                </a>
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Recherche"
                        aria-label="Recherche"
                        data-region="search-input"
                    >
                    <div class="input-group-append">
                        <button
                            class="btn btn-outline-secondary"
                            type="button"
                            data-action="search"
                            aria-label="Recherche"
                        >
                            <span data-region="search-icon-container">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                            </span>
                            <span class="hidden" data-region="loading-icon-container">
                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>        
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch" >
                    <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>                    </a>
                </div>
                <div>
                    Paramètres
                </div>
            </div>
        </div>
    </div>
    <div class="body-container position-relative" data-region="body-container">
        
        <div
            class="hidden"
            data-region="view-contact"
            aria-hidden="true"
        >
            <div class="p-2 pt-3" data-region="content-container"></div>
        </div>        <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="29109">
            <div class="d-flex flex-column h-100">
                <div class="p-3 border-bottom">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a
                                id="contacts-tab-5de8489dcc5125de8489dbab2e33"
                                class="nav-link active"
                                href="#contacts-tab-panel-5de8489dcc5125de8489dbab2e33"
                                data-toggle="tab"
                                data-action="show-contacts-section"
                                role="tab"
                                aria-controls="contacts-tab-panel-5de8489dcc5125de8489dbab2e33"
                                aria-selected="true"
                            >
                                Contacts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                id="requests-tab-5de8489dcc5125de8489dbab2e33"
                                class="nav-link"
                                href="#requests-tab-panel-5de8489dcc5125de8489dbab2e33"
                                data-toggle="tab"
                                data-action="show-requests-section"
                                role="tab"
                                aria-controls="requests-tab-panel-5de8489dcc5125de8489dbab2e33"
                                aria-selected="false"
                            >
                                Demandes
                                <span class="badge bg-primary ml-2 hidden"
                                data-region="contact-request-count"
                                aria-label="Il y a 0 demandes de contact en attente">
                                    0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content d-flex flex-column h-100">
                            <div
            class="tab-pane fade show active h-100 lazy-load-list"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="29109"
                                id="contacts-tab-panel-5de8489dcc5125de8489dbab2e33"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-5de8489dcc5125de8489dbab2e33"

        >
        
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                Aucun contact
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
            </div>
        </div>
        
                            <div
            class="tab-pane fade h-100 lazy-load-list"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="29109"
                                id="requests-tab-panel-5de8489dcc5125de8489dbab2e33"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-5de8489dcc5125de8489dbab2e33"

        >
        
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                Aucune demande de contact
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
            </div>
        </div>
                </div>
            </div>
        </div>        
        <div
            class="view-conversation hidden h-100"
            aria-hidden="true"
            data-region="view-conversation"
            data-user-id="29109"
            data-midnight="1575432000"
            data-message-poll-min="10"
            data-message-poll-max="120"
            data-message-poll-after-max="300"
            style="overflow-y: auto; overflow-x: hidden"
        >
            <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                    <div class="py-3 bg-light sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                        <p class="m-0">Demande de contact envoyée</p>
                        <p class="font-italic font-weight-light" data-region="text"></p>
                    </div>
                    <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>
                </div>
                <div class="p-4 w-100 h-100 hidden position-absolute" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                    
                    <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                        <h3 class="h6 hidden" data-region="dialogue-header"></h3>
                        <p class="text-muted" data-region="dialogue-text"></p>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                            <span data-region="dialogue-button-text">Bloc</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                            <span data-region="dialogue-button-text">Débloquer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                            <span data-region="dialogue-button-text">Supprimer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                            <span data-region="dialogue-button-text">Ajouter</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                            <span data-region="dialogue-button-text">Supprimer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                            <span data-region="dialogue-button-text">Supprimer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                            <span data-region="dialogue-button-text">Envoyer une demande de contact</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                            <span data-region="dialogue-button-text">Accepter et ajouter aux contacts</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                            <span data-region="dialogue-button-text">Décliner</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Annuler</button>
                    </div>
                </div>
                <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                    <div class="h-100 d-flex flex-column">
                        <div
                            class="px-2 pb-2 pt-0 bg-light h-100"
                            style="overflow-y: auto"
                        >
                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                        </div>
                    </div>                </div>
            </div>
        </div>
        
        <div
            class="hidden"
            aria-hidden="true"
            data-region="view-group-info"
        >
            <div
                class="pt-3 h-100 d-flex flex-column"
                data-region="group-info-content-container"
                style="overflow-y: auto"
            ></div>
        </div>        <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="29109">
            <div id="message-drawer-view-overview-container" class="d-flex flex-column h-100" style="overflow-y: auto">
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-favourites"
                    >
                        <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-favourites-target"
                                aria-expanded="false"
                                aria-controls="view-overview-favourites-target"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Favori</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="29109"
                                    id="view-overview-favourites-target"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                    
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Aucune conversation favorite</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-group-messages"
                    >
                        <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-group-messages-target"
                                aria-expanded="false"
                                aria-controls="view-overview-group-messages-target"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Groupe</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="29109"
                                    id="view-overview-group-messages-target"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                    
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Pas de conversation de groupe</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-messages"
                    >
                        <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-messages-target"
                                aria-expanded="false"
                                aria-controls="view-overview-messages-target"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Privée</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="29109"
                                    id="view-overview-messages-target"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                    
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Pas de conversation privée</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
        <div
            data-region="view-search"
            aria-hidden="true"
            class="h-100 hidden"
            data-user-id="29109"
            data-users-offset="0"
            data-messages-offset="0"
            style="overflow-y: auto"
        >
            <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                
                <div class="d-flex flex-column">
                    <div class="mb-3 bg-white" data-region="all-contacts-container">
                        <div data-region="contacts-container"  class="pt-2">
                            <h4 class="h6 px-2">Contacts</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div data-region="non-contacts-container" class="pt-2 border-top">
                            <h4 class="h6 px-2">Non contact</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-users">
                                <span data-region="button-text">Charger plus</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white" data-region="messages-container">
                        <h4 class="h6 px-2 pt-2">Messages personnels</h4>
                        <div class="list-group" data-region="list"></div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-messages">
                                <span data-region="button-text">Charger plus</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <p class="hidden p-3 text-center" data-region="no-results-container">Aucun résultat</p>
                </div>            </div>
            <div class="hidden" data-region="loading-placeholder">
                <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>
            </div>
            <div class="p-3 text-center" data-region="empty-message-container">
                <p>Rechercher des personnes et des messages</p>
            </div>
        </div>        
        <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
            <div class="hidden" data-region="content-container">
                
                <div data-region="settings" class="p-3">
                    <h3 class="h6 font-weight-bold">Confidentialité</h3>
                    <p>Vous pouvez choisir qui peut vous envoyer un message personnel</p>
                    <div data-preference="blocknoncontacts" class="mb-3">
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5de8489dcc5125de8489dbab2e33-1"
                                    value="1"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5de8489dcc5125de8489dbab2e33-1">
                                    Mes contacts seulement
                                </label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5de8489dcc5125de8489dbab2e33-0"
                                    value="0"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5de8489dcc5125de8489dbab2e33-0">
                                    Mes contacts et tout le monde dans mes cours
                                </label>
                            </div>
                    </div>
                
                    <div class="hidden" data-region="notification-preference-container">
                        <h3 class="mb-2 mt-4 h6 font-weight-bold">Préférences de notification</h3>
                    </div>
                
                    <h3 class="mb-2 mt-4 h6 font-weight-bold">Général</h3>
                    <div data-preference="entertosend">
                        <span class="switch">
                            <input type="checkbox"
                                id="enter-to-send-5de8489dcc5125de8489dbab2e33"
                                
                            >
                            <label for="enter-to-send-5de8489dcc5125de8489dbab2e33">
                                Taper entrée pour envoyer
                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <div data-region="placeholder-container">
                
                <div class="d-flex flex-column p-3">
                    <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                    <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-4">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                </div>            </div>
        </div>    </div>
    <div class="footer-container position-relative" data-region="footer-container">
        
        <div
            class="hidden border-top bg-white position-relative"
            aria-hidden="true"
            data-region="view-conversation"
            data-enter-to-send="0"
        >
            <div class="hidden p-2" data-region="content-messages-footer-container">
                
                <div class="d-flex mt-1">
                    <textarea
                        dir="auto"
                        data-region="send-message-txt"
                        class="form-control bg-light"
                        rows="3"
                        data-auto-rows
                        data-min-rows="3"
                        data-max-rows="5"
                        role="textbox"
                        aria-label="Écrire un message"
                        placeholder="Écrire un message"
                        style="resize: none"
                    ></textarea>
                    <button
                        class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                        aria-label="Envoyer message personnel"
                        data-action="send-message"
                    >
                        <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden p-2" data-region="content-messages-footer-edit-mode-container">
                
                <div class="d-flex p-3 justify-content-end">
                    <button
                        class="btn btn-link btn-icon my-1 icon-size-4"
                        data-action="delete-selected-messages"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Supprimer les messages sélectionnés"
                    >
                        <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        <span class="sr-only">Supprimer les messages sélectionnés</span>
                    </button>
                </div>            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-contact-container">
                
                <div class="p-3 bg-white">
                    <p data-region="title"></p>
                    <p class="text-muted" data-region="text"></p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                        <span data-region="dialogue-button-text">Envoyer une demande de contact</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-unblock-container">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">Vous avez bloqué cet utilisateur.</p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                        <span data-region="dialogue-button-text">Débloquer l'utilisateur</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-unable-to-message">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">Vous ne pouvez pas envoyer un message à cet utilisateur</p>
                </div>
            </div>
            <div class="p-2" data-region="placeholder-container">
                <div class="d-flex">
                    <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                    <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                </div>            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>    </div>
</div>
<footer id="page-footer">

<div id="course-footer"></div>
                <div class="container blockplace1"><div class="row"><div class="left-col col-3"><h4>Services en ligne</h4>
<ul><li><a href="http://eportfolio.univ-antilles.fr/" target="_blank" rel="noreferrer noopener">ePortfolio</a><br /></li>
    <li><a href="http://www.univ-antilles.fr/outils/messagerie" target="_blank" rel="noreferrer noopener">Webmail</a></li>
    <li><a href="http://buag.univ-antilles.fr/" target="_blank" rel="noreferrer noopener">Bibliothèques</a></li>
    <li><a href="http://www.univ-antilles.fr/" target="_blank" rel="noreferrer noopener">Site de l'UA</a></li>
    
</ul></div><div class="left-col col-3"><h4>Contact</h4>
<ul><li>Assistance eCursus :<br /></li>
    <li><a href="mailto:ecursus@univ-antilles.fr">ecursus@univ-antilles.fr</a></li>
</ul></div><div class="left-col col-3"><br /></div></div></div>        <div class="container">
            <div class="row">
                <div class="col-12 pagination-centered">
<div class="socialbox"></div>                </div>
            </div>
        </div>

    <div class="info container2 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-md-0 my-2">
                </div>

                <div class="col-md-4 my-md-0 my-2 helplink">
                </div>
                <div class="col-md-4 my-md-0 my-2">
                    <div class="tool_dataprivacy"><a href="https://ecursus.univ-antilles.fr/admin/tool/dataprivacy/summary.php">Résumé de conservation de données</a></div><a href="https://download.moodle.org/mobile?version=2018120305.02&amp;lang=fr&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Obtenir l'app mobile</a><div class="performanceinfo pageinfo">Informations sur cette page : General type: incourse. Context Fichier: TP4 : Correction (context id 251511). Page type mod-resource-view. </div>                </div>
            </div>
        </div>
    </div>
</footer>


<div id="back-to-top"><i class="fa fa-angle-up "></i></div>



    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
 
    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type='text/javascript' name='localga'>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-47501636-2']);
      _gaq.push(['_trackPageview','/']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script><script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://ecursus.univ-antilles.fr/lib/requirejs.php/1574866144/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://ecursus.univ-antilles.fr/lib/javascript.php/1574866144/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://ecursus.univ-antilles.fr/lib/javascript.php/1574866144/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://ecursus.univ-antilles.fr/lib/javascript.php/1574866144/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://ecursus.univ-antilles.fr/lib/javascript.php/1574866144/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://ecursus.univ-antilles.fr/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("fr",{
 "Audio Player": "Lecteur audio",
 "Video Player": "Lecteur vidéo",
 "Play": "Lecture",
 "Pause": "Pause",
 "Replay": "Revoir",
 "Current Time": "Temps actuel",
 "Duration Time": "Durée",
 "Remaining Time": "Temps restant",
 "Stream Type": "Type de flux",
 "LIVE": "EN DIRECT",
 "Loaded": "Chargé",
 "Progress": "Progression",
 "Progress Bar": "Barre de progression",
 "progress bar timing: currentTime={1} duration={2}": "{1} de {2}",
 "Fullscreen": "Plein écran",
 "Non-Fullscreen": "Fenêtré",
 "Mute": "Sourdine",
 "Unmute": "Son activé",
 "Playback Rate": "Vitesse de lecture",
 "Subtitles": "Sous-titres",
 "subtitles off": "Sous-titres désactivés",
 "Captions": "Sous-titres transcrits",
 "captions off": "Sous-titres transcrits désactivés",
 "Chapters": "Chapitres",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions désactivées",
 "Audio Track": "Piste audio",
 "Volume Level": "Niveau de volume",
 "You aborted the media playback": "Vous avez interrompu la lecture de la vidéo.",
 "A network error caused the media download to fail part-way.": "Une erreur de réseau a interrompu le téléchargement de la vidéo.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "Cette vidéo n'a pas pu être chargée, soit parce que le serveur ou le réseau a échoué ou parce que le format n'est pas reconnu.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "La lecture de la vidéo a été interrompue à cause d'un problème de corruption ou parce que la vidéo utilise des fonctionnalités non prises en charge par votre navigateur.",
 "No compatible source was found for this media.": "Aucune source compatible n'a été trouvée pour cette vidéo.",
 "The media is encrypted and we do not have the keys to decrypt it.": "Le média est chiffré et nous n'avons pas les clés pour le déchiffrer.",
 "Play Video": "Lire la vidéo",
 "Close": "Fermer",
 "Close Modal Dialog": "Fermer la boîte de dialogue modale",
 "Modal Window": "Fenêtre modale",
 "This is a modal window": "Ceci est une fenêtre modale",
 "This modal can be closed by pressing the Escape key or activating the close button.": "Ce modal peut être fermé en appuyant sur la touche Échap ou activer le bouton de fermeture.",
 ", opens captions settings dialog": ", ouvrir les paramètres des sous-titres transcrits",
 ", opens subtitles settings dialog": ", ouvrir les paramètres des sous-titres",
 ", opens descriptions settings dialog": ", ouvrir les paramètres des descriptions",
 ", selected": ", sélectionné",
 "captions settings": "Paramètres des sous-titres transcrits",
 "subtitles settings": "Paramètres des sous-titres",
 "descriptions settings": "Paramètres des descriptions",
 "Text": "Texte",
 "White": "Blanc",
 "Black": "Noir",
 "Red": "Rouge",
 "Green": "Vert",
 "Blue": "Bleu",
 "Yellow": "Jaune",
 "Magenta": "Magenta",
 "Cyan": "Cyan",
 "Background": "Arrière-plan",
 "Window": "Fenêtre",
 "Transparent": "Transparent",
 "Semi-Transparent": "Semi-transparent",
 "Opaque": "Opaque",
 "Font Size": "Taille des caractères",
 "Text Edge Style": "Style des contours du texte",
 "None": "Aucun",
 "Raised": "Élevé",
 "Depressed": "Enfoncé",
 "Uniform": "Uniforme",
 "Dropshadow": "Ombre portée",
 "Font Family": "Famille de polices",
 "Proportional Sans-Serif": "Polices à chasse variable sans empattement (Proportional Sans-Serif)",
 "Monospace Sans-Serif": "Polices à chasse fixe sans empattement (Monospace Sans-Serif)",
 "Proportional Serif": "Polices à chasse variable avec empattement (Proportional Serif)",
 "Monospace Serif": "Polices à chasse fixe avec empattement (Monospace Serif)",
 "Casual": "Manuscrite",
 "Script": "Scripte",
 "Small Caps": "Petites capitales",
 "Reset": "Réinitialiser",
 "restore all settings to the default values": "Restaurer tous les paramètres aux valeurs par défaut",
 "Done": "Terminé",
 "Caption Settings Dialog": "Boîte de dialogue des paramètres des sous-titres transcrits",
 "Beginning of dialog window. Escape will cancel and close the window.": "Début de la fenêtre de dialogue. La touche d'échappement annulera et fermera la fenêtre.",
 "End of dialog window.": "Fin de la fenêtre de dialogue."
});

    });
});;
require(["theme_adaptable/bsoptions"], function(amd) { amd.init(true); });;
require(["theme_boost/drawer"], function(amd) { amd.init(); });;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://ecursus.univ-antilles.fr/mod/resource/view.php?id=54829&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://ecursus.univ-antilles.fr/mod/resource/view.php?id=59832&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_1, '#label_10_33', null);
    });
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_2, '#label_10_39', null);
    });
;
require(["block_navigation/navblock"], function(amd) { amd.init("4"); });;
require(["block_settings/settingsblock"], function(amd) { amd.init("5", null); });;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-5de8489dc3a335de8489dbab2e27');
    Popover.init(toggle);
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['jquery', 'core/popover_region_controller'], function($, controller) {
    var container = $('#nav-mail-popover-container');
    var controller = new controller(container);
    controller.registerListNavigationEventListeners();
});
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_2, '#label_10_39', null);
    });
;
require(["theme_adaptable/showsidebar"], function(amd) { amd.init(); });;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-5de8489dcc5125de8489dbab2e33');
    MessageDrawer.init(root);
});
;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });;
require(["core/page_global"], function(amd) { amd.init(); });
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Modifi\u00e9 le","name":"Nom","error":"Erreur","info":"Information","yes":"Oui","no":"Non","viewallcourses":"Afficher tous les cours","cancel":"Annuler","confirm":"Confirmer","areyousure":"En \u00eates-vous bien s\u00fbr\u00a0?","closebuttontitle":"Fermer","unknownerror":"Erreur inconnue"},"repository":{"type":"Type","size":"Taille","invalidjson":"Cha\u00eene JSON non valide","nofilesattached":"Aucun fichier joint","filepicker":"S\u00e9lecteur de fichiers","logout":"D\u00e9connexion","nofilesavailable":"Aucun fichier disponible","norepositoriesavailable":"D\u00e9sol\u00e9, aucun de vos d\u00e9p\u00f4ts actuels ne peut retourner de fichiers dans le format requis.","fileexistsdialogheader":"Le fichier existe","fileexistsdialog_editor":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint au texte que vous modifiez.","fileexistsdialog_filemanager":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint","renameto":"Renommer \u00e0 \u00ab\u00a0{$a}\u00a0\u00bb","referencesexist":"Ce fichier est utilis\u00e9 comme source par {$a} alias.","select":"S\u00e9lectionnez"},"admin":{"confirmdeletecomments":"Voulez-vous vraiment supprimer des commentaires\u00a0?","confirmation":"Confirmation"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"fr"});
});
M.util.help_popups.setup(Y);
M.util.init_block_hider(Y, {"id":"inst32694","title":"Rentr\u00e9e 2019-20","preference":"block32694hidden","tooltipVisible":"Cacher le bloc Rentr\u00e9e 2019-20","tooltipHidden":"Montrer le bloc Rentr\u00e9e 2019-20"});
M.util.init_block_hider(Y, {"id":"inst4","title":"Navigation","preference":"block4hidden","tooltipVisible":"Cacher le bloc Navigation","tooltipHidden":"Montrer le bloc Navigation"});
M.util.init_block_hider(Y, {"id":"inst5","title":"Administration","preference":"block5hidden","tooltipVisible":"Cacher le bloc Administration","tooltipHidden":"Montrer le bloc Administration"});
 M.util.js_pending('random5de8489dbab2e34'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5de8489dbab2e34'); });
})();
//]]>
</script>

</div>


</body>
</html>
