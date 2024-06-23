# CTEC 227 - Lab 1

## Details

This lab will have you build four basic PHP pages. 

Each page **must have proper HTML** and not just PHP code. No CSS is required for this lab.

1. create_session.php
2. read_session.php
3. destroy_session.php
4. destroy_all_session.php

### The create_session.php Page

On the create_session.php page do the following:

- Ensure that your page starts with a session_start()
- Define 3 session variables:
  - views – set the value to 0
  - browser – set the value of this to the version of the browser you are using. You can get this info using $_SERVER['HTTP_USER_AGENT']
  - role – set the value to ‘admin’
  - You should use the isset() function before defining these variables. This is important.
- Now add a statement that will increment the value of the views session variable and add 1 to it. Store the new value back in the session variable ‘views’.
- This page should echo the variables out. Be sure to put paragraph tags around each statement for readability.
- At the bottom of the page place 3 links:
  - A link to the read_session.php page
  - A link to the destroy_session.php page
  - A link to the destroy_all_session.php page
  - Refresh your page to ensure the ‘views’ variable is being incremented after each page load.

### The read_session.php Page

On the read_session.php page do the following:

- Ensure that your page starts with a session_start()
- Create PHP code to read and display the session variables.
- At the bottom of the page place 3 links:
  - A link to the create_session.php page
  - A link to the destroy_session.php page
  - A link to the destroy_all_session.php page
- Test that the session variables are being set by going back to the create_session.php page and reloading it a couple of times.
- Then go back to the read_session.php page to ensure that they are being updated.

### The destroy_session.php Page

On the destroy_session.php page do the following:

- Ensure that your page starts with a session_start().
- Write PHP code to unset the 3 session variables you set.
- At the bottom of the page place 3 links:
  - A link to the create_session.php page
  - A link to the read_session.php page
  - A link to the destroy_all_session.php page
- Go to the read_session.php page to ensure that the variables were in fact destroyed.

### The destroy_all_session.php Page

On the destroy_all_session.php page do the following:

- Ensure that your page starts with a session_start().
- Write PHP code to destroy the entire user session using session_destroy().
- At the bottom of the page place 3 links:
  - A link to the create_session.php page
  - A link to the read_session.php page
  - A link to the destroy_session.php page
  - Go to the create_session.php page to ensure that the session variables are set.
- Go to the read_session.php page to ensure that the variables were in fact destroyed.
- Now click on the link to the destroy_all_session.php to destroy the session.
- Go back to the read page and observe what has happened.

## Grading Rubic

| Item                    | Full Marks | Partial Marks | No Marks |
| :---------------------- | :--------- | :------------ | :------- |
| create_session.php      | 25         | 13            | 0        |
| read_session.php        | 25         | 13            | 0        |
| destroy_session.php     | 25         | 13            | 0        |
| destroy_all_session.php | 25         | 13            | 0        |