<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Structural\Bridge\Resources\{ArtistResource, BookResource};
use Patterns\Structural\Bridge\Forms\{Popup, Thumbnail};
use Patterns\Structural\Bridge\Subjects\{Artist, Book};

/** My favourite artist */
$artist = new Artist(
    'Corey Taylor',
    'https://open.spotify.com/artist/0nhDd1RWjZ6SDV1Vg1Ku2Q',
    'Corey Todd Taylor is an American singer'
);

/** My favourite book */
$book = new Book(
    'The Fall of the House of Usher',
    'https://www.amazon.com/Fall-House-Usher-Edgar-Allan/dp/1517348064',
    'The Fall of the House of Usher is a supernatural horror story by Edgar Allan Poe.'
);

/** Defining the connection between view form, resource, subject */
$artistPopup = new Popup(new ArtistResource($artist));
$bookPopup = new Popup(new BookResource($book));

/** Presenting subjects */
$artistPopup->show();
$bookPopup->show();
