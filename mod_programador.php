<?php
/**
* @version $Id:  mod_programador.php, V1.0.0  2009-01-01 $
* @module programador
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* Adaptado do módulo vivi_code do Serra Antonio (tonio@vivigrosseto.it) http://www.vivigrosseto.it/ 
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Uri\Uri;

class programador
{
	function pensamento_aleatorio(){
		$f_contents = file ('modules/mod_programador/mod_programador.txt');
		srand ((double)microtime()*1000000);
		$linha_aleatoria = $f_contents[ rand (0, (count ($f_contents) - 1)) ];
		return $linha_aleatoria;
	}
}
$aleatorio = new programador();
print '<div id="programador">'.$aleatorio->pensamento_aleatorio().'</div></ br>';
$prog = Uri::root() . 'modules/mod_programador/Programadores.pdf';
print "<div id=\"programador\"><a href=\"$prog\" target=\"_blank\">Download</a></div>";
?>
