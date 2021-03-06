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
    insert_into_src("BM2",      '© Trustees of the British Museum',             'https://www.britishmuseum.org/collection/object/'); 
    insert_into_src("LA",       'The Los Angeles County Museum of Art',         'http://collections.lacma.org/node/'); 
    insert_into_src("Getty",    'The J.Paul Getty Museum Open Contents Program','http://www.getty.edu/art/collection/objects/'); 
    insert_into_src("MFA",      'Museum of Fine Arts, Boston',                  'https://collections.mfa.org/objects/');  
    insert_into_src("WAM",      'The Walters Art Museum',                       'https://art.thewalters.org/detail/');    
    insert_into_src("KHM",      'Kunsthistorisches Museum Vienna',              'https://www.khm.at/objektdb/detail/');
    insert_into_src("HAM",      'Harvard Art Museums',                          'http://www.harvardartmuseums.org/collections/object/');
    insert_into_src("Ben",      '© Benaki Museum',                              'https://www.benaki.gr/index.php?option=com_collectionitems&amp;view=collectionitem&amp;id=', '&amp;lang=en');
    insert_into_src("CBd",      'Campbell Bonner Magical Gems Database',        'http://www2.szepmuveszeti.hu/talismans/cbd/');
    insert_into_src("RMN",      'Réunion des Musées Nationaux - Grand Palais',  'http://www.photo.rmn.fr/archive/', '.html');  
    insert_into_src("HM",       '© The State Hermitage Museum, St. Petersburg', 'https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/', '/?lng=en');  
    insert_into_src("VA",       '© Victoria and Albert Museum, London',         'http://collections.vam.ac.uk/item/', '/');
    insert_into_src("Prado",    'Museo del Prado',                              'https://www.museodelprado.es/en/the-collection/art-work/');
    insert_into_src("Seals",    'Seals @ mernick.org.uk/seals',                 'http://www.mernick.org.uk/seals/');   
    insert_into_src("numisbids",'NumisBids',                                    'https://www.numisbids.com/n.php?p=lot&');    
    insert_into_src("moneta",   'Монеты России (Coins of Russia)',              'http://moneta-russia.ru/');   
    insert_into_src("numista",  'Numista',                                      'https://en.numista.com/catalogue/', '.html');   
    insert_into_src("ikmk",     'Munzkabinett, Staatliche Museen zu Berlin',    'http://ikmk.smb.museum/object?lang=en&id='); 
    insert_into_src("RJK",      'Rijksmuseum Amsterdam',                        'https://www.rijksmuseum.nl/en/collection/');
    insert_into_src("MLM",      "The Morgan Library And Museum",                'https://www.themorgan.org/drawings/item/');
    insert_into_src("Peru",     "ARCHI - Archivo Digital de Arte Peruano",      'http://www.archi.pe/index.php/foto/index/');
    insert_into_src("ES",       "Equestrian Statues",                           'https://equestrianstatue.org/');
    insert_into_src("Gallica",  "Gallica at bibliothèque nationale de France",  'https://gallica.bnf.fr/ark:/');
    insert_into_src("NT",       "National Trust Collection",                    'http://www.nationaltrustcollections.org.uk/object/');
    insert_into_src("Kremlin",  "The Moscow Kremlin State Historical and Cultural Museum and Heritage Site",                    
                                                                                'https://collectiononline.kreml.ru/iss2/items?info=');
    insert_into_src("dreamstime",  "Copyright © Dreamstime",                    'https://www.dreamstime.com/');
    insert_into_src("Google",   "Google Arts And Culture",                      'https://artsandculture.google.com/asset/');

    insert_into_src("Bonhams",  'Bonhams',                                      'https://www.bonhams.com/auctions/');     
    insert_into_src("Christies",'Christie’s',                                   'http://www.christies.com/lotfinder/Lot/', '-details.aspx');     
    insert_into_src("Sothebys", 'Sotheby’s',                                    'http://www.sothebys.com/en/auctions/ecatalogue/');  
    insert_into_src("PA",       'Pushkin Antiques',                             'https://www.pushkinantiques.com/');  

    insert_into_src("Yoga Outlet",       "Yoga Outlet",                         "http://www.yogaoutlet.com/guides/how-to-do-");    
} 

function populate_images() {
    insert_into_images("horsemen/00-008264.jpg", 
                            "RMN", 
                            "00-008264-2C6NU04TA59G", 
                            "Dinos with the depiction of horse races and Amazonomachy,<br/>6th century BC, Attic");
    insert_into_images("horsemen/00061001.jpg", 
                            "Getty", 
                            "563", 
                            "The Story of Joseph,<br/>cr. 1485, Biagio d'Antonio");
    insert_into_images("horsemen/0010-005-Preobrazovanija-Petra-1.jpg", 
                            "fenixforum.ru", 
                            "http://fenixforum.ru/viewtopic.php?f=6&t=10&start=140", 
                            "Peter I on horseback, <br/>1824, A.Orlowski");
    insert_into_images("horsemen/00133-12110_large.jpg", 
                            "doubletake gallery", 
                            "http://doubletakeart.com/salvador_dali/St_George_and_the_Dragon-12110.html", 
                            "St. George and the Dragon,<br/>1978, Salvador Dalí");
    insert_into_images("horsemen/001Bratislava_Kral_Svatopluk1.jpg", 
                            "wiki", 
                            "001Bratislava_Kral_Svatopluk1.jpg", 
                            "Statue of Svätopluk, <br/>2010, Ján Kulich, Bratislava, Slovakia");
    insert_into_images("horsemen/01-016323.jpg", 
                            "RMN", 
                            "01-016323-2C6NU0GWWZZP", 
                            "Sarcophagus of a woman with horsemen and foot soldiers in combat, <br/>cr. end of 2nd century BC, Italian/Etruscan");
    insert_into_images("horsemen/018_Conrad_Cichorius_Die_Reliefs_der_Traianssaule_Tafel_XVIII.jpg", 
                            "wiki", 
                            "018_Conrad_Cichorius,_Die_Reliefs_der_Traianssäule,_Tafel_XVIII.jpg", 
                            "The first battle (Scene XXIV); Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/02-000485.jpg", 
                            "RMN", 
                            "02-000485-2C6NU0GSQXZC", 
                            "Falaieff with the depiction of combat on an Amazone and two griffons,<br/>4th century BC, Attica");
    insert_into_images("horsemen/02-000930-1.jpg", 
                            "RMN", 
                            "02-000930-2C6NU0GSMNLE", 
                            "Amphora with the depiction of Amazonomachy,<br/>435-415 BC, painted by Aison");
    insert_into_images("horsemen/027_Conrad_Cichorius_Die_Reliefs_der_Traianssaule_Tafel_XXVII.jpg", 
                            "wiki", 
                            "027_Conrad_Cichorius,_Die_Reliefs_der_Traianssäule,_Tafel_XXVII.jpg", 
                            "Forced march of light troops (Scene XXXVI); Cavalry battle against Sarmatians (Scene XXXVII); Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/03-014954.jpg", 
                            "RMN", 
                            "03-014954-2C6NU04EG3MZ", 
                            "Amphora with horse riders, <br/>cr. 560-530 BC, Reggio di Calabria");
    insert_into_images("horsemen/0388-4Agr.jpg", 
                            "Landschaftsverband Rheinland", 
                            "http://www.rheinische-geschichte.lvr.de/orte/ab1815/Kreisfreie_Staedte/Seiten/Bonn.aspx", 
                            "Tombstone of the cavalryman Vonatorix, <br/>40-60 AD, discovered in Bonn, Germany");
    insert_into_images("horsemen/03_The_Great_Courier.jpg", 
                            "wiki", 
                            "03_The_Great_Courier.jpg", 
                            "The Great Courier, <br/>circa 1495, Albrecht Dürer");
    insert_into_images("horsemen/04-006444.jpg", 
                            "RMN", 
                            "04-006444-2C6NU04O85P2", 
                            "Amphora with horse riders, <br/>cr. 560-540 BC, Reggio di Calabria");
    insert_into_images("horsemen/04-007446.jpg", 
                            "RMN", 
                            "04-007446-2C6NU04ADUMT", 
                            "Bell-krater showing a horseman crowned by Nike,<br/>cr. 420 BC, Attic");
    insert_into_images("horsemen/04-507585.jpg", 
                            "RMN", 
                            "04-507585-2C6NU00WQOXI", 
                            "Amphora with horse riders, <br/>cr. 560-540 BC, Reggio di Calabria");
    insert_into_images("horsemen/04-509470.jpg", 
                            "RMN", 
                            "04-509470-2C6NU0026Y14", 
                            "Louis XIV dressed à la romaine on a rearing horse,<br/>cr. 1690, Martin Desjardins");
    insert_into_images("horsemen/04-511162.jpg", 
                            "RMN", 
                            "04-511162-2C6NU0054HF4", 
                            "Studies of the horses and horsemen, 781DR recto,<br/>cr. 1480, Leonardo da Vinci");
    insert_into_images("horsemen/04-511292.jpg", 
                            "RMN", 
                            "04-511292-2C6NU005HUJQ", 
                            "Olpe with the depiction of two horsemen,<br/>cr. 575-550 BC, Corinthian");
    insert_into_images("horsemen/044_Conrad_Cichorius_Die_Reliefs_der_Traianssaule_Tafel_XLIV.jpg", 
                            "wiki", 
                            "044_Conrad_Cichorius,_Die_Reliefs_der_Traianssäule,_Tafel_XLIV.jpg", 
                            "Advance into the mountains (Scene LXIII); Light cavalry flying columns (Scene LXIV); Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/045_Conrad_Cichorius_Die_Reliefs_der_Traianssaule_Tafel_XLV.jpg", 
                            "wiki", 
                            "045_Conrad_Cichorius,_Die_Reliefs_der_Traianssäule,_Tafel_XLV.jpg", 
                            "Light cavalry flying columns (Scene LXIV); Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/05-509662.jpg", 
                            "RMN", 
                            "05-509662-2C6NU0767HBS", 
                            "Amphora with horse riders, a man, a snake and two roosters,<br/>cr. 560-540 BC, Reggio di Calabria");
    insert_into_images("horsemen/05-522282.jpg", 
                            "RMN", 
                            "05-522282-2C6NU07CV0NA", 
                            "Neck-amphora with the depiction of combat on an Amazone and a hoplite,<br/>cr. 500-490 BC, Attica");
    insert_into_images("horsemen/050_01.jpg", 
                            "John Moran", 
                            "http://www.johnmoran.com/auction-archive/2011/20110920/24120-lot-1050-a-dressel-kister-a-cie-porcelain-equestrian-figure-of-augustus-iii", 
                            "Augustus III porcelain figurine<br/>Model by Johann J. Kaendler,<br/>Late 19th century");
    insert_into_images("horsemen/06-520441.jpg", 
                            "RMN", 
                            "06-520441-2C6NU0PRKPXI", 
                            "Hanging known as Sabine's shawl depicting Bellerophon trampling Chimera, <br/>4th-5th century, Coptic");
    insert_into_images("horsemen/06-520441.jpg", 
                            "RMN", 
                            "06-520441-2C6NU0PRKPXI", 
                            "Hanging known as Sabine's shawl depicting Bellerophon trampling Chimera, <br/>4th-5th century, Coptic");
    insert_into_images("horsemen/06xx_Jagdschale_m._sasanidischem_Grosskoenig_Iran_7._Jht._anagoria.jpg", 
                            "wiki", 
                            "06xx_Jagdschale_m._sasanidischem_Großkoenig_Iran_7._Jht._anagoria.JPG", 
                            "Dish showing a king hunting, <br/>6th-8th century");
    insert_into_images("horsemen/07-512598.jpg", 
                            "RMN", 
                            "07-512598-2C6NU0CRMFO5", 
                            "Louis XIV in armour trampling the vanquished,<br/>17th century, Charles Le Brun, France");
    insert_into_images("horsemen/07-528854.jpg", 
                            "RMN", 
                            "07-528854-2C6NU0JTVCL3", 
                            "Sarcophagus with two lion hunting scenes, <br/>cr. 235, Rome");
    insert_into_images("horsemen/07-535474.jpg", 
                            "RMN", 
                            "07-535474-2C6NU0JBXXUU", 
                            "Ivory chest with mythological and combat scenes, <br/>10th-11th century");
    insert_into_images("horsemen/09-532951.jpg", 
                            "RMN", 
                            "09-532951-2C6NU03SWQNY", 
                            "Louis XIV on horseback,<br/>cr. 1668, Charles Le Brun, France");
    insert_into_images("horsemen/09-532952.jpg", 
                            "RMN", 
                            "09-532952-2C6NU03SW160", 
                            "Louis XIV on horseback,<br/>cr. 1668, Charles Le Brun, France");
    insert_into_images("horsemen/0_113496_d9aa28c0_XXL.jpg", 
                            "@lviza_neo, liveinternet.ru", 
                            "http://www.liveinternet.ru/users/lviza_neo/post134955175/", 
                            "Emperor Alexander II, <br/>Second half of the 19th century, P.F. Borel");
    insert_into_images("horsemen/0_113499_f752414e_orig.jpg", 
                            "@lviza_neo, liveinternet.ru", 
                            "http://www.liveinternet.ru/users/lviza_neo/post134955175/", 
                            "Future emperor Alexander II of Russia, <br/>1840, Franz Kruger");
    insert_into_images("horsemen/0_Sarcofago_di_Helena_-_Museo_Pio-Clementino_-_Vatican_2c.jpg", 
                            "wiki", 
                            "0_Sarcofago_di_Helena_-_Museo_Pio-Clementino_-_Vatican_(2c).JPG", 
                            "Sarcophagus of Saint Helena, <br/>cr. 340, Rome");
    insert_into_images("horsemen/10-528983.jpg", 
                            "RMN", 
                            "10-528983-2C6NU0YLTKIZ", 
                            "Funerary stela found near Pelinna, <br/>cr. 350-340 BC, Thessaly");
    insert_into_images("horsemen/10-539711.jpg", 
                            "RMN", 
                            "10-539711-2C6NU0YJC0AG", 
                            "Funerary stela of Dionysus, <br/>2nd century AD");
    insert_into_images("horsemen/10-539732.jpg", 
                            "RMN", 
                            "10-539732-2C6NU0YJCMYC", 
                            "Pergamon vase, a marble dinos with a depiction of 15 horsemen, <br/>2nd century BC, Bergama, Turkey");
    insert_into_images("horsemen/1018px-Produz._cicladica_piatto_con_chimera_e_bellerofonte_su_pegaso_650_ac_ca._da_artemision_di_thasos_grecia_m._archeol._di_Thasos.jpg", 
                            "wiki", 
                            "Produz._cicladica,_piatto_con_chimera_e_bellerofonte_su_pegaso,_650_ac_ca.,_da_artemision_di_thasos,_grecia_(m._archeol._di_Thasos).JPG", 
                            "Plate with a depiction of Chimera and Bellerophon on Pegasus, <br/>cr. 650 BC, Thasos, Ancient Greece");
    insert_into_images("horsemen/1024px-065_Conrad_Cichorius_Die_Reliefs_der_Traianssaule_Tafel_LXV.jpg", 
                            "wiki", 
                            "065_Conrad_Cichorius,_Die_Reliefs_der_Traianssäule,_Tafel_LXV.jpg", 
                            "Forced march of Trajan on horseback (Scene LXXXIX); Trajan is greeted by some barbarians (Scene XC); Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/1024px-Aleksandrovska_grobniza.jpg", 
                            "wiki", 
                            "Aleksandrovska_grobniza.JPG", 
                            "Aleksandrovo tomb, fragment of a mural, <br/>4th century BC, 4th century BC, Haskovo district, Bulgaria");
    insert_into_images("horsemen/1024px-Alexander_Sarcophagus.jpg", 
                            "wiki", 
                            "Alexander_Sarcophagus.jpg", 
                            "Detail of the Alexander Sarcophagus showing the battle of Issus, <br/>circa 320 BC, Ionian or Rhodian workmanchip, Hellenistic");
    insert_into_images("horsemen/1024px-Augustai.jpg", 
                            "wiki", 
                            "Augustai.jpg", 
                            "August II and August III, fragment of Fürstenzug, 1871-6 and 1904-7,<br/>Dresden, Germany");
    insert_into_images("horsemen/1024px-Erzherzog_Karl_Heldenplatz_Wien_1.jpg", 
                            "wiki", 
                            "Erzherzog_Karl_Heldenplatz_Wien_1.JPG", 
                            "Statue of Archduke Karl, <br/>1860, Vienna");
    insert_into_images("horsemen/1024px-Jackson_Statue_in_DC.jpg", 
                            "wiki", 
                            "Jackson_Statue_in_DC.JPG", 
                            "Statue of Andrew Jackson, <br/>1852, Clark Mills, Washington D.C., U.S.A.");
    insert_into_images("horsemen/1024px-Maximilian_Emanuel_2_Reiterstatue_Budapest.jpg", 
                            "wiki", 
                            "Maximilian_Emanuel_2_Reiterstatue_Budapest.jpg", 
                            "Prince Maximilian II Emmanuel of Bavaria, <br/>1729, Giuseppe Volpini");
    insert_into_images("horsemen/1024px-Porcelain_Catherine_II_of_Russia_01.jpg", 
                            "wiki", 
                            "Porcelain_Catherine_II_of_Russia_01.jpg", 
                            "Catherine II of Russia, <br/>after Johann Joachim Kändler, 1770");
    insert_into_images("horsemen/1024px-St._George_Slaying_the_Dragon_Church_of_Debre_Sina_Lalibela_Ethiopia_3234094731.jpg", 
                            "wiki", 
                            "St._George_Slaying_the_Dragon,_Church_of_Debre_Sina,_Lalibela,_Ethiopia_(3234094731).jpg", 
                            "St. George Slaying the Dragon, church wall painting,  <br/>?");
    insert_into_images("horsemen/1024px-Statue_at_Mansudae_Art_Studio-1.jpg", 
                            "wiki", 
                            "Statue_at_Mansudae_Art_Studio.JPG", 
                            "Statue of Kim Il-sung and Kim Jong-il, <br/>2012, Pyongyang, North Korea");
    insert_into_images("horsemen/104_Conrad_Cichorius_Die_Reliefs_der_Traianssaule_Tafel_CIV.jpg", 
                            "wiki", 
                            "104_Conrad_Cichorius,_Die_Reliefs_der_Traianssäule,_Tafel_CIV.jpg", 
                            "Roman cavalry in the mountains (Scene CXLII); Fight between pursuers and pursued (Scene CXLIII); Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/1072px-69_Velazquez_-_Felipe_IV_Museo_del_Prado_1634-35.jpg", 
                            "wiki", 
                            "69_Velázquez_-_Felipe_IV_(Museo_del_Prado,_1634-35).jpg", 
                            "Philip IV on Horseback, <br/>1631-6, Diego Velázquez");
    insert_into_images("horsemen/1080px-Leonardo_da_Vinci_-_Adorazione_dei_Magi_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Leonardo_da_Vinci_-_Adorazione_dei_Magi_-_Google_Art_Project.jpg", 
                            "The Adoration of the Magi,<br/>1480-2, Leonardo da Vinci");
    insert_into_images("horsemen/Leonardo_magi_zoom.png", 
                            "wiki", 
                            "Leonardo_da_Vinci_-_Adorazione_dei_Magi_-_Google_Art_Project.jpg", 
                            "The Adoration of the Magi (detail), <br/>1480-2, Leonardo da Vinci");
    insert_into_images("horsemen/108767.jpg", 
                            "Minneapolis Institute of Art", 
                            "https://collections.artsmia.org/art/108767/album-leaf-ethiopia", 
                            "Ensemble of 44 leaves featuring Ethiopian saints and scenes from the Hebrew Scriptures and New Testament including 9 saints on rearing horses, painting on parchment,<br/>late 17th century");
    insert_into_images("horsemen/11-506959.jpg", 
                            "RMN", 
                            "11-506959-2C6NU0MUK8XB", 
                            "Funerary stela of Amynandros and Makedonios showing a Thracian horseman, <br/>2nd century AD");
    insert_into_images("horsemen/1109px-Emperor_Menelik_II_2141756150.jpg", 
                            "wiki", 
                            "Emperor_Menelik_II_(2141756150).jpg", 
                            "Statue of Emperor Menelik II,<br/>1930, Addis Ababa, Ethiopia");
    insert_into_images("horsemen/1135px-Peter_Paul_Rubens_-_Equestrian_Portrait_of_the_Duke_of_Buckingham_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_-_Equestrian_Portrait_of_the_Duke_of_Buckingham_-_Google_Art_Project.jpg", 
                            "Equestrian Portrait of the Duke of Buckingham, <br/>1625, Peter Paul Rubens");
    insert_into_images("horsemen/1135px-Peter_Paul_Rubens_-_Equestrian_Portrait_of_the_Duke_of_Buckingham_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_-_Equestrian_Portrait_of_the_Duke_of_Buckingham_-_Google_Art_Project.jpg", 
                            "Equestrian Portrait of the Duke of Buckingham, <br/>1625, Peter Paul Rubens");
    insert_into_images("horsemen/1178209537b.jpg", 
                            "La Repubblica", 
                            "http://www.repubblica.it/2006/04/sezioni/arte/recensioni/bronzi-giambologna/bronzi-giambologna/bronzi-giambologna.html", 
                            "Equestrian statuette of Louis XIII, <br/>1619-21, Pietro Tacca");
    insert_into_images("horsemen/1186806_640.jpg", 
                            "catherine-catty.livejournal.com", 
                            "http://catherine-catty.livejournal.com/304368.html", 
                            "Nicholas I of Russia,<br/>before 1837, made in France");
    insert_into_images("horsemen/12-511872.jpg", 
                            "RMN", 
                            "12-511872-2C6NU0ZLJC0A", 
                            "Cup with Bellerophon riding Pegasus and attacking the Chimaera, <br/>2nd quarter of the 6th century BC, Attic, Ancient Greece");
    insert_into_images("berets/1225px-rembrandt_van_rijn-de_nachtwacht-1642.jpg", 
                            "wiki", 
                            "The_Nightwatch_by_Rembrandt.jpg", 
                            "Nightwatch, <br/>1642, Rembrandt");
    insert_into_images("horsemen/1253px-Deruta_manifattura_mancini_piatto_con_guerriero_alla_turca_1530-60.jpg", 
                            "wiki", 
                            "Deruta,_manifattura_mancini,_piatto_con_guerriero_alla_turca,_1530-60.JPG", 
                            "Dish depicting a Turkish rider, <br/>1520-60, unknown, Deruta");
    insert_into_images("horsemen/1275px-Peter_Paul_Rubens_110.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_110.jpg", 
                            "Tiger Hunt, <br/>1617-8, Peter Paul Rubens");
    insert_into_images("horsemen/1280px-Giorgio_Vasari_-_The_rout_of_the_Pisans_at_Torre_San_Vincenzo_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Giorgio_Vasari_-_The_rout_of_the_Pisans_at_Torre_San_Vincenzo_-_Google_Art_Project.jpg", 
                            "Defeat of the Pisans at the Tower of San Vincenzo,<br/>1568-71, Giorgio Vasari, Palazzo Vecchio, Florence");
    insert_into_images("horsemen/1280px-Monument_to_Peter_the_Great_in_Moscow.jpg", 
                            "Wikipedia", 
                            "https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Monument_to_Peter_the_Great_in_Moscow.jpg", 
                            "Peter the Great Statue (close-up),<br/>1997, Zurab Tsereteli");
    insert_into_images("horsemen/1280px-Paolo_Uccello_047b.jpg", 
                            "wiki", 
                            "Paolo_Uccello_047b.jpg", 
                            "Saint George and the Dragon, <br/>1470, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/1280px-Strasbourg_walter_gustave_adolphe.jpg", 
                            "wiki", 
                            "Strasbourg_walter_gustave_adolphe.JPG", 
                            "Gustavus Adolphus of Sweden at the battle of Breitenfeld,<br/>1632, Johann Walter");
    insert_into_images("horsemen/13-532609.jpg", 
                            "RMN", 
                            "13-532609-2C6NU0DQH9MQ", 
                            "Nessus Abducting Deianira,<br/>17th century, Antonio Susini");
    insert_into_images("horsemen/13-538189.jpg", 
                            "RMN", 
                            "13-538189-2C6NU0DUQ302", 
                            "Votive tablet showing Thracian horseman, <br/>1st quarter of the 3rd century AD (?)");
    insert_into_images("horsemen/13-554698.jpg", 
                            "RMN", 
                            "13-554698-2C6NU05YM0CF", 
                            "Detail of an Amazonomachy frieze of the temple of Artemis Leucophryene, <br/>1st quarter of the 2nd century BC, Magnesia on the Maeander, Turkey");
    insert_into_images("horsemen/13-556029.jpg", 
                            "RMN", 
                            "13-556029-2C6NU054JT7O", 
                            "Bas-relief of a Thracian horseman, <br/>1st quarter of the 4th century BC (?)");
    insert_into_images("horsemen/13-manasses-chronicle.jpg", 
                            "wiki", 
                            "13-manasses-chronicle.jpg", 
                            "Alexander the Great and Ptolemy I Soter attacking, <br/>14th century, Constantine Manasses Chronicle, Byzantine empire");
    insert_into_images("horsemen/1352987_original.jpg", 
                            "history-gatchina.ru", 
                            "http://history-gatchina.ru/article/pavel_svita.htm", 
                            "Emperor Pavel I with his retinue, <br/>1799-1802, Johann Baptist von Lampi the Younger");
    insert_into_images("horsemen/1354059_original.jpg", 
                            "catherine-catty.livejournal.com", 
                            "http://catherine-catty.livejournal.com/334284.html?thread=11889356", 
                            "Pavel I,<br/>1790s, unknown");
    insert_into_images("horsemen/138316-1292754299.jpg", 
                            "RC", 
                            "35858", 
                            "Rudolf II introducing the Liberal Arts to Bohemia, <br/>1609, Adriaen de Vries, Prague");
    insert_into_images("horsemen/139-53-1.jpg", 
                            "MFA", 
                            "53424", 
                            "Boy on horseback,<br/>cr. 1753-5, probably by Vauxhall Manufactory");
    insert_into_images("horsemen/1394384194_6.jpg", 
                            "respublikarso.org", 
                            "http://respublikarso.org/history/637-skify-i-kimmeriycy-problemy-vzaimootnosheniy.html", 
                            "Greco-Scythian gold horseman appliqué, <br/>(?) cr. 4th century BC");
    insert_into_images("horsemen/14-509947.jpg", 
                            "RMN", 
                            "14-509947-2C6NU0LM164Y", 
                            "Detail of an Amazonomachy frieze of the temple of Artemis Leucophryene, <br/>1st quarter of the 2nd century BC, Magnesia on the Maeander, Turkey");
    insert_into_images("horsemen/14-514066.jpg", 
                            "RMN", 
                            "14-514066-2C6NU0ALNHCAZ", 
                            "Detail of an Amazonomachy frieze of the temple of Artemis Leucophryene, <br/>1st quarter of the 2nd century BC, Magnesia on the Maeander, Turkey");
    insert_into_images("horsemen/14-572160.jpg", 
                            "RMN", 
                            "14-572160-2C6NU0AWQTM27", 
                            "Horus the Horseman <br/>(part of window decoration), <br/>4th century, Coptic");
    insert_into_images("horsemen/1430917632_sv.-georgiy-i-sv.-fedir-stratilat-shifrna-plita-mihaylivskogo-zolotoverhogo-12-st.jpg", 
                            "hram.lviv.ua", 
                            "http://hram.lviv.ua/3131-konografiya-svyatogo-yuriya-georgiya-pobidonoscya.html", 
                            "Two Horseman (George and Theodore), <br/>cr. 1062, from St.Michael's monastery in Kiev, Russia");
    insert_into_images("horsemen/143a7046fb3354a9333dea57a8b82377.jpg", 
                            "Miho Museum", 
                            "http://www.miho.or.jp/booth/html/artcon/00000493e.htm", 
                            "Plate with a King Hunting Animals,<br/>7th century");
    insert_into_images("horsemen/15-524838.jpg", 
                            "RMN", 
                            "15-524838-2C6NU0AOT28FY", 
                            "Abduction of Deianira, <br/>beginning of the 17th century, Germany");
    insert_into_images("horsemen/15-524843.jpg", 
                            "RMN", 
                            "15-524843-2C6NU0AOT2BTJ", 
                            "Nessus Abducting Deianira,<br/>17th century, Germany");
    insert_into_images("horsemen/15-542519.jpg", 
                            "RMN", 
                            "15-542519-2C6NU0A3A6WPE", 
                            "Saint George slaying a dragon (a fresco), <br/>17th century");
    insert_into_images("horsemen/15-630068.jpg", 
                            "RMN", 
                            "15-630068-2C6NU0AMI794B", 
                            "Textile fragment depicting a horseman, <br/>5th-6th century, Coptic");
    insert_into_images("horsemen/15-630092.jpg", 
                            "RMN", 
                            "15-630092-2C6NU0AMI7BXW", 
                            "Textile fragment depicting a horseman, <br/>5th-6th century, Coptic");
    insert_into_images("horsemen/15-647264.jpg", 
                            "BM", 
                            "58712", 
                            "Mosaic with hunting (?) of a Vandal,<br/> Late 5th – early 6th century, Bord-Djedid, Carthage, Tunisia");
    insert_into_images("horsemen/15-article.jpg", 
                            "© Trustees of the British Museum", 
                            "http://www.teachinghistory100.org/objects/about_the_object/tombstone_of_a_roman_cavalryman", 
                            "Tombstone of the cavalryman Genialis, <br/>cr. 60 AD, discovered in Corinium, UK");
    insert_into_images("horsemen/153360-1297489868.jpg", 
                            "RC", 
                            "441152", 
                            "An Order of the Garter Lesser George, <br/>early 19th century, England");
    insert_into_images("horsemen/153412-1297490560.jpg", 
                            "RC", 
                            "441376", 
                            "Garter collar and Great George, <br/>1837, England");
    insert_into_images("horsemen/16-503889.jpg", 
                            "RMN", 
                            "15-16-503889-2C6NU0A7RSDLU", 
                            "Textile roundel with a holy rider killing a snake with a spear, <br/>4th-7th century, Coptic");
    insert_into_images("horsemen/16508.jpeg", 
                            "RJK", 
                            "BK-16508-1", 
                            "Nessus Abducting Deianira, <br/>cr.1630, Adriaen de Vries");
    insert_into_images("horsemen/167167-1297701516.jpg", 
                            "RC", 
                            "441924", 
                            "Garter Great George, <br/>1661, England");
    insert_into_images("horsemen/16_Piamontini_Prince_Ft_2000.jpg", 
                            "The Hill Collection", 
                            "http://www.frick.org/exhibitions/hill/16", 
                            "Prince Ferdinando di Cosimo III on Horseback, <br/>1717, Giuseppe Piamontini, Florence");
    insert_into_images("horsemen/17811_p0001678.001.jpg", 
                            "RMN", 
                            "89-001862-02-2C6NU0HWZJUD", 
                            "The Battle of Arbela, <br/>1669, Charles Le Brun");
    insert_into_images("horsemen/1914_Sydney_Half_Sovereign_-_St._George.jpg", 
                            "wiki", 
                            "1914_Sydney_Half_Sovereign_-_St._George.jpg", 
                            "A half-sovereign,<br/>1914, minted in Sydney");
    insert_into_images("horsemen/1923_113.jpg", 
                            "New-York Historical Society", 
                            "http://www.nyhistory.org/exhibit/equestrian-statue-king-george-iii-bowling-green-new-york-city-0", 
                            "A modern reconstruction of the statue of King George III, Bowling Green, New York City,<br/>1912, Charles MacKubin Lefferts");
    insert_into_images("allchurch/1ainstallationgalica-idealcity.jpg", 
                            "Tate", 
                            "http://www.tate.org.uk/learn/bpartexchange/featured-artist/emily-allchurch", 
                            "Ideal City (after Piranesi), Emily Allchurch, 2006.<br/>This is an installation view of another Allchurch's lightbox (not part of Manchester exhibition)");
    insert_into_images("horsemen/200324-1316530904.jpg", 
                            "RC", 
                            "20798", 
                            "George IV,<br/>1827, Edward Hodges Baily");
    insert_into_images("horsemen/2006AE5094_jpg_l.jpg", 
                            "VA", 
                            "O89319", 
                            "Nessus and Deianira, <br/>1635-1645, Francesco Fanelli, Anglo-Italian");
    insert_into_images("horsemen/2006AE5094_jpg_l.jpg", 
                            "VA", 
                            "O89319", 
                            "Nessus and Deianira, <br/>1635-1645, Francesco Fanelli, Anglo-Italian");
    insert_into_images("horsemen/2006AE9418_jpg_l.jpg", 
                            "VA", 
                            "O89281", 
                            "Cupid on a horse, <br/>cr.1640, Francesco Fanelli, Anglo-Italian");
    insert_into_images("horsemen/2006AE9419_jpg_l.jpg", 
                            "VA", 
                            "O89560", 
                            "Archduke Ferdinand Carl of Tirol, <br/>ca. 1648, Caspar Gras, Austria");
    insert_into_images("horsemen/2006AM5729_jpg_l.jpg", 
                            "VA", 
                            "O77804", 
                            "St George and the Dragon, <br/>cr.1640, Francesco Fanelli, Anglo-Italian");
    insert_into_images("horsemen/2006BB2180_jpg_l.jpg", 
                            "VA", 
                            "O311616", 
                            "Victory crowning a Prince, probably Louis XIV, <br/>early 18th century, Guillielmus de Grof, Bavaria");
    insert_into_images("horsemen/2008BT0526_2500.jpg", 
                            "VA", 
                            "O159931", 
                            "Dish depicting a man carrying a spear on a horse, <br/>mid-16th century, possibly Mancini workshop, Deruta");
    insert_into_images("horsemen/2008BT2745_2500.jpg", 
                            "VA", 
                            "O159656", 
                            "Bowl with a naked boy holding a sail on a galloping horse, <br/>1520-30, possibly Nicola Francioli, Deruta");
    insert_into_images("goldenbronzehorsemen/2009CD6779_jpg_l.jpg", 
                            "VA", 
                            "O188004", 
                            "La Lanterne Magique, <br/>height 15.6cm, width 16.5cm,<br/>1757, Étienne-Maurice Falconet");
    insert_into_images("horsemen/2010EK6643_2500.jpg", 
                            "VA", 
                            "O161958", 
                            "Dish depicting Saint George and the Dragon, <br/>1530-40, unknown, Deruta");
    insert_into_images("horsemen/20131205_Istanbul_106.jpg", 
                            "wiki", 
                            "20131205_Istanbul_106.jpg", 
                            "Lycian sarcophagus, <br/>end of 5th century BC, Chamber no. IV of the royal necropolis of Sidon, modern Lebanon");
    insert_into_images("horsemen/2015_08_24_13_06_45.jpg", 
                            "@ZMKC, blogspot.co.uk", 
                            "http://zmkc.blogspot.co.uk/2015/08/the-wonders-of-vienna.html", 
                            "Four horseman and two spare heads, all made from bronze by Caspar Gras in Innsbruck in the second quarter of the 17th century");
    insert_into_images("horsemen/20224320.jpeg", 
                            "HAM", 
                            "292199", 
                            "Textile Band with Two Figures on Horseback, <br/>5th century, Coptic");
    insert_into_images("horsemen/21-3-2006-koptisk-tekstil-med-rytter.jpg", 
                            "The David Collection", 
                            "https://www.davidmus.dk/en/collections/islamic/dynasties/preislamic/art/3-2006", 
                            "Tapestry with horseman, <br/>7th century, Coptic");
    insert_into_images("horsemen/22.jpg", 
                            "apollon.blog.bg", 
                            "http://apollon.blog.bg/izkustvo/2011/10/29/trakiiski-antichni-nahodki.843613", 
                            "A votive tablet of a Thracian horseman, <br/>2nd-3rd centuries AD");
    insert_into_images("horsemen/254626.png", 
                            "Met", 
                            "254626", 
                            "Black jasper scarabaeoid seal: Persian Horseman Slaying a Greek foot soldier with a Spear, <br/>2nd half of the 5th century, Greek/Ionian");
    insert_into_images("horsemen/255889-1330621855.jpg", 
                            "RC", 
                            "405322", 
                            "Charles I with M. de St Antoine,<br/>1633, Anthony van Dyck");
    insert_into_images("horsemen/257182-1330624364.jpg", 
                            "RC", 
                            "912355", 
                            "Sketches for the Trivulzio monument, <br/>c.1508-10, Leonardo da Vinci");
    insert_into_images("horsemen/257184-1330624368.jpg", 
                            "RC", 
                            "912357", 
                            "Study for an equestrian monument,<br/>c.1485-90, Leonardo da Vinci");
    insert_into_images("horsemen/263012-1333110585.jpg", 
                            "RC", 
                            "39958", 
                            "Augustus II porcelain figurine, cr. 1720");
    insert_into_images("horsemen/2sofi1059.jpg", 
                            "meissencollector.com", 
                            "http://www.meissencollector.com/soldiers/2sofi1059.htm", 
                            "Empress Elisabeth of Russia on Horseback,<br/>cr. 1750, Johann Joachim Kaendler, Meissen");
    insert_into_images("horsemen/3.jpg", 
                            "Old Prague", 
                            "http://www.old-prague.com/", 
                            "Saint George killing the dragon, colour lithograph (a postcard),<br/>1908, J.Jílovský, Prague, Austro-Hungarian Empire");
    insert_into_images("horsemen/312490-1449137345.jpg", 
                            "RC", 
                            "441145", 
                            "An Order of the Garter Lesser George, <br/>cr. 1750, England");
    insert_into_images("horsemen/3153042.jpg", 
                            "President and Fellows of Harvard College", 
                            "http://via.lib.harvard.edu/via/deliver/deepcontentItem?recordId=olvwork355316,DIV.LIB.FACULTY:694217", 
                            "Tombstone with Thracian rider relief, <br/>1st - 2nd century AD");
    insert_into_images("horsemen/333610-1351090963.jpg", 
                            "RC", 
                            "400589", 
                            "Queen Victoria (1819-1901) on Horseback,<br/>1845, Sir Francis Grant");
    insert_into_images("horsemen/351.jpg", 
                            "Historical Portraits", 
                            "http://www.historicalportraits.com/Gallery.asp?Page=Item&ItemID=353", 
                            "Portrait of Oliver Cromwell,<br/>1650s, Thomas Wyck");
    insert_into_images("horsemen/364573-1361535067.jpg", 
                            "RC", 
                            "912339", 
                            "A body of cavalry, <br/>c.1503-4, Leonardo da Vinci");
    insert_into_images("horsemen/37d0c7_58327ae81fb44595af158721483ee547.jpg", 
                            "BM", 
                            "465515", 
                            "Mosaic showing Atalanta on horseback hunting a lion,<br/>4th century, Villa of Charidemos, Halicarnassus (Bordum), Turkey");
    insert_into_images("horsemen/37d0c7_9b0ad355e7bb4a9b8ecbc3c9f823817b.jpg", 
                            "BM", 
                            "465514", 
                            "Mosaic showing Meleager on horseback spearing a leopard,<br/>4th century, Villa of Charidemos, Halicarnassus (Bordum), Turkey");
    insert_into_images("horsemen/380356.jpg", 
                            "State Russian Museum", 
                            "http://rmgallery.ru/en/5829", 
                            "Amazon with Blue Lions, <br/>1918, Wassily Kandinsky, Russia");
    insert_into_images("horsemen/3803622x.jpg", 
                            "State Russian Museum", 
                            "http://rmgallery.ru/en/5831", 
                            "Amazon in the Mountains, <br/>1918, Wassily Kandinsky, Russia");
    insert_into_images("horsemen/384798Amazonka_na_kone.jpg", 
                            "wassilykandinsky.net", 
                            "https://www.wassilykandinsky.net/work-177.php", 
                            "A Riding Amazon, <br/>1917, Wassily Kandinsky, Russia");
    insert_into_images("horsemen/3874058997_dcbb10d2ae_o.jpg", 
                            "Flickr - Arnaldo Bolla", 
                            "https://www.flickr.com/photos/36085855@N05/3874058997", 
                            "Statue of a Dioscuri, <br/>1844, Turin");
    insert_into_images("horsemen/4010058.jpg", 
                            "cngcoins.com", 
                            "https://www.cngcoins.com/Coin.aspx?CoinID=339268", 
                            "Chalkous, <br/>cr. 425-350 BC, Pelinna, Thessaly");
    insert_into_images("horsemen/4082479429_f57aed4e0a_o.jpg", 
                            "No longer online", 
                            NULL, 
                            "Large marble hero horseman relief from Thessaloniki, Greece, <br/>?");
    insert_into_images("horsemen/446513-1392386781.jpg", 
                            "RC", 
                            "35463", 
                            "William III garlanded by Victory,<br/>early eighteenth century, French School");
    insert_into_images("horsemen/446537-1392630016.jpg", 
                            "RC", 
                            "970125", 
                            "A sketch for the Trivulzio monument, <br/>c. 1508-10, Leonardo da Vinci");
    insert_into_images("horsemen/44668089.jpeg", 
                            "HAM", 
                            "290923", 
                            "Kantharos with the depiction of two horsemen with spears and dog hunting stag, <br/>mid-6th century BC, Boeotian");
    insert_into_images("horsemen/449-Equestrian-Parade-possibly-Set-Design-for-Romeo-and-Juliet-1942.jpg", 
                            "art-dali.com", 
                            "http://art-dali.com/1940_21.html", 
                            "Equestrian Parade, possibly Set Design for 'Romeo and Juliet', <br/>1942, Salvador Dalí");
    insert_into_images("horsemen/452621.jpeg", 
                            "RMN", 
                            "10-538812-2C6NU0YPGHO9", 
                            "Equestrian portrait of Louis XIII, <br/>17th century, Claude Déruet (attributed to)");
    insert_into_images("horsemen/4698797_b7a0b467.jpg", 
                            "geograph.org.uk", 
                            "http://www.geograph.org.uk/photo/4698797", 
                            "St. George, <br/>1922, LYR War Memorial at Manchester Victoria Station");
    insert_into_images("horsemen/4861630.jpg", 
                            "Bild Archiv Austria", 
                            "http://www.bildarchivaustria.at/Pages/ImageDetail.aspx?p_iBildID=4861630", 
                            "Maximilian II Emanuel, Elector of Bavaria,<br/>?");
    insert_into_images("horsemen/4861642.jpg", 
                            "Bild Archiv Austria", 
                            "http://www.bildarchivaustria.at/Pages/ImageDetail.aspx?p_iBildID=4861642", 
                            "Maximilian II Emanuel, Elector of Bavaria,<br/>?");
    insert_into_images("horsemen/487.jpg", 
                            "qip.ru Postcards", 
                            "http://post.kards.qip.ru/celebration/show/157/487/", 
                            "Peter I on horseback, <br/>unknown, 21 century");
    insert_into_images("horsemen/499182.jpg", 
                            "RC", 
                            "35456", 
                            "Equestrian statuette of Gustavus II Adolphus of Sweden, <br/>1635, Daniel Lang, Augsburg, Germany");
    insert_into_images("horsemen/515910-1424169269.jpg", 
                            "RC", 
                            "440084", 
                            "Alexander II of Russia's Order of the Garter collar and badge, <br/>1867, England");
    insert_into_images("horsemen/53493.jpeg", 
                            "cirota.ru", 
                            "http://www.cirota.ru/forum/view.php?subj=75836&fullview=1&order=asc&user_id=16238", 
                            "Saint George slaying Diocletian and Saint Theodore slaying a serpent, silver embossing, <br/>10th century");
    insert_into_images("horsemen/54140228_1_x.jpg", 
                            "liveauctioneers", 
                            "https://new.liveauctioneers.com/item/54140228_salvador-dali-don-quichotte-quixote-signed", 
                            "Don Quixote,<br/>?, Salvador Dalí");
    insert_into_images("horsemen/544f0e17-78a8-42fd-ba5b-0338c3eb5995.jpg", 
                            "Prado", 
                            "carlos-ii-on-horseback/fc3c7f9e-1b78-45b4-afab-b3b350f8f4f4", 
                            "Carlos II on Horseback, <br/>1698, G.B. Foggini, Prado, Madrid");
    insert_into_images("horsemen/5646824699_964b5e1568_b.jpg", 
                            "Lisa Fritsch @ flickr.com", 
                            "https://www.flickr.com/photos/lafritsch/5646824699/in/album-72157626561359490/", 
                            "Knight of Cups, <br/>1984, Universal Tarot deck, Salvador Dalí");
    insert_into_images("horsemen/57189-1292571881.jpg", 
                            "RC", 
                            "400997", 
                            "Laetitia, Lady Lade,<br/>1793, George Stubbs");
    insert_into_images("horsemen/577.jpg", 
                            "Museo del Prado", 
                            "https://www.museodelprado.es/en/whats-on/exhibition/berninis-souls-art-in-rome-for-the-spanish-court/586e263b-134e-4591-b9d4-66f0dbceb907", 
                            "Equestrian sculpture of Charles II, <br/>1680, Gian Lorenzo Bernini");
    insert_into_images("horsemen/579726-1452159099.jpg", 
                            "RC", 
                            "441221", 
                            "An Order of the Garter Lesser George, <br/>1834-5, England");
    insert_into_images("horsemen/603px-British_Airborne_Units.svg_.png", 
                            "wiki", 
                            "British_Airborne_Units.svg", 
                            "Coat of arms of the British airborne units depicting Bellerophon on Pegasus, <br/>1941, British, Daphne du Maurier (?)");
    insert_into_images("horsemen/61411-1292577085.jpg", 
                            "RC", 
                            "400560", 
                            "Portrait of a Gentleman,<br/>1791, George Stubbs");
    insert_into_images("horsemen/6235304329530006.jpg", 
                            "Fine Arts Museums of San Francisco", 
                            "http://art.famsf.org/jacopo-del-sellaio-jacopo-di-arcangelo/legend-brutus-and-portia-19787", 
                            "The Legend of Brutus and Portia,<br/>cr. 1485, Jacopo del Sellaio");
    insert_into_images("horsemen/645px-Bernat_Martorell_-_Saint_George_Killing_the_Dragon_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Bernat_Martorell_-_Saint_George_Killing_the_Dragon_-_Google_Art_Project.jpg", 
                            "Saint George Killing the Dragon, <br/>1434-5, Bernat Martorell, Barcelona, modern-day Spain");
    insert_into_images("horsemen/6576380263_64ea0b1706_o.jpg", 
                            "coinsweekly.com", 
                            "http://www.coinsweekly.com/en/Archive/8?&id=220&type=a", 
                            "Tetradrachm of King Teutamados, <br/>4th century BC (?), Paeonia");
    insert_into_images("horsemen/673px-Britain_Needs_You_at_Once_-_WWI_recruitment_poster_-_Parliamentary_Recruiting_Committee_Poster_No._108.jpg", 
                            "wiki", 
                            "Britain_Needs_You_at_Once_-_WWI_recruitment_poster_-_Parliamentary_Recruiting_Committee_Poster_No._108.jpg", 
                            "A WWI British recruitment poster No. 108, <br/>1915, England");
    insert_into_images("horsemen/690px-Памятник_Петру_I_Москва_ru.jpg", 
                            "Wikipedia", 
                            "https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:%D0%9F%D0%B0%D0%BC%D1%8F%D1%82%D0%BD%D0%B8%D0%BA_%D0%9F%D0%B5%D1%82%D1%80%D1%83_I_(%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0)_ru.jpg", 
                            "Peter the Great Statue,<br/>1997, Zurab Tsereteli");
    insert_into_images("horsemen/691px-Velazquez-felipeIII.jpg", 
                            "wiki", 
                            "Velazquez-felipeIII.jpg", 
                            "Philip III on Horseback, <br/>1634-5, Diego Velázquez");
    insert_into_images("horsemen/695px-Karl_XII_av_Sverige_Bernard_Picart.jpg", 
                            "wiki", 
                            "Karl_XII_av_Sverige_(Bernard_Picart).jpg", 
                            "Karl XII, King of Sweden, on horseback, <br/>18th century, Bernard Picart");
    insert_into_images("horsemen/6a00d8341c464853ef017eea7e8704970d.jpg", 
                            "The British Library", 
                            "http://www.bl.uk/catalogues/illuminatedmanuscripts/ILLUMIN.ASP?Size=mid&IllID=1087", 
                            "Miniature of George fighting the dragon, with a full border with George passing the king's daughter, <br/>cr. 1500, a Book of Hours, Netherlands");
    insert_into_images("horsemen/6a00d8341c464853ef01a3fcf56656970b-500wi.jpg", 
                            "The British Library", 
                            "http://britishlibrary.typepad.co.uk/digitisedmanuscripts/2014/04/the-anatomy-of-a-dragon.html", 
                            "Detail of a miniature of St George and the dragon, from the Beaufort/Beauchamp Hours, <br/>cr. 1401, England (London) and Netherlands (Bruges)");
    insert_into_images("horsemen/707830.jpg", 
                            "BM", 
                            "707830", 
                            "David mounted on horseback holding up the head of Goliath to a crowd gathered outside the walls of Jerusalem, British Museum 45r (digitally enhanced to make the details more visible)");
    insert_into_images("horsemen/72-4476-1.jpg", 
                            "Kiefer", 
                            "http://www.kiefer.de/auktion_artikel_details.aspx?KatNr=4476&Auktion=72", 
                            "St. George with the Dragon, <br/>1973, Salvador Dalí");
    insert_into_images("horsemen/725px-Cornelius_Schut_Sieg_bei_Nordlingen.jpg", 
                            "wiki", 
                            "Cornelius_Schut_Sieg_bei_Nördlingen.jpg", 
                            "Battle of Nördlingen, <br/>1615-55, Cornelis Schut");
    insert_into_images("horsemen/755px-Battle_between_Novgorod_and_Suzdal.jpg", 
                            "wiki", 
                            "Battle_between_Novgorod_and_Suzdal.jpg", 
                            "Battle between Novgorod and Suzdal in 1170 with the depiction of Saint George and other warrior saints in the bottom tier, <br/>second half of the 15th century, Novgorod, Russia");
    insert_into_images("horsemen/76ec23a1-48d3-4c96-b4e6-d03cea25538e.jpg", 
                            "Prado", 
                            "fernando-of-tuscany-on-horseback/07849769-71e5-446b-a071-7279c9ecccf2?searchid=60cbe7de-4a15-a0b0-c734-ba46df853473", 
                            "Fernando of Tuscany on Horseback, <br/>1695, Giuseppe Piamontini");
    insert_into_images("horsemen/776-Roger-Freeing-Angelica-St.-George-and-the-Damsel-1970.jpg", 
                            "art-dali.com/", 
                            "http://art-dali.com/1970_5.html", 
                            "Roger Freeing Angelica. St. George and the Damsel, <br/>1970, Salvador Dalí");
    insert_into_images("horsemen/77a9eb4d6f5cb8402c07fcbcf3434d81e81d8081.jpg", 
                            "romanplovdiv.org", 
                            "http://www.romanplovdiv.org/bg/gods/3", 
                            "Votive tablet with Thracian rider relief, <br/>3rd century AD");
    insert_into_images("horsemen/781px-Lilly_Konig_Portrait_Franz_Joseph.jpg", 
                            "wiki", 
                            "Lilly_König_Portrait_Franz_Joseph.jpg", 
                            "Portrait of the young Emperor Francis Joseph on a horse,<br/>1855, Lilly Konig, Austria");
    insert_into_images("horsemen/787px-Louis_XIV_Equestrian_Portrait.jpg", 
                            "wiki", 
                            "Louis_XIV_Equestrian_Portrait.jpg", 
                            "Equestrian portrait of Louis XIV of France, <br/>17th century, Charles Le Brun and Adam Frans van der Meulen");
    insert_into_images("berets/790px-rembrandt_van_rijn_-_self-portrait_-_google_art_project.jpg", 
                            "wiki", 
                            "Rembrandt_van_Rijn_-_Self-Portrait_-_Google_Art_Project.jpg", 
                            "Self-Portrait, <br/>1659, Rembrandt van Rijn");
    insert_into_images("allchurch/7_tokyo_story_moonviewing1.jpg", 
                            "Francis Hodgson", 
                            "http://francishodgson.com/2011/05/13/emily-allchurch-tokyo-story/", 
                            "Tokyo Story 4: Interior (after Hiroshige),<br/>2011, Emily Allchurch");
    insert_into_images("horsemen/801px-Bridgeness_slab_detail.jpg", 
                            "wiki", 
                            "Bridgeness_slab_detail.JPG", 
                            "Detail of a legionary tablet called Bridgeness slab showing a Roman mounted auxiliary trampling conquered Picts, <br/>cr. 142 AD, Roman");
    insert_into_images("horsemen/80430-1292599250.jpg", 
                            "RC", 
                            "2109", 
                            "Equestrian statuette of Louis XIV,<br/>19 century, probably after Francois Girardon (before 1692), France");
    insert_into_images("horsemen/812px-Abreha_and_Atsbeha_Church_-_Painting_03.jpg", 
                            "wiki", 
                            "Abreha_and_Atsbeha_Church_-_Painting_03.jpg", 
                            "St. George Slaying the Dragon, church wall painting,  <br/>?");
    insert_into_images("horsemen/813px-St_George_Georgia_15th_c.jpg", 
                            "wiki", 
                            "St_George,_Georgia_(15th_c).jpg", 
                            "St. George slaying the Dragon, cloisonné enamel on gold, <br/>15th century");
    insert_into_images("horsemen/817px-Retrato_ecuestre_de_Manuel_Godoy.jpg", 
                            "wiki", 
                            "Retrato_ecuestre_de_Manuel_Godoy.jpg", 
                            "Sketch for the equestrian portrait of Manuel Godoy, Duke of Alcudia, <br/>1794, Francisco Goya");
    insert_into_images("horsemen/82-001177-02.jpg", 
                            "RMN", 
                            "82-001177-02-2C6NU0HPRSAB", 
                            "Mosaics showing an Amazonomachy scene, <br/>3rd-4th century, Harbiye, Turkey");
    insert_into_images("allchurch/82-_contemplacio_n_de_la_luna_tsuki_no_misaki_8_1857_1.jpg", 
                            "Francis Hodgson", 
                            "http://francishodgson.com/2011/05/13/emily-allchurch-tokyo-story/", 
                            "Moon-Viewing Point, No. 82 of <br/>One Hundred Famous Views of Edo, <br/>1857, Utagawa Hiroshige");
    insert_into_images("horsemen/8213_1682924.jpg", 
                            "The Art Institute of Chicago", 
                            "http://www.artic.edu/aic/collections/artwork/181145", 
                            "Horse and Rider,<br/>1630, Hans Ludwig Kienle, Ulm, Germany");
    insert_into_images("horsemen/821px-King_William_III_from_NPG.jpg", 
                            "wiki", 
                            "King_William_III_from_NPG.jpg", 
                            "King William III, <br/>cr. 1690, Unknown");
    insert_into_images("horsemen/824px-Oliver_Cromwell_by_Robert_Walker.jpg", 
                            "wiki", 
                            "Oliver_Cromwell_by_Robert_Walker.jpg", 
                            "Oliver Cromwell, <br/>cr.1649, Robert Walker");
    insert_into_images("horsemen/83-001009.jpg", 
                            "RMN", 
                            "83-001009-2C6NU0NDCH2R", 
                            "Saint Georges fighting the dragon, <br/>Jacopo Bellini, Louvre 14r");
    insert_into_images("horsemen/83-001013.jpg", 
                            "RMN", 
                            "83-001013-2C6NU0NDCIHK", 
                            "The Beheading of St. John the Baptist, <br/>Jacopo Bellini, Louvre 16r");
    insert_into_images("horsemen/83-001045.jpg", 
                            "RMN", 
                            "83-001045-2C6NU0NDPLY7", 
                            "The Triumph of Bacchus, <br/>Jacopo Bellini, Louvre 36r");
    insert_into_images("horsemen/83-001050.jpg", 
                            "RMN", 
                            "83-001050-2C6NU0O70022", 
                            "Cupid carries a young satyr on the magic horse Pegasus, <br/>Jacopo Bellini, Louvre 39r");
    insert_into_images("horsemen/83-001052.jpg", 
                            "RMN", 
                            "83-001052-2C6NU0NDPMAR", 
                            "Nine characters; a rider and a horse jump over a tomb, <br/>Jacopo Bellini, Louvre 39v+40r");
    insert_into_images("horsemen/83-001065.jpg", 
                            "RMN", 
                            "83-001065-2C6NU0ND0EK9", 
                            "Horseman on a horse with a fancy harness, <br/>Jacopo Bellini, Louvre 47r");
    insert_into_images("horsemen/83-001106.jpg", 
                            "RMN", 
                            "83-001106-2C6NU0NDBDBD", 
                            "Fight between five horseman and the dragons, <br/>Jacopo Bellini, Louvre 75r");
    insert_into_images("horsemen/841px-Sir_Joshua_Reynolds_-_Sir_Jeffrey_Amherst_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Sir_Joshua_Reynolds_-_Sir_Jeffrey_Amherst_-_Google_Art_Project.jpg", 
                            "Sir Jeffrey Amhers,<br/>cr.1768, Joshua Reynolds");
    insert_into_images("horsemen/846px-Marie-Antoinette_1783_Brun_Versailles_9082.jpg", 
                            "wiki", 
                            "Marie-Antoinette_1783_Brun_Versailles_9082.jpg", 
                            "Marie-Antoinette hunting, <br/>1783, Louis-Auguste Brun");
    insert_into_images("horsemen/846px-Whistlejacket_by_George_Stubbs_edit.jpg", 
                            "wiki", 
                            "Whistlejacket_by_George_Stubbs_edit.jpg", 
                            "Whistlejacket,<br/>1762, George Stubbs");
    insert_into_images("horsemen/84e9212974341afe66bb972a44b71709.png", 
                            "Archaic Wonder", 
                            "http://archaicwonder.tumblr.com/post/78718580600/greco-scythian-gold-horseman-appliqu%C3%A9-c-4th", 
                            "Greco-Scythian gold horseman appliqué, <br/>(?) cr. 4th century BC");
    insert_into_images("horsemen/850px-Rubens_-_San_Jorge_y_el_Dragon_Museo_del_Prado_1605.jpg", 
                            "wiki", 
                            "Rubens_-_San_Jorge_y_el_Dragón_(Museo_del_Prado,_1605).jpg", 
                            "St George Fighting the Dragon, <br/>1606-10, Peter Paul Rubens");
    insert_into_images("horsemen/850px-Velazquez_-_Principe_Baltasar_Carlos_Museo_del_Prado_1634-35.jpg", 
                            "wiki", 
                            "Velázquez_-_Pr%C3%ADncipe_Baltasar_Carlos_(Museo_del_Prado,_1634-35).jpg", 
                            "Equestrian Portrait of Prince Balthasar Charles, <br/>1634-5, Diego Velázquez");
    insert_into_images("horsemen/851px-Antoine-Jean_Gros_-_Equestrian_portrait_of_prince_Boris_Yusupov_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Antoine-Jean_Gros_-_Equestrian_portrait_of_prince_Boris_Yusupov_-_Google_Art_Project.jpg", 
                            "Equestrian portrait of prince Boris Yusupov, <br/>1809, Antoine-Jean Gros");
    insert_into_images("horsemen/853px-Italia_1843.svg_.png", 
                            "wiki", 
                            "Italia_1843.svg", 
                            "Map of Italy in 1843");
    insert_into_images("horsemen/86-005013.jpg", 
                            "RMN", 
                            "86-005013-2C6NU0HLS0NM", 
                            "Triumphant emperor (Barberini ivory), <br/>cr.500-550");
    insert_into_images("horsemen/861px-Rhesos_MNA_Naples.jpg", 
                            "wiki", 
                            "Rhesos_MNA_Naples.jpg", 
                            "Situla with Odysseus (wearing the pilos hat) and Diomedes stealing the horses of Thracian king Rhesus they have just killed, <br/>360 BC, Apulia");
    insert_into_images("horsemen/863px-Carlos_V_en_Muehlberg_by_Titian_from_Prado_in_Google_Earth.jpg", 
                            "wiki", 
                            "Carlos_V_en_Mühlberg,_by_Titian,_from_Prado_in_Google_Earth.jpg", 
                            "Equestrian Portrait of Charles V at the battle of Mühlberg, <br/>1548, Titian, Augsburg, Germany");
    insert_into_images("horsemen/87-002438.jpg", 
                            "RMN", 
                            "87-002438-2C6NU0H207NK", 
                            "Louis XIV on horseback dressed à la française, <br/>after a model commissioned in 1685 (?), Gobert Thomas");
    insert_into_images("horsemen/87-005682.jpg", 
                            "RMN", 
                            "87-005682-2C6NU0HLP7YE", 
                            "Saint George trampling the dragon, <br/>1300-50");
    insert_into_images("horsemen/88-003581.jpg", 
                            "RMN", 
                            "88-003581-2C6NU00EJNYS", 
                            "Mosaics showing a hunting scene, <br/>300-25, Villa Daphne, Harbiye, Turkey");
    insert_into_images("horsemen/88-003583.jpg", 
                            "RMN", 
                            "88-003583-2C6NU00EJJNN", 
                            "Mosaics showing a hunting scene, <br/>300-25, Villa Daphne, Harbiye, Turkey");
    insert_into_images("horsemen/88-004569-02.jpg", 
                            "RMN", 
                            "88-004569-02-2C6NU0HPE8TQ", 
                            "Amphora known as the amphora of Milo: gigantomachy, including the depiction of Poseidon on a rearing horse,<br/>410-400 BC, Attica, attributed to the painter of Suessula");
    insert_into_images("horsemen/905px-David_von_Krafft_circle_-_Karl_XII.jpg", 
                            "wiki", 
                            "David_von_Krafft_(circle)_-_Karl_XII.jpg", 
                            "Karl XII,<br/>late 17th century - early 18th century, circle of David von Krafft");
    insert_into_images("horsemen/92-002654.jpg", 
                            "RMN", 
                            "92-002654-2C6NU0XNOU3G", 
                            "Henri IV, the king of France and Navarre in 1589,<br/>1600, ?");
    insert_into_images("horsemen/921px-Jose_de_Palafox_por_Goya_Prado.jpg", 
                            "wiki", 
                            "José_de_Palafox_por_Goya_(Prado).jpg", 
                            "General José de Palafox on Horseback, <br/>1814, Francisco Goya");
    insert_into_images("horsemen/93-006072-01.jpg", 
                            "RMN", 
                            "93-006072-01-2C6NU0HP2NVU", 
                            "Sarcophagus with an Amazonomachy scene, <br/>2nd century, Thessaloniki");
    insert_into_images("horsemen/939-2.jpg", 
                            "qip.ru Postcards", 
                            "http://post.kards.qip.ru/celebration/show/157/9391069/", 
                            "Peter I on horseback, <br/>unknown, end of the 18th century");
    insert_into_images("horsemen/94-054443.jpg", 
                            "RMN", 
                            "94-054443-2C6NU00UG5SW", 
                            "Henri IV on horseback bringing down his enemies, <br/>modelled in 1600 by Barthélémy Prieur, cast at the beginning of the 17th century");
    insert_into_images("horsemen/94-21-1.jpg", 
                            "Smithsonian National Museum of African Art", 
                            "https://africa.si.edu/exhibits/icons/94-21-1.html", 
                            "St. George slaying the dragon and Mary with the Christ child flanked by the archangels Michael and Gabriel, <br/>late 17th century");
    insert_into_images("horsemen/940px-Chanter_Angelos_Akotandos_-_St_George_on_Horseback_Slaying_the_Dragon_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Chanter_Angelos_Akotandos_-_St_George_on_Horseback,_Slaying_the_Dragon_-_Google_Art_Project.jpg", 
                            "St George on Horseback, Slaying the Dragon, <br/>1425-50, chanter Angelos Akotandos");
    insert_into_images("horsemen/96-001141.jpg", 
                            "RMN", 
                            "96-001141-2C6NU0NLKSWC", 
                            "Tile with a winged griffon and a horseman, <br/>6th century BC, Asia Minor");
    insert_into_images("horsemen/96-001162.jpg", 
                            "RMN", 
                            "96-001162-2C6NU0NL4SPC", 
                            "Tile with a winged griffon and a horseman, <br/>6th century BC, Asia Minor");
    insert_into_images("horsemen/9832117_1_x.jpg", 
                            "liveauctioneers", 
                            "https://new.liveauctioneers.com/item/9832117_139-salvador-dali-1904-1989-st-georges-et-le-dragon", 
                            "St. George and the Dragon, <br/>1962, Salvador Dalí");
    insert_into_images("horsemen/AN00015893_001_l.jpg", 
                            "BM", 
                            "42241", 
                            "Plate depicting a battle, <br/>1554, possibly Mancini workshop, Deruta");
    insert_into_images("horsemen/AN00019002_001_l.jpg", 
                            "BM", 
                            "41728", 
                            "Plaque depicting Battistone Castellini of Faenza, <br/>3 July 1536, Baldassare Manara, Faenza");
    insert_into_images("horsemen/AN00023299_001_l-1.jpg", 
                            "BM", 
                            "367920", 
                            "Cylinder seal depicting hunting, <br/>cr. 10th-5th century BC, Neo-Elamite II or Achaemenid (?)");
    insert_into_images("horsemen/AN00024409_001_l.jpg", 
                            "BM", 
                            "367917", 
                            "Cylinder seals depicting hunting, <br/>cr. 750 BC-300 BC");
    insert_into_images("horsemen/AN00032649_001_l.jpg", 
                            "BM", 
                            "368115", 
                            "Relief sculpture of a soldier riding a horse, 10th-9th century BC, Aramean or Hittite, Tell Halaf, Syria");
    insert_into_images("horsemen/AN00035025_001_l.jpg", 
                            "BM", 
                            "51487", 
                            "Seal of Robert Fitzwalter (1213 - 1219 ?)");
    insert_into_images("horsemen/AN00036057_001_l.jpg", 
                            "BM", 
                            "367919", 
                            "Cylinder seal depicting hunting,<br/>cr. 8th-7th century BC, Neo-Elamite II");
    insert_into_images("horsemen/AN00036770_001_l.jpg", 
                            "BM", 
                            "461665", 
                            "West Frieze of the Parthenon, Block II, <br/>438 BC-432 BC, Athens");
    insert_into_images("horsemen/AN00038779_001_l.jpg", 
                            "BM", 
                            "1346386", 
                            "Four studies for the uncompleted equestrian statue of Francesco Sforza,<br/>1490-1510, after Leonardo da Vinci");
    insert_into_images("horsemen/AN00044666_001_l.jpg", 
                            "BM", 
                            "42218", 
                            "Dish depicting a battle, <br/>cr. 1500-10, possibly Mancini workshop, Deruta");
    insert_into_images("horsemen/AN00054043_001_l.jpg", 
                            "BM", 
                            "1524739", 
                            "Saint George slaying a dragon painted on carved wood, <br/>17th century");
    insert_into_images("horsemen/AN00113857_001_l.jpg", 
                            "BM", 
                            "399074", 
                            "Detail of the first frieze of the Nereid monument showing heroic combats, <br/>cr. 390-380 BC, classical Greek, Xanthos in Lycia, close to present-day Fethiye in Mugla Province, Turkey");
    insert_into_images("horsemen/AN00118222_001_l-1.jpg", 
                            "BM", 
                            "1503554", 
                            "George Clifford, 3rd Earl of Cumberland, mounted on a prancing horse, with a view of Puerto Rico in the background, <br/>cr.1599, Thomas Cockson");
    insert_into_images("horsemen/AN00118256_001_l.jpg", 
                            "BM", 
                            "1503552", 
                            "Charles Blount, Duke of Devonshire, mounted on a prancing horse, with a view of St George's Channel and Ireland in the background,<br/>cr.1603-6, Thomas Cockson");
    insert_into_images("horsemen/AN00136320_001_l.jpg", 
                            "BM", 
                            "70786", 
                            "An Order of the Garter Lesser George, <br/>1628-9, England");
    insert_into_images("horsemen/AN00146499_001_l.jpg", 
                            "BM", 
                            "1507583", 
                            "Cylinder seal depicting hunting, <br/>cr. 10th-5th century BC, Neo-Elamite II (?)");
    insert_into_images("horsemen/AN00149889_001_l.jpg", 
                            "BM", 
                            "1351014", 
                            "The Headless Horseman,<br/>1655, Pierre Lombart");
    insert_into_images("horsemen/AN00150571_001_l.jpg", 
                            "BM", 
                            "1400366", 
                            "Equestrian portrait of Louis XV,<br/>1765, altered version of an engraving made in 1732, print made by Louis Jacques Cathelin after Noël Le Mire (Louis XV's face) and Charles Parrocel");
    insert_into_images("horsemen/AN00151997_001_l.jpg", 
                            "BM", 
                            "276395", 
                            "The Balawat Gates, <br/>bronze band depicting Shalmaneser III's campaign in Syria,<br/>858 BC-824 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00172892_001_l.jpg", 
                            "BM", 
                            "597733", 
                            "Painting on parchment depicting the Virgin Mary, the infant Christ, Saint Michael, Saint Gabriel and Saint George slaying a dragon, <br/>19th century");
    insert_into_images("horsemen/AN00236669_001_l.jpg", 
                            "BM", 
                            "399045", 
                            "Detail of the first frieze of the Nereid monument showing heroic combats, <br/>cr. 390-380 BC, classical Greek, Xanthos in Lycia, close to present-day Fethiye in Mugla Province, Turkey");
    insert_into_images("horsemen/AN00244648_001_l.jpg", 
                            "BM", 
                            "367668", 
                            "Ceramic relief plaque of a mounted Parthian archer, <br/>1st century - 3rd century");
    insert_into_images("horsemen/AN00258120_001_l.jpg", 
                            "BM", 
                            "399039", 
                            "The reconstructed façade of the Nereid Monument, <br/>cr. 390-380 BC, classical Greek, Xanthos in Lycia, close to present-day Fethiye in Mugla Province, Turkey");
    insert_into_images("horsemen/AN00258520_001_l.jpg", 
                            "BM", 
                            "466941", 
                            "Vessel-fitting, <br/>cr. 510 BC-490 BC");
    insert_into_images("horsemen/AN00267590_001_l.jpg", 
                            "BM", 
                            "282258", 
                            "Sword-sheath depicting a lion hunt, <br/>5th century BC (?), Achaemenid, Persia, Oxus Treasure");
    insert_into_images("horsemen/AN00279404_001_l.jpg", 
                            "BM", 
                            "460735", 
                            "Neck-amphora with keles(?) scene, <br/>cr. 450 BC-430 BC, Attica, attributed to Polygnotos");
    insert_into_images("horsemen/AN00297125_001_l-1.jpg", 
                            "BM", 
                            "707784", 
                            "A sculpture of a classical horseman holding a severed head on a base with a relief of a scene of judgement, <br/>c. 1440-1470, Jacopo Bellini");
    insert_into_images("horsemen/AN00297247_001_l.jpg", 
                            "BM", 
                            "74303", 
                            "An Order of the Garter Lesser George, <br/>late 17th century, England");
    insert_into_images("horsemen/AN00310635_001_l.jpg", 
                            "BM", 
                            "282242", 
                            "Shield-ornament (?), <br/>4th century BC (?), Achaemenid, Persia, Oxus Treasure");
    insert_into_images("horsemen/AN00313723_001_l.jpg", 
                            "BM", 
                            "282835", 
                            "Cylinder seal depicting a stag hunting, <br/>800 BC-750 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00326006_001_l-1.jpg", 
                            "BM", 
                            "366948", 
                            "King Ashurbanipal aiming an arrow, <br/>645-35 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00327633_001_l.jpg", 
                            "BM", 
                            "367046", 
                            "Gypsum wall panel relief showing an Assyrian official in a chariot pursuing enemy horsemen,<br/>865 BC-860 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00368406_001_l-1.jpg", 
                            "BM", 
                            "459099", 
                            "Panathenaic amphora, <br/>cr. 425 BC-400 BC, Attica, attributed to the Kuban Group");
    insert_into_images("horsemen/AN00402545_001_l.jpg", 
                            "BM", 
                            "3081909", 
                            "The Right Honorable Charles Howarde Earle of Notingham, mounted on a prancing horse, with a view of the Spanish Armada and the 1596 Battle of Cadiz in the background,<br/>1596-1603, probably 1599, Thomas Cockson");
    insert_into_images("horsemen/AN00405656_001_l.jpg", 
                            "BM", 
                            "367898", 
                            "Cylinder seal with a scene of a rider in a Median dress with a spear and a dog chasing a fallow deer, <br/>538 BC-331 BC, Achaemenid Persia");
    insert_into_images("horsemen/AN00405656_001_seal_only.jpg", 
                            "BM", 
                            "367898", 
                            "Cylinder seal with a scene of a rider in a Median dress with a spear and a dog chasing a fallow deer, <br/>538 BC-331 BC, Achaemenid Persia");
    insert_into_images("horsemen/AN00420022_001_l.jpg", 
                            "BM", 
                            "461562", 
                            "Hydria with Greeks fighting a mounted Persian, <br/>365-350 BC, Attic");
    insert_into_images("horsemen/AN00424409_001_l-1.jpg", 
                            "BM", 
                            "399634", 
                            "Panathenaic amphora, <br/>cr. 500 BC-490 BC, Attica, attributed to the Eucharides Painter");
    insert_into_images("horsemen/AN00427924_001_l.jpg", 
                            "BM", 
                            "367038", 
                            "Gypsum wall panel relief showing Assyrian cavalry and infantry attacking the enemy,<br/>865 BC-860 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00431083_001_l-1.jpg", 
                            "BM", 
                            "366948", 
                            "King Ashurbanipal killing a lion, <br/>645-35 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00449240_001_l.jpg", 
                            "BM", 
                            "3046707", 
                            "Equestrian portrait of Carlo Emmanuele, Duke of Savoy,<br/>Raphael Sadeler I, 1580-1600");
    insert_into_images("horsemen/AN00472207_001_l.jpg", 
                            "BM", 
                            "3102941", 
                            "Portrait of the Duke of Buckingham,<br/>1625, Willem van de Passe");
    insert_into_images("horsemen/AN00472207_001_l.jpg", 
                            "BM", 
                            "3102941", 
                            "Portrait of the Duke of Buckingham,<br/>1625, Willem van de Passe");
    insert_into_images("horsemen/AN00472211_001_l.jpg", 
                            "BM", 
                            "1503552", 
                            "Portrait of James, 1st Duke of Hamilton,<br/>cr.1630-2, Willem van de Passe");
    insert_into_images("horsemen/AN00472211_001_l.jpg", 
                            "BM", 
                            "1503552", 
                            "Portrait of James, 1st Duke of Hamilton,<br/>cr.1630-2, Willem van de Passe");
    insert_into_images("horsemen/AN00472213_001_l.jpg", 
                            "BM", 
                            "1503554", 
                            "Portrait of Oliver Cromwell as Lord Protector, <br/>1654-8, Willem van de Passe");
    insert_into_images("horsemen/AN00472213_001_l.jpg", 
                            "BM", 
                            "1503554", 
                            "Portrait of Oliver Cromwell as Lord Protector, <br/>1654-8, Willem van de Passe");
    insert_into_images("horsemen/AN00472992_001_l.jpg", 
                            "BM", 
                            "400476", 
                            "Furniture-fitting or chariot-fitting, <br/>cr. 540 BC-520 BC");
    insert_into_images("horsemen/AN00485256_001_l.jpg", 
                            "BM", 
                            "365975", 
                            "Wall panel relief depicting two Assyrian cavalrymen charging against enemies, <br/>cr. 728 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00486051_001_l.jpg", 
                            "BM", 
                            "367006", 
                            "Wall panel relief depicting a horseman attacked by two mounted Assyrians, <br/>cr. 728 BC, Neo-Assyrian (Iraq)");
    insert_into_images("horsemen/AN00517573_001_l.jpg", 
                            "BM", 
                            "398969", 
                            "Neck-amphora with the depiction of mounted warriors trampling an Amazon,<br/>cr. 510 BC-500 BC, Attica");
    insert_into_images("horsemen/AN00540048_001_l.jpg", 
                            "BM", 
                            "460571", 
                            "Detail of the Amazon Frieze of the Mausoleum at Halicarnassus, <br/>cr. 350 BC, Pytheos (?), classical Greek, Halicarnassus (present Bodrum, Turkey)");
    insert_into_images("horsemen/AN00540051_001_l.jpg", 
                            "BM", 
                            "460568", 
                            "Detail of the Amazon Frieze of the Mausoleum at Halicarnassus, <br/>cr. 350 BC, Pytheos (?), classical Greek, Halicarnassus (present Bodrum, Turkey)");
    insert_into_images("horsemen/AN00540059_001_l.jpg", 
                            "BM", 
                            "460558", 
                            "Detail of the Amazon Frieze of the Mausoleum at Halicarnassus, <br/>cr. 350 BC, Pytheos (?), classical Greek,  Halicarnassus (present Bodrum, Turkey)");
    insert_into_images("horsemen/AN00629709_001_l.jpg", 
                            "BM", 
                            "3078090", 
                            "Silver denarius, <br/>reverse shows Bellerophon on Pegasus brandishing spear, <br/>74 BC, Rome, Roman Republic");
    insert_into_images("horsemen/AN00803781_001_l.jpg", 
                            "BM", 
                            "59897", 
                            "Ivory panel depicting Bellerophon slaying the Chimaera, <br/>5th century, Late Roman");
    insert_into_images("horsemen/AN00859749_001_l.jpg", 
                            "BM", 
                            "459403", 
                            "Funerary stela of Aristokles found near Athens, <br/>cr. 350 BC, Attic");
    insert_into_images("horsemen/AN00893723_001_l.jpg", 
                            "BM", 
                            "466888", 
                            "Antefix, <br/>cr. 525 BC-500 BC");
    insert_into_images("horsemen/AN00897519_001_l.jpg", 
                            "BM", 
                            "59629", 
                            "Magical gem with a rider on a rearing horse (Solomon) stabbing a woman lying on the earth (Lilith), <br/>4th century");
    insert_into_images("horsemen/AN00992533_001_l.jpg", 
                            "BM", 
                            "459815", 
                            "A piece from the front of a lenos (tub-shaped sarcophagus) with a battle between Greeks and Amazons, <br/>cr. 290-310, Rome");
    insert_into_images("horsemen/AN01021901_001_l.jpg", 
                            "BM", 
                            "3376987", 
                            "Equestrian portrait of Louis XIII, <br/>1635, Crispijn de Passe the Elder");
    insert_into_images("horsemen/AN01188226_001_l.jpg", 
                            "BM", 
                            "460388", 
                            "Detail of the architrave frieze of the Nereid Monument showing a dynast at the bear hunt, <br/>cr. 390-380 BC, classical Greek, Xanthos in Lycia, close to present-day Fethiye in Mugla Province, Turkey");
    insert_into_images("horsemen/AN01390171_001_l.jpg", 
                            "BM", 
                            "3509607", 
                            "Equestrian portrait of Henri III,<br/>1585-1589, Robert Boissard");
    insert_into_images("horsemen/AN01507116_001_l.jpg", 
                            "BM", 
                            "1526424", 
                            "Stamp-seal showing a rider with a halo who attacks hydra, possibly with a lance, <br/>5th century or later, Sasanian");
    insert_into_images("horsemen/AN01511577_001_l.jpg", 
                            "BM", 
                            "1526428", 
                            "Stamp-seal showing a rider with a halo who attacks hydra, <br/>5th century or later, Sasanian");
    insert_into_images("horsemen/AN01592442_001_l.jpg", 
                            "BM", 
                            "459809", 
                            "Sarcophagus with a rider falling from his rearing horse, <br/>cr. 240-260, Athens");
    insert_into_images("horsemen/AN1612948347_l.jpg", 
                            "BM", 
                            "952940", 
                            "Cast bronze medal with the bust of Philip II of Spain and (reverse) Bellerophon on a rearing Pegasus, spearing the Chimaera, <br/>1556, Gianpaolo Poggini, Spain");
    insert_into_images("horsemen/AN1613046498_l.jpg", 
                            "BM", 
                            "449047", 
                            "Fragment of Klazomenian painted terracotta sarcophagus with youths riding horses below which run dogs, <br/>late 6th century BC, Klazomenian (modern Turkey)");
    insert_into_images("horsemen/Abilai.jpg", 
                            "My Petropavlovsk", 
                            "http://mypiter.kz/albumpic-2036-dateD.html", 
                            "Statue of Ablai Khan,<br/>2007, Petropavlovsk, Kazakhstan");
    insert_into_images("horsemen/Absalon_statue.jpg", 
                            "wiki", 
                            "Absalon_statue.jpg", 
                            "Statue of Absalon, <br/>1902, Vilhelm Bissen, Copenhagen, Denmark");
    insert_into_images("horsemen/AdamclisiMetope.jpg", 
                            "wiki", 
                            "AdamclisiMetope.jpg", 
                            "Tropeum Traiani Metope I showing a cavalryman carrying a shafted weapon, <br/>cr. 109 AD, Roman");
    insert_into_images("horsemen/Akhilleus_Penthesileia_Staatliche_Antikensammlungen_1502.jpg", 
                            "wiki", 
                            "Akhilleus_Penthesileia_Staatliche_Antikensammlungen_1502.jpg", 
                            "Amphora with Achilles and Penthesilea,<br/>cr. 520 BC, Vulci (Attic production ?)");
    insert_into_images("horsemen/Aleksandrovo_kurgan.jpg", 
                            "wiki", 
                            "Aleksandrovo_kurgan.jpg", 
                            "Aleksandrovo tomb, fragment of a mural, <br/>4th century BC, Haskovo district, Bulgaria");
    insert_into_images("horsemen/Aleksandrovo_grobniza.jpg", 
                            "wiki", 
                            "Aleksandrovo_grobniza.jpg", 
                            "Aleksandrovo tomb, <br/>4th century BC, Haskovo district, Bulgaria");
    insert_into_images("horsemen/Alexander-the-Great.png", 
                            "Le Petit Palais", 
                            "http://www.petitpalais.paris.fr/en/collections/1506/livre-des-conquetes-et-faits-d%E2%80%99alexandre", 
                            "How Alexander the Great Mounted Bucephalus (a manuscript illustration), <br/>mid-1400s, Burgundy");
    insert_into_images("horsemen/AlexanderCameo.jpg", 
                            "Hermitage Amsterdam", 
                            "https://www.hermitage.nl/en/tentoonstellingen/alexander_de_grote/achtergrond.htm", 
                            "Alexander hunting boar, <br/>1st century AD, Roman");
    insert_into_images("horsemen/Alexander_III_on_Horseback_at_Gatchina_by_N.Shilder_1880-90s_priv.coll_..jpg", 
                            "wiki", 
                            "Alexander_III_on_Horseback_at_Gatchina_by_N.Shilder_(1880-90s,_priv.coll.).jpg", 
                            "Portrait of Alexander III on Horseback at Gatchina, late 1880s or early 1890s, Nikolai Shilder");
    insert_into_images("horsemen/Alexander_I_of_Russia_by_F.Kruger_1837_Hermitage-1.jpg", 
                            "wiki", 
                            "Alexander_I_of_Russia_by_F.Kruger_(1837,_Hermitage).jpg", 
                            "Portrait of Alexander I of Russia, <br/>1837, Franz Kruger");
    insert_into_images("horsemen/Alexander_I_with_Constantine_Pavlovich_by_A.P.Grachev_1803-4.jpg", 
                            "wiki", 
                            "Alexander_I_with_Constantine_Pavlovich_by_A.P.Grachev_(1803-4).jpg", 
                            "Alexander I with Constantine Pavlovich,<br/>1803-4, A.P.Grachev");
    insert_into_images("horsemen/Alexander_the_Great_mosaic.jpg", 
                            "wiki", 
                            "Alexander_the_Great_mosaic.jpg", 
                            "Mosaic showing the battle of Issus, detail showing Alexander the Great, <br/>circa 100 BC, Pompeii, Roman empire, perhaps after an earlier Greek painting of Philoxenus of Eretria (4th-3rd century BC)");
    insert_into_images("horsemen/Alexandr_Makedonsky.jpg", 
                            "wiki", 
                            "Alexandr_Makedonský.JPG", 
                            "Alexander the Great and Bucephalus,<br/>1974, Thessaloniki, Greece");
    insert_into_images("horsemen/AlexandraFeodorovna.jpeg", 
                            "SKD", 
                            "166852", 
                            "Empress Alexandra Feodorowna on Horseback,<br/>1836, Gustav Bläser");
    insert_into_images("horsemen/Allegory_of_the_Victory_at_Poltava._Apotheosis_of_Peter_I.jpg", 
                            "wiki", 
                            "Allegory_of_the_Victory_at_Poltava._(Apotheosis_of_Peter_I)..jpg", 
                            "Allegory of the Victory at Poltava (Apotheosis of Peter I), <br/>Unknown, circa 1710");
    insert_into_images("horsemen/Amadeo.jpg", 
                            "Flickr, Ario Gaviore", 
                            "https://www.flickr.com/photos/ario_gaviore/2806448751", 
                            "Monument to Amedeo of Savoy, Duke of Aosta and Amadeo I of Spain,<br/>1902, Davide Calandra, Turin, Italy");
    insert_into_images("horsemen/Amazonomachia_Pio-Clementino_Inv896.jpg", 
                            "wiki", 
                            "Amazonomachia_Pio-Clementino_Inv896.jpg", 
                            "Sarcophagus with an Amazonomachy scene, <br/>cr. 160–170, Rome");
    insert_into_images("horsemen/Andres_Marzal_De_Sax_-_Retable_of_St_George_detail_-_WGA14171.jpg", 
                            "VA", 
                            "O17807", 
                            "Retable of St George (detail), <br/>1400-25, Valencia, Spain");
    insert_into_images("horsemen/Anne_de_Souvree.jpg", 
                            "wiki", 
                            "Porträtt_på_Anne_de_Souvree,_1670-tal_-_Skoklosters_slott_-_100373.tif", 
                            "Anne de Souvree");
    insert_into_images("horsemen/Anthonis_van_Dyck_038.jpg", 
                            "wiki", 
                            "Anthonis_van_Dyck_038.jpg", 
                            "Portrait of a soldier, <br/>1st third of the 17th century, Anthony van Dyck");
    insert_into_images("horsemen/Anthony_van_Dyck_-_St_George_and_the_Dragon_-_WGA07444.jpg", 
                            "wiki", 
                            "Anthony_van_Dyck_-_St_George_and_the_Dragon_-_WGA07444.jpg", 
                            "St George and the Dragon, <br/>before 1641, Anthony van Dyck");
    insert_into_images("horsemen/Arles-Musee-Sarcophage-Chasse.jpg", 
                            "wiki", 
                            "Arles-Musée-Sarcophage-Chasse.jpg", 
                            "Sarcophagus with a hunting scene, <br/>2nd quarter of the 4th century, Arles, France");
    insert_into_images("horsemen/Arthemis.jpg", 
                            "arkeogezi.blogspot.com", 
                            "http://arkeogezi.blogspot.com/2014/12/magnesia-ad-maeandrum.html", 
                            "Suggested reconstructions of the temple of Artemis Leucophryene, <br/>3rd-2nd century BC, Magnesia on the Maeander, Turkey");
    insert_into_images("horsemen/AshmoleanRider.jpg", 
                            "Ashmolean Museum", 
                            "https://uk.pinterest.com/pin/256283035019005303/", 
                            "Dish with a horseman, <br/>cr. 1540-70, unknown, Deruta");
    insert_into_images("horsemen/AugustIII_young3.jpeg", 
                            "wiki", 
                            "AugustIII_young3.jpeg", 
                            "August III, <br/>1704, Johann Christoph Oberdorffer");
    insert_into_images("horsemen/August_der_Starke.jpg", 
                            "wiki", 
                            "August_der_Starke.jpg", 
                            "Equestrian portrait of August II the Strong, <br/>Louis de Silvestre, circa 1718");
    insert_into_images("horsemen/BM_59621.jpg", 
                            "BM", 
                            "59621", 
                            "Magical gem with a rider on a rearing horse (Solomon) stabbing a woman lying on the earth (Lilith), <br/>4th century");
    insert_into_images("horsemen/Battle_of_Poltava_1709.png", 
                            "wiki", 
                            "Battle_of_Poltava_1709.PNG", 
                            "Battle of Poltava, <br/>Louis Caravaque, 1717-1718");
    insert_into_images("horsemen/Bellerophon_Autun.jpg", 
                            "wiki", 
                            "Bellérophon_Autun.jpg", 
                            "Mosaic depicting Bellerophon on rearing Pegasus trampling Chimaera, <br/>2nd half of 2nd century BC, Autun, France (Roman culture)");
    insert_into_images("horsemen/Bellerophon_killing_Chimaera_mosaic_from_Rhodes.jpg", 
                            "wiki", 
                            "Bellerophon_killing_Chimaera_mosaic_from_Rhodes.JPG", 
                            "Pebble mosaic depicting Bellerophon killing Chimaera, <br/>cr. 300-270 BC, Rhodos (Greece)");
    insert_into_images("horsemen/Bellerophon_killing_the_Chimera_Francesco_di_Giorgio_Siena_1439-1502_gilt_bronze_-_Bode-Museum-_DSC02459.jpg", 
                            "wiki", 
                            "Bellerophon_killing_the_Chimera,_Francesco_di_Giorgio,_Siena,_1439-1502,_gilt_bronze_-_Bode-Museum-_DSC02459.JPG", 
                            "Plaquette with Bellerophon and the Chimera, <br/>cr. 1475-80, Francesco di Giorgio, Siena (Italy)");
    insert_into_images("germany/Bismark2.jpg", 
                            "British Museum via Twitter", 
                            "https://twitter.com/britishmuseum/status/526687342871191552", 
                            "Bronze and terracotta statue of Bismarck as a blacksmith, inexpensive memorabilia, 1900");
    insert_into_images("horsemen/Bronze_equestrian_statue_of_Don_Juan_de_Onate_Salazar_by_John_Sherrill_Houser_El_Paso_International_Aitport_2006.jpg", 
                            "Wikipedia", 
                            "https://en.wikipedia.org/wiki/File:Bronze_equestrian_statue_of_Don_Juan_de_O%C3%B1ate_Salazar_by_John_Sherrill_Houser,_El_Paso_International_Aitport,_2006.JPG", 
                            "Statue of Don Juan de Onate Salazar,<br/>2006, El Paso, Texas");
    insert_into_images("horsemen/Burgas_Archaeological_Museum_-_Thracian_rider_-_P1020149.jpg", 
                            "wiki", 
                            "Burgas_Archaeological_Museum_-_Thracian_rider_-_P1020149.JPG", 
                            "A bas-relief showing a Thracian horseman, <br/>2nd century AD");
    insert_into_images("horsemen/CAM_CCF_M_44.jpg", 
                            "ArtUK", 
                            "the-siege-of-troy-the-death-of-hector-5718", 
                            "The Siege of Troy, the Death of Hector,<br/>1490-5, Biagio d'Antonio");
    insert_into_images("horsemen/CAM_CCF_M_45.jpg", 
                            "ArtUK", 
                            "the-siege-of-troy-the-wooden-horse-5719", 
                            "The Siege of Troy, the Wooden Horse,<br/>1490-5 (?), Biagio d'Antonio");
    insert_into_images("horsemen/Caballeros_dali.png", 
                            "artnet.com", 
                            "http://www.artnet.com/artists/salvador-dal%C3%AD/los-caballeros-zu-la-vida-es-sue%C3%B1o-lvGy9e3zFFK0MQYrlnCAWw2", 
                            "Los Caballeros, <br/>1975, Salvador Dalí");
    insert_into_images("horsemen/Carl_Gustaf_Wrangel.jpg", 
                            "wiki", 
                            "Carl_Gustaf_Wrangel_målad_av_David_Klöcker_Ehrenstrahl_1652_stor.jpg", 
                            "Equestrian portrait of Carl Gustaf Wrangel, 1652, David Klöcker Ehrenstrahl");
    insert_into_images("horsemen/Carlo_Emmanuele_III_equestrian_portrait.jpg", 
                            "wiki", 
                            "Carlo_Emmanuele_III_equestrian_portrait.jpg", 
                            "Equestrian portrait of Charles Emmanuel III, Duke of Savoy and King of Sardinia,<br/>1720-61, Maria Giovanna Clementi, Turin, Italy");
    insert_into_images("horsemen/Carlo_Emmanuele_II_of_Savoy_with_his_son_and_hier_Vittorio_Amedeo_Prince_of_Piedmont.jpg", 
                            "wiki", 
                            "Carlo_Emmanuele_II_of_Savoy_with_his_son_and_hier_Vittorio_Amedeo,_Prince_of_Piedmont.jpg", 
                            "Equestrian portrait of Carlo Emmanuele II of Savoy with his son and heir Vittorio Amedeo, Prince of Piedmont,<br/>1673, Giovanni Battista Brambilla");
    insert_into_images("horsemen/CarlosII_Mesina.png", 
                            "Alain Truong", 
                            "http://www.alaintruong.com/archives/2013/02/20/26460289.html", 
                            "Statue of King Carlos II of Spain and the two Sicilies, <br/>1679-1680, Giacomo Serpotta");
    insert_into_images("horsemen/Catrine_de_Neuville_Comtesse_d´Armagnacq.jpg", 
                            "wiki", 
                            "Ryttarporträtt_på_Catrine_de_Neuville_Comtesse_d´Armagnacq,_1670-tal_-_Livrustkammaren_-_100375.tif", 
                            "Catherine de Neufville d'Harcourt-Armagnac");
    insert_into_images("horsemen/Cavaler_Trac_Muzeul_din_Madara_68.jpg", 
                            "wiki", 
                            "Cavaler_Trac_Muzeul_din_Madara_68.JPG", 
                            "A bas-relief showing a Thracian horseman, <br/>?");
    insert_into_images("horsemen/Cavaler_Trac_Stara_Zagora_IMG_8671_02.jpg", 
                            "wiki", 
                            "Cavaler_Trac_Stara_Zagora_IMG_8671_02.JPG", 
                            "Marble votive tablet of the Thracian Horseman, <br/>3rd century AD");
    insert_into_images("horsemen/Cavaler_Trac_in_Muzeul_din_Madara_Bulgaria.jpg", 
                            "wiki", 
                            "Cavaler_Trac_in_Muzeul_din_Madara_Bulgaria.JPG", 
                            "Thracian horseman, a funerary stele with Greek inscription, <br/>?");
    insert_into_images("horsemen/Cavaler_trac_IMG_6046.jpg", 
                            "wiki", 
                            "Cavaler_trac_IMG_6046.JPG", 
                            "A bas-relief showing a Thracian horseman, <br/>?");
    insert_into_images("horsemen/Cavaler_trac_ct_IMG_5989.jpg", 
                            "wiki", 
                            "Cavaler_trac_ct_IMG_5989.JPG", 
                            "A bas-relief showing a Thracian horseman, <br/>3rd century AD");
    insert_into_images("horsemen/Cavaliere.jpg", 
                            "wiki", 
                            "Cavaliere_di_tipo_demetrio_poliorcete,_III_sec_ac,_con_cavallo_integrato_da_cellini_nel_1548,_01.JPG", 
                            "A Horseman, <br/>Cavalier: 3 century BC, Etruscan civilisation; Horse: 1548, Benvenuto Cellini, Italy");
    insert_into_images("horsemen/Charles_Le_Brun_001.jpg", 
                            "wiki", 
                            "Charles_Le_Brun_001.jpg", 
                            "Apotheosis de Louis XIV, <br/>1677, Charles Le Brun");
    insert_into_images("horsemen/Charles_XI_of_Sweden.jpg", 
                            "wiki", 
                            "Charles_XI_of_Sweden.jpg", 
                            "Karl XI of Sweden,<br/>1676, David Klöcker Ehrenstrahl (?)");
    insert_into_images("horsemen/Charles_X_of_Sweden_-_engraving_after_Ehrenstrahl.jpg", 
                            "wiki", 
                            "Charles_X_of_Sweden_-_engraving_after_Ehrenstrahl.jpg", 
                            "Karl X of Sweden,<br/>after David Klöcker Ehrenstrahl, 1660-80");
    insert_into_images("horsemen/Columbus.png", 
                            "Carrasquillo Associates", 
                            "http://www.carrasquilloassociates.com/recent-news/giant-christopher-columbus-statue/", 
                            "Columbus statue,<br/>1992, Zurab Tsereteli");
    insert_into_images("horsemen/Coques_Equestrian_Portrait_of_a_Couple.jpg", 
                            "wiki", 
                            "Coques_Equestrian_Portrait_of_a_Couple.jpg", 
                            "Equestrian portrait of an elegant couple, <br/>second half of the 17th century, Gonzales Coques");
    insert_into_images("horsemen/Cornelis_Anthonisz._-_Reinoud_III_van_Brederode_ca._1550.jpg", 
                            "wiki", 
                            "Cornelis_Anthonisz._-_Reinoud_III_van_Brederode_(ca._1550).jpg", 
                            "Reinoud III van Brederode, <br/>circa 1550, Cornelis Anthonisz");
    insert_into_images("horsemen/Cristina_de_Suecia_a_caballo_Bourdon.jpg", 
                            "wiki", 
                            "Sébastien_Bourdon-Christina_of_Sweden_1653.jpg", 
                            "Christina of Sweden,<br/>1653, Sébastien Bourdon");
    insert_into_images("horsemen/D52028_JM.jpg", 
                            "Bavarian National Museum", 
                            "http://www.bayerisches-nationalmuseum.de/index.php?id=487&L=1%2527&tx_paintingdb_pi%5Bp%5D=21", 
                            "Elector Maximilian II Emanuel of Bavaria as Victor over the Turks, <br/>1714, Guillielmus de Grof, Bavaria");
    insert_into_images("horsemen/R_3973_D70658_Detail.jpg", 
                            "Bavarian National Museum", 
                            "http://www.bayerisches-nationalmuseum.de/index.php?id=487&L=1%2527&tx_paintingdb_pi%5Bp%5D=21", 
                            "Elector Maximilian II Emanuel of Bavaria as Victor over the Turks (detail), <br/>1714, Guillielmus de Grof, Bavaria");
    insert_into_images("horsemen/DBP_1990_1445_Postverbindungen.jpg", 
                            "wiki", 
                            "DBP_1990_1445_Postverbindungen.jpg", 
                            "A German stamp based on a Dürer's engraving, <br/>1990, Germany");
    insert_into_images("horsemen/DP104336.jpg", 
                            "Met", 
                            "247960", 
                            "Panathenaic amphora, <br/>cr. 510 BC, Attica, attributed to the Leagros Group");
    insert_into_images("horsemen/DP109243.jpg", 
                            "Met", 
                            "247945", 
                            "Column-krater (bowl for mixing wine and water),<br/>cr. 430 BC, Attica, attributed to the Marlay Painter");
    insert_into_images("horsemen/DP119641.jpg", 
                            "Met", 
                            "253595", 
                            "Bronze cinerary urn with lid, <br/>cr. 500 BC, Etruscan");
    insert_into_images("horsemen/DP164779.jpg", 
                            "Met", 
                            "436994", 
                            "Scenes from the Story of the Argonauts, <br/>cr. 1465, Biagio di Antonio and Jacopo del Sellaio");
    insert_into_images("horsemen/DP250462.jpg", 
                            "Met", 
                            "255955", 
                            "Bronze statuette of a Scythian mounted archer, <br/>early 5th century BC");
    insert_into_images("horsemen/DP324215.jpg", 
                            "Met", 
                            "459186", 
                            "Study for the Equestrian Monument to Francesco Sforza,<br/>early to mid-1480s, Antonio Pollaiuolo");
    insert_into_images("horsemen/DP366342.jpg", 
                            "Met", 
                            "646264", 
                            "Gilt silver phiale mesomphalos, <br/>late 5th century BC, made in Ancient Greece for a Thracian patron (?)");
    insert_into_images("horsemen/DP857117.jpg", 
                            "Met", 
                            "400929", 
                            "Emperor Gaius on Horseback, plate 4, <br/>1596, Antonio Tempesta");
    insert_into_images("horsemen/DP857123.jpg", 
                            "Met", 
                            "400925", 
                            "Emperor Nero on Horseback, plate 6, <br/>1596, Antonio Tempesta");
    insert_into_images("horsemen/DP857126.jpg", 
                            "Met", 
                            "400928", 
                            "Emperor Julius Caesar on Horseback, plate 1, <br/>1596, Antonio Tempesta");
    insert_into_images("horsemen/DP857129.jpg", 
                            "Met", 
                            "400937", 
                            "Emperor Vitellus on Horseback, plate 9, <br/>1596, Antonio Tempesta");
    insert_into_images("horsemen/DP857132.jpg", 
                            "Met", 
                            "400942", 
                            "Emperor Vespasian on Horseback, plate 11, <br/>1596, Antonio Tempesta");
    insert_into_images("horsemen/DP857134.jpg", 
                            "Met", 
                            "400932", 
                            "Emperor Otho on Horseback, plate 8, <br/>1596, Antonio Tempesta");
    insert_into_images("horsemen/DT11728.jpg", 
                            "Met", 
                            "317829", 
                            "Double Diptych Icon Pendant depicting the Virgin Mary, the infant Christ, Saint Michael, Saint Gabriel and Saint George slaying a dragon, <br/>early 18th century");
    insert_into_images("horsemen/DT156.jpg", 
                            "Met", 
                            "467746", 
                            "Bowl with a Horseman Spearing a Serpent, <br/>late 1300s or early 1400s, Málaga, Spain");
    insert_into_images("horsemen/DT292812.jpg", 
                            "Met", 
                            "435666", 
                            "The Story of Joseph,<br/>cr. 1482, Biagio d'Antonio");
    insert_into_images("horsemen/DT921-1.jpg", 
                            "Met", 
                            "322973", 
                            "Plate with king hunting rams, <br/>cr. mid-5th – mid-6th century");
    insert_into_images("horsemen/DaliHorseman.png", 
                            "Google Arts & Culture", 
                            "https://www.google.com/culturalinstitute/beta/asset/zQGtWMIjPu6PFg", 
                            "Roman horseman in Iberia, <br/>1954, Salvador Dalí");
    insert_into_images("horsemen/David_von_Krafft_-_King_Charles_XII_of_Sweden_002.jpg", 
                            "wiki", 
                            "David_von_Krafft_-_King_Charles_XII_of_Sweden_002.jpg", 
                            "King Karl XII of Sweden,<br/>?, David von Krafft");
    insert_into_images("horsemen/Deruta-Two-Riders-Lustreware-1520-VA-w.jpg", 
                            "Ceramopolis", 
                            "http://www.ceramopolis.com/?p=1167", 
                            "Dish depicting two riders, <br/>cr. 1520, unknown, Deruta");
    insert_into_images("horsemen/Deruta_piatto_Giuda_Macabeo_21141.jpg", 
                            "wiki", 
                            "Deruta_piatto_Giuda_Macabeo_21141.JPG", 
                            "Dish depicting Judas Maccabeus, <br/>16 century, unknown, Deruta");
    insert_into_images("horsemen/Dexileos.jpg", 
                            "wiki", 
                            "Dexileos.JPG", 
                            "Tomb sculpture of Dexileos, <br/>cr. 394 BC, Attic");
    insert_into_images("horsemen/Diomedes_helmetted.jpg", 
                            "wiki", 
                            "Diomedes_helmetted.jpg", 
                            "A silver tetradrachm of Diomedes Soter showing Dioscuri, <br/>cr. 115-90 BC, Bactrian/Indo-Greek (Hellenistic)");
    insert_into_images("horsemen/Duke_of_Wellington_statue_Princes_Street_Edinburgh.jpg", 
                            "wiki", 
                            "Duke_of_Wellington_statue,_Princes_Street_Edinburgh.jpg", 
                            "The Duke of Wellington statue, <br/>1852, Sir John Steel, Edinburgh");
    insert_into_images("horsemen/E075166.jpg", 
                            "The British Library", 
                            "http://www.bl.uk/catalogues/illuminatedmanuscripts/ILLUMIN.ASP?Size=mid&IllID=42522", 
                            "Miniature of an armed knight of Prato on horseback (a manuscript illustration), <br/>c. 1335-40, Pacino di Buonaguida (attribution), Italy");
    insert_into_images("horsemen/E6577.jpg", 
                            "MFA", 
                            "154123", 
                            "Situla with an Amazonomachy scene, <br/>340–330 BC, Apulia");
    insert_into_images("horsemen/Edward_III_of_England_Order_of_the_Garter.jpg", 
                            "wiki", 
                            "Edward_III_of_England_(Order_of_the_Garter).jpg", 
                            "An illuminated manuscript miniature of Edward III of England, <br/>c.1430-40, William Bruges, England");
    insert_into_images("horsemen/Equestrian_Portrait_of_Jerome_Bonaparte.jpg", 
                            "wiki", 
                            "Equestrian_Portrait_of_Jerome_Bonaparte.jpg", 
                            "Portrait of Jérôme Bonaparte, <br/>cr. 1808, Antoine-Jean Gros");
    insert_into_images("horsemen/Equestrian_portrait_louis_xiv_1692.jpg", 
                            "wiki", 
                            "Equestrian_portrait_louis_xiv_1692.jpg", 
                            "Louis XIV on horseback crowned by the Victory, <br/>1674, Pierre Mignard");
    insert_into_images("horsemen/Equestrian_portrait_of_Alexis_of_Russia_17_c_GIM.jpg", 
                            "wiki", 
                            "Equestrian_portrait_of_Alexis_of_Russia_(17_c,_GIM).jpg", 
                            "Alexis I of Russia,<br/>cr.1675-85, unknown");
    insert_into_images("horsemen/Equestrian_statue_of_King_Louis_XIV_in_Paris_Place_des_Victoires.jpg", 
                            "wiki", 
                            "Equestrian_statue_of_King_Louis_XIV_in_Paris,_Place_des_Victoires.jpg", 
                            "Statue of Louis XIV, <br/>1816–1828, Paris");
    insert_into_images("horsemen/EstelaFunerariaConCombateNoroesteDeAtenasSigloIVAC.jpg", 
                            "wiki", 
                            "EstelaFunerariaConCombateNoroesteDeAtenasSigloIVAC.jpg", 
                            "Funerary stela found near Athens, <br/>4th century BC, Attic");
    insert_into_images("horsemen/Eugen_von_Savoyen_Reiterbildnis_ca_1725.jpg", 
                            "wiki", 
                            "Eugen_von_Savoyen_Reiterbildnis_ca_1725.jpg", 
                            "Portrait of Prince Eugene of Savoy,<br/>cr. 1725, unknown painter (Johann Gottfried Auerbach?)");
    insert_into_images("horsemen/Eugene_of_SavoyVS.jpg", 
                            "wiki", 
                            "Eugene_of_SavoyVS.jpg", 
                            "Equestrian portrait of Prince Eugene of Savoy,<br/>early 18th century, Jacob van Schuppen");
    insert_into_images("horsemen/Eugene_of_Savoy_during_the_Battle_of_Belgrade_1717.jpg", 
                            "wiki", 
                            "Eugene_of_SavoyVS.jpg", 
                            "Eugene of Savoy during the Battle of Belgrade (1717),<br/>cr. 1720, Johann Gottfried Auerbach");
    insert_into_images("horsemen/Excellente_Cronyke_van_Vlaenderen_fol_372v.jpg", 
                            "wiki", 
                            "Excellente_Cronyke_van_Vlaenderen_fol_372v.jpg", 
                            "Maria of Burgundy (a manuscript illustration), <br/>end of the 15th century, Bruges");
    insert_into_images("horsemen/F-1947-LF-4-open-png-12301.jpg", 
                            "The Courtauld Gallery", 
                            "https://courtauld.ac.uk/gallery/collection/decorative-arts/renaissance-decorative-arts-highlights/the-morelli-nerli-wedding-chests", 
                            "The Morelli-Nerli Wedding Chest,<br/>1472, Biagio di Antonio, Jacopo del Sellaio and Zanobi di Domenico");
    insert_into_images("horsemen/F0076_Louvre_Desjardins_Passage_du_Rhin_MR3382_rwk.jpg", 
                            "wiki", 
                            "F0076_Louvre_Desjardins_Passage_du_Rhin_MR3382_rwk.jpg", 
                            "Crossing the Rhine, 16 June 1672,<br/>1681-1685, Martin Desjardins");
    insert_into_images("horsemen/Faenza_Bergantini_22019.jpg", 
                            "wiki", 
                            "Faenza_Bergantini_22019.JPG", 
                            "Bergantini cup depicting the history of the sacrifice of Marcus Curtius, <br/>1529, Pietro Bergantini, Faenza");
    insert_into_images("horsemen/Fragmento-de-mosaico-romano-escena-de-caza-Museo-Nacional-de-Arte-Romano-de-M-rida-Espa-a-Foto-de-archivo.jpg", 
                            "DOMVS ROMANA", 
                            "https://domus-romana.blogspot.co.uk/2012/12/otium-i-ars-venatoria.html", 
                            "Mosaic with a panther hunting scene,<br/>4th century, Villa de las Tiendas, Medina, Spain");
    insert_into_images("horsemen/Francisco_de_Goya_-_Retrato_ecuestre_de_Fernando_VII_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Francisco_de_Goya_-_Retrato_ecuestre_de_Fernando_VII_-_Google_Art_Project.jpg", 
                            "Equestrian Portrait of Fernando VII of Spain, <br/>1808, Francisco Goya");
    insert_into_images("horsemen/GGFR965.jpg", 
                            "Classical Art Research Centre, Ioannou School for Classical and Byzantine Studies", 
                            "http://www.beazley.ox.ac.uk/gems/styles/greco-persian/bern.htm", 
                            "Two horsemen and a hound attack stags, <br/>??, Greco-Persian");
    insert_into_images("horsemen/Gaspar_de_Guzman_condeduque_de_Olivares_Goya.gif", 
                            "wiki", 
                            "Gaspar_de_Guzman_condeduque_de_Olivares_Goya.gif", 
                            "The Count-Duke Of Olivares, engraving based on Velázquez's portrait,<br/>1792, Francisco Goya");
    insert_into_images("horsemen/GericaultHorseman.jpg", 
                            "wiki", 
                            "GericaultHorseman.jpg", 
                            "An Officer of the Imperial Horse Guards Charging, <br/>1812, Jean Louis Théodore Géricault");
    insert_into_images("horsemen/Giovanni_Battista_Tiepolo_-_The_Force_of_Eloquence_-_WGA22255.jpg", 
                            "wiki", 
                            "Giovanni_Battista_Tiepolo_-_The_Force_of_Eloquence_-_WGA22255.jpg", 
                            "The Force of Eloquence, <br/>cr. 1723, Giovanni Battista Tiepolo, Venice, Italy");
    insert_into_images("horsemen/Giovanni_Bellini_-_Pesaro_Altarpiece_predella_-_WGA01680.jpg", 
                            "wiki", 
                            "Giovanni_Bellini_-_Pesaro_Altarpiece_(predella)_-_WGA01680.jpg", 
                            "Pesaro Altarpiece (predella), <br/>1471-4, Giovanni Bellini, Venice");
    insert_into_images("horsemen/Gonzales_Coques_-_An_equestrian_portrait_of_an_elegant_gentleman_and_lady_in_a_wooded_landscape.jpg", 
                            "wiki", 
                            "Gonzales_Coques_-_An_equestrian_portrait_of_an_elegant_gentleman_and_lady_in_a_wooded_landscape.jpg", 
                            "Equestrian portrait of an elegant gentleman and lady in a wooded landscape, <br/>second half of the 17th century, Gonzales Coques");
    insert_into_images("horsemen/Gonzales_Coques_-_Equestrian_portrait_of_Louis_II_de_Bourbon_the_Grand_Conde_as_a_boy.jpg", 
                            "wiki", 
                            "Gonzales_Coques_-_Equestrian_portrait_of_Louis_II_de_Bourbon,_the_Grand_Condé,_as_a_boy.jpg", 
                            "Equestrian portrait of Louis II de Bourbon, the Grand Condé, as a boy, <br/>1643-7, Gonzales Coques");
    insert_into_images("horsemen/Goya_Equestrian_Portrait_of_the_1st_Duke_of_Wellington.jpg", 
                            "wiki", 
                            "Goya_Equestrian_Portrait_of_the_1st_Duke_of_Wellington.jpg", 
                            "Equestrian Portrait of the 1st Duke of Wellington, <br/>1810s, Francisco Goya");
    insert_into_images("horsemen/Grande_Ludovisi_Altemps_Inv8574.jpg", 
                            "wiki", 
                            "Grande_Ludovisi_Altemps_Inv8574.jpg", 
                            "Ludovisi Battle sarcophagus showing a battle scene between Roman soldiers and Goths, <br/>cr. 250–260, Rome");
    insert_into_images("horsemen/Grave_for_Titus_Flavius_Bassus_Romisch-Germanisches_Museum_Cologne.jpg", 
                            "wiki", 
                            "Grave_for_Titus_Flavius_Bassus_Römisch-Germanisches_Museum_Cologne.jpg", 
                            "Tombstone for Roman cavalryman Titus Flavius Bassus, 1st century AD, discovered in Cologne, Germany");
    insert_into_images("horsemen/Great_Elector_as_Saint_George_and_Bellerophon.jpg", 
                            "Staatliche Museen zu Berlin", 
                            "http://www.smb-digital.de/eMuseumPlus?service=ExternalInterface&module=collection&objectId=865070", 
                            "The Great Elector as Saint George and Bellerophon, <br/>1680, Gottfried Leygebe, Prussia");
    insert_into_images("horsemen/Gregorio_XVI_che_reca_il_Santissimo_Sacramento_nella_processione_del_Corpus_Domini.jpg", 
                            "wiki", 
                            "Gregorio_XVI_che_reca_il_Santissimo_Sacramento_nella_processione_del_Corpus_Domini.jpg", 
                            "Corpus Christi Procession with Pope Gregory XVI in the Vatican (with The Vision of Constantine on the background), <br/>1840, Ferdinando Cavalleri");
    insert_into_images("horsemen/Grosvenor_Museums_-_Grabstein_2_Kavallerist.jpg", 
                            "wiki", 
                            "Grosvenor_Museums_-_Grabstein_2_Kavallerist.jpg", 
                            "Roman gravestone showing a cavalryman and naked barbarian lying beneath the horse's hooves, ?, discovered in Chester, UK");
    insert_into_images("horsemen/Gustavus_Adolphus_at_the_Battle_at_Breitenfeld.jpg", 
                            "wiki", 
                            "Gustavus_Adolphus_at_the_Battle_at_Breitenfeld.jpg", 
                            "Gustavus II Adolphus at the Battle at Breitenfeld, <br/>17th century, ?");
    insert_into_images("horsemen/Heijnen_S_FIGURE-1.png", 
                            "The Post Hole", 
                            "http://www.theposthole.org/read/article/375", 
                            "Bronze as with Julius Caesar and Bellerophon, <br/>44-43 BC, Corinth, Roman culture");
    insert_into_images("horsemen/Heros-from-Phillippi1.jpg", 
                            "wiki", 
                            "Heros-from-Phillippi1.jpg", 
                            "Funerary stele for a Caius Cornelius, <br/>?");
    insert_into_images("horsemen/House_of_the_Temple-1.jpg", 
                            "wiki", 
                            "House_of_the_Temple.JPG", 
                            "House of the Temple, design based on the Mausoleum at Halicarnassus, <br/>1911-5, Washington, D.C., U.S.A.");
    insert_into_images("horsemen/Hunt_in_the_forest_by_paolo_uccello.jpg", 
                            "wiki", 
                            "Hunt_in_the_forest_by_paolo_uccello.jpg", 
                            "The Hunt in the Forest,<br/>cr. 1470, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/IMG_2797a.jpg", 
                            "romehistory.co.uk", 
                            "http://romehistory.co.uk/VILLA/villaromanadelca.html", 
                            "Mosaic with a hunting scene, <br/>early 4th century AD, Villa del Casale, Piazza Armerina, Sicily");
    insert_into_images("horsemen/IstanbulMusArch-SarcofagoTipoSidamara-466T-sx.jpg", 
                            "wiki", 
                            "IstanbulMusArch-SarcofagoTipoSidamara-466T-sx.jpg", 
                            "Sarcophagus of the type called 'Sydamara sarcophagi', <br/>2nd half of the 3rd century, ancient Middle East");
    insert_into_images("horsemen/Italy_1494.svg_.png", 
                            "wiki", 
                            "Italy_1494.svg", 
                            "Map of Italy in 1494");
    insert_into_images("horsemen/Italy_1864_de.svg_.png", 
                            "wiki", 
                            "Italy_1864_de.svg", 
                            "Map of Italy in 1864");
    insert_into_images("horsemen/James_Scott.jpg", 
                            "wiki", 
                            "James_Scott.jpg", 
                            "Equestrian portrait of James Scott, 1st Duke of Monmouth (1649-1685),<br/>17th century, Unknown");
    insert_into_images("horsemen/Jean-Marc_Nattier_Pierre_Ier_1717.jpg", 
                            "wiki", 
                            "Jean-Marc_Nattier,_Pierre_Ier_(1717).jpg", 
                            "Portrait of Tsar Peter I, <br/>1717, Jean-Marc Nattier");
    insert_into_images("horsemen/Jeanne_dArc.jpg", 
                            "wiki", 
                            "Montebourg_-_Statue_équestre_de_Jeanne_d%27Arc.JPG", 
                            "Jeanne d'Arc Statue,<br/>1899, Mathurin Moreau, Montebourg, France");
    insert_into_images("horsemen/Johann_Gottfried_Tannauer_02.jpeg", 
                            "wiki", 
                            "Johann_Gottfried_Tannauer_02.jpeg", 
                            "Peter the Great at the Battle of Poltava, <br/>Johann Gottfried Tannauer, 1711-37");
    insert_into_images("horsemen/Johann_Gottfried_Tannauer_03.jpg", 
                            "wiki", 
                            "Johann_Gottfried_Tannauer_03.jpg", 
                            "Peter I at the Battle of Poltava, <br/>Johann Gottfried Tannauer, 1724 or 1725");
    insert_into_images("horsemen/Johannes_Adam_Simon_Oertel_Pulling_Down_the_Statue_of_King_George_III_N.Y.C._ca._1859.jpg", 
                            "wiki", 
                            "Johannes_Adam_Simon_Oertel_Pulling_Down_the_Statue_of_King_George_III,_N.Y.C._ca._1859.jpg", 
                            "Pulling Down the Statue of King George III, N.Y.C,<br/>cr.1859, Johannes Adam Simon Oertel");
    insert_into_images("horsemen/John_Churchill_1st_Duke_of_Marlborough_by_Sir_Godfrey_Kneller_Bt_2.jpg", 
                            "wiki", 
                            "John_Churchill,_1st_Duke_of_Marlborough_by_Sir_Godfrey_Kneller,_Bt_(2).jpg", 
                            "John Churchill, 1st Duke of Marlborough, <br/>before 1723, Godfrey Kneller");
    insert_into_images("horsemen/KK_4662_57544.jpg", 
                            "KHM", 
                            "90669", 
                            "Equestrian statuette of Emperor Leopold I, <br/>1690-3, Matthias Steinl, Austria");
    insert_into_images("horsemen/KK_4663_57604.jpg", 
                            "KHM", 
                            "90670", 
                            "Equestrian statuette of King Josephs I, <br/>1693, Matthias Steinl, Austria");
    insert_into_images("horsemen/KK_4664_57635.jpg", 
                            "KHM", 
                            "90671", 
                            "Equestrian statuette of Emperor Karls VI, <br/>1711-2, Matthias Steinl, Austria");
    insert_into_images("horsemen/KK_968_12844.jpg", 
                            "KHM", 
                            "87167", 
                            "Equestrian statuette of Archduke Leopold V, <br/>1630, Caspar Gras, Austria");
    insert_into_images("horsemen/Karl_XI.jpg", 
                            "wiki", 
                            "David_von_Krafft_(ateljé)_-_Karl_XI.jpg", 
                            "Karl XI on horseback, <br/>1696, Studio of David von Krafft");
    insert_into_images("horsemen/Karl_XII_at_horse.jpg", 
                            "wiki", 
                            "Karl_XII_at_horse.jpg", 
                            "Karl XII on horseback,<br/>1697-1718, David von Krafft (?)");
    insert_into_images("horsemen/Karl_XIV_Johan_king_of_Sweden_and_Norway_painted_by_Fredric_Westin.jpg", 
                            "wiki", 
                            "Karl_XIV_Johan,_king_of_Sweden_and_Norway,_painted_by_Fredric_Westin.jpg", 
                            "Karl XIV Johan, king of Sweden and Norway,<br/>1818-44, Fredric Westin");
    insert_into_images("horsemen/Khosrau_I_Textile.jpg", 
                            "wiki", 
                            "Khosrau_I_Textile.jpg", 
                            "Egyptian woven pattern, copy of an imported Sassanid silk, which itself was based on a fresco of king Khosrau I fighting against the Ethiopian forces in Yemen, ?");
    insert_into_images("horsemen/King_Charles_XI_of_Sweden_riding_a_horse.jpg", 
                            "wiki", 
                            "David_Klöcker_Ehrenstrahl_-_King_Charles_XI_of_Sweden_riding_a_horse.jpg", 
                            "King Charles XI of Sweden riding a horse,<br/>17th century, David Klöcker Ehrenstrahl");
    insert_into_images("horsemen/King_George_IV_1809.jpg", 
                            "wiki", 
                            "King_George_IV_1809.jpg", 
                            "Portrait of H.R.H. the Prince of Wales at a Review (George IV When Prince of Wales),<br/>1809, John Singleton Copley");
    insert_into_images("horsemen/King_Henry_IV_of_France.jpg", 
                            "wiki", 
                            "King_Henry_IV_of_France.jpg", 
                            "Portrait of king Henri IV, <br/>before 1622, Frans Pourbus the younger");
    insert_into_images("horsemen/King_John_hunting_-_Statutes_of_England_14th_C_f.116_-_BL_Cotton_MS_Claudius_D_II.jpg", 
                            "wiki", 
                            "King_John_hunting_-_Statutes_of_England_(14th_C),_f.116_-_BL_Cotton_MS_Claudius_D_II.jpg", 
                            "King John hunting, <br/>14th century, England");
    insert_into_images("horsemen/Kondakov_1890._St_George_icon_from_Likhauri.jpg", 
                            "wiki", 
                            "Kondakov_1890._St_George_icon_from_Likhauri.jpg", 
                            "Icon of St. George from Likhauri (Georgia),<br/>12th century");
    insert_into_images("horsemen/L-7.jpg", 
                            "www.favonius.com/romans/", 
                            "http://www.favonius.com/romans/lullingstone.htm", 
                            "Bellerophon mounted on Pegasus killing the Chimera, <br/>cr. 330-360 AD, Lullingstone Villa, Kent, U.K. (Roman culture)");
    insert_into_images("horsemen/LV_Rubens-1.jpg", 
                            "LOUIS VUITTON", 
                            "http://us.louisvuitton.com/eng-us/products/zippy-wallet-nvprod400147v", 
                            "Zippy wallet with the reproduction of 'Tiger Hunt', <br/>2017, $1770, LOUIS VUITTON");
    insert_into_images("horsemen/LW_ECSH_J970154.jpg", 
                            "ArtUK", 
                            "the-moroccan-ambassador-178923", 
                            "The Moroccan Ambassador, <br/>1684, Godfrey Kneller and Jan Wyck");
    insert_into_images("horsemen/La_Chasse_au_loup_et_au_renard_-_Rubens.jpg", 
                            "wiki", 
                            "La_Chasse_au_loup_et_au_renard_-_Rubens.jpg", 
                            "Wolf and Fox Hunt, <br/>cr. 1616, Peter Paul Rubens");
    insert_into_images("horsemen/Le_Veel_Jeanne_dArc.jpg", 
                            "wiki", 
                            "Le_Véel_Jeanne_d%27Arc.jpg", 
                            "Jeanne d'Arc Statue,<br/>dedicated in 1899, destructed in 1941, Orléans, France");
    insert_into_images("horsemen/Lebrun_Louis1668.jpg", 
                            "wiki", 
                            "Lebrun_Louis1668.jpg", 
                            "Portrait of King Louis XIV during the War of Devolution, <br/>1668, Charles Le Brun");
    insert_into_images("horsemen/Leccion_de_equitacion-1.jpg", 
                            "wiki", 
                            "Lección_de_equitación_del_príncipe_Baltasar_Carlos,_by_Diego_Velázquez.jpg", 
                            "Prince Baltasar Carlos with the Count-Duke of Olivares outside the Buen Retiro palace, <br/>1636, Diego Velázquez");
    insert_into_images("horsemen/Lekythos-_2.jpg", 
                            "HM", 
                            "!ut/p/a1/pVA7b4MwEP4rycDongHzGi0SVYqU0lJVwV6QC5i4AZsEq-3Pr9m6pGnVm747nb4XcKiAa_GuemGV0WJYdh7XBaWxH-Z4V-TRBtOifIzK_OEe-wQOwIEPugfW6QU22k72COwkRjXXnfbwh7mc5pWRK3GxHg6iOweao-jMYHrViGG5KykaO3vYz5zOQjM1qgUm_TR5JYFEWdBliGRRjNI4ISiQROIsFC1uibPInEV8ZSj-VYKfGZiTSK5xxPsAnheOQ76vn162pfv-VsgfkuxuWXVR1dv5zKnr2WjbfVqo_lP0NI5pOKIKI8HSMBp6ul5_AZIJohM!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Relief Lekythos with Hunting Scene, <br/>early 4th century BC, ?");
    insert_into_images("horsemen/Lekythos_1.jpg", 
                            "HM", 
                            "!ut/p/a1/pZDLTsMwEEV_pV1kaTxOYjddWgEhVSqBINTYm8h1HjVN7LaxgM_H2bEpDzGrmdHozL0XS1xhadWb6ZU3zqphniWrC84ZSXLYFDm9BV6Uj7TMH-6BpHiHJZaD7bFo7dxq60_-gMVRjWaqWxvBu7scp4XrFuriI4jpTWj0QbVucL3Rapj3plPaTxEQBiyZMSdtGixI0-33TdYgAqRDKcRrlClCUZy2lK00rFmaBIkiSIQrxeFXDr4niPBidY3BtjF-nhm7fFs_vdyV4fpLIH9wsvlJarBqXs9nyUPOzvr2w-PqP0GfxjFLRlQBUiJL6NDz5fITHwjF_w!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Lekythos with Boar Hunt, <br/>ca. 380 BC, signed Xenophantos the Athenian");
    insert_into_images("horsemen/Leopold_V_Archduke_of_Austria_-_Innsbruck.jpg", 
                            "wiki", 
                            "Leopold_V,_Archduke_of_Austria_-_Innsbruck_127.jpg", 
                            "Equestrian statue of Archduke Leopold V on top of Leopoldsbrunnen, <br/>1631, Caspar Gras, Innsbruck, Austria");
    insert_into_images("horsemen/Lomonosov_Poltava_1762_1764.jpg", 
                            "wiki", 
                            "Lomonosov_Poltava_1762_1764.jpg", 
                            "Battle of Poltava (mosaic), <br/>Mikhail Lomonosov, 1762–1764");
    insert_into_images("horsemen/Louis_XIII_Richelieu_devant_La_Rochelle.jpg", 
                            "wiki", 
                            "Louis_XIII_Richelieu_devant_La_Rochelle.jpg", 
                            "Louis XIII and Cardinal Richelieu in front of La Rochelle,<br/>17th century, Unknown");
    insert_into_images("horsemen/Louis_XIII_on_horseback_by_Juste_dEgmont.jpg", 
                            "wiki", 
                            "Louis_XIII_on_horseback_by_Juste_d%27Egmont.jpg", 
                            "Louis XIII on horseback,<br/>circa 1630, Justus van Egmont");
    insert_into_images("horsemen/Louis_XVI_roi_citoyen.png", 
                            "wiki", 
                            "Louis_XVI,_roi_citoyen.PNG", 
                            "Louis XVI as a citizen-king, sporting the tricolour cockade on his hat, <br/>1791, Jean Baptiste François Carteaux");
    insert_into_images("horsemen/Louis_de_Silvestre_-_August_III.jpg", 
                            "wiki", 
                            "Louis_de_Silvestre_-_August_III.jpg", 
                            "Equestrian portrait of August III, <br/>Louis de Silvestre, circa 1718");
    insert_into_images("horsemen/LovetsBelt.png", 
                            "Achaemenid Interfaces", 
                            "https://www.academia.edu/1304243/Achaemenid_Interfaces", 
                            "Silver gilt belt, <br/>5th-4th century BC, Lovets, central Bulgaria");
    insert_into_images("horsemen/Lucas_Cranach_crucifixion.jpg", 
                            "wiki", 
                            "Lucas_Cranach_d.Ä._-_Kreuzigung_mit_dem_gläubigen_Hauptmann_(Sevilla).jpg", 
                            "The Crucifixion with the Converted Centurion, <br/>1538, Lucas Cranach the Elder, Germany");
    insert_into_images("horsemen/MANF1999_99_101_SEQ_001_P.jpg", 
                            "Cer.es", 
                            "http://ceres.mcu.es/pages/Main?idt=80872&inventary=1999/99/101&table=FMUS&museum=MAN", 
                            "Bell-krater showing a battle of two Amazons and one Greek,<br/>cr. 440 BC, Attica");
    insert_into_images("horsemen/Macedonia-02786_-_Warrior_on_a_Horse_10904983734.jpg", 
                            "wiki", 
                            "Macedonia-02786_-_Warrior_on_a_Horse_(10904983734).jpg", 
                            "Warrior on a Horse (detail), <br/>2011, Valentina Stevanovska, Skopje, Macedonia");
    insert_into_images("horsemen/Madame_La_Comtesse_de_Saint_Geran.jpg", 
                            "wiki", 
                            "Ryttarporträtt_på_Madame_La_Comtesse_de_Saint_Geran,_1670-tal_-_Livrustkammaren_-_100377.tif", 
                            "Francoise Madeleine Claude St. Géran");
    insert_into_images("horsemen/Madame_La_Duchesse_De_Bouillon.jpg", 
                            "wiki", 
                            "Ryttarporträtt_på_Madame_La_Duchesse_De_Bouillon,_1670-tal_-_Skoklosters_slott_-_100374.tif", 
                            "Marie-Anne de Bouillon");
    insert_into_images("horsemen/Madame_La_Duchesse_de_la_Ferte.jpg", 
                            "wiki", 
                            "Ryttarporträtt_på_Madame_La_Duchesse_de_la_Ferte,_1670-tal_-_Skoklosters_slott_-_100376.tif", 
                            "Marie Isabelle Gabrielle Angelique de Lamotte-Houdancourt, the Duchess of La Ferté");
    insert_into_images("horsemen/Madame_la_Duchesse_d´Aumont.jpg", 
                            "wiki", 
                            "Ryttarporträtt_på_Madame_la_Duchesse_d´Aumont,_1670-tal_-_Livrustkammaren_-_100378.tif", 
                            "Francoise Angelique de Lamotte-Houdancourt, the Duchess of Aumont");
    insert_into_images("horsemen/Martens_Poltava.jpg", 
                            "wiki", 
                            "Marten%27s_Poltava.jpg", 
                            "Battle of Poltava, <br/>Pierre-Denis Martin, 1726");
    insert_into_images("horsemen/Max_Emanuel_Reiter3.jpg", 
                            "Residenz Muenchen", 
                            "http://www.residenz-muenchen-blog.de/?p=1267", 
                            "Maximilian II Emanuel, <br/>?, Ferdinand Karl Bruni");
    insert_into_images("horsemen/Maximilian_1470.png", 
                            "artsy.net", 
                            "https://www.artsy.net/artwork/leonhard-beck-the-prince-at-the-bird-catching", 
                            "The Prince at the Bird-Catching, <br/>1514-6, Leonhard Beck");
    insert_into_images("horsemen/Mercurius.jpg", 
                            "massarra.org", 
                            "http://home.massarra.org/samina/Saints/7_Icons/Martyrs/Mercurius.JPG", 
                            "Saint Mercurius, <br/>?");
    insert_into_images("horsemen/Mercurius_1.jpg", 
                            "massarra.org", 
                            "http://home.massarra.org/samina/Saints/7_Icons/Martyrs/Mercurius_1.JPG", 
                            "Saint Mercurius, <br/>?");
    insert_into_images("horsemen/Mirabellgarten_Fountain_8407353161.jpg", 
                            "wiki", 
                            "Mirabellgarten_Fountain_(8407353161).jpg", 
                            "Pegasus, <br/>1661, Caspar Gras, Salzburg, Austria");
    insert_into_images("horsemen/Monnaie_de_Bactriane_Eucratide_I_2_faces.jpg", 
                            "wiki", 
                            "Monnaie_de_Bactriane,_Eucratide_I,_2_faces.jpg", 
                            "Gold 20-stater of Eucratides I, the largest gold coin ever minted in Antiquity (weight 169.2 grams, diameter of 58 millimetres), showing Dioscuri, <br/>cr. 171-145 BC, Bactrian (Hellenistic)");
    insert_into_images("horsemen/Monreale-Duomo-North-Door-Barisano.jpg", 
                            "wondersofsicily.com", 
                            "http://www.wondersofsicily.com/palermo-monreale-cathedral.htm", 
                            "St. George killing the dragon, detail of the bronze North door, <br/>cr. 1190, Monreale Cathedral, Sicily");
    insert_into_images("horsemen/Monumento_a_Felipe_IV_Madrid_02.jpg", 
                            "Wikipedia", 
                            "https://es.wikipedia.org/wiki/Archivo:Monumento_a_Felipe_IV_%28Madrid%29_02.jpg", 
                            "Monument to Philip IV, Pietro Tacca, <br/>1634-40, Madrid");
    insert_into_images("horsemen/Monumento_al_General_San_Martin.jpg", 
                            "wiki", 
                            "Monumento_al_General_San_Martín.jpg", 
                            "Monument to José de San Martín, <br/>completed in 1860, dedicated in 1863, Louis Joseph Daumas, Buenos Aires, Argentina");
    insert_into_images("horsemen/Murat_by_Gros.jpg", 
                            "wiki", 
                            "Murat_by_Gros.jpg", 
                            "Equestrian portrait of Joachim Murat, <br/>1812, Antoine-Jean Gros");
    insert_into_images("horsemen/NAMA_Epinetron_Bellerophon.jpg", 
                            "wiki", 
                            "NAMA_Epinetron_Bellérophon.jpg", 
                            "Bellerophon and the Chimera, edge of an epinetron (thigh-protector used by a woman when weaving), <br/>cr. 425-420 BC, Attic, Ancient Greece");
    insert_into_images("horsemen/NTII_TTT_1298182.jpg", 
                            "ArtUK", 
                            "an-equestrian-portrait-131375", 
                            "An equestrian portrait, <br/>before 1684, Gonzales Coques (style of)");
    insert_into_images("horsemen/Nader_Shah_Statue_in_Mashhad.jpg", 
                            "wiki", 
                            "Nader_Shah_Statue_in_Mashhad.jpg", 
                            "Nader Shah Statue,<br/>1956, Mashhad, Iran");
    insert_into_images("horsemen/Nessus-by-Giambologna.png", 
                            "Le Louvre", 
                            "http://www.louvre.fr/en/oeuvre-notices/abduction-deianira", 
                            "Nessus Abducting Deianira,<br/>1576, Giambologna");
    insert_into_images("horsemen/Nessus-by-Tacca.png", 
                            "Le Louvre", 
                            "http://www.louvre.fr/en/oeuvre-notices/abduction-deianira-0", 
                            "Nessus Abducting Deianira,<br/>Early 17th century, Pietro Tacca");
    insert_into_images("horsemen/NessusAugsburg.png", 
                            "NRC", 
                            "http://www.nrc.nl/nieuws/2009/02/23/kunstcollectie-yves-saint-laurent", 
                            "Nessus Abducting Deianira,<br/>cr.1630-50, Andreas I Wickert, Augsburg");
    insert_into_images("horsemen/Nicholas_II_of_Russia_in_the_uniform_of_Life_Guard_Hussar_Regiment.jpg", 
                            "wiki", 
                            "Nicholas_II_of_Russia_in_the_uniform_of_Life_Guard_Hussar_Regiment.jpg", 
                            "Nicholas II of Russia in the uniform of Life Guard Hussar Regiment, <br/>1896, unknown");
    insert_into_images("horsemen/Nicolas_I.jpg", 
                            "wiki", 
                            "Клодт.Император_Николай_I.jpg", 
                            "Statue of Nicholas I, <br/>1859, Saint Petersburg");
    insert_into_images("horsemen/Nicolas_I.jpg", 
                            "wiki", 
                            "Клодт.Император_Николай_I.jpg", 
                            "Statue of Nicholas I, <br/>1859, Saint Petersburg");
    insert_into_images("horsemen/Oinochoe_panathenaia_riders_Staatliche_Antikensammlungen.jpg", 
                            "wiki", 
                            "Oinochoe_panathenaia_riders_Staatliche_Antikensammlungen.jpg", 
                            "Oinochoe showing a horseman and an amphora showing a horseman,<br/> beginning of the 4th century BC, Attic");
    insert_into_images("horsemen/OrderStGeorgeNecklace.jpg", 
                            "BM", 
                            "70787", 
                            "An Order of the Garter collar with Great George, <br/>1628-9, England");
    insert_into_images("horsemen/Order_of_the_Garter_Ticket__18_as167a772b.jpg", 
                            "Antiques Atlas", 
                            "http://www.antiques-atlas.com/antique/order_of_the_garter_ticket_-_1805/as167a772", 
                            "Order of the Garter Ticket, <br/>1805, engraved by Ottway, 27 Barbican, London");
    insert_into_images("horsemen/PD.44-1999.jpg", 
                            "The Fitzwilliam museum", 
                            "http://webapps.fitzmuseum.cam.ac.uk/explorer/index.php?oid=52", 
                            "A rider on a rearing horse,<br/>1481-2, Leonardo da Vinci");
    insert_into_images("horsemen/Peonia_patraos_tetradracma_335-315_ac_ca.jpg", 
                            "wiki", 
                            "Peonia,_patraos,_tetradracma,_335-315_ac_ca.JPG", 
                            "Tetradrachm of King Paionia, <br/>335–315 BC, Paeonia");
    insert_into_images("goldenbronzehorsemen/PeterI.jpg", 
                            "wiki", 
                            "Peter_I_by_Kneller.jpg", 
                            "Peter I the Great<br/>(1672 – 1725)");
    insert_into_images("horsemen/Peter_Paul_Rubens_-_Equestrian_Portrait_of_Giancarlo_Doria_-_WGA20352.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_-_Equestrian_Portrait_of_Giancarlo_Doria_-_WGA20352.jpg", 
                            "Equestrian Portrait of Giancarlo Doria, <br/>1606, Peter Paul Rubens");
    insert_into_images("horsemen/Peter_Paul_Rubens_-_Lion_Hunt_-_WGA20415.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_-_Lion_Hunt_-_WGA20415.jpg", 
                            "Lion Hunt, <br/>cr. 1621, Peter Paul Rubens");
    insert_into_images("horsemen/Peter_Paul_Rubens_-_The_Calydonian_Boar_Hunt_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_-_The_Calydonian_Boar_Hunt_-_Google_Art_Project.jpg", 
                            "Calydonian Boar Hunt, <br/>cr. 1611-2, Peter Paul Rubens");
    insert_into_images("horsemen/Peter_Paul_Rubens_-_The_Cardinal_Infante_-_WGA20387.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_-_The_Cardinal_Infante_-_WGA20387.jpg", 
                            "The Cardinal-Infante Don Fernando de Austria at the Battle of Nördlingen, <br/>1634-5, Peter Paul Rubens");
    insert_into_images("horsemen/Peter_Paul_Rubens_083.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_083.jpg", 
                            "Hippopotamus and Crocodile Hunt, <br/>1615, Peter Paul Rubens");
    insert_into_images("horsemen/Pierre_Mignard_-_Ludwig_XVI._zu_Pferde_-_hi_res_1200dpi.jpg", 
                            "wiki", 
                            "Louis XIV of France being crowned by victory after the 1673 Siege of Maastricht by Pierre Mignard.jpg", 
                            "Louis XIV on horseback, <br/>1673, Pierre Mignard");
    insert_into_images("horsemen/Pittore_di_baltimora_apulia_piatto_con_chimera_e_bellerofonte_su_pegaso_350-300_ac_ca._depositi_M._Naz._romano.jpg", 
                            "wiki", 
                            "Pittore_di_baltimora_(apulia),_piatto_con_chimera_e_bellerofonte_su_pegaso,_350-300_ac_ca._(depositi_M._Naz._romano).JPG", 
                            "Plate with Bellerophon and Pegasus, <br/>cr. 350-300 BC, Apulia, Italy (Greek culture)");
    insert_into_images("horsemen/Place_des_Victoires_Louis_XIV_2.jpg", 
                            "wiki", 
                            "Place_des_Victoires_Louis_XIV_(2).jpg", 
                            "Statue of Louis XIV <br/>(a close-up), <br/>1816–1828, Paris");
    insert_into_images("horsemen/Portrait-de-Marie-Leczinska-devant-le-ch_teau-de-Fontainebleau-par-Jean-Baptiste-Martin-lAncien-c-1725.jpg", 
                            "wiki", 
                            "Portrait_de_Marie_Leczinska_devant_le_château_de_Fontainebleau_par_Jean_Baptiste_Martin,_l%27Ancien_(1659-1735).jpg", 
                            "Portrait of Marie Leczinska in front of the palace of Fontainebleau,<br/>1725, Jean-Baptiste Martin");
    insert_into_images("horsemen/Portrait_equestre_de_la_reine_Brun_de_Versoix_XVIIIe.jpg", 
                            "wiki", 
                            "Portrait_équestre_de_la_reine,_Brun_de_Versoix,_XVIIIe.jpg", 
                            "Equestrian portrait of the queen Marie-Antoinette, <br/>1783, Louis-Auguste Brun");
    insert_into_images("horsemen/President_and_Mrs._Ford_hug_-_NARA_-_7140623.jpg", 
                            "wiki", 
                            "President_and_Mrs._Ford_hug_-_NARA_-_7140623.jpg", 
                            "Photograph of President Gerald R. Ford and First Lady Betty Ford in the Oval Office with the Bronco Buster on the background,<br/>6 December 1974");
    insert_into_images("horsemen/Price_2131.jpg", 
                            "wildwinds.com", 
                            "http://www.wildwinds.com/coins/greece/macedonia/kings/alexander_III/t.html", 
                            "Coin of Alexander the Great, <br/>cr. 320 BC");
    insert_into_images("horsemen/rani_junction.jpg", 
                            "ahmedabadsale.com", 
                            "http://www.ahmedabadsale.com/html/photos/Ahmedabad_City_Photographs/Shivranjani_S.G.Highway/1.html", 
                            "Statue of Rani of Jhansi, <br/>2013, Ahmedabad, India");
    insert_into_images("horsemen/RGM063.jpg", 
                            "wiki", 
                            "RGM063.jpg", 
                            "Roman cavalryman tombstone, <br/>1st century AD, discovered in Cologne, Germany");
    insert_into_images("horsemen/RP-P-OB-55.jpg", 
                            "RJK", 
                            "RP-P-OB-55.639", 
                            "Nessus Abducting Deianira,<br/>1603 - 1637, Willem van Haecht (after Giambologna)");
    insert_into_images("horsemen/Rani-Jhansi-Statue-installed1.jpg", 
                            "Hill Post", 
                            "http://hillpost.in/2010/11/rani-jhansi-statue-installed-at-shimla/23050/", 
                            "Statue of Rani of Jhansi, <br/>2010, Fakir Chandra Parida, Shimla, India");
    insert_into_images("horsemen/Raphael_-_Saint_George_and_the_Dragon.jpg", 
                            "wiki", 
                            "Raphael_-_Saint_George_and_the_Dragon.jpg", 
                            "Saint George and the Dragon,<br/>circa 1506, Raphael");
    insert_into_images("horsemen/Robert_Bruce_V_seal.png", 
                            "wiki", 
                            "Robert_Bruce_V_(seal).png", 
                            "Seal of Robert de Brus, 5th Lord of Annandale, 1291");
    insert_into_images("horsemen/Rogier_van_der_Weyden_-_Saint_George_and_the_Dragon.jpg", 
                            "wiki", 
                            "Rogier_van_der_Weyden_-_Saint_George_and_the_Dragon.jpg", 
                            "Saint George and the Dragon, <br/>circa 1432-5, Rogier van der Weyden, Netherlandish (present-day Belgium and France)");
    insert_into_images("horsemen/Rudolf.jpg", 
                            "RJK", 
                            "RP-P-OB-5030", 
                            "Rudolf II on horseback, <br/>1603, Aegidius Sadeler, Marcus Sadeler and Adriaen de Vries, ?");
    insert_into_images("horsemen/S.George_Novgorod_mid._14_c_GTG.jpg", 
                            "wiki", 
                            "S.George_(Novgorod,_mid._14_c,_GTG).jpg", 
                            "The Miracle of Saint George and the Dragon, <br/>mid-14th century, Novgorod, Russia");
    insert_into_images("horsemen/SC115764.jpg", 
                            "MFA", 
                            "154121", 
                            "Bell-krater showing a battle of Troilus and Achilles, <br/>cr. 380–370 BC, the Hoppin Painter, Apulia");
    insert_into_images("horsemen/SC246821.jpg", 
                            "MFA", 
                            "957", 
                            "Stater of Sodamos, showing Dioscuri,<br/>cr. 281–272 BC, Taras (Tarentum), Calabria (Hellenistic)");
    insert_into_images("horsemen/SC247577.jpg", 
                            "MFA", 
                            "1308", 
                            "Tetradrachm of King Paionia, <br/>335–315 BC, Paeonia");
    insert_into_images("horsemen/SC249640.jpg", 
                            "MFA", 
                            "2957", 
                            "Stater with horse and rider, struck under Archelaos I, <br/>413–399 BC, Macedonia");
    insert_into_images("horsemen/SC249728.jpg", 
                            "MFA", 
                            "3782", 
                            "Coin with a filleted head, struck under Philip II, <br/>359–336 BC, Macedonia");
    insert_into_images("horsemen/SC250259.jpg", 
                            "MFA", 
                            "3979", 
                            "Coin with a male head, struck in the name of Alexander the Great, <br/>cr. 316–297 BC, Macedonia");
    insert_into_images("horsemen/SC250271.jpg", 
                            "MFA", 
                            "2971", 
                            "Coin with the head of Apollo, struck under Alexander V, <br/>295 BC, Macedonia");
    insert_into_images("horsemen/SC250836.jpg", 
                            "MFA", 
                            "3571", 
                            "Drachm with galloping bull,<br/>cr. 370 BC, Larissa, Thessaly");
    insert_into_images("horsemen/SC250951.jpg", 
                            "MFA", 
                            "3369", 
                            "Drachm with a horse and a rider,<br/>cr. 450–400 BC, Pelinna, Thessaly");
    insert_into_images("horsemen/SC250984.jpg", 
                            "MFA", 
                            "4050", 
                            "Stater with the head of Hekate, struck under Alexander, <br/>cr. 369–357 BC, Pherai, Thessaly");
    insert_into_images("horsemen/SC263507.jpg", 
                            "MFA", 
                            "3472", 
                            "Drachm with the head of Athena, signed by Telephantos, <br/>cr. 425–405 BC, Pharsalos, Thessaly");
    insert_into_images("horsemen/SC268043-1.jpg", 
                            "MFA", 
                            "3238", 
                            "Stater with the head of Demetrios Poliorketes, <br/>cr. 290–289 BC, Macedonia");
    insert_into_images("horsemen/SC304264-1.jpg", 
                            "MFA", 
                            "260168", 
                            "Scaraboid with Bellerophon riding Pegasus and attacking the Chimaera, <br/>400–375 BC, Greek");
    insert_into_images("horsemen/SC44777.jpg", 
                            "Met", 
                            "451043", 
                            "Textile fragment with a hunting scene, <br/>8th century, Egypt or Syria");
    insert_into_images("horsemen/SC47844.jpg", 
                            "MFA", 
                            "153712", 
                            "Drinking cup (kylix) with the depiction of an Arimaspean on horseback and a gryphon, <br/>cr. 4th century BC, Attica");
    insert_into_images("horsemen/SC70606.jpg", 
                            "MFA", 
                            "154084", 
                            "Fragment of an Oinochoe with Bellerophon mounted on Pegasus (white) attacking the Chimaera, <br/>cr. 350–340 BC, Italy, Apulia (Greek culture)");
    insert_into_images("horsemen/Saint_George_Puglia.png", 
                            "paradoxplace.com", 
                            "http://www.paradoxplace.com/Perspectives/Sicily%20&%20S%20Italy/Puglia/Trani/Trani_Bronze_Doors/Trani_Doors.htm", 
                            "St. George killing the dragon, detail of the main doors, <br/>1185, Trani Cathedral, Puglia");
    insert_into_images("horsemen/Saint_Mercurius_killing_Iulian.jpg", 
                            "wiki", 
                            "Saint_Mercurius_killing_Iulian.jpg", 
                            "Saint Mercurius, <br/>?");
    insert_into_images("horsemen/Salvador-DALI-Saint-Georges-et-le-Dragon-1488440434.jpg", 
                            "Art BROKERAGE", 
                            "https://www.artbrokerage.com/Salvador-Dali/Saint-Georges-Et-Le-Dragon-1974-80152", 
                            "St. George and the Dragon, <br/>1974, Salvador Dalí");
    insert_into_images("horsemen/Salvador_Dali_Crazy_Horse_1968_Early_and_Rare.jpg", 
                            "Art BROKERAGE", 
                            "https://www.artbrokerage.com/Salvador-Dali/Crazy-Horse-1968-Early-and-Rare-91979", 
                            "Crazy horse, <br/>1968, Salvador Dalí");
    insert_into_images("horsemen/Sarcofago_di_santelena_01_2.jpg", 
                            "wiki", 
                            "Sarcofago_di_sant%27elena_01.jpg", 
                            "Sarcophagus of Saint Helena, <br/>cr. 340, Rome");
    insert_into_images("horsemen/Sarcophagus_Portonaccio_Massimo.jpg", 
                            "wiki", 
                            "Sarcophagus_Portonaccio_Massimo.jpg", 
                            "Portonaccio sarcophagus showing a battle scene between Roman soldiers and Germans, <br/>cr. 180–200, Rome");
    insert_into_images("horsemen/Sasanian_plate.jpg", 
                            "Miho Museum", 
                            "http://www.miho.or.jp/booth/html/artcon/00000489e.htm", 
                            "Plate with King Hunting Lions,<br/>5th century");
    insert_into_images("horsemen/Screen-Shot-2016-05-27-at-18.19.35.png", 
                            "HAUM", 
                            "https://dib.haum.info/Skulpturen%20und%20au%C3%9Fereurop%C3%A4ische%20Kunst/Bronze/index.html#Bro%20178.jpg", 
                            "Duke Heinrich Julius of Braunschweig on horseback, <br/>1605, Adriaen de Vries, Prague");
    insert_into_images("horsemen/Sidamara_Archaeologisches_Museum_Istanbul.jpg", 
                            "wiki", 
                            "Archaeologisches_Museum_Istanbul.jpg", 
                            "Sydamara sarcophagus, <br/>2nd half of the 3rd century, Konya, modern Turkey");
    insert_into_images("horsemen/Siria_seleucidi_Antioco_VI_tetradracma_di_antiochia_143-142_ac_ca.jpg", 
                            "wiki", 
                            "Siria,_seleucidi,_Antioco_VI,_tetradracma_di_antiochia,_143-142_ac_ca.JPG", 
                            "A silver didrachm of Antiochus VI Dionysus showing Dioscuri, <br/>cr. 143-142 BC, Seleucid (Hellenistic)");
    insert_into_images("horsemen/Small_hunt_mosaic_-_Villa_Romana_del_Casale_-_Italy_2015.jpg", 
                            "wiki", 
                            "Small_hunt_mosaic_-_Villa_Romana_del_Casale_-_Italy_2015.JPG", 
                            "Small hunt mosaic, <br/>early 4th century AD, Villa del Casale, Piazza Armerina, Sicily");
    insert_into_images("horsemen/St._George_and_the_Dragon_by_Tilman_Riemenschneider_c._1490-1495_linden_wood_-_Bode-Museum_-_DSC03599.jpg", 
                            "wiki", 
                            "St._George_and_the_Dragon,_by_Tilman_Riemenschneider,_c._1490-1495,_linden_wood_-_Bode-Museum_-_DSC03599.JPG", 
                            "Saint George and the Dragon,<br/>c. 1490-1495, Tilman Riemenschneider");
    insert_into_images("horsemen/St_George_Seal.png", 
                            "BM", 
                            "47590", 
                            "Circular bronze-gilt seal-matrix showing St George and the dragon, <br/>late 13th century, Italy");
    insert_into_images("horsemen/St_George_and_the_Dragon-altar_wing-NG-Praha.jpg", 
                            "wiki", 
                            "St_George_and_the_Dragon-altar_wing-NG-Praha.jpg", 
                            "St. George and the Dragon, detail, <br/>circa 1470");
    insert_into_images("horsemen/St_George_spearing_Diocletian_11th_c._Georgia.jpg", 
                            "wiki", 
                            "St_George_spearing_Diocletian_(11th_c.,_Georgia).JPG", 
                            "St. George spearing a fallen warrior, possibly the emperor Diocletian, his prosecutor, <br/>11th century");
    insert_into_images("horsemen/Isidore.jpeg", 
                            "culturaitalia.it", 
                            "http://www.culturaitalia.it/viewItem.jsp?language=it&case=&id=oai%3Ascalarchives.com%3A0116766", 
                            "The Martyrdom of St. Isidore, <br/>cr. 1355, Mosaic, St Mark's Basilica, Venice");
    insert_into_images("horsemen/Statue_Eugenio_of_Savoy_Heldenplatz_Vienna_Austria.jpg", 
                            "wiki", 
                            "Statue_Eugenio_of_Savoy_Heldenplatz_Vienna_Austria.jpg", 
                            "Statue of Prince Eugene of Savoy, <br/>1865, Vienna");
    insert_into_images("horsemen/Stele_funeraire_du_soldat_Comnisca_sept_2013_01.jpg", 
                            "wiki", 
                            "Stèle_funéraire_du_soldat_Comnisca_sept_2013_01.jpg", 
                            "Tombstone for Roman cavalryman Comnisca, 1st century AD, discovered in Strasbourg, France");
    insert_into_images("horsemen/Stroganov_plate-lg.jpg", 
                            "The Smithsonian's Museum of Asian Art", 
                            "https://www.freersackler.si.edu/object/F1934.23/", 
                            "Shapur plate, <br/>4th century");
    insert_into_images("horsemen/THAM-Amazonomachy_sarcophagus_4.jpg", 
                            "wiki", 
                            "THAM-Amazonomachy sarcophagus 4.jpg", 
                            "Roman sarcophagus with an Amazonomachy scene, <br/>2nd quarter of the 3rd century, Thessaloniki");
    insert_into_images("horsemen/Tabriz_Sasanian_Plate_2.jpg", 
                            "wiki", 
                            "Tabriz_Sasanian_Plate_2.jpg", 
                            "Silver plate with gold coating, <br/>? (Sasanian), Azerbaijan Museum, Tabriz, Iran");
    insert_into_images("horsemen/Tampa-1986.41.jpg", 
                            "Perseus Digital Library Project", 
                            "http://www.perseus.tufts.edu/hopper/artifact?name=Tampa%201986.41&object=Vase", 
                            "Oinochoe with the depiction of mounted warriors trampling a Scythian archer,<br/>cr. 510 BC, Attica");
    insert_into_images("horsemen/Teteven-History-museum-Thracian-god-3-century-BC.jpg", 
                            "wiki", 
                            "Teteven-History-museum-Thracian-god-3-century-BC.jpg", 
                            "Bas-relief of a Thracian horseman, <br/>3rd century BC");
    insert_into_images("horsemen/Tetradrachm_Evagoras_II_368-346BC.jpg", 
                            "wiki", 
                            "Tetradrachm_Evagoras_II_368-346 BC_obverse_CdM_Paris.jpg", 
                            "Silver tetradrachm of Evagoras II Salamis of Cyprus with satrap on horseback, <br/>368–346 BC, Cyprus");
    insert_into_images("horsemen/Tetradrachm_Evagoras_II_368-346BC.jpg", 
                            "wiki", 
                            "Tetradrachm_Evagoras_II_368-346BC_obverse_CdM_Paris.jpg", 
                            "Silver tetradrachm of Evagoras II Salamis of Cyprus with satrap on horseback, <br/>368–346 BC, Cyprus");
    insert_into_images("horsemen/TheBroncoBusterFredericRemingtonWH.jpg", 
                            "wiki", 
                            "TheBroncoBusterFredericRemingtonWH.jpg", 
                            "Bronco Buster, an original cast,<br/>1895, Frederic Remington");
    insert_into_images("horsemen/The_Thracian_Rider_God.jpg", 
                            "wiki", 
                            "The_Thracian_Rider_God.jpg", 
                            "Votive tablet showing a Thracian horseman, <br/>?");
    insert_into_images("horsemen/ThracianSeal.png", 
                            "Achaemenid Interfaces", 
                            "https://www.academia.edu/1304243/Achaemenid_Interfaces", 
                            "The bezel of the gold seal-ring showing boar-hunt on horseback, <br/>5th-4th century BC, Peychova tumulus");
    insert_into_images("horsemen/Thracian_cavalrymen_vs_an_armored_Greek_food_soldier_-_Getty_Villa_Collection.jpg", 
                            "wiki", 
                            "Thracian_cavalrymen_vs_an_armored_Greek_food_soldier_-_Getty_Villa_Collection.jpg", 
                            "Amphora with a battle scene in which a hoplite, or heavily armed infantryman, falls to the ground between two cavalrymen,<br/>cr. 530-520 BC, Attic");
    insert_into_images("horsemen/Tomasso10112009T14841.jpg", 
                            "Tomasso Brothers Fine Arts", 
                            "http://www.tomassobrothers.co.uk/DesktopDefault.aspx?tabid=6&objectid=226680", 
                            "Nessus Abducting Deianira,<br/>c. 1600, Hubert Gerhard");
    insert_into_images("horsemen/Traianus_denarius_105_90020184.jpg", 
                            "wiki", 
                            "Traianus_denarius_105_90020184.jpg", 
                            "Sestertius showing Trajan on horseback on reverse, <br/>minted in 105 AD under Trajan, Roman Empire");
    insert_into_images("horsemen/Trajan_column_Rome_September_2015-1.jpg", 
                            "wiki", 
                            "Trajan_column_(Rome)_September_2015-1.jpg", 
                            "Trajan's Column, <br/>113 AD, Rome");
    insert_into_images("horsemen/TropeumTraiani_11.jpg", 
                            "wiki", 
                            "TropeumTraiani_11.jpg", 
                            "Tropeum Traiani, <br/>cr. 109 AD, reconstructed in 1977, Roman/Romanian");
    insert_into_images("horsemen/Trump_Jackson.jpg", 
                            "wiki", 
                            "Trump_speaking_with_Putin_oval_office.jpg", 
                            "Trump speaking with Putin in Oval Office with statuettes of horsemen on rearing horses in the background, <br/>28 January 2017");
    insert_into_images("horsemen/Two_Horseman_Nestor_and_Demetrius_c._1062_from_S.Michael_monastery_in_Kiev_GTG_by_shakko_01.jpg", 
                            "wiki", 
                            "Two_Horseman_(Nestor_and_Demetrius),_c._1062_(from_S.Michael_monastery_in_Kiev,_GTG)_by_shakko_01.jpg", 
                            "Two Horseman (Nestor and Demetrius), <br/>cr. 1062, from St.Michael's monastery in Kiev, Russia");
    insert_into_images("horsemen/Unknow_-_Miracle_of_St_George_and_the_Dragon_with_Scenes_from_his_Life._Novgorod_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Unknow_-_Miracle_of_St_George_and_the_Dragon,_with_Scenes_from_his_Life._Novgorod_-_Google_Art_Project.jpg", 
                            "Miracle of St George and the Dragon, with Scenes from his Life. <br/>1300-50, Novgorod, Russia");
    insert_into_images("horsemen/Van_Dyck_-_Duke_of_Arenberg.jpg", 
                            "wiki", 
                            "Van_Dyck_-_Duke_of_Arenberg.jpg", 
                            "The Duke of Arenberg, <br/>before 1641, Anthony van Dyck");
    insert_into_images("horsemen/Van_Dyck_-_Duke_of_Arenberg.jpg", 
                            "wiki", 
                            "Van_Dyck_-_Duke_of_Arenberg.jpg", 
                            "The Duke of Arenberg, <br/>before 1641, Anthony van Dyck");
    insert_into_images("horsemen/Van_dyck_tomaso_1634_1635.jpg", 
                            "wiki", 
                            "Van_dyck_tomaso_1634_1635.jpg", 
                            "Equestrian portrait of Prince Tomaso of Savoy-Carignan, son of Charles Emmanuel I, Duke of Savoy, <br/>1634-5, Anthony van Dyck");
    insert_into_images("horsemen/Veronese.Marcus_Curtius01.jpg", 
                            "wiki", 
                            "Veronese.Marcus_Curtius01.jpg", 
                            "The sacrificial death of Marcus Curtius, <br/>1550-2, Paolo Veronese, Venice, Italy");
    insert_into_images("horsemen/Villa_romana_de_La_Olmeda_25100541284.jpg", 
                            "wiki", 
                            "Villa_romana_de_La_Olmeda_(25100541284).jpg", 
                            "Mosaic with a hunting scene,<br/>4th century, Villa de La Olmeda, Pedrosa de la Vega, Spain");
    insert_into_images("horsemen/WA1845.18.jpg", 
                            "ArtUK", 
                            "louis-xiii-on-horseback-141566", 
                            "Louis XIII on Horseback, <br/>cr. 1622, probably by or after a Flemish painter");
    insert_into_images("horsemen/WILLIAM_Falaise_02.jpg", 
                            "wiki", 
                            "Statue_d%27Dgilliaume_lé_Contchéthant_à_Falaise_02.jpg", 
                            "William The Conqueror statue,<br/>1851, Falaise, France");
    insert_into_images("horsemen/WOA_IMAGE_1-1.jpg", 
                            "HM", 
                            "!ut/p/a1/lZDNboMwEIRfhRw4umsD5udo0apSpJQ2VRXsCzLYoTRgCFhpH7_m1kvaZk-70u7sNwMCShBGXrpW2m40sl9nEVcFYzEJc7wtcnqPWbF_pvv86RGTCA4gQPSmBa7N2jbGTvYd-EkO3VJp4-PPcT4t3nj05Gx9TNI7r5HzRStvsaPRi48zSpJ4vZ2aTgFXOghqRQmisiYoUqlCWXLUqIl0hkmWRKomjos7LnylGP4X9u8K3L1IrmnEuwBeV41Dvqte3h72bvtHCjc42f6F6qx2H-ezYC7c0Vj9ZaG8Od1pGNJwQCVGkqch7Vu22XwDcg8l3A!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Chalcedony scarabaeoid seal: Persian Horseman Slaying a Hoplite with a Spear, <br/>First half of the 4th century BC, ?");
    insert_into_images("horsemen/WOA_IMAGE_1-2.jpg", 
                            "The Hermitage Museum", 
                            "https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/08.+Applied+Arts/213/?lng=en", 
                            "Dish with Scene of the Royal Hunt,<br/>first half of the 7th century");
    insert_into_images("horsemen/WOA_IMAGE_1.jpg", 
                            "The Hermitage museum", 
                            "https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/04.+Engraving/1512496/?lng=en", 
                            "Equestrian Portrait of Emperor Alexander I,<br/>1820s, Alexander Osipovich Orlovsky");
    insert_into_images("horsemen/WOA_IMAGE_12.jpg", 
                            "HM", 
                            "!ut/p/a1/pZDNTsMwEIRfpT3kaOz8OCRHKyCkSiUQhBr7Em0dJzVN7LSxgMfHuXEpBbGn3dXq25nBAtdYGHjXPThtDQzLLNKmZCwN44JsyoLeEVZWT7QqHh9ImOAdFlgMpsdcmaWVxk3ugPkRRj03ygTkw56P88p2Kzi7gET0xjfyAMoOttcShmWvO5BuDkiSkIyShTNJ3WIOlOQyki3aA92jpKMU5ZB3SKVKKRol0Gah18i9RnKhGPmVhZ8J3L-4vcRItxF-WRi7Yts8v95X_vpbIn9wsrkm1VvVb6eTYD5oa5z6dLj-V9LTOGbxiGqCgGcxHXq2Xn8BiNYyBw!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Red-figured Pelike: Arimasp Fighting a Gryphon and Two Mantled Youths, <br/>360-350 BC, Attica");
    insert_into_images("horsemen/WOA_IMAGE_13.jpg", 
                            "HM", 
                            "!ut/p/a1/pVA9T8MwFPwr7dDR2InrxIxWQEiVSqAINfYSOY6dmiZ22ljAz8fZWEpBvOneh-7dHRSwgsLJd9vJYL2T_dyLrC4ZyxJcoE1ZkDvEyt0T2RWPDyhZwz0UUPSug1y7GSoXxnCA_CgHO9XardCHPx-nhTcLeQ4rlJKbCNRBat_7zirZz3NrpApT3NLbHOGZZ1S2hdzIzGCZKpA1moA1aRtACcUgISk1jc6VaduokUeN6EIx9CsLPzPw-CK_xJFtU_gyc-yLbf38er-L198S-YOTzTWp0ap9O50Ei0F7F_RngNW_kh6HgeIBVAhITjHpO7ZcfgGOIPdr/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Red-figured Krater showing a Warrior and an Amazon, <br/>430-420 BC, Apulia");
    insert_into_images("horsemen/WOA_IMAGE_14.jpg", 
                            "HM", 
                            "!ut/p/a1/pVDLboMwEPyV5JCju8vLwNGiVaVIKS1VFewLshwgbsAmwWr7-TW3XtKHuqfZh2ZnBgTUIIx807102ho5LL2gTckYDaICt2WR3CIrq8ekKh7uMYhhDwLEYHrgrVmgMm5yR-AnOeq5ac0G3-3lNK9st5IXt8EwufFAHWVrB9trJYdlrjup3Oy3WZ4iLjyT0gfgKs1C1XWUxJTmJI5lSySqkGDYHeI0wCD31zVwrxGvFMNfWfiegfsX6TUOugvheeHYF7vm6eWu8tdfEvmDk-1PUr1V_Xo-C-aDtsa1Hw7qfyU9jWMWjaRGInkWJUPP1utPUKIIuA!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Red-figured Amphora Showing An Amazon on Horseback, <br/>440 BC, Attica");
    insert_into_images("horsemen/WOA_IMAGE_15.jpg", 
                            "HM", 
                            "!ut/p/a1/pZDNboMwEIRfJTlwdL1gIOZo0apSpJSWqgr2BRnHEDdgSLDaPn7NrZf0R93T7mr17cxggSssrHwznXRmtLJfZpHWBWNpSHLYFnlyC6woH5Myf7iHMMZ7LLDobYe5tkurrJvcEfOTHMxcaxvA-3g5zauxXcmLCyBKbnyjjlKP_dgZJftlb1qp3BxASKNks2AmZQ6YA7SgFCEojTONYhkSlMVNhKiirSYHmrVN4yVyLxGuFINfOfiewP2LzTVGuovw88LY57v66eWu9NdfAvmDk-1PUr1V83o-C-ZzHq3THw5X_wl6GgZKBlQBkpySpO_Yev0JbB2hhQ!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Red-figured Pelike Showing a Fight of an Amazon on Horseback with a Gryphon, <br/>Third quarter of the 4th century BC, Attica");
    insert_into_images("horsemen/WOA_IMAGE_byz_bowl.jpg", 
                            "HM", 
                            "!ut/p/a1/lZBNb4MwDIb_Cj1wzOIQPo8RmyZV6tiYppJcUAqBZYVAS7Tt5y_cdmm3-mRb9uvHLxa4wsLIT91Lqycjh7UWcV0wFhOaw7bIo3tgRfkclfnTI5AQ77HAYjA95sqsaWPsbN8xP8pRL7UyPnxN5-PiTZ0nz9YHSO88Oc-DVu3aWHwIgjjJyLo7N7rFXB5o1hHaIaVkh8IkApSSkKImytoAQB4gVI6LOy64EAz-hX1dgbsTySWNeBfg11Vjn-_ql7eH0k3_cuGGT7Z_obpX9cfpJJgzdzJWfVtc3ezuPI4pHVEFSPKURkPPNpsfNrpTJQ!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Bowl Showing the Ascension of Alexander the Great,<br/>12th century");
    insert_into_images("horsemen/WOA_IMAGE_comb.jpg", 
                            "HM", 
                            "25.+Archaeological+Artifacts/879755", 
                            "Comb with a Battle Scene, <br/>Late 5th-early 4th century BC");
    insert_into_images("horsemen/WOA_IMAGE_const.jpg", 
                            "HM", 
                            "25.+Archaeological+Artifacts/2952940", 
                            "A bowl with a scene of a triumph of Constantius II, <br/>mid-4th century AD");
    insert_into_images("horsemen/WOA_IMAGE_fabric.jpg", 
                            "HM", 
                            "!ut/p/a1/nZDLboMwEEV_hSyyqztDAQNLi1aVIqVpqapgb5ABh7oBQ8Dq4-9rdt2kr1nNjEZn7r0goABh5KtupdWDkd0yC1ruGKN-kOFml0XXyHb5fZRnd7foh7AHAaIzLXBllrY2drTPwI-y13OpzBrfhuk4e8PBk5Ndo-9fela9W92p-cKzclSznT7cntIA6UIYa90AT9KQ1k2MpFKqJmGcIklDKUlEo6rGJvUreXDquFOHZ4rhr8R_T-DuRXyOQbdX8Lgw9tm2fHi6yd31lyz-4GTzk1RnVb-cToK5iAezJAjFPzMe-z4JelIgkTwJoq5lq9Unp8czBQ!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Fabric with the Depiction of an Amazon, <br/>5th century");
    insert_into_images("horsemen/WOA_IMAGE_roman_byz.jpg", 
                            "HM", 
                            "!ut/p/a1/pZDLTsMwEEV_pV1kaTx2nl1aoapUqQSCUGNvIst51DSx08YCPh9nx6Y8xKxmRqMz914scIWFkW-6l05bI4dlFkldMJaQMId9kcf3wIryMS7zhx2QCB-xwGIwPeatWVpl3OROmJ_lqOe6NQG82-t5XtluJa8uABrf-UadZGsH22slh2WvO6ncHAABSimBBTQp3WCu0qwjKSFoI0GiqNmkKEuaBEFIojYDmnaUepHci4QbxeBXHr4ncP8ivcVIDhQ_L4xjfqifXralv_4SyR-c7H-S6q3q18tFMJ-0Na79cLj6X9TTOGbhiCpAkmdhPPRsvf4ElMHA8g!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Amphora,<br/>4th century, created in Moldavia under Greek, Roman and Byzantine influences");
    insert_into_images("horsemen/WOA_IMAGE_sch.jpg", 
                            "HM", 
                            "25.+Archaeological+Artifacts/879763", 
                            "Bowl with the Depiction of a Lion-Hunt, <br/>Early 4th century BC");
    insert_into_images("horsemen/Wengraf1122006T185237.jpg", 
                            "Patricia Wengraf research", 
                            "http://www.patwengraf.com/DesktopDefault.aspx?tabid=6&objectid=20254", 
                            "Adolf Fredrik, King of Sweden, mounted on a rearing stallion, probably celebrating his accession in 1751,<br/>before 1753, Jacques-Philippe Bouchardon");
    insert_into_images("horsemen/William_III_Landing_at_Brixham_Torbay_5_November_1688.jpg", 
                            "wiki", 
                            "William_III_Landing_at_Brixham,_Torbay,_5_November_1688.jpg", 
                            "William III of England,<br/>1688, Jan Wyck");
    insert_into_images("horsemen/Wooden_S.George_15th_c._Rostov_Kremlin_by_shakko_02.jpg", 
                            "wiki", 
                            "Wooden_S.George_(15th_c.,_Rostov_Kremlin)_by_shakko_02.jpg", 
                            "Saint George and the Dragon, <br/>second half of the 15th century, Moscow/Rostov, Russia");
    insert_into_images("horsemen/Yuhanna-Mercurius.jpg", 
                            "wiki", 
                            "Yuhanna-Mercurius.jpg", 
                            "Saint Mercurius spearing emperor Julian the Apostate, <br/>cr. 1778, painted by Yuhanna al-Armani, Ottoman Egypt");
    insert_into_images("horsemen/ZauerveydNA_Petr1UsmirDA19.jpg", 
                            "wiki", 
                            "ZauerveydNA_Petr1UsmirDA19.jpg", 
                            "Peter I of Russia stops marauding soldiers after taking Narva in 1704, <br/>Nikolay Sauerweid, 1859");
    insert_into_images("horsemen/ZeugmaBellorophon1a.jpg", 
                            "National Taiwan University", 
                            "http://www.education.ntu.edu.tw/school/history/News/2005/Jul-Sep/news20050720_3.htm", 
                            "Bellerophon on Pegasus, slaying the Chimera, <br/>cr. 260 AD, Palmyra, Syria (Roman culture)");
    insert_into_images("horsemen/Palmyra_bellerophon.jpg", 
                            "BazHum - bazhum.muzhp.pl", 
                            "http://bazhum.muzhp.pl/media//files/Polish_Archaeology_in_the_Mediterranean/Polish_Archaeology_in_the_Mediterranean-r2003-t15/Polish_Archaeology_in_the_Mediterranean-r2003-t15-s313-324/Polish_Archaeology_in_the_Mediterranean-r2003-t15-s313-324.pdf", 
                            "The tiger hunter, <br/>cr. 260 AD, Palmyra, Syria (Roman culture)");
    insert_into_images("horsemen/cigarette-box.jpg", 
                            "The Science Museum Group Collection", 
                            "http://collection.sciencemuseum.org.uk/objects/co10362/cigarette-box-c-1930-cigarette-boxes", 
                            "Bakelite cigarette box with a horseman spearing lion in Assyrian style, <br/>1930's, Birkby's Ltd., England");
    insert_into_images("horsemen/galerie_tapisserie_de_bayeux.jpg", 
                            "normandie-tourisme.fr", 
                            "http://en.normandie-tourisme.fr/discover/normandy-must-sees/the-10-top-normandy-must-sees/bayeux-191-2.html", 
                            "Bayeux Tapestry, <br/>France, probably 1070s");
    insert_into_images("horsemen/tapisserie_de_bayeux_1.png", 
                            "wiki", 
                            "Tapisserie_de_Bayeux_31109.jpg", 
                            "Bayeux Tapestry, <br/>France, probably 1070s");
    insert_into_images("horsemen/tapisserie_de_bayeux_2.png", 
                            "wiki", 
                            "Tapisserie_de_Bayeux_31109.jpg", 
                            "Bayeux Tapestry, <br/>France, probably 1070s");

    insert_into_images("horsemen/a296a29d21edce2a204402c21cbd12a4.jpg", 
                            "Pinterest", 
                            "https://uk.pinterest.com/pin/414260865700011938/", 
                            "Statue of David of Sassoun, <br/>1959, Yerevan, Armenia");
    insert_into_images("horsemen/a846fefc-c7f2-44c9-bc1f-7d08a8eb9540_l.jpg", 
                            "Waymarking", 
                            "http://www.waymarking.com/waymarks/WMC1XC_Pony_Express_Rider_Sacramento_CA", 
                            "Pony Express Rider, <br/>1976, Sacramento, U.S.A.");
    insert_into_images("horsemen/alexander3_2.jpg", 
                            "Seals", 
                            "scotland/scotlandmedieval.htm", 
                            "Second seal of Alexander III (1249 - 1286)");
    insert_into_images("horsemen/anita.jpg", 
                            "wiki", 
                            "20110327_Roma_Gianicolo_Anita_Garibaldi_-_foto_1.jpg", 
                            "Monument to Anita Garibaldi,<br/>1932, Mario Rutelli, Rome, Italy");
    insert_into_images("horsemen/armerina_horseman.jpg", 
                            "romehistory.co.uk", 
                            "http://romehistory.co.uk/VILLA/villaromanadelca.html", 
                            "Mosaic with a hunting scene, <br/>early 4th century AD, Villa del Casale, Piazza Armerina, Sicily");
    insert_into_images("horsemen/artamonov-mi-1966-t253.jpg", 
                            "kronk.spb.ru", 
                            "http://kronk.spb.ru/library/artamonov-mi-1966-16.htm", 
                            "Greco-Scythian gold horseman appliqué, <br/>(?) cr. 4th century BC");
    insert_into_images("horsemen/article-2676413-1F4CE2CB00000578-295_634x430.jpg", 
                            "The Daily Mail", 
                            "http://www.dailymail.co.uk/travel/article-2676413", 
                            "West Frieze of the Parthenon, 'Restored' using 3D imagery block X,<br/>2014, Athens");
    insert_into_images("horsemen/article-2676413-1F4CE33E00000578-568_634x350.jpg", 
                            "The Daily Mail", 
                            "http://www.dailymail.co.uk/travel/article-2676413", 
                            "West Frieze of the Parthenon, Block X, <br/>438 BC-432 BC, Athens");
    insert_into_images("horsemen/at150728AlexanderTheGreat-NaplesArcheologicalMus.jpg", 
                            "KCRW", 
                            "http://www.kcrw.com/news-culture/shows/art-talk/golden-age-of-bronze", 
                            "Alexander the Great on Horseback, <br/>100-1 BC, Roman");
    insert_into_images("goldenbronzehorsemen/augustusii.jpg", 
                            "studioworks em", 
                            "http://www.studioworks-em.com/malerei/august-der-starke/", 
                            "Augustus II the Strong<br/>(1670 – 1733)");
    insert_into_images("goldenbronzehorsemen/augustusiii.jpg", 
                            "wiki", 
                            "Augustus_III_of_Poland.jpg", 
                            "Augustus III<br/>(1696 – 1763)");
    insert_into_images("horsemen/augustusiii1.jpg", 
                            "Auctionata", 
                            "https://auctionata.com/intl/o/94313/meissen-porcelain-figure-augustus-iii-germany-c-1850", 
                            "Augustus III porcelain figurine, Meissen, cr.1850");
    insert_into_images("horsemen/b1231a.jpg", 
                            "Museum for the Macedonian Struggle Foundation", 
                            "http://www.imma.edu.gr/macher/hm/hm_image.php?el/img_B1231a.html", 
                            "Bellerophon on Pegasus killing Chimaera, mosaic floor house, <br/>432-348 BC,  Olynthos, Chalkidiki, Greece");
    insert_into_images("horsemen/bardo_hunt.jpg", 
                            "Desert-bred Saluqis", 
                            "http://saluqi.net/id20.html", 
                            "Mosaic with a hunting scene,<br/>3rd century, House of the Laberii, Uthina, Tunisia");
    insert_into_images("germany/bauhaus-cradle.jpg", 
                            "Stylepark", 
                            "http://www.stylepark.com/en/tecta/bauhaus-cradle", 
                            "Bauhaus Cradle, Peter Keler, 1922");
    insert_into_images("goldenbronzehorsemen/bear.jpg", 
                            "The Royal Philatelic Society of Canada", 
                            "https://www.rpsc.org/Library/grizzly/grizzly.html", 
                            "Bear");
    insert_into_images("germany/beetle.jpg", 
                            "The Guardian", 
                            "http://www.theguardian.com/culture/2014/oct/13/bygone-germany-british-museum-exhibition", 
                            "VW Beetle, West Germany,<br/>1953");
    insert_into_images("rj/beforeSunset.jpg", 
                            "Movieman's Guide to the Movies", 
                            "http://moviemansguide.com/main/2017/02/review-beforetrilogy-bd/2/", 
                            NULL);
    insert_into_images("horsemen/bellerophon-battles-chimaera-hermine-wang.jpg", 
                            "FineArtAmerica.com", 
                            "https://fineartamerica.com/featured/bellerophon-battles-chimaera-hermine-wang.html", 
                            "Bellerophon Battles Chimaera, <br/>2011, Hermine Wang, China");
    insert_into_images("goldenbronzehorsemen/bhmagnet.jpg", 
                            "Magnitizm", 
                            NULL, 
                            "Bronze Horseman Magnet");
    insert_into_images("horsemen/bnf.png", 
                            "Médailles et Antiques de la Bibliothèque nationale de France", 
                            "http://medaillesetantiques.bnf.fr/ws/catalogue/app/collection/notices/record/ark:/12148/c33gbb3b", 
                            "The hunt of the king,<br/>591-632");
    insert_into_images("yoga/bottomyoga.jpg", 
                            NULL, 
                            NULL, 
                            NULL);
    insert_into_images("hamlet/bouffes.jpg", 
                            "Societe Francaise Shakespeare", 
                            "https://shakespeare.revues.org/1060", 
                            "Peter Brook production Hamlet Stage Design, 2000");
    insert_into_images("horsemen/bronze-horseman.jpg", 
                            "Flickr - Andrey Korchagin", 
                            "https://www.flickr.com/photos/peer_gynt/2442195479", 
                            "Bronze Horseman, 1782,<br/>Saint-Petersburg, Russia");
    insert_into_images("horsemen/byzantine_museum_athens_-_sidamarna_sarcophagus_detail_-_photo_giovanni_dallorto_nov_12_2009.jpg", 
                            "wiki", 
                            "1834_-_Byzantine_Museum,_Athens_-_Sidamarna_sarcophagus,_detail_-_Photo_Giovanni_Dall%27Orto,_Nov_12_2009.jpg", 
                            "Fragment of a sarcophagus of the type called 'Sydamara sarcophagi', <br/>3rd century, Asia Minor");
    insert_into_images("horsemen/ca9235fd032271ace34a9d20e6ce906a.jpg", 
                            "Princeton University Art Museum", 
                            "http://artmuseum.princeton.edu/collections/objects/22546", 
                            "Red-figure calyx krater with Bellerophon killing the Chimaera, <br/>late 4th century BC, Etruscan/Late Faliscan");
    insert_into_images("goldenbronzehorsemen/catherineii.jpg", 
                            "wiki", 
                            "Catherine_II_by_J.B.Lampi_(1780s,_Kunsthistorisches_Museum).jpg", 
                            "Catherine II the Great<br/>(1729 – 1796)");
    insert_into_images("similar_different/chaim-soutine-fillette-robe-rose.jpg", 
                            "The Athenaeum", 
                            "http://www.the-athenaeum.org/art/full.php?ID=56717#", 
                            "Girl in Pink Dress,<br/>Soutine, 1928");
    insert_into_images("horsemen/chapter-2-chkhari-cross.jpg", 
                            "In Search Of Saint George", 
                            "https://insearchofsaintgeorge.com/chapter-2/", 
                            "Four scenes from the life of St George from the Chkhari Cross, <br/>15th century");
    insert_into_images("horsemen/charles1_3.jpg", 
                            "Seals", 
                            "stuart/charles1.htm", 
                            "Third seal of Charles I (1640 - May 1646");
    insert_into_images("horsemen/charles2_4.jpg", 
                            "Seals", 
                            "stuartandorange/charles2.htm", 
                            "Fourth seal of Charles II (19 April 1672 - 21 Oct 1685)");
    insert_into_images("horsemen/coin-of-corinth-with-head-of-aphrodite-struck-under-q-caecilius-niger-and-c-heius-pamphilus-259879-1.jpg", 
                            "MFA", 
                            "259879", 
                            "Coin with the head of Aphrodite, struck under Q. Caecilius Niger and C. Heius Pamphilus, <br/>34–31 BC, Corinth, Roman culture");
    insert_into_images("horsemen/coin-of-thyatira-with-bust-of-severus-alexander-struck-under-mar-pollianus-264438.jpg", 
                            "MFA", 
                            "264438", 
                            "Coin with a bust of Severus Alexander, reverse shows Bellerophon on Pegasus brandishing spear, <br/>222–235 AD, Thyatira, Lydia (modern Turkey), Roman culture");
    insert_into_images("horsemen/coloured_tombstone.jpeg", 
                            "Lancashire County Council", 
                            "http://collections.lancsmuseums.gov.uk/narratives/narrative.php?irn=95", 
                            "Roman gravestone showing a soldier Insus holding the severed head of a barbarian, coloured reconstruction (artist's impression),<br/>cr. 100 AD, discovered in Lancashire, UK");
    insert_into_images("horsemen/commodusBronzeCoin.jpg", 
                            "Twitter, @drzarrow", 
                            "https://twitter.com/drzarrow/status/591027611066888192", 
                            "Commodus on horseback in a venatio, spearing panther, <br/>185, Rome");
    insert_into_images("horsemen/commodus_vatican.jpg", 
                            "From a book", 
                            NULL, 
                            "Equestrian statue of Commodus, <br/>2nd century AD, Vatican museums");
    insert_into_images("horsemen/constantine.jpg", 
                            "The Ashmolean Museum", 
                            "http://www.ashmolean.org/ash/objectofmonth/2000-10/theobject.htm", 
                            "Constantine the Great Beholds the Sign of the Cross, <br/>second half of the 17th century, Gian Lorenzo Bernini or a later sculptor");
    insert_into_images("horsemen/corbridge-flavinus-tombstone.jpeg", 
                            "The English Heritage", 
                            "http://www.english-heritage.org.uk/visit/places/corbridge-roman-town-hadrians-wall/history/", 
                            "Roman tombstone of a standard-bearer Flavinus triumphing over an abject Briton,<br/>cr. 77-100 AD, discovered in Corbridge, UK");
    insert_into_images("horsemen/couple-on-horseback.jpgHD_.jpg", 
                            "wiki", 
                            "S381_Albrecht_Dürer_1496_Spazierritt.jpg", 
                            "Young couple on a horseback, <br/>1496, Albrecht Dürer");
    insert_into_images("horsemen/cri_000000214685.jpg", 
                            "The Museum of Modern Art", 
                            "https://www.moma.org/collection/works/65180", 
                            "St. George and the Dragon, <br/>1947, Salvador Dalí");
    insert_into_images("horsemen/d6bf073f4823439367dfdc7e25ba7263.jpg", 
                            "georgianjournal.ge", 
                            "http://www.georgianjournal.ge/arts-a-culture/30044-unique-bas-relief-in-georgian-monastery-two-images-of-saint-george-fight-a-dragon-and-an-emperor.html", 
                            "Saint George slaying Diocletian and Saint Theodore slaying a serpent, <br/>bas-relief from a 9th-10th-century Georgian monastery");
    insert_into_images("horsemen/d8c292099ae2528c989114fb3acece55.jpg", 
                            "BM", 
                            "421430", 
                            "Bronze cinerary urn with lid, <br/>cr. 500 BC (?), Etruscan");
    insert_into_images("horsemen/dali_st_george.jpg", 
                            "Lawrence OP @ flickr.com", 
                            "https://www.flickr.com/photos/paullew/6960089454/", 
                            "St. George and the Dragon,<br/>1977, Salvador Dalí");
    insert_into_images("horsemen/de86d6162f2358da8191a446f9fe1ea8.jpg", 
                            "BM", 
                            "466942", 
                            "Vessel-fitting, <br/>cr. 510 BC-490 BC, Etruscan");
    insert_into_images("horsemen/drachm-of-aspendos-with-horseman-hurling-spear-3297.jpg", 
                            "MFA", 
                            "3297", 
                            "Drachm with horseman hurling spear, <br/>cr. 450 BC, Aspendos, Pamphylia");
    insert_into_images("horsemen/drachm-of-kibyra-with-head-of-youth-3507.jpg", 
                            "MFA", 
                            "3507", 
                            "Drachm with the head of youth, <br/>cr. 166–84 BC, Kibyra, Phrygia (Hellenistic)");
    insert_into_images("germany/durers-rhino1.jpg", 
                            "SKD", 
                            "118842", 
                            "Meissen Porcelain Rhinoceros, after Albrecht Dürer, 1515");
    insert_into_images("horsemen/edward3_4.jpg", 
                            "Seals", 
                            "angevin/edward3.htm", 
                            "Fourth seal of Edward III (1341-60 and 1370-2)");
    insert_into_images("horsemen/elizaveta.jpeg", 
                            "SKD", 
                            "118426", 
                            "Empress Elisabeth of Russia on Horseback,<br/>cr. 1743, Johann Joachim Kaendler, Meissen");
    insert_into_images("horsemen/estampa_serpotta_messina.jpg", 
                            "Archivo Español de Arte, April-June 2012", 
                            "https://www.google.co.uk/url?sa=t&rct=j&q=&esrc=s&source=web&cd=16&ved=0ahUKEwiG14PUhPvLAhXEsxQKHXlZBFQQFgh_MA8&url=http%3A%2F%2Fservicios.mpr.es%2Fdocumentacion%2Fvisordocumentosicopo.aspx%3FNIPO%3D723120099%26SUBNIPO%3D0002&usg=AFQjCNHwEwi8H8AFDtLibldU-iL-0idtKg&sig2=B2CZ2bTATBHBoIRKCTt5aQ", 
                            "Carlos II on Horseback, <br/>erected 1684, destroyed in 1848, Andrea and Gaspare Romano (based on Giacomo Serpotta's model), Messina, Sicily");
    insert_into_images("horsemen/ex11Kaz15-bv.jpg", 
                            "The Moscow Kremlin State Historical and Cultural Museum and Heritage Site", 
                            "http://www.kreml.ru/en-Us/exhibitions/russian-exhibitions/kreml-ot-moskovskogo-tsarstva-do-posledney-koronatsii/", 
                            "Table figurine 'Riding Warrior', <br/>1665-1669, Heinrich Mannlich, Augsburg, Germany");
    insert_into_images("horsemen/f22f227e754b93409c8a70d4ad9599b5.jpg", 
                            "BM", 
                            "461496", 
                            "Dinos with the depiction of combat of Attic heroes with Amazons,<br/>440 BC-430 BC, Attica");
    insert_into_images("horsemen/fcc6a2fc50c8d4ce4ece0357a745caea.jpg", 
                            "Médailles et Antiques de la Bibliothèque nationale de France", 
                            "http://medaillesetantiques.bnf.fr/ws/catalogue/app/collection/record/ark:/12148/c33gbqgtw", 
                            "Intaglio 'Emperor Commodus hunting',<br/>182-190, Rome");
    insert_into_images("horsemen/fig.-3-archduke-maximilian-ii-emanuel-of-baveria-by-roger-schabol-signed-and-dated-1707-after-a-design-by-desjardin-1.jpg", 
                            "3rd Dimension", 
                            "http://3rd-dimensionpmsa.org.uk/interviews/2014-11-03-patricia-wengraf-in-conversation-with-3rd-dimension", 
                            "Elector Maximilian II Emanuel of Bavaria on Horseback, <br/>1707, Roger Schabol, after a model by Desjardins");
    insert_into_images("germany/freimaurergruppe.jpg", 
                            "SKD", 
                            "118342", 
                            "Meissen's Freemasons, Kaendler and Eberlein, 1742");
    insert_into_images("germany/gate1.jpg", 
                            "Buchenwald Memorial", 
                            "http://www.buchenwald.de/en/634/", 
                            "Buchenwald gate, Ehrlich, 1938");
    insert_into_images("horsemen/georg-desmarees-kurfurst-max-iii-josef-von-bayern-zu-pferde-um-1750.jpg", 
                            "bildergipfel.de", 
                            "http://www.bildergipfel.de/kunstdrucke/kunststile_und_epochen/barock/kurfuerst_max_iii_josef_von_bayern_zu_pferde_um_1750_georg_schule_desmarees", 
                            "Elector Maximilian III Josef of Bavaria on horseback, <br/>cr.1750, George Desmarées, Bavaria, Germany");
    insert_into_images("horsemen/george4.jpg", 
                            "Seals", 
                            "hanover/george4.htm", 
                            "First seal of George IV (17 Sept 1821 - 31 Aug 1831)");
    insert_into_images("horsemen/georgeI.jpg", 
                            "allposters.co.uk", 
                            "http://www.allposters.co.uk/-sp/Germany-Saxony-Anhalt-Halle-Equestrian-Portrait-of-King-George-I-of-Great-Britain-Posters_i12152882_.htm", 
                            "Equestrian Portrait of King George I of Great Britain, <br/>before 1723, Godfrey Kneller");
    insert_into_images("horsemen/george_dragon_relief_panel_ma_hi.jpg", 
                            "myartprints.co.uk", 
                            "https://www.myartprints.co.uk/a/da-trani-barisano/st-george-and-the-dragon-9.html", 
                            "St. George killing the dragon, detail of the main doors, <br/>1179, Cathedral of San Pantaleone, Ravello");
    insert_into_images("horsemen/george_ethiopia.jpg", 
                            "wiki", 
                            "Church_of_Debra_Berhan_Selassie_-_Paintings_03.jpg", 
                            "St. George Slaying the Dragon, church wall painting,  <br/>?");
    insert_into_images("horsemen/george_stockholm.jpg", 
                            "wiki", 
                            "Stockholm_Storkyrkan_Innen_Georg_der_Drachentöter_2.JPG", 
                            "George the Dragon slayer,<br/>1489, Bernt Notke");
    insert_into_images("germany/german-coins1.jpg", 
                            "ArtZip", 
                            "http://www.artzip.org/event/germany-memories-nation", 
                            "Coins of German Lands and City States");
    insert_into_images("hamlet/gertrude.jpg", 
                            "TheaterMania", 
                            "http://www.theatermania.com/new-york-city-theater/reviews/05-2001/hamlet_1374.html", 
                            "Peter Brook's Hamlet and Gertrude");
    insert_into_images("goldenbronzehorsemen/ghmagnet.png", 
                            "Schoening Shop", 
                            "http://www.schoening-shop.de/shop_images/pool/large/377010670004.jpg", 
                            "Golden Horseman Magnet");
    insert_into_images("horsemen/giambologna_nessus.jpg", 
                            "SKD", 
                            "165855", 
                            "Nessus Abducting Deianira,<br/>cr. 1586, Giambologna");
    insert_into_images("horsemen/giorgi01.jpg", 
                            "madliani.com", 
                            "http://www.madliani.com/galery.php?language=english&a=giorgi_a", 
                            "Saint George's Icon, <br/>2004");
    insert_into_images("horsemen/glasgow_george.png", 
                            "@rossvernal", 
                            "https://www.instagram.com/p/BIYE2vmBnI4/", 
                            "St.George and the Dragon, <br/>1897, J and G Mossman, Glasgow. Originally it was on top of a Co-op building. When the building was demolished in 1980s, it was moved to the ground level");
    insert_into_images("horsemen/gods_jul08_5.jpg__600x0_q85_upscale.jpg", 
                            "Smithsonian Magazine", 
                            "http://www.smithsonianmag.com/arts-culture/true-colors-17888/?no-ist", 
                            "Detail of the Alexander Sarcophagus showing the battle of Issus, <br/>painted replica (original - circa 320 BC), Ionian or Rhodian workmanchip, Hellenistic");
    insert_into_images("horsemen/goldenhorseman.jpg", 
                            "wiki", 
                            "Dresden_GoldenerReiter_(2005).jpg", 
                            "Golden Horseman, 1735, <br/>Dresden, Saxony (Germany)");
    insert_into_images("hamlet/hamlet-laertes.jpg", 
                            NULL, 
                            NULL, 
                            "Peter Brook's Hamlet and Laertes");
    insert_into_images("hamlet/hamlet.jpg", 
                            "1 More Film Blog", 
                            "http://www.patheos.com/blogs/1morefilmblog/the-tragedy-of-hamlet-brook-2002/", 
                            "Peter Brook's Hamlet");
    insert_into_images("hamlet/hamlet_1842.jpg", 
                            "Tate", 
                            "http://www.tate.org.uk/art/artworks/maclise-the-play-scene-in-hamlet-n00422", 
                            "The Play Scene in 'Hamlet', <br/>Daniel Maclise, exhibited 1842");
    insert_into_images("horsemen/henri_iv_roi_de_france_bd.jpg", 
                            "Musée Carnavalet", 
                            "http://www.carnavalet.paris.fr/en/collections/portrait-de-henri-iv-1553-1610-roi-de-france-cheval-devant-paris", 
                            "Portrait of Henri IV on horseback with Paris on the background, <br/>1553-1610, probably after 1594, ?");
    insert_into_images("horsemen/henry5_golden.jpg", 
                            "Seals", 
                            "lancastrian/henry5.htm", 
                            "Gold seal of Henry V (1413-22)");
    insert_into_images("horsemen/henry8_3.jpg", 
                            "Seals", 
                            "tudor/henry8.htm", 
                            "Third seal of Henry VIII (1542-7)");
    insert_into_images("horsemen/hittite_pergamon.jpg", 
                            "Taken by me in Pergamon, Berlin", 
                            NULL, 
                            "Relief sculpture of a soldier riding a horse, 10th-9th century BC, Aramean or Hittite, Tell Halaf, Syria");
    insert_into_images("horsemen/hm0000_h0419_01.jpg", 
                            "Meissen", 
                            "http://www.meissen.com/en/products/augustus-iii-horseback-historical-meissen%C2%AE", 
                            "Augustus III porcelain figurine<br/>Model by Johann J. Kaendler,<br/>1815-1860");
    insert_into_images("horsemen/holy_rider.png", 
                            "Sasson Ancient Art", 
                            "http://www.sassonancientart.com/artwork_show_282_archive.html", 
                            "Bronze medallion with Saint George, <br/>9th–12th century, Byzantine");
    insert_into_images("rs2G9A1355-sml-narrow.jpg", 
                            "Sergei Riaboff", 
                            "https://www.instagram.com/serhi001", 
                            "Me, April 2017");
    insert_into_images("germany/hungry-girl-kimmelman-1925.jpg", 
                            "The New York Review of Books", 
                            "http://www.nybooks.com/articles/archives/2014/jun/19/art-hitler-hated/", 
                            "Hungry Girl,<br/>Kimmelman, 1925<br/>(represents WWI)");
    insert_into_images("horsemen/hunting.jpg", 
                            "WAM", 
                            "36602", 
                            "Dish depicting a Lion Hunt, <br/>cr. 1520-47, Baldassare Manara, Faenza");
    insert_into_images("horsemen/ikmk-18200577.jpg", 
                            "ikmk", 
                            "18200577", 
                            "Trihemidrachme with Bellerophon on Pegasus, <br/>cr. 4 BC, Corinth, Roman culture");
    insert_into_images("horsemen/ikmk-18214934.jpg", 
                            "ikmk", 
                            "18214934", 
                            "Trihemidrachm with Bellerophon on Pegasus, <br/>430-405 BC, Corinth, Greek culture");
    insert_into_images("horsemen/ikmk-18231388.jpg", 
                            "ikmk", 
                            "18231388", 
                            "Bronze coin with Bellerophon on Pegasus, <br/>161-169 AD, Corinth, Roman culture");
    insert_into_images("horsemen/ikmk-18250633.jpg", 
                            "ikmk", 
                            "18250633", 
                            "Didrachm with Bellerophon on Pegasus, <br/>cr. 395-390 BC, Fenserni, Campania, Italy");
    insert_into_images("horsemen/image00079.jpg", 
                            "numisbids", 
                            "sid=1172&lot=79", 
                            "Chalkous, <br/>cr. 4th century BC, Pelinna, Thessaly");
    insert_into_images("horsemen/image00081.jpg", 
                            "coinarchives.com", 
                            "http://www.coinarchives.com/a/lotviewer.php?LotID=1032949&AucID=2015&Lot=81&Val=21f6a2b8a220fd77ef6efb4cb08b0219", 
                            "Chalkous, <br/>cr. 425-350 BC, Pelinna, Thessaly");
    insert_into_images("horsemen/image00327.jpg", 
                            "numisbids", 
                            "sid=277&lot=327", 
                            "Drachm with helmeted and cuirassed horseman holding a spear with a butterfly sitting on it, <br/>cr. 166–84 BC, Kibyra, Phrygia (Hellenistic)");
    insert_into_images("horsemen/image01781.jpg", 
                            "numisbids", 
                            "sid=1516&lot=1781", 
                            "Return of King Karl XII from the Turkish exile and his arrival in Stralsund on 11 November 1714,<br/>1714, silver medal (unsigned)");
    insert_into_images("horsemen/image168.jpg", 
                            "erenow.com", 
                            "http://erenow.com/ancient/the-complete-roman-army/18.html", 
                            "Tombstone for Roman cavalryman Rufus Sita, <br/>cr. 50 AD, discovered in Gloucester, UK");
    insert_into_images("horsemen/image_src_baslemont.jpg", 
                            "Musée lorrain", 
                            "https://musee-lorrain.nancy.fr/fr/collections/les-oeuvres-majeures/portrait-equestre-de-madame-de-saint-baslemont-59", 
                            "Equestrian portrait of Madame de Saint Baslemont, <br/>1646, Claude Déruet");
    insert_into_images("horsemen/imgB.jpeg", 
                            "museum.ru", 
                            "http://www.museum.ru/N48506", 
                            "Equestrian portrait of Alexis of Russia, <br/>cr.1670-80, unknown");
    insert_into_images("germany/img_20150124_140912.jpg", 
                            "truly yours", 
                            NULL, 
                            "VW Beetle");
    insert_into_images("germany/img_20150124_140942.jpg", 
                            "truly yours", 
                            NULL, 
                            "VW Beetle's Label");
    insert_into_images("allchurch/img_20150412_172505.jpg", 
                            "Me", 
                            "http://www.jamesfreemangallery.com/artworks/emily-allchurch/urban-chiaroscuro-8-st-petersburg-after-piranesi", 
                            "Emily Allchurch's work 'Urban Chiaroscuro 8: St. Petersburg (after Piranesi)' at the Royal Academy Summer Exhibition 2014");
    insert_into_images("horsemen/img_25_Altai_golden_horse.jpg", 
                            "UNESCO » Space for Heritage", 
                            "http://www.unesco.org/new/en/natural-sciences/science-technology/space-activities/space-for-heritage/activities/open-initiative-projects/preservation-of-the-frozen-tombs-in-the-mountains-of-altai/", 
                            "Greco-Scythian gold horseman appliqué, <br/>(?) cr. 4th century BC");
    insert_into_images("horsemen/ivory_alexander.jpg", 
                            "Hermitage Amsterdam", 
                            "https://www.hermitage.nl/en/tentoonstellingen/alexander_de_grote/achtergrond.htm", 
                            "The Triumph of Alexander the Great, <br/>Late 18th century, Russian");
    insert_into_images("horsemen/john_0.jpg", 
                            "Seals", 
                            "angevin/john.htm", 
                            "Seal of John Lackland before he became King (1177-1199)");
    insert_into_images("yoga/keep.jpg", 
                            NULL, 
                            NULL, 
                            NULL);
    insert_into_images("horsemen/kickingHorse.png", 
                            "Getty", 
                            "1091", 
                            "Kicking Horse, <br/>cr.1630, Caspar Gras");
    insert_into_images("horsemen/kylix_bellerophon.jpg", 
                            "Met", 
                            "646263", 
                            "Gilt silver kylix with Bellerophon riding Pegasus and attacking the Chimaera, <br/>late 5th century BC, Greek");
    insert_into_images("horsemen/l_pl1_3616_opn_tr_t04v-2.jpg", 
                            "WAM", 
                            "38328", 
                            "Diptych Icon with Saint George, and Mary and the Infant Christ, <br/>early 15th century");
    insert_into_images("horsemen/l_pl1_41205_fnt_tr_t01iv-2.jpg", 
                            "WAM", 
                            "25974", 
                            "St. George and the Dragon (small image used for personal prayer), <br/>12th century");
    insert_into_images("horsemen/l_ps1_4817_sideb_dd_t08.jpg", 
                            "WAM", 
                            "18168", 
                            "Amphora with two armed horsemen clashing on the battlefield, their horses rearing above a fallen warrior trapped beneath them,<br/>cr. 520 BC, Attica");
    insert_into_images("horsemen/l_ps1_542653_back_dd_t09.jpg", 
                            "WAM", 
                            "22369", 
                            "Amuletic pendant with Solomon, the Holy Rider, spears Lillith, <br/>5th-6th century");
    insert_into_images("berets/les_demoiselles_davignon.jpg", 
                            "wiki", 
                            "Les_Demoiselles_d%27Avignon.jpg", 
                            "Les Demoiselles d'Avignon, <br/>1907, Picasso");
    insert_into_images("goldenbronzehorsemen/lion.png", 
                            "Free Stock Photos", 
                            "http://www.freestockphotos.biz/stockphoto/10692", 
                            "Lion");
    insert_into_images("similar_different/little-girl-in-blue-1918halfhd.jpg", 
                            "WikiArt", 
                            "http://www.wikiart.org/en/amedeo-modigliani/little-girl-in-blue-1918", 
                            "Little girl in blue,<br/>Modigliani, 1918");
    insert_into_images("horsemen/louisXII_reims.jpg", 
                            "wiki", 
                            "Equestrian_statue_of_Louis_XIII_(Reims).jpg", 
                            "High relief of king Louis XIII on horseback, <br/>1818, after the statue by Nicolas Jacques destroyed at the Revolution (1792)");
    insert_into_images("horsemen/louisXIV_desjardins.jpg", 
                            "From a book", 
                            NULL, 
                            "Equestrian group with Louis XIV, cr. 1690-4, Martin Desjardins (or his assistants)");
    insert_into_images("germany/luther-bible-double-page-spread_5441.jpg", 
                            "British Museum via a blog", 
                            "https://britishmuseumblog.files.wordpress.com/2014/09/luther-bible-double-page-spread_5441.jpg", 
                            "Luther Bible, 1455");
    insert_into_images("horsemen/m505204_pe282_p.jpg", 
                            "Base Joconde", 
                            "http://www.culture.gouv.fr/public/mistral/joconde_fr?ACTION=RETROUVER&NUMBER=25&REQ=%28%28portrait%20charles%20ix%29%20%3aTOUT%20%29%20ET%20%28%27%24FILLED%24%27%20%3aVIDEO%29", 
                            "Charles IX, King of France, <br/>1565-99, unknown artist");
    insert_into_images("horsemen/ma-31720562-WEB.jpg", 
                            "LA", 
                            "172165", 
                            "Civilis Separates Germans and Dutch Troops, <br/>1612, Antonio Tempesta, Florence, Italy");
    insert_into_images("horsemen/ma-31720744-WEB.jpg", 
                            "LA", 
                            "234355", 
                            "Boar Hunt, <br/>1570-1600, Antonio Tempesta, Florence, Italy");
    insert_into_images("horsemen/ma-31721766-WEB.jpg", 
                            "LA", 
                            "234493", 
                            "Nessus Attempting to Take Dejanera from Hercules, <br/>1606, Antonio Tempesta, Florence, Italy");
    insert_into_images("horsemen/ma-31722319-WEB.jpg", 
                            "LA", 
                            "234574", 
                            "Stag Hunt, <br/>1570-1600, Antonio Tempesta, Florence, Italy");
    insert_into_images("horsemen/ma-31723208-WEB.jpg", 
                            "LA", 
                            "234397", 
                            "Lion Hunt, <br/>1570-1600, Antonio Tempesta, Florence, Italy");
    insert_into_images("horsemen/ma-31736056-WEB.jpg", 
                            "LA", 
                            "234368", 
                            "Hercules and the Centaurs, <br/>1608, Antonio Tempesta, Florence, Italy");
    insert_into_images("horsemen/mainz_inscr_maris_lm2.jpg", 
                            "livius.org", 
                            "http://www.livius.org/pictures/germany/mainz-mogontiacum/mainz-museum-pieces/mainz-tombstone-of-maris/", 
                            "Roman tombstone of the mounted archer Maris, <br/>31–70 AD, discovered in Mainz, Germany");
    insert_into_images("horsemen/medal.png", 
                            "'Arms and Armour of the Warrior Saints' by Piotr Grotowski", 
                            "https://books.google.co.uk/books?id=k2spzj0jNVsC&pg=PA489", 
                            "Gold medal of Constantius II, <br/>334-361");
    insert_into_images("horsemen/medieval_bellerophon.jpg", 
                            "Phoenix Ancient Art S.A.", 
                            "http://www.phoenixancientart.com/work-of-art/medallion-representing-a-horse-man-killing-a-chimera-bellerophon", 
                            "Silver Medallion representing Bellerophon killing a Chimera, <br/>5th-7th century AD, European (Visigothic?)");
    insert_into_images("horsemen/mfa_154065.jpg", 
                            "MFA", 
                            "154065", 
                            "Pitcher (oinochoe) with a battle of the Greeks and Amazons, <br/>cr. 320–310 BC, Apulia");
    insert_into_images("berets/moulin-de-la-galette.jpg", 
                            "guggenheim.org", 
                            "http://www.guggenheim.org/new-york/collections/collection-online/artwork/3411", 
                            "Moulin de la Galette, <br/>1900, Picasso");
    insert_into_images("horsemen/ndc4400l-142C6657B5C025801C7.jpg", 
                            "wiki", 
                            "Altıkulaç_Sarcophagus_Now_in_Troy_Museum_8091.jpg", 
                            "The Çan Sarcophagus, detail of Persian horseman spearing fallen footsoldier, <br/>400-375 BC, village of Altıkulaç, near Çan, modern-day Turkey");
    insert_into_images("horsemen/ndc4401l-142C665E2583FAEC2BB.jpg", 
                            "wiki", 
                            "Altıkulaç_Sarcophagus_hunting_scene_(detail).jpg", 
                            "The Çan Sarcophagus, detail of hunting scene, <br/>400-375 BC, village of Altıkulaç, near Çan, modern-day Turkey");
    insert_into_images("horsemen/Canakkale_Archaeological_Museum_Sarcophagus.jpg", 
                            "wiki", 
                            "Çanakkale_Archaeological_Museum_Sarcophagus.jpg", 
                            "The Çan Sarcophagus, <br/>400-375 BC, village of Altıkulaç, near Çan, modern-day Turkey");
    insert_into_images("horsemen/nommos-of-taras-tarentum-with-horse-and-rider-2945.jpg", 
                            "MFA", 
                            "2945", 
                            "Nommos with horse and rider,<br/>cr. 390 BC, Taras, Apulia");
    insert_into_images("horsemen/oil-flask-aryballos-with-bellerophon-attacking-the-chimaera-185364.jpg", 
                            "MFA", 
                            "185364", 
                            "Oil flask (aryballos) with Bellerophon attacking the Chimaera, <br/>cr. 650 BC, Corinth, Greece");
    insert_into_images("germany/paper-nazis.jpg", 
                            "Time Out", 
                            "http://www.timeout.com/london/things-to-do/germany-memories-of-a-nation", 
                            "Paper Nazi Soldiers, c. 1933-43");
    insert_into_images("horsemen/parth-west-frz.jpg", 
                            "The Beazley Archive", 
                            "http://www.beazley.ox.ac.uk/sculpture/ashmolean/context/parth-west-frz.htm", 
                            "West Frieze of the Parthenon, <br/>drawing by Marion Cox, <br/>taken from 'Greek Sculpture Classical Period' by John Boardman");
    insert_into_images("horsemen/persian_seal-1.jpg", 
                            "BM", 
                            "805202", 
                            "Scaraboid stamp seal with a scene of a rider, possibly a king, in Median dress galloping towards the right and spearing a boar, <br/>5th - 4th century BC");
    insert_into_images("horsemen/persian_seal.jpg", 
                            "BM", 
                            "805200", 
                            "Stamp-seal depicting hunting, <br/>cr. 6th-4th century BC, Achaemenid (?)");
    insert_into_images("horsemen/peter_the_great_tapestry.jpg", 
                            "Andrew D. Meyer's Blog", 
                            "http://andrewdmeyer.com/2013/08/19/hermitage-museum-st-petersburg-russia/", 
                            "Battle of Poltava (tapestry), <br/>after Louis Caravaque, 1720s");
    insert_into_images("horsemen/phalera.jpg", 
                            "BM", 
                            "423260", 
                            "Bronze fitting from horse's breast-piece in a form of Commodus (?) on horseback, <br/>?, Rome");
    insert_into_images("berets/picasso.jpg", 
                            "Getty Images", 
                            "http://www.gettyimages.co.uk/detail/news-photo/portrait-of-spanish-born-artist-pablo-picasso-in-a-winter-news-photo/3470918", 
                            "Picasso, <br/>1950s, taken by an unknown photographer");
    insert_into_images("horsemen/picture-artwork-saint_georges_et_le_dragon-1000-1000-73800.jpg", 
                            "amorosart", 
                            "https://en.amorosart.com/artwork-dali-saint_georges_et_le_dragon-73800.html", 
                            "St. George and the Dragon,<br/>1983, Salvador Dalí");
    insert_into_images("germany/placard.jpg", 
                            "HDG", 
                            "http://www.hdg.de/lemo/bestand/objekt/alltagskultur-transparent-wir-sind-ein-volk.html", 
                            "Placard, Berlin, 1989");
    insert_into_images("horsemen/portrait_of_king_george_i-400.jpg", 
                            "www.fineartprintsondemand.com", 
                            "http://www.fineartprintsondemand.com/artists/kneller/portrait_of_king_george_i.htm", 
                            "Portrait of King George I, <br/>1717, Godfrey Kneller");
    insert_into_images("berets/tumblr_inline_mf8k6j6qb71qaw235.jpg", 
                            "Lauren Dukoff @ tumblr.com", 
                            "http://laurendukoff.tumblr.com/post/38232595486/adele-santa-monica-ca", 
                            "Rembrandt Lighting for Adele");
    insert_into_images("horsemen/prancingHorse.png", 
                            "Getty", 
                            "1130", 
                            "Rearing Horse, <br/>1605-10, Adriaen de Vries, Netherlands");
    insert_into_images("horsemen/prof_richard_7845951924.jpg", 
                            "Richard Mortel @ flickr", 
                            "https://www.flickr.com/photos/prof_richard/7845951924/", 
                            "Sarcophagus of Saint Helena, <br/>cr. 340, Rome");
    insert_into_images("horsemen/rampante-tacca.jpg", 
                            "mostra.ugoguidi.it", 
                            "http://mostra.ugoguidi.it/Inglese/finestra1.php?opera=55", 
                            "Spare horse for the equestrian statuette of Louis XIII, <br/>1615-17, Pietro Tacca");
    insert_into_images("germany/refugee-cart-19451.jpg", 
                            "ArtandEducation (@artanded)", 
                            "https://twitter.com/artanded/status/546304084949893121", 
                            "German Refugee Cart, 1945");
    insert_into_images("berets/rembrandt-lighting-for-still-life.jpg", 
                            "Alessandro Guerani Still", 
                            "http://www.alessandroguerani.com/still.html", 
                            "Rembrandt Lighting for Chili Peppers");
    insert_into_images("berets/rembrandt-the-conspiracy-of-the-batavians-under-claudius-civilis.jpg", 
                            "wiki", 
                            "Bataafseeed.jpg", 
                            "The Conspiracy of the Batavians under Claudius Civilis, <br/>1661–2, Rembrandt");
    insert_into_images("rj/romeo_juliet_bell.jpg", 
                            "Bell Shakespeare Theatre Company via abc.net.au", 
                            "http://www.abc.net.au/news/2016-02-04/romeo-and-juliet-bell-shakespeare/7140222", 
                            NULL);
    insert_into_images("horsemen/s-l1600.jpg", 
                            "eBay", 
                            "http://www.ebay.com/itm/261934752446", 
                            "Ethiopian Coptic metal altar with the depiction of St. George,<br/>2010s, $75 off eBay");
    insert_into_images("horsemen/s-l500.jpg", 
                            "ebay.com", 
                            "http://www.ebay.com/itm/201594822410", 
                            "Empress Elisabeth of Russia on Horseback,<br/>after 1934, Johann Joachim Kaendler (after), Meissen, was on sale for $9900");
    insert_into_images("germany/1491_Riemenschneider_Evangelist_Lukas_anagoria.JPG", 
                            "wiki", 
                            "1491_Riemenschneider_Evangelist_Lukas_anagoria.JPG", 
                            "The Four Evangelists (Luke), Tilman Riemenschneider, 1490–2");
    insert_into_images("horsemen/salon_guerre.jpg", 
                            "wiki", 
                            "Salon_de_la_guerre_War_Room_Versailles_relief_louis_XIV_victorieux_Coysevox.jpg", 
                            "Triumph of Louis XIV, Salon of War, Versailles palace,<br/>c.1678-87, Antoine Coysevox");
    insert_into_images("horsemen/salvador-dali-don-quixote.jpg", 
                            "University of Mary Washington", 
                            "http://www.umw.edu/news/salvador-dali-don-quixote/", 
                            "Don Quixote 2,<br/>cr. 1968, Salvador Dalí");
    insert_into_images("horsemen/salvador-dali-le-comte-duc-dorleans.jpg", 
                            "Artnet", 
                            "https://www.artnet.com/auctions/artists/salvador-dal%C3%AD/le-comte-duc-dorl%C3%A9ans", 
                            "Le Comte Duc d'Orléans, <br/>1986, Salvador Dalí");
    insert_into_images("horsemen/sarcofagus.jpg", 
                            "MFA", 
                            "151377", 
                            "Sarcophagus and lid with husband and wife with two pairs of horsemen and foot soldiers in combat, <br/>350–300 BC, Italian/Etruscan");
    insert_into_images("horsemen/sasanian_hunt.jpg", 
                            "The Smithsonian's Museum of Asian Art", 
                            "https://www.freersackler.si.edu/object/F1962.1/", 
                            "Bowl with the depiction of a king hunting ibices, <br/>4th-5th century");
    insert_into_images("horsemen/sasson_75.jpg", 
                            "Sasson Ancient Art", 
                            "http://www.sassonancientart.com/artwork_show_75.html", 
                            "Hematite magic gem of Solomon,<br/>3rd century, late Roman");
    insert_into_images("similar_different/self-portrait-1919halfhd.jpg", 
                            "WikiArt", 
                            "http://www.wikiart.org/en/amedeo-modigliani/self-portrait-1919", 
                            "Self Portrait, Modigliani,<br/>1919");
    insert_into_images("horsemen/sf-rlc-1975-1-1120.jpg", 
                            "Met", 
                            "460221", 
                            "Dish depicting an episode from the Sack of Rome, 1527: the assault on the Borgo (?), <br/>cr. 1540, Workshop of Guido Durantino (Guido Fontana), Urbino");
    insert_into_images("horsemen/shm0650.jpg", 
                            "Silk Road Seattle", 
                            "https://depts.washington.edu/silkroad/museums/shm/shmsasanian.html", 
                            "Dish depicting Varakhran hunting, <br/>cr. 390-420");
    insert_into_images("horsemen/sisinnius.jpg", 
                            "CBd", 
                            "1078", 
                            "Magical pendant: Holy rider (Saint Sisinnius) trampling and spearing a woman lying on the ground, <br/>?");
    insert_into_images("horsemen/sk-2017_04.jpg", 
                            "Seeker", 
                            "https://www.seeker.com/ancient-roman-mosaic-found-in-tuscany-1770324031.html", 
                            "Mosaic with a boar hunting scene,<br/>5th century, Villa de Capraia e Limite, Tuscany, Italy");
    insert_into_images("similar_different/soutine-self-portrait.jpg", 
                            "WikiArt", 
                            "http://www.wikiart.org/en/chaim-soutine/self-portrait", 
                            "Self Portrait, Soutine,<br/>1918");
    insert_into_images("horsemen/st-george-and-the-dragon.jpg", 
                            "WikiArt", 
                            "https://www.wikiart.org/en/wassily-kandinsky/st-george-and-the-dragon", 
                            "St. George And The Dragon, <br/>cr. 1915, Wassily Kandinsky");
    insert_into_images("horsemen/st-george-and-the-dragon_green.jpg", 
                            "art-dali.com", 
                            "http://art-dali.com/1960_27.html", 
                            "St. George and the Dragon, 1962, Salvador Dalí");
    insert_into_images("horsemen/st-george-killing-the-dragon-1918.jpg", 
                            "WikiArt", 
                            "https://www.wikiart.org/en/ilya-mashkov/st-george-killing-the-dragon-1918", 
                            "St. George Killing The Dragon, <br/>1918, Ilya Mashkov");
    insert_into_images("horsemen/st-george-killing-the-dragon-1940.jpg", 
                            "PICTIFY", 
                            "http://pictify.saatchigallery.com/121536/giorgio-de-chirico-st-george-killing-the-dragon-1940", 
                            "St. George Killing the Dragon, <br/>1940, Giorgio de Chirico, Italy");
    insert_into_images("horsemen/st-george-xi-cent-svaneti-museum.jpg", 
                            "In Search Of Saint George", 
                            "https://insearchofsaintgeorge.com/chapter-2/", 
                            "Silver-gilt icon of St.George, <br/>11th century");
    insert_into_images("horsemen/st_mrtr_Merkorious_coptic_orthodox_icon.jpeg", 
                            "pc-freak.net", 
                            "http://www.pc-freak.net/images/st_mrtr_Merkorious_coptic_orthodox_icon.jpeg", 
                            "Saint Mercurius, <br/>?");
    insert_into_images("horsemen/stater-of-kelenderis-with-youth-riding-horse-2761.jpg", 
                            "MFA", 
                            "2761", 
                            "Stater with a youth riding horse,<br/>450–400 BC, Kelenderis, Cilicia");
    insert_into_images("horsemen/stater-of-kyzikos-with-horse-and-rider-above-tunny-fish-3299.jpg", 
                            "MFA", 
                            "3299", 
                            "Stater with horse and rider above tunny fish, <br/>cr. 460–400 BC, Kyzikos, Mysia");
    insert_into_images("horsemen/stater-of-taras-tarentum-with-horse-and-rider-951.jpg", 
                            "MFA", 
                            "951", 
                            "Stater,<br/>334–302 BC, Taras, Apulia");
    insert_into_images("horsemen/stater-of-taras-tarentum-with-horse-and-rider-struck-under-philokles-955.jpg", 
                            "MFA", 
                            "955", 
                            "Stater struck under Philokles,<br/>302–281 BC, Taras, Apulia");
    insert_into_images("horsemen/stater-of-taras-tarentum-with-rider-vaulting-from-horse-942.jpg", 
                            "MFA", 
                            "942", 
                            "Stater  with a rider vaulting from a horse,<br/>420–380 BC, Taras, Apulia");
    insert_into_images("horsemen/stater-of-taras-tarentum-with-rider-vaulting-from-horse-943.jpg", 
                            "MFA", 
                            "943", 
                            "Stater with a rider vaulting from a horse,<br/>380–344 BC, Taras, Apulia");
    insert_into_images("horsemen/stater-of-taras-tarentum-with-warrior-on-horseback-crowned-by-victory-struck-under-kallikrates-885.jpg", 
                            "MFA", 
                            "885", 
                            "Stater with a warrior on horseback crowned by Victory, struck under Kallikrates,<br/>cr. 240–228 BC, Taras, Apulia");
    insert_into_images("horsemen/stgeorgedragon1.jpg", 
                            "The Second Website of Bob Speel", 
                            "http://www.speel.me.uk/gp/stgeorgedragon.htm", 
                            "War Memorial with Sculpture of St.George and the Dragon, <br/>cr. 1925-30, C.L. Hartwell RA, London NW8");
    insert_into_images("horsemen/stgeorgedragon9.jpg", 
                            "The Second Website of Bob Speel", 
                            "http://www.speel.me.uk/gp/stgeorgedragon.htm", 
                            "St.George and the Dragon, <br/>1901, detail of the Monument to Queen Victoria by Edward Onslow Ford, Manchester");
    insert_into_images("berets/stilllifewithaskull.jpg", 
                            "wiki", 
                            "StillLifeWithASkull.jpg", 
                            "Still Life With A Skull, <br/>cr. 1671, Philippe de Champaigne");
    insert_into_images("horsemen/svaneti-museum-st-george-with-diocletian.jpg", 
                            "In Search Of Saint George", 
                            "https://insearchofsaintgeorge.com/chapter-2/", 
                            "Silver gilt icon of St George with the prostrate figure of Diocletian, <br/>?");
    insert_into_images("horsemen/tacca_savoy.jpg", 
                            "From a book", 
                            NULL, 
                            "Equestrian monument of Carlo Emmanuele, Duke of Savoy,<br/>1619-21, Pietro Tacca");
    insert_into_images("horsemen/talisman_809.jpg", 
                            "CBd", 
                            "809", 
                            "Magical pendant: Holy Rider on horseback, trampling over a figure lying on the ground, <br/>5th-6th century");
    insert_into_images("horsemen/tenma-01.jpg", 
                            "archeochianciano.blogspot.com", 
                            "http://archeochianciano.blogspot.co.uk/2008_08_01_archive.html", 
                            "Calyx-krater with Bellerophon, <br/>cr. 370 BC, Faliscan/Etruscan");
    insert_into_images("hamlet/thetragedyofhamlet2002s.jpg", 
                            "1 More Film Blog", 
                            "http://www.patheos.com/blogs/1morefilmblog/the-tragedy-of-hamlet-brook-2002/", 
                            "Peter Brook's Polonius and Ophelia");
    insert_into_images("germany/tischbein-goethe-in-the-roman-campagna-1787.jpg", 
                            "Staedel Museum", 
                            "http://www.staedelmuseum.de/en/collection/goethe-roman-campagna-1787", 
                            "Goethe in the Roman Campagna,<br/>Tischbein,<br/>1787");
    insert_into_images("horsemen/tombstone.jpeg", 
                            "Lancashire County Council", 
                            "http://collections.lancsmuseums.gov.uk/narratives/narrative.php?irn=95", 
                            "Roman gravestone showing a soldier Insus holding the severed head of a barbarian,<br/>cr. 100 AD, discovered in Lancashire, UK");
    insert_into_images("horsemen/trihemidrachm-of-corinth-with-bellerophon-riding-pegasos-1451.jpg", 
                            "MFA", 
                            "1451", 
                            "Trihemidrachm of Corinth with Bellerophon riding Pegasus, <br/>338–280 BC, Corinth, Greek culture");
    insert_into_images("horsemen/trump_cartoon.jpg", 
                            "The Guardian", 
                            "https://www.theguardian.com/commentisfree/picture/2017/jan/27/martin-rowson-on-the-may-trump-meeting-cartoon", 
                            "May-Trump Meeting, <br/>January 2017, Martin Rowson for the Guardian");
    insert_into_images("horsemen/tsereteli-peter2-bush_0.jpg", 
                            "exile.ru", 
                            "http://www.exile.ru/print.php?ARTICLE_ID=7895&IBLOCK_ID=35", 
                            "To The Struggle Against Weapons of Mass Destruction");
    insert_into_images("horsemen/tsereteli-peter2-surf1_0.jpg", 
                            "exile.ru", 
                            "http://www.exile.ru/print.php?ARTICLE_ID=7895&IBLOCK_ID=35", 
                            "To The Struggle Against Cancelled Vacation Tours");
    insert_into_images("horsemen/tumblr_inline_npru1bw9Tk1sfjjkp_1280.jpg", 
                            "British Museum @ tumblr.com", 
                            "https://britishmuseum.tumblr.com/post/121260555272/alexander-the-great", 
                            "Silver decadrachm of Alexander the Great showing him (?) attacking enemies riding an elephant, <br/>cr. 324 BC");
    insert_into_images("horsemen/tumblr_nrdno4G25x1qcla2no1_1280.jpg", 
                            "oldpainting.tumblr.com", 
                            "http://oldpainting.tumblr.com/post/123929126936/antonio-m-lorenzo-bernini-equestrian-statue", 
                            "The Vision of Constantine, <br/>1670, Gian Lorenzo Bernini, Scala Regia, Vatican");
    insert_into_images("horsemen/v_tablet_silvan.jpg", 
                            "kroraina.com", 
                            "http://www.kroraina.com/thracia/hb/thrac_hero.html", 
                            "A votive tablet of the deity Sylvanus, <br/>end of 2nd century AD");
    insert_into_images("horsemen/villa_nile_hunt_mus_tripoli.jpg", 
                            "DOMVS ROMANA", 
                            "https://domus-romana.blogspot.co.uk/2012/12/otium-i-ars-venatoria.html", 
                            "Mosaic with a hunting scene,<br/>4th century, Villa of the Nile, Lepcis Magna, Libya");
    insert_into_images("horsemen/voctoria_palatine.jpg", 
                            "Seals", 
                            "other/countypalatine.htm", 
                            "Queen Victoria (1837-1901), Seal of the County Palatine of Lancaster");
    insert_into_images("horsemen/vries.jpg", 
                            "wiki", 
                            "Häst_de_Vries_Drottningholm.JPG", 
                            "Rising horse, <br/>1622, Adriaen de Vries, Prague");
    insert_into_images("horsemen/wam_27029.jpg", 
                            "WAM", 
                            "27029", 
                            "Amulet with the Evil Eye and the Holy Rider, <br/>5th-6th century");
    insert_into_images("horsemen/warrior.jpg", 
                            "Getty", 
                            "945", 
                            "Warrior on Horseback, <br/>1562-65, Willem Danielsz van Tetrode, Netherlands");
    insert_into_images("germany/wetsuit.png", 
                            "'Germany: Memories of a Nation' e-book", 
                            "https://books.google.co.uk/books?id=BwO5BAAAQBAJ&amp;pg=PT51", 
                            "Wetsuit, East Germany,<br/>used in an attempt to escape to West Germany,<br/>1987");
    insert_into_images("allchurch/wpid-xdiary032411_01.jpg", 
                            "Camden New Journal", 
                            "http://camdennewjournal.com/article/xtra-diary-tokyo-story-emily-allchurch-diemarnoble-photography-until-may-7", 
                            "Emily Allchurch at the Diemar/Noble Photography during her Tokyo series exhibition, spring 2011");
    insert_into_images("hamlet/yorick-scene.jpg", 
                            "Guardian", 
                            "http://www.theguardian.com/stage/2000/dec/02/peter-brook-hamlet-theatre", 
                            "Missing Yorick scene");
    insert_into_images("horsemen/0b01e2c5402314588bb5520e72d01129.jpeg", 
                            "Bonhams", 
                            "11597/lot/245/", 
                            "Greco-Scythian gold horseman appliqué, <br/>(?) cr. 4th century BC");
    insert_into_images("horsemen/1193527.jpg", 
                            "@Dantes, juzaphoto.com", 
                            "http://www.juzaphoto.com/me.php?pg=111213&l=en", 
                            "Statue of Victor Amadeus I, Duke of Savoy, <br/>1620s and 1660s, Andrea Rivalta and Federico Vanelli");
    insert_into_images("horsemen/1280px-San_Romano_Battle_Paolo_Uccello_London_01.jpg", 
                            "wiki", 
                            "San_Romano_Battle_(Paolo_Uccello,_London)_01.jpg", 
                            "Niccolò Mauruzi da Tolentino at the Battle of San Romano,<br/>cr.1438-40, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/253796.png", 
                            "Met", 
                            "253796", 
                            "Plasma scarabaeoid seal: Persian Horseman Slaying a Greek with a Spear, <br/>cr. 450-400 BC, Greek/Ionian");
    insert_into_images("horsemen/776px-Count-Duke_of_Olivares.jpg", 
                            "wiki", 
                            "Count-Duke_of_Olivares.jpg", 
                            "Equestrian Portrait Of The Count-Duke Of Olivares, <br/>1634, Diego Velázquez");
    insert_into_images("horsemen/7b16450958a3ef2b014e52d64a66cfe8.jpg", 
                            "Pinterest", 
                            "https://uk.pinterest.com/pin/111323422012988372/", 
                            "Statue of King Louis XIV, Gian Lorenzo Bernini, <br/>1665-84, Versailles");
    insert_into_images("horsemen/866px-Jacques_Louis_David_-_Bonaparte_franchissant_le_Grand_Saint-Bernard_20_mai_1800_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Jacques_Louis_David_-_Bonaparte_franchissant_le_Grand_Saint-Bernard,_20_mai_1800_-_Google_Art_Project.jpg", 
                            "Napoleon Crossing the Alps, <br/>1802, Jacques-Louis David");
    insert_into_images("horsemen/AN01135806_001_l.jpg", 
                            "BM", 
                            "3437771", 
                            "Henry IV by God's grace the king of France and Navarre aged 51 (1603),<br/>1585-1603, Robert Boissard, France");
    insert_into_images("horsemen/Equestrian_portrait_of_Grand_Duchess_Catherine_Alexeevna_by_G.C.Grooth_c._1744_Russian_museum.jpg", 
                            "wiki", 
                            "Equestrian_portrait_of_Grand_Duchess_Catherine_Alexeevna_by_G.C.Grooth_(c._1744,_Russian_museum).jpg", 
                            "Equestrian portrait of Grand Duchess Catherine Alexeevna, <br/>G.C.Grooth, 1744");
    insert_into_images("horsemen/Equestrian_portrait_of_Peter_III_by_Grooth_1742-44_Russian_museum.jpg", 
                            "wiki", 
                            "Equestrian_portrait_of_Peter_III_by_Grooth_(1742-44_(%3F),_Russian_museum).jpg", 
                            "Equestrian portrait of Peter III, <br/>G.C.Grooth, 1742-4");
    insert_into_images("horsemen/H0046-L08660849.jpg", 
                            "Sothebys", 
                            "2008/old-master-paintings-and-drawings-pf8011/lot.50.html", 
                            "Equestrian portrait of victorious Louis XIII, <br/>17th century, Claude Déruet (attributed to)");
    insert_into_images("horsemen/Peter_Paul_Rubens_copy_of_the_lost_Battle_of_Anghiari.jpg", 
                            "wiki", 
                            "Peter_Paul_Ruben%27s_copy_of_the_lost_Battle_of_Anghiari.jpg", 
                            "Copy of the lost Battle of Anghiari by Leonardo da Vinci, 1504-5, <br/>circa 1603, Peter Paul Rubens");
    insert_into_images("horsemen/SCARAB_bellerophone.jpg", 
                            "Christies", 
                            "an-etruscan-carnelian-scarab-and-gold-finger-5158072", 
                            "Carnelian scarab and gold finger engraved with Bellerophon and the Chimaera, <br/>late 5th century BC, Etruscan");
    insert_into_images("horsemen/a_meissen_ormolu-mounted_equestrian_figure_circa_1745-50_d5440168h.jpg", 
                            "Christies", 
                            "a-meissen-ormolu-mounted-equestrian-figure-circa-1745-50-5440168", 
                            "A Meissen Equestrian Figure,<br/>cr. 1745-50");
    insert_into_images("horsemen/augustus-iii.jpg", 
                            "Langeloh", 
                            "https://www.yu51a5.org/wp-content/uploads/we_2753_reiterstandbild_eng.pdf", 
                            "Augustus III porcelain figurine<br/>Model by Johann J. Kaendler,<br/>Meissen 1745");
    insert_into_images("horsemen/ausutus1m.jpg", 
                            "wiki", 
                            "Dresden_Zwinger_Model_equestrian_statue_Augustus_III.JPG", 
                            "Model for a 12m equestrian statue to Augustus III, <br/>123cm x 94cm x 117cm,<br/>1753, Johann Joachim Kändler");
    insert_into_images("horsemen/bonhams.jpeg", 
                            "Bonhams", 
                            "13502/lot/55/", 
                            "An equestrian portrait of a gentleman, <br/>?, Studio of Claude Déruet");
    insert_into_images("horsemen/d3802122x.jpg", 
                            "Christies", 
                            "at-sf-2-10-0-0-10-2-no3001-3802122", 
                            "Equestrian portrait of a prince in armour, with the Order of the Golden Fleece, <br/>before 1684, Gonzales Coques");
    insert_into_images("horsemen/d5425674a.jpg", 
                            "Christies", 
                            "a-meissen-equestrian-figure-of-augustus-iii-5425674", 
                            "Augustus III porcelain figurine,<br/>20th century, incised in 1796,<br/>after a model by Meyer");
    insert_into_images("yoga/downwarddog.jpg", 
                            "Yoga Outlet", 
                            "downward-facing-dog-in-yoga", 
                            NULL);
    insert_into_images("horsemen/image.jpeg", 
                            "Bonhams", 
                            "21925/lot/212/", 
                            "Tapestry roundel with horseman, <br/>5th-7th century, Coptic");
    insert_into_images("horsemen/marcus_sotbeys.jpg", 
                            "Sothebys", 
                            "2013/arts-of-europe-l13301/lot.1.html", 
                            "Dish depicting the sacrifice of Marcus Curtius, <br/>cr. 1550-60, workshop of Virgiliotto Calamelli, Faenza");
    insert_into_images("horsemen/saint_george_ethiopia.jpeg", 
                            "Minneapolis Institute of Art", 
                            "https://github.com/artsmia/artstories.md/blob/master/stories/44-plates-from-a-christian-illuminated-album.md", 
                            "Saint George from the ensemble of 44 leaves featuring Ethiopian saints and scenes from the Hebrew Scriptures and New Testament, painting on parchment,<br/>late 17th century");
    insert_into_images("horsemen/saint_george_ethiopia_3.jpeg", 
                            "Minneapolis Institute of Art", 
                            "https://github.com/artsmia/artstories.md/blob/master/stories/44-plates-from-a-christian-illuminated-album.md", 
                            "Saint George from the ensemble of 44 leaves featuring Ethiopian saints and scenes from the Hebrew Scriptures and New Testament, painting on parchment,<br/>late 17th century");
    insert_into_images("horsemen/showImage.asp_.jpeg", 
                            "Liechtenstein The Princely Collections", 
                            "http://www.liechtensteincollections.at/de/pages/artbase_main.asp?module=browse&action=m_work&lang=de&sid=92343&oid=W-542005134758570", 
                            "Grand duke Ferdinando II di Medici on Horseback, with the head of Peter the Great, <br/>1615-21, Pietro Tacca, Florence");
    insert_into_images("horsemen/talisman_808.jpg", 
                            "CBd", 
                            "808", 
                            "Magical pendant with Holy Rider on horseback, trampling over a dragon lying on the ground, <br/>5th century, Byzantine");
    insert_into_images("horsemen/thomas_gainsborough_ra_after_sir_anthony_van_dyck_equestrian_portrait_d5639296h-1.jpg", 
                            "Christies", 
                            "thomas-gainsborough-ra-equestrian-portrait-of-albert-5639296", 
                            "Equestrian portrait of the Duke of Arenberg (after Anthony van Dyck), <br/>1742-88, Thomas Gainsborough, England");
    insert_into_images("yoga/yoga_chairposetwist_01_300x3501.jpg", 
                            "Yoga Outlet", 
                            "chair-pose-twist-in-yoga", 
                            NULL);
    insert_into_images("yoga/yoga_standingforwardfold.jpg", 
                            "Yoga Outlet", 
                            "standing-forward-fold-in-yoga", 
                            NULL);
    insert_into_images("yoga/yoga_threeleggeddownwarddog_01_300x350.jpg", 
                            "Yoga Outlet", 
                            "three-legged-downward-dog-in-yoga", 
                            NULL);
    insert_into_images("yoga/yoga_warriori_01_300x3501.jpg", 
                            "Yoga Outlet", 
                            "warrior-i-pose-in-yoga", 
                            NULL);
    insert_into_images("yoga/yoga_warriorii_02_300x350.jpg", 
                            "Yoga Outlet", 
                            "warrior-ii-pose-in-yoga", 
                            NULL);
    insert_into_images("germany/arrowd.png", 
                            NULL, 
                            NULL, 
                            NULL);
    insert_into_images("germany/arrowL.png", 
                            NULL, 
                            NULL, 
                            NULL);                            
    insert_into_images("germany/arrowR.png", 
                            NULL, 
                            NULL, 
                            NULL);                                
    insert_into_images("horsemen/AN00274931_001_l.jpg", 
                            "BM", 
                            "459343", 
                            "Amphora with the Dioscuri on horseback, <br/>Attic, cr. 500 BC");
    insert_into_images("horsemen/Edfu47.JPG", 
                            "wiki", 
                            "Edfu47.JPG", 
                            "Wall relief of fight between Set and Horus where Horus spears Set (hippopotamus), <br/>Temple of Edfu, Egypt, 237 BC - 57 BC");
    insert_into_images("horsemen/Edfu_temple_relief_by_John_Campana.jpg", 
                            "wiki", 
                            "Edfu_temple_relief_by_John_Campana.jpg", 
                            "Wall relief of fight between Set and Horus where Horus spears Set (crocodile), <br/>Temple of Edfu, Egypt, 237 BC - 57 BC");
    insert_into_images("horsemen/Povillon_statue_de_Louis_XIII_le_juste.JPG", 
                            "wiki", 
                            "Povillon_statue_de_Louis_XIII_le_juste.JPG", 
                            "Engraving of a bronze statue of Louis XIII on horseback, <br/>1636, Nicolas Jacques, engraving made in 1765. The original bronze statue was destroyed at the Revolution (1792)");
    insert_into_images("horsemen/Giorgio_Vasari_-_The_battle_of_Marciano_in_Val_di_Chiana_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Giorgio_Vasari_-_The_battle_of_Marciano_in_Val_di_Chiana_-_Google_Art_Project.jpg", 
                            "The battle of Marciano in Val di Chiana,  <br/>1570-1, Giorgio Vasari, Palazzo Vecchio, Florence"); 
    insert_into_images("berets/Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg", 
                            "wiki", 
                            "Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg", 
                            "Mona Lisa,  <br/>1503-6, Leonardo da Vinci");                                                                                           
    insert_into_images("berets/Leonardo_Da_Vinci_-_Vergine_delle_Rocce_(Louvre).jpg", 
                            "wiki", 
                            "Leonardo_Da_Vinci_-_Vergine_delle_Rocce_(Louvre).jpg", 
                            "Virgin of the Rocks,  <br/>1483-6, Leonardo da Vinci");                                
    insert_into_images("berets/Ultima_Cena_-_Da_Vinci_5.jpg", 
                            "wiki", 
                            "Última_Cena_-_Da_Vinci_5.jpg", 
                            "The Last Supper,  <br/>1495-8, Leonardo da Vinci");                                
    insert_into_images("berets/Rembrandt_-_Rembrandt_and_Saskia_in_the_Scene_of_the_Prodigal_Son_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Rembrandt_-_Rembrandt_and_Saskia_in_the_Scene_of_the_Prodigal_Son_-_Google_Art_Project.jpg", 
                            "Rembrandt and Saskia in the parable of the Prodigal Son,  <br/>1635, Rembrandt");                                
    insert_into_images("berets/guernica.jpg", 
                            "Alejandro Mos Riera @ vimeo.com", 
                            "https://vimeo.com/189104964", 
                            "Guernica,  <br/>1937, Picasso");                                
    insert_into_images("berets/Leonardo_da_Vinci_LUCAN_self-portrait_PORTRAIT.jpg", 
                            "wiki", 
                            "Leonardo_da_Vinci_LUCAN_self-portrait_PORTRAIT.jpg", 
                            "Self Portrait, a posthumous portrait or a forgery,  <br/>late 15th or early 16th century, Leonardo da Vinci (?)");                                
    insert_into_images("berets/Self-Portrait-leonardo.jpg", 
                            "reprodart.com", 
                            "https://www.reprodart.com/a/leonardo-da-vinci/selfportrait-39.html", 
                            "Self Portrait or a posthumous portrait, <br/>cr. 1500 (?) or cr. 1600, Leonardo da Vinci (?)");                                
    insert_into_images("horsemen/tsipori-palestine-ca-4th.gif", 
                            "classicgrandtour.com", 
                            "https://classicgrandtour.com/2016/11/03/esta-chica-es-epica/", 
                            "Mosaic with a scene of hunting Amazons, <br/>4th or 5th century, Nile House, Tzippori (or Sepphoris, or Zippori) National Park, Palestine (modern Israel)");                                
    insert_into_images("goldenbronzehorsemen/Man_silhouette.svg", 
                            "wiki", 
                            "Man_silhouette.svg", 
                            "Jean-Joseph Vinache <br/>(1696 – 1754)");
    insert_into_images("goldenbronzehorsemen/Lemoyne_the_Younger_-_Etienne_Maurice_Falconet.jpg", 
                            "Met", 
                            "418355", 
                            "Étienne Maurice Falconet <br/>(1716 – 1791)");
                            
    insert_into_images("horsemen/benaki_solomon.jpg", 
                            "Ben", 
                            "108121", 
                            "Seal-amulet with a representation of Solomon on horseback slaying a demon, <br/>5th-6th century, Byzantine");                                
    insert_into_images("horsemen/303622_627795_1000_1000_inner.jpg", 
                            "Ben", 
                            "108370", 
                            "Icon of St George the dragon-slayer on horseback, <br/>Late 16th century, Macedonia");                                
    insert_into_images("horsemen/290485_502620_1000_1000_inner.jpg", 
                            "Ben", 
                            "108181", 
                            "Cameo with a representation of St Theodoros the dragon-slayer on horseback, <br/>13th century, produced in Venice, copy of a Byzantine prototype");                                
    insert_into_images("horsemen/279029_490179_1000_1000_inner.jpg", 
                            "Ben", 
                            "107593", 
                            "Relief icon showing St George on horseback, <br/>15th century, Thrace (?)");                                
    insert_into_images("horsemen/2008BR8707_jpg_l.jpg", 
                            "VA", 
                            "O119192", 
                            "Saint George and the Dragon with two armorial reliefs, <br/>cr. 1500, Venice");                                
    insert_into_images("horsemen/p23_chestercathedraldragon-20170412153656801_web.jpg", 
                            "churchtimes.co.uk", 
                            "https://www.churchtimes.co.uk/articles/2017/21-april/books-arts/book-reviews/glories-of-chester", 
                            "St George and the dragon carved in pale oak, <br/>14th century, Chester, England");                                
    insert_into_images("horsemen/aabar-harema.jpg", 
                            "saudi-archaeology.com", 
                            "http://saudi-archaeology.com/sites/bir-hima/", 
                            "Petroglyphs, 2500-1000 BC, <br/>A'abar Harema, Bir Hima, Saudi Arabia");                                
    insert_into_images("persia_greece/Rembrandt-Belsazar.jpg", 
                            "wiki", 
                            "Rembrandt-Belsazar.jpg", 
                            "Belshazzar's Feast, <br/>cr. 1635-8, Rembrandt");                                
    insert_into_images("persia_greece/1024px-Freedom_Sculpture_at_night.jpg", 
                            "wiki", 
                            "Freedom_Sculpture_at_night.jpg", 
                            "Freedom Sculpture (based on the Cyrus Cylinder), <br/>2017, Beverly Hills, CA");                                
    insert_into_images("persia_greece/Illustrerad_Verldshistoria_band_I_Ill_058.jpg", 
                            "wiki", 
                            "Illustrerad_Verldshistoria_band_I_Ill_058.jpg", 
                            "Bas-relief of Cyrus, Pasargadae, Iran (drawing), <br/>1875, Wilhelm Fredrik Meyer");                                
    insert_into_images("persia_greece/AN00262857_001_l.jpg", 
                            "BM", 
                            "327188", 
                            "The Cyrus Cylinder, after 539BC, <br/>Babylon (now Amran, modern Yemen)");   
    insert_into_images("persia_greece/Cyrus-cylinder-at-Smithsonian1-HR.jpg", 
                            "cyruscylinder2013.com", 
                            "http://cyruscylinder2013.com/photos-of-the-tour-launch-event/", 
                            "The Cyrus Cylinder U.S.A. tour launch event, <br/>2013, Washington"); 
    insert_into_images("persia_greece/Scene_at_the_Signing_of_the_Constitution_of_the_United_States.jpg", 
                            "wiki", 
                            "Scene_at_the_Signing_of_the_Constitution_of_the_United_States.jpg", 
                            "Scene at the Signing of the Constitution of the United States, <br/>1940, Howard Chandler Christy");
    insert_into_images("persia_greece/AN00851421_001_l.jpg", 
                            "BM", 
                            "327143", 
                            "The Nabonidus Cylinder, 556-539BC, <br/>Ur, Mesopotamia (now Tell el-Muqayyar, Iraq)");
    insert_into_images("persia_greece/Vista_Acropolis_Atenas_2010.jpg", 
                            "wiki", 
                            "Vista_Acrópolis_Atenas_2010.jpg", 
                            "Parthenon, 447-432 BC, <br/>As seen from Philopappos Hill in 2010, Athens, Greece");
    insert_into_images("persia_greece/Ionian_Tribute_Bearers_on_the_Apadana_Staircase.jpg", 
                            "wiki", 
                            'Ionian_Tribute_Bearers_on_the_Apadana_Staircase_(Best_Viewed_Size_&quot;Large&quot;)_(4688057305).jpg', 
                            "Ionian Tribute Bearers, 520 - 486 BC, <br/>Apadana Staircase, Persepolis, Iran");
    insert_into_images("persia_greece/Ionic_entablature.jpg", 
                            "wiki", 
                            "Ionic_entablature.jpg", 
                            "Entablature that shows a frieze, <br/>Source: A. Rosengarten, A Handbook of Architectural Styles, NY, 1898");
    insert_into_images("persia_greece/AN00631923_001_l.jpg", 
                            "BM", 
                            "368264", 
                            "The Standard of Ur, cr. 2500 BC, <br/>Ur, Sumerian city-state in ancient Mesopotamia (now Tell el-Muqayyar, Iraq)");
    insert_into_images("persia_greece/AN00101852_001_l.jpg", 
                            "BM", 
                            "460187", 
                            "Fragment of a marble frieze, Temple of Artemis, 550-510BC, <br/>Ephesus, Ionia (now Anatolia, Turkey)");
    insert_into_images("persia_greece/panathenaic-procession-map.jpg", 
                            "Pantrinitonia, Trinity College, Connecticut", 
                            "https://commons.trincoll.edu/pantrinitonia/procession/", 
                            "Map of Panathenaic Procession, <br/>Ancient Athens");
    insert_into_images("persia_greece/proskynesis.jpg", 
                            "Livius.org", 
                            "http://www.livius.org/pictures/iran/persepolis/persepolis-apadana/persepolis-apadana-north-stairs/persepolis-apadana-central-relief/proskynesis-relief/", 
                            "Central Relief of the North Stairs showing Darius the Great, 520 - 486 BC, <br/>Apadana Staircase, Persepolis, Iran");
    insert_into_images("persia_greece/05_babylonians_2.jpg", 
                            "Livius.org", 
                            "http://www.livius.org/pictures/iran/persepolis/persepolis-apadana/persepolis-apadana-east-stairs/persepolis-apadana-east-stairs-southern-part-babylonians-2/", 
                            "Babylonian Tribute Bearers, 520 - 486 BC, <br/>Apadana Staircase, Persepolis, Iran");
    insert_into_images("persia_greece/01_medians_2.jpg", 
                            "Livius.org", 
                            "http://www.livius.org/pictures/iran/persepolis/persepolis-apadana/persepolis-apadana-east-stairs/persepolis-apadana-east-stairs-southern-part-medes-2/", 
                            "Median Tribute Bearers, 520 - 486 BC, <br/>Apadana Staircase, Persepolis, Iran");
    insert_into_images("persia_greece/AN00198257_001_l.jpg", 
                            "BM", 
                            "461733", 
                            "Block V from the East frieze of the Parthenon, 438 - 432 BC, <br/>Designed by Pheidias, Athens, Greece");
    insert_into_images("persia_greece/AN00446025_001_l.jpg", 
                            "BM", 
                            "461733", 
                            "Block V showing Zeus And Hera, East Parthenon frieze, 438 - 432 BC, <br/>Designed by Pheidias, Athens, Greece");
    insert_into_images("persia_greece/AN00446030_001_l.jpg", 
                            "BM", 
                            "461733", 
                            "Block IV showing eponymous heroes or civic dignitaries, East frieze of the Parthenon, 438 - 432 BC, <br/>Designed by Pheidias, Athens, Greece");
    insert_into_images("persia_greece/AN00446028_001_l.jpg", 
                            "BM", 
                            "461733", 
                            "Block IV showing Hermes and other Greek gods, East frieze of the Parthenon, 438 - 432 BC, <br/>Designed by Pheidias, Athens, Greece");
    insert_into_images("persia_greece/Persepolis_6208819350.jpg", 
                            "wiki", 
                            "Persepolis_6208819350.jpg", 
                            "Apadana, 550-500 BC, <br/>Persepolis, Iran");
    insert_into_images("persia_greece/temple_Frieze_Delphi_Greece_9665603111.jpg", 
                            "wiki", 
                            'Temple_Frieze,_Delphi,_Greece_(9665603111).jpg', 
                            "Frieze of Siphnian Treasury, cr.  525 BC, <br/>Delphi, Greece");
    insert_into_images("persia_greece/Parthenon_3388138127.jpg", 
                            "wiki", 
                            'Parthenon_(3388138127).jpg', 
                            "Parthenon, 447-432 BC, <br/>Athens, Greece");
    insert_into_images("persia_greece/Miniaturk_009.jpg", 
                            "wiki", 
                            'Miniaturk_009.jpg', 
                            "Modern model of the Third Temple of Artemis, <br/>Miniatürk Park, Istanbul, Turkey");
    insert_into_images("persia_greece/parthenon_west_metopes1321732054731.jpg", 
                            "fairfield.edu", 
                            'http://faculty.fairfield.edu/rosivach/cl115/parthenon.htm', 
                            "West Metopes of the Parthenon, 438 - 432 BC, <br/>Designed by Pheidias, Athens, Greece");
    insert_into_images("persia_greece/AN00314232_001_l.jpg", 
                            "BM", 
                            "460572", 
                            "Marble statue from the Mausoleum of Halikarnassos, possibly Mausolus, cr. 350 BC, <br/>Halicarnassus, Caria, now Bodrum, Turkey");
    insert_into_images("persia_greece/AN00198278_001_l.jpg", 
                            "BM", 
                            "460574", 
                            "Marble statue from the Mausoleum of Halikarnassos, possibly Artemisia, cr. 350 BC, <br/>Halicarnassus, Caria, now Bodrum, Turkey");
    insert_into_images("persia_greece/AN01174212_001_l.jpg", 
                            "BM", 
                            "459678", 
                            "Marble statue from the Temple of Athena Polias, possibly Ada, cr. 350 BC - 325 BC, <br/>Priene, Ionia, now Güllübahçe, Turkey");
    insert_into_images("persia_greece/Taj_Mahal_Edited.jpeg", 
                            "wiki", 
                            "Taj_Mahal_(Edited).jpeg", 
                            "Taj Mahal, 1632–53, <br/>Ustad Ahmad Lahauri, Agra, India");
    insert_into_images("persia_greece/Mauzoleumlenina_cropped.jpeg", 
                            "wiki", 
                            'Mauzoleumlenina_(cropped).jpeg', 
                            "Lenin's Mauzoleum, 1924, <br/>Alexey Shchusev, Moscow, Russia");
    insert_into_images("persia_greece/Master_Of_The_Story_Of_Griselda_-_Artemisia_-_WGA14632.jpg", 
                            "wiki", 
                            'Master_Of_The_Story_Of_Griselda_-_Artemisia_-_WGA14632.jpg', 
                            "Artemisia, 1492, <br/>Master of the Griselda Legend, Italy");
    insert_into_images("persia_greece/1280px-1868_Lawrence_Alma-Tadema_-_Phidias_Showing_the_Frieze_of_the_Parthenon_to_his_Friends.jpg", 
                            "wiki", 
                            "1868_Lawrence_Alma-Tadema_-_Phidias_Showing_the_Frieze_of_the_Parthenon_to_his_Friends.jpg", 
                            "Phidias Showing the Frieze of the Parthenon to his Friends, 1868, <br/>Lawrence Alma-Tadema, Great Britain");
    insert_into_images("persia_greece/15-592458.jpg", 
                            "RMN", 
                            '15-592458-2C6NU0AN9AC1K', 
                            "Persepolis Apadana, Festival of the New Year, after 2000, <br/>Balogh Balage, U.S.A.");
    insert_into_images("persia_greece/99-003149.jpg", 
                            "RMN", 
                            '99-003149-2C6NU0HGO7M6', 
                            "Capital of a column from the Apadana, cr. 510 BC, <br/>Palace of Darius I, Susa, Persia, now Iran");
    insert_into_images("persia_greece/Mausoleo_di_alicarnasso_ricostruzione_02.jpg", 
                            "wiki", 
                            'Mausoleo_di_alicarnasso,_ricostruzione_02.JPG', 
                            "Model of the Mausoleum at Halicarnassus, <br/>Bodrum Museum of Underwater Archaeology");
    insert_into_images("persia_greece/F8Fp3JtwmTlx.jpg", 
                            "zimbio.com", 
                            'http://www.zimbio.com/Beyond+the+Tube/articles/MxJGnf6t1Ru/Game+Thrones+Season+8+Predictions', 
                            "Jon Snow and his aunt and partner Daenerys Targaryen, <br/>The Game of Thrones, season 7");
    insert_into_images("persia_greece/macall_b._polay_-_hbo_photo_3_-_h_2017.jpg", 
                            "hollywoodreporter.com", 
                            'https://www.hollywoodreporter.com/live-feed/game-thrones-season-7-finale-recap-dragon-wolf-1032915', 
                            "Cersei and her brother and partner Jaime Lannister, <br/>The Game of Thrones, season 7");
    insert_into_images("persia_greece/Artemisia_Gentileschi_-_Self-Portrait_5365.jpg", 
                            "wiki", 
                            "Artemisia_Gentileschi_-_Self-Portrait_5365.jpg", 
                            "Self-Portrait as Saint Catherine of Alexandria, cr. 1616, <br/>Artemisia Gentileschi, Italy");
    insert_into_images("persia_greece/Anitkabir.JPG", 
                            "wiki", 
                            "Anıtkabir.JPG", 
                            "Anıtkabir, the mausoleum of Mustafa Kemal Atatürk, 1944-53, <br/>Emin Onat and Ahmet Orhan Arda, Ankara, Turkey");
    insert_into_images("persia_greece/AN00237000_001_l.jpg", 
                            "BM", 
                            "366859", 
                            "The Banquet of Ashurbanipal, 645 BC - 635 BC, <br/>Nineveh, Assyria, now Mosul, Iraq");
    insert_into_images("persia_greece/Beit-el-Wali-Temple-Relief.jpg", 
                            "wiki", 
                            "Ramses_II_audience.jpg", 
                            "Plaster cast of a relief showing pharaon Ramesses II receiving produce of Nubia and the lands of tropical Africa, 1269 – 1213 BC, <br/>Temple of Beit el-Wali, Nubia, now Aswan, Egypt");
    insert_into_images("persia_greece/Tomb_of_Cyrus_the_Great_Darafsh_2_58.jpg", 
                            "wiki", 
                            "Tomb_of_Cyrus_the_Great_Darafsh_2_(58).JPG", 
                            "The Tomb of Cyrus the Great, 559 - 529 BC, <br/>Pasargadae, Persia, now Iran");
    insert_into_images("persia_greece/The_Achaemenid_Empire_at_its_Greatest_Extent.jpg", 
                            "wiki", 
                            "The_Achaemenid_Empire_at_its_Greatest_Extent.jpg", 
                            "A map of the Achaemenid Persian empire at its greatest extent, during the reign of Darius I around 500 BC");
    insert_into_images("AN1613004116_l.jpg", 
                            "BM", 
                            "277770", 
                            "Complaint about the delivery of the wrong grade of copper (Ea-nasir tablet), cr. 1750 BC, <br/>Ur, Sumerian city-state in ancient Mesopotamia (now Tell el-Muqayyar, Iraq)");
    insert_into_images("horsemen/cyrus_ansan_seal.gif", 
                            "wiki", 
                            "Cyrus_I_seal.png", 
                            "Seal of Cyrus I, 600 - 580 BC, <br/>Persia, now Iran");
    insert_into_images("horsemen/liberty_clock.jpg", 
                            "Garry Knight @ flickr.com", 
                            "https://www.flickr.com/photos/garryknight/11091029893", 
                            "Clock with a figurine of Saint George (detail), 1925, <br/>Liberty Department Store, London, United Kingdom");
    insert_into_images("cyrus_conference.png", 
                            "cyruscylinder2013.com", 
                            "http://cyruscylinder2013.com/wp-content/uploads/2013/10/Cyrus-the-Great-Life-and-Lore-UCLA-10.28-29.2013.pdf", 
                            "'Cyrus the Great: Life and Lore' conference prospectus (detail), 2013, <br/>UCLA, Los Angeles, U.S.A.");
    insert_into_images("persia_greece/ancient-greek-map-great-ancient-greece-map-in-the-aegean-area-a-map-of-influence-of-doric-of-ancient-greek-map.jpg", 
                            "Pinterest", 
                            "https://i.pinimg.com/originals/39/02/9b/39029b1db908d2554128a272865a0e1c.jpg", 
                            "Map of Archaic Greece (750 -500 BC) showing Ionia and Caria");
    insert_into_images("persia_greece/Ischtar_Tor_Babylonien_Pergamonmuseum_Berlin_Germany_-_panoramio_2.jpg", 
                            "wiki", 
                            "Ischtar_Tor_Babylonien_Pergamonmuseum_Berlin_Germany_-_panoramio_(2).jpg", 
                            "Reconstructed Ishtar Gate, originally built in Babylon, <br/>cr. 575 BC by order of King Nebuchadnezzar II");
    insert_into_images("SocialScience/Simple-indifference-curves.png", 
                            "wiki", 
                            "Simple-indifference-curves.svg", 
                            "An example of an indifference map with three indifference curves represented. 'Good X' here represents patterns vocabulary volume and 'Good Y' represents the intelligence depth");
    insert_into_images("SocialScience/tribbles.jpg", 
                            "kisspng.com", 
                            "https://www.kisspng.com/png-forest-landscape-photography-illustration-vector-f-179050/", 
                            "Only valley tribbles will survive");
    insert_into_images("SocialScience/tribbles_rain.jpg", 
                            "freepik.com", 
                            "https://www.freepik.com/free-vector/nature-raining-scene_3849170.htm", 
                            "Only mountain tribbles will survive");
    insert_into_images("SocialScience/SelenaTwitter.png", 
                            "freepik.com", 
                            "https://zoomph.com/twitter-followers-profile/selenagomez/", 
                            " ");
    insert_into_images("SocialScience/selena4.jpg", 
                            "celebmafia.com", 
                            "https://celebmafia.com/wp-content/uploads/2019/05/selena-gomez-at-disneyland-in-anaheim-05-05-2019-3.jpg", 
                            " ");
    insert_into_images("SocialScience/Selena3.png", 
                            "instagram.com", 
                            "https://www.instagram.com/p/BlIp0SUgkpQ/", 
                            " ");
    insert_into_images("SocialScience/Selena2.jpg", 
                            "dailymail.co.uk", 
                            "https://www.dailymail.co.uk/tvshowbiz/article-5954679/Selena-Gomez-keeps-cozy-robe-fuzzy-blanket-girls-night-Vanessa-Hudgens.html", 
                            " ");
    insert_into_images("SocialScience/Selena1.png", 
                            "instagram.com", 
                            "https://www.instagram.com/p/Bv4q6GPAeML/", 
                            " ");
    insert_into_images("SocialScience/Selena0.jpg", 
                            "celebritieswithoutmakeupz.wordpress.com", 
                            "https://celebritieswithoutmakeupz.wordpress.com/2014/11/11/15-pictures-of-selena-gomez-without-makeup/", 
                            " ");
    insert_into_images("SocialScience/Selfies.jpg", 
                            "arabianbusiness.com", 
                            "https://www.arabianbusiness.com/media/393219-opinion-from-selfie-to-self-employed-the-uae-influencers", 
                            " ");
    insert_into_images("SocialScience/celebs-madoff.jpg", 
                            "brstatic.com", 
                            "https://media.brstatic.com/2017/05/16150724/celebs-scammed-by-madoff-1024x576.jpg", 
                            " ");    
    insert_into_images("SocialScience/Gorillas2.jpg", 
                            "andbluesky.com", 
                            "http://www.andbluesky.com/skeletons-museum-orlando/", 
                            " ");
    insert_into_images("SocialScience/Chimps2.jpg", 
                            "andbluesky.com", 
                            "http://www.andbluesky.com/skeletons-museum-orlando/", 
                            " ");
    insert_into_images("SocialScience/Gorillas_fight_over_a_tomato.jpg", 
                            "Daily Mail", 
                            "https://www.dailymail.co.uk/news/article-2779196/Gorillas-midst-Schoolboy-captures-shocking-moment-males-fight-UK-zoo-battle-tomato.html", 
                            " ");
    insert_into_images("SocialScience/Tamarin_GoldenLion.jpg", 
                            "Holge Zoo", 
                            "https://www.hoglezoo.org/meet_our_animals/animal_finder/ssp-data-for-golden-lion-tamarin/", 
                            " ");
    insert_into_images("SocialScience/Kate_marriage.jpg", 
                            "Daily Mail", 
                            "https://www.dailymail.co.uk/femail/article-2568763/Kate-Rothschild-heiress-rap-star-lover-photo-thats-alarmed-friends.html", 
                            "Kate Rothschild and Ben Goldsmith, 2003-2013");
    insert_into_images("SocialScience/2B5A7A2B00000578-0-image-a-4_1439594974634.jpg", 
                            "traffic-club.info", 
                            "https://traffic-club.info/2018jimage-jay-electronica-kate-rothschild.awp", 
                            "Kate Rothschild and Jay Electronica, 2012-2014");
    insert_into_images("SocialScience/kate_naughtyboy.jpg", 
                            "gettyimages.co.uk", 
                            "https://www.gettyimages.co.uk/detail/news-photo/kate-rothschild-and-naughty-boy-arrive-at-a-vip-performance-news-photo/505700916", 
                            "Kate Rothschild and Naughty Boy, 2014-2017");
    insert_into_images("SocialScience/GrandBudapestHote.jpg", 
                            "variety.com", 
                            "https://variety.com/2014/film/box-office/box-office-grand-budapest-hotel-builds-steam-with-6-7-mil-in-limited-release-1201143980/", 
                            "A scene from 'The Grand Budapest Hotel'");
    insert_into_images("SocialScience/JB.jpeg", 
                            "aftenposten.no", 
                            "https://www.aftenposten.no/verden/i/MLpQB/Lommerusk-avslorer-deg#&gid=1&pid=2", 
                            "Promotional poster for 'Live and Let Die', the 8th Bond movie");
    insert_into_images("horsemen/7818_Kelly-Tan-iPhone-Photos-9_w1120.jpg", 
                            "lovepaperplane @ instagram.com", 
                            "https://www.instagram.com/p/432xJUyrkD/", 
                            "I Have A Dream, <br/>2014 or earlier, Kelly Tan, Malaysia");
     insert_into_images("horsemen/Naprous_GoT.png", 
                            "@anastasiatl", 
                            "https://www.instagram.com/p/Bxc_bpinB0b/", 
                            "The Game of Thrones Horsemaster, Camilla Naprous, exercises Moses, <br/>2019, photo by Anastasia Taylor-Lind");
    insert_into_images("SocialScience/lizards.jpg", 
                            "Barry Sinervo/UCSanta Cruz via forbes.com",
                            "https://www.forbes.com/sites/grrlscientist/2016/06/15/rock-paper-lizard/", 
                            "Three varieties of male side-blotched lizards");
    insert_into_images("SocialScience/Utastansburiana.jpg", 
                            "wiki", 
                            "Utastansburiana.jpg", 
                            "A female and an orange-throated male side-blotched lizards");
    insert_into_images("SocialScience/09042439PD_side-blotched.jpg", 
                            "Wild Herps", 
                            "http://www.wildherps.com/species/U.stansburiana.html", 
                            "A female and a blue-throated male side-blotched lizards");
      insert_into_images("horsemen/thoedore_roosevelt.jpg", 
                            "The White House Historical Association", 
                            "https://library.whitehousehistory.org/fotoweb/archives/5017-Digital-Library/Main%20Index/Portraits/1033.tif.info", 
                            "Theodore Roosevelt as a Rough Rider,<br/>cr. 1909, Tadé Styka");
     insert_into_images("horsemen/roosevelt-room-bush2-meeting.jpg", 
                            "The White House Museum", 
                            "http://www.whitehousemuseum.org/west-wing/roosevelt-room.htm", 
                            "George W Bush meeting in the Roosevelt Room,<br/>2006");
     insert_into_images("horsemen/Statue_questre_dArtagnan_Lupiac.jpg", 
                            "wiki", 
                            "https://en.wikipedia.org/wiki/File:Statue_équestre_d%27Artagnan_Lupiac.jpg", 
                            "Equestrian statue of d'Artagnan, <br/>2015, Daphné Du Barry, Lupiac, France");
     insert_into_images("horsemen/AN01386149_001_l.jpg", 
                            "BM", 
                            "3523768", 
                            "Louis XVI Roi de France et de Navarre, <br/>cr. 1815-1820, Paris, France");
     insert_into_images("horsemen/4854070eca8160d7e33228385e4bd1d6.jpg", 
                            "rekishi-miryoku.com", 
                            "https://rekishi-miryoku.com/article/shimazu_yoshihiro/", 
                            "Shimazu Yoshihiro Oyake-zo, <br/>?, Kagoshima, Japan");
     insert_into_images("horsemen/Japan-Odawara-Hojo-Soun.jpg", 
                            "Equestrian Statue", 
                            "http://equestrianstatue.org/hoj-soun/", 
                            "Equestrian Statue of Hojó Soun,<br/>?, Odawara, Japan");
    insert_into_images("SocialScience/4D48AD4E00000578-5849987-image-a-8_1529098376598.jpg", 
                            "Daily Mail", 
                            "https://i.dailymail.co.uk/i/newpix/2018/06/15/22/4D48AD4E00000578-5849987-image-a-8_1529098376598.jpg", 
                            "Kate Rothschild and Paul Forkan, 2018-?");
    insert_into_images("SocialScience/article-2153789-136B10D5000005DC-180_634x607.jpg", 
                            "Daily Mail", 
                            "https://www.dailymail.co.uk/femail/article-2153789/Rothschild-heiresss-marriage-Goldsmith-scion--falls-rapper-called-Jay-Electronica.html", 
                            "Kate Rothschild and Ben Goldsmith, December 2010");
    insert_into_images("SocialScience/c4debate.jpg", 
                            "The Sun", 
                            "https://www.thesun.co.uk/wp-content/uploads/2019/06/AD-COMPOSITE-C4-Debate-Bias.jpg", 
                            "Rory Stewart (right): 'Fundamental issue here is that there's a competition of machismo'. <br>British Conservative party leadership debate, June 2019");
    insert_into_images("SocialScience/S7JAWE5QEEFLYT37OIZGWUGY3A.jpg", 
                            "Popular Science", 
                            "https://www.popsci.com/empathy-observed-in-rodents-too/", 
                            "Highly social and monogamous prairie voles (consolation display)");
    insert_into_images("SocialScience/little-vole-dude.jpg", 
                            "animalia.bio", 
                            "http://animalia.bio/meadow-vole", 
                            "Notoriously promiscuous male meadow vole");
    insert_into_images("SocialScience/alphas_preferences.jpg", 
                            "The BBC", 
                            "https://www.bbc.co.uk/news/stories-42460315", 
                            "Successful women's perception of what they thought a 'successful' relationship should look like, 2018");
    insert_into_images("SocialScience/08-james-bond-best-interiors-vogue.jpeg", 
                            "The Vogue", 
                            "https://www.vogue.com/article/homes-james-bond-movie-interiors-spectre-daniel-craig", 
                            "George Lazenby as James Bond in 'On Her Majesty's Secret Service', 1969");
    insert_into_images("horsemen/horse_sculpture-e1449637072440.png", 
                            "Arthur Murch's website", 
                            "http://arthurmurch.com/portfolio/govetts-leap/", 
                            "Govett’s Leap,<br/>1976, Arthur Murch, Australia");
    insert_into_images("horsemen/Onur_Aniti.JPG", 
                            "wiki", 
                            "Onur_Anıtı.JPG", 
                            "Statue of Honor (Atatürk Monument),<br/>1932, Samsun, Turkey");
    insert_into_images("blog_art.png", 
                            "", 
                            "", 
                            "");
    insert_into_images("blog_food.png", 
                            "", 
                            "", 
                            "");
    insert_into_images("blog_social.png", 
                            "", 
                            "", 
                            "");
    insert_into_images("blog_thebard.png", 
                            "", 
                            "", 
                            "");
    insert_into_images("horsemen/davos_rider.jpeg", 
                            "The Financial Times", 
                            "https://www.ft.com/content/7b5d6d18-20af-11e9-b2f7-97e4dbd3580d", 
                            "Davos 2019: No more heroes for the global elite,<br/>January 2019, James Ferguson for the Financial Times");
    insert_into_images("horsemen/Bond007_WilliamIII.png", 
                            "The Moonraker", 
                            "https://www.imdb.com/title/tt0079574", 
                            "Portrait of King William III at the Battle of the Boyne in 1690, <br/>1690-1700, (circle of) Jan Wyck");
    insert_into_images("horsemen/george_msk-02.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/49092.html", 
                            "Monument to Saint George, Polkonnaja Gora, <br/>1995, Zurab Tsereteli, Moscow, Russia");
    insert_into_images("horsemen/george_msk-04.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/49092.html", 
                            "Monument to Saint George, Studio of Military Artists, <br/>1990-2012, Alexander Taratynov, Moscow, Russia");
    insert_into_images("horsemen/george_msk-03.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/49092.html", 
                            "Monument to Saint George, Komsomol'skaja Square, <br/>2012, Sergej Scherbakov, Moscow, Russia");
    insert_into_images("horsemen/Monument__Railway_Stations_of_Moscow_.jpg", 
                            "wiki", 
                            'Monument_QuoteRailway_Stations_of_MoscowQuote.jpg', 
                            "Monument to Saint George, Rijskij railway station, <br/>2014, Moscow, Russia");
    insert_into_images("horsemen/skob-1912.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/48734.html", 
                            "Monument to Saint George, <br/>1912, Petr Samonov, Moscow, Russia");
    insert_into_images("horsemen/skobelev-2014.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/86859.html", 
                            "Monument to General Skobelev, <br/>2014, Aleksandr Rukavishnikov, Moscow, Russia");
    insert_into_images("horsemen/UN_GoodDefeats-Evil_StGeorge.jpg", 
                            "The United Nations", 
                            "https://www.un.org/ungifts/content/good-defeats-evil", 
                            "Monument to Saint George, <br/>1990, Zurab Tsereteli, New York, the U.S.A.");
    insert_into_images("horsemen/Shimazu_Yoshihiro.jpeg", 
                            "excite.co.jp", 
                            "https://www.excite.co.jp/news/article/BestTimes_8636/", 
                            "Shimazu Yoshihiro, <br/>?, Hioki city, Kagoshima prefecture, Japan");
    insert_into_images("20190629_101345.jpg", 
                            "", 
                            "", 
                            "");
    insert_into_images("20190627_152744-01.jpeg", 
                            "", 
                            "", 
                            "");
    insert_into_images("whitworths.jpg", 
                            "", 
                            "", 
                            "The original recipe");
    insert_into_images("horsemen/Insta_Lannister.jpg", 
                            "Olga Bazhutova @ Instagram", 
                            "https://www.instagram.com/p/Br1xTWpAcV7", 
                            "Instagram art, the Game of Thrones theme, <br/>2019, Olga Bazhutova, Moscow, Russia");
    insert_into_images("horsemen/Minamoto_no_Yoshitsune.jpg", 
                            "Komatsushima Navi", 
                            "https://www.city.komatsushima.tokushima.jp/komatsushima-navi/english/", 
                            "Monument to Minamoto no Yoshitsune, <br/>1991 (?), Komatsushima city, Tokushima prefecture, Japan");
    insert_into_images("horsemen/Tbilisi_StGeorge.jpg", 
                            "wiki", 
                            "2014_Tbilisi,_Pomnik_Wolności_z_konnym_posągiem_świętego_Jerzego_(06).jpg", 
                            "The Freedom Monument (the St. George Statue), <br/>2006, Zurab Tsereteli, Tbilisi, Georgia");
    insert_into_images("horsemen/Kajo-Central-Monument.png", 
                            "The Hidden Japan", 
                            "https://www.thehiddenjapan.com/yamagatacity", 
                            "Mogami Yoshiaki statue, Yamagata Castle, <br/>?, Yamagata city, Yamagata prefecture, Japan");
    insert_into_images("horsemen/Takemitsu.jpg", 
                            "Kikuchi Story", 
                            "https://www.city.kikuchi.lg.jp/kankou/en/aview/190/2038.html", 
                            "Kikuchi Takemitsu statue, <br/>1992, Kikuchi city, Kumamoto prefecture, Japan");
    insert_into_images("horsemen/kremlin_senate.jpg", 
                            "wiki", 
                            "Russia-2007-Moscow-Kremlin Senate at night.jpg", 
                            "Kremlin Senate, with the Kremlin's Senatskaya Tower and Lenin's Mausoleum in the foreground, <br/>Red Square, Moscow, Russia");
    insert_into_images("horsemen/george_msk-05.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/49092.html", 
                            "Monument to Saint George on a Kremlin Senate dome, <br/>1995, V.Tsigal' and A.Tsigal' (В.Е. и А.В. Цыгаль), Moscow, Russia");
    insert_into_images("horsemen/StGeorge_Kremlin.jpg", 
                            "Российские Вести", 
                            "http://www.rosvesty.ru/2128/kremli-9/9242-pod-kupolom-ekaterininskogo-zala/", 
                            "Monument to Saint George, Kremlin Senate domes with Spasskaya Tower in the background, <br/>1995, V.Tsigal' and A.Tsigal' (В.Е. и А.В. Цыгаль), Moscow, Russia");
    insert_into_images("horsemen/george_msk-01.jpg", 
                            "Dimon_porter's Livejournal", 
                            "https://dimon-porter.livejournal.com/49092.html", 
                            "Monument to Saint George on Manege Square (Манежная площадь), <br/>1997, Zurab Tsereteli, Moscow, Russia");
    insert_into_images("horsemen/Moskwa_2.jpg", 
                            "polityka.pl", 
                            "https://portretymiast.blog.polityka.pl/2013/12/02/kijow-moskwa-geografia-miejskich-protestow/", 
                            "Manege Square (Манежная площадь), <br/>Moscow, Russia");
    insert_into_images("horsemen/NavarreGeorge.jpg", 
                            "The Guardian", 
                            "https://www.theguardian.com/world/2019/jun/21/botched-spanish-statue-st-george-lovingly-unrestored", 
                            "Statue of Saint George at the church of Estella, <br/>16th-century, before 2018 restoration, after 2018 restoration and after 2019 restoration, Spain");
    insert_into_images("horsemen/Seal_of_Alexander_Nevsky_1236.png", 
                            "wiki", 
                            "Seal_of_Alexander_Nevsky_1236.svg", 
                            "Seal of Alexander Nevsky, <br/>after 1236");
    insert_into_images("horsemen/Seal_of_Ivan_3_–_Eagle_1472.png", 
                            "wiki", 
                            "Seal_of_Ivan_3_–_Eagle_1472.png", 
                            "Seal of Ivan III, <br/>1472");
    insert_into_images("horsemen/Coat_of_Arms_of_Moscow.png", 
                            "wiki", 
                            "Coat_of_Arms_of_Moscow.svg", 
                            "Coat of Arms of Moscow, <br/>1993");
    insert_into_images("horsemen/Coat_of_arms_of_Moscow_Oblast.png", 
                            "wiki", 
                            "Coat_of_arms_of_Moscow_Oblast_(large).svg", 
                            "Coat of arms of Moscow Oblast, <br/>2005");
    insert_into_images("horsemen/Moscow_COA_1781.png", 
                            "wiki", 
                            "Moscow_COA_1781.png", 
                            "Coat of Arms of Moscow, <br/>1781");
    insert_into_images("horsemen/Coat_of_Arms_of_Moscow_gubernia_Russian_empire.png", 
                            "wiki", 
                            "Coat_of_Arms_of_Moscow_gubernia_(Russian_empire).png", 
                            "Coat of Arms of Moscow gubernia, <br/>mid 19th century");
    insert_into_images("horsemen/Coat_of_Arms_of_the_Russian_Federation.svg_.png", 
                            "wiki", 
                            "Coat_of_Arms_of_the_Russian_Federation.svg", 
                            "Coat of Arms of the Russian Federation, <br/>1993");
    insert_into_images("horsemen/Lesser_Coat_of_Arms_of_Russian_Empire.svg_.png", 
                            "wiki", 
                            "Lesser_Coat_of_Arms_of_Russian_Empire.svg", 
                            "Lesser Coat of Arms of the Russian Empire, <br/>1883");
    insert_into_images("horsemen/2-kopeyki-1795.jpg", 
                            "moneta", 
                            "imperiya/ekaterina-2/mednye-monety-ekateriny-2.php", 
                            "Russian kopek, Catherine II, <br/>1795");
    insert_into_images("horsemen/petr-2-kopeyka.jpg", 
                            "moneta", 
                            "imperiya/petr-2/mednye-monety-petra-2.php", 
                            "Russian kopek, Peter II, <br/>1728-9");
    insert_into_images("horsemen/83353451.jpg", 
                            "rarcoin.ru", 
                            "http://rarcoin.ru/publ/petr_i_1700_1725/cena_monet_petra_i_1704_goda/1_kopejka_1704_goda/18-1-0-46", 
                            "Russian kopek, Peter I, <br/>1704");
    insert_into_images("horsemen/84267309.jpg", 
                            "rarcoin.ru", 
                            "http://rarcoin.ru/publ/petr_i_1700_1725/cena_monet_petra_i_1704_goda/1_kopejka_1704_goda/18-1-0-46", 
                            "Russian kopek, Peter I, <br/>1704");
    insert_into_images("horsemen/1997-01m-kr.jpg", 
                            "moneta", 
                            "sovremen/rossiya-1997/1-kopeyka-1997-goda-tsena.php", 
                            "Russian kopek, Boris Yeltsin, <br/>1997");
    insert_into_images("horsemen/1997-01m-ka.jpg", 
                            "moneta", 
                            "sovremen/rossiya-1997/1-kopeyka-1997-goda-tsena.php", 
                            "Russian kopek, Boris Yeltsin, <br/>1997");
    insert_into_images("horsemen/kopeks.jpg", 
                            "learn-your-history.in.ua", 
                            "http://www.learn-your-history.in.ua/index.php?route=information/information&information_id=18", 
                            "Russian kopeks, Tzar Michael Romanov, <br/>1613-1645");
    insert_into_images("horsemen/AN00134115_001_l.jpg", 
                            "BM", 
                            "1503745", 
                            "Marcus Curtius, The Roman Heroes series, <br/>1586, Hendrik Goltzius");
    insert_into_images("horsemen/AN00134115_001_l.jpg", 
                            "BM", 
                            "1503745", 
                            "Marcus Curtius, The Roman Heroes series, <br/>1586, Hendrik Goltzius");
    insert_into_images("horsemen/Goltzius_MarcusCurtius_Christies.png", 
                            "Christies", 
                            "circle-of-hendrick-goltzius-marcus-curtius-6009811", 
                            "Marcus Curtius, The Roman Heroes series, <br/>1586-1617, circle of Hendrick Goltzius");
    insert_into_images("horsemen/Goltzius_MarcusCurtius_Christies.png", 
                            "Christies", 
                            "circle-of-hendrick-goltzius-marcus-curtius-6009811", 
                            "Marcus Curtius, The Roman Heroes series, <br/>1586-1617, circle of Hendrick Goltzius");
    insert_into_images("horsemen/MORION_Christies.png", 
                            "Christies", 
                            "a-fine-etched-and-gilt-morion-of-4711671", 
                            "A morion of a guard of the Prince Electors of Saxony showing Marcus Curtius sacrifice, <br/>cr. 1580-91, Dresden");
    insert_into_images("horsemen/CASKET_Christies.png", 
                            "Christies", 
                            "a-parcel-gilt-rectangular-carved-wood-and-ivory-4300767", 
                            "Wood and ivory casket carved with scenes including Marcus Curtius sacrifice, <br/>cr. 1500, Italy");
    insert_into_images("horsemen/COUPE_Christies.png", 
                            "Christies", 
                            "coupe-et-son-couvercle-en-vermeil-peut-5157494", 
                            "A lidded cup with scenes including Marcus Curtius sacrifice, <br/>cr. 1580, Joerg (Georg) Plainchhiern (?), Landshut (?), Germany");
    insert_into_images("horsemen/EWER_BY_ADAM_VAN_VIANEN_UTRECHT_1619_Christies.png", 
                            "Christies", 
                            "an-exceptional-dutch-silver-ewer-by-adam-6137935", 
                            "A Dutch silver ewer with scenes including Marcus Curtius sacrifice, <br/>1619,  Adam van Vianen,  Utrecht, Netherlands");
    insert_into_images("horsemen/EWER_BY_ADAM_VAN_VIANEN_UTRECHT_1619_Christies_2.png", 
                            "Christies", 
                            "an-exceptional-dutch-silver-ewer-by-adam-6137935", 
                            "A Dutch silver ewer with scenes including Marcus Curtius sacrifice, <br/>1619, Adam van Vianen, Utrecht, Netherlands");
    insert_into_images("horsemen/pontormo_carucci.png", 
                            "Sothebys", 
                            "2015/master-paintings-part-i-n09302/lot.75.html", 
                            "Marcus Curtius leaping into the abyss, <br/>1513,  Jacopo Carucci, called Pontormo, Florence");
    insert_into_images("horsemen/Maiolica_di_urbino_sforza_di_marcantonio_marco_curzio_si_getta_nella_voragine_1544.jpeg", 
                            "wiki", 
                            "Maiolica_di_urbino,_sforza_di_marcantonio,_marco_curzio_si_getta_nella_voragine,_1544.JPG", 
                            "Maiolica plate showing Marcus Curtius leaping into the abyss, <br/>1544, Urbino");
    insert_into_images("horsemen/18-515962.jpg", 
                            "RMN", 
                            "18-515962-2C6NU0A07FTI1", 
                            "Maiolica plate showing Marcus Curtius leaping into the abyss, <br/>1538, Urbino");
    insert_into_images("horsemen/86-005464.jpg", 
                            "RMN", 
                            "86-005464-2C6NU0HLFA0F", 
                            "Maiolica plate showing Marcus Curtius leaping into the abyss, <br/>cr. 1550, Urbino");
    insert_into_images("horsemen/07-531221.jpg", 
                            "RMN", 
                            "07-531221-2C6NU0J36ZVS", 
                            "Maiolica plate showing Marcus Curtius leaping into the abyss, <br/>1545, Urbino");
    insert_into_images("horsemen/11-540119.jpg", 
                            "RMN", 
                            "11-540119-2C6NU0OZGJH6", 
                            "Earthenware tiles showing Marcus Curtius leaping into the abyss, <br/>1542, Abaquesne Masséot, France");
    insert_into_images("horsemen/09-523421.jpg", 
                            "RMN", 
                            "09-523421-2C6NU09C9X3S", 
                            "Marcus Curtius' sacrifice (detail), <br/>cr. 1540, Refinger Ludwig, Germany");
    insert_into_images("horsemen/09-524700.jpg", 
                            "RMN", 
                            "09-524700-2C6NU09M7SOG", 
                            "Marcus Curtius' sacrifice, <br/>cr. 1540, Refinger Ludwig, Germany");
    insert_into_images("horsemen/Ngv_maiolica_di_faenza_piatto_con_il_salto_di_marco_curzio_1525-30JPG.jpg", 
                            "wiki", 
                            "Ngv_maiolica_di_faenza_piatto_con_il_salto_di_marco_curzio_1525-30.jpeg", 
                            "Maiolica plate showing Marcus Curtius leaping into the abyss, <br/>cr. 1525, Faenza");
    insert_into_images("horsemen/2008BV3859_jpg_l.jpg", 
                            "VA", 
                            "O129518", 
                            "Casket showing Marcus Curtius leaping into the abyss, <br/>cr. 1500, Northern Italy");
    insert_into_images("horsemen/2015HP6167_jpg_l.jpg", 
                            "VA", 
                            "O369129", 
                            "Casket showing Marcus Curtius leaping into the abyss, <br/>1500-50, Italy");
    insert_into_images("horsemen/093406d1-6349-4d2c-979d-72991f3c3c82.jpg", 
                            "SKD", 
                            "119026", 
                            "The Roman Marcus Curtius over the fiery abyss, <br/>1591-5 (?), Egidius Lobenigk, Dresden (?)");
    insert_into_images("horsemen/ANSA_XII_113_43777.jpg", 
                            "KHM", 
                            "73844", 
                            "Victim's death of Marcus Curtius, <br/>cr. 1560, Francesco Tortorino, Milan");
    insert_into_images("horsemen/f5376b07-a756-490f-b8b3-8f56be73c688.jpg", 
                            "SKD", 
                            "119026", 
                            "Marcus Curtius rides into the abyss, <br/>cr. 1535, Georg Pencz, Germany");
    insert_into_images("horsemen/N-1304-00-000017-wpu-1.jpg", 
                            "The National Gallery", 
                            "https://www.nationalgallery.org.uk/paintings/possibly-by-bacchiacca-marcus-curtius", 
                            "Marcus Curtius, <br/>cr. 1520-30, possibly by Bacchiacca, Florence");
    insert_into_images("horsemen/morion_windsor.jpg", 
                            "RC", 
                            "67340-a", 
                            "'Spanish' morion with cartouches depicting Marcus Curtius and Mucius Scaevola, <br/>cr. 1570-80, Northern Italy, probably Milan");
    insert_into_images("horsemen/Deruta_turk.png", 
                            "vogue.com", 
                            "https://www.vogue.com/article/hamish-bowles-deruta-ceramics-italy", 
                            "Plate depicting a cavalryman, <br/>cr. 1550, Deruta");
    insert_into_images("horsemen/AN1613279555_l.jpg", 
                            "BM", 
                            "32355", 
                            "Cameo depicting the devotion of Marcus Curtius, <br/>16th century, Italy");
    insert_into_images("horsemen/Cameo_MC.jpg", 
                            "HM", 
                            "18.%20carved%20stones/129952/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8zi_R0dzQyNnQ28_J1NXQwc_YMCTIOc_dwNDE30w8EKDHAARwP9KGL041EQhd94L0IWAH1gVOTr7JuuH1WQWJKhm5mXlq8fYWihp5CcWFSWmqJQXJKfl1oMFDKytDQ1AjooCs1IT29zoJEhph7-_mHORs4mUAV4HFWQGxpR5eNhkOmoqAgAFsV4zg!!/dz/d5/L2dBISEvZ0FBIS9nQSEh", 
                            "Cameo depicting the feat of Marcus Curtius, <br/>third quarter of the 16th century, probably Francesco Tortorino, Italy");
    insert_into_images("horsemen/2006BE8104_jpg_ds.jpg", 
                            "VA", 
                            "O159665", 
                            "Plate depicting the good Roman Curtius in his grim act devotion, <br/>cr. 1550, Italy");
    insert_into_images("horsemen/HJRK_A_936_17551.jpg", 
                            "KHM", 
                            "373382", 
                            "Balaclava with the depictions of Marcus Curtius and Horatius Cocles, <br/>1560, Milan");
    insert_into_images("horsemen/gonzaga_curtius.jpg", 
                            "ikmk", 
                            "18200293", 
                            "Medallion of Francisco II Gonzaga with the depiction of Marcus Curtius, <br/>1530, Bartulus Talpa, Mantua");
    insert_into_images("horsemen/1483r.jpg", 
                            "Met", 
                            "461283", 
                            "Self-sacrifice of Marcus Curtius, <br/>1596-1600, Paulus Willemsz van Vianen, Netherlands");
    insert_into_images("horsemen/AN00606110_001_l.jpg", 
                            "BM", 
                            "1424395", 
                            "Design for a pendant with the depiction of Marcus Curtius, <br/>1555-1562, Pierre Woeiriot, France");
    insert_into_images("horsemen/AN00610899_001_l.jpg", 
                            "BM", 
                            "1512344", 
                            "Roundel with Marcus Curtius, <br/>1540, Hans Brosamer, Germany");
    insert_into_images("horsemen/AN00610940_001_l.jpg", 
                            "BM", 
                            "1512485", 
                            "Roundel with naked Marcus Curtius, <br/>1529, Germany");
    insert_into_images("horsemen/AN01188413_001_l.jpg", 
                            "BM", 
                            "43149", 
                            "Panel of embossed iron showing Marcus Curtius leaping into the chasm, <br/>cr. 1570, Antwerp, Belgium");
    insert_into_images("horsemen/AN01500283_001_l.jpg", 
                            "BM", 
                            "31701", 
                            "The Griffin's claw cup showing Marcus Curtius leaping into the chasm and Lot and his daughters, <br/>1541-1583, Hans and Lorenz Faust, Mainz, Germany");
    insert_into_images("horsemen/AN01500305_001_l.jpg", 
                            "BM", 
                            "31701", 
                            "Detail of the Griffin's claw cup showing Marcus Curtius leaping into the chasm, <br/>1541-1583, Hans and Lorenz Faust, Mainz, Germany");
    insert_into_images("horsemen/AN00083513_001_l.jpg", 
                            "BM", 
                            "1443797", 
                            "Two large and four small pendants; St George on the large pendant on l, Marcus Curtius on r, <br/>1562, Erasmus Hornick, Nuremberg, Germany");
    insert_into_images("horsemen/AN1613324649_l.jpg", 
                            "BM", 
                            "76662", 
                            "A hat badge with the figure of Marcus Curtius leaping into the chasm, <br/>16th century, Italy");
    insert_into_images("horsemen/TroyPlate_Christies.png", 
                            "Christies", 
                            "an-italian-maiolica-istoriato-charger-circa-1550-60-5436804", 
                            "A maiolica plate showing ablazed Troy, <br/>cr. 1550-60, workshop of Virgiliotto Calamelli, Urbino or Faenza");
    insert_into_images("horsemen/PlateBridge_Christies.png", 
                            "Christies", 
                            "an-urbino-istoriato-charger-piatto-di-pompa-4125688", 
                            "A maiolica plate showing a battle on a drawbridge, <br/>cr. 1540, the workshop of Guido da Merlingo, Urbino");
    insert_into_images("horsemen/Hunt_Urbino_Christies.png", 
                            "Christies", 
                            "an-urbino-istoriato-dish-late-16th-century-4125691", 
                            "A maiolica plate showing a hunting scene, <br/>late 16th century, Urbino");
    insert_into_images("horsemen/MC_SCHEUFFELIN-_Christies.png", 
                            "Christies", 
                            "an-urbino-maiolica-armorial-istoriato-dish-from-5680512", 
                            "A maiolica plate from the Scheuffelin service showing the sacrifice of Marcus Curtius, <br/>cr. 1560, Urbino");
    insert_into_images("horsemen/1951-107-3.jpg", 
                            "Philadelphia Museum of Art", 
                            "https://www.philamuseum.org/collections/permanent/52185.html", 
                            "A maiolica plate showing the sacrifice of Marcus Curtius, <br/>cr. 1560-1570, workshop of Guido Durantino or of Orazio Fontana, Urbino");
    insert_into_images("horsemen/mc_artic.jpg", 
                            "Art Institute of Chicago", 
                            "https://www.artic.edu/artworks/122101", 
                            "Marcus Curtius Leaping into the Abyss, <br/>cr. 1530, Pseudo-Pacchia, Siena");
    insert_into_images("horsemen/20493560.jpeg", 
                            "HAM", 
                            "244723", 
                            "Giovanni de Medici in a Duel, <br/>cr. 1578, Hendrick Goltzius, Netherlands");
    insert_into_images("horsemen/AN01206591_001_l.jpg", 
                            "BM", 
                            "3473809", 
                            "Portrait of Maurice of Nassau, Prince of Orange, <br/>cr. 1596-1637, Antonio Tempesta, Italy and Netherlands");
    insert_into_images("horsemen/AN01135927_001_l.jpg", 
                            "BM", 
                            "3437711", 
                            "Portrait of Henri IV, King of France, <br/>1589-1610, ?, after Hendrick Goltzius");
    insert_into_images("horsemen/DP-13163-002.jpg", 
                            "Met", 
                            "24687", 
                            "Cabasset with Marcus Curtius leaping into a fiery abyss, <br/>cr. 1575, Milan");
    insert_into_images("horsemen/DERUTA-DISH-WITH-PORTRAIT-OF-A-TURK-ON-HORSEBACK.png", 
                            "artvalue.fr", 
                            "http://www.artvalue.fr/auctionresult--deruta-dish-with-portrait-of-a-turk-o-2866410.htm", 
                            "Plate depicting a Turk on horseback, <br/>cr. 1520-50, Deruta");
    insert_into_images("horsemen/Teller_Opfertod_des_Marcus_Curtius_KGM_K1923.jpg", 
                            "wiki", 
                            "Teller_Opfertod_des_Marcus_Curtius_KGM_K1923.jpg", 
                            "Plate depicting Marcus Curtius, <br/>cr. 1550, Urbino");
    insert_into_images("horsemen/DP317308.jpg", 
                            "Met", 
                            "197214", 
                            "Plate with The Heroism of Marcus Curtius, <br/>1542, workshop of Guido de Merlino, Urbino");
    insert_into_images("horsemen/2006BC7748_2500.jpg", 
                            "VA", 
                            "O160308", 
                            "Plate depicting The Devotion of Marcus Curtius, <br/>cr. 1525, Faenza");
    insert_into_images("horsemen/Palazzo_Vecchio.jpg", 
                            "wiki", 
                            "Firenze_Palazzo_della_Signoria,_better_known_as_the_Palazzo_Vecchio.jpg", 
                            "Palazzo Vecchio (the town hall of Florence), <br/>Founded in 1314, Florence");
    insert_into_images("horsemen/Francesco_salviati_storie_di_furio_camillo_1543-45_assalto_ai_galli_che_hanno_saccheggiato_roma_16_cavalli.jpg", 
                            "wiki", 
                            "Francesco_salviati,_storie_di_furio_camillo,_1543-45,_assalto_ai_galli_che_hanno_saccheggiato_roma,_16_cavalli.JPG", 
                            "The stories of Furio Camillo (detail), <br/>1543-5, Francesco Salviati, Palazzo Vecchio, Florence");
    insert_into_images("horsemen/Jan_Van_der_Straet_known_as_Giovanni_Stradano_-_Horse_joust_in_Piazza_Santa_Croce_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Jan_Van_der_Straet_(known_as_Giovanni_Stradano)_-_Horse_joust_in_Piazza_Santa_Croce_-_Google_Art_Project.jpg", 
                            "Horse joust in Piazza Santa Croce, <br/>1561 - 1562, Jan Van der Straet, Palazzo Vecchio, Florence");
    insert_into_images("horsemen/AN01349906_001_l.jpg", 
                            "BM", 
                            "39568", 
                            "Ghisi Shield, <br/>1554, Giorgio Ghisi, Mantua (?), Italy");
    insert_into_images("horsemen/AN01349908_001_l.jpg", 
                            "BM", 
                            "39568", 
                            "Ghisi Shield (detail), <br/>1554, Giorgio Ghisi, Mantua (?), Italy");
    insert_into_images("horsemen/AN01466282_001_l.jpg", 
                            "BM", 
                            "39003", 
                            "Hat-ornament with Saint George and Dragon, <br/>1550-1575, Germany and France");
    insert_into_images("horsemen/AN00845863_001_l.jpg", 
                            "BM", 
                            "3292899", 
                            "Playing card, the queen of peacocks, <br/>cr. 1550, Virgil Solis, Nuremberg, Germany");
    insert_into_images("horsemen/AN00843020_001_l.jpg", 
                            "BM", 
                            "3479054", 
                            "Playing card, the king of lions, <br/>cr. 1550, Virgil Solis, Nuremberg, Germany");
    insert_into_images("horsemen/AN00088491_001_l.jpg", 
                            "BM", 
                            "1485834", 
                            "A mounted officer, <br/>1530-1555, Virgil Solis, Nuremberg, Germany");
    insert_into_images("horsemen/AN00491134_001_l.jpg", 
                            "BM", 
                            "1456360", 
                            "Portrait of Elector Frederick IV, <br/>1592-1622, Jacques Granthomme, France");
    insert_into_images("horsemen/AN00082408_001_l.jpg", 
                            "BM", 
                            "1435368", 
                            "A knight and a soldier on horseback, <br/>1559, Franz Isaac Brun, Germany");
    insert_into_images("horsemen/102628.jpg", 
                            "NC State University", 
                            "http://images.lib.ncsu.edu/luna/servlet/detail/NCSULIB~1~1~102628~190112", 
                            "Playing card, the horse of peacocks, <br/>cr. 1550, Virgil Solis, Nuremberg, Germany");
    insert_into_images("horsemen/2011FD4867_jpg_l.jpg", 
                            "VA", 
                            "O760343", 
                            "Hannibal mounted on a horse, <br/>1530-1562, Virgil Solis, Nuremberg, Germany");
    insert_into_images("horsemen/144138v_0001.jpg", 
                            "MLM", 
                            "144138", 
                            "Artybios on Horseback Attacking Onesilus, <br/>1510-1547, Jörg Breu the Younger, Augsburg, Germany");
    insert_into_images("horsemen/144810v_0001.jpg", 
                            "MLM", 
                            "144810", 
                            "Artybios on Horseback Attacking Onesilus, <br/>1510-1547, Jörg Breu the Younger, Augsburg, Germany");
    insert_into_images("horsemen/AN00088197_001_l.jpg", 
                            "BM", 
                            "1486174", 
                            "A captain on horseback, <br/>1530-1562, Virgil Solis, Nuremberg, Germany");
    insert_into_images("horsemen/AN00427680_001_l.jpg", 
                            "BM", 
                            "3023538", 
                            "A horsemen in antique dress holding a shield in his left hand, <br/>1567, Abraham de Bruyn, Flanders");
    insert_into_images("horsemen/AN00427683_001_l.jpg", 
                            "BM", 
                            "3023514", 
                            "A horsemen in antique dress holding a shield in his left hand, with a dog, <br/>1567, Abraham de Bruyn, Flanders");
    insert_into_images("horsemen/AN00427698_001_l.jpg", 
                            "BM", 
                            "3023528", 
                            "A horsemen in antique dress holding a shield in his left hand, with a club in his right hand, <br/>1568, Abraham de Bruyn, Flanders");
    insert_into_images("horsemen/AN00587174_001_l.jpg", 
                            "BM", 
                            "76663", 
                            "A hat badge depicting Marcus Curtius leaping into gulf, <br/>16th century, Italy");
    insert_into_images("horsemen/AN1613148492_l.jpg", 
                            "BM", 
                            "953531", 
                            "A medal with Maximilian I and a horseman trampling foot soldier and pursuing another, <br/>1516-9, Hungary or Austria");
    insert_into_images("horsemen/AN01052305_001_l.jpg", 
                            "BM", 
                            "3400067", 
                            "A medal with François I and a horseman trampling a naked woman and holding a club, <br/>1537, Italy");
    insert_into_images("horsemen/2009BX2963_jpg_l.jpg", 
                            "VA", 
                            "O125688", 
                            "Backgammon board decorated with ebony and carved bone, <br/>1581-1600, probably Augsburg, Germany");
    insert_into_images("horsemen/2015HJ8471_jpg_l.jpg", 
                            "VA", 
                            "O125688", 
                            "Backgammon board decorated with ebony and carved bone (detail), <br/>1581-1600, probably Augsburg, Germany");
    insert_into_images("horsemen/2010EG9183_jpg_l.jpg", 
                            "VA", 
                            "O377004", 
                            "Gorget (armoured collar), front plate shows an officer on a rearing horse with a baton addressing a troop of pikemen, <br/>1600-25, Paris, France");
    insert_into_images("horsemen/2010EG9184_jpg_l.jpg", 
                            "VA", 
                            "O377004", 
                            "Gorget (armoured collar), back plate shows an officer on a rearing horse killing an enemy, <br/>1600-25, Paris, France");
    insert_into_images("horsemen/AN00124011_001_l.jpg", 
                            "BM", 
                            "1538046", 
                            "Three cavalrymen in full armour with drawn swords, riding to the right, <br/>after 1599, Jacques de Gheyn II, Netherlands");
    insert_into_images("horsemen/AN00124012_001_l.jpg", 
                            "BM", 
                            "1538045", 
                            "Three cavalrymen in full armour with drawn swords, riding to the left, <br/>after 1599, Jacques de Gheyn II, Netherlands");
    insert_into_images("horsemen/AN00123993_001_l.jpg", 
                            "BM", 
                            "1537958", 
                            "A mounted trumpeter sounding his trumpet accompanied by a dog, <br/>after 1599, Jacques de Gheyn II, Netherlands");
    insert_into_images("horsemen/AN00124013_001_l.jpg", 
                            "BM", 
                            "1538042", 
                            "A cavalryman holding a pistol, on a rearing horse, to right, <br/>after 1599, Jacques de Gheyn II, Netherlands");
    insert_into_images("horsemen/AN00124009_001_l.jpg", 
                            "BM", 
                            "1537941", 
                            "A cavalryman raising his sword and charging to right, <br/>after 1599, Jacques de Gheyn II, Netherlands");
    insert_into_images("horsemen/AN00124010_001_l.jpg", 
                            "BM", 
                            "1537934", 
                            "A cavalryman holding a gun charging to left, <br/>after 1599, Jacques de Gheyn II, Netherlands");
    insert_into_images("horsemen/AN00123029_001_l.jpg", 
                            "BM", 
                            "720687", 
                            "Man on horseback holding a scroll or stick in his right hand, <br/>1490-4, Albrecht Dürer, Germany");
    insert_into_images("horsemen/AN00445479_001_l.jpg", 
                            "BM", 
                            "34867", 
                            "A pair of Limoges enamel candlesticks (detail), <br/>cr. 1560, Jean de Court, Limoges, France");
    insert_into_images("horsemen/AN00445491_001_l.jpg", 
                            "BM", 
                            "34867", 
                            "A pair of Limoges enamel candlesticks (detail), <br/>cr. 1560, Jean de Court, Limoges, France");
    insert_into_images("horsemen/AN1612945301_l.jpg", 
                            "BM", 
                            "34867", 
                            "A pair of Limoges enamel candlesticks, <br/>cr. 1560, Jean de Court, Limoges, France");
    insert_into_images("horsemen/AN00304369_001_l.jpg", 
                            "BM", 
                            "55547", 
                            "Sundial with Marcus Curtius on a prancing horse, <br/>1601, Andreas Pleninger, Regensburg, Germany");
    insert_into_images("horsemen/AN00504028_001_l.jpg", 
                            "BM", 
                            "55547", 
                            "Sundial with Marcus Curtius on a prancing horse (object reconstruction), <br/>1601, Andreas Pleninger, Regensburg, Germany");
    insert_into_images("horsemen/AN1613212773_l.jpg", 
                            "BM", 
                            "3751271", 
                            "Portrait of Roman emperor Domitian, <br/>1579-1637, Jan van der Straet, Italy and Frandres");
    insert_into_images("horsemen/AN1613204275_l.jpg", 
                            "BM", 
                            "3751636", 
                            "Portrait of Roman emperor Otho, <br/>1579-1637, Jan van der Straet, Italy and Frandres");
    insert_into_images("horsemen/AN1613204208_l.jpg", 
                            "BM", 
                            "3751473", 
                            "Portrait of Roman emperor Nero, <br/>1579-1637, Jan van der Straet, Italy and Frandres");
    insert_into_images("horsemen/Vasari_and_Stradano_-_St_George_and_the_dragon.jpg", 
                            "wiki", 
                            "Vasari_and_Stradano_-_St_George_and_the_dragon.jpg", 
                            "St. George and the Dragon, <br/>cr. 1560, Giorgio Vasari, Italy");
    insert_into_images("horsemen/StGeorgeandtheDragonLelioOrsi.png", 
                            "Google", 
                            "ZQH5VlbtTTRUxg", 
                            "St. George and the Dragon, <br/>1550, Lelio Orsi, Italy");
    insert_into_images("horsemen/96-004222.jpg", 
                            "RMN", 
                            "96-004222-2C6NU0NM01PE", 
                            "St. George fighting with the Dragon, <br/>cr. 1505, Raphael, Italy");
    insert_into_images("horsemen/N-2919-00-000022-wpu.jpg", 
                            "The National Gallery", 
                            "https://www.nationalgallery.org.uk/paintings/raphael-the-procession-to-calvary", 
                            "The Procession to Calvary, <br/>cr. 1504-5, Raphael, Italy");
    insert_into_images("horsemen/uccello_st_georges.jpg", 
                            "The Jacquemart-André Museum", 
                            "https://www.musee-jacquemart-andre.com/en/oeuvres/saint-georges-and-dragon", 
                            "St. George and the Dragon, <br/>cr. 1430-35, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/Pieter_Bruegel_the_Elder_-_Massacre_of_the_Innocents_-_Google_Art_Project.jpg", 
                            "wiki", 
                            "Pieter_Bruegel_the_Elder_-_Massacre_of_the_Innocents_-_Google_Art_Project.jpg", 
                            "Massacre of the Innocents, <br/>1565-7, Pieter Bruegel the Elder, Netherlands");
    insert_into_images("horsemen/Pieter_Bruegel_the_Elder_-_Massacre_of_the_Innocents_-_Google_Art_Project_detail.jpg", 
                            "wiki", 
                            "Pieter_Bruegel_the_Elder_-_Massacre_of_the_Innocents_-_Google_Art_Project.jpg", 
                            "Massacre of the Innocents (detail), <br/>1565-7, Pieter Bruegel the Elder, Netherlands");
    insert_into_images("horsemen/Paris_bordone_san_gkiorgio_uccide_il_drago_01.jpg", 
                            "wiki", 
                            "Paris_bordone,_san_gkiorgio_uccide_il_drago_01.JPG", 
                            "St. George Killing the Dragon, <br/>1525, Paris Bordone, Italy");
    insert_into_images("horsemen/Bernhard_Strigel_003b.jpg", 
                            "wiki", 
                            "Bernhard_Strigel_003b.jpg", 
                            "Emperor Maximilian I with Mary of Burgundy, their son and grandsons, <br/>after 1515, Bernhard Strigel, Austria");
    insert_into_images("horsemen/DP815369.jpg", 
                            "Met", 
                            "391049", 
                            "The Little Courier, <br/>cr. 1496, Albrecht Dürer, Germany");
    insert_into_images("horsemen/DP816478.jpg", 
                            "Met", 
                            "388160", 
                            "The Knight on the Horseback with Lansquenet, <br/>cr. 1496-7, Albrecht Dürer, Germany");
    insert_into_images("horsemen/DP816772.jpg", 
                            "Met", 
                            "397057", 
                            "Four Horsemen of the Apocalypse, <br/>cr. 1497-8, Albrecht Dürer, Germany");
    insert_into_images("horsemen/DP816411.jpg", 
                            "Met", 
                            "387574", 
                            "Saint George and the Dragon, <br/>cr. 1504, Albrecht Dürer, Germany");
    insert_into_images("horsemen/DP815783.jpg", 
                            "Met", 
                            "391238", 
                            "Abduction of Proserpine, <br/>1516, Albrecht Dürer, Germany");
    insert_into_images("horsemen/leads.jpg", 
                            "@insta_repeat, instagram.com", 
                            "https://www.instagram.com/insta_repeat/", 
                            "Ladies leading by the hand into the wild by various Instagram users");
    insert_into_images("SocialScience/Mae-West.jpeg", 
                            "Old Time Radio Downloads", 
                            "https://www.oldtimeradiodownloads.com/actors/mae-west", 
                            "Mae West (1892-1980), promotional photo for 'She Done Him Wrong', 1933");
    insert_into_images("SocialScience/QueenieJacob.jpeg", 
                            "Pottermore Limited", 
                            "https://www.pottermore.com/news/fantastic-beasts-dan-fogler-alison-sudol-interview", 
                            "Queenie (Alison Sudol) and Jacob (Dan Fogler), promotional photo for 'Fantastic Beasts and Where to Find Them', 2016");
    insert_into_images("SocialScience/InstaDan.jpg", 
                            "@danbilzerian at instagram.com", 
                            "https://www.instagram.com/p/Bvc0Rxmnser/", 
                            "Photo of a 'palm' by @danbilzerian at instagram.com, 2019");
    insert_into_images("SocialScience/1967.jpg", 
                            "Elle Japan", 
                            "https://www.elle.com/jp/culture/celebphotos/g264882/cfea-cph-halloween-costume-ideas-movies-171013-hns/?slide=28", 
                            "Bonnie Parker (Faye Dunaway) and Clyde Barrow (Warren Beatty), scene from 'Bonnie and Clyde', 1967");
    insert_into_images("SocialScience/Sextette.jpg", 
                            "filmcomment.com", 
                            "https://www.filmcomment.com/article/go-west-old-mae-gilbert-adair/", 
                            "Marlo Manners (Mae West), scene from 'Sextette', 1977");
    insert_into_images("SocialScience/MaeWestLipsSofa.jpg", 
                            "VA", 
                            "O1441053", 
                            "Mae West Lips sofa, Edward James (sofa), Salvador Dalí (painting of Mae West the design is based on), 1938, now in Victoria and Albert museum, London");
    insert_into_images("SocialScience/Hasselhoff.jpeg", 
                            "people.com", 
                            "https://people.com/tv/dancing-stars-forgotten-celebs/", 
                            "David Hasselhoff, ABC's 'Dancing With The Stars' TV show, 2010");
    insert_into_images("SocialScience/playboy.jpg", 
                            "The Times", 
                            "https://www.thetimes.co.uk/article/hugh-hefner-obituary-s3m2jqd90", 
                            "Hugh Hefner with two bunnies at the Playboy Mansion, 2003");
    insert_into_images("SocialScience/MerchantOfVenice.jpg", 
                            "telemagazyn.pl", 
                            "https://www.telemagazyn.pl/film/kupiec-wenecki-1528537/", 
                            "Portia (Lynn Collins) and Bassanio (Joseph Fiennes), scene from 'The Merchant of Venice', 1596-9 play, 2004 film");
    insert_into_images("SocialScience/stardust.jpg", 
                            "substreammagazine.com", 
                            "https://substreammagazine.com/2017/08/ten-years-later-stardust/", 
                            "Tristan Thorn (Charlie Cox) and Yvaine (Claire Danes), scene from 'Stardust', 1997 novel, 2007 film");
    insert_into_images("SocialScience/MartyJennifer.jpeg", 
                            "claudiawells.com", 
                            "https://www.claudiawells.com/store/p17/photo_8.html", 
                            "Marty Mcfly (Michael J. Fox) and Jennifer Parker (Claudia Wells), scene from 'Back to the Future', 1985");
    insert_into_images("SocialScience/GeriHalliwell.jpg", 
                            "realnobody.com", 
                            "https://realnobody.com/2018/04/05/i-wanna-really-really-really-wanna-zig-a-zig-ah-38/", 
                            "Geri Halliwell, scene from 'Bag It Up', 1999");
    insert_into_images("SocialScience/Madonna.png", 
                            "vox.com", 
                            "https://www.vox.com/2015/3/10/8182469/madonna-rebel-heart", 
                            "Madonna performs 'Living for Love' at the Grammys, 2015");
    insert_into_images("SocialScience/NickiMinaj.jpg", 
                            "zimbio.com", 
                            "http://www.zimbio.com/photos/Nicki+Minaj/2011+Victoria+Secret+Fashion+Show+Performance/Ev8AFWpMR4v", 
                            "Nicki Minaj Victoria Secret Fashion Show Performance, 2011");
    insert_into_images("SocialScience/thezumas_afp.jpg", 
                            "bbc.com", 
                            "https://www.bbc.com/news/world-africa-36386034", 
                            "Jacob Zuma, the president of South Africa (2009-18) with his three wives, 2009");
    insert_into_images("horsemen/AN00150545_001_l.jpg", 
                            "BM", 
                            "1350964", 
                            "Equestrian portrait of Charles I, <br/>1655-1700, Pierre Lombart");
    insert_into_images("horsemen/AN00150544_001_l.jpg", 
                            "BM", 
                            "1350970", 
                            "Equestrian portrait of Oliver Cromwell, <br/>1655-1700, Pierre Lombart");
    insert_into_images("horsemen/KK_6754_01.jpg", 
                            "KHM", 
                            "92765", 
                            "Replaceable head (Archduke Leopold, later Emperor Leopold I), <br/>1600-1658, Caspar Gras");
    insert_into_images("horsemen/KK_6020_13168.jpg", 
                            "KHM", 
                            "92027", 
                            "Emperor Ferdinand III on horseback, <br/>2nd quarter of the 17th century, Caspar Gras");
    insert_into_images("horsemen/KK_6753_01.jpg", 
                            "KHM", 
                            "92764", 
                            "Replaceable head (Archduke Ferdinand Karl or Archduke Sigismund Franz), <br/>2nd quarter of the 17th century, Caspar Gras");
    insert_into_images("horsemen/KK_6025_01.jpg", 
                            "KHM", 
                            "92032", 
                            "Emperor Ferdinand II on horseback, <br/>2nd quarter of the 17th century, Caspar Gras");
    insert_into_images("horsemen/KK_6000_1.jpg", 
                            "KHM", 
                            "92007", 
                            "Archduke Leopold, later Emperor Leopold I, <br/>1600-1658, Caspar Gras");
    insert_into_images("horsemen/KK_5989_1.jpg", 
                            "KHM", 
                            "91996", 
                            "Emperor Ferdinand III on horseback, <br/>1630-1674, Caspar Gras");
    insert_into_images("SocialScience/pri_nick.jpg", 
                            "independent.co.uk", 
                            "https://www.independent.co.uk/life-style/fashion/priyanka-chopra-saree-power-instyle-india-magazine-cover-a8946751.html", 
                            "Priyanka Chopra and Nick Jonas attend the Met Gala, <br/>2017, New York City");
    insert_into_images("SocialScience/gone-wind-8.jpg", 
                            "Newsweek", 
                            "https://www.newsweek.com/gone-wind-80th-anniversary-15-things-you-didnt-know-about-classic-movie-1314659", 
                            "Vivien Leigh as Scarlett O'Hara in 'Gone with the Wind', 1936 novel, 1939 film");
    insert_into_images("SocialScience/melanie_ashley.jpg", 
                            "Graduatez", 
                            "https://www.graduatez.com/view/facts-gone-with-the-wind/?page=21", 
                            "Olivia de Havilland as Melanie Hamilton and Leslie Howard as Ashley Wilkes in 'Gone with the Wind', 1936 novel, 1939 film");
    insert_into_images("SocialScience/obamas.jpg", 
                            "Hello Giggles", 
                            "https://hellogiggles.com/news/politics/barack-michelle-obama-so-in-love/", 
                            "Michelle and Barack Obama as his first Presidential inauguration, 2009");
    insert_into_images("horsemen/square-1433780649-gallery-nrm-1423622388-love-around-the-world.jpg", 
                            "cosmopolitan.com", 
                            "https://www.cosmopolitan.com/sex-love/news/a41620/handholding-instagram-couple-wedding-photos/", 
                            "Selection of #FollowMeTo photos by Murad Osmann and Natalia Zahkarova");
    insert_into_images("horsemen/3D2E911A00000578-4221856-image-a-65_1487044226081.jpg", 
                            "MY MODERN MET", 
                            "https://mymodernmet.com/boyfriends-of-instagram/", 
                            "Behind the scenes of a #FollowMeTo photo of an unknown Instagram user");
    insert_into_images("horsemen/follow_me_to_india.jpg", 
                            "'Follow Me To' TV show", 
                            "https://followmeto.travel/diary/nataly/follow-me-to-tv-show", 
                            "Behind the scenes of one of #FollowMeTo photos made by Murad Osmann and Natalia Zahkarova");
    insert_into_images("horsemen/FollowMeTo2017.jpg", 
                            "wiki", 
                            "Web_Summit_2017_-_PandaConf_SD5_9150_(38184316236).jpg", 
                            "Nataly Osmann and Murad Osmann, Web Summit 2017 in Lisbon");
    insert_into_images("horsemen/fmlac42487.jpg", 
                            "© German Documentation Center for Art History", 
                            "https://www.bildindex.de/document/obj20311108", 
                            "Leopoldsbrunnen, photograph taken before 1941, <br/>1623-30, Position: 1893, Innsbruck, Austria");
    insert_into_images("horsemen/cb06e904-8323-4871-ac80-77953e270258.png", 
                            "© Dorotheum GmbH & Co KG", 
                            "https://www.dorotheum.com/en/l/6007356/", 
                            "Equestrian statuette of Emperor Leopold I on horseback, <br/>1665-70, Caspar Gras, Austria");
    insert_into_images("horsemen/Gras_Christies.png", 
                            "Christies", 
                            "a-bronze-group-of-holy-roman-emperor-5984935-details", 
                            "Equestrian statuette of Emperor Leopold I or Archduke Siegmund Franz on horseback, <br/>mid 17th century, Caspar Gras, Austria");
    insert_into_images("horsemen/Gras_Artnet.png", 
                            "© Worldwide Corporation", 
                            "http://www.artnet.com/artists/caspar-gras/equestrian-portrait-of-archduke-ferdinand-karl-or-7OaOo7p2v9tQaskMrh-mMQ2", 
                            "Equestrian statuette of Archduke Ferdinand Karl or Archduke Sigmund Franz von Habsburg on horseback, <br/>mid 17th century, Caspar Gras, Austria");
    insert_into_images("horsemen/Elisabeth_zu_Pferd.png", 
                            "© NEUMEISTER", 
                            "https://www.neumeister.com/kunstwerksuche/kunstdatenbank/ergebnis/1064-18/Franz-Adam/", 
                            "Empress Elisabeth of Austria on horseback, <br/>1857, Franz Adam, Austria");
    insert_into_images("horsemen/05-510073.jpg", 
                            "RMN", 
                            "05-510073-2C6NU0788XX8", 
                            "Second battle between Alexander the Great and Darius III, <br/>cr. 1470-75, France");
    insert_into_images("horsemen/12-557771.jpg", 
                            "RMN", 
                            "12-557771-2C6NU08INCWP", 
                            "Hunting scene, illustration of the collection of poems of Ali-Shir Navai, <br/>cr. 1525-50, Shiraz, Persia");
    insert_into_images("horsemen/12-583985.jpg", 
                            "RMN", 
                            "12-583985-2C6NU02X1U5B", 
                            "Battle between Manuchehre and Turanians, illustration of the Book of Kings by Ferdawsi, <br/>cr. 1567, Shiraz, Persia");
    insert_into_images("horsemen/12-556317.jpg", 
                            "RMN", 
                            "12-556317-2C6NU0835T16", 
                            "Book cover showing courtly hunting scene, <br/>cr. 1560-88, Khorasan, Persia");
    insert_into_images("horsemen/106738145.jpg", 
                            "Princeton", 
                            "http://etcweb.princeton.edu/shahnama/view-page.epl?page_id=61&page_num=", 
                            "Giv Charges into Battle against Piran, illustration of the Book of Kings by Ferdawsi, <br/>cr. 1589–90, Shiraz, Persia");
    insert_into_images("horsemen/DP107142.jpg", 
                            "Met", 
                            "452135", 
                            "Siyavush Plays Polo before Afrasiyab, illustration of the Book of Kings by Ferdawsi, <br/>cr. 1525–30, Shiraz, Persia");
    insert_into_images("horsemen/sf11-39-2r.jpg", 
                            "Met", 
                            "446161", 
                            "Akbar Hunting, illustration of History of Akbar by Abul-Fazl ibn Mubarak, <br/>late 16th century, Lahore, Mughal Empire");
    insert_into_images("horsemen/DT4803.jpg", 
                            "Met", 
                            "452135", 
                            "Krishna and Balarma Fighting the Enemy, illustration of Harivamsa, <br/>cr. 1590–95, Lahore, Mughal Empire");
    insert_into_images("horsemen/DP215755.jpg", 
                            "Met", 
                            "451089", 
                            "Battle Between Iranians and Turanians, illustration of the Book of Kings by Ferdawsi, <br/>cr. 1562–83, Shiraz, Persia");
    insert_into_images("horsemen/DP159385.jpg", 
                            "Met", 
                            "447297", 
                            "Rustam Seizes Afrasiyab by the Girdle and Lifts him from the Saddle, illustration of the Book of Kings by Ferdawsi, <br/>cr. 1430–40, India (?)");
    insert_into_images("horsemen/DT8442.jpg", 
                            "Met", 
                            "453276", 
                            "The Battle of Shahbarghan, illustration of Padshahnama by Abdul Hamid Lahori, <br/>1646-1700, Mughal Empire");
    insert_into_images("horsemen/AN00225812_001_l.jpg", 
                            "BM", 
                            "717305", 
                            "Studies of military tank-like machines including one led by a horseman on a rearing horse pulling a contraption with revolving scythes, <br/>cr. 1485, Leonardo da Vinci, Florence");
    insert_into_images("horsemen/AN00050860_001_l.jpg", 
                            "BM", 
                            "765099", 
                            "Studies of horsemen for the Battle of Anghiari, <br/>cr. 1503, Leonardo da Vinci, Florence");
    insert_into_images("horsemen/1971.61.jpg", 
                            "The San Diego Museum of Art", 
                            "http://collection.sdmart.org/Obj5305", 
                            "Faramarz leads Borzu captive, illustration of Borzunameh, <br/>cr. 1500, Fars, Persia");
    insert_into_images("horsemen/1972.222.jpg", 
                            "The San Diego Museum of Art", 
                            "http://collection.sdmart.org/Obj5294", 
                            "Khosrow and Shirin hunting lions, illustration of Khamsa of Nizami, <br/>cr. 1580, Persia");
    insert_into_images("horsemen/Ismail_Chingiz_Mehbaliyev.jpg", 
                            "wiki", 
                            "Ismail_declares_himself_shah_by_entering_Tabriz,_Chingiz_Mehbaliyev.jpg", 
                            "Ismail declares himself shah by entering Tabriz, <br/>2005 or earlier, Chingiz Mehbaliyev, Azerbaijan");
    insert_into_images("horsemen/AN00353274_001_l.jpg", 
                            "BM", 
                            "3068677", 
                            "Satire: Louis XIV, holding out coins, runs after Charles II who holds the sceptre of peace and rides a prancing horse, <br/>1670-80, Romeyn de Hooghe, Netherlands");
    insert_into_images("horsemen/Triptych-of-the-Adoration-of-the-Magi.jpg", 
                            "wiki", 
                            "Hieronymus_Bosch_-_Triptych_of_the_Adoration_of_the_Magi_-_WGA2606.jpg", 
                            "The Adoration of the Magi, <br/>cr. 1495, Hieronymus Bosch, Netherlands");
    insert_into_images("horsemen/Bosch_magi_zoom.png", 
                            "wiki", 
                            "Hieronymus_Bosch_-_Triptych_of_the_Adoration_of_the_Magi_-_WGA2606.jpg", 
                            "The Adoration of the Magi (detail), <br/>cr. 1495, Hieronymus Bosch, Netherlands");
    insert_into_images("horsemen/Mathis_Gothart_Grunewald_Crucifixion.jpg", 
                            "wiki", 
                            "Mathis_Gothart_Grünewald_007.jpg", 
                            "The Small Crucifixion, <br/>cr. 1511-20, Matthias Grünewald, Germany");
    insert_into_images("horsemen/Budapest_Rearing_Horse.png", 
                            "wiki", 
                            "Budapest_Rearing_Horse_and_Mounted_Warrior,_right_side,_by_E.C.Rae.png", 
                            "Rearing Horse and Mounted Warrior statuette, <br/>1516-9, Leonardo da Vinci, France");
    insert_into_images("horsemen/81641b31-1a55-4521-bab7-cf12d63c535f.png", 
                            "NEUMEISTER", 
                            "https://www.neumeister.com/en/artwork-search/artwork-database/ergebnis/1006-18/Georges-Desmar%25C3%25A9es/", 
                            "Elector Maximilian III Josef of Bavaria on horseback, <br/>1758, Georges Desmarées, Bavaria, Germany");
    insert_into_images("horsemen/A_P1320195.jpeg", 
                            "kunstbeziehung.goldecker.de", 
                            "https://kunstbeziehung.goldecker.de/work.php?sd%5BwCode%5D=5c83b47e43728", 
                            "Elector Karl Albrecht later Charles VII on horseback, <br/>1758, Georges Desmarées, Bavaria, Germany");
    insert_into_images("horsemen/kipicipu0003.jpg", 
                            "europeana.eu", 
                            "https://www.europeana.eu/portal/en/record/9200416/BibliographicResource_3000116256574.html", 
                            "Saint George killing the dragon, <br/>cr. 1600, Giuseppe Cesari, Rome, Italy");
    insert_into_images("horsemen/Santiago_a_caballo.jpg", 
                            "wiki", 
                            "El_Apóstol_Santiago_a_caballo_o_Santiago_Matamoros,_de_Francisco_Camilo_(Museo_del_Prado).jpg", 
                            "The Apostle Santiago on horseback, or Santiago Matamoros, <br/>1649, Francisco Camilo, Spain");
    insert_into_images("horsemen/Low_Countries_1700.png", 
                            "wiki", 
                            "Low_Countries_1700.png", 
                            "Map of Flandres (Spanish Netherlands), cr. 1700");
    insert_into_images("horsemen/Flandres.png", 
                            "Google Maps", 
                            "https://www.google.com/maps/place/Flanders,+Belgium/@51.0747751,1.9854573,7z/", 
                            "Map of Flandres, Belgium, 2019");
    insert_into_images("horsemen/bridgeman-painting-of-santiago-558594.jpg", 
                            "The British Library", 
                            "https://www.bl.uk/collection-items/painting-of-santiago-the-moor-slayer", 
                            "Altarpiece with St. James in the central panel, <br/>15th century, Segovia, Spain");
    insert_into_images("horsemen/Paulus_Potter_-_Diederik_Tulp_-_WGA18205.jpg", 
                            "wiki", 
                            "Paulus_Potter_-_Diederik_Tulp_-_WGA18205.jpg", 
                            "Diederik Tulp, <br/>1653, Paulus Potter, Netherlands");
    insert_into_images("horsemen/School_of_Thomas_de_Keyser_001.jpg", 
                            "wiki", 
                            "School_of_Thomas_de_Keyser_001.jpg", 
                            "Equestrian portrait of Johan Wolfart van Brederode, <br/>1640-70, School of Thomas de Keyser, Netherlands");
    insert_into_images("horsemen/La_Bataille_dIssus_-_Jan_Brueghel.jpeg", 
                            "wiki", 
                            "0_La_Bataille_d%27Issus_-_Jan_Brueghel_l%27Ancien_(détail).JPG", 
                            "The Battle of Issus or Arbela (zoom on Alexander the Great), <br/>1602, Jan Brueghel the Elder, Flemish school");
    insert_into_images("horsemen/La_Bataille_dIssus_Jan_Brueghel.jpeg", 
                            "wiki", 
                            "0_La_Bataille_d%27Issus_-_Jan_Brueghel_l%27Ancien_(1).JPG", 
                            "The Battle of Issus or Arbela, <br/>1602, Jan Brueghel the Elder, Flemish school");
    insert_into_images("horsemen/Horatius_Cocles_Stopping_King_Porsenna_zoom.jpg", 
                            "wiki", 
                            "Horatius_Cocles_Stopping_King_Porsenna%27s_Army_outside_Rome_(Ludwig_Refinger)_-_Nationalmuseum_-_17244.tif", 
                            "Horatius Cocles Stopping King Porsenna's Army outside Rome (detail), <br/>1525-49, Ludwig Refinger, Bavaria, Germany");
    insert_into_images("horsemen/Horatius_Cocles_Stopping_King_Porsennas_Army.jpg", 
                            "wiki", 
                            "Horatius_Cocles_Stopping_King_Porsenna%27s_Army_outside_Rome_(Ludwig_Refinger)_-_Nationalmuseum_-_17244.tif", 
                            "Horatius Cocles Stopping King Porsenna's Army outside Rome, <br/>1525-49, Ludwig Refinger, Bavaria, Germany");
    insert_into_images("horsemen/Albrecht_Altdorfer_Schlacht_bei_Issus.jpg", 
                            "wiki", 
                            "Albrecht_Altdorfer_-_Schlacht_bei_Issus_(Alte_Pinakothek,_München).jpg", 
                            "The Battle of Alexander at Issus, <br/>1529, Albrecht Altdorfer, Bavaria, Germany");
    insert_into_images("horsemen/Schlacht_bei_Issus_zoom.jpg", 
                            "wiki", 
                            "Albrecht_Altdorfer_-_Schlacht_bei_Issus_(Alte_Pinakothek,_München).jpg", 
                            "The Battle of Alexander at Issus, <br/>1529, Albrecht Altdorfer, Bavaria, Germany");
    insert_into_images("horsemen/AN00222003_001_l.jpg", 
                            "BM", 
                            "710506", 
                            "A Mughal nobleman on horseback, <br/>cr. 1656-61, Rembrandt, Netherlands");
    insert_into_images("horsemen/AN00170685_001_l.jpg", 
                            "BM", 
                            "367289", 
                            "Plaque showing a heavily armoured horseman (cataphract) spearing a lion, <br/>3rd century BC - 2nd century, Parthian or Seleucid");
    insert_into_images("horsemen/AN00708421_001_l.jpg", 
                            "BM", 
                            "3064200", 
                            "William Cavendish on horseback, illustration of the dressage manual, <br/>1657, Abraham van Diepenbeeck, Netherlands");
    insert_into_images("SocialScience/putin.jpg", 
                            "iz.ru", 
                            "https://iz.ru/919017/2019-09-07/putin-i-sobianin-priekhali-vo-dvoretc-khudozhestvennoi-gimnastiki", 
                            "Vladimir Putin and Russian gymnasts, <br/>2019, Moscow, Russia");
    insert_into_images("horsemen/Rembrandt_Harmensz_van_Rijn_094.jpg", 
                            "wiki", 
                            "Rembrandt_Harmensz._van_Rijn_094.jpg", 
                            "Portrait of Frederick Rihel on Horseback, <br/>1663, Rembrandt, Netherlands");
    insert_into_images("horsemen/De_berenjacht_Rijksmuseum_SK-A-316.jpeg", 
                            "wiki", 
                            "De_berenjacht_Rijksmuseum_SK-A-316.jpeg", 
                            "The bear hunt, <br/>1649, Paulus Potter, Netherlands");
    insert_into_images("horsemen/Ciriaco_dAncona.jpg", 
                            "wiki", 
                            "Ciriaco_d%27Ancona_di_Benozzo_Gozzoli.jpg", 
                            "Ciriaco de' Pizzicolli, detail of a painting in Cappella del Palazzo Medici-Ricciardi, <br/>1459, Florence, Italy");
    insert_into_images("horsemen/olympics_medal.jpg", 
                            "BM", 
                            "938500", 
                            "Olympic Games medal showing three classical figures and St George speaking the dragon, <br/>1908, Bertram Mackennal, British Isles");
    insert_into_images("horsemen/sisinios_amulet.jpg", 
                            "HAM", 
                            "191293", 
                            "Amulet with Holy Rider (St. Sisinios) and Virgin Enthroned, <br/>5th-7th century, Byzantine"); 
    insert_into_images("horsemen/Vase-with-hunting-scenes.jpg", 
                            "Prado", 
                            "vase-with-hunting-scenes/5a18363c-0ad2-462e-8a5a-6c3a4f1fe84e?searchid=13704edd-6a8c-e67a-dc8d-bfa4e5b8d2da", 
                            "Vase with hunting scenes showing Meleager, <br/>1550-75, Francesco Tortorino, Milan, Italy"); 
    insert_into_images("horsemen/Meleager_vase.png", 
                            "Prado", 
                            "vase-with-hunting-scenes/5a18363c-0ad2-462e-8a5a-6c3a4f1fe84e?searchid=13704edd-6a8c-e67a-dc8d-bfa4e5b8d2da", 
                            "Vase with hunting scenes (detail showing Meleager), <br/>1550-75, Francesco Tortorino, Milan, Italy"); 
    insert_into_images("horsemen/Meleagrus-Hunt.jpg", 
                            "Prado", 
                            "meleagrus-hunt/cdf09cb4-ad3f-4c02-80df-f5d849b4a682?searchid=13704edd-6a8c-e67a-dc8d-bfa4e5b8d2da", 
                            "Meleagrus' Hunt statuette, <br/>1583-4, Giovanni di Benedetto Bandini, Florence/Urbino, Italy"); 
    insert_into_images("horsemen/Meleager_model.png", 
                            "Met", 
                            "460471", 
                            "Plaquette depicting Meleager on horseback hunting the Calydonian Boar, <br/>16th century, later cast, Pseudo-Melioli, Italy"); 
    insert_into_images("horsemen/Vittore_carpaccio_san_giorgio_e_il_drago_01.jpg", 
                            "wiki", 
                            "Vittore_carpaccio,_san_giorgio_e_il_drago_01.jpg", 
                            "Saint George and the Dragon, <br/>1502, Vittore Carpaccio, Venice, Italy");
    insert_into_images("horsemen/san_giorgio_e_il_drago_02.jpg", 
                            "wiki", 
                            "Vittore_carpaccio,_san_giorgio_e_il_drago_02.jpg", 
                            "Saint George and the Dragon, <br/>1516, Vittore Carpaccio, Venice, Italy");
    insert_into_images("horsemen/St_George_fighting_the_dragon_Leonhard_Beck.jpg", 
                            "wiki", 
                            "St_George_fighting_the_dragon_Leonhard_Beck.jpg", 
                            "Saint George and the Dragon, <br/>cr. 1515, Leonhard Beck, Germany");
    insert_into_images("horsemen/VirginiaBotticelli.jpg", 
                            "wiki", 
                            "VirginiaBotticelli.jpg", 
                            "The Story of Virginia, <br/>cr. 1496-1504, Sandro Botticelli, Florence, Italy");
    insert_into_images("horsemen/Botticelli_Prado_103.jpg", 
                            "wiki", 
                            "Botticelli_Prado_103.jpg", 
                            "The Story of Nastagio degli Onesti I, <br/>1482-3, Sandro Botticelli, Florence, Italy");
    insert_into_images("horsemen/Sandro_Botticelli_075.jpg", 
                            "wiki", 
                            "Botticelli_Prado_103.jpg", 
                            "The Story of Nastagio Degli Onesti: The Banquet in the Pine Forest, <br/>1482-3, Sandro Botticelli, Florence, Italy");
    insert_into_images("horsemen/Luca_Signorelli_-_Sint_Joris_en_de_draak.jpg", 
                            "wiki", 
                            "Luca_Signorelli_-_Sint_Joris_en_de_draak.jpg", 
                            "Saint George And the Dragon, <br/>1495-1505, Workshop of Luca Signorelli, Tuscany, Italy");
    insert_into_images("horsemen/3328201302140003.jpg", 
                            "Fine Arts Museums of San Francisco", 
                            "https://art.famsf.org/cornelis-cort/st-george-killing-dragon-19633036759", 
                            "Saint George Killing the Dragon, <br/>cr. 1540, Giulio Clovio (Il Macedo), Rome, Italy");
    insert_into_images("horsemen/MM26064.jpg", 
                            "Met", 
                            "368441", 
                            "Saint George Killing the Dragon, <br/>1542, Giulio Clovio (Il Macedo), Rome, Italy");
    insert_into_images("horsemen/Francesco_Salviati_-_Scenes_from_the_Life_of_Furius_Camillus_-_WGA20680.jpg", 
                            "wiki", 
                            "Francesco_Salviati_-_Scenes_from_the_Life_of_Furius_Camillus_-_WGA20680.jpg", 
                            "The stories of Furio Camillo, <br/>1543-5, Francesco Salviati, Palazzo Vecchio, Florence");
    insert_into_images("horsemen/Carlo_Crivelli_-_Saint_George_Slaying_the_Dragon_1470.jpg", 
                            "wiki", 
                            "Carlo_Crivelli_-_Saint_George_Slaying_the_Dragon,_1470.jpg", 
                            "Saint George And the Dragon, <br/>1470, Carlo Crivelli, Venice, Italy");
    insert_into_images("horsemen/Carlo_Crivelli_078.jpg", 
                            "wiki", 
                            "Carlo_Crivelli_078.jpg", 
                            "Saint George And the Dragon, <br/>1490, Carlo Crivelli, Venice, Italy");
    insert_into_images("horsemen/09-583431.jpg", 
                            "RMN", 
                            "09-583431-2C6NU0KNYVM6", 
                            "Saint George Fighting the Dragon, <br/>1847, Delacroix Eugène, France");
    insert_into_images("horsemen/Jaguar_Attacking_a_Horseman_-_WGA6232.jpg", 
                            "wiki", 
                            "Eugène_Delacroix_-_Jaguar_Attacking_a_Horseman_-_WGA6232.jpg", 
                            "Jaguar Attacking a Horseman, <br/>cr. 1855, Delacroix Eugène, France");
    insert_into_images("horsemen/Moroccan_Horseman_Crossing_a_Ford_by_Eugène_Delacroix_c._1850.jpg", 
                            "wiki", 
                            "Moroccan_Horseman_Crossing_a_Ford_by_Eugène_Delacroix,_c._1850.JPG", 
                            "Moroccan Horseman Crossing a Ford, <br/>cr. 1850, Delacroix Eugène, France");
    insert_into_images("horsemen/Collision_of_Moorish_Horsemen_-_Walters_376.jpg", 
                            "WAM", 
                            "3792", 
                            "Collision of Moorish Horsemen, <br/>1843-4, Delacroix Eugène, France");
    insert_into_images("horsemen/Arab-lion.jpg", 
                            "wiki", 
                            "Arab-lion.jpg", 
                            "Arab Horseman Attacked by a Lion, <br/>1849-50, Delacroix Eugène, France");
    insert_into_images("horsemen/A_Turk_Surrenders_to_a_Greek_Horseman_1856.jpg", 
                            "wiki", 
                            "Eugène_Delacroix_-_A_Turk_Surrenders_to_a_Greek_Horseman_(1856).jpg", 
                            "A Turk Surrenders to a Greek Horseman, <br/>1856, Delacroix Eugène, France");
    insert_into_images("horsemen/Delacroix_lion_hunt_1855.jpeg", 
                            "wiki", 
                            "Delacroix_lion_hunt_1855.JPG", 
                            "Lion Hunt, <br/>1855, Delacroix Eugène, France");
    insert_into_images("horsemen/Le_28_Juillet._La_Liberte_guidant_le_peuple.jpg", 
                            "wiki", 
                            "Eugène_Delacroix_-_Le_28_Juillet._La_Liberté_guidant_le_peuple.jpg", 
                            "Liberty Leading the People, <br/>1830, Delacroix Eugène, France");
    insert_into_images("horsemen/247009v_0001.jpg", 
                            "MLM", 
                            "247009", 
                            "A Persian Horseman with a Lance, <br/>cr. 1820-7, Delacroix Eugène, France");
    insert_into_images("horsemen/Henri_IV_Arques_21_septembre_1589.jpeg", 
                            "wiki", 
                            "Henri_IV_à_la_bataille_d%27Arques_21_septembre_1589.jpeg", 
                            "Henri IV at the battle of Arques, <br/>cr. 1590, ?, France"); 
    insert_into_images("horsemen/7P5M2591.jpg", 
                            "Peru", 
                            "8202", 
                            "Santiago Matamoros with the Christ of the three spears, <br/>18th century, Peru"); 
    insert_into_images("horsemen/83K97084.jpg", 
                            "Peru", 
                            "7998", 
                            "Santiago Mataindios, <br/>18th century, Peru"); 
    insert_into_images("horsemen/2012_8_9a.jpg", 
                            "Peru", 
                            "4891", 
                            "Santiago Matamoros, <br/>1670-90, Peru"); 
    insert_into_images("horsemen/82LF5699.jpg", 
                            "Peru", 
                            "4820", 
                            "Santiago Matamoros and pastoral life scene, <br/>early 19th century, Peru"); 
    insert_into_images("horsemen/SCN08301.jpg", 
                            "Peru", 
                            "6589", 
                            "Patron Saint victorious over the moors, <br/>17th century, Peru"); 
    insert_into_images("horsemen/82LF5702.jpg", 
                            "Peru", 
                            "4825", 
                            "Santiago Matamoros (polychrome alabaster), <br/>20th century, Peru"); 
    insert_into_images("horsemen/82LF5662.jpg", 
                            "Peru", 
                            "4828", 
                            "Santiago Matamoros (alabaster), <br/>20th century, Peru"); 
    insert_into_images("horsemen/82LF5991.jpg", 
                            "Peru", 
                            "4822", 
                            "Santiago Matamoros (alabaster), <br/>20th century, Peru"); 
    insert_into_images("horsemen/St_James_-Cristo_del_Rey.jpg", 
                            "wiki", 
                            "St_James_-Cristo_del_Rey.jpg", 
                            "St. James panel from reredos in Cristo Rey Church, <br/>cr. 1760, Santa Fe, New Mexico, U.S.A."); 
    insert_into_images("horsemen/Anonimo_-_Retrato_de_Felipe_V_convertido_en_Santiago.jpg", 
                            "wiki", 
                            "Anónimo_-_Retrato_de_Felipe_V_convertido_en_Santiago.jpg", 
                            "Portrait of Philip V as Saint James, <br/>18th century, Bolivia"); 
    insert_into_images("horsemen/Anonimo_Escuela_de_Caracas_000.jpg", 
                            "wiki", 
                            "Anonimo_Escuela_de_Caracas_000.jpg", 
                            "Santiago Matamoros, <br/>second half of 18th century, Venezuela"); 
    insert_into_images("horsemen/543a6537b3204d5414e1b87b1aec251f.jpg", 
                            "mutualart.com", 
                            "https://www.mutualart.com/Artwork/Santiago-Matamoros/63A2D7343365365C", 
                            "Santiago Matamoros, <br/>18th century, colonial school"); 
    insert_into_images("horsemen/20150506173808.jpg", 
                            "abalartesubastas", 
                            "http://abalartesubastas.com/lote_elegido_nuevo.php?subasta=1&numero_lote=137&id=140&categoria=Pintura&seccion=%D3leo+sobre+tabla&orden=numero_lote&sentido=&offset=&limite=15&autor=&vendido=&activo=&idioma=en&tabla=", 
                            "Santiago Matamoros, <br/>18th century, colonial school"); 
    insert_into_images("horsemen/929.jpg", 
                            "abalartesubastas", 
                            "http://abalartesubastas.com/lote_elegido_nuevo.php?subasta=1&numero_lote=137&id=140&categoria=Pintura&seccion=%D3leo+sobre+tabla&orden=numero_lote&sentido=&offset=&limite=15&autor=&vendido=&activo=&idioma=en&tabla=", 
                            "Santiago Matamoros, <br/>18th century, colonial school"); 


    insert_into_images("horsemen/Battle_of_Agincourt_St_Albans_Chronicle_by_Thomas_Walsingham.jpg", 
                            "wiki", 
                            "Battle_of_Agincourt,_St._Alban%27s_Chronicle_by_Thomas_Walsingham.jpg", 
                            "Battle of Agincourt, from the 'St. Alban's Chronicle' by Thomas Walsingham, <br/>15th century, English with Flemish illuminations"); 
    insert_into_images("horsemen/Eugene_Delacroix_-_Chasse_au_tigre_1854.jpg", 
                            "wiki", 
                            "Eugène_Delacroix_-_Chasse_au_tigre_(1854).jpg", 
                            "The Tiger Hunt, <br/>1854, Delacroix Eugène, France");
    insert_into_images("horsemen/Peter_Paul_Rubens_142.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_142.jpg", 
                            "The hunt of Meleagros and Atalante, <br/>1616-20, Peter Paul Rubens, Flandres");
    insert_into_images("horsemen/8a2bb209331df2aafb39eca7d6c49d1f.jpg", 
                            "Russian Museum", 
                            "http://en.rusmuseum.ru/benois-wing/exhibitions/angels-of-the-21st-century/#rmPhoto[gallery9096]/0/", 
                            "Archangel Michael, colored lithograph, <br/>1914, Natalia Goncharova, Russia");
    insert_into_images("horsemen/864px-Buffi_-_Equestrian_portrait_of_Marie_Jeanne_of_Savoy-Nemours_-_Palazzo_Madama.jpg", 
                            "wiki", 
                            "Buffi_-_Equestrian_portrait_of_Marie_Jeanne_of_Savoy-Nemours_-_Palazzo_Madama.jpg", 
                            "Equestian portrait of Marie Jeanne Baptiste of Savoy-Nemours, Duchess of Savoy, <br/>1660-75, Giovanni Luigi Buffi, Duchy of Savoy");
    insert_into_images("horsemen/AN00941716_001_l.jpg", 
                            "BM", 
                            "930274", 
                            "Silver coin with helmeted warrior on horseback, king Philoxenus Anicetus, <br/>100-95 BC, minted in Afghanistan, Indo-Greek kingdom");
    insert_into_images("horsemen/Peter_Paul_Rubens_137.jpg", 
                            "wiki", 
                            "Peter_Paul_Rubens_137.jpg", 
                            "The death of Decius Mus in the battle, <br/>1618, Peter Paul Rubens, Flandres");
    insert_into_images("horsemen/SchoolOfTabriz4.jpg", 
                            "wiki", 
                            "SchoolOfTabriz4.jpg", 
                            "Isfandiyar fights with the Wolves, illustration to Shahnameh, <br/>cr. 1370, Tabriz, Persia");
    insert_into_images("horsemen/Jan_Wildens_-_Landscape_with_Hunt_of_Meleager_and_Atalanta.jpg", 
                            "wiki", 
                            "Jan_Wildens_-_Landscape_with_Hunt_of_Meleager_and_Atalanta.jpg", 
                            "Landscape with Hunt of Meleager and Atalanta, <br/>first half of the 17th century, Jan Wildens, Flandres");
    insert_into_images("horsemen/Spanish_America_XVIII_Century_Most_Expansion.png", 
                            "wiki", 
                            "Spanish_America_XVIII_Century_(Most_Expansion).png", 
                            "Map of Spanish Americas at the end of the 18th century");
    insert_into_images("horsemen/Political_Map_of_the_Americas.jpg", 
                            "wiki", 
                            "Spanish_America_XVIII_Century_(Most_Expansion).png", 
                            "Contemporaty political map of Americas");
    insert_into_images("horsemen/00_mdp_7.jpg", 
                            "Xunta de Galicia", 
                            "https://museos.xunta.gal/en/node/488/pezas-destacadas", 
                            "Santiago the Spaniard-Slayer, <br/>mid 19th century or 17th century, Cuzco, Peru");
    insert_into_images("horsemen/5c8a6cf1b322e.jpeg", 
                            "elcomercio.pe", 
                            "https://elcomercio.pe/somos/historias/imponente-camino-santiago-escenarios-gran-teatro-nacional-noticia-616675?foto=2", 
                            "Demonstration calling to increase the budget of the culture sector, <br/>October 2017, Lima, Peru");
    insert_into_images("horsemen/Santiago_Mataindios.jpg", 
                            "wiki", 
                            "Santiago_Mataindios.jpg", 
                            "Santiago Mataindios, <br/>1690-1720, Cuzco School, Peru"); 
    insert_into_images("horsemen/SANTIAGOMataindios.TallaIglesiaSantiagoTlatelolco.MEXICODF..jpg", 
                            "vivirtlatelolco.blogspot.com", 
                            "http://vivirtlatelolco.blogspot.com/2011/07/quien-es-el-senor-san-thiago-patrono-de.html", 
                            "Santiago Mataindios, <br/>1610, Miguel Mauricio, Temple of Tlatelolco, Mexico"); 
    insert_into_images("horsemen/Peru.png", 
                            "Wikipedia", 
                            "https://en.wikipedia.org/wiki/Cusco", 
                            "Cusco, location within Peru"); 
    insert_into_images("horsemen/Saint_James_the_Apostle_Church_Santiago_Acutzilapan_Atlacomulco_Mexico_State_Mexico_.jpg", 
                            "wiki", 
                            "Saint_James_the_Apostle_Church,_Santiago_Acutzilapan,_Atlacomulco,_Mexico_State,_Mexico_.jpg", 
                            "Saint James the Apostle Church, <br/>contemporaty, Atlacomulco, Mexico"); 
    insert_into_images("horsemen/Santiago_apostol_escultura_de_Abraham_Gonzalez.jpg", 
                            "wiki", 
                            "Santiago_apóstol,_escultura_de_Abraham_González.jpg", 
                            "Sculpture of Saint James, <br/>1996, Abraham Gonzalez, Mexico"); 
    insert_into_images("horsemen/MuseoRegionalTuxteco38.jpg",
                            "wiki", 
                            "MuseoRegionalTuxteco38.JPG", 
                            "Sculpture of Saint James, <br/>colonial era, Mexico"); 
    insert_into_images("horsemen/SantiagoMatamorosFranzMayer.jpg",
                            "wiki", 
                            "SantiagoMatamorosFranzMayer.jpg", 
                            "Wood relief of Saint James, <br/>colonial era, Mexico"); 
    insert_into_images("horsemen/Vincent-Adriaenssen-Leckerbetien-il-Manciola-Anversa-1595-1675-Roma-_-Battaglia-tra-cavalieri-turchi-e-cristiani-_-Paintings-oil-_-Christies.png",
                            "Christies", 
                            "vincent-adriaenssen-leckerbetien-il-manciola-battaglia-tra-5317258", 
                            "Battle between Turkish and Christian horsemen, <br/>cr. 1610-1675, Vincent Adriaenssen, Flemish/Italian"); 
    insert_into_images("horsemen/Vincent_Adriaenssen_-_Cavalry_battle_scene.jpg",
                            "wiki", 
                            "Vincent_Adriaenssen_-_Cavalry_battle_scene.jpg", 
                            "Cavalry battle scene, <br/>cr. 1610-1675, Vincent Adriaenssen, Flemish/Italian"); 
    insert_into_images("horsemen/Vincent_Adriaenssen_-_Cavalry_battle_between_Turks_and_Christians.jpg",
                            "wiki", 
                            "Vincent_Adriaenssen_-_Cavalry_battle_between_Turks_and_Christians.jpg", 
                            "Cavalry battle between Turkishs and Christians, <br/>cr. 1610-1675, Vincent Adriaenssen, Flemish/Italian"); 
    insert_into_images("horsemen/Martin_de_Mujica.jpg",
                            "wiki", 
                            "Martin_de_Mujica.jpg", 
                            "Martín de Mujica, Chile's spaniard governator, represented as Santiago, (1646-1649), <br/>1646, Alonso de Ovalle, Chile"); 
    insert_into_images("horsemen/Dl8cgL0WwAAKdlB.jpg",
                            "cfariasvega @ twitter.com", 
                            "https://twitter.com/cfariasvega/status/1035577824449572866?lang=en-gb", 
                            "Allegory Of Santiago In The History Of Chile (1646-1649), <br/>?, Alonso de Ovalle, Chile"); 
    insert_into_images("horsemen/Vicente_Carducho_Socorro_de_la_plaza_de_Constanza..jpg",
                            "wiki", 
                            "Vicente_Carducho,_Socorro_de_la_plaza_de_Constanza..jpg", 
                            "Relief from Constance Square, <br/>1634, Vincenzo Carducci, Italian"); 
    insert_into_images("horsemen/Frederik_Hendrik_and_Maurits_as_generals_by_Thomas_Willeboirts_Bosschaert.jpg",
                            "wiki", 
                            "Frederik_Hendrik_and_Maurits_as_generals,_by_Thomas_Willeboirts_Bosschaert.jpg", 
                            "Frederik Hendrik and Maurits as generals, with the Battle of Flanders in the distance, <br/>1650, Thomas Willeboirts Bosschaert, Flemish"); 
    insert_into_images("horsemen/Maurits_1567-1625_prins_van_Oranje_in_de_slag_bij_Nieuwpoort_1600.jpg",
                            "wiki", 
                            "Maurits_(1567-1625),_prins_van_Oranje,_in_de_slag_bij_Nieuwpoort_(1600).jpg", 
                            "Prince Maurice of Orange during the Battle of Nieuwpoort (1600), <br/>cr. 1620-60, Henri Ambrosius Pacx, Dutch"); 
    insert_into_images("horsemen/Sebastiaan_Vrancx_1573-1647_-_De_plundering_van_Wommelgem_1625-1630_-_Düsseldorf_Museum_Kunstpalast_15-08-2012_15-08-12.jpeg",
                            "wiki", 
                            "Sebastiaan_Vrancx_(1573-1647)_-_De_plundering_van_Wommelgem_(1625-1630)_-_Düsseldorf_Museum_Kunstpalast_15-08-2012_15-08-12.JPG", 
                            "Looting of a village, possibly Wommelgem in 1589, <br/>cr. 1600-1650, Sebastiaen Vrancx, Flemish"); 
    insert_into_images("horsemen/Sebastiaan_Vrancx_-_Reitergefecht_am_Fuss_eines_Hugels.jpg",
                            "wiki", 
                            "Sebastiaan_Vrancx_-_Reitergefecht_am_Fuß_eines_Hügels.jpg", 
                            "Cavalry engagement at the foot of a hill, <br/>cr. 1601-15, Sebastiaen Vrancx, Flemish"); 
    insert_into_images("horsemen/Jan_Brueghel_I_and_Sebastian_Vrancx_-_Assault_on_a_Convoy.jpg",
                            "wiki", 
                            "Jan_Brueghel_(I)_and_Sebastian_Vrancx_-_Assault_on_a_Convoy.jpg", 
                            "Assault on a Convoy, <br/>cr. 1612, Jan Brueghel the Elder and Sebastiaen Vrancx, Flemish"); 
    insert_into_images("horsemen/Sebastiaan_Vrancx_-_The_battle_of_Leckerbeetje.jpg",
                            "wiki", 
                            "Sebastiaan_Vrancx_-_The_battle_of_Leckerbeetje.jpg", 
                            "The battle of Leckerbeetje, <br/>cr. 1600-47, Sebastiaen Vrancx, Flemish"); 
    insert_into_images("horsemen/Jan_Fyt_and_Pieter_Thijs_-_Atalanta_and_Meleager_Hunt_the_Calydonian_Boar.jpg",
                            "wiki", 
                            "Jan_Fyt_and_Pieter_Thijs_-_Atalanta_and_Meleager_Hunt_the_Calydonian_Boar.jpg", 
                            "Atalanta and Meleager Hunt the Calydonian Boar, <br/>1648, Jan Fyt and Pieter Thijs, Flemish"); 
    insert_into_images("horsemen/French_knights_jousting_-_Froissarts_Chronicles_Volume_IV_part_1_1470-1475_f.19v_-_BL_Harley_MS_4379.jpg",
                            "wiki", 
                            "French_knights_jousting_-_Froissart%27s_Chronicles_(Volume_IV,_part_1)_(1470-1475),_f.19v_-_BL_Harley_MS_4379.jpg", 
                            "Joust between Pierre de Courtenay and the Sire de Clary, <br/>cr. 1470-5, Flemish"); 
    insert_into_images("horsemen/Bernardo_OHiggins_Jose_de_San_Martin.jpeg",
                            "wiki", 
                            "Estatua_de_Bernardo_O%27Higgins_y_José_de_San_Martín_en_Templo_Votivo_de_Maipú.JPG", 
                            "The Statue Of Bernardo O'Higgins and José de San Martín, <br/>1968, Galvarino Ponce Morel, Maipú, Chile"); 
    insert_into_images("horsemen/Paulus_van_Hillegaert_I_001.jpg",
                            "wiki", 
                            "Paulus_van_Hillegaert_(I)_001.jpg", 
                            "The Princes of Orange and their Families on Horseback, Riding Out from The Buitenhof, The Hague, <br/>1621-2, Pauwels van Hillegaert, Dutch"); 
    insert_into_images("horsemen/Prins_Maurits_en_prins_Frederik_Hendrik_te_paard_Rijksmuseum_SK-A-568.jpeg",
                            "wiki", 
                            "Prins_Maurits_en_prins_Frederik_Hendrik_te_paard_Rijksmuseum_SK-A-568.jpeg", 
                            "Princes Maurits and Frederik Hendrik on horseback, <br/>1630-5, Pauwels van Hillegaert, Dutch"); 
    insert_into_images("horsemen/Prins_Frederik_Hendrik_te_paard.jpeg",
                            "wiki", 
                            "Prins_Frederik_Hendrik_te_paard_voor_de_vesting_%27s-Hertogenbosch,_1629_Rijksmuseum_SK-A-4112.jpeg", 
                            "Prince Frederik Hendrik on horseback outside the fortifications of 's-Hertogenbosch, <br/>1632-5, Pauwels van Hillegaert, Dutch"); 
    insert_into_images("horsemen/478551-1409327906.jpg",
                            "RC", 
                            "400100", 
                            "The Battle of Nördlingen, <br/>1634-5, Jan van den Hoecke, Flemish");   
    insert_into_images("horsemen/Portrait_of_Sebastian_Vrancx.jpg",
                            "wiki", 
                            "Portrait_of_Sebastian_Vrancx.jpg", 
                            "Portrait of Sebastiaan Vrancx, <br/>1615-41, Anthony van Dyck, Flemish"); 
    insert_into_images("horsemen/Peter_Paul_Rubens_-_Portret_van_Peeter_Snayers.jpg",
                            "wiki", 
                            "Peter_Paul_Rubens_-_Portret_van_Peeter_Snayers.jpg", 
                            "Portrait of Peeter Snayers, <br/>cr. 1626, Peter Paul Rubens, Flemish"); 
    insert_into_images("horsemen/Snayers_Pieter_-_Cavalry_Skirmish_-_Google_Art_Project.jpg",
                            "wiki", 
                            "Snayers,_Pieter_-_Cavalry_Skirmish_-_Google_Art_Project.jpg", 
                            "Cavalry Skirmish, <br/>cr.1610-41, Peter Snayers, Flemish"); 
    insert_into_images("horsemen/Peter_Paul_Rubens_Pieter_Snayers_-_Henry_IV_at_the_battle_of_Ivry.jpg",
                            "wiki", 
                            "Peter_Paul_Rubens,_Pieter_Snayers_-_Henry_IV_at_the_battle_of_Ivry.jpg", 
                            "Henri IV at the battle of Ivry, <br/>1624-6, Peter Paul Rubens and Peter Snayers, Flemish"); 
    insert_into_images("horsemen/Het_afdanken.jpg",
                            "wiki", 
                            "Het_afdanken_der_waardgelders_door_prins_Maurits_op_de_Neude_te_Utrecht,_31_juli_1618_(Joost_Cornelisz._Droochsloot,_1625).jpg", 
                            "The disbanding of the 'waardgelders' by Prince Maurits in Utrecht, 1618, <br/>Joost Cornelisz Droochsloot, 1625, Dutch");  
    insert_into_images("horsemen/VaclavGelnhausenovekodexu.jpg",
                            "wiki", 
                            "VaclavGelnhausenovekodexu.jpg", 
                            "Wenceslaus I of Bohemia, <br/>early 15th century, Iglau, Bohemia, now Jihlava, Czech Republic");  
    insert_into_images("horsemen/Roger_II_Sicily.jpg",
                            "wiki", 
                            "Roger_II_Sicily.jpg", 
                            "Roger II of Sicily from the 'Liber ad honorem Augusti' of Petrus of Ebulo, <br/>1196, Palermo, Sicily");  
    insert_into_images("horsemen/1191_-_Fridrich_Barbarossa.jpg",
                            "wiki", 
                            "1191_-_Fridrich_Barbarossa.jpg", 
                            "Crusaders of Frederick Barbarossa from the 'Liber ad honorem Augusti' of Petrus of Ebulo, <br/>1196, Palermo, Sicily");  
    insert_into_images("horsemen/Diepold_Schweinspeunt.jpg",
                            "wiki", 
                            "Diepold_Schweinspeunt.jpg", 
                            "Diepold from Schweinspeunt from the 'Liber ad honorem Augusti' of Petrus of Ebulo, <br/>1196, Palermo, Sicily");  
    insert_into_images("horsemen/Arte_De_Athletica_V2_4a.jpg",
                            "wiki", 
                            "Arte_De_Athletica_V2_4a.jpg", 
                            "Illustration of 'The Art of Athletics' by Paulus Hector Mair, <br/>mid 16th century, Augsburg, Holy Roman Empire");  
    insert_into_images("horsemen/B_Valladolid_93.jpg",
                            "wiki", 
                            "B_Valladolid_93.jpg", 
                            "Four Horsemen Of Apocalypse, illustration of 'Beato of Valcavado', <br/>970, Oveco, Palencia, Al-Andalus (now Spain)");  
    insert_into_images("horsemen/B_Facundus_240.jpg",
                            "wiki", 
                            "B_Facundus_240.jpg", 
                            "Four Horsemen Of Heaven, illustration of 'Beato of Valcavado', <br/>1047, Beato of Facundus, León, Al-Andalus (now Spain)");  
    insert_into_images("horsemen/B_Facundus_135.jpg",
                            "wiki", 
                            "B_Facundus_135.jpg", 
                            "Four Horsemen Of Apocalypse, illustration of 'Beato of Valcavado', <br/>1047, Beato of Facundus, León, Al-Andalus (now Spain)");  
    insert_into_images("horsemen/Barb372-100.png",
                            "Digital Vatican Library", 
                            "https://digi.vatlib.it/view/MSS_Barb.gr.372", 
                            "Saint Constantine the Great as warrior, illustration of 'Barberini psalter', <br/>11th century, Constantinople (?), Byzantine Empire");  
    insert_into_images("horsemen/Barb372-112.png",
                            "Digital Vatican Library", 
                            "https://digi.vatlib.it/view/MSS_Barb.gr.372", 
                            "Vision of Saint Procopius, illustration of 'Barberini psalter', <br/>11th century, Constantinople (?), Byzantine Empire");  
    insert_into_images("horsemen/Barb372-166.png",
                            "Digital Vatican Library", 
                            "https://digi.vatlib.it/view/MSS_Barb.gr.372", 
                            "Vision of Saint Eustathius, illustration of 'Barberini psalter', <br/>11th century, Constantinople (?), Byzantine Empire");
    insert_into_images("horsemen/Liber_ad_honorem_Augusti_f105r.jpg",
                            "wiki", 
                            "Liber_ad_honorem_Augusti_f105r.jpg", 
                            "The enthronement of emperor Henry VI, illustration of 'Liber ad honorem Augusti' by Peter of Eboli, <br/>1196, Palermo, Sicily");  
    insert_into_images("horsemen/Diepold_Schweinspeunt.jpg",
                            "wiki", 
                            "Diepold_Schweinspeunt.jpg", 
                            "Portrait of Diepold von Schweinspeunt, illustration of 'Liber ad honorem Augusti' by Peter of Eboli, <br/>1196, Palermo, Sicily");  
    insert_into_images("horsemen/1191_-_Fridrich_Barbarossa.jpg",
                            "wiki", 
                            "1191_-_Fridrich_Barbarossa.jpg", 
                            "Frederick Barbarossa and his crusaders, illustration of 'Liber ad honorem Augusti' by Peter of Eboli, <br/>1196, Palermo, Sicily");
    insert_into_images("horsemen/La_Spezia_-_Giuseppe_Garibaldi.jpg",
                            "wiki", 
                            "La_Spezia_-_Giuseppe_Garibaldi.jpg", 
                            "Monument to Giuseppe Garibaldi, <br/>1913, Antonio Garella, La Spezia, Italy");
    insert_into_images("horsemen/Provincia_di_Prato-Stemma.png",
                            "wikipedia.org", 
                            "https://it.wikipedia.org/wiki/File:Provincia_di_Prato-Stemma.png", 
                            "Coat of arms of the province of Prato, <br/>Tuscany, Italy");
    insert_into_images("horsemen/AlexanderSarcophaguslionhunt.jpg",
                            "dosseman @ pbase.com", 
                            "https://www.pbase.com/dosseman/image/39181465", 
                            "Alexander sarcophagus, long side showing a lion hunt, with (l-r) Hephaestion, Abdalonymos and Alexander the Great, <br/>circa 320 BC, Ionian or Rhodian workmanchip, Hellenistic");    
    insert_into_images("horsemen/Battle_of_Issus.jpg",
                            "wiki", 
                            "Battle_of_Issus.jpg", 
                            "Mosaic showing the battle of Issus, <br/>circa 100 BC, Pompeii, Roman empire, perhaps after an earlier Greek painting of Philoxenus of Eretria (4th-3rd century BC)");  
    insert_into_images("horsemen/AlexanderSarcophagus1.jpg",
                            "wiki", 
                            "AlexanderSarcophagus1.jpg", 
                            "Alexander sarcophagus, long side showing the battle of Issus, <br/>circa 320 BC, Ionian or Rhodian workmanchip, Hellenistic");
    insert_into_images("horsemen/William_Blake_-_Death_on_a_Pale_Horse_-_Butlin_517.jpg",
                            "wiki", 
                            "William_Blake_-_Death_on_a_Pale_Horse_-_Butlin_517.jpg", 
                            "Death on a Pale Horse (Fourth Horseman of the Apocalypse), <br/>cr. 1800, William Blake, England");
    insert_into_images("horsemen/Vasiliy_Korens_Apocalypse_p.22_-_Horsemen.jpg",
                            "wiki", 
                            "Vasiliy_Koren%27s_Apocalypse_p.22_-_Horsemen.jpg", 
                            "Four Horsemen of the Apocalypse, illustration of the Koren Picture-Bible for poor people, <br/>1692-6, Vasily Koren, Moscow");
    insert_into_images("horsemen/Second_Horseman_Battistero_di_Padova.jpg",
                            "wiki", 
                            "Second_Horseman,_Battistero_di_Padova.jpg", 
                            "Second Horseman of the Apocalypse, fresco in the Baptistry, <br/>14th century, Giusto de' Menabuoi, Padua, Italy");
    insert_into_images("horsemen/Liber_Floridus_musee_Conde_MS724_-_folio11v.jpg",
                            "wiki", 
                            "Liber_Floridus,_musée_Condé,_MS724_-_folio11v.jpg", 
                            "Four Horsemen of the Apocalypse, illustration of Liber Floridus par Lambert de Saint-Omer, <br/>15th century, Jean Mansel, France");
    insert_into_images("horsemen/John_Hamilton_Mortimer_-_Death_on_a_Pale_Horse_-_Google_Art_Project.jpg",
                            "wiki", 
                            "John_Hamilton_Mortimer_-_Death_on_a_Pale_Horse_-_Google_Art_Project.jpg", 
                            "Death on a Pale Horse (Fourth Horseman of the Apocalypse), <br/>cr. 1775, John Hamilton Mortimer, England");
    insert_into_images("horsemen/First_Horseman_Battistero_di_Padova.jpg",
                            "wiki", 
                            "First_Horseman,_Battistero_di_Padova.jpg", 
                            "First Horseman of the Apocalypse, fresco in the Baptistry, <br/>14th century, Giusto de' Menabuoi, Padua, Italy");
    insert_into_images("horsemen/Elizabeth_Day_McCormick_Apocalypse_f51r_-_Second_Horseman.jpg",
                            "wiki", 
                            "Elizabeth_Day_McCormick_Apocalypse,_f51r_-_Second_Horseman.jpg", 
                            "Second Horseman of the Apocalypse, illustration of Elizabeth Day McCormick Apocalypse, <br/>17th century, Greek");
    insert_into_images("horsemen/Douce_Apocalypse_-_Bodleian_Ms180_-_p.014_Second_Horseman.jpg",
                            "wiki", 
                            "Douce_Apocalypse_-_Bodleian_Ms180_-_p.014_Second_Horseman.jpg", 
                            "Second Horseman of the Apocalypse, illustration of Douce Apocalypse, <br/>1265-70, England");
    insert_into_images("horsemen/B_Osma_85v.jpg",
                            "wiki", 
                            "B_Osma_85v.jpg", 
                            "Four Horsemen of the Apocalypse, illustration of Burgo de Osma, <br/>1086, Martinus, Castille-et-León, Spain");
    insert_into_images("horsemen/Apokalipsis_trekhtolkoviy_1909_13_-_First_seal.jpg",
                            "wiki", 
                            "Apokalipsis_trekhtolkoviy_(1909)_13_-_First_seal.jpg", 
                            "First Horseman of the Apocalypse, book of Apocalypse illustration, <br/>1909 (print of a manuscript that dates to 1600-1650), Moscow");
    insert_into_images("horsemen/ApocalypseStSeverFol108v109r4Horsemen.jpg",
                            "wiki", 
                            "ApocalypseStSeverFol108v109r4Horsemen.jpg", 
                            "Four Horsemen of the Apocalypse, illustration of the Apocalypse of Saint-Sever, <br/>11th century, French");
    insert_into_images("horsemen/184_MS_65_F90_V.jpg",
                            "wiki", 
                            "184_MS_65_F90_V.jpg", 
                            "Fourth Horseman of the Apocalypse, illustration of The Very Rich Hours of the Duke of Berry, <br/>1411-6, Jean Colombe, Paris, France");
    insert_into_images("horsemen/Death_on_the_Pale_Horse_by_B.West_1817.jpg",
                            "wiki", 
                            "Death_on_the_Pale_Horse_by_B.West_(1817).jpg", 
                            "Death on the Pale Horse, <br/>1817, Benjamin West, England (artist born in the U.S.A.)");
    insert_into_images("horsemen/Saint_Demetrius_bulgarian_icon.jpg",
                            "wiki", 
                            "Saint_Demetrius_(bulgarian_icon).jpg", 
                            "Saint Demetrius, <br/>1824, Bulgaria");
    insert_into_images("horsemen/Saint_Demetrius_school_of_Andreas_Ritzos_16th_c._Pushkin_museum.jpg",
                            "wiki", 
                            "Saint_Demetrius,_school_of_Andreas_Ritzos_(16th_c.,_Pushkin_museum).jpg", 
                            "Saint Demetrius, <br/>1500-50, school of Andreas Ritzos, Macedonia");
    insert_into_images("horsemen/Miracle_of-Dimiltri_Solunski.jpg",
                            "wiki", 
                            "Чудо_Дмитрия_Солунского.jpg", 
                            "Saint Demetrius, <br/>18th century, Russia");
    insert_into_images("horsemen/MiracleOfSaintGeorgeAndSaintDimitri.jpg",
                            "wiki", 
                            "Чудо_Георгия_о_змие_и_чудо_Димитрия_Солунского.jpg", 
                            "Saint Demetrius And Saint George, <br/>1670, Nikita Pavlovec, Moscow, Russia");
    insert_into_images("horsemen/SaintIlia.jpeg",
                            "wiki", 
                            "Огненное_восхождение_пророка_Илии_многочастная_1800.jpeg", 
                            "Military Saints, <br/>1800, Russia");
    insert_into_images("horsemen/St_Dmitrij_02.jpg",
                            "wiki", 
                            "St_Dmitrij_02.jpg", 
                            "Saint Demetrius, <br/>17th century, Bulgaria");
    insert_into_images("horsemen/St_Dmitrij_03.jpg",
                            "wiki", 
                            "St_Dmitrij_03.jpg", 
                            "Saint Demetrius of Thessaloniki spearing king Kaloyan of Bulgaria, <br/>1500-50, Russia");
    insert_into_images("horsemen/Deisis_with_S.George_Greece.jpg",
                            "wiki", 
                            "Deisis_with_S.George_(Greece).jpg", 
                            "Deisis with Saint George and Saint Demetrius, <br/>16th century (?), Greece");
    insert_into_images("horsemen/Chanter_Angelos_Akotandos_-_St_George_on_Horseback_Slaying_the_Dragon_-_Google_Art_Project.jpg",
                            "wiki", 
                            "Chanter_Angelos_Akotandos_-_St_George_on_Horseback,_Slaying_the_Dragon_-_Google_Art_Project.jpg", 
                            "Saint George on Horseback, Slaying the Dragon, <br/>1425 - 1450, Angelos Akotandos, Cretan School, Byzantine");
    insert_into_images("horsemen/Miracle_of_st._Dmitry.jpg",
                            "wiki", 
                            "Miracle_of_st._Dmitry.jpg", 
                            "Saint Demetrius, <br/>early 19th century, Yaroslavl, Russia");
    insert_into_images("horsemen/Mary_with_George_and_Dimitry_Greece_1754.jpg",
                            "wiki", 
                            "Mary_with_George_and_Dimitry_(Greece,_1754).jpg", 
                            "Mary with Saint George and Saint Demetrius, <br/>1754, Greece");
    insert_into_images("horsemen/St._Demetrios_Killing_Soldier_and_Saving_Besieged_City_of_Thessalonica_3443941835.jpg",
                            "wiki", 
                            "St._Demetrios_Killing_Soldier_and_Saving_Besieged_City_of_Thessalonica_(3443941835).jpg", 
                            "St. Demetrios Killing Soldier and Saving Besieged City of Thessalonica, <br/>1852, Gallipoli, modern Turkey");
    insert_into_images("horsemen/Theodore_and_George_Military_Saints_3443905783.jpg",
                            "wiki", 
                            "Theodore_and_George,_Military_Saints_(3443905783).jpg", 
                            "Relief showing Military Saints Theodore and George, the exterior decor of a church, <br/>13th century, Amaseia, modern Turkey");
    insert_into_images("horsemen/ParthianHorseman.jpg",
                            "wiki", 
                            "ParthianHorseman.jpg", 
                            "Parthian horseman performing a shot, <br/>1660-1713, Jean Chardin, French/British");
    insert_into_images("horsemen/279383001.jpg",
                            "BM", 
                            "247021", 
                            "Silver bowl showing four hunters, <br/>460-479, Hephthalite");
    insert_into_images("horsemen/AN01559952_001_l.jpg",
                            "BM", 
                            "3584109", 
                            "Relief depicting warrior riding a rearing horse and a foot soldier, <br/>3rd-5th centuries, Yemen");
    insert_into_images("horsemen/spp290_horse_rider_statuette.png",
                            "sino-platonic.org", 
                            "http://www.sino-platonic.org/complete/spp290_horse_rider_statuette.pdf", 
                            "Sculpture of a horseman on a rearing horse, <br/>end of the 5th century, Alchon Hunnic, Northern Afghanistan");
    insert_into_images("horsemen/Sukhra_defeating_the_Hephthalites.jpg",
                            "Met", 
                            "452176", 
                            "Sukhra's Victory over the Hephthalites in 486-8 (detail), illustration of Shahnameh, <br/>cr. 1530–35, Abu'l Qasim Firdausi, Tabriz, Persia");
    insert_into_images("horsemen/DP102381.jpg",
                            "Met", 
                            "255157", 
                            "Terracotta hydria (water jar) with two horsemen, <br/>cr. 520–510 BC, Caere, Etruria");
    insert_into_images("horsemen/26738428861_2078b5b6c8_b.jpg",
                            "hiveminer.com", 
                            "https://hiveminer.com/Tags/hydria%2Cpottery", 
                            "Terracotta hydria showing battle of Greeks and Amazons (Amazonomachy), <br/>cr. 325-300 BC, Attic style, Kastri (Amphipolis), Central Macedonia, Greece");
    insert_into_images("horsemen/etst-2014-0012-Abb-05.jpg",
                            "degruyter.com", 
                            "https://www.degruyter.com/view/j/etst.2014.17.issue-2/etst-2014-0012/graphic/etst-2014-0012-Abb-05.jpg", 
                            "Terracotta hydria showing hare hunt, <br/>6th century BC, Caere, Etruria");
    insert_into_images(
        "horsemen/Pittore_di_amphiaraos_gruppo_pontico_oinochoe_etrusca_con_cavalieri_al_galoppo_dalla_177_della_necr._dellosteria_540-510_ac_ca.jpg",
                            "wiki", 
                            "Pittore_di_amphiaraos,_gruppo_pontico,_oinochoe_etrusca_con_cavalieri_al_galoppo,_dalla_177_della_necr._dell%27osteria,_540-510_ac_ca.jpg", 
                            "Oinochoe showing galloping cavalrymen, <br/>540-510 BC, Etruria");
    insert_into_images("horsemen/3565192353_628d7ef0bd_c.jpg",
                            "peterjr1961 @ flickr", 
                            "https://www.flickr.com/photos/peterjr1961/3565192353", 
                            "Equestrian statue depicting Cuban patriot and author José Martí, <br/>cr. 1958, Anna Vaughn Hyatt Huntington, Central Park, New York, U.S.A.");
    insert_into_images("horsemen/3565212709_60f4c31fb3_c.jpg",
                            "peterjr1961 @ flickr", 
                            "https://www.flickr.com/photos/peterjr1961/3565212709", 
                            "Equestrian statue depicting Argentine general José de San Martín, <br/>replica of a statue by French sculptor Louis Joseph Daumas, 1863, Central Park, New York, U.S.A.");
    insert_into_images("horsemen/apulia_urn.jpg",
                            "szepmuveszeti.hu", 
                            "http://www2.szepmuveszeti.hu/antik_gyujtemeny/evszak_mutargya/evszak_en.php?id=643", 
                            "Krater showing the Duel of Life and Death (Etruscan symbolism), <br/>cr. 320-280 BC, Canosa, Apulia");
    insert_into_images("horsemen/Avesalom_palatina.jpg",
                            "wiki", 
                            "Avesalom_palatina.jpg", 
                            "The lament of King David over his son Absalom (detail), <br/>cr. 1832, Santi Cardini and Pietro Casamassima, Palermo, Sicily");
    insert_into_images("horsemen/20217899123_bcb314bdda_b.jpg",
                            "jjamv @ flickr", 
                            "https://www.flickr.com/photos/jjamv/20217899123", 
                            "The lament of King David over his son Absalom (detail), <br/>cr. 1832, Santi Cardini and Pietro Casamassima, Palermo, Sicily");
    insert_into_images("horsemen/Exarchate_of_Ravenna_600_AD.png",
                            "wiki", 
                            "Exarchate_of_Ravenna_600_AD.png", 
                            "Map of Exarchate of Ravenna in 600 AD");
    insert_into_images("horsemen/Byzantine_and_Sassanid_Empires_in_600_CE.png",
                            "wiki", 
                            "Byzantine_and_Sassanid_Empires_in_600_CE.png", 
                            "Map of Byzantine and Sassanid Empires in 600 AD");
    insert_into_images("horsemen/Georgy_capp.jpeg",
                            "wiki", 
                            "Georgy_capp.JPG", 
                            "Saint George and Saint Theodore of Amasea, killing the dragon, Frescoes on a wall of cave church, <br/>12th century, Yilanli Church, Goreme, Cappadocia, Turkey");
    insert_into_images("horsemen/JohannesFresken.jpg",
                            "wiki", 
                            "JohannesFresken.jpg", 
                            "Saint George and Saint Theodore of Amasea, killing the dragons, Frescoes on a wall of cave church, <br/>cr. 1212, Saint John's Church, Gülşehir, Cappadocia, Turkey");
    insert_into_images("horsemen/louvre-saint-georges-combattant-dragon.jpg",
                            "Le Louvre", 
                            "https://www.louvre.fr/en/oeuvre-notices/saint-george-and-dragon", 
                            "Relief showing Saint George fighting the dragon, <br/>1509-10, Michel Colombe, Tours, France");
    insert_into_images("horsemen/St_Theodore_detail_on_Campiello_dellAnconeta.jpeg",
                            "wiki", 
                            "St_Theodore_detail_on_Campiello_dell%27Anconeta.JPG", 
                            "Relief showing Theodore of Amasea (or Saint George?) fighting the dragon, <br/>?, Campiello dell'Anconeta, Cannaregio, Venice");
    insert_into_images("horsemen/1georg_6.jpg",
                            "wga.hu", 
                            "https://www.wga.hu/html_m/d/donatell/1_early/orsanmic/1georg_6.html", 
                            "Saint George and the Dragon, <br/>cr. 1416, Donatello, Florence, Italy");
    insert_into_images("horsemen/Sv_Flor_i_Lavr_16v_Novgorodskie_zemli_Sobranie_S.N.png",
                            "wiki", 
                            "Sv_Flor_i_Lavr_16v_Novgorodskie_zemli_Sobranie_S.N.png", 
                            "Saint Flor and Lavr, <br/>16th century, Novgorod, Russia");
    insert_into_images("horsemen/Paolo_Uccello_016.jpg",
                            "wiki", 
                            "Paolo_Uccello_016.jpg", 
                            "The Decisive Attack of Micheletto Attendolo at San Romano, <br/>1438, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/Uccello_Battle_of_San_Romano_Uffizi.jpg",
                            "wiki", 
                            "Uccello_Battle_of_San_Romano_Uffizi.jpg", 
                            "Niccolò Mauruzi da Tolentino unseats Bernardino della Ciarda at the Battle of San Romano, <br/>cr. 1436-40, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/Piero_della_Francesca_038.jpg",
                            "wiki", 
                            "Piero_della_Francesca_038.jpg", 
                            "The Battle of Milvian Bridge (between the Roman Emperors Constantine I and Maxentius, in 312), <br/>cr. 1452-66, Piero della Francesca, Arezzo, Italy");
    insert_into_images("horsemen/Piero_della_Francesca_021.jpg",
                            "wiki", 
                            "Piero_della_Francesca_021.jpg", 
                            "The Battle of Nineveh (between Khosrau II and Heraclius, in 627), <br/>cr. 1452-66, Piero della Francesca, Arezzo, Italy");
    insert_into_images("horsemen/Schwabhausen_bei_Landsberg_Heilig_Kreuz_559.jpg",
                            "wiki", 
                            "Schwabhausen_bei_Landsberg_Heilig_Kreuz_559.jpg", 
                            "The Battle of the Milvian Bridge, <br/>cr. 1779, Vitus Felix Rigl, Schwabhausen bei Landsberg, Bavaria, Germany");
    insert_into_images("horsemen/Lingelbach_Johannes_-_Schlacht_an_der_Milvischen_Brücke_-_c._1650.jpg",
                            "wiki", 
                            "Lingelbach,_Johannes_-_Schlacht_an_der_Milvischen_Brücke_-_c._1650.jpg", 
                            "The Battle of the Milvian Bridge, <br/>cr. 1650, Johannes Lingelbach, Dutch school");
    insert_into_images("horsemen/Figural_composition_designed_in_1622_by_Peter_Paul_Rubens_-_Tapestry_showing_the_Triumph_of_Constantine_over_Maxentius_at_the_Battle_of_the_Milvian_Bridge_-_Google_Art_Project.jpg",
                            "wiki", 
                            "Figural_composition_designed_in_1622_by_Peter_Paul_Rubens_-_Tapestry_showing_the_Triumph_of_Constantine_over_Maxentius_at_the_Battle_of_the_Milvian_Bridge_-_Google_Art_Project.jpg", 
                            "Tapestry showing the Triumph of Constantine over Maxentius at the Battle of the Milvian Bridge, <br/>1622, Peter Paul Rubens, Flemish");
    insert_into_images("horsemen/Constantine_the_Great_at_the_Milvian_Bridge.jpg",
                            "wiki", 
                            "Constantine_the_Great_at_the_Milvian_Bridge.jpg", 
                            "Constantine the Great at the Milvian Bridge, <br/>cr. 1640, After Giulio Romano, Flemish");
    insert_into_images("horsemen/Battle_of_the_Milvian_Bridge_by_Giulio_Romano_1520-24.jpg",
                            "wiki", 
                            "Battle_of_the_Milvian_Bridge_by_Giulio_Romano,_1520-24.jpg", 
                            "The Battle of the Milvian Bridge, <br/>1520-4, Giulio Romano, designed by Raphael, Vatican, Italy");
    insert_into_images("horsemen/Battle_at_the_Milvian_Bridge_Gerard_Audran_after_Charles_Le_Brun_1666.jpg",
                            "wiki", 
                            "Battle_at_the_Milvian_Bridge,_Gérard_Audran_after_Charles_Le_Brun,_1666.jpg", 
                            "The Battle of the Milvian Bridge, <br/>1666, Gérard Audran after Charles Le Brun, France");
    insert_into_images("horsemen/ArcoCostTondiAdrS3-4.jpg",
                            "wiki", 
                            "ArcoCostTondiAdrS3-4.jpg", 
                            "Arch of Constantine (detail), <br/>315, Rome");
    insert_into_images("horsemen/Arco_di_Costantino_-_Roma_34.jpg",
                            "wiki", 
                            "Arco_di_Costantino_-_Roma_34.jpg", 
                            "Arch of Constantine (detail), <br/>315, Rome");
    insert_into_images("horsemen/Arco_de_Constantino_relieves._01.png",
                            "wiki", 
                            "Arco_de_Constantino_relieves._01.JPG", 
                            "Arch of Constantine (detail), <br/>315, Rome");
    insert_into_images("horsemen/Arc_de_Constantin_et_Colisee_Rome.jpg",
                            "wiki", 
                            "Arc_de_Constantin_et_Colisée_(Rome).jpg", 
                            "Arch of Constantine and Colosseum in the background, <br/>315, Rome");
    insert_into_images("horsemen/682px-Reichenkirchen_St._Michael_Deckenmalerei_056.jpg",
                            "wiki", 
                            "Reichenkirchen_St._Michael_Deckenmalerei_056.jpg", 
                            "The Battle of the Milvian Bridge, <br/>1755-6, Franz Joseph Aiglsdorfer, Fraunberg, Bavaria, Germany");
    insert_into_images("horsemen/46520978995_8e302c7673_h.jpg",
                            "Dan Diffendale @ flickr", 
                            "https://www.flickr.com/photos/7945858@N08/46520978995",
                            "Amphora with riding youths, <br/>cr. 550-540 BC, Reggio di Calabria");
    insert_into_images("horsemen/47435986421_78725109a2_h.jpg",
                            "Dan Diffendale @ flickr", 
                            "https://www.flickr.com/photos/7945858@N08/47435986421", 
                            "Panathenaic (?) amphora with a horseback acrobat, <br/>cr. 320-300 BC, Lucanian school, south of Italy");
    insert_into_images("horsemen/Naqsh-e_Rostam_III_3291730501.jpg",
                            "wiki", 
                            "Naqsh-e_Rostam_III_(3291730501).jpg", 
                            "Equestrian reliefs of Bahram II,  necropolis of Naqsh-e Rostam, <br/>cr. 276–293, Sasanian, Naqsh-e Rostam, Persia");
    insert_into_images("horsemen/Naghsh-e_rostam_Iran_2016-09-24_DD_10.jpg",
                            "wiki", 
                            "Naghsh-e_rostam,_Irán,_2016-09-24,_DD_10.jpg", 
                            "Equestrian reliefs of Bahram II,  necropolis of Naqsh-e Rostam, <br/>cr. 276–293, Sasanian, Naqsh-e Rostam, Persia");
    insert_into_images("horsemen/IranNaqshIRustamAchGr2.jpg",
                            "wiki", 
                            "IranNaqshIRustamAchGr2.jpg", 
                            "Necropolis of Naqsh-e Rostam, with two Achaemenid tombs and three Sasanian reliefs, <br/>5th century BC and cr. 276–293, Achaemenid and Sasanian, Naqsh-e Rostam, Persia");
    insert_into_images("horsemen/The_Master_of_Marradi_A_Cassone_panel_with_Caesars_army_triumphing_in_battle.jpg",
                            "wiki", 
                            "The_Master_of_Marradi_A_Cassone_panel_with_Caesar%27s_army_triumphing_in_battle.jpg", 
                            "A cassone panel with Caesar's army triumphing in battle, <br/>cr. 1450-1500, Florence, Italy");
    insert_into_images("horsemen/Andrea_del_Verrocchio_-_The_Battle_of_Pydna_-_WGA24993.jpg",
                            "wiki", 
                            "Andrea_del_Verrocchio_-_The_Battle_of_Pydna_-_WGA24993.jpg", 
                            "A cassone panel with the Battle of Pydna, <br/>cr. 1475, Andrea Verrocchio, Florence, Italy");
    insert_into_images("horsemen/Hart_Hunting.jpg",
                            "wiki", 
                            "Hart_Hunting.jpg", 
                            "Hart-hunting with greyhounds and raches, illustration of The Hunting Book of Gaston Phebus, <br/>early 15th century, France");
    insert_into_images("horsemen/Gaston_Phoebus_2.jpg",
                            "wiki", 
                            "Gaston_Phoebus_2.jpg", 
                            "Deer-hunting with greyhounds, illustration of The Hunting Book of Gaston Phebus, <br/>early 15th century, France");
    insert_into_images("horsemen/Raphael_-_Heliodore_chasse_du_Temple.jpg",
                            "wiki", 
                            "Raphaël_-_Héliodore_chassé_du_Temple.jpg", 
                            "Expulsion of Heliodorus from the temple (detail), <br/>1511, fresco, Raphael, Vatican, Italy");
    insert_into_images("horsemen/Cacciata_di_eliodoro_dal_tempio_01.jpg",
                            "wiki", 
                            "Cacciata_di_eliodoro_dal_tempio_01.jpg", 
                            "Expulsion of Heliodorus from the temple, <br/>1511, fresco, Raphael, Vatican, Italy");
    insert_into_images("horsemen/apollonio-di-giovanni-1095517.jpg",
                            "Dorotheum GmbH & Co KG", 
                            "https://www.dorotheum.com/en/l/1095517/", 
                            "Cassone panel depicting the battle of Pharsalus, <br/>1438-1465, Apollonio di Giovanni, Florence, Italy");
    insert_into_images("horsemen/ag-obj-6082-002-pub-large.jpg",
                            "Yale University Art Gallery", 
                            "https://artgallery.yale.edu/collections/objects/6082", 
                            "Cassone with painted front panel depicting the battle of Greeks and Amazons before the walls of Troy, <br/>cr. 1460, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/ag-obj-6082-004-pub-large.jpg",
                            "Yale University Art Gallery", 
                            "https://artgallery.yale.edu/collections/objects/6082", 
                            "Cassone with painted front panel depicting the battle of Greeks and Amazons before the walls of Troy (detail), <br/>cr. 1460, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/Maestro_di_anghiari_presa_di_pisa_national_gallery_of_ireland.jpg",
                            "wiki", 
                            "Maestro_di_anghiari,_presa_di_pisa,_national_gallery_of_ireland.jpg", 
                            "Cassone panel depicting the taking of Pisa, <br/>cr. 1460-70, Florence, Italy");
    insert_into_images("horsemen/Maestro_di_anghiari_battaglia_di_anghiari_national_gallery_of_ireland.jpg",
                            "wiki", 
                            "Maestro_di_anghiari,_battaglia_di_anghiari,_national_gallery_of_ireland.jpg", 
                            "Cassone panel depicting the battle of Anghiari, <br/>cr. 1460-70, Florence, Italy");
    insert_into_images("horsemen/DP106672.jpg",
                            "Met", 
                            "192693", 
                            "Cassone with painted front panel depicting the Conquest of Trebizond, <br/>cr. 1461-5, workshop of Apollonio di Giovanni di Tomaso, Florence, Italy");
    insert_into_images("horsemen/DP106674.jpg",
                            "Met", 
                            "192693", 
                            "Cassone with painted front panel depicting the Conquest of Trebizond (detail), <br/>cr. 1461-5, workshop of Apollonio di Giovanni di Tomaso, Florence, Italy");
    insert_into_images("horsemen/5737209588_46bd99e5fa_b.jpg",
                            "The Seattle Art Museum", 
                            "http://art.seattleartmuseum.org/objects/13945/episodes-from-the-aeneid", 
                            "Cassone panel depicting episodes from the Aeneid, <br/>cr. 1470, Paolo Uccello, Florence, Italy");
    insert_into_images("horsemen/Maitre_des_Cassoni_Campana-_prise_dAthenes.jpg",
                            "wiki", 
                            "Maître_des_Cassoni_Campana-_prise_d%27Athènes.jpg", 
                            "Cassone panel depicting the taking of Athens, <br/>cr. 1510, Italy");
    insert_into_images("horsemen/La_chasse_de_Meleagre_Madrid_musee_du_Prado.jpg",
                            "wiki", 
                            "La_chasse_de_Méléagre,_Madrid,_musée_du_Prado.jpg", 
                            "The hunt of Meleager and Atalante, <br/>cr. 1634-9, French, painted in Rome");
    insert_into_images("horsemen/Rude-ChasseDeMeleagre.jpg",
                            "sculpturepublique.be", 
                            "http://www.sculpturepublique.be/1000b/Rude-ChasseDeMeleagre.htm", 
                            "The hunt of Meleager, <br/>?, François Rude (1784-1855), French");
    insert_into_images("horsemen/AN00072427_001_l.jpg",
                            "BM", 
                            "584032", 
                            "Battle of Adwa, with Emperor Menelik II and Saint George on rearing horses, <br/>1940-1949, Ethiopia");
    insert_into_images("horsemen/Kim.jpg",
                            "theeconomist @ instagram", 
                            "https://www.instagram.com/p/B3uI046AsxX/?igshid=1xaczsb8mvvb2", 
                            "Kim Jong Un, <br/>17 October 2019, Mount Paektu, North Korea");
    insert_into_images("horsemen/Brexit.jpg",
                            "britainbitesbackofficial @ facebook", 
                            "https://www.facebook.com/britainbitesbackofficial/posts/933028220429175", 
                            "Pro-Brexit poster, <br/>17 October 2019, England, United Kingdom");
    insert_into_images("horsemen/5654258234_cc8d4d72c1_h.jpg",
                            "britainbitesbackofficial @ facebook", 
                            "https://www.facebook.com/britainbitesbackofficial/posts/933028220429175", 
                            "Statue of Napoléon I, <br/>1865, Gabriel Vital Dubray, Rouen, France");
    insert_into_images("horsemen/Bolivarperu.jpeg",
                            "wiki", 
                            "Bolivarperu.JPG", 
                            "Statue of Simon Bolivar, <br/>1859, Adamo Tadolini, Lima, Peru");
    insert_into_images("horsemen/lakshmibai-ID62_l.jpg",
                            "dollsofindia.com", 
                            "https://www.dollsofindia.com/product/rani-lakshmibai-ID62.html", 
                            "Queen Lakshmibai, <br/>2014 or earlier, India");
    insert_into_images("horsemen/rani-jhansi-GA64_l.jpg",
                            "dollsofindia.com", 
                            "https://www.dollsofindia.com/product/people-posters/lakshmibai-rani-of-jhansi-reprint-on-paper-GA64.html", 
                            "Queen Lakshmibai, <br/>2014 or earlier, India");
    insert_into_images("horsemen/YaqubLeisSaffaridStatue.jpg",
                            "quora.com", 
                            "https://www.quora.com/How-did-Iran-manage-to-retain-their-Persian-heritage-while-Egypt-and-Syria-became-mostly-Arabic", 
                            "Statue of Ya'qub ibn al-Layth al-Saffar, <br/>?, Dezful, Iran");
    insert_into_images("horsemen/Sint-Joris_-_by_frank_wouters.jpg",
                            "wiki", 
                            "Sint-Joris_-_by_frank_wouters.jpg", 
                            "Statue of Saint George on top of Grote Markt 7 building, <br/>1893, Jef Lambeaux, Antwerp, Belgium");
    insert_into_images("horsemen/Meester_van_het_Mechelse_Sint-Jorisgilde_-_De_leden_van_het_gilde_van_de_grote_kruisboog_te_Mechelen_ca.1500_-_kmska_28-02-2010_13-43-37.jpg",
                             "wiki", 
                           "Meester_van_het_Mechelse_Sint-Jorisgilde_-_De_leden_van_het_gilde_van_de_grote_kruisboog_te_Mechelen_(ca.1500)_-_kmska_28-02-2010_13-43-37.jpg", 
                            "The Members of the Guild of the Grand Crossbow, with their patron Saint George and two saints, Saint Rombout and Saint Libertus, <br/>1495-8, Mechelen, Belgium");
    insert_into_images("horsemen/LiZicheng.png",
                            "wiki", 
                            "李自成行宫.png", 
                            "Statue of Li Zicheng, <br/>?, Yulin, Shaanxi, China");
    insert_into_images("horsemen/3703319083_e91f5be725_b.jpg",
                            "acullador @ flickr", 
                            "https://www.flickr.com/photos/acullador/3703319083", 
                            "Statue of Gabriela Silang, <br/>1971, José M. Mendoza, Makati City, Philippines");
    insert_into_images("horsemen/St_George_Melbourne.jpg",
                            "wiki", 
                            "St_George_Melbourne.jpg", 
                            "Statue of Saint George and The Dragon, <br/>1889, Joseph Edgar Boehm, Melbourne, Australia");
    insert_into_images("horsemen/St_George_and_The_Dragon.jpg",
                            "wiki", 
                            "St_George_and_The_Dragon.jpg", 
                            "Statue of Saint George and The Dragon, <br/>1887, Anton Dominik Fernkorn, Zagreb, Croatia");
    insert_into_images("horsemen/Germany-00481_-_St._George_and_the_Dragon_30249260381.jpg",
                            "wiki", 
                            "Germany-00481_-_St._George_and_the_Dragon_(30249260381).jpg", 
                            "Statue of Saint George and The Dragon, <br/>1855, August Kiss, Berlin, Germany");
    insert_into_images("horsemen/Estatua_de_San_Jorge_y_el_dragon.jpg",
                            "wiki", 
                            "Estatua_de_San_Jorge_y_el_dragón.jpg", 
                            "Statue of Saint George and The Dragon, <br/>1963, José Rodriguez, Cáceres, Spain");
    insert_into_images("horsemen/Slovakia-03212_-_St._George_32288601125.jpg",
                            "wiki", 
                            "Slovakia-03212_-_St._George_(32288601125).jpg", 
                            "Statue of Saint George and The Dragon, <br/>?, Bratislava, Slovakia");   
    insert_into_images("horsemen/Laxmibais_statue_in_Solapur.jpeg",
                            "wiki", 
                            "Laxmibai%27s_statue_in_Solapur.JPG", 
                            "Statue of Rani Lakshmibai, <br/>?, Solapur, India");   
    insert_into_images("horsemen/Beram_Maria_im_Fels_-_Heiliger_Georg.jpg",
                            "wiki", 
                            "Beram_Maria_im_Fels_-_Heiliger_Georg.jpg", 
                            "Saint George and The Dragon, <br/>1474, Vincent of Kastav, Beram, Croatia");   
    insert_into_images("horsemen/San_Giorgio_e_la_principessa_Antonio_Cicognara.jpg",
                            "wiki", 
                            "San_Giorgio_e_la_principessa_(Antonio_Cicognara).jpg", 
                            "Saint George and The Princess, <br/>1475, Antonio Cicognara, Ferrara (?), Italy");   
    insert_into_images("horsemen/Antwerpen_Grote_Markt_7_Huis_Spaengien_oeg4035_foto4_2014-12-14_11.23.jpg",
                            "wiki", 
                            "Antwerpen,_Grote_Markt_7_Huis_Spaengien_oeg4035_foto4_2014-12-14_11.23.jpg", 
                            "Grote Markt 7 building with the statue of Saint George on top, <br/>Antwerp, Belgium");   
    insert_into_images("horsemen/Gillis_Coignet_-_St_George_the_Great.jpg",
                            "wiki", 
                            "Gillis_Coignet_-_St_George_the_Great.jpg", 
                            "Saint George and The Dragon, <br/>1581, Gillis Coignet, Flemish school");   
    insert_into_images("horsemen/Sano_di_pietro_s.giorgio_da_pala_di_san_cristoforo_1444_ca._da_s._cristoforo_01.jpg",
                            "wiki", 
                            "Sano_di_pietro,_s.giorgio,_da_pala_di_san_cristoforo,_1444_ca.,_da_s._cristoforo,_01.JPG", 
                            "Saint George and The Dragon, <br/>Sano di Pietro, 1444, Siena, Italy");
    insert_into_images("horsemen/betty.jpg",
                            "Saint Louis Art Museum", 
                            "https://www.slam.org/collection/objects/23250/", 
                            "Betty, <br/>1988, Gerhard Richter, Dresden, East Germany");   
    insert_into_images("horsemen/four_horsewomen-1.jpg",
                            "Ben Garrison of GrrrGraphics political cartoons and art", 
                            "https://grrrgraphics.com/the-four-horsewomen-of-the-apocalypse", 
                            "Four Horsewomen of the Democrat Apocalypse, <br/>Ben Garrison, July 2019, U.S.A.");
    insert_into_images("horsemen/12_Estancia_de_Heliodoro_Encuentro_entre_León_Magno_y_Atila.jpg",
                            "wiki", 
                            "12_Estancia_de_Heliodoro_(Encuentro_entre_León_Magno_y_Atila).jpg", 
                            "The Meeting of Leo the Great and Attila, <br/>1514, fresco, Raphael, Vatican, Italy");
    insert_into_images("horsemen/Statua_Marco_Aurelio_Musei_Capitolini.jpeg",
                            "wiki", 
                            "Statua_Marco_Aurelio_Musei_Capitolini.JPG", 
                            "Equestrian Statue of Marcus Aurelius, <br/>cr. 175 AD, Rome");
    insert_into_images("horsemen/Bartolomeo_Colleoni_by_Andrea_del_Verrocchio.jpg",
                            "wiki", 
                            "Bartolomeo_Colleoni_by_Andrea_del_Verrocchio.jpg", 
                            "Equestrian statue of Bartolomeo Colleon, <br/>1480–88, Andrea del Verrocchio, Venice, Italy");
    insert_into_images("horsemen/Triumphzug_Kaiser_Maximilians_1.jpg",
                            "wiki", 
                            "Triumphzug_Kaiser_Maximilians_1.jpg", 
                            "Triumph of Emperor Maximilian I (detail), <br/>1526, Ulg Lis or Hans Burgkmair, Vienna, Holy Roman Empire");
    insert_into_images("horsemen/15508_22447.jpeg",
                            "europeana.eu", 
                            "https://www.europeana.eu/portal/en/record/15508/22447.html", 
                            "Project for an equestrian statue for Emperor Maximilian I, <br/>1509-10, Hans Burgkmair, Vienna, Holy Roman Empire");
    insert_into_images("horsemen/DP834039-scaled.jpg",
                            "Met", 
                            "431135", 
                            "Emperor Maximilian I on Horseback, <br/>1508-18, Hans Burgkmair, Vienna, Holy Roman Empire");
    insert_into_images("horsemen/charlesV_CL-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-162", 
                            "Emperor Charles V on Horseback, <br/>1538-45, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-147-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-147", 
                            "Charles, Duke of Orleans, on Horseback, <br/>1538-45, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-146-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-146", 
                            "Ferdinand I, king of Austria, on Horseback, <br/>1538-42, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-164-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-164", 
                            "Henry VIII, king of England, on Horseback, <br/>1538-48, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-156-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-156", 
                            "Francis I, king of France, on Horseback, <br/>1542-44, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-161-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-161", 
                            "Henry II, king of France, on Horseback, <br/>1542-43, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-161-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-161", 
                            "Henry II, king of France, on Horseback, <br/>1542-43, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/Philip_de_Lalaing_Count_of_Hoogstraten_by_Hans_Liefrinck_I_before_1550.jpg",
                            "RJK", 
                            "RP-P-1932-168", 
                            "Philip de Lalaing, Count of Hoogstraten, on Horseback, <br/>1544-73, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-155-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-155", 
                            "Emmanuel Philibert, duke of Savoy, on Horseback, <br/>1546-50, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1932-155-scaled.jpg",
                            "RJK", 
                            "RP-P-1932-160", 
                            "Emmanuel Philibert, duke of Savoy, on Horseback, <br/>1546-50, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");
    insert_into_images("horsemen/Hans_Liefrinck_001.jpg", 
                            "RJK", 
                            "RP-P-1932-179", 
                            "Henry VIII, king of England, on Horseback, <br/>1536-40, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");    
    insert_into_images("horsemen/RP-P-BI-6235B-scaled.jpg",
                            "RJK", 
                            "RP-P-BI-6235B", 
                            "Gertruida van Saksen, Robrecht I de Fries, Godfried Hunchback and Dirk V, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235I-1.jpg",
                            "RJK", 
                            "RP-P-BI-6235I", 
                            "Ada, Willem I, Floris IV and Willem II, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235C-1.jpg",
                            "RJK", 
                            "RP-P-BI-6235C", 
                            "Arnulf, Dirk III, Dirk IV and Floris I, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235-1.jpg",
                            "RJK", 
                            "RP-P-BI-6235", 
                            "Mary of Burgundy, Maximilian I, Philip the Fair and Charles V, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235F-1.jpg",
                            "RJK", 
                            "RP-P-BI-6235F", 
                            "Floris V, Jan I, Jan II and Willem III, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235D-1.jpg",
                            "RJK", 
                            "RP-P-BI-6235D", 
                            "Floris II, Dirk VI, Floris III and Dirk VII, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235AX-scaled.jpg",
                            "RJK", 
                            "RP-P-BI-6235AX", 
                            "Charles the Bold, Mary of Burgundy, Maximilian I, Philip the Fair and future Charles V, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-BI-6235A-scaled.jpg",
                            "RJK", 
                            "RP-P-BI-6235A", 
                            "Arnulf, Dirk III, Dirk IV en Floris I, <br/>1518, Jacob Cornelisz van Oostsanen, Amsterdam, Netherlands");
    insert_into_images("horsemen/437833205.jpeg",
                            "HAM", 
                            "317895", 
                            "Arthus, Charles the Great (Charlemagne), Godfrey of Bouillon (the Christian heroes on horseback), <br/>cr. 1520, Lucas van Leyden, Amsterdam, Netherlands");
    insert_into_images("horsemen/437833197.jpeg",
                            "HAM", 
                            "317895", 
                            "Joshua, David, Judas Maccabeus (the biblical heroes on horseback), <br/>cr. 1520, Lucas van Leyden, Amsterdam, Netherlands");
    insert_into_images("horsemen/437833201.jpeg",
                            "HAM", 
                            "317895", 
                            "Hector of Troy, Alexander of Macedon, Julius Caesar (the pagan heroes on horseback), <br/>cr. 1520, Lucas van Leyden, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-1932-144-2.jpg", 
                            "RJK", 
                            "RP-P-1932-144", 
                            "Philip II, king of Spain, on Horseback, <br/>1543-44, Cornelis Anthonisz (manner of) and Hans Liefrinck (I), Antwerp, Netherlands");    
    insert_into_images("horsemen/RP-P-BI-120-2.jpg", 
                            "RJK", 
                            "RP-P-BI-120", 
                            "Willem van Gulik, duke of Gelre, on Horseback, <br/>1538-42, Cornelis Anthonisz., Antwerp, Netherlands");    
    insert_into_images("horsemen/RP-P-1932-157-2.jpg", 
                            "RJK", 
                            "RP-P-1932-157", 
                            "John II, king of Portugal, on Horseback, <br/>1540-44, Cornelis Anthonisz (manner of) and Sylvester van Parijs, Antwerp, Netherlands");    
    insert_into_images("horsemen/Turkish_Horseman_with_sabre.jpg", 
                            "wiki", 
                            "Turkish_Horseman_with_sabre.jpg", 
                            "Turkish Horseman with sabre, <br/>cr. 1530, Niklas Stoer, Germany");    
    insert_into_images("horsemen/Turkish_Horseman_2.jpg", 
                            "wiki", 
                            "Turkish_Horseman_(2).jpg", 
                            "Turkish Horseman, <br/>cr. 1530, Niklas Stoer, Germany");    
    insert_into_images("horsemen/Turkish_Archer.jpg", 
                            "wiki", 
                            "Turkish_Archer.jpg", 
                            "Turkish Archer, <br/>cr. 1530, Niklas Stoer, Germany");    
    insert_into_images("horsemen/charles5.jpg", 
                            "wga.hu", 
                            "https://www.wga.hu/html_m/d/daucher/hans/charles5.html", 
                            "Charles V on Horseback, <br/>1522, Hans Daucher, Augsburg, Germany");    
    insert_into_images("horsemen/416786-1379493297.jpg", 
                            "RC", 
                            "612900", 
                            "Charles V, Holy Roman Emperor, on Horseback, <br/>cr. 1579-1637, Crispijn van de Passe, Netherlands");    
    insert_into_images("horsemen/Santiago_Matamoros_-_Valladolid_-_20140707.jpg", 
                            "wiki", 
                            "Santiago_Matamoros_-_Valladolid_-_20140707.jpg", 
                            "Santiago Matamoros, <br/>second half of 17th century, Juan de Ávila (1652-1702), church of Santiago Apóstol, Valladolid, Spain");   
    insert_into_images("horsemen/Santiago_Matamoro_Cordoba_Spain.jpeg", 
                            "wiki", 
                            "Santiago_Matamoro,_Cordoba,_Spain.JPG", 
                            "Santiago Matamoros, <br/>?, Mezquita Cathedral, Cordoba, Spain");   
    insert_into_images("horsemen/Santiago_Matamoros.jpeg", 
                            "wiki", 
                            "Santiago_Matamoros.JPG", 
                            "Santiago Matamoros, <br/>?, Altarpiece of the Chapel of St. John the Baptist and St. James, Cathedral of Burgos, Spain");   
    insert_into_images("horsemen/Santiago_de_Compostela_18e_iuwsk_byld_fan_Jakobus_de_Moarendeader.jpg", 
                            "wiki", 
                            "Santiago_de_Compostela,_18e_iuwsk_byld_fan_Jakobus_de_Moarendeader.jpg", 
                            "Santiago Matamoros, <br/>18th century, Altarpiece of Santiago de Compostela Cathedral, Spain");   
    insert_into_images("horsemen/Santiago_Museo_das_Peregrinacions_06-28a.jpg", 
                            "wiki", 
                            "Santiago,_Museo_das_Peregrinacións_06-28a.JPG", 
                            "Santiago Matamoros, <br/>17th century, ?, Spain");   
    insert_into_images("horsemen/Zaragoza_-_Casa_de_Miguel_Donlope_-_Estatua_de_Santiago_Matamoros.jpg", 
                            "wiki", 
                            "Zaragoza_-_Casa_de_Miguel_Donlope_-_Estatua_de_Santiago_Matamoros.jpg", 
                            "Santiago Matamoros, <br/>?, Zaragoza, Spain");   
    insert_into_images("horsemen/Ermua_-_Iglesia_de_Santiago_12.jpeg", 
                            "wiki", 
                            "Ermua_-_Iglesia_de_Santiago_12.JPG", 
                            "Santiago Matamoros, <br/>?, Ermua (Vizcaya), Spain");   
    insert_into_images("horsemen/Calahorra_-_Santiago_15.jpeg", 
                            "wiki", 
                            "Calahorra_-_Santiago_15.JPG", 
                            "Santiago Matamoros, <br/>?, Calahorra, La Rioja, Spain");   
    insert_into_images("horsemen/Madrid_-_Iglesia_Arzobispal_Castrense_10.jpg", 
                            "wiki", 
                            "Madrid_-_Iglesia_Arzobispal_Castrense_10.jpg", 
                            "Santiago Matamoros, <br/>?, Iglesia Arzobispal Castrense, Madrid, Spain");   
    insert_into_images("horsemen/Santiago_Matamoros_20120405.jpg", 
                            "wiki", 
                            "Santiago_Matamoros_20120405.jpg", 
                            "Santiago Matamoros, <br/>?, Losar de la Vera, Cáceres, Spain");   
    insert_into_images("horsemen/Baiona_-_Capela_da_Misericordia_22.jpeg", 
                            "wiki", 
                            "Baiona_-_Capela_da_Misericordia_22.JPG", 
                            "Santiago Matamoros, <br/>?, Capela da Misericordia, Baiona, Spain");   
    insert_into_images("horsemen/Sasamon_BURGOS_Iglesia_de_Santa_Maria_la_Real._47.jpg", 
                            "wiki", 
                            "Sasamón_(BURGOS)_Iglesia_de_Santa_María_la_Real._47.JPG", 
                            "Santiago Matamoros, <br/>16th century, Church of Santa María la Real, Sasamón, Burgos, Castile and León, Spain");
    insert_into_images("horsemen/Mataro_-_Hospital_de_Sant_Jaume_i_Santa_Magdalena_4.jpg", 
                            "wiki", 
                            "Mataró_-_Hospital_de_Sant_Jaume_i_Santa_Magdalena_4.jpg", 
                            "Santiago Matamoros, <br/>?, Hospital de Sant Jaume i Santa Magdalena, Mataró, Barcelona, Spain");
    insert_into_images("horsemen/Convento_de_las_Comendadoras_de_Santiago_Madrid_01.jpg", 
                            "wiki", 
                            "Convento_de_las_Comendadoras_de_Santiago_(Madrid)_01.jpg", 
                            "Santiago Matamoros, <br/>?, Convento de las Comendadoras de Santiago, Madrid, Spain");
    insert_into_images("horsemen/Colegio_Mayor_de_Santiago_el_Zebedeo8.jpeg", 
                            "wiki", 
                            "Colegio_Mayor_de_Santiago_el_Zebedeo8.JPG", 
                            "Santiago Matamoros, <br/>?, Colegio Mayor de Santiago el Zebedeo, Salamanca, Castilla y León, Spain");
    insert_into_images("horsemen/Burgos_-_Hospital_del_Rey-Universidad_de_Burgos_12.jpg", 
                            "wiki", 
                            "Burgos_-_Hospital_del_Rey-Universidad_de_Burgos_12.jpg", 
                            "Santiago Matamoros, <br/>?, Hospital del Rey-Universidad, Burgos, Castilla y León, Spain");
    insert_into_images("horsemen/Guitiriz_Labrada_01-06a2.jpg", 
                            "wiki", 
                            "Guitiriz,_Labrada_01-06a2.jpg", 
                            "Santiago Matamoros, <br/>15th century, Santa María de Labrada, Guitiriz, Lugo, Spain");
    insert_into_images("horsemen/Santiago_en_la_Batalla_de_Clavijo_obra_de_Antonio_Gonzalez_Ruiz_presidiendo_la_Escalera_principal.jpg", 
                            "wiki", 
                            "20070415_-_Monasterio_de_Uclés_-_La_Aparición_del_Apóstol_Santiago_en_la_Batalla_de_Clavijo,_obra_de_Antonio_González_Ruiz,_presidiendo_la_Escalera_principal.jpg", 
                            "Apparition of Apostle Santiago in the battle of Clavijo, <br/>18th century, Antonio González Ruiz, Cuenca, Spain");
    insert_into_images("horsemen/El_apostol_Santiago_en_la_batalla_de_Clavijo_Capilla_de_Santiago_de_la_catedral_de_Sevilla.jpg", 
                            "wiki", 
                            "El_apóstol_Santiago_en_la_batalla_de_Clavijo_(Capilla_de_Santiago_de_la_catedral_de_Sevilla).jpg", 
                            "Apostle Santiago in the battle of Clavijo, <br/>1609, Juan de las Roelas, Cathedral of Seville, Spain");
    insert_into_images("horsemen/Mateo_Perez_de_Alesio_001.jpg", 
                            "wiki", 
                            "Mateo_Pérez_de_Alesio_001.jpg", 
                            "Apostle Santiago in the battle of Clavijo, <br/>end of the 16th century, Mateo Pérez de Alesio, Church of Saint James, Seville, Spain");
    insert_into_images("horsemen/Santiago_en_la_batalla_de_Clavijo_de_Gines_Andres_de_Aguirre_Real_Academia_de_Bellas_Artes_de_San_Fernando.jpg", 
                            "wiki", 
                            "Santiago_en_la_batalla_de_Clavijo,_de_Ginés_Andrés_de_Aguirre_(Real_Academia_de_Bellas_Artes_de_San_Fernando).jpg", 
                            "Apostle Santiago in the battle of Clavijo, <br/>cr. 1753-62, Ginés Andrés de Aguirre, after Corrado Giaquinto, Spain");
    insert_into_images("horsemen/Santiago_batallando_con_los_moros_-_Lucas_Valdes.jpg", 
                            "wiki", 
                            "Santiago_batallando_con_los_moros_-_Lucas_Valdés.jpg", 
                            "Apostle Santiago fighting the moors, <br/>1690, Lucas de Valdés, Córdoba, Spain");
    insert_into_images("horsemen/HuntingParty.jpg", 
                            "Prado", 
                            "hunting-party/24b55758-796d-48ca-a295-65d0f93bfb0b", 
                            "Hunting Party, <br/>1775, Francisco Goya");
    insert_into_images("horsemen/DP841414.jpg", 
                            "Met", 
                            "383708", 
                            "The Stag-Hunt, <br/>1506, Lucas Cranach the Elder, Germany");
    insert_into_images("horsemen/Lucas_Cranach_the_Elder_Stag_Hunt.jpg", 
                            "KHM", 
                            "532", 
                            "The Stag-Hunt, <br/>1529, Lucas Cranach the Elder, Germany");
    insert_into_images("horsemen/Lucas_Cranach_-_Hunting_near_Hartenfels_Castle_-_1958.425_-_Cleveland_Museum_of_Art.tiff.jpg", 
                            "wiki", 
                            "Lucas_Cranach_-_Hunting_near_Hartenfels_Castle_-_1958.425_-_Cleveland_Museum_of_Art.tiff", 
                            "Hunting near Hartenfels Castle, <br/>1540, Lucas Cranach the Elder, Germany");
    insert_into_images("horsemen/DP818720-scaled.jpg", 
                            "Met", 
                            "342514", 
                            "Battle scene in a landscape, after Raphael's designs for the fresco of 'The Battle of the Milvian Bridge', <br/>cr. 1520, Marco Dente, Italy");
    insert_into_images("horsemen/370812.jpg", 
                            "arthive.com", 
                            "https://arthive.com/raphael/works/464428", 
                            "Sketch the four horsemen and captive warrior to paint the library Piccolomini in Siena, <br/>1503, Raphael Sanzio, Italy");
    insert_into_images("horsemen/The-Expulsion-Of-Heliodorus-From-The-Temple126069-The-Expulsion-of-Heliodorus-from-the-Temple-c_1650-oil-on-canvas-Cavallino-Bernardo.png",
                            "fineartamerica.com", 
                            "https://fineartamerica.com/featured/the-expulsion-of-heliodorus-from-the-temple-bernardo-cavallino.html", 
                            "Expulsion Of Heliodorus From The Temple, <br/>cr. 1650, Bernardo Cavallino, Naples, Italy");
    insert_into_images("horsemen/Francesco_Solimena_-_Cacciata_di_Eliodoro_dal_Tempio.jpg",
                            "wiki", 
                            "Francesco_Solimena_-_Cacciata_di_Eliodoro_dal_Tempio.JPG", 
                            "Expulsion of Heliodorus from the Temple (fresco), <br/>cr. 1725, Francesco Solimena, Naples, Italy");
    insert_into_images("horsemen/Eugene_Delacroix_-_Heliodoros_Driven_from_the_Temple_-_WGA06222.jpg",
                            "wiki", 
                            "Eugène_Delacroix_-_Heliodoros_Driven_from_the_Temple_-_WGA06222.jpg", 
                            "Heliodorus Driven from the Temple, <br/>cr. 1854-61, Eugène Delacroix, Paris, France");
    insert_into_images("horsemen/Bertholet_Flemal_-_Heliodorus_Driven_from_the_Temple.jpg",
                            "wiki", 
                            "Bertholet_Flémal_-_Heliodorus_Driven_from_the_Temple.jpg", 
                            "Heliodorus Driven from the Temple, <br/>cr. 1658-62, Bertholet Flemalle, Liège, Belgium");
    insert_into_images("horsemen/Antonio_Tempesta_-_Cacada_de_Heliodoro.jpg",
                            "wiki", 
                            "Antonio_Tempesta_-_Caçada_de_Heliodoro.jpg", 
                            "Expulsion of Heliodorus from the Temple, <br/>16th-17th centuries, Antonio Tempesta, Italy");
    insert_into_images("horsemen/1674_Gerard_de_Lairesse_-_Expulsion_of_Heliodorus_from_the_Temple.jpg",
                            "wiki", 
                            "1674_Gérard_de_Lairesse_-_Expulsion_of_Heliodorus_from_the_Temple.jpg", 
                            "Expulsion of Heliodorus from the Temple, <br/>1674, Gerard de Lairesse, Netherlands");
    insert_into_images("horsemen/Gouda_st._janskerk_vetrata_08_cacciata_di_eliodoro_di_Wouter_Pietersz._Crabeth_I_1566_03.jpg",
                            "wiki", 
                            "Gouda,_st._janskerk,_vetrata_08_cacciata_di_eliodoro,_di_Wouter_Pietersz._Crabeth_(I),_1566,_03.jpg", 
                            "Expulsion of Heliodorus from the Temple, <br/>1566, Wouter Crabeth, Bloemendaal, Gouda, Netherlands");
    insert_into_images("horsemen/Giuseppe_Tortelli_Heliodorus.jpg",
                            "Google", 
                            "the-expulsion-of-heliodorus-from-the-temple/xwFpMU6z6EQ7IQ", 
                            "Expulsion of Heliodorus from the Temple, <br/>1700, Giuseppe Tortelli, Brescia, Italy");
    insert_into_images("horsemen/AN00254420_001_l.jpg",
                            "BM", 
                            "714128", 
                            "Expulsion of Heliodorus from the Temple, <br/>1607-64, Jacopo Vignali, Florence, Italy");
    insert_into_images("horsemen/AN00076706_001_l.jpg",
                            "BM", 
                            "1457159", 
                            "Death of Absalom, <br/>1520-80, Germany");
    insert_into_images("horsemen/The_death_of_Absalom6.jpg",
                            "wiki", 
                            "The_death_of_Absalom6.jpg", 
                            "Death of Absalom, <br/>1332, From Jacob van Maerlant's 'Rhimebible' of Utrecht, Netherlands");
    insert_into_images("horsemen/Muerte_de_absalon_en_el_CESEDEN.jpg",
                            "wiki", 
                            "Muerte_de_absalon_en_el_CESEDEN.jpg", 
                            "Death of Absalom, <br/>cr. 1762, Corrado Giaquinto, Madrid, Spain");
    insert_into_images("horsemen/Melk_Rathausplatz_8.jpg",
                            "wiki", 
                            "Melk_Rathausplatz_8.jpg", 
                            "Death of Absalom, <br/>cr. 1577, Melk, Austria");
    insert_into_images("horsemen/Leaf_from_the_Morgan_Picture_Bible_-_Google_Art_Project.jpg",
                            "Getty", 
                            "1342", 
                            "Death of Absalom, <br/>cr. 1250, Leaf from the Morgan Picture Bible, Northern France");
    insert_into_images("horsemen/Death_of_Absalom4.jpg",
                            "wiki", 
                            "Death_of_Absalom4.jpg", 
                            "Death of Absalom, <br/>1660-61, Francois Chauveau, Paris, France");
    insert_into_images("horsemen/Death_of_Absalom3.jpg",
                            "wiki", 
                            "Death_of_Absalom3.jpg", 
                            "Death of Absalom, <br/>1851-60, Julius Schnorr von Carolsfeld, from 'Bibel in Bildern', Leipzig, Germany");
    insert_into_images("horsemen/Brockhaus_and_Efron_Jewish_Encyclopedia_e1_217-0.jpg",
                            "wiki", 
                            "Brockhaus_and_Efron_Jewish_Encyclopedia_e1_217-0.jpg", 
                            "Death of Absalom, <br/>1769, illustration published in Yiddish, 'Yosippon', Fürth, Germany");
    insert_into_images("horsemen/Absalomova_smrt_panjska_koncnica_1889.jpg",
                             "wiki", 
                            "Absalomova_smrt_(panjska_končnica,_1889).jpg", 
                            "Death of Absalom (painted hive ending), <br/>1889, peasant folk culture, Slovenia");
    insert_into_images("horsemen/AN01323700_001_l.jpg",
                            "BM", 
                            "1536542", 
                            "Death of Absalom, <br/>1613, Antonio Tempesta, Rome, Italy");
    insert_into_images("horsemen/AN01317548_001_l.jpg",
                            "BM", 
                            "3465430", 
                            "Death of Absalom, <br/>cr. 1652, Maarten de Vos and Johannes Wierix, Amsterdam, Netherlands");
    insert_into_images("horsemen/AN01298806_001_l.jpg",
                            "BM", 
                            "1589393", 
                            "Death of Absalom, <br/>1613-18, Antonio Tempesta, Antwerpen, Belgium");
    insert_into_images("horsemen/AN01008460_001_l.jpg",
                            "BM", 
                            "3369432", 
                            "Death of Absalom, <br/>cr. 1645, Christoffel van Sichem III, Netherlands");
    insert_into_images("horsemen/AN00787647_001_l.jpg",
                            "BM", 
                            "1606458", 
                            "Death of Absalom, <br/>1574-78, Theodosius Rihel and Tobias Stimmer, Strassbourg, Switzerland/Germany");
    insert_into_images("horsemen/AN00708246_001_l.jpg",
                            "BM", 
                            "1632985", 
                            "Death of Absalom, <br/>1670-71, Sébastien Leclerc I, Paris, France");
    insert_into_images("horsemen/AN00611848_001_l.jpg",
                            "BM", 
                            "1607658", 
                            "Death of Absalom, <br/>1625-30, Matthäus Merian I, Frankfurt am Main, Germany");
    insert_into_images("horsemen/AN00175871_001_l.jpg",
                            "BM", 
                            "1625673", 
                            "Death of Absalom, <br/>cr. 1585, Maarten de Vos and Johannes Wierix, Netherlands");
    insert_into_images("horsemen/AN00084190_001_l.jpg",
                            "BM", 
                            "1448520", 
                            "Death of Absalom, <br/>1532-40, printed in 1550, Georg Lemberger and Hans Lufft, Wittenberg, Germany");
    insert_into_images("horsemen/Maestro_della_morte_di_assalonne.jpeg",
                            "wiki", 
                            "Maestro_della_morte_di_assalonne,_morte_di_assalonne,_1450-1500_ca..JPG", 
                            "Death of Absalom, <br/>cr. 1450-1500, Georg Lemberger and Hans Lufft, Wittenberg, Germany");
    insert_into_images("horsemen/SK-C-1596.jpg",
                            "RJK", 
                            "SK-C-1596", 
                            "The Crucifixion with Mary, John, Mary Magdalene, St Longinus and the Converted Centurion, <br/>cr. 1447, Giovanni di Paolo di Grazia, Siena, Italy");
    insert_into_images("horsemen/Giovanni_di_Paolo_-_Calvary.jpg",
                            "wiki", 
                            "Giovanni_di_Paolo_-_Calvary_(Christ_Church_College,_Oxford).jpg", 
                            "Calvary, <br/>cr. 1450, Giovanni di Paolo di Grazia, Siena, Italy");
    insert_into_images("horsemen/Antiphonary_IV_Office_of_the_Dead_ca._1442_Biblioteca_Comunale_degli_Intronati_Siena.jpg",
                            "wiki", 
                            "Antiphonary_IV,_Office_of_the_Dead_(ca._1442)_Biblioteca_Comunale_degli_Intronati,_Siena.jpg", 
                            "Antiphonary IV, Office of the Dead, <br/>cr. 1442, Giovanni di Paolo di Grazia, Siena, Italy");
    insert_into_images("horsemen/The_Arabs_drive_the_Byzantines_to_flight_at_Azazion.jpg",
                            "wiki", 
                            "The_Arabs_drive_the_Byzantines_to_flight_at_Azazion.jpg", 
                            "The Arabs drive the Byzantines to flight at Azazion, <br/>11th-13th centuries, illustration of Madrid Skylitzes, Sicily, Italy");
    insert_into_images("horsemen/Siege_of_Amorium.jpg",
                            "wiki", 
                            "Siege_of_Amorium.jpg", 
                            "Siege of Amorium (838), <br/>11th-13th centuries, illustration of Madrid Skylitzes, Sicily, Italy");
    insert_into_images("horsemen/Prince_Leo_offers_a_knife_to_his_father_Emperor_Basil_I.jpg",
                            "wiki", 
                            "Prince_Leo_offers_a_knife_to_his_father,_Emperor_Basil_I.jpg", 
                            "The future Leo VI the Wise offers a knife to his father, Emperor Basil I the Macedonian, <br/>11th-13th centuries, illustration of Madrid Skylitzes, Sicily, Italy");
    insert_into_images("horsemen/6a00d8341c464853ef01a510efe190970c-500wi.jpg",
                            "The British Library", 
                            "https://blogs.bl.uk/digitisedmanuscripts/2014/01/the-three-living-and-the-three-dead.html", 
                            "Miniature of the Three Living and the Three Dead on a tipped-in leaf, <br/>first half of the 16th century, Psalter, Augsburg?, Germany");
    insert_into_images("horsemen/6a00d8341c464853ef01a510efdb43970c-500wi.jpg",
                            "The British Library", 
                            "https://blogs.bl.uk/digitisedmanuscripts/2014/01/the-three-living-and-the-three-dead.html", 
                            "Detail of a miniature of the Three Living and the Three Dead at the beginning of the Office of the Dead, <br/>cr. 1500, the Hours of Joanna I of Castile, Ghent?, Southern Netherlands");
    insert_into_images("horsemen/Freres_Limbourg_-_Tres_Riches_Heures_du_duc_de_Berry_-_mois_de_mai_-_Google_Art_Project.jpg",
                            "wiki", 
                            "Frères_Limbourg_-_Très_Riches_Heures_du_duc_de_Berry_-_mois_de_mai_-_Google_Art_Project.jpg", 
                            "Month of May, illustration of The Very Rich Hours of the Duke of Berry, <br/>1485-89, Jean Colombe, Paris, France");
    insert_into_images("horsemen/Emanuel-van-Meteren-Historien-der-Nederlanden-tot-1612_MG_9969.tif.jpg",
                            "wiki", 
                            "Emanuel-van-Meteren-Historien-der-Nederlanden-tot-1612_MG_9969.tif", 
                            "Maurice, Prince of Orange, <br/>1591 - 1632, Hessel Gerritsz, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-1948-328-scaled.jpg",
                            "RJK", 
                            "RP-P-1948-328", 
                            "François-Hercule de Valois, Duke of Anjou, <br/>1591 - 1632, Hessel Gerritsz, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-OB-52.610-scaled.jpg",
                            "RJK", 
                            "RP-P-OB-52.610", 
                            "Alessandro Farnese, Duke of Parma, <br/>1591 - 1632, Hessel Gerritsz, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-1948-325-scaled.jpg",
                            "RJK", 
                            "RP-P-1948-325", 
                            "John of Austria, <br/>1591 - 1632, Hessel Gerritsz, Amsterdam, Netherlands");
    insert_into_images("horsemen/RP-P-1948-324-scaled.jpg",
                            "RJK", 
                            "RP-P-1948-324", 
                            "Fernando Álvarez de Toledo, 3rd Duke of Alba, <br/>1591 - 1632, Hessel Gerritsz, Amsterdam, Netherlands");
    insert_into_images("horsemen/obama.jpg",
                            "jeffreyhill.typepad.com", 
                            "https://jeffreyhill.typepad.com/english/2009/12/cartoon-napoleon-obama.html#.XeA1-ZP7TjA", 
                            "'I have to pop over to Oslo to pick up my peace prize', <br/>December 2009, Morten Morland for 'The Times', Great Britain");
    insert_into_images("horsemen/Moran_macron.jpg",
                            "Bob Moran @ twitter.com", 
                            "https://twitter.com/bobscartoons/status/1043191694894800899", 
                            "Emmanuel Macron calling Brexit campaign leaders 'liars', <br/>September 2018, Bob Moran for 'The Telegraph', Great Britain");
    insert_into_images("horsemen/methode_times_prod_web_bin_a48473ea-0204-11e9-9685-be54be25c61a.jpg",
                            "The Times", 
                            "https://www.thetimes.co.uk/article/january-february-v28cv5vks", 
                            "Entente cordiale, <br/>January 2018, Peter Brookes for 'The Times', Great Britain");
    insert_into_images("horsemen/methode_times_prod_web_bin_4d814eaa-0205-11e9-9685-be54be25c61a.jpg",
                            "The Times", 
                            "https://www.thetimes.co.uk/article/january-february-v28cv5vks", 
                            "Emmanuel the Conqueror, <br/>January 2018, Peter Brookes for 'The Times', Great Britain");
    insert_into_images("horsemen/macron-president.jpg",
                            "cartooningforpeace.org", 
                            "https://www.cartooningforpeace.org/editos/france-lavenement-demmanuel-macron/?lang=en", 
                            "Advent of Emmanuel Macron, <br/>May 2017, Kichka, Israel");
    insert_into_images("horsemen/macron_guardian.jpg",
                            "The Guardian", 
                            "https://www.theguardian.com/commentisfree/series/guardian-comment-cartoon/2018/jan/18/all", 
                            "Theresa May's meeting with Emmanuel Macron, <br/>January 2018, Steve Bell for 'The Guardian', Great Britain");
    insert_into_images("horsemen/20180609_EUD000_0.jpeg",
                            "The Economist", 
                            "https://www.economist.com/europe/2018/06/09/frances-plans-for-euro-zone-reform-get-a-lukewarm-german-response", 
                            "France's plans for euro-zone reform get a lukewarm German response, <br/>June 2018, Peter Schrank for 'The Economist', Great Britain");
    insert_into_images("horsemen/RP-P-1936-151.jpg",
                            "RJK", 
                            "RP-P-1936-151", 
                            "Capture of Tunis, 1535, from the series 'The victories of Emperor Charles V', <br/>1555-56, Dirck Volckertszoon Coornhert and Maarten van Heemskerck, Haarlem and Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1936-142.jpg",
                            "RJK", 
                            "RP-P-1936-142", 
                            "The capturing of Francis I at the Battle of Pavia, 1525, from the series 'The victories of Emperor Charles V', <br/>1555-56, Dirck Volckertszoon Coornhert and Maarten van Heemskerck, Haarlem and Antwerp, Netherlands");
    insert_into_images("horsemen/RP-P-1936-149.jpg",
                            "RJK", 
                            "RP-P-1936-149", 
                            "Relief of Vienna, 1529, from the series 'The victories of Emperor Charles V', <br/>1555-56, Dirck Volckertszoon Coornhert and Maarten van Heemskerck, Haarlem and Antwerp, Netherlands");
    insert_into_images("horsemen/BnF_25516_f21.png",
                            "Gallica", 
                            "12148/btv1b84516032/f21.highres", 
                            "French novel illustration, <br/>1275-90, Maître du Graal, North France");
    insert_into_images("horsemen/BnF_25516_f233.png",
                            "Gallica", 
                            "12148/btv1b84516032/f233.highres", 
                            "French novel illustration, <br/>1275-90, Maître du Graal, North France");
    insert_into_images("horsemen/BnF_25516_f48.png",
                            "Gallica", 
                            "12148/btv1b84516032/f48.highres", 
                            "French novel illustration, <br/>1275-90, Maître du Graal, North France");
    insert_into_images("horsemen/BnF_25516_f113.png",
                            "Gallica", 
                            "12148/btv1b84516032/f113.highres", 
                            "French novel illustration, <br/>1275-90, Maître du Graal, North France");
    insert_into_images("horsemen/BnF_25516_f350.png",
                            "Gallica", 
                            "12148/btv1b84516032/f350.highres", 
                            "French novel illustration, <br/>1275-90, Maître du Graal, North France");
    insert_into_images("horsemen/Villani_Benevento.jpg",
                            "wiki", 
                            "Villani_Benevento.jpg", 
                            "Nuova cronica illustration (Battle of Benevento, 1266), <br/>mid 14th century, Pacino di Buonaguida, Florence, Italy");
    insert_into_images("horsemen/BeneventoVillani.jpg",
                            "wiki", 
                            "BeneventoVillani.jpg", 
                            "Nuova cronica illustration (battle of Benevento, 1266), <br/>mid 14th century, Pacino di Buonaguida, Florence, Italy");
    insert_into_images("horsemen/Nuova_cronica._f.137v.jpg",
                            "wiki", 
                            "Nuova_cronica._f.137v.jpg", 
                            "Nuova cronica illustration (Peter III of Aragon is wounded, 1285), <br/>mid 14th century, Pacino di Buonaguida, Florence, Italy");
    insert_into_images("horsemen/ArrestoBonifac8.jpg",
                            "wiki", 
                            "ArrestoBonifac8.jpg", 
                            "Nuova cronica illustration (attack of Pope Boniface VII at his Palace in Anagni, 1303), <br/>mid 14th century, Pacino di Buonaguida, Florence, Italy");
    insert_into_images("horsemen/Battle_of_Mons-en-Pevele.jpg",
                            "wiki", 
                            "Battle_of_Mons-en-Pevele.jpg", 
                            "Nuova cronica illustration (battle of Mons-en-Pevele, 1304), <br/>mid 14th century, Pacino di Buonaguida, Florence, Italy");
    insert_into_images("horsemen/42-manasses-chronicle.jpg",
                            "wiki", 
                            "42-manasses-chronicle.jpg", 
                            "Emperor Heraclius attacks a Persian fortress, while the Persians attack Constantinople, <br/>14th century, Constantine Manasses Chronicle, Byzantine empire");
    insert_into_images("horsemen/TzimiskesPreslavBasileiosPliska.jpg",
                            "wiki", 
                            "TzimiskesPreslavBasileiosPliska.jpg", 
                            "Tzimiskes in Preslav and Basileios in Pliska, <br/>14th century, Constantine Manasses Chronicle, Byzantine empire");
    insert_into_images("horsemen/Chronicon_Pictum_P014_Atilla_Aquileiat_ostromolja.jpeg",
                            "wiki", 
                            "Chronicon_Pictum_P014_Atilla_Aquileiát_ostromolja.JPG", 
                            "Attila besieges Aquileia (452), <br/>1350-73, Chronicon Pictum, Kingdom of Hungary");
    insert_into_images("horsemen/Chronicon_Pictum_-_Battle_of_Posada.png",
                            "wiki", 
                            "Viennese_Illuminated_Chronicle_Posada.jpg", 
                            "The battle of Posada (1330), <br/>1350-73, Chronicon Pictum, Kingdom of Hungary");
    insert_into_images("horsemen/Chronicon_Pictum_P85_Mogyorodi_csata.jpeg",
                            "wiki", 
                            "Chronicon_Pictum_P85_Mógyoródi_csata.JPG", 
                            "The battle of Mogyoród (1074), <br/>1350-73, Chronicon Pictum, Kingdom of Hungary");
    insert_into_images("horsemen/Firenze.Duomo_.Tolentino.jpeg",
                            "wiki", 
                            "Firenze.Duomo.Tolentino.JPG", 
                            "Painted Equestrian statue of Niccolò da Tolentino (fresco), <br/>1456, Andrea del Castagno, Florence Cathedral, Italy");
    insert_into_images("horsemen/Paolo_Uccello_044.jpg",
                            "wiki", 
                            "Paolo_Uccello_044.jpg", 
                            "Painted Equestrian statue of Sir John Hawkwood (fresco), <br/>1436, Paolo Uccello, Florence Cathedral, Italy");
    insert_into_images("horsemen/Gattamelata.jpg",
                            "wiki", 
                            "Gattamelata.jpg", 
                            "Equestrian statue of Gattamelata, <br/>1453, Donatello, Padua, Republic of Venice (modern Italy)");
    insert_into_images("horsemen/Ferrara_monumento_equestre_28mar06_03.jpg",
                            "wiki", 
                            "Ferrara_monumento_equestre_28mar06_03.jpg", 
                            "The reproduction of the monument to Niccolò III d'Este, <br/>original created in 1451 (?) and destructed by 1796, Leon Battista Alberti or Niccolò Baroncelli and Antonio di Cristoforo (?), Ferrara, Italy");
    insert_into_images("horsemen/Regisole_di_V._Brunelli_1817.jpeg",
                            "wiki", 
                            "Regisole,_di_V._Brunelli,_1817.JPG", 
                            "A souvenir print showing destructed Regisole, <br/>3rd-6th centuries (?), drawing made in 1817 by V. Brunelli, Ravenna/Padua, Italy");
    insert_into_images("horsemen/Decameron_BNF_MS_Italien_63_f_186v.jpg",
                            "Gallica", 
                            "12148/btv1b84268111/f394.item", 
                            "Boccaccio, Decameron: the story of Nastagio degli Onesti, <br/>1401-24, Ludovico Ceffini, Florence, Italy");
    insert_into_images("horsemen/Opening_the_Fourth_Seal_The_Fourth_Horseman_-_Google_Art_Project_-_crop.jpg",
                            "Getty", 
                            "3049", 
                            "The Opening of the Fourth Seal: The Fourth Horseman, <br/>1255-60, London (?), England");
    insert_into_images("horsemen/Pulaski-Szmurlo.jpg",
                            "wiki", 
                            "Pulaski-Szmurlo.jpg", 
                            "Casimir Pulaski Monument at Patterson Park in Baltimore, Maryland, <br/>1951, Hans Schuler and A. C. Radziszewski, U.S.A.");
    insert_into_images("horsemen/Statue_of_Casimir_Pulaski_in_Roger_Williams_Park_in_Providence.jpg",
                            "wiki", 
                            "Statue_of_Casimir_Pulaski_in_Roger_Williams_Park_in_Providence.jpg", 
                            "Equestrian statue of Casimir Pulaski in Roger Williams Park, Providence Rhode Island, U.S.A., <br/>1953, Guido Nincheri, Canada");
    insert_into_images("horsemen/Savannah_1779.png",
                            "wiki", 
                            "Savannah_1779.png", 
                            "Casimir Pulaski death near savannah, <br/>1933, Stanisław Kaczor-Batowski, Lviv, Ukraine");
    insert_into_images("horsemen/Kazimierz_Pulaski_pod_Czestochowa.png",
                            "wiki", 
                            "Kazimierz_Pułaski_pod_Częstochową.PNG", 
                            "Casimir Pulaski in defense of Czestochowa, <br/>1883, Juliusz Kossak, Kraków, Poland");
    insert_into_images("horsemen/Susenyos_Wellcome_L0031387_cropped.jpg",
                            "wiki", 
                            "Susenyos_Wellcome_L0031387_(cropped).jpg", 
                            "Susenyos I as Saint Sisinios, <br/>17th century or later, Ethiopia");
    insert_into_images("horsemen/elsa_water_horse.jpg",
                            "hallmark.com", 
                            "https://www.hallmark.com/ornaments/keepsake-ornaments/disney-frozen-2-elsa-and-nokk-ornament-1899QXD6459.html", 
                            "Elsa taming Nokk, Frozen 2-themed Christmas decoration, <br/>2019, U.S.A.");
    insert_into_images("horsemen/AN00332744_001_l.jpg",
                            "BM", 
                            "332744001", 
                            "Equestrian portrait of William III of Orange Nassau, <br/>1672, Romeyn de Hooghe, Netherlands");
    insert_into_images("horsemen/WilliamIII_MK.jpg",
                            "the-saleroom.com", 
                            "https://www.the-saleroom.com/en-gb/auction-catalogues/mellors-and-kirk/catalogue-id-srmel10063/lot-0932aaf3-e8d5-4f9d-83b9-a507012160e8", 
                            "Equestrian portrait of William III at the Battle of the Boyne, <br/>1690-1702, Studio of Jan Wick, England");
    insert_into_images("horsemen/Johannes_Voorhout_-_Willem_III_te_paard_-1670-2.jpg",
                            "wiki", 
                            "Johannes_Voorhout_-_Willem_III_te_paard_-1670-2.jpg", 
                            "Equestrian portrait of William III, <br/>second half of the 17th century, Johannes Voorhout, Netherlands");
    insert_into_images("horsemen/AN00401225_001_l.jpg",
                            "BM", 
                            "3069943", 
                            "Equestrian portrait of William III, <br/>cr. 1689, John Smith after Sir Godfrey Kneller, England (?)");
    insert_into_images("horsemen/King-William-III-by-Godfrey-Kneller.png",
                            "artnet.com", 
                            "http://www.artnet.com/artists/godfrey-kneller/an-equestrian-portrait-of-king-william-iii-1650-gJXuILa2g9tdTMqIvH10Lw2", 
                            "Equestrian portrait of William III, <br/>second half of the 17th century, circle of Godfrey Kneller, England");
    insert_into_images("horsemen/King-William-III-1650–1702-on-his-Favourite-Horse-Sorrel-631075-_-National-Trust-Collections.png",
                            "NT", 
                            "631075", 
                            "King William III on his favourite horse Sorrel , <br/>second half of the 17th century (?), manner of Jan Wyck, England (?)");
    insert_into_images("horsemen/DP318357_small.jpg",
                            "Met", 
                            "436182", 
                            "Triumph of the Amazons, <br/>1620s, Claude Deruet, Nancy, France");
    insert_into_images("horsemen/Deruet_Claude_-_Fire_-_before_1642.jpeg",
                            "wiki", 
                            "Deruet,_Claude_-_Fire_-_before_1642.JPG", 
                            "Four elements: Fire, <br/>before 1642, Claude Deruet, France");
    insert_into_images("horsemen/Claude_Deruet_-_Allegory_of_the_Marriage_of_Louis_XIV_in_1631.jpg",
                            "wiki", 
                            "Claude_Deruet_-_Allegory_of_the_Marriage_of_Louis_XIV_in_1631.jpg", 
                            "Allegory of the Peace Treaty of the Pyrenees, <br/>1659, Claude Deruet, France");
    insert_into_images("horsemen/00296401.jpg",
                            "Getty", 
                            "2685", 
                            "Saint George and the Dragon, accompanying a prayer to Saint George, <br/>cr. 1450–55, Ghent (?), Belgium");
    insert_into_images("horsemen/Richard_Marshal_unhorses_Baldwin_Guines_at_a_skirmish_by_Matthew_Paris.jpg",
                            "wiki", 
                            "Richard_Marshal_unhorses_Baldwin_Guines_at_a_skirmish_by_Matthew_Paris.jpg", 
                            "Richard Marshal unhorses Baldwin Guines at a skirmish before the Battle of Monmouth, 1233, illustration to Chronica Majora, <br/>13th century, St. Albans, England");
    insert_into_images("horsemen/EdmundIronside_Canutethe_Dane1.jpg",
                            "wiki", 
                            "EdmundIronside_Canutethe_Dane1.jpg", 
                            "Edmund Ironside (left) and Cnut the Great at the battle of Assandun, 1016, illustration to Chronica Majora, <br/>14th century, St. Albans, England");
    insert_into_images("horsemen/Bouvines1214.jpg",
                            "wiki", 
                            "Bouvines1214.jpg", 
                            "Battle of Bouvines, 1214, illustration to Chronica Majora, <br/>13th century, St. Albans, England");
    insert_into_images("horsemen/Cavaliere_Capodilista_vestito_di_giallo.jpg",
                            "wiki", 
                            'Cavaliere_Capodilista_vestito_di_giallo_su_cavallo_vestito_di_azzurro_in_%22De_viris_illustribus_familiae_Transelgardorum_Forzatè_et_Capitislistae%22.jpg', 
                            "Illustration to Codex Capodilista by Giovan Francesco Capodilista, 1433-1459, <br/>?, Padua, Italy");
    insert_into_images("horsemen/Cavaliere_Capodilista_2.jpg",
                            "wiki", 
                            'Cavaliere_Capodilista_2_in_%22De_viris_illustribus_familiae_Transelgardorum_Forzatè_et_Capitislistae%22.jpg', 
                            "Illustration to Codex Capodilista by Giovan Francesco Capodilista, 1433-1459, <br/>?, Padua, Italy");
    insert_into_images("horsemen/51ucBDK4RJL.jpg",
                            "amazon.com", 
                            'https://www.amazon.com/Knight-Capodilista-Manuscript-Illumination-Biblioteca/dp/B017FXNKII', 
                            "Illustration to Codex Capodilista by Giovan Francesco Capodilista, 1433-1459, <br/>?, Padua, Italy");
    insert_into_images("horsemen/51tdq-lWFCL._SY450_.jpg",
                            "amazon.com", 
                            'https://www.amazon.com/Knight-Yellow-Capodilista-Manuscripts-Library/dp/B00PIGCDYW', 
                            "Illustration to Codex Capodilista by Giovan Francesco Capodilista, 1433-1459, <br/>?, Padua, Italy");
    insert_into_images("horsemen/MoorandChristianBattle.png",
                            "Wikipedia", 
                            "https://en.wikipedia.org/wiki/File:MoorandChristianBattle.png", 
                            "Battle of Marrakesh, from Cantigas de Santa Maria by Alfonso X of Castile El Sabio (?), <br/>1221–84, Castile, Spain");
    insert_into_images("horsemen/Higueruela.jpg",
                            "wiki", 
                            "Higueruela.jpg", 
                            "The Battle of Higueruela (1431) in the Gallery of Battles, <br/>cr. 1582, Fabrizio Castello, Orazio Cambiaso and Lazzaro Tavarone, Royal Monastery of San Lorenzo de El Escorial, Madrid, Spain");
    insert_into_images("horsemen/Battle_of_Higueruela.jpg",
                            "wiki", 
                            "Battle_of_Higueruela.jpg", 
                            "The Battle of Higueruela (1431) in the Gallery of Battles, <br/>cr. 1582, Fabrizio Castello, Orazio Cambiaso and Lazzaro Tavarone, Royal Monastery of San Lorenzo de El Escorial, Madrid, Spain");
    insert_into_images("horsemen/Battle_of_Clavijo_by_Martin_Shongauer.png",
                            "wiki", 
                            "Battle_of_Clavijo_by_Martin_Shongauer.png", 
                            "The Battle of Clavijo (mythical, 844), <br/>autumn 1471 - spring 1473, Martin Shongauer, Alsace, Germany");
    insert_into_images("horsemen/Jerusalem_1999.png",
                            "wiki", 
                            "Siege_of_Jerusalem_1099_2.jpg", 
                            "Siege of Jerusalem, 1099, illustration to History of Jerusalem by William of Tyre, <br/>1295, Kingdom of Jerusalem");
    insert_into_images("horsemen/Siege_of_Tripoli_Painting_1289.jpg",
                            "wiki", 
                            "Siege_of_Tripoli_Painting_(1289).jpg", 
                            "The fall of Tripoli to the Mamluks, April 1289, <br/>13th-14th centuries (?), ?");
    insert_into_images("horsemen/Saladin_Guy.jpg",
                            "wiki", 
                            "Saladin_Guy.jpg", 
                            "The Battle of Hattin, 4 July 1187, illustration to Chronica Majora, <br/>13th century, St. Albans, England");
    insert_into_images("horsemen/Nur_ad-Din_Zangi.jpg",
                            "wiki", 
                            "Nur_ad-Din_Zangi.jpg", 
                            "Nureddin, Sultan of Damascus (1118–1174), illustration to The Histoire d'Outremer, <br/>1232-1261, Picardy (?), North France");
    insert_into_images("horsemen/BattleOfInab.jpg",
                            "wiki", 
                            "BattleOfInab.jpg", 
                            "Battle Of Inab, 1149, illustration to Passages d'outremer, <br/>1472-75, Jean Colombe, Paris, France");
    insert_into_images("horsemen/Battle-Damietta.jpg",
                            "wiki", 
                            "Battle-Damietta.jpg", 
                            "Battle of Damietta, 1218, illustration to Chronica Majora, <br/>13th century, St. Albans, England");        
    insert_into_images("horsemen/Battle_of_Cresson.jpg",
                            "wiki", 
                            "Battle_of_Cresson.jpg", 
                            "Battle of Cresson, 1 May 1187, illustration to Passages d'outremer, <br/>1472-75, Jean Colombe, Paris, France");
    insert_into_images("horsemen/Batalha_do_Salado.png",
                            "wiki", 
                            "Batalha_do_Salado_(Roque_Gameiro,_Quadros_da_História_de_Portugal,_1917).png", 
                            "Battle of Salado, in 'Pictures of the History of Portugal', <br/>1917, Roque Gameiro, Portugal");
    insert_into_images("horsemen/Bataille_de_Tyr_1187.jpeg",
                            "wiki", 
                            "Français_5594,_fol._205_haut,_Bataille_de_Tyr_(1187).jpeg", 
                            "Battle of Tyre, 12 Nov 1187 - 1 Jan 1188, illustration to Passages d'outremer, <br/>1472-75, Jean Colombe, Paris, France");
    insert_into_images("horsemen/Francais_5594_fol._193v_haut_Mort_dEtienne_Hagiochristophorites.jpeg",
                            "wiki", 
                            "Français_5594,_fol._205_haut,_Bataille_de_Tyr_(1187).jpeg", 
                            "Murder of Stephen Hagiochristophorites by Isaac II Angelos, 11 September 1185, illustration to Passages d'outremer, <br/>1472-75, Jean Colombe, Paris, France");
    insert_into_images("horsemen/Bataille_de_Nicopolis_Archives_B.N._1.jpg",
                            "wiki", 
                            "Bataille_de_Nicopolis_(Archives_B.N.)_1.jpg", 
                            "Battle of Nicopolis, 25 September 1396, illustration to Passages d'outremer, <br/>1472-75, Jean Colombe, Paris, France");
    insert_into_images("horsemen/683566.jpg",
                            "wiki", 
                            "Battle_in_front_of_Antioch.jpg", 
                            "Siege of Antioch, 1097-98, <br/>14th century, ?");
    insert_into_images("horsemen/Retaule_de_sant_Jordi_de_Xerica.jpeg",
                            "wiki", 
                            "Retaule_de_sant_Jordi_de_Xèrica.JPG", 
                            "Altarpiece of St. George, <br/>1430-31, Berenguer Mateu, Valencia, Spain");
    insert_into_images("horsemen/Morgan-bible-fl23.jpg",
                            "wiki", 
                            "Morgan-bible-fl23.jpg", 
                            "Illustration to Crusader Bible, <br/>mid-1240s, Paris, France");
    insert_into_images("horsemen/Morgan-bible-fl-29.jpg",
                            "wiki", 
                            "Morgan-bible-fl-29.jpg", 
                            "Illustration to Crusader Bible, <br/>mid-1240s, Paris, France");
    insert_into_images("horsemen/Morgan_Bible_10r.jpg",
                            "wiki", 
                            "Morgan_Bible_10r.jpg", 
                            "Illustration to Crusader Bible, <br/>mid-1240s, Paris, France");
    insert_into_images("horsemen/Maciejowski_Bible.jpeg",
                            "wiki", 
                            "Maciejowski_Bible.JPG", 
                            "Illustration to Crusader Bible, <br/>mid-1240s, Paris, France");
    insert_into_images("horsemen/Biblia_de_Maciejowski_miniatura_h10.jpg",
                            "wiki", 
                            "Biblia_de_Maciejowski_miniatura_h10.jpg", 
                            "Illustration to Crusader Bible, <br/>mid-1240s, Paris, France");
    insert_into_images("horsemen/Kruciata.jpg",
                            "wiki", 
                            "Kruciata.jpg", 
                            "Illustration to Crusader Bible, <br/>mid-1240s, Paris, France");
     insert_into_images("horsemen/12th-century_unknown_painters_-_Hunt_of_the_Hare_-_WGA19758.jpg",
                            "wiki", 
                            "12th-century_unknown_painters_-_Hunt_of_the_Hare_-_WGA19758.jpg", 
                            "Hunt of the Hare, fresco painting on mural transferred to canvas, <br/>cr. 1125, Hermitage of San Baudelio, Casillas de Berlanga, Soria, Spain");
     insert_into_images("horsemen/Elephant_and_Castle_Fresco_in_San_Baudelio_Spain.jpg",
                            "wiki", 
                            "Elephant_and_Castle_(Fresco_in_San_Baudelio,_Spain).jpg", 
                            "Elephant and Castle, fresco painting on mural transferred to canvas, <br/>cr. 1125, Hermitage of San Baudelio, Casillas de Berlanga, Soria, Spain");
     insert_into_images("horsemen/B_Facundus_174v.jpg",
                            "wiki", 
                            "B_Facundus_174v.jpg", 
                            "Four Horsemen Of Apocalypse (Sixth trumpet scene), illustration of 'Beato of Valcavado', <br/>1047, Beato of Facundus, León, Al-Andalus (now Spain)");
    insert_into_images("horsemen/knight.png",
                            "wiki", 
                            "Cressac_16_Temple_Peinture_murale_Croisé_La_Bocquée_2014.JPG", 
                            "Knight of the Cross attacking Sarrazins at the battle of La Bocquée (1163), fresco, <br/>end of the 12th century, Templar chapel at Cressac, France");
    insert_into_images("horsemen/Basilica_di_aquilieia_cripta_affreschi_registro_inferiore_03.jpeg",
                            "wiki", 
                            "Basilica_di_aquilieia,_cripta,_affreschi_registro_inferiore_03.JPG", 
                            "Clash between an Arab knight and a Christian knight during the Crusades, fresco, <br/>12th century, Patriarchal Basilica of Santa Maria Assunta, Aquileia, Italy");
    insert_into_images("horsemen/Sv._Stefana_Zanigrad.jpg",
                            "wiki", 
                            "Detajl_freske_v_cerkvi_sv._Štefana,_Zanigrad.jpg", 
                            "A knight, fresco, <br/>14th century, St. Stephen's Church, Zanigrad, Slovenia");
    insert_into_images("horsemen/KakasFotoThalerTamas.jpg",
                            "wiki", 
                            "KakasFotoThalerTamas.JPG", 
                            "Saint Ladislaus legend, fresco, <br/>14th century, Church of Saint Catherine of Alexandria, Veľká Lomnica, Slovakia");
    insert_into_images("horsemen/Derzs4.jpg",
                            "wiki", 
                            "Derzs4.jpg", 
                            "Ladislaus I of Hungary legend, fresco, <br/>1419, Paul of Ung, fortified church of Dârjiu, Romania");
    insert_into_images("horsemen/RimBana4FotoThalerTamasJPG.jpg",
                            "wiki", 
                            "RimBana4FotoThalerTamas.JPG", 
                            "Ladislaus I of Hungary legend, fresco, <br/>end of the 13th century, church in Rimavská Baňa, Slovakia");
    insert_into_images("horsemen/Klosterkirche_Türje_Fresko_St._Ladislaus.tiff.png",
                            "wiki", 
                            "Klosterkirche_Türje_Fresko_St._Ladislaus.tiff", 
                            "Scene from the St. Ladislaus legend, fresco, <br/>first decades of the 14th century, monastery church of Türje, Hungary");
    insert_into_images("horsemen/Laszlo_kapelle.jpeg",
                            "wiki", 
                            "Laszlo_kapelle.JPG", 
                            "Ladislaus I of Hungary legend, fresco, <br/>?, Károly Lotz (1833-1904), interior of the Matthias Church, Budapest, Hungary");
    insert_into_images("horsemen/05galati.jpg",
                            "wga.hu", 
                            "https://www.wga.hu/html_m/m/master/xunk_it/xunk_it2c/05galati.html", 
                            "Fourth Horseman of the Apocalypse, fresco, <br/>1420s, Santa Caterina, Galatina, Apulia, Italy");

    insert_into_images("horsemen/Canosan_bonhams.png",
                            "Bonhams", 
                            "21928/lot/24/", 
                            "Terracotta horse and rider, <br/>4th - 3rd century BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/The-Merrin-Gallery-Terracotta-Rider-Canosan-Hellenistic-Periodca-323-BC.jpeg",
                            "merringallery.com", 
                            "https://www.pinterest.co.uk/pin/552676185500109148/", 
                            "Terracotta horse and rider, <br/>cr. 323 BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/cd72aa4a4edebd84908570399ef5744f.jpg",
                            "Ancient artifacts", 
                            "https://www.pinterest.co.uk/pin/383720830733037675/", 
                            "Terracotta horse and rider, <br/>3rd century BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/AN01532789_001_l.jpg",
                            "BM", 
                            "399562", 
                            "Terracotta relief attachment from an askos, showing a warrior on horseback, <br/>cr. 270-200 BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/AN01533041_001_l.jpg",
                            "BM", 
                            "463430", 
                            "Terracotta relief attachment from an askos, showing a hunter on horseback, <br/>cr. 270-200 BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/Terracotta_relief_probably_from_a_funnel_vase_MET_DP277926.jpg",
                            "Met", 
                            "248731", 
                            "Terracotta relief, probably from a funnel vase, <br/>late 3rd–early 2nd century BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/DP277927.jpg",
                            "Met", 
                            "248735", 
                            "Terracotta relief, probably from a funnel vase, <br/>late 3rd–early 2nd century BC, Canosa, Apulia, Italy");


    insert_into_images("horsemen/LSE_HOM_1972_250-001.jpg",
                            "ArtUK", 
                            "the-battle-of-adwa-1896-194051", 
                            "The Battle of Adwa, 1896, <br/>19th century, Ethiopia");
    insert_into_images("horsemen/AN00261686_001_l.jpg",
                            "BM", 
                            "578007", 
                            "King Sahle Sellase of Shewa mounted on a white horse at the battle of Adwa (?), <br/>20th century, painting on woven nylon material, Ethiopia");
    insert_into_images("horsemen/Adwa.png",
                            "auctions.swelco.co.za", 
                            "https://auctions.swelco.co.za/lots/view/1-1ZLFES/solomon-belachew-the-battle-of-adwa-1940s", 
                            "Emperor Menelik II after fighting the BAD Italians through the gift of God with the help of Saint George after defeating the Italians returned to Addis Ababa in victory, <br/>1940s, Solomon Belachew, Ethiopia");

    insert_into_images("horsemen/LSE_HOM_2003_22-001.jpg",
                            "ArtUK", 
                            "scene-of-george-and-the-dragon-194060", 
                            "Ethiopian king (?) as Saint George spearing the dragon, <br/>?, Ethiopia");

    insert_into_images("horsemen/Collections-_-National-Museum-of-African-Art.png",
                            "africa.si.edu", 
                            "https://africa.si.edu/collections/view/objects/asitem/items$0040:16680", 
                            "An icon showing St George, <br/>15th-16th century, Ethiopia");
    insert_into_images("horsemen/pl1_366_opn_tr_t01ii.jpg",
                            "WAM", 
                            "30807", 
                            "Triptych with Mary and Her Son, Archangels, Scenes from Life of Christ and Saints, <br/>early 16th century, Ethiopia");
    insert_into_images("horsemen/Athiopien_Grosses_Triptychon_Museum_Rietberg_EFA_15_img01.jpg",
                            "wiki", 
                            "Äthiopien_Grosses_Triptychon_Museum_Rietberg_EFA_15_img01.jpg", 
                            "Great Triptych, tempera on fabric on wood, <br/>cr. 1700, Ethiopia");
    insert_into_images("horsemen/Ethiopian.triptych.Gondar.Museum.of_.Russian.icon_.png",
                            "wiki", 
                            "Ethiopian.triptych.Gondar.Museum.of.Russian.icon.png", 
                            "Triptych, showing St George, <br/>18-19th century, Gondar school, Ethiopia");

    insert_into_images("horsemen/AN00034587_001_l.jpg",
                            "BM", 
                            "466991", 
                            "Terracotta female head partially imitating a vase (lekythos), <br/>325-300BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/AN00208815_001_l.jpg",
                            "BM", 
                            "463438", 
                            "Pottery askos painted with a female head rising up from a flower, with terracotta statuettes of Erotes added above, <br/>cr. 310-290BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/E5648CR-d1.jpg",
                            "MFA", 
                            "154144", 
                            "Askos with the monster Skylla, <br/>cr. 300 BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/AN00033248_001_l.jpg",
                            "BM", 
                            "399510", 
                            "Askos with with three terracotta Nikai, the foreparts of two horses, reliefs showing the head of Medusa and a dancing maenad, <br/>cr. 270-200 BC, Canosa, Apulia, Italy");
    insert_into_images("horsemen/San_Baudelio_Frontal.jpg",
                            "wiki", 
                            "San_Baudelio_Frontal.jpg", 
                            "Hermitage of San Baudelio, <br/>11th century, Casillas de Berlanga, Soria, Spain");
    insert_into_images("horsemen/Der_von_Suonegge.jpg",
                            "wiki", 
                            "Der_von_Suonegge.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_Johann_von_Brabant.jpg",
                            "wiki", 
                            "Codex_Manesse_Johann_von_Brabant.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_Heinrich_von_Rugge.jpg",
                            "wiki", 
                            "Codex_Manesse_Heinrich_von_Rugge.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_Heinrich_von_Breslau.jpg",
                            "wiki", 
                            "Codex_Manesse_Heinrich_von_Breslau.jpg", 
                            "A knight receiving a lady's favour at a tournament, illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_Hartmann_von_Aue.jpg",
                            "wiki", 
                            "Codex_Manesse_Hartmann_von_Aue.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_Der_wilde_Alexander_f412r.jpg",
                            "wiki", 
                            "Codex_Manesse_Der_wilde_Alexander_f412r.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_397v_Durner.jpg",
                            "wiki", 
                            "Codex_Manesse_397v_Dürner.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_316v_Friedrich_der_Knecht.jpg",
                            "wiki", 
                            "Codex_Manesse_316v_Friedrich_der_Knecht.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_197v_Goesli_von_Ehenheim.jpg",
                            "wiki", 
                            "Codex_Manesse_197v_Goesli_von_Ehenheim.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_166v_Walther_von_Metze.jpg",
                            "wiki", 
                            "Codex_Manesse_166v_Walther_von_Metze.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");
    insert_into_images("horsemen/Codex_Manesse_073r_Ulrich_von_Gutenburg.jpg",
                            "wiki", 
                            "Codex_Manesse_073r_Ulrich_von_Gutenburg.jpg", 
                            "Illustration of Codex Manesse, <br/>cr. 1304 or cr. 1340, Zürich, Switzerland");

    insert_into_images("horsemen/tour-ferrande101.jpg",
                            "horizon-provence.com", 
                            "https://www.horizon-provence.com/pernes-les-fontaines/index_english.htm", 
                            "Frescoes illustrating the conquest of the Kingdom of Naples and Sicily by the Count of Provence Charles of Anjou, <br/>13th century, The Ferrande Tower, Pernes-les-Fontaines, Provence, France");
    insert_into_images("horsemen/tour-ferrande103.jpg",
                            "horizon-provence.com", 
                            "https://www.horizon-provence.com/pernes-les-fontaines/index_english.htm", 
                            "Frescoes illustrating the conquest of the Kingdom of Naples and Sicily by the Count of Provence Charles of Anjou, <br/>13th century, The Ferrande Tower, Pernes-les-Fontaines, Provence, France");
    insert_into_images("horsemen/tour-ferrande104.jpg",
                            "horizon-provence.com", 
                            "https://www.horizon-provence.com/pernes-les-fontaines/index_english.htm", 
                            "Frescoes illustrating the conquest of the Kingdom of Naples and Sicily by the Count of Provence Charles of Anjou, <br/>13th century, The Ferrande Tower, Pernes-les-Fontaines, Provence, France");
    insert_into_images("horsemen/Azzo_di_Masetto_-_Tournament_and_Hunting_Scenes_-_Google_Art_Project_cropped.jpg",
                            "wiki", 
                            "Azzo_di_Masetto_-_Tournament_and_Hunting_Scenes_-_Google_Art_Project.jpg", 
                            "Tournament scene, fresco, <br/>1289, Azzo di Masetto, Palazzo Comunale, San Gimignano, Italy");
    insert_into_images("horsemen/Harley_MS_4431_knights_jousting_Pizan.png",
                            "Wikipedia", 
                            "https://en.wikipedia.org/wiki/File:Harley_MS_4431_knights_jousting_Pizan.png", 
                            "Ladies watching knights jousting, illustrating 'Le Duc des vrais amants', from a collection of works presented in 1414 by Christine de Pizan to Isabeau of Bavaria, <br/>1410 - cr. 1414, Paris (?), France");
    insert_into_images("horsemen/harley_ms_4205_f021v.jpg",
                            "bl.uk", 
                            "https://www.bl.uk/catalogues/illuminatedmanuscripts/record.asp?MSID=6579&CollID=8&NStart=4205", 
                            "Illustration of Sir Thomas Holme's Book of Arms, <br/>cr. 1446, before 1448, London (?), South-East England");
    insert_into_images("horsemen/harley_ms_4205_f015v.jpg",
                            "bl.uk", 
                            "https://www.bl.uk/catalogues/illuminatedmanuscripts/record.asp?MSID=6579&CollID=8&NStart=4205", 
                            "Illustration of Sir Thomas Holme's Book of Arms, <br/>cr. 1446, before 1448, London (?), South-East England");
    insert_into_images("horsemen/harley_ms_4205_f010r.jpg",
                            "bl.uk", 
                            "https://www.bl.uk/catalogues/illuminatedmanuscripts/record.asp?MSID=6579&CollID=8&NStart=4205", 
                            "Illustration of Sir Thomas Holme's Book of Arms, <br/>cr. 1446, before 1448, London (?), South-East England");
    insert_into_images("horsemen/Rene_dAnjou_Livre_des_tournois.jpg",
                            "wiki", 
                            "René_d%27Anjou_Livre_des_tournois_France_Provence_XVe_siècle_Barthélemy_d%27Eyck.jpg", 
                            "Illustration of Livre des tournois France Provence by René d'Anjou, <br/>cr. 1460, Barthélemy d'Eyck, Provence, France");
    insert_into_images("horsemen/01_1501.jpg",
                            "wga.hu", 
                            "https://www.wga.hu/html_m/zgothic/miniatur/1501-550/4other/01_1501.html", 
                            "Illustration of the Tournament Book (Ross 711), <br/>cr. 1500, German");
    insert_into_images("horsemen/Hausbuch_Wolfegg_21v_22r_Scharfrennen.jpg",
                            "wiki", 
                            "Hausbuch_Wolfegg_21v_22r_Scharfrennen.jpg", 
                            "Illustration of the Medieval House Book of Wolfegg Castle, <br/>cr. 1480, German");
    insert_into_images("horsemen/e-codices_snm-SH000228_056_small.jpg",
                            "e-codices.unifr.ch", 
                            "http://www.e-codices.unifr.ch/en/snm/SH000228/56", 
                            "Illustration of the Housebook of the Lords of Hallwil, <br/>second half of the 16th century, German (now Switzerland)");

    insert_into_images("horsemen/inx960x640.jpg",
                            "kompravda.eu", 
                            "https://www.kompravda.eu/daily/27010.1/4073567/", 
                            "Saint George on the facade of Polytechnic Museum, <br/>created in 1872, restaured in 2019, Moscow, Russia");   
    insert_into_images("horsemen/Polytechnical_Museum_after_reconstruction.jpg",
                            "wiki", 
                            "Polytechnical_Museum_after_reconstruction.jpg", 
                            "Facade of Polytechnic Museum, <br/>created in 1872, restaured in 2019, Moscow, Russia");
    insert_into_images("horsemen/Saint_George-Blazon_of_Moscow-City_Hall-Tverskaya_str.13.jpg",
                            "wiki", 
                            "Saint_George-Blazon_of_Moscow-City_Hall-Tverskaya_str.,13.jpg", 
                            "Saint George on the facade of New Moscow City Hall, <br/>1990s, Moscow, Russia");
    insert_into_images("horsemen/2014_Moscow_city_hall.jpg",
                            "wiki", 
                            "2014_Moscow_city_hall_Мэрия_Москвы.JPG", 
                            "New Moscow City Hall, <br/>created in 1782 by Matvey Kazakoff, restaured in 1990s, Moscow, Russia");

    insert_into_images("horsemen/TripoliGreece6.jpg",
                            "wiki", 
                            "TripoliGreece6.jpg", 
                            "Statue of Theodoros Kolokotronis, <br/>1993 (?), Tripoli, Greece");
    insert_into_images("horsemen/Frizis_Chalkida_1.jpg",
                            "wiki", 
                            "Frizis_Chalkida_1.jpg", 
                            "Statue of Mordechai Frizis, <br/>?, Chalcis, Greece");
    insert_into_images("horsemen/panoramio.jpg",
                            "wiki", 
                            "Γεώργιος_Καραϊσκάκης,_Ζάππειο_-_panoramio.jpg", 
                            "Statue of Georgios Karaiskakis, <br/>1966, Georgios Karaiskakis, Athens, Greece");
    insert_into_images("horsemen/main-qimg-3879b9f05c3dcb054aa7abd992eb19e6.jpeg",
                            "realbharat.org", 
                            "https://www.realbharat.org/first-freedom-fighter-of-india-kittur-rani-chennamma/", 
                            "Kittur Chennamma, <br/>2010 or earlier, India");
    insert_into_images("horsemen/Chennamma_circle_hubli.jpg",
                            "Wikipedia", 
                            "https://en.wikipedia.org/wiki/File:Chennamma_circle_hubli.jpg", 
                            "Statue of Kittur Chennamma, <br/>?, Ganesh and Prakash Patkar, Hubli, Karnataka, India");
    insert_into_images("horsemen/India-Belgaum-region-Kitturu-Chennamma-in-Kakati-2.jpg",
                            "ES", 
                            "chennamma-3", 
                            "Statue of Kittur Chennamma, <br/>2008, Jasu Shilpi, Kakati, Karnataka, India");
    insert_into_images("horsemen/Rani_Laxmi_Bai_Statue_At_Laxmi_Bai_National_University_of_Physical_Education_Gwalior_-_panoramio.jpg",
                            "wiki", 
                            "Rani_Laxmi_Bai_Statue_At_Laxmi_Bai_National_University_of_Physical_Education_Gwalior_-_panoramio.jpg", 
                            "Statue of Rani Lakshmibai, <br/>2008, Laxmi Bai National University of Physical Education, Gwalior, India");
    insert_into_images("horsemen/Statue_of_Maharani_Laxmi_Bai_Samadhi_Gwalior_-_panoramio.jpg",
                            "wiki", 
                            "Statue_of_Maharani_Laxmi_Bai_Samadhi_Gwalior_-_panoramio.jpg", 
                            "Statue of Rani Lakshmibai, <br/>2006, Jasu Shilpi, Gwalior, India");
    insert_into_images("horsemen/India-Jhansi-Lakshmibai-2.jpg",
                            "ES", 
                            "lakshmibai-rani-of-jhansi-6", 
                            "Statue of Rani Lakshmibai, <br/>1995, Jhansi, Uttar Pradesh, India");
    insert_into_images("horsemen/4101741327_7dd5a52ef0_b.jpg",
                            "Kenneth John @ flickr.com", 
                            "https://www.flickr.com/photos/23052799@N06/4101741327/", 
                            "Statue of Rani Lakshmibai, <br/>?, Swarna Jayanti Park, Ghaziabad, Uttar Pradesh, India");
    insert_into_images("horsemen/tumblr_n5c7n6qM2O1qi1raio1_1280.jpg",
                            "rheadaniel @ tumblr.com", 
                            "https://rheadaniel.tumblr.com/post/99625741455/", 
                            "Rani Lakshmibai, <br/>2014, Rhea Daniel, Mumbai, India");
    insert_into_images("horsemen/Bataille-de-Mons-en-Pevele.jpg",
                            "wiki", 
                            "Bataille-de-Mons-en-Pévèle.jpg", 
                            "Battle of Mons-en-Pévèle (1304), <br/>cr. 1839, Charles-Philippe Larivière, Galerie des Batailles, Versailles, France");
    insert_into_images("horsemen/HeimBattleRocroy.jpg",
                            "wiki", 
                            "HeimBattleRocroy.jpg", 
                            "Battle of Rocroi (1643), <br/>cr. 1834, François Joseph Heim, Galerie des Batailles, Versailles, France");
   insert_into_images("horsemen/Pierre_Franque_-_Bataille_de_Lens_-_1648.jpg",
                            "wiki", 
                            "Pierre_Franque_-_Bataille_de_Lens_-_1648.jpg", 
                            "Battle of Lens (1648), <br/>cr. 1835, Pierre Franque, Galerie des Batailles, Versailles, France");
    insert_into_images("horsemen/LariviereBatailleDunes.jpg",
                            "wiki", 
                            "LariviereBatailleDunes.jpg", 
                            "Battle of the Dunes at the siege of Dunkirk (1658), <br/>1837, Charles-Philippe Larivière, Galerie des Batailles, Versailles, France");
    insert_into_images("horsemen/Vendome-and-PhilipV.jpg",
                            "wiki", 
                            "Vendome-and-PhilipV.jpg", 
                            "Battle of Villaviciosa (1710), <br/>1836, Jean Alaux, Galerie des Batailles, Versailles, France");
    insert_into_images("horsemen/Bataille_de_Fleurus_1794.jpeg",
                            "wiki", 
                            "Bataille_de_Fleurus_1794.JPG", 
                            "Battle of Fleurus (1794), <br/>1837, Jean-Baptiste Mauzaisse, Galerie des Batailles, Versailles, France");
    insert_into_images("horsemen/Iena.jpg",
                            "wiki", 
                            "Iena.jpg", 
                            "Battle of Jena (1806), <br/>1836, Horace Vernet, Galerie des Batailles, Versailles, France");
    insert_into_images("horsemen/Heim_Francois-Joseph_-_Louis-Philippe_Opening_the_Galerie_des_Batailles_-_1837.jpg",
                            "wiki", 
                            "Heim,_François-Joseph_-_Louis-Philippe_Opening_the_Galerie_des_Batailles_-_1837.jpg", 
                            "Louis-Philippe Opening the Galerie des Batailles (1837), <br/>1837, François Joseph Heim, Versailles, France");
    insert_into_images("horsemen/QuijoteNubesChapultepec.jpg",
                            "wiki", 
                            "QuijoteNubesChapultepec.JPG", 
                            "Don Quixote in the Clouds, <br/>1989, Chapultepec Park, Mexico City, Mexico");
    insert_into_images("horsemen/Estatua_Ecuestre_de_Pedro_Ascencio_de_Alquisiras.jpg",
                            "wiki", 
                            "Estatua_Ecuestre_de_Pedro_Ascencio_de_Alquisiras.jpg", 
                            "Statue of Pedro Ascencio Alquisiras, <br/>?, Martín Enríquez Loza, ?, Mexico");
    insert_into_images("horsemen/Estatua_de_Pancho_Villa_en_el_Cerro_de_la_Bufa.jpg",
                            "wiki", 
                            "Estatua_de_Pancho_Villa_en_el_Cerro_de_la_Bufa.JPG", 
                            "Statue of Pancho Villa, <br/>?, Bufa Hill, Zacatecas, Mexico");
    insert_into_images("horsemen/StatueJoseSanMartinDF.jpeg",
                            "wiki", 
                            "StatueJoseSanMartinDF.JPG", 
                            "Statue of José de San Martin, <br/>1973, after the statue of Louis Joseph Daumas (1862, Buenos Aires, Argentina), Mexico City, Mexico");
    insert_into_images("horsemen/Don_Jose_Maria_Morelos.jpg",
                            "wiki", 
                            "Don_José_María_Morelos.jpg", 
                            "Statue of José María Morelos, <br/>?, Morelos Park, La Mesa, Baja California, Mexico");
    insert_into_images("horsemen/Zapata1.jpg",
                            "wiki", 
                            "Zapata1.jpg", 
                            "Statue of Emiliano Zapata, <br/>?, Cuernavaca Morelos, Mexico");
    insert_into_images("horsemen/zapata.jpg",
                            "planoinformativo.com", 
                            "https://planoinformativo.com/515405/conmemoran-aniversario-luctuoso-de-emiliano-zapata-slp", 
                            "Statue of Emiliano Zapata, <br/>?, Soledad de Graciano Sánchez, Mexico");
    insert_into_images("horsemen/mexi5370EZG.jpg",
                            "travelbymexico.com", 
                            "http://en.travelbymexico.com/toluca/places-to-visit/?nom=ktolteatromorelos", 
                            "Statue of José María Morelos, <br/>?, Toluca, Mexico");
    insert_into_images("horsemen/31_big.jpg",
                            "wikimapia.org", 
                            "https://wikimapia.org/4294600/Statue-of-Emiliano-Zapata-Salazar", 
                            "Statue of Emiliano Zapata, <br/>?, Culiacan, Mexico");
    insert_into_images("horsemen/6591358649_c2469dd595_h.jpg",
                            "acuarela08 @ flickr.com", 
                            "https://www.flickr.com/photos/acuarela08/6591358649", 
                            "Statue of Santiago Matamoros, <br/>?, Santiago de Querétaro, Querétaro, México");
    insert_into_images("horsemen/13889907782_e95373d99f_b.jpg",
                            "Peter Bogdanovich @ flickr.com", 
                            "https://www.flickr.com/photos/110822877@N06/13889907782", 
                            "Statue of Emiliano Zapata, <br/>1985 (?), Tulancingo, Hidalgo, Mexico");
    insert_into_images("horsemen/BRIDAL_VEIL_FALLS.jpg",
                            "wiki", 
                            "BRIDAL_VEIL_FALLS.jpg", 
                            "Govetts Leap Falls, north of Blackheath, in the Blue Mountains National Park, New South Wales, Australia");
    insert_into_images("horsemen/IMG_0396.jpg",
                            "Rua dos Navegantes", 
                            "http://ruadosnavegantes.blogspot.com/2011/05/estatua-que-veio-de-macau-para-lisboa.html", 
                            "Statue of João Maria Ferreira do Amaral, <br/>1935, Maximiano Alves, Portugal");
    insert_into_images("horsemen/Elazig2.jpeg",
                            "wiki", 
                            "Elazığ2.JPG", 
                            "Statue of Belek Ghazi, <br/>1964, Nurettin Orhan, Elazig, Turkey");
    insert_into_images("horsemen/1911326323850.jpg",
                            "musilgazetesi.com", 
                            "http://musilgazetesi.com/haber/akkus-birlik-ve-beraberlik-mesaji-verdi--24193.html", 
                            "Statue of Sultan Alp Arslan, <br/>?, Malazgirt, Turkey");
    insert_into_images("horsemen/5c895100b81a771347b3655a007fa6fa.jpg",
                            "aydindenge.com.tr", 
                            "http://www.aydindenge.com.tr/guncel/27/08/2013/aydin-sultan-alparslanla-saha-kalkti/galeri/2", 
                            "Statue of Sultan Alp Arslan, <br/>2013, Mustafa Tunçay, Aydin, Turkey");
    insert_into_images("horsemen/32_big.jpg",
                            "wikimapia.org", 
                            "http://wikimapia.org/8254727/Statue-of-Atat%C3%BCrk", 
                            "Statue of Mustafa Kemal Atatürk, <br/>?, Bodrum, Turkey");
    insert_into_images("horsemen/south_africa.jpg",
                            "boerenbrit.com", 
                            "https://www.boerenbrit.com/archives/34915", 
                            "Statue of Christiaan de Wet, <br/>1954, Coert Steynberg, Bloemfontein, Turkey");
    insert_into_images("horsemen/Macedonia_Square_Skopje_NMK.jpg",
                            "wiki", 
                            "Macedonia_Square,_Skopje,_NMK.jpg", 
                            "Warrior on a Horse, <br/>2011, Valentina Stevanovska, Skopje, Macedonia");
    insert_into_images("horsemen/Guerrero_a_caballo_Skopie_Macedonia_2014-04-17_DD_109.jpg",
                            "wiki", 
                            "Guerrero_a_caballo,_Skopie,_Macedonia,_2014-04-17,_DD_109.JPG", 
                            "Warrior on a Horse, <br/>2011, Valentina Stevanovska, Skopje, Macedonia");
    insert_into_images("horsemen/gabriela.png",
                            "kapisanancentre.com", 
                            "http://www.kapisanancentre.com/blog/2013/04/25/clutch-vol-5-fight-like-a-girl", 
                            "Gabriela Silang fighting against Spanish forces, <br/>?, Francisco V. Coching (1919 – 1998), Philippines");
    insert_into_images("horsemen/main-qimg-4324ec7a70f3f798af7885cd3376af74.jpeg",
                            "liberationnews.org", 
                            "https://www.liberationnews.org/07-04-27-gabriela-silang-anticolonial-f-html/", 
                            "Gabriela Silang fighting against Spanish forces, <br/>?, Philippines");
    insert_into_images("horsemen/David_of_Sasun_Yerevan.jpg",
                            "wiki", 
                            "David_of_Sasun_Yerevan.jpg", 
                            "Statue of David of Sassoun, <br/>1959, Yervand Kochar, Yerevan, Armenia");
    insert_into_images("horsemen/Sasuntsi_Davit__Relief.jpg",
                            "wiki", 
                            "%22Sasuntsi_Davit%22_Relief.jpg", 
                            "Relief showing David of Sassoun, <br/>?, Artashes Hovsepyan, Cafesjian Center for the Arts, Armenia");
    insert_into_images("horsemen/Hakob_Kojoyan._David_of_Sassoun.jpg",
                            "wiki", 
                            "Hakob_Kojoyan._David_of_Sassoun.jpg", 
                            "David of Sassoun, <br/>1922, Hakob Kojoyan, Armenia");
    insert_into_images("horsemen/07932.jpg",
                            "UNESCO Intangible Cultural Heritage", 
                            "https://ich.unesco.org/en/RL/performance-of-the-armenian-epic-of-daredevils-of-sassoun-or-david-of-sassoun-00743", 
                            "David of Sassoun, <br/>2012 or earlier, 13 years-old Armen Adyan, Armenia");
    insert_into_images("horsemen/lira.png",
                            "numista", 
                            "pieces1339", 
                            "5 Lira large type showing Atatürk on horseback on obverse, <br/>minted in 1974-1979, Turkey");
    insert_into_images("horsemen/RP-P-OB-1140-scaled.jpg",
                            "RJK", 
                            "RP-P-OB-1140", 
                            "Fight between two wild men on horseback, <br/>1455 - 1503, Israhel van Meckenem, after Meester of the Amsterdam Cabinet, Bocholt, Germany");
    insert_into_images("horsemen/RP-P-OB-915-scaled.jpg",
                            "RJK", 
                            "RP-P-OB-915", 
                            "Wild woman on a unicorn, <br/>1473 - 1477, Master of the Amsterdam Cabinet, Germany");
    insert_into_images("horsemen/Charles_Le_Brun_Le_Passage_du_Granique_1665.png",
                            "wiki", 
                            "Charles_Le_Brun,_Le_Passage_du_Granique,_1665.png", 
                            "Battle of the Granicus, <br/>1665, Charles Le Brun, Paris, France");
    insert_into_images("horsemen/Charles_Le_Brun_-_Alexander_and_Porus_-_WGA12530.jpg",
                            "wiki", 
                            "Charles_Le_Brun_-_Alexander_and_Porus_-_WGA12530.jpg", 
                            "Alexander and Porus, <br/>1665, Charles Le Brun, Paris, France");
    insert_into_images("horsemen/Charles_Le_Brun_-_Expulsion_Of_Heliodorus-scaled.jpeg",
                            "wiki", 
                            "Charles_Le_Brun_-_Banishment_of_Iliadore.JPG", 
                            "Expulsion Of Heliodorus, <br/>before 1690, Charles Le Brun, Paris, France");
    insert_into_images("horsemen/Valenciennes_remportee_dassaut.jpg",
                            "wiki", 
                            "Valenciennes_remportée_d%27assaut.jpg", 
                            "Regaining Valenciennes, <br/>1720, Louis Surugue after Van der Meulen and Charles Le Brun, Paris, France");
    insert_into_images("horsemen/Prise_de_Saint-Omer.jpg",
                            "wiki", 
                            "Prise_de_Saint-Omer.jpg", 
                            "Battle of Saint-Omer, <br/>1720, Louis Surugue after Van der Meulen and Charles Le Brun, Paris, France");
    insert_into_images("horsemen/Bataille_de_Cassel.jpg",
                            "wiki", 
                            "Bataille_de_Cassel.jpg", 
                            "Battle of Cassel, <br/>1720, Louis Surugue after Van der Meulen and Charles Le Brun, Paris, France");
    insert_into_images("horsemen/Valdivia_Villagra_y_Alderete_segun_Ovalle.jpeg",
                            "wiki", 
                            "Valdivia,_Villagra_y_Alderete_segun_Ovalle.JPG", 
                            "Pedro de Valdivia, illustration to 'Historical relationship of the Kingdom de Chile and the missions and misteries exercised by the Society of Jesus' by Alonso de Ovalle <br/>1646, Chile");
    insert_into_images("horsemen/Gamboa_Sarvia_y_sotomayor.jpeg",
                            "wiki", 
                            "Gamboa,_Sarvia_y_sotomayor.JPG", 
                            "Martín Ruiz de Gamboa, Melchor Bravo de Saravia and Alonso de Sotomayor, Spanish conquistadors, illustration to 'Historical relationship of the Kingdom de Chile and the missions and misteries exercised by the Society of Jesus' by Alonso de Ovalle, <br/>1646, Chile");
    insert_into_images("horsemen/Batalla_ente_espanoles_y_mapuches_-_por_Alonso_de_Ovalle.jpg",
                            "wiki", 
                            "Batalla_ente_españoles_y_mapuches_-_por_Alonso_de_Ovalle.jpg", 
                            "Battle between Spaniards and Mapuches during the Arauco War, illustration to 'Tabula geographica Regni Chile' by Alonso de Ovalle, <br/>1646, Chile");
    insert_into_images("horsemen/crown_1935.png",
                            "numista", 
                            "pieces10337", 
                            "One Crown commemorating George V Silver Jubilee showing St. George on horseback on reverse, <br/>minted in 1935, United Kingdom");
    insert_into_images("horsemen/Lucas_Cranach_d.A._-_Der_heilige_Georg_im_Kampf_mit_dem_Drachen_Vienna.jpg",
                            "wiki", 
                            "Lucas_Cranach_d.Ä._-_Der_heilige_Georg_im_Kampf_mit_dem_Drachen_(Vienna).jpg", 
                            "Saint George Fighting the Dragon, <br/>cr. 1510-20, workshop of Lucas Cranach the Elder, Germany");
insert_into_images("horsemen/ikmk_coin_18201481.jpg", 
                            "ikmk", 
                            "18201481", 
                            "As showing the emperor on horseback on reverse, <br/>minted in 350 AD under Nepotianus, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18201471.jpg", 
                            "ikmk", 
                            "18201471", 
                            "As showing the emperor on horseback on reverse, <br/>minted in 350-351 AD under Magnentius, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18236941.jpg", 
                            "ikmk", 
                            "18236941", 
                             "As showing a horseman on reverse, <br/>minted in 27 BC-14 AD under Augustus, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18236949.jpg", 
                            "ikmk", 
                            "18236949", 
                            "As showing a horseman on reverse, <br/>minted in 27 BC-14 AD under Augustus, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18230064.jpg", 
                            "ikmk", 
                            "18230064", 
                            "Sestertius showing Titus on horseback on reverse, <br/>minted in 72-73 AD under Titus, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18219808.jpg", 
                            "ikmk", 
                            "18219808", 
                            "Sestertius showing an equestrian statue on reverse, <br/>minted in 42-43 AD under Claudius, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18236701.jpg", 
                            "ikmk", 
                            "18236701", 
                            "Solidus showing Crispus on horseback on reverse, <br/>minted in 324-325 AD under Constantine I, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18201473.jpg", 
                            "ikmk", 
                            "18201473", 
                            "As showing the emperor on horseback on reverse, <br/>minted in 350-351 AD under Magnentius, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18204280.jpg", 
                            "ikmk", 
                            "18204280", 
                            "Aureus showing the emperor on horseback on reverse, <br/>minted in 166 AD under Lucius Verus, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18232830.jpg", 
                            "ikmk", 
                            "18232830", 
                            "Sestertius showing the emperor on horseback on reverse, <br/>minted in 87 AD under Domitian, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18220883.jpg", 
                            "ikmk", 
                            "18220883", 
                            "Sestertius showing Nero on horseback on reverse, <br/>minted in 64 AD under Nero, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18250418.jpg", 
                            "ikmk", 
                            "18250418", 
                            "As showing Magnentius on horseback on reverse, <br/>minted in 350-351 under Magnentius, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18201363.jpg", 
                            "ikmk", 
                            "18201363", 
                            "Denarius showing a horseman on reverse, <br/>minted in 116-115 BC, Roman Republic");
insert_into_images("horsemen/ikmk_coin_18201547.jpg", 
                            "ikmk", 
                            "18201547", 
                            "Denarius showing a horseman on horseback on reverse, <br/>minted in 90 BC, Roman Republic");
insert_into_images("horsemen/ikmk_coin_18201832.jpg", 
                            "ikmk", 
                            "18201832", 
                            "Denarius showing a horseman on horseback on reverse, <br/>minted in 67 BC, Roman Republic");
insert_into_images("horsemen/ikmk_coin_18201843.jpg", 
                            "ikmk", 
                            "18201843", 
                            "Denarius showing an equestrian statue on reverse, <br/>minted in 56 BC, Roman Republic");
insert_into_images("horsemen/image04123.jpg", 
                            "ikmk", 
                            "18206785", 
                            "Aureus showing Augustus on horseback on reverse, <br/>minted in 32-29 BC under Augustus, the last type to be issued before the Battle of Actium, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18202573.jpg", 
                            "ikmk", 
                            "18202573", 
                            "Aureus showing Augustus on horseback on reverse, <br/>minted in 8 BC under Augustus, Roman Empire");
insert_into_images("horsemen/ikmk_coin_18231792.jpg", 
                            "ikmk", 
                            "18231792", 
                            "Aureus showing Domitian on horseback on reverse, <br/>minted in 73-75 AD under Vespasian, Roman Empire");
insert_into_images("horsemen/pieces66918.png", 
                            "numista", 
                            "pieces66918", 
                            "Denarius showing Dioscuri brothers on horseback on reverse, <br/>minted in 122 BC, Roman Republic");
insert_into_images("horsemen/pieces66751.png", 
                            "numista", 
                            "pieces66751", 
                            "Denarius showing Dioscuri brothers on horseback on reverse, <br/>minted in 206 - 200 BC, Roman Republic");
insert_into_images("horsemen/pieces49982.png", 
                            "numista", 
                            "pieces49982", 
                            "Denarius showing Dioscuri brothers on horseback and a dog on reverse, <br/>minted in 146 BC, Roman Republic");
insert_into_images("horsemen/pieces34406.png", 
                            "numista", 
                            "pieces34406", 
                            "Denarius showing Dioscuri brothers on horseback on reverse, <br/>minted in 136 BC, Roman Republic");
insert_into_images("horsemen/180620003bz.jpg", 
                            "ma-shops.com", 
                            "https://www.ma-shops.com/loechte/item.php?id=180620003", 
                            "Aureus showing Commodus on horseback spearing a panther on reverse, <br/>minted in 184-5 under Commodus, Roman empire");
insert_into_images("horsemen/Wise10.1_Fig.03.jpg", 
                            "jhna.org", 
                            "https://jhna.org/articles/cycles-memory-circular-compassion-germanic-passion-diptych/", 
                            "Saint George and the dragon, <br/>cr. 1470, southern Germany");
insert_into_images("horsemen/Stgeorge-dragon.jpg", 
                            "wiki", 
                            "Stgeorge-dragon.jpg", 
                            "Saint George and the dragon, <br/>1889-90, Gustave Moreau, Paris, France");
insert_into_images("horsemen/Saint_George_Arsen_Birch.png", 
                            "saatchiart.com", 
                            "https://www.saatchiart.com/art/Painting-Victory-of-Saint-George/1159947/4641547/view", 
                            "Saint George and the dragon, <br/>2010s, Arsen Birch, Ukraine");
insert_into_images("horsemen/Saint_George_Adrian_Buba.png", 
                            "saatchiart.com", 
                            "https://www.saatchiart.com/art/Painting-Saint-George-and-the-Dragon/829920/4495992/view", 
                            "Saint George and the dragon, <br/>?, Adrian Buba (b. 1953), France");
insert_into_images("horsemen/Olaf_Rude_1918_Sankt_Georg.jpg", 
                            "Wikipedia", 
                            "https://en.wikipedia.org/wiki/File:Olaf_Rude,_1918,_Sankt_Georg_og_dragen_(Saint_George_and_the_dragon),_oil_on_canvas,_99.7_x_79.9_cm,_ARoS_Aarhus_Kunstmuseum.jpg", 
                            "Saint George and the dragon, <br/>1918, Olaf Rude, Denmark");
insert_into_images("horsemen/Modernist-Art-Deco-Style-Painting-of-St_-George-and-the-Dragon-Signed-Dana.png", 
                            "1stdibs.com", 
                            "https://www.1stdibs.com/furniture/wall-decorations/paintings/modernist-art-deco-style-painting-st-george-dragon-signed-dana/id-f_1813892/", 
                            "Saint George and the dragon, <br/>cr. 1960s, signed: Dana, United States");
insert_into_images("horsemen/Wilhelm_von_Diez_Sankt_Georg_der_Drachentoter_1897.jpg", 
                            "wiki", 
                            "Wilhelm_von_Diez_Sankt_Georg_der_Drachentöter_1897.jpg", 
                            "Saint George and the dragon, <br/>1897, Wilhelm von Diez, Munich, Germany");
insert_into_images("horsemen/AN00047780_001_l.jpg", 
                            "BM", 
                            "1419286", 
                            "Saint George and the dragon, <br/>1507-8, Lucas Cranach the Elder, Germany");
insert_into_images("horsemen/Meister_des_Dobelner_Hochaltars_-_Der_Heilige_Georg_Hamburger_Kunsthalle.jpg", 
                            "wiki", 
                            "Meister_des_Döbelner_Hochaltars_-_Der_Heilige_Georg_(Hamburger_Kunsthalle).jpg", 
                            "Saint George and the dragon, <br/>cr. 1511-13, circle of Lucas Cranach the Elder, Germany");
insert_into_images("horsemen/cranach-lucas-saint-george-on-ho-___-prints.png", 
                            "Sothebys", 
                            "2012/old-master-modern-contemporary-prints/lot.5.html", 
                            "Saint George and the dragon, <br/>1512, Lucas Cranach the Elder, Germany");
insert_into_images("horsemen/Die_Bekehrung_des_Heiligen_Paulus.jpg", 
                            "wiki", 
                            "Die_Bekehrung_des_Heiligen_Paulus.jpg", 
                            "The Conversion of Saint Paul, <br/>cr. 1547-9, Lucas Cranach the Younger, Germany");
insert_into_images("horsemen/Lucas_Cranach_d.J._-_Die_Bekehrung_des_Saulus_1549_Germanisches_Nationalmuseum.jpg", 
                            "wiki", 
                            "Lucas_Cranach_d.J._-_Die_Bekehrung_des_Saulus_(1549,_Germanisches_Nationalmuseum).jpg", 
                            "The Conversion of Saul, <br/>1549, Lucas Cranach the Younger, Germany");
insert_into_images("horsemen/256585-1330623098.jpg", 
                            "RC", 
                            "800082", 
                            "A woman abducted by a man on a unicorn, <br/>1516, Albrecht Dürer, Germany");
insert_into_images("horsemen/puss_on_unicorn.png", 
                            "redbubble.com", 
                            "https://www.redbubble.com/people/liquegifts/works/28357437", 
                            "Cat riding a unicorn, <br/>2010s, Lique (?)");
insert_into_images("horsemen/death_on_unicorn.png", 
                            "redbubble.com", 
                            "https://www.redbubble.com/people/underheaven/works/34246859", 
                            "Grim Reaper riding a unicorn, <br/>2010s,  Nikolay Todorov (?)");
insert_into_images("horsemen/ClipartKey_1040913.png", 
                            "clipartkey.com", 
                            "https://www.clipartkey.com/view/oRxwwm_santa-riding-a-unicorn/", 
                            "Santa riding a unicorn, <br/>2010s, Douislouis (?)");
insert_into_images("horsemen/8831bbd049433a1ebe5996df72e581dd.jpg", 
                            "pinterest.com", 
                            "https://www.pinterest.com/pin/528187862528329017", 
                            "Thor riding a unicorn, <br/>2010s, Rae (?)");
insert_into_images("horsemen/37c39e7b7504b1145e88df19c4c15f5b.jpg", 
                            "pinterest.com", 
                            "https://www.pinterest.com/pin/216032113346654782", 
                            "Jesus riding a unicorn, <br/>2010s, Alejandro Valdés (?)");
insert_into_images("horsemen/f5513b0a56ad06843442cb176b75fc1a.jpg", 
                            "pinterest.com", 
                            "https://www.pinterest.com/pin/487092515940058379", 
                            "Girl Riding a Unicorn, <br/>2010s");
insert_into_images("horsemen/boy-unicorn-art-vector-cartoon-design-58370450.jpg", 
                            "dreamstime", 
                            "58370450", 
                            "Boy Riding a Unicorn, <br/>Martinus Sumbaji, 2010s");
insert_into_images("horsemen/iStock-614121224.jpg", 
                            "dreamstime", 
                            "78761255", 
                            "Unicorn start up, <br/>Aleutie, 2010s");
insert_into_images("horsemen/1-45.jpg", 
                            "dreamstime", 
                            "143373347", 
                            "Unicorn start up, <br/>Rudall30, 2010s");
insert_into_images("horsemen/businessman-riding-unicorn-arrow-symbol-successful-achievement-leadership-career-vector-illustration-flat-162506430.jpg", 
                            "dreamstime", 
                            "162506430", 
                            "Businessman riding a unicorn on arrow, <br/>Pishit Kamsink, 2010s");
insert_into_images("horsemen/homosexual-men-riding-unicorn-rainbow-colors-minimalist-style-cartoon-flat-raster-homosexual-men-riding-unicorn-155404435.jpg", 
                            "dreamstime", 
                            "155404435", 
                            "Gay couple riding a unicorn, <br/>Pishit Kamsink, 2010s");
insert_into_images("horsemen/young-woman-riding-unicorn-19815300.jpg", 
                            "dreamstime", 
                            "19815300", 
                            "Young woman riding a unicorn, <br/>Viktoriia Panchenko, 2010s");
insert_into_images("horsemen/784-7845670_deadpool-clipart-sticker-cutting-deadpool-riding-a-unicorn.jpg", 
                            "NicePNG", 
                            "https://www.nicepng.com/ourpic/u2t4r5r5o0e6a9i1_deadpool-clipart-sticker-cutting-deadpool-riding-a-unicorn/", 
                            "Deadpool riding a unicorn, <br/>2010s");
insert_into_images("horsemen/Postumia_4_96_BC_56081.jpg", 
                            "wiki", 
                            "Postumia_4_96_BC_56081.jpg", 
                            "Postumia denarius showing three horsemen over fallen warrior on reverse, <br/>minted in 96 BC, Roman Republic");
insert_into_images("horsemen/Allegory-of-the-Treasures-of-the-Sea.png", 
                            "Christies", 
                            "circle-of-jacopo-zucchi-florence-c-1540-c-5630035", 
                            "Allegory of the Treasures of the Sea, <br/>?, Circle of Jacopo Zucchi (cr. 1540-1596), Italy");
insert_into_images("horsemen/aaf4e9ca-361b-4fcb-b494-d56ac0fc9cd4.jpg", 
                            "SKD", 
                            "118150", 
                            "Pendant with Saint George as a dragon slayer, <br/>late 16th century, Germany");
insert_into_images("horsemen/AN01454027_001_l.jpg", 
                            "BM", 
                            "39073", 
                            "Pendant with a cupid riding a horse, <br/>1550-1600, Germany (?)");
insert_into_images("horsemen/pitti_2560.jpg", 
                            "Renée DeVoe Mertz", 
                            "https://www.reneedevoemertz.com/visual-writer/tag/Firenze", 
                            "Pendant with a cupid riding a horse, <br/>late 16th century or 17th century, ?");
insert_into_images("horsemen/298ac344-5a78-11e3-8a83-80a98ade4a2a.jpg", 
                            "catawiki.com", 
                            "https://www.catawiki.com/l/255445-wwi-john-hassall-ye-berlyn-tapestrie-wilhelm-s-invasion-of-flanders-1915", 
                            "Ye Berlyn Tapestrie: Wilhelm’s Invasion of Flanders, <br/>1915, John Hassall, Ye Studio Offices, London, the U.K.");
insert_into_images("horsemen/AN01595688_001_l.jpg", 
                            "BM", 
                            "40416",
                            "Silver tankard showing cavaliers including a marshal, probably the Stadtholder (later William III of England) (detail), <br/>cr.1830-70, Berlin (?), Germany");
insert_into_images("horsemen/AN01595684_001_l.jpg", 
                            "BM", 
                            "40416", 
                            "Silver tankard showing cavaliers including a marshal, probably the Stadtholder (later William III of England) (detail), <br/>cr.1830-70, Berlin (?), Germany");
insert_into_images("horsemen/Brueghel_y_stalbemt-david-prado.jpg", 
                            "wiki", 
                            "Brueghel_y_stalbemt-david-prado.jpg", 
                            "Pieter Brueghel el Joven and Adriaen van Stalbent, <br/>cr. 1818-19, Antwerp, Flemish");
insert_into_images("horsemen/La_infanta_Isabel_Clara_Eugenia_en_el_sitio_de_Breda_Museo_del_Prado.jpg", 
                            "wiki", 
                            "La_infanta_Isabel_Clara_Eugenia_en_el_sitio_de_Breda_(Museo_del_Prado).jpg", 
                            "Isabel Clara Eugenia on the Breda Site, <br/>cr. 1628, Peter Snayers, Flemish");
insert_into_images("horsemen/ikmk_coin_18207157.jpg", 
                            "ikmk", 
                            "18207157", 
                            "Quincunx showing a rider on horseback on reverse, <br/>minted in cr. 210-175, Samnium, part of Roman Republic");
insert_into_images("horsemen/AN00065704_001_l.jpg", 
                            "BM", 
                            "230882", 
                            "A manuscript page showing a hunter on horseback, <br/>cr. 1540, Muzaffar 'Ali, Tabriz, Persia (now Iran)");
insert_into_images("horsemen/urn_cambridge.org_id_binary_77242_20160629113719329-0168_03224fig17_1.png", 
                            "cambridge.org", 
                            "https://www.cambridge.org/core/books/cambridge-companion-to-the-roman-republic/roman-culture/8A1C82ECB09F6480FEBA228F646D90AB", 
                            "Reconstruction of the monument of Aemilius Paullus, <br/>shortly after 167 BC, Delphi, part of Roman Republic (now Greece)");
insert_into_images("horsemen/DgSI0JhW4AAk8hA.jpg", 
                            "drjeball @ twitter.com", 
                            "https://twitter.com/drjeball/status/1010082889076297733?lang=en", 
                            "Reliefs from the monument of Aemilius Paullus (current state), <br/>shortly after 167 BC, Delphi, part of Roman Republic (now Greece)");
insert_into_images("horsemen/e195ab07c13c489d1f19670b73593405.jpg", 
                            "Pinterest (image now removed)", 
                            "", 
                            "Reconstruction of reliefs on the monument of Aemilius Paullus, <br/>shortly after 167 BC, Delphi, part of Roman Republic (now Greece)");
insert_into_images("horsemen/TiberiusFlaviusMiccalus.jpeg", 
                            "Pinterest", 
                            "https://www.pinterest.co.uk/pin/467459636324490628/", 
                            "Facade relief from the tomb monument of Tiberius Flavius Miccalus, <br/>50-1 BC, Kamaradere, Perinthus, Roman");
insert_into_images("horsemen/Glanum-mausolee.jpg", 
                            "wiki", 
                            "Glanum-mausolee.jpg", 
                            "Mausoleum of the Julii, <br/>cr. 40 BC, Glanum, part of Roman Republic (now Saint-Rémy de Provence, France)");
insert_into_images("horsemen/Glanum_Mausoleum_north_face.jpeg", 
                            "wiki", 
                            "Glanum_Mausoleum_north_face.JPG", 
                            "North face relief, mausoleum of the Julii, <br/>cr. 40 BC, Glanum, part of Roman Republic (now Saint-Rémy de Provence, France)");
insert_into_images("horsemen/Il_Gesu.jpg", 
                            "wiki", 
                            "Il_Gesu.jpg", 
                            "Il Gesù, motherchurch of the Society of Jesus, <br/>consecrated in 1584, Giacomo Barozzi da Vignola and Giacomo della Porta, Rome, Italy");
insert_into_images("horsemen/Il-concilio-di-Trento-dipinto-di-Pasquale-Cati-1588.jpg", 
                            "wiki", 
                            "Council_of_Trent_by_Pasquale_Cati.jpg", 
                            "Council of Trent, <br/>1588, Pasquale Cati, Santa Maria in Trastvere, Rome, Italy");
insert_into_images("horsemen/Westfaelischer_Friede_in_Muenster_Gerard_Terborch_1648.jpg", 
                            "wiki", 
                            "Westfaelischer_Friede_in_Muenster_(Gerard_Terborch_1648).jpg", 
                            "Ratification of the Treaty of Münster, 15 May 1648, <br/>1648, Gerard ter Borch, Dutch Republic");
insert_into_images("horsemen/Schuttersmaaltijd_ter_viering_van_de_Vrede_van_Munster_Rijksmuseum_SK-C-2.jpeg.jpeg", 
                            "wiki", 
                            "Schuttersmaaltijd_ter_viering_van_de_Vrede_van_Munster_Rijksmuseum_SK-C-2.jpeg", 
                            "Banquet at the Crossbowmen's Guild in Celebration of the Treaty of Munster, <br/>1648, Bartholomeus van der Helst, Dutch Republic");
insert_into_images("horsemen/Netherlands-4253_-_Drinking_Horn_-_Banquet_at_the_Crossbowmens_Guild_11715762574.jpg", 
                            "wiki", 
                            "Netherlands-4253_-_Drinking_Horn_-_Banquet_at_the_Crossbowmen%27s_Guild_(11715762574).jpg", 
                            "Detail showing a drinking horn decorated with a horseman on a rearing horse, Banquet at the Crossbowmen's Guild in Celebration of the Treaty of Munster, <br/>1648, Bartholomeus van der Helst, Dutch Republic");
insert_into_images("horsemen/La_plaza_del_mercado_de_Haarlem_durante_una_fiesta_por_Cornelis_Beelt.jpg", 
                            "wiki", 
                            "La_plaza_del_mercado_de_Haarlem_durante_una_fiesta,_por_Cornelis_Beelt.jpg", 
                            "Marketplace in Harlem during the celebration of the Treaty of Münster, <br/>1670-90, Cornelis Beelt, Dutch Republic");
insert_into_images("horsemen/Europe_in_1648_Peace_of_Westphalia.jpg", 
                            "wiki", 
                            "Europe_in_1648_(Peace_of_Westphalia).jpg", 
                            "Map of Europe by the end of 1648, <br/>1884, 'An Historical Atlas' by Robert H. Labberton");
insert_into_images("horsemen/Luperoncaballo.jpeg", 
                            "wiki", 
                            "Luperoncaballo.JPG", 
                            "Equestrian Statue of General Gregorio Luperón, <br/>1944 (?), Dominican Republic");
insert_into_images("horsemen/2017_Santiago_de_Chile_-_Estatua_Ecuestre_de_Jose_de_San_Martin_-_Avenida_Libertador_Bernardo_OHiggins.jpg", 
                            "wiki", 
                            "2017_Santiago_de_Chile_-_Estatua_Ecuestre_de_José_de_San_Martín_-_Avenida_Libertador_Bernardo_O%27Higgins.jpg", 
                            "Equestrian statue of José de San Martin, <br/>1859, Louis Joseph Daumas, Santiago de Chile, Chile");
insert_into_images("horsemen/drinking-horn-Guild-of-St-George-Rijksmuseum.jpg", 
                            "britannica.com", 
                            "https://www.britannica.com/topic/drinking-horn", 
                            "Silver drinking horn of the St. George or Crossbow Civic Guards, <br/>1566, Frederik Jans, Amsterdam, Netherlands");
insert_into_images("horsemen/Estatua_del_Libetador_Bernardo_Ohiggins.jpg", 
                            "wiki", 
                            "Estatua_del_Libetador_Bernardo_O%27higgins.JPG", 
                            "Equestrian statue of Bernardo O'Higgins, <br/>after 1957 (?), Chillán, Chile");
insert_into_images("horsemen/BernardoOHiggins.jpg", 
                            "ES", 
                            "o-higgins-bernardo-4", 
                            "Equestrian statue of Bernardo O'Higgins, <br/>1872, Albert-Ernest Carrier-Belleuse, Santiago de Chile, Chile");
insert_into_images("horsemen/shivajimemorialconcepte.jpg", 
                            "indianexpress.com", 
                            "https://indianexpress.com/article/india/for-shivaji-memorial-maharashtra-makes-sculpture-shorter-sword-taller-5261027/", 
                            "The heights of the sculpture of Chhatrapati Shivaji, original and reduced in 2018");
insert_into_images("horsemen/Shivaji-Poster-1.jpg", 
                            "roadsandkingdoms.com", 
                            "https://roadsandkingdoms.com/2018/the-statue-thats-splitting-mumbai/", 
                            "Equestrian statue of Chhatrapati Shivaji (digital rendering), <br/>to be completed in 2021 (?), Ram V. Sutar and Anil Sutar, Mumbai, India");
insert_into_images("horsemen/92d98cc2-41d7-452d-9bc9-d4507436c6b3.jpg", 
                            "SKD", 
                            "117542", 
                            "Automation with the figure of Saint George, <br/>cr. 1618-1622, Joachim Fries, Augsburg, Germany");
insert_into_images("horsemen/Saint_George_by_Jakob_Miller_the_elder.jpg", 
                            "wiki", 
                            "Saint_George,_by_Jakob_Miller_the_elder,_Augsburg,_c._1615_AD,_silver,_partly_gilt,_paint_-_Hessisches_Landesmuseum_Darmstadt_-_Darmstadt,_Germany_-DSC00506.jpg", 
                            "Automation with the figure of Saint George, <br/>cr. 1615, Jakob Miller the elder, Augsburg, Germany");
insert_into_images("horsemen/animals.png", 
                            "Sothebys", 
                            "2015/treasures-l15303/lot.13.html", 
                            "Parcel-gilt silver equestrian figure of St. George, <br/>cr. 1640, Melchior Gelb I, Augsburg, Germany");
insert_into_images("horsemen/download.png", 
                            "nationalmuseum.se", 
                            "http://emp-web-84.zetcom.ch/eMP/eMuseumPlus;jsessionid=F95C51C8F61DF39D983EB840D587518F.node1?service=direct/1/ResultDetailView/result.inline.list.t1.collection_list.$TspTitleImageLink.link&sp=13&sp=Sartist&sp=SelementList&sp=0&sp=0&sp=999&sp=SdetailView&sp=0&sp=Sdetail&sp=1&sp=T&sp=0&sp=SdetailList&sp=0&sp=T&sp=0#artistReferences", 
                            "Drinking cup/centrepiece, modelled as Gustavus Adolphus II King of Sweden, <br/>1644-1647, David Schwestermüller I, Augsburg, Germany");
insert_into_images("horsemen/DP258114-scaled.jpg", 
                            "Met", 
                            "186527", 
                            "Equestrian figure of Charles I Stuart, King of England, electrotype after a 1639-1649 original, <br/>19th century, Elkington & Co., Birmingham, United Kingdom");
insert_into_images("horsemen/le-lion-du-nord-gustave-adolp-___-silver.png", 
                            "Sothebys", 
                            "2008/european-silver-gold-boxes-and-objects-of-vertu-pf8013/lot.164.html", 
                            "Drinking cup/centrepiece modelled as Gustavus Adolphus II King of Sweden, <br/>1880, Germany");
insert_into_images("horsemen/60728.png", 
                            "Kremlin", 
                            "60728", 
                            "Drinking cup/centrepiece modelled as mounted warrior, <br/> Second half of the 17th century, Augsburg, Germany");
insert_into_images("horsemen/61288.png",
                            "Kremlin", 
                            "61288", 
                            "Drinking cup/centrepiece modelled as a horseman, <br/>1680-1684, Lorenz I Biller, Augsburg, Germany");
insert_into_images("horsemen/61290.png", 
                            "Kremlin", 
                            "61290", 
                            "Drinking cup/centrepiece modelled as Charles I Stuart, King of England, <br/>1639-1649, David Schwestermüller, Augsburg, Germany");
insert_into_images("horsemen/61389.png", 
                            "Kremlin", 
                            "61389", 
                            "Drinking cup/centrepiece modelled as a warrior on horseback, <br/>1673, Mannlich Heinrich, Augsburg, Germany");
insert_into_images("horsemen/baroque_rider-scaled.jpg", 
                            "veryimportantlot.com", 
                            "https://veryimportantlot.com/de/lot/view/monumentales-trinkspiel-eines-barocken-reiters-auf-237669", 
                            "A drinking game with a figure of a horseman, <br/>cr. 1900, Neresheimer, Hanau, Germany");
insert_into_images("horsemen/ANTIQUE_HORSEMAN_c1900.jpg", 
                            "PA", 
                            "sold-german/antique-20thc-german-solid-silver-pair-of-huge-knight-horseman-figures-c1900", 
                            "Solid silver pair of knight horseman figures, <br/>cr. 1900, Georg Roth & Co, Hanau, Germany");
insert_into_images("horsemen/20thC_SILVER_KNIGHT_c1910-01.jpg", 
                            "PA", 
                            "sold-german/antique-20thc-german-solid-silver-large-knight-horseman-figure-c1910", 
                            "Solid silver large knight horseman figure, <br/>cr. 1910, Germany");
insert_into_images("horsemen/2015_07_07_19_0124-6330.jpg", 
                            "PA", 
                            "sold-german/antique-20thc-german-solid-silver-pair-of-huge-knight-horseman-figures-c1920-2", 
                            "Solid silver pair of knight horseman figures, <br/>cr. 1920, Germany");
insert_into_images("horsemen/SIGISMUND.png", 
                            "The Granger Collection LTD", 
                            "https://www.granger.com/results.asp?inline=true&image=0165964&wwwflag=4&itemx=1", 
                            "Drinking horn belonging to Sigismund, Holy Roman Emperor (detail), <br/>cr. 1400, possibly a gift from the Order of Teutonic Knights");
insert_into_images("horsemen/otvos06.jpg", 
                            "hung-art.hu", 
                            "https://www.hung-art.hu/frames-e.html?/english/zmisc/otvosseg/index.html", 
                            "Drinking horn belonging to Sigismund, Holy Roman Emperor (detail), <br/>cr. 1400, possibly a gift from the Order of Teutonic Knights");
insert_into_images("horsemen/11767473_fullsize-scaled.jpg", 
                            "bukowskis.com", 
                            "https://www.bukowskis.com/en/auctions/E424/lots/1186752-a-german-silver-drinking-horn-jd-schleissner-sohne-hanau-around-1900", 
                            "Silver drinking horn, <br/>cr. 1900, JD Schleissner & Söhne, Hanau, Germany");
insert_into_images("horsemen/Holy_Roman_Empire_1648.png", 
                            "wiki", 
                            "Holy_Roman_Empire_1648.png", 
                            "Map of the Holy Roman Empire in 1648, after the Peace of Westphalia");
insert_into_images("horsemen/lh_presse_die_furie_auf_sprengendem_pferd_1610.jpg", 
                            "liebieghaus.de", 
                            "https://www.liebieghaus.de/en/exhibitions/white-wedding", 
                            "Fury on a Charging Horse, <br/>1610, Furienmeister, probably Salzburg, Austria");
insert_into_images("horsemen/AN00308777_001_l.jpg", 
                            "BM2", 
                            "H_1885-1113-9051-9060", 
                            "Inlaid floor tile showing Richard I (Coeur de Lion) in combat with his adversary Saladin, <br/>1250s, Chertsey Abbey, Chertsey, England");
insert_into_images("horsemen/AN00195539_001_l.jpg", 
                            "BM2", 
                            "H_1885-1113-9104", 
                            "Lead-glazed inlaid floor tile showing a knight on horseback, charging and firing a crossbow, <br/> 13th century, Chertsey Abbey, Chertsey, England");
insert_into_images("horsemen/AN00072823_001_l.jpg", 
                            "BM2", 
                            "H_1980-0307-28", 
                            "Lead-glazed inlaid floor tile showing a knight on horseback, <br/>1845-1860, Chertsey, England");
insert_into_images("horsemen/2016JB7015_jpg_l.jpg", 
                            "VA", 
                            "O314335", 
                            "A mounted Turk attacked by a Lion, <br/>cr. 1635-1640, Francesco Fanelli, Anglo-Italian");
insert_into_images("horsemen/2013GA0300_jpg_l.jpg", 
                            "VA", 
                            "O165191", 
                            "Medallion with St. George and the Dragon, <br/>late 15th - early 16th century, Germany");
insert_into_images("horsemen/2010EC8520_jpg_l.jpg", 
                            "VA", 
                            "O182762", 
                            "Porcelain group showing a naked boy sitting on a lion's skin on a galloping horse, <br/>ca. 1753-1755, Vauxhall porcelain factory, London, Great Britain");
insert_into_images("horsemen/2007BN4070_jpg_l.jpg", 
                            "VA", 
                            "O134010", 
                            "Impressed floor tile showing a knight on horsebacke, <br/>cr. 1250-75, Germany");
insert_into_images("horsemen/2006BB1006_jpg_l.jpg", 
                            "VA", 
                            "O119695", 
                            "The Conversion of St. Paul, <br/>ca. 1525, Giovanni Francesco Rustici, Italy");
insert_into_images("horsemen/2006AE5122_jpg_l.jpg", 
                            "VA", 
                            "O66313", 
                            "Henry IV destroying his enemies, <br/>ca. 1603, Barthélémy Prieur, France");
insert_into_images("horsemen/110781776_mediaitem110779426.jpg", 
                            "BBC", 
                            "https://www.bbc.com/news/uk-england-bristol-51383434", 
                            "George Medal awarded for saving Princess Anne from kidnap, <br/>1974, the U.K.");
insert_into_images("horsemen/164686-1297670079.jpg", 
                            "RC", 
                            "441144", 
                            "Great George (badge of the Order of the Garter), <br/>1775-1800, Belonged to King George III, the U.K.");
insert_into_images("horsemen/404246-1375178244.jpg", 
                            "RC", 
                            "442086", 
                            "Gold enamelled Great George of the Garter, <br/>19th century, the U.K.");
insert_into_images("horsemen/219382-1574427351.jpg", 
                            "RC", 
                            "442208", 
                            "Hat badge with St George and the dragon, <br/>cr. 1520, Flemish");
insert_into_images("horsemen/D9_QMhYX4AAOM39.jpeg", 
                            "@wabbey on twitter.com", 
                            "https://twitter.com/wabbey/status/1143861747989778433", 
                            "Inlaid tile showing a hunter on horseback and a dog, <br/>medieval, Chapter House, Westminster Abbey, London, U.K.");
insert_into_images("horsemen/GRUEBY.jpeg", 
                            "Bonhams", 
                            "16946/lot/2000", 
                            "Cuenca and cuerda seca floor tile depicting St George and the dragon, <br/>cr. 1900, Grueby Faience Company, U.S.A. ");
insert_into_images("horsemen/grueby-tile-knight-on-horse.jpeg", 
                            "@dinathequeenofeverything on wordpress.com", 
                            "https://dinathequeenofeverything.wordpress.com/2016/11/27/thanksgiving-made-great/", 
                            "Floor tile showing a knight on horseback (still decorating a floor), <br/>cr. 1910, Grueby Faience Company, U.S.A.");
insert_into_images("horsemen/140-on-tile-Grueby-Knight-web1200.jpg", 
                            "holtonframes.com", 
                            "https://www.holtonframes.com/portfolio-piece/grueby-knight-tile/", 
                            "Floor tile showing a knight on horseback (framed, on sale in a picture gallery), <br/>cr. 1910, Grueby Faience Company, U.S.A.");
insert_into_images("horsemen/Crusader_Image_on_Tile_in_the_Triforium_of_Temple_Church.jpg", 
                            "wiki", 
                            "Crusader_Image_on_Tile_in_the_Triforium_of_Temple_Church.jpg", 
                            "Inlaid floor tile showing a crusader, <br/>after 1185, Triforium of Temple Church, London, U.K.");
insert_into_images("horsemen/174tileRichardAndSaladinCXnice.jpg", 
                            "mfuller @ users.stlcc.edu", 
                            "http://users.stlcc.edu/mfuller/glastonburytiles.html", 
                            "An inlaid tile showing Richard I attacking Saladin, <br/>medieval, Glastonbury Abbey, U.K.");
insert_into_images("horsemen/princess-playing-polo-jodhpur.png", 
                            "Google", 
                            "ZAH6WqN3erBfRg", 
                            "Princess Playing Polo, <br/>18th century, Dana, Jodhpur, Mughal Empire");
insert_into_images("horsemen/Reims_-_basilique_Saint-Remi_dallage_22.jpeg", 
                            "wiki", 
                            "Reims_-_basilique_Saint-Remi,_dallage_(22).JPG", 
                            "Inlaid (limestone incrusted with lead) tile showing three knights (a scene from the Old Testament), <br/>13th century, Saint Eligius chapel, in the former Saint Nicasius church of Reims, Marne, France");
insert_into_images("horsemen/neath-tiles.jpg", 
                            "walesonline.co.uk", 
                            "https://www.walesonline.co.uk/lifestyle/nostalgia/welsh-history-month-neath-abbeys-3663534", 
                            "Inlaid tile showing the battle of Richard I and Saladin, <br/>cr. 1340, Neath Abbey, Wales, U.K.");
insert_into_images("horsemen/dsc_0011.jpg", 
                            "thehistoryjar.com", 
                            "https://thehistoryjar.com/2014/08/10/cleeve-abbey/", 
                            "Inlaid tile showing the battle of Richard I and Saladin, <br/>cr. 1250-70, Cleeve Abbey, Somerset, U.K.");
insert_into_images("horsemen/DH000256.png", 
                            "wrexham.com", 
                            "http://www.wrexham.com/news/medieval-treasures-show-wrexham-museum-4758.html", 
                            "Inlaid tiles showing the battle of Richard I and Saladin, <br/>cr. 1340, Neath Abbey, Wales, U.K.");
insert_into_images("horsemen/Carreau_medieval_Laon_030208_06.jpg", 
                            "wiki", 
                            "Carreau_médiéval_Laon_030208_06.jpg", 
                            "Inlaid tile showing a hunter with a dog, <br/>13th-15th century, Laon region, France");
insert_into_images("horsemen/7985782539_c402a1445a_b.jpg", 
                            "historienerrant @ wordpress.com", 
                            "https://historienerrant.wordpress.com/2012/09/14/thirteenth-century-floor-tiles-at-cleeve-abbey-and-elsewhere/", 
                            "Inlaid tiles showing the battle of Richard I and Saladin, <br/>cr. 1250-70, Cleeve Abbey, Somerset, U.K");
insert_into_images("horsemen/04-000341.jpg", 
                            "RMN", 
                            "04-000341-2C6NU04XY4F7", 
                            "Inlaid tile showing a horseman brandishing a spear, <br/>15th century, Burgundy, France");
insert_into_images("horsemen/Schlacht_am_Weissen_Berg_C-K_063.jpg", 
                            "wiki", 
                            "Schlacht_am_Weißen_Berg_C-K_063.jpg", 
                            "Battle of White Mountain, <br/>1620, Peter Snayers, Flemish");
insert_into_images("horsemen/White_mountain_detail.png", 
                            "wiki", 
                            "Schlacht_am_Weißen_Berg_C-K_063.jpg", 
                            "Battle of White Mountain (detail), <br/>1620, Peter Snayers, Flemish");
insert_into_images("horsemen/Albrecht_Altdorfer_044.jpg", 
                            "wiki", 
                            "Albrecht_Altdorfer_044.jpg", 
                            "Triumph of Emperor Maximilian I, detail: Imperial banner and Imperial sword, <br/>1513-15, Albrecht Altdorfer, Bavaria, Germany");
insert_into_images("horsemen/Bataille_entre_mongols__chinois.jpeg", 
                            "wiki", 
                            "Bataille_entre_mongols_%26_chinois_(1211).jpeg", 
                            "Battle between Chinese and Mongolian armies (1211), illustration of Jami' al-tawarikh, <br/>1430, Sayf al-Vâhidî, Herat, Persia");
insert_into_images("horsemen/SC194553.jpg", 
                            "MFA", 
                            "148654", 
                            "Hunting Scene: Prince and Princess on Horseback, <br/>18th century, Mughal Empire");
insert_into_images("horsemen/Archery_Competition-Mughal-India.jpg", 
                            "wiki", 
                            "Archery_Competition-Mughal-India.jpg", 
                            "Archery Competition, <br/>cr. 1600, Mughal Empire");
insert_into_images("horsemen/2009BX3652_2500.jpg", 
                            "VA", 
                            "O9298", 
                            "The victory of Khan Zaman (Ali Quli Khan) over the Afghans on the banks of the river Jumna in 1561, illustration of Akbarnama (Book of Akbar), <br/>cr. 1590-95, Kanha and Khiman Sangtarash, Mughal Empire");
insert_into_images("horsemen/2013GJ0286_2500.jpg", 
                            "VA", 
                            "O433463", 
                            "Mughal noble on horseback, <br/>cr. 1790, Mughal Empire");
insert_into_images("horsemen/FS-5809_03.jpg", 
                            "asia.si.edu", 
                            "https://asia.si.edu/object/F1907.197/", 
                            "A Prince and princess on horseback, <br/>18th century, Mughal Empire");
insert_into_images("horsemen/Battle_of_Mohacs.jpg", 
                            "wiki", 
                            "Battle_of_Mohács.jpg", 
                            "Battle of Mohács, <br/>16th century, Ottoman Empire");
insert_into_images("horsemen/Duel_before_the_Battle_of_Mohacs.jpg", 
                            "wiki", 
                            "Duel_before_the_Battle_of_Mohács.jpg", 
                            "Duel before the Battle of Mohács, <br/>16th century, Ottoman Empire");
insert_into_images("horsemen/Suleiman_I_after_the_victory_at_Mohacs.jpg", 
                            "wiki", 
                            "Suleiman_I_after_the_victory_at_Mohács.jpg", 
                            "Suleiman I after the victory at Mohács, <br/>16th century, Ottoman Empire");
insert_into_images("horsemen/Surname-i_huemayun_gazi.jpg", 
                            "wiki", 
                            "Surname-i_huemayun_gazi.jpg", 
                            "Parade of two riding Gazi (veterans from Rumelia) in front of Sultan Murat III, <br/>16th century, Nakkaş Osman and/or other painters of the Nakkaşhane, Ottoman Empire");
insert_into_images("horsemen/Battle_at_Lipova_1551.jpg", 
                            "wiki", 
                            "Battle_at_Lipova,_1551.jpg", 
                            "Battle_at_Lipova, 1551, <br/>second half of the 16th century, Ottoman Empire");
insert_into_images("horsemen/Topkapi_Sarayi.jpg", 
                            "wiki", 
                            "Topkapı_Sarayı.jpg", 
                            "Topkapi palace, <br/>1523, Istanbul, Ottoman Empire");
insert_into_images("horsemen/Dinastia_han_lastra_parietale_a_uso_funerario_con_scena_di_caccia_206_a.c.-220_dc._ca_02.jpeg", 
                            "wiki", 
                            "Dinastia_han,_lastra_parietale_a_uso_funerario_con_scena_di_caccia,_206_a.c.-220_dc._ca,_02.JPG", 
                            "Grave stelae with a hunting scene, Han dynasty, <br/>cr. 206 BC-220 AD, China");
insert_into_images("horsemen/Drawing-landscape-scenes-chariot-canopy-fitting-Hebei.jpg", 
                            "Encyclopædia Britannica", 
                            "https://www.britannica.com/art/Chinese-painting/images-videos", 
                            "Landscape scene from a bronze fitting of a chariot canopy, <br/>cr. 2nd – 1st century BC, Dingxian, Hebei province, China");
insert_into_images("horsemen/Polo-player-detail-Xianyang-mural-tomb-ad.jpg", 
                            "Encyclopædia Britannica", 
                            "https://www.britannica.com/art/Chinese-painting/images-videos", 
                            "Polo player, detail of a mural from the tomb of Li Xian (the crown prince Zhanghuai), <br/>706, near Xianyang, Shaanxi province, China");
insert_into_images("horsemen/Journey-Minghuang-Shu-ink-colour-silk-style.jpg", 
                            "comuseum.com", 
                            "https://www.comuseum.com/painting/masters/li-zhaodao/emperor-minghuangs-journey-to-shu/", 
                            "Emperor Minghuang’s Journey to Shu, <br/>early 8th century, Tang Empire (modern China)");
insert_into_images("horsemen/Theofilos_Palaiologos.jpg", 
                            "wiki", 
                            "Theofilos_Palaiologos.jpg", 
                            "Fall of Constantinople (1453), <br/>1932, Theophilos Hatzimihail, Greece");
insert_into_images("horsemen/Zama_battle.png", 
                            "© The Pushkin State Museum of Fine Arts", 
                            "https://pushkinmuseum.art/data/fonds/europe_and_america/j/1001_2000/zh_3144/index.php?lang=en", 
                            "The Battle of Zama (202 BC), <br/>last third of the 16th century, Rome, Italy");
insert_into_images("horsemen/16th-century_unknown_painters_-_The_Battle_of_the_Ticino_-_WGA23949.jpg", 
                            "wiki", 
                            "16th-century_unknown_painters_-_The_Battle_of_the_Ticino_-_WGA23949.jpg", 
                            "Battle of Ticinus (218 BC), <br/>1550s, Mantua, Italy");
insert_into_images("horsemen/Lempertz-1002-1117-Old-Masters-and-19th-Century-1000th-Auction-Master-of-the-Wuerzburg-Battle-follower-of-BATTLE-SCENE-WITH-LANDSQUENETS.jpg", 
                            "© 2020 Auction house Lempertz", 
                            "https://www.lempertz.com/en/catalogues/lot/1002-1/1117-master-of-the-wuerzburg-battle-follower-of.html", 
                            "Battle scene with landsquenets, <br/>cr. 1525-30, South Germany");
insert_into_images("horsemen/Autor_nieznany.jpg", 
                            "wiki", 
                            "Autor_nieznany_(malarz_z_kręgu_Lukasa_Cranacha_Starszego),_Bitwa_pod_Orszą.jpg", 
                            "Battle of Orsha (1514), <br/>cr. 1524-30, Hans Krell, Germany");
insert_into_images("horsemen/4.jpg", 
                            "The Metropolitan Museum of Art", 
                            "https://www.metmuseum.org/blogs/now-at-the-met/2018/delacroix-conversation-asher-miller", 
                            "Collision of Arab Horsemen, <br/>cr. 1833–34, Eugène Delacroix, France");
insert_into_images("horsemen/rom2019_17003_1.jpg", 
                            "Royal Ontario Museum", 
                            "https://www.rom.on.ca/en/blog/safavid-tile-project-iv-the-artist-behind-the-arches", 
                            "Cuerda seca tile Arch, <br/>cr. 1685, Isfahan, Iran");
insert_into_images("horsemen/DT614.jpg", 
                            "Met", 
                            "337487", 
                            "Otto, Count of Nassau and his Wife Adelheid van Vianen (a tapestry design), <br/>1530–35, Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/92-003541.jpg", 
                            "RMN", 
                            "92-003487-02-2C6NU0H1TOHQ", 
                            "A tapestry 'The month of December, capricorn: attack of the wild boar' from the series 'The Hunting of Maximilian' called 'Beautiful hunts of Guise', <br/>cr. 1530, after Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/92-003487-02.jpg", 
                            "RMN", 
                            "92-003541-2C6NU0H1L6KR", 
                            "A tapestry 'The month of March, aries: the departure for bird hunting' from the series 'The Hunting of Maximilian' called 'Beautiful hunts of Guise', <br/>cr. 1530, after Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/91-005181-02.jpg", 
                            "RMN", 
                            "91-005181-02-2C6NU0H40BF7", 
                            "A tapestry design 'The cavalry attack and the assault of the arquebusiers' from the series 'The Battle of Pavia', <br/>16th century, Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/90-003788.jpg", 
                            "RMN", 
                            "90-003788-2C6NU0H407AU", 
                            "A tapestry design 'The month of December, capricorn: attack of the wild boar' from the series 'The Hunting of Maximilian' called 'Beautiful hunts of Guise', <br/>cr. 1530, after Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/09-562706.jpg", 
                            "RMN", 
                            "09-562706-2C6NU0K1R6CR", 
                            "A tapestry design 'Allegory of September: deer hunting, the boat' from the series 'The Hunting of Maximilian' called 'Beautiful hunts of Guise', <br/>cr. 1530, after Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/12-507650.jpg", 
                            "RMN", 
                            "12-507650-2C6NU0ZSC7KM", 
                            "Rider on a rearing horse, in a wooded area, <br/>16th century, after Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/bernart_von_orley_arazzi_della_battaglia_di_pavia_attacco_alla_gendarmeria_francese_IGMN144483_1526-31.jpeg", 
                            "wiki", 
                            "Manif._di_bruxelles_su_dis.di_bernart_von_orley,_arazzi_della_battaglia_di_pavia,_attacco_alla_gendarmeria_francese,_IGMN144483,_1526-31.JPG", 
                            "The advance of the imperial army and attack on the French gendarmerie led by Francis I, the first of the seven tapestries representing the Battle of Pavia, <br/>1528-31, Bernard van Orley, Brussels, Flanders");
insert_into_images("horsemen/bernart_von_orley_arazzi_della_battaglia_di_pavia_fuga_dei_francesi_e_diniego_degli_svizzeri_IGMN144485_1526-31.jpeg", 
                            "wiki", 
                            "Manif._di_bruxelles_su_dis.di_bernart_von_orley,_arazzi_della_battaglia_di_pavia,_fuga_dei_francesi_e_diniego_degli_svizzeri,_IGMN144485,_1526-31.JPG", 
                            "The escape of the French army and retreat of Duke D'Aleçon beyond Ticino, the sixth of the seven tapestries representing the Battle of Pavia, <br/>1528-31, Bernard van Orley, Brussels, Flanders");

insert_into_images("horsemen/Stag_hunt_Franco-Flemish_Gothic_mille-fleurs_tapestry_woven_c._1500_AD_-_Hearst_Castle_-_DSC06346.jpg", 
                            "wiki", 
                            "Stag_hunt,_Franco-Flemish_Gothic,_mille-fleurs_tapestry,_woven_c._1500_AD_-_Hearst_Castle_-_DSC06346.JPG", 
                            "Stag hunt mille-fleurs tapestry, <br/>cr. 1500, Franco-Flemish");
insert_into_images("horsemen/La_guerre_contre_Gondebaud_et_Alaric_II.jpg", 
                            "wiki", 
                            "La_guerre_contre_Gondebaud_et_Alaric_II.jpg", 
                            "The War with Gondebaud (tapestry series 'The History of Clovis'), <br/>15th century, Arras, France");
insert_into_images("horsemen/Wandbehang_makffm_6809_05.jpg", 
                            "wiki", 
                            "Wandbehang_makffm_6809_05.jpg", 
                            "Love Story of William of Orlens and the King of England's daughter Amelie, <br/>cr. 1410-30, Middle Rhine region, Germany");
insert_into_images("horsemen/ps1_829_vwc_dd_t10.jpg", 
                            "WAM", 
                            "610", 
                            "Meleager and Atalanta Setting Out to Hunt the Calydonian Boar, <br/>cr. 1475, Netherlandish or Flemish");
insert_into_images("horsemen/Sarcofago_con_caccia_calidoniaII-III_sec._01.jpg", 
                            "wiki", 
                            "Sarcofago_con_caccia_calidonia,II-III_sec._01.JPG", 
                            "Sarcophagus with relief depicting the hunt for the Calydonian boar, <br/>201-250 AD, Roman");
insert_into_images("horsemen/Sarcofago_13_di_fedra_e_ippolito_riutilizzato_per_beatrice_di_lotaringia_fine_II_sec._01.jpeg", 
                            "wiki", 
                            "Sarcofago_13_di_fedra_e_ippolito_riutilizzato_per_beatrice_di_lotaringia_(fine_II_sec.),_01.JPG", 
                            "Sarcophagus with scenes of myth of Phaedra and Hippolytus, <br/>cr. 180 AD, Roman");
insert_into_images("horsemen/1ere_chargeDreux.jpg", 
                            "wiki", 
                            "1ere_chargeDreux.jpg", 
                            "First attack of the battle of Dreux, series 'Quarante Tableaux', <br/>1570, Jacques Tortorel and Jean Perrissin, Lion, France and Geneve, Switzerland");
insert_into_images("horsemen/so_von_dem_Barbarossen_vertrieben_mit_kriegsrustun_RP-P-OB-78.784-2.jpg", 
                            "RJK", 
                            "RP-P-OB-78.784-2", 
                            "Skirmish between the Turks and the Imperial Troops, series 'Journey from Charles V to Tunis, 1535', <br/>1574-78, Frans Hogenberg, after Jan Cornelisz Vermeyen, Cologne, Germany");
insert_into_images("horsemen/so_von_dem_Barbarossen_vert_RP-P-OB-78.784-5.jpg", 
                            "RJK", 
                            "RP-P-OB-78.784-5", 
                            "Turks kneel before Charles V, series 'Journey from Charles V to Tunis, 1535', <br/>1570-74, Frans Hogenberg, after Jan Cornelisz Vermeyen, Cologne, Germany");
insert_into_images("horsemen/Van_Eyck_-_The_Crucifixion_The_Last_Judgment.jpg", 
                            "wiki", 
                            "Van_Eyck_-_The_Crucifixion;_The_Last_Judgment.jpg", 
                            "The Crucifixion and The Last Judgment, diptych, <br/>cr. 1430, Jan van Eyck, Netherlandish");
insert_into_images("horsemen/Van_eyck_crucifixion.png", 
                            "wiki", 
                            "Van_Eyck_-_The_Crucifixion;_The_Last_Judgment.jpg", 
                            "The Crucifixion and The Last Judgment, diptych (detail), <br/>cr. 1430, Jan van Eyck, Netherlandish");
insert_into_images("horsemen/530.jpg", 
                            "Museum of Fine Arts, Budapest", 
                            "https://www.mfab.hu/artworks/the-way-to-calvary-2/", 
                            "The Way to Calvary, <br/>cr. 1505–15, Jan van Eyck (after), Netherlandish");
insert_into_images("horsemen/Van_eyck_calvary.png", 
                            "Museum of Fine Arts, Budapest", 
                            "https://www.mfab.hu/artworks/the-way-to-calvary-2/", 
                            "The Way to Calvary (detail), <br/>cr. 1505–15, Jan van Eyck (after), Netherlandish");
insert_into_images("horsemen/Folio_51v_-_The_Meeting_of_the_Magi.jpg", 
                            "wiki", 
                            "Folio_51v_-_The_Meeting_of_the_Magi.jpg", 
                            "The Meeting of the Magi, illustration of The Very Rich Hours of the Duke of Berry, Folio 51, verso, <br/>1485-89, Jean Colombe, Paris, France");
insert_into_images("horsemen/66009039_1_x.jpg", 
                            "antiquesandthearts.com", 
                            "https://www.antiquesandthearts.com/millea-bros-closes-thaw-collection-with-2-1-million-weekend/", 
                            "'The Emperor Charles V at a hawking party', tapestry design, <br/>cr. 1535, Bernard Van Orley, Flemish/Netherlandish");
insert_into_images("horsemen/mayuan.jpeg", 
                            "wiki", 
                            "伏波山.JPG", 
                            "Statue of Ma Yuan, <br/>Guilin, China");
insert_into_images("horsemen/Cheung_Fei_Temple_Shau_Kei_Wan_09.jpg", 
                            "wiki", 
                            "Cheung_Fei_Temple_Shau_Kei_Wan_09.jpg", 
                            "Statue of Zhang Fei, Zhang Fei temple, <br/>cr. 1981, Shau Kei Wan, Hong Kong");
insert_into_images("kacheli_project-732454-732568.jpg", 
                            "lurkmo.re", 
                            "http://lurkmo.re/%D0%A4%D0%B0%D0%B9%D0%BB:Swing_project.png", 
                            "Что хотел клиент");
insert_into_images("horsemen/Ride-horse.jpg", 
                            "VWPics via Redux and earthjustice.org", 
                            "https://earthjustice.org/news/press/2020/judge-orders-dakota-access-pipeline-to-shut-down", 
                            "Stevana Salazar rides with Arlo Standing Bear, <br/>26 August 2016, photo by Terray Sylvester, Standing Rock camp, Dakota, U.S.A.");
}
?>
