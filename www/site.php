<?php
  if ($argc !== 2) {
    
    echo "Usage: php hello.php <name>.\n";
    exit(1);

  }
  
  //writing out the date in PHP 
  //given raw data
  $raw_date = '22. 11. 1968';

  //create the start date
  $start = DateTime::createFromFormat('d. m. Y', $raw_date);

  //return the date in the format specified
  echo 'Start date: ' . $start->format('Y-m-d') . "\n";

  $name = $argv[1];
  echo "Hello, $name\n";

  // create a copy of $start and add one month and 6 days
  $end = clone $start;

  $end->add(new DateInterval('P1M6D'));

  $diff = $end->diff($start);

  echo 'Difference: ' . $diff->format('%m month, %d days (total: %a days)') . "\n";

  // Difference: 1 month, 6 days (total: 37 days)

  $periodInterval = DateInterval::createFromDateString('first thursday');
  $periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);

  //loop through each date
  foreach ($periodIterator as $date) {

    //output each date in the period

    echo $date -> format('Y-m-d') . ' ';
  }

?>
