<?php

declare(strict_types=1);

namespace Rollpix\DiscountBadge\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class BadgePosition implements OptionSourceInterface
{
    /**
     * @inheritDoc
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'after_old_price_inline', 'label' => __('After old price — same line')],
            ['value' => 'after_old_price_block', 'label' => __('After old price — new line')],
            ['value' => 'before_old_price_inline', 'label' => __('Before old price — same line')],
            ['value' => 'before_old_price_block', 'label' => __('Before old price — new line')],
            ['value' => 'over_image_top_left', 'label' => __('Over image — top left')],
            ['value' => 'over_image_top_right', 'label' => __('Over image — top right')],
            ['value' => 'over_image_bottom_left', 'label' => __('Over image — bottom left')],
            ['value' => 'over_image_bottom_right', 'label' => __('Over image — bottom right')],
            ['value' => 'below_price', 'label' => __('Below price block')],
        ];
    }
}
