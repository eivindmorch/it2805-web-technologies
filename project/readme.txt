On all pages:

	Pages without individual comments in this document does not have any special techniques apart from the ones
	listed in this section.
	PHP is used to reduce redundancy and easily change header, footer and nav on all pages
	without changing each page individually. 
	We chose to use PHP because it is a widespread language and is supported on a range of different systems.
	because the group had some experience with this from earlier, and because it is a widely used language.
	CCS is used on all pages to create a single consistent layout used throughout the whole web page.

index.php

	XML is used to hold the news articles. We chose to use XML because of its ease of use. 
	In addition we were familiar with the language from the course syllabus.
	PHP is used to read the news from the XML and add the most recent news article to the page.
	
news.php

	XML is used to hold the news articles.
	PHP is used to read the news from the XML and add all news articles to the page. 
	PHP was chosen on this page, and on the index.php page, because PHP was already in use on the rest of the page, 
	and was easy to implement further.
	
employees.php

	PHP is used to change the content of the page based on employee selection.
	Custom CSS is used to extend the default css to keep the width of the page consistent even with the employee nav.
	
prices.php
	Custom CSS is used to set the table layout.

contact.php
	JavaScript is used to import the map from Google Maps, and custom CSS is used to define the size of the map.

online-booking.php
	Form Controls is used to take input from the user.
	JavaScript is used to validate the input and to prevent conflicting inputs in the html form.

booking-confirm.php
	PHP is used to receive and process the POST data from the online-booking.php html form.