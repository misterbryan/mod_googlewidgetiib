<?php
// No direct access
defined('_JEXEC') or die;

//Retrieve +1 Button Parameters
$btnplus_show_on_site = $params->get("btnplus_show_on_site", "");

//Retrieve Badge Parameters
$badge_show_on_site = $params->get("badge_show_on_site", "");

//Retrieve Share Parameters
$share_show_on_site = $params->get("share_show_on_site", "");
?>

<!-- ---------------------------------------- +1 Button ---------------------------------------- -->
<?php
if ($btnplus_show_on_site == "yes") {
//Retrieve +1 Button Parameters
    $btnplus_size = $params->get("btnplus_size", "");
    $btnplus_annotation = $params->get("btnplus_annotation", "");
    $btnplus_width = $params->get("btnplus_width", "");
    $btnplus_language = $params->get("btnplus_language", "");
    $btnplus_dynamic = $params->get("btnplus_dynamic", "");
    $btnplus_parsetags = $params->get("btnplus_parsetags", "");
    $btnplus_js_callback = $params->get("btnplus_js_callback", "");
    $btnplus_url_to_plusone = $params->get("btnplus_url_to_plusone", "");

    if ($btnplus_size == "standard") {
        $btnplus_size_iib = "";
    } else {
        $btnplus_size_iib = 'data-size="' . $btnplus_size . '" ';
    }
    if ($btnplus_annotation == "bubble") {
        $btnplus_annotation_iib = "";
    } else {
        $btnplus_annotation_iib = 'data-annotation="' . $btnplus_annotation . '" ';
    }
    if ($btnplus_js_callback == "") {
        $btnplus_js_callback_iib = "";
    } else {
        $btnplus_js_callback_iib = 'data-callback="' . $btnplus_js_callback . '" ';
    }
    if ($btnplus_url_to_plusone == "") {
        $btnplus_url_to_plusone_iib = "";
    } else {
        $btnplus_url_to_plusone_iib = 'data-href="' . $btnplus_url_to_plusone . '" ';
    }
    ?>
    <div class="g-plusone" <?php echo $btnplus_size_iib . $btnplus_annotation_iib . 'data-width="' . $btnplus_width . '" ' . $btnplus_js_callback_iib . $btnplus_url_to_plusone_iib; ?>></div>
    <?php
    if ($btnplus_parsetags == "explicit") {

        if ($btnplus_language == "en-US") {
            $btnplus_language_iib = "";
        } else {
            $btnplus_language_iib = 'lang : \'' . $btnplus_language . '\',';
        }
        ?>
        <script src="https://apis.google.com/js/platform.js" async defer>
            {
        <?php echo $btnplus_language_iib; ?> parsetags: 'explicit'
            }
        </script>
        <script type="text/javascript">gapi.plusone.go();</script>
        <?php
    } else {
        if ($btnplus_dynamic) {

            if ($btnplus_language == "en-US") {
                $btnplus_language_iib = "";
            } else {
                $btnplus_language_iib = 'window.___gcfg = {lang: \'' . $btnplus_language . '\'};';
            }
            ?>
            <script type="text/javascript">
            <?php echo $btnplus_language_iib; ?>

                (function() {
                var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/platform.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                })();</script>
            <?php
        } else {

            if ($btnplus_language == "en-US") {
                $btnplus_language_iib = "";
            } else {
                $btnplus_language_iib = '{lang: \'' . $btnplus_language . '\'}';
            }
            ?>
            <script src="https://apis.google.com/js/platform.js" async defer>
                {
            <?php echo $btnplus_language_iib; ?>
                }
            </script>
            <?php
        }
    }
}
?>


<!-- ---------------------------------------- Badge ---------------------------------------- -->
<?php
if ($badge_show_on_site == "yes") {

//Retrieve Badge Parameters
    $badge_type = $params->get("badge_type", "");
    $badge_google_user = $params->get("badge_google_user", "");
    $badge_features = $params->get("badge_features", "");
    $badge_layout = $params->get("badge_layout", "");
    $badge_width = $params->get("badge_width", "");
    $badge_color_theme = $params->get("badge_color_theme", "");
    $badge_cover_photo = $params->get("badge_cover_photo", "");
    $badge_tagline = $params->get("badge_tagline", "");
    $badge_language = $params->get("badge_language", "");
    $badge_dynamic = $params->get("badge_dynamic", "");
    $badge_parsetags = $params->get("badge_parsetags", "");

    if ($badge_google_user == "") {
        $badge_google_user_iib = "";
    } else {
        $badge_google_user_iib = 'data-href="' . $badge_google_user . '" ';
    }

    if ($badge_features == "Badge") {
        if ($badge_layout == "portrait") {
            $badge_layout_iib = "";
        } else {
            $badge_layout_iib = 'data-layout="' . $badge_layout . '" ';
        }
        if ($badge_color_theme == "light") {
            $badge_color_theme_iib = "";
        } else {
            $badge_color_theme_iib = 'data-theme="' . $badge_color_theme . '" ';
        }
        if ($badge_cover_photo == "Enabled") {
            $badge_cover_photo_iib = "";
        } else {
            $badge_cover_photo_iib = 'data-showcoverphoto="false" ';
        }
        if ($badge_tagline == "Enabled") {
            $badge_tagline_iib = "";
        } else {
            $badge_tagline_iib = 'data-showtagline="false" ';
        }
        ?>
        <div class="g-page" <?php echo $badge_google_user_iib . $badge_color_theme_iib . 'data-width="' . $badge_width . '" ' . $badge_layout_iib . $badge_tagline_iib . $badge_cover_photo_iib . 'data-rel="' . $badge_type . '"'; ?> ></div>
        <?php
        if ($badge_parsetags == "explicit") {

            if ($badge_language == "en-US") {
                $badge_language_iib = "";
            } else {
                $badge_language_iib = 'lang : \'' . $badge_language . '\',';
            }
            ?>
            <script src="https://apis.google.com/js/platform.js" async defer>
                {
            <?php echo $badge_language_iib; ?> parsetags: 'explicit'
                }
            </script>
            <script type="text/javascript">gapi.plusone.go();</script>
            <?php
        } else {
            if ($badge_dynamic) {

                if ($badge_language == "en-US") {
                    $badge_language_iib = "";
                } else {
                    $badge_language_iib = 'window.___gcfg = {lang: \'' . $badge_language . '\'};';
                }
                ?>
                <script type="text/javascript">
                <?php echo $badge_language_iib; ?>

                    (function() {
                    var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                    })();</script>
                <?php
            } else {

                if ($badge_language == "en-US") {
                    $badge_language_iib = "";
                } else {
                    $badge_language_iib = '{lang: \'' . $badge_language . '\'}';
                }
                ?>
                <script src="https://apis.google.com/js/platform.js" async defer>
                    {
                <?php echo $badge_language_iib; ?>
                    }
                </script>
                <?php
            }
        }
    } else {
        $badge_icon_name = $params->get("badge_icon_name", "");
        $badge_icon_size = $params->get("badge_icon_size", "");
        if ($badge_icon_name == "") {
            if ($badge_icon_size == "tall") {
                $badge_icon = '<a href="' . $badge_google_user . '?prsrc=3"
   rel="publisher" target="_top" style="text-decoration:none;">
<img src="//ssl.gstatic.com/images/icons/gplus-64.png" alt="Google+" style="border:0;width:64px;height:64px;"/>
</a>';
            } else if ($badge_icon_size == "small") {
                $badge_icon = '<a href="' . $badge_google_user . '?prsrc=3"
   rel="publisher" target="_top" style="text-decoration:none;">
<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/>
</a>';
            } else {
                $badge_icon = '<a href="' . $badge_google_user . '?prsrc=3"
   rel="publisher" target="_top" style="text-decoration:none;">
<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
</a>';
            }
        } else {
            if ($badge_icon_size == "tall") {
                $badge_icon = '<a href="' . $badge_google_user . '?prsrc=3"
   rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
<img src="//ssl.gstatic.com/images/icons/gplus-64.png" alt="" style="border:0;width:64px;height:64px;"/><br />
<span style="font-weight:bold;">' . $badge_icon_name . '</span><br /><span> Google+</span>
</a>';
            } else if ($badge_icon_size == "small") {
                $badge_icon = '<a href="' . $badge_google_user . '?prsrc=3"
   rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:0px;">' . $badge_icon_name . '</span><span style="display:inline-block;vertical-align:top;margin-right:13px; margin-top:0px;"></span>
<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/>
</a>';
            } else {
                $badge_icon = '<a href="' . $badge_google_user . '?prsrc=3"
   rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:8px;">' . $badge_icon_name . '</span><span style="display:inline-block;vertical-align:top;margin-right:15px; margin-top:8px;"></span>
<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
</a>';
            }
        }
        echo $badge_icon;
    }
}
?>

<!-- ---------------------------------------- Share ---------------------------------------- -->    
<?php
if ($share_show_on_site == "yes") {
//Retrieve Share Parameters    
    $share_annotation = $params->get("share_annotation", "");
    $share_size = $params->get("share_size", "");
    $share_language = $params->get("share_language", "");
    $share_width = $params->get("share_width", "");
    $share_dynamic = $params->get("share_dynamic", "");
    $share_parsetags = $params->get("share_parsetags", "");
    $share_url_to_share = $params->get("share_url_to_share", "");


    if ($share_annotation == "inline") {
        $share_annotation_iib = "";
        if ($share_size == "Medium") {
            $share_size_iib = "";
        } else if ($share_size == "Small") {
            $share_size_iib = 'data-height="15" ';
        } else {
            $share_size_iib = 'data-height="24" ';
        }
    } else {
        $share_annotation_iib = 'data-annotation="' . $share_annotation . '" ';
        if ($share_annotation == "vertical-bubble") {
            $share_size_iib = 'data-height="60" ';
        } else {
            if ($share_size == "Medium") {
                $share_size_iib = "";
            } else if ($share_size == "Small") {
                $share_size_iib = 'data-height="15" ';
            } else {
                $share_size_iib = 'data-height="24" ';
            }
        }
    }

    if ($share_width == "") {
        $share_width_iib = "";
    } else {
        $share_width_iib = 'data-width="' . $share_width . '" ';
    }
    if ($share_url_to_share == "") {
        $share_url_to_share_iib = "";
    } else {
        $share_url_to_share_iib = 'data-href="' . $share_url_to_share . '" ';
    }
    ?>
    <div class="g-plus" data-action="share" <?php echo $share_size_iib . $share_annotation_iib . $share_width_iib . $share_url_to_share_iib; ?>></div>
    <?php
    if ($share_parsetags == "explicit") {

        if ($share_language == "en-US") {
            $share_language_iib = "";
        } else {
            $share_language_iib = 'lang : \'' . $share_language . '\',';
        }
        ?>
        <script src="https://apis.google.com/js/platform.js" async defer>
                    {
        <?php echo $share_language_iib; ?> parsetags: 'explicit'
                    }
        </script>
        <script type="text/javascript">gapi.plusone.go();</script>
        <?php
    } else {
        if ($share_dynamic) {

            if ($share_language == "en-US") {
                $share_language_iib = "";
            } else {
                $share_language_iib = 'window.___gcfg = {lang: \'' . $share_language . '\'};';
            }
            ?>
            <script type="text/javascript">
            <?php echo $share_language_iib; ?>

                (function() {
                var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/platform.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                })();</script>
            <?php
        } else {

            if ($share_language == "en-US") {
                $share_language_iib = "";
            } else {
                $share_language_iib = '{lang: \'' . $share_language . '\'}';
            }
            ?>
            <script src="https://apis.google.com/js/platform.js" async defer>
                {
            <?php echo $share_language_iib; ?>
                }
            </script>
            <?php
        }
    }
}