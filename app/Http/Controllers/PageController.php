<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function execute($alias) {

        if (!$alias) {
            abort(404);
        }
        $pages = Page::all();
        $menu = array();
        foreach ($pages as $page) {
            $item   = array('title' => $page->name, 'alias'=>env('APP_URL')."/#".$page->alias);
            array_push($menu, $item);
        }

        $item = array('title'=>'technologies', 'alias'=>env('APP_URL')."/#".'service');
        array_push($menu, $item);

        $item = array('title'=>'Portfolio', 'alias'=>env('APP_URL')."/#".'Portfolio');
        array_push($menu, $item);

        $item = array('title'=>'Team', 'alias'=>env('APP_URL')."/#".'team');
        array_push($menu, $item);

        $item = array('title'=>'Contact', 'alias'=>env('APP_URL')."/#".'contact');
        array_push($menu, $item);

        if (view()->exists('site.page')) {
            $page = Page::where('alias',strip_tags($alias))->first();
            $data = [
                'title'=>$page->name,
                'page'=>$page,
                'menu'=>$menu
            ];
            return view('site.page',$data);
        }
        else {
            abort(404);
        }

    }
}
