<?php

/**
 * @copyright   Copyright © 2023 Blue-Coder.com. All rights reserved.
 * @license     GNU General Public License 2 or later, see COPYING.txt for license details.
 */

namespace Joomla\Plugin\Fields\Myfield;

use Joomla\Component\Fields\Administrator\Plugin\FieldsPlugin;

\defined('_JEXEC') or die;

/**
 * Fields Myfield Plugin
 *
 */
class Myfield extends FieldsPlugin
{   

      /**
     * Method to change the options Collection item.
     * Can be used to change labels.
     * Avoid changing other properties (than labels), if you are not aware of them.
     *
     * @param \Bluecoder\Component\Jfilters\Administrator\Model\Filter\Option\Collection $options
     * @return \Bluecoder\Component\Jfilters\Administrator\Model\Filter\Option\Collection
     */
    public function onJFiltersOptionsAfterCreation(\Bluecoder\Component\Jfilters\Administrator\Model\Filter\Option\Collection $options) 
    {

        // Make sure it is a field of that type
        if ($options->getFilterItem()->getAttributes()->get('type') !== 'myfield') {
            return $options;
        }

        /** @var \Bluecoder\Component\Jfilters\Administrator\Model\Filter\OptionInterface $option */
        foreach ($options as $option) {
            // Convert 'IT' label to 'Italy'
            if ($option->getLabel() == 'IT') {
                $option->setLabel('Italy');
            }
            // Convert 'GR' label to 'Greece'
            elseif ($option->getLabel() == 'GR') {
                $option->setLabel('Greece');
            }
        }

        return $options;
    }
}

