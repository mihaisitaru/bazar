{"filter":false,"title":"updateUser.php","tooltip":"/php/work3/api/user/updateUser.php","undoManager":{"mark":14,"position":14,"stack":[[{"start":{"row":13,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["","if($_POST['password']!= $_POST['passwordConfirm']) {","        return throwJSONError(_ERROR_PASSWORDS_DO_NOT_MATCH_CODE, _ERROR_PASSWORDS_DO_NOT_MATCH_MSG);","}"],"id":2}],[{"start":{"row":12,"column":2},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":14,"column":0},"end":{"row":17,"column":6},"action":"remove","lines":["if(checkEmailExist($_POST['email'], $_POST['userId'])) {","    throwJSONError(_ERROR_EMAIL_ALREADY_EXISTS_CODE, _ERROR_EMAIL_ALREADY_EXISTS_MSG);","} ","else {"],"id":4}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["}"],"id":6}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "],"id":7},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":50},"action":"remove","lines":["EMAIL_OR_PASSWORD"],"id":8},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["D"]}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["E"],"id":9}],[{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["T"],"id":10}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["A"],"id":11}],[{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["I"],"id":12}],[{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["L"],"id":13}],[{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["S"],"id":14}],[{"start":{"row":11,"column":61},"end":{"row":11,"column":100},"action":"remove","lines":["_ERROR_EMAIL_OR_PASSWORD_NOT_SPECIFIED_"],"id":15},{"start":{"row":11,"column":61},"end":{"row":11,"column":90},"action":"insert","lines":["_ERROR_DETAILS_NOT_SPECIFIED_"]}],[{"start":{"row":7,"column":15},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":16}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":15},"end":{"row":7,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1500313654350,"hash":"32d3a20bda353b5d27057f49054bf1c4e736c048"}