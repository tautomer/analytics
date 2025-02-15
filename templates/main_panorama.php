<?php
/**
 * Analytics
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the LICENSE.md file.
 *
 * @author Marcel Scherello <analytics@scherello.de>
 * @copyright 2019-2022 Marcel Scherello
 */

use OCP\Util;

Util::addStyle('analytics', 'style');
Util::addStyle('analytics', 'sharetabview');
Util::addStyle('analytics', '3rdParty/datatables.min');
Util::addStyle('files_sharing', 'icons');
Util::addStyle('analytics', 'print');
Util::addScript('analytics', 'panorama');
Util::addScript('analytics', 'navigation');
Util::addScript('analytics', '3rdParty/datatables.min');
Util::addScript('analytics', '3rdParty/chart.min');
Util::addScript('analytics', '3rdParty/chartjs-adapter-moment');
Util::addScript('analytics', '3rdParty/chartjs-plugin-datalabels.min');
Util::addScript('analytics', '3rdParty/chartjs-plugin-zoom.min');
Util::addScript('analytics', '3rdParty/moment');
Util::addScript('analytics', '3rdParty/cloner');
Util::addScript('analytics', 'userGuidance');
Util::addScript('analytics', '3rdParty/jspdf.umd.min');
Util::addScript('analytics', '3rdParty/html2canvas.min');
?>

<div id="app-navigation">
    <?php print_unescaped($this->inc('part.navigation')); ?>
    <?php print_unescaped($this->inc('part.settings')); ?>
</div>

<div id="app-content">
    <div id="loading">
        <i class="ioc-spinner ioc-spin"></i>
    </div>
    <?php print_unescaped($this->inc('part.content_panorama')); ?>
</div>
<?php print_unescaped($this->inc('part.sidebar')); ?>
<div>
    <?php print_unescaped($this->inc('part.templates')); ?>
</div>
