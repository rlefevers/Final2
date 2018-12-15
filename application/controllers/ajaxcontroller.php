<?php

class AjaxController extends Controller{

	protected $postObject;
    protected $userObject;
    protected $categoryObject;


	public function index(){
		$this->set("response","Invalid Request");

		$this->set(result, false);
	}

    public function get_post_content() {

        $this->postObject = new Post();
        $post = $this->postObject->getPost($_GET['pID']);
        $this->set('response',$post['content']);


    }

		public function get_weather() {
				$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=52637236c5b144b0850173457182011&q=".$_POST['zip']."&format=xml&num_of_days=2");
				$this->set(result, true);
				$this->set(weather, $xml);
				$this->$weather->request->query;
				$this->$weather->weather->maxtempF;
				$this->$weather->weather->mintemF;

		}

}

?>
