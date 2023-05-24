<?php
/**
 * Plugin Name:       Chatbot Support AI: ChatGPT Chatbot, Woocommerce Chatbot
 * Plugin URI:        https://www.ShahidH.com/chatbot-support-ai/
 * Description:       ChatGPT and OpenAI powered AI support chatbot to support your customers. Automatic woocommerce integration included. Just activate the plugin and get an awesome chatbot which can support your site visitors. 
 * Version:           1.0.2
 * Author:            ShahidH
 * Author URI:        https://www.upwork.com/freelancers/~01304587883757d540?viewMode=1
 * Text Domain:       chatbot-support-ai
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'chatbot_support_ai_plugin', plugin_basename( __FILE__ ) );

register_activation_hook( chatbot_support_ai_plugin, 'chatbot_support_ai_activation_hook' );
function chatbot_support_ai_activation_hook() {
	require_once 'classes/class-database-setup.php';
	$cs_setup = new ChatbotSupportDatabaseSetup();
	$cs_setup->run_setup();
}

require_once 'classes/class-admin-settings.php';
require_once 'class-api.php';
$chatbot_support = new ChatbotSupportAPI();  
$chatbot_support_settings = new ChatbotSupportSettings(); 
