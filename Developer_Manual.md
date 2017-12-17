**Developer's Manual:**

Local Setup:

WAMP:

-   Windows 10: Wampserver 3.1.0 64 bit x64

-   Apache 2.4.27

-   PHP 5.6.31

-   MySQL 5.7.19

Database:

Tables:

User

-   User\_id (INT)

-   User\_description (VARCHAR)

-   Email\_address (VARCHAR)

-   Number\_of\_posts (INT)

Hair

-   Hair\_product\_id (INT)

-   Hair\_product\_name (VARCHAR)

-   Hair\_tag\_name (VARCHAR)

-   Hair\_tag\_id (INT)

-   Hair\_image (VARCHAR)

-   Hair\_product\_details (VARCHAR)

Skin

-   Skin\_product\_id (INT)

-   skin\_prduct\_id(VARCHAR)

-   Skin\_tag\_name (VARCHAR)

-   Skin\_tag\_id (INT)

-   Skin\_image (VARCHAR)

-   Skin\_product\_details (VARCHAR)

User\_has\_hair\_products

-   hair\_post\_id (INT)

-   user\_id (INT)

-   hair\_product\_id (INT)

-   hair\_product\_name (VARCHAR)

-   review (VARCHAR)

-   rating (INT)

-   user\_user\_id (INT)

-   hair\_hair\_product (INT)

User\_has\_skin\_product

-   skin\_post\_id (INT)

-   user\_id (INT)

-   skin\_product\_id (INT)

-   skin\_product\_name (VARCHAR)

-   review (VARCHAR)

-   rating (INT)

-   user\_user\_id (INT)

-   skin\_skin\_product (INT)

Git:

All the code, files, pages can be found at
[[https://github.com/chelshunt/INST377Proj.git]{.underline}](https://github.com/chelshunt/INST377Proj.git)

Files in the Git Directory:

Index.php

-   It has the company logo.

-   Prompts user to login into Fetch. It has a submit button to take
    > user to the home page.

aboutUs.php

-   Simple html page that has explains what fetch is about. It comes up
    > when the navigation bar section that say "About us" is clicked
    > from any other page.

homepg.php

-   The file contains our welcome page. It has a navigation bar that has
    > our home page, all posts, About us and user posts.

Productpg.php

-   Uses queries to retrieve data from the database.

-   It has both hair and skin products listed.

Userpage.php

-   This has all the reviews of user.

-   It queries db and shows user's posts.

-   It uses bootstrap as collapse feature. When clicked, the user's
    > rating and review collapse down. The comment is hidden until the
    > product is clicked.

personalPost.php

-   Queries db and shows personal posts.

-   Uses bootstrap's collapse. It has the images, descriptions and
    > product.
