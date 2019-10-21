<?php
 
class Calendar
{

    /********************* PROPERTY ********************/
    private $dayLabels = array("Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim");

    private $currentYear = 0;

    private $currentMonth = 0;

    private $currentDay = 0;

    private $currentDate = null;

    private $daysInMonth = 0;


    public $active_date = "active-date";
    public $inactive_date = "inactive-date";


    /********************* PUBLIC **********************/

    /**
     * print out the calendar
     */
    public function show()
    {
        $year  = null;

        $month = null;

        if (null == $year && isset($_GET['year'])) {

            $year = $_GET['year'];
        } else if (null == $year) {

            $year = date("Y", time());
        }

        if (null == $month && isset($_GET['month'])) {

            $month = $_GET['month'];
        } else if (null == $month) {

            $month = date("m", time());
        }

        $this->currentYear = $year;

        $this->currentMonth = $month;

        $this->daysInMonth = $this->_daysInMonth($month, $year);

        $content = '<div id="calendar">' .
            '<div class="box">' .
            '<span class="title">' . date('Y M', strtotime($this->currentYear . '-' . $this->currentMonth . '-1')) . '</span>' .
            '</div>' .
            '<div class="box-content">' .
            '<ul class="label">' . $this->_createLabels() . '</ul>';
        $content .= '<div class="clear"></div>';
        $content .= '<ul class="dates">';

        $weeksInMonth = $this->_weeksInMonth($month, $year);
        // Create weeks in a month
        for ($i = 0; $i < $weeksInMonth; $i++) {

            //Create days in a week
            for ($j = 1; $j <= 7; $j++) {
                $content .= $this->_showDay($i * 7 + $j);
            }
        }

      return  $content .= '</ul><div class="clear"></div></div></div>';

    }

    /********************* PRIVATE **********************/
    /**
     * create the li element for ul
     */
    public  function _showDay($cellNumber)
    {

        if ($this->currentDay == 0) {

            $firstDayOfTheWeek = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-01'));

            if (intval($cellNumber) == intval($firstDayOfTheWeek)) {

                $this->currentDay = 1;
            }
        }

        if (($this->currentDay != 0) && ($this->currentDay <= $this->daysInMonth)) {

            $this->currentDate = date('Y-m-d', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));

            $cellContent = $this->currentDay;

            $this->currentDay++;
        } else {

            $this->currentDate = null;

            $cellContent = null;
        }
       
       $li = '<li data-date="' . $this->currentDate . '" class=" ';
        if( in_array($cellNumber, [6,7,13,14,20,21,27,28]) == 1 || $this->currentDate == NULL){
           $li.= $this->inactive_date;
        }else{
           $li.= $this->active_date;

        }

        $li.= ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) . ($cellContent == null ? 'mask' : '') . ($this->currentDay - 1) . '">' . $cellContent . '</li>';
        return $li;
    }




    /**
     * create calendar week labels
     */
    private function _createLabels()
    {

        $content = '';

        foreach ($this->dayLabels as $index => $label) {

            $content .= '<li class="' . ($label == 6 ? 'end title' : 'start title') . ' title">' . $label  . '</li>';
        }

        return $content;
    }



    /**
     * calculate number of weeks in a particular month
     */
    private function _weeksInMonth($month = null, $year = null)
    {

        if (null == ($year)) {
            $year =  date("Y", time());
        }

        if (null == ($month)) {
            $month = date("m", time());
        }

        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month, $year);

        $numOfweeks = ($daysInMonths % 7 == 0 ? 0 : 1) + intval($daysInMonths / 7);

        $monthEndingDay = date('N', strtotime($year . '-' . $month . '-' . $daysInMonths));

        $monthStartDay = date('N', strtotime($year . '-' . $month . '-01'));

        if ($monthEndingDay < $monthStartDay) {

            $numOfweeks++;
        }

        return $numOfweeks;
    }

    /**
     * calculate number of days in a particular month
     */
    private function _daysInMonth($month = null, $year = null)
    {

        if (null == ($year)) {
            $year =  date("Y", time());
        }


        if (null == ($month)) {
            $month = date("m", time());
        }


        return date('t', strtotime($year . '-' . $month . '-01'));
    }
}
