<?php

// p.Lead
vc_map(
    array(
        "name" => "Paragraph Lead",
        "description" => "slightly larger than usual text block",
        "base" => "sembia_lead",
        "category" => "Content",
        "params" => array(
            array(
                "admin_label" => true,
                "type" => "textarea",
                "heading" => __("Text"),
                "param_name" => "text_block",
                "value" => '',
            ),
        )
    )
);
class WPBakeryShortCode_sembia_lead extends WPBakeryShortCode {
    protected function content($atts, $content = null) {
        extract(shortcode_atts(
            array(
                'text_block' => '',
            ), $atts
        ));
        $output = false;
        ob_start();
        include(locate_template('inc/shortcodes/lead.php'));
        $output = ob_get_clean();
        return $output;
    }
}

// blockquote
vc_map(
    array(
        "name" => "Blockquote",
        "description" => "Displays a block quote",
        "base" => "sembia_blockquote",
        "category" => "Content",
        "params" => array(
            array(
                "admin_label" => true,
                "type" => "textarea",
                "heading" => __("Text"),
                "param_name" => "text_block",
                "value" => '',
            ),
            array(
                "admin_label" => true,
                "type" => "textfield",
                "heading" => __("Footer"),
                "param_name" => "footer",
                "value" => '',
            ),
            array(
                "admin_label" => true,
                "type" => "textfield",
                "heading" => __("Source"),
                "param_name" => "source",
                "value" => '',
            ),
        )
    )
);
class WPBakeryShortCode_sembia_blockquote extends WPBakeryShortCode {
    protected function content($atts, $content = null) {
        extract(shortcode_atts(
            array(
                'text_block' => '',
                'footer' => '',
                'source' => '',
            ), $atts
        ));
        $output = false;
        ob_start();
        include(locate_template('inc/shortcodes/blockquote.php'));
        $output = ob_get_clean();
        return $output;
    }
}
// Callout Title
vc_map(array(
    "name" => "Title & Subtitle",
    "description" => "A Subtitle and Title block",
    "base" => "sembia_callout_title",
    "category" => "Content",
    "params" => array(
        array(
            "admin_label" => true,
            "type" => "textfield",
            "heading" => __("Title"),
            "param_name" => "title",
            "value" => '',
        ),
        array(
            "admin_label" => true,
            "type" => "textfield",
            "heading" => __("Subtitle"),
            "param_name" => "subtitle",
            "value" => '',
        ),
        array(
            "admin_label" => true,
            "type" => "dropdown",
            "heading" => __("Heading size"),
            "param_name" => "header_size",
            "value" => array(
                'Default (h2)' => 'h2',
                'h1' => 'h1',
                'h3' => 'h3',
            ),
        ),
        array(
            "admin_label" => true,
            "type" => "dropdown",
            "heading" => __("Accent Color"),
            "param_name" => "accent",
            "value" => array(
                'Default (none)' => 'default',
                'Red' => 'red',
                'Blue' => 'blue',
                'green' => 'green',
                'yellow' => 'yellow',
            ),
        ),
    )
));
class WPBakeryShortCode_sembia_callout_title extends WPBakeryShortCode {
    protected function content($atts, $content = null) {
        extract(shortcode_atts(
            array(
                "subtitle" => '',
                "title" => '',
                "header_size" => 'h2',
                "accent" => 'default',
            ), $atts
        ));
        ob_start();
        include(locate_template('inc/shortcodes/callout_title.php'));
        $output = ob_get_clean();
        return $output;
    }
}