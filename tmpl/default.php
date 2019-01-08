<?php
/**
 * @package    provenXpert
 *
 * @author     Christian Friedemann <c.friedemann@pixelstun.de>
 * @copyright  2019 pixelstun.de
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://pixelstun.de
 */

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
?>

<a href="<?php echo $domain; ?>">
	<?php echo 'provenXpert'; ?>
</a>