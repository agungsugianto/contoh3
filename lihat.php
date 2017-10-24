<?php

require_once 'data.php';

$biodata1 = new biodata ('Agung','Bandung','XI RPL 1','menikah');



echo "Namanya.. " .$biodata1->get_nama() .'<br>'.' Tempat Lahir.. ' .$biodata1->get_tempat_lahir().'<br>'.' Kelas.. ' .$biodata1->get_kelas().'<br>'.' Status.. ' .$biodata1->get_status().'<br>'.'<br>';

$biodata1->set_nama1('Aceng');
$biodata1->set_tempat_lahir1('lembang');
$biodata1->set_kelas1('xi');
$biodata1->set_status1('kawin');

echo "Namanya.. " .$biodata1->get_nama1() .'<br>'.' Tempat Lahir.. ' .$biodata1->get_tempat_lahir1().'<br>'.' Kelas.. ' .$biodata1->get_kelas1().'<br>'.' Status.. ' .$biodata1->get_status1().'<br>'.'<br>';

$biodata1->set_nama2('Dika');
$biodata1->set_tempat_lahir2('sayati');
$biodata1->set_kelas2('xi rpl');
$biodata1->set_status2('menikah siri');

echo "Namanya.. " .$biodata1->get_nama2() .'<br>'.' Tempat Lahir.. ' .$biodata1->get_tempat_lahir2().'<br>'.' Kelas.. ' .$biodata1->get_kelas2().'<br>'.' Status.. ' .$biodata1->get_status2().'<br>'.'<br>';

$biodata1->set_nama3('Fidli');
$biodata1->set_tempat_lahir3('cibaduyut');
$biodata1->set_kelas3('xi TKR');
$biodata1->set_status3('DUDA');

echo "Namanya.. " .$biodata1->get_nama3() .'<br>'.' Tempat Lahir.. ' .$biodata1->get_tempat_lahir3().'<br>'.' Kelas.. ' .$biodata1->get_kelas3().'<br>'.' Status.. ' .$biodata1->get_status3().'<br>'.'<br>';

$biodata1->set_nama4('Dheri');
$biodata1->set_tempat_lahir4('ciodeng');
$biodata1->set_kelas4('xi tsm 2');
$biodata1->set_status4('jomblo ');

echo "Namanya.. " .$biodata1->get_nama4() .'<br>'.' Tempat Lahir.. ' .$biodata1->get_tempat_lahir4().'<br>'.' Kelas.. ' .$biodata1->get_kelas4().'<br>'.' Status.. ' .$biodata1->get_status4().'<br>';
?>