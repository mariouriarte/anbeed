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
        
        // preguntamos por el nivel en el que estamos
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $env = '_dev';
        } else if($environment == 'prod')
        {
            $env = '';
        }
        
        
        $menu_admin =
            '<li class="first-list"><a href="/"><span>adm</span></a>
                <div><ul>
                    <li><a href="/adm' . $env . '.php/usuarios"><span>Usuarios</span></a></li>
                    <li><a href="/portal_dev.php"><span>Cambiar a modo "DEV"</span></a>
                    <li><a href="/portal.php"><span>Cambiar a modo "PROD"</span></a>
                </ul></div>
            </li>';

        // armando el menu
        $html = '
            <ul class="menu header-menu">
                <li class="first-list"><a href="/portal' . $env . '.php"><span>anbeed</span></a></li>
                '. ($user->hasCredential('admin') ? $menu_admin : '') .'
            </ul>';
        
        return $html;
    }
}
?>