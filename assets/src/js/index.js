import autosize from 'autosize';

(function($) {
  /**
   *  initialize_field
   *
   *  This function will initialize the $field.
   *
   *  @date	30/11/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	n/a
   */

  function initialize_field($field) {
    autosize($($field).find('textarea'));
  }

  function update_field($field) {
    autosize.update($($field).find('textarea'));
  }

  if (typeof acf.add_action !== 'undefined') {
    /*
        *  ready & append (ACF5)
        *
        *  These two events are called when a field element is ready for initizliation.
        *  - ready: on page load similar to $(document).ready()
        *  - append: on new DOM elements appended via repeater field or other AJAX calls
        *
        *  @param	n/a
        *  @return	n/a
        */

    acf.add_action('ready_field/type=commonmark', initialize_field);
    acf.add_action('append_field/type=commonmark', initialize_field);
    acf.add_action('show_field/type=commonmark', update_field);
  }
})(jQuery);
