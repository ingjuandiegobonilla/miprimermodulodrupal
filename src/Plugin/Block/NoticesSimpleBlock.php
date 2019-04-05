<?php
/**
 * @file
 * Contains \Drupal\noticias\Plugin\Block\NoticiasSimpleBlock.
 */
namespace Drupal\notices\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;


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
     public function blockForm($form, FormStateInterface $form_state) {
    $form['noticias_block_string_text'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Contenido del bloque'),
      '#description' => $this->t('Este texto aparecerá en el bloque.'),
      '#default_value' => $this->configuration['noticias_block_string'],
    );
    return $form;
  }
      /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['noticias_block_string']
      = $form_state->getValue('noticias_block_string_text');
  }
  
        
    
    /**
     * {@inheritdoc}
     */
    
    public function build(){
     /*   
     $node = entity_load("node", 1);
     $contenido = $this->t("<ul><li>%titulo</li></ul>", ["%titulo" => $node->title[0]->value]);
     */
        
     $contenido = "<ul>";

    $query = \Drupal::entityQuery('node')
     ->condition('type', 'noticia')
    ->condition('status', 1);

    $nids = $query->execute();

    $nodes = entity_load_multiple('node', $nids);
    foreach ($nodes as $node) {
      $contenido .= "<li>".$node->title[0]->value."</li>";
    }


    $contenido .= "</ul>";
        
        
        return array(
           '#type' => 'markup',
            '#markup' => $this->configuration['noticias_block_string'].$contenido,
        );
    }
    
}
