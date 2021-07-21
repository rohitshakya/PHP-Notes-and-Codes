$(document).ready(function() {
    $('product-list').DataTable();
    // Basic table example
    $('#basic-1').DataTable({
        otherOptions: {},
        initComplete: function() {
            $(this.api().table().container()).find('input[type="search"]').parent().wrap('<form>').parent().attr('autocomplete', 'off');
        	
            $(this.api().table().container()).find('input[type="password"]').parent().wrap('<form>').parent().attr('autocomplete', 'off');
        
        }
    });
});