<?php
function io_css()
{
  wp_register_style('ion-style', get_template_directory_uri() . '/style.css', array(), false, false);
  wp_enqueue_style('ion-style');
}


add_action('wp_enqueue_scripts', 'io_css');


add_action('cmb2_admin_init', 'cmb2_fields_nosso_diferencial');
add_action('cmb2_admin_init', 'cmb2_fields_relatos');


// PÁGINA HOME
function cmb2_fields_relatos()
{
  $cmb = new_cmb2_box([
    'id' => 'home_inicio',
    'title' => 'Seção de Relatos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php'
    ],
  ]);

  $cmbCardRelato = $cmb->add_field([
    'name' => 'Relatos',
    'id' => 'home_section_relatos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Relatos {#}',
      'add_button' => 'Adicionar Relato',
      'remove_button' => 'Remover Relato',
      'closed' => true,
      'sortable' => true,
    ],
  ]);

  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Imagem',
    'id' => 'home_section_relatos_imagem',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'preview_size' => 'medium'
  ]);

  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Nome',
    'id' => 'home_section_relatos_nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Relato (Descrição)',
    'id' => 'home_section_relatos_link_corpo',
    'type' => 'textarea',
  ]);
  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Avaliação (Valor de 0 a 5',
    'id' => 'home_section_relatos_link_avaliacao',
    'type' => 'text_small',
  ]);
};

function cmb2_fields_nosso_diferencial()
{
  $cmb = new_cmb2_box([
    'id' => 'home_inicio_diferencial',
    'title' => 'Seção Diferencial',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php'
    ],
  ]);

  $cmbCardRelato = $cmb->add_field([
    'name' => 'Relatos',
    'id' => 'home_inicio_diferencial_section',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Diferencial {#}',
      'add_button' => 'Adicionar Diferencial',
      'remove_button' => 'Remover Diferencial',
      'closed' => true,
      'sortable' => true,
    ],
  ]);

  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Imagem',
    'id' => 'home_inicio_diferencial_section_imagem',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'preview_size' => 'medium'
  ]);

  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Título',
    'id' => 'home_inicio_diferencial_section_titulo',
    'type' => 'text',
  ]);

  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Resumo',
    'id' => 'home_inicio_diferencial_section_resumo',
    'type' => 'textarea',
  ]);
  $cmb->add_group_field($cmbCardRelato, [
    'name' => 'Link',
    'id' => 'home_inicio_diferencial_section_link',
    'type' => 'text',
  ]);
};
