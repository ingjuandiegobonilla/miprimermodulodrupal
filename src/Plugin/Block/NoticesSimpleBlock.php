<?php
/**
 * @file
 * Contains \Drupal\noticias\Plugin\Block\NoticiasSimpleBlock.
 */
namespace Drupal\notices\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Description of NoticesSimpleBlock
 *
 * @author HACEB
 */
/**
 *
 * @Block(
 *   id = "noticias_simple",
 *   admin_label = @Translation("Ejemplo: block de noticias")
 * )
 */
class NoticesSimpleBlock extends BlockBase {
    //put your code here
    
    public function defaultConfiguration(){
     return array(
//       'noticias_block_string' => $this->t('Valor por defecto. Este bloque se creó a las %time', array('%time' => date('c'))),
         'noticias_block_string' => $this->t('Valor por defecto. Este bloque se creó a las %time', array('%time' => date('c'))),
         
         
     );   
        
        
    }
    /**
     * {@inheritdoc}
     */
    
    public function build(){
        
        return array(
           '#type' => 'markup',
            '#markup' => $this->configuration['noticias_block_string'],
        );
    }
    
}
