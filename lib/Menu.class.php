<?php
/*
 * file: API.class.php
 * @autor: Mario Arturo Uriarte Marin
 *
 * Metodos:
 *    navegador: $active [obligado] es la pagina en la que está el usuario
 *               $link   [opcional] url xhtml
 *    getMenu: obtiene el menu del sistema, este sera armado segun las credenciales
 *             de los usuarios.
 */
class Menu
{
    static public function getMenu()
    {
        $instancia = sfContext::getInstance();
        //$accion = $instancia->getRequest()->getParameterHolder()->get('action');
        //$app = sfConfig::get('sf_app');
        
        $user = $instancia->getUser();
        
        
        /*gardamos la foto si tuviera el usuario*/
        $foto = $user->getGuardUser()->Persona->getFoto();
        if($foto == null || $foto == '')
            $foto = 'default_user.gif';
        $user->setAttribute('foto', $foto);
        
        
        // preguntamos por el nivel en el que estamos
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $env = '_dev';
        } else if($environment == 'prod')
        {
            $env = '';
        }
        
//        $menu_admin =
//            '<li class="first-list"><a href="/"><span>Administración</span></a>
//                <div><ul>
//                    <li><a href="/adm' . $env . '.php/persona_usuario   "><span>Usuarios</span></a></li>
//                    <li><a href="/portal_dev.php"><span>Cambiar a modo "DEV"</span></a>
//                    <li><a href="/portal.php"><span>Cambiar a modo "PROD"</span></a>
//                </ul></div>
//            </li>';
        /*listado de empresas*/
        $menu_list_empresa = '<li class="first-list"><a href="/farmaceutica' . $env .'.php/empresas"><span>Empresas</span></a></li>';
        
        
        $empresa = sfContext::getInstance()->getUser()->getAttribute('empresa');
        $menu_empresa = "";
        if(sfContext::getInstance()->getUser()->hasAttribute('empresa'))
        {
            $empresa = sfContext::getInstance()->getUser()->getAttribute('empresa');
            $menu_empresa = '<li class="first-list"><a href="/farmaceutica' . $env .'.php/empresas/'.$empresa->getId().'/administrarEmpresa"><span>Administrar Empresa</span></a></li>';
        }
        // armando el menu
//        $html = '
//            <ul class="menu header-menu">
//                <li class="first-list"><a href="/portal' . $env . '.php"><span>Portal</span></a></li>
//                '. ($user->hasCredential('admin') ? $menu_admin : '') .'
//                '.$menu_list_empresa.'    
//                '.$menu_empresa.'    
//            </ul>';
        $html = '
            <ul class="menu header-menu">

                <li class="first-list"><a href="/portal' . $env . '.php"><span>Portal</span></a></li>
                '.$menu_list_empresa.'    
                '.$menu_empresa.'    
            </ul>';
        return $html;
    }
    
    static public function getMenuCliente()
    {
        $instancia = sfContext::getInstance();
        //$accion = $instancia->getRequest()->getParameterHolder()->get('action');
        //$app = sfConfig::get('sf_app');
        
        $user = $instancia->getUser();
        
        /*gardamos la foto si tuviera el usuario*/
        $foto = $user->getGuardUser()->Persona->getFoto();
        if($foto == null || $foto == '')
            $foto = 'default_user.gif';
        $user->setAttribute('foto', $foto);
        
        // preguntamos por el nivel en el que estamos
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $env = '_dev';
        } else if($environment == 'prod')
        {
            $env = '';
        }
        
        
//        $menu_admin =
//            '<li class="first-list"><a href="/"><span>adm</span></a>
//                <div><ul>
//                    <li><a href="/cliente_dev.php"><span>Cambiar a modo "DEV"</span></a>
//                    <li><a href="/cliente.php"><span>Cambiar a modo "PROD"</span></a>
//                </ul></div>
//            </li>';
        
        // armando el menu  <--- jajajaja (._.)
        $html = '
            <ul class="menu header-menu">
                <li class="first-list"><a href="/cliente' . $env . '.php"><span>Portal</span></a></li>
                <li class="first-list"><a href="/web'. $env . '.php"><span>Home</span></a></li>
                
            </ul>';

        return $html;
    }
}
?>