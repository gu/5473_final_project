<?php
	$username = $_GET['username'];

	$user_data = array(
		"user1" => array(
    "introduction" => array(
        "name" => "Frederick Gu",
        "bio" => "Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.",
        "avatar_url" => "https://www.w3schools.com/w3images/avatar2.png"
    ),
    "tags" => array("Travel", "IKEA", "Ideas", "News", "Sports", "Ohio", "OSU", "Buckeyes", "Food"),
    "blog_entries" => array(
        array(
            "title" => "How to enjoy life",
            "date" => "April 7, 2014",
            "img" => "https://wallpaperbrowse.com/media/images/3848765-wallpaper-images-download.jpg",
            "text" => "Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla."
        ),
        array(
            "title" => "How not to enjoy life",
            "date" => "March 17, 2013",
            "img" => "https://media.nature.com/w700/magazine-assets/d41586-017-08492-y/d41586-017-08492-y_15320844.jpg",
            "text" => "Nam eu mattis purus, id ultrices elit. In egestas suscipit massa, ac commodo diam. Aenean nisi enim, iaculis tincidunt neque a, pretium finibus massa. Etiam erat leo, suscipit porttitor eleifend quis, ornare ac mi. Duis eu est massa. Quisque commodo, urna tristique placerat tincidunt, lacus quam varius mauris, aliquet imperdiet tellus tortor consectetur diam. Sed hendrerit tempor sapien, quis tristique massa. Nulla bibendum interdum metus in fermentum."
        ),
        array(
            "title" => "When you realize you're happy",
            "date" => "June 14, 2013",
            "img" => "http://images.panda.org/assets/images/pages/welcome/orangutan_1600x1000_279157.jpg",
            "text"=> "Pellentesque pharetra, turpis sit amet venenatis aliquam, ligula quam volutpat mi, sit amet laoreet purus urna in mi. Proin elementum accumsan mi. Proin vel metus massa. Proin finibus lectus gravida, finibus est et, venenatis leo. Fusce eu vehicula dolor. Etiam at suscipit elit, ut finibus dolor. Mauris eget eros ac magna porttitor rhoncus. Sed vehicula vulputate ipsum ac faucibus. Quisque id arcu eu odio congue porta."
        )
    )
),
		'user2' => array(
    "introduction" => array(
        "name" => "Nick Sedlock",
        "bio" => "Pellentesque lacus eros, iaculis vel pretium ut, euismod eget justo. Mauris at mauris sit amet velit bibendum consectetur vel at nulla. Mauris non condimentum turpis, vitae porta neque.",
        "avatar_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4ecL_yr2PeUHV5U7tFFz9AF-cXRjAT2wxkXjQmNOrWyS3R1j_JA"
    ),
    "tags" => array("Inside", "Mathematics", "Science", "Fake News", "America", "Japan", "Korea", "Australia"),
    "blog_entries" => array(
        array(
            "title" => "Traveling the world",
            "date" => "July 2, 2015",
            "img" => "https://images.pexels.com/photos/59519/pexels-photo-59519.jpeg?auto=compress&cs=tinysrgb&h=350",
            "text" => "Aliquam ut enim quis dolor sodales pharetra. Fusce sapien mauris, hendrerit sit amet nunc nec, condimentum consectetur sapien. Cras sit amet sapien eu quam scelerisque dapibus sit amet vitae quam. Pellentesque at nisl lectus. Pellentesque lacinia ligula ultrices, hendrerit augue vitae, malesuada ligula. Fusce faucibus ac ipsum at feugiat. Vestibulum nunc magna, blandit at lacus eget, semper malesuada nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus arcu nibh, aliquet ac viverra commodo, suscipit vel turpis. Morbi ultrices sapien sem, ac aliquam tortor rhoncus at. Curabitur tincidunt aliquam ante. Donec vehicula ipsum vitae ex scelerisque, non bibendum eros mollis. Vestibulum malesuada pulvinar euismod."
        ),
        array(
            "title" => "I want to travel",
            "date" => "January 17, 2014",
            "img" => "https://drinks-dvq6ncf.netdna-ssl.com//wordpress/wp-content/uploads/2018/01/field-clouds-sky-earth-46160-1-640x484.jpg",
            "text" => "Cras ornare, dolor quis maximus ultrices, risus risus pharetra leo, quis ultricies quam velit et elit. Nunc blandit dui sit amet lacus mattis volutpat sed vitae nulla. Nam tempus vitae orci vitae convallis. Nam in sem molestie, aliquet diam sit amet, maximus justo. In vitae metus eu leo feugiat accumsan eu sit amet quam. Nunc mattis elit enim. Integer vulputate ullamcorper luctus. Cras rutrum pharetra erat sit amet mattis. Integer efficitur dui a est dictum auctor. Praesent ac urna sit amet neque porttitor vestibulum sit amet vel massa. Praesent placerat sollicitudin pharetra. Pellentesque aliquet pulvinar molestie. Aenean et ipsum quam. Maecenas vestibulum sed quam eget pretium. Integer imperdiet bibendum sapien, in congue tortor consectetur vel."
        )
    )
),
		'user3' => 'user3data',
		'user4' => 'user4data',
		'user5' => 'user5data',
	);
	echo json_encode($user_data[$username]);
?>
