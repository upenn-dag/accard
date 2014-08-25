<?php

/**
 * This file is part of the Accard package.
 *
 * (c) University of Pennsylvania
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */
namespace Accard\Component\Core\Model;

use Accard\Component\Behavior\Model\SmokingBehavior as BaseSmokingBehavior;
use DateTime;

/**
 * Accard SmokingBehavior model.
 *
 * @author Frank Bardon Jr. <bardonf@upenn.edu>
 * @author Dylan Pierce <piercedy@upenn.edu>
 */
class SmokingBehavior extends BaseSmokingBehavior implements SmokingBehaviorInterface
{
    // Traits
    use BehaviorTrait;
}
