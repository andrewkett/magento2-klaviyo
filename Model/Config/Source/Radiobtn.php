<?php
namespace Klaviyo\Reclaim\Model\Config\Source;
class Radiobtn implements \Magento\Framework\Option\ArrayInterface 
{
    public function toOptionArray()
    { 
        return 
        [
            [
                'value' => true, 
                'label' => __('Yes, I want Klaviyo to handle double opt-in')
            ], 
            [
                'value' => false, 
                'label' => __('No, I will use Magento\'s built-in tools for double opt-in')
            ],
        ];
	}
}