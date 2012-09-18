<?php 
	$PAGE_ID = 'events';
	$PAGE_TITLE = 'Recent Events';
	require('_header.php'); 
	
	include_once "lib/markdown.php";
	require('lib/Smarty-3.1.11/libs/Smarty.class.php');
	function Deserialize($files){
		
			$events = array();
		foreach ($files as $filepath){
		
		$file = fopen($filepath,'r');
		
		$event = array();
		$pictures = array();

		$event['pictures'] = $pictures;

		$parsingEvents = false;
		$parsingContent = false;
		$currentContent = '';
		while(!feof($file)){

			$line = fgets($file);

			if($parsingContent){

				if(startsWith($line, '---')){

					$event['content'] = Markdown($currentContent);
					$parsingContent = false;
					$currentContent = '';
				}else{			
					$currentContent .= $line;	
				}

			}else if(startsWith($line,'# ')){

				if($parsingEvents){
					array_push($events,$event);
					$event = array();
					$event['pictures'] = array();
				}else{
					$parsingEvents = true;
				}

				$eventNameArray = explode('# ',$line);
				$eventName = $eventNameArray[1];
				$event['name'] = trim($eventName);

			} else if(startsWith($line, '## ')){

				$eventDateArray = explode('## ',$line);
				$eventDate = $eventDateArray[1];
				$event['date'] = trim($eventDate);

			} else if(startsWith($line, '*')){

				$picLinkArray = explode('* ',$line);
				$picLink = $picLinkArray[1];
				array_push($event['pictures'], trim($picLink));

			} else if(startsWith($line,'---')){
				$parsingContent = true;
			}

		}
		
		array_push($events,$event);
		fclose($file);


	}
		return $events;
	}


	function startsWith($haystack, $needle) {

	    return strpos($haystack, $needle) === 0;
	}
	
	

//	$file = fopen("md/event.md",'r');
	$files = glob("events/*.md");
	arsort($files);
	$events = Deserialize($files);

	$smarty = new Smarty();
	
	$smarty->setTemplateDir('smarty/templates');
	$smarty->setCompileDir('smarty/templates_c');
	$smarty->setCacheDir('smarty/cache');
	$smarty->setConfigDir('smarty/configs');

	$smarty->assign('events', $events);
	$smarty->display('events.tpl');
?>



<?php require('_footer.php'); ?>
