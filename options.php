<?php

// =============================
// === Radio Station Options ===
// =============================

if ( !defined( 'ABSPATH' ) ) exit;

// ------------------
// Set Plugin Options
// ------------------
$options = array(

	// === Broadcast ===

	// --- [Player] Streaming URL ---
	'streaming_url' => array(
		'type'    => 'text',
		'options' => 'URL',
		'label'   => 'Streaming URL',
		'default' => '',
		'helper'  => 'Enter the Streaming URL for your Radio Station. This is used in the Radio Player and discoverable via Data Feeds.',
		'tab'     => 'general',
		'section' => 'broadcast',
	),

	// --- [Player] Stream Format ---
	'streaming_format' => array(
		'type'    => 'select',
		'options' => $formats,
		'label'   => 'Streaming Format',
		'default' => 'aac',
		'helper'  => 'Select streaming format for streaming URL.',
		'tab'     => 'general',
		'section' => 'broadcast',
	),

	// --- [Player] Fallback Stream URL ---
	'fallback_url' => array(
		'type'    => 'text',
		'options' => 'URL',
		'label'   => 'Fallback Stream URL',
		'default' => '',
		'helper'  => 'Enter an alternative Streaming URL for Player fallback.',
		'tab'     => 'general',
		'section' => 'broadcast',
	),

	// --- [Player] Fallback Stream Format ---
	'fallback_format' => array(
		'type'    => 'select',
		'options' => $formats,
		'label'   => 'Fallback Format',
		'default' => 'ogg',
		'helper'  => 'Select streaming fallback for fallback URL.',
		'tab'     => 'general',
		'section' => 'broadcast',
	),

	// --- [Player] Stream GeoBlocking ---
	'stream_geo_blocking' => array(
		'label'		=> 'GeoIP Stream Blocking',
		'type'		=> 'select',
		'options' => array(
			''			=> 'No GeoIP Blocking',
			'live365'	=> 'Live365 (only US, UK, Canada, Mexico)',
			// 'blacklist' => 'Custom Country Blacklist',
			// 'whitelist' => 'Custom Country Whitelist',
		),
		'default' => '',
		'helper'  => 'Block streaming according to country, detected by user IP address.',
		'tab'     => 'general',
		'section' => 'broadcast',
		'pro'     => true,
	),
		
	// --- Main Radio Language ---
	'radio_language'    => array(
		'type'    => 'select',
		'options' => $languages,
		'label'   => 'Main Broadcast Language',
		'default' => '',
		'helper'  => 'Select the main language used on your Radio Station.',
		'tab'     => 'general',
		'section' => 'broadcast',
	),

	// --- Ping Netmix Directory ---
	// note: disabled by default for WordPress.org repository compliance
	// 2.5.0: moved from feeds to broadcast section
	'ping_netmix_directory' => array(
		'type'    => 'checkbox',
		'label'   => 'Ping Netmix Directory',
		'default' => '',
		'value'   => 'yes',
		'helper'  => 'If you have a Netmix Directory listing, enable this to ping the directory whenever you update your schedule.',
		'tab'     => 'general',
		'section' => 'broadcast',
	),

	// === Station ===

	// --- [Player] Station Title ---
	// 2.3.3.8: added station title field
	'station_title' => array(
		'type'    => 'text',
		'label'   => 'Station Title',
		'default' => '',
		'helper'  => 'Name of your Radio Station. For use in Stream Player and Data Feeds.',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- [Player] Station Image ---
	// 2.3.3.8: added station logo image field
	'station_image' => array(
		'type'    => 'image',
		'label'   => 'Station Logo Image',
		'default' => '',
		'helper'  => 'Add a logo image for your Radio Station. Please ensure image is square before uploading. Recommended size 256 x 256',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- Timezone Location ---
	'timezone_location' => array(
		'type'    => 'select',
		'options' => $timezones,
		'label'   => 'Location Timezone',
		'default' => '',
		'helper'  => 'Select your Broadcast Location for Radio Timezone display.',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- Clock Time Format ---
	'clock_time_format' => array(
		'type'    => 'select',
		'options' => array(
			'12' => '12 Hour Format',
			'24' => '24 Hour Format',
		),
		'label'   => 'Clock Time Format',
		'default' => '12',
		'helper'  => 'Default Time Format for display output. Can be overridden in each shortcode or widget.',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- Station Phone Number ---
	// 2.3.3.6: added station phone number option
	'station_phone' => array(
		'type'    => 'text',
		'options' => 'PHONE',
		'label'   => 'Station Phone',
		'default' => '',
		'helper'  => 'Main call in phone number for the Station (for requests etc.)',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- Phone for Shows ---
	// 2.3.3.6: added default to station phone option
	'shows_phone' => array(
		'type'    => 'checkbox',
		'default' => '',
		'value'   => 'yes',
		'label'   => 'Show Phone Display',
		'helper'  => 'Display Station phone number on Shows where a Show phone number is not set.',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- Station Email Address ---
	// 2.3.3.8: added station email address option
	'station_email' => array(
		'type'    => 'email',
		'default' => '',
		'label'   => 'Station Email',
		'helper'  => 'Main email address for the Station (for requests etc.)',
		'tab'     => 'general',
		'section' => 'station',
	),

	// --- Email for Shows ---
	// 2.3.3.8: added default to email address option
	'shows_email' => array(
		'type'    => 'checkbox',
		'default' => '',
		'value'   => 'yes',
		'label'   => 'Show Email Display',
		'helper'  => 'Display Station email address on Shows where a Show email address is not set.',
		'tab'     => 'general',
		'section' => 'station',
	),

	// === Feeds ===

	// --- REST Data Routes ---
	'enable_data_routes' => array(
		'type'    => 'checkbox',
		'label'   => 'Enable Data Routes',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Enables Station Data Routes via WordPress REST API.',
		'tab'     => 'general',
		'section' => 'feeds',
	),

	// --- Data Feed Links ---
	'enable_data_feeds' => array(
		'type'    => 'checkbox',
		'label'   => 'Enable Data Feeds',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Enable Station Data Feeds via WordPress Feed links.',
		'tab'     => 'general',
		'section' => 'feeds',
	),

	// === Performance ===
	// 2.4.0.6: separated performance section

	// --- Shift Conflict Checker ---
	// 2.5.6: added setting for conflict checker
	'conflict_checker' => array(
		'type'    => 'checkbox',
		'label'   => 'Shift Conflict Checker',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Check for Shift conflicts when saving Show shift times.',
		'tab'     => 'general',
		'section' => 'performance',
	),

	// --- Disable Transients ---
	// 2.4.0.6: change label from Clear Transients
	'clear_transients' => array(
		'type'    => 'checkbox',
		'label'   => 'Disable Transients',
		'default' => '',
		'value'   => 'yes',
		'helper'  => 'Clear Schedule transients with every pageload. Less efficient but more reliable.',
		'tab'     => 'general',
		'section' => 'performance',
	),

	// --- Transient Caching ---
	'transient_caching' => array(
		'type'    => 'checkbox',
		'label'   => 'Show Transients',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Use Show Transient Data to improve Schedule calculation performance.',
		'tab'     => 'general',
		'section' => 'performance',
		'pro'     => true,
	),

	// --- Show Shift Feeds ---
	/* 'show_shift_feeds' => array(
		'type'    => 'checkbox',
		'label'   => 'Show Shift Feeds',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Convert RSS Feeds for a single Show to a Show shift feed, allowing a visitor to subscribe to a Show feed to be notified of Show shifts.',
		'tab'     => 'general',
		'section' => 'feeds',
		'pro'     => true,
	), */

	// === Basic Stream Player ===

	// --- Defaults Note ---
	// 2.5.0: added note about defaults being overrideable in widgets
	'player_defaults_note' => array(
		'type'    => 'note',
		'label'   => 'Player Defaults Note',
		'helper'  => 'Note that you can override these defaults in specific Player Widgets.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Player Title ---
	'player_title' => array(
		'type'    => 'checkbox',
		'label'   => 'Display Station Title',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Display your Radio Station Title in Player by default.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Player Image ---
	'player_image' => array(
		'type'    => 'checkbox',
		'label'   => 'Display Station Image',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Display your Radio Station Image in Player by default.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Player Script ---
	// 2.4.0.3: change script default to jplayer
	// 2.5.7: disable howler script (browser incompatibilities)
	'player_script' => array(
		'type'    => 'select',
		'label'   => 'Player Script',
		'default' => 'jplayer',
		'options' => array(
			'amplitude' => 'Amplitude',
			'jplayer'   => 'jPlayer',
			// 'howler'    => 'Howler',
		),
		'helper'  => 'Default audio script to use for playback in the Player.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Fallback Scripts ---
	// 2.4.0.3: added fallback enable/disable switching
	// 2.4.0.3: fixed option label from Player Script
	// 2.5.7: disable howler script (browser incompatibilities)
	'player_fallbacks' => array(
		'type'    => 'multicheck',
		'label'   => 'Fallback Scripts',
		'default' => array( 'amplitude', 'howler', 'jplayer' ),
		'options' => array(
			'amplitude' => 'Amplitude',
			'jplayer'   => 'jPlayer',
			// 'howler'    => 'Howler',
		),
		'helper'  => 'Enabled fallback audio scripts to try when the default Player script fails.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Player Theme ---
	'player_theme' => array(
		'type'    => 'select',
		'label'   => 'Default Player Theme',
		'default' => 'light',
		'options' => array(
			'light' => 'Light',
			'dark'  => 'Dark',
		),
		'helper'  => 'Default Player Controls theme style.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Player Buttons ---
	// 2.5.15: change default to circular
	'player_buttons' => array(
		'type'    => 'select',
		'label'   => 'Default Player Buttons',
		'default' => 'circular',
		'options' => array(
			'circular' => 'Circular Buttons',
			'rounded'  => 'Rounded Buttons',
			'square'   => 'Square Buttons',
		),
		'helper'  => 'Default Player Buttons shape style.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Volume Controls  ---
	// 2.4.0.3: added enable/disable volume controls option
	// 2.5.0: default to volume slider only
	'player_volumes' => array(
		'type'    => 'multicheck',
		'label'   => 'Volume Controls',
		'default' => array( 'slider' ),
		'options' => array(
			'slider'   => 'Volume Slider',
			'updown'   => 'Volume Plus / Minus',
			'mute'     => 'Mute Volume Toggle',
			'max'      => 'Maximize Volume',
		),
		'helper'  => 'Which volume controls to display in the Player by default.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// --- [Player] Player Debug Mode ---
	'player_debug' => array(
		'type'    => 'checkbox',
		'label'   => 'Player Debug Mode',
		'default' => '',
		'value'   => 'yes',
		'helper'  => 'Output player debug information in browser javascript console.',
		'tab'     => 'player',
		'section' => 'basic',
	),

	// === Player Colours ===

	// --- [Pro/Player] Playing Highlight Color ---
	'player_playing_color' => array(
		'type'    => 'color',
		'label'   => 'Playing Icon Highlight Color',
		'default' => '#70E070',
		'helper'  => 'Default highlight color to use for Play button icon when playing.',
		'tab'     => 'player',
		'section' => 'colors',
		'pro'     => true,
	),

	// --- [Pro/Player] Control Icons Highlight Color ---
	'player_buttons_color' => array(
		'type'    => 'color',
		'label'   => 'Control Icons Highlight Color',
		'default' => '#00A0E0',
		'helper'  => 'Default highlight color to use for Control button icons when active.',
		'tab'     => 'player',
		'section' => 'colors',
		'pro'     => true,
	),

	// --- [Pro/Player] Volume Knob Color ---
	'player_thumb_color' => array(
		'type'    => 'color',
		'label'   => 'Volume Knob Color',
		'default' => '#80C080',
		'helper'  => 'Default Knob Color for Player Volume Slider.',
		'tab'     => 'player',
		'section' => 'colors',
		'pro'     => true,
	),

	// --- [Pro/Player] Volume Track Color ---
	'player_range_color' => array(
		'type'    => 'coloralpha',
		'label'   => 'Volume Track Color',
		'default' => '#80C080',
		'helper'  => 'Default Track Color for Player Volume Slider.',
		'tab'     => 'player',
		'section' => 'colors',
		'pro'     => true,
	),

	// === Advanced Stream Player ===

	// --- [Player] Player Volume ---
	'player_volume' => array(
		'type'    => 'number',
		'label'   => 'Player Start Volume',
		'default' => 77,
		'min'     => 0,
		'step'    => 1,
		'max'     => 100,
		'helper'  => 'Initial volume for when the Player starts playback.',
		'tab'     => 'player',
		'section' => 'advanced',
		'pro'     => false,
	),

	// --- [Player] Single Player ---
	'player_single' => array(
		'type'    => 'checkbox',
		'label'   => 'Single Player at Once',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Stop any existing Player instances on the page or in other windows or tabs when a Player is started.',
		'tab'     => 'player',
		'section' => 'advanced',
		'pro'     => false,
	),

	// --- [Pro/Player] Player Autoresume ---
	// 2.5.15: change autoresume default to off so activated manually
	// 2.5.16: updated helper text
	'player_autoresume' => array(
		'type'    => 'checkbox',
		'label'   => 'Autoresume Playback',
		'default' => '',
		'value'   => 'on',
		'helper'  => 'On return to site or page reload, ask the user to resume stream playback if they were playing the stream previously, using a popup a modal dialogue box.',
		'tab'     => 'player',
		'section' => 'advanced',
		'pro'     => true,
	),

	// --- [Pro/Player] Popup Player Button ---
	// 2.5.0: enabled popup player button
	'player_popup' => array(
		'type'    => 'checkbox',
		'label'   => 'Popup Player Button',
		'default' => '',
		'value'   => 'yes',
		'helper'  => 'Add button to open Popup Player in separate window.',
		'tab'     => 'player',
		'section' => 'advanced',
		'pro'     => true,
	),

	// === Sitewide Player Bar ===

	// --- Player Bar Note ---
	'player_bar_note' => array(
		'type'    => 'note',
		'label'   => 'Bar Defaults Note',
		'helper'  => 'The Bar Player uses the default configurations set above.'
					. ' ' . 'You can override these in specific Player Widgets.',
		'tab'     => 'player',
		'section' => 'bar',
	),

	// --- [Pro/Player] Sitewide Player Bar ---
	'player_bar' => array(
		'type'    => 'select',
		'label'   => 'Sitewide Player Bar',
		'default' => 'off',
		'options' => array(
			'off'    => 'No Player Bar',
			'top'    => 'Top Player Bar',
			'bottom' => 'Bottom Player Bar',
		),
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'Add a fixed position Player Bar which displays Sitewide.',
		'pro'     => true,
	),

	// --- [Pro/Player] Player Bar Height ---
	// 2.5.15: add px suffix
	'player_bar_height' => array(
		'type'    => 'number',
		'min'     => 40,
		'max'     => 400,
		'step'    => 1,
		'label'   => 'Player Bar Height',
		'default' => 80,
		'suffix'  => 'px',
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'Set the height of the Sitewide Player Bar in pixels.',
		'pro'     => true,
	),

	// --- [Pro/Player] Fade In Player Bar ---
	'player_bar_fadein' => array(
		'type'    => 'number',
		'label'   => 'Fade In Player Bar',
		'default' => 2500,
		'min'     => 0,
		'step'    => 100,
		'max'     => 10000,
		'helper'  => 'Number of milliseconds after Page load over which to fade in Player Bar. Use 0 for instant display.',
		'tab'     => 'player',
		'section' => 'bar',
		'pro'     => true,
	),

	// --- [Pro/Player] Continuous Playback ---
	// 2.4.0.1: fix for missing value field
	'player_bar_continuous' => array(
		'type'    => 'checkbox',
		'label'   => 'Continuous Playback',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Uninterrupted Sitewide Bar playback while user is navigating between pages! Pages are loaded in background and faded in while Player Bar persists.'
			. ' <a href="' . RADIO_STATION_DOCS_URL . 'player/#pro-continous-player-integration" target="_blank">' . 'Click here for setup notes.' . '</a>',
		'tab'     => 'player',
		'section' => 'bar',
		'pro'     => true,
	),

	// --- [Pro/Player] Player Page Fade ---
	'player_bar_pagefade' => array(
		'type'    => 'number',
		'label'   => 'Page Fade Time',
		'default' => 2000,
		'min'     => 0,
		'step'    => 100,
		'max'     => 10000,
		'helper'  => 'Number of milliseconds over which to fade in new Pages (when continuous playback is enabled.) Use 0 for instant display.',
		'tab'     => 'player',
		'section' => 'bar',
		'pro'     => true,
	),

	// --- [Pro/Player] Page Load Timeout ---
	// 2.4.0.3: add page load timeout option
	'player_bar_timeout' => array(
		'type'    => 'number',
		'label'   => 'Page Load Timeout',
		'default' => 7000,
		'min'     => 0,
		'step'    => 500,
		'max'     => 20000,
		'helper'  => 'Number of milliseconds to wait for new Page to load before fading in anyway (when continuous playback is enabled.)',
		'tab'     => 'player',
		'section' => 'bar',
		'pro'     => true,
	),

	// --- [Pro/Player] Bar Player Text Color ---
	'player_bar_text' => array(
		'type'    => 'color',
		'label'   => 'Bar Player Text Color',
		'default' => '#FFFFFF',
		'helper'  => 'Text color for the fixed position Sitewide Bar Player.',
		'tab'     => 'player',
		'section' => 'bar',
		'pro'     => true,
	),

	// --- [Pro/Player] Bar Player Background Color ---
	'player_bar_background' => array(
		'type'    => 'coloralpha',
		'label'   => 'Bar Player Background Color',
		'default' => 'rgba(0,0,0,255)',
		'helper'  => 'Background color for the fixed position Sitewide Bar Player.',
		'tab'     => 'player',
		'section' => 'bar',
		'pro'     => true,
	),

	// --- [Pro/Player] Display Current Show ---
	// 2.4.0.3: added for current show display
	'player_bar_currentshow' => array(
		'type'    => 'checkbox',
		'label'   => 'Display Current Show',
		'value'   => 'yes',
		'default' => 'yes',
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'Display the Current Show in the Player Bar.',
		'pro'     => true,
	),

	// --- [Pro/Player] Display Metadata ---
	// 2.4.0.3: added for now playing metadata display
	'player_bar_nowplaying' => array(
		'type'    => 'checkbox',
		'label'   => 'Display Now Playing',
		'value'   => 'yes',
		'default' => 'yes',
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'Display the currently playing song in the Player Bar, if a supported metadata format is available. (Icy Meta, Icecast, Shoutcast 1/2, Current Playlist)',
		'pro'     => true,
	),

	// --- [Pro/Player] Track Animation ---
	// 2.5.0: added track animation option
	'player_bar_track_animation' => array(
		'type'    => 'select',
		'label'   => 'Track Animation',
		'default' => 'backandforth',
		'options' => array(
			'none'         => 'No Animation',
			'lefttoright'  => 'Left to Right Ticker',
			'righttoleft'  => 'Right to Left Ticker',
			'backandforth' => 'Back and Forth',
		),
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'How to animate the currently playing track display.',
		'pro'     => true,
	),

	// --- [Pro/Player] Metadata URL ---
	// 2.4.0.3: added for alternative stream metadata URL
	'player_bar_metadata' => array(
		'type'    => 'text',
		'options' => 'URL',
		'label'   => 'Metadata URL',
		'default' => '',
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'Now playing metadata is normally retrieved via the Stream URL. Use this setting if you need to provide an alternative metadata location.',
		'pro'     => true,
	),

	// --- [Pro/Player] Store Track Metadata ---
	// 2.5.6: added option to store stream
	'player_store_metadata' => array(
		'type'    => 'checkbox',
		'label'   => 'Store Track Metadata?',
		'default' => 'yes',
		'value'   => 'yes',
		'tab'     => 'player',
		'section' => 'bar',
		'helper'  => 'Save now playing track metadata in a separate database table for later use.',
		'pro'     => true,
	),

	// === Master Schedule Page ===

	// --- Schedule Page ---
	'schedule_page' => array(
		'type'    => 'select',
		'options' => 'PAGEID',
		'label'   => 'Master Schedule Page',
		'default' => '',
		'helper'  => 'Select the Page you are displaying the Master Schedule on.',
		'tab'     => 'pages',
		'section' => 'schedule',
	),

	// --- Automatic Schedule Display ---
	'schedule_auto' => array(
		'type'    => 'checkbox',
		'label'   => 'Automatic Display',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Replaces selected page content with Master Schedule. Alternatively customize with the shortcode: ' . ' [master-schedule]',
		'tab'     => 'pages',
		'section' => 'schedule',
	),

	// --- Default Schedule View ---
	'schedule_view' => array(
		'type'    => 'select',
		'label'   => 'Schedule View Default',
		'default' => 'table',
		'options' => array(
			'table'   => 'Table View',
			'list'    => 'List View',
			'div'     => 'Divs View',
			'tabs'    => 'Tabbed View',
			'default' => 'Legacy Table',
		),
		'helper'  => 'View type to use for automatic display on Master Schedule Page.',
		'tab'     => 'pages',
		'section' => 'schedule',
	),

	// --- Schedule Clock Display ---
	'schedule_clock' => array(
		'type'    => 'select',
		'label'   => 'Schedule Clock?',
		'default' => 'clock',
		'options' => array(
			''         => 'None',
			'clock'    => 'Clock',
			'timezone' => 'Timezone',
		),
		'helper'  => 'Radio Time section display above program Schedule.',
		'tab'     => 'pages',
		'section' => 'schedule',
	),

	// --- Schedule AJAX Load ---
	// 2.5.10.1: added schedule AJAX load default
	'schedule_ajax' => array(
		'type'    => 'checkbox',
		'label'   => 'AJAX Load?',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Whether to load schedule display via AJAX by default.',
		'tab'     => 'pages',
		'section' => 'schedule',
	),

	// --- [Pro/Plus] Schedule Switcher ---
	'schedule_switcher' => array(
		'type'    => 'checkbox',
		'label'   => 'View Switching',
		'default' => '',
		'value'   => 'yes',
		'helper'  => 'Enable View Switching on the automatic Master Schedule page.',
		'tab'     => 'pages',
		'section' => 'schedule',
		'pro'     => true,
	),

	// --- [Pro/Plus] Available Views ---
	// 2.3.2: added additional views option
	'schedule_views' => array(
		'type'    => 'multicheck',
		'label'   => 'Available Views',
		// note: unstyled list view not included in defaults
		'default' => array( 'table', 'calendar' ),
		'value'   => 'yes',
		'options' => array(
			'table'    => 'Table View',
			'tabs'     => 'Tabbed View',
			'list'     => 'List View',
			'grid'     => 'Grid View',
			'calendar' => 'Calendar View',
		),
		'helper'  => 'Switcher Views available on automatic Master Schedule page.',
		'tab'     => 'pages',
		'section' => 'schedule',
		'pro'     => true,
	),

	// --- [Pro/Plus] Time Spaced Grid View ---
	// 2.4.0.4: added grid view time spacing option
	'schedule_timegrid' => array(
		'type'    => 'checkbox',
		'label'   => 'Time Spaced Grid',
		'default' => '',
		'value'   => 'yes',
		'helper'  => 'Enable Grid View option for equalized time spacing and background imsges.',
		'tab'     => 'pages',
		'section' => 'schedule',
		'pro'     => true,
	),

	// === Show Pages ===

	// --- Show Blocks Position ---
	'show_block_position' => array(
		'type'    => 'select',
		'label'   => 'Info Blocks Position',
		'options' => array(
			'left'  => 'Float Left',
			'right' => 'Float Right',
			'top'   => 'Float Top',
		),
		'default' => 'left',
		'helper'  => 'Where to position Show info blocks relative to Show Page content.',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// ---- Show Section Layout ---
	'show_section_layout' => array(
		'type'    => 'select',
		'label'   => 'Show Content Layout',
		'options' => array(
			'tabbed'   => 'Tabbed',
			'standard' => 'Standard',
		),
		'default' => 'tabbed',
		'helper'  => 'How to display extra sections below Show description. In content tabs or standard layout down the page.',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// ---- Show Player ---
	// 2.5.15: added show player selection
	'show_player' => array(
		'type'    => 'select',
		'label'   => 'Latest Show Player',
		'options' => array(
			'radio_player'   => 'Radio Station Stream Player',
			'media_elements' => 'MediaElements (WordPress)',
		),
		'default' => 'media_elements',
		'helper'  => 'Which player to use on the Show pages for the latest show recording.',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// --- Show Player Theme ---
	// 2.5.15: added show player theme selection
	'show_player_theme' => array(
		'type'    => 'select',
		'label'   => 'Show Player Theme',
		'default' => '',
		'options' => array(
			''		=> 'Player Default',
			'light' => 'Light',
			'dark'  => 'Dark',
		),
		'helper'  => 'Show Player Controls theme style (Radio Station Stream Player only,)',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// --- Show Header Image ---
	// 2.3.2: added plural to option label
	'show_header_image' => array(
		'type'    => 'checkbox',
		'label'   => 'Content Header Images',
		'value'   => 'yes',
		'default' => '',
		'helper'  => 'If your chosen template does not display the Featured Image, enable this and use the Content Header Image box on the Show edit screen instead.',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// --- Latest Show Posts ---
	// 'show_latest_posts' => array(
	// 	'type'    => 'numeric',
	// 	'label'   => 'Latest Show Posts',
	// 	'step'    => 1,
	// 	'min'     => 0,
	// 	'max'     => 100,
	// 	'default' => 3,
	// 	'helper'  => 'Number of Latest Blog Posts to display above Show Page tabs.',
	// 	'tab'     => 'pages',
	// 	'section' => 'show',
	// ),

	// --- Show Posts Per Page ---
	'show_posts_per_page' => array(
		'type'    => 'numeric',
		'label'   => 'Posts per Page',
		'step'    => 1,
		'min'     => 0,
		'max'     => 1000,
		'default' => 10,
		'helper'  => 'Linked Show Posts per page on the Show Page tab/display.',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// --- Show Playlists per Page ---
	'show_playlists_per_page' => array(
		'type'    => 'numeric',
		'step'    => 1,
		'min'     => 0,
		'max'     => 1000,
		'label'   => 'Playlists per Page',
		'default' => 10,
		'helper'  => 'Playlists per page on the Show Page tab/display',
		'tab'     => 'pages',
		'section' => 'show',
	),

	// --- [Pro] Show Episodes per Page ---
	'show_episodes_per_page' => array(
		'type'    => 'number',
		'label'   => 'Episodes per Page',
		'step'    => 1,
		'min'     => 1,
		'max'     => 1000,
		'default' => 10,
		'helper'  => 'Number of Show Episodes per page on the Show page tab/display.',
		'tab'     => 'pages',
		'section' => 'show',
		'pro'     => true,
	),

	// --- [Pro] Combined Team Tab ---
	// 2.4.0.7: added combined team grid option
	// 2.5.7: updated to add option to remove team display
	'combined_team_tab' => array(
		'type'    => 'select',
		'label'   => 'Team Tab Display',
		'default' => 'yes',
		'options' => array(
			'off'  => 'No Team Display',
			''     => 'Separate Role Tabs',
			'yes'  => 'Combined Team List',
			// 'grid' => 'Combined Team Grid',
		),
		'helper'  => 'How to display Show team members (eg. hosts, producers) on a Show page.',
		'tab'     => 'pages',
		'section' => 'show',
		'pro'     => true,
	),

	// === Profile Pages ===
	// 2.3.3.9: added proflie page settings

	// --- [Pro/Plus] Profile Blocks Position ---
	'profile_block_position' => array(
		'type'    => 'select',
		'label'   => 'Info Blocks Position',
		'options' => array(
			'left'  => 'Float Left',
			'right' => 'Float Right',
			'top'   => 'Float Top',
		),
		'default' => 'left',
		'helper'  => 'Where to position Profile info blocks relative to Profile Page content.',
		'tab'     => 'pages',
		'section' => 'profile',
		'pro'     => true,
	),

	// ---- [Pro/Plus] Profile Section Layout ---
	'profile_section_layout' => array(
		'type'    => 'select',
		'label'   => 'Profile Content Layout',
		'options' => array(
			'tabbed'   => 'Tabbed',
			'standard' => 'Standard',
		),
		'default' => 'tabbed',
		'helper'  => 'How to display extra sections below Profile description. In content tabs or standard layout down the page.',
		'tab'     => 'pages',
		'section' => 'profile',
		'pro'     => true,
	),

	// === Episode Pages ===
	// 2.3.3.9: added episode page settings

	// --- [Pro] Episode Blocks Position ---
	'episode_block_position' => array(
		'type'    => 'select',
		'label'   => 'Info Blocks Position',
		'options' => array(
			'left'  => 'Float Left',
			'right' => 'Float Right',
			'top'   => 'Float Top',
		),
		'default' => 'left',
		'helper'  => 'Where to position Episode info blocks relative to Episode Page content.',
		'tab'     => 'pages',
		'section' => 'episode',
		'pro'     => true,
	),

	// ---- [Pro] Episode Section Layout ---
	'episode_section_layout' => array(
		'type'    => 'select',
		'label'   => 'Episode Content Layout',
		'options' => array(
			'tabbed'   => 'Tabbed',
			'standard' => 'Standard',
		),
		'default' => 'tabbed',
		'helper'  => 'How to display extra sections below Episode description. In content tabs or standard layout down the page.',
		'tab'     => 'pages',
		'section' => 'episode',
		'pro'     => true,
	),

	// ---- [Pro] Episode Player ---
	// 2.5.15: added episode player selection
	'episode_player' => array(
		'type'    => 'select',
		'label'   => 'Episode Player',
		'options' => array(
			'radio_player'   => 'Radio Station Stream Player',
			'media_elements' => 'MediaElements (WordPress)',
		),
		'default' => 'radio_player',
		'helper'  => 'Which player to use on the Episode pages for the Episode recording.',
		'tab'     => 'pages',
		'section' => 'episode',
		'pro'     => true,
	),

	// --- [Pro] Episode Player Theme ---
	// 2.5.15: added episode player theme selection
	'episode_player_theme' => array(
		'type'    => 'select',
		'label'   => 'Episode Player Theme',
		'default' => '',
		'options' => array(
			''		=> 'Player Default',
			'light' => 'Light',
			'dark'  => 'Dark',
		),
		'helper'  => 'Episode Player Controls theme style (Radio Station Stream Player only,)',
		'tab'     => 'pages',
		'section' => 'episode',
		'pro'     => true,
	),

	// --- [Pro] Use Latest Episode ---
	'episode_use_latest' => array(
		'type'    => 'checkbox',
		'label'   => 'Use Latest Episode',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Automatically use the latest Episode URL for the player embed on the Show page.',
		'tab'     => 'pages',
		'section' => 'episode',
		'pro'     => true,
	),

	// ==== Post Type Archives ===
	// 2.4.0.6: move archives to separate tab
	// 2.4.0.6: added post type archives section

	// --- Shows Archive Page ---
	'show_archive_page' => array(
		'label'   => 'Shows Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Show archive list.',
		'tab'     => 'archives',
		'section' => 'posttypes',
	),

	// --- Automatic Display ---
	'show_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Show Archive. Alternatively customize display using the shortcode:' . ' [shows-archive]',
		'tab'     => 'archives',
		'section' => 'posttypes',
	),

	// ? --- Redirect Shows Archive --- ?
	// 'show_archive_override' => array(
	// 	'label'   => 'Redirect Shows Archive',
	// 	'type'    => 'checkbox',
	// 	'value'   => 'yes',
	// 	'default' => '',
	// 	'helper'  => 'Redirect Custom Post Type Archive for Shows to Shows Archive Page.',
	// 	'tab'     => 'archives',
	// 	'section' => 'posttypes',
	// ),

	// --- Overrides Archive Page ---
	'override_archive_page' => array(
		'label'   => 'Overrides Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Override archive list.',
		'tab'     => 'archives',
		'section' => 'posttypes',
	),

	// --- Automatic Display ---
	'override_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Override Archive. Alternatively customize display using the shortcode:' . ' [overrides-archive]',
		'tab'     => 'archives',
		'section' => 'posttypes',
	),

	// ? --- Redirect Overrides Archive --- ?
	// 'override_archive_override' => array(
	// 	'label'   => 'Redirect Overrides Archive',
	// 	'type'    => 'checkbox',
	// 	'value'   => 'yes',
	// 	'default' => '',
	// 	'helper'  => 'Redirect Custom Post Type Archive for Overrides to Overrides Archive Page.',
	// 	'tab'     => 'archives',
	// 	'section' => 'posttypes',
	// ),

	// --- Playlists Archive Page ---
	'playlist_archive_page' => array(
		'label'   => 'Playlists Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Playlist archive list.',
		'tab'     => 'archives',
		'section' => 'posttypes',
	),

	// --- Automatic Display ---
	'playlist_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Playlist Archive. Alternatively customize display using the shortcode:' . ' [playlists-archive]',
		'tab'     => 'archives',
		'section' => 'posttypes',
	),

	// ? --- Redirect Playlists Archive --- ?
	// 'playlist_archive_override' => array(
	// 	'label'   => 'Redirect Playlists Archive',
	// 	'type'    => 'checkbox',
	// 	'value'   => 'yes',
	// 	'default' => '',
	// 	'helper'  => 'Redirect Custom Post Type Archive for Playlists to Playlist Archive Page.',
	// 	'tab'     => 'archives',
	// 	'section' => 'posttypes',
	// ),

	// --- [Pro] Episodes Archive Page ---
	// 2.5.8: added episodes archive page option
	'episode_archive_page' => array(
		'label'   => 'Episodes Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Episode archive list.',
		'tab'     => 'archives',
		'section' => 'posttypes',
		'pro'     => true,
	),

	// --- [Pro] Automatic Display ---
	// 2.5.8: added episodes archive automatic display option
	'episode_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Episode Archive. Alternatively customize display using the shortcode:' . ' [episodes-archive]',
		'tab'     => 'archives',
		'section' => 'posttypes',
		'pro'     => true,
	),

	// --- [Pro] Team Archive Page ---
	// 2.4.0.6: added option for team archive page
	'team_archive_page' => array(
		'label'   => 'Team Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Team archive list.',
		'tab'     => 'archives',
		'section' => 'posttypes',
		'pro'     => true,
	),

	// --- [Pro] Automatic Display ---
	// 2.4.0.6: added option for team archive page
	'team_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'select',
		'options' => array(
			''     => 'Off',
			'yes'  => 'List',
			'grid' => 'Grid',
		),
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Team Archive. Alternatively customize display using the shortcode:' . ' [teams-archive]',
		'tab'     => 'archives',
		'section' => 'posttypes',
		'pro'     => true,
	),

	// === Taxonomy Archives ===
	// 2.4.0.6: added taxonomy archives section

	// --- Genres Archive Page ---
	'genre_archive_page' => array(
		'label'   => 'Genres Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Genre archive list.',
		'tab'     => 'archives',
		'section' => 'taxonomies',
	),

	// --- Automatic Display ---
	'genre_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Genre Archive. Alternatively customize display using the shortcode:' . ' [genres-archive]',
		'tab'     => 'archives',
		'section' => 'taxonomies',
	),

	// ? --- Redirect Genres Archives --- ?
	// 'genre_archive_override' => array(
	//  'label'   => 'Redirect Genres Archive',
	//	'type'    => 'checkbox',
	//	'value'   => 'yes',
	//	'default' => '',
	//	'helper'  => 'Redirect Taxonomy Archive for Genres to Genres Archive Page.',
	//	'tab'     => 'archives',
	//	'section' => 'taxonomies',
	// ),

	// --- Languages Archive Page ---
	// 2.3.3.9: added language archive page
	'language_archive_page' => array(
		'label'   => 'Languages Archive Page',
		'type'    => 'select',
		'options' => 'PAGEID',
		'default' => '',
		'helper'  => 'Select the Page for displaying the Language archive list.',
		'tab'     => 'archives',
		'section' => 'taxonomies',
	),

	// --- Automatic Display ---
	// 2.3.3.9: added language archive automatic page
	'language_archive_auto' => array(
		'label'   => 'Automatic Display',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => 'yes',
		'helper'  => 'Replaces selected page content with default Language Archive. Alternatively customize display using the shortcode:' . ' [languages-archive]',
		'tab'     => 'archives',
		'section' => 'taxonomies',
	),

	// ? --- Redirect Languages Archives --- ?
	// 'language_archive_override' => array(
	//  'label'   => 'Redirect Genres Archive',
	//	'type'    => 'checkbox',
	//	'value'   => 'yes',
	//	'default' => '',
	//	'helper'  => 'Redirect Taxonomy Archive for Languages to Languages Archive Page.',
	//	'tab'     => 'archives',
	//	'section' => 'taxonomies',
	// ),

	// TODO: guest archive pages


	// === Single Templates ===

	// --- Templates Change Note ---
	'templates_change_note' => array(
		'type'    => 'note',
		'label'   => 'Templates Change Note',
		'helper'  => 'Since 2.3.0, the way that Templates are implemented has changed.'
					. ' ' . 'See the Documentation for more information:'
					. ' <a href="' . RADIO_STATION_DOCS_URL . 'display/#page-templates" target="_blank">' . 'Templates Documentation' . '</a>',
		'tab'     => 'pages',
		'section' => 'single',
	),

	// --- Show Template ---
	'show_template' => array(
		'label'   => 'Show Template',
		'type'    => 'select',
		'options' => array(
			'page'     => 'Theme Page Template (page.php)',
			'post'     => 'Theme Post Template (single.php)',
			'singular' => 'Theme Singular Template (singular.php)',
			'legacy'   => 'Legacy Plugin Template',
		),
		'default' => 'page',
		'helper'  => 'Which template to use for displaying Show content.',
		'tab'     => 'pages',
		'section' => 'single',
	),

	// --- Combined Template Method ---
	'show_template_combined' => array(
		'label'   => 'Combined Method',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => '',
		'helper'  => 'Advanced usage. Use both a custom template AND content filtering for a Show. (Not compatible with Legacy templates.)',
		'tab'     => 'pages',
		'section' => 'single',
	),

	// --- Playlist Template ---
	// 2.3.3.8: added missing singular.php option to match show_template
	'playlist_template' => array(
		'label'   => 'Playlist Template',
		'type'    => 'select',
		'options' => array(
			'page'     => 'Theme Page Template (page.php)',
			'post'     => 'Theme Post Template (single.php)',
			'singular' => 'Theme Singular Template (singular.php)',
			'legacy'   => 'Legacy Plugin Template',
		),
		'default' => 'page',
		'helper'  => 'Which template to use for displaying Playlist content.',
		'tab'     => 'pages',
		'section' => 'single',
	),

	// --- Combined Template Method ---
	'playlist_template_combined' => array(
		'label'   => 'Combined Method',
		'type'    => 'checkbox',
		'value'   => 'yes',
		'default' => '',
		'helper'  => 'Advanced usage. Use both a custom template AND content filtering for a Playlist. (Not compatible with Legacy templates.)',
		'tab'     => 'pages',
		'section' => 'single',
	),

	// === Widgets ===

	// --- AJAX Loading ---
	// 2.3.3: fix to value of value key
	'ajax_widgets' => array(
		'type'    => 'checkbox',
		'label'   => 'AJAX Load Widgets?',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Defaults plugin widgets to AJAX loading. Can also be set on individual widgets.',
		'tab'     => 'widgets',
		'section' => 'loading',
	),

	// --- [Pro/Plus] Dynamic Reloading ---
	'dynamic_reload' => array(
		'type'    => 'checkbox',
		'label'   => 'Dynamic Reloading?',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Automatically reload all plugin widgets on change of current Show. Can also be set on individual widgets.',
		'tab'     => 'widgets',
		'section' => 'loading',
		'pro'     => true,
	),

	// --- [Pro/Plus] Translate User Times ---
	'convert_show_times' => array(
		'type'    => 'checkbox',
		'label'   => 'Convert Show Times',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Automatically display Show times converted into the visitor timezone, based on their browser setting.',
		'tab'     => 'widgets',
		'section' => 'loading',
		'pro'     => true,
	),

	// --- [Pro/Plus] Timezone Switching ---
	'timezone_switching' => array(
		'type'    => 'checkbox',
		'label'   => 'User Timezone Switching',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Allow visitors to select their Timezone manually for Show time conversions.',
		'tab'     => 'widgets',
		'section' => 'loading',
		'pro'     => true,
	),

	// === Roles / Capabilities / Permissions  ===
	// 2.3.0: added new capability and role options

	// --- Show Editing Permission Note ---
	// 2.4.0.3: added role to show assignment note
	'permissions_show_role_note' => array(
		'type'    => 'note',
		'label'   => 'Show Editing Permissions',
		'helper'  => 'By default, only Hosts and Producers that are assigned to a Show can edit that Show.'
					. ' ' . 'This means an Administrator or Show Editor must assign these users to the Show first.',
		'tab'     => 'roles',
		'section' => 'permissions',
	),

	// --- Playlist Editing Role Note ---
	// 2.4.0.3: added role to playlist assignment note
	'permissions_playlist_role_note' => array(
		'type'    => 'note',
		'label'   => 'Playlist Permissions',
		'helper'  => 'Any user with a Host or Producer role can create Playlists.',
		'tab'     => 'roles',
		'section' => 'permissions',
	),

	// --- Show Editor Role Note ---
	'show_editor_role_note' => array(
		'type'    => 'note',
		'label'   => 'Show Editor Role',
		'helper'  => 'Since 2.3.0, a new Show Editor role has been added with Publish and Edit capabilities for all Radio Station Post Types.'
					. ' ' . 'You can assign this Role to any user to give them full Station Schedule updating permissions.'
					. ' ' . 'This is so a manager can edit the schedule without requiring full site administration role.',
		'tab'     => 'roles',
		'section' => 'permissions',
	),

	// --- Author Role Capabilities ---
	'add_author_capabilities' => array(
		'type'    => 'checkbox',
		'label'   => 'Add to Author Capabilities',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Allow users with WordPress Author role to publish and edit their own Shows and Playlists.',
		'tab'     => 'roles',
		'section' => 'permissions',
	),

	// --- Editor Role Capabilities ---
	'add_editor_capabilities' => array(
		'type'    => 'checkbox',
		'label'   => 'Add to Editor Capabilities',
		'default' => 'yes',
		'value'   => 'yes',
		'helper'  => 'Allow users with WordPress Editor role to edit all Radio Station post types.',
		'tab'     => 'roles',
		'section' => 'permissions',
	),

	// ? --- Disallow Shift Changes --- ?
	// 'disallow_shift_changes' => array(
	// 	'type'    => 'checkbox',
	// 	'label'   => 'Disallow Shift Changes',
	// 	'default' => array(),
	// 	'options' => array(
	// 		'authors'   => 'WordPress Authors',
	// 		'editors'   => 'WorddPress Editors',
	// 		'hosts'     => 'Assigned DJs / Hosts',
	// 		'producers' => 'Assigned Producers',
	// 	),
	// 	'helper'  => 'Prevents users of these Roles changing Show Shift times.',
	// 	'tab'     => 'roles',
	// 	'section' => 'permissions',
	// 	'pro'     => true,
	// ),

	// === Tabs and Sections ===

	// --- Tab Labels ---
	// 2.3.2: add widget options tab
	// 2.3.3.8: added player options tab
	// 2.3.3.8: move templates section onto pages tab
	// 2.4.0.6: added separate archives tab
	'tabs' => array(
		'general'   => 'General',
		'player'    => 'Player',
		'pages'     => 'Pages',
		'archives'  => 'Archives',
		// 'templates' => 'Templates',
		'widgets'   => 'Widgets',
		'roles'     => 'Roles',
	),

	// --- Section Labels ---
	// 2.3.2: add widget loading section
	// 2.3.3.9: added profile pages section
	// 2.4.0.6: added performance section
	// 2.4.0.6: added posttypes and taxonomies archive sections
	'sections' => array(
		'broadcast'   => 'Broadcast',
		'station'     => 'Station',
		'feeds'       => 'Feeds',
		'performance' => 'Performance',
		'basic'       => 'Basic Defaults',
		'advanced'    => 'Advanced Defaults',
		'colors'      => 'Player Colors',
		'bar'         => 'Sitewide Bar Player',
		'schedule'    => 'Schedule Page',
		'single'      => 'Single Templates',
		// 'archive'     => 'Archive Templates',
		'show'        => 'Show Pages',
		'profile'     => 'Profile Pages',
		'episode'     => 'Episode Pages',
		'archives'    => 'Archives',
		'posttypes'   => 'Post Types',
		'taxonomies'  => 'Taxonomies',
		'loading'     => 'Widget Loading',
		'permissions' => 'Permissions',
	),
);
