<?php
      add_filter('acf/prepare_field/name=cpf_ou_cnpj', 'prepare_field_cpf_cnpj');
      function prepare_field_cpf_cnpj( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
  
              $field['value'] = $user_meta['cpf_ou_cnpj'][0];
          }
          
          return $field;
      }
  
      add_filter('acf/prepare_field/name=nome_completo_ou_razao_social', 'prepare_field_nome');
      function prepare_field_nome( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
  
              $field['value'] = $user_meta['nome_completo_ou_razao_social'][0];
          }
          
          return $field;
      }
  
      add_filter('acf/prepare_field/name=e-mail', 'prepare_field_email');
      function prepare_field_email( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
  
              $field['value'] = $user_meta['e-mail'][0];
          }
          
          return $field;
      }
  
      add_filter('acf/prepare_field/name=servicos_de_interesse', 'prepare_field_servicos');
      function prepare_field_servicos( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
  
              
              $field['value'] = $user_meta['servicos_de_interesse'][0];
          }
          
          return $field;
      }