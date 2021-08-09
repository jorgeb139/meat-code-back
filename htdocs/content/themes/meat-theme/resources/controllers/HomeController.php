<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class HomeController extends BaseController
{
    public function index($post)
    {   
        $elements = get_fields($post);
        foreach ($elements['banner_slider'] as $banner_slide_value) {
            $banner[]=[
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
                return view('pages.home', compact('elements', 'banner'));
            }
}
