<?php

class CalendarHelper extends AppHelper {

/**
 * uses HTML helper
 */
	
	public $helpers = array('Html', 'Form');

/**
 * displays a tabular calendar
 *
 * @param $date date in yyyy-mm-dd format to show month for
 *
 * @param $option array of options:
 */
 	public function display($date = null, $options=array(), $events=array()) {

		if(!empty($this->request->data['Calendar'])) {
			$date = $this->request->data['Calendar']['year']['year'] . '-' . $this->request->data['Calendar']['month']['month'] . '-1';
		}

		// set date parts
		$date = empty($date)?date('Y-m-d'):$date;
		$timestring = strtotime($date);
		$month = date('m', $timestring);
		$year = date('Y', $timestring);

		// @TODO make this a property that can be configured (i18n)
		$headings = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

		$calendar = '<table class="table">';

		if(!empty($options['dateSelect'])) { 
			$calendar .= $this->Form->create();
			$calendar .= $this->Form->input('Calendar.year', array('type'=>'date','dateFormat'=>'Y'));
			$calendar .= $this->Form->input('Calendar.month', array('type'=>'date','dateFormat'=>'M'));
			$calendar .= $this->Form->button(__('&raquo;'),array('type'=>'date','dateFormat'=>'M'));
			$calendar .= $this->Form->end();
		}


		/* construction du Haut du tableau calendar */
		$calendar .= $this->Html->tableHeaders($headings);

		/* variable utile a la construction du calendrier ... */
		$premier_jour_mois_chiffre = date('w',mktime(0,0,0,$month,1,$year));
		$nb_j_mois = date('t',mktime(0,0,0,$month,1,$year));
		$j_cette_semaine = 1;
		$mavar=7-$premier_jour_mois_chiffre;
		$day_counter = 0;
		$dates_array = array();

		/* début ligne de la première semaine */
		$calendar.= '<tr class="calendar-row">';

		/* les jours vide */
		if ($premier_jour_mois_chiffre==0) {
			for($x = 0; $x < 6; $x++) 
			{
				$calendar.= '<td class="calendar-day empty-day"> </td>';
				$j_cette_semaine++;
			}
		}else{
			for($x = 1; $x < $premier_jour_mois_chiffre; $x++) 
			{
				$calendar.= '<td class="calendar-day empty-day"> </td>';
				$j_cette_semaine++;
			}
		}


		/* jours de ce mois */
		for($list_day = 1; $list_day <= $nb_j_mois; $list_day++) {
			$calendar.= '<td class="calendar-day"><div class="calendar-day-number">'.$list_day;
			/* Le contenu de mes cellules */
			if(!empty($events[$list_day])) {
			
				$calendar .= '<ul class="list-unstyled">';
					
					foreach($events[$list_day] as $e) {
						$calendar .= '<li>'.$e.'</li>';
					}


				$calendar .= '</ul>';
			
			}
			
			$calendar .= '</td></div>';
			/* la fermeture de la ligne */
			if($mavar == 0) 
			{
				
				$calendar.= '</tr>';
				
				if(($day_counter+1) != $nb_j_mois) 
				{
				
					$calendar.= '<tr class="calendar-row">';
				}

				$mavar = 7;
				$j_cette_semaine = 0;
			}

			$j_cette_semaine++; $mavar--; $day_counter++;

		}

		/* Les jours vides de la fin */
		if($j_cette_semaine < 8)
		{
			for($x = 1; $x <= (8 - $j_cette_semaine); $x++) 
			{
				$calendar.= '<td class="calendar-day empty-day"> </td>';
			}
		}
		$calendar.= '</tr></table>';

		return $calendar;
	}

}
