<?php
$Module =& $Params['Module'];
$http = eZHTTPTool::instance();

if ( $Module->isCurrentAction( 'Exit' ) )
{
    return $Module->redirectToView( "menu" );
}

include_once( 'kernel/common/template.php' );
$tpl = eZTemplate::factory();

$tpl->setVariable( 'modulename', $Params['modulename'] );
$tpl->setVariable( 'view', $Params['view'] );

$Result = array();
$Result['left_menu'] = "design:parts/xrowadmin/menu.tpl";
$Result['content'] = $tpl->fetch( "design:xrowadmin/frame.tpl" );
$Result['path'] = array( array( 'url' => false,
                        'text' => 'Admin' ) );
?>