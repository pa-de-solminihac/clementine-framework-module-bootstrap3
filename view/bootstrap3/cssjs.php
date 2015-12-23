<?php
$cssjs = Clementine::getModel('cssjs');
$cssjs->register_foot('jquery', array(
    'src' => Clementine::getHelper('jquery')->getUrl()
));
// bootstrap3
$cssjs->register_foot('bootstrap3', array(
    'src' => __WWW_ROOT_BOOTSTRAP3__ . '/skin/js/bootstrap.min.js',
));
$cssjs->register_css('bootstrap3', array(
    'src' => __WWW_ROOT_BOOTSTRAP3__ . '/skin/css/bootstrap.min.css'
));
// bootstrap3 default theme : you can call register_css('bootstrap3theme', ...) earlier if you want to override it
$cssjs->register_css('bootstrap3theme', array(
    'src' => __WWW_ROOT_BOOTSTRAP3__ . '/skin/css/bootstrap-theme.min.css',
));
// datatables bootstrap integration, only if datatables is registered
if ($cssjs->is_registered_foot('jquery.dataTables')) {
    $cssjs->register_foot('bootstrap3datatables', array(
        'src' => __WWW_ROOT_JQUERYDATATABLES__ . '/skin/js/dataTables.bootstrap.js',
    ));
    $cssjs->register_css('bootstrap3datatables', array(
        'src' => __WWW_ROOT_JQUERYDATATABLES__ . '/skin/css/dataTables.bootstrap.css'
    ));
}
// adaptations clementine
$cssjs->register_css('bootstrap3skin', array(
    'src' => __WWW_ROOT_BOOTSTRAP3__ . '/skin/css/clementine-style.css'
));
