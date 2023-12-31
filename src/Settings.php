<?php

declare(strict_types=1);

namespace WebiXfBridge;

use WebiXfBridge\BridgeInterface;

enum Settings: string
{
    case enableBridgeSetting      = BridgeInterface::PLUGIN_NAMESPACE . 'enable_bridge';
    case enableBridgeSettingsText = 'Enable Xenforo Bridge';
    case postExcerptSetting       = BridgeInterface::PLUGIN_NAMESPACE . 'post_excerpt_enabled';
    case postExcerptSettingText   = 'If enabled the bridge will only post an excerpt of the article to Xenforo.';
    case deleteXfThreadSetting    = BridgeInterface::PLUGIN_NAMESPACE . 'delete_xf_thread_on_delete';
    case deleteXfThreadSettingText = 'If enabled the remote Xenforo thread will be deleted when the local post is moved to trash.';
    case useFeaturedImageSetting  = BridgeInterface::PLUGIN_NAMESPACE . 'use_featured_image';
    case useFeaturedImageSettingText = 'If enabled this setting will force the bridge to use the featured image when posting to Xenforo';
    case excerptWordCountSetting  = BridgeInterface::PLUGIN_NAMESPACE . 'post_excerpt_word_count';
    case excerptWordCountSettingText = 'The number of words that should be used to create a fallback length for automatic excerpt creation.';
    case targetTagsSetting        = BridgeInterface::PLUGIN_NAMESPACE . 'target_tags';
    case targetTagsSettingText    = 'These are the allowed html tags that will be converted to Bbcode when posting to Xenforo';
    case apiUrlSetting            = BridgeInterface::PLUGIN_NAMESPACE . 'api_url';
    case apiUrlSettingText        = 'Url to the Xenforo site to bridge with. (5 - 261 characters)';
    case apiKeySetting            = BridgeInterface::PLUGIN_NAMESPACE . 'api_key';
    case apiKeySettingText        = 'This should be a Super User scoped Api key generated by Xenforo.';
    case nodeIdSetting            = BridgeInterface::PLUGIN_NAMESPACE . 'node_id';
    case nodeIdSettingText        = 'This should be the node_id for the node you want the bridge to post threads in.';
    case xfUserIdSetting          = BridgeInterface::PLUGIN_NAMESPACE . 'xf_user_id';
    case xfUserIdSettingText      = 'Xenforo user_id of the user the bridge should execute as.';
    case requestSchemeSetting     = BridgeInterface::PLUGIN_NAMESPACE . 'request_scheme';
    case requestSchemeSettingText = 'The request scheme used by the Xenforo installation (http or https)';
    // post metadata
    case xfPostImageHeightSetting = BridgeInterface::PLUGIN_NAMESPACE . 'post_image_height';
    case xfPostImageHeightSettingText = 'If a value is set here it will be set as the default image Height in XenForo post if no value is set per post (should include either px or %)';
    case xfPostImageHeightMetadataText = 'If a value is set here it will be set as the image Height in this XenForo post (should include either px or %)';
    case xfPostImageWidthSetting  = BridgeInterface::PLUGIN_NAMESPACE . 'post_image_width';
    case xfPostImageWidthSettingText = 'If a value is set here it will be set as the default image width in XenForo post if no value is set per post (should include either px or %)';
    case xfPostImageWidthMetadataText = 'If a value is set here it will be set as the image width in this XenForo post (should include either px or %)';
}
