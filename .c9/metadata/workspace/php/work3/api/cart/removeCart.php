{"filter":false,"title":"removeCart.php","tooltip":"/php/work3/api/cart/removeCart.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":14,"column":5},"action":"insert","lines":["<?php","","require_once(__DIR__.'/../../config/general.php');","require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');","require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');","returnHeader();","","","","    if(removeCart() === true) {","        echoJSONOutput();","    }","    else {","        throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);","    }"],"id":1}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":2},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":12,"column":19},"end":{"row":12,"column":46},"action":"remove","lines":["_ERROR_CATEGORY_NOT_CREATED"],"id":6},{"start":{"row":12,"column":19},"end":{"row":12,"column":47},"action":"insert","lines":["_ERROR_CART_NOT_EMPTIED_OUT_"]}],[{"start":{"row":12,"column":47},"end":{"row":12,"column":48},"action":"remove","lines":["_"],"id":7}],[{"start":{"row":12,"column":53},"end":{"row":12,"column":81},"action":"remove","lines":["_ERROR_CATEGORY_NOT_CREATED_"],"id":8},{"start":{"row":12,"column":53},"end":{"row":12,"column":81},"action":"insert","lines":["_ERROR_CART_NOT_EMPTIED_OUT_"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":21},"end":{"row":9,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1500404406684,"hash":"2bf6f1a68c622af62e9a02190310f79b512c483a"}