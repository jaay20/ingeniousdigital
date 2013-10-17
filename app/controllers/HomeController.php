<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */
    protected $layout = 'layouts.master';
    
    public function showIndex() {
        $results = new stdClass;
        //$results = DB::select('select * from clients');
        //$results = Projects::all();
        //echo "<pre>";
        //print_r($results);
        //exit();
        //echo Helpers\Helper::helloWorld();exit();
        $results->projects = Helper::getAllProjects();
        $results->technologies = Helper::getAllTechnologies();
        $results->services = Helper::getAllServices();
        $this->layout->title = 'Agency - Shortcodes: Columns';
        $this->layout->content = View::make(Config::get('appview.siteindex'))->with(array('title'=>"",'dataset'=>$results));
        
    }
    
    public function showAbout() {
        $this->layout->title = 'About Ingenious Digital | IngeniousDigital.com';
        $this->layout->content = View::make(Config::get('appview.siteabout'))->with(array('title'=>""));
    }
    
    public function showServices() {
        $results = new stdClass;
        $results->services = Helper::getAllServices();
        $this->layout->title = 'Services | IngeniousDigital.com';
        $this->layout->content = View::make(Config::get('appview.siteservices'))->with(array('title'=>"",'dataset'=>$results));
    }
    
    public function showWork() {
        $results = new stdClass;
        $results->projects = Helper::getAllProjects();
        $results->services = Helper::getAllServices();
        $this->layout->title = 'Our Work | IngeniousDigital.com';
        $this->layout->content = View::make(Config::get('appview.sitework'))->with(array('title'=>"",'dataset'=>$results));
    }
    

}