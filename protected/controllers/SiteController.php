<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		Yii::app()->bootstrap->registerTypeahead('.typeahead', array(
    'source'=>array('Additions & Remodels','Additions','Bathroom Remodel','Basement Remodel','Kitchen Remodel','Garage Remodel',
	'Air Conditioning & Cooling','Central Air Conditioning - Install','Central Air Conditioning - Repair or Service',
    'Fans','Swamp Cooler - Install or Replace','Window A/C Unit - Install','Air Conditioning & Cooling',
	'Architects, Builders & Engineers','Architects','Builders (New Home)','Engineers','General Contractors','Land Surveyor', 'Builders',
	'Bathroom Remodeling','Bathroom Remodeling & Design','Cabinets & Countertops','Painting & Staining','Plumbing','Tile',
    'Carpentry','Woodworking','Cabinets','Countertops','Decks','Fences','Ramps','Doors','Finish Carpentry','Trim & Molding','Framing',
    'More Carpentry','Woodworking','Cabinets','Cabinets - Install','Cabinets - Reface','Custom Cabinets or Built-In Furniture',
    'Cabinets - Refinish','Countertops','Cleaning Services','Maid Service','Carpet & Draperies','Windows','Exterior Home','Interior Home',
	'Concrete', 'Brick & Stone','Driveways & Floors','Patios', 'Walks & Steps','Chimney', 'Fireplace', 'Stove & Barbecue','Foundations','Siding - Brick',
	'Stone','Stucco','Countertops','Ceramic & Porcelain Tile - Install','Stone Slab (Granite, Quartz, etc.) - Install','Laminate Countertops - Install',
	'Solid Surface (Corian, Concrete, etc.) - Install','Natural Stone Tile - Install','Decorators & Designers','Designer - Kitchen','Designer - Building',
    'Interior Decorator','Designer - Landscape','Designer - Residential (Interior Space Planner)','Drywall & Insulation','Drywall - Install',
    'Drywall - Repair','Batt, Rolled & Reflective Insulation','Blown-In Insulation','Soundproofing','Spray Foam Insulation','Decks, Porches & Patios',
	'Build a Deck or Porch','Build a Patio','Clean & Seal a Deck or Porch','Build an Arbor, Pergola, or Trellis','Build a Gazebo','Electrical','Outlets', 
	'Panels', 'Switches & Wiring','Cables', 'Networks & Telephones','Electronics', 'Computers & Home Media Systems','Appliances','Fans',
	'Energy Efficiency','Energy Efficient Home Heating','Home Insulation & Weatherstripping','Home Solar Energy','Energy Efficient Windows & Doors',
    'Home Energy Audit','More Energy Efficiency','Fences','Wood Fence - Install','Vinyl or PVC Fence - Install','Chain Link Fence - Install',
	'Wrought Iron Fence - Install','Aluminum or Steel Fence - Install','Flooring','Brick & Stone','Carpet','Hardwood','Laminate & Vinyl','Tile',
	'Foundations','Concrete Foundation - Install','Concrete Foundation - Repair or Raise','Foundation Drainage - Install or Replace','Foundation or Basement - Waterproofing',
	'Garage','Garage - Build','Garage - Remodel','Garage Door - Install or Replace','Garage Door Opener - Install','Garage Organizers - Install',
	'Green Home Improvement Projects','Home Solar Energy','Energy Efficient Windows & Doors','Home Insulation & Weatherstripping','Energy Efficient Appliances',
	'Energy Efficient Home Heating','Home Energy Audit','More Green Home Improvement Projects','Handyman Services','Carpentry','Gutters','Handyman for Multiple Small Projects',
	'Painting, Staining & Drywall','Electrical','Heating & Furnaces','Boilers & Radiators','Central Heating Systems','Electric Wall & Radiant Heat Systems',
	'Fans','Water Heaters','Home Construction','Additions','Major Remodels & Renovations','New Home Construction','Outbuildings & Structures','Site Preparation',
	'Home Inspectors & Appraisers','Appraisal - Real Estate','Appraisal - General','Home Inspector','Inspection - Roofing','Inspection - Waterproofing',
	'Home Theater','Home Theater System or Media Center - Install','Home Automation - Install or Service','Home Theater Surround Sound System - Insall',
	'Install, Repair or Conceal Home Theater Wiring','TV Wall Mount','Home Winterization','Home Insulation & Weatherstripping','Energy Efficient Home Heating',
    'Energy Efficient Windows & Doors','Chimney or Fireplace - Clean and Inspect','Winterize Roofing/Gutters','Winterize Lawn/Landscape','Moving & Storage','Painting & Staining',
	'Professional Moving Services','Storage','Waste Material & Junk Removal','Kitchen Remodeling','Kitchen Remodeling & Design','Cabinets & Countertops','Painting & Staining',
	'Plumbing','Tile','Landscape, Yard & Garden','Landscaping - Design & Installation','Landscaping - Maintenance of Lawn & Trees','Landscaping - Sprinkler Systems',
	'Pools & Water Features','Tree & Shrub Service','Yard & Garden','Painting & Staining','Exterior Painting or Staining','Interior Painting or Staining','
    Special Finishes','Paint Preparation','Paint Removal and Cleaning','Painting & Staining','Plumbing','Drain Clearing','Faucets, Fixtures & Pipes','
    Septic Systems','Sewers & Water Mains','Sprinkler Systems','Water Heaters','Roofing','Roofing - Install or Replace','Roofing - Repair','Roofing & Gutters - Clean','Gutters','Skylights','Siding','Vinyl Siding - Install','
    Vinyl Siding - Repair','Wood or Fiber Cement - Install','Metal Siding - Install','
    Traditional Stucco - Install','Swimming Pools, Spas, Hot Tubs & Saunas','Gazebos & Enclosures','Hot Tubs & Spas','Saunas','Swimming Pool Decks & Patios','Swimming Pools','Tile & Stone','Tile: Ceramic & Porcelain - Install','
    Tile: Natural Stone - Install','Pavers for Driveways & Floors - Install','Brick & Stone for Patios - Install','Tile, Stone, Grout - Clean','
    Pavers for Patios, Walks & Steps - Install','Walls & Ceilings','Painting & Texturing','Carpentry - Trim Work & Framing','Ceilings','
    Ceilings - Fans','Drywall & Insulation','Windows & Doors','Windows - Installation & Repair','Doors - Garage, Sliding, Glass','Hardware, Locks & Screens','Windows - Cleaning','Windows - Treatments'
),
    'items'=>4,
    'matcher'=>"js:function(item) {
        return ~item.toLowerCase().indexOf(this.query.toLowerCase());
    }",
));

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	
	public function actionClients()
	{
		$List = array('a','b','c');
	
		$this->render('clients',array('listDataProvider'=>$List));
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionMap()
	{
		$this->render('maps',array());
	}
}