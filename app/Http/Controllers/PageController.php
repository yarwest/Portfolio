<?php
/*
===============================================================
	PageController loads a view given the view exists
	in pages directory under views directory else 404 it is
===============================================================
*/
namespace App\Http\Controllers;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller {


	//the magical method
	public function show($page)
	{
	    $page = str_replace('/', '.', $page);
        if (! str_contains($page, 'pages')) {
            $page = ($page === '.') ? 'pages.index' : sprintf('pages.%s', $page);
        }
		//then we make sure it exists in pages
		if(!view()->exists($page)){
			//doesnt exist abort oh nooooo
			abort(404);
		}

		//We need to pass site data(address,phoneNO,social media links,etc)
		$site_meta = \App\SiteMeta::all('value', 'name', 'isLink');
		//switch:$site_data should be passed no matter what
		switch ($page) {

            case 'pages.index':
                return
                view($page)->
				with(compact('site_meta'));
                break;
            case 'pages.contact':
                return
                view($page)->
                with(compact('site_meta'));
                break;
			
			default:
				return view($page, compact('site_meta'));
				break;
		}

		//take them there
		
	
	
	}

    public function send(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::raw("<h2>Hello!</h2>

<p>Someone filled in the contact form on your website :)</p>

<p>Name: {{$name}}</p>
<p>Email: {{$email}}</p>
<p>Message: {{$message}}</p>

<h3>Good luck!</h3>", function ($m) {
            $m->from('contact@yarwest.com', 'Yarwest.com');
            $m->to('yarno1998@gmail.com', 'Yarno Boelens')
                ->subject('Someone filled in the contact form');
        });

        session()->flash('message', 'Successfully send your message');
        session()->flash('alert-class', 'alert-success');

        return redirect()->back();
    }
}