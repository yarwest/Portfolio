<?php
/*
===============================================================
	PageController loads a view given the view exists
	in pages directory under views directory else 404 it is
===============================================================
*/
namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class PageController extends Controller {

	//the magical method
	public function show($page='index')
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
                    with(compact('site_meta'));;
                break;
            case 'pages.portfolio':
                $portfolio_items = \App\PortfolioItem::all();
                return
                    view($page)->
                    with(compact('portfolio_items'));
                break;

			default:
				return
                    view($page, compact('site_meta'));
				break;
		}
		//take them there
	}
}
