SELECT conference_porte.libelleporte AS Libellé portée conférence ,
COUNT(publi_conf.publinum) AS Nbre_publi FROM conference_porte 
JOIN conferences ON conference_porte.porteconf = conferences.porteconf
JOIN publi_conf ON publi_conf.codconf = conferences.codconf
GROUP BY conference_porte.libelleporte ; 

