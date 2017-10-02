<?php

/**
 * generate_src
 */
function generate_src() {
    insert_into_src("",         '',                                             ''); // added to simplify select_image
    insert_into_src("wiki",     'Wikipedia Commons',                            'https://commons.wikimedia.org/wiki/File:');
    insert_into_src("RC",       'The Royal Collection',                         'https://www.royalcollection.org.uk/collection/');
    insert_into_src("Met",      'The Metropolitan Museum of Art',               'http://www.metmuseum.org/art/collection/search/');
    insert_into_src("ArtUK",    'Art UK',                                       'http://artuk.org/discover/artworks/');  
    insert_into_src("SKD",      '© Staatliche Kunstsammlungen Dresden',         'https://skd-online-collection.skd.museum/Details/Index/');    
    insert_into_src("BM",       '© Trustees of the British Museum',             'http://www.britishmuseum.org/research/collection_online/collection_object_details.aspx?objectId=', '&partId=1'); 
    insert_into_src("LA",       'The Los Angeles County Museum of Art',         'http://collections.lacma.org/node/'); 
    insert_into_src("Getty",    'The J.Paul Getty Museum Open Contents Program','http://www.getty.edu/art/collection/objects/'); 
    insert_into_src("MFA",      'Museum of Fine Arts, Boston',                  'http://www.mfa.org/collections/object/');  
    insert_into_src("WAM",      'The Walters Art Museum',                       'http://art.thewalters.org/detail/');    
    insert_into_src("KHM",      'Kunsthistorisches Museum Vienna',              'https://www.khm.at/objektdb/detail/');
    insert_into_src("HAM",      'Harvard Art Museums',                          'http://www.harvardartmuseums.org/collections/object/');
    insert_into_src("CBd",      'Campbell Bonner Magical Gems Database (CBd)',  'http://www2.szepmuveszeti.hu/talismans/cbd/');
    insert_into_src("RMN",      'Réunion des Musées Nationaux - Grand Palais',  'http://www.photo.rmn.fr/archive/', '.html');  
    insert_into_src("HM",       '© The State Hermitage Museum, St. Petersburg', 'https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/', '/?lng=en');  
    insert_into_src("VA",       '© Victoria and Albert Museum, London',         'http://collections.vam.ac.uk/item/', '/');
    insert_into_src("Seals",    'Seals @ mernick.org.uk/seals',                 'http://www.mernick.org.uk/seals/');   
    insert_into_src("numisbids",'NumisBids',                                    'https://www.numisbids.com/n.php?p=lot&');    
    insert_into_src("ikmk",     'Munzkabinett, Staatliche Museen zu Berlin',    'http://ikmk.smb.museum/object?lang=en&id='); 
    insert_into_src("RJK",      'Rijksmuseum Amsterdam',                        'https://www.rijksmuseum.nl/en/collection/'); 
} 

function populate_images(){
    insert_into_images( "horsemen/bronze-horseman.jpg", 
                            "Flickr - Andrey Korchagin", 
                            "https://www.flickr.com/photos/peer_gynt/2442195479", 
                            "Bronze Horseman, 1782,
Saint-Petersburg, Russia");
    insert_into_images(     "horsemen/goldenhorseman.jpg", 
                            "wiki", 
                            "Dresden_GoldenerReiter_(2005).jpg", 
                            "Golden Horseman, 1735, 
Dresden, Saxony (Germany)");
}

?>
