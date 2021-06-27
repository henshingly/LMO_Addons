<?php
/** Liga Manager Online 4.0.2
  *
  * http://lmo.sourceforge.net/
  *
  * Dieses Programm ist freie Software. Sie k�nnen es unter den Bedingungen
  * der GNU General Public License, wie von der Free Software Foundation
  * ver�ffentlicht, weitergeben und/oder modifizieren, entweder gem�� Version 2
  * der Lizenz oder (nach Ihrer Option) jeder sp�teren Version.
  *
  * Die Ver�ffentlichung dieses Programms erfolgt in der Hoffnung,
  * da� es Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE,
  * sogar ohne die implizite Garantie der MARKTREIFE oder der
  * VERWENDBARKEIT F�R EINEN BESTIMMTEN ZWECK. Details finden Sie in
  * der GNU General Public License.
  *
  * Sie sollten ein Exemplar der GNU General Public License zusammen mit
  * diesem Programm erhalten haben. Falls nicht, schreiben Sie an die
  * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110, USA.
  *
  *
  * $Id: ini.php $
  *
  * @author
  * @package vereinsplan
  * @version 1.3.0
	*
 	*/
if (!defined('VEREINSPLAN_VERSIONSNUMMER'))  define('VEREINSPLAN_VERSIONSNUMMER','1.3.0');

if (!defined('VEREINSPLAN_VERSION'))  define('VEREINSPLAN_VERSION','[<acronym title="Vereinsplan '.VEREINSPLAN_VERSIONSNUMMER.' &copy; LMO-Group">&copy;</acronym>]');
require_once(PATH_TO_ADDONDIR."/classlib/ini.php");

if (!defined('VEREINSPLAN_VERSION')) define('VEREINSPLAN_VERSION',"VEREINSPLAN Version ".VEREINSPLAN_VERSION." Addon for LMO 4<BR>Copyright &#169; 2005 <a href=\"http://www.liga-manager-online.de/\">LMO-Group</a>");
?>