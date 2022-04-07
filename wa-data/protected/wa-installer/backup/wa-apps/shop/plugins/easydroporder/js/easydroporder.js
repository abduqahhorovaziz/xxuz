 
 
 $(document).bind("DOMNodeInserted", function(e) {
     
    var target = e.target;
	
    if ( ($(target).attr('id') == 's-orders') == true ) {
        
		$(target).find(".wf-actions").append(
		    '<li><a href="#" id="easydroporder_delete_all"><i class="icon16 broom"></i>Удалить безвозвратно</a></li>'
		);

		$("#easydroporder_delete_all").click(function(){
		    
			var orders = $.order_list.getSelectedOrders();
			$.ajax({
				method: "POST",
				data: {orders: orders},
				url: "?plugin=easydroporder&action=deleteAll",
				
				success: function(data){
					location.reload();
				}
				
			});

			return false;
		})
	}
});