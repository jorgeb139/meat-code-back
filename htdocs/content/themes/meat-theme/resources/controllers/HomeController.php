<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class HomeController extends BaseController
{
    public function index($post){

        $elements = get_fields($post);
        foreach ($elements['banner_slider'] as $banner_slide_value) {
            $banner[] = [
                'label' => $banner_slide_value['label'],
                'title' => $banner_slide_value['title'],
                'text' => $banner_slide_value['text'],
                'img' => [
                    'src' => $banner_slide_value['img']['src'], // 1080x690
                    'alt' => $banner_slide_value['img']['alt'],
                ],
                'button' => [
                    'label' => $banner_slide_value['button']['label'],
                    'target' => $banner_slide_value['button']['target'],
                    'url' => $banner_slide_value['button']['url'],
                ],
            ];
        }

        foreach ($elements['color-icons']['items'] as $color_item_value) {
            $item[] = [
                'color' => $color_item_value['color'],
                'icon' => $color_item_value['icon'],
                'text' => $color_item_value['text']
            ];
        };

        $proposito = [
            'title' => $elements['color-icons']['title'],
            'text' => $elements['color-icons']['text'],
            'button' => [
                'label' => $elements['color-icons']['button']['label'],
                'target' => $elements['color-icons']['button']['target'],
                'url' => $elements['color-icons']['button']['url'],
            ],
            'items' => $item
        ];

        foreach ($elements['box-icons']['items'] as $box_icon_value) {
            $box_icon[] = [
                'icon' => $box_icon_value['icon'],
                'title' => $box_icon_value['title'],
                'text' => $box_icon_value['text']
            ];
        };

        $pilares = [
            'title' => $elements['box-icons']['title'],
            'text' => $elements['box-icons']['text'],
            'items' => $box_icon
        ];

        foreach ($elements['hero-tabs'] as $hero_tabs_value) {
            $hero_tab[] = [
                'tab' => $hero_tabs_value['tab'],
                'title' => $hero_tabs_value['title'],
                'text' => $hero_tabs_value['text'],
                'img' => [
                    'src' => $hero_tabs_value['img']['src']['url'],
                    'alt' => $hero_tabs_value['img']['alt'],
                ],
                'button' => [
                    'label' => $hero_tabs_value['button']['label'],
                    'target' => $hero_tabs_value['button']['target'],
                    'url' => $hero_tabs_value['button']['url'],
                ],
            ];
        }

        foreach ($elements['featured-slider']['items'] as $featured_slider_value) {
            $slider_item[] = [
                'category' => $featured_slider_value['category'],
                'date' => $featured_slider_value['date'],
                'title' => $featured_slider_value['title'],
                'img' => [
                    'src' => $featured_slider_value['img']['src']['url'],
                    'alt' => $featured_slider_value['img']['alt'],
                ],
                'url' => $featured_slider_value['url'],
            ];
        };

        $destacado = [
            'title' => $elements['featured-slider']['title'],
            'button' => [
                'label' => $elements['featured-slider']['button']['label'],
                'target' => $elements['featured-slider']['button']['target'],
                'url' => $elements['featured-slider']['button']['url'],
            ],
            'items' => $slider_item
        ];

        foreach ($elements['logos-slider']['items'] as $logo_slider_value) {
            $logo_slider_item[] = [
                'img' => [
                    'src' => $featured_slider_value['img']['src']['url'],
                    'alt' => $featured_slider_value['img']['alt'],
                ],
                'url' => $featured_slider_value['url'],
            ];
        };

        $alianzas = [
            'title' => $elements['logos-slider']['title'],
            'items' => $logo_slider_item
        ];
        
        return view('pages.home', compact('elements', 'banner', 'proposito', 'pilares', 'hero_tab', 'destacado', 'alianzas'));
    }
}
