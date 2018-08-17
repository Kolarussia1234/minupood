      <script type="text/javascript">
          {if $product['id_product_attribute']}
              {literal}
                var product_attribute={/literal}{$product['id_product_attribute']}{literal}
              {/literal}
          {/if}
          {literal}
            var product_id={/literal}{$product['id_product']}{literal}
          {/literal}

          console.log(product_id);
          console.log(product_attribute);

      </script>