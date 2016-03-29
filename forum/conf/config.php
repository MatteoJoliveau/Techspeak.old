<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.2';

// Database
$Configuration['Database']['Name'] = 'techspearmsql';
$Configuration['Database']['Host'] = 'techspearmsql.mysql.db';
$Configuration['Database']['User'] = 'techspearmsql';
$Configuration['Database']['Password'] = 'Mysqlpdata0';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledLocales
$Configuration['EnabledLocales']['vf_it'] = 'it';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = false;
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Facebook'] = true;
$Configuration['EnabledPlugins']['GooglePrettify'] = true;
$Configuration['EnabledPlugins']['Quotes'] = true;
$Configuration['EnabledPlugins']['ButtonBar'] = false;
$Configuration['EnabledPlugins']['Tagging'] = true;
$Configuration['EnabledPlugins']['IndexPhotos'] = true;
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = true;
$Configuration['EnabledPlugins']['cleditor'] = false;
$Configuration['EnabledPlugins']['Emotify'] = false;
$Configuration['EnabledPlugins']['FileUpload'] = false;
$Configuration['EnabledPlugins']['editor'] = true;
$Configuration['EnabledPlugins']['LastEdited'] = true;
$Configuration['EnabledPlugins']['PrettyPrint'] = false;
$Configuration['EnabledPlugins']['GooglePrettifyExtended'] = false;
$Configuration['EnabledPlugins']['EmojiExtender'] = true;
$Configuration['EnabledPlugins']['ProfileExtender'] = true;
$Configuration['EnabledPlugins']['ThankfulPeople2'] = true;
$Configuration['EnabledPlugins']['RoleTitle'] = true;
$Configuration['EnabledPlugins']['DiscussionPolls'] = true;
$Configuration['EnabledPlugins']['Resolved'] = false;
$Configuration['EnabledPlugins']['PrefixDiscussion'] = true;

// Garden
$Configuration['Garden']['Title'] = 'TechSpeak Forum';
$Configuration['Garden']['Cookie']['Salt'] = '2IvEffcdXVD6xWgK';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = false;
$Configuration['Garden']['Registration']['SendConnectEmail'] = false;
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Lf7RxQTAAAAACdNTsB4Fboro7ciV3KCwztJxDdQ';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Lf7RxQTAAAAAHmeqTP2-VCY7a6qF0RkTUEgQPWX';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'TechSpeak Forum';
$Configuration['Garden']['Email']['SupportAddress'] = 'no-reply@techspeak.it';
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = 'smtp.techspeak.it';
$Configuration['Garden']['Email']['SmtpUser'] = 'no-reply@techspeak.it';
$Configuration['Garden']['Email']['SmtpPassword'] = 'noreplytechspeak';
$Configuration['Garden']['Email']['SmtpPort'] = '5025';
$Configuration['Garden']['Email']['SmtpSecurity'] = '';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Version'] = '2.2';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['InstallationID'] = '53FE-CF365D3C-9162A539';
$Configuration['Garden']['InstallationSecret'] = 'c287e32598fc319a722cca4b7b5c9fcbdfd9a6bc';
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['Locale'] = 'it';
$Configuration['Garden']['HomepageTitle'] = 'TechSpeak Forum';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['ShareImage'] = 'ARZTZ6E6U56Y.png';
$Configuration['Garden']['FavIcon'] = 'favicon_9beddc3772740e4e.ico';
$Configuration['Garden']['MobileInputFormatter'] = 'Html';
$Configuration['Garden']['AllowFileUploads'] = true;
$Configuration['Garden']['EditContentTimeout'] = '-1';
$Configuration['Garden']['EmojiSet'] = 'none';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Default';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_default';
$Configuration['Garden']['Logo'] = 'WE3IFXVKI43S.jpg';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['Facebook']['ApplicationID'] = '206291053048774';
$Configuration['Plugins']['Facebook']['Secret'] = 'e5f0db3b7cc4a0c4bc3bed0db218a61f';
$Configuration['Plugins']['Facebook']['UseFacebookNames'] = '1';
$Configuration['Plugins']['Facebook']['SocialSignIn'] = '1';
$Configuration['Plugins']['Facebook']['SocialReactions'] = false;
$Configuration['Plugins']['Facebook']['SocialSharing'] = false;
$Configuration['Plugins']['editor']['ForceWysiwyg'] = '';
$Configuration['Plugins']['GooglePrettify']['LineNumbers'] = '';
$Configuration['Plugins']['GooglePrettify']['NoCssFile'] = '';
$Configuration['Plugins']['GooglePrettify']['UseTabby'] = '';
$Configuration['Plugins']['GooglePrettify']['Language'] = '';
$Configuration['Plugins']['ThankfulPeople']['AllowTakeBack'] = true;
$Configuration['Plugins']['DiscussionPolls']['EnableShowResults'] = false;
$Configuration['Plugins']['DiscussionPolls']['DisablePollTitle'] = '1';
$Configuration['Plugins']['PrefixDiscussion']['ListSeparator'] = ';';
$Configuration['Plugins']['PrefixDiscussion']['Prefixes'] = 'Problema;Risolto';

// ProfileExtender
$Configuration['ProfileExtender']['Fields']['NomeSteam']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['NomeSteam']['Label'] = 'Nome Steam';
$Configuration['ProfileExtender']['Fields']['NomeSteam']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['NomeSteam']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['NomeSteam']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['NomeSteam']['Required'] = false;
$Configuration['ProfileExtender']['Fields']['NomeSteam']['Name'] = 'NomeSteam';
$Configuration['ProfileExtender']['Fields']['NomeOrigin']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['NomeOrigin']['Label'] = 'Nome Origin';
$Configuration['ProfileExtender']['Fields']['NomeOrigin']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['NomeOrigin']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['NomeOrigin']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['NomeOrigin']['Required'] = false;

// Routes
$Configuration['Routes']['DefaultController'] = array('discussions', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.2';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Discussions']['SortField'] = 'd.DateLastComment';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = false;
$Configuration['Vanilla']['Categories']['HideModule'] = false;
$Configuration['Vanilla']['Comments']['AutoRefresh'] = NULL;
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = false;
$Configuration['Vanilla']['Comment']['MaxLength'] = '8000';
$Configuration['Vanilla']['Comment']['MinLength'] = '';
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = false;

// Last edited by AntonioPitasi (151.29.152.244)2016-01-11 01:22:32