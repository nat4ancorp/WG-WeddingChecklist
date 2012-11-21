<!-- FOR EACH ITEM (TABLE) YOU WANT TO CREATE YOU NEED TO USE THE FOLLOW CODE AND REMOVE COMMENTS WHERE NECESSARY: -->

<!-- TEMPLATE FOR TABLE -->
<h1>Balance Payment Tracking Chart</h1>
<div id="_table">
	<!-- ITEMS CONTAINER - PUT THE ITEMS IN THIS AREA ACCORDING TO LEFT, MID, RIGHT COLUMN -->
	<!-- USE THE FOLLOWING TEMPLATE AS A GUIDELINE FOR EACH ROW (ITEM) YOU WOULD LIKE TO ADD TO THE TABLE -->
    <div class="_tablerow">
    	<div class="_tablecol underline">
            <div class="_item oneline cell font-small">Date</div>
            <div class="_item oneline cell font-small">Payment Made To</div>
            <div class="_item oneline cell font-small">Amount of Payment</div>
            <div class="_item oneline cell font-small">Method of Payment</div>
            <div class="_item oneline cell font-small">Balance Due</div>
            <div class="_item oneline cell font-small">Next Pay Due</div>    
        </div><!-- end of _tablecol -->    
    </div> <!-- end of _tablerow -->
    
    <?php
	$rows=25;
	for($i=1; $i<=$rows; $i++){
		echo "<div class=\"_tablerow underline\">
    		<div class=\"_tablecol\">
            	<div class=\"_item oneline cell\"><input type=\"text\" id=\"_item_date_{$i}\" name=\"_item_date_{$i}\" /></div>
            	<div class=\"_item oneline cell\"><input type=\"text\" id=\"_item_paymentmadeto_{$i}\" name=\"_item_paymentmadeto_{$i}\" /></div>
			    <div class=\"_item oneline cell\"><input type=\"text\" id=\"_item_amountofpayment_{$i}\" name=\"_item_amountofpayment_{$i}\" /></div>
            	<div class=\"_item oneline cell\"><input type=\"text\" id=\"_item_method ofpayment_{$i}\" name=\"_item_methodofpayment_{$i}\" /></div>
        	    <div class=\"_item oneline cell\"><input type=\"text\" id=\"_item_balancedue_{$i}\" name=\"_item_balancedue_{$i}\" /></div>
      	        <div class=\"_item oneline cell\"><input type=\"text\" id=\"_item_nextpaydue_{$i}\" name=\"_item_nextpaydue_{$i}\" /></div>    
        	</div><!-- end of _tablecol -->    
    	</div> <!-- end of _tablerow -->";
	}
	?>
    
    <!-- END ITEMS CONTAINER -->
</div> <!-- end of _table -->
<!-- END TEMPLATE -->