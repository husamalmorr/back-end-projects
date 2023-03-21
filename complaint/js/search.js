
jQuery(document).ready(function(){
    jQuery(".span6").ajaxlivesearch({
        loaded_at: <?php echo time(); ?>,
        token: <?php echo "'" . $handler->getToken() . "'"; ?>,
        max_input: <?php echo Config::getConfig('maxInputLength'); ?>,
        onResultClick: function(e, data) {
            // get the index 0 (first column) value
            var selectedOne = jQuery(data.selected).find('td').eq('0').text();

            // set the input value
            jQuery('#student').val(selectedOne);

            // hide the result
            jQuery("#student").trigger('ajaxlivesearch:hide_result');
        },
        onResultEnter: function(e, data) {
            // do whatever you want
            // jQuery("#student").trigger('ajaxlivesearch:search', {query: 'test'});
        },
        onAjaxComplete: function(e, data) {

        }
    });
});
