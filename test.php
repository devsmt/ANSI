<?php
// TODO: rewrite using a test library
require_once('StringSequence.php');
$a_test = array(
	'ZZZ' => 'ZZZ',
	'   1000' => '   1000',
	'DASD231DASDA12Z' => 'DASD231DASDA12Z',
	'000000000000000' =>'000000000000000',
	'zzzzzzzzzzzzzzzz' => 'zzzzzzzzzzzzzzzz',
	'edwaeqweq31321eae2131ea19' => 'edwaeqweq31321eae2131ea19',
	'rweQW324eq321CDG' => 'rweQW324eq321CDG',
	'fdsad3!###' => 'fdsad3!###'
);

echo '<pre>';
foreach ($a_test as $v=>$expected) {
    echo '  '.$v. ' => '.StringSequence::increment($v). ' expected:'.$expected.'<br/><br/>';
}
echo '</pre>';

