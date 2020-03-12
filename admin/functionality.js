function warnUser(uname, banreason = "NOT DEFINED", isResolving = false, reportid = 0){
	$.ajax({
		type: "POST",
		url: "functionalities.php",
		data: {
			task: 1,
			resolving: isResolving,
			rid: reportid,
			username: uname,
			reason: banreason
		},
		success: (data) => {
			alert(data);
			window.location.reload();
		}
	});
}

function banUser(uname, banreason = "NOT DEFINED", isResolving = false, reportid = 0) {
	$.ajax({
		type: "POST",
		url: "functionalities.php",
		data: {
			task: 2,
			resolving: isResolving,
			rid: reportid,
			username: uname,
			reason: banreason
		},
		success: (data) => {
			alert(data);
			window.location.reload();
		}
	});
}

function deleteUser(uname) {
	$.ajax({
		type: "POST",
		url: "functionalities.php",
		data: {
			task: 3,
			username: uname
		},
		success: (data) => {
			alert(data);
			window.location.reload();
		}
	});
}

function privateStory(storyid, isResolving = false, reportid = 0) {
	$.ajax({
		type: "POST",
		url: "functionalities.php",
		data: {
			task: 4,
			resolving: isResolving,
			rid: reportid,
			sid: storyid
		},
		success: (data) => {
			alert(data);
			window.location.reload();
		}
	});
}

function editNews(newsid) {
	window.location.href = `editnews.php?newsid=${newsid}`;
}

function deleteNews(newsid) {
	$.ajax({
		type: "POST",
		url: "functionalities.php",
		data: {
			task: 5,
			nid: newsid
		},
		success: (data) => {
			alert(data);
			window.location.reload();
		}
	});
}