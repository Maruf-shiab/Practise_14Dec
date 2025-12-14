<?php
function applyDiscount ($amount, $coupon)
{if($coupon === "Free 20")
return ($amount * 0.20);
}
return 0;

?>
