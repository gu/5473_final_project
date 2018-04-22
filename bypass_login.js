function sendToLogin() {
    document.location = 'login.html';
}

function set_user_info(user_info) {
	$('#intro_bio').text(user_info.bio);
	$('#intro_name').text(user_info.name);
	$('#intro_avatar').attr('src', user_info.avatar_url);
}

function set_tag_info(tags) {
	tags.forEach(function(tag) {
		var tag_elm = document.createElement('span');
		tag_elm.className = "w3-tag w3-light-grey w3-small w3-margin-bottom";
		tag_elm.innerHTML = tag;
		$('#tag_container').append(tag_elm);
	});
}

function set_blog_info(entries) {
	entries.forEach(function(entry) {		
		var entry_container = document.createElement('div');
		entry_container.className = "w3-card-4 w3-margin w3-white";

		var entry_img = document.createElement('img');
		entry_img.setAttribute('src', entry.img);
		entry_img.setAttribute('style', 'width:100%');
		entry_container.appendChild(entry_img);

		var entry_title_container = document.createElement('div');
		entry_title_container.className = "w3-container";
		var entry_title_header = document.createElement('h3');
		var entry_title_header_b = document.createElement('b');
		entry_title_header_b.innerHTML = entry.title;
		entry_title_header.appendChild(entry_title_header_b);
		entry_title_container.appendChild(entry_title_header);
		var entry_title_desc = document.createElement('h5');
		var entry_title_desc_s = document.createElement('span');
		entry_title_desc_s.className = "w3-opacity";
		entry_title_desc_s.innerHTML = entry.date;
		entry_title_desc.appendChild(entry_title_desc_s);
		entry_title_container.appendChild(entry_title_desc);
		entry_container.appendChild(entry_title_container);

		var entry_text_container = document.createElement('div');
		entry_text_container.className = "w3-container";
		var entry_text_container_text = document.createElement('p');
		entry_text_container_text.innerHTML = entry.text;
		entry_text_container.appendChild(entry_text_container_text);
		entry_container.appendChild(entry_text_container);
		
		
		$('#entry_container').append(entry_container);
	});
}

function getUserData(username) {
	console.log(username);
	$.ajax({
		type: 'GET',
		url: 'get_user_data.php',
		data: {username: username},
		success: function(data) {
			var user_data = JSON.parse(data);
			$('#welcome_name_text').text(user_data.introduction.name);
			$('title').text(user_data.introduction.name + "'s Blogpage");
			set_user_info(user_data.introduction);
			set_tag_info(user_data.tags);
			set_blog_info(user_data.blog_entries);
		}
	});
}

if (!document.cookie) {
    sendToLogin();
} else {
    var cookie_string = document.cookie;
    var cookie_string_split = cookie_string.split("=");
    var session_key = '';
    if (cookie_string_split[0] == 'key') {
        session_key = cookie_string_split[1];
    }
	console.log(session_key);
    $.ajax({
        type: 'POST',
        url: 'try_login.php',
        data: {key: session_key},
        success: function(data) {
		if (data == 'invalid') {
			sendToLogin();
		} else {
	console.log(data);
			getUserData(data.split('_')[1]);
		}
        }
    });
}
