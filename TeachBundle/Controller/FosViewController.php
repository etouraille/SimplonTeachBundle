<?php
namespace Simplon\TeachBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View as ViewClass;
use FOS\RestBundle\Controller\Annotations\View;

class FosViewController
{
    /**
     * @Route("/name.{_format}", name="_extra_noname", defaults={"_format"="html"}),
     * @Route("/name/{name}.{_format}", name="_extra_name", defaults={"_format"="html"})
     * @View()
     */
    public function indexAction($name = null)
    {
        
        $ret = ['firstname' => 'John'];

        if( $name ) {
            $ret = array_merge( $ret, ['lastname' => $name ]);
        }
        
        return $ret;
    }
}