<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<div class="feedback">
	<div class="dummy"></div>
</div>

<script src="jquery-3.3.1.js"></script>
<script type="text/javascript">
	var promise = $.ajax(
		url: "server/admin.php",
		method: "GET",
		data: {feedback: 1},
		success: (data, textStatus, jqXHR) => {
			if (data["error"]){
				resolve(data["feedback"]);
			}
		}
	);

	promise.then((feedback_list) => {

	});

	function renderFeedback(feedback) {
		var item = "<div class='feedback_item'>" + 
						"<div class='user-label'>From: " + feedback.email + "</div>" +
						"<a class='del-btn' href='server/'>Delete"
		$().
	}

</script>
</body>
</html>