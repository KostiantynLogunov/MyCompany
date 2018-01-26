<?php

namespace App\Http\Controllers;

use App\Page;
use App\People;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //
    public function execute(Request $request) {

        if ($request->isMethod('post')) {

            /*$messages = [
                'required' => "field is required",
                'email' => "field is email",
            ];*/

            $this->validate($request, [
                'name' => 'required|max:100',
                'email' => 'required|email|min:7',
                'text' => 'required'
            ]/*, $messages*/);

            $data = $request->all();

            //mail
            /*$result =*/ Mail::send('mail.email', ['data'=>$data], function ($message) use ($data) {

                $mail_admin = env('MAIL_FROM_NAME');

                $message->from($data['email'],$data['name']);
                $message->to($mail_admin)->subject('Ouestion');
            });

            return redirect()->route('home')->with('status','Email is send');
            /*if ($result) {
                return redirect()->route('home')->with('status','Email is send');
            }*/
        }

        $pages = Page::all();
        $portfolios = Portfolio::get(array('name','filter','images'));
//        $services = Service::where('id','<',20)->get();
        $peoples = People::take(3)->get();
        $methodologies = DB::table('methodologies')->get();
        $technologies = DB::table('technologies')->get();
        $cases= DB::table('cases')->get();
        $services = Service::get();

        $tags = DB::table('portfolios')->distinct()->pluck('filter');

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

        return view('site.index',[
                                        'menu'=>$menu,
                                        'pages'=>$pages,
                                        'portfolios'=>$portfolios,
                                        'peoples'=>$peoples,
                                        'tags'=>$tags,
                                        'methodologies'=>$methodologies,
                                        'technologies' => $technologies,
                                        'cases'=>$cases,
                                        'services'=>$services
        ]);
    }
}
