<?php
/**
 * 
 * @file
 * Contains Drupal\notices\Plugin\Field\FieldFormatter\NoticesTextFormatter
 */
namespace Drupal\notices\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
/**
 * 
 * @FieldFormatter{
 *   id = "notices_Simple_text",
 *   module = "notices",
 *   lable = @Translation("Simple text-based formatter"),
 *   field_types = {
 *     "body"
 * }
 * }
 * 
 */

class NoticesTextFormatter extends FormatterBase{
    
    /**
     * {@inheritdoc}
     */
    public function viewElements (FieldItemInterface $items, $langcode){
        $elements = array();
        
        foreach ($items as $delta => $item){
            $elements[$delta] = array(
                '#type' => 'html_Tag',
                '#tag' => 'p',
                '#attributes' => array(
                 'style' => 'color: #ff0000',
                ),
                '#value' => $this->t('The color code in this field is @code', array('@code' => '#ff0000')),
           
            );   
        }
        return $elements;
    }
    
    
    
    
    
}

