<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Цветовая схема', 'your-textdomain-here' ),
        'id'         => 'colortheme',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'color-head',
				'type'     => 'color',
				'title'    => esc_html__( 'Основной цвет', 'your-textdomain-here' ),
				'default'  => '#007AFC',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--HeadColor' => ':root',
                    '--yith-wcan-labels_style_background_hover' => ':root',
                    '--yith-wcan-filters_colors_accent' => ':root',
                    '--yith-wcan-anchors_style_text_hover' => ':root',
                    '--yith-wcan-anchors_style_text_active' => ':root',
				),
			),
			array(
				'id'       => 'color-duble',
				'type'     => 'color',
				'title'    => esc_html__( 'Второй цвет', 'your-textdomain-here' ),
				'default'  => '#59B210',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--DubleColor' => ':root',
				),
			),
            array(
				'id'       => 'color-head-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста на основном', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorTextHead' => ':root',
				),
			),
			array(
				'id'       => 'button-site',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок', 'your-textdomain-here' ),
				'default'  => '#007AFC',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButton' => ':root',
				),
			),
			array(
				'id'       => 'button-site-hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок при наведении', 'your-textdomain-here' ),
				'default'  => '#59B210',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButtonHover' => ':root',
				),
			),
			array(
				'id'       => 'button-site-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста кнопок', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButtonText' => ':root',
				),
			),
			array(
				'id'       => 'link-site',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет ссылок', 'your-textdomain-here' ),
				'default'  => '#007AFC',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorLink' => ':root',
				),
			),
			array(
				'id'       => 'link-site-hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет ссылок при наведении', 'your-textdomain-here' ),
				'default'  => '#59B210',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorLinkHover' => ':root',
				),
			),
			array(
				'id'       => 'count-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет счетчика акций', 'your-textdomain-here' ),
				'default'  => '#E67E22',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorCountBack' => ':root',
				),
			),
			array(
				'id'       => 'count-color-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста счетчика акций', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorCountText' => ':root',
				),
			),
			
        ),
        )
    );